<?php defined('BASEPATH') OR exit('No direct script access allowed');
class User extends CI_Controller{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('user_model');
        $this->load->model('select_model');
    }
    public function index(){
        $this->load->view('index.php');
    }
    public function do_log(){//进行用户登录
        $user_num = $this->input->post('user_num');
        $user_pass = $this->input->post('user_pass');
        $result = $this->user_model->get_name_by_pass($user_num,$user_pass);
        if($result){
            $arr = array(
                'user_name' => $result->user_name,
                'status' => $result->status,
                'user_id' => $result->user_id,
                'grade' => $result->start_school
            );
            $this->session->set_userdata($arr);//将用户信息存在session中

            $this->load->model('relation_model');
            $zs = date('m');//以电脑日期中的月份取出模拟为当前周数

            $status = $this->session->userdata('status');
            $user_id = $this->session->userdata('user_id');
            if($status == 1){
                $grade = $this->session->userdata('grade');
                $result = $this->relation_model->get_course_by_id_week($grade,$zs);
                $sleResult = $this->select_model->get_seelct_by_id_week($user_id,$zs);

                $arr['sleResult'] = $sleResult;
                $arr['result'] = $result;
                $arr['zs'] = $zs;
                $this->load->view('view_week',$arr);
            }else if($status == 2){
                $user_name = $this->session->userdata('user_name');
                $result1 = $this->relation_model->get_course_by_name_week($user_name,$zs);
                $arr['result1'] = $result1;
                $arr['zs'] = $zs;
                $this->load->view('view_week',$arr);
            }else{
                $this->load->view('index.php');
            }
        }else{
            $this->load->view('login.php');
        }
    }
    public function log_out(){//用户退出登录操作
        $arr = array(
            'user_name' => null,
            'status' => 100//将session状态改变、实现用户退出
        );
        $this->session->set_userdata($arr);
        $this->load->view('index.php');
    }
    public function personal(){//查看个人信息
        $user_id = $this->session->userdata('user_id');
        $result = $this->user_model->get_all_by_id($user_id);
        $arr['result'] = $result;
        $this->load->view('personal.php',$arr);
    }
    public function change(){//进入修改密码界面
        $user_id = $this->session->userdata('user_id');
        $result = $this->user_model->get_all_by_id($user_id);
        $arr['result'] = $result;
        $this->load->view('change.php',$arr);
    }
    public function change_pass(){//修改密码操作
        $pass1 = $this->input->post('pass1');
        $pass2 = $this->input->post('pass2');

        if($pass1 == $pass2 && $pass1 && $pass2){//看两次输入密码是否一致
            $result = $this->user_model->update_pass($pass1);
            if($result){
                $this->load->view('index.php');
            }else{
                echo '修改失败';
                echo '<a href="index">点击返回首页</a>';
            }
        }else{
            echo '两次输入不一致或为空';
            echo '<a href="index">点击返回首页</a>';
        }

    }
    public function add_user(){//管理员添加用户
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
//    public function add_room(){
//        $this->load->model('room_model');
//        $room_name = $this->input->post('room_name');
//        var_dump($room_name);
//        die();
//        $result = $this->room_model->add_room($room_name);
//        if($result){
//            $this->load->view('index.php');
//        }else{
//            $this->load->view('add_room.php');
//        }
//    }
    public function view_user(){//管理员查看所有用户的信息
        $result = $this->user_model->view_user();
        $arr['result'] = $result;
        $this->load->view('view_user',$arr);
    }
    public function del(){
        $user_id = $_GET['user_id'];
        $result = $this->user_model->del($user_id);
        if($result){
            redirect('user/view_user');
        }
    }
}
?>
