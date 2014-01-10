<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
class Memmodel extends CI_Model
{
    public function __construct() {
        parent::__construct();
        $this->load->database();
    }
    public function list_mem()
    {
        $this->db->select();
        $query = $this->db->get('mem');
        return $query->result_array();
    }
    public function update_mem($id,array $data)
    {
        $id = intval($id);
        $this->db->where('id',$id);
        $this->db->update('mem',$data);
    }
    public function delete_mem($id)
    {
        $id = intval($id);
         $this->db->delete('mem',$id);
    }
    public function mem_detail($id)
    {
        $id = intval($id);
        $this->db->select();
        $this->db->where('id',$id);
        $query = $this->db->get('mem');
        return $query->result_array();
    }
}
?>
