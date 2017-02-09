<?php defined('BASEPATH') OR exit('No direct script access allowed');
class Relation_model extends CI_Model{
    public function add_relation($course_id,$user_id,$room_id,$week,$time,$teacher,$course_name,$room_name,$begin,$end,$grade){
        $data = array(
            'course_id' => $course_id,
            'user_id' => $user_id,
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
    public function get_course_by_id_week($user_id,$week){
        $sql = 'select * from relation r where r.user_id = '.$user_id.' and r.begin<='.$week.' and r.end>='.$week.'';
        $query = $this->db->query($sql);
        return $query->result();
    }
    public function get_course_by_id_day($user_id,$week,$day){
        $sql = 'select * from relation r where r.user_id ='.$user_id.' and r.begin<='.$week.' and r.end>='.$week.' and r.week='.$day.'';
        $query = $this->db->query($sql);
        return $query->result();
    }
    public function get_course_by_name_week($user_name,$week){
        $sql = 'select * from relation r where r.teacher = '."'$user_name'".' and r.begin<='.$week.' and r.end>='.$week.'';
        $query = $this->db->query($sql);
        return $query->result();
    }
    public function get_course_by_name_day($user_name,$week,$day){
        $sql = 'select * from relation r where r.teacher ='."'$user_name'".' and r.begin<='.$week.' and r.end>='.$week.' and r.week='.$day.'';
        $query = $this->db->query($sql);
        return $query->result();
    }
}
?>