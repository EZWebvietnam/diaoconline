<?php 
class Discoveryhomemodel extends CI_Model
{
    public function __construct()
    {
        parent::__construct();
        $this->load->database();
    }
    public function load_news_slide()
    {
        $this->db->select();
        $this->db->limit(1);
        $this->db->order_by('id DESC');
        $query_news = $this->db->get('discovery');
        return $query_news->result_array();
    }
    public function load_news_slide_($id)
    {
        $id = intval($id);
        $this->db->select();
        $this->db->where("id not in ($id)");
        $this->db->limit(5);
        $this->db->order_by('id DESC');
        $query_news = $this->db->get('discovery');
        return $query_news->result_array();
    }
}
?>