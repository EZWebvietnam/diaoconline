<?php 
class Catenewshomemodel extends CI_Model
{
    public function __construct()
    {
        parent::__construct();
        $this->load->database();
    }
    public function get_parent()
    {
        $this->db->select();
        $this->db->where('parent',0);
        $query_cate = $this->db->get('cate_new');
        return $query_cate->result_array();
    }
    public function get_from_parent($id)
    {
        $id = intval($id);
        $this->db->select();
        $this->db->where('parent',$id);
        $query_cate = $this->db->get('cate_new');
        return $query_cate->result_array();
    }
}
?>