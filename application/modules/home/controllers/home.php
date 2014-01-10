<?php

class Home extends MY_Controller {

    public function __construct() {
        parent::__construct();
    }

    public function index() {
        parent::load_dich_vu();
        parent::load_new_home();
        parent::load_image();
        $this->data['title']='CÔNG TY TNHH TM VT XÂY DỰNG VIỆT TIẾN';
        $this->data['main_content'] = 'home_index';
        $this->load->view('home_layout/home_layout', $this->data);
    }

    public function view_about() {
        parent::load_dich_vu();
        parent::load_new_home();
         parent::load_image();
        $this->load->model('gioithieumodel');
            $gioithieu_detail = $this->gioithieumodel->get_about(1);
            if (empty($gioithieu_detail)) {
                show_404();
                exit();
            }
       $this->data['title']='CÔNG TY TNHH TM VT XÂY DỰNG VIỆT TIẾN - Giới thiệu';
        $this->data['main_content'] = 'gioi_thieu';
        $this->data['data'] = $gioithieu_detail;
        $this->load->view('home_layout/home_layout', $this->data);
    }

    public function new_detail($id) {
        parent::load_dich_vu();
        parent::load_new_home();
         parent::load_image();
        $id = intval($id);
        $this->load->Model('tintucmodel');
        $array_new = $this->tintucmodel->get_news_detail($id);
        if (empty($array_new)) {
            show_404();
            exit();
        }
        $this->data['title'] = $array_new[0]['name'];
        
        $this->data['description'] = $array_new[0]['name'];
        $this->data['data'] = $array_new;
        $this->data['main_content'] = 'detail_new';
        $this->load->view('home_layout/home_layout', $this->data);
    }

}
?>
