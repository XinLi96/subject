<?php defined('BASEPATH') OR exit('No direct script access allowed');
class Message_model extends CI_Model{
    public function add_message($name,$email,$con,$dateTime){
        $arr = array(
            'mess_name' => $name,
            'mess_email' => $email,
            'mess_con' => $con,
            'mess_date' => $dateTime
        );
        $result = $this->db->insert("message",$arr);
        return $result;
    }
    public function get_message(){
        $sql = 'select * from message order by mess_date DESC';
        $query = $this->db->query($sql);
        return $query->result();
    }
}
?>