<link rel="stylesheet" type="text/css" href="/css/produk.css">

<title>Produk PANZZ STORE</title>


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
        <div class="produk1">
            <p>PANZZ STORE</p>
            <p>ADIDAS&#8217;SPORTS YELLOW</p>
            <p>Ukuran : 40' <br>Harga : Rp. 650 K</p>
            <button class="hire-btn">cek barang</button>
        </div>
        <img alt="model1" class="model1" src="/img/sepatu1.png">
    </div>
</section>
<section>
    <div class="bg2">
        <div class="produk1">
            <p>PANZZ STORE</p>
            <p>ADIDAS&#8217;BLACk CLASSIC</p>
            <p>Ukuran : 42' <br>Harga : Rp. 500 K</p>
            <button class="hire-btn">cek barang</button>
        </div>
        <img alt="model1" class="model1" src="/img/SEPATU ADIDAS 1.png">
    </div>
</section>
<section>
    <div class="bg1">
        <div class="produk1">
            <p>PANZZ STORE</p>
            <p>ADIDAS&#8217;STREIFEN METAL</p>
            <p>Ukuran : 36' <br>Harga : 350 K</p>
            <button class="hire-btn">cek barang</button>
        </div>
        <img alt="model1" class="model1" src="/img/by3014_prftwstbbg_fi.png">
    </div>
</section>