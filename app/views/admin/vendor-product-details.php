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

							$total_review = count($total_review_data->list);

							$total_score = 0;

							if($total_review > 0){
							    foreach ($total_review_data->list as $comment) {
							        $total_score += intval($comment->score);
							    }
							    $average_score = round($total_score / $total_review);
							}else{
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

														<?php  foreach($cjVendorProduct->productImageSet as $item): ?>

                                                        <div class="swiper-slide easyzoom easyzoom--overlay">
                                                            <a href="<?php echo $item;  ?>">
                                                            <img src="<?php echo $item;  ?>" alt="" class="img-fluid"/> 
                                                            </a>
                                                        </div>

														<?php  endforeach ?>

                                                     
                                                    
                                                        </div>
                                                        <!-- Add Arrows -->
                                                        <div class="swiper-button-next swiper-button-white"></div>
                                                        <div class="swiper-button-prev swiper-button-white"></div>
                                                    </div>
                                                    <div class="swiper-container gallery-thumbs">
                                                        <div class="swiper-wrapper">
														<?php  foreach($cjVendorProduct->productImageSet as $item): ?>
															<div class="swiper-slide">
																<img src="<?php echo $item;  ?>" alt="" class="img-fluid">
															</div>
														<?php  endforeach ?>
                                                       
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

                                                        <div class="form-group d-flex flex-column box">
                                                            <!-- <h6>Choose Color</h6>
                                                            <ul>
                                                                <li>
                                                                    <div data-setting="radio">
                                                                        <input type="radio" value="theme-color-blue" class="btn-check"
                                                                            name="theme_color" id="theme-color-1"
                                                                            data-colors="{&quot;primary&quot;: &quot;#00C3F9&quot;, &quot;info&quot;: &quot;#573BFF&quot;}">
                                                                        <label class="btn btn-border d-block bg-transparent" for="theme-color-1"
                                                                            data-bs-toggle="tooltip" data-bs-placement="top"
                                                                            data-bs-original-title="" aria-label="">
                                                                            <svg class="customizer-btn" xmlns="http://www.w3.org/2000/svg"
                                                                                viewBox="0 0 24 24" width="26" height="26">
                                                                                <circle cx="12" cy="12" r="10" fill="#573BFF"></circle>
                                                                            </svg>
                                                                        </label>
                                                                    </div>
                                                                </li>
                                                                <li>
                                                                    <div data-setting="radio">
                                                                        <input type="radio" value="theme-color-gray" class="btn-check"
                                                                            name="theme_color" id="theme-color-2"
                                                                            data-colors="{&quot;primary&quot;: &quot;#91969E&quot;, &quot;info&quot;: &quot;#FD8D00&quot;}">
                                                                        <label class="btn btn-border d-block bg-transparent" for="theme-color-2"
                                                                            data-bs-toggle="tooltip" data-bs-placement="top"
                                                                            data-bs-original-title="" aria-label="">
                                                                            <svg class="customizer-btn" xmlns="http://www.w3.org/2000/svg"
                                                                                viewBox="0 0 24 24" width="26" height="26">
                                                                                <circle cx="12" cy="12" r="10" fill="#FD8D00"></circle>
                                                                            </svg>
                                                                        </label>
                                                                    </div>
                                                                </li>
                                                                <li>
                                                                    <div data-setting="radio">
                                                                        <input type="radio" value="theme-color-red" class="btn-check"
                                                                            name="theme_color" id="theme-color-3"
                                                                            data-colors="{&quot;primary&quot;: &quot;#DB5363&quot;, &quot;info&quot;: &quot;#366AF0&quot;}">
                                                                        <label class="btn btn-border d-block bg-transparent" for="theme-color-3"
                                                                            data-bs-toggle="tooltip" data-bs-placement="top"
                                                                            data-bs-original-title="" aria-label="">
                                                                            <svg class="customizer-btn" xmlns="http://www.w3.org/2000/svg"
                                                                                viewBox="0 0 24 24" width="26" height="26">
                                                                                <circle cx="12" cy="12" r="10" fill="#DB5363"></circle>
                                                                            </svg>
                                                                        </label>
                                                                    </div>
                                                                </li>
                                                            </ul> -->
                                                        </div>
                                                        <div class="product-form product-variation-form product-size-swatch">
                                                            <!-- <label class="mb-1">Size:</label>
                                                                <div class="w-100"></div>
                                                                <div class="button">
                                                                    <input type="radio" id="small" name="check-substitution-2" />
                                                                    <label class="btn btn-outline-secondary btn-sm" for="small">small</label>
                                                                </div>
                                                                <div class="button">
                                                                    <input type="radio" id="medium" name="check-substitution-2" />
                                                                    <label class="btn btn-outline-secondary btn-sm" for="medium">Medium</label>
                                                                </div>
                                                                <div class="button">
                                                                    <input type="radio" id="large" name="check-substitution-2" />
                                                                    <label class="btn btn-outline-secondary btn-sm" for="large">Large</label>
                                                                </div> -->
                                                            </div>
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
                                                                <button class="btn btn-primary btn-cart">
                                                                <i class="fa-solid fa-bag-shopping"></i>
                                                                    <span>Add to Store</span>
                                                                </button>

                                                                <div class="social-links-wrapper">
                                                                <div class="social-links">
                                                                    <div class="social-icons social-no-color border-thin">
                                                                        <a href="#" class="social-icon social-facebook fa-brands fa-facebook-f"></a>
                                                                        <a href="#" class="social-icon social-twitter fa-brands fa-x-twitter"></a>
                                                                        <a href="#"
                                                                            class="social-icon social-pinterest fa-brands fa-pinterest-p"></a>
                                                                        <a href="#" class="social-icon social-whatsapp fa-brands fa-whatsapp"></a>
                                                                        <a href="#"
                                                                            class="social-icon social-youtube fa-brands fa-linkedin-in"></a>
                                                                    </div>
                                                                </div>
                                                                <span class="divider d-xs-show"></span>
                                                                <div class="product-link-wrapper d-flex">
                                                                    <a href="#"
                                                                        class="btn-product-icon btn-wishlist fa-regular fa-heart"><span></span></a>
                                                                    <a href="#"
                                                                        class="btn-product-icon btn-compare btn-icon-left fa-solid fa-scale-balanced"><span></span></a>
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

																	<?php if($total_review > 0): ?>

																		<?php foreach($total_review_data as $item): ?>

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
                                                                                            <span class="ratings"
                                                                                                style="width: 60%;"></span>
                                                                                            <span
                                                                                                class="tooltiptext tooltip-top"></span>
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
                                                                                    <img src="<?= url('/admin/') ?>/assets/media/agents/1-100x100.png"
                                                                                        alt="Commenter Avatar" width="90" height="90">
                                                                                </figure>
                                                                                <div class="comment-content">
                                                                                    <h4 class="comment-author">
                                                                                        <a href="#">John Doe</a>
                                                                                        <span class="comment-date">March 22, 2021 at
                                                                                            1:54 pm</span>
                                                                                    </h4>
                                                                                    <div class="ratings-container comment-rating">
                                                                                        <div class="ratings-full">
                                                                                            <span class="ratings"
                                                                                                style="width: 60%;"></span>
                                                                                            <span
                                                                                                class="tooltiptext tooltip-top"></span>
                                                                                        </div>
                                                                                    </div>
                                                                                    <p>pellentesque habitant morbi tristique senectus
                                                                                        et. In dictum non consectetur a erat.
                                                                                        Nunc ultrices eros in cursus turpis massa
                                                                                        tincidunt ante in nibh mauris cursus mattis.
                                                                                        Cras ornare arcu dui vivamus arcu felis bibendum
                                                                                        ut tristique.</p>
                                                                                    <div class="comment-action">
                                                                                        <a href="#"
                                                                                            class="btn btn-secondary btn-link btn-underline sm btn-icon-left font-weight-normal text-capitalize">
                                                                                            <i class="far fa-thumbs-up"></i>Helpful (1)
                                                                                        </a>
                                                                                        <a href="#"
                                                                                            class="btn btn-dark btn-link btn-underline sm btn-icon-left font-weight-normal text-capitalize">
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
                                                                                    <img src="<?= url('/admin/') ?>/assets/media/agents/2-100x100.png"
                                                                                        alt="Commenter Avatar" width="90" height="90">
                                                                                </figure>
                                                                                <div class="comment-content">
                                                                                    <h4 class="comment-author">
                                                                                        <a href="#">John Doe</a>
                                                                                        <span class="comment-date">March 22, 2021 at
                                                                                            1:52 pm</span>
                                                                                    </h4>
                                                                                    <div class="ratings-container comment-rating">
                                                                                        <div class="ratings-full">
                                                                                            <span class="ratings"
                                                                                                style="width: 80%;"></span>
                                                                                            <span
                                                                                                class="tooltiptext tooltip-top"></span>
                                                                                        </div>
                                                                                    </div>
                                                                                    <p>Nullam a magna porttitor, dictum risus nec,
                                                                                        faucibus sapien.
                                                                                        Ultrices eros in cursus turpis massa tincidunt
                                                                                        ante in nibh mauris cursus mattis.
                                                                                        Cras ornare arcu dui vivamus arcu felis bibendum
                                                                                        ut tristique.</p>
                                                                                    <div class="comment-action">
                                                                                        <a href="#"
                                                                                            class="btn btn-secondary btn-link btn-underline sm btn-icon-left font-weight-normal text-capitalize">
                                                                                            <i class="far fa-thumbs-up"></i>Helpful (1)
                                                                                        </a>
                                                                                        <a href="#"
                                                                                            class="btn btn-dark btn-link btn-underline sm btn-icon-left font-weight-normal text-capitalize">
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
                                                                                    <img src="<?= url('/admin/') ?>/assets/media/agents/3-100x100.png"
                                                                                        alt="Commenter Avatar" width="90" height="90">
                                                                                </figure>
                                                                                <div class="comment-content">
                                                                                    <h4 class="comment-author">
                                                                                        <a href="#">John Doe</a>
                                                                                        <span class="comment-date">March 22, 2021 at
                                                                                            1:21 pm</span>
                                                                                    </h4>
                                                                                    <div class="ratings-container comment-rating">
                                                                                        <div class="ratings-full">
                                                                                            <span class="ratings"
                                                                                                style="width: 60%;"></span>
                                                                                            <span
                                                                                                class="tooltiptext tooltip-top"></span>
                                                                                        </div>
                                                                                    </div>
                                                                                    <p>In fermentum et sollicitudin ac orci phasellus. A
                                                                                        condimentum vitae
                                                                                        sapien pellentesque habitant morbi tristique
                                                                                        senectus et. In dictum
                                                                                        non consectetur a erat. Nunc scelerisque viverra
                                                                                        mauris in aliquam sem fringilla.</p>
                                                                                    <div class="comment-action">
                                                                                        <a href="#"
                                                                                            class="btn btn-secondary btn-link btn-underline sm btn-icon-left font-weight-normal text-capitalize">
                                                                                            <i class="far fa-thumbs-up"></i>Helpful (0)
                                                                                        </a>
                                                                                        <a href="#"
                                                                                            class="btn btn-dark btn-link btn-underline sm btn-icon-left font-weight-normal text-capitalize">
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
                                                                                    <img src="<?= url('/admin/') ?>/assets/media/agents/1-100x100.png"
                                                                                        alt="Commenter Avatar" width="90" height="90">
                                                                                </figure>
                                                                                <div class="comment-content">
                                                                                    <h4 class="comment-author">
                                                                                        <a href="#">John Doe</a>
                                                                                        <span class="comment-date">March 22, 2021 at
                                                                                            1:54 pm</span>
                                                                                    </h4>
                                                                                    <div class="ratings-container comment-rating">
                                                                                        <div class="ratings-full">
                                                                                            <span class="ratings"
                                                                                                style="width: 60%;"></span>
                                                                                            <span
                                                                                                class="tooltiptext tooltip-top"></span>
                                                                                        </div>
                                                                                    </div>
                                                                                    <p>pellentesque habitant morbi tristique senectus
                                                                                        et. In dictum non consectetur a erat.
                                                                                        Nunc ultrices eros in cursus turpis massa
                                                                                        tincidunt ante in nibh mauris cursus mattis.
                                                                                        Cras ornare arcu dui vivamus arcu felis bibendum
                                                                                        ut tristique.</p>
                                                                                    <div class="comment-action">
                                                                                        <a href="#"
                                                                                            class="btn btn-secondary btn-link btn-underline sm btn-icon-left font-weight-normal text-capitalize">
                                                                                            <i class="far fa-thumbs-up"></i>Helpful (1)
                                                                                        </a>
                                                                                        <a href="#"
                                                                                            class="btn btn-dark btn-link btn-underline sm btn-icon-left font-weight-normal text-capitalize">
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
                                                                                    <img src="<?= url('/admin/') ?>/assets/media/agents/2-100x100.png"
                                                                                        alt="Commenter Avatar" width="90" height="90">
                                                                                </figure>
                                                                                <div class="comment-content">
                                                                                    <h4 class="comment-author">
                                                                                        <a href="#">John Doe</a>
                                                                                        <span class="comment-date">March 22, 2021 at
                                                                                            1:52 pm</span>
                                                                                    </h4>
                                                                                    <div class="ratings-container comment-rating">
                                                                                        <div class="ratings-full">
                                                                                            <span class="ratings"
                                                                                                style="width: 80%;"></span>
                                                                                            <span
                                                                                                class="tooltiptext tooltip-top"></span>
                                                                                        </div>
                                                                                    </div>
                                                                                    <p>Nullam a magna porttitor, dictum risus nec,
                                                                                        faucibus sapien.
                                                                                        Ultrices eros in cursus turpis massa tincidunt
                                                                                        ante in nibh mauris cursus mattis.
                                                                                        Cras ornare arcu dui vivamus arcu felis bibendum
                                                                                        ut tristique.</p>
                                                                                    <div class="comment-action">
                                                                                        <a href="#"
                                                                                            class="btn btn-secondary btn-link btn-underline sm btn-icon-left font-weight-normal text-capitalize">
                                                                                            <i class="far fa-thumbs-up"></i>Helpful (1)
                                                                                        </a>
                                                                                        <a href="#"
                                                                                            class="btn btn-dark btn-link btn-underline sm btn-icon-left font-weight-normal text-capitalize">
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
                                                                                    <img src="<?= url('/admin/') ?>/assets/media/agents/3-100x100.png"
                                                                                        alt="Commenter Avatar" width="90" height="90">
                                                                                </figure>
                                                                                <div class="comment-content">
                                                                                    <h4 class="comment-author">
                                                                                        <a href="#">John Doe</a>
                                                                                        <span class="comment-date">March 22, 2021 at
                                                                                            1:21 pm</span>
                                                                                    </h4>
                                                                                    <div class="ratings-container comment-rating">
                                                                                        <div class="ratings-full">
                                                                                            <span class="ratings"
                                                                                                style="width: 60%;"></span>
                                                                                            <span
                                                                                                class="tooltiptext tooltip-top"></span>
                                                                                        </div>
                                                                                    </div>
                                                                                    <p>In fermentum et sollicitudin ac orci phasellus. A
                                                                                        condimentum vitae
                                                                                        sapien pellentesque habitant morbi tristique
                                                                                        senectus et. In dictum
                                                                                        non consectetur a erat. Nunc scelerisque viverra
                                                                                        mauris in aliquam sem fringilla.</p>
                                                                                    <div class="comment-action">
                                                                                        <a href="#"
                                                                                            class="btn btn-secondary btn-link btn-underline sm btn-icon-left font-weight-normal text-capitalize">
                                                                                            <i class="far fa-thumbs-up"></i>Helpful (0)
                                                                                        </a>
                                                                                        <a href="#"
                                                                                            class="btn btn-dark btn-link btn-underline sm btn-icon-left font-weight-normal text-capitalize">
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
                                                <!-- <div class="product-wrapper row">
                                                    <div class="product-wrap col-sm-6 col-md-4 col-lg-3">
                                                        <div class="product text-center">
                                                            <figure class="product-media">
                                                                <a href="#">
                                                                    <img src="<?= url('/admin/') ?>/assets/media/vendor/3.jpg" alt="Product" width="" height="">
                                                                </a>
                                                                <div class="product-action-vertical">
                                                                    <a href="#" class="btn-product-icon btn-cart w-icon-cart" title="Add to cart"></a>
                                                                    <a href="#" class="btn-product-icon btn-wishlist w-icon-heart" title="Wishlist"></a>
                                                                    <a href="#" class="btn-product-icon btn-compare w-icon-compare" title="Compare"></a>
                                                                    <a href="#" class="btn-product-icon btn-quickview w-icon-search" title="Quick View"></a>
                                                                </div>
                                                            </figure>
                                                            <div class="product-details">
                                                                <h3 class="product-name">
                                                                    <a href="#">3D Television</a>
                                                                </h3>
                                                                <div class="ratings-container">
                                                                    <div class="ratings-full d-flex justify-content-center flex-column text-center align-items-center">
                                                                        <ul class="d-flex">
                                                                            <li><a href="#"><i class="fa-solid fa-star"></i></a></li>
                                                                            <li><a href="#"><i class="fa-solid fa-star"></i></a></li>
                                                                            <li><a href="#"><i class="fa-solid fa-star"></i></a></li>
                                                                            <li><a href="#"><i class="fa-solid fa-star"></i></a></li>
                                                                            <li><a href="#"><i class="fa-solid fa-star"></i></a></li>
                                                                        </ul>
                                                                    </div>
                                                                    
                                                                </div>
                                                                <div class="product-pa-wrapper">
                                                                    <div class="product-price">
                                                                        $220.00 - $230.00
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="product-wrap col-sm-6 col-md-4 col-lg-3">
                                                        <div class="product text-center">
                                                            <figure class="product-media">
                                                                <a href="#">
                                                                    <img src="<?= url('/admin/') ?>/assets/media/vendor/3.jpg" alt="Product" width="" height="">
                                                                </a>
                                                                <div class="product-action-vertical">
                                                                    <a href="#" class="btn-product-icon btn-cart w-icon-cart" title="Add to cart"></a>
                                                                    <a href="#" class="btn-product-icon btn-wishlist w-icon-heart" title="Wishlist"></a>
                                                                    <a href="#" class="btn-product-icon btn-compare w-icon-compare" title="Compare"></a>
                                                                    <a href="#" class="btn-product-icon btn-quickview w-icon-search" title="Quick View"></a>
                                                                </div>
                                                            </figure>
                                                            <div class="product-details">
                                                                <h3 class="product-name">
                                                                    <a href="#">3D Television</a>
                                                                </h3>
                                                                <div class="ratings-container">
                                                                    <div class="ratings-full d-flex justify-content-center flex-column text-center align-items-center">
                                                                        <ul class="d-flex">
                                                                            <li><a href="#"><i class="fa-solid fa-star"></i></a></li>
                                                                            <li><a href="#"><i class="fa-solid fa-star"></i></a></li>
                                                                            <li><a href="#"><i class="fa-solid fa-star"></i></a></li>
                                                                            <li><a href="#"><i class="fa-solid fa-star"></i></a></li>
                                                                            <li><a href="#"><i class="fa-solid fa-star"></i></a></li>
                                                                        </ul>
                                                                    </div>
                                                                    
                                                                </div>
                                                                <div class="product-pa-wrapper">
                                                                    <div class="product-price">
                                                                        $220.00 - $230.00
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="product-wrap col-sm-6 col-md-4 col-lg-3">
                                                        <div class="product text-center">
                                                            <figure class="product-media">
                                                                <a href="#">
                                                                    <img src="<?= url('/admin/') ?>/assets/media/vendor/3.jpg" alt="Product" width="" height="">
                                                                </a>
                                                                <div class="product-action-vertical">
                                                                    <a href="#" class="btn-product-icon btn-cart w-icon-cart" title="Add to cart"></a>
                                                                    <a href="#" class="btn-product-icon btn-wishlist w-icon-heart" title="Wishlist"></a>
                                                                    <a href="#" class="btn-product-icon btn-compare w-icon-compare" title="Compare"></a>
                                                                    <a href="#" class="btn-product-icon btn-quickview w-icon-search" title="Quick View"></a>
                                                                </div>
                                                            </figure>
                                                            <div class="product-details">
                                                                <h3 class="product-name">
                                                                    <a href="#">3D Television</a>
                                                                </h3>
                                                                <div class="ratings-container">
                                                                    <div class="ratings-full d-flex justify-content-center flex-column text-center align-items-center">
                                                                        <ul class="d-flex">
                                                                            <li><a href="#"><i class="fa-solid fa-star"></i></a></li>
                                                                            <li><a href="#"><i class="fa-solid fa-star"></i></a></li>
                                                                            <li><a href="#"><i class="fa-solid fa-star"></i></a></li>
                                                                            <li><a href="#"><i class="fa-solid fa-star"></i></a></li>
                                                                            <li><a href="#"><i class="fa-solid fa-star"></i></a></li>
                                                                        </ul>
                                                                    </div>
                                                                    
                                                                </div>
                                                                <div class="product-pa-wrapper">
                                                                    <div class="product-price">
                                                                        $220.00 - $230.00
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="product-wrap col-sm-6 col-md-4 col-lg-3">
                                                        <div class="product text-center">
                                                            <figure class="product-media">
                                                                <a href="#">
                                                                    <img src="<?= url('/admin/') ?>/assets/media/vendor/3.jpg" alt="Product" width="" height="">
                                                                </a>
                                                                <div class="product-action-vertical">
                                                                    <a href="#" class="btn-product-icon btn-cart w-icon-cart" title="Add to cart"></a>
                                                                    <a href="#" class="btn-product-icon btn-wishlist w-icon-heart" title="Wishlist"></a>
                                                                    <a href="#" class="btn-product-icon btn-compare w-icon-compare" title="Compare"></a>
                                                                    <a href="#" class="btn-product-icon btn-quickview w-icon-search" title="Quick View"></a>
                                                                </div>
                                                            </figure>
                                                            <div class="product-details">
                                                                <h3 class="product-name">
                                                                    <a href="#">3D Television</a>
                                                                </h3>
                                                                <div class="ratings-container">
                                                                    <div class="ratings-full d-flex justify-content-center flex-column text-center align-items-center">
                                                                        <ul class="d-flex">
                                                                            <li><a href="#"><i class="fa-solid fa-star"></i></a></li>
                                                                            <li><a href="#"><i class="fa-solid fa-star"></i></a></li>
                                                                            <li><a href="#"><i class="fa-solid fa-star"></i></a></li>
                                                                            <li><a href="#"><i class="fa-solid fa-star"></i></a></li>
                                                                            <li><a href="#"><i class="fa-solid fa-star"></i></a></li>
                                                                        </ul>
                                                                    </div>
                                                                    
                                                                </div>
                                                                <div class="product-pa-wrapper">
                                                                    <div class="product-price">
                                                                        $220.00 - $230.00
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="product-wrap col-sm-6 col-md-4 col-lg-3">
                                                        <div class="product text-center">
                                                            <figure class="product-media">
                                                                <a href="#">
                                                                    <img src="<?= url('/admin/') ?>/assets/media/vendor/3.jpg" alt="Product" width="" height="">
                                                                </a>
                                                                <div class="product-action-vertical">
                                                                    <a href="#" class="btn-product-icon btn-cart w-icon-cart" title="Add to cart"></a>
                                                                    <a href="#" class="btn-product-icon btn-wishlist w-icon-heart" title="Wishlist"></a>
                                                                    <a href="#" class="btn-product-icon btn-compare w-icon-compare" title="Compare"></a>
                                                                    <a href="#" class="btn-product-icon btn-quickview w-icon-search" title="Quick View"></a>
                                                                </div>
                                                            </figure>
                                                            <div class="product-details">
                                                                <h3 class="product-name">
                                                                    <a href="#">3D Television</a>
                                                                </h3>
                                                                <div class="ratings-container">
                                                                    <div class="ratings-full d-flex justify-content-center flex-column text-center align-items-center">
                                                                        <ul class="d-flex">
                                                                            <li><a href="#"><i class="fa-solid fa-star"></i></a></li>
                                                                            <li><a href="#"><i class="fa-solid fa-star"></i></a></li>
                                                                            <li><a href="#"><i class="fa-solid fa-star"></i></a></li>
                                                                            <li><a href="#"><i class="fa-solid fa-star"></i></a></li>
                                                                            <li><a href="#"><i class="fa-solid fa-star"></i></a></li>
                                                                        </ul>
                                                                    </div>
                                                                    
                                                                </div>
                                                                <div class="product-pa-wrapper">
                                                                    <div class="product-price">
                                                                        $220.00 - $230.00
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="product-wrap col-sm-6 col-md-4 col-lg-3">
                                                        <div class="product text-center">
                                                            <figure class="product-media">
                                                                <a href="#">
                                                                    <img src="<?= url('/admin/') ?>/assets/media/vendor/3.jpg" alt="Product" width="" height="">
                                                                </a>
                                                                <div class="product-action-vertical">
                                                                    <a href="#" class="btn-product-icon btn-cart w-icon-cart" title="Add to cart"></a>
                                                                    <a href="#" class="btn-product-icon btn-wishlist w-icon-heart" title="Wishlist"></a>
                                                                    <a href="#" class="btn-product-icon btn-compare w-icon-compare" title="Compare"></a>
                                                                    <a href="#" class="btn-product-icon btn-quickview w-icon-search" title="Quick View"></a>
                                                                </div>
                                                            </figure>
                                                            <div class="product-details">
                                                                <h3 class="product-name">
                                                                    <a href="#">3D Television</a>
                                                                </h3>
                                                                <div class="ratings-container">
                                                                    <div class="ratings-full d-flex justify-content-center flex-column text-center align-items-center">
                                                                        <ul class="d-flex">
                                                                            <li><a href="#"><i class="fa-solid fa-star"></i></a></li>
                                                                            <li><a href="#"><i class="fa-solid fa-star"></i></a></li>
                                                                            <li><a href="#"><i class="fa-solid fa-star"></i></a></li>
                                                                            <li><a href="#"><i class="fa-solid fa-star"></i></a></li>
                                                                            <li><a href="#"><i class="fa-solid fa-star"></i></a></li>
                                                                        </ul>
                                                                    </div>
                                                                    
                                                                </div>
                                                                <div class="product-pa-wrapper">
                                                                    <div class="product-price">
                                                                        $220.00 - $230.00
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="product-wrap col-sm-6 col-md-4 col-lg-3">
                                                        <div class="product text-center">
                                                            <figure class="product-media">
                                                                <a href="#">
                                                                    <img src="<?= url('/admin/') ?>/assets/media/vendor/3.jpg" alt="Product" width="" height="">
                                                                </a>
                                                                <div class="product-action-vertical">
                                                                    <a href="#" class="btn-product-icon btn-cart w-icon-cart" title="Add to cart"></a>
                                                                    <a href="#" class="btn-product-icon btn-wishlist w-icon-heart" title="Wishlist"></a>
                                                                    <a href="#" class="btn-product-icon btn-compare w-icon-compare" title="Compare"></a>
                                                                    <a href="#" class="btn-product-icon btn-quickview w-icon-search" title="Quick View"></a>
                                                                </div>
                                                            </figure>
                                                            <div class="product-details">
                                                                <h3 class="product-name">
                                                                    <a href="#">3D Television</a>
                                                                </h3>
                                                                <div class="ratings-container">
                                                                    <div class="ratings-full d-flex justify-content-center flex-column text-center align-items-center">
                                                                        <ul class="d-flex">
                                                                            <li><a href="#"><i class="fa-solid fa-star"></i></a></li>
                                                                            <li><a href="#"><i class="fa-solid fa-star"></i></a></li>
                                                                            <li><a href="#"><i class="fa-solid fa-star"></i></a></li>
                                                                            <li><a href="#"><i class="fa-solid fa-star"></i></a></li>
                                                                            <li><a href="#"><i class="fa-solid fa-star"></i></a></li>
                                                                        </ul>
                                                                    </div>
                                                                    
                                                                </div>
                                                                <div class="product-pa-wrapper">
                                                                    <div class="product-price">
                                                                        $220.00 - $230.00
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="product-wrap col-sm-6 col-md-4 col-lg-3">
                                                        <div class="product text-center">
                                                            <figure class="product-media">
                                                                <a href="#">
                                                                    <img src="<?= url('/admin/') ?>/assets/media/vendor/3.jpg" alt="Product" width="" height="">
                                                                </a>
                                                                <div class="product-action-vertical">
                                                                    <a href="#" class="btn-product-icon btn-cart w-icon-cart" title="Add to cart"></a>
                                                                    <a href="#" class="btn-product-icon btn-wishlist w-icon-heart" title="Wishlist"></a>
                                                                    <a href="#" class="btn-product-icon btn-compare w-icon-compare" title="Compare"></a>
                                                                    <a href="#" class="btn-product-icon btn-quickview w-icon-search" title="Quick View"></a>
                                                                </div>
                                                            </figure>
                                                            <div class="product-details">
                                                                <h3 class="product-name">
                                                                    <a href="#">3D Television</a>
                                                                </h3>
                                                                <div class="ratings-container">
                                                                    <div class="ratings-full d-flex justify-content-center flex-column text-center align-items-center">
                                                                        <ul class="d-flex">
                                                                            <li><a href="#"><i class="fa-solid fa-star"></i></a></li>
                                                                            <li><a href="#"><i class="fa-solid fa-star"></i></a></li>
                                                                            <li><a href="#"><i class="fa-solid fa-star"></i></a></li>
                                                                            <li><a href="#"><i class="fa-solid fa-star"></i></a></li>
                                                                            <li><a href="#"><i class="fa-solid fa-star"></i></a></li>
                                                                        </ul>
                                                                    </div>
                                                                    
                                                                </div>
                                                                <div class="product-pa-wrapper">
                                                                    <div class="product-price">
                                                                        $220.00 - $230.00
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="product-wrap col-sm-6 col-md-4 col-lg-3">
                                                        <div class="product text-center">
                                                            <figure class="product-media">
                                                                <a href="#">
                                                                    <img src="<?= url('/admin/') ?>/assets/media/vendor/3.jpg" alt="Product" width="" height="">
                                                                </a>
                                                                <div class="product-action-vertical">
                                                                    <a href="#" class="btn-product-icon btn-cart w-icon-cart" title="Add to cart"></a>
                                                                    <a href="#" class="btn-product-icon btn-wishlist w-icon-heart" title="Wishlist"></a>
                                                                    <a href="#" class="btn-product-icon btn-compare w-icon-compare" title="Compare"></a>
                                                                    <a href="#" class="btn-product-icon btn-quickview w-icon-search" title="Quick View"></a>
                                                                </div>
                                                            </figure>
                                                            <div class="product-details">
                                                                <h3 class="product-name">
                                                                    <a href="#">3D Television</a>
                                                                </h3>
                                                                <div class="ratings-container">
                                                                    <div class="ratings-full d-flex justify-content-center flex-column text-center align-items-center">
                                                                        <ul class="d-flex">
                                                                            <li><a href="#"><i class="fa-solid fa-star"></i></a></li>
                                                                            <li><a href="#"><i class="fa-solid fa-star"></i></a></li>
                                                                            <li><a href="#"><i class="fa-solid fa-star"></i></a></li>
                                                                            <li><a href="#"><i class="fa-solid fa-star"></i></a></li>
                                                                            <li><a href="#"><i class="fa-solid fa-star"></i></a></li>
                                                                        </ul>
                                                                    </div>
                                                                    
                                                                </div>
                                                                <div class="product-pa-wrapper">
                                                                    <div class="product-price">
                                                                        $220.00 - $230.00
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="product-wrap col-sm-6 col-md-4 col-lg-3">
                                                        <div class="product text-center">
                                                            <figure class="product-media">
                                                                <a href="#">
                                                                    <img src="<?= url('/admin/') ?>/assets/media/vendor/3.jpg" alt="Product" width="" height="">
                                                                </a>
                                                                <div class="product-action-vertical">
                                                                    <a href="#" class="btn-product-icon btn-cart w-icon-cart" title="Add to cart"></a>
                                                                    <a href="#" class="btn-product-icon btn-wishlist w-icon-heart" title="Wishlist"></a>
                                                                    <a href="#" class="btn-product-icon btn-compare w-icon-compare" title="Compare"></a>
                                                                    <a href="#" class="btn-product-icon btn-quickview w-icon-search" title="Quick View"></a>
                                                                </div>
                                                            </figure>
                                                            <div class="product-details">
                                                                <h3 class="product-name">
                                                                    <a href="#">3D Television</a>
                                                                </h3>
                                                                <div class="ratings-container">
                                                                    <div class="ratings-full d-flex justify-content-center flex-column text-center align-items-center">
                                                                        <ul class="d-flex">
                                                                            <li><a href="#"><i class="fa-solid fa-star"></i></a></li>
                                                                            <li><a href="#"><i class="fa-solid fa-star"></i></a></li>
                                                                            <li><a href="#"><i class="fa-solid fa-star"></i></a></li>
                                                                            <li><a href="#"><i class="fa-solid fa-star"></i></a></li>
                                                                            <li><a href="#"><i class="fa-solid fa-star"></i></a></li>
                                                                        </ul>
                                                                    </div>
                                                                    
                                                                </div>
                                                                <div class="product-pa-wrapper">
                                                                    <div class="product-price">
                                                                        $220.00 - $230.00
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="product-wrap col-sm-6 col-md-4 col-lg-3">
                                                        <div class="product text-center">
                                                            <figure class="product-media">
                                                                <a href="#">
                                                                    <img src="<?= url('/admin/') ?>/assets/media/vendor/3.jpg" alt="Product" width="" height="">
                                                                </a>
                                                                <div class="product-action-vertical">
                                                                    <a href="#" class="btn-product-icon btn-cart w-icon-cart" title="Add to cart"></a>
                                                                    <a href="#" class="btn-product-icon btn-wishlist w-icon-heart" title="Wishlist"></a>
                                                                    <a href="#" class="btn-product-icon btn-compare w-icon-compare" title="Compare"></a>
                                                                    <a href="#" class="btn-product-icon btn-quickview w-icon-search" title="Quick View"></a>
                                                                </div>
                                                            </figure>
                                                            <div class="product-details">
                                                                <h3 class="product-name">
                                                                    <a href="#">3D Television</a>
                                                                </h3>
                                                                <div class="ratings-container">
                                                                    <div class="ratings-full d-flex justify-content-center flex-column text-center align-items-center">
                                                                        <ul class="d-flex">
                                                                            <li><a href="#"><i class="fa-solid fa-star"></i></a></li>
                                                                            <li><a href="#"><i class="fa-solid fa-star"></i></a></li>
                                                                            <li><a href="#"><i class="fa-solid fa-star"></i></a></li>
                                                                            <li><a href="#"><i class="fa-solid fa-star"></i></a></li>
                                                                            <li><a href="#"><i class="fa-solid fa-star"></i></a></li>
                                                                        </ul>
                                                                    </div>
                                                                    
                                                                </div>
                                                                <div class="product-pa-wrapper">
                                                                    <div class="product-price">
                                                                        $220.00 - $230.00
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="product-wrap col-sm-6 col-md-4 col-lg-3">
                                                        <div class="product text-center">
                                                            <figure class="product-media">
                                                                <a href="#">
                                                                    <img src="<?= url('/admin/') ?>/assets/media/vendor/3.jpg" alt="Product" width="" height="">
                                                                </a>
                                                                <div class="product-action-vertical">
                                                                    <a href="#" class="btn-product-icon btn-cart w-icon-cart" title="Add to cart"></a>
                                                                    <a href="#" class="btn-product-icon btn-wishlist w-icon-heart" title="Wishlist"></a>
                                                                    <a href="#" class="btn-product-icon btn-compare w-icon-compare" title="Compare"></a>
                                                                    <a href="#" class="btn-product-icon btn-quickview w-icon-search" title="Quick View"></a>
                                                                </div>
                                                            </figure>
                                                            <div class="product-details">
                                                                <h3 class="product-name">
                                                                    <a href="#">3D Television</a>
                                                                </h3>
                                                                <div class="ratings-container">
                                                                    <div class="ratings-full d-flex justify-content-center flex-column text-center align-items-center">
                                                                        <ul class="d-flex">
                                                                            <li><a href="#"><i class="fa-solid fa-star"></i></a></li>
                                                                            <li><a href="#"><i class="fa-solid fa-star"></i></a></li>
                                                                            <li><a href="#"><i class="fa-solid fa-star"></i></a></li>
                                                                            <li><a href="#"><i class="fa-solid fa-star"></i></a></li>
                                                                            <li><a href="#"><i class="fa-solid fa-star"></i></a></li>
                                                                        </ul>
                                                                    </div>
                                                                    
                                                                </div>
                                                                <div class="product-pa-wrapper">
                                                                    <div class="product-price">
                                                                        $220.00 - $230.00
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="product-wrap col-sm-6 col-md-4 col-lg-3">
                                                        <div class="product text-center">
                                                            <figure class="product-media">
                                                                <a href="#">
                                                                    <img src="<?= url('/admin/') ?>/assets/media/vendor/3.jpg" alt="Product" width="" height="">
                                                                </a>
                                                                <div class="product-action-vertical">
                                                                    <a href="#" class="btn-product-icon btn-cart w-icon-cart" title="Add to cart"></a>
                                                                    <a href="#" class="btn-product-icon btn-wishlist w-icon-heart" title="Wishlist"></a>
                                                                    <a href="#" class="btn-product-icon btn-compare w-icon-compare" title="Compare"></a>
                                                                    <a href="#" class="btn-product-icon btn-quickview w-icon-search" title="Quick View"></a>
                                                                </div>
                                                            </figure>
                                                            <div class="product-details">
                                                                <h3 class="product-name">
                                                                    <a href="#">3D Television</a>
                                                                </h3>
                                                                <div class="ratings-container">
                                                                    <div class="ratings-full d-flex justify-content-center flex-column text-center align-items-center">
                                                                        <ul class="d-flex">
                                                                            <li><a href="#"><i class="fa-solid fa-star"></i></a></li>
                                                                            <li><a href="#"><i class="fa-solid fa-star"></i></a></li>
                                                                            <li><a href="#"><i class="fa-solid fa-star"></i></a></li>
                                                                            <li><a href="#"><i class="fa-solid fa-star"></i></a></li>
                                                                            <li><a href="#"><i class="fa-solid fa-star"></i></a></li>
                                                                        </ul>
                                                                    </div>
                                                                    
                                                                </div>
                                                                <div class="product-pa-wrapper">
                                                                    <div class="product-price">
                                                                        $220.00 - $230.00
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="product-wrap col-sm-6 col-md-4 col-lg-3">
                                                        <div class="product text-center">
                                                            <figure class="product-media">
                                                                <a href="#">
                                                                    <img src="<?= url('/admin/') ?>/assets/media/vendor/3.jpg" alt="Product" width="" height="">
                                                                </a>
                                                                <div class="product-action-vertical">
                                                                    <a href="#" class="btn-product-icon btn-cart w-icon-cart" title="Add to cart"></a>
                                                                    <a href="#" class="btn-product-icon btn-wishlist w-icon-heart" title="Wishlist"></a>
                                                                    <a href="#" class="btn-product-icon btn-compare w-icon-compare" title="Compare"></a>
                                                                    <a href="#" class="btn-product-icon btn-quickview w-icon-search" title="Quick View"></a>
                                                                </div>
                                                            </figure>
                                                            <div class="product-details">
                                                                <h3 class="product-name">
                                                                    <a href="#">3D Television</a>
                                                                </h3>
                                                                <div class="ratings-container">
                                                                    <div class="ratings-full d-flex justify-content-center flex-column text-center align-items-center">
                                                                        <ul class="d-flex">
                                                                            <li><a href="#"><i class="fa-solid fa-star"></i></a></li>
                                                                            <li><a href="#"><i class="fa-solid fa-star"></i></a></li>
                                                                            <li><a href="#"><i class="fa-solid fa-star"></i></a></li>
                                                                            <li><a href="#"><i class="fa-solid fa-star"></i></a></li>
                                                                            <li><a href="#"><i class="fa-solid fa-star"></i></a></li>
                                                                        </ul>
                                                                    </div>
                                                                    
                                                                </div>
                                                                <div class="product-pa-wrapper">
                                                                    <div class="product-price">
                                                                        $220.00 - $230.00
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="product-wrap col-sm-6 col-md-4 col-lg-3">
                                                        <div class="product text-center">
                                                            <figure class="product-media">
                                                                <a href="#">
                                                                    <img src="<?= url('/admin/') ?>/assets/media/vendor/3.jpg" alt="Product" width="" height="">
                                                                </a>
                                                                <div class="product-action-vertical">
                                                                    <a href="#" class="btn-product-icon btn-cart w-icon-cart" title="Add to cart"></a>
                                                                    <a href="#" class="btn-product-icon btn-wishlist w-icon-heart" title="Wishlist"></a>
                                                                    <a href="#" class="btn-product-icon btn-compare w-icon-compare" title="Compare"></a>
                                                                    <a href="#" class="btn-product-icon btn-quickview w-icon-search" title="Quick View"></a>
                                                                </div>
                                                            </figure>
                                                            <div class="product-details">
                                                                <h3 class="product-name">
                                                                    <a href="#">3D Television</a>
                                                                </h3>
                                                                <div class="ratings-container">
                                                                    <div class="ratings-full d-flex justify-content-center flex-column text-center align-items-center">
                                                                        <ul class="d-flex">
                                                                            <li><a href="#"><i class="fa-solid fa-star"></i></a></li>
                                                                            <li><a href="#"><i class="fa-solid fa-star"></i></a></li>
                                                                            <li><a href="#"><i class="fa-solid fa-star"></i></a></li>
                                                                            <li><a href="#"><i class="fa-solid fa-star"></i></a></li>
                                                                            <li><a href="#"><i class="fa-solid fa-star"></i></a></li>
                                                                        </ul>
                                                                    </div>
                                                                    
                                                                </div>
                                                                <div class="product-pa-wrapper">
                                                                    <div class="product-price">
                                                                        $220.00 - $230.00
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div> -->
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
<?php include("common/footer.php") ?> 	