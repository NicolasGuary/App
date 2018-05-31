<?php
    class Comments extends CI_Controller
    {

        public function create()
        {
            $idLogged = $this->CookieModel->isLoggedIn();
            if (isset($idLogged)) {
                $this->form_validation->set_rules('body', 'Comment', 'required');
                $idPost = $this->input->post('id');
                $data['post'] = $this->PostModel->getPost($idPost);
                $data['post'] = $data['post'][0];
                $data['comments'] = $this->CommentModel->getComments($idPost);
                $loggedIn['loggedUser'] = $this->UserModel->getUser($idLogged);

                /*follow related */
                $idUser = $this->PostModel->getAuthor($idPost);
                $data['followers'] = $this->UserModel->followers($idUser);
                $data['followers'] = $data['followers'][0];
                $data['state'] = $this->UserModel->getState($idUser[0],$idLogged);

                /*like related */
                $data['likes'] = $this->PostModel->getLikes($idPost);
                $data['stateLike'] = $this->PostModel->getState($idPost,$idLogged);

                if ($this->form_validation->run() === false) {
                    $this->load->view('templates/header',$loggedIn);
                    $this->load->view('posts/view', $data);
                    $this->load->view('templates/footer');
                } else {
                    $this->CommentModel->createComment($idPost, $idLogged);
                    redirect('posts/'.$idPost);
                }
            } else {
                redirect('users/login');
            }
        }

        public function delete($idComment)
        {
            $idLogged = $this->CookieModel->isLoggedIn();
            $idAuthor = $this->CommentModel->getAuthor($idComment);
            $idAuthor = intval($idAuthor[0]['idUser']);
            $isAdmin = $this->UserModel->isAdmin($idLogged);
            if (isset($idLogged) && ($idLogged == $idAuthor || $isAdmin )) {
                $this->CommentModel->deleteComment($idComment);
                redirect('posts');
            } else {
                redirect('users/login');
            }
        }

        public function update($idComment)
        {
            $idLogged = $this->CookieModel->isLoggedIn();
            $idAuthor = $this->CommentModel->getAuthor($idComment);
            $idAuthor = intval($idAuthor[0]['idUser']);
            $isAdmin = $this->UserModel->isAdmin($idLogged);
            if (isset($idLogged) && ($idLogged == $idAuthor || $isAdmin )) {
                $this->CommentModel->updateComment($idComment);
                redirect('posts');
            } else {
                redirect('users/login');
            }
        }
    }