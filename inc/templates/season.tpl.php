<?php
foreach ($dayFolders as $dayFolder) {
    if (isset($_GET['seasonid']) && $_GET['seasonid'] !== '') {
        $seasonid = $_GET['seasonid'];
    }
    $dayFolderName = basename($dayFolder); ?>

    <div class="card mb-4">
        <div class="card-header"><a href="index.php?page=day&seasonid=<?= $seasonid ?>&dayid=<?= $dayFolderName ?>"><?= $dayFolderName ?></a></div>
        <div class="card-body">Client </div>
        <div></div>
    </div>
<?php } ?>