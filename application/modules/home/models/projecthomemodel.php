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
        $sql="SELECT project.id as id_pro,project.content, project.title,project.id_district,project.id_city,project.img,cate_project.id as id_cate, cate_project.name  FROM project INNER JOIN cate_project ON cate_project.id = project.id_cate ORDER BY project.id DESC LIMIT 2";
        $query = $this->db->query($sql);
        return $query->result_array();
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
    public function project_noi_bat_slide()
    {
        $sql="SELECT project.id as id_pro,project.content,project.id_district,project.id_city,project.title,project.id_district,project.id_city,project.img,cate_project.id as id_cate, cate_project.name  FROM project INNER JOIN cate_project ON cate_project.id = project.id_cate WHERE project.tieu_diem = 1 LIMIT 5";
        $query = $this->db->query($sql);
        return $query->result_array();
    }
    public function project_noi_bat_lm1()
    {
        $sql="SELECT project.id as id_pro,project.content, project.title,project.id_district,project.create_date,project.id_city,project.img,cate_project.id as id_cate, cate_project.name  FROM project INNER JOIN cate_project ON cate_project.id = project.id_cate LIMIT 1";
        $query = $this->db->query($sql);
        return $query->result_array();
    }
    public function project_noi_menu($id)
    {
        $id = intval($id);
        $sql="SELECT project.id as id_pro,project.content, project.title,project.id_district,project.create_date,project.id_city,project.img,cate_project.id as id_cate, cate_project.name  FROM project INNER JOIN cate_project ON cate_project.id = project.id_cate WHERE project.id NOT IN($id) LIMIT 9";
        //echo $sql;exit;
        $query = $this->db->query($sql);
        return $query->result_array();
    }
    //save_tin
    public function check_project($id_user,$id_prj)
    {
        $this->db->select();
        $this->db->where('id_user',$id_user);
        $this->db->where('id_project',$id_prj);
        $query = $this->db->get('save_project');
        return $query->result_array();
    }
    public function save_tin(array $data)
    {
        $this->db->insert('save_project',$data);
        return $this->db->insert_id();
    }
    public function delete_save($id)
    {
        $id = intval($id);
        $this->db->delete('save_project',array('id'=>$id));
    }
    //
     public function get_list_project_save($number,$offset)
    {
        $number = intval($number);
        $offset = intval($offset);
        $sql="SELECT save_project.id as id_save,save_project.create_date as ngay_luu,project.id as id_pro, project.title,project.id_district,project.id_city,project.img,cate_project.id as id_cate, cate_project.name  FROM project INNER JOIN cate_project ON cate_project.id = project.id_cate INNER JOIN save_project ON save_project.id_project = project.id LIMIT $offset,$number";
        $query = $this->db->query($sql);
        return $query->result_array();
    }
    public function count_save()
    {
        
        $sql="SELECT project.id as id_pro, project.title,project.img,cate_project.id as id_cate, cate_project.name  FROM project INNER JOIN cate_project ON cate_project.id = project.id_cate INNER JOIN save_project ON save_project.id_project = project.id";
        $query = $this->db->query($sql);
        return count($query->result_array());
    }
    //
     public function get_list_project_dn($id,$number,$offset)
    {
        $id = intval($id);
        $offset = intval($offset);
        $number = intval($number);
        $sql="SELECT project.id as id_pro,project.content, project.title,project.id_district,project.id_city,project.img,cate_project.id as id_cate, cate_project.name  FROM project INNER JOIN cate_project ON cate_project.id = project.id_cate 
        INNER JOIN users ON users.id = project.id_user
        INNER JOIN business ON users.id = business.id_user
        WHERE business.id = $id
        ORDER BY project.id DESC LIMIT $offset,$number";
        
        $query = $this->db->query($sql);
        return $query->result_array();
    }
     public function count_list_project_dn($id)
    {
        $id = intval($id);
        $sql="SELECT project.id as id_pro,project.content, project.title,project.id_district,project.id_city,project.img,cate_project.id as id_cate, cate_project.name  FROM project INNER JOIN cate_project ON cate_project.id = project.id_cate 
        INNER JOIN users ON users.id = project.id_user
        INNER JOIN business ON users.id = business.id_user
        WHERE business.id = $id";
        $query = $this->db->query($sql);
        return count($query->result_array());
    }
}
?>