<?php

class Pages extends CI_Controller{
//Static pages, only homepage for now
    public function view($page = 'home'){
        if(!file_exists(APPPATH.'views/pages/'.$page.'.php')){
            show_404();
        }
            $this->load->view('pages/home');
            $this->load->view('templates/footer');
        }
}