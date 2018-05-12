<?php defined('BASEPATH') OR exit('No direct script access allowed');
class Select_model extends CI_Model{
    public function get_all_select(){
        $user_id = $this->session->userdata('user_id');
        $sql = 'SELECT * from select1 where sl_id not in (SELECT sl_id from associate where associate.user_id = '. $user_id .')';
        $query = $this->db->query($sql);
        return $query->result();
    }
    public function select_by_id($sl_id,$user_id){
        $arr = array(
            'sl_id' => $sl_id,
            'user_id' => $user_id,
        );
        $query = $this->db->insert('associate', $arr);
        return $query;
    }
    public function get_quit_select($user_id){
        $sql = 'select * from associate a,select1 s where a.user_id='.$user_id.' and a.sl_id=s.sl_id';
        $query = $this->db->query($sql);
        return $query->result();
    }
    public function quit_select_by_id($asso_id){
        $sql = 'delete from associate where asso_id='.$asso_id;
        $query = $this->db->query($sql);
        return $query;
    }
    public function get_seelct_by_id_week($user_id,$week){
        $sql = 'SELECT * from select1,associate where associate.user_id= '.$user_id.' and associate.sl_id = select1.sl_id 
and select1.sl_start <= '.$week.' and select1.sl_end >= '.$week.'';
        $query = $this->db->query($sql);
        return $query->result();
    }
    public function get_select_by_id_day($user_id,$week,$day){
        $sql = 'SELECT * from select1,associate where associate.user_id= '.$user_id.' and associate.sl_id = select1.sl_id 
and select1.sl_start <= '.$week.' and select1.sl_end >= '.$week.' and select1.sl_week = '.$day.'';
        $query = $this->db->query($sql);
        return $query->result();
    }
}
?>