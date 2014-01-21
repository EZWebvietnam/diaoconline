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
        $sql = "SELECT news.id as id_new,news.create_date,news.tag_key,news.content,news.title,news.img,cate_new.id as id_cate,cate_new.name FROM news INNER JOIN cate_new ON cate_new.id = news.id_cate WHERE news.id = $id;";
        $query_new = $this->db->query($sql);
        return $query_new->result_array();
    }
    public function get_news_with_cate($id,$id_c)
    {
        $id = intval($id);
        $sql ="SELECT news.id as id_new,news.tag_key,news.create_date,news.content,news.title,news.img,cate_new.id as id_cate,cate_new.name FROM news INNER JOIN cate_new ON cate_new.id = news.id_cate WHERE news.id_cate = $id AND news.id NOT IN($id_c) ORDER BY rand() LIMIT 10";
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
        $sql = "SELECT news.id as id_new,news.img,news.title,news.content,news.create_date,cate_new.id as id_cate,cate_new.name FROM news INNER JOIN cate_new ON cate_new.id = news.id_cate WHERE news.id_cate = $id_cate OR cate_new.parent = $id_cate ORDER BY news.id DESC LIMIT $offset,$number";
        
        $query = $this->db->query($sql);
        return $query->result_array();
    }
    public function count_all($id_cate)
    {
        $id_cate = intval($id_cate);
        
        $sql = 'SELECT * FROM news INNER JOIN cate_new ON cate_new.id = news.id_cate WHERE news.id_cate = ? OR cate_new.parent = ? ORDER BY news.id DESC';
        $query = $this->db->query($sql, array($id_cate,$id_cate));
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
    public function get_most_view()
    {
        $sql = "SELECT news.id as id_new,news.view,news.create_date,news.content,news.title,news.img,cate_new.id as id_cate,cate_new.name FROM news INNER JOIN cate_new ON cate_new.id = news.id_cate WHERE news.view > 100 ORDER BY news.id DESC LIMIT 6";
        $query = $this->db->query($sql);
        return $query->result_array();
    }
   
    public function get_list_cafe_law()
    {
       
        $sql = "SELECT news.id as id_new,news.view,news.create_date,news.content,news.title,news.img,cate_new.id as id_cate,cate_new.name FROM news INNER JOIN cate_new ON cate_new.id = news.id_cate WHERE cate_new.parent=15 OR cate_new.id = 15  ORDER BY news.id DESC LIMIT 5";
        $query = $this->db->query($sql);
        return $query->result_array();
    }
    //save_tin
    public function check_save($id_user,$id_new)
    {
        $this->db->select();
        $this->db->where('id_user',$id_user);
        $this->db->where('id_new',$id_new);
        $query = $this->db->get('save_tin');
        return $query->result_array();
    }
    public function save_tin(array $data)
    {
        $this->db->insert('save_tin',$data);
        return $this->db->insert_id();
    }
    public function delete_save($id)
    {
        $id = intval($id);
        $this->db->delete('save_tin',array('id'=>$id));
    }
    //List New Save
    public function get_list_new_save()
    {
       
        $sql = "SELECT save_tin.id as id_save,save_tin.create_date as ngay_luu,news.id as id_new,news.view,news.create_date,news.content,news.title,news.img,cate_new.id as id_cate,cate_new.name FROM news INNER JOIN cate_new ON cate_new.id = news.id_cate INNER JOIN save_tin ON save_tin.id_new = news.id  ORDER BY news.id DESC LIMIT 5";
        $query = $this->db->query($sql);
        return $query->result_array();
    }
    public function get_count_new_save()
    {
         $sql = "SELECT news.id as id_new,news.view,news.create_date,news.content,news.title,news.img,cate_new.id as id_cate,cate_new.name FROM news INNER JOIN cate_new ON cate_new.id = news.id_cate INNER JOIN save_tin ON save_tin.id_new = news.id  ORDER BY news.id DESC LIMIT 5";
        $query = $this->db->query($sql);
        return count($query->result_array());
    }
}
?>