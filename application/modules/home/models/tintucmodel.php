<?php
class Tintucmodel extends CI_Model
{
    public function __construct() {
        parent::__construct();
        $this->load->database();
    }
    function list_all($id,$number, $offset) {
        $id = intval($id);
        $offset = intval($offset);
        $number = intval($number);
        $sql = 'SELECT post.id as id_post, post.name as name_post,post.content,post.file,post.create_date,post.id_cate,cate_new.name as name_cate,post.file FROM post INNER JOIN cate_new ON cate_new.id = post.id_cate WHERE post.id_cate = ? ORDER BY post.create_date LIMIT ?,?';
        $query = $this->db->query($sql, array($id,$offset,$number));
        return $query->result_array();
    }

    function count_all($id) {
        $id = intval($id);
        $sql = 'SELECT post.id as id_post, post.name as name_post,post.content,post.file,post.create_date,post.id_cate FROM post INNER JOIN cate_new ON cate_new.id = post.id_cate WHERE post.id_cate = ?';
        $query = $this->db->query($sql,array($id));
        $query = $query->result_array();
        $count = count($query);
        return $count;
    }
    function get_news()
    {
        $this->db->select();
        $this->db->order_by('rand()');
        $this->db->limit(8);
        $query = $this->db->get('post');
        return $query->result_array();
    }
    public function get_news_home()
    {
        $this->db->select();
        $this->db->order_by('rand()');
        $this->db->limit(5);
        $query = $this->db->get('post');
        return $query->result_array(); 
    }
    function get_news_detail($id)
    {
        $id = intval($id);
        $this->db->select();
        $this->db->where('id',$id);
        $query = $this->db->get('post');
        return $query->result_array();
    }
    function get_post_with_cate($id_cate,$id_post)
    {
        $sql ="SELECT * FROM post WHERE id_cate = ? AND id NOT IN(?) ORDER BY RAND() LIMIT 5";
        $query = $this->db->query($sql,array($id_cate,$id_post));
        $query = $query->result_array();
        return $query;
    }
}
?>
