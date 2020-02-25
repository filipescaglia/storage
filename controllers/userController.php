<?php

class userController extends controller {

    public function register() {
        isset($_POST['name']) && !empty($_POST['name']) && strlen($_POST['name']) >= 3 ? ($name = addslashes($_POST['name'])) : exit;        
        isset($_POST['email']) && !empty($_POST['email']) ? ($email = addslashes($_POST['email'])) : exit;
        isset($_POST['passwd']) && !empty($_POST['passwd'] && strlen($_POST['passwd']) >= 2) ? ($passwd = md5(addslashes($_POST['passwd']))) : exit;

        $u = new User();
        $u->register($name, $email, $passwd);
        header("Location: " . BASE_URL);
    }

}