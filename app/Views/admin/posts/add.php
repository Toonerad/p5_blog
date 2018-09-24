<?php
$date = new \DateTime();
$resultDate = $date->format('Y-m-d');
?>
<!--<form method="post">


</form>-->

<!-- Page Header -->
<div class="page-header row no-gutters py-4">
    <div class="col-12 col-sm-4 text-center text-sm-left mb-0">
        <h3 class="page-title">Ajouter un article:</h3>
    </div>
</div>



<div class="row">
    <div class="col-lg-9 col-md-12">
        <!-- Add New Post Form -->
        <div class="card card-small mb-3">
            <div class="card-body">
                <form method="post" class="add-new-post">
                    <?= $form->input('title', 'Titre de l\'article'); ?>
                    <?= $form->select('categories_id', 'Catégorie', $categories); ?>
                    <?= $form->input('author', 'Auteur'); ?>
                    <?= $form->input('content', 'Contenu', ['type' => 'textarea']); ?>
                    <?= $form->submit('Sauvegarder') ?>
                </form>
            </div>
        </div>
        <!-- / Add New Post Form -->
    </div>
    <div class="col-lg-3 col-md-12">
        <!-- Post Overview -->
        <div class='card card-small mb-3'>
            <div class="card-header border-bottom">
                <h6 class="m-0">Actions</h6>
            </div>
            <div class='card-body p-0'>
                <ul class="list-group list-group-flush">
                    <li class="list-group-item p-3">
                        <span class="d-flex mb-2">
                          <i class="material-icons mr-1">visibility</i>
                          <strong class="mr-1">Visibilité:</strong>
                          <strong class="text-success">Publique</strong>
                        </span>
                        <span class="d-flex mb-2">
                          <i class="material-icons mr-1">calendar_today</i>
                          <strong class="mr-1">Date:</strong> <?= $resultDate ?>
                        </span>
                    </li>
                </ul>
            </div>
        </div>
        <!-- / Post Overview -->
    </div>