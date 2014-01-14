<?php 
class Discovery extends MY_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('discoveryhomemodel');
        parent::get_cate_dis_parent();
    }
    public function index()
    {
        parent::get_kham_pha_index();
        
        $this->load->view('home_layout/kham_pha_layout',$this->data);
    }
    public function discovery_detail($id)
    {
        $this->data['main_content']='discovery_view/discovery_detail';
        $this->data['detail_dis'] = $this->discoveryhomemodel->load_detail($id);
        $this->data['title']=$this->data['detail_dis'][0]['title'];
        $this->data['list_other']=$this->discoveryhomemodel->load_detail_other($this->data['detail_dis'][0]['id_disco'],$this->data['detail_dis'][0]['id_cate']);
        $this->load->view('home_layout/discovery_detail_layout',$this->data);
    }
}
?>