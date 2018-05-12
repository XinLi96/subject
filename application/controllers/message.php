<?php defined('BASEPATH') OR exit('No direct script access allowed');
class Message extends CI_Controller{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('message_model');
    }
    public function to_message(){
        $message = $this->message_model->get_message();
        $arr = array(
            'message'=>$message
        );
        $this->load->view('message.php',$arr);
    }
    public function add_message(){
        $name = $_GET['name'];
        $email = $_GET['email'];
        $con = $_GET['con'];
        $dateTime = $_GET['dateTime'];

        $res = $this->message_model->add_message($name,$email,$con,$dateTime);
        if($res){
            echo 'success';
        }else{
            return;
        }
    }
    public function view_mess(){
        $result = $this->message_model->get_message();
        $arr = array(
            'result' => $result,
        );
        $this->load->view('view_message.php',$arr);
    }
}
?>