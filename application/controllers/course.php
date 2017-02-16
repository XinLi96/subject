<?php defined('BASEPATH') OR exit('No direct script access allowed');
class Course extends CI_Controller{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('course_model');
    }
    public function add_course(){//添加课程
        $course_name = $this->input->post('course_name');
        $begin = $this->input->post('begin');
        $end = $this->input->post('end');
//        $room_name = $this->input->post('room_name');
//        $tea_name = $this->input->post('teacher');

//        $this->load->model('user_model');
//        $result2 = $this->user_model->add_course_to_user($tea_name);

//        $this->load->model('room_model');
//        $result = $this->room_model->get_id_by_name($room_name);
//        $room_id = $result->room_id;

        $result1 = $this->course_model->add_course($course_name,$begin,$end);
        if($result1){
            $this->load->view('index.php');
        }else{
            echo '添加失败！！！';
        }
    }
    public function view_course(){//管理员查看所有课程
        $result = $this->course_model->view_course();
        $arr['result'] = $result;
        $this->load->view('view_course',$arr);
    }
}
?>