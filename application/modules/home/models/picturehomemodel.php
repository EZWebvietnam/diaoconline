<?php 
class Picturehomemodel extends CI_Model
{
    public function __construct()
    {
        parent::__construct();
        $this->load->database();
    }
    public function get_image()
    {
        $this->db->select();
        $query = $this->db->get('image');
        return $query->result_array();
    }
}
?>