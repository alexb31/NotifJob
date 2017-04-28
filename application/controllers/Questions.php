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
            'ques3' => $this->input->post('quizid3'),
            'ques4' => $this->input->post('quizid4'),
            'ques5' => $this->input->post('quizid5'),
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
        $this->email->from("alexandrebornstein@gmail.com", "gfi recrutement");

        //Set the recipient, subject and message based on the page
        $this->email->to('alexandrebornstein@gmail.com');
        $this->email->subject('Reponse Test Technique');
        $this->email->message("Bonjour !<br /><br />Un utilisateur à répondu à un test technique
        .<br /><br />
        Voici ses réponses :<br /><br 
        />Question 1 : {$content["quizid1"]} <br /><br />Question 2 : {$content["quizid2"]} <br 
        /><br />Question 3 : {$content["quizid3"]} <br /><br />Question 4 : {$content["quizid4"]}
         <br /><br />Question 5 : {$content["quizid5"]} <br /><br />");



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
