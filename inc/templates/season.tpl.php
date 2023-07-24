<?php
// ===========================================================
// display all day folders from designated season
// ===========================================================

//! check "get seasons, days and exercices table" in data_form_db.php for info on $days
//for each day in the days table 
 foreach ($days as $day) { ?>
    <div class="card mb-4">
        <div class="card-header"><a href="index.php?page=day&season_id=<?=$season_id ?>&day_id=<?= $day['day'] ?>"><?= $day['day'] ?></a></div>
        <div class="card-body">Client </div>
        <div></div>
    </div>
<?php } ?>