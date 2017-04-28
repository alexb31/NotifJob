<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Admin extends CI_Controller {

    function __construct()
    {
        parent::__construct();

        /* Standard Libraries of codeigniter are required */
        $this->load->database();
        $this->load->helper('url');
        $this->load->library('form_validation');
        $this->load->model('users_admin');
        /* ------------------ */

        $this->load->library('grocery_CRUD');

    }

    public function login(){
        $data = array();
        if($this->session->userdata('success_msg')){
            $data['success_msg'] = $this->session->userdata('success_msg');
            $this->session->unset_userdata('success_msg');
        }
        if($this->session->userdata('error_msg')){
            $data['error_msg'] = $this->session->userdata('error_msg');
            $this->session->unset_userdata('error_msg');
        }
        if($this->input->post('loginSubmit')){
            $this->form_validation->set_rules('email', 'email', 'required|valid_email');
            $this->form_validation->set_rules('password', 'password', 'required');
            if ($this->form_validation->run() == true) {
                $con['returnType'] = 'single';
                $con['conditions'] = array(
                    'email'=>$this->input->post('email'),
                    'password' => md5($this->input->post('password')),
                    'status' => '1'
                );
                $checkLogin = $this->users_admin->getRows($con);
                if($checkLogin){
                    $this->session->set_userdata('isUserLoggedIn',TRUE);
                    $this->session->set_userdata('userId',$checkLogin['id']);
                    redirect('admin/offres/');
                }else{
                    $data['error_msg'] = 'Wrong email or password, please try again.';
                }
            }
        }
        //load the view
        $this->load->view('back/login', $data);
    }

    /*public function index()
    {
        if($this->session->userdata('isUserLoggedIn')){
            $data['users_admin'] = $this->users_admin->getRows(array('id'=>$this->session->userdata
            ('userId')));
            //load the view
            $this->load->view('back/offres', $data);
        }else{
            redirect('admin/login');
        }
        //$this->load->view('back/template.php', null);
    }*/

    public function offres()
    {
        $this->grocery_crud->set_table('offres');
        $this->grocery_crud->set_field_upload('file_url','assets/uploads/files');

        $data = $this->grocery_crud->render();

        if($this->session->userdata('isUserLoggedIn')){
            
            $this->template_back('back/offres.php', $data);
            //load the view
            $this->load->view('back/offres', $data);
        }else{
            redirect('admin/login');
        }
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