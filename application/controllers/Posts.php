<?php

class Posts extends CI_Controller{

    public function index($offset = 0)
    {
        $idLogged = $this->CookieModel->isLoggedIn();
        if (isset($idLogged)){
            /*Pagination */
            $config['base_url'] = base_url() . 'posts/index/';
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
            $data['comments'] = $this->CommentModel->getAllComments();
            $data['pagination'] = $this->pagination->create_links();
            /*making an array with all the likes and follow */
            foreach ($data['posts'] as $post) {
                $idPost = $post['id'];
                $idUser = $this->PostModel->getAuthor($idPost);
                $idUser = intval($idUser[0]['idUser']);
                $tmp[] = $this->UserModel->followers($idUser);
                $state_tmp[] = $this->UserModel->getState($idUser,$idLogged);
                $statelike_tmp[] = $this->PostModel->getState($post['id'],$idLogged);
                $likes_tmp[] = $this->PostModel->getLikes($post['id']);

                $data['stateLike'] = $statelike_tmp;
                $data['likes'] = $likes_tmp;
                $data['state'] = $state_tmp;
                $data['followers'] = $tmp;
            }

            $loggedIn['loggedUser'] = $this->UserModel->getUser($idLogged);
            $this->load->view('templates/header',$loggedIn);
            $this->load->view('posts/index', $data);
            $this->load->view('templates/footer');
        } else {
            redirect('users/login');
        }
    }

    public function timeline($offset = 0)
    {
        $idLogged = $this->CookieModel->isLoggedIn();
        if (isset($idLogged)){
            /*Pagination */
            $rows = $this->PostModel->countAllTimeline($idLogged);
            $config['base_url'] = base_url() . 'posts/timeline/';
            $config['total_rows'] = intval($rows['rows']);
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

            $data['posts'] = $this->PostModel->getPostsFollowing($config['per_page'], $offset, $idLogged); // ok normalement
            $data['comments'] = $this->CommentModel->getAllCommentsFollowing($idLogged); //ok normakement
            $data['pagination'] = $this->pagination->create_links();
            /*making an array with all the likes and follow */
            foreach ($data['posts'] as $post) {
                $idPost = $post['id'];
                $idUser = $this->PostModel->getAuthor($idPost);
                $idUser = intval($idUser[0]['idUser']);
                $tmp[] = $this->UserModel->followers($idUser);
                $state_tmp[] = $this->UserModel->getState($idUser,$idLogged);
                $statelike_tmp[] = $this->PostModel->getState($post['id'],$idLogged);
                $likes_tmp[] = $this->PostModel->getLikes($post['id']);

                $data['stateLike'] = $statelike_tmp;
                $data['likes'] = $likes_tmp;
                $data['state'] = $state_tmp;
                $data['followers'] = $tmp;
            }

            $loggedIn['loggedUser'] = $this->UserModel->getUser($idLogged);
            $this->load->view('templates/header',$loggedIn);
            $this->load->view('posts/timeline', $data);
            $this->load->view('templates/footer');
        } else {
            redirect('users/login');
        }
    }


    public function view($id=NULL){
        $idLogged = $this->CookieModel->isLoggedIn();
        if (isset($idLogged)) {
            $data['post'] = $this->PostModel->getPost($id);
            $idPost = $data['post'][0]['id'];
            $data['comments']= $this->CommentModel->getComments($idPost);
            if(empty($data['post'])){
                redirect('users/login');
            }

            $idUser = $this->PostModel->getAuthor($idPost);
            $data['post'] = $data['post'][0];
            $loggedIn['loggedUser'] = $this->UserModel->getUser($idLogged);

            /*follow related */
            $data['followers'] = $this->UserModel->followers($idUser);
            $data['followers'] = $data['followers'][0];
            $data['state'] = $this->UserModel->getState($idUser[0],$idLogged);

            /*like related */
            $data['likes'] = $this->PostModel->getLikes($idPost);
            $data['stateLike'] = $this->PostModel->getState($idPost,$idLogged);
            $data['loggedUser'] = $this->UserModel->getUser($idLogged);

            $this->load->view('templates/header',$loggedIn);
            $this->load->view('posts/view',$data);
            $this->load->view('templates/footer');
        } else {
            redirect('users/login');
        }
    }


    public function create(){
        $idLogged = $this->CookieModel->isLoggedIn();
        if (isset($idLogged)) {
            $this->form_validation->set_rules('link', 'URL', 'required|callback_youtube_link');
            $this->form_validation->set_rules('titre', 'Title', 'getVideoTitle');
            if ($this->form_validation->run() === FALSE) {
                $loggedIn['loggedUser'] = $this->UserModel->getUser($idLogged);
                $this->load->view('templates/header',$loggedIn);
                $this->load->view('posts/create');
                $this->load->view('templates/footer');
            } else {
                $this->PostModel->createPost($idLogged);
                $httpReferer = isset($_SERVER['HTTP_REFERER']) ? $_SERVER['HTTP_REFERER'] : 'posts';
                redirect($httpReferer);
            }
        }
        else {
            redirect('users/login');
        }
    }

    public function delete($idPost)
    {
        $idLogged = $this->CookieModel->isLoggedIn();
        $idAuthor = $this->PostModel->getAuthor($idPost);
        $idAuthor = intval($idAuthor[0]['idUser']);
        $isAdmin = $this->UserModel->isAdmin($idLogged);
        if (isset($idLogged) && ($idLogged == $idAuthor || $isAdmin)) {
            $this->PostModel->deletePost($idPost);
            $httpReferer = isset($_SERVER['HTTP_REFERER']) ? $_SERVER['HTTP_REFERER'] : 'posts';
            redirect($httpReferer);
        } else {
            redirect('users/login');
        }
    }

    public function update($idPost){
        $idLogged = $this->CookieModel->isLoggedIn();
        $idAuthor = $this->PostModel->getAuthor($idPost);
        $idAuthor = intval($idAuthor[0]['idUser']);
        $isAdmin = $this->UserModel->isAdmin($idLogged);
        if (isset($idLogged) && ($idLogged == $idAuthor || $isAdmin)) {
            $this->PostModel->updatePost($idPost);
            $httpReferer = isset($_SERVER['HTTP_REFERER']) ? $_SERVER['HTTP_REFERER'] : 'posts';
            redirect($httpReferer);
        } else {
            redirect('users/login');
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

    public function like($idPost = false)
    {
        $idLogged = $this->CookieModel->isLoggedIn();
        if ((isset($idLogged))) {
            $this->PostModel->like($idPost, $idLogged);
            /*$link = base_url().'posts/'.$idPost;
            redirect($link);*/
            $httpReferer = isset($_SERVER['HTTP_REFERER']) ? $_SERVER['HTTP_REFERER'] : 'posts';
            redirect($httpReferer);

        }
    }

    public function unlike($idPost = false)
    {
        $idLogged = $this->CookieModel->isLoggedIn();
        if ((isset($idLogged))) {
            $this->PostModel->unlike($idPost, $idLogged);
           /* $link = base_url().'posts/'.$idPost;
            redirect($link);*/
            $httpReferer = isset($_SERVER['HTTP_REFERER']) ? $_SERVER['HTTP_REFERER'] : 'posts';
            redirect($httpReferer);
        }
    }
}