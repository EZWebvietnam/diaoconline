<?php
class MY_Controller extends CI_Controller
{
    protected $data;
    public function __construct()
    {
        parent::__construct();
        $this->data = array();
    }
    public function get_menu_left()
    {
        $this->load->model('catenewshomemodel');
        $cate_parent = $this->catenewshomemodel->get_parent();
        $array = array();
        $array_parent = array();
        $array_c = array();
        foreach($cate_parent as $cate_p)
        {
            $cate_sub = $this->catenewshomemodel->get_from_parent($cate_p['id']);
            $array_parent = array('id'=>$cate_p['id'],'name'=>$cate_p['name']);
            foreach($cate_sub as $cate_s)
            {
                $array_c[$cate_s['id']]=$cate_s['name'];
            }
            $array[] = array('cate_parent'=>$array_parent,'cate_sub'=>$array_c);
            $array_parent = array();
            $array_c = array();
        }
        $this->data['left_menu']=$array;
    }
    public function get_menu_new_nav()
    {
        $this->load->model('catenewshomemodel');
        $cate_parent = $this->catenewshomemodel->get_from_parent(1);
        $this->data['new_nav']=$cate_parent;
    }
    public function load_last_new()
    {
        $this->load->model('newshomemodel');
        $post_new = $this->newshomemodel->load_last_new();
        $this->data['new_on_nav']=$post_new;
    }
    public function load_list_last_new($id)
    {
        $id = intval($id);
        $this->load->model('newshomemodel');
        $post_new = $this->newshomemodel->load_list_last_new($id);
        $this->data['list_last_new']=$post_new;
    }
    public function get_new_index()
    {
        $this->load->model('catenewshomemodel');
        $this->load->model('newshomemodel');
       
        $array = array();
        $array_parent = array();
        $array_c = array();
        $id_array = array();
       
       
           
            $cate_sub = $this->catenewshomemodel->get_from_parent(1);
            foreach($cate_sub as $cate_s)
            {
                $array_c[$cate_s['id']]=$cate_s['name'];
                $id_array=$cate_s['id'];
                $new_array = $this->newshomemodel->get_new_list_($id_array);
                $new[$cate_s['id']]=$new_array;
            }
            $array[] = array('cate_sub'=>$array_c,'list_new'=>$new);
            //print_r($array);exit;
            $id_array = array();
            $array_parent = array();
            $array_c = array();
            $new = array();
       
        $this->data['main']=$array;
    }
   
    public function get_list_cafe_law()
    {
     
        $this->load->model('newshomemodel');
        $this->data['list_cafe_law']=$this->newshomemodel->get_list_cafe_law();
    }
    public function get_cate_dis_parent()
    {
        $this->load->model('catediscoveryhomemodel');
        $list_parent = $this->catediscoveryhomemodel->get_cate_parent();
        $list_cate = array();
        $cate_p = array();
        $cate_s = array();
        foreach($list_parent as $l_p)
        {
            $cate_sub = $this->catediscoveryhomemodel->get_cate_from_parent($l_p['id']);
            $cate_p = array('id'=>$l_p['id'],'name'=>$l_p['name']);
            foreach($cate_sub as $c_s)
            {
                $cate_s[$c_s['id']]=$c_s['name'];
            }
            $list_cate[]=array('cate_parent'=>$cate_p,'cate_sub'=>$cate_s);
            $cate_p = array();
            $cate_s = array();
        }
        $this->data['list_cate_left']=$list_cate;
    }
    public function get_kham_pha_index()
    {
        $this->load->model('catediscoveryhomemodel');
        $cate_sub = $this->catediscoveryhomemodel->get_cate_from_parent(1);
        $list_new = array();
        $list_new_ = array();
        
        foreach($cate_sub as $c_s)
        {
           $cate_s[$c_s['id']]=$c_s['name'];
           $list_new = $this->discoveryhomemodel->load_discovery_cate($c_s['id']);
           $list_new_[$c_s['id']] = $list_new;
           
           
        }
        $list_cate=array('cate_sub'=>$cate_s,'list_new'=>$list_new_);
        $list_new_ = array();
        $list_new = array();
        $cate_s = array();
        $this->data['main']=$list_cate;
    }
    public function get_cate_dis_nav()
    {
        $this->load->model('catediscoveryhomemodel');
        $cate_sub = $this->catediscoveryhomemodel->get_cate_from_parent(1);
        $this->data['nav_cate_dis'] = $cate_sub;
    }
    public function get_cate_dis_nav_()
    {
        $this->load->model('catediscoveryhomemodel');
        $cate_sub = $this->catediscoveryhomemodel->get_cate_from_parent_(1);
        $this->data['nav_cate_dis_'] = $cate_sub;
    }
    public function dis_noi_bat()
    {
        $this->load->model('discoveryhomemodel');
        $this->data['last_dis']=$this->discoveryhomemodel->load_last_dis();
    }
    public function dis_noi_bat_other($id)
    {
        $this->load->model('discoveryhomemodel');
        $this->data['last_dis_nb']=$this->discoveryhomemodel->load_other_last_dis($id);
    }
    public function list_city()
    {
        $this->load->model('home/cityhomemodel');
        $list_ = $this->cityhomemodel->get_list_city();
        foreach($list_ as $city)
        {
            $data[$city['provinceid']]=$city['name'];
        }
        $this->data['list_city']=$data;
    }
    public function list_district()
    {
        $this->load->model('home/cityhomemodel');
        $list_ = $this->cityhomemodel->get_list_district();
        foreach($list_ as $city)
        {
            $data[$city['districtid']]=$city['name'];
        }
        
        $this->data['list_district']=$data;
    }
     public function get_cate_pro_parent()
    {
        $this->load->model('cateprojecthomemodel');
        $list_parent = $this->cateprojecthomemodel->get_cate_parent();
        $list_cate = array();
        $cate_p = array();
        $cate_s = array();
        foreach($list_parent as $l_p)
        {
            $cate_sub = $this->cateprojecthomemodel->get_cate_from_parent($l_p['id']);
            $cate_p = array('id'=>$l_p['id'],'name'=>$l_p['name']);
            foreach($cate_sub as $c_s)
            {
                $cate_s[$c_s['id']]=$c_s['name'];
            }
            $list_cate[]=array('cate_parent'=>$cate_p,'cate_sub'=>$cate_s);
            $cate_p = array();
            $cate_s = array();
        }
        $this->data['list_cate_project_left']=$list_cate;
    }
    public function project_noi_bat()
    {
        $this->load->model('projecthomemodel');
        $this->data['prj_noi_bat']=$this->projecthomemodel->project_noi_bat();
    }
    public function cate_project_sub()
    {
        $this->load->model('cateprojecthomemodel');
        $cate_sub = $this->cateprojecthomemodel->get_cate_from_parent(1);
        $this->data['cate_pro_nav']=$cate_sub;
    }
    public function project_noi_bat_lm1()
    {
         $this->load->model('projecthomemodel');
        $cate_sub = $this->projecthomemodel->project_noi_bat_lm1();
        $this->data['noi_bat_menu_1']=$cate_sub;
    }
    public function project_noi_menu($id)
    {
        $this->load->model('projecthomemodel');
        $prj = $this->projecthomemodel->project_noi_menu($id);
        $this->data['noi_bat_menu']=$prj;
        
    }
    public function get_tai_san_lm3()
    {
        $this->load->model('propertyhomemodel');
        $prj = $this->propertyhomemodel->get_list_property_nav();
        $this->data['tai_san_noi_bat']=$prj;
    }
    public function get_ts_menu()
    {
        $this->load->model('propertyhomemodel');
        $prj = $this->propertyhomemodel->get_list_property_new();
        $this->data['tai_san_noi_bat_khac']=$prj;
    }
    public function cate_sieu_thi()
    {
        $this->load->model('catepropertyhomemodel');
        $list = $this->catepropertyhomemodel->cate_list();
        $this->data['cate_sieu_thi_list']=$list;
    }
    public function load_phong_thuy()
    {
        $this->load->model('discoveryhomemodel');
        $phong_thuy = $this->discoveryhomemodel->load_phong_thuy();
        $this->data['list_phong_thuy']=$phong_thuy;
    }
    public function so_du()
    {
        $this->load->model('blancehomemodel');
        $id_user = $this->session->userdata('user_id');
        $this->data['so_du_nav']=$this->blancehomemodel->so_du($id_user);
    }
    public function nha_cua_sao()
    {
        $this->load->model('discoveryhomemodel');
        $this->data['nha_dep_cua_sao']=$this->discoveryhomemodel->load_nha_cua_sao();
    }
    public function nha_dep()
    {
        $this->load->model('nhadephomemodel');
        $this->data['nha_dep']=$this->nhadephomemodel->load_nha_dep_();
    }
    public function dn_nb()
    {
        $this->load->model('doanhnghiephomemodel');
        $this->data['dn_nb_core']=$this->doanhnghiephomemodel->list_doanh_nghiep_nb();
    }
}
?>
