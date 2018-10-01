<?php if ($errors): ?>

    <div class="alert alert-danger"> Erreur</div>

<?php endif; ?>
<br>
<div class="container">
    <div class="row">
        <h3>Ajouter un commentaire</h3>
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
</div>




