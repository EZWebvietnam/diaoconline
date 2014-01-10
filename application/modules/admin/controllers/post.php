<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */ 
class Post extends MY_Controller
{
    public function __construct() {
        parent::__construct();
        $this->load->helper(array('form', 'url'));
        $this->load->library('form_validation');
        $this->load->library('tank_auth');
        $this->lang->load('tank_auth');
        $this->load->model('postmodel');
        $this->load->helper('txt_helper');
        $this->load->library('myfunction');
        if(!$this->tank_auth->is_logged_in())
        {
             redirect('/admin/login.xxx');
        }
    }
    public function listpost()
    {
        $this->data['main_content']='post/list_post';
        $this->data['list_post']=$this->postmodel->get_all_post();
        $this->load->view('admin/table_template',$this->data);
    }
    public function add()
    {
       
        if($this->input->post())
        {
            $dir = $_SERVER['DOCUMENT_ROOT'].ROT_DIR.'file/uploads/post/';
            $file_new = $this->myfunction->getlastfile($dir);
            $data = array();
            $data = array('name'=>$this->input->post('name'),'content'=>stripslashes($this->input->post('editor1')),'id_cate'=>$this->input->post('cate'),'file'=>$file_new,'create_date'=>strtotime('now'));
            $id = $this->postmodel->insert_post($data);
            if($id>0)
            {
                redirect('/admin/post/listpost');
            }
            else
            {
                redirect('/admin/post/listpost');
            }
        }
        else
        {
            $this->load->model('catemodel');
            $data['list_cate']=$this->catemodel->get_all_cate();
            $data['main_content']='post/add_post';
            $this->load->view('admin/layout_form',$data);
        }
    }
    public function edit($id = null)
    {
        if(empty($id))
        {
            redirect('/admin/post/listpost');
        }
        else
        {
            $post_detail = $this->postmodel->get_post($id);
            if(empty($post_detail))
            {
                redirect('/admin/post/listpost');
            }
            else
            {
                $this->load->model('catemodel');
                $data['list_cate']=$this->catemodel->get_all_cate();
                $data['main_content']='post/edit_post';
                $data['post_detail'] =$post_detail;
                 $this->load->view('admin/layout_form',$data);
            }
        }
           
    }
    public function save($id = null)
    {
        
        if(empty($id))
        {
            
            redirect('/admin/post/listpost');
        }
        else
        {
            $post_detail = $this->postmodel->get_post($id);
            
            if(empty($post_detail))
            {
    
                redirect('/admin/post/listpost');
            }
            else
            {
                $url =  mb_strtolower(url_title(removesign($this->input->post('name')))); 
                $dir = $_SERVER['DOCUMENT_ROOT'].ROT_DIR.'file/uploads/post/';
                
                $file_new = $this->myfunction->getlastfile($dir);
               
               $file = $this->input->post('file');
               if($file == '')
               {
                   $data = array('name'=>$this->input->post('name'),'content'=>stripslashes($this->input->post('editor1')),'id_cate'=>$this->input->post('cate'));
                   $this->postmodel->update_post($id,$data);
                    redirect($_SERVER['HTTP_REFERER']);
               }
               else
               {
                   if(is_file($dir.$post_detail[0]['file']))
                    {
                        unlink($dir.$post_detail[0]['file']);
                    }
                   $data = array('name'=>$this->input->post('name'),'content'=>stripslashes($this->input->post('editor1')),'id_cate'=>$this->input->post('cate'),'file'=>$file_new);
                   $this->postmodel->update_post($id,$data);
                   $path = $_SERVER['DOCUMENT_ROOT'].ROT_DIR."file/uploads/post/".$post_detail[0]['file'];
                   if(file_exists($path))
                   {
                   unlink($path);
                   }
                    redirect($_SERVER['HTTP_REFERER']);
                   
               }
            }
        }
    }
    public function delete($id = null)
    {
        if(empty($id))
        {
            redirect('/admin/post/listpost');
        }
        else
        {
            $post_detail = $this->postmodel->get_post($id);
            if(empty($post_detail))
            {
                redirect('/admin/post/listpost');
            }
            else
            {
                $path = $_SERVER['DOCUMENT_ROOT'].ROT_DIR."file/uploads/post/".$post_detail[0]['file'];
                if(file_exists($path))
                {
                   unlink($path);
                }
                $this->postmodel->delete_post($id);
                redirect('/admin/post/listpost');
            }
        }
    }
}
?>
