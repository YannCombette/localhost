<?php


//get the list of seasons available in ../


function getSubdirectories($path)
{
    $subdirectories = array_filter(glob($path . '/*'), 'is_dir');
    return $subdirectories;
}


$directory = '..';
// $directory = '.';
$seasonFolders = getSubdirectories($directory);

//  d($seasonFolders);


if (isset($_GET['seasonid'])) {

    $sFolder = $_GET['seasonid']; 

    d($sFolder);

    $daysPath = "../$sFolder/";
    // $daysPath = "./$sFolder/";
    $dayFolders = getSubdirectories($daysPath);

    if (isset($_GET['dayid'])) {

        $dFolder = $_GET['dayid']; 

        $exosPath = "../$sFolder/$dFolder";
        // $exosPath = "./$sFolder/$dFolder";
        $exosFolders = getSubdirectories($exosPath);
    }
}
