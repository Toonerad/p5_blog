<!-- Our Services Section -->
<div id="our-services" class="our-services section py-4">
    <h3 class="section-title text-center my-5">A propos</h3>
    <!-- Features -->
    <div class="features py-4 mb-4">
        <div class="container">
            <div class="row justify-content-md-center">
                <div class="with-shadows"><img src="img/avatar.jpg" style="width: 250px;" alt="Moi"></div>
                <div class="feature py-4 col-md-6">
                    <div class="px-4">
                        <h5>BASSAND Lucas</h5>
                        <p>Je m'appelle Lucas et j'ai 19 ans et je vis pour le moment au Maroc. J'aime beaucoup l'informatique et c'est pour cela que j'en fait mon métier.</p>
                        <a class="btn btn-outline-primary btn-pill" href="#">Voir le CV</a></>
                    </div>
                </div>
            </div>
            <br><br>
            <div class="row">
                <div class="feature py-4 col-md-6 d-flex">
                    <div class="icon text-primary mr-3"><i class="fa fa-graduation-cap"></i></div>
                    <div class="px-4">
                        <h5>Etudes</h5>
                        <p>Je suis étudiant pour devenir "Développeur d'applications PHP/SYMFONY" avec OpenClassrooms. Ce parcours me permettra d'avoir un diplôme reconnue (niveau BAC + 4)</p>
                    </div>
                </div>
                <div class="feature py-4 col-md-6 d-flex">
                    <div class="icon text-primary mr-3"><i class="fa fa-id-card-o"></i></div>
                    <div class="px-4">
                        <h5>Expériences</h5>
                        <p style="margin-bottom: 5px">.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- / Features -->
</div>
<!-- / Our Services Section -->



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



