<?php if($errors): ?>

    <div class="alert alert-danger">Identifiants incorrecte</div>

<?php endif; ?>
<br>
<div class="container">
    <div class="row">
        <h3>Se connecter</h3>
    </div>
</div>
<br>
<div class="container" style="margin-bottom: 50px">

    <div class="card">
        <div class="card-body">
            <form method="post">
                <?= $form->input('username', 'Pseudo'); ?>
                <?= $form->input('password', 'Mot de passe', ['type' => 'password']); ?>
                <?= $form->submit() ?>

            </form>
        </div>

    </div>
</div>




