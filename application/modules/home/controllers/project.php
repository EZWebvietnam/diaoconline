<?php 
class Project extends MY_Controller
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
        $this->load->model('projecthomemodel');
        parent::list_city();
        parent::list_district();
        parent::get_cate_pro_parent();
        parent::cate_project_sub();
        parent::project_noi_bat_lm1();
        parent::project_noi_menu($this->data['noi_bat_menu_1'][0]['id_pro']);
         // Tai san
        parent::get_tai_san_lm3();
        parent::get_ts_menu();
        parent::cate_sieu_thi();
    }
    public function index()
    {
        $this->load->helper('url');
        $config['uri_segment'] = 5;
        $page = $this->uri->segment(3);
      
        $config['per_page'] = 12;
        $config['total_rows'] = $this->projecthomemodel->count_all();
        if ($page == '') {
            $page = 1;
        }
        $page1 = ($page - 1) * $config['per_page'];
       
        if (!is_numeric($page)) {
            show_404();
            exit;
        }
       
       $num_pages = ceil($config['total_rows']/ $config['per_page']);
       $array_sv = $this->projecthomemodel->get_list_project_index($config['per_page'], $page1);
       $this->data['slide']=$this->projecthomemodel->project_noi_bat_slide();
       $this->data['total_page'] = $num_pages;
       $this->data['offset'] = $page1;
       $this->data['page']=$page;
       $this->data['total']=$config['total_rows'];
       $this->data['list']=$array_sv;
       $this->load->view('home_layout/project_index_layout', $this->data);
    }
    public function key($key)
    {
        $lower_key = strtolower($key);
        $this->load->helper('url');
        $config['uri_segment'] = 5;
        $page = $this->uri->segment(3);
      
        $config['per_page'] = 12;
        $config['total_rows'] = $this->projecthomemodel->count_all_key($key,$lower_key);
        if ($page == '') {
            $page = 1;
        }
        $page1 = ($page - 1) * $config['per_page'];
       
        if (!is_numeric($page)) {
            show_404();
            exit;
        }
       
       $num_pages = ceil($config['total_rows']/ $config['per_page']);
       $array_sv = $this->projecthomemodel->get_list_project_index_key($key,$lower_key,$config['per_page'], $page1);
        $this->data['slide']=$this->projecthomemodel->project_noi_bat_slide();
       $this->data['total_page'] = $num_pages;
       $this->data['offset'] = $page1;
       $this->data['page']=$page;
       $this->data['total']=$config['total_rows'];
       $this->data['list']=$array_sv;
       $this->load->view('home_layout/project_index_layout', $this->data);
    }
    public function detail($id)
    {
        parent::project_noi_bat();
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
        $detail =$this->projecthomemodel->project_detail($id);
        if(empty($detail))
        {
            show_404();exit;
        }
        else
        {
            $this->data['detail']=$detail;
            $this->data['title']=$detail[0]['title'];
            $this->load->view('home_layout/project_detail',$this->data);
        }
    }
    public function list_project($id)
    {
        parent::project_noi_bat();
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
        
        $config['per_page'] = 12;
        $config['total_rows'] = $this->projecthomemodel->count_all_cate($id);
        if ($page == '') {
            $page = 1;
        }
        $page1 = ($page - 1) * $config['per_page'];
       
        if (!is_numeric($page)) {
            show_404();
            exit;
        }
       
       $num_pages = ceil($config['total_rows']/ $config['per_page']);
       $array_sv = $this->projecthomemodel->get_list_project_cate($id,$config['per_page'], $page1);
       $this->data['total_page'] = $num_pages;
       $this->data['offset'] = $page1;
       $this->data['page']=$page;
       $this->data['total']=$config['total_rows'];
       $this->data['list']=$array_sv;
       $this->load->view('home_layout/project_list_layout', $this->data);
       
    }
}
?>