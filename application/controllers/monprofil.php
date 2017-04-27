<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class MonProfil extends CI_Controller {
	
	public function index()
	{
		$this->load->view('front/mon_profil');
	}
}
