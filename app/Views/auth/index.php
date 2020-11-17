<!doctype html>
<html lang="en" id="home">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="/css/style.css">

    <title>P A N D E M I C</title>
</head>

<body>


    <nav class="navbar fixed-top navbar-expand-lg navbar-dark bg-dark">
        <div class="container">
            <a class="navbar-brand" href="#home">P A N D E M I C</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavDropdown">
                <ul class="navbar-nav ml-auto">

                    <li class="nav-item">
                        <a class="nav-link" href="<?php echo base_url('auth/admin'); ?>">admin</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#contact">Contact</a>
                    </li>

                    <?php if (session()->has('logged_in') and session()->get('logged_in') == true) : ?>
                        <li class="nav-item">
                            <a class="nav-link" href="<?= site_url('auth/logout') ?>">Logout</a>
                        </li>
                    <?php else : ?>
                        <li class="nav-item">
                            <a class="nav-link" href="<?= site_url('auth/login') ?>">Logout</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="<?= site_url('auth/register') ?>">Register</a>
                        </li>

                    <?php endif; ?>


                </ul>
            </div>
        </div>
    </nav>


    <div class="jumbotron jumbotron-fluid">
        <div class="container text-center">
            <img src="/img/pandi.png" width="300">
            <h1 class="display-4">Pandi Barep Arianza</h1>
            <p class="lead">Selamat Datang Di Website P A N D E M I C</p>
        </div>
    </div>


    <!-- awal konten -->

    <div class="container">
        <div class="row">
            <div class="class col-md-3 mb-2">
                <div class="card" style="width: 18rem;">
                    <img class="card-img-top" src="/assets/dist/img/card3.jpeg" alt="Card image cap">
                    <div class="card-body">
                        <h5 class="card-title text-info text-center">Pandi</h5>
                        <p class="card-text">Ilmu Komputer Universitas Lampung</p>
                    </div>
                </div>
            </div>
            <div class="class col-md-3 mb-2">
                <div class="card" style="width: 18rem;">
                    <img class="card-img-top" src="/assets/dist/img/card4.jpeg" alt="Card image cap">
                    <div class="card-body">
                        <h5 class="card-title text-info text-center">Barep</h5>
                        <p class="card-text">Ilmu Komputer Universitas Lampung</p>
                    </div>
                </div>
            </div>
            <div class="class col-md-3 mb-2">
                <div class="card" style="width: 18rem;">
                    <img class="card-img-top" src="/assets/dist/img/card5.jpeg" alt="Card image cap">
                    <div class="card-body">
                        <h5 class="card-title text-info text-center">Arianza</h5>
                        <p class="card-text">Ilmu Komputer Universitas Lampung</p>
                    </div>
                </div>
            </div>
            <div class="class col-md-3 mb-2">
                <div class="card" style="width: 18rem;">
                    <img class="card-img-top" src="/assets/dist/img/card6.jpeg" alt="Card image cap">
                    <div class="card-body">
                        <h5 class="card-title text-info text-center">Pandemic</h5>
                        <p class="card-text">Ilmu Komputer Universitas Lampung</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <nav fixed-top aria-label="Page navigation example">
        <div class="container ">
            <ul class="pagination">
                <li class="page-item"><a class="page-link" href="#">Previous</a></li>
                <li class="page-item"><a class="page-link" href="#">1</a></li>
                <li class="page-item"><a class="page-link" href="#">2</a></li>
                <li class="page-item"><a class="page-link" href="#">3</a></li>
                <li class="page-item"><a class="page-link" href="#">Next</a></li>
            </ul>
        </div>
    </nav>



    <!-- akhir konten -->
    <!--
    <div class="container col-lg-3 col-md-4 col-xs-6 thumb">
        <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators">
                <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
            </ol>
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="/assets/dist/img/card4.jpeg" class="d-block w-100" alt="images">
                </div>
                <div class="carousel-item">
                    <img src="/assets/dist/img/card5.jpeg" class="d-block w-100" alt="images">
                </div>
                <div class="carousel-item">
                    <img src="/assets/dist/img/card2.jpeg" class="d-block w-100" alt="images">
                </div>
            </div>
            <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>
    </div>
-->

    <div class="container ">
        <div class="row">
            <div class="col text-center">
                <h1> About </h1>
            </div>

            <div class="row">
                <div class="col">
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                        tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                        quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                        consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                        cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                        proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>

                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Debitis in expedita,
                        sit ab reprehenderit repellendus voluptatem, asperiores quae
                        soluta odit modi non explicabo repellat inventore ipsam ipsa sequi eius id.
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Debitis in expedita,
                        sit ab reprehenderit repellendus voluptatem, asperiores quae
                        soluta odit modi non explicabo repellat inventore ipsam ipsa sequi eius id.</p>
                </div>
                <div class="col">
                    <img src="/img/img1.jpg" width="400">
                </div>
            </div>
        </div>
    </div>



    <section class="contact" id="contact">
        <div class="container">
            <div class="row">
                <div class="col-sm-12 text-center">
                    <h2>Contact</h2>

                </div>

            </div>
            <div class="row">
                <div class="col-sm-8 col-sm-offset-2">
                    <form>
                        <div class="form-group">
                            <label for="nama">Nama</label>
                            <input type="text" id="nama" class="form-control" placeholder="masukkan nama ">
                        </div>
                        <div class="form-group">
                            <label for="email">Email</label>
                            <input type="email" id="email" class="form-control" placeholder="masukkan email ">
                        </div>
                        <div class="form-group">
                            <label for="telp">No Telp</label>
                            <input type="telp" id="telp" class="form-control" placeholder="masukkan no telepon ">
                        </div>

                        <div class="formgroup">
                            <label for="pesan">Pesan </label>
                            <textarea class="form-control" rows="10" placeholder="masukkan pesan"></textarea>
                        </div>
                        <button type="submit" class="btn btn-primary ">Kirim Pesan</button>
                    </form>
                </div>
            </div>
        </div>
    </section>

    <footer>
        <div class="container text-center">
            <div class="row">
                <div class="col-sm-12">
                    <p>&copy; copyright 2020 | by : <a href="https://www.instagram.com/pandi_arianza12/">Pandi Arianza</a>.</p>
                </div>

            </div>
        </div>
    </footer>
































    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>

    <script src="/js/script.js"></script>
</body>

</html>