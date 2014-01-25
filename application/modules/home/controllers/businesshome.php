<?php 
class Businesshome extends MY_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('doanhnghiephomemodel');
        parent::get_menu_left();
        parent::get_menu_new_nav();
        parent::load_last_new();
        parent::load_list_last_new($this->data['new_on_nav'][0]['id_cate']);
        
        parent::get_list_cafe_law();
        parent::get_cate_dis_nav();
        parent::dis_noi_bat();
        parent::dis_noi_bat_other($this->data['last_dis'][0]['id_disco']);
         parent::cate_project_sub();
        parent::project_noi_bat_lm1();
        parent::project_noi_menu($this->data['noi_bat_menu_1'][0]['id_pro']);
        parent::list_city();
        parent::list_district();
         // Tai san
        parent::get_tai_san_lm3();
        parent::get_ts_menu();
        parent::cate_sieu_thi();
        parent::get_ts_menu();
        parent::load_phong_thuy();
        $this->load->library('session');
        	$this->load->library('tank_auth');
		$this->lang->load('tank_auth');
    }
    public function load_dn()
    {
        $this->load->helper('url');
        $config['uri_segment'] = 5;
        $page = $this->uri->segment(3);
        $config['per_page'] = 10;
        $config['total_rows'] = $this->doanhnghiephomemodel->count_doanh_nghiep();
        
        if ($page == '') {
            $page = 1;
        }
        $page1 = ($page - 1) * $config['per_page'];
       
        if (!is_numeric($page)) {
            show_404();
            exit;
        }
      
       $num_pages = ceil($config['total_rows']/ $config['per_page']);
       $array_sv = $this->doanhnghiephomemodel->list_doanh_nghiep($config['per_page'], $page1);
       $this->data['total_page'] = $num_pages;
       $this->data['offset'] = $page1;
       $this->data['page']=$page;
       $this->data['total']=$config['total_rows'];
       $this->data['list']=$array_sv;
      $this->data['dn_noi_bat']=$this->doanhnghiephomemodel->list_doanh_nghiep_nb();
       $this->load->view('home_layout/doanh_nghiep_layout',$this->data);
    }
}
?>