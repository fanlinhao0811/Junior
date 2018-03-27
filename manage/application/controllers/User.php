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
		 $this->load->model('Email_model');
	 }

	 public function index()
	{
		$this->load->view('index');
	}
	public function login()
	{
		

		$this->load->view('login');
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
		$result = $this->Email_model->get_book_list();
		$this->load->view('book',array('list'=>$result));
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
	public function apply_room()
	{
		$this->load->view('apply_room');
	}
	

	public function adv()
	{
		$this->load->view('adv');
	}
	public function suggest()
	{
		$this->load->view('suggest');
	}





}
