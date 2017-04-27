<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Inscription extends CI_Controller {
	
	public function index()
	{
		$this->load->view('front/inscription');
	}
}
