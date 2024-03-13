<?php include 'header.php';?>

    <!-- Start All Title Box -->
    <div class="all-title-box">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <h2>Checkout</h2>
                    <ul class="breadcrumb">
                        <li class="breadcrumb-item"><a href="#">Shop</a></li>
                        <li class="breadcrumb-item active">Checkout</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!-- End All Title Box -->

    <!-- Start Cart  -->
    <div class="cart-box-main">
        <div class="container">
            <!-- <div class="row new-account-login">
                <div class="col-sm-6 col-lg-6 mb-3">
                    <div class="title-left">
                        <h3>Account Login</h3>
                    </div>
                    <h5><a data-toggle="collapse" href="#formLogin" role="button" aria-expanded="false">Click here to Login</a></h5>
                    <form class="mt-3 collapse review-form-box" id="formLogin">
                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label for="InputEmail" class="mb-0">Email Address</label>
                                <input type="email" class="form-control" id="InputEmail" placeholder="Enter Email"> </div>
                            <div class="form-group col-md-6">
                                <label for="InputPassword" class="mb-0">Password</label>
                                <input type="password" class="form-control" id="InputPassword" placeholder="Password"> </div>
                        </div>
                        <button type="submit" class="btn hvr-hover">Login</button>
                    </form>
                </div>
                <div class="col-sm-6 col-lg-6 mb-3">
                    <div class="title-left">
                        <h3>Create New Account</h3>
                    </div>
                    <h5><a data-toggle="collapse" href="#formRegister" role="button" aria-expanded="false">Click here to Register</a></h5>
                    <form class="mt-3 collapse review-form-box" id="formRegister">
                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label for="InputName" class="mb-0">First Name</label>
                                <input type="text" class="form-control" id="InputName" placeholder="First Name"> </div>
                            <div class="form-group col-md-6">
                                <label for="InputLastname" class="mb-0">Last Name</label>
                                <input type="text" class="form-control" id="InputLastname" placeholder="Last Name"> </div>
                            <div class="form-group col-md-6">
                                <label for="InputEmail1" class="mb-0">Email Address</label>
                                <input type="email" class="form-control" id="InputEmail1" placeholder="Enter Email"> </div>
                            <div class="form-group col-md-6">
                                <label for="InputPassword1" class="mb-0">Password</label>
                                <input type="password" class="form-control" id="InputPassword1" placeholder="Password"> </div>
                        </div>
                        <button type="submit" class="btn hvr-hover">Register</button>
                    </form>
                </div>
            </div> -->
            <div class="row">
                <div class="col-sm-6 col-lg-6 mb-3">
                    <div class="checkout-address">
                        <div class="title-left">
                            <h3>Billing address</h3>
                        </div>
                        <form class="needs-validation" novalidate>
                            <div class="row">
                                <div class="col-md-6 mb-3">
                                    <label for="billing_first_name">First name *</label>
                                    <input type="text" name="billing_first_name" class="form-control" id="billing_first_name" placeholder="" value="" required>
                                    <div class="invalid-feedback"> Valid first name is required. </div>
                                </div>
                                <div class="col-md-6 mb-3">
                                    <label for="billing_last_name">Last name *</label>
                                    <input type="text" name="billing_last_name" class="form-control" id="billing_last_name" placeholder="" value="" required>
                                    <div class="invalid-feedback"> Valid last name is required. </div>
                                </div>
                            </div>
                            <div class="mb-3">
                                <label for="email">Email Address *</label>
                                <input type="email" name="billing_email" class="form-control" id="billing_email" placeholder="">
                                <div class="invalid-feedback"> Please enter a valid email address for shipping updates. </div>
                            </div>
                            <div class="mb-3">
                                <label for="billing_address">Address *</label>
                                <input type="text" name="billing_address" class="form-control" id="billing_address" placeholder="" required>
                                <div class="invalid-feedback"> Please enter your shipping address. </div>
                            </div>
                            <div class="mb-3">
                                <label for="billing_address2">Address 2 *</label>
                                <input type="text" name="billing_address2" class="form-control" id="billing_address2" placeholder=""> </div>
                            <div class="row">
                                <div class="col-md-5 mb-3">
                                    <label for="billing_country">Country *</label>
                                    <select class="wide w-100"  name="billing_country"  id="billing_country" data-type="billing">
									<option value="Choose..." data-display="Select">Choose...</option>
                                    <?php  foreach($country as $item): ?>
                                        <option value="<?php echo $item->id ?>"><?php echo $item->name ?></option>
                                    <?php  endforeach ?>
								</select>
                                    <div class="invalid-feedback"> Please select a valid country. </div>
                                </div>
                                <div class="col-md-4 mb-3">
                                    <label for="billing_state">State *</label>
                                    <select class="wide w-100" name="billing_state"  id="billing_state">
									<option data-display="Select">Choose...</option>
								</select>
                                    <div class="invalid-feedback"> Please provide a valid state. </div>
                                </div>
                                <div class="col-md-3 mb-3">
                                    <label for="billing_zip">Zip *</label>
                                    <input type="text" name="billing_zip"  class="form-control" id="billing_zip" placeholder="" required>
                                    <div class="invalid-feedback"> Zip code required. </div>
                                </div>
                            </div>
                            <hr class="mb-4">
                            <div class="custom-control custom-checkbox">
                                <input type="checkbox" class="custom-control-input" id="same-address" checked>
                                <label class="custom-control-label" for="same-address">Shipping address is the same as my billing address</label>
                            </div>
                            <div class="custom-control custom-checkbox">
                                <input type="checkbox" class="custom-control-input" id="save-info">
                                <!-- <label class="custom-control-label" for="save-info">Save this information for next time</label> -->
                            </div>
                            <hr class="mb-1"> </form>
                    </div>

                    <div class="shipping-address-section mt-4 d-none">
                        <div class="title-left">
                            <h3>Shipping address</h3>
                        </div>
                        <form class="needs-validation" novalidate>
                            <div class="row">
                                <div class="col-md-6 mb-3">
                                    <label for="shopping_first_name">First name *</label>
                                    <input type="text" name="shopping_first_name" class="form-control" id="shopping_first_name" placeholder="" value="" required>
                                    <div class="invalid-feedback"> Valid first name is required. </div>
                                </div>
                                <div class="col-md-6 mb-3">
                                    <label for="shopping_last_name">Last name *</label>
                                    <input type="text" name="shopping_last_name" class="form-control" id="shopping_last_name" placeholder="" value="" required>
                                    <div class="invalid-feedback"> Valid last name is required. </div>
                                </div>
                            </div>
                            <div class="mb-3">
                                <label for="shopping_email">Email Address *</label>
                                <input type="email" name="shopping_email" class="form-control" id="shopping_email" placeholder="">
                                <div class="invalid-feedback"> Please enter a valid email address for shipping updates. </div>
                            </div>
                            <div class="mb-3">
                                <label for="shopping_address">Address *</label>
                                <input type="text" name="shopping_address" class="form-control" id="shopping_address" placeholder="" required>
                                <div class="invalid-feedback"> Please enter your shipping address. </div>
                            </div>
                            <div class="mb-3">
                                <label for="shopping_address2">Address 2 *</label>
                                <input type="text" name="shopping_address2" class="form-control" id="shopping_address2" placeholder=""> </div>
                            <div class="row">
                                <div class="col-md-5 mb-3">
                                    <label for="shopping_country">Country *</label>
                                    <select class="wide w-100"  name="shopping_country"  id="shopping_country" data-type="shopping">
									<option value="Choose..." data-display="Select">Choose...</option>
                                    <?php  foreach($country as $item): ?>
                                        <option value="<?php echo $item->id ?>"><?php echo $item->name ?></option>
                                    <?php  endforeach ?>
								</select>
                                    <div class="invalid-feedback"> Please select a valid country. </div>
                                </div>
                                <div class="col-md-4 mb-3">
                                    <label for="shopping_state">State *</label>
                                    <select class="wide w-100" name="shopping_state"  id="shopping_state">
									<option data-display="Select">Choose...</option>
								</select>
                                    <div class="invalid-feedback"> Please provide a valid state. </div>
                                </div>
                                <div class="col-md-3 mb-3">
                                    <label for="shopping_zip">Zip *</label>
                                    <input type="text" name="shopping_zip"  class="form-control" id="shopping_zip" placeholder="" required>
                                    <div class="invalid-feedback"> Zip code required. </div>
                                </div>
                            </div>
                            <hr class="mb-4">
                    </div>
                </div>
                <div class="col-sm-6 col-lg-6 mb-3">
                    <div class="row">
                        <div class="col-md-12 col-lg-12">
                            <div class="shipping-method-box">
                                <div class="title-left">
                                    <h3>Shipping Method</h3>
                                </div>
                                <div class="mb-4">
                                <?php  foreach(json_decode(getOptions("shipping_method")) as $item): ?>
                                    <div class="custom-control custom-radio">
                                        <input id="shippingOption<?php echo $item->shipping_name; ?>" name="shipping-option" class="custom-control-input"  type="radio">
                                        <label class="custom-control-label" for="shippingOption<?php echo $item->shipping_name; ?>"><?php echo $item->shipping_name; ?></label> 
                                        <span class="float-right font-weight-bold"><?php echo $item->shipping_charge; ?></span> 
                                    </div>
                                    <!-- <div class="ml-4 mb-2 small">(3-7 business days)</div> -->
                                <?php  endforeach ?>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-12 col-lg-12">
                            <div class="odr-box">
                                <div class="title-left">
                                    <h3>Shopping cart</h3>
                                </div>
                                <div class="rounded p-2 bg-light">
                                    <?php foreach($cart['cartItems'] as $item): ?>
                                        <div class="media mb-2 border-bottom">
                                            <div class="media-body"> <a href="<?= url('/shop-detail/'. strtolower(str_replace(' ', '-', $item->name)).'/'. $item->id) ?>"><?php echo $item->name ?></a>
                                                <div class="small text-muted">Price: $<?php echo number_format($item->base_price) ?> <span class="mx-2">|</span> Qty: <?php echo $item->quantity ?> <span class="mx-2">|</span> Subtotal: $<?php echo number_format($item->base_price * $item->quantity) ?></div>
                                            </div>
                                        </div>
                                    <?php endforeach ?>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-12 col-lg-12">
                            <div class="order-box">
                                <div class="title-left">
                                    <h3>Your order</h3>
                                </div>
                                <div class="d-flex">
                                    <div class="font-weight-bold">Product</div>
                                    <div class="ml-auto font-weight-bold">Total</div>
                                </div>
                                <hr class="my-1">
                                <div class="d-flex">
                                    <h4>Sub Total</h4>
                                    <div class="ml-auto font-weight-bold"> $ <?php echo number_format($cart['grandTotal']) ?> </div>
                                </div>
                                <div class="d-flex">
                                    <h4>Discount</h4>
                                    <div class="ml-auto font-weight-bold"> $ 0 </div>
                                </div>
                                <hr class="my-1">
                                <div class="d-flex">
                                    <h4>Coupon Discount</h4>
                                    <div class="ml-auto font-weight-bold"> $ 0 </div>
                                </div>
                                <div class="d-flex">
                                    <h4>Tax</h4>
                                    <div class="ml-auto font-weight-bold"> $ 0 </div>
                                </div>
                                <div class="d-flex">
                                    <h4>Shipping Cost</h4>
                                    <div class="ml-auto font-weight-bold"> Free </div>
                                </div>
                                <hr>
                                <div class="d-flex gr-total">
                                    <h5>Grand Total</h5>
                                    <div class="ml-auto h5"> $ <?php echo number_format($cart['grandTotal']) ?> </div>
                                </div>
                                <hr> </div>
                        </div>
                        <div class="col-12 d-flex shopping-box"> 
                            <a href="#" class="ml-auto btn hvr-hover">Place Order</a> 
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
    <!-- End Cart -->

    <!-- Start Instagram Feed  -->
    <div class="instagram-box">
        <div class="main-instagram owl-carousel owl-theme">
            <div class="item">
                <div class="ins-inner-box">
                    <img src="<?= url('themes/'. $themeInfo->value)?>/images/instagram-img-01.jpg" alt="" />
                    <div class="hov-in">
                        <a href="#"><i class="fab fa-instagram"></i></a>
                    </div>
                </div>
            </div>
            <div class="item">
                <div class="ins-inner-box">
                    <img src="<?= url('themes/'. $themeInfo->value)?>/images/instagram-img-02.jpg" alt="" />
                    <div class="hov-in">
                        <a href="#"><i class="fab fa-instagram"></i></a>
                    </div>
                </div>
            </div>
            <div class="item">
                <div class="ins-inner-box">
                    <img src="<?= url('themes/'. $themeInfo->value)?>/images/instagram-img-03.jpg" alt="" />
                    <div class="hov-in">
                        <a href="#"><i class="fab fa-instagram"></i></a>
                    </div>
                </div>
            </div>
            <div class="item">
                <div class="ins-inner-box">
                    <img src="<?= url('themes/'. $themeInfo->value)?>/images/instagram-img-04.jpg" alt="" />
                    <div class="hov-in">
                        <a href="#"><i class="fab fa-instagram"></i></a>
                    </div>
                </div>
            </div>
            <div class="item">
                <div class="ins-inner-box">
                    <img src="<?= url('themes/'. $themeInfo->value)?>/images/instagram-img-05.jpg" alt="" />
                    <div class="hov-in">
                        <a href="#"><i class="fab fa-instagram"></i></a>
                    </div>
                </div>
            </div>
            <div class="item">
                <div class="ins-inner-box">
                    <img src="<?= url('themes/'. $themeInfo->value)?>/images/instagram-img-06.jpg" alt="" />
                    <div class="hov-in">
                        <a href="#"><i class="fab fa-instagram"></i></a>
                    </div>
                </div>
            </div>
            <div class="item">
                <div class="ins-inner-box">
                    <img src="<?= url('themes/'. $themeInfo->value)?>/images/instagram-img-07.jpg" alt="" />
                    <div class="hov-in">
                        <a href="#"><i class="fab fa-instagram"></i></a>
                    </div>
                </div>
            </div>
            <div class="item">
                <div class="ins-inner-box">
                    <img src="<?= url('themes/'. $themeInfo->value)?>/images/instagram-img-08.jpg" alt="" />
                    <div class="hov-in">
                        <a href="#"><i class="fab fa-instagram"></i></a>
                    </div>
                </div>
            </div>
            <div class="item">
                <div class="ins-inner-box">
                    <img src="<?= url('themes/'. $themeInfo->value)?>/images/instagram-img-09.jpg" alt="" />
                    <div class="hov-in">
                        <a href="#"><i class="fab fa-instagram"></i></a>
                    </div>
                </div>
            </div>
            <div class="item">
                <div class="ins-inner-box">
                    <img src="<?= url('themes/'. $themeInfo->value)?>/images/instagram-img-05.jpg" alt="" />
                    <div class="hov-in">
                        <a href="#"><i class="fab fa-instagram"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Instagram Feed  -->


      <!-- Start Footer  -->
      <?php include 'footer.php';?>