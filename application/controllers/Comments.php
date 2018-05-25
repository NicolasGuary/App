<?php
    class Comments extends CI_Controller{

        public function create(){
            $this->form_validation->set_rules('body','Comment','required');
            $idPost = $this->input->post('id');
            $data['post'] = $this->PostModel->getPost($idPost);
            $data['post'] = $data['post'][0];
            $data['comments'] = $this->CommentModel->getComments($idPost);

            if($this->form_validation->run() === false){
                $this->load->view('templates/header');
                $this->load->view('posts/view', $data);
                $this->load->view('templates/footer');
            } else {
                $this->CommentModel->createComment($idPost);
                redirect('posts/'.$idPost);
            }
        }
    }