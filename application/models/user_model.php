<?php defined('BASEPATH') OR exit('No direct script access allowed');
class User_model extends CI_Model{
    public function get_name_by_pass($user_num,$user_pass){
        $data=array(
            'num'=>$user_num,
            'pass'=>$user_pass,
        );
        $query=$this->db->get_where('user',$data);
        return $query->row();
    }
    public function add_user($name,$status,$num,$nianji,$pass){
        $arr = array(
            'user_name' => $name,
            'num' => $num,
            'pass' => $pass,
            'start_school' => $nianji,
            'status' => $status
        );
        $query = $this->db->insert('user', $arr);
        return $query;
    }
    public function get_all_by_id($user_id){
        $arr = array(
            'user_id' => $user_id
        );
        $query = $this->db->get_where('user',$arr);
        return $query->row();
    }
    public function add_course_to_user($tea_name){//将课程的id加到教师信息的课程号中
        $array = array(
            'course_id' => $tea_name
        );

        $this->db->set($array);
        $this->db->insert('user');
    }
    public function get_id_by_name($user_name){
        $this->db->select('*');
        $this->db->from('user u');
        $this->db->where('u.user_name="'.$user_name.'"');
        return $this->db->get()->row();
    }
}
?>