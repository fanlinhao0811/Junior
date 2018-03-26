<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {
	public function __construct()
	{
		parent::__construct();
		$this->load->model('Email_model');
		$this->load->model('User_model');
	}
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
				'img_id'    => 'Imageid',
		
	
				// White background and border, black text and red grid
				'colors'    => array(
					'background' => array(255, 255, 255),
					'border' => array(255, 255, 255),
					'text' => array(0, 0, 0),
					'grid' => array(255, 40, 40)
				)
			);
	
			$cap = create_captcha($vals);
			$img = $cap['image'];
			return $img;
}

	public function index()
	{
				$img = $this->captcha();
		$this->load->view('login',array('img'=>$img));
		$this->Email_model->get_email_list();
	}

}
