<?php
    class PostModel extends CI_Model{
        public function __construct(){
            $this->load->database();
        }

        public function getPosts(){
            $query = $this->db->query("SELECT post.id, post.contenu, post.link,post.idUser,post.date,post.time,post.titre,user.prenom,user.nom, user.photo FROM post,user WHERE post.idUser = user.id ORDER BY post.id DESC");
            return $query->result_array();
        }

        public function getPost($id){
            $query = $this->db->query('SELECT post.id, post.contenu, post.link,post.idUser,post.date,post.time,post.titre,user.prenom,user.nom, user.photo FROM post,user WHERE post.idUser = user.id and '.$id.'=post.id');
            return $query->result_array();
        }

        public function getUsersPosts($idUser){
            $query = $this->db->query(
            'SELECT user.id, user.nom, user.prenom, user.photo, post.id, post.contenu, post.link,post.idUser,post.date,post.time,post.titre
            FROM post, user
            WHERE user.id=?
            AND user.id = post.idUser 
            ORDER BY post.id DESC
            ',array($idUser));
            return $query->result_array();
        }

        private function getVideoID($url){
            preg_match('%(?:youtube(?:-nocookie)?\.com/(?:[^/]+/.+/|(?:v|e(?:mbed)?)/|.*[?&]v=)|youtu\.be/)([^"&?/ ]{11})%i', $url, $match);
            if(isset($match[1])){
                return $id = $match[1];
            }
            return false;
        }

        private function getVideoTitle($id){
            $content = file_get_contents("http://youtube.com/get_video_info?video_id=".$id);
            parse_str($content, $ytarr);
            return $ytarr['title'];
        }

        public function createPost(){
            $vid = $this->input->post('link');
            $id = $this->getVideoID($vid);

            if($id === 0){
            }
        $data = array(
            'link' =>$id,
            'contenu' =>$this->input->post('contenu'),
            'titre' =>$this->getVideoTitle($id),
            'idUser' =>1
        );
        $data = $this->security->xss_clean($data);
        $data = html_escape($data);
        return $this->db->insert('post',$data);
        }
    }