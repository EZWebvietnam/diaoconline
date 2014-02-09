<?php 
class Nhadephomemodel extends CI_Model
{
    public function __construct()
    {
        parent::__construct();
        $this->load->database();
    }
    public function load_nha_dep_slide()
    {
        $sql_get = "SELECT nhadep.id, nhadep.title,nhadep.id_cate,nhadep.img,nhadep.code,nhadep.create_date,cate_nhadep.id as id_catend,cate_nhadep.name
        FROM nhadep
        INNER JOIN cate_nhadep
        ON nhadep.id_cate = cate_nhadep.id
        ORDER BY rand()
        LIMIT 10";
        $query = $this->db->query($sql_get);
        return $query->result_array();
    }
     public function load_nha_dep_home($number,$offset)
    {
        $sql_get = "SELECT nhadep.id, nhadep.title,nhadep.id_cate,nhadep.img,nhadep.code,nhadep.create_date,cate_nhadep.id as id_catend,cate_nhadep.name
        FROM nhadep
        INNER JOIN cate_nhadep
        ON nhadep.id_cate = cate_nhadep.id
        ORDER BY nhadep.id
        LIMIT $offset,$number
        ";
        $query = $this->db->query($sql_get);
        return $query->result_array();
    }
    public function load_nha_dep_()
    {
        $sql_get = "SELECT nhadep.id, nhadep.title,nhadep.id_cate,nhadep.img,nhadep.code,nhadep.create_date,cate_nhadep.id as id_catend,cate_nhadep.name
        FROM nhadep
        INNER JOIN cate_nhadep
        ON nhadep.id_cate = cate_nhadep.id
        ORDER BY rand()
       LIMIT 10
        ";
        $query = $this->db->query($sql_get);
        return $query->result_array();
    }
     public function load_nha_dep_cate($id = null,$number,$offset)
    {
        $id = intval($id);
        $sql_get = "SELECT nhadep.id, nhadep.title,nhadep.id_cate,nhadep.img,nhadep.code,nhadep.create_date,cate_nhadep.id as id_catend,cate_nhadep.name
        FROM nhadep
        INNER JOIN cate_nhadep
        ON nhadep.id_cate = cate_nhadep.id
        WHERE nhadep.id_cate = $id
        ORDER BY nhadep.id
        LIMIT $offset,$number
        ";
        $query = $this->db->query($sql_get);
        return $query->result_array();
    }
    public function count_nha_dep_home()
    {
       
        $sql_get = "SELECT nhadep.id, nhadep.title,nhadep.id_cate,nhadep.img,nhadep.code,nhadep.create_date,cate_nhadep.id as id_catend,cate_nhadep.name
        FROM nhadep
        INNER JOIN cate_nhadep
        ON nhadep.id_cate = cate_nhadep.id
        ";
        $query = $this->db->query($sql_get);
        return count($query->result_array());
    }
    public function count_nha_dep_cate($id)
    {
        $id = intval($id);
        $sql_get = "SELECT nhadep.id, nhadep.title,nhadep.id_cate,nhadep.img,nhadep.code,nhadep.create_date,cate_nhadep.id as id_catend,cate_nhadep.name
        FROM nhadep
        INNER JOIN cate_nhadep
        ON nhadep.id_cate = cate_nhadep.id
         WHERE nhadep.id_cate = $id
        ";
        $query = $this->db->query($sql_get);
        return count($query->result_array());
    }
    public function count_hinh($id)
    {
        $sql_get = "SELECT *
        FROM nhadep
        INNER JOIN nhadep_img
        ON nhadep.id = nhadep_img.id_nha
        WHERE nhadep_img.id_nha = $id";
        $query = $this->db->query($sql_get);
        return count($query->result_array());
    }
    public function select_cate_nha()
    {
        $sql_get = "SELECT *
        FROM cate_nhadep
        ORDER BY cate_nhadep.id
        ";
        $query = $this->db->query($sql_get);
        return $query->result_array();
    }
     public function load_nha_dep_detail($id)
    {
        $id = intval($id);
        $sql_get = "SELECT nhadep.id, nhadep.title,nhadep.id_cate,nhadep.img,nhadep.code,nhadep.create_date,cate_nhadep.id as id_catend,cate_nhadep.name
        FROM nhadep
        INNER JOIN cate_nhadep
        ON nhadep.id_cate = cate_nhadep.id
        WHERE nhadep.id = $id
        ";
        $query = $this->db->query($sql_get);
        return $query->result_array();
    }
    public function load_hinh($id)
    {
        $id = intval($id);
        $sql_get = "SELECT * FROM nhadep_img
        WHERE nhadep_img.id_nha = $id
        ";
        $query = $this->db->query($sql_get);
        return $query->result_array();
    }
    public function cung_the_loai($id)
    {
        $id = intval($id);
        $sql_get = "SELECT nhadep.id, nhadep.title,nhadep.id_cate,nhadep.img,nhadep.code,nhadep.create_date,cate_nhadep.id as id_catend,cate_nhadep.name
        FROM nhadep
        INNER JOIN cate_nhadep
        ON nhadep.id_cate = cate_nhadep.id
        WHERE nhadep.id_cate = $id
        ORDER BY nhadep.id
        ";
        $query = $this->db->query($sql_get);
        return $query->result_array();
    }
    public function nhadep_khac()
    {
        
        $sql_get = "SELECT nhadep.id, nhadep.title,nhadep.id_cate,nhadep.img,nhadep.code,nhadep.create_date,cate_nhadep.id as id_catend,cate_nhadep.name
        FROM nhadep
        INNER JOIN cate_nhadep
        ON nhadep.id_cate = cate_nhadep.id
        ORDER BY rand()
        LIMIT 5
        ";
        $query = $this->db->query($sql_get);
        return $query->result_array();
    }
     public function load_nha_dep_home_page()
    {
        $sql_get = "SELECT nhadep.id, nhadep.title,nhadep.id_cate,nhadep.img,nhadep.code,nhadep.create_date,cate_nhadep.id as id_catend,cate_nhadep.name
        FROM nhadep
        INNER JOIN cate_nhadep
        ON nhadep.id_cate = cate_nhadep.id
        ORDER BY rand()
        LIMIT 10
        ";
        $query = $this->db->query($sql_get);
        return $query->result_array();
    }
}
?>