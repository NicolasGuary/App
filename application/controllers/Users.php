<?php
class Users extends CI_Controller
{

    public function register()
    {
        $idLogged = $this->CookieModel->isLoggedIn();
        if (!(isset($idLogged))) {
            $this->form_validation->set_rules('prenom', 'First Name', 'required');
            $this->form_validation->set_rules('nom', 'Last Name', 'required');
            $this->form_validation->set_rules('email', 'Email', 'required|valid_email|is_unique[user.email]');
            $this->form_validation->set_rules('mdp', 'Password', 'required|min_length[7]');
            $this->form_validation->set_rules('cmdp', 'Confirm Password', 'required|matches[mdp]');

            if ($this->form_validation->run() === FALSE) {
                $this->load->view('templates/header');
                $this->load->view('users/register');
                $this->load->view('templates/footer');
            } else {
                //UPLOAD IMAGE
                $config['upload_path'] = './assets/img/uploads/';
                $config['allowed_types'] = 'gif|jpg|png';
                $config['max_size'] = '2048';
                $config['max-width'] = '2000';
                $config['max_height'] = '2000';
                $config['encrypt_name'] = true;
                $this->load->library('upload', $config);

                if (!$this->upload->do_upload()) {
                    $errors = array('error' => $this->upload->display_errors());
                    $user_image = 'default.png';
                } else {
                    $data = array('upload_data' => $this->upload->data());
                    //$user_image = $_FILES['userfile']['name'];
                    $user_image = $this->upload->data('file_name');
                }
                //HASH PASSWORD BCRYPT
                $encrypted = password_hash(($this->input->post('mdp')), PASSWORD_DEFAULT);
                $this->UserModel->register($encrypted, $user_image);

                redirect('users/login');
            }
        } else {
            redirect('posts');
        }
    }

    public function login()
    {
        $idLogged = $this->CookieModel->isLoggedIn();
        if (!(isset($idLogged))) {
            $this->form_validation->set_rules('email', 'Email', 'required|valid_email');
            $this->form_validation->set_rules('mdp', 'Password', 'required|min_length[7]');

            if ($this->form_validation->run() === FALSE) {
                $this->load->view('templates/header');
                $this->load->view('users/login');
                $this->load->view('templates/footer');
            } else {
                if ($this->UserModel->login()) {
                    //SET COOKIE
                    $idUser = $this->UserModel->login();
                    $cstrong = true;
                    $token = bin2hex(openssl_random_pseudo_bytes(64, $cstrong));
                    $values = array(
                        'idUser' => $idUser,
                        'token' => $token
                    );

                    $this->input->set_cookie('LoginToken', json_encode($values), (60 * 60 * 24 * 7), '', '/', '', null, true);

                    $this->CookieModel->setCookie($idUser, $token);
                    redirect('posts');
                } else {
                    //SHOW ERROR WRONG PASSWORD OR EMAIL
                    $this->load->view('templates/header');
                    $this->load->view('errors/errorLog');
                    $this->load->view('users/login');
                    $this->load->view('templates/footer');

                }
            }
        } else {
            redirect('posts');
        }
    }

    public function delete($idUser)
    {
        $idLogged = $this->CookieModel->isLoggedIn();
        $isAdmin = $this->UserModel->isAdmin($idLogged);
        if ((isset($idLogged))) {
            if($idLogged == $idUser || $isAdmin){
                if($idLogged == $idUser){
                    $this->CookieModel->deleteCookie();
                }
                $this->UserModel->delete($idUser);
                redirect('posts');
            } else {
                redirect('posts');
            }
        } else {
            redirect('users/login');
        }
    }

    public function logout()
    {
        $this->CookieModel->deleteCookie();
        redirect();
    }

    public function profile($idUser)
    {
        $idLogged = $this->CookieModel->isLoggedIn();
        $user = $this->UserModel->exists($idUser);
        if ((isset($idLogged)) && $user) {
            $data['user'] = $this->UserModel->getUser($idUser);
            $data['user'] = $data['user'][0];
            $data['posts'] = $this->PostModel->getUsersPosts($idUser);
            $data['followers'] = $this->UserModel->followers($idUser);
            $data['followers'] = $data['followers'][0];
            $loggedIn['loggedUser'] = $this->UserModel->getUser($idLogged);

            /* Follow related */
            $data['state'] = $this->UserModel->getState($idUser,$idLogged);
            $data['followingAccounts'] = $this->UserModel->getFollowingAccounts($idUser);
            $data['amountFollowingAccounts'] = $this->UserModel->countFollowingAccounts($idUser);
            $data['followersAccounts']= $this->UserModel->getFollowersAccounts($idUser);
            $data['amountFollowerAccounts'] = $this->UserModel->countFollowerAccounts($idUser);

            /*Like related*/
            if($this->PostModel->countUsersPosts($idUser) != 0){
                foreach ($data['posts'] as $post){
                    $state_tmp[] = $this->PostModel->getState($post['id'],$idLogged);
                    $likes_tmp[] = $this->PostModel->getLikes($post['id']);
                    $data['stateLike'] = $state_tmp;
                    $data['likes'] = $likes_tmp;
                }
            }

            $this->load->view('templates/header', $loggedIn);
            $this->load->view('users/profile', $data);
            $this->load->view('templates/footer');
        } else {
            redirect('posts');
        }
    }

    public function follow($idUser = false)
    {   $user = $this->UserModel->exists($idUser);
        $idLogged = $this->CookieModel->isLoggedIn();
        if ((isset($idLogged)) && $user) {
            $this->UserModel->follow($idUser, $idLogged);
            $link = base_url().'users/'.$idUser;
            redirect($link);
        }
    }

    public function unfollow($idUser = false)
    {   $user = $this->UserModel->exists($idUser);
        $idLogged = $this->CookieModel->isLoggedIn();
        if ((isset($idLogged)) && $user) {
            $this->UserModel->unfollow($idUser, $idLogged);
            $link = base_url().'users/'.$idUser;
            redirect($link);
        }
    }

    public function following($idUser= false){
        {   $user = $this->UserModel->exists($idUser);
            $idLogged = $this->CookieModel->isLoggedIn();
            if ((isset($idLogged)) && $user) {
                $data['user'] = $this->UserModel->getUser($idUser);
                $data['user'] = $data['user'][0];
                $data['followers'] = $this->UserModel->followers($idUser);
                $data['followers'] = $data['followers'][0];
                $loggedIn['loggedUser'] = $this->UserModel->getUser($idLogged);

                /* Follow related */
                $data['state'] = $this->UserModel->getState($idUser,$idLogged);
                $data['followingAccounts'] = $this->UserModel->getFollowingAccounts($idUser);
                $data['amountFollowingAccounts'] = $this->UserModel->countFollowingAccounts($idUser);

                $this->load->view('templates/header', $loggedIn);
                $this->load->view('users/following', $data);
                $this->load->view('templates/footer');
            } else {
                redirect('posts');
            }
        }
    }

    public function followers($idUser= false){
        {   $user = $this->UserModel->exists($idUser);
            $idLogged = $this->CookieModel->isLoggedIn();
            if ((isset($idLogged)) && $user) {
                $data['user'] = $this->UserModel->getUser($idUser);
                $data['user'] = $data['user'][0];
                $data['followers'] = $this->UserModel->followers($idUser);
                $data['followers'] = $data['followers'][0];
                $loggedIn['loggedUser'] = $this->UserModel->getUser($idLogged);

                /* Follow related */
                $data['state'] = $this->UserModel->getState($idUser,$idLogged);
                $data['followersAccounts'] = $this->UserModel->getFollowersAccounts($idUser);
                $data['amountFollowerAccounts'] = $this->UserModel->countFollowerAccounts($idUser);

                $this->load->view('templates/header', $loggedIn);
                $this->load->view('users/followers', $data);
                $this->load->view('templates/footer');
            } else {
                redirect('posts');
            }
        }
    }
}