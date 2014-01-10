<?php
class Servicesadm extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->helper(array('form', 'url'));
        $this->load->library('form_validation');
        $this->load->library('tank_auth');
        $this->lang->load('tank_auth');
        $this->load->model('servicesmodel');
        $this->load->helper('txt_helper');
        $this->load->library('myfunction');
        if (!$this->tank_auth->is_logged_in()) {
            redirect('/admin/login.xxx');
        }
    }
    public function index()
    {
        $data['main_content'] = 'service/list_sv';
        $data['content'] = $this->servicesmodel->get_list();
        $this->load->view('admin/table_template', $data);
    }
    public function edit($id = null)
    {
        if (empty($id)) {
            show_404();
            exit;
        }
        if (!is_numeric($id)) {
            show_404();
            exit;
        }
        $detail = $this->servicesmodel->get_dich_vu($id);
        if (empty($detail)) {
            show_404();
            exit;
        } else {
            $data['main_content'] = 'service/edit_sv';
            $data['data'] = $detail;
            $this->load->view('admin/layout_form', $data);
        }
    }
    public function save($id = null)
    {
        
        if ($this->input->post()) {
            if (empty($id)) {
                show_404();
                exit;
            }
            if (!is_numeric($id)) {
                show_404();
                exit;
            }
            $detail = $this->servicesmodel->get_dich_vu($id);
            if (empty($detail)) {
                show_404();
                exit;
            } else {
                $file = '';
                $this->load->library('upload');
                $image_upload_folder = $_SERVER['DOCUMENT_ROOT'] . ROT_DIR . 'file/uploads/services';
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
                   
                    $data_td['error_file'] = $this->upload->display_errors();
                    $file = '';
                } else {
                    
                    $file_info = $this->upload->data();
                }
                
                if (!empty($file_info)) {
                    $file = $file_info['file_name'];
                    $data_sv = array('u_img'=>$file);
                   
                }
               
                $data_sv = array('u_img'=>$file,'name' => $this->input->post('name'), 'content' => stripslashes($this->
                        input->post('editor1')));
                        
                $id = $this->servicesmodel->update_dich_vu($id, $data_sv);

                redirect('admin/servicesadm');

            }
        }
    }
    public function add()
    {
        if ($this->input->post()) {
                $file = '';
                $this->load->library('upload');
                $image_upload_folder = $_SERVER['DOCUMENT_ROOT'] . ROT_DIR . 'file/uploads/services';
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
                    $data_td['error_file'] = $this->upload->display_errors();
                    $file = '';
                } else {
                    $file_info = $this->upload->data();
                }
                if (!empty($file_info)) {
                    $file = $file_info['file_name'];
                    $data_sv = array('u_img'=>$file);
                }
               
            $data_sv = array('u_img'=>$file,'name' => $this->input->post('name'), 'content' => stripslashes($this->
                    input->post('editor1')),'create_date'=>strtotime('now'));
            $id = $this->servicesmodel->insert_dich_vu($data_sv);
            if ($id > 0) {
                redirect('admin/servicesadm');
            }

        } else {
            $data['main_content'] = 'service/add_sv';
            $this->load->view('admin/layout_form', $data);
        }
    }
    public function delete($id = null)
    {
        
      
            if (empty($id)) {
                show_404();
                exit;
            }
            if (!is_numeric($id)) {
                show_404();
                exit;
            }
            $detail = $this->servicesmodel->get_dich_vu($id);
            if (empty($detail)) {
                show_404();
                exit;
            } else {
                $this->servicesmodel->delete_dich_vu($id);
                redirect('admin/servicesadm');
                }
   
    }
}
?>