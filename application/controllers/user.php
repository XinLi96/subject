<?php defined('BASEPATH') OR exit('No direct script access allowed');
class User extends CI_Controller{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('user_model');
    }
    public function do_log(){
        $user_num = $this->input->post('user_num');
        $user_pass = $this->input->post('user_pass');
        $result = $this->user_model->get_name_by_pass($user_num,$user_pass);
        if($result){
            $arr = array(
                'user_name' => $result->user_name,
                'status' => $result->status,
                'user_id' => $result->user_id
            );
            $this->session->set_userdata($arr);
            $this->load->view('index.php');
        }else{
            $this->load->view('login.php');
        }
    }
    public function log_out(){
        $arr = array(
            'user_name' => null,
            'status' => 100//将session状态改变、实现用户退出
        );
        $this->session->set_userdata($arr);
        $this->load->view('index.php');
    }
    public function personal(){
        $user_id = $this->session->userdata('user_id');
        $result = $this->user_model->get_all_by_id($user_id);
        $arr['result'] = $result;
        $this->load->view('personal.php',$arr);
    }
    public function change(){
        $this->load->view('change.php');
    }
    public function add_user(){
        $name = $this->input->post('name');
        $status = $this->input->post('status');
        $num = $this->input->post('num');
        $nianji = $this->input->post('nianji');
        $pass = $this->input->post('pass');
        $result = $this->user_model->add_user($name,$status,$num,$nianji,$pass);
        if($result){
            $this->load->view('index.php');
        }else{
            $this->load->view('add_user.php');
        }
    }
    public function add_room(){
        $this->load->model('room_model');
        $room_name = $this->input->post('room_name');
        var_dump($room_name);
        die();
        $result = $this->room_model->add_room($room_name);
        if($result){
            $this->load->view('index.php');
        }else{
            $this->load->view('add_room.php');
        }
    }
    public function view_user(){
        $result = $this->user_model->view_user();
        $arr['result'] = $result;
        $this->load->view('view_user',$arr);
    }
}
?>
