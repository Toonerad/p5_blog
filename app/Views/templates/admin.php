<!doctype html>
<html class="no-js h-100" lang="fr">
<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title><?= App::getInstance()->title ?> | Admin</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://use.fontawesome.com/releases/v5.0.6/css/all.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" id="main-stylesheet" data-version="1.1.0" href="../public/admin/css/shards-dashboards.1.1.0.css">
    <link rel="stylesheet" href="../public/admin/css/extras.1.1.0.min.css">
    <script async defer src="https://buttons.github.io/buttons.js"></script>
</head>
<body class="h-100">
<div class="container-fluid">
    <div class="row">
        <!-- Main Sidebar -->
        <aside class="main-sidebar col-12 col-md-3 col-lg-2 px-0">
            <div class="main-navbar">
                <nav class="navbar align-items-stretch navbar-light bg-white flex-md-nowrap border-bottom p-0">
                    <a class="navbar-brand w-100 mr-0" href="?p=admin.posts.index" style="line-height: 25px;">
                        <div class="d-table m-auto">
                            <span class="d-none d-md-inline ml-1"><?= App::getInstance()->title ?> | Admin</span>
                        </div>
                    </a>
                </nav>
            </div>
            <div class="nav-wrapper">
                <ul class="nav flex-column">
                    <li class="nav-item">
                        <a class="nav-link " href="?p=admin.posts.index">
                            <i class="material-icons">edit</i>
                            <span>Administrer les articles</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link " href="?p=admin.posts.add">
                            <i class="material-icons">note_add</i>
                            <span>Ajouter un article</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link " href="?p=admin.categories.index">
                            <i class="material-icons">edit</i>
                            <span>Administrer les categories</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link " href="?p=admin.categories.add">
                            <i class="material-icons">note_add</i>
                            <span>Ajouter une catégorie</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link " href="?p=admin.users.logout">
                            <i class="material-icons">note_add</i>
                            <span>Déconnexion</span>
                        </a>
                    </li>
                </ul>
            </div>
        </aside>
        <!-- End Main Sidebar -->
        <main class="main-content col-lg-10 col-md-9 col-sm-12 p-0 offset-lg-2 offset-md-3">

            <div class="main-content-container container-fluid px-4">

                <?= $content ?>



            </div>
        </main>
    </div>
</div>
<script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.1/Chart.min.js"></script>
<script src="https://unpkg.com/shards-ui@latest/dist/js/shards.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/Sharrre/2.0.1/jquery.sharrre.min.js"></script>
<script src="../public/admin/js/shards-dashboards.1.1.0.js"></script>
</body>
</html>