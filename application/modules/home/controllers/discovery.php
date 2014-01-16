<?php 
class Discovery extends MY_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('discoveryhomemodel');
        parent::get_cate_dis_parent();
        parent::get_menu_new_nav();
        parent::load_last_new();
        parent::load_list_last_new($this->data['new_on_nav'][0]['id_new']);
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
    }
    public function index()
    {
         parent::project_noi_bat();
        parent::get_kham_pha_index();
        $this->data['list_thuong_hieu']=$this->discoveryhomemodel->load_discovery_cate_limt_10(6);
        $this->data['slide_discovery']=$this->discoveryhomemodel->load_discovery_cate_limt_2();
        $this->data['list_shopping']=$this->discoveryhomemodel->load_detail_other(0,7);
        $this->load->view('home_layout/kham_pha_layout',$this->data);
    }
    public function discovery_detail($id)
    {
         parent::project_noi_bat();
        if(empty($id))
        {
            show_404();
            exit;
        }
        if(!is_numeric($id))
        {
            show_404();exit;
        }
        $this->data['main_content']='discovery_view/discovery_detail';
        $this->data['detail_dis'] = $this->discoveryhomemodel->load_detail($id);
        $this->data['title']=$this->data['detail_dis'][0]['title'];
        $this->data['list_other']=$this->discoveryhomemodel->load_detail_other($this->data['detail_dis'][0]['id_disco'],$this->data['detail_dis'][0]['id_cate']);
        $this->load->view('home_layout/discovery_detail_layout',$this->data);
    }
    public function list_disc($id)
    {
        parent::project_noi_bat();
         $this->load->model('catediscoveryhomemodel');
         
        if (!is_numeric($id)) {
            show_404();
            exit;
        }
        
        $detail_cate = $this->catediscoveryhomemodel->get_cate_detail($id);
        $this->data['title']=$detail_cate[0]['name'];
        if (empty($detail_cate)) {
            show_404();
            exit;
        }
        
        $this->load->helper('url');
        $config['uri_segment'] = 5;
        $page = $this->uri->segment(4);
        $config['per_page'] = 10;
        $config['total_rows'] = $this->discoveryhomemodel->count_all($id);
        if ($page == '') {
            $page = 1;
        }
        $page1 = ($page - 1) * $config['per_page'];
       
        if (!is_numeric($page)) {
            show_404();
            exit;
        }
        if (empty($id)) {
            redirect('trang-chu', 'refresh');
        }
       $num_pages = ceil($config['total_rows']/ $config['per_page']);
       $array_sv = $this->discoveryhomemodel->get_list_cate($id,$config['per_page'], $page1);
       $this->data['cate_parent'] = $this->catediscoveryhomemodel->get_cate_detail($detail_cate[0]['parent']);
       $this->data['total_page'] = $num_pages;
       $this->data['offset'] = $page1;
       
       $this->data['detail']=$detail_cate;
       $this->data['page']=$page;
       $this->data['total']=$config['total_rows'];
       $this->data['list']=$array_sv;
      
         $this->data['list_thuong_hieu']=$this->discoveryhomemodel->load_discovery_cate_limt_10(6);
         $this->data['list_shopping']=$this->discoveryhomemodel->load_detail_other(0,7);
         $this->data['main_content']='discovery_view/list_disc';
         $this->load->view('home_layout/list_kham_pha_layout',$this->data);
    }
}
?>