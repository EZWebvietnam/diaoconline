<?php 
class Blancehomemodel extends CI_Model
{
    public function __construct()
    {
        parent::__construct();
        $this->load->database();
    }
    public function detail_dv($id_ts,$id_user)
    {
        $id_ts = intval($id_ts);
        $id_user = intval($id_user);
        $sql ="SELECT * FROM chi_tiet_dv_ts INNER JOIN dich_vu_tai_san ON dich_vu_tai_san.id_service = chi_tiet_dv_ts.id_dich_vu INNER JOIN property ON property.id = chi_tiet_dv_ts.id_tai_san WHERE id_tai_san = $id_ts AND property.id_user = $id_user AND chi_tiet_dv_ts.tinh_trang = 0";
        $query = $this->db->query($sql);
        return $query->result_array();
    }
    public function detail_dv_hh($id_ts,$id_user)
    {
        $id_ts = intval($id_ts);
        $id_user = intval($id_user);
        $sql ="SELECT * FROM chi_tiet_dv_ts INNER JOIN dich_vu_tai_san ON dich_vu_tai_san.id_service = chi_tiet_dv_ts.id_dich_vu INNER JOIN property ON property.id = chi_tiet_dv_ts.id_tai_san WHERE id_tai_san = $id_ts AND property.id_user = $id_user AND chi_tiet_dv_ts.tinh_trang = 1 AND chi_tiet_dv_ts.ngay_het_han <=now()";
        $query = $this->db->query($sql);
        return $query->result_array();
    }
    public function so_du($id_user)
    {
        $id_user = intval($id_user);
        $sql="SELECT so_du FROM user_blance WHERE id_user = $id_user";
        $query = $this->db->query($sql);
        return $query->result_array();
    }
    public function update_blance($id,array $data)
    {
        $this->db->where('id_ctdvts',$id);
        $this->db->update('chi_tiet_dv_ts',$data);
    }
    public function update_blance_user($id,array $data)
    {
        $this->db->where('id_user',$id);
        $this->db->update('user_blance',$data);
    }
    public function list_dv()
    {
        $this->db->select();
        $query = $this->db->get('dich_vu_tai_san');
        return $query->result_array();
    }
     public function sv_detail($id)
    {
        $id = intval($id);
        $this->db->select();
        $this->db->where('id_service',$id);
        $query = $this->db->get('dich_vu_tai_san');
        return $query->result_array();
    }
}
?>