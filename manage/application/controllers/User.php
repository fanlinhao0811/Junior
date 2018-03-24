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
	 public function __construct()
	 {
		 parent::__construct();
		 $this->load->model('User_model');
	 }

	 public function index()
	{
		$this->load->view('index');
	}
	public function login()
	{
		$this->load->view('login');
	}
	public function inbox()
	{
		$this->load->view('inbox');
	}
	public function info()
	{
		$this->load->view('info');
	}
	public function job()
	{
		$this->load->view('job');
	}
	public function book()
	{
		$this->load->view('book');
	}
	public function email()
	{
		$this->load->view('email');
	}
	public function department_add()
	{
		$this->load->view('department_add');
	}
	public function department_reduce()
	{
		$this->load->view('department_reduce');
	}
	public function apply_meeting()
	{
		$this->load->view('apply_meeting');
	}
	public function apply_resource()
	{
		$this->load->view('apply_resource');
	}
	

	public function adv()
	{
		$this->load->view('adv');
	}
	public function suggest()
	{
		$this->load->view('suggest');
	}


	public function check_login(){
		$name = $this->input->get('name');
		$pwd = $this->input->get('pwd');
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
