<!DOCTYPE html>
<html lang="en">

<head>
  <title><?php echo $title; ?></title>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="csrf-token" content="<?php echo csrf_token() ?>" />
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">


  <link rel="stylesheet" href="<?= url('themes/' . $themeInfo->value) ?>/css/open-iconic-bootstrap.min.css">
  <link rel="stylesheet" href="<?= url('themes/' . $themeInfo->value) ?>/css/animate.css">

  <link rel="stylesheet" href="<?= url('themes/' . $themeInfo->value) ?>/css/owl.carousel.min.css">
  <link rel="stylesheet" href="<?= url('themes/' . $themeInfo->value) ?>/css/owl.theme.default.min.css">
  <link rel="stylesheet" href="<?= url('themes/' . $themeInfo->value) ?>/css/magnific-popup.css">

  <link rel="stylesheet" href="<?= url('themes/' . $themeInfo->value) ?>/css/aos.css">

  <link rel="stylesheet" href="<?= url('themes/' . $themeInfo->value) ?>/css/ionicons.min.css">

  <link rel="stylesheet" href="<?= url('themes/' . $themeInfo->value) ?>/css/bootstrap-datepicker.css">
  <link rel="stylesheet" href="<?= url('themes/' . $themeInfo->value) ?>/css/jquery.timepicker.css">


  <link rel="stylesheet" href="<?= url('themes/' . $themeInfo->value) ?>/css/flaticon.css">
  <link rel="stylesheet" href="<?= url('themes/' . $themeInfo->value) ?>/css/icomoon.css">
  <link rel="stylesheet" href="<?= url('themes/' . $themeInfo->value) ?>/css/style.css">
  <link rel="stylesheet" href="<?= url('themes/' . $themeInfo->value) ?>/css/responsive.css">
</head>

<body class="goto-here">
  <div class="py-1 bg-black">
    <div class="container">
      <div class="row no-gutters d-flex align-items-start align-items-center px-md-0">
        <div class="col-lg-12 d-block">
          <div class="row d-flex header-top-row">
            <div class="  col-md-4 col-6 d-flex topper align-items-center">
              <div class="icon mr-2 d-flex justify-content-center align-items-center"><span class="icon-phone2"></span></div>
              <span class="text">+ 1235 2355 98</span>
            </div>
            <div class=" col-md-4  col-6 d-flex randome topper align-items-center">
              <div class="icon mr-2 d-flex slid justify-content-center align-items-center"><span class="icon-paper-plane"></span></div>
              <span class="slid1 text">youremail@email.com</span>
            </div>
            <div class="col-md-4 col-12 d-flex side topper align-items-center text-lg-right">
              <span class="text">3-5 Business days delivery &amp; Free Returns</span>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
    <div class="container">
      <a class="navbar-brand" href="<?= url('/') ?>">Logo Here</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="oi oi-menu"></span> Menu
      </button>

      <div class="collapse navbar-collapse" id="ftco-nav">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item active"><a href="<?= url('/') ?>" class="nav-link">Home</a></li>
          <li class="nav-item has-mega-menu">
            <a class="nav-link dropdown-toggle" href="javascript:void;" id="dropdown04" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Shop</a>
            <div class="submenu">
              <div class="row">
                <div class="col-12">
                  <h3 class="cat-title">Categories</h3>
                  <ul class="submenu-child">
                    <li>
                      <a href="javascript:void;" title="">Men’s Fashion<i class="fa-solid fa-chevron-right"></i></a>
                      <div class="thirdLabel show">
                        <ul>
                          <li>
                            <ul>
                              <li><a href="#">Men’s Dresses</a></li>
                              <li><a href="#">Men’s Shorts &amp; Skirts</a></li>
                              <li><a href="#">Men’s Jackets</a></li>
                              <li><a href="#">Men’s Coats</a></li>
                              <li><a href="#">Men’s Sleeveless</a></li>
                              <li><a href="#">Men’s Trousers</a></li>
                              <li><a href="#">Men’s Winter Coats</a></li>
                              <li><a href="#">Men’s Jumpsuits</a></li>
                            </ul>
                          </li>
                          <li>
                            <ul>
                              <li><a href="#">Men’s Dresses</a></li>
                              <li><a href="#">Men’s Shorts &amp; Skirts</a></li>
                              <li><a href="#">Men’s Jackets</a></li>
                              <li><a href="#">Men’s Coats</a></li>
                              <li><a href="#">Men’s Sleeveless</a></li>
                              <li><a href="#">Men’s Trousers</a></li>
                              <li><a href="#">Men’s Winter Coats</a></li>
                              <li><a href="#">Men’s Jumpsuits</a></li>
                            </ul>
                          </li>
                          <li>
                            <ul>
                              <li><a href="#">Men’s Dresses</a></li>
                              <li><a href="#">Men’s Shorts &amp; Skirts</a></li>
                              <li><a href="#">Men’s Jackets</a></li>
                              <li><a href="#">Men’s Coats</a></li>
                              <li><a href="#">Men’s Sleeveless</a></li>
                              <li><a href="#">Men’s Trousers</a></li>
                              <li><a href="#">Men’s Winter Coats</a></li>
                              <li><a href="#">Men’s Jumpsuits</a></li>
                            </ul>
                          </li>
                        </ul>
                      </div>
                    </li>
                    <li>
                      <a href="javascript:void;" title="">Women’s Fashion<i class="fa-solid fa-chevron-right"></i></a>
                      <div class="thirdLabel">
                        <ul>
                          <li>
                            <ul>
                              <li><a href="#">Women’s Dresses</a></li>
                              <li><a href="#">Women’s Shorts &amp; Skirts</a></li>
                              <li><a href="#">Women’s Jackets</a></li>
                              <li><a href="#">Women’s Coats</a></li>
                              <li><a href="#">Women’s Sleeveless</a></li>
                              <li><a href="#">Women’s Trousers</a></li>
                              <li><a href="#">Women’s Winter Coats</a></li>
                              <li><a href="#">Women’s Jumpsuits</a></li>
                            </ul>
                          </li>
                          <li>
                            <ul>
                              <li><a href="#">Women’s Dresses</a></li>
                              <li><a href="#">Women’s Shorts &amp; Skirts</a></li>
                              <li><a href="#">Women’s Jackets</a></li>
                              <li><a href="#">Women’s Coats</a></li>
                              <li><a href="#">Women’s Sleeveless</a></li>
                              <li><a href="#">Women’s Trousers</a></li>
                              <li><a href="#">Women’s Winter Coats</a></li>
                              <li><a href="#">Women’s Jumpsuits</a></li>
                            </ul>
                          </li>
                          <li>
                            <ul>
                              <li><a href="#">Women’s Dresses</a></li>
                              <li><a href="#">Women’s Shorts &amp; Skirts</a></li>
                              <li><a href="#">Women’s Jackets</a></li>
                              <li><a href="#">Women’s Coats</a></li>
                              <li><a href="#">Women’s Sleeveless</a></li>
                              <li><a href="#">Women’s Trousers</a></li>
                              <li><a href="#">Women’s Winter Coats</a></li>
                              <li><a href="#">Women’s Jumpsuits</a></li>
                            </ul>
                          </li>
                        </ul>
                      </div>
                    </li>
                    <li>
                      <a href="javascript:void;" title="">Kid’s Fashion<i class="fa-solid fa-chevron-right"></i></a>
                      <div class="thirdLabel">
                        <ul>
                          <li>
                            <ul>
                              <li><a href="#">Kid’s Dresses</a></li>
                              <li><a href="#">Kid’s Shorts &amp; Skirts</a></li>
                              <li><a href="#">Kid’s Jackets</a></li>
                              <li><a href="#">Kid’s Coats</a></li>
                              <li><a href="#">Kid’s Sleeveless</a></li>
                              <li><a href="#">Kid’s Trousers</a></li>
                              <li><a href="#">Kid’s Winter Coats</a></li>
                              <li><a href="#">Kid’s Jumpsuits</a></li>
                            </ul>
                          </li>
                          <li>
                            <ul>
                              <li><a href="#">Kid’s Dresses</a></li>
                              <li><a href="#">Kid’s Shorts &amp; Skirts</a></li>
                              <li><a href="#">Kid’s Jackets</a></li>
                              <li><a href="#">Kid’s Coats</a></li>
                              <li><a href="#">Kid’s Sleeveless</a></li>
                              <li><a href="#">Kid’s Trousers</a></li>
                              <li><a href="#">Kid’s Winter Coats</a></li>
                              <li><a href="#">Kid’s Jumpsuits</a></li>
                            </ul>
                          </li>
                          <li>
                            <ul>
                              <li><a href="#">Kid’s Dresses</a></li>
                              <li><a href="#">Kid’s Shorts &amp; Skirts</a></li>
                              <li><a href="#">Kid’s Jackets</a></li>
                              <li><a href="#">Kid’s Coats</a></li>
                              <li><a href="#">Kid’s Sleeveless</a></li>
                              <li><a href="#">Kid’s Trousers</a></li>
                              <li><a href="#">Kid’s Winter Coats</a></li>
                              <li><a href="#">Kid’s Jumpsuits</a></li>
                            </ul>
                          </li>
                        </ul>
                      </div>
                    </li>
                    <li>
                      <a href="javascript:void;" title="">Holiday Shop<i class="fa-solid fa-chevron-right"></i></a>
                      <div class="thirdLabel">
                        <ul>
                          <li>
                            <ul>
                              <li><a href="#">Dresses</a></li>
                              <li><a href="#">Shorts &amp; Skirts</a></li>
                              <li><a href="#">Jackets</a></li>
                              <li><a href="#">Coats</a></li>
                              <li><a href="#">Sleeveless</a></li>
                              <li><a href="#">Trousers</a></li>
                              <li><a href="#">Winter Coats</a></li>
                              <li><a href="#">Jumpsuits</a></li>
                            </ul>
                          </li>
                          <li>
                            <ul>
                              <li><a href="#">Dresses</a></li>
                              <li><a href="#">Shorts &amp; Skirts</a></li>
                              <li><a href="#">Jackets</a></li>
                              <li><a href="#">Coats</a></li>
                              <li><a href="#">Sleeveless</a></li>
                              <li><a href="#">Trousers</a></li>
                              <li><a href="#">Winter Coats</a></li>
                              <li><a href="#">Jumpsuits</a></li>
                            </ul>
                          </li>
                          <li>
                            <ul>
                              <li><a href="#">Dresses</a></li>
                              <li><a href="#">Shorts &amp; Skirts</a></li>
                              <li><a href="#">Jackets</a></li>
                              <li><a href="#">Coats</a></li>
                              <li><a href="#">Sleeveless</a></li>
                              <li><a href="#">Trousers</a></li>
                              <li><a href="#">Winter Coats</a></li>
                              <li><a href="#">Jumpsuits</a></li>
                            </ul>
                          </li>
                        </ul>
                      </div>
                    </li>
                  </ul>
                </div><!-- /.col-lg-3 col-md-12 -->

              </div><!-- /.row -->
              <div class="row">
                <div class="col-md-6">
                  <div class="banner-box">
                    <div class="inner-box">
                      <a href="#" title="">
                        <img src="#" alt="">
                      </a>
                    </div>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="banner-box">
                    <div class="inner-box">
                      <a href="#" title="">
                        <img src="#" alt="">
                      </a>
                    </div>
                  </div>
                </div>
              </div><!-- /.row -->
            </div>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="javascript:void;" id="dropdown04" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Pages</a>
            <div class="dropdown-menu" aria-labelledby="dropdown04">
              <a class="dropdown-item" href="<?= url('/shop') ?>">Shop</a>
              <a class="dropdown-item" href="<?= url('/shop-detail') ?>">Single Product</a>
              <a class="dropdown-item" href="<?= url('/cart') ?>">Cart</a>
              <a class="dropdown-item" href="<?= url('/checkout') ?>">Checkout</a>
              <a class="dropdown-item" href="<?= url('/my-account') ?>">My account</a>
              <a class="dropdown-item" href="<?= url('/wishlist') ?>">Wishlist</a>
              <a class="dropdown-item" href="<?= url('/track-order') ?>">Track order</a>
              <a class="dropdown-item" href="<?= url('/faq') ?>">FAQS</a>
              <a class="dropdown-item" href="<?= url('/terms') ?>">Terms & Conditions</a>
            </div>
          </li>
          <li class="nav-item"><a href="<?= url('/about') ?>" class="nav-link">About</a></li>
          <li class="nav-item"><a href="<?= url('/blog') ?>" class="nav-link">Blog</a></li>
          <li class="nav-item"><a href="<?= url('/contact-us') ?>" class="nav-link">Contact</a></li>
          <?php if (isset($_SESSION['user_id'])) : ?>
            <li class="nav-item cta cta-colored">
              <a href="<?= url('/cart') ?>" class="nav-link"><span class="icon-shopping_cart"></span>[0]</a>
            </li>
            <li class="nav-item cta cta-colored">
              <a href="<?= url('/logout') ?>" class="nav-link">Logout</a>
            </li>
          <?php endif; ?>
        </ul>
      </div>
    </div>
  </nav>