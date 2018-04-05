<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {
	public function __construct()	{
		parent::__construct();
		$this->load->model('Email_model');
		$this->load->model('User_model');	}
	public function captcha(){
		$this->load->helper('captcha');
		$rand = rand(1000,9999);
		$this->session->set_userdata(array(
			"captcha" => $rand
		));
			$vals = array(
				'word'      => $rand,
				'img_path'  => './captcha/',
				'img_url'   => base_url().'captcha/',
				'font_path' => './path/to/fonts/texb.ttf',
				'img_width' => '100',
				'img_height'    => 42,
				'expiration'    => 7200,
				'word_length'   => 10,
				'font_size' => 20,
			
				'colors'    => array(
					'background' => array(255, 255, 255),
					'border' => array(255, 255, 255),
					'text' => array(0, 0, 0),
					'grid' => array(255, 40, 40)
				)
			);
	
			$cap = create_captcha($vals);
			$img = $cap['image'];
			return $img;}
  public function change_code(){
			$img = $this->captcha();
			echo $img;
		}
	public function index()
		{
			$img = $this->captcha();
			//$this->Email_model->get_email_list();
			$this->load->view('login',array('img'=>$img));	
		}	
	public function inbox()
		{					
    	
    		$this->load->view('inbox');
				}
	public function check_in(){
			$user = $this->session->userdata('user');
			date_default_timezone_set("Asia/Shanghai");
			$time1=date('Y-m-d 9:0:0');
			$time2=date('Y-m-d H:i:s');
			$state= strtotime($time1)-strtotime($time2) > 0 ? 正常:迟到   ;
 	  	$rows = $this ->Email_model ->check_in(array(
			'time_in'=>date('Y-m-d H:i:s'),
			'UID'=>$user->no,
			'state'=>$state
			));
		
			if($rows>0){
				redirect('user/info');
			}		}


	public function del_book(){
			$no = $this->input->get('no');
			$rows = $this ->Email_model ->del_book($no);
			if($rows>0){
				echo 'success';
			}else{
				echo 'fail';
			}
		}
	public function del_job(){
			$no = $this->input->get('no');
			$rows = $this ->Email_model ->del_job($no);
			if($rows>0){
				echo 'success';
			}
		}
	public function del_dep(){
			$no = $this->input->get('no');
			$rows = $this ->Email_model ->del_dep($no);
			if($rows>0){
				echo 'success';
			}
		}
		public function del_adv(){
			$no = $this->input->get('no');
			$rows = $this ->Email_model ->del_adv($no);
			if($rows>0){
				echo 'success';
			}
		}
		
  public function check_login(){
			$name = $this->input->get('name');
			$pwd = $this->input->get('pwd');
			$code = $this->input->get('code');
			$captcha = $this->session->userdata('captcha');
			if($code != $captcha){
				echo 'code-error';
				die(); 
			}

			$result = $this->User_model->get_user_by_name($name);
			if(count($result) == 0){
				echo 'name not exist';
			}else{
				if($result[0]->password == $pwd){
					$this->session->set_userdata(array(
						'user'=>$result[0]
					));
					echo 'success';
				}else{
					echo 'password error';
				}
			}
		}
}
