<link rel="stylesheet" type="text/css" href="/css/about.css">

<title>About PANZZ STORE</title>


<nav class="navbar fixed-top navbar-expand-lg navbar-light bg-light">
    <div class="container">
        <a class="navbar-brand" href="/auth/index">PANZZ STORE</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavDropdown">
            <ul class="navbar-nav ml-auto">

                <li class="nav-item">
                    <a class="nav-link" href="<?php echo base_url('auth/admin'); ?>">admin</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/auth/about">About</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/auth/produk">Produk</a>
                </li>

                <?php if (session()->has('logged_in') and session()->get('logged_in') == true) : ?>
                    <li class="nav-item">
                        <a class="nav-link" href="<?= site_url('auth/logout') ?>">Logout</a>
                    </li>
                <?php else : ?>
                    <li class="nav-item">
                        <a class="nav-link" href="<?= site_url('auth/login') ?>">Logout</a>
                    </li>
                <?php endif; ?>


            </ul>
        </div>
    </div>
</nav>
<section>
    <div class="bg1">
        <div class="about">
            <p>1817051002</p>
            <p>I&#8217;M PANDI BAREP A</p>
            <p>WEB Designer <br>& Devolper</p>

        </div>
        <img alt="model1" class="model1" src="/img/img1.png">
    </div>
</section>