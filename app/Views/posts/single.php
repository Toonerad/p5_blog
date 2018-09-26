<!--
<h1><?= $post->title ?></h1>
<p><em><?= $post->categories ?></em></p>

<p><?= $post->content ?></p>-->


<!-- Our Services Section -->
<div class="our-services section py-4">
    <h3 class="section-title text-center my-5"><?= $article->title ?></h3>
    <!-- Features -->
    <div class="features py-4 mb-4">
        <div class="container">
            <div class="row">
                <div class="card py-4 d-flex">
                    <div class="card-body">
                        <p class="card-text" style="font-size: large; color: black"><?= $article->content ?></p>
                        <a class="btn btn-primary btn-pill" href="index.php?p=posts.blog">Retour à la liste des
                            articles</a>
                    </div>

                </div>
            </div>
        </div>
    </div>
    <!-- / Features -->

    <div class="container" style="margin-bottom: 100px">

        <h3 class="section-title text-center my-5">Commentaires</h3>
        <?php
        if (App::getInstance()->isConnected()) {
            ?>
            <div class="container" style="margin-bottom: 20px">
                <div class="row justify-content-md-center">
                    <a class="btn btn-outline-primary nav-link" style="margin-right: 5px;"
                       href="index.php?p=comments.add&id=<?= $article->id ?>">Ajouter un commentaire</a>
                </div>
            </div>
            <?php
        }else {
            ?>
            <div class="container">
                <div class="row justify-content-md-center">
                   <p>Pour ajouter des commentaires, <a href="index.php?p=users.register">inscrivez-vous</a> ou  <a href="index.php?p=users.login">connectez-vous</a> si vous avez déjà un compte. </p>
                </div>
            </div>
            <?php

        }


        if (!$comments) {
            ?>
            <h4 class="card-text">Pas de commentaires sur cet article</h4>
            <?php
        } else {
        foreach ($comments as $comment):
            ?>

            <div class="card" style="margin-bottom: 5px">
                <div class="card-body">
                    <h4 class="card-title" style="display: inline"><?= $comment->pseudo ?></h4>
                    <em style="padding-left: 10px">Ajouté le: <?= $comment->date_added ?></em>
                    <?php
                    if ($comment->pseudo === App::getInstance()->getUsername()) {
                        ?>
                        <em>(<a href="index.php?p=comments.edit&id=<?= $comment->id ?>&aid=<?= $article->id ?>">modifier</a>)</em>
                        <?php
                    }
                    ?>
                    <p class="card-text" style="font-size: 20px; margin-top: 5px"><?= $comment->content ?></p>
                </div>
            </div>
        <?php
        endforeach;

        }

        ?>
    </div>

</div>


</div>
<!-- / Our Services Section -->
