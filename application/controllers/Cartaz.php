<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Cartaz extends CI_Controller
{
	public function index()
	{
		$this->load->view('template/header');
		$this->load->view('cartaz');
		$this->load->view('template/footer');
	}
}
