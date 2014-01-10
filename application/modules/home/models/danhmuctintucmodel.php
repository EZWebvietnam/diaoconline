<?php
class Danhmuctintucmodel extends CI_Model
{
    public function __construct() {
        parent::__construct();
        $this->load->database();
    }
    public function get_all()
    {
        $this->db->select();
        $query = $this->db->get('cate_new');
        return $query->result_array();
    }
    public function get_cate($id)
    {
        $id = intval($id);
        $this->db->select();
        $this->db->where('id',$id);
        $query = $this->db->get('cate_new');
        return $query->result_array();
    }
}
?>
