<?php 
class Propertyhomemodel extends CI_Model
{
    public function __construct()
    {
        parent::__construct();
        $this->load->database();
    }
    public function get_list_property_cc()
    {
        $this->db->select();
        $this->db->limit(6);
        $this->db->where('loai_hinh',1);
        $this->db->order_by('rand()');
        $list_pro = $this->db->get('property');
        return $list_pro->result_array();
    }
    public function get_list_property_new()
    {
        $this->db->select();
        $this->db->limit(6);
      
        $this->db->order_by('id DESC');
        $list_pro = $this->db->get('property');
        return $list_pro->result_array();
    }
    public function property_low_price()
    {
        $sql = "SELECT * FROM property WHERE price REGEXP '^-?[0-9]+$' AND price>=300000000 AND price <= 1000000000 ORDER BY RAND() LIMIT 6";
        $query = $this->db->query($sql);
        return $query->result_array();
    }
}
?>