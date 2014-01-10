<?php
class About extends MY_Controller
{
    public function __construct() {
        parent::__construct();
        $this->load->model('aboutmodel');
        $this->load->helper(array('form', 'url'));
        $this->load->library('form_validation');
        $this->load->library('tank_auth');
        $this->lang->load('tank_auth');
        if (!$this->tank_auth->is_logged_in()) {
            redirect('/admin/login.xxx');
        } 
    }
    public function index()
    {
        $this->data['main_content']='about/list_about';
        $this->data['ls_about']=$this->aboutmodel->list_about();
        $this->load->view('admin/table_template', $this->data);
    }
    public function edit($id = null)
    {
        if(empty($id))
        {
            redirect('/admin/about');
        }
        $detail_about = $this->aboutmodel->detail_about($id);
        $list_about = $this->aboutmodel->list_about_parent();
        if(empty($detail_about))
        {
            redirect('/admin/about');
        }
        else
        {
            $this->data['about_dt'] = $detail_about;
            $this->data['list_about'] = $list_about;
             $this->data['main_content'] = 'about/edit_about';
            $this->load->view('admin/layout_form',$this->data);
        }
    }
    public function save($id = null)
    {
        if(empty($id))
        {
            redirect('/admin/about');
        }
        $detail_about = $this->aboutmodel->detail_about($id);
        if(empty($detail_about))
        {
            redirect('/admin/about');
        }
        else
        {
            $name = $this->input->post('name');
            $cate = $this->input->post('cate');
            $content = stripslashes($this->input->post('editor1'));
            $data = array();
            $data = array('name'=>$name,'content'=>$content,'parent'=>$cate);
            $this->aboutmodel->update_about($id,$data);
            redirect($_SERVER['HTTP_REFERER']);
        }
    }
    public function add()
    {
        if($this->input->post())
        {
            $name = $this->input->post('name');
            $cate = $this->input->post('cate');
            $content = stripslashes($this->input->post('editor1'));
            $data = array();
            $data = array('name'=>$name,'content'=>$content,'parent'=>$cate);
            $this->aboutmodel->add_about($data);
            redirect($_SERVER['HTTP_REFERER']);
        }
        else
        {
            $list_about = $this->aboutmodel->list_about_parent();
            $this->data['list_about'] = $list_about;
            $this->data['main_content'] = 'about/add_about';
            $this->load->view('admin/layout_form',$this->data);
        }
    }
    public function delete($id = null)
    {
        if(empty($id))
        {
            redirect('/admin/about');
        }
        $detail_about = $this->aboutmodel->detail_about($id);
        if(empty($detail_about))
        {
            redirect('/admin/about');
        }
        else
        {
            $this->aboutmodel->delete_about($id);
            redirect('/admin/about');
        }
    }
}
?>
