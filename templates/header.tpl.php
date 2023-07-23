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
    <?php include './data.php'; ?>

    <nav class="navbar navbar-expand-lg navbar-expand-md navbar-light bg-light">
        <div class="container-fluid">

            <?php if ($pageToDisplay == 'season') {

                if (isset($_GET['seasonid'])) {
                    $pageId = $_GET['seasonid'];
                }?>
                <a class="navbar-brand" href="index.php">My Work/<?= $pageId ?> </a>

            <?php }
            if ($pageToDisplay == 'day') {
                if (isset($_GET['seasonid'])) {
                    $pageId = $_GET['seasonid'];
                }
                if (isset($_GET['dayid'])) {
                    $exoId = $_GET['dayid'];
                }
            ?>

                <a class="navbar-brand" href="index.php">My Work/<?= $pageId ?>/<?= $exoId ?> </a>

            <?php } else { ?>

                <a class="navbar-brand" href="index.php">My Work/</a>

            <?php } ?>

            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
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