<?php 
class Projecthomemodel extends CI_Model
{
    public function __construct()
    {
        parent::__construct();
        $this->load->database();
    }
    public function get_list_project()
    {
        $this->db->select();
        $this->db->limit(2);

        $this->db->order_by('id DESC');
        $list_project = $this->db->get('project');
        return $list_project->result_array();
    }
}
?>