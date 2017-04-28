<?php

class Quizmodel extends CI_Model {

    public function getQuestions()
    {
        $this->db->select("id, question, choice1, choice2, choice3, answer");
        $this->db->from("quiz");

        $query = $this->db->get();

        return $query->result();

        $num_data_returned = $query->num_rows;

        if ($num_data_returned < 1) {
            echo "Pas de données dans la BDD";
            exit();
        }
    }
}