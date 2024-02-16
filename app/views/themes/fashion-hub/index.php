<?php include("header.php") ?>
    <!-- Header Info Begin -->
    <div class="header-info">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-4 col-sm-6">
                    <div class="header-item">
                        <img src="<?= url('themes/'. $themeInfo->value)?>/img/icons/delivery.png" alt="">
                        <p>Free shipping on orders over $30 in USA</p>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6 text-left text-lg-center">
                    <div class="header-item">
                        <img src="<?= url('themes/'. $themeInfo->value)?>/img/icons/voucher.png" alt="">
                        <p>20% Student Discount</p>
                    </div>
                </div>
                <div class="col-md-4 col-sm-12 text-left text-xl-right">
                    <div class="header-item">
                    <img src="<?= url('themes/'. $themeInfo->value)?>/img/icons/sales.png" alt="">
                    <p>30% off on dresses. Use code: 30OFF</p>
                </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Header Info End -->
    <!-- Header End -->

    <!-- Hero Slider Begin -->
    <section class="hero-slider">
        <div class="hero-items owl-carousel">
            <div class="single-slider-item set-bg" data-setbg="<?= url('themes/'. $themeInfo->value)?>/img/slider-1.jpg">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12">
                            <h1>2019</h1>
                            <h2>Fashion Hub.</h2>
                            <a href="#" class="primary-btn">See More</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="single-slider-item set-bg" data-setbg="<?= url('themes/'. $themeInfo->value)?>/img/slider-2.jpg">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12">
                            <h1>2019</h1>
                            <h2>Fashion Hub.</h2>
                            <a href="#" class="primary-btn">See More</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="single-slider-item set-bg" data-setbg="<?= url('themes/'. $themeInfo->value)?>/img/slider-3.jpg">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12">
                            <h1>2019</h1>
                            <h2>Fashion Hub.</h2>
                            <a href="#" class="primary-btn">See More</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Hero Slider End -->

    <!-- Features Section Begin -->
    <section class="features-section spad">
        <div class="features-ads">
            <div class="container">
                <div class="row">
                    <div class="col-lg-4">
                        <div class="single-features-ads first">
                            <img src="<?= url('themes/'. $themeInfo->value)?>/img/icons/f-delivery.png" alt="">
                            <h4>Free shipping</h4>
                            <p>Fusce urna quam, euismod sit amet mollis quis, vestibulum quis velit. Vesti bulum mal
                                esuada aliquet libero viverra cursus. </p>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="single-features-ads second">
                            <img src="<?= url('themes/'. $themeInfo->value)?>/img/icons/coin.png" alt="">
                            <h4>100% Money back </h4>
                            <p>Urna quam, euismod sit amet mollis quis, vestibulum quis velit. Vesti bulum mal esuada
                                aliquet libero viverra cursus. </p>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="single-features-ads">
                            <img src="<?= url('themes/'. $themeInfo->value)?>/img/icons/chat.png" alt="">
                            <h4>Online support 24/7</h4>
                            <p>Urna quam, euismod sit amet mollis quis, vestibulum quis velit. Vesti bulum mal esuada
                                aliquet libero viverra cursus. </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Features Box -->
        <div class="features-box">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="single-box-item first-box">
                                    <img src="<?= url('themes/'. $themeInfo->value)?>/img/f-box-1.jpg" alt="">
                                    <div class="box-text">
                                        <span class="trend-year">2019 Party</span>
                                        <h2>Jewelry</h2>
                                        <span class="trend-alert">Trend Allert</span>
                                        <a href="#" class="primary-btn">See More</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-12">
                                <div class="single-box-item second-box">
                                    <img src="<?= url('themes/'. $themeInfo->value)?>/img/f-box-2.jpg" alt="">
                                    <div class="box-text">
                                        <span class="trend-year">2019 Trend</span>
                                        <h2>Footwear</h2>
                                        <span class="trend-alert">Bold & Black</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="single-box-item large-box">
                            <img src="<?= url('themes/'. $themeInfo->value)?>/img/f-box-3.jpg" alt="">
                            <div class="box-text">
                                <span class="trend-year">2019 Party</span>
                                <h2>Collection</h2>
                                <div class="trend-alert">Trend Allert</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Features Section End -->

    <!-- Latest Product Begin -->
    <section class="latest-products spad">
        <div class="container">
            <div class="product-filter">
                <div class="row">
                    <div class="col-lg-12 text-center">
                        <div class="section-title">
                            <h2>Latest Products</h2>
                        </div>
                        <ul class="product-controls">
                            <li data-filter="*">All</li>
                            <li data-filter=".dresses">Dresses</li>
                            <li data-filter=".bags">Bags</li>
                            <li data-filter=".shoes">Shoes</li>
                            <li data-filter=".accesories">Accesories</li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="row" id="product-list">
                <div class="col-lg-3 col-sm-6 mix all dresses bags">
                    <div class="single-product-item">
                        <figure>
                            <a href="#"><img src="<?= url('themes/'. $themeInfo->value)?>/img/products/img-1.jpg" alt=""></a>
                            <div class="p-status">new</div>
                            <a href="#" class="primary-btn btn-sm pc-btn"><i class="fa fa-shopping-cart"></i> Add to cart</a>
                        </figure>
                        <div class="product-text">
                            <h6>Green Dress with details</h6>
                            <p>$22.90</p>
                            <div class="rating">
                                <p class="d-flex justify-content-center">
                                    <a href="#"><span class="fa fa-star-o"></span></a>
                                    <a href="#"><span class="fa fa-star-o"></span></a>
                                    <a href="#"><span class="fa fa-star-o"></span></a>
                                    <a href="#"><span class="fa fa-star-o"></span></a>
                                    <a href="#"><span class="fa fa-star-o"></span></a>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6 mix all dresses bags">
                    <div class="single-product-item">
                        <figure>
                            <a href="#"><img src="<?= url('themes/'. $themeInfo->value)?>/img/products/img-2.jpg" alt=""></a>
                            <div class="p-status sale">sale</div>
                            <a href="#" class="primary-btn btn-sm pc-btn"><i class="fa fa-shopping-cart"></i> Add to cart</a>
                        </figure>
                        <div class="product-text">
                            <h6>Yellow Maxi Dress</h6>
                            <p>$25.90</p>
                            <div class="rating">
                                <p class="d-flex justify-content-center">
                                    <a href="#"><span class="fa fa-star-o"></span></a>
                                    <a href="#"><span class="fa fa-star-o"></span></a>
                                    <a href="#"><span class="fa fa-star-o"></span></a>
                                    <a href="#"><span class="fa fa-star-o"></span></a>
                                    <a href="#"><span class="fa fa-star-o"></span></a>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6 mix all shoes accesories">
                    <div class="single-product-item">
                        <figure>
                            <a href="#"><img src="<?= url('themes/'. $themeInfo->value)?>/img/products/img-3.jpg" alt=""></a>
                            <div class="p-status">new</div>
                            <a href="#" class="primary-btn btn-sm pc-btn"><i class="fa fa-shopping-cart"></i> Add to cart</a>
                        </figure>
                        <div class="product-text">
                            <h6>One piece bodysuit</h6>
                            <p>$19.90</p>
                            <div class="rating">
                                <p class="d-flex justify-content-center">
                                    <a href="#"><span class="fa fa-star-o"></span></a>
                                    <a href="#"><span class="fa fa-star-o"></span></a>
                                    <a href="#"><span class="fa fa-star-o"></span></a>
                                    <a href="#"><span class="fa fa-star-o"></span></a>
                                    <a href="#"><span class="fa fa-star-o"></span></a>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6 mix all shoes accesories">
                    <div class="single-product-item">
                        <figure>
                            <a href="#"><img src="<?= url('themes/'. $themeInfo->value)?>/img/products/img-4.jpg" alt=""></a>
                            <div class="p-status popular">popular</div>
                            <a href="#" class="primary-btn btn-sm pc-btn"><i class="fa fa-shopping-cart"></i> Add to cart</a>
                        </figure>
                        <div class="product-text">
                            <h6>Blue Dress with details</h6>
                            <p>$35.50</p>
                            <div class="rating">
                                <p class="d-flex justify-content-center">
                                    <a href="#"><span class="fa fa-star-o"></span></a>
                                    <a href="#"><span class="fa fa-star-o"></span></a>
                                    <a href="#"><span class="fa fa-star-o"></span></a>
                                    <a href="#"><span class="fa fa-star-o"></span></a>
                                    <a href="#"><span class="fa fa-star-o"></span></a>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6 mix all dresses shoes">
                    <div class="single-product-item">
                        <figure>
                            <a href="#"><img src="<?= url('themes/'. $themeInfo->value)?>/img/products/img-5.jpg" alt=""></a>
                            <div class="p-status">new</div>
                            <a href="#" class="primary-btn btn-sm pc-btn"><i class="fa fa-shopping-cart"></i> Add to cart</a>
                        </figure>
                        <div class="product-text">
                            <h6>Green Dress with details</h6>
                            <p>$22.90</p>
                            <div class="rating">
                                <p class="d-flex justify-content-center">
                                    <a href="#"><span class="fa fa-star-o"></span></a>
                                    <a href="#"><span class="fa fa-star-o"></span></a>
                                    <a href="#"><span class="fa fa-star-o"></span></a>
                                    <a href="#"><span class="fa fa-star-o"></span></a>
                                    <a href="#"><span class="fa fa-star-o"></span></a>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6 mix all accesories bags">
                    <div class="single-product-item">
                        <figure>
                            <a href="#"><img src="<?= url('themes/'. $themeInfo->value)?>/img/products/img-6.jpg" alt=""></a>
                            <div class="p-status sale">sale</div>
                            <a href="#" class="primary-btn btn-sm pc-btn"><i class="fa fa-shopping-cart"></i> Add to cart</a>
                        </figure>
                        <div class="product-text">
                            <h6>Yellow Maxi Dress</h6>
                            <p>$25.90</p>
                            <div class="rating">
                                <p class="d-flex justify-content-center">
                                    <a href="#"><span class="fa fa-star-o"></span></a>
                                    <a href="#"><span class="fa fa-star-o"></span></a>
                                    <a href="#"><span class="fa fa-star-o"></span></a>
                                    <a href="#"><span class="fa fa-star-o"></span></a>
                                    <a href="#"><span class="fa fa-star-o"></span></a>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6 mix all dresses bags">
                    <div class="single-product-item">
                        <figure>
                            <a href="#"><img src="<?= url('themes/'. $themeInfo->value)?>/img/products/img-7.jpg" alt=""></a>
                            <a href="#" class="primary-btn btn-sm pc-btn"><i class="fa fa-shopping-cart"></i> Add to cart</a>
                        </figure>
                        <div class="product-text">
                            <h6>One piece bodysuit</h6>
                            <p>$19.90</p>
                            <div class="rating">
                                <p class="d-flex justify-content-center">
                                    <a href="#"><span class="fa fa-star-o"></span></a>
                                    <a href="#"><span class="fa fa-star-o"></span></a>
                                    <a href="#"><span class="fa fa-star-o"></span></a>
                                    <a href="#"><span class="fa fa-star-o"></span></a>
                                    <a href="#"><span class="fa fa-star-o"></span></a>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6 mix all accesories bags">
                    <div class="single-product-item">
                        <figure>
                            <a href="#"><img src="<?= url('themes/'. $themeInfo->value)?>/img/products/img-8.jpg" alt=""></a>
                            <div class="p-status popular">popular</div>
                            <a href="#" class="primary-btn btn-sm pc-btn"><i class="fa fa-shopping-cart"></i> Add to cart</a>
                        </figure>
                        <div class="product-text">
                            <h6>Blue Dress with details</h6>
                            <p>$35.50</p>
                            <div class="rating">
                                <p class="d-flex justify-content-center">
                                    <a href="#"><span class="fa fa-star-o"></span></a>
                                    <a href="#"><span class="fa fa-star-o"></span></a>
                                    <a href="#"><span class="fa fa-star-o"></span></a>
                                    <a href="#"><span class="fa fa-star-o"></span></a>
                                    <a href="#"><span class="fa fa-star-o"></span></a>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Latest Product End -->

    <!-- Lookbok Section Begin -->
    <section class="lookbok-section">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-4 offset-lg-1">
                    <div class="lookbok-left">
                        <div class="section-title">
                            <h2>2019 <br />#Fashion Hub</h2>
                        </div>
                        <p>Fusce urna quam, euismod sit amet mollis quis, vestibulum quis velit. Vestibulum malesuada
                            aliquet libero viverra cursus. Aliquam erat volutpat. Morbi id dictum quam, ut commodo
                            lorem. In at nisi nec arcu porttitor aliquet vitae at dui. Sed sollicitudin nulla non leo
                            viverra scelerisque. Phasellus facilisis lobortis metus, sit amet viverra lectus finibus ac.
                            Aenean non felis dapibus, placerat libero auctor, ornare ante. Morbi quis ex eleifend,
                            sodales nulla vitae, scelerisque ante. Nunc id vulputate dui. Suspendisse consectetur rutrum
                            metus nec scelerisque. s</p>
                        <a href="#" class="primary-btn look-btn">See More</a>
                    </div>
                </div>
                <div class="col-lg-5 offset-lg-1">
                    <div class="lookbok-pic">
                        <img src="<?= url('themes/'. $themeInfo->value)?>/img/lookbok.jpg" alt="">
                        <div class="pic-text">fashion</div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Lookbok Section End -->

    <!-- Logo Section Begin -->
    <div class="logo-section spad">
        <div class="logo-items owl-carousel">
            <div class="logo-item">
                <img src="<?= url('themes/'. $themeInfo->value)?>/img/logos/logo-1.png" alt="">
            </div>
            <div class="logo-item">
                <img src="<?= url('themes/'. $themeInfo->value)?>/img/logos/logo-2.png" alt="">
            </div>
            <div class="<?= url('themes/'. $themeInfo->value)?>/logo-item">
                <img src="<?= url('themes/'. $themeInfo->value)?>/img/logos/logo-3.png" alt="">
            </div>
            <div class="logo-item">
                <img src="<?= url('themes/'. $themeInfo->value)?>/img/logos/logo-4.png" alt="">
            </div>
            <div class="logo-item">
                <img src="<?= url('themes/'. $themeInfo->value)?>/img/logos/logo-5.png" alt="">
            </div>
        </div>
    </div>
    <!-- Logo Section End -->

    <?php include("footer.php") ?>