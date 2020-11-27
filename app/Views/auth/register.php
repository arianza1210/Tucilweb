<title>PANZZ_STORE REGISTER</title>
<link rel="stylesheet" href="/css/login.css">

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
                    <span class="dark-color d-inline-block line-height-2">Sudah punya akun? <a href="/auth/login">Login</a></span>
                </form>
            </div>
        </div>
    </div>
</div>