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
        $query = $this->db->query('
        select user.id, user.prenom, user.nom, user.photo, user.date_inscription 
        from user 
        where user.id = ?',$idUser);
        return $query->result_array();
    }

    public function login(){
        /* Get inputs */
        $mail = $this->input->post('email');
        $mail = html_escape($mail);
        $password = $this->input->post('mdp');

        /* Validate password */
        $query = $this->db->query('select user.mdp from user where user.email = ?',$mail);
        $pass = $query->row_array();
        if(isset($pass['mdp'])){
            if(password_verify($password,$pass['mdp'])){
                $queryId = $this->db->query('select user.id as id from user where email=?',$mail);
                $idUser = $queryId->row_array();
                return $idUser['id'];
            } else {
                return false;
            }
        }
    }

    /* STATE 1 = FOLLOWING STATE 0 = UNFOLLOWING */
    public function follow($idUser, $idFollower){
        if($idUser == $idFollower){
            // DO NOTHING
        } else {
            $exists =  $query = $this->db->query('SELECT state FROM follow WHERE idUser = ? AND idFollower = ?', array($idUser,$idFollower))->row_array();
            if(isset($exists)){
                return $this->db->query('UPDATE follow SET state = 1 WHERE idUser = ? AND idFollower = ?', array($idUser,$idFollower));
            } else {
                $data = array(
                    'idUser' => $idUser,
                    'idFollower' => $idFollower,
                    'state' => 1
                );
                return $this->db->insert('follow',$data);
            }
        }
    }

    public function unfollow($idUser, $idFollower){
        return $this->db->query('UPDATE follow SET state = 0 WHERE idUser = ? AND idFollower = ?', array($idUser,$idFollower));
    }

    public function getState($idUser, $idFollower){
        $query = $this->db->query('SELECT state FROM follow WHERE idUser = ? AND idFollower = ?', array($idUser,$idFollower));
        return $query->row_array();
    }

    public function followers($idUser){
        $query = $this->db->query('SELECT COUNT(*) as followers FROM follow WHERE idUser = ? AND STATE = 1',$idUser);
        return $query->result_array();
    }

    public function getFollowingAccounts($idUser){
        $query = $this->db->query('SELECT user.nom, user.prenom, user.photo, user.id
        FROM follow, user
        WHERE follow.idUser = user.id
        AND idFollower = ? AND STATE = 1
        ORDER BY follow.id DESC',$idUser);
        return $query->result_array();
    }

    public function countFollowingAccounts($idUser){
        $query = $this->db->query('SELECT COUNT(*) as amount
        FROM follow, user
        WHERE follow.idUser = user.id
        AND idFollower = ? AND STATE = 1',$idUser);
        return $query->result_array();
    }

    public function getFollowersAccounts($idUser){
        $query = $this->db->query('SELECT  user.nom, user.prenom, user.photo, user.id
        FROM follow, user
        WHERE follow.idFollower = user.id
        AND idUser = ? AND STATE = 1
        ORDER BY follow.id DESC',$idUser);
        return $query->result_array();
    }

    public function countFollowerAccounts($idUser){
        $query = $this->db->query('SELECT COUNT(*) as amount
        FROM follow, user
        WHERE follow.idFollower = user.id
        AND idUser = ? AND STATE = 1',$idUser);
        return $query->result_array();
    }
}