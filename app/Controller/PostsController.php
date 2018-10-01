<?php

namespace App\Controller;

use Core\HTML\BoostrapForm;

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
        $success = false;
        if (!empty($_POST)) {

            // Create the Transport
            $transport = (new \Swift_SmtpTransport('smtp.live.com', 25))
                ->setUsername('toonerasd@hotmail.com')
                ->setPassword('hwrL289YF4')
                ->setEncryption('ssl');


            $mailer = new \Swift_Mailer($transport);

            // Create a message
            $message = (new \Swift_Message('Wonderful Subject'))
                ->setFrom(['john@doe.com' => 'John Doe'])
                ->setTo(['toonerad@hotmail.com' => 'Toonerad'])
                ->setBody('Here is the message itself');

            // Send the message
            $result = $mailer->send($message);

        } else {
            $errors = true;
        }

        $form = new BoostrapForm($_POST);
        $this->render('posts.contact', compact('form', 'errors', 'success'));
    }

}
