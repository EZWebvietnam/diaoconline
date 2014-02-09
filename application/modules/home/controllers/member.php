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
        parent::so_du();
        //
        parent::get_menu_new_nav();
        parent::load_last_new();
        parent::load_list_last_new($this->data['new_on_nav'][0]['id_new']);
        parent::get_cate_dis_nav();
        parent::dis_noi_bat();
        parent::dis_noi_bat_other($this->data['last_dis'][0]['id_disco']);
        parent::list_city();
        parent::list_district();
         parent::cate_project_sub();
        parent::project_noi_bat_lm1();
        parent::get_list_cafe_law();
        parent::project_noi_menu($this->data['noi_bat_menu_1'][0]['id_pro']);
        
        // Tai san
        parent::get_tai_san_lm3();
        parent::get_ts_menu();
        parent::cate_sieu_thi();
        $active = TRUE;
        $location = 'home';
        if(!$this->tank_auth->is_logged_in($active,$location))
        {
            redirect('/dang-nhap');
        }
    }
	public function nap_tien()
    {
        $this->load->library('nl');
        if($this->input->post())
        {
			$type = $this->input->post('ServiceList');
			switch($type)
			{
				case 1:
				{
					$this->load->library('nl');
					$url = base_url()."home/member/ket_qua";
					$receiver ="info@dcbland.com";
					$transaction_info='';
					$order_code= $this->input->post('order_code');
					$price = $this->input->post('code');
					$this->load->model('blancehomemodel');
					$data = array(
					'id_user'=>$this->session->userdata('user_id'),
					'code'=>$order_code,
					'money'=>$price,
					'status'=>0
					);
					$this->blancehomemodel->insert_order($data);
					$url = $this->nl->buildCheckoutUrlExpand($url,$receiver,$transaction_info,$order_code,$price);
					redirect($url);
					break;
				}
				case 2:
				{
					$this->load->library('baokim');
					$order_id = $this->input->post('order_code');
					$business = 'info@dcbland.com';
					$total_amount = $this->input->post('code');
					$shipping_fee = 0;
					$tax_fee = 0;
					$order_description = 0;
					$url_success=base_url()."home/member/ket_qua";
					$url_cancel='http://dcbland.com/thanh-vien/nap-tien';
					$url_detail = 'http://dcbland.com/thanh-vien/nap-tien';
					$url = $this->baokim->createRequestUrl($order_id, $business, $total_amount, $shipping_fee, $tax_fee, $order_description, $url_success, $url_cancel, $url_detail);
					redirect($url);
					break;
				}
				default:
				{
					break;
				}
			}
        }
        else
        {
            $this->data['code'] = rand_string(6);
            $this->data['main_content']='member/nap_tien';
            $this->load->view('home_layout/member/user_index_layout',$this->data);
        }
    }
    public function nap_the()
    {
        $this->data['so_du']=$this->blancehomemodel->so_du($this->session->userdata('user_id'));
        if($this->input->post())
        {
            $this->load->library('gamebank');
            $telco = $this->input->post('lstTelco');
            $code = $this->input->post('txtCode');
            $seri = $this->input->post('txtSeri');
            $result = $this->gamebank->nap_tien($telco,$code,$seri);
            if($result['error']==1)
            {
                $this->data['message']=$result['return_result'];
                $this->data['ma_the']=$code;
                $this->data['series']=$seri;
                $this->data['main_content']='member/nap_the';
                $this->load->view('home_layout/member/user_index_layout',$this->data);
            }
            else
            {
                 $data_log_gd = array(
				    'id_user'=>$this->session->userdata('user_id'),
					'thoi_gian'=>strtotime('now'),
					'so_tien'=>$result['money'],
					'loai_giao_dich'=>'Nạp tiền thẻ điện thoại',
					'trang_thai'=>1,
					'hinh_thuc'=>'+'
				);
                $data_user_blance = array('so_du'=>$tien_con);
				$this->blancehomemodel->update_blance_user($this->session->userdata('user_id'),$data_user_blance);
                $this->logblancehomemodel->insert($data_log_gd);
                $this->session->set_flashdata('message',$result['return_result']);
                redirect('/thanh-vien/nap-the');
            }
        }
        else
        {
            $this->data['main_content']='member/nap_the';
            $this->load->view('home_layout/member/user_index_layout',$this->data);
        }
    }
    function change_email()
	{
		if (!$this->tank_auth->is_logged_in()) {
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
	function _show_message($message)
	{
		$this->session->set_flashdata('message', $message);
		redirect('/');
	}
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
		if ($this->tank_auth->activate_new_email($user_id, $new_email_key)) {	// success
			$this->tank_auth->logout();
			$this->_show_message($this->lang->line('auth_message_new_email_activated').' '.anchor('/auth/login/', 'Login'));

		} else {																// fail
			$this->_show_message($this->lang->line('auth_message_new_email_failed'));
		}
	}
    public function du_property_luu()
    {
		$active = TRUE;
        $location = 'home';
        if(!$this->tank_auth->is_logged_in($active,$location))
        {
            redirect('/dang-nhap');
        }
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
		
        if(!$this->tank_auth->is_logged_in())
        {
            redirect('/dang-nhap');
        }
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
		
        if(!$this->tank_auth->is_logged_in())
        {
            redirect('/dang-nhap');
        }
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
		
        if(!$this->tank_auth->is_logged_in())
        {
            redirect('/dang-nhap');
        }
        $this->load->model('propertyhomemodel');
            $this->load->model('memberhomemodel');
        if($this->input->post())
        {
            $path = $_SERVER['DOCUMENT_ROOT'].ROT_DIR.'file/uploads/property/'.$this->input->post('code');
            $files = array();
            $dir = opendir($path); // open the cwd..also do an err check.
            while(false != ($file = readdir($dir))) {
                    if(($file != ".") and ($file != "..") and ($file != "index.php")) {
                            $files[] = $file; // put in array.
                    }   
            }
            natsort($files);
            if($this->input->post('PriceMain')==0 || $this->input->post('PriceMain')=='')
            {
                $price = "Thương lượng";
            }
            else
            {
                $price = $this->input->post('PriceMain');
            }
            $data_save = array();
            $data_save = array(
            'loai_tin'=>$this->input->post('TinDang'),
            'loai_dia_oc'=>$this->input->post('DioTypeList'),
            'vi_tri_dia_oc'=>$this->input->post('DioLineList'),
            'id_city'=>$this->input->post('CityListMember'),
            'id_district'=>$this->input->post('DistrictListMember'),
            'dia_chi'=>$this->input->post('HouseNumber'),
            'price'=>$price,
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
                else
                {
                    $data_save['loai_hinh']=2;
                }
                
            }
            if($this->input->post('MoiGioi')==2)
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
			$data_save['code']=$this->input->post('code');
            if($this->input->post('SubmitNew'))
            {
            	
                $id = $this->propertyhomemodel->insert($data_save);
                if($id>0)
                {
                    $data_file = array();
                    foreach($files as $v)
                    {
                        $data_file = array('id_pro'=>$id,'file'=>$v);
                        $this->memberhomemodel->insert_img_proper($data_file);
                    }
                }
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
            $code = rand_string(6);
            $image_upload_folder = $_SERVER['DOCUMENT_ROOT'] . ROT_DIR . 'file/uploads/property/'.$code;
            if (!file_exists($image_upload_folder)) {
                mkdir($image_upload_folder, DIR_WRITE_MODE, true);
            }
            $this->data['code']=$code;
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
		$active = TRUE;
        $location = 'home';
        if(!$this->tank_auth->is_logged_in($active,$location))
        {
            redirect('/dang-nhap');
        }
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
		$active = TRUE;
        $location = 'home';
        if(!$this->tank_auth->is_logged_in($active,$location))
        {
            redirect('/dang-nhap');
        }
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
		$active = TRUE;
        $location = 'home';
        if(!$this->tank_auth->is_logged_in($active,$location))
        {
            redirect('/dang-nhap');
        }
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
		$active = TRUE;
        $location = 'home';
        if(!$this->tank_auth->is_logged_in($active,$location))
        {
            redirect('/dang-nhap');
        }
        $this->load->model('memberhomemodel');
        $this->load->model('propertyhomemodel');
        if($this->input->post())
        {
            $path = $_SERVER['DOCUMENT_ROOT'].ROT_DIR.'file/uploads/property/'.$this->input->post('code');
            $files = array();
            $dir = opendir($path); // open the cwd..also do an err check.
            while(false != ($file = readdir($dir))) {
                    if(($file != ".") and ($file != "..") and ($file != "index.php")) {
                            $files[] = $file; // put in array.
                    }   
            }
            natsort($files);
            if($this->input->post('SubmitSave'))
            {
                if($this->input->post('PriceMain')==0 || $this->input->post('PriceMain')=='')
            {
                $price = "Thương lượng";
            }
            else
            {
                $price = $this->input->post('PriceMain');
            }
                $data_save = array();
                $data_save = array(
                'loai_tin'=>$this->input->post('TinDang'),
                'loai_dia_oc'=>$this->input->post('DioTypeList'),
                'vi_tri_dia_oc'=>$this->input->post('DioLineList'),
                'id_city'=>$this->input->post('CityListMember'),
                'id_district'=>$this->input->post('DistrictListMember'),
                'dia_chi'=>$this->input->post('HouseNumber'),
                'price'=>$price,
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
                    if($this->input->post('MoiGioi')==1)
                    {
                        $data_save['loai_hinh']=1;
                    }
                    else
                    {
                        $data_save['loai_hinh']=2;
                    }
                    
                }
                if($this->input->post('MoiGioi')==2)
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
                $this->propertyhomemodel->update($id,$data_save);
                $this->memberhomemodel->delete_img($id);
                $data_img = array();
                foreach($files as $v)
                {
                    $data_img = array('file'=>$v,'id_pro'=>$id);
                    $this->memberhomemodel->insert_img_proper($data_img);
                }
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
		$active = TRUE;
        $location = 'home';
        if(!$this->tank_auth->is_logged_in($active,$location))
        {
            redirect('/dang-nhap');
        }
        $this->load->model('propertyhomemodel');
        $this->data['list_tinh'] = $this->propertyhomemodel->list_tinh_member();
        $this->load->helper('url');
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
		$active = TRUE;
        $location = 'home';
        if(!$this->tank_auth->is_logged_in($active,$location))
        {
            redirect('/dang-nhap');
        }
        $id_user= $this->session->userdata('user_id');
        $this->load->model('propertyhomemodel');
        $this->load->model('blancehomemodel');
        $this->data['so_du']=$this->blancehomemodel->so_du($id_user);
        $this->data['detail_order']=$this->blancehomemodel->detail_dv($id,$id_user);
        if($this->input->post())
        {
            $tien = $this->data['so_du'][0]['so_du'];
            $tien_tra = $this->data['detail_order'][0]['tong_tien'];
            if($tien==0 || $tien<$tien_tra)
			{
				$trang_thai = 0;
			}
			else
			{
				$trang_thai = 1;
			}
                    $tien_up = $tien - $tien_tra;
                    $data_update_order = array(
                    'ngay_het_han'=>$this->data['detail_order'][0]['ngay_het_han'],
                    'tinh_trang'=>$trang_thai
                    );
                    $data_log_gd = array(
                    'id_user'=>$id_user,
                    'thoi_gian'=>strtotime('now'),
                    'so_tien'=>$tien_tra,
                    'loai_giao_dich'=>'Thanh toán dịch vụ',
                    'trang_thai'=>$trang_thai,
                    'hinh_thuc'=>'-'
                    );
					if($tien>0 && $tien>$tien_tra && $tien_up>0)
					{
                    $this->load->model('logblancehomemodel');
                    $this->logblancehomemodel->insert($data_log_gd);
                    $data_user_blance = array('so_du'=>$tien_up);
                    $this->blancehomemodel->update_blance_user($id_user,$data_user_blance);
					}
                    $data_pro = array('goi_giao_dich'=>$this->data['detail_order'][0]['id_dich_vu']);
                    $this->blancehomemodel->update_blance($this->data['detail_order'][0]['id_ctdvts'],$data_update_order);
                    $this->propertyhomemodel->update($this->data['detail_order'][0]['id_tai_san'],$data_pro);
                    redirect('/thanh-vien/dich-vu-chua-thanh-toan');
        }
        else
        {
            $this->data['main_content']='member/thanh_toan';
            $this->load->view('home_layout/member/user_index_layout',$this->data);
        }
    }
    public function list_dang_soan()
    {
		$active = TRUE;
        $location = 'home';
        if(!$this->tank_auth->is_logged_in($active,$location))
        {
            redirect('/dang-nhap');
        }
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
		$active = TRUE;
        $location = 'home';
        if(!$this->tank_auth->is_logged_in($active,$location))
        {
            redirect('/dang-nhap');
        }
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
                'phong_khac'=>$this->input->post('NumberOfRelaxRoomList'),
                'content'=>$this->input->post('Detail'),
                'title'=>$this->input->post('Title'),
				'code'=>$this->input->post('code')
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
                    else
                    {
                        $data_save['loai_hinh']=2;
                    }
                    
                }
                if($this->input->post('MoiGioi')==2)
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
                if($this->input->post('SubmitPost'))
                {
                    $id_ins = $this->propertyhomemodel->insert($data_save);
                    if($id_ins>0)
                    {
                        $this->propertyhomemodel->delete_tmp($id);
						$path = $_SERVER['DOCUMENT_ROOT'].ROT_DIR.'file/uploads/property/'.$this->input->post('code');
						$files = array();
						$dir = opendir($path); // open the cwd..also do an err check.
						while(false != ($file = readdir($dir))) {
								if(($file != ".") and ($file != "..") and ($file != "index.php")) {
										$files[] = $file; // put in array.
								}   
						}
						
						natsort($files);
						foreach($files as $v)
						{
							$data_img = array('file'=>$v,'id_pro'=>$id_ins);
							$this->memberhomemodel->insert_img_proper($data_img);
						}
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
		$active = TRUE;
        $location = 'home';
        if(!$this->tank_auth->is_logged_in($active,$location))
        {
            redirect('/dang-nhap');
        }
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
		$active = TRUE;
        $location = 'home';
        if(!$this->tank_auth->is_logged_in($active,$location))
        {
            redirect('/dang-nhap');
        }
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
			if($tien==0 || $tien<$tien_tra)
			{
			$trang_thai = 0;
			} 
			else
			{
			$trang_thai = 1;
			}
                    $tomorrow  = mktime(0, 0, 0, date("m")+$this->input->post('time'), date("d"), date("Y"));
                    $date_exp = date('Y-m-d h:i:s',$tomorrow);
                    $tien_up = $tien - $tien_tra;
                    $data_update_order = array(
                    'ngay_het_han'=>$date_exp,
                    'tinh_trang'=>$trang_thai,
                    'id_dich_vu'=>$this->input->post('dich_vu'),
                    'tong_tien'=>$tien_tra,
                    'time'=>$this->input->post('time')
                    );
                    $data_log_gd = array(
                    'id_user'=>$id_user,
                    'thoi_gian'=>strtotime('now'),
                    'so_tien'=>$tien_up,
                    'loai_giao_dich'=>'Gia hạn dịch vụ',
                    'trang_thai'=>$trang_thai,
                    'hinh_thuc'=>'-'
                    );
					if($tien!=0 && $tien > $tien_tra && $tien_up >0)
					{
						$this->load->model('logblancehomemodel');
						$this->logblancehomemodel->insert($data_log_gd);
						$data_user_blance = array('so_du'=>$tien_up);
						$this->blancehomemodel->update_blance_user($id_user,$data_user_blance);
					}
                    $data_pro = array('goi_giao_dich'=>$this->input->post('dich_vu'));
                    $this->blancehomemodel->update_blance($this->data['detail_order'][0]['id_ctdvts'],$data_update_order);
                    $this->propertyhomemodel->update($this->data['detail_order'][0]['id_tai_san'],$data_pro);
                    redirect('/thanh-vien/tai-san-het-han');
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
		$active = TRUE;
        $location = 'home';
        if(!$this->tank_auth->is_logged_in($active,$location))
        {
            redirect('/dang-nhap');
        }
        $this->load->model('blancehomemodel');
        $id = intval($id);
        $detail = $this->blancehomemodel->sv_detail($id);
        echo $detail[0]['money'];
    }
    public function get_price_sv($id)
    {
	$active = TRUE;
        $location = 'home';
        if(!$this->tank_auth->is_logged_in($active,$location))
        {
            redirect('/dang-nhap');
        }
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
		$active = TRUE;
        $location = 'home';
        if(!$this->tank_auth->is_logged_in($active,$location))
        {
            redirect('/dang-nhap');
        }
        $id = intval($id);
        $this->load->model('propertyhomemodel');
        $this->propertyhomemodel->delete_dich_vu_($id);
    }
    public function ket_qua()
    {
        $transaction_info    =    $_GET['transaction_info']; 
        $order_code    =    $_GET['order_code']; 
        $price    =    $_GET['price']; 
        $payment_id    =    $_GET['payment_id']; 
        $payment_type    =    $_GET['payment_type']; 
        $error_text    =    $_GET['error_text']; 
        $secure_code    =    $_GET['secure_code']; 
        $this->load->library('nl');
        $result = $this->nl->verifyPaymentUrl($transaction_info, $order_code, $price, $payment_id, $payment_type, $error_text, $secure_code); 
        if($result===true)
        {
            if($error_text=='')
            {
                    $data_log_gd = array(
                    'id_user'=>$id_user,
                    'thoi_gian'=>strtotime('now'),
                    'so_tien'=>$price,
                    'loai_giao_dich'=>'Nạp tiền',
                    'trang_thai'=>1,
                    'hinh_thuc'=>'+'
                    );
                    $this->load->model('logblancehomemodel');
                    $this->logblancehomemodel->insert($data_log_gd);
                    $data = array('status'=>1);
                    $this->load->model('blancehomemodel');
                    $this->blancehomemodel->update_order($data);
                    $this->data['error']='Nạp tiền thành công !';
            }
            else
            {
                 $this->data['error']=$error_text;
            }
            $this->data['main_content']='member/nap_tien_success';
            $this->load->view('home_layout/member/user_index_layout',$this->data);
        }
    }  
    public function list_giao_dich()
    {
		$active = TRUE;
        $location = 'home';
        if(!$this->tank_auth->is_logged_in($active,$location))
        {
            redirect('/dang-nhap');
        }
        $this->load->model('logblancehomemodel');
        $this->load->helper('url');
        $config['uri_segment'] = 5;
        $page = $this->uri->segment(4);
        $id_user = $this->session->userdata('user_id');
        $config['per_page'] = 10;
        $config['total_rows'] = $this->logblancehomemodel->count_giao_dich($id_user);
        if ($page == '') {
            $page = 1;
        }
        $page1 = ($page - 1) * $config['per_page'];
        if (!is_numeric($page)) {
            show_404();
            exit;
        }
       $num_pages = ceil($config['total_rows']/ $config['per_page']);
       $array_sv = $this->logblancehomemodel->list_giao_dich($id_user,$config['per_page'], $page1);
       $this->data['total_page'] = $num_pages;
       $this->data['offset'] = $page1;
       $this->data['page']=$page;
       $this->data['total']=$config['total_rows'];
       $this->data['list']=$array_sv;
       $this->data['main_content']='member/list_giao_dich';
       $this->load->view('home_layout/member/user_index_layout',$this->data);
    }
    public function nang_cap($id)
    {
		$active = TRUE;
        $location = 'home';
        if(!$this->tank_auth->is_logged_in($active,$location))
        {
            redirect('/dang-nhap');
        }
         $id_user= $this->session->userdata('user_id');
        $this->load->model('propertyhomemodel');
        $this->load->model('blancehomemodel');
        $this->data['so_du']=$this->blancehomemodel->so_du($id_user);
        if($this->input->post())
        {
            $tien = $this->data['so_du'][0]['so_du'];
            $tien_dv = $this->blancehomemodel->sv_detail($this->input->post('dich_vu'));
            $detail = $this->propertyhomemodel->search_ct_dv($id);
            $tien_tra = $tien_dv[0]['money'] * $this->input->post('time');
			if($tien==0 || $tien<$tien_tra)
			{
					$trang_thai = 0;
			}
			else
			{
					$trang_thai = 1;
			}
            $this->load->model('logblancehomemodel');
            if(!empty($detail))
            {
                    $day = intval(time_diff_string('now',$detail[0]['ngay_het_han']))*30;
                    $money_per_day = $detail[0]['tong_tien']/($detail[0]['time']*30);
                    $day_use = $day * $money_per_day;
                    $tien_du = $detail[0]['tong_tien']-$day_use;
                    $tomorrow  = mktime(0, 0, 0, date("m")+$this->input->post('time'), date("d"), date("Y"));
                    $date_exp = date('Y-m-d h:i:s',$tomorrow);
                    $tien_up = $tien_tra - $tien_du;
                    $tien_con = $tien - $tien_up;
                    $data_update_order = array(
                        'ngay_het_han'=>$date_exp,
                        'tinh_trang'=>$trang_thai,
                        'id_dich_vu'=>$this->input->post('dich_vu'),
                        'tong_tien'=>$tien_up,
                        'time'=>$this->input->post('time')
                        );
                    $this->blancehomemodel->update_blance($detail[0]['id_ctdvts'],$data_update_order);
					if($tien>0 && $tien>$tien_up && $tien_con>0)
					{
						$data_user_blance = array('so_du'=>$tien_con);
						$this->blancehomemodel->update_blance_user($id_user,$data_user_blance);
						
					}
					$data_log_gd = array(
						'id_user'=>$id_user,
						'thoi_gian'=>strtotime('now'),
						'so_tien'=>$tien_up,
						'loai_giao_dich'=>'Nâng cấp dịch vụ',
						'trang_thai'=>$trang_thai,
						'hinh_thuc'=>'-'
						);
						
						$this->logblancehomemodel->insert($data_log_gd);
                    redirect($_SERVER['HTTP_REFERER']);
                
            }
            else
            {
				$tomorrow  = mktime(0, 0, 0, date("m")+$this->input->post('time'), date("d"), date("Y"));
                        $date_exp = date('Y-m-d h:i:s',$tomorrow);
                        
                        $tien_up = $tien - $tien_tra;
                        $data_update_order = array(
                        'id_tai_san'=>$id,
                        'ngay_het_han'=>$date_exp,
                        'tinh_trang'=>$trang_thai,
                        'id_dich_vu'=>$this->input->post('dich_vu'),
                        'tong_tien'=>$tien_tra,
                        'time'=>$this->input->post('time')
                        );
						$this->blancehomemodel->insert_ct($data_update_order);
						if($tien>0 && $tien>$tien_tra && $tien_up>0)
						{
							
							$data_user_blance = array('so_du'=>$tien_up);
							$this->blancehomemodel->update_blance_user($id_user,$data_user_blance);
						}
							 $data_log_gd = array(
							'id_user'=>$id_user,
							'thoi_gian'=>strtotime('now'),
							'so_tien'=>$tien_up,
							'loai_giao_dich'=>'Nâng cấp dịch vụ',
							'trang_thai'=>$trang_thai,
							'hinh_thuc'=>'-'
							);
							$this->logblancehomemodel->insert($data_log_gd);
                        redirect('/thanh-vien/dich-vu-chua-thanh-toan');
            }
        }
        else
        {
            $this->data['list_dv']=$this->blancehomemodel->list_dv();
            $this->data['main_content']='member/nang_cap_dich_vu';
            $this->load->view('home_layout/member/user_index_layout',$this->data);
        }
    }
}
?>