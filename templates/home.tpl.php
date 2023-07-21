<a class="navbar-brand" href="index.php">My Work/</a>
<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
</button>
</div>
</nav>

<div class="container-fluid text-center p-4">
    <h1>My Work</h1>
</div>
<div class="container-fluid text-center pb-4">
    <h3>Saisons</h3>
</div>

<div class="container">
    <div class="row">
        <div class="col-lg-8 col-md-12">
            <!-- emmet : (div.card>div.card-header>lorem5^div.card-body>lorem40^div)*4 -->

            <!-- https://getbootstrap.com/docs/5.0/components/card/ -->

            <?php

            // $directory = '..';
            // $folders = array_diff(scandir($directory), array('..', '.'));


            // $seasonsList = [];
            // // var_dump($seasonsList);

            // foreach ($folders as $folder) {
            //     if (preg_match('/^S\d+/', $folder)) {
            //         $seasonObject = new Seasons($folder); 
            //         $seasonsList[] = $seasonObject; 
            //     }
            // }
            // var_dump($seasonsList);

            foreach ($seasonsList as $currentId => $currentSeason) {
                if ($currentId >= 1) {
            ?>
                    <div class="card mb-4">
                        <div class="card-header"><a href="index.php?page=season&id=<?= $currentId ?>"><?= $currentSeason->getSeason() ?></a></div>
                        <div class="card-body">Client </div>
                        <div></div>
                    </div>
            <?php
                }
            }
            ?>



            <!-- https://getbootstrap.com/docs/5.1/components/pagination/ -->
            <nav aria-label="Pagination">

                <!-- https://getbootstrap.com/docs/5.1/utilities/flex/ -->
                <ul class="pagination d-flex justify-content-between">
                    <li class="page-item ">
                        <a class="page-link" href="#">Précédent</a>
                    </li>
                    <li class="page-item">
                        <a class="page-link" href="#">Suivant</a>
                    </li>
                </ul>
            </nav>
        </div>