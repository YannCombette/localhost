<a class="navbar-brand" href="index.php">My Work/<?= $season->getSeason() ?></a>
<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
</button>
</div>
</nav>

<?php
// var_dump($daysList);






$dayirectory = '../' . $season->getSeason(); // The current directory (you can change it to a specific path if needed)
$dayfolders = array_diff(scandir($dayirectory), array('..', '.')); // Get all items in the directory, excluding the parent and current directory entries
// var_dump($season->getSeason());
$daysList = [];
// var_dump($daysList);
$currentDay = new Days();
$daysList[] = $currentDay;

foreach ($dayfolders as $dayFolder) {
    // echo $dayFolders;
    if (preg_match('/^day\s\d+/', $dayFolder)) {
        $currentDay = new Days($dayFolder);
        $daysList[] = $currentDay;
    }
}

// var_dump($season->getSeason());

?>



<div class="container-fluid text-center p-4">
    <h1>Season <?= $season->getSeason() ?></h1>
</div>
<div class="container-fluid text-center pb-4">
    <h3>Days</h3>
</div>

<div class="container">
    <div class="row">
        <div class="col-lg-8 col-md-12">
            <?php
            foreach ($daysList as $currentId => $currentDay) {
                // echo $dayirectory;

                if ($currentId >= 1) {
            ?>
                    <div class="card mb-4">
                        <div class="card-header"><a href="index.php?page=day&id=<?= $currentId ?>"><?= $currentDay->getDay() ?></a></div>
                        <div class="card-body">Client </div>
                        <div></div>
                    </div>
            <?php
                }
            }
            ?>

        </div>