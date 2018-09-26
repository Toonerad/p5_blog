<?php

namespace App\Controller;


use Core\Auth\DBAuth;
use Core\HTML\BoostrapForm;

class CommentsController extends AppController
{



    public function __construct()
    {
        parent::__construct();
        $this->loadModel('Post');
        $this->loadModel('Comment');
    }


    public function add()
    {
        $date = new \DateTime();
        $resultDate = $date->format('Y-m-d H:i:s');

        $errors = false;
        if (!empty($_POST)) {
            $app = \App::getInstance();

            if($app->isConnected() && !empty($_GET['id'])) {
                $result = $this->Comment->create([
                    'pseudo' => $app->getUsername(),
                    'content' => $_POST['content'],
                    'date_added' => $resultDate,
                    'articles_id' => $_GET['id']
                ]);
                header('Location: index.php?p=posts.single&id='. $_GET['id']);
            }
            else {
                $errors = true;
            }
        }

        $form = new BoostrapForm($_POST);
        $this->render('comments.add', compact('form', 'errors'));

    }

    public function edit()
    {
        $date = new \DateTime();
        $resultDate = $date->format('Y-m-d H:i:s');

        if (!empty($_POST)) {
            $app = \App::getInstance();
            $result = $this->Comment->update($_GET['id'], [
                'pseudo' => $app->getUsername(),
                'content' => $_POST['content'],
                'date_added' => $resultDate,

            ]);

            if ($result) {
                header('Location: index.php?p=posts.single&id='. $_GET['aid']);
            }
        }

        $comment = $this->Comment->find($_GET['id']);
        $form = new BoostrapForm($comment);
        $this->render('comments.edit', compact('form'));


    }


    public function delete()
    {

        if (!empty($_POST)) {
            $result = $this->Comment->delete($_POST['id']);
            header('Location: index.php?p=posts.single&id='. $_GET['aid']);
        }
    }

}

