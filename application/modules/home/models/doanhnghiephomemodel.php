<?php 
class Doanhnghiephomemodel extends CI_Model
{
    public function __construct()
    {
        parent::__construct();
        $this->load->database();
    }
    public function list_doanh_nghiep_nb()
    {
        $sql="SELECT business.* FROM business WHERE status = 1 AND noi_bat = 1 ORDER BY rand();";
        $query = $this->db->query($sql);
        return $query->result_array();
    }
    public function list_doanh_nghiep($number,$offset)
    {
        $number = intval($number);
        $offset = intval($offset);
        $sql="SELECT business.* FROM business WHERE status = 1 LIMIT $offset,$number";
        $query = $this->db->query($sql);
        return $query->result_array();
    }
    public function count_doanh_nghiep()
    {
        $sql="SELECT business.* FROM business WHERE status = 1";
        $query = $this->db->query($sql);
        return count($query->result_array());
    }
}
?>