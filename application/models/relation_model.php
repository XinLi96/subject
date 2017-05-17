<?php defined('BASEPATH') OR exit('No direct script access allowed');
class Relation_model extends CI_Model{
    public function add_relation($course_id,$room_id,$week,$time,$teacher,$course_name,$room_name,$begin,$end,$grade){
        $data = array(//安排教学时将课程id、学生id、教室id、上课时间、教师、年级等插入表中
            'course_id' => $course_id,
            'room_id' => $room_id,
            'week' => $week,
            'time' => $time,
            'teacher' => $teacher,
            'course_name' => $course_name,
            'room_name' => $room_name,
            'begin' => $begin,
            'end' => $end,
            'grade' => $grade
        );
        $result = $this->db->insert('relation', $data);
        return $result;
    }
    public function get_course_by_id_week($grade,$week){//学生通过用户、上课的周数以周的方式查看课程表
        $sql = 'select * from relation r where r.grade = '."'$grade'".' and r.begin<='.$week.' and r.end>='.$week.'';
        $query = $this->db->query($sql);
        return $query->result();
    }
    public function get_course_by_id_day($grade,$week,$day){//学生通过用户、上课的周数、上课是星期几以天的方式查看课程表
        $sql = 'select * from relation r where r.grade ='."'$grade'".' and r.begin<='.$week.' and r.end>='.$week.' and r.week='.$day.'';
        $query = $this->db->query($sql);
        return $query->result();
    }
    public function get_course_by_name_week($user_name,$week){//老师通过自己的名字、上课的周数以周的方式查看自己的课表
        $sql = 'select * from relation r where r.teacher = '."'$user_name'".' and r.begin<='.$week.' and r.end>='.$week.'';
        $query = $this->db->query($sql);
        return $query->result();
    }
    public function get_course_by_name_day($user_name,$week,$day){//老师通过自己的名字、上课的周数、上课是星期几以天的方式查看自己的课表
        $sql = 'select * from relation r where r.teacher ='."'$user_name'".' and r.begin<='.$week.' and r.end>='.$week.' and r.week='.$day.'';
        $query = $this->db->query($sql);
        return $query->result();
    }
    public function view_relation(){//管理员查看所有教学关系
        $sql = 'select * from relation r,user u where r.grade = u.start_school';
        $query = $this->db->query($sql);
        return $query->result();
    }
    public function del($relation_id){
        $sql = 'delete from relation where relation.relation_id = '.$relation_id.'';
        $query = $this->db->query($sql);
        return $query;
    }
    public function get_room_repeat($room_id){
        $sql = 'select * from relation r where r.room_id='.$room_id.'';
        $query = $this->db->query($sql);
        return $query->result();
    }
    public function get_stu_repeat($user_id){
        $sql = 'select * from relation r where r.user_id='.$user_id.'';
        $query = $this->db->query($sql);
        return $query->result();
    }
    public function get_tea_repeat($teacher){
        $sql = 'select * from relation r where r.teacher='."'$teacher'".'';
        $query = $this->db->query($sql);
        return $query->result();
    }
}
?>
















