<?php
class Dichvumodel extends CI_Model
{
    public function __construct() {
        parent::__construct();
         $this->load->database();
    }
    function get_all() 
    {
        $sql = 'SELECT * FROM dich_vu';
        $query = $this->db->query($sql);
        return $query->result_array();
    }
    public function dich_vu_detail($id)
    {
        $id = intval($id);
        $this->db->select();
        $this->db->where('id',$id);
        $query = $this->db->get('dich_vu');
        return $query->result_array();
    }
    public function get_dich_vu_desc()
    {
        $this->db->select();
        $this->db->where('id',1);
        $query = $this->db->get('dich_vu_post');
        return $query->result_array();
    }
    public function dich_vu_other($id = null)
    {
        $id = intval($id);
        
        if($id == null)
        {
             $sql = "SELECT * FROM dich_vu";
        }
        else
        {
            $sql = "SELECT * FROM dich_vu WHERE id NOT IN($id)";
           
        }
        $query = $this->db->query($sql);
        return $query->result_array();
    }
    function list_all($number, $offset) 
    {
        $offset = intval($offset);
        $number = intval($number);
        $sql = 'SELECT * FROM thong_tin_tuyen_xe LIMIT ?,?';
        $query = $this->db->query($sql, array($offset,$number));
        return $query->result_array();
    }

    function count_all() {
        $sql = 'SELECT * FROM thong_tin_tuyen_xe';
        $query = $this->db->query($sql);
        $query = $query->result_array();
        $count = count($query);
        return $count;
    }
    function list_all_xuong($number, $offset) 
    {
        $offset = intval($offset);
        $number = intval($number);
        $sql = 'SELECT * FROM xuong_sua_chua LIMIT ?,?';
        $query = $this->db->query($sql, array($offset,$number));
        return $query->result_array();
    }
    function count_all_xuong() {
        $sql = 'SELECT * FROM xuong_sua_chua';
        $query = $this->db->query($sql);
        $query = $query->result_array();
        $count = count($query);
        return $count;
    }
    public function detail_xuong($id)
    {
        $id = intval($id);
        $this->db->select();
        $this->db->where('id',$id);
        $query = $this->db->get('xuong_sua_chua');
        return $query->result_array();
    }
    public function detail_file_xuong($id)
    {
        $id = intval($id);
        $this->db->select();
        $this->db->where('id_xuong',$id);
        $this->db->order_by('rand()');
        $this->db->limit(1);
        $query = $this->db->get('image_xuong');
        return $query->result_array();
    }
    public function detail_file($id)
    {
        $id = intval($id);
        $this->db->select();
        $this->db->where('id_xuong',$id);
        $query = $this->db->get('image_xuong');
        return $query->result_array();
    }
    function list_all_xe($number, $offset,$id) 
    {
        $id = intval($id);
        $offset = intval($offset);
        $number = intval($number);
        $sql = 'SELECT chi_tiet_tuyen_xe.id as id_tx,chi_tiet_tuyen_xe.tien,chi_tiet_tuyen_xe.gio_di,chi_tiet_tuyen_xe.gio_den,
        thong_tin_tuyen_xe.*,car.bien_so,car.id as id_car FROM chi_tiet_tuyen_xe INNER JOIN thong_tin_tuyen_xe ON thong_tin_tuyen_xe.id = chi_tiet_tuyen_xe.id_tuyen 
        INNER JOIN car ON car.id = chi_tiet_tuyen_xe.id_xe WHERE thong_tin_tuyen_xe.id = ? 
        LIMIT ?,?';
        
        $query = $this->db->query($sql, array($id,$offset,$number));
        
        return $query->result_array();
    }
    function count_all_xe($id) {
        $id = intval($id);
        $sql = 'SELECT chi_tiet_tuyen_xe.id as id_tx,chi_tiet_tuyen_xe.tien,chi_tiet_tuyen_xe.gio_di,chi_tiet_tuyen_xe.gio_den,
        thong_tin_tuyen_xe.*,car.bien_so,car.id as id_car FROM chi_tiet_tuyen_xe INNER JOIN thong_tin_tuyen_xe ON thong_tin_tuyen_xe.id = chi_tiet_tuyen_xe.id_tuyen
        INNER JOIN car ON car.id = chi_tiet_tuyen_xe.id_xe 
        WHERE thong_tin_tuyen_xe.id = '.$id;
        $query = $this->db->query($sql);
        $query = $query->result_array();
        $count = count($query);
        return $count;
    }
    function detail_tuyen_xe($id = null) {
        $id = intval($id);
        $sql = 'SELECT chi_tiet_tuyen_xe.id as id_tx,chi_tiet_tuyen_xe.tien,chi_tiet_tuyen_xe.gio_di,chi_tiet_tuyen_xe.gio_den,
        thong_tin_tuyen_xe.*,car.bien_so,car.id as id_car FROM chi_tiet_tuyen_xe INNER JOIN thong_tin_tuyen_xe ON thong_tin_tuyen_xe.id = chi_tiet_tuyen_xe.id_tuyen 
        INNER JOIN car ON car.id = chi_tiet_tuyen_xe.id_xe WHERE thong_tin_tuyen_xe.id = '.$id;
        $query = $this->db->query($sql);
        $query = $query->result_array();
        return $query;
    }
    function detail_tuyen_xe_($id = null) {
        $id = intval($id);
        $sql = 'SELECT chi_tiet_tuyen_xe.id as id_tx,chi_tiet_tuyen_xe.tien,chi_tiet_tuyen_xe.gio_di,chi_tiet_tuyen_xe.gio_den,
        thong_tin_tuyen_xe.*,car.bien_so,car.id as id_car FROM chi_tiet_tuyen_xe INNER JOIN thong_tin_tuyen_xe ON thong_tin_tuyen_xe.id = chi_tiet_tuyen_xe.id_tuyen 
        INNER JOIN car ON car.id = chi_tiet_tuyen_xe.id_xe WHERE chi_tiet_tuyen_xe.id = '.$id;
        $query = $this->db->query($sql);
        $query = $query->result_array();
        return $query;
    }
    public function get_detail_tuyen_and_xe($id = null)
    {
        $this->db->select('tien');
        $this->db->where('id',$id);
        $query = $this->db->get('chi_tiet_tuyen_xe');
        return $query->result_array();
    }
    function detail_tuyen_xe_1($id = null,$id_xe = null) {
        $id = intval($id);
        $id_xe = intval($id_xe);
        $sql = 'SELECT chi_tiet_tuyen_xe.id as id_tx,chi_tiet_tuyen_xe.tien,chi_tiet_tuyen_xe.gio_di,chi_tiet_tuyen_xe.gio_den,
        thong_tin_tuyen_xe.*,car.bien_so,car.id as id_car FROM chi_tiet_tuyen_xe INNER JOIN thong_tin_tuyen_xe ON thong_tin_tuyen_xe.id = chi_tiet_tuyen_xe.id_tuyen 
        INNER JOIN car ON car.id = chi_tiet_tuyen_xe.id_xe WHERE chi_tiet_tuyen_xe.id = '.$id.' AND chi_tiet_tuyen_xe.id ='.$id_xe;
        
        $query = $this->db->query($sql);
        $query = $query->result_array();
        return $query;
    }
    public function insert_customer(array $data)
    {
        $this->db->insert('customer',$data);
        return $this->db->insert_id();
    }
    public function insert_order(array $data)
    {
        $this->db->insert('order',$data);
        return $this->db->insert_id();
    }
    public function insert_order_detail(array $data)
    {
        $this->db->insert('order_detail',$data);
        return $this->db->insert_id(); 
    }
}
?>
