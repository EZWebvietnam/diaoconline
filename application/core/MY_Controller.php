<?php
class MY_Controller extends CI_Controller
{
    protected $data;
    public function __construct()
    {
        parent::__construct();
        $this->data = array();
    }
    public function load_cate_new()
    {
        $this->load->model('danhmuctintucmodel');
        $this->load->model('tintucmodel');
        $this->load->model('dichvumodel');
        $this->data['cate_new'] = $this->danhmuctintucmodel->get_all();
        $this->data['news_']= $this->tintucmodel->get_news();
        $this->data['list_services'] = $this->dichvumodel->get_all();
    }
    public function load_new_home()
    {
         $this->load->model('tintucmodel');
         $this->data['tin_tuc_home'] = $this->tintucmodel->get_news_home();
    }
    public function load_about()
    {
        $this->load->model('gioithieumodel');
        $this->data['list_gioithieu']=$this->gioithieumodel->get_list_about();
    }
    public function load_about_des()
    {
        $this->load->model('gioithieumodel');
        $this->data['list_gioithieu_desc']=$this->gioithieumodel->get_about_detail();
    }
    public function load_dich_vu_des()
    {
        $this->load->model('dichvumodel');
        $this->data['list_services_desc'] = $this->dichvumodel->get_dich_vu_desc();
        
    }
     public function load_dich_vu()
    {
        $this->load->model('dichvumodel');
        $this->data['list_dv']=$this->dichvumodel->get_all();
    }
}
?>
