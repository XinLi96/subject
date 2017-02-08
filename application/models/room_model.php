<?php defined('BASEPATH') OR exit('No direct script access allowed');
class Room_model extends CI_Model{
    public function add_room($room_name){
        $arr = array(
            'room_name' => $room_name
        );
        $query = $this->db->insert('room', $arr);
        return $query;
    }
    public function get_room_by_name($room_name){
        $this->db->select('*');
        $this->db->from('room');
        $this->db->where('room.room_name="'.$room_name.'"');
        return $this->db->get()->row();
    }
    public function get_id_by_name($room_name){
        $this->db->select('*');
        $this->db->from('room r');
        $this->db->where('r.room_name="'.$room_name.'"');
        return $this->db->get()->row();
    }
}
?>