<?php
include 'common/header.php';
include 'common/navber.php';
include 'common/sidebar.php';
?>
<!--begin::Main-->
<div class="app-main flex-column flex-row-fluid" id="kt_app_main">
    <!--begin::Content wrapper-->
    <div class="d-flex flex-column flex-column-fluid">
        <!--begin::Toolbar-->
        <div id="kt_app_toolbar" class="app-toolbar py-3 py-lg-6">
            <!--begin::Toolbar container-->
            <div id="kt_app_toolbar_container" class="app-container container-xxl d-flex flex-stack">
                <!--begin::Page title-->
                <div class="page-title d-flex flex-column justify-content-center flex-wrap me-3">
                    <!--begin::Title-->
                    <h1 class="page-heading d-flex text-gray-900 fw-bold fs-3 flex-column justify-content-center my-0">Vendors Product Details</h1>
                    <!--end::Title-->
                    <!--begin::Breadcrumb-->
                    <ul class="breadcrumb breadcrumb-separatorless fw-semibold fs-7 my-0 pt-1">
                        <!--begin::Item-->
                        <li class="breadcrumb-item text-muted">
                            <a href="index.php" class="text-muted text-hover-primary">Home</a>
                        </li>
                        <!--end::Item-->
                        <!--begin::Item-->
                        <li class="breadcrumb-item">
                            <span class="bullet bg-gray-500 w-5px h-2px"></span>
                        </li>
                        <!--end::Item-->
                        <!--begin::Item-->
                        <li class="breadcrumb-item text-muted">Vendor Product Details</li>
                        <!--end::Item-->
                    </ul>
                    <!--end::Breadcrumb-->
                </div>
                <!--end::Page title-->
                <!--begin::Actions-->
                <div class="d-flex align-items-center gap-2 gap-lg-3">
                    <!--begin::Secondary button-->
                    <!-- <a href="apps/ecommerce/sales/listing.html" class="btn btn-sm fw-bold btn-secondary">Recent Orders</a> -->
                    <!--end::Secondary button-->
                    <!--begin::Primary button-->
                    <!-- <a href="apps/ecommerce/catalog/add-product.html" class="btn btn-sm fw-bold btn-primary">New Product</a> -->
                    <!--end::Primary button-->
                </div>
                <!--end::Actions-->
            </div>
            <!--end::Toolbar container-->
        </div>
        <!--end::Toolbar-->


        <?php

        $total_review_data = json_decode(cjCurl('product-reviews', $id))->data;
        $total_review = !empty($total_review_data->list) ? count($total_review_data->list) : 0;

        $total_score = 0;

        if ($total_review > 0) {
            foreach ($total_review_data->list as $comment) {
                $total_score += intval($comment->score);
            }
            $average_score = round($total_score / $total_review);
        } else {
            $average_score = 0;
        }

        $array = [];

        for ($i = 1; $i <= $average_score; $i++) {
            $array[] = $i;
        }

        ?>

        <!--begin::Content-->
        <div id="kt_app_content" class="app-content flex-column-fluid ">
            <!--begin::Content container-->
            <div id="kt_app_content_container" class="app-container container-xxl">
                <!--begin::Layout-->
                <div class="row gutter-lg">
                    <div class="main-content">
                        <div class="product product-single product-popup row">
                            <div class="col-md-4 mb-6">
                                <!-- Swiper and EasyZoom plugins start -->
                                <div class="swiper-container gallery-top mb-3">
                                    <div class="swiper-wrapper">

                                        <?php foreach ($cjVendorProduct->productImageSet as $item) : ?>

                                            <div class="swiper-slide easyzoom easyzoom--overlay">
                                                <a href="<?php echo $item;  ?>">
                                                    <img src="<?php echo $item;  ?>" alt="" class="img-fluid" />
                                                </a>
                                            </div>

                                        <?php endforeach ?>



                                    </div>
                                    <!-- Add Arrows -->
                                    <div class="swiper-button-next swiper-button-white"></div>
                                    <div class="swiper-button-prev swiper-button-white"></div>
                                </div>
                                <div class="swiper-container gallery-thumbs">
                                    <div class="swiper-wrapper">
                                        <?php foreach ($cjVendorProduct->productImageSet as $item) : ?>
                                            <div class="swiper-slide">
                                                <img src="<?php echo $item;  ?>" alt="" class="img-fluid">
                                            </div>
                                        <?php endforeach ?>

                                    </div>
                                </div>
                                <!-- Swiper and EasyZoom plugins end -->
                            </div>
                            <div class="col-md-5 mb-6 mb-md-6">
                                <div class="product-details" data-sticky-options="{'minWidth': 767}">
                                    <h1 class="product-title"><?php echo $cjVendorProduct->productNameEn ?></h1>
                                    <div class="product-bm-wrapper">
                                        <div class="product-meta">
                                            <div class="product-categories">
                                                Category:

                                                <span class="product-category"><a href="#"><?php echo $cjVendorProduct->categoryName ?></a></span>
                                            </div>
                                            <div class="product-sku">
                                                SKU: <span><?php echo $cjVendorProduct->productSku ?></span>
                                            </div>
                                        </div>
                                    </div>

                                    <hr class="product-divider">

                                    <div class="product-price"><ins class="new-price">$<?php echo $cjVendorProduct->sellPrice ?></ins></div>

                                    <div class="ratings-container">
                                        <div class="ratings-full">
                                            <span class="ratings" style="width: 80%;"></span>
                                            <span class="tooltiptext tooltip-top"></span>
                                        </div>
                                        <a href="#product-tab-reviews" class="rating-reviews scroll-to">(<?php echo $total_review ?> Reviews)</a>
                                    </div>

                                    <div class="product-short-desc">
                                        <!-- <ul class="list-type-check list-style-none">
                                                                <li>Ultrices eros in cursus turpis massa cursus mattis.</li>
                                                                <li>Volutpat ac tincidunt vitae semper quis lectus.</li>
                                                                <li>Aliquam id diam maecenas ultricies mi eget mauris.</li>
                                                            </ul> -->
                                    </div>

                                    <hr class="product-divider">


                                </div>

                                <div class="product-variation-price">
                                    <span></span>
                                </div>

                                <div class="fix-bottom product-sticky-content sticky-content">
                                    <div class="product-form container">
                                        <!-- <div class="product-qty-form">
                                                                    <div class="qty-input">
                                                                        <button class="qty-count qty-count--minus" data-action="minus" type="button">-</button>
                                                                        <input class="product-qty" type="number" name="product-qty" min="0" max="10" value="1">
                                                                        <button class="qty-count qty-count--add" data-action="add" type="button">+</button>
                                                                    </div>
                                                                </div> -->

                                        <!-- <button class="btn btn-primary btn-cart add-store-data-modal">
                                            <i class="fa-solid fa-bag-shopping"></i>
                                            <span>Add to Store</span>
                                        </button> -->
                                        <?php if (in_array($cjVendorProduct->pid, array_column($product, 'vendor_product_id'))) : ?>
                                            <button class="btn btn-primary btn-cart add-store-data-modal">
                                                <i class="fa-solid fa-pencil"></i>
                                                <span>Edit Store</span>
                                            </button>
                                            <button class="btn btn-danger btn-cart remove-store-data" data-id="<?php echo $cjVendorProduct->pid ?>">
                                                <i class="fa-solid fa-trash-can"></i>
                                                <span>Remove Store</span>
                                            </button>
                                        <?php else : ?>
                                            <button class="btn btn-primary btn-cart add-store-data-modal">
                                                <i class="fa-solid fa-bag-shopping"></i>
                                                <span>Add to Store</span>
                                            </button>
                                        <?php endif; ?>

                                        <div class="social-links-wrapper">
                                            <div class="social-links">
                                                <div class="social-icons social-no-color border-thin">
                                                    <a href="#" class="social-icon social-facebook fa-brands fa-facebook-f"></a>
                                                    <a href="#" class="social-icon social-twitter fa-brands fa-x-twitter"></a>
                                                    <a href="#" class="social-icon social-pinterest fa-brands fa-pinterest-p"></a>
                                                    <a href="#" class="social-icon social-whatsapp fa-brands fa-whatsapp"></a>
                                                    <a href="#" class="social-icon social-youtube fa-brands fa-linkedin-in"></a>
                                                </div>
                                            </div>
                                            <span class="divider d-xs-show"></span>
                                            <div class="product-link-wrapper d-flex">
                                                <a href="#" class="btn-product-icon btn-wishlist fa-regular fa-heart"><span></span></a>
                                                <a href="#" class="btn-product-icon btn-compare btn-icon-left fa-solid fa-scale-balanced"><span></span></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-3 mb-6 mb-md-6">
                                <div class="sticky-sidebar sticky-sidebar-fixed">
                                    <div class="widget widget-icon-box mb-6">
                                        <div class="icon-box icon-box-side">
                                            <span class="icon-box-icon text-dark">
                                                <i class="fa-solid fa-truck-fast"></i>
                                            </span>
                                            <div class="icon-box-content">
                                                <h4 class="icon-box-title">Free Shipping &amp; Returns</h4>
                                                <p>For all orders over $99</p>
                                            </div>
                                        </div>
                                        <div class="icon-box icon-box-side">
                                            <span class="icon-box-icon text-dark">
                                                <i class="fa-solid fa-bag-shopping"></i>
                                            </span>
                                            <div class="icon-box-content">
                                                <h4 class="icon-box-title">Secure Payment</h4>
                                                <p>We ensure secure payment</p>
                                            </div>
                                        </div>
                                        <div class="icon-box icon-box-side">
                                            <span class="icon-box-icon text-dark">
                                                <i class="fa-solid fa-money-bill"></i>
                                            </span>
                                            <div class="icon-box-content">
                                                <h4 class="icon-box-title">Money Back Guarantee</h4>
                                                <p>Any back within 30 days</p>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- End of Widget Icon Box -->

                                    <div class="widget widget-banner mb-9">
                                        <div class="banner banner-fixed br-sm relative">
                                            <figure>
                                                <img src="<?= url('/admin/') ?>/assets/media/products/banner3.jpg" alt="Banner" width="100%" height="" style="background-color: #1D2D44;">
                                            </figure>
                                            <div class="banner-content">
                                                <div class="banner-price-info font-weight-bolder text-white lh-1 ls-25">
                                                    40<sup class="font-weight-bold">%</sup><sub class="font-weight-bold text-uppercase ls-25">Off</sub>
                                                </div>
                                                <h4 class="banner-subtitle text-white font-weight-bolder text-uppercase mb-0">
                                                    Ultimate Sale</h4>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- End of Widget Banner -->
                                </div>
                            </div>


                            <div class="tab tab-nav-boxed tab-nav-underline product-tabs mb-6">
                                <!--begin:::Tabs-->
                                <ul class="nav nav-tabs">
                                    <!--begin:::Tab item-->
                                    <li class="nav-item">
                                        <a class="nav-link text-active-primary pb-4 active" data-bs-toggle="tab" href="#kt_ecommerce_add_product_general">Description</a>
                                    </li>
                                    <!--end:::Tab item-->
                                    <!--begin:::Tab item-->
                                    <!-- <li class="nav-item">
                                                            <a class="nav-link text-active-primary pb-4" data-bs-toggle="tab" href="#kt_ecommerce_add_product_advanced">SPECIFICATION</a>
                                                        </li> -->
                                    <!--end:::Tab item-->
                                    <!--begin:::Tab item-->
                                    <li class="nav-item">
                                        <a class="nav-link text-active-primary pb-4" data-bs-toggle="tab" href="#kt_ecommerce_add_product_reviews">CUSTOMER REVIEWS (<?php echo $total_review ?>)</a>
                                    </li>
                                    <!--end:::Tab item-->
                                </ul>
                                <!--end:::Tabs-->
                                <!--begin::Tab content-->
                                <div class="tab-content">
                                    <!--begin::Tab pane-->
                                    <div class="tab-pane fade show active" id="kt_ecommerce_add_product_general" role="tab-panel">
                                        <div class="row mb-4">
                                            <div class="col-md-6 mb-5">
                                                <h3 class="title tab-pane-title font-weight-bold mb-2">Detail</h3>

                                                <?php echo $cjVendorProduct->description ?>

                                                <!-- <p class="mb-4">Lorem ipsum dolor sit amet, consectetur adipiscing elit,
                                                                        sed do eiusmod tempor incididunt arcu cursus vitae congue mauris.
                                                                        Sagittis id consectetur purus ut. Tellus rutrum tellus pelle Vel
                                                                        pretium lectus quam id leo in vitae turpis massa.</p> -->
                                                <!-- 
                                                                    <ul class="list-type-check">
                                                                        <li>Nunc nec porttitor turpis. In eu risus enim. In vitae mollis
                                                                            elit.
                                                                        </li>
                                                                        <li>Vivamus finibus vel mauris ut vehicula.</li>
                                                                        <li>Nullam a magna porttitor, dictum risus nec, faucibus sapien.
                                                                        </li>
                                                                    </ul> -->
                                            </div>
                                            <div class="col-md-6 mb-5">
                                                <!-- <div class="banner banner-video product-video br-xs">
                                                                        <figure class="banner-media">
                                                                            <a href="#">
                                                                                <img src="<?= url('/admin/') ?>/assets/media/product-single/video-banner-610x300.jpg" alt="banner" width="610" height="300" style="background-color: #bebebe;">
                                                                            </a>
                                                                            <a class="btn-play-video btn-iframe" href="<?= url('/admin/') ?>/assets/video/memory-of-a-woman.mp4"></a>
                                                                        </figure>
                                                                    </div> -->
                                            </div>
                                            <div class="row">
                                                <div class="col-sm-4 col-md-4 mb-3">
                                                    <h5 class="sub-title font-weight-bold"><span class="mr-3">1.</span> Free
                                                        Shipping &amp; Return</h5>
                                                    <p class="detail pl-5">We offer free shipping for products on orders
                                                        above 50$ and offer free delivery for all orders in US.</p>
                                                </div>
                                                <div class="col-sm-4 col-md-4 mb-3">
                                                    <h5 class="sub-title font-weight-bold"><span>2.</span> Free and Easy
                                                        Returns</h5>
                                                    <p class="detail pl-5">We guarantee our products and you could get back
                                                        all of your money anytime you want in 30 days.</p>
                                                </div>
                                                <div class="col-sm-4 col-md-4 mb-3">
                                                    <h5 class="sub-title font-weight-bold"><span>3.</span> Special Financing
                                                    </h5>
                                                    <p class="detail pl-5">Get 20%-50% off items over 50$ for a month or
                                                        over 250$ for a year with our special credit card.</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!--end::Tab pane-->
                                    <!--begin::Tab pane-->
                                    <div class="tab-pane fade product-tab-specification" id="kt_ecommerce_add_product_advanced" role="tab-panel">
                                        <ul class="list-none">
                                            <li>
                                                <label>Model</label>
                                                <p>Skysuite 320</p>
                                            </li>
                                            <li>
                                                <label>Color</label>
                                                <p>Black</p>
                                            </li>
                                            <li>
                                                <label>Size</label>
                                                <p>Large, Small</p>
                                            </li>
                                            <li>
                                                <label>Guarantee Time</label>
                                                <p>3 Months</p>
                                            </li>
                                        </ul>
                                    </div>
                                    <!--end::Tab pane-->
                                    <!--begin::Tab pane-->
                                    <div class="tab-pane fade" id="kt_ecommerce_add_product_reviews" role="tab-panel">
                                        <!--begin:::Tabs-->
                                        <ul class="nav nav-custom nav-tabs nav-line-tabs nav-line-tabs-2x border-0 fs-4 fw-semibold mb-n2">
                                            <!--begin:::Tab item-->
                                            <!-- <li class="nav-item">
                                                                    <a class="nav-link text-active-primary pb-4 active" data-bs-toggle="tab" href="#kt_ecommerce_add_product_general2">Show All</a>
                                                                </li> -->
                                            <!--end:::Tab item-->
                                            <!--begin:::Tab item-->
                                            <!-- <li class="nav-item">
                                                                    <a class="nav-link text-active-primary pb-4" data-bs-toggle="tab" href="#kt_ecommerce_add_product_advanced2">Most Helpful Positive</a>
                                                                </li> -->
                                            <!--end:::Tab item-->
                                            <!--begin:::Tab item-->
                                            <!-- <li class="nav-item">
                                                                    <a class="nav-link text-active-primary pb-4" data-bs-toggle="tab" href="#kt_ecommerce_add_product_reviews2">Most Helpful Negative</a>
                                                                </li> -->
                                            <!--end:::Tab item-->
                                        </ul>
                                        <!--end:::Tabs-->
                                        <!--begin::Tab content-->
                                        <div class="tab-content">
                                            <!--begin::Tab pane-->
                                            <div class="tab-pane fade show active" id="kt_ecommerce_add_product_general2" role="tab-panel">
                                                <ul class="comments list-style-none">

                                                    <?php if ($total_review > 0) : ?>

                                                        <?php foreach ($total_review_data as $item) : ?>

                                                            <li class="comment">
                                                                <div class="comment-body">
                                                                    <!-- <figure class="comment-avatar">
                                                                                    <img src="<?= url('/admin/') ?>/assets/media/agents/1-100x100.png" alt="Commenter Avatar" width="90" height="90">
                                                                                </figure> -->
                                                                    <div class="comment-content">
                                                                        <h4 class="comment-author">
                                                                            <a href="#"><?php echo $item->commentUser ?></a>
                                                                            <span class="comment-date"><?php echo $item->commentDate ?></span>
                                                                        </h4>
                                                                        <div class="ratings-container comment-rating">
                                                                            <div class="ratings-full">
                                                                                <span class="ratings" style="width: 60%;"></span>
                                                                                <span class="tooltiptext tooltip-top"></span>
                                                                            </div>
                                                                        </div>
                                                                        <p> <?php echo $item->comment ?> </p>
                                                                        <!-- <div class="comment-action">
                                                                                        <a href="#"
                                                                                            class="btn btn-secondary btn-link btn-underline sm btn-icon-left font-weight-normal text-capitalize">
                                                                                            <i class="far fa-thumbs-up"></i>Helpful (1)
                                                                                        </a>
                                                                                        <a href="#"
                                                                                            class="btn btn-dark btn-link btn-underline sm btn-icon-left font-weight-normal text-capitalize">
                                                                                            <i class="far fa-thumbs-down"></i>Unhelpful
                                                                                            (0)
                                                                                        </a>
                                                                                    </div> -->
                                                                    </div>
                                                                </div>
                                                            </li>

                                                        <?php endforeach ?>
                                                    <?php endif ?>

                                                </ul>
                                            </div>
                                            <!--end::Tab pane-->
                                            <!--begin::Tab pane-->
                                            <div class="tab-pane fade" id="kt_ecommerce_add_product_advanced2" role="tab-panel">
                                                <ul class="comments list-style-none">
                                                    <li class="comment">
                                                        <div class="comment-body">
                                                            <figure class="comment-avatar">
                                                                <img src="<?= url('/admin/') ?>/assets/media/agents/1-100x100.png" alt="Commenter Avatar" width="90" height="90">
                                                            </figure>
                                                            <div class="comment-content">
                                                                <h4 class="comment-author">
                                                                    <a href="#">John Doe</a>
                                                                    <span class="comment-date">March 22, 2021 at
                                                                        1:54 pm</span>
                                                                </h4>
                                                                <div class="ratings-container comment-rating">
                                                                    <div class="ratings-full">
                                                                        <span class="ratings" style="width: 60%;"></span>
                                                                        <span class="tooltiptext tooltip-top"></span>
                                                                    </div>
                                                                </div>
                                                                <p>pellentesque habitant morbi tristique senectus
                                                                    et. In dictum non consectetur a erat.
                                                                    Nunc ultrices eros in cursus turpis massa
                                                                    tincidunt ante in nibh mauris cursus mattis.
                                                                    Cras ornare arcu dui vivamus arcu felis bibendum
                                                                    ut tristique.</p>
                                                                <div class="comment-action">
                                                                    <a href="#" class="btn btn-secondary btn-link btn-underline sm btn-icon-left font-weight-normal text-capitalize">
                                                                        <i class="far fa-thumbs-up"></i>Helpful (1)
                                                                    </a>
                                                                    <a href="#" class="btn btn-dark btn-link btn-underline sm btn-icon-left font-weight-normal text-capitalize">
                                                                        <i class="far fa-thumbs-down"></i>Unhelpful
                                                                        (0)
                                                                    </a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </li>
                                                    <li class="comment">
                                                        <div class="comment-body">
                                                            <figure class="comment-avatar">
                                                                <img src="<?= url('/admin/') ?>/assets/media/agents/2-100x100.png" alt="Commenter Avatar" width="90" height="90">
                                                            </figure>
                                                            <div class="comment-content">
                                                                <h4 class="comment-author">
                                                                    <a href="#">John Doe</a>
                                                                    <span class="comment-date">March 22, 2021 at
                                                                        1:52 pm</span>
                                                                </h4>
                                                                <div class="ratings-container comment-rating">
                                                                    <div class="ratings-full">
                                                                        <span class="ratings" style="width: 80%;"></span>
                                                                        <span class="tooltiptext tooltip-top"></span>
                                                                    </div>
                                                                </div>
                                                                <p>Nullam a magna porttitor, dictum risus nec,
                                                                    faucibus sapien.
                                                                    Ultrices eros in cursus turpis massa tincidunt
                                                                    ante in nibh mauris cursus mattis.
                                                                    Cras ornare arcu dui vivamus arcu felis bibendum
                                                                    ut tristique.</p>
                                                                <div class="comment-action">
                                                                    <a href="#" class="btn btn-secondary btn-link btn-underline sm btn-icon-left font-weight-normal text-capitalize">
                                                                        <i class="far fa-thumbs-up"></i>Helpful (1)
                                                                    </a>
                                                                    <a href="#" class="btn btn-dark btn-link btn-underline sm btn-icon-left font-weight-normal text-capitalize">
                                                                        <i class="far fa-thumbs-down"></i>Unhelpful
                                                                        (0)
                                                                    </a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </li>
                                                    <li class="comment">
                                                        <div class="comment-body">
                                                            <figure class="comment-avatar">
                                                                <img src="<?= url('/admin/') ?>/assets/media/agents/3-100x100.png" alt="Commenter Avatar" width="90" height="90">
                                                            </figure>
                                                            <div class="comment-content">
                                                                <h4 class="comment-author">
                                                                    <a href="#">John Doe</a>
                                                                    <span class="comment-date">March 22, 2021 at
                                                                        1:21 pm</span>
                                                                </h4>
                                                                <div class="ratings-container comment-rating">
                                                                    <div class="ratings-full">
                                                                        <span class="ratings" style="width: 60%;"></span>
                                                                        <span class="tooltiptext tooltip-top"></span>
                                                                    </div>
                                                                </div>
                                                                <p>In fermentum et sollicitudin ac orci phasellus. A
                                                                    condimentum vitae
                                                                    sapien pellentesque habitant morbi tristique
                                                                    senectus et. In dictum
                                                                    non consectetur a erat. Nunc scelerisque viverra
                                                                    mauris in aliquam sem fringilla.</p>
                                                                <div class="comment-action">
                                                                    <a href="#" class="btn btn-secondary btn-link btn-underline sm btn-icon-left font-weight-normal text-capitalize">
                                                                        <i class="far fa-thumbs-up"></i>Helpful (0)
                                                                    </a>
                                                                    <a href="#" class="btn btn-dark btn-link btn-underline sm btn-icon-left font-weight-normal text-capitalize">
                                                                        <i class="far fa-thumbs-down"></i>Unhelpful
                                                                        (1)
                                                                    </a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </li>
                                                </ul>
                                            </div>
                                            <!--end::Tab pane-->
                                            <!--begin::Tab pane-->
                                            <div class="tab-pane fade" id="kt_ecommerce_add_product_reviews2" role="tab-panel">
                                                <ul class="comments list-style-none">
                                                    <li class="comment">
                                                        <div class="comment-body">
                                                            <figure class="comment-avatar">
                                                                <img src="<?= url('/admin/') ?>/assets/media/agents/1-100x100.png" alt="Commenter Avatar" width="90" height="90">
                                                            </figure>
                                                            <div class="comment-content">
                                                                <h4 class="comment-author">
                                                                    <a href="#">John Doe</a>
                                                                    <span class="comment-date">March 22, 2021 at
                                                                        1:54 pm</span>
                                                                </h4>
                                                                <div class="ratings-container comment-rating">
                                                                    <div class="ratings-full">
                                                                        <span class="ratings" style="width: 60%;"></span>
                                                                        <span class="tooltiptext tooltip-top"></span>
                                                                    </div>
                                                                </div>
                                                                <p>pellentesque habitant morbi tristique senectus
                                                                    et. In dictum non consectetur a erat.
                                                                    Nunc ultrices eros in cursus turpis massa
                                                                    tincidunt ante in nibh mauris cursus mattis.
                                                                    Cras ornare arcu dui vivamus arcu felis bibendum
                                                                    ut tristique.</p>
                                                                <div class="comment-action">
                                                                    <a href="#" class="btn btn-secondary btn-link btn-underline sm btn-icon-left font-weight-normal text-capitalize">
                                                                        <i class="far fa-thumbs-up"></i>Helpful (1)
                                                                    </a>
                                                                    <a href="#" class="btn btn-dark btn-link btn-underline sm btn-icon-left font-weight-normal text-capitalize">
                                                                        <i class="far fa-thumbs-down"></i>Unhelpful
                                                                        (0)
                                                                    </a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </li>
                                                    <li class="comment">
                                                        <div class="comment-body">
                                                            <figure class="comment-avatar">
                                                                <img src="<?= url('/admin/') ?>/assets/media/agents/2-100x100.png" alt="Commenter Avatar" width="90" height="90">
                                                            </figure>
                                                            <div class="comment-content">
                                                                <h4 class="comment-author">
                                                                    <a href="#">John Doe</a>
                                                                    <span class="comment-date">March 22, 2021 at
                                                                        1:52 pm</span>
                                                                </h4>
                                                                <div class="ratings-container comment-rating">
                                                                    <div class="ratings-full">
                                                                        <span class="ratings" style="width: 80%;"></span>
                                                                        <span class="tooltiptext tooltip-top"></span>
                                                                    </div>
                                                                </div>
                                                                <p>Nullam a magna porttitor, dictum risus nec,
                                                                    faucibus sapien.
                                                                    Ultrices eros in cursus turpis massa tincidunt
                                                                    ante in nibh mauris cursus mattis.
                                                                    Cras ornare arcu dui vivamus arcu felis bibendum
                                                                    ut tristique.</p>
                                                                <div class="comment-action">
                                                                    <a href="#" class="btn btn-secondary btn-link btn-underline sm btn-icon-left font-weight-normal text-capitalize">
                                                                        <i class="far fa-thumbs-up"></i>Helpful (1)
                                                                    </a>
                                                                    <a href="#" class="btn btn-dark btn-link btn-underline sm btn-icon-left font-weight-normal text-capitalize">
                                                                        <i class="far fa-thumbs-down"></i>Unhelpful
                                                                        (0)
                                                                    </a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </li>
                                                    <li class="comment">
                                                        <div class="comment-body">
                                                            <figure class="comment-avatar">
                                                                <img src="<?= url('/admin/') ?>/assets/media/agents/3-100x100.png" alt="Commenter Avatar" width="90" height="90">
                                                            </figure>
                                                            <div class="comment-content">
                                                                <h4 class="comment-author">
                                                                    <a href="#">John Doe</a>
                                                                    <span class="comment-date">March 22, 2021 at
                                                                        1:21 pm</span>
                                                                </h4>
                                                                <div class="ratings-container comment-rating">
                                                                    <div class="ratings-full">
                                                                        <span class="ratings" style="width: 60%;"></span>
                                                                        <span class="tooltiptext tooltip-top"></span>
                                                                    </div>
                                                                </div>
                                                                <p>In fermentum et sollicitudin ac orci phasellus. A
                                                                    condimentum vitae
                                                                    sapien pellentesque habitant morbi tristique
                                                                    senectus et. In dictum
                                                                    non consectetur a erat. Nunc scelerisque viverra
                                                                    mauris in aliquam sem fringilla.</p>
                                                                <div class="comment-action">
                                                                    <a href="#" class="btn btn-secondary btn-link btn-underline sm btn-icon-left font-weight-normal text-capitalize">
                                                                        <i class="far fa-thumbs-up"></i>Helpful (0)
                                                                    </a>
                                                                    <a href="#" class="btn btn-dark btn-link btn-underline sm btn-icon-left font-weight-normal text-capitalize">
                                                                        <i class="far fa-thumbs-down"></i>Unhelpful
                                                                        (1)
                                                                    </a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </li>
                                                </ul>
                                            </div>
                                            <!--end::Tab pane-->
                                        </div>
                                        <!--end::Tab content-->
                                    </div>
                                    <!--end::Tab pane-->
                                </div>
                                <!--end::Tab content-->
                            </div>

                            <!-- <h3>Related Products</h3> -->

                        </div>
                    </div>

                </div>

            </div>
            <!--end::Layout-->
        </div>
        <!--end::Content container-->
    </div>
    <!--end::Content-->
</div>
<!--end::Content wrapper-->


<!--begin::Modals-->
<!--begin::Modal - variant - Add-->
<div class="modal fade" id="kt_modal_add_store" tabindex="-1" aria-hidden="true">
    <!--begin::Modal dialog-->
    <div class="modal-dialog modal-dialog-centered mw-650px">
        <!--begin::Modal content-->
        <div class="modal-content">
            <!--begin::Form-->
            <form class="form save_vendor_product" action="<?= url('dw-admin/save-vendor-product') ?>" method="POST" id="kt_modal_add_category_form" data-kt-redirect="" <?= url('/dw-admin/add-product') ?>">
                <?= csrf_field() ?>
                <input type="hidden" name="type" value="<?php echo ($vendor_variants) ? 'edit':'add'?>">
                <input type="hidden" name="price" value="<?php echo $cjVendorProduct->sellPrice ?>">
                <input type="hidden" name="prod_id" value="<?php echo ($product_id) ? $product_id->id:''?>">
                <input type="hidden" name="vendor_prod_id" value="<?php echo $cjVendorProduct->pid ?>">
                <input type="hidden" name="name" value="<?php echo $cjVendorProduct->productNameEn ?>">
                <input type="hidden" name="thumb_image" value="<?php echo $cjVendorProduct->productImageSet[0] ?>">
                <input type="hidden" name="sku" value="<?php echo $cjVendorProduct->productSku ?>">
                <div class="d-none">
                    <?php foreach ($cjVendorProduct->productImageSet as $item) : ?>
                        <div class="swiper-slide">
                            <input type="hidden" name="prod_image[]" value="<?php echo $item ?>">
                        </div>
                    <?php endforeach ?>
                </div>
                <!--begin::Modal header-->
                <div class="modal-header" id="kt_modal_add_category_header">
                    <!--begin::Modal title-->
                    <h2 class="fw-bold">Add Store Variant</h2>
                    <!--end::Modal title-->
                    <!--begin::Close-->
                    <div id="kt_modal_add_category_close" data-bs-dismiss="modal" class="btn btn-icon btn-sm btn-active-icon-primary">
                        <i class="ki-duotone ki-cross fs-1">
                            <span class="path1"></span>
                            <span class="path2"></span>
                        </i>
                    </div>
                    <!--end::Close-->
                </div>
                <!--end::Modal header-->
                <!--begin::Modal body-->
                <div class="modal-body py-10 px-lg-17">
                    <!--begin::Scroll-->
                    <div class="scroll-y me-n7 pe-7" id="kt_modal_add_category_scroll" data-kt-scroll="true" data-kt-scroll-activate="{default: false, lg: true}" data-kt-scroll-max-height="auto" data-kt-scroll-dependencies="#kt_modal_add_category_header" data-kt-scroll-wrappers="#kt_modal_add_category_scroll" data-kt-scroll-offset="300px">
                    </div>
                    <!--end::Scroll-->


                    <div class="mb-10 fv-row add-all-category">
                        <label class="form-label">Choose category</label>

                        <select class="form-control sub_category mb-3" name="sub_category[]" id="sub_category">
                            <option value="">Choose Category</option>
                            <?php foreach ($categories as $item) : ?>
                                <option value="<?php echo $item->id ?>"><?php echo $item->name ?></option>
                            <?php endforeach ?>
                        </select>
                        
                    </div>

                    <div class="mb-10 fv-row add-all-category">
                        <label class="form-label">Select Percentage</label>

                        <select class="form-control mb-3" name="percentage" id="percentage">
                            <option value="">Choose Percentage</option>
                            <?php for ($i = 1; $i <= 100; $i++) : ?>
                                <option value="<?php echo $i; ?>"><?php echo $i; ?>%</option>
                            <?php endfor; ?>
                        </select>
                    </div>

                    <!-- <div class="row">
                        <?php foreach ($cjVendorProduct->variants  as $variantdata) : ?>
                            <input type="hidden" name="variant_data[<?php echo $variantdata->vid ?>][vid]" value="<?php echo $variantdata->vid ?>">
                            <input type="hidden" name="variant_data[<?php echo $variantdata->vid ?>][pid]" value="<?php echo $variantdata->pid ?>">
                            <div class="col-md-6">
                                <div class="mb-10 fv-row ">
                                    <label class="form-label"><?php echo $variantdata->variantNameEn ?></label>
                                    <input type="text" name="variant_data[<?php echo $variantdata->vid ?>][price]" class="form-control variant_price" data-original-price="<?php echo number_format($variantdata->variantSellPrice, 2) ?>" value="<?php echo number_format($variantdata->variantSellPrice, 2) ?>">
                                </div>
                            </div>
                        <?php endforeach ?>
                    </div> -->



                    <div class="row">
                        <?php foreach ($cjVendorProduct->variants as $variantdata) : ?>
                            <?php if ($vendor_variants) : ?>
                                <?php foreach ($vendor_variants as $vendor_variant) : ?>
                                    <?php if ($vendor_variant->variant_id == $variantdata->vid) : ?>
                                        <input type="hidden" name="variant_data[<?php echo $variantdata->vid ?>][vid]" value="<?php echo $variantdata->vid ?>">
                                        <input type="hidden" name="variant_data[<?php echo $variantdata->vid ?>][pid]" value="<?php echo $variantdata->pid ?>">
                                        <div class="col-md-6">
                                            <div class="mb-10 fv-row ">
                                                <label class="form-label"><?php echo $variantdata->variantNameEn ?></label>
                                                <input type="text" name="variant_data[<?php echo $variantdata->vid ?>][price]" class="form-control variant_price" data-original-price="<?php echo number_format($vendor_variant->variant_price, 2) ?>" value="<?php echo number_format($vendor_variant->variant_price, 2) ?>">
                                            </div>
                                        </div>
                                    <?php endif ?>
                                <?php endforeach ?>
                            <?php else : ?>
                                <input type="hidden" name="variant_data[<?php echo $variantdata->vid ?>][vid]" value="<?php echo $variantdata->vid ?>">
                                <input type="hidden" name="variant_data[<?php echo $variantdata->vid ?>][pid]" value="<?php echo $variantdata->pid ?>">
                                <div class="col-md-6">
                                    <div class="mb-10 fv-row ">
                                        <label class="form-label"><?php echo $variantdata->variantNameEn ?></label>
                                        <input type="text" name="variant_data[<?php echo $variantdata->vid ?>][price]" class="form-control variant_price" data-original-price="<?php echo number_format($variantdata->variantSellPrice, 2) ?>" value="<?php echo number_format($variantdata->variantSellPrice, 2) ?>">
                                    </div>
                                </div>
                            <?php endif; ?>
                        <?php endforeach ?>
                    </div>


                </div>
                <!--end::Modal body-->
                <!--begin::Modal footer-->
                <div class="modal-footer flex-center">
                    <!--begin::Button-->
                    <button type="reset" id="kt_modal_add_category_cancel" data-bs-dismiss="modal" class="btn btn-light me-3">Discard</button>
                    <!--end::Button-->
                    <!--begin::Button-->
                    <button type="submit" class="btn btn-primary">
                        <span class="indicator-label">Add</span>
                        <span class="indicator-progress">Please wait...
                            <span class="spinner-border spinner-border-sm align-middle ms-2"></span></span>
                    </button>
                    <!--end::Button-->
                </div>
                <!--end::Modal footer-->
            </form>
            <!--end::Form-->
        </div>
    </div>
</div>
<!--end::Modal - variant - Add-->
<!--end::Modals-->
<?php include("common/footer.php") ?>