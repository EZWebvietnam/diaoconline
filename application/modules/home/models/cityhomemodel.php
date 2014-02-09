<?php 
class Cityhomemodel extends CI_Model
{
    public function __construct()
    {
        parent::__construct();
        $this->load->database();
    }
    public function get_list_city()
    {
        $this->db->select();
        $query = $this->db->get('province');
        return $query->result_array();
    }
    public function get_list_district()
    {
        $this->db->select();
        $query = $this->db->get('district');
        return $query->result_array();
    }
    public function get_list_district_city($id)
    {
        $this->db->select();
        $this->db->where('provinceid',$id);
        
        $query = $this->db->get('district');
        return $query->result_array();
    }
     public function get_list_city_()
    {
        $this->db->select();
        
         $this->db->order_by('provinceid ASC');
        $this->db->limit(10);
        $query = $this->db->get('province');
        return $query->result_array();
    }
   
}
?>