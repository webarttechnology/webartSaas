<!DOCTYPE html>
<html lang="zxx">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="Yoga Studio Template">
    <meta name="keywords" content="Yoga, unica, creative, html">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="csrf-token" content="<?php echo csrf_token() ?>" />

    <title><?php echo $title; ?></title>

    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css?family=Amatic+SC:400,700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:100,200,300,400,500,600,700,800,900&display=swap" rel="stylesheet">

    <!-- Css Styles -->
    <link rel="stylesheet" href="<?= url('themes/' . $themeInfo->value) ?>/css/bootstrap.min.css" type="text/css">
    <link rel="stylesheet" href="<?= url('themes/' . $themeInfo->value) ?>/css/font-awesome.min.css" type="text/css">
    <link rel="stylesheet" href="<?= url('themes/' . $themeInfo->value) ?>/css/nice-select.css" type="text/css">
    <link rel="stylesheet" href="<?= url('themes/' . $themeInfo->value) ?>/css/owl.carousel.min.css" type="text/css">
    <link rel="stylesheet" href="<?= url('themes/' . $themeInfo->value) ?>/css/magnific-popup.css" type="text/css">
    <link rel="stylesheet" href="<?= url('themes/' . $themeInfo->value) ?>/css/slicknav.min.css" type="text/css">
    <link rel="stylesheet" href="<?= url('themes/' . $themeInfo->value) ?>/css/style.css" type="text/css">
    <link rel="stylesheet" href="<?= url('themes/' . $themeInfo->value) ?>/css/responsive.css" type="text/css">
</head>

<body>
    <!-- Page Preloder -->
    <div id="preloder">
        <div class="loader"></div>
    </div>

    <!-- Search model -->
    <div class="search-model">
        <div class="h-100 d-flex align-items-center justify-content-center">
            <div class="search-close-switch">+</div>
            <form class="search-model-form">
                <input type="text" id="search-input" placeholder="Search here.....">
            </form>
        </div>
    </div>
    <!-- Search model end -->

    <!-- Header Section Begin -->
    <header class="header-section">
        <div class="container-fluid">
            <div class="inner-header">
                <div class="logo">
                    <a href="<?= url('/') ?>"><img src="<?= url('themes/' . $themeInfo->value) ?>/img/logo.png" alt=""></a>
                </div>
                <div class="header-right">
                    <img src="<?= url('themes/' . $themeInfo->value) ?>/img/icons/search.png" alt="" class="search-trigger">
                    <?php if (isset($_SESSION['user_id'])) : ?>
                    <img src="<?= url('themes/' . $themeInfo->value) ?>/img/icons/man.png" alt="">
                    <a href="#">
                        <img src="<?= url('themes/' . $themeInfo->value) ?>/img/icons/bag.png" alt="">
                        <span>3</span>
                    </a>
                    <?php endif; ?>

                </div>
                <?php if (isset($_SESSION['user_id'])) : ?>
                    <div class="user-access">
                    <a href="<?= url('/logout') ?>">Sign Out</a>
                    </div>
                <?php else : ?>
                    <div class="user-access">
                        <a href="<?= url('/my-account') ?>">Register</a>
                        <a href="<?= url('/my-account') ?>" class="in">Sign in</a>
                    </div>
                    <div class="header-right ph d-none">
                        <img src="<?= url('themes/' . $themeInfo->value) ?>/img/icons/search.png" alt="" class="search-trigger">
                        <img src="<?= url('themes/' . $themeInfo->value) ?>/img/icons/man.png" alt="">
                        <a href="#">
                            <img src="<?= url('themes/' . $themeInfo->value) ?>/img/icons/bag.png" alt="">
                            <span>2</span>
                        </a>
                    </div>
                <?php endif; ?>
                <nav class="main-menu mobile-menu">

                    <ul>
                        <li><a class="active" href="<?= url('/') ?>">Home</a></li>
                        <li><a href="<?= url('/shop') ?>">Shop <i class="fa fa-caret-down"></i></a>
                            <ul class="sub-menu">
                                <li><a href="<?= url('/shop-detail') ?>">Product Page</a></li>
                                <li><a href="<?= url('/cart') ?>">Shopping Card</a></li>
                                <li><a href="<?= url('/checkout') ?>">Check out</a></li>
                            </ul>
                        </li>
                        <li><a href="#">Pages <i class="fa fa-caret-down"></i></a>
                            <ul class="sub-menu">
                                <li><a href="<?= url('/my-account') ?>">My account</a></li>
                                <li><a href="<?= url('/wishlist') ?>">Wishlist</a></li>
                                <li><a href="<?= url('/track-order') ?>">Track order</a></li>
                                <li><a href="<?= url('/faq') ?>">FAQS</a></li>
                                <li><a href="<?= url('/terms') ?>">Terms &amp; Conditions</a></li>
                            </ul>
                        </li>
                        <li><a href="<?= url('/about') ?>">About</a></li>
                        <li><a href="<?= url('/checkout') ?>">Check Out</a></li>
                        <li><a href="<?= url('/contact-us') ?>">Contact</a></li>
                    </ul>
                </nav>
            </div>
        </div>
    </header>