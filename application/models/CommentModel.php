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

        public function deleteComment($idComment){
            $this->db->query('DELETE FROM comment WHERE id = ?',$idComment);
        }

        public function updateComment($idComment){
            $data= array(
                'body'=> $this->input->post('body')
            );
            $data = $this->security->xss_clean($data);
            $data = html_escape($data);
            $this->db->where('id', $idComment);
            return $this->db->update('comment',$data);
        }

        public function getComments($idPost){
            $query = $this->db->query(
                'SELECT comment.id as idComment, comment.body, comment.idPost, comment.idUser, comment.commented_at, user.id, user.nom, user.prenom, user.photo, post.id 
                 FROM comment, user, post 
                 WHERE comment.idPost = post.id and post.id = ? and comment.idUser = user.id 
                 ORDER BY comment.id DESC',array($idPost));
            return $query->result_array();
        }

        public function getAuthor($idComment){
            $query = $this->db->query(
                'SELECT comment.idUser
                 FROM comment, user
                 WHERE comment.id = ? and comment.idUser = user.id',array($idComment));
            return $query->result_array();
        }

        public function getAllComments(){
            $query = $this->db->query(
            'SELECT comment.id as idComment, comment.body, comment.idPost, comment.idUser, comment.commented_at, user.id, user.nom, user.prenom, user.photo, post.id 
             FROM comment, user, post 
             WHERE comment.idPost = post.id and comment.idUser = user.id 
             ORDER BY comment.id DESC');
            return $query->result_array();
        }
        public function getAllCommentsFollowing($idUser){
            $query = $this->db->query(
                'SELECT comment.id as idComment, comment.body, comment.idPost, comment.idUser, comment.commented_at,post.id, user.id, user.nom, user.prenom, user.photo
                FROM post, comment, user
            	WHERE post.id = comment.idPost
            	AND comment.idUser = user.id
            	AND post.idUser 
            	IN (SELECT follow.idUser FROM follow WHERE idFollower = ? AND state =1)
             ORDER BY comment.id DESC', $idUser);
            return $query->result_array();
        }

        public function getRecentComments($idUser){
            $query = $this->db->query(
                'SELECT comment.idUser, comment.body, comment.idPost, comment.idUser, comment.commented_at, user.id, user.nom, user.prenom, post.id, post.titre
                FROM comment, user, post 
                WHERE comment.idPost = post.id and comment.idUser = user.id and comment.idUser = ?
                LIMIT 5',$idUser);
                return $query->result_array();

        }
    }