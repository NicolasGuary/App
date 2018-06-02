<?php
    class PostModel extends CI_Model{
        public function __construct(){
            $this->load->database();
        }

        public function getPosts($limit=FALSE, $offset=FALSE){
            $offset = intval($offset);
            $query = $this->db->query(
            'SELECT post.id, post.contenu, post.link,post.idUser,post.date,post.titre, post.idUser, user.prenom,user.nom, user.photo
             FROM post,user 
             WHERE post.idUser = user.id
             ORDER BY post.id DESC
             LIMIT ? OFFSET ?;',array($limit,$offset));
            return $query->result_array();
        }

        public function getPostsFollowing($limit=FALSE, $offset=FALSE,$idUser){
            $offset = intval($offset);
            $query = $this->db->query(
                'SELECT post.id, post.contenu, post.link,post.idUser,post.date,post.titre, post.idUser, user.prenom,user.nom, user.photo
                FROM post,user
                WHERE post.idUser = user.id
                AND post.idUser IN (SELECT follow.idUser FROM follow WHERE idFollower= ? AND state=1)
                ORDER BY post.id DESC
             LIMIT ? OFFSET ?;',array($idUser,$limit,$offset));
            return $query->result_array();
        }

        public function countAllTimeline($idUser){
            $query = $this->db->query(
                'SELECT count(*) as rows
             FROM post,user, follow 
             WHERE post.idUser = user.id
             AND user.id = follow.idFollower
             AND state=1
             AND idFollower = ?',$idUser);
            return $query->row_array();
        }

        public function getPost($id){
            $query = $this->db->query('SELECT post.id, post.contenu, post.link,post.idUser,post.date,post.titre, post.idUser, user.prenom,user.nom, user.photo FROM post,user WHERE post.idUser = user.id and '.$id.'=post.id');
            return $query->result_array();
        }

        public function getUsersPosts($idUser){
            $query = $this->db->query(
            'SELECT user.id, user.nom, user.prenom, user.photo, post.id, post.contenu, post.link,post.idUser,post.date,post.titre
            FROM post, user
            WHERE user.id=?
            AND user.id = post.idUser 
            ORDER BY post.id DESC
            ',array($idUser));
            return $query->result_array();
        }

        public function countUsersPosts($idUser){
            $query = $this->db->query(
                'SELECT count(*)
            FROM post, user
            WHERE user.id=?
            AND user.id = post.idUser 
            ORDER BY post.id DESC
            ',array($idUser));
            return $query->row_array();
        }

        public function getAuthor($idPost){
            $query = $this->db->query('SELECT idUser FROM post WHERE id = ?',$idPost);
            return $query->result_array();

        }

        private function getVideoID($url){
            preg_match('%(?:youtube(?:-nocookie)?\.com/(?:[^/]+/.+/|(?:v|e(?:mbed)?)/|.*[?&]v=)|youtu\.be/)([^"&?/ ]{11})%i', $url, $match);
            if(isset($match[1])){
                return $id = $match[1];
            }
            return $url;
        }

        private function getVideoTitle($id){
            $content = file_get_contents("http://youtube.com/get_video_info?video_id=".$id);
            parse_str($content, $ytarr);
            return $ytarr['title'];
        }
        public function createPost($idLogged){
            $vid = $this->input->post('link');
            $id = $this->getVideoID($vid);

            if($id === 0){
            }
        $data = array(
            'link' =>$id,
            'contenu' =>$this->input->post('contenu'),
            'titre' =>$this->getVideoTitle($id),
            'idUser' => $idLogged
        );
        $data = $this->security->xss_clean($data);
        $data = html_escape($data);
        return $this->db->insert('post',$data);
        }

        public function deletePost($idPost){
            $this->db->query('DELETE FROM likers WHERE idPost = ?',$idPost);
            $this->db->query('DELETE FROM comment WHERE idPost = ?',$idPost);
            $this->db->query('DELETE FROM post WHERE id = ?',$idPost);
            return true;
        }

        public function updatePost($idPost){
            $vid = $this->input->post('link');
            $id = $this->getVideoID($vid);

            if($id === 0){
            }
            $data = array(
                'link' =>$id,
                'contenu' =>$this->input->post('contenu'),
                'titre' =>$this->getVideoTitle($id),
            );
            $data = $this->security->xss_clean($data);
            $data = html_escape($data);
            $this->db->where('id', $idPost);
            return $this->db->update('post',$data);
        }

        /* STATE 1 = LIKED STATE 0 = UNLIKED */
        public function like($idPost, $idLiker){
            if($idPost == $idLiker){
                // DO NOTHING
            } else {
                $exists =  $query = $this->db->query('SELECT state FROM likers WHERE idPost = ? AND idLiker = ?', array($idPost,$idLiker))->row_array();
                if(isset($exists)){
                    return $this->db->query('UPDATE likers SET state = 1 WHERE idPost = ? AND idLiker = ?', array($idPost,$idLiker));
                } else {
                    $data = array(
                        'idPost' => $idPost,
                        'idLiker' => $idLiker,
                        'state' => 1
                    );
                    return $this->db->insert('likers',$data);
                }
            }
        }

        public function unlike($idPost, $idLiker){
            return $this->db->query('UPDATE likers SET state = 0 WHERE idPost = ? AND idLiker = ?', array($idPost,$idLiker));
        }

        public function getState($idPost, $idLiker){
            $query = $this->db->query('SELECT state FROM likers WHERE idPost = ? AND idLiker = ?', array($idPost,$idLiker));
            return $query->row_array();
        }

        public function getLikes($idPost){
            $query = $this->db->query('SELECT COUNT(*) as likes FROM likers WHERE idPost = ? AND STATE = 1',$idPost);
            return $query->row_array();
        }

        public function getRecentLiked($idUser){
            $query = $this->db->query(
                'SELECT likers.idLiker, user.nom, user.prenom, post.id, post.titre
                FROM likers, user, post 
                WHERE likers.idPost = post.id and likers.idLiker = user.id and likers.idLiker = ?
                LIMIT 5',$idUser);
            return $query->result_array();

        }
    }