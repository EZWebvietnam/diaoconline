<?php 
class Catediscoveryhomemodel extends CI_Model
{
    public function __construct()
    {
        parent::__construct();
        $this->load->database();
    }
    public function get_cate_parent()
    {
        $this->db->select();
        $this->db->where('parent',0);
        $query = $this->db->get('cate_discovery');
        return $query->result_array();
    }
    public function get_cate_from_parent($id)
    {
        $id = intval($id);
        $this->db->select();
        $this->db->where('parent',$id);
        $query = $this->db->get('cate_discovery');
        return $query->result_array();
    }
    public function get_cate_from_parent_($id)
    {
        $id = intval($id);
        $this->db->select();
        $this->db->where('parent',$id);
        $this->db->limit(5);
        $query = $this->db->get('cate_discovery');
        return $query->result_array();
    }
    public function get_cate_detail($id)
    {
        $id = intval($id);
        $this->db->select();
        $this->db->where('id',$id);
        $query = $this->db->get('cate_discovery');
        return $query->result_array();
    }
    
}
?>