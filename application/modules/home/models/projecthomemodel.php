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
    public function get_list_project_index($number,$offset)
    {
        $number = intval($number);
        $offset = intval($offset);
        $sql="SELECT project.id as id_pro, project.title,project.id_district,project.id_city,project.img,cate_project.id as id_cate, cate_project.name  FROM project INNER JOIN cate_project ON cate_project.id = project.id_cate LIMIT $offset,$number";
        $query = $this->db->query($sql);
        return $query->result_array();
    }
    public function count_all()
    {
        
        $sql="SELECT project.id as id_pro, project.title,project.img,cate_project.id as id_cate, cate_project.name  FROM project INNER JOIN cate_project ON cate_project.id = project.id_cate";
        $query = $this->db->query($sql);
        return count($query->result_array());
    }
     public function get_list_project_index_key($key,$key_lower,$number,$offset)
    {
        $number = intval($number);
        $offset = intval($offset);
        $sql="SELECT project.id as id_pro, project.title,project.id_district,project.id_city,project.img,cate_project.id as id_cate, cate_project.name  FROM project INNER JOIN cate_project ON cate_project.id = project.id_cate  WHERE project.title LIKE '%$key%' OR project.title LIKE '%$key_lower%'  LIMIT $offset,$number";
        $query = $this->db->query($sql);
        return $query->result_array();
    }
    public function get_list_project_cate($id_cate,$number,$offset)
    {
        $id_cate = intval($id_cate);
        $number = intval($number);
        $offset = intval($offset);
        $sql="SELECT project.id as id_pro, project.title,project.id_district,project.id_city,project.img,cate_project.id as id_cate, cate_project.name  FROM project INNER JOIN cate_project ON cate_project.id = project.id_cate  WHERE project.id_cate = $id_cate  LIMIT $offset,$number";
        $query = $this->db->query($sql);
        return $query->result_array();
    }
    public function count_all_cate($id_cate)
    {
        $id_cate = intval($id_cate);
        
        $sql="SELECT project.id as id_pro, project.title,project.id_district,project.id_city,project.img,cate_project.id as id_cate, cate_project.name  FROM project INNER JOIN cate_project ON cate_project.id = project.id_cate  WHERE project.id_cate = $id_cate";
        $query = $this->db->query($sql);
        return count($query->result_array());
    }
    public function count_all_key($key,$key_lower)
    {
        
        $sql="SELECT project.id as id_pro, project.title,project.id_district,project.id_city,project.img,cate_project.id as id_cate, cate_project.name  FROM project  INNER JOIN cate_project ON cate_project.id = project.id_cate WHERE project.title LIKE '%$key%' OR project.title LIKE '%$key_lower%'";
        $query = $this->db->query($sql);
        return count($query->result_array());
    }
    public function project_detail($id)
    {
        $id = intval($id);
        $sql="SELECT project.id as id_pro,project.content, project.title,project.id_district,project.id_city,project.img,cate_project.id as id_cate, cate_project.name  FROM project INNER JOIN cate_project ON cate_project.id = project.id_cate WHERE project.id = $id";
        $query = $this->db->query($sql);
        return $query->result_array();
    }
    public function project_noi_bat()
    {
        $sql="SELECT project.id as id_pro,project.content, project.title,project.id_district,project.id_city,project.img,cate_project.id as id_cate, cate_project.name  FROM project INNER JOIN cate_project ON cate_project.id = project.id_cate LIMIT 6";
        $query = $this->db->query($sql);
        return $query->result_array();
    }
}
?>