<?php

namespace App\Controller;


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

}

