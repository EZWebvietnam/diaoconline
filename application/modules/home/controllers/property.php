<?php 
class Property extends MY_Controller
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
        parent::list_city();
        parent::list_district();
         parent::cate_project_sub();
        parent::project_noi_bat_lm1();
        
        parent::project_noi_menu($this->data['noi_bat_menu_1'][0]['id_pro']);
        
        // Tai san
        parent::get_tai_san_lm3();
        parent::get_ts_menu();
        parent::cate_sieu_thi();
        //
        parent::dn_nb();
        $this->load->model('propertyhomemodel');
        	$this->load->library('tank_auth');
		$this->lang->load('tank_auth');
    }
    public function detail($id)
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
        $this->load->model('cityhomemodel');
        $this->data['detail']=$this->propertyhomemodel->property_detail($id);
        if(empty($this->data['detail']))
        {
            show_404();
            exit;
        }        
        $this->data['list_district_']=$this->cityhomemodel->get_list_district_city($this->data['detail'][0]['id_city']);
        $this->data['list_loai_dia_oc']=$this->propertyhomemodel->list_loai_dia_oc();
        $this->data['list_city_']=$this->cityhomemodel->get_list_city_();
        $this->data['list_cung_nguoi_dang'] = $this->propertyhomemodel->list_cung_nguoi_dang($this->data['detail'][0]['id_user']);
        $this->data['title']=$this->data['detail'][0]['title'];
        $this->data['main_content']='property_view/detail';
        $this->load->view('home_layout/detail_nha',$this->data);
    }
    public function list_property($id)
    {
        $this->load->model('catepropertyhomemodel');
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
        $detail_cate = $this->catepropertyhomemodel->cate_detail($id);
        if(empty($detail_cate))
        {
            show_404();
            exit;
        }
        $config['uri_segment'] = 5;
        $page = $this->uri->segment(3);
        $config['per_page'] = 12;
        $config['total_rows'] = $this->propertyhomemodel->count_property_cate($id);
        if ($page == '') {
            $page = 1;
        }
        $page1 = ($page - 1) * $config['per_page'];
       
        if (!is_numeric($page)) {
            show_404();
            exit;
        }
       
       $num_pages = ceil($config['total_rows']/ $config['per_page']);
       $array_sv = $this->propertyhomemodel->list_property($id,$config['per_page'], $page1);
       $this->data['detail_cate']=$detail_cate;
       $this->data['total_page'] = $num_pages;
       $this->data['offset'] = $page1;
       $this->data['page']=$page;
       $this->data['total']=$config['total_rows'];
       $this->data['list']=$array_sv;
        $this->data['main_content']='property_view/list_new';
        $this->load->view('home_layout/list_tai_san',$this->data);
    }
     public function sieu_thi()
    {
       
        
        $this->load->helper('url');
        $config['uri_segment'] = 5;
        $page = $this->uri->segment(3);
        $config['per_page'] = 12;
        $config['total_rows'] = $this->propertyhomemodel->count_property_cate_st();
        if ($page == '') {
            $page = 1;
        }
        $page1 = ($page - 1) * $config['per_page'];
       
        if (!is_numeric($page)) {
            show_404();
            exit;
        }
       
       $num_pages = ceil($config['total_rows']/ $config['per_page']);
       $array_sv = $this->propertyhomemodel->list_property_st($config['per_page'], $page1);
      
       $this->data['total_page'] = $num_pages;
       $this->data['offset'] = $page1;
       $this->data['page']=$page;
       $this->data['total']=$config['total_rows'];
       $this->data['list']=$array_sv;
        $this->data['main_content']='property_view/sieu_thi';
        $this->load->view('home_layout/list_tai_san',$this->data);
    }
    public function list_cc()
    {
        $this->load->helper('url');
        $config['uri_segment'] = 5;
        $page = $this->uri->segment(4);
       
        $config['per_page'] = 12;
        $config['total_rows'] = $this->propertyhomemodel->count_property_cate_cc();
        if ($page == '') {
            $page = 1;
        }
        $page1 = ($page - 1) * $config['per_page'];
       
        if (!is_numeric($page)) {
            show_404();
            exit;
        }
       
       $num_pages = ceil($config['total_rows']/ $config['per_page']);
       $array_sv = $this->propertyhomemodel->list_property_cc($config['per_page'], $page1);
      
       $this->data['total_page'] = $num_pages;
       $this->data['offset'] = $page1;
       $this->data['page']=$page;
       $this->data['total']=$config['total_rows'];
       $this->data['list']=$array_sv;
       $this->data['main_content']='property_view/chinh_chu';
       $this->load->view('home_layout/list_tai_san',$this->data);
    }
     public function nha_tro()
    {
        $this->load->helper('url');
        $config['uri_segment'] = 5;
        $page = $this->uri->segment(4);
       
        $config['per_page'] = 12;
        $config['total_rows'] = $this->propertyhomemodel->count_property_cate_nt();
        if ($page == '') {
            $page = 1;
        }
        $page1 = ($page - 1) * $config['per_page'];
       
        if (!is_numeric($page)) {
            show_404();
            exit;
        }
       
       $num_pages = ceil($config['total_rows']/ $config['per_page']);
       $array_sv = $this->propertyhomemodel->list_property_nt($config['per_page'], $page1);
      
       $this->data['total_page'] = $num_pages;
       $this->data['offset'] = $page1;
       $this->data['page']=$page;
       $this->data['total']=$config['total_rows'];
       $this->data['list']=$array_sv;
       $this->data['main_content']='property_view/nha_tro';
       $this->load->view('home_layout/list_tai_san',$this->data);
    }
    public function du_an($id)
    {
       $this->load->helper('url');
        $config['uri_segment'] = 5;
        $page = $this->uri->segment(4);
        
        $config['per_page'] = 12;
        $config['total_rows'] = $this->propertyhomemodel->count_property_cate_duan($id);
        if ($page == '') {
            $page = 1;
        }
        $page1 = ($page - 1) * $config['per_page'];
       
        if (!is_numeric($page)) {
            show_404();
            exit;
        }
       
       $num_pages = ceil($config['total_rows']/ $config['per_page']);
       $array_sv = $this->propertyhomemodel->list_property_duan($id,$config['per_page'], $page1);
       $this->data['id']=$id;
       $this->data['total_page'] = $num_pages;
       $this->data['offset'] = $page1;
       $this->data['page']=$page;
       $this->data['total']=$config['total_rows'];
       $this->data['list']=$array_sv;
       $this->data['main_content']='property_view/du_an';
       $this->load->view('home_layout/list_tai_san',$this->data);
    }
    public function gia_nho($gianho,$gialon)
    {
        $gialon = intval($gialon);
        $gianho = intval($gianho);
        $this->load->helper('url');
        $config['uri_segment'] = 5;
        $page = $this->uri->segment(4);
        
        $config['per_page'] = 12;
        $config['total_rows'] = $this->propertyhomemodel->count_property_cate_gia($gianho,$gialon);
        if ($page == '') {
            $page = 1;
        }
        $page1 = ($page - 1) * $config['per_page'];
       
        if (!is_numeric($page)) {
            show_404();
            exit;
        }
       
       $num_pages = ceil($config['total_rows']/ $config['per_page']);
       $array_sv = $this->propertyhomemodel->list_property_gia($gianho,$gialon,$config['per_page'], $page1);
      
       $this->data['total_page'] = $num_pages;
       $this->data['offset'] = $page1;
       $this->data['page']=$page;
       $this->data['total']=$config['total_rows'];
       $this->data['list']=$array_sv;
       $this->data['main_content']='property_view/gia';
       $this->load->view('home_layout/list_tai_san',$this->data);
    }
    public function get_theo_quan($id,$id_district)
    {
        $id = intval($id);
        if(empty($id) || empty($id_district))
        {
            show_404();exit;
        }
        if(!is_numeric($id))
        {
            show_404();
            exit;
        }
        $this->load->helper('url');
        $config['uri_segment'] = 5;
        $page = $this->uri->segment(6);
        
        $config['per_page'] = 12;
        $config['total_rows'] = $this->propertyhomemodel->count_property_quan($id,$id_district);
        
        if ($page == '') {
            $page = 1;
        }
        $page1 = ($page - 1) * $config['per_page'];
       
        if (!is_numeric($page)) {
            show_404();
            exit;
        }
       
       $num_pages = ceil($config['total_rows']/ $config['per_page']);
       $array_sv = $this->propertyhomemodel->list_property_quan($id,$id_district,$config['per_page'], $page1);
      
       $this->data['total_page'] = $num_pages;
       $this->data['offset'] = $page1;
       $this->data['page']=$page;
       $this->data['total']=$config['total_rows'];
       $this->data['list']=$array_sv;
       $this->data['main_content']='property_view/list_quan';
       $this->load->view('home_layout/list_tai_san',$this->data);
    }
     public function get_theo_thanh_pho($id,$id_city)
    {
        $id = intval($id);
        $id = intval($id);
        if(empty($id) || empty($id_city))
        {
            show_404();exit;
        }
        if(!is_numeric($id))
        {
            show_404();
            exit;
        }
        $this->load->helper('url');
        $config['uri_segment'] = 5;
        $page = $this->uri->segment(6);
        
        $config['per_page'] = 12;
        $config['total_rows'] = $this->propertyhomemodel->count_property_city($id,$id_city);
        
        if ($page == '') {
            $page = 1;
        }
        $page1 = ($page - 1) * $config['per_page'];
       
        if (!is_numeric($page)) {
            show_404();
            exit;
        }
       
       $num_pages = ceil($config['total_rows']/ $config['per_page']);
       $array_sv = $this->propertyhomemodel->list_property_city($id,$id_city,$config['per_page'], $page1);
      
       $this->data['total_page'] = $num_pages;
       $this->data['offset'] = $page1;
       $this->data['page']=$page;
       $this->data['total']=$config['total_rows'];
       $this->data['list']=$array_sv;
       $this->data['main_content']='property_view/list_city';
       $this->load->view('home_layout/list_tai_san',$this->data);
    }
    public function save_property($id)
    {
        
        $id = intval($id);
        
        if($this->input->is_ajax_request())
        {
            if($this->tank_auth->is_logged_in())
            {
                $detail = $this->propertyhomemodel->check_save($this->session->userdata('user_id'),$id);
               
                if(!empty($detail))
                {
                    $array = array('msg'=>'da-luu');
                }
                else
                {
                    $data = array('id_property'=>$id,'id_user'=>$this->session->userdata('user_id'),'create_date'=>strtotime('now'));
                    $id = $this->propertyhomemodel->save_property($data);
                    if($id>0)
                    {
                        $array = array('msg'=>'da-luu');
                    }
                }
            }
            else
            {
                $array = array('msg'=>'dang-nhap');
            }
            echo  json_encode($array);
        }
    }
    public function delete_save($id)
    {
        if($this->input->is_ajax_request())
        {
            $id = intval($id);
            $this->propertyhomemodel->delete_save($id);
            $array = array('msg'=>TRUE);
            echo json_encode($array);
        }
    }
    public function delete($id)
    {
        if($this->input->is_ajax_request())
        {
            $id = intval($id);
            
            $this->propertyhomemodel->delete($id);
            $array = array('msg'=>TRUE);
            echo json_encode($array);
        }
    }
}
?>