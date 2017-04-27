<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Users extends CI_Controller
{

    function __construct()
    {
        parent::__construct();
        $this->load->helper(array('form'));
        $this->load->library(array('form_validation', 'email'));
        $this->load->model('user_model');
        $this->output->enable_profiler(TRUE);
    }

    public function registration()
    {
        $this->load->helper('form');
        $this->load->library('form_builder');

        // Init
        $data = array();

            $this->load->library('form_validation');

            // Validation rules
            $this->form_validation->set_rules('prenom', 'prenom', 'required');
            $this->form_validation->set_rules('nom', 'nom', 'required');
            $this->form_validation->set_rules('email', 'email', 'required|valid_email');
            $this->form_validation->set_rules('mdp', 'Mot de Passe', 'required');
            $this->form_validation->set_rules('competences', 'competences', '');
            $this->form_validation->set_rules('experiences', 'experiences', '');
            $this->form_validation->set_rules('submit', '', '');


            // Si le formulaire n'est pas valide on le ré-affiche
            if ($this->form_validation->run() == FALSE)
            {
                $this->load->view('front/user_registration', array('error' => ' ' ));
            }

            // Si il est valide on l'envoi en bdd
            else
            {
                //Transfering data to Model
                $this->load->model('user_model');
                $this->user_model->insertUser();
                $this->load->view('front/formsuccess', $data);
            }
    }
}
