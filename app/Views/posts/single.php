
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
                        <a class="btn btn-primary btn-pill" href="index.php?p=blog">Retour à la liste des articles</a>
                    </div>

                </div>
            </div>
        </div>
    </div>
    <!-- / Features -->

    <div class="container" style="margin-bottom: 100px">

        <h3 class="section-title text-center my-5">Commentaires</h3>

        <?php
        if($comments === false) {
            ?>
            <h4 class="card-text">Pas de commentaires sur cet article</h4>
            <?php
        }else {
            ?>
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title" style="display: inline"><?= $comments->pseudo ?></h4>
                    <em style="padding-left: 10px">Ajouté le: <?= $comments->date_added ?></em>
                    <p class="card-text" style="font-size: 20px; margin-top: 5px"><?= $comments->content ?></p>
                </div>
            </div>
            <?php
        }
        ?>


    </div>


</div>
<!-- / Our Services Section -->
