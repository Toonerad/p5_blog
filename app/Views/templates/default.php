<!DOCTYPE html>
<html class="no-js" lang="fr" style="height:100%;>
<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title><?= App::getInstance()->title ?></title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSS Dependencies -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
    <link rel="stylesheet" href="../public/css/shards.css">
</head>
<body style="position: relative;" class="shards-landing-page--1">
    <div class="container">
        <!-- Navigation -->
        <nav class="navbar navbar-expand-lg pt-4 px-0">
            <a class="navbar-brand" href="index.php">
                LUKADEV
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavDropdown">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link" href="index.php">Accueil </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="index.php?p=posts.blog">Blog</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Contact</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="https://twitter.com/bassandlucas" target="_blank"><i class="fa fa-twitter"></i> Twitter</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="https://github.com/Toonerad/p5_blog"><i class="fa fa-github"></i> Github</a>
                    </li>
                </ul>

                <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel">Confirmation</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                Vous êtes connecter avec le compte <strong><?= App::getInstance()->getUsername() ?></strong>.  Etes-vous sûr de vous déconnecter ?
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Annuler</button>
                                <a class="btn btn btn-outline-dark" href="index.php?p=users.logout">Yep</a>
                            </div>
                        </div>
                    </div>
                </div>

                <ul class="navbar-nav ml-auto">

                    <?php
                    if (App::getInstance()->isConnected()) {
                        ?>
                        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#logoutModal">
                            Se déconnecter
                        </button>
                        <?php
                    }else {
                    ?>
                        <li class="nav-item">
                            <a class="btn btn-outline-primary nav-link" style="margin-right: 5px;" href="index.php?p=users.login">Se connecter</a>
                        </li>
                        <li class="nav-item">
                            <a class="btn btn btn-outline-dark nav-link" href="index.php?p=users.register">S'enregistrer</a>
                        </li>
                    <?php
                    }
                    ?>
                </ul>
            </div>
        </nav>
        <!-- / Navigation -->
    </div> <!-- .container -->
    <!-- / Welcome Section -->


    <?= $content ?>



<!-- JavaScript Dependencies -->
<script src="https://code.jquery.com/jquery-3.2.1.min.js" integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4=" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
</html>
