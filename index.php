<?php

// Inclusion des fichiers nécessaires

// Inclusion of all the classes used to get and create objects.

include './classes/Seasons.php';
include './classes/Days.php';
include './classes/Exos.php';
include './data.php';

//_____________________________________________________________________________________________________________________________________________________________________________________________________________________

// Récupération de la page à afficher
// Par défaut, on considère qu'on affichera la page d'accueil
$pageToDisplay = 'home';

if (isset($_GET['page']) && $_GET['page'] !== '') {
    $pageToDisplay = $_GET['page'];
}
//_____________________________________________________________________________________________________________________________________________________________________________________________________________________

// Page d'Accueil

if ($pageToDisplay === 'home') {

    $pageToDisplay = 'home';
//_____________________________________________________________________________________________________________________________________________________________________________________________________________________

} elseif ($pageToDisplay === 'season' && isset($_GET['id']) && $_GET['id'] !== '') {

    // Page Season


    $pageToDisplay = $_GET['page'];




    

    // $seasonId = filter_input(INPUT_GET, 'id', FILTER_VALIDATE_INT);


    // if ($seasonId !== false && $seasonId !== null) {
    //     $seasonToDisplay = $seasonsList[$seasonId];
    //     var_dump($seasonToDisplay);
    //     //_______________________________________________________________________
    //     //get the list of seasons available in ../

    //     $directory = '../' . $seasonToDisplay->getSeason();
    //     $folders = array_diff(scandir($directory), array('..', '.'));

    //     ## create season list to add all the season folders

    //     $daysList = [];
    //     // var_dump($daysList);
    //     $currentDay = new Days([1]);
    //     $daysList[] = $currentDay;
    //     // var_dump($daysList);

    //     foreach ($folders as $folder) {
    //         if (preg_match('/^day\s\d+/', $folder)) {
    //             $currentDay = new Days($folder);
    //             $daysList[] = $currentDay;
    //         }
    //     }
    //     // ________________________________________________________________________

    // } else {
    //     // Si l'id n'est pas fourni, on affiche la page d'accueil
    //     // plutôt que d'avoir un message d'erreur
    //     $pageToDisplay = 'home';
    // }


//_____________________________________________________________________________________________________________________________________________________________________________________________________________________


} elseif ($pageToDisplay == 'day') {

    // Page Day

    $dayId = filter_input(INPUT_GET, 'id', FILTER_VALIDATE_INT);


    if ($dayId !== false && $dayId !== null) {

        
        
    }
//_____________________________________________________________________________________________________________________________________________________________________________________________________________________

} else {
    // Si l'id n'est pas fourni, on affiche la page d'accueil
    // plutôt que d'avoir un message d'erreur
    $pageToDisplay = 'home';
}

//_____________________________________________________________________________________________________________________________________________________________________________________________________________________

//! --------- this is the page display ---------

require __DIR__ . '/templates/header.tpl.php';

require __DIR__ . '/templates' . '/' . $pageToDisplay . '.tpl.php';

require __DIR__ . '/templates/footer.tpl.php';
