<?php defined('BASEPATH') OR exit('No direct script access allowed');
class User_model extends CI_Model{
    public function get_name_by_pass($user_num,$user_pass){//通过账号密码获取登录用户的信息
        $data=array(
            'num'=>$user_num,
            'pass'=>$user_pass,
        );
        $query=$this->db->get_where('user',$data);
        return $query->row();
    }
    public function add_user($name,$status,$num,$nianji,$pass){//管理员添加用户
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
    public function get_all_by_id($user_id){//通过用户id获取用户信息
        $arr = array(
            'user_id' => $user_id
        );
        $query = $this->db->get_where('user',$arr);
        return $query->row();
    }
//    public function add_course_to_user($tea_name){
//        $array = array(
//            'course_id' => $tea_name
//        );
//
//        $this->db->set($array);
//        $this->db->insert('user');
//    }
    public function get_id_by_name($user_name){//通过用户姓名获取用户信息
        $this->db->select('*');
        $this->db->from('user u');
        $this->db->where('u.user_name="'.$user_name.'"');
        return $this->db->get()->row();
    }
    public function update_pass($pass){
        $user_id = $this->session->userdata('user_id');
        $sql = 'update user set pass = '.$pass.' where user.user_id = '.$user_id.'';
        $query = $this->db->query($sql);
        return $query;
    }
    public function view_user(){//管理员查看所有用户信息
        $sql = 'select * from user';
        $query = $this->db->query($sql);
        return $query->result();
    }
}
?>