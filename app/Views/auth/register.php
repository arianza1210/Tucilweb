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
                                <a class="nav-link" href="<?= site_url('auth/logout') ?>">Login</a>
                            </li>
                        <?php else : ?>
                            <li class="nav-item">
                                <a class="nav-link" href="<?= site_url('auth/login') ?>">Login</a>
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
                        <h3>REGISTRATION FORM</h3>
                    </center>
                    <?php $validation  = session()->getFlashdata('validation'); ?>
                    <form action="<?= current_url() ?> " method='POST'>
                        <div class="form-group">
                            <label for="">First Name </label>
                            <input value="<?= old('first_name') ?>" type="text" name="first_name" id="first_name" class="form-control <?= $validation && $validation->hasError('first_name') ? ' is-invalid' : '' ?>">
                            <?php if ($validation && $validation->hasError('first_name')) : ?>
                                <div class="invalid-feedback">
                                    <?= $validation->getError('first_name'); ?>
                                </div>
                            <?php endif; ?>
                        </div>
                        <div class="form-group">
                            <label for="">Last Name </label>
                            <input value="<?= old('last_name') ?>" type="text" name="last_name" id="last_name" class="form-control<?= $validation && $validation->hasError('last_name') ? ' is-invalid' : '' ?>">
                            <?php if ($validation && $validation->hasError('last_name')) : ?>
                                <div class="invalid-feedback">
                                    <?= $validation->getError('last_name'); ?>
                                </div>
                            <?php endif; ?>
                        </div>
                        <div class="form-group">
                            <label for="">E-Mail </label>
                            <input value="<?= old('email') ?>" type="email" name="email" id="email" class="form-control<?= $validation && $validation->hasError('email') ? ' is-invalid' : '' ?>">
                            <?php if ($validation && $validation->hasError('email')) : ?>
                                <div class="invalid-feedback">
                                    <?= $validation->getError('email'); ?>
                                </div>
                            <?php endif; ?>
                        </div>
                        <div class="form-group">
                            <label for="">UserName </label>
                            <input value="<?= old('username') ?>" type="text" name="username" id="username" class="form-control<?= $validation && $validation->hasError('username') ? ' is-invalid' : '' ?>">
                            <?php if ($validation && $validation->hasError('username')) : ?>
                                <div class="invalid-feedback">
                                    <?= $validation->getError('username'); ?>
                                </div>
                            <?php endif; ?>
                        </div>
                        <div class="form-group">
                            <label for="">Password </label>
                            <input value="<?= old('password') ?>" type="password" name="password" id="password" class="form-control<?= $validation && $validation->hasError('password') ? ' is-invalid' : '' ?>">
                            <?php if ($validation && $validation->hasError('password')) : ?>
                                <div class="invalid-feedback">
                                    <?= $validation->getError('password'); ?>
                                </div>
                            <?php endif; ?>
                        </div>
                        <div class="form-group">
                            <label for="">Confirm Password </label>
                            <input value="<?= old('cpassword') ?>" type="password" name="cpassword" id="cpassword" class="form-control<?= $validation && $validation->hasError('cpassword') ? ' is-invalid' : '' ?>">
                            <?php if ($validation && $validation->hasError('cpassword')) : ?>
                                <div class="invalid-feedback">
                                    <?= $validation->getError('cpassword'); ?>
                                </div>
                            <?php endif; ?>
                        </div>
                        <button href="<?= site_url('auth/login') ?>" class="btn btn-success btn-block">SIGN UP</button>
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