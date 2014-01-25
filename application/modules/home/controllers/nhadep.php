<?php 
class Nhadep extends MY_Controller
{
    public function __construct()
    {
        parent::__construct();
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
        $this->load->model('nhadephomemodel');
    }
    public function list_nhadep()
    {
        $this->load->helper('url');
        $config['uri_segment'] = 5;
        $page = $this->uri->segment(3);
        $config['per_page'] = 10;
        $config['total_rows'] = $this->nhadephomemodel->count_nha_dep_home();
       
        if ($page == '') {
            $page = 1;
        }
        $page1 = ($page - 1) * $config['per_page'];
       
        if (!is_numeric($page)) {
            show_404();
            exit;
        }
      
       $num_pages = ceil($config['total_rows']/ $config['per_page']);
       $array_sv = $this->nhadephomemodel->load_nha_dep_home($config['per_page'], $page1);
       $this->data['total_page'] = $num_pages;
       $this->data['offset'] = $page1;
       $this->data['page']=$page;
       $this->data['total']=$config['total_rows'];
       $this->data['list']=$array_sv;
       $this->data['list_slide']=$this->nhadephomemodel->load_nha_dep_slide();
       $this->data['cate_nha_dep']=$this->nhadephomemodel->select_cate_nha();
       $this->load->view('home_layout/nhadep_layout',$this->data);
    }
    public function nhadep_detail($id)
    {
        if(empty($id))
        {
            show_404();
            exit;
        }
        if(!is_numeric($id))
        {
            show_404();
            exit;
        }
        $detail = $this->nhadephomemodel->load_nha_dep_detail($id);
        if(empty($detail))
        {
            show_404();
            exit;
        }
        $this->data['cate_nha_dep']=$this->nhadephomemodel->select_cate_nha();
        $this->data['detail']=$detail;
        $this->data['title']=$detail[0]['title'];
        $this->data['hinh']=$this->nhadephomemodel->load_hinh($detail[0]['id']);
        $this->data['cung_the_loai']=$this->nhadephomemodel->cung_the_loai($detail[0]['id_cate']);
        $this->data['nhadep_khac'] = $this->nhadephomemodel->nhadep_khac();
        $this->load->view('home_layout/nhadep_detail_layout',$this->data);
    }
    public function list_nhadep_cate($id)
    {
        if(empty($id))
        {
            show_404();
            exit;
        }
        if(!is_numeric($id))
        {
            show_404();
            exit;
        }
        $this->load->helper('url');
        $config['uri_segment'] = 5;
        $page = $this->uri->segment(4);
        $config['per_page'] = 10;
        $config['total_rows'] = $this->nhadephomemodel->count_nha_dep_cate($id);
        if ($page == '') {
            $page = 1;
        }
        $page1 = ($page - 1) * $config['per_page'];
       
        if (!is_numeric($page)) {
            show_404();
            exit;
        }
      
       $num_pages = ceil($config['total_rows']/ $config['per_page']);
       $array_sv = $this->nhadephomemodel->load_nha_dep_cate($id,$config['per_page'], $page1);
       $this->data['total_page'] = $num_pages;
       $this->data['offset'] = $page1;
       $this->data['page']=$page;
       $this->data['total']=$config['total_rows'];
       $this->data['list']=$array_sv;
       $this->data['list_slide']=$this->nhadephomemodel->load_nha_dep_slide();
       $this->data['cate_nha_dep']=$this->nhadephomemodel->select_cate_nha();
       $this->load->view('home_layout/nhadep_layout',$this->data);
    }
}
?>