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
}
?>
