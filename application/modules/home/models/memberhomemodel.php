<?php 
class Memberhomemodel extends CI_Model
{
    public function __construct()
    {
        parent::__construct();
        $this->load->database();
    }
    public function update_userinfo($id,array $data)
    {
        $id = intval($id);
        $this->db->where('id',$id);
        $this->db->update('users',$data);
    }
    public function user_detail($id)
    {
        $id = intval($id);
        $this->db->select();
        $this->db->where('id',$id);
        $query = $this->db->get('users');
        return $query->result_array();
    }
    
}
?>