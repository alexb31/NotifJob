<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Admin extends CI_Controller {

    function __construct()
    {
        parent::__construct();

        /* Standard Libraries of codeigniter are required */
        $this->load->database();
        $this->load->helper('url');
        /* ------------------ */

        $this->load->library('grocery_CRUD');

    }

    public function index()
    {
        $this->load->view('back/template.php', null);
    }

    public function offres()
    {
        $this->grocery_crud->set_table('offres');
        $this->grocery_crud->set_field_upload('file_url','assets/uploads/files');

        $data = $this->grocery_crud->render();

        $this->template_back('back/offres.php', $data);
    }

    public function metiers()
    {
        //$this->grocery_crud->set_table('offres');
        //$this->grocery_crud->set_field_upload('file_url','assets/uploads/files');

        //$data = $this->grocery_crud->render();

        $this->template_back('back/metiers.php');
    }

    public function lieux()
    {
        //$this->grocery_crud->set_table('offres');
        //$this->grocery_crud->set_field_upload('file_url','assets/uploads/files');

        //$data = $this->grocery_crud->render();

        $this->template_back('back/lieux.php');
    }

    function template_back($view = '', $data = '')
    {
        $this->template->load('back/template.php', $view, $data);
    }
}