<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class About extends CI_Controller {
	

	public function index()
	{
		$this->load->view('templates/header');
		$this->load->view('templates/navbar');
		$this->load->view('about');
		$this->load->view('templates/footer');
		$this->load->view('templates/script');
	}
}
