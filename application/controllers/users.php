<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/**
 * User Management class created by CodexWorld
 */
class Users extends CI_Controller {

    function __construct() {
        parent::__construct();
        $this->load->library('form_validation');
        $this->load->model('user');
        $this->output->enable_profiler(TRUE);
    }

    /*
     * User account information
     */
    public function account(){
        $data = array();
        if($this->session->userdata('isUserLoggedIn')){
            $data['user'] = $this->user->getRows(array('id'=>$this->session->userdata('userId')));
            //load the view
            $this->load->view('front/mon_profil', $data);
        }else{
            redirect('users/login');
        }
    }

    /*
     * User login
     */
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
                $checkLogin = $this->user->getRows($con);
                if($checkLogin){
                    $this->session->set_userdata('isUserLoggedIn',TRUE);
                    $this->session->set_userdata('userId',$checkLogin['id']);
                    redirect('users/account/');
                }else{
                    $data['error_msg'] = 'Wrong email or password, please try again.';
                }
            }
        }
        //load the view
        $this->load->view('front/login', $data);
    }

    /*
     * User registration
     */
    public function registration(){
        $data = array();
        $userData = array();
        if($this->input->post('regisSubmit')){
            $this->form_validation->set_rules('name', 'Name', 'required');
            $this->form_validation->set_rules('email', 'Email', 'required|valid_email|callback_email_check');
            $this->form_validation->set_rules('password', 'password', 'required');

            $userData = array(
                'fname' => strip_tags($this->input->post('fname')),
                'name' => strip_tags($this->input->post('name')),
                'email' => strip_tags($this->input->post('email')),
                'skills' => strip_tags($this->input->post('skills')),
                'experiences' => strip_tags($this->input->post('experiences')),
                'password' => md5($this->input->post('password')),
                'phone' => strip_tags($this->input->post('phone'))
            );

            if($this->form_validation->run() == true){
                var_dump('test');
                $insert = $this->user->insert($userData);
                var_dump('test2');
                if($insert){
                    var_dump('test3');
                    $this->session->set_userdata('success_msg', 'Your registration was successfully. Please login to your account.');
                    var_dump('test4');
                    $this->sendemail($_POST);
                    var_dump('test5');
                    redirect('users/login');
                }else{
                    $data['error_msg'] = 'Some problems occured, please try again.';
                }
            }
        }
        $data['user'] = $userData;
        //load the view
        $this->load->view('front/inscription', $data);
    }

    /*
     * User logout
     */
    public function logout(){
        $this->session->unset_userdata('isUserLoggedIn');
        $this->session->unset_userdata('userId');
        $this->session->sess_destroy();
        redirect('users/login/');
    }

    /*
     * Existing email check during validation
     */
    public function email_check($str){
        $con['returnType'] = 'count';
        $con['conditions'] = array('email'=>$str);
        $checkEmail = $this->user->getRows($con);
        if($checkEmail > 0){
            $this->form_validation->set_message('email_check', 'The given email already exists.');
            return FALSE;
        } else {
            return TRUE;
        }
    }

    private function sendemail($content)

    {

        //Load the email library

        $this->load->library('email');

        //Initialise the email helper and set the "from"
        $this->email->initialize(array("mailtype" => "html"));
        $this->email->from("simontonton@gmail.com", "Lesley Nowell HR Consultancy");

        //Set the recipient, subject and message based on the page




        //$this->email->to('enquiries@lesleynowell.com');
        $this->email->to('alexandrebornstein@gmail.com');
        $this->email->subject('Website Enquirie');
        $this->email->message("My firstname is: {$content["fname"]} <br /><br />My email address 
        is: {$content["email"]} <br /><br />
        My telephone number is:{$content["phone"]}<br /><br 
        />The enquiry is regarding: <br /><br />Enquiry:");



        //If the email is sent
        if($this->email->send())
        {
            return true;
        }
        else
        {
            return false;
        }
    }

}