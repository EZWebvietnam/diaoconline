<?php
class Aboutmodel extends CI_Model
{
    public function __construct() {
        parent::__construct();
        $this->load->database();
    }
    public function list_about()
    {
        $this->db->select();
        $query = $this->db->get('about');
        return $query->result_array();
    }
    public function list_about_parent()
    {
        $this->db->select();
        $this->db->where('parent',0);
        $query = $this->db->get('about');
        return $query->result_array();
    }
    public function detail_about($id)
    {
        $id = intval($id);
        $this->db->select();
        $this->db->where('id',$id);
        $query = $this->db->get('about');
        return $query->result_array();
    }
    public function update_about($id,array $data)
    {
        $id = intval($id);
        $this->db->where('id',$id);
        $query = $this->db->update('about',$data);
    }
    public function add_about(array $data)
    {
        $this->db->insert('about',$data);
        return $this->db->insert_id();
    }
    public function delete_about($id)
    {
        $this->db->where('id',$id);
        $this->db->delete('about');
       
    }
}
?>
