<?php

class News extends MY_Controller

{

    public function __construct()

    {

       parent::__construct();

        parent::get_menu_left();

        parent::get_menu_new_nav();

        parent::load_last_new();

        parent::load_list_last_new($this->data['new_on_nav'][0]['id_cate']);

        

        parent::get_list_cafe_law();

        parent::get_cate_dis_nav();

        parent::dis_noi_bat();

        parent::dis_noi_bat_other($this->data['last_dis'][0]['id_disco']);

         parent::cate_project_sub();

        parent::project_noi_bat_lm1();

        parent::project_noi_menu($this->data['noi_bat_menu_1'][0]['id_pro']);

        parent::list_city();

        parent::list_district();

         // Tai san

        parent::get_tai_san_lm3();

        parent::get_ts_menu();

        parent::cate_sieu_thi();

        parent::get_ts_menu();

        parent::load_phong_thuy();

         parent::load_adv_home_p1();

        parent::load_adv_home_p2();

        parent::load_adv_home_p3();

        parent::load_adv_home_p4();

        parent::load_adv_home_p5();

        $this->load->model('newshomemodel');

        $this->load->library('session');

        	$this->load->library('tank_auth');

		$this->lang->load('tank_auth');

    }

    public function index()

    {

        parent::get_new_index();

        $this->data['news_slide']=$this->newshomemodel->load_news_slide_();

        $this->data['list_most_view']=$this->newshomemodel->get_most_view();

        $this->load->view('home_layout/news_layout', $this->data);

    }

    public function list_new($id)

    {

        $this->load->model('catenewshomemodel');

        if (!is_numeric($id)) {

            show_404();

            exit;

        }

        $detail_cate = $this->catenewshomemodel->get_cate_detail($id);

        if (empty($detail_cate)) {

            show_404();

            exit;

        }

        

        $this->load->helper('url');

        $config['uri_segment'] = 5;

        $page = $this->uri->segment(4);

        $config['per_page'] = 10;

        $config['total_rows'] = $this->newshomemodel->count_all($id);

        if ($page == '') {

            $page = 1;

        }

        $page1 = ($page - 1) * $config['per_page'];

       

        if (!is_numeric($page)) {

            show_404();

            exit;

        }

        if (empty($id)) {

            redirect('trang-chu', 'refresh');

        }

       $num_pages = ceil($config['total_rows']/ $config['per_page']);

       $array_sv = $this->newshomemodel->get_list_new($id,$config['per_page'], $page1);

       $this->data['cate_parent'] = $this->catenewshomemodel->get_cate_detail($detail_cate[0]['parent']);

       $this->data['total_page'] = $num_pages;

       $this->data['offset'] = $page1;

       $this->data['main_content'] = 'news_view/list_new';

       $this->data['detail']=$detail_cate;

       $this->data['page']=$page;

       $this->data['total']=$config['total_rows'];

       $this->data['list']=$array_sv;

       $this->load->view('home_layout/list_new_layout', $this->data);

    }

    public function news_detail($id = null)

    {

        parent::get_menu_left();



        if (empty($id)) {

            show_404();

            exit;

        }

        $news_detail = $this->newshomemodel->new_detail($id);

        if (empty($news_detail)) {

            show_404();

            exit;

        }

        $this->data['list_new'] = $this->newshomemodel->get_news_with_cate($news_detail[0]['id_cate'],

            $news_detail[0]['id_new']);



        $this->data['main_content'] = 'news_view/news_detail';

        $this->data['detail'] = $news_detail;

        $this->data['title'] = $news_detail[0]['title'];

        $this->load->view('home_layout/news_detail_layout', $this->data);

    }

    public function save_new($id)

    {

        

        $id = intval($id);

        if($this->input->is_ajax_request())

        {

            if($this->tank_auth->is_logged_in())

            {

                $detail = $this->newshomemodel->check_save($this->session->userdata('user_id'),$id);

                if(!empty($detail))

                {

                    $array = array('msg'=>'da-luu');

                }

                else

                {

                    $data = array('id_new'=>$id,'id_user'=>$this->session->userdata('user_id'),'create_date'=>strtotime('now'));

                    $id = $this->newshomemodel->save_tin($data);

                    if($id>0)

                    {

                        $array = array('msg'=>'da-luu');

                    }

                }

            }

            else

            {

                $array = array('msg'=>'dang-nhap');

            }

            echo  json_encode($array);

        }

    }

    public function delete_save($id)

    {

        if($this->input->is_ajax_request())
        {

            $id = intval($id);

            $this->newshomemodel->delete_save($id);

            $array = array('msg'=>TRUE);

            echo json_encode($array);

        }

    }

}

?>