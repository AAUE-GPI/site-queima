<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Precos extends CI_Controller
{
	public function index()
	{
		$this->load->view('template/header');
		$this->load->view('precos');
		$this->load->view('template/footer');
	}
}
