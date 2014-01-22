<?php 
class Member extends MY_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->library('session');
        $this->load->library('tank_auth');
        $this->load->library('form_validation');
        parent::list_city();
        parent::list_district();
    }
    function change_email()
	{
		if (!$this->tank_auth->is_logged_in()) {								// not logged in or not activated
			redirect('/dang-nhap');

		} else {
		  $this->load->model('memberhomemodel');
          $this->data['userdetail']=$this->memberhomemodel->user_detail($this->session->userdata('user_id'));
		  if($this->input->post('SubmitEmail'))
          {
    			$this->form_validation->set_rules('password', 'Password', 'trim|required|xss_clean');
    			$this->form_validation->set_rules('email', 'Email', 'trim|required|xss_clean|valid_email');
    
    			$this->data['errors'] = array();
    
    			if ($this->form_validation->run()) {
    		// validation ok
    				if (!is_null($data = $this->tank_auth->set_new_email(
    						$this->form_validation->set_value('email'),
    						$this->form_validation->set_value('password')))) {			// success
    
    					$data['site_name'] = $this->config->item('website_name', 'tank_auth');
    
    					// Send email with new email address and its activation link
    					$this->_send_email('change_email', $data['new_email'], $data);
    
    					$this->_show_message(sprintf($this->lang->line('auth_message_new_email_sent'), $data['new_email']));
                      
    
    				} else {
    					$errors = $this->tank_auth->get_error_message();
    					foreach ($errors as $k => $v)	$this->data['errors'][$k] = $this->lang->line($v);
    				}
    			}
            }
            if($this->input->post('SubmitPassword'))
            {
                $this->form_validation->set_rules('old_password', 'Old Password', 'trim|required|xss_clean');
    			$this->form_validation->set_rules('new_password', 'New Password', 'trim|required|xss_clean|min_length['.$this->config->item('password_min_length', 'tank_auth').']|max_length['.$this->config->item('password_max_length', 'tank_auth').']|alpha_dash');
    			$this->form_validation->set_rules('confirm_new_password', 'Confirm new Password', 'trim|required|xss_clean|matches[new_password]');
    
    			$this->data['errors'] = array();
    
    			if ($this->form_validation->run()) {								// validation ok
    				if ($this->tank_auth->change_password(
    						$this->form_validation->set_value('old_password'),
    						$this->form_validation->set_value('new_password'))) {	// success
    					$this->_show_message($this->lang->line('auth_message_password_changed'));
    
    				} else {														// fail
    					$errors = $this->tank_auth->get_error_message();
    					foreach ($errors as $k => $v)	$this->data['errors'][$k] = $this->lang->line($v);
    				}
    			}
            }
            if($this->input->post('SubmitInfo'))
            {
                
                $data_user = array(
                'full_name'=>$this->input->post('FullName'),
                'birthday'=>$this->input->post('AllDay').'/'.$this->input->post('AllMonth').'/'.$this->input->post('AllYear'),
                'sex'=>$this->input->post('Gender'),
                'address'=>$this->input->post('Address'),
                'phone'=>$this->input->post('Mobile2'),
                'company'=>$this->input->post('CompanyName'),
                'website'=>$this->input->post('Website')
                );
                
                $this->memberhomemodel->update_userinfo($this->session->userdata('user_id'),$data_user);
            }
            if($this->input->post('SubmitLogo'))
            {
                $this->load->library('upload');
                $image_upload_folder = $_SERVER['DOCUMENT_ROOT'] . ROT_DIR . 'file/uploads/avatar';
                if (!file_exists($image_upload_folder)) {
                    mkdir($image_upload_folder, DIR_WRITE_MODE, true);
                }
                $this->upload_config = array(
                    'upload_path' => $image_upload_folder,
                    'allowed_types' => 'png|jpg|jpeg|bmp|tiff',
                    'max_size' => 2048,
                    'remove_space' => true,
                    'encrypt_name' => true,
                    );
                $this->upload->initialize($this->upload_config);
                if (!$this->upload->do_upload()) {
                    $data['error_file'] = $this->upload->display_errors();
                    $file = '';
                } else {
                    $file_info = $this->upload->data();
                }
                if (!empty($file_info)) {
                    $file = $file_info['file_name'];
                }
                $data_td['img'] = $file;
                $this->memberhomemodel->update_userinfo($this->session->userdata['user_id'],$data_td);
            }
            $this->data['main_content']='member/change_info';
			$this->load->view('home_layout/member/user_index_layout', $this->data);
		}
	}
    
	/**
	 * Show info message
	 *
	 * @param	string
	 * @return	void
	 */
	function _show_message($message)
	{
		$this->session->set_flashdata('message', $message);
		redirect('/');
	}

	/**
	 * Send email message of given type (activate, forgot_password, etc.)
	 *
	 * @param	string
	 * @param	string
	 * @param	array
	 * @return	void
	 */
	function _send_email($type, $email, &$data)
	{
	   $this->load->library('email');
	     $this->load->library('maillinux');
		$from = $this->email->from($this->config->item('webmaster_email', 'tank_auth'), $this->config->item('website_name', 'tank_auth'));
		$reply_to = $this->email->reply_to($this->config->item('webmaster_email', 'tank_auth'), $this->config->item('website_name', 'tank_auth'));
		//$this->email->to($email);
		$subject = 'Change Email';
		$messsage = $this->load->view('email/'.$type.'-html', $data, TRUE);
        $this->maillinux->SendMail($from,$email,$subject,$messsage);
		
	}
    function reset_email()
	{
		$user_id		= $this->uri->segment(2);
		$new_email_key	= $this->uri->segment(3);

		// Reset email
		if ($this->tank_auth->activate_new_email($user_id, $new_email_key)) {	// success
			$this->tank_auth->logout();
			$this->_show_message($this->lang->line('auth_message_new_email_activated').' '.anchor('/auth/login/', 'Login'));

		} else {																// fail
			$this->_show_message($this->lang->line('auth_message_new_email_failed'));
		}
	}
    public function du_property_luu()
    {
        $this->load->model('propertyhomemodel');
        $this->load->helper('url');
        $config['uri_segment'] = 5;
        $page = $this->uri->segment(4);
        
        $config['per_page'] = 12;
        $config['total_rows'] = $this->propertyhomemodel->count_property_save();
        if ($page == '') {
            $page = 1;
        }
        $page1 = ($page - 1) * $config['per_page'];
       
        if (!is_numeric($page)) {
            show_404();
            exit;
        }
       
       $num_pages = ceil($config['total_rows']/ $config['per_page']);
       $array_sv = $this->propertyhomemodel->list_property_save($config['per_page'], $page1);
      
       $this->data['total_page'] = $num_pages;
       $this->data['offset'] = $page1;
       $this->data['page']=$page;
       $this->data['total']=$config['total_rows'];
       $this->data['list']=$array_sv;
       $this->data['main_content']='member/list_tai_san_luu';
       $this->load->view('home_layout/member/user_index_layout',$this->data);
    }
    public function tin_tuc_luu()
    {
        $this->load->model('newshomemodel');
        $this->load->helper('url');
        $config['uri_segment'] = 5;
        $page = $this->uri->segment(4);
       
        $config['per_page'] = 12;
        $config['total_rows'] = $this->newshomemodel->get_count_new_save();
        if ($page == '') {
            $page = 1;
        }
        $page1 = ($page - 1) * $config['per_page'];
       
        if (!is_numeric($page)) {
            show_404();
            exit;
        }
       
       $num_pages = ceil($config['total_rows']/ $config['per_page']);
       $array_sv = $this->newshomemodel->get_list_new_save($config['per_page'], $page1);
      
       $this->data['total_page'] = $num_pages;
       $this->data['offset'] = $page1;
       $this->data['page']=$page;
       $this->data['total']=$config['total_rows'];
       $this->data['list']=$array_sv;
       $this->data['main_content']='member/list_tin_tuc_luu';
       $this->load->view('home_layout/member/user_index_layout',$this->data);
    }
    public function project_save()
    {
        $this->load->model('projecthomemodel');
        $this->load->helper('url');
        $config['uri_segment'] = 5;
        $page = $this->uri->segment(4);
        
        $config['per_page'] = 12;
        $config['total_rows'] = $this->projecthomemodel->count_save();
        if ($page == '') {
            $page = 1;
        }
        $page1 = ($page - 1) * $config['per_page'];
       
        if (!is_numeric($page)) {
            show_404();
            exit;
        }
       
       $num_pages = ceil($config['total_rows']/ $config['per_page']);
       $array_sv = $this->projecthomemodel->get_list_project_save($config['per_page'], $page1);
      
       $this->data['total_page'] = $num_pages;
       $this->data['offset'] = $page1;
       $this->data['page']=$page;
       $this->data['total']=$config['total_rows'];
       $this->data['list']=$array_sv;
       $this->data['main_content']='member/list_project_luu';
       $this->load->view('home_layout/member/user_index_layout',$this->data);
    }
    public function tai_san_dang_moi()
    {
        $this->load->model('propertyhomemodel');
            $this->load->model('memberhomemodel');
        if($this->input->post())
        {
            $data_save = array();
            $data_save = array(
            'loai_tin'=>$this->input->post('TinDang'),
            'loai_dia_oc'=>$this->input->post('DioTypeList'),
            'vi_tri_dia_oc'=>$this->input->post('DioLineList'),
            'id_city'=>$this->input->post('CityListMember'),
            'id_district'=>$this->input->post('DistrictListMember'),
            'dia_chi'=>$this->input->post('HouseNumber'),
            'price'=>$this->input->post('PriceMain'),
            'asset'=>$this->input->post('AssetUnitList'),
            'dien_tich'=>$this->input->post('DTSD'),
            'chieu_ngang_truoc'=>$this->input->post('DTKVWidth'),
            'chieu_dai'=>$this->input->post('DTKVLength'),
            'xd_chieu_ngang_truoc'=>$this->input->post('DTXDWidth'),
            'xd_chieu_dai'=>$this->input->post('DTXDLength'),
            'tinh_trang_phap_ly'=>$this->input->post('DioStateLegalList'),
            'huong'=>$this->input->post('DioDirectionList'),
            'so_lau'=>$this->input->post('NumberOfFloorList'),
            'so_phong_khach'=>$this->input->post('NumberOfLivingRoomList'),
            'so_phong_ngu'=>$this->input->post('NumberOfBedRoomList'),
            'so_phong_tam_wc'=>$this->input->post('NumberOfWCList'),
            'phong_khac'=>$this->input->post('NumberOfRelaxRoomList'),
            'content'=>$this->input->post('Detail'),
            'title'=>$this->input->post('Title'),
            'moi_gioi'=>$this->input->post('MoiGioi')
            );
            if($this->input->post('TinDang')==2)
            {
                $data_save['loai_hinh']=3;
            }
            else
            {
                if($this->input->post('MoiGioi')==1)
                {
                    $data_save['loai_hinh']=1;
                }
                
            }
            if($this->input->post('MoiGioi') && $this->input->post('MoiGioi')==2)
            {
                $data_save['loai_hinh']=2;
                $data_save['phi_ky_gui']=$this->input->post('FeeConsign');
            }
            if($this->input->post('fea_1') && $this->input->post('fea_1') == 1)
                {
                    $data_save['day_du_tien_nghi'] = 1;
                }
                else
                {
                    $data_save['day_du_tien_nghi'] = 0;
                }
                if($this->input->post('fea_6') && $this->input->post('fea_6') == 1)
                {
                    $data_save['cho_de_xe_hoi'] = 1;
                }
                else
                {
                    $data_save['cho_de_xe_hoi'] = 0;
                }
                if($this->input->post('fea_7') && $this->input->post('fea_7') == 1)
                {
                    $data_save['san_vuon'] = 1;
                }
                else
                {
                    $data_save['san_vuon'] = 0;
                }
                 if($this->input->post('fea_8') && $this->input->post('fea_8') == 1)
                {
                    $data_save['ho_boi'] = 1;
                }
                else
                {
                    $data_save['ho_boi'] = 0;
                }
                 if($this->input->post('fea_14') && $this->input->post('fea_14') == 1)
                {
                    $data_save['tien_kinh_doanh'] = 1;
                }
                else
                {
                    $data_save['tien_kinh_doanh'] = 0;
                }
                if($this->input->post('fea_20') && $this->input->post('fea_20') == 1)
                {
                    $data_save['tien_de_o'] = 1;
                }
                else
                {
                    $data_save['tien_de_o'] = 0;
                }
                if($this->input->post('fea_21') && $this->input->post('fea_21') == 1)
                {
                    $data_save['tien_lam_van_phong'] = 1;
                }
                else
                {
                    $data_save['tien_lam_van_phong'] = 0;
                }
                if($this->input->post('fea_23') && $this->input->post('fea_23') == 1)
                {
                    $data_save['tien_cho_san_xuat'] = 1;
                }
                else
                {
                    $data_save['tien_cho_san_xuat'] = 0;
                }
                if($this->input->post('fea_24') && $this->input->post('fea_24') == 1)
                {
                    $data_save['cho_sinh_vien_thue'] = 1;
                }
                else
                {
                    $data_save['cho_sinh_vien_thue'] = 0;
                }
            if($this->input->post('DTKVWidthBehind'))
            {
                $data_save['chieu_ngang_sau'] = $this->input->post('DTKVWidthBehind');
            }
            if($this->input->post('DTXDWidthBehind'))
            {
                $data_save['xd_chieu_ngang_sau'] = $this->input->post('DTXDWidthBehind');
            }
            if($this->input->post('ProjectListMember') && $this->input->post('ProjectListMember') !='')
            {
                $data_save['id_duan'] =$this->input->post('ProjectListMember');
            }
            $data_save['id_user']=$this->session->userdata('user_id');
            $data_save['status']=0;
            $data_save['create_date']=strtotime('now');
            if($this->input->post('SubmitNew'))
            {
                $this->propertyhomemodel->insert($data_save);
                redirect('/thanh-vien/tai-san-dang-moi');
            }
            else
            {
                $this->propertyhomemodel->insert_tmp($data_save);
                redirect('/thanh-vien/tai-san-dang-moi');
            }
            
        }
        else
        {
            
            $this->data['userdetail']=$this->memberhomemodel->user_detail($this->session->userdata('user_id'));
            $this->data['loai_dia_oc']=$this->propertyhomemodel->list_loai_dia_oc_member();
            $this->data['list_vi_tri'] = $this->propertyhomemodel->list_vt_dia_oc_member();
            $this->data['list_tinh'] = $this->propertyhomemodel->list_tinh_member();
            $this->data['list_phap_ly'] = $this->propertyhomemodel->list_phap_ly();
            $this->data['list_huong'] = $this->propertyhomemodel->list_huong();
            $this->data['list_pn'] = $this->propertyhomemodel->list_pn();
            $this->data['main_content']='member/dang_tai_san';
            $this->load->view('home_layout/member/user_index_layout',$this->data);
        }
    }
    public function ajax_get_district($id)
    {
        $this->load->model('propertyhomemodel');
        $this->data['list_district']=$this->propertyhomemodel->list_district_by_city($id);
        $this->load->view('member/ajax_list_district',$this->data);
    }
    public function ajax_get_ward($id)
    {
        $this->load->model('propertyhomemodel');
        $this->data['list_ward']=$this->propertyhomemodel->list_ward_by_district($id);
        $this->load->view('member/ajax_list_ward',$this->data);
    }
    public function get_project_by_district($id_district,$id_city)
    {
        $this->load->model('propertyhomemodel');
        $this->data['list_project']=$this->propertyhomemodel->list_project_by_district($id_district,$id_city);
        $this->load->view('member/ajax_list_project',$this->data);
    }
    public function dang_hien_thi()
    {
        $this->load->model('propertyhomemodel');
        $this->data['list_tinh'] = $this->propertyhomemodel->list_tinh_member();
        $this->load->helper('url');
        $config['uri_segment'] = 5;
        $page = $this->uri->segment(4);
        $id_user = $this->session->userdata('user_id');
        $config['per_page'] = 12;
        $config['total_rows'] = $this->propertyhomemodel->count_property_available($id_user);
        if ($page == '') {
            $page = 1;
        }
        $page1 = ($page - 1) * $config['per_page'];
       
        if (!is_numeric($page)) {
            show_404();
            exit;
        }
       
       $num_pages = ceil($config['total_rows']/ $config['per_page']);
       $array_sv = $this->propertyhomemodel->list_property_available($id_user,$config['per_page'], $page1);
      
       $this->data['total_page'] = $num_pages;
       $this->data['offset'] = $page1;
       $this->data['page']=$page;
       $this->data['total']=$config['total_rows'];
       $this->data['list']=$array_sv;
       $this->data['main_content']='member/list_tai_san_available';
       $this->load->view('home_layout/member/user_index_layout',$this->data);
    }
    public function dang_hien_thi_search()
    {
        $this->load->model('propertyhomemodel');
        $this->data['list_tinh'] = $this->propertyhomemodel->list_tinh_member();
        $this->load->helper('url');
        $config['uri_segment'] = 5;
        $page = $this->uri->segment(4);
        $id_user = $this->session->userdata('user_id');
        $config['per_page'] = 12;
        $sql="SELECT property.*,loai_dia_oc.name as loai_dia_oc,loai_dia_oc.id as id_ldo
        FROM property
        
        LEFT JOIN loai_dia_oc
        ON property.loai_dia_oc = loai_dia_oc.id
        WHERE property.id_user = $id_user AND property.status = 1
        ";
        
        if ($page == '') {
            $page = 1;
        }
        
        $page1 = ($page - 1) * $config['per_page'];
        
        if (!is_numeric($page)) {
            show_404();
            exit;
        }
       
       
       $sql_query = "SELECT property.*,loai_dia_oc.name as loai_dia_oc,loai_dia_oc.id as id_ldo
        FROM property
        LEFT JOIN loai_dia_oc
        ON property.loai_dia_oc = loai_dia_oc.id
        WHERE property.id_user = $id_user AND property.status = 1";
        
        if($this->input->get('tp'))
        {
            
             $sql_query .=" AND id_city=".$this->input->get('tp');
             $sql .=" AND id_city=".$this->input->get('tp');
        }
        if($this->input->get('qh'))
        {
            $sql_query .=" AND id_district=".$this->input->get('qh');
            $sql .=" AND id_district=".$this->input->get('qh');
        }
        if($this->input->get('tk'))
        {
            $pr = $this->input->get('tk');
            $sql_query .=" AND title LIKE '%$pr%'";
            $sql .=" AND title LIKE '%$pr%'";
        }
        $sql_query .="
         ORDER BY property.goi_giao_dich DESC
         LIMIT $page1,
        ".$config['per_page'];
       $config['total_rows'] = $this->propertyhomemodel->count_property_available_search($sql);
       $num_pages = ceil($config['total_rows']/ $config['per_page']);
       $array_sv = $this->propertyhomemodel->list_property_available_search($sql_query);
       $this->data['total_page'] = $num_pages;
       $this->data['offset'] = $page1;
       $this->data['page']=$page;
       $this->data['total']=$config['total_rows'];
       $this->data['list']=$array_sv;
       $this->data['main_content']='member/list_tai_san_available';
       $this->load->view('home_layout/member/user_index_layout',$this->data);
    }
    public function dang_cho_duyet()
    {
        $this->load->model('propertyhomemodel');
        $this->data['list_tinh'] = $this->propertyhomemodel->list_tinh_member();
        $this->load->helper('url');
        $config['uri_segment'] = 5;
        $page = $this->uri->segment(4);
        $id_user = $this->session->userdata('user_id');
        $config['per_page'] = 12;
        $config['total_rows'] = $this->propertyhomemodel->count_property_pending($id_user);
        if ($page == '') {
            $page = 1;
        }
        $page1 = ($page - 1) * $config['per_page'];
       
        if (!is_numeric($page)) {
            show_404();
            exit;
        }
       
       $num_pages = ceil($config['total_rows']/ $config['per_page']);
       $array_sv = $this->propertyhomemodel->list_property_pending($id_user,$config['per_page'], $page1);
      
       $this->data['total_page'] = $num_pages;
       $this->data['offset'] = $page1;
       $this->data['page']=$page;
       $this->data['total']=$config['total_rows'];
       $this->data['list']=$array_sv;
       $this->data['main_content']='member/list_tai_san_pending';
       $this->load->view('home_layout/member/user_index_layout',$this->data);
    }
    public function edit_tai_san_pending($id)
    {
        $this->load->model('memberhomemodel');
        $this->load->model('propertyhomemodel');
        if($this->input->post())
        {
            if($this->input->post('SubmitSave'))
            {
                $data_save = array();
                $data_save = array(
                'loai_tin'=>$this->input->post('TinDang'),
                'loai_dia_oc'=>$this->input->post('DioTypeList'),
                'vi_tri_dia_oc'=>$this->input->post('DioLineList'),
                'id_city'=>$this->input->post('CityListMember'),
                'id_district'=>$this->input->post('DistrictListMember'),
                'dia_chi'=>$this->input->post('HouseNumber'),
                'price'=>$this->input->post('PriceMain'),
                'asset'=>$this->input->post('AssetUnitList'),
                'dien_tich'=>$this->input->post('DTSD'),
                'chieu_ngang_truoc'=>$this->input->post('DTKVWidth'),
                'chieu_dai'=>$this->input->post('DTKVLength'),
                'xd_chieu_ngang_truoc'=>$this->input->post('DTXDWidth'),
                'xd_chieu_dai'=>$this->input->post('DTXDLength'),
                'tinh_trang_phap_ly'=>$this->input->post('DioStateLegalList'),
                'huong'=>$this->input->post('DioDirectionList'),
                'so_lau'=>$this->input->post('NumberOfFloorList'),
                'so_phong_khach'=>$this->input->post('NumberOfLivingRoomList'),
                'so_phong_ngu'=>$this->input->post('NumberOfBedRoomList'),
                'so_phong_tam_wc'=>$this->input->post('NumberOfWCList'),
                'phong_khac'=>$this->input->post('NumberOfRelaxRoomList'),
                'content'=>$this->input->post('Detail'),
                'title'=>$this->input->post('Title')
                );
                if($this->input->post('TinDang')==2)
                {
                    $data_save['loai_hinh']=3;
                }
                else
                {
                    if($this->input->post('MoiGioi'))
                    {
                        $data_save['loai_hinh']=2;
                    }
                    else
                    {
                        $data_save['loai_hinh']=1;
                    }
                }
                if($this->input->post('MoiGioi') && $this->input->post('MoiGioi')==2)
                {
                    $data_save['phi_ky_gui']=$this->input->post('FeeConsign');
                }
                if($this->input->post('fea_1') && $this->input->post('fea_1') == 1)
                {
                    $data_save['day_du_tien_nghi'] = 1;
                }
                else
                {
                    $data_save['day_du_tien_nghi'] = 0;
                }
                if($this->input->post('fea_6') && $this->input->post('fea_6') == 1)
                {
                    $data_save['cho_de_xe_hoi'] = 1;
                }
                else
                {
                    $data_save['cho_de_xe_hoi'] = 0;
                }
                if($this->input->post('fea_7') && $this->input->post('fea_7') == 1)
                {
                    $data_save['san_vuon'] = 1;
                }
                else
                {
                    $data_save['san_vuon'] = 0;
                }
                 if($this->input->post('fea_8') && $this->input->post('fea_8') == 1)
                {
                    $data_save['ho_boi'] = 1;
                }
                else
                {
                    $data_save['ho_boi'] = 0;
                }
                 if($this->input->post('fea_14') && $this->input->post('fea_14') == 1)
                {
                    $data_save['tien_kinh_doanh'] = 1;
                }
                else
                {
                    $data_save['tien_kinh_doanh'] = 0;
                }
                if($this->input->post('fea_20') && $this->input->post('fea_20') == 1)
                {
                    $data_save['tien_de_o'] = 1;
                }
                else
                {
                    $data_save['tien_de_o'] = 0;
                }
                if($this->input->post('fea_21') && $this->input->post('fea_21') == 1)
                {
                    $data_save['tien_lam_van_phong'] = 1;
                }
                else
                {
                    $data_save['tien_lam_van_phong'] = 0;
                }
                if($this->input->post('fea_23') && $this->input->post('fea_23') == 1)
                {
                    $data_save['tien_cho_san_xuat'] = 1;
                }
                else
                {
                    $data_save['tien_cho_san_xuat'] = 0;
                }
                if($this->input->post('fea_24') && $this->input->post('fea_24') == 1)
                {
                    $data_save['cho_sinh_vien_thue'] = 1;
                }
                else
                {
                    $data_save['cho_sinh_vien_thue'] = 0;
                }
                if($this->input->post('DTKVWidthBehind'))
                {
                    $data_save['chieu_ngang_sau'] = $this->input->post('DTKVWidthBehind');
                }
                if($this->input->post('DTXDWidthBehind'))
                {
                    $data_save['xd_chieu_ngang_sau'] = $this->input->post('DTXDWidthBehind');
                }
                if($this->input->post('ProjectListMember') && $this->input->post('ProjectListMember') !='')
                {
                    $data_save['id_duan'] =$this->input->post('ProjectListMember');
                }
                $data_save['id_user']=$this->session->userdata('user_id');
                $data_save['status']=0;
                $data_save['create_date']=strtotime('now');
                
                $this->propertyhomemodel->update($id,$data_save);
                redirect($_SERVER['HTTP_REFERER']);
            }
        }
        else
        {
            $this->data['detail']=$this->propertyhomemodel->property_pending_detail($this->session->userdata('user_id'),$id);
            $this->data['userdetail']=$this->memberhomemodel->user_detail($this->session->userdata('user_id'));
            $this->data['loai_dia_oc']=$this->propertyhomemodel->list_loai_dia_oc_member();
            $this->data['list_vi_tri'] = $this->propertyhomemodel->list_vt_dia_oc_member();
            $this->data['list_tinh'] = $this->propertyhomemodel->list_tinh_member();
            $this->data['list_district_1'] = $this->propertyhomemodel->list_district_by_city($this->data['detail'][0]['id_city']);
            $this->data['list_project_by_district']=$this->propertyhomemodel->list_project_by_district($this->data['detail'][0]['id_district'],$this->data['detail'][0]['id_city']);
            $this->data['list_phap_ly'] = $this->propertyhomemodel->list_phap_ly();
            $this->data['list_huong'] = $this->propertyhomemodel->list_huong();
            $this->data['list_pn'] = $this->propertyhomemodel->list_pn();
            
            $this->data['main_content']='member/edit_tai_san_pending';
            $this->load->view('home_layout/member/user_index_layout',$this->data);
        }
    }
    public function chua_thanh_toan()
    {
        $this->load->model('propertyhomemodel');
        $this->data['list_tinh'] = $this->propertyhomemodel->list_tinh_member();
        $this->load->helper('url');
        $config['uri_segment'] = 5;
        $page = $this->uri->segment(4);
        $id_user = $this->session->userdata('user_id');
        $config['per_page'] = 12;
        $config['total_rows'] = $this->propertyhomemodel->count_property_waitpay($id_user);
        if ($page == '') {
            $page = 1;
        }
        $page1 = ($page - 1) * $config['per_page'];
       
        if (!is_numeric($page)) {
            show_404();
            exit;
        }
       $num_pages = ceil($config['total_rows']/ $config['per_page']);
       $array_sv = $this->propertyhomemodel->list_property_waitpay($id_user,$config['per_page'], $page1);
        
       $this->data['total_page'] = $num_pages;
       $this->data['offset'] = $page1;
       $this->data['page']=$page;
       $this->data['total']=$config['total_rows'];
       $this->data['list']=$array_sv;
       $this->data['main_content']='member/list_tai_san_chua_thanh_toan';
       $this->load->view('home_layout/member/user_index_layout',$this->data);
    }
    public function thanh_toan($id)
    {
        $id_user= $this->session->userdata('user_id');
        $this->load->model('propertyhomemodel');
        $this->load->model('blancehomemodel');
        $this->data['so_du']=$this->blancehomemodel->so_du($id_user);
        $this->data['detail_order']=$this->blancehomemodel->detail_dv($id,$id_user);
       
        if($this->input->post())
        {
            $tien = $this->data['so_du'][0]['so_du'];
            $tien_tra = $this->data['detail_order'][0]['tong_tien'];
            if($tien == 0)
            {
                redirect($_SERVER['HTTP_REFERER']);
            }
            else
            {
                if($tien < $tien_tra)
                {
                    redirect($_SERVER['HTTP_REFERER']);
                }
                else
                {
                    $tien_up = $tien - $tien_tra;
                    $data_update_order = array(
                    'ngay_het_han'=>'',
                    'tinh_trang'=>1
                    );
                    $data_user_blance = array('so_du'=>$tien_up);
                    $this->blancehomemodel->update_blance_user($id_user,$data_user_blance);
                    $data_pro = array('goi_giao_dich'=>$this->data['detail_order'][0]['id_dich_vu']);
                    $this->blancehomemodel->update_blance($this->data['detail_order'][0]['id_ctdvts'],$data_update_order);
                    $this->propertyhomemodel->update($this->data['detail_order'][0]['id_tai_san'],$data_pro);
                    redirect('/thanh-vien/dich-vu-chua-thanh-toan');
                }
            }
        }
        else
        {
            
            $this->data['main_content']='member/thanh_toan';
            $this->load->view('home_layout/member/user_index_layout',$this->data);
        }
    }
    public function list_dang_soan()
    {
        $this->load->model('propertyhomemodel');
        $this->data['list_tinh'] = $this->propertyhomemodel->list_tinh_member();
        $this->load->helper('url');
        $config['uri_segment'] = 5;
        $page = $this->uri->segment(4);
        $id_user = $this->session->userdata('user_id');
        $config['per_page'] = 12;
        $config['total_rows'] = $this->propertyhomemodel->count_property_prepare($id_user);
        if ($page == '') {
            $page = 1;
        }
        $page1 = ($page - 1) * $config['per_page'];
       
        if (!is_numeric($page)) {
            show_404();
            exit;
        }
       
       $num_pages = ceil($config['total_rows']/ $config['per_page']);
       $array_sv = $this->propertyhomemodel->list_property_prepare($id_user,$config['per_page'], $page1);
      
       $this->data['total_page'] = $num_pages;
       $this->data['offset'] = $page1;
       $this->data['page']=$page;
       $this->data['total']=$config['total_rows'];
       $this->data['list']=$array_sv;
       $this->data['main_content']='member/list_dang_soan';
       $this->load->view('home_layout/member/user_index_layout',$this->data);
    }
    public function sua_hs_dang_soan($id)
    {
       $id_user= $this->session->userdata('user_id');
       $this->load->model('propertyhomemodel');
       $this->load->model('memberhomemodel');
       if($this->input->post())
       {
            $data_save = array();
                $data_save = array(
                'loai_tin'=>$this->input->post('TinDang'),
                'loai_dia_oc'=>$this->input->post('DioTypeList'),
                'vi_tri_dia_oc'=>$this->input->post('DioLineList'),
                'id_city'=>$this->input->post('CityListMember'),
                'id_district'=>$this->input->post('DistrictListMember'),
                'dia_chi'=>$this->input->post('HouseNumber'),
                'price'=>$this->input->post('PriceMain'),
                'asset'=>$this->input->post('AssetUnitList'),
                'dien_tich'=>$this->input->post('DTSD'),
                'chieu_ngang_truoc'=>$this->input->post('DTKVWidth'),
                'chieu_dai'=>$this->input->post('DTKVLength'),
                'xd_chieu_ngang_truoc'=>$this->input->post('DTXDWidth'),
                'xd_chieu_dai'=>$this->input->post('DTXDLength'),
                'tinh_trang_phap_ly'=>$this->input->post('DioStateLegalList'),
                'huong'=>$this->input->post('DioDirectionList'),
                'so_lau'=>$this->input->post('NumberOfFloorList'),
                'so_phong_khach'=>$this->input->post('NumberOfLivingRoomList'),
                'so_phong_ngu'=>$this->input->post('NumberOfBedRoomList'),
                'so_phong_tam_wc'=>$this->input->post('NumberOfWCList'),
                'phong_khac'=>$this->input->post('NumberOfRelaxRoomList'),
                'content'=>$this->input->post('Detail'),
                'title'=>$this->input->post('Title')
                );
                if($this->input->post('TinDang')==2)
                {
                    $data_save['loai_hinh']=3;
                }
                else
                {
                    if($this->input->post('MoiGioi'))
                    {
                        $data_save['loai_hinh']=2;
                    }
                    else
                    {
                        $data_save['loai_hinh']=1;
                    }
                }
                if($this->input->post('MoiGioi') && $this->input->post('MoiGioi')==2)
                {
                    $data_save['phi_ky_gui']=$this->input->post('FeeConsign');
                }
                if($this->input->post('fea_1') && $this->input->post('fea_1') == 1)
                {
                    $data_save['day_du_tien_nghi'] = 1;
                }
                else
                {
                    $data_save['day_du_tien_nghi'] = 0;
                }
                if($this->input->post('fea_6') && $this->input->post('fea_6') == 1)
                {
                    $data_save['cho_de_xe_hoi'] = 1;
                }
                else
                {
                    $data_save['cho_de_xe_hoi'] = 0;
                }
                if($this->input->post('fea_7') && $this->input->post('fea_7') == 1)
                {
                    $data_save['san_vuon'] = 1;
                }
                else
                {
                    $data_save['san_vuon'] = 0;
                }
                 if($this->input->post('fea_8') && $this->input->post('fea_8') == 1)
                {
                    $data_save['ho_boi'] = 1;
                }
                else
                {
                    $data_save['ho_boi'] = 0;
                }
                 if($this->input->post('fea_14') && $this->input->post('fea_14') == 1)
                {
                    $data_save['tien_kinh_doanh'] = 1;
                }
                else
                {
                    $data_save['tien_kinh_doanh'] = 0;
                }
                if($this->input->post('fea_20') && $this->input->post('fea_20') == 1)
                {
                    $data_save['tien_de_o'] = 1;
                }
                else
                {
                    $data_save['tien_de_o'] = 0;
                }
                if($this->input->post('fea_21') && $this->input->post('fea_21') == 1)
                {
                    $data_save['tien_lam_van_phong'] = 1;
                }
                else
                {
                    $data_save['tien_lam_van_phong'] = 0;
                }
                if($this->input->post('fea_23') && $this->input->post('fea_23') == 1)
                {
                    $data_save['tien_cho_san_xuat'] = 1;
                }
                else
                {
                    $data_save['tien_cho_san_xuat'] = 0;
                }
                if($this->input->post('fea_24') && $this->input->post('fea_24') == 1)
                {
                    $data_save['cho_sinh_vien_thue'] = 1;
                }
                else
                {
                    $data_save['cho_sinh_vien_thue'] = 0;
                }
                if($this->input->post('DTKVWidthBehind'))
                {
                    $data_save['chieu_ngang_sau'] = $this->input->post('DTKVWidthBehind');
                }
                if($this->input->post('DTXDWidthBehind'))
                {
                    $data_save['xd_chieu_ngang_sau'] = $this->input->post('DTXDWidthBehind');
                }
                if($this->input->post('ProjectListMember') && $this->input->post('ProjectListMember') !='')
                {
                    $data_save['id_duan'] =$this->input->post('ProjectListMember');
                }
                $data_save['id_user']=$this->session->userdata('user_id');
                $data_save['status']=0;
                $data_save['create_date']=strtotime('now');
                if($this->input->post('SubmitPost'))
                {
                    $id_ins = $this->propertyhomemodel->insert($data_save);
                    if($id_ins>0)
                    {
                        $this->propertyhomemodel->delete_tmp($id);
                        redirect('/thanh-vien/tai-san-dang-soan');
                    }
                }
                if($this->input->post('SubmitSave'))
                {
                    $this->propertyhomemodel->update_tmp($id,$data_save);
                    redirect($_SERVER['HTTP_REFERER']);
                }
       }
       else
       {
            $this->data['detail']=$this->propertyhomemodel->detail_hs_dang_soan($id,$id_user);
            $this->data['userdetail']=$this->memberhomemodel->user_detail($this->session->userdata('user_id'));
            $this->data['loai_dia_oc']=$this->propertyhomemodel->list_loai_dia_oc_member();
            $this->data['list_vi_tri'] = $this->propertyhomemodel->list_vt_dia_oc_member();
            $this->data['list_tinh'] = $this->propertyhomemodel->list_tinh_member();
            $this->data['list_district_1'] = $this->propertyhomemodel->list_district_by_city($this->data['detail'][0]['id_city']);
            $this->data['list_project_by_district']=$this->propertyhomemodel->list_project_by_district($this->data['detail'][0]['id_district'],$this->data['detail'][0]['id_city']);
            $this->data['list_phap_ly'] = $this->propertyhomemodel->list_phap_ly();
            $this->data['list_huong'] = $this->propertyhomemodel->list_huong();
            $this->data['list_pn'] = $this->propertyhomemodel->list_pn();
            $this->data['main_content']='member/edit_tai_san_dang_soan';
            $this->load->view('home_layout/member/user_index_layout',$this->data);
       }
    }
    public function list_het_han()
    {
        /*$tomorrow  = mktime(0, 0, 0, date("m")+1  , date("d"), date("Y"));
        echo date('d/m/Y',$tomorrow);
        echo $tomorrow;exit;*/
        $this->load->model('propertyhomemodel');
        $this->data['list_tinh'] = $this->propertyhomemodel->list_tinh_member();
        $this->load->helper('url');
        $config['uri_segment'] = 5;
        $page = $this->uri->segment(4);
        $id_user = $this->session->userdata('user_id');
        $config['per_page'] = 12;
        $config['total_rows'] = $this->propertyhomemodel->count_property_exp($id_user);
        if ($page == '') {
            $page = 1;
        }
        $page1 = ($page - 1) * $config['per_page'];
       
        if (!is_numeric($page)) {
            show_404();
            exit;
        }
       
       $num_pages = ceil($config['total_rows']/ $config['per_page']);
       $array_sv = $this->propertyhomemodel->list_property_exp($id_user,$config['per_page'], $page1);
       
       $this->data['total_page'] = $num_pages;
       $this->data['offset'] = $page1;
       $this->data['page']=$page;
       $this->data['total']=$config['total_rows'];
       $this->data['list']=$array_sv;
       $this->data['main_content']='member/list_het_han';
       $this->load->view('home_layout/member/user_index_layout',$this->data);
    }
    public function gia_han_dich_vu($id)
    {
        $id_user= $this->session->userdata('user_id');
        $this->load->model('propertyhomemodel');
        $this->load->model('blancehomemodel');
        $this->data['so_du']=$this->blancehomemodel->so_du($id_user);
        $this->data['detail_order']=$this->blancehomemodel->detail_dv_hh($id,$id_user);
       
        if($this->input->post())
        {
            $tien = $this->data['so_du'][0]['so_du'];
            $tien_dv = $this->blancehomemodel->sv_detail($this->input->post('dich_vu'));
            $tien_tra = $tien_dv[0]['money'] * $this->input->post('time');
            if($tien == 0)
            {
                redirect($_SERVER['HTTP_REFERER']);
            }
            else
            {
                if($tien < $tien_tra)
                {
                    redirect($_SERVER['HTTP_REFERER']);
                }
                else
                {
                    $tomorrow  = mktime(0, 0, 0, date("m")+$this->input->post('time'), date("d"), date("Y"));
                    $date_exp = date('Y-m-d h:i:s',$tomorrow);
                    $tien_up = $tien - $tien_tra;
                    $data_update_order = array(
                    'ngay_het_han'=>$date_exp,
                    'tinh_trang'=>1,
                    'id_dich_vu'=>$this->input->post('dich_vu'),
                    'tong_tien'=>$tien_tra,
                    'time'=>$this->input->post('time')
                    );
                    $data_user_blance = array('so_du'=>$tien_up);
                    $this->blancehomemodel->update_blance_user($id_user,$data_user_blance);
                    $data_pro = array('goi_giao_dich'=>$this->input->post('dich_vu'));
                    $this->blancehomemodel->update_blance($this->data['detail_order'][0]['id_ctdvts'],$data_update_order);
                    $this->propertyhomemodel->update($this->data['detail_order'][0]['id_tai_san'],$data_pro);
                    redirect('/thanh-vien/tai-san-het-han');
                }
            }
        }
        else
        {
            $this->data['list_dv']=$this->blancehomemodel->list_dv();
            $this->data['main_content']='member/gia_han_dich_vu';
            $this->load->view('home_layout/member/user_index_layout',$this->data);
        }
    }
    public function ajax_get_price_sv($id)
    {
        $this->load->model('blancehomemodel');
        $id = intval($id);
        $detail = $this->blancehomemodel->sv_detail($id);
        echo $detail[0]['money'];
    }
    public function get_price_sv($id)
    {
        $this->load->model('blancehomemodel');
        $id = intval($id);
        $detail = $this->blancehomemodel->sv_detail($id);
        
        return $detail[0]['money'];
    }
    public function sum_time($count)
    {
        $count = intval($count);
        $tomorrow  = mktime(0, 0, 0, date("m")+$count, date("d"), date("Y"));
        echo date('Y-m-d h:i:s',$tomorrow);
    }
     public function ajax_total($month,$id)
    {
        
        $this->load->model('blancehomemodel');
        $id = intval($id);
        $month = intval($month);
        $money = $this->get_price_sv($id);
        echo $month * $money;
    }
    public function huy_dich_vu($id)
    {
        $id = intval($id);
        $this->load->model('propertyhomemodel');
        $this->propertyhomemodel->delete_dich_vu_($id);
    }
}
?>