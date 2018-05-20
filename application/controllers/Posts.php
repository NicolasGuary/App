<?php

class Posts extends CI_Controller{

    public function index(){
            $data['posts'] = $this->PostModel->getPosts();

           /* foreach ($data['posts'] as $post) :
            $data['link'] = str_replace("watch?v=","embed/",$post['link']);
            $post['link'] = $data['link'];
            echo $post['link'];
            echo  $data['link'];
            endforeach; */

            $this->load->view('templates/header');
            $this->load->view('posts/index',$data);
            $this->load->view('templates/footer');
        }


    public function view($id=NULL){
        $data['post'] = $this->PostModel->getPost($id);

        if(empty($data['post'])){
            show_404();
        }

        $data['post'] = $data['post'][0];

        $this->load->view('templates/header');
        $this->load->view('posts/view',$data);
        $this->load->view('templates/footer');
    }

    public function create(){

        $this->form_validation->set_rules('link','URL','required');

        if($this->form_validation->run() === FALSE){
            $this->load->view('templates/header');
            $this->load->view('posts/create');
            $this->load->view('templates/footer');
        } else {
            $this->PostModel->createPost();
            redirect('posts');
        }


    }
}