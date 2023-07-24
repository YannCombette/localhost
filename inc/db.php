<?php

//-----------------------------------------------------
/* Connexion à la base MySQL localhost avec l'invocation de pilote */
//-----------------------------------------------------

$dsn = 'mysql:dbname=localhost;host=localhost';
$user = 'localhost';
$password = 'localhost';

$pdoDBConnexion = new PDO($dsn, $user, $password);