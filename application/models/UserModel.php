<?php
    class UserModel extends CI_Model{
        public function register($encrypted){
            $data = array(
                'prenom' => $this->input->post('prenom'),
                'nom' => $this->input->post('nom'),
                'email' => $this->input->post('email'),
                'photo' => $this->input->post('photo'),
                'mdp' => $encrypted
            );
            $data = html_escape($data);
            return $this->db->insert('user',$data);
        }
    }