<?php

$pageToDisplay = 'home';

if (isset($_GET['page']) && $_GET['page'] !== '') {
    $pageToDisplay = $_GET['page'];
}

// Page d'Accueil

if ($pageToDisplay === 'home') {

    $pageToDisplay = 'home';
} elseif ($pageToDisplay === 'season') {

    // Page Season
    $pageToDisplay = $_GET['page'];

} elseif ($pageToDisplay == 'day') {

    // Page Day
    $pageToDisplay = $_GET['page'];

} else {
    // Si l'id n'est pas fourni, on affiche la page d'accueil
    // plutôt que d'avoir un message d'erreur
    $pageToDisplay = 'home';
}

//! --------- this is the page display ---------

require __DIR__ . '/templates/header.tpl.php';
// require __DIR__ . '/localhost/templates/header.tpl.php';

require __DIR__ . '/templates' . '/' . $pageToDisplay . '.tpl.php';
// require __DIR__ . '/localhost/templates' . '/' . $pageToDisplay . '.tpl.php';

require __DIR__ . '/templates/footer.tpl.php';
// require __DIR__ . '/localhost/templates/footer.tpl.php';
