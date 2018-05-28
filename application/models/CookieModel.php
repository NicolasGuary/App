<?php
class CookieModel extends CI_Model{

    public function setCookie($idUser,$token){
        $token = password_hash($token,PASSWORD_DEFAULT);
        $data = array(
            'idUser' => $idUser,
            'token' => $token
        );
        $this->db->insert('userTokens',$data);
    }


    public function isLoggedIn(){
        $cookie = get_cookie('LoginToken');
        $cookie = $this->input->cookie('LoginToken');
        $data = json_decode($cookie, true);
        if(isset($cookie)){
            $token = $data['token'];
            $idUser = $data['idUser'];
            echo $token."  ".$idUser;
            $query = $this->db->query('SELECT token FROM userTokens WHERE idUser = ?',$idUser);
            $result = $query->row_array();
            if(password_verify($token ,$result['token'])){
                return $idUser;
            } else {
                return false;
            }
        }
    }

    public function deleteCookie(){
        $cookie = $this->input->get_cookie('LoginToken');
        if(isset($cookie)){
            $this->input->delete_cookie('userTokens', $cookie);
            //$this->db->delete()
        }
    }
}
