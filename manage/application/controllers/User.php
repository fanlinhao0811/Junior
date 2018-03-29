<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Controller {

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
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	 public function __construct(){
		 parent::__construct();
		 $this->load->model('User_model');
		 $this->load->model('Email_model');	 }
	 public function index()	{
		$this->load->view('index');	}
	 public function login()	{
		$this->load->view('login');	}
	 public function info()	{
		$result = $this->Email_model->get_info_list();
		$this->load->view('info',array('list'=>$result));	}
	 public function job(){
		$result = $this->Email_model->get_job_list();
		$this->load->view('job',array('list'=>$result));	}
	 public function book()	{
		$result = $this->Email_model->get_book_list();
		$this->load->view('book',array('list'=>$result));	}
	 public function email()	{
		$this->load->view('email');}
	 public function department_add()	{
		$result = $this->Email_model->get_department();
		$this->load->view('department_add',array('list'=>$result));	}
	 public function department_reduce()	{
		$result = $this->Email_model->get_department();
		$this->load->view('department_reduce',array('list'=>$result));	}
	 public function apply_meeting()	{
		$this->load->view('apply_meeting');	}
	 public function apply_resource()	{
		$this->load->view('apply_resource');	}
	 public function apply_room(){
		$this->load->view('apply_room');}
	 public function adv(){
		$this->load->view('adv');}
	 public function suggest(){
		$this->load->view('suggest');}
	 public function send_email() {
			$email = $this->input->post('email');
			$title = $this->input->post('title');
			$plus = $this->input->post('plus');
			$content = $this->input->post('content');
			$user = $this->session->userdata('user');
			
			$rows = $this->Email_model->add($email,$title,$plus,$content,$user);
			if($rows > 0){
				echo '发送成功！';
				//redirect('user/login');
			}else{
				echo 'fail';
			} }
	 public function add_job() {
			$no = $this->input->post('no');
			$name = $this->input->post('name');
			$job = $this->input->post('job');
			$job_class = $this->input->post('job_class');
			
			$rows = $this->Email_model->add_job($no,$name,$job,$job_class);
			if($rows > 0){
				echo '添加成功！';
				//redirect('user/login');
			}else{
				echo 'fail';
			} }
	 public function add_department() {
			$no = $this->input->post('no');
			$name = $this->input->post('name');
			$leader = $this->input->post('leader');
			$plus = $this->input->post('plus');
			
			$rows = $this->Email_model->add_dep($no,$name,$leader,$plus);
			if($rows > 0){
				echo '添加成功！';
				//redirect('user/login');
			}else{
				echo 'fail';
			}
	
	 }	 

}
