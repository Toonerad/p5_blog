<!-- Page Header -->
<div class="page-header row no-gutters py-4">
    <div class="col-12 col-sm-4 text-center text-sm-left mb-0">
        <h3 class="page-title">Ajouter une catégorie</h3>
    </div>
</div>



<div class="row">
    <div class="col-lg-12 col-md-12">
        <!-- Add New Post Form -->
        <div class="card card-small mb-3">
            <div class="card-body">
                <form method="post" class="add-new-post">
                    <?= $form->input('title', 'Titre de la catégorie'); ?>
                    <?= $form->submit('Sauvegarder') ?>
                </form>
            </div>
        </div>
        <!-- / Add New Post Form -->
    </div>