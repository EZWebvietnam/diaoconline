<?php 
class Newshomemodel extends CI_Model
{
    public function __construct()
    {
        parent::__construct();
        $this->load->database();
    }
    public function load_news_slide()
    {
        $this->db->select();
        $this->db->where('hot',1);
        $this->db->limit(5);
        $this->db->order_by('rand()');
        $query_news = $this->db->get('news');
        return $query_news->result_array();
    }
    public function load_news_slide_()
    {
        $this->db->select();
        $this->db->limit(5);
        $this->db->order_by('id DESC');
        $query_news = $this->db->get('news');
        return $query_news->result_array();
    }
}
?>