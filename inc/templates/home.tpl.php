<?php
foreach ($seasonFolders as $seasonFolder) {
    $folderName = basename($seasonFolder);
    if (preg_match('/^S\d+$/', $folderName)) {    ?>
        <div class="card mb-4">
            <div class="card-header"><a href="index.php?page=season&seasonid=<?= $folderName ?>"><?= $folderName ?></a></div>
            <div class="card-body">Client </div>
            <div></div>
        </div>
    <?php }
} ?>