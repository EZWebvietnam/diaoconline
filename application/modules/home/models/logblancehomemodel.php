<?php 
class Logblancehomemodel extends CI_Model
{
    public function __construct()
    {
        parent::__construct();
        $this->load->database();
    }
    public function list_giao_dich($id_user,$number,$offset)
    {
        $id_user = intval($id_user);
        $sql = "SELECT * FROM log_giao_dich WHERE id_user = $id_user LIMIT $offset,$number";
        
        $query = $this->db->query($sql);
        return $query->result_array();
    }
    public function count_giao_dich($id_user)
    {
        $id_user = intval($id_user);
        $sql = "SELECT * FROM log_giao_dich WHERE id_user = $id_user";
        $query = $this->db->query($sql);
        return count($query->result_array());
    }
    public function insert(array $data)
    {
        $this->db->insert('log_giao_dich',$data);
        return $this->db->insert_id();
    }
}
?>