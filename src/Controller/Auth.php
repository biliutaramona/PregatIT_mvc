<?php

namespace App\Controller;

use App\Model\User;
use Core\Request;


class Auth extends CoreController{
    private User $user;
    public function __construct()
    {
        $this->user = new User();
    }
    public function login()
    {
        try {
            $this->user->login(Request::getPost('email'), Request::getPost('password'));
            Request::redirect('/books');
        } catch (\Exception $e) {
          $_SESSION['err']='Invalid username or password';
            Request::redirect('/auth/login');
        }
    }
    public function showLogin()
    {
        $this->view("login");

    }
    public function logout()
    {
        $this->user->logout();
        Request::redirect('/');
    }
    public function register()
    {
        // TODO: implement register
    }
    public function showRegister()
    {
        // TODO: implement show register
    }
}