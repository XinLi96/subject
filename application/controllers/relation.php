<?php defined('BASEPATH') OR exit('No direct script access allowed');
class Relation extends CI_Controller{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('relation_model');
    }
    public function add_relation(){//管理员安排课程、教室、老师、学生、上课时间、年级
        $course_name = $this->input->post('course_name');
//        $user_name = $this->input->post('user_name');
        $room_name = $this->input->post('room_name');
        $teacher = $this->input->post('teacher');
        $week = $this->input->post('week');
        $time = $this->input->post('time');
        $grade = $this->input->post('grade');

//        var_dump($course_name,$week,$room_name,$time);
//        die();

        $this->load->model('room_model');
        $result1 = $this->room_model->get_id_by_name($room_name);
        $room_id = $result1->room_id;

//        $this->load->model('user_model');
//        $result2 = $this->user_model->get_id_by_name($user_name);
//        $user_id = $result2->user_id;

        $this->load->model('course_model');
        $result3 = $this->course_model->get_id_by_name($course_name);
        $course_id = $result3->course_id;
        $begin = $result3->begin;
        $end = $result3->end;

//        echo $begin.'qq'.$end;
        $result4 = $this->relation_model->get_room_repeat($room_id);//判断教室是否冲突
        foreach($result4 as $row4){
            if(($row4->week==$week)&&($row4->time==$time)&&
                ($row4->begin<$end || $row4->begin==$end)&&
                ($row4->end>$begin || $row4->end==$begin)){//先判断是否是同一节课，在判断周数是否有冲突
                echo '教室发生冲突！';
                echo '<a href="relation/view_relation">查看教学安排</a>';
            }
        }
//        $result5 = $this->relation_model->get_stu_repeat($user_id);//判断学生时间是否冲突
//        foreach($result5 as $row5){
//            if(($row5->week==$week)&&($row5->time==$time)&&
//                ($row5->begin < $end || $row5->begin==$end)&&
//                ($row5->end > $begin || $row5->end==$begin)){
//                echo '学生时间冲突！';
//                echo '<a href="view_relation">查看教学安排</a>';
//            }
//        }
        $result6 = $this->relation_model->get_tea_repeat($teacher);//判断教师时间是否冲突
        foreach($result6 as $row6){
            if(($row6->week==$week)&&($row6->time==$time)&&
                ($row6->begin < $end || $row6->begin==$end)&&
                ($row6->end > $begin || $row6->end==$begin)){
                echo '教师时间冲突！';
                echo '<a href="view_relation">查看教学安排</a>';
            }
        }

        $result = $this->relation_model->add_relation($course_id,$room_id,$week,$time,$teacher,$course_name,$room_name,$begin,$end,$grade);
        if($result){
            $this->load->view('index.php');
        }else{
            echo '添加失败！！！';
        }
    }
    public function view_by_week(){//学生或老师以周的方式查看自己的课程表
        $week = $this->input->post('week');
        $status = $this->session->userdata('status');
        if($status == 1){
            $user_id = $this->session->userdata('user_id');
            $grade = $this->session->userdata('grade');
            $result = $this->relation_model->get_course_by_id_week($grade,$week);
            $arr['result'] = $result;
            $arr['zs'] = $week;
            $this->load->view('view_week',$arr);
        }else if($status == 2){
            $user_name = $this->session->userdata('user_name');
            $result1 = $this->relation_model->get_course_by_name_week($user_name,$week);
            $arr['result1'] = $result1;
            $arr['zs'] = $week;
            $this->load->view('view_week',$arr);
        }
    }

    public function view_by_day(){//学生或老师以天的方式查看自己的课程表
        $status = $this->session->userdata('status');
        $week = $this->input->post('week');
        $day = $this->input->post('day');
        if($status == 1){
            $user_id = $this->session->userdata('user_id');
            $grade = $this->session->userdata('grade');
            $result = $this->relation_model->get_course_by_id_day($grade,$week,$day);
        }else{
            $user_name  = $this->session->userdata('user_name');
            $result = $this->relation_model->get_course_by_name_day($user_name,$week,$day);
        }
        $arr['result']=$result;
        $arr['zhou']=$week;
        $arr['ji']=$day;
        $this->load->view('view_day',$arr);
    }
    public function view_relation(){//管理员查看所有的上课时间人员安排
        $result = $this->relation_model->view_relation();
        $arr['result'] = $result;
        $this->load->view('view_relation',$arr);
    }
    public function del(){//管理员删除
        $relation_id = $_GET['relation_id'];
        $result = $this->relation_model->del($relation_id);
        if($result){
            redirect('relation/view_relation');
        }
    }
}
?>