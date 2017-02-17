<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /12.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	public function index()
	{
		$this->load->view('index');
	}
    public function view_by_week()//从header进入不同功能模块
    {
        $status = $this->session->userdata('status');
        if($status==1 || $status==2){//判断当前是否有学生或老师登录，若没有登录转到登录界面
            $this->load->view('input_week');
        }else{
            $this->load->view('login');
        }
    }
    public function view_by_day()
    {
        $status = $this->session->userdata('status');
        if($status==1 || $status==2){//判断当前是否有学生或老师登录
            $this->load->view('input_day');
        }else{
            $this->load->view('login');
        }
    }
    public function contact()
    {
        $this->load->view('contact');
    }
    public function login()
    {
        $this->load->view('login');
    }
    public function add_course(){
        $this->load->view('add_course');
    }
    public function add_user(){
        $this->load->view('add_user');
    }
    public function add_room(){
        $this->load->view('add_room');
    }
    public function arrangement()//安排教学
    {
        $this->load->view('arrangement');
    }
}
