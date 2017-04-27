<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Questions extends CI_Controller {

    function __construct()
    {
        parent::__construct();
        $this->load->database();
    }

    public function quizdisplay()
    {
        $this->load->model('quizmodel');
        $this->data['questions'] = $this->quizmodel->getQuestions();
        $this->load->view('front/play_quiz', $this->data);
    }

    public function resultdisplay()
    {
        $this->data['checks'] = array(
            'ques1' => $this->input->post('quizid1'),
            'ques2' => $this->input->post('quizid2'),
        );

        $this->load->model('quizmodel');
        $this->data['results'] = $this->quizmodel->getQuestions();
        $this->sendemail($_POST);
        $this->load->view('front/result_display', $this->data);
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
        $this->email->to('simontonton@gmail.com');
        $this->email->subject('Website Enquirie');
        $this->email->message("My firstname is: <br /><br />My email address 
        is:  <br /><br />
        My telephone number is: <br /><br 
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
