<?php

namespace App\Controller;

use Core\HTML\BoostrapForm;
use PHPMailer\PHPMailer\PHPMailer;

class PostsController extends AppController
{
    public function __construct()
    {
        parent::__construct();
        $this->loadModel('Post');
        $this->loadModel('Categorie');
        $this->loadModel('Comment');
    }

    public function index()
    {
        $posts = $this->Post->last();
        $this->render('posts.index', compact('posts'));
    }

    public function categorie()
    {
        $categorie = $this->Categorie->find($_GET['id']);
        if ($categorie === false) {
            $this->notFound();
        }
        $articles = $this->Post->lastByCategorie($_GET['id']);
        $categories = $this->Categorie->all();
        $this->render('posts.categorie', compact('articles', 'categories', 'categorie'));
    }

    public function single()
    {
        $article = $this->Post->findWithCategorie($_GET['id']);
        $comments = $this->Comment->getComments($_GET['id']);
        $this->render('posts.single', compact('article', 'comments'));
    }

    public function blog()
    {
        $posts = $this->Post->allPosts();
        $this->render('posts.blog', compact('posts'));
    }

    public function contact()
    {
        $errors = false;
        $mailerror = false;
        $success = false;
        if (!empty($_POST)) {

            if(!empty($_POST['email'] AND $_POST['message'] AND $_POST['username'])) {
                $mail = new PHPMailer();
                $mail->isSMTP();
                $mail->Host = 'smtp.gmail.com';
                $mail->Port = 587;
                $mail->SMTPSecure = 'tls';
                $mail->SMTPAuth = true;
                $mail->Username = "hide";
                $mail->Password = "hide";
                $mail->setFrom($_POST['email']);
                $mail->addReplyTo('lucas.bassand@gmail.com', 'Lukadev');
                $mail->addAddress('toonerad@hotmail.com');
                $mail->Subject = 'Contact du site Lukadev par '. $_POST['username'];
                $mail->msgHTML($_POST['message']);
                if (!$mail->send()) {
                    $mailerror = true;
                } else {
                    $success = true;
                }
            } else {
                $errors = true;
            }

        }

        $form = new BoostrapForm($_POST);
        $this->render('posts.contact', compact('form', 'errors', 'success', 'mailerror'));
    }

}
