<?php include("header.php") ?>
    <!-- Header Info Begin -->

    <div class="header-info">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-4">
                    <div class="header-item">
                        <img src="<?= url('themes/'. $themeInfo->value)?>/img/icons/delivery.png" alt="">
                        <p>Free shipping on orders over $30 in USA</p>
                    </div>
                </div>
                <div class="col-md-4 text-left text-lg-center">
                    <div class="header-item">
                        <img src="<?= url('themes/'. $themeInfo->value)?>/img/icons/voucher.png" alt="">
                        <p>20% Student Discount</p>
                    </div>
                </div>
                <div class="col-md-4 text-left text-xl-right">
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

    <!-- Page Add Section Begin -->
    <section class="page-add">
        <div class="container">
            <div class="row">
                <div class="col-lg-4">
                    <div class="page-breadcrumb">
                        <h2>Dresses<span>.</span></h2>
                        <a href="#">Home</a>
                        <a href="#">Dresses</a>
                        <a class="active" href="#">Night Dresses</a>
                    </div>
                </div>
                <div class="col-lg-8">
                    <img src="<?= url('themes/'. $themeInfo->value)?>/img/add.jpg" alt="">
                </div>
            </div>
        </div>
    </section>
    <!-- Page Add Section End -->

    <!-- Categories Page Section Begin -->
    <section class="categories-page spad">
        <div class="container">
            <div class="categories-controls">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="categories-filter">
                            <div class="cf-left">
                                <form action="#">
                                    <select class="sort">
                                        <option value="">Sort by</option>
                                        <option value="">Orders</option>
                                        <option value="">Newest</option>
                                        <option value="">Price</option>
                                    </select>
                                </form>
                            </div>
                            <div class="cf-right">
                                <span>20 Products</span>
                                <a href="#">2</a>
                                <a href="#" class="active">4</a>
                                <a href="#">6</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-6 col-md-6">
                    <div class="single-product-item">
                        <figure>
                            <img src="<?= url('themes/'. $themeInfo->value)?>/img/products/img-9.jpg" alt="">
                            <div class="p-status">new</div>
                            <div class="hover-icon">
                                <a href="<?= url('themes/'. $themeInfo->value)?>/img/products/img-9.jpg" class="pop-up"><img src="<?= url('themes/'. $themeInfo->value)?>/img/icons/zoom-plus.png"
                                        alt=""></a>
                            </div>
                            <a href="#" class="primary-btn btn-sm pc-btn"><i class="fa fa-shopping-cart"></i> Add to cart</a>
                        </figure>
                        <div class="product-text">
                            <a href="#">
                                <h6>Green Dress with details</h6>
                            </a>
                            <div class="d-flex">
                                <p class="w-50">$22.90</p>
                                <div class="rating w-50">
                                    <p class="d-flex justify-content-end">
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
                <div class="col-lg-6 col-md-6">
                    <div class="row">
                        <div class="col-lg-6 col-md-6">
                            <div class="single-product-item">
                                <figure>
                                    <img src="<?= url('themes/'. $themeInfo->value)?>/img/products/img-2.jpg" alt="">
                                    <div class="p-status sale">sale</div>
                                    <a href="#" class="primary-btn btn-sm pc-btn"><i class="fa fa-shopping-cart"></i> Add to cart</a>
                                </figure>
                                <div class="product-text">
                                    <a href="#">
                                        <h6>Yellow Maxi Dress</h6>
                                    </a>
                                    <div class="d-flex">
                                        <p class="w-50">$22.90</p>
                                        <div class="rating w-50">
                                            <p class="d-flex justify-content-end">
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
                        <div class="col-lg-6 col-md-6">
                            <div class="single-product-item">
                                <figure>
                                    <img src="<?= url('themes/'. $themeInfo->value)?>/img/products/img-3.jpg" alt="">
                                    <div class="p-status">new</div>
                                    <div class="hover-icon">
                                        <a href="<?= url('themes/'. $themeInfo->value)?>/img/products/img-3.jpg" class="pop-up"><img
                                                src="<?= url('themes/'. $themeInfo->value)?>/img/icons/zoom-plus.png" alt=""></a>
                                    </div>
                                    <a href="#" class="primary-btn btn-sm pc-btn"><i class="fa fa-shopping-cart"></i> Add to cart</a>
                                </figure>
                                <div class="product-text">
                                    <a href="#">
                                        <h6>One piece bodysuit</h6>
                                    </a>
                                    <div class="d-flex">
                                        <p class="w-50">$22.90</p>
                                        <div class="rating w-50">
                                            <p class="d-flex justify-content-end">
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
                        <div class="col-lg-6 col-md-6">
                            <div class="single-product-item">
                                <figure>
                                    <img src="<?= url('themes/'. $themeInfo->value)?>/img/products/img-6.jpg" alt="">
                                    <div class="p-status sale">sale</div>
                                    <a href="#" class="primary-btn btn-sm pc-btn"><i class="fa fa-shopping-cart"></i> Add to cart</a>
                                </figure>
                                <div class="product-text">
                                    <a href="#">
                                        <h6>Yellow Maxi Dress</h6>
                                    </a>
                                    <div class="d-flex">
                                        <p class="w-50">$22.90</p>
                                        <div class="rating w-50">
                                            <p class="d-flex justify-content-end">
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
                        <div class="col-lg-6 col-md-6">
                            <div class="single-product-item">
                                <figure>
                                    <img src="<?= url('themes/'. $themeInfo->value)?>/img/products/img-1.jpg" alt="">
                                    <div class="hover-icon">
                                        <a href="<?= url('themes/'. $themeInfo->value)?>/img/products/img-1.jpg" class="pop-up"><img
                                                src="<?= url('themes/'. $themeInfo->value)?>/img/icons/zoom-plus.png" alt=""></a>
                                    </div>
                                    <a href="#" class="primary-btn btn-sm pc-btn"><i class="fa fa-shopping-cart"></i> Add to cart</a>
                                </figure>
                                <div class="product-text">
                                    <a href="#">
                                        <h6>One piece bodysuit</h6>
                                    </a>
                                    <div class="d-flex">
                                        <p class="w-50">$22.90</p>
                                        <div class="rating w-50">
                                            <p class="d-flex justify-content-end">
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
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="single-product-item">
                        <figure>
                            <img src="<?= url('themes/'. $themeInfo->value)?>/img/products/img-5.jpg" alt="">
                            <div class="p-status">new</div>
                            <div class="hover-icon">
                                <a href="<?= url('themes/'. $themeInfo->value)?>/img/products/img-5.jpg" class="pop-up"><img src="<?= url('themes/'. $themeInfo->value)?>/img/icons/zoom-plus.png"
                                        alt=""></a>
                            </div>
                            <a href="#" class="primary-btn btn-sm pc-btn"><i class="fa fa-shopping-cart"></i> Add to cart</a>
                        </figure>
                        <div class="product-text">
                            <a href="#">
                                <h6>Green Dress with details</h6>
                            </a>
                            <div class="d-flex">
                                <p class="w-50">$22.90</p>
                                <div class="rating w-50">
                                    <p class="d-flex justify-content-end">
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
                <div class="col-lg-3 col-md-6">
                    <div class="single-product-item">
                        <figure>
                            <img src="<?= url('themes/'. $themeInfo->value)?>/img/products/img-4.jpg" alt="">
                            <div class="p-status popular">popular</div>
                            <div class="hover-icon">
                                <a href="<?= url('themes/'. $themeInfo->value)?>/img/products/img-4.jpg" class="pop-up"><img src="<?= url('themes/'. $themeInfo->value)?>/img/icons/zoom-plus.png"
                                        alt=""></a>
                            </div>
                            <a href="#" class="primary-btn btn-sm pc-btn"><i class="fa fa-shopping-cart"></i> Add to cart</a>
                        </figure>
                        <div class="product-text">
                            <a href="#">
                                <h6>Blue Dress with details</h6>
                            </a>
                            <div class="d-flex">
                                <p class="w-50">$22.90</p>
                                <div class="rating w-50">
                                    <p class="d-flex justify-content-end">
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
                <div class="col-lg-3 col-md-6">
                    <div class="single-product-item">
                        <figure>
                            <img src="<?= url('themes/'. $themeInfo->value)?>/img/products/img-8.jpg" alt="">
                            <div class="p-status popular">popular</div>
                            <div class="hover-icon">
                                <a href="<?= url('themes/'. $themeInfo->value)?>/img/products/img-8.jpg" class="pop-up"><img src="<?= url('themes/'. $themeInfo->value)?>/img/icons/zoom-plus.png"
                                        alt=""></a>
                            </div>
                            <a href="#" class="primary-btn btn-sm pc-btn"><i class="fa fa-shopping-cart"></i> Add to cart</a>
                        </figure>
                        <div class="product-text">
                            <a href="#">
                                <h6>Blue Dress with details</h6>
                            </a>
                            <div class="d-flex">
                                <p class="w-50">$22.90</p>
                                <div class="rating w-50">
                                    <p class="d-flex justify-content-end">
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
                <div class="col-lg-3 col-md-6">
                    <div class="single-product-item">
                        <figure>
                            <img src="<?= url('themes/'. $themeInfo->value)?>/img/products/img-10.jpg" alt="">
                            <div class="p-status popular">popular</div>
                            <div class="hover-icon">
                                <a href="<?= url('themes/'. $themeInfo->value)?>/img/products/img-10.jpg" class="pop-up"><img src="<?= url('themes/'. $themeInfo->value)?>/img/icons/zoom-plus.png"
                                        alt=""></a>
                            </div>
                            <a href="#" class="primary-btn btn-sm pc-btn"><i class="fa fa-shopping-cart"></i> Add to cart</a>
                        </figure>
                        <div class="product-text">
                            <a href="#">
                                <h6>Blue Dress with details</h6>
                            </a>
                            <div class="d-flex">
                                <p class="w-50">$22.90</p>
                                <div class="rating w-50">
                                    <p class="d-flex justify-content-end">
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
                <div class="col-lg-6 col-md-6">
                    <div class="row">
                        <div class="col-lg-6 col-md-6">
                            <div class="single-product-item">
                                <figure>
                                    <img src="<?= url('themes/'. $themeInfo->value)?>/img/products/img-11.jpg" alt="">
                                    <div class="p-status sale">sale</div>
                                    <a href="#" class="primary-btn btn-sm pc-btn"><i class="fa fa-shopping-cart"></i> Add to cart</a>
                                </figure>
                                <div class="product-text">
                                    <a href="#">
                                        <h6>Yellow Maxi Dress</h6>
                                    </a>
                                    <div class="d-flex">
                                        <p class="w-50">$22.90</p>
                                        <div class="rating w-50">
                                            <p class="d-flex justify-content-end">
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
                        <div class="col-lg-6 col-md-6">
                            <div class="single-product-item">
                                <figure>
                                    <img src="<?= url('themes/'. $themeInfo->value)?>/img/products/img-12.jpg" alt="">
                                    <div class="p-status">new</div>
                                    <div class="hover-icon">
                                        <a href="<?= url('themes/'. $themeInfo->value)?>/img/products/img-12.jpg" class="pop-up"><img
                                                src="<?= url('themes/'. $themeInfo->value)?>/img/icons/zoom-plus.png" alt=""></a>
                                    </div>
                                    <a href="#" class="primary-btn btn-sm pc-btn"><i class="fa fa-shopping-cart"></i> Add to cart</a>
                                </figure>
                                <div class="product-text">
                                    <a href="#">
                                        <h6>One piece bodysuit</h6>
                                    </a>
                                    <div class="d-flex">
                                        <p class="w-50">$22.90</p>
                                        <div class="rating w-50">
                                            <p class="d-flex justify-content-end">
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
                        <div class="col-lg-6 col-md-6">
                            <div class="single-product-item">
                                <figure>
                                    <img src="<?= url('themes/'. $themeInfo->value)?>/img/products/img-14.jpg" alt="">
                                    <div class="p-status sale">sale</div>
                                    <a href="#" class="primary-btn btn-sm pc-btn"><i class="fa fa-shopping-cart"></i> Add to cart</a>
                                </figure>
                                <div class="product-text">
                                    <a href="#">
                                        <h6>Yellow Maxi Dress</h6>
                                    </a>
                                    <div class="d-flex">
                                        <p class="w-50">$22.90</p>
                                        <div class="rating w-50">
                                            <p class="d-flex justify-content-end">
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
                        <div class="col-lg-6 col-md-6">
                            <div class="single-product-item">
                                <figure>
                                    <img src="<?= url('themes/'. $themeInfo->value)?>/img/products/img-15.jpg" alt="">
                                    <div class="hover-icon">
                                        <a href="<?= url('themes/'. $themeInfo->value)?>/img/products/img-15.jpg" class="pop-up"><img
                                                src="<?= url('themes/'. $themeInfo->value)?>/img/icons/zoom-plus.png" alt=""></a>
                                    </div>
                                    <a href="#" class="primary-btn btn-sm pc-btn"><i class="fa fa-shopping-cart"></i> Add to cart</a>
                                </figure>
                                <div class="product-text">
                                    <a href="#">
                                        <h6>One piece bodysuit</h6>
                                    </a>
                                    <div class="d-flex">
                                        <p class="w-50">$22.90</p>
                                        <div class="rating w-50">
                                            <p class="d-flex justify-content-end">
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
                </div>
                <div class="col-lg-6 col-md-6">
                    <div class="single-product-item">
                        <figure>
                            <img src="<?= url('themes/'. $themeInfo->value)?>/img/products/img-13.jpg" alt="">
                            <div class="p-status">new</div>
                            <div class="hover-icon">
                                <a href="<?= url('themes/'. $themeInfo->value)?>/img/products/img-13.jpg" class="pop-up"><img src="<?= url('themes/'. $themeInfo->value)?>/img/icons/zoom-plus.png"
                                        alt=""></a>
                            </div>
                            <a href="#" class="primary-btn btn-sm pc-btn"><i class="fa fa-shopping-cart"></i> Add to cart</a>
                        </figure>
                        <div class="product-text">
                            <a href="#">
                                <h6>Green Dress with details</h6>
                            </a>
                            <div class="d-flex">
                                <p class="w-50">$22.90</p>
                                <div class="rating w-50">
                                    <p class="d-flex justify-content-end">
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
            <div class="more-product">
                <div class="row">
                    <div class="col-lg-12 text-center">
                        <a href="#" class="primary-btn">Load More</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Categories Page Section End -->

    <?php include("footer.php") ?>