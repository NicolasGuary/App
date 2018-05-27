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
                //UPLOAD IMAGE
                $config['upload_path']='./assets/img/uploads/';
                $config['allowed_types']='gif|jpg|png';
                $config['max_size']='2048';
                $config['max-width']='2000';
                $config['max_height']='2000';
                $config['encrypt_name']=true;
                $this->load->library('upload',$config);

                if(!$this->upload->do_upload()){
                    $errors = array('error' => $this->upload->display_errors());
                    $user_image = 'default.png';
                } else{
                    $data = array('upload_data' => $this->upload->data());
                    //$user_image = $_FILES['userfile']['name'];
                    $user_image = $this->upload->data('file_name');
                }
                //HASH PASSWORD BCRYPT
                $encrypted = password_hash(($this->input->post('mdp')),PASSWORD_DEFAULT);
                $this->UserModel->register($encrypted, $user_image);

                redirect('users/login');
            }
        }

        public function login(){
            $this->form_validation->set_rules('email','Email','callback_user_check|required|valid_email');
            $this->form_validation->set_rules('mdp','Password','callback_user_check|required|min_length[7]');

            if($this->form_validation->run() === FALSE){
                $this->load->view('templates/header');
                $this->load->view('users/login');
                $this->load->view('templates/footer');
            }
            else {
                /* Get user email */
                $mail = $this->input->post('email');

                /* Get input user password */
                $pass = $this->input->post('mdp');

                //Login user
                $idUser = $this->UserModel->login($mail,$pass);

                if($idUser){
                    //SET COOKIE
                    die('SUCCESS');
                    redirect('posts');
                } else{
                  //  log_message('error', 'Wrong email and/or password !');
                    redirect('users/login');
                }

            }
        }

        public function user_check($idUser){
            if($idUser){
                return true;
                die('SUCCESS');
                //redirect('posts');
            } else {
                $this->form_validation->set_message('user_check', 'Invalid email and/or password.');
                return false;
            }
        }

        public function profile($idUser){
            $data['user'] = $this->UserModel->getUser($idUser);
            $data['user']=$data['user'][0];
            $data['posts'] = $this->PostModel->getUsersPosts($idUser);
            $data['followers'] = $this->UserModel->followers($idUser);
            $data['followers'] = $data['followers'][0];
            $this->load->view('templates/header');
            $this->load->view('users/profile',$data);
            $this->load->view('templates/footer');
        }

        public function follow($idUser = false){
            $idFollower=13;
            $this->UserModel->follow($idUser,$idFollower);
            redirect('posts');
        }
    }