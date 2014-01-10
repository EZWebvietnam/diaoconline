<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
class Mem extends CI_Controller{
    public function __construct() {
        parent::__construct();
         $this->load->helper(array('form', 'url'));
        $this->load->library('form_validation');
        $this->load->library('tank_auth');
        $this->lang->load('tank_auth');
        $this->load->Model('memmodel');
        $this->load->library('myfunction');
        if(!$this->tank_auth->is_logged_in())
        {
             redirect('/admin/login.xxx');
        }
    }
    public function list_mem()
    {
        $data['main_content']='list_mem';
        $data['list_mem']=$this->memmodel->list_mem();
        $this->load->view('admin/table_template',$data);
    }
    public function acept($id)
    {
        if(empty($id))
        {
            redirect('admin/mem/list_mem');
        }
        else
        {
            $mem_detail = $this->memmodel->mem_detail($id);
            if(empty($mem_detail))
            {
                redirect('admin/mem/list_mem');
            }
            else
            {
                $status = $mem_detail[0]['status'];
                $status = 1 - $status;
                $data = array('status'=>$status);
                $this->memmodel->update_mem($id,$data);
                $this->test_send_mail($mem_detail[0]['mail'],$mem_detail[0]['name']);
                redirect('admin/mem/list_mem');
            }
        }
    }
    public function delete($id)
    {
        if(empty($id))
        {
            redirect('admin/mem/list_mem');
        }
        else
        {
            $mem_detail = $this->memmodel->mem_detail($id);
            if(empty($mem_detail))
            {
                redirect('admin/mem/list_mem');
            }
            else
            {
                $this->memmodel->delete_mem($id);
                redirect('admin/mem/list_mem');
            }
        }
    }
    function test_send_mail($email, $full_name) {
                $mail_body = "Chào bạn ! Yêu cầu gia nhập CLB HUTECH DEVELOPERS CLUB của bạn đã được chúng tôi chấp nhận. <br/> Bạn đã là thành viên của CLB HUTECH DEVELOPERS CLUB.<br/> Mọi hoạt động của CLB xin vui lòng theo dõi tại <a target ='__blank' href='http://hutechdev.net'>HUTECH DEV WEB</a><br/>Xin cảm ơn !";
                $this->load->library('mailer');
                $this->mailer->sendmail(
                $email, $full_name, 'Register Account Success', $mail_body
        );
    }
}
?>
