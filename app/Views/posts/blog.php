
<div class="blog section section-invert py-4">
    <h3 class="section-title text-center m-5">Derniers articles</h3>

    <div class="container">
        <div class="py-4">
            <div class="row">
                <div class="card-deck">


                    <?php foreach ($posts as $post): ?>

                        <div class="col-md-12 col-lg-4">
                            <div class="card mb-4">
                                <!--<img class="card-img-top" src="../public/images/common/card-1.jpg" alt="Card image cap">-->
                                <div class="card-body">
                                    <h4 class="card-title"><?= $post->title; ?></h4>
                                    <p class="card-text"><?= $post->extrait; ?></p>
                                    <a class="btn btn-primary btn-pill" href="<?= $post->url ?>">Voir plus &rarr;</a>
                                </div>
                            </div>
                        </div>


                    <?php endforeach; ?>

                </div>
            </div>
        </div>
    </div>
</div>