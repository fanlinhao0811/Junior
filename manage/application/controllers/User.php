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
		 $this->load->model('Email_model');	
		 $this->load->helper(array('form', 'url')); }
	 public function index()	{
		if(isset($_SESSION['user'])){
		$this->load->view('index');
		}else{
		$this->load->view('login');
	  }	}
	 public function login()	{
		$this->load->view('login');	}
	 public function plan()	{
		if(isset($_SESSION['user'])){
				$result = $this->Email_model->get_plan();
		$this->load->view('plan',array('list'=>$result));
		}else{
			$this->load->view('login');
			}
		}
	 public function shouxin()	{
		if(isset($_SESSION['user'])){
			$this->load->library('pagination');
			$user = $this->session->userdata('user');
			$total = $this->Email_model->get_count_email();
			$config['base_url'] = base_url().'welcome/inbox';//当前控制器方法
			$config['total_rows'] = $total;//总数
			$config['per_page'] = 10;//每页显示条数
			$this->pagination->initialize($config);
			$links = $this->pagination->create_links();
			$result = $this->Email_model->get_email_list($this->uri->segment(3),$config['per_page'],$user);
			$this->load->view('shouxin',array('list'=>$result,'links'=>$links));
		}else{
			$this->load->view('login');
			}
			}
	 public function faxin(){
		if(isset($_SESSION['user'])){
			$user = $this->session->userdata('user');
			$result = $this->Email_model->get_email($user);
			$this->load->view('faxin',array('list'=>$result));
		}else{
			$this->load->view('login');
			}
		}
	 public function jiandu(){
		if(isset($_SESSION['user'])){
			$result1 = $this->Email_model->get_suggest();
			$this->load->view('jiandu',array('list1'=>$result1));
		}else{
			$this->load->view('login');
			}
		
	  }
	 public function info()	{
		if(isset($_SESSION['user'])){
			$user = $this->session->userdata('user');
			$result = $this->Email_model->get_info_list($user);
			$this->load->view('info',array('list'=>$result));	
		}else{
			$this->load->view('login');
			}
	
		}
	 public function check()	{
		if(isset($_SESSION['user'])){
			$result = $this->Email_model->get_check_list();
			$this->load->view('check',array('list'=>$result));	
		}else{
			$this->load->view('login');
			}
		
		}
	 public function job(){
		if(isset($_SESSION['user'])){
		$result = $this->Email_model->get_job_list();
		$this->load->view('job',array('list'=>$result));	
		}else{
			$this->load->view('login');
			}
		}
	 public function book()	{
		if(isset($_SESSION['user'])){
			$result = $this->Email_model->get_book_list();
			$this->load->view('book',array('list'=>$result));	
		}else{
			$this->load->view('login');
			}	
		}
	 public function data_a()	{
		if(isset($_SESSION['user'])){
			$no = $this->session->userdata('user')->no;
			$result = $this->Email_model->get_data_a($no);
			$this->load->view('data_a',array('list'=>$result));	
		}else{
			$this->load->view('login');
			}
		}
	 public function leader()	{
		if(isset($_SESSION['user'])){
			$result = $this->Email_model->get_apply_r();
			$result1 = $this->Email_model->get_apply_re();
			$result2 = $this->Email_model->get_apply_m();
	
			$this->load->view('leader',array('list'=>$result,'list1'=>$result1,'list2'=>$result2));
		}else{
			$this->load->view('login');
			}
			}
	 public function leader_r()	{
		if(isset($_SESSION['user'])){

		$result3 = $this->Email_model->get_apply_r1();
		$result4 = $this->Email_model->get_apply_re1();
		$result5 = $this->Email_model->get_apply_m1();

		$this->load->view('leader_r',array('list3'=>$result3,'list4'=>$result4,'list5'=>$result5));	
		}else{
			$this->load->view('login');
			}}
	 public function leader_a()	{
		if(isset($_SESSION['user'])){
			$result6 = $this->Email_model->get_apply_r2();
			$result7 = $this->Email_model->get_apply_re2();
			$result8 = $this->Email_model->get_apply_m2();
	
			$this->load->view('leader_a',array('list6'=>$result6,'list7'=>$result7,'list8'=>$result8));	
		}else{
			$this->load->view('login');
			}
		}
	 public function email()	{
		if(isset($_SESSION['user'])){
			$this->load->view('email');
		}else{
			$this->load->view('login');
			}
		}
	 public function apply_model()	{
		if(isset($_SESSION['user'])){	
			$this->load->view('apply_model');}else{
			$this->load->view('login');
			}
  	}
	 public function department_add()	{
		if(isset($_SESSION['user'])){
			$result = $this->Email_model->get_department();
			$this->load->view('department_add',array('list'=>$result));
		}else{
			$this->load->view('login');
			}
			}
	 public function department_reduce()	{
		if(isset($_SESSION['user'])){
			$result = $this->Email_model->get_department();
			$this->load->view('department_reduce',array('list'=>$result));
		}else{
			$this->load->view('login');
			}
			}
	 public function apply_meeting()	{
		if(isset($_SESSION['user'])){
			$user = $this->session->userdata('user');
			$result = $this->Email_model->get_apply_list($user);
			$this->load->view('apply_meeting',array('list'=>$result));
		}else{
			$this->load->view('login');
			}
			
		}
	 public function apply_resource()	{
		if(isset($_SESSION['user'])){
			$user = $this->session->userdata('user');
			$result = $this->Email_model->get_apply_list1($user);
			$this->load->view('apply_resource',array('list'=>$result));	
		}else{
			$this->load->view('login');
			}
		
			}
	 public function apply_room(){
		if(isset($_SESSION['user'])){
			$user = $this->session->userdata('user');
			$result = $this->Email_model->get_apply_list2($user);
			$this->load->view('apply_room',array('list'=>$result));
		}else{
			$this->load->view('login');
			}
		 }
	 public function adv(){
		 if(isset($_SESSION['user'])){
			$result = $this->Email_model->get_adv_list();
			$this->load->view('adv',array('list'=>$result));
		 }else{
			$this->load->view('login');
		 }
		}
	 public function suggest(){
		if(isset($_SESSION['user'])){
		$this->load->view('suggest');
  	}else{
		$this->load->view('login');
  	 }}
	 public function send_email() {
		if(isset($_SESSION['user'])){
			// $this->load->library('upload', $config);
			$no = $this->session->userdata('user')->no;
			$sub = substr(strrchr($_FILES["file"]["name"], '.'), 1); 
			$file_name = $no."_".rand(1,100000).'.'.$sub; 			
			$photo_all = './uploads/' . $file_name;
			copy($_FILES["file"]["tmp_name"], $photo_all);
			// var_dump($_FILES);
			// die();
			

			$email = $this->input->post('email');
			$title = $this->input->post('title');
			$content = $this->input->post('content');
			$user = $this->session->userdata('user');
			
			$rows = $this->Email_model->add($email,$title,$photo_all,$content,$user);
			if($rows > 0){
				echo '发送成功！';
				//redirect('user/login');
			}else{
				echo 'fail';
			}
		}else{
			$this->load->view('login');
			}
			 }
	 public function add_job() {
		if(isset($_SESSION['user'])){
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
			}
		}else{
			$this->load->view('login');
			}
			 }
	 public function add_data() {
		if(isset($_SESSION['user'])){
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
			} 
		}else{
			$this->load->view('login');
			}
	  }
	 public function add_plan() {
		if(isset($_SESSION['user'])){
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
			}
		}else{
			$this->load->view('login');
			}
		 }
	 public function add_adv() {
		if(isset($_SESSION['user'])){
			$short = $this->input->post('short');
		  $class = $this->input->post('class');
		  $content = $this->input->post('content');
		
		  $rows = $this->Email_model->add_adv($short,$class,$content);
	  	if($rows > 0){
		  	echo '添加成功！';
		  	redirect('user/adv');
		  }else{
		  	echo 'fail';
			 } 
		}else{
			$this->load->view('login');
			}
		  }
	 public function add_suggest() {
		if(isset($_SESSION['user'])){
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
				} 
		}else{
			$this->load->view('login');
			}
		}
	 public function apply_m() {
		if(isset($_SESSION['user'])){
			$no = $this->input->post('no');
			$job = $this->input->post('job');
			$name = $this->input->post('name');
			$content = $this->input->post('content');
			$user = $this->session->userdata('user');
		
			$rows = $this->Email_model->apply_m($job,$name,$content,$user);
			if($rows > 0){
				echo '提交申请成功！';
			}else{
				echo 'fail';
				} 
		}else{
			$this->load->view('login');
			}
			}
	 public function apply_r() {
		if(isset($_SESSION['user'])){
			$no = $this->input->post('no');
			$job = $this->input->post('job');
			$name = $this->input->post('name');
			$content = $this->input->post('content');
			$user = $this->session->userdata('user');
	 
			$rows = $this->Email_model->apply_r($job,$name,$content,$user);
			if($rows > 0){
				 echo '提交申请成功！';
			}else{
				 echo 'fail';
			 } 
		}else{
			$this->load->view('login');
			}
	   }
   public function apply_re() {
		if(isset($_SESSION['user'])){
			$no = $this->input->post('no');
			$job = $this->input->post('job');
			$name = $this->input->post('name');
			$content = $this->input->post('content');
			$user = $this->session->userdata('user');
		
			$rows = $this->Email_model->apply_re($job,$name,$content,$user);
			if($rows > 0){
					echo '提交申请成功！';
			}else{
					echo 'fail';
				} 
		}else{
			$this->load->view('login');
			}
			}
	 public function add_book() {
		if(isset($_SESSION['user'])){
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
			}
		}else{
			$this->load->view('login');
			}
		 }
	 public function add_department() {
		if(isset($_SESSION['user'])){
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
		}else{
			$this->load->view('login');
			}
 }	 

}
