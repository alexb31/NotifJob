<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class MesOffres extends CI_Controller {

	public function index()
	{
		$this->load->view('front/mes_offres');
	}
}
