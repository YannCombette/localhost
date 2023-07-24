<?php
// ===========================================================
/* add all folder in www to my season database */
// ===========================================================

//set directory to get sub directories from
$directory = '..';

// get all directories in my wwww folders 
$seasonFoldersDirectories = getSubdirectories($directory);

// for each folders in www directory, if it doesnt exist add it, else do nothing
foreach ($seasonFoldersDirectories as $seasonFolder) {
    $folderName = basename($seasonFolder);

    // Check if the season folder exists in the database
    $checkExistingSeason = "SELECT fName FROM seasons WHERE fName = :folderName";
    $stmt = $pdoDBConnexion->prepare($checkExistingSeason);
    $stmt->execute(['folderName' => $folderName]);

    // If the folder doesn't exist in the database, insert it
    if ($stmt->rowCount() === 0) {
        $insertExistingSeasonFolders = "INSERT INTO seasons (fName) VALUES (:folderName)";
        $stmt = $pdoDBConnexion->prepare($insertExistingSeasonFolders);
        $stmt->execute(['folderName' => $folderName]);

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
            $insertExistingDayFolders = "INSERT INTO `days` (`day`) VALUES (:dayfolderName)";
            $stmt = $pdoDBConnexion->prepare($insertExistingDayFolders);
            $stmt->execute(['dayfolderName' => $dayfolderName]);
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
     //set directory to get sub directories from
    $exosPath = "../$currentSeasonFolder/$currentDayFolder";

    // get all directories in my days folders 
    $exoFolders = getSubdirectories($exosPath);

    // for each folders from days directories, if it doesnt exist add it, else do nothing
    foreach ($exoFolders as $exoFolder) {
        $exofolderName = basename($exoFolder);
        // d($exofolderName);

        // Check if the day folder exists in the database
        $checkExistingExos = "SELECT exercise_name FROM exercices WHERE exercise_name = :exofolderName";
        $stmt = $pdoDBConnexion->prepare($checkExistingExos);
        $stmt->execute(['exofolderName' => $exofolderName]);

        // If the folder doesn't exist in the database, insert it
        if ($stmt->rowCount() === 0) {
            // If the folder doesn't exist in the database, insert it
            $insertExistingExoFolders = "INSERT INTO exercices (exercise_name) VALUES (:exofolderName)";
            $stmt = $pdoDBConnexion->prepare($insertExistingExoFolders);
            $stmt->execute(['exofolderName' => $exofolderName]);
            // d($stmt);
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
/* get seasons, days and exercices table */
// ===========================================================

// get all the objects in seasons database 
$selectSeasonsQuery = "SELECT * FROM seasons";
$stmt = $pdoDBConnexion->query($selectSeasonsQuery);

// Fetch all the rows from the query result
//! this is the seasons database , unse d($seasons) to see what it hass in it.
$seasons = $stmt->fetchAll(PDO::FETCH_ASSOC);

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
