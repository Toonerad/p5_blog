<?php

namespace App\Table;

use Core\Table\Table;

class PostTable extends Table
{

    protected $table = 'articles';

    /**
     * Récupère les derniers articles
     * @return array
     */

    public function allPosts(){
        return $this->query("SELECT articles.* , categories.title as categories 
                            FROM articles 
                            LEFT JOIN categories 
                                ON categories_id = categories.id
                            ORDER BY articles.date_added DESC");
    }

    public function last(){
        return $this->query("SELECT articles.* , categories.title as categories 
                            FROM articles 
                            LEFT JOIN categories 
                                ON categories_id = categories.id
                            ORDER BY articles.date_added DESC LIMIT 3");
    }


    /**
     * Récupère les derniers articles de la catégories demandée
     * @param $categorie_id int
     * @return array
     */

    public function lastByCategorie($categorie_id){
        return $this->query("SELECT articles.id, articles.title, articles.content, articles.author, categories.title as categories 
                            FROM articles 
                            LEFT JOIN categories 
                                ON categories_id = categories.id
                            WHERE articles.categories_id = ?
                            ORDER BY articles.date_added DESC", [$categorie_id]);
    }

    /**
     * Récupère un article en liant la catégorie associée
     * @param $id int
     * @return \App\Entity\PostEntity
     */

    public function findWithCategorie($id){
        return $this->query("SELECT articles.id, articles.title, articles.content, articles.author, articles.categories_id, categories.title as categories 
                            FROM articles 
                            LEFT JOIN categories 
                                ON categories_id = categories.id
                            WHERE articles.id = ?", [$id], true);
    }

}