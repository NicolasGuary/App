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
            $pass = $this->db->query('select user.mdp from user where user.email = ?',$mail);

            $res = password_verify($password,$pass);

            if($res){
                return $this->db->query('select user.id from user where user.email = ?',$mail);
            } else{
                return false;
            }
        }

        public function follow($idUser, $idFollower){
                $data = array(
                    'idUser' => $idUser,
                    'idFollower' => $idFollower
                );
                return $this->db->insert('follow',$data);
        }

        public function unfollow($idUser, $idFollower){
            $data = array(
                'idUser' => $idUser,
                'idFollower' => $idFollower
            );
            return $this->db->delete('follow',$data);
        }

        public function followers($idUser){
            $query = $this->db->query('SELECT COUNT(*) as followers FROM follow WHERE idUser = ?',$idUser);
            return $query->result_array();
        }
    }