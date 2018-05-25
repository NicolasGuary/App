<?php
    class Users extends CI_Controller{

        public function register(){
            $this->form_validation->set_rules('prenom','First Name','required');
            $this->form_validation->set_rules('nom','Last Name','required');
            $this->form_validation->set_rules('email','Email','required|valid_email|is_unique[user.email]');
            $this->form_validation->set_rules('mdp','Password','required|min_length[7]');
            $this->form_validation->set_rules('cmdp','Confirm Password','required|matches[mdp]');

            if($this->form_validation->run() === FALSE){
                $this->load->view('templates/header');
                $this->load->view('users/register');
                $this->load->view('templates/footer');
            } else {
                $encrypted = password_hash(($this->input->post('mdp')),PASSWORD_DEFAULT);
                $this->UserModel->register($encrypted);

                redirect('posts');
            }
        }
    }