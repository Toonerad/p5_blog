<?php

namespace App\Controller;
use \App;

class UsersController extends AppController
{
    public function login(){
        $errors =false;
        if(!empty($_POST)){
            $app = App::getInstance();
            $auth = new \Core\Auth\DBAuth($app->getDb());
            if ($auth->login($_POST['username'], $_POST['password'])){
                header('Location: index.php?p=admin.posts.index');
            }else {
                $errors = true;
            }
        }
        $form = new \Core\HTML\BoostrapForm($_POST);
        $this->render('users.login', compact('form', 'errors'));

    }

    public function logout(){
        session_destroy();
        header('Location: index.php');
    }




}