<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {
	public function __construct()
	{
		parent::__construct();
		$this->load->model('Email_model');
	}

	public function index()
	{
		$this->load->view('login');
		$this->Email_model->get_email_list();
	}

}
