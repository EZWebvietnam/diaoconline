<?php 

class Advhomemodel extends CI_Model

{

    public function __construct()

    {

        parent::__construct();

        $this->load->database();

    }

    public function adv_home_p1()

    {

        $sql ="SELECT * FROM adv_detail WHERE vi_tri = 1 AND exp_date >= now() ORDER BY rand() LIMIT 2";

        $query = $this->db->query($sql);

        return $query->result_array();

    }

    public function adv_home_p2()

    {

        $sql ="SELECT * FROM adv_detail WHERE vi_tri = 2 AND exp_date >= now() ORDER BY rand() LIMIT 2";

        $query = $this->db->query($sql);

        return $query->result_array();

    }

    public function adv_home_p3()

    {

        $sql ="SELECT * FROM adv_detail WHERE vi_tri = 3 AND exp_date >= now() ORDER BY rand() LIMIT 2";

        $query = $this->db->query($sql);

        return $query->result_array();

    }

    public function adv_home_p4()

    {

        $sql ="SELECT * FROM adv_detail WHERE vi_tri = 4 AND exp_date >= now() ORDER BY rand() LIMIT 2";

        $query = $this->db->query($sql);

        return $query->result_array();

    }

    public function adv_home_p5()

    {

        $sql ="SELECT * FROM adv_detail WHERE vi_tri = 5 AND exp_date >= now() ORDER BY rand() LIMIT 2";

        $query = $this->db->query($sql);

        return $query->result_array();

    }

    public function adv_home_p6()

    {

        $sql ="SELECT * FROM adv_detail WHERE vi_tri = 6 AND exp_date >= now() ORDER BY rand() LIMIT 10";

        $query = $this->db->query($sql);

        return $query->result_array();

    }

     public function adv_home_p7()

    {

        $sql ="SELECT * FROM adv_detail WHERE vi_tri = 6 AND exp_date >= now() ORDER BY rand() LIMIT 10";

        $query = $this->db->query($sql);

        return $query->result_array();

    }

     public function adv_home_p8()

    {

        $sql ="SELECT * FROM adv_detail WHERE vi_tri = 8 AND exp_date >= now() ORDER BY rand() LIMIT 2";

        $query = $this->db->query($sql);

        return $query->result_array();

    }
    public function adv_home_p9()

    {

        $sql ="SELECT * FROM adv_detail WHERE vi_tri = 9 AND exp_date >= now() ORDER BY rand() LIMIT 2";

        $query = $this->db->query($sql);

        return $query->result_array();

    }
    public function insert_contact(array $data)

    {

        $this->db->insert('contact',$data);

        return $this->db->insert_id();

    }

}

?>