<?php
    class UserModel extends CI_Model{

        public function register($encrypted, $user_image){
            $data = array(
                'prenom' => $this->input->post('prenom'),
                'nom' => $this->input->post('nom'),
                'email' => $this->input->post('email'),
                'photo' => $user_image,
                'mdp' => $encrypted
            );
            $data = html_escape($data);
            return $this->db->insert('user',$data);
        }

        public function getUser($idUser){
            $query = $this->db->query('select user.id, user.prenom, user.nom, user.photo, user.date_inscription from user where user.id = ?',$idUser);
            return $query->result_array();
        }

        public function login($mail,$password){
            //VALIDATION
            $this->db->where('email',$mail);
            $this->db->where('mdp',$password);

            $res = $this->db->get('user');

            if($res->num_rows()===1){
                return $res->row(0)->id;
            } else{
                return false;
            }
        }
    }