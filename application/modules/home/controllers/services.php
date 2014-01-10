<?php

/*
* To change this template, choose Tools | Templates
* and open the template in the editor.
*/

class Services extends MY_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('dichvumodel');
    }
    public function dich_vu()
    {
       parent::load_dich_vu();
        parent::load_new_home();
         parent::load_image();
        $this->data['title']='CÔNG TY TNHH TM VT XÂY DỰNG VIỆT TIẾN - Dịch vụ';
        $this->data['content']=$this->dichvumodel->get_dich_vu_desc();
        $this->data['main_content']='gioi_thieu_dichvu';
        
        $this->load->view('home_layout/home_layout', $this->data);
    }
    public function index($id = null)
    {
        
         parent::load_dich_vu();
        parent::load_new_home();
         parent::load_image();
        $this->data['content']=$this->dichvumodel->dich_vu_detail($id);
        $this->data['title']=$this->data['content'][0]['name'];
        $this->data['main_content'] = 'detail_dv';
        $this->load->view('home_layout/home_layout', $this->data);
    }

}

?>
