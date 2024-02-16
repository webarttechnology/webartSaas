<?php include 'header.php';?>
    <!-- END nav -->

    <div class="hero-wrap hero-bread" style="background-image: url('<?= url('themes/'. $themeInfo->value)?>/images/bg_6.jpg');">
      <div class="container">
        <div class="row no-gutters slider-text align-items-center justify-content-center">
          <div class="col-md-9 ftco-animate text-center">
          	<p class="breadcrumbs"><span class="mr-2"><a href="index.html">Home</a></span> <span>Track your Order</span></p>
            <h1 class="mb-0 bread">Track your Order</h1>
          </div>
        </div>
      </div>
    </div>

    <section class="ftco-section ftco-no-pb ftco-no-pt bg-light account">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-8 py-5 wrap-about pb-md-5">
                    <p class="text-center">To track your order please enter your Order ID in the box below and press the "Track" button. This was given to you on your receipt and in the confirmation email you should have received.
                    </p>
                    <form action="#" class="bg-white p-5 contact-form ">
                        <div class="form-group mb-3">
                        <label for="">Order ID</label>  
                        <input type="text" class="form-control" placeholder="Found in your order confirmation email.">
                        </div>
                        <div class="form-group mb-3">
                            <label for="">Billing Email</label>  
                            <input type="email" class="form-control" placeholder="Please enter a valid email address.">
                            </div>
                        <div class="form-group">
                        <input type="submit" value="Track" class="btn btn-primary py-3 px-5">
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>


    <?php include 'footer.php';?>