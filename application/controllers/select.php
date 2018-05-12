<?php defined('BASEPATH') OR exit('No direct script access allowed');
class Select extends CI_Controller{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('select_model');
    }
    public function get_all_select(){
        $result = $this->select_model->get_all_select();
        $arr = array(
            'res' => $result,
        );
        if($result){
            $this->load->view('select_center.php',$arr);
        }
    }
    public function select_by_id(){
        $sl_id = $this->input->get('sl_id');
        $user_id = $this->session->userdata('user_id');

        $result = $this->select_model->select_by_id($sl_id,$user_id);
        if($result){
            $this->load->view('index.php');
        }else{
            echo '选课失败，请重新操作。';
        }
    }
    public function quit_select(){
        $user_id = $this->session->userdata('user_id');

        if(!$user_id){
            $this->load->view('login.php');
        }else{
            $result = $this->select_model->get_quit_select($user_id);
            $arr = array(
                'res' => $result,
            );
            $this->load->view('quit_select.php',$arr);
        }

    }
    public function quit_by_id(){
        $asso_id = $this->input->get('asso_id');

        $result = $this->select_model->quit_select_by_id($asso_id);
        if($result){
            redirect('select/quit_select');
        }else{
            echo '操作失败，请稍后重试。';
        }
    }
}
?>