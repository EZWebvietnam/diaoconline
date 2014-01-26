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
    public function list_mem()
    {
        $this->db->select();
        $query = $this->db->get('users');
        return $query->result_array();
    }
    public function insert_img_proper(array $data)
    {
        $this->db->insert('property_image',$data);
    }
    public function delete_img($id)
    {
        $this->db->delete('property_image',array('id_pro'=>$id));
    }
    
}
?>