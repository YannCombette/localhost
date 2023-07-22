<?php


//get the list of seasons available in ../

$directory = '..';
$folders = array_diff(scandir($directory), array('..', '.'));

## create season list to add all the season folders

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
