<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Offre extends CI_Controller {
	
	public function index()
	{
		$this->load->view('front/offre');
	}
}
