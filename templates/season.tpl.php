
<a class="navbar-brand" href="index.php">My Work/<?=$season->getSeason()?></a>
<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
</button>
</div>
</nav>

<?php
foreach ($daysList as $currentId => $currentDay) {
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















<div class="container-fluid text-center p-4">
    <h1>Season <?=$season->getSeason()?></h1>
</div>
<div class="container-fluid text-center pb-4">
    <h3>Days</h3>
</div>

<div class="container">
    <div class="row">
        <div class="col-lg-8 col-md-12">
<h1>season : <?= $season->getSeason() ?></h1>

<div class="card mb-4">
    <div class="card-header "><?= $season->getSeason() ?></div>
    <div class="card-body"></div>
     <div></div>
</div>



</div>