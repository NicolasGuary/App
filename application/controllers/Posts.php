<?php

class Posts extends CI_Controller{

    public function index($offset = 0){
        /*Pagination */
        $config['base_url'] = base_url().'posts/index/';
        $config['total_rows'] = $this->db->count_all('post');
        $config['per_page'] = 10;
        $config['uri_segment'] = 3;

        /*STYLE*/
        $config['attributes'] = array('class' => 'page-link');
        $config['full_tag_open'] = '<nav> <ul class="pagination justify-content-center">';
        $config['full_tag_close'] = '</ul></nav>';
        $config['first_tag_open'] = '<li class="page-item">';
        $config['first_tag_close'] = '</li>';
        $config['prev_link'] = '&laquo';
        $config['prev_tag_open'] = '<li class="prev page-item">';
        $config['prev_tag_close'] = '</li>';
        $config['next_link'] = '&raquo';
        $config['next_tag_open'] = '<li class="page-item">';
        $config['next_tag_close'] = '</li>';
        $config['last_tag_open'] = '<li class="page-item">';
        $config['last_tag_close'] = '</li>';
        $config['cur_tag_open'] = '<li class="active page-item"><a class="page-link" href="#">';
        $config['cur_tag_close'] = '</a></li>';
        $config['num_tag_open'] = '<li class="page-item">';
        $config['num_tag_close'] = '</li>';

        /*CONFIG LOAD*/
        $this->pagination->initialize($config);

        $data['posts'] = $this->PostModel->getPosts($config['per_page'], $offset);
        $data['comments']= $this->CommentModel->getAllComments();
        $data['pagination'] = $this->pagination->create_links();

        foreach ($data['posts'] as $post){
            $idPost = $post['id'];
            $idUser = $this->PostModel->getAuthor($idPost);
            $idUser = intval($idUser[0]['idUser']);
            $tmp[] = $this->UserModel->followers($idUser);
        }

        $data['followers'] = $tmp;
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
        $idUser = $this->PostModel->getAuthor($idPost);
        $data['followers'] = $this->UserModel->followers($idUser);
        $data['followers'] = $data['followers'][0];
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