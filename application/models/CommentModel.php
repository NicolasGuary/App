<?php
    class CommentModel extends CI_Model{
        public function __construct(){
            $this->load->database();
        }

        public function createComment($idPost, $idUser){
            $data= array(
                'idPost' => $idPost,
                'idUser' => $idUser,
                'body'=> $this->input->post('body')
            );
            $data = $this->security->xss_clean($data);
            $data = html_escape($data);
            return $this->db->insert('comment',$data);
        }

        public function getComments($idPost){
            $query = $this->db->query(
                'SELECT comment.id, comment.body, comment.idPost, comment.commented_at, user.id, user.nom, user.prenom, user.photo, post.id 
                 FROM comment, user, post 
                 WHERE comment.idPost = post.id and post.id = ? and comment.idUser = user.id 
                 ORDER BY comment.id DESC',array($idPost));
            return $query->result_array();
        }

        public function getAllComments(){
            $query = $this->db->query(
            'SELECT comment.id, comment.body, comment.idPost, comment.commented_at, user.id, user.nom, user.prenom, user.photo, post.id 
             FROM comment, user, post 
             WHERE comment.idPost = post.id and comment.idUser = user.id 
             ORDER BY comment.id DESC');
            return $query->result_array();
        }
    }