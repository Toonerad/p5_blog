
<form method="post">
    <?= $form->input('title', 'Titre de l\'article'); ?>
    <?= $form->select('categories_id', 'Catégorie', $categories); ?>
    <?= $form->input('content', 'Contenu', ['type' => 'textarea']); ?>
    <?= $form->input('author', 'Auteur'); ?>
    <?= $form->submit('Sauvegarder') ?>

</form>