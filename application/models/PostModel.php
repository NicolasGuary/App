<?php
    class PostModel extends CI_Model{
        public function __construct(){
            $this->load->database();
        }

        public function getPosts(){
            $query = $this->db->get('post');
            return $query->result_array();
        }

        public function getPost($id){
            $query = $this->db->query("SELECT * FROM post WHERE id = $id");
            return $query->result_array();
        }
    }