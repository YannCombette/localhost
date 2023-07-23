<?php 
foreach ($exosFolders as $exoFolder) {
    $exoFolderName = basename($exoFolder); ?>
    <div class="card mb-4">
        <div class="card-header"><a href="index.php?page=season&seasonid=<?= $folderName ?>"><?= $exoFolderName ?></a></div>
        <div class="card-body">Client </div>
        <div></div>
    </div>
<?php } ?>