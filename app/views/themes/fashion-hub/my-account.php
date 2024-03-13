<?php include("header.php") ?>

<section class="page-add">
    <div class="container">
        <div class="row">
            <div class="col-lg-4">
                <div class="page-breadcrumb">
                    <h2>My Account<span>.</span></h2>
                    <a href="#">Home</a>
                    <a href="#">Pages</a>
                    <a class="active" href="#">My Account</a>
                </div>
            </div>
            <div class="col-lg-8">
                <img src="<?= url('themes/' . $themeInfo->value) ?>/img/add.jpg" alt="">
            </div>
        </div>
    </div>
</section>
<section class="ftco-section ftco-no-pb ftco-no-pt bg-light account">
    <div class="container">
        <div class="row no-gutters">
            <div class="col-md-6 py-5 wrap-about pb-md-5">
                <div class="bg-white p-5 contact-form addeffect">
                    <h2>Login</h2>
                    <hr>
                    <p>Welcome back! Sign in to your account.</p>
                    <form action="<?= url('/register-account') ?>" method="POST" class="register">
                        <?= csrf_field() ?>
                        <input type="hidden" name="type" data-type="signin" value="signin">
                        <div class="form-group">
                            <label for="">Email Address</label>
                            <input type="text" class="form-control" id="signinemail" name="email" placeholder="Email Address">
                            <span class="text-danger mt-1 d-block error-signinemail"></span>
                        </div>
                        <div class="form-group d-none signinotp">
                            <label for="">OTP</label>
                            <input type="text" class="form-control" name="signinotp" id="signinotp" placeholder="Enter otp">
                            <span class="text-danger mt-1 d-block error-signinotp"></span>
                        </div>
                        <div class="form-check form-check-inline mb-3">
                            <label class="form-check-label">
                                <input type="checkbox" class="form-check-input" value="">Remember me
                            </label>
                        </div>
                        <!-- <span class="float-right"><a href="#">Lost your password?</a></span> -->

                        <div class="col-lg-12 text-right">
                        <button class="btn hvr-hover loginbtn" id="submit" type="submit">Send OTP</button>
                        </div>
                    </form>
                </div>
            </div>
            <div class="col-md-6 py-5 wrap-about pb-md-5">
                <div class="bg-white p-5 contact-form">
                    <h2>Register
                    </h2>
                    <hr>
                    <p>Create new account today to reap the benefits of a personalized shopping experience.
                    </p>
                    <form action="<?= url('/register-account') ?>" method="POST" class="from-text register" enctype="multipart/form-data">
                        <?= csrf_field() ?>
                        <div class="form-group">
                            <label for="">Email Address</label>
                            <input type="text" class="form-control" name="email" id="email" placeholder="Enter Email Address">
                            <span class="text-danger mt-1 d-block error-email"></span>
                        </div>

                        <div class="form-group d-none otp">
                            <label for="">OTP</label>
                            <input type="text" class="form-control" name="otp" id="otp" placeholder="Enter otp">
                            <span class="text-danger mt-1 d-block error-otp"></span>
                        </div>
                        <p>Your personal data will be used to support your experience throughout this website, to manage your account, and for other purposes described in our <a href="#">privacy policy.</a></p>

                        <div class="col-lg-12 text-right">
                            <button class="btn hvr-hover registerbtn" id="submit" type="submit">Send OTP</button>
                            <button class="btn hvr-hover d-none resendbtn" type="btn">Resend OTP</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>
<?php include("footer.php") ?>