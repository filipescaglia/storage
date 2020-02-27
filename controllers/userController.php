<?php

class userController extends controller {

    public function register() {
        isset($_POST['name']) && !empty($_POST['name']) && strlen($_POST['name']) >= 3 ? ($name = addslashes($_POST['name'])) : exit;        
        isset($_POST['username']) && !empty($_POST['username']) && strlen($_POST['username']) >= 5 ? ($username = addslashes($_POST['username'])) : exit;
        isset($_POST['email']) && !empty($_POST['email']) ? ($email = addslashes($_POST['email'])) : exit;
        isset($_POST['passwd']) && !empty($_POST['passwd'] && strlen($_POST['passwd']) >= 8) ? ($passwd = md5(addslashes($_POST['passwd']))) : exit;

        $u = new User();
        $u->register($name, $username, $email, $passwd);
        header("Location: " . BASE_URL);
        exit;
    }

    public function login() {
        isset($_POST['email']) && !empty($_POST['email']) ? ($email = addslashes($_POST['email'])) : exit;
        isset($_POST['passwd']) && !empty($_POST['passwd'] && strlen($_POST['passwd']) >= 8) ? ($passwd = md5(addslashes($_POST['passwd']))) : exit;

        $u = new User();
        $u->login($email, $passwd);
    }

    public function logout() {
        $u = new User();
        $u->logout();
        header("Location: " . BASE_URL);
    }

}