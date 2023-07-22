
<?= var_dump($day) ?>

<a class="navbar-brand" href="index.php">My Work/<?= $day->getDay() ?></a>
<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
</button>
</div>
</nav>

<?php
// var_dump($daysList);






$exoDirectory = '../' . $day->getDay(); // The current directory (you can change it to a specific path if needed)
$exofolders = array_diff(scandir($exoDirectory), array('..', '.')); // Get all items in the directory, excluding the parent and current directory entries
// var_dump($season->getSeason());
$exoList = [];
// var_dump($daysList);
$currentExo = new Exos();
$exoList[] = $currentExo;

foreach ($exofolders as $exofolder) {
    // echo $exofolder;
        $currentExo = new Exos($exofolder);
        $exoList[] = $currentExo;
}

// var_dump($season->getSeason());

?>



<div class="container-fluid text-center p-4">
    <h1>Day <?= $day->getDay() ?></h1>
</div>
<div class="container-fluid text-center pb-4">
    <h3>exeos</h3>
</div>

<div class="container">
    <div class="row">
        <div class="col-lg-8 col-md-12">
            <?php
            foreach ($exoList as $currentId => $currentExo) {
                // echo $dayirectory;

                if ($currentId >= 1) {
            ?>
                    <div class="card mb-4">
                        <div class="card-header"><a href="index.php?page=day&id=<?= $currentId ?>"><?= $currentExo->getExo() ?></a></div>
                        <div class="card-body">Client </div>
                        <div></div>
                    </div>
            <?php
                }
            }
            ?>

        </div>