<?php
class Gioithieumodel extends CI_Model
{
    public function __construct() {
        parent::__construct();
        $this->load->database();
    }
    public function get_about($id)
    {
        $id = intval($id);
        $id = $this->db->escape($id);
        $this->db->select();
        $this->db->where('id',$id);
        $query=$this->db->get('about');
        return $query->result_array();
    }
    public function get_list_about()
    {
         $this->db->select();
         $this->db->where('parent',0);
          $query=$this->db->get('about');
        return $query->result_array();
    }
    public function get_about_detail()
    {
        $this->db->select();
        $this->db->where('id',1);
        $query = $this->db->get('about');
        return $query->result_array();
    }
    public function get_parent($id = null)
    {
        $id = intval($id);
        $id = intval($id);
        $id = $this->db->escape($id);
        $this->db->select();
        $this->db->where('parent',$id);
        $query=$this->db->get('about');
        return $query->result_array();
    }
}
?>
