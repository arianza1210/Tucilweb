<link rel="stylesheet" type="text/css" href="/css/style.css">

<title>PANZZ STORE</title>


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
                    <a class="nav-link" href="<?php echo base_url('auth/about'); ?>">About</a>
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


<div class="jumbotron jumbotron-fluid">
    <div class="container text-center">
        <img src="/img/bg-12.jpg" width="300">
        <h1 class="display-4">PANZZ STORE</h1>
        <p class="lead">Selamat Datang Di Website PANZZ STORE</p>
    </div>
</div>


<section>
    <div class="detailproduk-container">
        <!--img-->
        <img src="/img/sepatu1.png">
        <!--about-me-text-->
        <div class="detailproduk-text">
            <p>Detail Produk</p>
            <p>Sepatu Sports</p>
            <p>Hello,Costumers. Temukan sepatu sports Menarik dan Nikmati Pengalaman Belanja bersama Kami.</p>
            <p>Silakan kunjungi halaman Produk atau klik cek produk di bawah ini :) </p>
            <a class="btn btn-dark text-white " href="/auth/produk">Cek Produk</a>

        </div>
    </div>
</section>


<section id="testimony">
    <div class="container bg-light">
        <h2 class="title">Testimoni</h2>
        <h4 class="font-light">Pelanggan<span class="font-bold"> PANZZ STORE</span></h4>
    </div>
    <div class="container">
        <div class="row bg-light">
            <div id="testimonySlider" class="carousel slide" data-ride="carousel">
                <ol class="carousel-indicators">
                    <li data-target="#testimonySlider" data-slide-to="0" class="active"></li>
                    <li data-target="#testimonySlider" data-slide-to="1"></li>
                </ol>
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="testimonial-block">
                                    <div class="author-details">
                                        <center>
                                            <img src="/img/asbiq.jpg" alt="" width="20%">
                                        </center>
                                        <h4>Asbiq Al Alawi</h4>
                                        <span>Mahasiswa</span>
                                    </div>
                                    <div class="quotes">
                                        <h3>"</h3>
                                        <p>
                                            Kemarin dikasih tau sama saudara kalo ada tempat jual sepatu yang lengkap dan murah. Dan ternyata bener aja, setelah gua coba liat websitenya gua langsung nemu sepatu yang cocok buat gua. Disitu lengkap banget pilihannya, mungkin next gua bakal beli lagi di Panzz Store ini.
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="testimonial-block">
                                    <div class="author-details">
                                        <center>
                                            <img src="/img/asbiq.jpg" alt="" width="20%">
                                        </center>
                                        <h4>Asbiq Al Alawi</h4>
                                        <span>Mahasiswa</span>
                                    </div>
                                    <div class="quotes">
                                        <h3>"</h3>
                                        <p>
                                            Kemarin dikasih tau sama saudara kalo ada tempat jual sepatu yang lengkap dan murah. Dan ternyata bener aja, setelah gua coba liat websitenya gua langsung nemu sepatu yang cocok buat gua. Disitu lengkap banget pilihannya, mungkin next gua bakal beli lagi di Panzz Store ini.
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="testimonial-block">
                                    <div class="author-details">
                                        <center>
                                            <img src="/img/asbiq.jpg" alt="" width="20%">
                                        </center>
                                        <h4>Asbiq Al Alawi</h4>
                                        <span>Mahasiswa</span>
                                    </div>
                                    <div class="quotes">
                                        <h3>"</h3>
                                        <p>
                                            Kemarin dikasih tau sama saudara kalo ada tempat jual sepatu yang lengkap dan murah. Dan ternyata bener aja, setelah gua coba liat websitenya gua langsung nemu sepatu yang cocok buat gua. Disitu lengkap banget pilihannya, mungkin next gua bakal beli lagi di Panzz Store ini.
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="testimonial-block">
                                    <div class="author-details">
                                        <center>
                                            <img src="/img/asbiq.jpg" alt="" width="20%">
                                        </center>
                                        <h4>Asbiq Al Alawi</h4>
                                        <span>Mahasiswa</span>
                                    </div>
                                    <div class="quotes">
                                        <h3>"</h3>
                                        <p>
                                            Kemarin dikasih tau sama saudara kalo ada tempat jual sepatu yang lengkap dan murah. Dan ternyata bener aja, setelah gua coba liat websitenya gua langsung nemu sepatu yang cocok buat gua. Disitu lengkap banget pilihannya, mungkin next gua bakal beli lagi di Panzz Store ini.
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
</section>