<?php 
class Servicesmodel extends CI_Model
{
    public function __construct()
    {
        parent::__construct();
        $this->load->database();
    }
    public function get_list()
    {
        $this->db->select();
        $query = $this->db->get('dich_vu');
        return $query->result_array();
    }
    public function insert_dich_vu(array $data)
    {
        $this->db->insert('dich_vu',$data);
        return $this->db->insert_id();
    }
    public function get_dich_vu($id)
    {
        $id = intval($id);
        $this->db->select();
        $this->db->where('id',$id);
        $query = $this->db->get('dich_vu');
        return $query->result_array();
    }
    public function update_dich_vu($id,array $data)
    {
        $id = intval($id);
        $this->db->where('id',$id);
        $this->db->update('dich_vu',$data);
    }
    public function delete_dich_vu($id)
    {
        $id = intval($id);
        $this->db->delete('dich_vu',array('id'=>$id));
    }
    public function update_sv_post(array $data)
    {
        $this->db->where('id',1);
        $this->db->update('dich_vu_post',$data);
    }
    public function get_sv_post()
    {
      
        $this->db->select();
        $this->db->where('id',1);
        $query = $this->db->get('dich_vu_post');
        return $query->result_array();
    }
}
?>