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
        $sql_get_discovery = "SELECT discovery.title,discovery.img,discovery.content,discovery.create_date,discovery.id as id_disco, cate_discovery.id as id_cate,cate_discovery.name
        FROM discovery INNER JOIN cate_discovery ON cate_discovery.id = discovery.id_cate  ORDER BY discovery.id DESC LIMIT 1";
        $query = $this->db->query($sql_get_discovery);
        return $query->result_array();
    }
    public function load_news_slide_($id)
    {
        $id = intval($id);
        $sql_get_discovery = "SELECT discovery.title,discovery.img,discovery.content,discovery.create_date,discovery.id as id_disco, cate_discovery.id as id_cate,cate_discovery.name
        FROM discovery INNER JOIN cate_discovery ON cate_discovery.id = discovery.id_cate WHERE discovery.id NOT IN($id) ORDER BY discovery.id DESC LIMIT 5";
        $query = $this->db->query($sql_get_discovery);
        return $query->result_array();
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
    public function load_discovery_cate($id)
    {
        $id = intval($id);
        $sql_get_discovery = "SELECT discovery.title,discovery.img,discovery.content,discovery.create_date,discovery.id as id_disco, cate_discovery.id as id_cate,cate_discovery.name
        FROM discovery INNER JOIN cate_discovery ON cate_discovery.id = discovery.id_cate WHERE  discovery.id_cate = $id ORDER BY discovery.id DESC LIMIT 2";
        $query = $this->db->query($sql_get_discovery);
        return $query->result_array();
    }
    public function load_discovery_cate_limt_10($id)
    {
        $id = intval($id);
        $sql_get_discovery = "SELECT discovery.title,discovery.img,discovery.content,discovery.create_date,discovery.id as id_disco, cate_discovery.id as id_cate,cate_discovery.name
        FROM discovery INNER JOIN cate_discovery ON cate_discovery.id = discovery.id_cate WHERE  discovery.id_cate = $id ORDER BY discovery.id DESC LIMIT 10";
        $query = $this->db->query($sql_get_discovery);
        return $query->result_array();
    }
    public function load_discovery_cate_limt_2()
    {

        $sql_get_discovery = "SELECT discovery.title,discovery.img,discovery.content,discovery.create_date,discovery.id as id_disco, cate_discovery.id as id_cate,cate_discovery.name
        FROM discovery INNER JOIN cate_discovery ON cate_discovery.id = discovery.id_cate ORDER BY discovery.id DESC LIMIT 2";
        $query = $this->db->query($sql_get_discovery);
        return $query->result_array();
    }
    public function load_last_dis()
    {
        $sql_get_discovery = "SELECT discovery.title,discovery.img,discovery.content,discovery.create_date,discovery.id as id_disco, cate_discovery.id as id_cate,cate_discovery.name
        FROM discovery INNER JOIN cate_discovery ON cate_discovery.id = discovery.id_cate  ORDER BY discovery.id DESC LIMIT 1";
        $query = $this->db->query($sql_get_discovery);
        return $query->result_array();
    }
    public function load_other_last_dis($id)
    {
        $id = intval($id);
        $sql_get_discovery = "SELECT discovery.title,discovery.img,discovery.content,discovery.create_date,discovery.id as id_disco, cate_discovery.id as id_cate,cate_discovery.name
        FROM discovery INNER JOIN cate_discovery ON cate_discovery.id = discovery.id_cate WHERE discovery.id NOT IN($id) ORDER BY discovery.id DESC LIMIT 10";
        $query = $this->db->query($sql_get_discovery);
        return $query->result_array();
    }
    public function count_all($id)
    {
        $id = intval($id);
        $sql_get_discovery = "SELECT discovery.title,discovery.img,discovery.content,discovery.create_date,discovery.id as id_disco, cate_discovery.id as id_cate,cate_discovery.name
        FROM discovery INNER JOIN cate_discovery ON cate_discovery.id = discovery.id_cate WHERE discovery.id_cate = $id OR cate_discovery.parent = $id ORDER BY discovery.id";
        $query = $this->db->query($sql_get_discovery);
        return count($query->result_array());
    }
    public function get_list_cate($id_cate,$number,$offset)
    {
        $id_cate = intval($id_cate);
        $offset = intval($offset);
        $number = intval($number);
        $sql_get_discovery = "SELECT discovery.title,discovery.img,discovery.content,discovery.create_date,discovery.id as id_disco, cate_discovery.id as id_cate,cate_discovery.name
        FROM discovery INNER JOIN cate_discovery ON cate_discovery.id = discovery.id_cate WHERE discovery.id_cate = $id_cate OR cate_discovery.parent = $id_cate ORDER BY discovery.id LIMIT $offset,$number";
        
        $query = $this->db->query($sql_get_discovery);
        return $query->result_array();
    }
    public function load_phong_thuy()
    {
      
        $sql_get_discovery = "SELECT discovery.title,discovery.img,discovery.content,discovery.create_date,discovery.id as id_disco, cate_discovery.id as id_cate,cate_discovery.name
        FROM discovery INNER JOIN cate_discovery ON cate_discovery.id = discovery.id_cate WHERE discovery.id_cate = 4 LIMIT 6";
        $query = $this->db->query($sql_get_discovery);
        return $query->result_array();
    }
}
?>