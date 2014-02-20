<?php 
class thamdinhgia extends MY_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('thamdinhgiamodel');
    }
    public function index()
    {
        if($this->input->post())
        {
            $data_insert = array('ma_so_tai_san'=>$this->input->post('msts'),
            'dia_chi'=>$this->input->post('diachi'),
            'ho_ten'=>$this->input->post('hoten'),
            'sdt'=>$this->input->post('sdt'),
            'email'=>$this->input->post('email'));
            $id = $this->thamdinhgiamodel->insert($data_insert);
            if($id>0)
            {
                redirect('/');
            }
        }
        else
        {
            $this->data['main_content']='thamdinhgia_view';
            $this->load->view('tham_dinh/tham_dinh_gia',$this->data);
        }
    }
}
?>