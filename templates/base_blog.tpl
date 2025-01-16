<nav class="navbar navbar-expand-lg bg-light" data-bs-theme="light">
    <div class="container-fluid">

        <a class="navbar-brand" href="index_blog.php">MON Blog</a>

        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarColor03"
            aria-controls="navbarColor03" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarColor03">
            <ul class="navbar-nav me-auto">
                <li class="nav-item">
                    <a class="nav-link" href="show.php">Nouveau Billet</a>
                </li>
                <li class="nav-item">
                <a class="nav-link" href="#">Photos</a>
            </li>
            </ul>
                <form class="d-flex" action="index_blog.php" method="get">
                <input class="form-control me-sm-2" type="search" placeholder="Chercher pur titre" name="title">
                <button class="btn btn-secondary my-2 my-sm-0" type="submit">Chercher</button>
            </form>
        </div>
    </div>
</nav>