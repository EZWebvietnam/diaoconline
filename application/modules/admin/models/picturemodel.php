<?php 
class Picturemodel extends CI_Model
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
    public function get_image_dt($id)
    {
        $id = intval($id);
        $this->db->select();
         $this->db->where('id',$id);
        $query = $this->db->get('image');
        return $query->result_array();
    }
    public function insert_image(array $data)
    {
        $this->db->insert('image',$data);
        return $this->db->insert_id();
    }
    public function delete($id)
    {
        $id = intval($id);
        $this->db->delete('image',array('id'=>$id));
    }
}
?>