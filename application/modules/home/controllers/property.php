<?php 
class Property extends MY_Controller
{
    public function __construct()
    {
        parent::__construct();
        parent::list_city();
        parent::list_district();
        $this->load->model('propertyhomemodel');
    }
    public function detail($id)
    {
        $this->load->model('cityhomemodel');
        $this->data['detail']=$this->propertyhomemodel->property_detail($id);
        $this->data['list_district']=$this->cityhomemodel->get_list_district_city($this->data['detail'][0]['id_city']);
        $this->data['list_loai_dia_oc']=$this->propertyhomemodel->list_loai_dia_oc();
        $this->data['list_city']=$this->cityhomemodel->get_list_city_();
        $this->data['title']='abc';
        $this->data['main_content']='property_view/detail';
        $this->load->view('home_layout/detail_nha',$this->data);
    }
}
?>