<?php

class Pages extends CI_Controller{
//Static pages, only homepage for now
    public function view($page = 'home'){
        if(!file_exists(APPPATH.'views/pages/'.$page.'.php')){
            show_404();
        }
        $idLogged = $this->CookieModel->isLoggedIn();
        $loggedIn['loggedUser'] = $this->UserModel->getUser($idLogged);
            $this->load->view('templates/header',$loggedIn);
            $this->load->view('pages/home');
            $this->load->view('templates/footer');
        }
}