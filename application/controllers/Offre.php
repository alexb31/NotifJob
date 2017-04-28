<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Offre extends CI_Controller {
	
	public function index()
	{
		$id = $this->input->get('id');
		$id = intval($id);

		$query = $this->db->get_where('offres', array('id' => $id));

		foreach ($query->result_array() as $row){
  			$data['offre'][] = $row;
		}

		//var_dump($data['offre']);die;
		$this->load->view('front/offre', $data);
	}
}
