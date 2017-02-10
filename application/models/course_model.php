<?php defined('BASEPATH') OR exit('No direct script access allowed');
class Course_model extends CI_Model{
    public function add_course($course_name,$begin,$end){
        $data = array(
            'course_name' => $course_name,
            'begin' => $begin,
            'end' => $end,
        );
        $result = $this->db->insert('course', $data);
        return $result;
    }
    public function get_id_by_name($course_name){
        $this->db->select('*');
        $this->db->from('course c');
        $this->db->where('c.course_name="'.$course_name.'"');
        return $this->db->get()->row();
    }
    public function view_course(){
        $sql = 'select * from course';
        $query = $this->db->query($sql);
        return $query->result();
    }
}
?>