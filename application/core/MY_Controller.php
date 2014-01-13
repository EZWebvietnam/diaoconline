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
}
?>
