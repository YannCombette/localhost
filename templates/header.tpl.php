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
    <!-- On utilise le composant navbar de la doc Bootstrap -->
    <!-- https://getbootstrap.com/docs/5.0/components/navbar/ -->
    <nav class="navbar navbar-expand-lg navbar-expand-md navbar-light bg-light">
        <div class="container-fluid">
            <!-- <a class="navbar-brand" href="index.php">My Work/</a> -->
            <?php if ($pageToDisplay == 'season') { 
                if (isset($_GET['id'])) {
                    $pageId = $_GET['id'];
                } ?>

                <a class="navbar-brand" href="index.php">My Work/<?= $pageId ?> </a>

            <?php } else { ?>

                <a class="navbar-brand" href="index.php">My Work/</a>

            <?php } ?>

            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
        </div>
    </nav>
    <!-- _____________________________________________________________ -->


    <?php if ($pageToDisplay == 'season') { ?>
        <div class="container-fluid text-center p-4">
            <h1>Season <?= $pageId ?></h1>
        </div>
        <div class="container-fluid text-center pb-4">
            <h3>Days</h3>
        </div>

    <?php } else { ?>

        <div class="container-fluid text-center p-4">
            <h1>My Work</h1>
        </div>
        <div class="container-fluid text-center pb-4">
            <h3>Saisons</h3>
        </div>
    <?php } ?>