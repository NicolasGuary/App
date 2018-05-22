<?php
    class PostModel extends CI_Model{
        public function __construct(){
            $this->load->database();
        }

        public function getPosts(){
            $this->db->order_by('id','DESC');
            $query = $this->db->get('post');
            return $query->result_array();
        }

        public function getPost($id){
            $query = $this->db->query("SELECT * FROM post WHERE id = $id");
            return $query->result_array();
        }

        private function getVideoID($url){
            preg_match('%(?:youtube(?:-nocookie)?\.com/(?:[^/]+/.+/|(?:v|e(?:mbed)?)/|.*[?&]v=)|youtu\.be/)([^"&?/ ]{11})%i', $url, $match);
            return $id = $match[1];
        }

        private function getVideoTitle($id){
            $content = file_get_contents("http://youtube.com/get_video_info?video_id=".$id);
            parse_str($content, $ytarr);
            return $ytarr['title'];
        }

        public function createPost(){
            $vid = $this->input->post('link');
            $id = $this->getVideoID($vid);

        $data = array(
            'link' =>$id,
            'contenu' =>$this->input->post('contenu'),
            'titre' =>$this->getVideoTitle($id),
            'idUser' =>1
        );
        return $this->db->insert('post',$data);
    }
    }