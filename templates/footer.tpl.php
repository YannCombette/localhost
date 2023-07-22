<div class="col-lg-4 col-md-12">
    <form class="form">
        <div class="input-group mb-4">
            <label for="search" class="visually-hidden">Rechercher</label>
            <input type="text" class="form-control" id="search">
            <button type="submit" class="btn btn-primary">Rechercher</button>
        </div>
    </form>
    <div class="card mb-4">
        <div class="card-header">Catégories</div>
        <ul class="list-group list-group-flush">
            <li class="list-group-item"><a href="#">HTML</a></li>
            <li class="list-group-item "><a href="#">CSS</a></li>
            <li class="list-group-item"><a href="#">PHP</a></li>
            <li class="list-group-item"><a href="#">JS</a></li>
        </ul>
    </div>
    <div class="card mb-4">
        <div class="card-header">Auteurs</div>
        <ul class="list-group list-group-flush">
            <li class="list-group-item"><a href="#">Yann</a></li>
            <li class="list-group-item"><a href="#">Franck Boullais</a></li>
            <li class="list-group-item"><a href="#">Michaël Rolland</a></li>
            <li class="list-group-item"><a href="#">Julien Maignan</a></li>
            <li class="list-group-item"><a href="#">Henry Michineau</a></li>
        </ul>
    </div>
</div>
</div>
</div>

<div class="container-fluid">
    <!-- Je crée une nouvelle ligne dans ma grille virtuelle: https://getbootstrap.com/docs/5.0/layout/grid/
        Je déclare également que ces éléments doivent être centrés (flex): https://getbootstrap.com/docs/5.0/utilities/flex/#justify-content
        ainsi que leurs textes: https://getbootstrap.com/docs/5.0/utilities/text/ -->
    <div class="row justify-content-center text-center">
        <div class="col-6 social-networks">
            <!-- Je crée une liste: https://getbootstrap.com/docs/5.0/components/list-group/ -->
            <ul class="list-inline">
                <li class="list-inline-item"><a href="#"><i class="fs-2 bi bi-github"></i></a></li>
                <li class="list-inline-item"><a href="#"><i class="fs-2 bi bi-slack"></i></a></li>
                <li class="list-inline-item"><a href="#"><i class="fs-2 bi bi-linkedin"></i></a></li>
                <li class="list-inline-item"><a href="#"><i class="fs-2 bi bi-share"></i></a></li>
            </ul>
        </div>
    </div>

    <!-- Je crée une nouvelle ligne dans ma grille virtuelle: https://getbootstrap.com/docs/5.0/layout/grid/
        Je déclare également que ces éléments doivent être centrés (flex): https://getbootstrap.com/docs/5.0/utilities/flex/#justify-content
        ainsi que leurs textes: https://getbootstrap.com/docs/5.0/utilities/text/ -->
    <div class="row justify-content-center text-center">
        <div class="col-9 links">
            <!-- Je créé une liste: https://getbootstrap.com/docs/5.0/components/list-group/ -->
            <ul class="list-inline">
                <li class="list-inline-item"><a href="#">Me contacter</a></li>
                <li class="list-inline-item"><a href="#">Qui suige ?</a></li>
            </ul>
        </div>
    </div>
</div>


<!-- On va chercher bootstrap via leur CDN -->
<!-- Bootstrap JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>

</body>

</html>