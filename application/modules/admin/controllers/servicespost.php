<?php 
class Servicespost extends CI_Controller
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
    public function index($id = null)
    {
        if($this->input->post())
        {
            $data_sv['content']=stripslashes($this->input->post('editor1'));
            $this->servicesmodel->update_sv_post($data_sv);
            redirect('admin/servicespost');
            
        }
        else
        {
            $data['main_content']='service/edit_sv_post';
            $data['data']=$this->servicesmodel->get_sv_post();
            $this->load->view('admin/layout_form',$data);
        }
    }
}
?>