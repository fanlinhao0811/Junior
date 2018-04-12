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
	 public function plan()	{
		$result = $this->Email_model->get_plan();
		$this->load->view('plan',array('list'=>$result));	}
	 public function shouxin()	{
		$this->load->library('pagination');
		$user = $this->session->userdata('user');
		$total = $this->Email_model->get_count_email();
		$config['base_url'] = base_url().'welcome/inbox';//当前控制器方法
		$config['total_rows'] = $total;//总数
		$config['per_page'] = 8;//每页显示条数
		$this->pagination->initialize($config);
		$links = $this->pagination->create_links();
		$result = $this->Email_model->get_email_list($this->uri->segment(3),$config['per_page'],$user);
		$this->load->view('shouxin',array('list'=>$result,'links'=>$links));	}
	 public function faxin(){
		$user = $this->session->userdata('user');
		$result = $this->Email_model->get_email($user);
		$this->load->view('faxin',array('list'=>$result));}
	 public function jiandu(){
		$result1 = $this->Email_model->get_suggest();
		$this->load->view('jiandu',array('list1'=>$result1));
	  }
	 public function info()	{
		$user = $this->session->userdata('user');
		$result = $this->Email_model->get_info_list($user);
		$this->load->view('info',array('list'=>$result));	
		}
	 public function job(){
		$result = $this->Email_model->get_job_list();
		$this->load->view('job',array('list'=>$result));	
		}
	 public function book()	{
		$result = $this->Email_model->get_book_list();
		$this->load->view('book',array('list'=>$result));	
		}
	 public function data_a()	{
		$no = $this->session->userdata('user')->no;
		$result = $this->Email_model->get_data_a($no);
		$this->load->view('data_a',array('list'=>$result));	}
	 public function leader()	{
		$result = $this->Email_model->get_apply_r();
		$result1 = $this->Email_model->get_apply_re();
		$result2 = $this->Email_model->get_apply_m();
		$result3 = $this->Email_model->get_apply_r1();
		$result4 = $this->Email_model->get_apply_re1();
		$result5 = $this->Email_model->get_apply_m1();
		$result6 = $this->Email_model->get_apply_r2();
		$result7 = $this->Email_model->get_apply_re2();
		$result8 = $this->Email_model->get_apply_m2();

		$this->load->view('leader',array('list'=>$result,'list1'=>$result1,'list2'=>$result2,'list3'=>$result3
		,'list4'=>$result4,'list5'=>$result5,'list6'=>$result6,'list7'=>$result7,'list8'=>$result8));	}
	 public function email()	{
		$this->load->view('email');}
	 public function apply_model()	{
		$this->load->view('apply_model');}
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
		$result = $this->Email_model->get_adv_list();
		$this->load->view('adv',array('list'=>$result));}
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
				redirect('user/job');
			}else{
				echo 'fail';
			} }
	 public function add_data() {
		$date = $this->input->post('date');
		$content1 = $this->input->post('content1');
		$content2 = $this->input->post('content2');
		$user = $this->session->userdata('user');
		
		$rows = $this->Email_model->add_data($date,$content1,$content2,$user);
		if($rows > 0){
			echo '添加成功！';
			redirect('user/data_a');
		}else{
			echo 'fail';
		} }
	public function add_plan() {
		$date = $this->input->post('date');
		$content1 = $this->input->post('content1');
		$content2 = $this->input->post('content2');
		$user = $this->session->userdata('user');
		
		$rows = $this->Email_model->add_plan($date,$content1,$content2,$user);
		if($rows > 0){
			echo '添加成功！';
			redirect('user/plan');
		}else{
			echo 'fail';
		} }
	 public function add_adv() {
		  $short = $this->input->post('short');
		  $class = $this->input->post('class');
		  $content = $this->input->post('content');
		
		  $rows = $this->Email_model->add_adv($short,$class,$content);
	  	if($rows > 0){
		  	echo '添加成功！';
		  	redirect('user/adv');
		  }else{
		  	echo 'fail';
			 } }
	 public function add_suggest() {
		$name = $this->input->post('name');
		$content = $this->input->post('content');
		$uname = $this->input->post('u_name');
		date_default_timezone_set("Asia/Shanghai");
		$time = date('Y-m-d H:i:s');
	
		$rows = $this->Email_model->add_suggest($name,$content,$uname,$time);
		if($rows > 0){
			echo '建议成功！';
		}else{
			echo 'fail';
			} }
	 public function apply_m() {
			$no = $this->input->post('no');
			$job = $this->input->post('job');
			$name = $this->input->post('name');
			$content = $this->input->post('content');
		
			$rows = $this->Email_model->apply_m($no,$job,$name,$content);
			if($rows > 0){
				echo '提交申请成功！';
			}else{
				echo 'fail';
				} }
	 public function apply_r() {
	   $no = $this->input->post('no');
		 $job = $this->input->post('job');
	   $name = $this->input->post('name');
		 $content = $this->input->post('content');
	
		 $rows = $this->Email_model->apply_r($no,$job,$name,$content);
		 if($rows > 0){
		  	echo '提交申请成功！';
		 }else{
		  	echo 'fail';
			} }
   public function apply_re() {
			$no = $this->input->post('no');
			$job = $this->input->post('job');
			$name = $this->input->post('name');
			$content = $this->input->post('content');
		
			$rows = $this->Email_model->apply_re($no,$job,$name,$content);
			if($rows > 0){
					echo '提交申请成功！';
			}else{
					echo 'fail';
				} }
	 public function add_book() {
		 $name = $this->input->post('name');
		 $pwd = $this->input->post('pwd');
		 $privilege = $this->input->post('privilege');
		 $tel = $this->input->post('tel');
		 $email = $this->input->post('email');
		 $job = $this->input->post('job');
		 $address = $this->input->post('address');
		
		 $rows = $this->Email_model->add_book($name,$pwd,$privilege,$tel,$email,$job,$address);
		 if($rows > 0){
		  	echo '添加成功！';
		  	redirect('user/book');
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
				redirect('user/department_add');
			}else{
				echo 'fail';
			}
	
	 }	 

}
