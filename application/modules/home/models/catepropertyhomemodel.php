<?php 
class Catepropertyhomemodel extends CI_Model
{
    public function __construct()
    {
        parent::__construct();
    }
    public function cate_detail($id)
    {
        $this->db->select();
        $this->db->where('id',$id);
        $query = $this->db->get('loai_dia_oc');
        return $query->result_array();
    }
    public function cate_list()
    {
        $sql="SELECT * FROM loai_dia_oc WHERE parent = 1 OR id = 1";
        $query = $this->db->query($sql);
        return $query->result_array();
    }
}
?>