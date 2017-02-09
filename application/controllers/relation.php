<?php defined('BASEPATH') OR exit('No direct script access allowed');
class Relation extends CI_Controller{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('relation_model');
    }
    public function add_relation(){
        $course_name = $this->input->post('course_name');
        $user_name = $this->input->post('user_name');
        $room_name = $this->input->post('room_name');
        $teacher = $this->input->post('teacher');
        $week = $this->input->post('week');
        $time = $this->input->post('time');

        $this->load->model('room_model');
        $result1 = $this->room_model->get_id_by_name($room_name);
        $room_id = $result1->room_id;

        $this->load->model('user_model');
        $result2 = $this->user_model->get_id_by_name($user_name);
        $user_id = $result2->user_id;

        $this->load->model('course_model');
        $result3 = $this->course_model->get_id_by_name($course_name);
        $course_id = $result3->course_id;
        $begin = $result3->begin;
        $end = $result3->end;

        $result = $this->relation_model->add_relation($course_id,$user_id,$room_id,$week,$time,$teacher,$course_name,$room_name,$begin,$end);
        if($result){
            $this->load->view('index.php');
        }else{
            echo '添加失败！！！';
        }
    }
    public function view_by_week(){
        $week = $this->input->post('week');
        $status = $this->session->userdata('status');
        if($status == 1){
            $user_id = $this->session->userdata('user_id');
            $result = $this->relation_model->get_course_by_id_week($user_id,$week);
            $arr['result'] = $result;
            $this->load->view('view_week',$arr);
        }else if($status == 2){
            $user_name = $this->session->userdata('user_name');
            $result1 = $this->relation_model->get_course_by_name_week($user_name,$week);
            $arr['result1'] = $result1;
            $this->load->view('view_week',$arr);
        }

    }
    public function view_by_day(){
        $status = $this->session->userdata('status');
        $week = $this->input->post('week');
        $day = $this->input->post('day');
        if($status == 1){
            $user_id = $this->session->userdata('user_id');
            $result = $this->relation_model->get_course_by_id_day($user_id,$week,$day);
        }else{
            $user_name  = $this->session->userdata('user_name');
            $result = $this->relation_model->get_course_by_name_day($user_name,$week,$day);
        }
        $arr['result']=$result;
        $arr['zhou']=$week;
        $arr['ji']=$day;
        $this->load->view('view_day',$arr);
    }
}
?>