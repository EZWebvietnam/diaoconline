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
        //Load Adv
         parent::load_adv_home_p1();
        parent::load_adv_home_p2();
        parent::load_adv_home_p3();
        parent::load_adv_home_p4();
        parent::load_adv_home_p5();
        parent::load_adv_home_p8();
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
    public function tim_kiem($string)
    {
        $key = strtolower($string);
        $this->load->helper('url');
        $config['uri_segment'] = 5;
        $page = $this->uri->segment(5);
        
        $config['per_page'] = 10;
        $config['total_rows'] = $this->doanhnghiephomemodel->count_doanh_nghiep_key($key);
       
        if ($page == '') {
            $page = 1;
        }
        $page1 = ($page - 1) * $config['per_page'];
       
        if (!is_numeric($page)) {
            show_404();
            exit;
        }
      
       $num_pages = ceil($config['total_rows']/ $config['per_page']);
       $array_sv = $this->doanhnghiephomemodel->list_doanh_nghiep_key($key,$config['per_page'], $page1);
       $this->data['total_page'] = $num_pages;
       $this->data['offset'] = $page1;
       $this->data['page']=$page;
       $this->data['total']=$config['total_rows'];
       $this->data['list']=$array_sv;
       $this->data['dn_noi_bat']=$this->doanhnghiephomemodel->list_doanh_nghiep_nb();
       $this->load->view('home_layout/doanh_nghiep_layout',$this->data);
    }
    public function gioi_thieu_dn($id)
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
        $this->data['about']=$this->doanhnghiephomemodel->gioi_thieu($id);
        if(empty($this->data['about']))
        {
            show_404();
            exit;
        }
        $this->data['des']=sub_string($this->data['about'][0]['gioi_thieu'],300);
        $this->data['title']=$this->data['about'][0]['ten_dn'];
        $this->data['main_content']='doanhnghiep/dn_detail';
        $this->load->view('home_layout/doanh_nghiep_detail_layout',$this->data);
    }
    public function du_an($id)
    {
        
        $this->load->model('projecthomemodel');
        $this->load->helper('url');
        $config['uri_segment'] = 5;
        $page = $this->uri->segment(5);
       
        $config['per_page'] = 10;
        $config['total_rows'] = $this->projecthomemodel->count_list_project_dn($id);
      
        if ($page == '') {
            $page = 1;
        }
        $page1 = ($page - 1) * $config['per_page'];
       
        if (!is_numeric($page)) {
            show_404();
            exit;
        }
      
       $num_pages = ceil($config['total_rows']/ $config['per_page']);
       $array_sv = $this->projecthomemodel->get_list_project_dn($id,$config['per_page'], $page1);
       
       $this->data['total_page'] = $num_pages;
       $this->data['offset'] = $page1;
       $this->data['page']=$page;
       $this->data['total']=$config['total_rows'];
       $this->data['list']=$array_sv;
       $this->data['dn_noi_bat']=$this->doanhnghiephomemodel->list_doanh_nghiep_nb();
       //
       $this->data['about']=$this->doanhnghiephomemodel->gioi_thieu($id);
       if(empty($this->data['about']))
        {
            show_404();
            exit;
        }
        $this->data['des']=sub_string($this->data['about'][0]['gioi_thieu'],300);
        $this->data['title']=$this->data['about'][0]['ten_dn'];
        //
       $this->data['main_content']='doanhnghiep/list_du_an';
       $this->load->view('home_layout/doanh_nghiep_detail_layout',$this->data);
    }
}
?>