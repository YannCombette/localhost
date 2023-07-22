<?php

$directory = '..';
$folders = array_diff(scandir($directory), array('..', '.'));


$seasonsList = [];
// var_dump($seasonsList);
$currentSeason = new Seasons([1]);
$seasonsList[] = $currentSeason;
// var_dump($seasonsList);

foreach ($folders as $folder) {
    if (preg_match('/^S\d+/', $folder)) {
        $currentSeason = new Seasons($folder);
        $seasonsList[] = $currentSeason;
    }
}



// var_dump($season->getSeason());
$daysList = [];
// var_dump($daysList);
$currentDay = new Days();
$daysList[] = $currentDay;


// var_dump($season->getSeason());
$exosList = [];
// var_dump($daysList);
$currentExo = new Exos();
$exosList[] = $currentExo;


// $dayirectory = '../'. $currentSeason->getSeason(); // The current directory (you can change it to a specific path if needed)
// $dayfolders = array_diff(scandir($dayirectory), array('..', '.')); // Get all items in the directory, excluding the parent and current directory entries

// $daysList = [];
// $currentDay = new Days([1]);
// $daysList[] = $currentDay;

// foreach ($folders as $folder) {
//     // Check if the current item is a directory and not a file
//     if (is_dir($directory . '/' . $folder) && strpos($folder, $currentDay->getDay()) !== false) {
//         // echo $folder . '<br>'; // Output the folder names
//         echo $daysList;
//     }
// }