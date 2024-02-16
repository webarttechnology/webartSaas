<?php
include 'common/header.php'
?>
<section class="login">
    <div class="container">
        <div class="row justify-content-center align-items-center">
            <div class="col-12">
                <div class="loginWrpper d-flex flex-wrap align-items-center">
                    <div class="box bg_dark">
                        <h2>Login</h2>
                        <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium.</p>
                        <div class="formWrap">
                            <form action="<?= url('dw-admin/admin-login-action') ?>" method="POST" class="save-submit">
                                <?= csrf_field() ?>
                                <div class="form-floating mb-3">
                                    <input type="text" class="form-control" id="float_user" name="user" placeholder="">
                                    <label for="float_user">User Name</label>
                                    <span class="text-danger mt-1 d-block error-user"></span>
                                </div>
                                <div class="form-floating mb-3">
                                    <input type="password" class="form-control" id="float_password" name="password" placeholder="">
                                    <label for="float_password">Password</label>
                                    <span class="text-danger mt-1 d-block error-password"></span>
                                </div>
                                <div class="d-flex justify-content-between mb-2">
                                    <div class="form-check form-check-inline">
                                        <input type="checkbox" class="form-check-input" id="check2" name="option2" value="something">
                                        <label class="form-check-label" for="check2">Remember me</label>
                                    </div>
                                    <small><a href="#" class="text-danger">Forgot Password?</a></small>
                                </div>
                                <button type="submit" class="btn btn-primary login-btn">Login</button>
                                <!-- <a href="<?= url('/dw-admin/dashboard') ?>" class="btn btn-primary">Login</a> -->
                            </form>
                        </div>
                    </div>
                    <div class="box text-center">
                        <span class="logo"><a href="#"><img src="<?php echo url('user/images/logo.png') ?>" alt="" class="img-fluid mb-3"></a></span>
                        <h3 class="mb-3">Welcome Back</h3>
                        <img src="<?php echo url('user/images/login.jpg')  ?>" alt="" class="img-fluid">
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<?php
include 'common/footer.php'
?>