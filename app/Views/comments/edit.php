<div class="container">
    <div class="row">
        <h3>Modifier un commentaire</h3>
    </div>
</div>
<br>
<div class="container" style="margin-bottom: 50px">

    <div class="card">
        <div class="card-body">
            <form method="post">
                <?= $form->input('content', 'Contenu'); ?>
                <?= $form->submit() ?>
            </form>
        </div>
    </div>
    <div class="container">
        <div class="row" style="margin-top: 20px">
            <form action="?p=comments.delete&aid=<?= $_GET['aid'] ?>" method="post" style="display: inline">
                <input type="hidden" name="id" value="<?= $_GET['id'] ?>">
                <button type="submit" class="btn btn-danger" >Supprimer le commentaire</button>
            </form>
        </div>
    </div>


</div>




