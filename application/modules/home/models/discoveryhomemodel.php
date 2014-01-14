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
    public function load_detail($id)
    {
        $id = intval($id);
        $sql_get_discovery = "SELECT discovery.title,discovery.img,discovery.content,discovery.create_date,discovery.id as id_disco, cate_discovery.id as id_cate,cate_discovery.name
        FROM discovery INNER JOIN cate_discovery ON cate_discovery.id = discovery.id_cate WHERE discovery.id = ?";
        $query = $this->db->query($sql_get_discovery,array($id));
        return $query->result_array();
    }
    public function load_detail_other($id,$id_cate)
    {
        $id = intval($id);
        $id_cate = intval($id_cate);
        $sql_get_discovery = "SELECT discovery.title,discovery.img,discovery.content,discovery.create_date,discovery.id as id_disco, cate_discovery.id as id_cate,cate_discovery.name
        FROM discovery INNER JOIN cate_discovery ON cate_discovery.id = discovery.id_cate WHERE discovery.id NOT IN($id) AND discovery.id_cate = $id_cate ORDER BY rand() LIMIT 5";
        $query = $this->db->query($sql_get_discovery);
        return $query->result_array();
    }
}
?>