<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Localhost</title>

    <!-- On va chercher bootstrap via leur CDN -->
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <!-- Bootstrap Icons -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">

</head>

<body>

    <?php 

     ?>

    <nav class="navbar navbar-expand-lg navbar-expand-md navbar-light bg-light">
        <div class="container-fluid">

            <?php if ($pageToDisplay == 'day') {
                if (isset($_GET['seasonid'])) {
                    $pageId = $_GET['seasonid'];
                }
                if (isset($_GET['dayid'])) {
                    $exoId = $_GET['dayid'];
                } ?>
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="navbar-brand" href="index.php">My Work/</a>
                    </li>
                    <li class="nav-item">
                        <a class="navbar-brand" href="index.php?page=season&seasonid=<?= $pageId ?>"><?= $pageId ?>/</a>
                    </li>
                    <li class="nav-item">
                        <a class="navbar-brand" href="index.php?page=day&seasonid=<?= $pageId ?>&dayid=<?= $exoId ?>"><?= $exoId ?> </a>
                    </li>
                </ul>
            <?php } elseif ($pageToDisplay == 'season') {
                if (isset($_GET['seasonid'])) {
                    $pageId = $_GET['seasonid'];
                } ?>
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="navbar-brand" href="index.php">My Work/</a>
                    </li>
                    <li class="nav-item">
                        <a class="navbar-brand" href="index.php?page=season&seasonid=<?= $pageId ?>"><?= $pageId ?>/</a>
                    </li>
                </ul>
            <?php } else { ?>

                <a class="navbar-brand" href="index.php">My Work/</a>

            <?php } ?>




            <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar" aria-controls="offcanvasNavbar" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasNavbar" aria-labelledby="offcanvasNavbarLabel">
      <div class="offcanvas-header">
        <h5 class="offcanvas-title" id="offcanvasNavbarLabel">Offcanvas</h5>
        <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
      </div>
      <div class="offcanvas-body">
        <ul class="navbar-nav justify-content-end flex-grow-1 pe-3">
          
        <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Catégories
            </a>
            <ul class="dropdown-menu">
              <li><a class="dropdown-item" href="#">HTML</a></li>
              <li><a class="dropdown-item" href="#">CSS</a></li>
              <li><a class="dropdown-item" href="#">PHP</a></li>
              <li><a class="dropdown-item" href="#">JS</a></li>
            </ul>
          </li>

          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Auteurs
            </a>
            <ul class="dropdown-menu">
              <li><a class="dropdown-item" href="#">Yann</a></li>
              <li><a class="dropdown-item" href="#">Franck Boullais</a></li>
              <li><a class="dropdown-item" href="#">Michaël Rolland</a></li>
              <li><a class="dropdown-item" href="#">Julien Maignan</a></li>
              <li><a class="dropdown-item" href="#">Henry Michineau</a></li>
            </ul>
          </li>
        </ul>
        <form class="d-flex mt-3" role="search">
          <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
          <button class="btn btn-outline-success" type="submit">Search</button>
        </form>
      </div>
    </div>








        </div>
    </nav>

    <?php if ($pageToDisplay == 'season') { ?>
        <div class="container-fluid text-center p-4">
            <h1>Season <?= $pageId ?></< /h1>
        </div>
        <div class="container-fluid text-center pb-4">
            <h3>Days</h3>
        </div>

    <?php
    } elseif ($pageToDisplay == 'day') { ?>
        <div class="container-fluid text-center p-4">
            <h1>exercises <?= $exoId ?></< /h1>
        </div>
        <div class="container-fluid text-center pb-4">
            <h3>Days</h3>
        </div>

    <?php
    } else { ?>

        <div class="container-fluid text-center p-4">
            <h1>My Work</h1>
        </div>
        <div class="container-fluid text-center pb-4">
            <h3>Saisons</h3>
        </div>
    <?php } ?>

    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-md-12">