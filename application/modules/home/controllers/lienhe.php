<?php
class Lienhe extends MY_Controller
{
    public function __construct() {
        parent::__construct();
    }
    public function index()
    {
         parent::load_dich_vu();
         parent::load_new_home();
          parent::load_image();
        $this->data['title']='CÔNG TY TNHH TM VT XÂY DỰNG VIỆT TIẾN - Liên hệ';
        $this->load->library('maillinux');
        if($this->input->post())
        {
            $name = $this->input->post('name');
            $address = $this->input->post('add');
            $email = $this->input->post('email');
            $subject = $this->input->post('tilecontent');
            $contentfrorm = $this->input->post('contentfrorm');
            if($name =='' || $address=='' || $email=='' || $subject=='' || $contentfrorm=='')
            {
                redirect('/');
            }
            else
            {
                $content_to_admin = "Tên khách hàng: ".$name." Email: ".$email." Nội dung: ".$contentfrorm;
                $content_reply = "Câu hỏi, góp ý của bạn đã được gửi đến Ban chủ nhiệm HTX, chúng tôi sẽ trả lời bạn trong thời gian sớm nhất. Xin cảm ơn !\n Đây là hệ thống email trả lời tự động, vui lòng không trả lời lại email này !";
                $this->maillinux->SendMail("no-reply@ninhbinhcoop.com",$email,$subject,$content_reply);
                $this->maillinux->SendMail("no-reply@ninhbinhcoop.com",'info@ninhbinhcoop.com',$subject,$content_to_admin,$name);
                redirect($_SEVER['HTTP_REFERER']);
            }
        }
        else
        {
            $this->data['main_content']='lien_he';
            $this->load->view('home_layout/home_layout',$this->data);
        }
    }
}
?>