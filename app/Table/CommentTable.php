<?php

namespace App\Table;

use Core\Table\Table;

class CommentTable extends Table
{
    protected $table = "comments";


    /*
     * Récupère les commentaires d'un articles
     */
    public function getComments($id) {
        return $this->query("SELECT * FROM comments WHERE articles_id = ? ORDER BY id DESC", [$id], false);
    }

}