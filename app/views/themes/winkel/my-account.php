<?php include 'header.php';?>
    <!-- END nav -->

    <div class="hero-wrap hero-bread" style="background-image: url('<?= url('themes/'. $themeInfo->value)?>/images/bg_6.jpg');">
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
                           
                            <div class="form-group">
                            <input type="submit" value="Login" class="btn btn-primary py-3 px-5">
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
                        <form action="#" class="">
                            <div class="form-group">
                            <label for="">Email Address</label>  
                            <input type="text" class="form-control" placeholder="">
                            </div>
                            <p>Your personal data will be used to support your experience throughout this website, to manage your account, and for other purposes described in our <a href="#">privacy policy.</a></p>
                           
                            <div class="form-group">
                            <input type="submit" value="Register" class="btn btn-primary py-3 px-5">
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <?php include 'footer.php';?>