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
        $list_pro = $this->propertyhomemodel->get_list_property_cc();
        $list_pro_new = $this->propertyhomemodel->get_list_property_new();
        $property_low_price = $this->propertyhomemodel->property_low_price();
        $this->data['list_project']=$list_project;
        $this->data['list_pro']=$list_pro;
        $this->data['list_pro_new']=$list_pro_new;
        $this->data['property_low_price'] = $property_low_price;
        $this->data['main_content']='home_view/home_index';
        $this->load->view('home_layout/home_layout',$this->data);
    }
}
?>