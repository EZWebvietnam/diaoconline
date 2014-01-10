<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

class Postmodel extends CI_Model {

    public function __construct() {
        parent::__construct();
        $this->load->database();
    }

    public function get_all_post() {
        $this->db->select();
        $query = $this->db->get('post');
        return $query->result_array();
    }

    public function insert_post(array $data) {
        $this->db->insert('post', $data);
        return $this->db->insert_id();
    }

    public function get_post($id) {
        $id = intval($id);
        $this->db->select();
        $this->db->where('id', $id);
        $query = $this->db->get('post');
        return $query->result_array();
    }

    public function update_post($id, array $data) {
        $id = intval($id);
        $this->db->where('id', $id);
        $this->db->update('post', $data);
        return $this->db->insert_id();
    }

    public function delete_post($id) {
        $id = intval($id);
        $this->db->delete('post', array('id' => $id));
    }

}

?>
