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
        $sql = "SELECT * FROM news INNER JOIN cate_new ON cate_new.id = news.id_cate WHERE news.hot = 1 ORDER BY rand() LIMIT 5;";
        $query = $this->db->query($sql);
        return $query->result_array();
    }
    public function load_news_slide_()
    {
        $sql = "SELECT * FROM news INNER JOIN cate_new ON cate_new.id = news.id_cate WHERE news.hot = 1 ORDER BY news.id DESC LIMIT 5;";
        $query = $this->db->query($sql);
        return $query->result_array();
    }
    public function new_detail($id = null)
    {
        $id = intval($id);
        $this->db->select();
        $this->db->where('id',$id);
        $query_new = $this->db->get('news');
        return $query_new->result_array();
    }
    public function get_news_with_cate($id,$id_c)
    {
        $id = intval($id);
        $sql ="SELECT * FROM news INNER JOIN cate_new ON cate_new.id = news.id_cate WHERE news.id_cate = $id AND news.id NOT IN($id_c)";
        $query = $this->db->query($sql);
        return $query->result_array();
    }
}
?>