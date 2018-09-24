<?php

namespace App\Controller\Admin;
use App;
use Core\HTML\BoostrapForm;

class CategoriesController extends AppController
{

    public function __construct()
    {
        parent::__construct();
        $this->loadModel('Categorie');
    }

    public function index(){
        $items = $this->Categorie->all();
        $this->render('admin.categories.index', compact('items'));
    }

    public function add(){
        if(!empty($_POST)){
            $result = $this->Categorie->create([
                'title' => $_POST['title']
            ]);
            return $this->index();

        }
        $form = new BoostrapForm();
        $this->render('admin.categories.add', compact('form'));

    }

    public function edit(){

        if(!empty($_POST)){
            $result = $this->Categorie->update($_GET['id'], [
                'title' => $_POST['title']

            ]);
            return $this->index();
        }

        $categorie = $this->Categorie->find($_GET['id']);
        $form = new BoostrapForm($categorie);
        $this->render('admin.categories.edit', compact('form'));


    }

    public function delete(){

        if(!empty($_POST)){
            $result = $this->Categorie->delete($_POST['id']);
            return $this->index();
        }
    }

}

