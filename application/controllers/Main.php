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
        $query = $this->db->get('offres', 3);

        foreach ($query->result_array() as $row){
            $data['offres'][] = $row;
        }
        //var_dump($data['offres']);die;

        $this->template_front('front/accueil.php', $data);
    }

    function template_front($view = '', $data = '')
    {
        $this->template->load('front/template.php', $view, $data);
    }
}