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
                    <img src="<?= url('themes/'. $themeInfo->value)?>/img/add.jpg" alt="">
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
                        <form action="#" class="">
                            <div class="form-group">
                            <label for="">Username Or Email Address</label>  
                            <input type="text" class="form-control" placeholder="">
                            </div>
                            <div class="form-group">
                            <label for="">Password</label>  
                            <input type="password" class="form-control" placeholder="">
                            </div>
                            <div class="form-check form-check-inline mb-3">
                                <label class="form-check-label">
                                  <input type="checkbox" class="form-check-input" value="">Remember me
                                </label>
                            </div>
                            <span class="float-right"><a href="#">Lost your password?</a></span>
                           
                            <div class="col-lg-12 text-right">
                                <button type="submit">Login</button>
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
                        <form action="#" class="from-text">
                            <div class="form-group">
                            <label for="">Email Address</label>  
                            <input type="text" class="form-control" placeholder="">
                            </div>
                            <p>Your personal data will be used to support your experience throughout this website, to manage your account, and for other purposes described in our <a href="#">privacy policy.</a></p>
                           
                            <div class="col-lg-12 text-right">
                                <button type="submit">Register</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>














    <?php include("footer.php") ?>