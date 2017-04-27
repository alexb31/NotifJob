<?php
class User_model extends CI_Model {

    protected $table_candidats = "candidats";

    function __construct()
    {
        // Call the Model constructor
        parent::__construct();
    }

    public function insertUser()
    {
        $data = array(
            'prenom' => $this->input->post('prenom'),
            'nom' => $this->input->post('nom'),
            'email' => $this->input->post('email'),
            'mdp' => $this->input->post('mdp'),
            'competences' => $this->input->post('competences'),
            'experiences' => $this->input->post('experiences'),
            'hash' => md5(rand(0, 1000))

        );
        $this->db->insert($this->table_candidats, $data);
        $insert_id = $this->db->insert_id();
        return  $insert_id;
    }

}
?>
