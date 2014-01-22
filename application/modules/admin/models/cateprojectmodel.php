<?php 
class Cateprojectmodel extends CI_Model
{
    public function __construct()
    {
        parent::__construct();
        $this->load->database();
    }
    public function list_cate_project()
    {
        $sql="SELECT * FROM cate_project";
        $query = $this->db->query($sql);
        return $query->result_array();
    }
}
?>