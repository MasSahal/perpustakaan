<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="<?= base_url() ?>/assets/bootstrap/css/bootstrap.css">

    <title>Perpustakaan</title>
</head>

<body class="bg-secondary">
    <!-- Navbar -->


    <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
        <div class="container">
            <a class="navbar-brand" href="#">Perpus~</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarColor01" aria-controls="navbarColor01" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarColor01">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item active">
                        <a class="nav-link" href="<?= base_url() ?>">Home
                            <span class="sr-only">(current)</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="<?= base_url() ?>/buku">Buku</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="<?= base_url() ?>/about">About</a>
                    </li>
                </ul>
                <form class="form-inline my-2 my-lg-0">
                    <input class="form-control mr-sm-2" type="text" placeholder="Search">
                    <button class="btn btn-secondary my-2 my-sm-0" type="submit">Search</button>
                </form>
            </div>
        </div>
    </nav>
    <!-- end of navbar -->

    <div class="container">
        <?php $this->renderSection('konten') ?>
    </div>

    <!-- Option 2: jQuery, Popper.js, and Bootstrap JS -->
    <script src="<?= base_url() ?>/assets/jquery/jquery-3.5.1.min.js"></script>
    <script src="<?= base_url() ?>/assets/popper/popper.js"></script>
    <script src="<?= base_url() ?>/assets/bootstrap/js/bootstrap.min.js"></script>

</body>

</html>