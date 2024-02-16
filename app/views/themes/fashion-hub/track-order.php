<?php include("header.php")?>

<section class="page-add">
        <div class="container">
            <div class="row">
                <div class="col-lg-4">
                    <div class="page-breadcrumb">
                        <h2>Track Order<span>.</span></h2>
                        <a href="#">Home</a>
                        <a href="#">Pages</a>
                        <a class="active" href="#">Track Order</a>
                    </div>
                </div>
                <div class="col-lg-8">
                    <img src="<?= url('themes/'. $themeInfo->value)?>/img/add.jpg" alt="">
                </div>
            </div>
        </div>
    </section>

<!-- track -->
<section class="ftco-section ftco-no-pb ftco-no-pt bg-light account track">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8  wrap-about pb-md-5">
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
                        <div class="col-lg-12 text-right">
                            <button type="submit">Track</button>
                        </div>
                </form>
            </div>
        </div>
    </div>
</section>














<?php include("footer.php")?>