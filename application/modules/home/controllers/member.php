<?php 
class Member extends MY_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->library('session');
        $this->load->library('tank_auth');
        $this->load->library('form_validation');
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
        $this->data['loai_dia_oc']=$this->propertyhomemodel->list_loai_dia_oc_member();
        $this->data['list_vi_tri'] = $this->propertyhomemodel->list_vt_dia_oc_member();
         $this->data['list_tinh'] = $this->propertyhomemodel->list_tinh_member();
        $this->data['main_content']='member/dang_tai_san';
        $this->load->view('home_layout/member/user_index_layout',$this->data);
    }
}
?>