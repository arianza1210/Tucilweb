<link rel="stylesheet" href="/css/login.css">
<title>PANZZ_STORE LOGIN</title>
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
                        <input value="<?= old('password') ?>" type="password" name="password" id="password" class="form-control<?= $validation && $validation->hasError('password') ? ' is-invalid' : '' ?>">
                        <?php if ($validation && $validation->hasError('password')) : ?>
                            <div class="invalid-feedback">
                                <?= $validation->getError('password'); ?>
                            </div>
                        <?php endif; ?>
                    </div>
                    <button class="btn btn-success btn-block">SIGN IN</button>
                    <span class="dark-color d-inline-block line-height-2">Belum daftar? <a href="/auth/register">Daftar disini</a></span>
                </form>
            </div>
        </div>
    </div>
</div>