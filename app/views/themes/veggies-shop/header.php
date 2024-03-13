<!DOCTYPE html>
<html lang="en">
<!-- Basic -->

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <!-- Mobile Metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="<?php echo csrf_token() ?>" />
    <!-- Site Metas -->
    <title><?php echo $title; ?></title>

    <meta name="keywords" content="">
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- Site Icons -->
    <!-- <link rel="shortcut icon" href="images/favicon.ico" type="image/x-icon">
<link rel="apple-touch-icon" href="images/apple-touch-icon.png"> -->

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="<?= url('themes/' . $themeInfo->value) ?>/css/bootstrap.min.css">
    <!-- Site CSS -->
    <link rel="stylesheet" href="<?= url('themes/' . $themeInfo->value) ?>/css/style.css">
    <!-- Responsive CSS -->
    <link rel="stylesheet" href="<?= url('themes/' . $themeInfo->value) ?>/css/responsive.css">
    <!-- Custom CSS -->
    <link rel="stylesheet" href="<?= url('themes/' . $themeInfo->value) ?>/css/custom.css">
</head>

<body>
    <!-- Start Main Top -->
    <div class="main-top">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                    <!-- <div class="custom-select-box">
<select id="basic" class="selectpicker show-tick form-control" data-placeholder="$ USD">
<option>¥ JPY</option>
<option>$ USD</option>
<option>€ EUR</option>
</select>
</div> -->
                    <div class="right-phone-box">
                        <p>Call US :- <a href="#"> +11 900 800 100</a></p>
                    </div>
                    <div class="our-link">
                        <ul>
                            <li><a href="#"><i class="fa fa-user s_color"></i> My Account</a></li>
                            <li><a href="#"><i class="fas fa-location-arrow"></i> Our location</a></li>
                            <li><a href="#"><i class="fas fa-headset"></i> Contact Us</a></li>
                        </ul>
                    </div>
                </div>

                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                    <div class="login-box">
                        <select id="basic" class="selectpicker show-tick form-control" data-placeholder="Sign In">
                            <option>Register Here</option>
                            <option>Sign In</option>
                        </select>
                    </div>
                    <!-- <div class="text-slid-box">
<div id="offer-box" class="carouselTicker">
<ul class="offer-box">
<li>
<i class="fab fa-opencart"></i> 20% off Entire Purchase Promo code: offT80
</li>
<li>
<i class="fab fa-opencart"></i> 50% - 80% off on Vegetables
</li>
<li>
<i class="fab fa-opencart"></i> Off 10%! Shop Vegetables
</li>
<li>
<i class="fab fa-opencart"></i> Off 50%! Shop Now
</li>
<li>
<i class="fab fa-opencart"></i> Off 10%! Shop Vegetables
</li>
<li>
<i class="fab fa-opencart"></i> 50% - 80% off on Vegetables
</li>
<li>
<i class="fab fa-opencart"></i> 20% off Entire Purchase Promo code: offT30
</li>
<li>
<i class="fab fa-opencart"></i> Off 50%! Shop Now
</li>
</ul>
</div>
</div> -->
                </div>

            </div>
        </div>
    </div>
    <!-- End Main Top -->

    <!-- Start Main Top -->
    <header class="main-header">
        <!-- Start Navigation -->
        <nav class="navbar navbar-expand-lg navbar-light bg-light navbar-default bootsnav">
            <div class="container">
                <!-- Start Header Navigation -->
                <div class="navbar-header">
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar-menu" aria-controls="navbars-rs-food" aria-expanded="false" aria-label="Toggle navigation">
                        <i class="fa fa-bars"></i>
                    </button>
                    <a class="navbar-brand" href="<?= url('/') ?>"><img src="<?= url('themes/' . $themeInfo->value) ?>/images/logo.png" class="logo" alt=""></a>
                </div>
                <!-- End Header Navigation -->

                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse" id="navbar-menu">
                    <ul class="nav navbar-nav ml-auto" data-in="fadeInDown" data-out="fadeOutUp">
                        <li class="nav-item active"><a class="nav-link" href="<?= url('/') ?>">Home</a></li>
                        <li class="nav-item"><a class="nav-link" href="<?= url('/about') ?>">About Us</a></li>
                        <li class="dropdown">
                            <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">SHOP <i class="fas fa-caret-down"></i></a>
                            <ul class="dropdown-menu">
                                <li><a href="<?= url('/shop') ?>">Sidebar Shop</a></li>
                                <li><a href="<?= url('/shop-detail') ?>">Shop Detail</a></li>
                                <li><a href="<?= url('/cart') ?>">Cart</a></li>
                                <li><a href="<?= url('/checkout') ?>">Checkout</a></li>
                                <li><a href="<?= url('/my-account') ?>">My Account</a></li>
                                <li><a href="<?= url('/wishlist') ?>">Wishlist</a></li>
                            </ul>
                        </li>
                        <li class="dropdown">
                            <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">PAGES <i class="fas fa-caret-down"></i></a>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="<?= url('/register') ?>">Login / Register</a></li>
                                <li><a class="dropdown-item" href="<?= url('/track-order') ?>">Track order</a></li>
                                <li><a class="dropdown-item" href="<?= url('/faq') ?>">FAQS</a></li>
                                <li><a class="dropdown-item" href="<?= url('/terms') ?>">Terms & Conditions</a></li>
                            </ul>
                        </li>
                        <li class="nav-item"><a class="nav-link" href="<?= url('/gallery') ?>">Gallery</a></li>
                        <li class="nav-item"><a class="nav-link" href="<?= url('/contact-us') ?>">Contact Us</a></li>
                    </ul>
                </div>
                <!-- /.navbar-collapse -->

                <!-- Start Atribute Navigation -->

                <div class="attr-nav">
                    <ul>
                        <li class="search"><a href="#"><i class="fa fa-search"></i></a></li>
                        <li class="side-menu">
                            <a href="#" id="mycart">
                                <i class="fa fa-shopping-bag"></i>
                                <span class="badge"><?php echo CartCount(); ?></span>
                                <p>My Cart</p>
                            </a>
                        </li>
                    </ul>
                </div>
                <?php if (isset($_SESSION['user_id'])) : ?>
                    <div class="attr-nav">
                        <a href="<?= url('/logout') ?>" class="menu-link px-5">Sign Out</a>
                    </div>
                <?php endif; ?>


                <!-- End Atribute Navigation -->
            </div>
            <!-- Start Side Menu -->
            <div class="side">
                <a href="#" class="close-side"><i class="fa fa-times"></i></a>
                <li class="cart-box">
                    <ul class="cart-list cart-data">
                        
                    </ul>
                </li>
            </div>
            <!-- End Side Menu -->
        </nav>
        <!-- End Navigation -->
    </header>
    <!-- End Main Top -->

    <!-- Start Top Search -->
    <div class="top-search">
        <div class="container">
            <div class="input-group">
                <span class="input-group-addon"><i class="fa fa-search"></i></span>
                <input type="text" class="form-control" placeholder="Search">
                <span class="input-group-addon close-search"><i class="fa fa-times"></i></span>
            </div>
        </div>
    </div>
    <!-- End Top Search -->