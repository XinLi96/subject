<?php defined('BASEPATH') OR exit('No direct script access allowed');
class Room_model extends CI_Model{
    public function add_room($room_name){//管理员添加课程
        $arr = array(
            'room_name' => $room_name
        );
        $query = $this->db->insert('room', $arr);
        return $query;
    }
    public function get_room_by_name($room_name){//通过教室的名字获取教室信息
        $this->db->select('*');
        $this->db->from('room');
        $this->db->where('room.room_name="'.$room_name.'"');
        return $this->db->get()->row();
    }
    public function get_id_by_name($room_name){//通过教室的名字获取教室的id
        $this->db->select('*');
        $this->db->from('room r');
        $this->db->where('r.room_name="'.$room_name.'"');
        return $this->db->get()->row();
    }
    public function view_room(){//管理员查看所有教室的信息
        $sql = 'select * from room';
        $query = $this->db->query($sql);
        return $query->result();
    }
}
?>