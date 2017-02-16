<?php defined('BASEPATH') OR exit('No direct script access allowed');
class Room extends CI_Controller{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('room_model');
    }
    public function add_room(){//管理员添加教室
        $room_name = $this->input->post('room_name');
        $result1 = $this->room_model->get_room_by_name($room_name);
        if($result1){
            echo '教室已存在！';
        }else{
            $result = $this->room_model->add_room($room_name);
            if($result){
                $this->load->view('index.php');
            }else{
                $this->load->view('add_room.php');
            }
        }
    }
    public function view_room(){//管理员查看所有教室
        $result = $this->room_model->view_room();
        $arr['result'] = $result;
        $this->load->view('view_room',$arr);
    }
}
?>
