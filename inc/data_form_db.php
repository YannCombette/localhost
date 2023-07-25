<?php
// ===========================================================
/* add all folder in www to my season database */
// ===========================================================

//set directory to get sub directories from
$directory = '..';

// get all directories in my wwww folders 
$localhostFoldersDirectories = getSubdirectories($directory);

// for each folders in www directory, if it doesnt exist add it, else do nothing
foreach ($localhostFoldersDirectories as $localhostFolder) {
    $folderName = basename($localhostFolder);
    $folderId = basename($localhostFolder);

    // Check if the season folder exists in the database
    $checkExistingFolders = "SELECT folder_name FROM localhost_Folders WHERE folder_name = :folderName";
    $stmt = $pdoDBConnexion->prepare($checkExistingFolders);
    $stmt->execute(['folderName' => $folderName]);

    // If the folder doesn't exist in the database, insert it
    if ($stmt->rowCount() === 0) {
        $insertExistingFolders = "INSERT INTO localhost_Folders (folder_name, folder_id) VALUES (:folderName, :folderId)";
        $stmt = $pdoDBConnexion->prepare($insertExistingFolders);
        // add values to a holder
        $stmt->execute(['folderName' => $folderName, 'folderId' => $folderId]);

        if ($stmt->rowCount() === 1) {
            // Insertion successful
            // d($folderName);
        } else {
            exit("Erreur lors de l'insertion des données");
        }
    } else {
        // Folder already exists in the database
        // d($folderName . ' already exists in the database');
    }
}

// ===========================================================
/* add all folder in seasons folders to my days database */
// ===========================================================

if (isset($_GET['season_id'])) {

    $currentSeasonFolder = $_GET['season_id'];

    //set directory to get sub directories from
    $daysPath = "../$currentSeasonFolder/";

    // get all directories in my seasons folders 
    $dayFolders = getSubdirectories($daysPath);

    // for each folders in seasons directories, if it doesnt exist add it, else do nothing
    foreach ($dayFolders as $dayFolder) {
        $dayfolderName = basename($dayFolder);
        // d($dayfolderName);

        // Check if the day folder exists in the database
        $checkExistingDays = "SELECT `day` FROM `days` WHERE `day` = :dayfolderName";
        $stmt = $pdoDBConnexion->prepare($checkExistingDays);
        $stmt->execute(['dayfolderName' => $dayfolderName]);

        // If the folder doesn't exist in the database, insert it
        if ($stmt->rowCount() === 0) {
            // If the folder doesn't exist in the database, insert it
            $insertExistingDayFolders = "INSERT INTO `days` (`day`, `season_id`) VALUES (:dayfolderName, :currentSeasonFolder)";
            $stmt = $pdoDBConnexion->prepare($insertExistingDayFolders);

            $stmt->execute(['dayfolderName' => $dayfolderName, 'currentSeasonFolder' =>$currentSeasonFolder]);
            if ($stmt->rowCount() === 1) {
                // Insertion successful
                // d($folderName);
            } else {
                exit("Erreur lors de l'insertion des données");
            }
        } else {
            // Folder already exists in the database
            // d($folderName . ' already exists in the database');
        }
    }
}

// ===========================================================
/* add all folder from day folders to my exercices database */
// ===========================================================

if (isset($_GET['day_id'])) {
    $currentDayFolder = $_GET['day_id'];

    // Set directory to get sub directories from
    $exosPath = "../$currentSeasonFolder/$currentDayFolder";

    // Get all directories in the days folder
    $exoFolders = getSubdirectories($exosPath);

    // For each folder in the days directories, insert it into the database
    foreach ($exoFolders as $exoFolder) {
        $exofolderName = basename($exoFolder);
        // d($exofolderName);

        // Check if the exercise folder exists in the database
        $checkExistingExos = "SELECT exercise_name FROM exercices WHERE exercise_name = :exofolderName";
        $stmt = $pdoDBConnexion->prepare($checkExistingExos);
        $stmt->execute(['exofolderName' => $exofolderName]);

        
        // If the exercise folder doesn't exist in the database, insert it
        if ($stmt->rowCount() === 0) {
            // Insert the exercise into the database
            $insertExistingExoFolders = "INSERT INTO exercices (exercise_name, day_id, season_id) VALUES (:exofolderName, :currentDayFolder, :currentSeasonFolder)";
            $stmt = $pdoDBConnexion->prepare($insertExistingExoFolders);

            $stmt->execute(['exofolderName' => $exofolderName, 'currentDayFolder' =>$currentDayFolder, 'currentSeasonFolder' =>$currentSeasonFolder]);
            if ($stmt->rowCount() === 1) {
                // Insertion successful
                // ...
            } else {
                exit("Erreur lors de l'insertion des données");
            }
        } else {
            // Exercise folder already exists in the database
            // ...
        }
    }
}



// ===========================================================
/* get seasons, days and exercices table */
// ===========================================================

// get all the objects in seasons database 
$selectSeasonsQuery = "SELECT * FROM localhost_Folders";
$stmt = $pdoDBConnexion->query($selectSeasonsQuery);

// Fetch all the rows from the query result
//! this is the seasons database , unse d($seasons) to see what it hass in it.
$folders = $stmt->fetchAll(PDO::FETCH_ASSOC);

// get all the objects in days database 
$selectDayQuery = "SELECT * FROM `days`";
$stmt = $pdoDBConnexion->query($selectDayQuery);

// Fetch all the rows from the query result
//! this is the days database , unse d($seasons) to see what it hass in it.
$days = $stmt->fetchAll(PDO::FETCH_ASSOC);

// get all the objects in exercices database 
$selectExoQuery = "SELECT * FROM exercices";
$stmt = $pdoDBConnexion->query($selectExoQuery);

// Fetch all the rows from the query result
//! this is the exercices database , unse d($seasons) to see what it hass in it.
$exos = $stmt->fetchAll(PDO::FETCH_ASSOC);

// ===========================================================
/* get season_id and day_id */ //! check if nessesary
// ===========================================================

if (isset($_GET['season_id']) && $_GET['season_id'] !== '') {
    $season_id = $_GET['season_id'];
}

if (isset($_GET['day_id']) && $_GET['day_id'] !== '') {
    $day_id = $_GET['day_id'];
}


// d($exos);