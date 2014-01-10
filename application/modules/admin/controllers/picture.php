<?php 
class Picture extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('picturemodel');
        $this->load->library('tank_auth');
        $this->lang->load('tank_auth');
        if (!$this->tank_auth->is_logged_in()) {
            redirect('/admin/login.xxx');
        } 
    }
    public function index()
    {
        $data['list_image'] = $this->picturemodel->get_image();
        $data['main_content']='picture/list_image';
        $this->load->view('admin/table_template',$data);
    }
    public function delete($id = null)
    {
        $id = intval($id);
        if(!is_numeric($id))
        {
            show_404();
            exit();
        }
        $detail = $this->picturemodel->get_image_dt($id);
        if(is_file($_SERVER['DOCUMENT_ROOT'] . ROT_DIR . 'file/uploads/slide/'.$detail[0]['img']))
        {
            unlink($_SERVER['DOCUMENT_ROOT'] . ROT_DIR . 'file/uploads/slide/'.$detail[0]['img']);
        }
        $this->picturemodel->delete($id);
        redirect('admin/picture');
    }
    public function add()
    {
        
        if($this->input->post())
        {
           
            $this->load->library('upload');
                $image_upload_folder = $_SERVER['DOCUMENT_ROOT'] . ROT_DIR . 'file/uploads/slide';
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
                    $data_td['img'] = $file;
                    $this->picturemodel->insert_image($data_td);
                    redirect('admin/picture');
                }
        }
        else
        {
            $data['main_content']='picture/add_image';
            $this->load->view('admin/layout_form',$data);
        }
    }
}
?>