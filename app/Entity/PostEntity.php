<?php

namespace App\Entity;

use Core\Entity\Entity;

class PostEntity extends Entity
{
    public function getUrl()
    {
        return 'index.php?p=posts.single&id='. $this->id;
    }

    public function getExtrait()
    {
        $html = '<p>' . substr($this->content, 0, 100) . '...</p>';
        return $html;
    }
}
