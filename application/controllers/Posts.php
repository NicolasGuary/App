<?php

class Posts extends CI_Controller{

    public function index(){
            $data['posts'] = $this->PostModel->getPosts();
            $data['comments']= $this->CommentModel->getAllComments();
            $this->load->view('templates/header');
            $this->load->view('posts/index',$data);
            $this->load->view('templates/footer');
        }


    public function view($id=NULL){
        $data['post'] = $this->PostModel->getPost($id);
        $idPost = $data['post'][0]['id'];
        $data['comments']= $this->CommentModel->getComments($idPost);
        if(empty($data['post'])){
            show_404();
        }

        $data['post'] = $data['post'][0];
        $this->load->view('templates/header');
        $this->load->view('posts/view',$data);
        $this->load->view('templates/footer');
    }


    public function create(){
        $this->form_validation->set_rules('link','URL','required|callback_youtube_link');
        $this->form_validation->set_rules('titre','Title','getVideoTitle');

        if($this->form_validation->run() === FALSE){
            $this->load->view('templates/header');
            $this->load->view('posts/create');
            $this->load->view('templates/footer');
        } else {
            $this->PostModel->createPost();
            redirect('posts');
        }
    }

    public function youtube_link($url){
        preg_match('%(?:youtube(?:-nocookie)?\.com/(?:[^/]+/.+/|(?:v|e(?:mbed)?)/|.*[?&]v=)|youtu\.be/)([^"&?/ ]{11})%i', $url, $match);
        if(isset($match[1])){
            return true;
        }
        $this->form_validation->set_message('youtube_link', 'Should be a valid YouTube link.');
        return false;
    }
}