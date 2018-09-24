<!-- Page Header -->
<div class="page-header row no-gutters py-4">
    <div class="col-12 col-sm-4 text-center text-sm-left mb-0">
        <h3 class="page-title">Administrer les articles</h3>
    </div>
</div>



<!-- End Page Header -->
<div class="row">

    <?php foreach ($posts as $post): ?>

    <div class="col-lg-4">
        <div class="card card-small card-post mb-4">
            <div class="card-body">
                <h5 class="card-title"><?= $post->title; ?></h5>
            </div>
            <div class="card-footer border-top d-flex">
                <div class="card-post__author d-flex">
                    <div class="d-flex flex-column justify-content-center ml-3">
                        <span class="card-post__author-name"><?= $post->author; ?></span>
                        <small class="text-muted"><?= $post->date_added; ?></small>
                    </div>
                </div>
                <div class="my-auto ml-auto">
                    <a class="btn btn-primary" href="?p=admin.posts.edit&id=<?= $post->id; ?>">Editer</a>
                    <form action="?p=admin.posts.delete" method="post" style="display: inline">
                        <input type="hidden" name="id" value="<?= $post->id ?>">
                        <button type="submit" class="btn btn-danger" >Supprimer</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <?php endforeach; ?>

</div>