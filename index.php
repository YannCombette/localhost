<?php 

// Inclusion des fichiers nécessaires

include './classes/Seasons.php';
include './classes/Days.php';
include './classes/Exos.php';
include './data.php';

// Récupération des données nécessaires la page (si besoin)

if (!empty($_GET['page'])){
    $page = trim($_GET['page']);
} else {
    $page = 'home';
}

$templateName = '';

if ($page == 'season'){
    $templateName = 'season';
    if (!empty($_GET['id'])){
        $seasonId = trim($_GET['id']);
    } else {
        $templateName = 'home';
    }
    $season = $seasonsList[$seasonId];

} else if ($page == 'day'){
    $templateName = 'day';
    if (!empty($_GET['id'])){
        $dayId = trim($_GET['id']);
    } else {
        $templateName = 'home';
    }
    var_dump($dayList);
    $day = $dayList[$dayId];

}else if ($page == 'exo'){
    $templateName = 'exo';
    if (!empty($_GET['id'])){
        $exoId = trim($_GET['id']);
    } else {
        $templateName = 'home';
    }
    $exo = $exosList[$exoId];

}else if ($page == 'home'){
    $templateName= 'home';
    

};

require __DIR__ . '/templates/header.tpl.php';

require __DIR__ . '/templates'. '/'. $templateName . '.tpl.php';

require __DIR__ . '/templates/footer.tpl.php';