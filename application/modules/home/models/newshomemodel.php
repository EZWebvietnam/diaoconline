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
        $sql = "SELECT news.id as id_new,news.create_date,news.content,news.title,news.img,cate_new.id as id_cate,cate_new.name FROM news INNER JOIN cate_new ON cate_new.id = news.id_cate WHERE news.hot = 1 ORDER BY rand() LIMIT 5;";
        $query = $this->db->query($sql);
        return $query->result_array();
    }
    public function load_news_slide_()
    {
        $sql = "SELECT news.id as id_new,news.create_date,news.content,news.title,news.img,cate_new.id as id_cate,cate_new.name FROM news INNER JOIN cate_new ON cate_new.id = news.id_cate WHERE news.hot = 1 ORDER BY news.id DESC LIMIT 5;";
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
        $sql ="SELECT news.id as id_new,news.create_date,news.content,news.title,news.img,cate_new.id as id_cate,cate_new.name FROM news INNER JOIN cate_new ON cate_new.id = news.id_cate WHERE news.id_cate = $id AND news.id NOT IN($id_c) ORDER BY rand() LIMIT 10";
        $query = $this->db->query($sql);
        return $query->result_array();
    }
    public function load_last_new()
    {
        $sql = "SELECT news.id as id_new,news.create_date,news.content,news.title,news.img,cate_new.id as id_cate,cate_new.name FROM news INNER JOIN cate_new ON cate_new.id = news.id_cate  ORDER BY news.id DESC LIMIT 1;";
        $query = $this->db->query($sql);
        return $query->result_array();
    }
    public function load_list_last_new($id)
    {
        $sql = "SELECT news.id as id_new,news.create_date,news.content,news.title,news.img,cate_new.id as id_cate,cate_new.name FROM news INNER JOIN cate_new ON cate_new.id = news.id_cate WHERE news.id NOT IN($id) ORDER BY news.id DESC LIMIT 9;";
        $query = $this->db->query($sql);
        return $query->result_array();
    }
    public function get_list_new($id_cate,$number, $offset)
    {
        $id_cate = intval($id_cate);
        $offset = intval($offset);
        $number = intval($number);
        $sql = "SELECT news.id as id_new,news.img,news.title,news.content,news.create_date,cate_new.id as id_cate,cate_new.name FROM news INNER JOIN cate_new ON cate_new.id = news.id_cate WHERE news.id_cate = $id_cate ORDER BY news.id DESC LIMIT $offset,$number";
        
        $query = $this->db->query($sql);
        return $query->result_array();
    }
    public function count_all($id_cate)
    {
        $id_cate = intval($id_cate);
        
        $sql = 'SELECT * FROM news INNER JOIN cate_new ON cate_new.id = news.id_cate WHERE news.id_cate = ? ORDER BY news.id DESC';
        $query = $this->db->query($sql, array($id_cate));
        $total = count($query->result_array());
        return $total;
    }
    public function get_new_list($id)
    {
        $sql = "SELECT news.id as id_new,news.create_date,news.content,news.title,news.img,cate_new.id as id_cate,cate_new.name FROM news INNER JOIN cate_new ON cate_new.id = news.id_cate WHERE news.id_cate IN($id) ORDER BY news.id DESC";
        $query = $this->db->query($sql);
        return $query->result_array();
    }
    public function get_new_list_($id)
    {
        $sql = "SELECT news.id as id_new,news.create_date,news.content,news.title,news.img,cate_new.id as id_cate,cate_new.name FROM news INNER JOIN cate_new ON cate_new.id = news.id_cate WHERE news.id_cate IN($id) ORDER BY news.id DESC LIMIT 3";
        $query = $this->db->query($sql);
        return $query->result_array();
    }
}
?>