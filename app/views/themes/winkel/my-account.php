<?php include 'header.php'; ?>
<!-- END nav -->

<div class="hero-wrap hero-bread" style="background-image: url('<?= url('themes/' . $themeInfo->value) ?>/images/bg_6.jpg');">
    <div class="container">
        <div class="row no-gutters slider-text align-items-center justify-content-center">
            <div class="col-md-9 ftco-animate text-center">
                <p class="breadcrumbs"><span class="mr-2"><a href="index.html">Home</a></span> <span>My Account</span></p>
                <h1 class="mb-0 bread">My Account</h1>
            </div>
        </div>
    </div>
</div>

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
                        <span class="float-right"><a href="#">Lost your password?</a></span>

                        <div class="form-group">
                            <!-- <input type="submit" value="Login" class="btn btn-primary py-3 px-5"> -->
                            <button class="btn btn-primary py-3 px-5 loginbtn" id="submit" type="submit">Send OTP</button>
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
                    <form action="<?= url('/register-account') ?>" method="POST" class="register" enctype="multipart/form-data">
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

                        <div class="form-group">
                            <!-- <input type="submit" value="Register" class="btn btn-primary py-3 px-5"> -->
                            <button class="btn btn-primary py-3 px-5 registerbtn" id="submit" type="submit">Send OTP</button>
                            <button class="btn btn-primary py-3 px-5 d-none resendbtn" type="btn">Resend OTP</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>


<?php include 'footer.php'; ?>