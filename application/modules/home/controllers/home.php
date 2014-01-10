<?php 
class Home extends MY_Controller
{
    public function __construct()
    {
        parent::__construct();
    }
    public function index()
    {
        
        $this->load->model('projecthomemodel');
        $this->load->model('propertyhomemodel');
        $list_project = $this->projecthomemodel->get_list_project();
        $list_pro = $this->propertyhomemodel->get_list_property();
        $this->data['list_project']=$list_project;
        $this->data['list_pro']=$list_pro;
        $this->data['main_content']='home_view/home_index';
        $this->load->view('home_layout/home_layout',$this->data);
    }
}
?>