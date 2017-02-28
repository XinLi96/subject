<?php defined('BASEPATH') OR exit('No direct script access allowed');
class Course_model extends CI_Model{
    public function add_course($course_name,$begin,$end){//添加课程
        $data = array(
            'course_name' => $course_name,
            'begin' => $begin,
            'end' => $end,
        );
        $result = $this->db->insert('course', $data);
        return $result;
    }
    public function get_id_by_name($course_name){//通过课程名字获取id
        $this->db->select('*');
        $this->db->from('course c');
        $this->db->where('c.course_name="'.$course_name.'"');
        return $this->db->get()->row();
    }
    public function view_course(){//查询课程表上的所有课程
        $sql = 'select * from course';
        $query = $this->db->query($sql);
        return $query->result();
    }
    public function del($course_id){
        $sql = 'delete from course where course.course_id = '.$course_id.'';
        $query = $this->db->query($sql);
        return $query;
    }
}
?>