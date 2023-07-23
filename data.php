<?php


//get the list of seasons available in ../

$directory = '..';
// $folders = array_diff(scandir($directory), array('..', '.'));

function getSubdirectories($path) {
    $subdirectories = array_filter(glob($path . '/*'), 'is_dir');
    return $subdirectories;
}

$seasonFolders = getSubdirectories($directory);
if (isset($_GET['id'])) {
     // var_dump($seasonFolders);

     $sFolder = $_GET['id']; // Get the "S" folder from the URL parameter
     // Display days in the selected "S" folder
     $daysPath = "../$sFolder/";
     $dayFolders = getSubdirectories($daysPath);
 
     // var_dump($dayFolders);
} 