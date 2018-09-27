<?php

namespace App\Controller\Admin;

use App;
use Core\HTML\BoostrapForm;

class PostsController extends AppController
{
    public function __construct()
    {
        parent::__construct();
        $this->loadModel('Post');
        $this->loadModel('Categorie');
    }

    public function index()
    {
        $posts = $this->Post->all();
        $this->render('admin.posts.index', compact('posts'));
    }

    public function add()
    {
        $date = new \DateTime();
        $resultDate = $date->format('Y-m-d H:i:s');

        if (!empty($_POST)) {
            $result = $this->Post->create([
                'title' => $_POST['title'],
                'content' => $_POST['content'],
                'author' => $_POST['author'],
                'categories_id' => $_POST['categories_id'],
                'date_added' => $resultDate

            ]);

            if ($result) {
                return $this->index();
            }
        }
        $categories = $this->Categorie->extract('id', 'title');
        $form = new BoostrapForm($_POST);
        $this->render('admin.posts.add', compact('categories', 'form'));
    }

    public function edit()
    {
        if (!empty($_POST)) {
            $result = $this->Post->update($_GET['id'], [
                'title' => $_POST['title'],
                'content' => $_POST['content'],
                'author' => $_POST['author'],
                'categories_id' => $_POST['categories_id']

            ]);

            if ($result) {
                return $this->index();
            }
        }

        $post = $this->Post->find($_GET['id']);
        $categories = $this->Categorie->extract('id', 'title');
        $form = new BoostrapForm($post);
        $this->render('admin.posts.edit', compact('categories', 'form'));
    }

    public function delete()
    {
        if (!empty($_POST)) {
            $result = $this->Post->delete($_POST['id']);
            return $this->index();
        }
    }
}
