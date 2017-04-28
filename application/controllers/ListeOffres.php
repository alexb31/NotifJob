<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class ListeOffres extends CI_Controller {
	
	public function index()
	{
		$this->load->view('back/liste_offres');
	}
}
