<?php include 'header.php'; ?>

<!-- Start All Title Box -->
<div class="all-title-box">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <h2>My Account</h2>
                <ul class="breadcrumb">
                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                    <li class="breadcrumb-item active">Login-Register</li>
                </ul>
            </div>
        </div>
    </div>
</div>
<!-- End All Title Box -->

<!-- Start My Account -->
<div class="my-account-box-main">
    <div class="container">
        <div class="my-account-page row no-gutters">
            <div class="col-md-6 wrap-about">
                <div class="p-5 contact-form addeffect">
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
                            <input type="text" class="form-control" name="signinotp" id="signinotp" placeholder="Enter otp" maxlength="4" minlength="4">
                            <span class="text-danger mt-1 d-block error-signinotp"></span>
                        </div>
                        <div class="form-check form-check-inline mb-3">
                            <label class="form-check-label">
                                <input type="checkbox" class="form-check-input" value="">Remember me
                            </label>
                        </div>
                        <span class="float-right"><a href="#">Lost your password?</a></span>

                        <div class="submit-button">
                            <button class="btn hvr-hover loginbtn" id="submit" type="submit">Send OTP</button>
                        </div>
                    </form>
                </div>
            </div>
            <div class="col-md-6 wrap-about">
                <div class="p-5 contact-form">
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
                            <input type="text" class="form-control" name="otp" id="otp" placeholder="Enter otp" maxlength="4" minlength="4"> <span class="otp-timer"></span>
                            <span class="text-danger mt-1 d-block error-otp"></span>
                        </div>
                        <p>Your personal data will be used to support your experience throughout this website, to manage your account, and for other purposes described in our <a href="#">privacy policy.</a></p>

                        <div class="submit-button mt-3">
                            <button class="btn hvr-hover registerbtn" id="submit" type="submit">Send OTP</button>
                            <button class="btn hvr-hover d-none resendbtn" type="btn">Resend OTP</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- End My Account -->

<!-- Start Instagram Feed -->
<div class="instagram-box">
    <div class="main-instagram owl-carousel owl-theme">
        <div class="item">
            <div class="ins-inner-box">
                <img src="<?= url('themes/' . $themeInfo->value) ?>/images/instagram-img-01.jpg" alt="" />
                <div class="hov-in">
                    <a href="#"><i class="fab fa-instagram"></i></a>
                </div>
            </div>
        </div>
        <div class="item">
            <div class="ins-inner-box">
                <img src="<?= url('themes/' . $themeInfo->value) ?>/images/instagram-img-02.jpg" alt="" />
                <div class="hov-in">
                    <a href="#"><i class="fab fa-instagram"></i></a>
                </div>
            </div>
        </div>
        <div class="item">
            <div class="ins-inner-box">
                <img src="<?= url('themes/' . $themeInfo->value) ?>/images/instagram-img-03.jpg" alt="" />
                <div class="hov-in">
                    <a href="#"><i class="fab fa-instagram"></i></a>
                </div>
            </div>
        </div>
        <div class="item">
            <div class="ins-inner-box">
                <img src="<?= url('themes/' . $themeInfo->value) ?>/images/instagram-img-04.jpg" alt="" />
                <div class="hov-in">
                    <a href="#"><i class="fab fa-instagram"></i></a>
                </div>
            </div>
        </div>
        <div class="item">
            <div class="ins-inner-box">
                <img src="<?= url('themes/' . $themeInfo->value) ?>/images/instagram-img-05.jpg" alt="" />
                <div class="hov-in">
                    <a href="#"><i class="fab fa-instagram"></i></a>
                </div>
            </div>
        </div>
        <div class="item">
            <div class="ins-inner-box">
                <img src="<?= url('themes/' . $themeInfo->value) ?>/images/instagram-img-06.jpg" alt="" />
                <div class="hov-in">
                    <a href="#"><i class="fab fa-instagram"></i></a>
                </div>
            </div>
        </div>
        <div class="item">
            <div class="ins-inner-box">
                <img src="<?= url('themes/' . $themeInfo->value) ?>/images/instagram-img-07.jpg" alt="" />
                <div class="hov-in">
                    <a href="#"><i class="fab fa-instagram"></i></a>
                </div>
            </div>
        </div>
        <div class="item">
            <div class="ins-inner-box">
                <img src="<?= url('themes/' . $themeInfo->value) ?>/images/instagram-img-08.jpg" alt="" />
                <div class="hov-in">
                    <a href="#"><i class="fab fa-instagram"></i></a>
                </div>
            </div>
        </div>
        <div class="item">
            <div class="ins-inner-box">
                <img src="<?= url('themes/' . $themeInfo->value) ?>/images/instagram-img-09.jpg" alt="" />
                <div class="hov-in">
                    <a href="#"><i class="fab fa-instagram"></i></a>
                </div>
            </div>
        </div>
        <div class="item">
            <div class="ins-inner-box">
                <img src="<?= url('themes/' . $themeInfo->value) ?>/images/instagram-img-05.jpg" alt="" />
                <div class="hov-in">
                    <a href="#"><i class="fab fa-instagram"></i></a>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- End Instagram Feed -->


<!-- Start Footer -->
<?php include 'footer.php'; ?>