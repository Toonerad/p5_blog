
<!-- Page Header -->
<div class="page-header row no-gutters py-4">
    <div class="col-12 col-sm-4 text-center text-sm-left mb-0">
        <h3 class="page-title">Administrer les catégories</h3>
    </div>
</div>



<!-- End Page Header -->
<div class="row">

    <?php foreach ($items as $category): ?>

        <div class="col-lg-4">
            <div class="card card-small card-post mb-4">
                <div class="card-body">
                    <h5 class="card-title"><?= $category->title; ?></h5>
                </div>
                <div class="card-footer border-top d-flex">
                    <div class="my-auto ml-auto">
                        <a class="btn btn-primary" href="?p=admin.categories.edit&id=<?= $category->id; ?>">Editer</a>
                        <form action="?p=admin.categories.delete" method="post" style="display: inline">
                            <input type="hidden" name="id" value="<?= $category->id; ?>">
                            <button type="submit" class="btn btn-danger" >Supprimer</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>

    <?php endforeach; ?>

</div>