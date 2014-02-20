<?php 
class thamdinhgiamodel extends CI_Model
{
    public function __construct()
    {
        parent::__construct();
        $this->load->database();
    }
    public function insert(array $data)
    {
        $this->db->insert('tham_dinh_gia',$data);
        return $this->db->insert_id();
    }
}
?>