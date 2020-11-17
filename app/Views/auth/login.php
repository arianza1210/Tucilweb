<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-_width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <title>TUCIL-LOGIN</title>

</head>

<body style="background-image: url(/assets/dist/img/card4.jpeg); background-size: cover; ">


    <nav class="navbar fixed-top navbar-expand-lg navbar-dark bg-dark">
        <div class="container">
            <a class="navbar-brand" href="#home">P A N D E M I C</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavDropdown">
                <ul class="navbar-nav ml-auto">
                    <ul class="navbar-nav ml-auto">
                        <?php if (session()->has('logged_in') and session()->get('logged_in') == true) : ?>
                            <li class="nav-item">
                                <a class="nav-link" href="<?= site_url('auth/logout') ?>">Logout</a>
                            </li>
                        <?php else : ?>

                            <li class="nav-item">
                                <a class="nav-link" href="<?= site_url('auth/register') ?>">Register</a>
                            </li>

                        <?php endif; ?>

                    </ul>
                </ul>
            </div>
        </div>
    </nav>

    <div class="container h-100 pt-5">
        <div class="row align-itemes-center h-100 align-middle">
            <div class="col-6 mx-auto">
                <div class="jumbotron">
                    <center>
                        <h3>LOGIN FORM</h3>
                    </center>

                    <?php $validation  = session()->getFlashdata('validation'); ?>

                    <form action="<?= current_url() ?> " method='POST'>
                        <div class="form-group">
                            <label for="">Username / Email </label>
                            <input value="<?= old('username') ?>" autocomplete="off" autofocus="on" type="text" name="username" id="username" class="form-control<?= $validation && $validation->hasError('username') ? ' is-invalid' : '' ?>">
                            <?php if ($validation && $validation->hasError('username')) : ?>
                                <div class="invalid-feedback">
                                    <?= $validation->getError('username'); ?>
                                </div>
                            <?php endif; ?>
                        </div>
                        <div class="form-group">
                            <label for="">Password </label>
                            <input value="<?= old('password') ?>" type=" password" name="password" id="password" class="form-control<?= $validation && $validation->hasError('password') ? ' is-invalid' : '' ?>">
                            <?php if ($validation && $validation->hasError('password')) : ?>
                                <div class="invalid-feedback">
                                    <?= $validation->getError('password'); ?>
                                </div>
                            <?php endif; ?>
                        </div>
                        <button class="btn btn-success btn-block">SIGN IN</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>

</html>