<!-- to display this page the there are info in 'index.php', Days.php -->

<div class="container">
    <div class="row">
        <div class="col-lg-8 col-md-12">
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
            <nav aria-label="Pagination">

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