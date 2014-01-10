<?php 
class Propertyhomemodel extends CI_Model
{
    public function __construct()
    {
        parent::__construct();
        $this->load->database();
    }
    public function get_list_property()
    {
        $this->db->select();
        $this->db->limit(6);
        $this->db->order_by('id DESC');
        $list_pro = $this->db->get('property');
        return $list_pro->result_array();
    }
}
?>