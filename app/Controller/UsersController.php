<?php

namespace App\Controller;

use \App;
use Core\Auth\DBAuth;
use Core\HTML\BoostrapForm;

class UsersController extends AppController
{
    public function __construct()
    {
        parent::__construct();
        $this->loadModel('User');
    }


    public function login()
    {
        $errors = false;
        if (!empty($_POST)) {
            $app = App::getInstance();
            $auth = new DBAuth($app->getDb());
            if ($auth->login($_POST['username'], $_POST['password'])) {
                if ($auth->isAdmin()) {
                    header('Location: index.php?p=admin.posts.index');
                } else {
                    header('Location: index.php?p=posts.index');
                }
            } else {
                $errors = true;
            }
        }
        $form = new BoostrapForm($_POST);
        $this->render('users.login', compact('form', 'errors'));
    }

    public function register()
    {
        $errors = false;
        if (!empty($_POST)) {
            $app = App::getInstance();
            $auth = new DBAuth($app->getDb());
            if (!($auth->userExist($_POST['username']))) {
                $result = $this->User->create([
                    'username' => htmlentities($_POST['username']) ,
                    'password' => password_hash(htmlentities($_POST['password']) , PASSWORD_BCRYPT),
                    'permission' => 0
                ]);
                header('Location: index.php?p=users.login');
            } else {
                $errors = true;
            }
        }

        $form = new BoostrapForm($_POST);
        $this->render('users.register', compact('form', 'errors'));
    }

    public function logout()
    {
        session_destroy();
        header('Location: index.php');
    }
}
