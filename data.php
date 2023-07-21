<?php

$directory = '..';
$folders = array_diff(scandir($directory), array('..', '.'));


$seasonsList = [];
// var_dump($seasonsList);
$currentSeason = new Seasons([1]);
$seasonsList[] = $currentSeason;
foreach ($folders as $folder) {
    if (preg_match('/^S\d+/', $folder)) {
        $currentSeason = new Seasons($folder);
        $seasonsList[] = $currentSeason;
    }
}

$directory = '..';
$dayfolders = array_diff(scandir($directory), array('..', '.'));

$daysList = [];
// var_dump($daysList);
$currentDay = new Days([1]);
$daysList[] = $currentDay;
foreach ($dayfolders as $dayFolder) {
    if (preg_match('/^day\d+/', $dayFolder)) {
        $currentDay = new Days($dayFolder);
        $daysList[] = $currentDay;
    }
}
