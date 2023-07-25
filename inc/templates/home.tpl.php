<?php
// ===========================================================
// display all season folders in localhost 
// ===========================================================

//! check "get seasons, days and exercices table" in data_form_db.php for info on $seasons
//for each season in the seasons table 
foreach ($folders as $season){
    if (preg_match('/S\d{2}/', $season['folder_name'])) {   ?>
        <div class="card mb-4">
            <div class="card-header"><a href="index.php?page=season&season_id=<?= $season['folder_name'] ?>"><?= $season['folder_name'] ?></a></div>
            <div class="card-body">Client </div>
            <div></div>
        </div>
    <?php }
} ?>
