<?php

namespace App\Controller\Admin;

use \App;
use \Core\Auth\DBAuth;

class UsersController extends App\Controller\AppController
{

    public function __construct()
    {
        parent::__construct();
    }


    public function logout(){
        session_destroy();
        header('Location: index.php');
    }

}