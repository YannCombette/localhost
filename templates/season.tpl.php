
<?php 

include '../classes/Seasons.php';

$directory = '../../'; 
$folders = array_diff(scandir($directory), array('..', '.')); 
$seasonsList = []; 
// var_dump($seasonsList);

foreach ($folders as $folder) {
    if (preg_match('/^S\d+/', $folder)) {
        $seasonObject = new Seasons($folder); // Create a Seasons object with the folder name as the season
        $seasonsList[] = $seasonObject; // Add the Seasons object to the list
    }
}
var_dump($seasonsList);

// Now, $seasonsList contains a list of Seasons objects with their 'season' property set to the folder names.
// You can access each 'season' value like this:
foreach ($seasonsList as $seasonObject) {
    echo $seasonObject->getSeason() . '<br>';
}


?>




<!-- 
<h1>season : <?= $article->getTitle() ?></h1>

<div class="card mb-4">
    <div class="card-header"><?= $article->getSeason() ?></div>
    <div class="card-body"><?= $article->getContent() ?></div>
     <div></div>
</div>


 -->
