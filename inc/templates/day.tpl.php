<?php 
// ===========================================================
// display all exo folders from designated day
// ===========================================================

//! check "get seasons, days and exercices table" in data_form_db.php for info on $exos
//for each eco in the exercises table 
foreach ($exos as $exo) {
    $exoFolderName = basename($exoFolder); ?>
    <div class="card mb-4">
        <div class="card-header"><a href="<?= $exoFolder ?>"><?= $exo['exercise_name'] ?></a></div>
        <div class="card-body">Client </div>
        <div></div>
    </div>
<?php } ?>