<?php 
class Propertyhomemodel extends CI_Model
{
    public function __construct()
    {
        parent::__construct();
        $this->load->database();
    }
    public function get_list_property_cc()
    {
        $sql="SELECT property.*,property.id as id_proper,loai_dia_oc.name as loai_dia_oc,loai_dia_oc.id as id_ldo, tinh_trang_phap_ly.name as tinh_trang_phap_ly,tinh_trang_phap_ly.id as id_ttpl,
        huong.name as huong,huong.id as id_huong,vi_tri_dia_oc.name as vi_tri_dia_oc,vi_tri_dia_oc.id as id_vtdo,phong_ngu.name as phong_ngu
        ,users.full_name,users.phone,users.address
        FROM property
        LEFT JOIN loai_dia_oc
        ON property.loai_dia_oc = loai_dia_oc.id
        LEFT JOIN tinh_trang_phap_ly
        ON property.tinh_trang_phap_ly = tinh_trang_phap_ly.id
        LEFT JOIN huong
        ON property.huong = huong.id
        LEFT JOIN vi_tri_dia_oc
        ON property.vi_tri_dia_oc = vi_tri_dia_oc.id
        LEFT JOIN phong_ngu
        ON property.so_phong_ngu = phong_ngu.id
        LEFT JOIN users
        ON users.id = property.id_user
        WHERE property.loai_hinh = 1
        ORDER BY property.id
        LIMIT 6";
        $query = $this->db->query($sql);
        return $query->result_array();
    }
    public function get_list_property_new()
    {
        $sql="SELECT property.*,property.id as id_proper,loai_dia_oc.name as loai_dia_oc,loai_dia_oc.id as id_ldo, tinh_trang_phap_ly.name as tinh_trang_phap_ly,tinh_trang_phap_ly.id as id_ttpl,
        huong.name as huong,huong.id as id_huong,vi_tri_dia_oc.name as vi_tri_dia_oc,vi_tri_dia_oc.id as id_vtdo,phong_ngu.name as phong_ngu
        ,users.full_name,users.phone,users.address
        FROM property
        
        LEFT JOIN loai_dia_oc
        ON property.loai_dia_oc = loai_dia_oc.id
        LEFT JOIN tinh_trang_phap_ly
        ON property.tinh_trang_phap_ly = tinh_trang_phap_ly.id
        LEFT JOIN huong
        ON property.huong = huong.id
        LEFT JOIN vi_tri_dia_oc
        ON property.vi_tri_dia_oc = vi_tri_dia_oc.id
        LEFT JOIN phong_ngu
        ON property.so_phong_ngu = phong_ngu.id
        LEFT JOIN users
        ON users.id = property.id_user
        ORDER BY property.id
        LIMIT 6";
        $query = $this->db->query($sql);
        return $query->result_array();
    }
    public function get_list_property_nav()
    {
        $sql="SELECT property.*,property.id as id_proper,loai_dia_oc.name as loai_dia_oc,loai_dia_oc.id as id_ldo, tinh_trang_phap_ly.name as tinh_trang_phap_ly,tinh_trang_phap_ly.id as id_ttpl,
        huong.name as huong,huong.id as id_huong,vi_tri_dia_oc.name as vi_tri_dia_oc,vi_tri_dia_oc.id as id_vtdo,phong_ngu.name as phong_ngu
        ,users.full_name,users.phone,users.address
        FROM property
        
        LEFT JOIN loai_dia_oc
        ON property.loai_dia_oc = loai_dia_oc.id
        LEFT JOIN tinh_trang_phap_ly
        ON property.tinh_trang_phap_ly = tinh_trang_phap_ly.id
        LEFT JOIN huong
        ON property.huong = huong.id
        LEFT JOIN vi_tri_dia_oc
        ON property.vi_tri_dia_oc = vi_tri_dia_oc.id
        LEFT JOIN phong_ngu
        ON property.so_phong_ngu = phong_ngu.id
        LEFT JOIN users
        ON users.id = property.id_user
        ORDER BY property.id
        LIMIT 3";
        $query = $this->db->query($sql);
        return $query->result_array();
    }
    public function property_low_price()
    {
        $sql="SELECT property.*,property.id as id_proper,loai_dia_oc.name as loai_dia_oc,loai_dia_oc.id as id_ldo, tinh_trang_phap_ly.name as tinh_trang_phap_ly,tinh_trang_phap_ly.id as id_ttpl,
        huong.name as huong,huong.id as id_huong,vi_tri_dia_oc.name as vi_tri_dia_oc,vi_tri_dia_oc.id as id_vtdo,phong_ngu.name as phong_ngu
        ,users.full_name,users.phone,users.address
        FROM property
        LEFT JOIN loai_dia_oc
        ON property.loai_dia_oc = loai_dia_oc.id
        LEFT JOIN tinh_trang_phap_ly
        ON property.tinh_trang_phap_ly = tinh_trang_phap_ly.id
        LEFT JOIN huong
        ON property.huong = huong.id
        LEFT JOIN vi_tri_dia_oc
        ON property.vi_tri_dia_oc = vi_tri_dia_oc.id
        LEFT JOIN phong_ngu
        ON property.so_phong_ngu = phong_ngu.id
        LEFT JOIN users
        ON users.id = property.id_user
        WHERE property.price REGEXP '^-?[0-9]+$' AND property.price>=300000000 AND property.price <= 1000000000 
        ORDER BY RAND()
        LIMIT 6";
        $query = $this->db->query($sql);
        return $query->result_array();
    }
    public function property_detail($id)
    {
        $id = intval($id);
        $sql="SELECT property.*,loai_dia_oc.name as loai_dia_oc,loai_dia_oc.id as id_ldo, tinh_trang_phap_ly.name as tinh_trang_phap_ly,tinh_trang_phap_ly.id as id_ttpl,
        huong.name as huong,huong.id as id_huong,vi_tri_dia_oc.name as vi_tri_dia_oc,vi_tri_dia_oc.id as id_vtdo,phong_ngu.name as phong_ngu
        ,users.full_name,users.phone,users.address
        FROM property
        
        LEFT JOIN loai_dia_oc
        ON property.loai_dia_oc = loai_dia_oc.id
        LEFT JOIN tinh_trang_phap_ly
        ON property.tinh_trang_phap_ly = tinh_trang_phap_ly.id
        LEFT JOIN huong
        ON property.huong = huong.id
        LEFT JOIN vi_tri_dia_oc
        ON property.vi_tri_dia_oc = vi_tri_dia_oc.id
        LEFT JOIN phong_ngu
        ON property.so_phong_ngu = phong_ngu.id
        LEFT JOIN users
        ON users.id = property.id_user
        WHERE property.id = $id";
        $query = $this->db->query($sql);
        return $query->result_array();
    }
    public function count_dia_oc_district($id)
    {
        $sql="SELECT count(*) as total FROM property WHERE id_district = $id";
        $query = $this->db->query($sql);
        return $query->result_array();
    }
    public function list_loai_dia_oc()
    {
        $sql="SELECT * FROM loai_dia_oc";
        $query = $this->db->query($sql);
        return $query->result_array();
    }
    public function count_loai_dia_oc($id)
    {
        $sql="SELECT count(*) as total FROM property WHERE loai_dia_oc = $id";
        $query = $this->db->query($sql);
        return $query->result_array();
    }
    public function count_dia_oc_tinh_thanh($id)
    {
        $sql="SELECT count(*) as total FROM property WHERE id_city = $id";
        $query = $this->db->query($sql);
        return $query->result_array();
    }
    //------------- For list
    public function list_property($id,$number,$offset)
    {
        $number = intval($number);
        $offset = intval($offset);
        $id = intval($id);
        $sql="SELECT property.*,loai_dia_oc.name as loai_dia_oc,loai_dia_oc.id as id_ldo, tinh_trang_phap_ly.name as tinh_trang_phap_ly,tinh_trang_phap_ly.id as id_ttpl,
        huong.name as huong,huong.id as id_huong,vi_tri_dia_oc.name as vi_tri_dia_oc,vi_tri_dia_oc.id as id_vtdo,phong_ngu.name as phong_ngu
        ,users.full_name,users.phone,users.address
        FROM property
        
        LEFT JOIN loai_dia_oc
        ON property.loai_dia_oc = loai_dia_oc.id
        LEFT JOIN tinh_trang_phap_ly
        ON property.tinh_trang_phap_ly = tinh_trang_phap_ly.id
        LEFT JOIN huong
        ON property.huong = huong.id
        LEFT JOIN vi_tri_dia_oc
        ON property.vi_tri_dia_oc = vi_tri_dia_oc.id
        LEFT JOIN phong_ngu
        ON property.so_phong_ngu = phong_ngu.id
        LEFT JOIN users
        ON users.id = property.id_user
        WHERE property.loai_dia_oc = $id ORDER BY property.id DESC LIMIT $offset,$number";
        $query = $this->db->query($sql);
        return $query->result_array();
    }
    public function count_property_cate($id)
    {
        $id = intval($id);
        $sql="SELECT property.*,loai_dia_oc.name as loai_dia_oc,loai_dia_oc.id as id_ldo, tinh_trang_phap_ly.name as tinh_trang_phap_ly,tinh_trang_phap_ly.id as id_ttpl,
        huong.name as huong,huong.id as id_huong,vi_tri_dia_oc.name as vi_tri_dia_oc,vi_tri_dia_oc.id as id_vtdo,phong_ngu.name as phong_ngu
        ,users.full_name,users.phone,users.address
        FROM property
        
        LEFT JOIN loai_dia_oc
        ON property.loai_dia_oc = loai_dia_oc.id
        LEFT JOIN tinh_trang_phap_ly
        ON property.tinh_trang_phap_ly = tinh_trang_phap_ly.id
        LEFT JOIN huong
        ON property.huong = huong.id
        LEFT JOIN vi_tri_dia_oc
        ON property.vi_tri_dia_oc = vi_tri_dia_oc.id
        LEFT JOIN phong_ngu
        ON property.so_phong_ngu = phong_ngu.id
        LEFT JOIN users
        ON users.id = property.id_user
        WHERE property.loai_dia_oc = $id";
        $query = $this->db->query($sql);
        return count($query->result_array());
        
    }
    //---Sieu thi
    public function list_property_st($number,$offset)
    {
        $number = intval($number);
        $offset = intval($offset);

        $sql="SELECT property.*,loai_dia_oc.name as loai_dia_oc,loai_dia_oc.id as id_ldo, tinh_trang_phap_ly.name as tinh_trang_phap_ly,tinh_trang_phap_ly.id as id_ttpl,
        huong.name as huong,huong.id as id_huong,vi_tri_dia_oc.name as vi_tri_dia_oc,vi_tri_dia_oc.id as id_vtdo,phong_ngu.name as phong_ngu
        ,users.full_name,users.phone,users.address
        FROM property
        
        LEFT JOIN loai_dia_oc
        ON property.loai_dia_oc = loai_dia_oc.id
        LEFT JOIN tinh_trang_phap_ly
        ON property.tinh_trang_phap_ly = tinh_trang_phap_ly.id
        LEFT JOIN huong
        ON property.huong = huong.id
        LEFT JOIN vi_tri_dia_oc
        ON property.vi_tri_dia_oc = vi_tri_dia_oc.id
        LEFT JOIN phong_ngu
        ON property.so_phong_ngu = phong_ngu.id
        LEFT JOIN users
        ON users.id = property.id_user
        LIMIT $offset,$number
        ";
        $query = $this->db->query($sql);
        return $query->result_array();
    }
    public function count_property_cate_st()
    {
    
        $sql="SELECT property.*,loai_dia_oc.name as loai_dia_oc,loai_dia_oc.id as id_ldo, tinh_trang_phap_ly.name as tinh_trang_phap_ly,tinh_trang_phap_ly.id as id_ttpl,
        huong.name as huong,huong.id as id_huong,vi_tri_dia_oc.name as vi_tri_dia_oc,vi_tri_dia_oc.id as id_vtdo,phong_ngu.name as phong_ngu
        ,users.full_name,users.phone,users.address
        FROM property
        
        LEFT JOIN loai_dia_oc
        ON property.loai_dia_oc = loai_dia_oc.id
        LEFT JOIN tinh_trang_phap_ly
        ON property.tinh_trang_phap_ly = tinh_trang_phap_ly.id
        LEFT JOIN huong
        ON property.huong = huong.id
        LEFT JOIN vi_tri_dia_oc
        ON property.vi_tri_dia_oc = vi_tri_dia_oc.id
        LEFT JOIN phong_ngu
        ON property.so_phong_ngu = phong_ngu.id
        LEFT JOIN users
        ON users.id = property.id_user";
        $query = $this->db->query($sql);
        return count($query->result_array());
        
    }
    //List Chinh CHu
     public function list_property_cc($number,$offset)
    {
        $number = intval($number);
        $offset = intval($offset);

        $sql="SELECT property.*,loai_dia_oc.name as loai_dia_oc,loai_dia_oc.id as id_ldo, tinh_trang_phap_ly.name as tinh_trang_phap_ly,tinh_trang_phap_ly.id as id_ttpl,
        huong.name as huong,huong.id as id_huong,vi_tri_dia_oc.name as vi_tri_dia_oc,vi_tri_dia_oc.id as id_vtdo,phong_ngu.name as phong_ngu
        ,users.full_name,users.phone,users.address
        FROM property
        
        LEFT JOIN loai_dia_oc
        ON property.loai_dia_oc = loai_dia_oc.id
        LEFT JOIN tinh_trang_phap_ly
        ON property.tinh_trang_phap_ly = tinh_trang_phap_ly.id
        LEFT JOIN huong
        ON property.huong = huong.id
        LEFT JOIN vi_tri_dia_oc
        ON property.vi_tri_dia_oc = vi_tri_dia_oc.id
        LEFT JOIN phong_ngu
        ON property.so_phong_ngu = phong_ngu.id
        LEFT JOIN users
        ON users.id = property.id_user
        WHERE loai_hinh = 1
        LIMIT $offset,$number
        ";
        $query = $this->db->query($sql);
        return $query->result_array();
    }
    public function count_property_cate_cc()
    {
    
        $sql="SELECT property.*,loai_dia_oc.name as loai_dia_oc,loai_dia_oc.id as id_ldo, tinh_trang_phap_ly.name as tinh_trang_phap_ly,tinh_trang_phap_ly.id as id_ttpl,
        huong.name as huong,huong.id as id_huong,vi_tri_dia_oc.name as vi_tri_dia_oc,vi_tri_dia_oc.id as id_vtdo,phong_ngu.name as phong_ngu
        ,users.full_name,users.phone,users.address
        FROM property
        
        LEFT JOIN loai_dia_oc
        ON property.loai_dia_oc = loai_dia_oc.id
        LEFT JOIN tinh_trang_phap_ly
        ON property.tinh_trang_phap_ly = tinh_trang_phap_ly.id
        LEFT JOIN huong
        ON property.huong = huong.id
        LEFT JOIN vi_tri_dia_oc
        ON property.vi_tri_dia_oc = vi_tri_dia_oc.id
        LEFT JOIN phong_ngu
        ON property.so_phong_ngu = phong_ngu.id
        LEFT JOIN users
        ON users.id = property.id_user
        WHERE loai_hinh = 1
        ";
        $query = $this->db->query($sql);
        return count($query->result_array());
        
    }
     //List Nha Tro
     public function list_property_nt($number,$offset)
    {
        $number = intval($number);
        $offset = intval($offset);

        $sql="SELECT property.*,loai_dia_oc.name as loai_dia_oc,loai_dia_oc.id as id_ldo, tinh_trang_phap_ly.name as tinh_trang_phap_ly,tinh_trang_phap_ly.id as id_ttpl,
        huong.name as huong,huong.id as id_huong,vi_tri_dia_oc.name as vi_tri_dia_oc,vi_tri_dia_oc.id as id_vtdo,phong_ngu.name as phong_ngu
        ,users.full_name,users.phone,users.address
        FROM property
        
        LEFT JOIN loai_dia_oc
        ON property.loai_dia_oc = loai_dia_oc.id
        LEFT JOIN tinh_trang_phap_ly
        ON property.tinh_trang_phap_ly = tinh_trang_phap_ly.id
        LEFT JOIN huong
        ON property.huong = huong.id
        LEFT JOIN vi_tri_dia_oc
        ON property.vi_tri_dia_oc = vi_tri_dia_oc.id
        LEFT JOIN phong_ngu
        ON property.so_phong_ngu = phong_ngu.id
        LEFT JOIN users
        ON users.id = property.id_user
        WHERE loai_hinh = 3
        LIMIT $offset,$number
        ";
        $query = $this->db->query($sql);
        return $query->result_array();
    }
    public function count_property_cate_nt()
    {
    
        $sql="SELECT property.*,loai_dia_oc.name as loai_dia_oc,loai_dia_oc.id as id_ldo, tinh_trang_phap_ly.name as tinh_trang_phap_ly,tinh_trang_phap_ly.id as id_ttpl,
        huong.name as huong,huong.id as id_huong,vi_tri_dia_oc.name as vi_tri_dia_oc,vi_tri_dia_oc.id as id_vtdo,phong_ngu.name as phong_ngu
        ,users.full_name,users.phone,users.address
        FROM property
        
        LEFT JOIN loai_dia_oc
        ON property.loai_dia_oc = loai_dia_oc.id
        LEFT JOIN tinh_trang_phap_ly
        ON property.tinh_trang_phap_ly = tinh_trang_phap_ly.id
        LEFT JOIN huong
        ON property.huong = huong.id
        LEFT JOIN vi_tri_dia_oc
        ON property.vi_tri_dia_oc = vi_tri_dia_oc.id
        LEFT JOIN phong_ngu
        ON property.so_phong_ngu = phong_ngu.id
        LEFT JOIN users
        ON users.id = property.id_user
        WHERE loai_hinh = 3
        ";
        $query = $this->db->query($sql);
        return count($query->result_array());
        
    }
    //List Du An
     public function list_property_duan($id,$number,$offset)
    {
        $number = intval($number);
        $offset = intval($offset);

        $sql="SELECT property.*,loai_dia_oc.name as loai_dia_oc,loai_dia_oc.id as id_ldo, tinh_trang_phap_ly.name as tinh_trang_phap_ly,tinh_trang_phap_ly.id as id_ttpl,
        huong.name as huong,huong.id as id_huong,vi_tri_dia_oc.name as vi_tri_dia_oc,vi_tri_dia_oc.id as id_vtdo,phong_ngu.name as phong_ngu
        ,users.full_name,users.phone,users.address,project.title as name_project
        FROM property
        
        LEFT JOIN loai_dia_oc
        ON property.loai_dia_oc = loai_dia_oc.id
        LEFT JOIN tinh_trang_phap_ly
        ON property.tinh_trang_phap_ly = tinh_trang_phap_ly.id
        LEFT JOIN huong
        ON property.huong = huong.id
        LEFT JOIN vi_tri_dia_oc
        ON property.vi_tri_dia_oc = vi_tri_dia_oc.id
        LEFT JOIN phong_ngu
        ON property.so_phong_ngu = phong_ngu.id
        LEFT JOIN users
        ON users.id = property.id_user
        LEFT JOIN project
        ON project.id = property.id_duan
        WHERE property.id_duan = $id AND
        loai_hinh = 2
         LIMIT $offset,$number
        ";
        $query = $this->db->query($sql);
        return $query->result_array();
    }
    public function count_property_cate_duan($id)
    {
    
        $sql="SELECT property.*,loai_dia_oc.name as loai_dia_oc,loai_dia_oc.id as id_ldo, tinh_trang_phap_ly.name as tinh_trang_phap_ly,tinh_trang_phap_ly.id as id_ttpl,
        huong.name as huong,huong.id as id_huong,vi_tri_dia_oc.name as vi_tri_dia_oc,vi_tri_dia_oc.id as id_vtdo,phong_ngu.name as phong_ngu
        ,users.full_name,users.phone,users.address
        FROM property
        
        LEFT JOIN loai_dia_oc
        ON property.loai_dia_oc = loai_dia_oc.id
        LEFT JOIN tinh_trang_phap_ly
        ON property.tinh_trang_phap_ly = tinh_trang_phap_ly.id
        LEFT JOIN huong
        ON property.huong = huong.id
        LEFT JOIN vi_tri_dia_oc
        ON property.vi_tri_dia_oc = vi_tri_dia_oc.id
        LEFT JOIN phong_ngu
        ON property.so_phong_ngu = phong_ngu.id
        LEFT JOIN users
        ON users.id = property.id_user
        LEFT JOIN project
        ON project.id = property.id_duan
        WHERE property.id_duan = $id AND
        loai_hinh = 2
        ";
        $query = $this->db->query($sql);
        return count($query->result_array());
        
    }
    //List Du An
     public function list_property_gia($gianho,$gialon,$number,$offset)
    {
        $number = intval($number);
        $offset = intval($offset);
        $gialon = intval($gialon);
        $gianho = intval($gianho);
        $sql="SELECT property.*,loai_dia_oc.name as loai_dia_oc,loai_dia_oc.id as id_ldo, tinh_trang_phap_ly.name as tinh_trang_phap_ly,tinh_trang_phap_ly.id as id_ttpl,
        huong.name as huong,huong.id as id_huong,vi_tri_dia_oc.name as vi_tri_dia_oc,vi_tri_dia_oc.id as id_vtdo,phong_ngu.name as phong_ngu
        ,users.full_name,users.phone,users.address,project.title as name_project
        FROM property
        
        LEFT JOIN loai_dia_oc
        ON property.loai_dia_oc = loai_dia_oc.id
        LEFT JOIN tinh_trang_phap_ly
        ON property.tinh_trang_phap_ly = tinh_trang_phap_ly.id
        LEFT JOIN huong
        ON property.huong = huong.id
        LEFT JOIN vi_tri_dia_oc
        ON property.vi_tri_dia_oc = vi_tri_dia_oc.id
        LEFT JOIN phong_ngu
        ON property.so_phong_ngu = phong_ngu.id
        LEFT JOIN users
        ON users.id = property.id_user
        LEFT JOIN project
        ON project.id = property.id_duan
        WHERE  property.price >=$gianho AND property.price<=$gialon
         LIMIT $offset,$number
        ";
        $query = $this->db->query($sql);
        return $query->result_array();
    }
    public function count_property_cate_gia($gianho,$gialon)
    {
        $gialon = intval($gialon);
        $gianho = intval($gianho);
        $sql="SELECT property.*,loai_dia_oc.name as loai_dia_oc,loai_dia_oc.id as id_ldo, tinh_trang_phap_ly.name as tinh_trang_phap_ly,tinh_trang_phap_ly.id as id_ttpl,
        huong.name as huong,huong.id as id_huong,vi_tri_dia_oc.name as vi_tri_dia_oc,vi_tri_dia_oc.id as id_vtdo,phong_ngu.name as phong_ngu
        ,users.full_name,users.phone,users.address
        FROM property
        
        LEFT JOIN loai_dia_oc
        ON property.loai_dia_oc = loai_dia_oc.id
        LEFT JOIN tinh_trang_phap_ly
        ON property.tinh_trang_phap_ly = tinh_trang_phap_ly.id
        LEFT JOIN huong
        ON property.huong = huong.id
        LEFT JOIN vi_tri_dia_oc
        ON property.vi_tri_dia_oc = vi_tri_dia_oc.id
        LEFT JOIN phong_ngu
        ON property.so_phong_ngu = phong_ngu.id
        LEFT JOIN users
        ON users.id = property.id_user
        LEFT JOIN project
        ON project.id = property.id_duan
        WHERE property.price >=$gianho AND property.price<=$gialon
        ";
        $query = $this->db->query($sql);
        return count($query->result_array());
        
    }
}
?>