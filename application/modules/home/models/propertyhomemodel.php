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
        WHERE property.loai_hinh = 1 AND property.status = 1
        ORDER BY property.goi_giao_dich DESC
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
        ON users.id = property.id_user AND property.status = 1
         ORDER BY property.goi_giao_dich DESC
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
        WHERE property.status = 1
         ORDER BY property.goi_giao_dich DESC
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
        WHERE property.price REGEXP '^-?[0-9]+$' AND property.price>=300000000 AND property.price <= 1000000000 AND property.status = 1  
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
        WHERE property.id = $id AND property.status = 1";
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
        WHERE property.loai_dia_oc = $id AND property.status = 1 ORDER BY property.goi_giao_dich DESC LIMIT $offset,$number";
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
        WHERE property.loai_dia_oc = $id AND property.status = 1";
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
        WHERE property.status = 1
         ORDER BY property.goi_giao_dich DESC
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
        ON users.id = property.id_user
        WHERE property.status = 1
        ";
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
        WHERE loai_hinh = 1 AND property.status = 1
         ORDER BY property.goi_giao_dich DESC
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
        WHERE loai_hinh = 1 AND property.status = 1
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
        WHERE loai_hinh = 3 AND property.status = 1
         ORDER BY property.goi_giao_dich DESC
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
        WHERE loai_hinh = 3 AND property.status = 1
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
        loai_hinh = 2 AND property.status = 1
         ORDER BY property.goi_giao_dich DESC
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
        loai_hinh = 2 AND property.status = 1
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
        WHERE  property.price >=$gianho AND property.price<=$gialon AND property.status = 1
         ORDER BY property.goi_giao_dich DESC
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
        WHERE property.price >=$gianho AND property.price<=$gialon AND property.status = 1
        ";
        $query = $this->db->query($sql);
        return count($query->result_array());
        
    }
    //---List quan
     public function list_property_quan($id,$id_district,$number,$offset)
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
        WHERE  property.id_district = '$id_district' AND property.loai_dia_oc=$id AND property.status = 1
         ORDER BY property.goi_giao_dich DESC
         LIMIT $offset,$number
        ";
        $query = $this->db->query($sql);
        return $query->result_array();
    }
    public function count_property_quan($id,$id_district)
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
        WHERE property.id_district = '$id_district' AND property.loai_dia_oc=$id AND property.status = 1
        ";
        $query = $this->db->query($sql);
        return count($query->result_array());
        
    }
    //----List city
     public function list_property_city($id,$id_city,$number,$offset)
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
        WHERE  property.id_city = '$id_city' AND property.loai_dia_oc=$id AND property.status = 1
         ORDER BY property.goi_giao_dich DESC
         LIMIT $offset,$number
        ";
        $query = $this->db->query($sql);
        return $query->result_array();
    }
    public function count_property_city($id,$id_city)
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
        WHERE property.id_city = '$id_city' AND property.loai_dia_oc=$id AND property.status = 1
        ";
        $query = $this->db->query($sql);
        return count($query->result_array());
        
    }
    // List project
    public function list_property_project($id)
    {
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
        WHERE property.id_duan IN ($id) AND property.status = 1
         ORDER BY property.goi_giao_dich DESC
         LIMIT 3
        ";
        $query = $this->db->query($sql);
        return $query->result_array();
    }
    //
    public function list_cung_nguoi_dang($id)
    {
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
        WHERE property.id_user = $id AND property.status = 1
         ORDER BY property.goi_giao_dich DESC
         LIMIT 3
        ";
        $query = $this->db->query($sql);
        return $query->result_array();
    }
    //save_tin
    public function check_save($id_user,$id_new)
    {
        $this->db->select();
        $this->db->where('id_user',$id_user);
        $this->db->where('id_property',$id_new);
        $query = $this->db->get('save_property');
        return $query->result_array();
    }
    public function save_property(array $data)
    {
        $this->db->insert('save_property',$data);
        return $this->db->insert_id();
    }
    public function delete_save($id)
    {
        $id = intval($id);
        $this->db->delete('save_property',array('id'=>$id));
    }
    public function delete($id)
    {
        $id = intval($id);
        $this->db->delete('property',array('id'=>$id));
    }
    //Save tin List
    public function list_property_save($number,$offset)
    {
        $number = intval($number);
        $offset = intval($offset);
       
        $sql="SELECT property.*,loai_dia_oc.name as loai_dia_oc,loai_dia_oc.id as id_ldo,save_property.id as id_save
        FROM property
        INNER JOIN save_property
        ON save_property.id_property = property.id
        LEFT JOIN loai_dia_oc
        ON property.loai_dia_oc = loai_dia_oc.id
         ORDER BY property.goi_giao_dich DESC
         LIMIT $offset,$number
        ";
        $query = $this->db->query($sql);
        return $query->result_array();
    }
    public function count_property_save()
    {
        
        $sql="SELECT property.*,loai_dia_oc.name as loai_dia_oc,loai_dia_oc.id as id_ldo
        FROM property
        INNER JOIN save_property
        ON save_property.id_property = property.id
        LEFT JOIN loai_dia_oc
        ON property.loai_dia_oc = loai_dia_oc.id
        ";
        $query = $this->db->query($sql);
        return count($query->result_array());
        
    }
    /////////// For member function
    public function list_loai_dia_oc_member()
    {
        $sql = "SELECT * FROM loai_dia_oc WHERE parent<>0";
        $query = $this->db->query($sql);
        return $query->result_array();
    }
    public function list_vt_dia_oc_member()
    {
        $sql = "SELECT * FROM vi_tri_dia_oc";
        $query = $this->db->query($sql);
        return $query->result_array();
    }
    public function list_tinh_member()
    {
        $sql = "SELECT * FROM province";
        $query = $this->db->query($sql);
        return $query->result_array();
    }
    public function list_phap_ly()
    {
        $sql = "SELECT * FROM tinh_trang_phap_ly";
        $query = $this->db->query($sql);
        return $query->result_array();
    }
    public function list_huong()
    {
        $sql = "SELECT * FROM huong";
        $query = $this->db->query($sql);
        return $query->result_array();
    }
    public function list_pn()
    {
        $sql = "SELECT * FROM phong_ngu";
        $query = $this->db->query($sql);
        return $query->result_array();
    }
    public function list_district_by_city($id)
    {
        $id = intval($id);
        $sql = "SELECT * FROM district WHERE provinceid = $id";
        $query = $this->db->query($sql);
        return $query->result_array();
    }
    public function list_ward_by_district($id)
    {
        $id = intval($id);
        $sql = "SELECT * FROM ward WHERE districtid = $id";
        $query = $this->db->query($sql);
        return $query->result_array();
    }
     public function list_project_by_district($id,$id_city)
    {
       
        $sql = "SELECT * FROM project WHERE id_district = '$id' AND id_city = '$id_city'";
       
        $query = $this->db->query($sql);
        return $query->result_array();
    }
    public function insert(array $data)
    {
        $this->db->insert('property',$data);
        return $this->db->insert_id();
    }
    public function update($id,array $data)
    {
        $id = intval($id);
        $this->db->where('id',$id);
        $this->db->update('property',$data);
    }
   
    public function insert_tmp(array $data)
    {
        $this->db->insert('property_tmp',$data);
        return $this->db->insert_id();
    }
    // Tai san dang hien thi
    public function list_property_available($id_user,$number,$offset)
    {
        $id_user = intval($id_user);
        $number = intval($number);
        $offset = intval($offset);
       
        $sql="SELECT property.*,loai_dia_oc.name as loai_dia_oc,loai_dia_oc.id as id_ldo
        FROM property
        
        LEFT JOIN loai_dia_oc
        ON property.loai_dia_oc = loai_dia_oc.id
        WHERE property.id_user = $id_user AND property.status = 1
         ORDER BY property.goi_giao_dich DESC
         LIMIT $offset,$number
        ";
        $query = $this->db->query($sql);
        return $query->result_array();
    }
    public function count_property_available($id_user)
    {
        
        $sql="SELECT property.*,loai_dia_oc.name as loai_dia_oc,loai_dia_oc.id as id_ldo
        FROM property
        
        LEFT JOIN loai_dia_oc
        ON property.loai_dia_oc = loai_dia_oc.id
        WHERE property.id_user = $id_user AND property.status = 1
        ";
        $query = $this->db->query($sql);
        return count($query->result_array());
        
    }
    // Tai san dang hien thi search
    public function list_property_available_search($sql)
    {
       
        $query = $this->db->query($sql);
        return $query->result_array();
    }
    public function count_property_available_search($sql)
    {
        $query = $this->db->query($sql);
        return count($query->result_array());
        
    }
    // Tai san cho duyet
    public function list_property_pending($id_user,$number,$offset)
    {
        $id_user = intval($id_user);
        $number = intval($number);
        $offset = intval($offset);
       
        $sql="SELECT property.*,loai_dia_oc.name as loai_dia_oc,loai_dia_oc.id as id_ldo
        FROM property
        
        LEFT JOIN loai_dia_oc
        ON property.loai_dia_oc = loai_dia_oc.id
        WHERE property.id_user = $id_user AND property.status = 0
         ORDER BY property.goi_giao_dich DESC
         LIMIT $offset,$number
        ";
        $query = $this->db->query($sql);
        return $query->result_array();
    }
    public function count_property_pending($id_user)
    {
        
        $sql="SELECT property.*,loai_dia_oc.name as loai_dia_oc,loai_dia_oc.id as id_ldo
        FROM property
        
        LEFT JOIN loai_dia_oc
        ON property.loai_dia_oc = loai_dia_oc.id
        WHERE property.id_user = $id_user AND property.status = 0
        ";
        $query = $this->db->query($sql);
        return count($query->result_array());
        
    }
     // Tai san chua thanh toan
    public function list_property_waitpay($id_user,$number,$offset)
    {
        $id_user = intval($id_user);
        $number = intval($number);
        $offset = intval($offset);
       
        $sql="SELECT property.*,chi_tiet_dv_ts.id_ctdvts,loai_dia_oc.name as loai_dia_oc,loai_dia_oc.id as id_ldo
        FROM property
        INNER JOIN chi_tiet_dv_ts
        ON chi_tiet_dv_ts.id_tai_san = property.id
        LEFT JOIN dich_vu_tai_san 
        ON dich_vu_tai_san.id_service = chi_tiet_dv_ts.id_dich_vu
        LEFT JOIN loai_dia_oc
        ON property.loai_dia_oc = loai_dia_oc.id
        WHERE property.id_user = $id_user AND 
        chi_tiet_dv_ts.tinh_trang = 0
         ORDER BY property.goi_giao_dich DESC
         LIMIT $offset,$number
        ";
        
        $query = $this->db->query($sql);
        return $query->result_array();
    }
    public function count_property_waitpay($id_user)
    {
        
        $sql="SELECT property.*,loai_dia_oc.name as loai_dia_oc,loai_dia_oc.id as id_ldo
        FROM property
        INNER JOIN chi_tiet_dv_ts
        ON chi_tiet_dv_ts.id_tai_san = property.id
        LEFT JOIN dich_vu_tai_san ON dich_vu_tai_san.id_service = chi_tiet_dv_ts.id_dich_vu
        LEFT JOIN loai_dia_oc
        ON property.loai_dia_oc = loai_dia_oc.id
        WHERE property.id_user = $id_user
        AND chi_tiet_dv_ts.tinh_trang = 0
        ";
        $query = $this->db->query($sql);
        return count($query->result_array());
        
    }
    public function property_pending_detail($id_user,$id)
    {
        $id_user = intval($id_user);
        $id = intval($id);
       
        $sql="SELECT property.*,property.loai_dia_oc as ldo_proper,loai_dia_oc.name as loai_dia_oc,loai_dia_oc.id as id_ldo
        FROM property
        LEFT JOIN loai_dia_oc
        ON property.loai_dia_oc = loai_dia_oc.id
        WHERE property.id_user = $id_user AND property.status = 0
        AND property.id = $id
         ORDER BY property.goi_giao_dich DESC
        ";
       
        $query = $this->db->query($sql);
        return $query->result_array();
    }
    // Tai san dang soan
    public function list_property_prepare($id_user,$number,$offset)
    {
        $id_user = intval($id_user);
        $number = intval($number);
        $offset = intval($offset);
       
        $sql="SELECT property_tmp.*,loai_dia_oc.name as loai_dia_oc,loai_dia_oc.id as id_ldo
        FROM property_tmp
        
        LEFT JOIN loai_dia_oc
        ON property_tmp.loai_dia_oc = loai_dia_oc.id
        WHERE property_tmp.id_user = $id_user
         ORDER BY property_tmp.goi_giao_dich DESC
         LIMIT $offset,$number
        ";
        $query = $this->db->query($sql);
        return $query->result_array();
    }
    public function count_property_prepare($id_user)
    {
        
        $sql="SELECT property_tmp.*,loai_dia_oc.name as loai_dia_oc,loai_dia_oc.id as id_ldo
        FROM property_tmp
        
        LEFT JOIN loai_dia_oc
        ON property_tmp.loai_dia_oc = loai_dia_oc.id
        WHERE property_tmp.id_user = $id_user
        ";
        $query = $this->db->query($sql);
        return count($query->result_array());
        
    }
    public function detail_hs_dang_soan($id,$id_user)
    {
        $sql="SELECT property_tmp.*,property_tmp.loai_dia_oc as ldo_proper,loai_dia_oc.name as loai_dia_oc,loai_dia_oc.id as id_ldo
        FROM property_tmp
        
        LEFT JOIN loai_dia_oc
        ON property_tmp.loai_dia_oc = loai_dia_oc.id
        WHERE property_tmp.id_user = $id_user AND property_tmp.id = $id
        ";
        $query = $this->db->query($sql);
        return $query->result_array();
    }
    public function delete_tmp($id)
    {
        $id = intval($id);
        $this->db->delete('property_tmp',array('id'=>$id));
    }
    public function update_tmp($id,array $data)
    {
        $id = intval($id);
        $this->db->where('id',$id);
        $this->db->update('property_tmp',$data);
    }
  
     // Tai san het han
    public function list_property_exp($id_user,$number,$offset)
    {
        $id_user = intval($id_user);
        $number = intval($number);
        $offset = intval($offset);
       
        $sql="SELECT property.*,chi_tiet_dv_ts.id_ctdvts,loai_dia_oc.name as loai_dia_oc,loai_dia_oc.id as id_ldo
        FROM property
        INNER JOIN chi_tiet_dv_ts
        ON chi_tiet_dv_ts.id_tai_san = property.id
        LEFT JOIN dich_vu_tai_san 
        ON dich_vu_tai_san.id_service = chi_tiet_dv_ts.id_dich_vu
        LEFT JOIN loai_dia_oc
        ON property.loai_dia_oc = loai_dia_oc.id
        WHERE property.id_user = $id_user AND 
        chi_tiet_dv_ts.tinh_trang = 1 AND ngay_het_han <=now()
         ORDER BY property.goi_giao_dich DESC
         LIMIT $offset,$number
        ";
        
        $query = $this->db->query($sql);
        return $query->result_array();
    }
    public function count_property_exp($id_user)
    {
        
        $sql="SELECT property.*,loai_dia_oc.name as loai_dia_oc,loai_dia_oc.id as id_ldo
        FROM property
        INNER JOIN chi_tiet_dv_ts
        ON chi_tiet_dv_ts.id_tai_san = property.id
        LEFT JOIN dich_vu_tai_san ON dich_vu_tai_san.id_service = chi_tiet_dv_ts.id_dich_vu
        LEFT JOIN loai_dia_oc
        ON property.loai_dia_oc = loai_dia_oc.id
        WHERE property.id_user = $id_user AND ngay_het_han <=now()
        AND chi_tiet_dv_ts.tinh_trang = 1
        ";
        $query = $this->db->query($sql);
        return count($query->result_array());
        
    }
    //Huy dich vu
    public function delete_dich_vu_($id)
    {
        $id = intval($id);
        $this->db->delete('chi_tiet_dv_ts',array('id_ctdvts'=>$id));
    }
    //
    public function search_ct_dv($id)
    {
        $id = intval($id);
        $sql = "SELECT * FROM chi_tiet_dv_ts WHERE time<=now() AND tinh_trang = 1";
        $query = $this->db->query($sql);
        return $query->result_array();
    }
    //Tim kiem
    //---List quan
     public function list_property_timkiem($sql)
    {
        $query = $this->db->query($sql);
        return $query->result_array();
    }
    public function count_property_timkiem($sql)
    {
        
        
        $query = $this->db->query($sql);
        return count($query->result_array());
        
    }
}
?>