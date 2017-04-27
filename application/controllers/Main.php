<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Main extends CI_Controller {

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
        $this->template_front('front/accueil.php');
    }

    function template_front($view = '', $data = '')
    {
        $this->template->load('front/template.php', $view, $data);
    }
}