<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

class Cate extends MY_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('catemodel');
        $this->load->helper(array('form', 'url'));
        $this->load->library('form_validation');
        $this->load->library('tank_auth');
        $this->lang->load('tank_auth');
        if(!$this->tank_auth->is_logged_in())
        {
             redirect('/admin/login.xxx');
        }
    }

    public function listcate() {
        $list_cate = $this->catemodel->get_all_cate();
        $this->data['main_content'] = 'cate/list_cate';
        $this->data['list_cate'] = $list_cate;
        $this->load->view('admin/table_template', $this->data);
    }

    public function add() {

        if ($this->input->post()) {
            $data = array();
            
            $url =  mb_strtolower(url_title(removesign($this->input->post('cate')))); 
            $data = array('name'=>$this->input->post('cate'),'url'=>$url);
            $id = $this->catemodel->insert_cate($data);
            if($id>0)
            {
                redirect('/admin/cate/listcate');
            }
            else
            {
                redirect('/admin/cate/listcate');
            }
            
        } else {
            $this->data['main_content'] = 'cate/add_cate';
            $this->load->view('admin/layout_form', $this->data);
        }
    }
    public function edit($id = null)
    {
        if(empty($id))
        {
            redirect('/admin/cate/listcate');
        }
        else
        {
            $detail_cate = $this->catemodel->get_cate_id($id);
            if(empty($detail_cate))
            {
                redirect('/admin/cate/listcate');
            }
            else
            {
               $this->data['cate_detail']=$detail_cate;
            }
            $this->data['main_content'] = 'cate/edit_cate';
            $this->load->view('admin/layout_form', $this->data);
        }
    }
    public function save($id = null)
    {
        if($this->input->post())
        {
            $data = array();
            
            $url =  mb_strtolower(url_title(removesign($this->input->post('cate')))); 
            $data = array('name'=>$this->input->post('cate'),'url'=>$url);
            $this->catemodel->update_cate($data,$id);
            redirect($_SERVER['HTTP_REFERER']);
        }
        else
        {
            redirect('/admin/cate/listcate');
        }
    }
    public function delete($id)
    {
        if(empty($id))
        {
             redirect('/admin/cate/listcate');
        }
        else
        {
            $detail_cate = $this->catemodel->get_cate_id($id);
            if(empty($detail_cate))
            {
                redirect('/admin/cate/listcate');
            }
            else
            {
               $this->catemodel->delete_cate($id);
               redirect('/admin/cate/listcate');
            }
        }
    }

}

?>
