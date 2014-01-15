<?php 
class Home extends MY_Controller
{
    public function __construct()
    {
        parent::__construct();
        parent::get_menu_new_nav();
        parent::load_last_new();
        parent::load_list_last_new($this->data['new_on_nav'][0]['id_new']);
        parent::get_cate_dis_nav();
        parent::dis_noi_bat();
        parent::dis_noi_bat_other($this->data['last_dis'][0]['id_disco']);
    }
    public function index()
    {
       
        $this->load->model('projecthomemodel');
        $this->load->model('propertyhomemodel');
         $this->load->model('newshomemodel');
         $this->load->model('discoveryhomemodel');
        $list_project = $this->projecthomemodel->get_list_project();
        $list_pro = $this->propertyhomemodel->get_list_property_cc();
        $list_pro_new = $this->propertyhomemodel->get_list_property_new();
        $property_low_price = $this->propertyhomemodel->property_low_price();
        $list_new_slide = $this->newshomemodel->load_news_slide();
        $list_new_slide_ = $this->newshomemodel->load_news_slide_();
        $list_new_slide_d = $this->discoveryhomemodel->load_news_slide();
        $list_new_slide_d_ = $this->discoveryhomemodel->load_news_slide_($list_new_slide_d[0]['id_disco']);
        $this->data['list_project']=$list_project;
        $this->data['list_new_slide']=$list_new_slide;
         $this->data['list_new_slide_']=$list_new_slide_;
         $this->data['list_new_slide_d']=$list_new_slide_d;
         $this->data['list_new_slide_d_']=$list_new_slide_d_;
        $this->data['list_pro']=$list_pro;
        $this->data['list_pro_new']=$list_pro_new;
        $this->data['property_low_price'] = $property_low_price;
        $this->data['main_content']='home_view/home_index';
        $this->load->view('home_layout/home_layout',$this->data);
    }
}
?>