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
										<h1 class="page-heading d-flex text-gray-900 fw-bold fs-3 flex-column justify-content-center my-0">Vendors Product list</h1>
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
											<li class="breadcrumb-item text-muted">Vendor Product list</li>
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
							<!--begin::Content-->
							<div id="kt_app_content" class="app-content flex-column-fluid vendors">
								<!--begin::Content container-->
								<div id="kt_app_content_container" class="app-container container-xxl">
									<!--begin::Layout-->
									<div class="row">
                                        <div class="col-sm-4"  id="sidebarWrap">
                                            <aside class="sidebar left-sidebar vendor-sidebar sticky-sidebar-wrapper sidebar-fixed" id="sidebar">
                                                <div class="accordion accordion-flush sidebar-content" id="faqlist">
                                                    <div class="accordion-item">
                                                        <h2 class="accordion-header">
                                                            <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#faq-content-1">
                                                              All Categories
                                                            </button>
                                                        </h2>
                                                        <div id="faq-content-1" class="accordion-collapse collapse show" data-bs-parent="#faqlist">
                                                            <div class="accordion-body">
                                                            <ul class="widget-body filter-items search-ul">
                                                            <?php foreach ($cjVendorCategory as  $value):?>
                                                                <li><a href="<?= url('/dw-admin/vendor-store/'.$value->categoryFirstId.'') ?>" class="<?php echo $id == $value->categoryFirstId ? 'text-primary' : ''  ?>"><?php echo $value->categoryFirstName; ?></a></li>
                                                            <?php endforeach ?>
                                                            </ul>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- Start of Sidebar Overlay -->
                                            </aside>
                                        </div>
                                        <div class="col-sm-8 main" id="content">
                                            <div class="main-content">
                                                <div class="row">
                                                    <div class="col-12">
                                                        <!-- <div class="store store-banner mb-4">
                                                            <figure class="store-media">
                                                                <img src="<?= url('/admin/') ?>/assets/media/vendor/1.jpg" alt="Vendor" width="" height="" style="background-color: #414960;" class="w-100">
                                                            </figure>
                                                            <div class="store-content">
                                                                <figure class="seller-brand">
                                                                    <img src="<?= url('/admin/') ?>/assets/media/vendor/2.jpg" alt="Brand" width="80" height="80">
                                                                </figure>
                                                                <h6 class="store-title">Vendor 1</h6>
                                                                <ul class="seller-info-list list-style-none">
                                                                    <li class="store-address">
                                                                    <i class="fa-solid fa-location-dot"></i>
                                                                        Steven Street, El Carjon
                                                                        California, United States (US)
                                                                    </li>
                                                                    <li class="store-phone">
                                                                        <a href="tel:1234567890">
                                                                        <i class="fa-solid fa-phone"></i>
                                                                            1234567890
                                                                        </a>
                                                                    </li>
                                                                    <li class="store-rating">
                                                                    <i class="fa-solid fa-star"></i>
                                                                        4.33 rating from 3 reviews
                                                                    </li>
                                                                    <li class="store-open">
                                                                    <i class="fa-solid fa-bag-shopping"></i>
                                                                        Store Open
                                                                    </li>
                                                                </ul>
                                                                <div class="social-icons social-no-color border-thin">
                                                                    <a href="#" class="social-icon social-facebook w-icon-facebook"></a>
                                                                    <a href="#" class="social-icon social-google w-icon-google"></a>
                                                                    <a href="#" class="social-icon social-twitter w-icon-twitter"></a>
                                                                    <a href="#" class="social-icon social-pinterest w-icon-pinterest"></a>
                                                                    <a href="#" class="social-icon social-youtube w-icon-youtube"></a>
                                                                    <a href="#" class="social-icon social-instagram w-icon-instagram"></a>
                                                                </div>
                                                            </div>
                                                        </div> -->
                                                        <!-- End of Store Banner -->
                                                        <h2 class="title vendor-product-title mb-4">Products</h2>
                                                    </div>
                                                </div>
                                                <div class="product-wrapper row">
                                                <?php foreach ($cjVendorProduct->list as  $value):?>

                                                    <?php 

                                                        // $total_review_data = json_decode(cjCurl('product-reviews', $value->pid))->data;

                                                        // $total_review = count($total_review_data->list);

                                                        // $total_score = 0;

                                                        // if($total_review > 0){
                                                        //     foreach ($total_review_data->list as $comment) {
                                                        //         $total_score += intval($comment->score);
                                                        //     }
                                                        //     $average_score = round($total_score / $total_review);
                                                        // }else{
                                                        //     $average_score = 0;
                                                        // }

                                                        // $array = [];

                                                        // for ($i = 1; $i <= $average_score; $i++) {
                                                        //     $array[] = $i;
                                                        // }

                                                    ?>
                                                    <div class="product-wrap col-sm-6 col-md-4 col-lg-3">
                                                        <div class="product text-center">
                                                            <figure class="product-media">
                                                                <a href="<?= url('dw-admin/vendor-product-details/'.$value->pid) ?>">
                                                                    <img src="<?php echo $value->productImage ?>" alt="Product" width="" height="">
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
                                                                    <a href="<?= url('dw-admin/vendor-product-details/'.$value->pid) ?>"><?php echo $value->productNameEn ?></a>
                                                                </h3>
                                                                <div class="ratings-container">
                                                                    <div class="ratings-full d-flex justify-content-center flex-column text-center align-items-center">
                                                                        <!-- <ul class="d-flex">
                                                                            <li><a href="#"><i class="fa-solid fa-star"></i></a></li>
                                                                            <li><a href="#"><i class="fa-solid fa-star"></i></a></li>
                                                                            <li><a href="#"><i class="fa-solid fa-star"></i></a></li>
                                                                            <li><a href="#"><i class="fa-solid fa-star"></i></a></li>
                                                                            <li><a href="#"><i class="fa-solid fa-star"></i></a></li>
                                                                        </ul> -->
                                                                        <!-- <a href="#" class="rating-reviews">(0 reviews)</a> -->
                                                                    </div>
                                                                    
                                                                </div>
                                                                <div class="product-pa-wrapper">
                                                                    <div class="product-price">
                                                                      $<?php echo $value->sellPrice ?>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                <?php endforeach ?>
                                                </div>
                                            </div>
                                        </div>
                                        <div  id="communication" style="height: 60px;"></div>
                                    </div>
									<!--end::Layout-->
								</div>
								<!--end::Content container-->
							</div>
							<!--end::Content-->
						</div>
						<!--end::Content wrapper-->
                        <?php include("common/footer.php") ?> 	