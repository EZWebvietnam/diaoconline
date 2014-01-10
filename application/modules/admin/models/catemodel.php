<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
class Catemodel extends CI_Model
{
    public function __construct() {
        parent::__construct();
        $this->load->database();
    }
    public function get_all_cate()
    {
        $this->db->select();
        $query = $this->db->get('cate_new');
        return $query->result_array();
    }
    public function insert_cate(array $data)
    {
        $this->db->insert('cate_new',$data);
        return $this->db->insert_id();
    }
    public function get_cate_id($id)
    {
        $id = intval($id);
        $this->db->select();
        $this->db->where('id',$id);
        $query = $this->db->get('cate_new');
        return $query->result_array();
    }
    public function update_cate(array $data,$id)
    {
        $id = intval($id);
        $this->db->where('id',$id);
        $this->db->update('cate_new',$data);
    }
    public function delete_cate($id)
    {
        $id = intval($id);
        $this->db->delete('cate_new',array('id'=>$id));
    }
}
?>
