<?php 
class News extends MY_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('newshomemodel');
    }
    public function news_detail($id = null)
    {
        parent::get_menu_left();
       
        if(empty($id))
        {
            show_404();
            exit;
        }
        $news_detail  = $this->newshomemodel->new_detail($id);
        if(empty($news_detail))
        {
            show_404();
            exit;
        }
        $this->data['list_new']=$this->newshomemodel->get_news_with_cate($news_detail[0]['id_cate'],$news_detail[0]['id']);
        
        $this->data['main_content']='news_view/news_detail';
        $this->data['detail']= $news_detail;
        $this->load->view('home_layout/news_detail_layout', $this->data);
    }
}
?>