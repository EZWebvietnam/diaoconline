<?php 

class Home extends MY_Controller

{

    public function __construct()

    {

        parent::__construct();

        parent::get_menu_new_nav();

        parent::load_last_new();

        parent::load_list_last_new($this->data['new_on_nav'][0]['id_new']);

        parent::get_cate_dis_nav();

        parent::dis_noi_bat();

        parent::dis_noi_bat_other($this->data['last_dis'][0]['id_disco']);

        parent::list_city();

        parent::list_district();

         parent::cate_project_sub();

        parent::project_noi_bat_lm1();

        parent::get_list_cafe_law();

        parent::project_noi_menu($this->data['noi_bat_menu_1'][0]['id_pro']);

        

        // Tai san

        parent::get_tai_san_lm3();

        parent::get_ts_menu();

        parent::cate_sieu_thi();

        parent::get_loai_dia_oc();

        //

        parent::dn_nb();

        //Load Adv

        parent::load_adv_home_p1();

        parent::load_adv_home_p2();

        parent::load_adv_home_p3();

        parent::load_adv_home_p4();

        parent::load_adv_home_p5();
        parent::load_adv_home_p9();
        

        $this->load->library('tank_auth');

    }

    public function index()

    {

       

        $this->load->model('projecthomemodel');

        $this->load->model('doanhnghiephomemodel');

         $this->load->model('newshomemodel');

         $this->load->model('discoveryhomemodel');

         $this->load->model('catepropertyhomemodel');

        $this->load->model('nhadephomemodel');

        $this->load->model('memberhomemodel');

        $this->data['list_mem']=$this->memberhomemodel->list_mem();

        $this->data['list_nha_dep']=$this->nhadephomemodel->load_nha_dep_home_page();

        $this->data['list_shopping']=$this->discoveryhomemodel->load_detail_other(0,7);

        $list_project = $this->projecthomemodel->get_list_project();

        $list_pro = $this->propertyhomemodel->get_list_property_cc();

        $list_pro_new = $this->propertyhomemodel->get_list_property_new();

        $property_low_price = $this->propertyhomemodel->property_low_price();

        $list_new_slide = $this->newshomemodel->load_news_slide();

        $list_new_slide_ = $this->newshomemodel->load_news_slide_();

        $list_new_slide_d = $this->discoveryhomemodel->load_news_slide();

        $list_new_slide_d_ = $this->discoveryhomemodel->load_news_slide_($list_new_slide_d[0]['id_disco']);

        $this->data['list_dn']=$this->doanhnghiephomemodel->list_doanh_nghiep_home();

        $this->data['cate_proper_list']=$this->catepropertyhomemodel->cate_list_();

        $this->data['list_project']=$list_project;

        $this->data['list_new_slide']=$list_new_slide;

         $this->data['list_new_slide_']=$list_new_slide_;

         $this->data['list_new_slide_d']=$list_new_slide_d;

         $this->data['list_new_slide_d_']=$list_new_slide_d_;

        $this->data['list_pro']=$list_pro;

        $this->data['list_pro_new']=$list_pro_new;

        $this->data['property_low_price'] = $property_low_price;

        $this->data['main_content']='home_view/home_index';

        $this->load->view('home_layout/home_layout',$this->data);

    }

    public function quy_dinh()

    {

        $this->data['main_content']='home_view/quy_dinh';

        $this->load->view('home_layout/support_guide_contact_layout',$this->data);

    }

    public function dieu_khoan()

    {

        $this->data['main_content']='home_view/dieu_khoan';

        $this->load->view('home_layout/support_guide_contact_layout',$this->data);

    }

    public function chinh_sach()

    {

        $this->data['main_content']='home_view/chinh_sach_bao_mat';

        $this->load->view('home_layout/support_guide_contact_layout',$this->data);

    }

    public function lien_he()

    {

        if($this->input->post())

        {

            $data_save = array(

            'fullname'=>$this->input->post('FullName'),

            'email'=>$this->input->post('Email'),

            'ten_cty'=>$this->input->post('CompanyName'),

            'title'=>$this->input->post('Title'),

            'content'=>$this->input->post('Message'),

            'create_date'=>strtotime('now')

            );

            $this->load->model('advhomemodel');

            $id = $this->advhomemodel->insert_contact($data_save);

            if($id>0)

            {

                redirect('/');

            }

            else

            {

                redirect($_SERVER['HTTP_REFERER']);

            }

        }

        else

        {

            $this->load->view('home_layout/lien_he_layout',$this->data);

        }

        

    }
    public function news_letter()
    {
        if($this->input->is_ajax_request())
        {
            $email = $this->input->post('email');
            $this->load->model('newshomemodel');
            $data_save = array('email'=>$email);
            $id = $this->newshomemodel->add_email_news_letter($data_save);
            if($id>0)
            {
                $array = array('msg'=>TRUE);
            }
            else
            {
                $array = array('msg'=>FALSE);
            }
            echo json_encode($array);
        }
    }

}

?>