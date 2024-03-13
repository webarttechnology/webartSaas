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
										<h1 class="page-heading d-flex text-gray-900 fw-bold fs-3 flex-column justify-content-center my-0">Vendors list</h1>
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
											<li class="breadcrumb-item text-muted">Vendor list</li>
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
                                        <div class="col-sm-4">
                                            <aside class="sidebar vendor-sidebar sticky-sidebar-wrapper left-sidebar sidebar-fixed ">
                                                <!-- <div class="sidebar-overlay"></div>
                                                <a class="sidebar-close" href="#"><i class="close-icon"></i></a>
                                                <a href="#" class="sidebar-toggle"><i class="fas fa-chevron-right"></i></a> -->
                                                <div class="sidebar-content">
                                                    <div class="sticky-sidebar">
                                                        <div class="widget widget-search-form">
                                                            <div class="widget-body">
                                                                <form action="#" method="GET" class="input-wrapper input-wrapper-inline relative ">
                                                                    <input type="text" class="form-control" placeholder="Search ..."
                                                                        autocomplete="off" required="">
                                                                    <button class="btn btn-search">
                                                                    <i class="ki-duotone ki-magnifier fs-2">
                                                                            <span class="path1"></span>
                                                                            <span class="path2"></span>
                                                                        </i>
                                                                    </button>
                                                                </form>
                                                            </div>
                                                        </div>
                                                        <!-- End of Widget -->

                                                        <div class="widget widget-filter mb-4 mt-4">
                                                            <h4 class="widget-title">Filter By Category</h4>
                                                            <div class="widget-body">
                                                                <form class="select-box">
                                                                    <select name="orderby" class="form-select">
                                                                        <option value="choose" selected="selected">Choose Category ...
                                                                        </option>
                                                                        <option value="clothing">Clothings</option>
                                                                        <option value="men">Men's</option>
                                                                        <option value="electronics">Office Electronics</option>
                                                                        <option value="accessories">Accessories</option>
                                                                        <option value="home-kitchen">Home &amp; Kitchen</option>
                                                                        <option value="healthy-beauty">Healthy &amp; Beauty</option>
                                                                        <option value="jewelry-watch">Jewelry &amp; Watch</option>
                                                                        <option value="smart-watch">Smart Watches</option>
                                                                    </select>
                                                                </form>
                                                            </div>
                                                        </div>
                                                        <!-- End of Widget -->

                                                        <div class="widget widget-filter mb-4">
                                                            <h4 class="widget-title">Filter By Location</h4>
                                                            <div class="widget-body">
                                                                <form class="select-box  mb-4">
                                                                    <select name="orderby" class="form-select">
                                                                        <option value="choose" selected="selected">Choose Location ...
                                                                        </option>
                                                                        <option value="afghanistan">Afghanistan</option>
                                                                        <option value="aland">Aland Islands</option>
                                                                        <option value="albania">Albania</option>
                                                                        <option value="algeria">Algeria</option>
                                                                        <option value="bahamas">Bahamas</option>
                                                                        <option value="cuba">Cuba</option>
                                                                        <option value="greece">Greece</option>
                                                                    </select>
                                                                </form>
                                                                <form class="select-box  mb-4">
                                                                    <select name="orderby" class="form-select">
                                                                        <option value="choose" selected="selected">Choose State</option>
                                                                    </select>
                                                                </form>
                                                                <form>
                                                                    <input type="search" id="city" name="city" class="form-control mb-4"
                                                                        placeholder="Search by City" required />
                                                                    <input type="search" id="zip" name="zip" class="form-control mb-4"
                                                                        placeholder="Search by Zip" required />
                                                                </form>
                                                            </div>
                                                        </div>
                                                        <!-- End of Widget -->
                                                    </div>
                                                    <!-- End of Sticky Sidebar -->
                                                </div>
                                                <!-- End of Sidebar Content -->
                                            </aside>
                                        </div>
                                        <div class="col-sm-8">
                                            <div class="main-content">
                                                <div class="row justify-content-between">
                                                    <div class="col-sm-6 col-md-5">
                                                        <form class="select-box toolbox-item">
                                                            <select name="orderby" class="form-select">
                                                                <option value="old-new" selected="selected">Sort by newness: old to new
                                                                </option>
                                                                <option value="new-old">Sort by newness: new to old</option>
                                                                <option value="low-high">Sort by average rating: low to high</option>
                                                                <option value="high-low">Sort by average rating: high to low</option>
                                                                <option value="old-new">Sort Alphabetical: A to Z</option>
                                                                <option value="old-new">Sort Alphabetical: Z to A</option>
                                                            </select>
                                                        </form>
                                                    </div>
                                                    <div class="col-sm-6 col-md-4">
                                                        <div class="toolbox-item text-end">
                                                            <label class="showing-info">Showing 1-2 of 2 result</label>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- End of Toolbox -->

                                                <div class="row">

                                                    <div class="store-wrap col-sm-6">
                                                         <a href="<?= url('/dw-admin/vendor-store') ?>">
                                                            <div class="store store-grid store-wcfm">
                                                                <div class="store-header">
                                                                    <figure class="store-banner">
                                                                        <img src="<?= url('/admin/') ?>/assets/media/vendor/1.jpg" alt="Vendor" width="100%" style="background-color: #40475E">
                                                                    </figure>
                                                                </div>
                                                                <!-- End of Store Header -->
                                                                <div class="store-content">
                                                                    <h6 class="store-title">
                                                                        <a href="<?= url('/dw-admin/vendor-store/') ?>">Vendor 1</a>
                                                                    </h6>
                                                                    <div class="ratings-container">
                                                                        <div class="ratings-full">
                                                                            <ul class="d-flex">
                                                                                <li><a href="#"><i class="fa-solid fa-star"></i></a></li>
                                                                                <li><a href="#"><i class="fa-solid fa-star"></i></a></li>
                                                                                <li><a href="#"><i class="fa-solid fa-star"></i></a></li>
                                                                                <li><a href="#"><i class="fa-solid fa-star"></i></a></li>
                                                                                <li><a href="#"><i class="fa-solid fa-star"></i></a></li>
                                                                            </ul>
                                                                        </div>
                                                                    </div>
                                                                    <ul class="seller-info-list list-style-none">
                                                                        <li class="store-email">
                                                                            <a href="email:#">
                                                                                <i class="far fa-envelope"></i>
                                                                                info@email.com
                                                                            </a>
                                                                        </li>
                                                                        <li class="store-phone">
                                                                            <a href="tel:123456789">
                                                                                <i class="w-icon-phone"></i>
                                                                                123456789
                                                                            </a>
                                                                        </li>
                                                                    </ul>
                                                                </div>
                                                                <!-- End of Store Content -->
                                                                <div class="store-footer">
                                                                    <figure class="seller-brand">
                                                                        <img src="<?= url('/admin/') ?>/assets/media/vendor/2.jpg" alt="Brand" width="80"
                                                                            height="80">
                                                                    </figure>
                                                                    <a href="#" class="btn btn-secondary btn-icon-left"><i
                                                                            class="far fa-question-circle"></i>Inquiry</a>
                                                                    <a href="#" class="btn btn-secondary">Visit</a>
                                                                </div>
                                                                <!-- End of Store Footer -->
                                                            </div>
                                                        </a>
                                                    </div>
                                                    <div class="store-wrap col-sm-6">
                                                         <a href="<?= url('/dw-admin/vendor-store') ?>">
                                                            <div class="store store-grid store-wcfm">
                                                                <div class="store-header">
                                                                    <figure class="store-banner">
                                                                        <img src="<?= url('/admin/') ?>/assets/media/vendor/1.jpg" alt="Vendor" width="100%" style="background-color: #40475E">
                                                                    </figure>
                                                                </div>
                                                                <!-- End of Store Header -->
                                                                <div class="store-content">
                                                                    <h6 class="store-title">
                                                                        <a href="<?= url('/dw-admin/vendor-store/') ?>">Vendor 1</a>
                                                                    </h6>
                                                                    <div class="ratings-container">
                                                                        <div class="ratings-full">
                                                                            <ul class="d-flex">
                                                                                <li><a href="#"><i class="fa-solid fa-star"></i></a></li>
                                                                                <li><a href="#"><i class="fa-solid fa-star"></i></a></li>
                                                                                <li><a href="#"><i class="fa-solid fa-star"></i></a></li>
                                                                                <li><a href="#"><i class="fa-solid fa-star"></i></a></li>
                                                                                <li><a href="#"><i class="fa-solid fa-star"></i></a></li>
                                                                            </ul>
                                                                        </div>
                                                                    </div>
                                                                    <ul class="seller-info-list list-style-none">
                                                                        <li class="store-email">
                                                                            <a href="email:#">
                                                                                <i class="far fa-envelope"></i>
                                                                                info@email.com
                                                                            </a>
                                                                        </li>
                                                                        <li class="store-phone">
                                                                            <a href="tel:123456789">
                                                                                <i class="w-icon-phone"></i>
                                                                                123456789
                                                                            </a>
                                                                        </li>
                                                                    </ul>
                                                                </div>
                                                                <!-- End of Store Content -->
                                                                <div class="store-footer">
                                                                    <figure class="seller-brand">
                                                                        <img src="<?= url('/admin/') ?>/assets/media/vendor/2.jpg" alt="Brand" width="80"
                                                                            height="80">
                                                                    </figure>
                                                                    <a href="#" class="btn btn-secondary btn-icon-left"><i
                                                                            class="far fa-question-circle"></i>Inquiry</a>
                                                                    <a href="#" class="btn btn-secondary">Visit</a>
                                                                </div>
                                                                <!-- End of Store Footer -->
                                                            </div>
                                                        </a>
                                                    </div>
                                                    <div class="store-wrap col-sm-6">
                                                         <a href="<?= url('/dw-admin/vendor-store') ?>">
                                                            <div class="store store-grid store-wcfm">
                                                                <div class="store-header">
                                                                    <figure class="store-banner">
                                                                        <img src="<?= url('/admin/') ?>/assets/media/vendor/1.jpg" alt="Vendor" width="100%" style="background-color: #40475E">
                                                                    </figure>
                                                                </div>
                                                                <!-- End of Store Header -->
                                                                <div class="store-content">
                                                                    <h6 class="store-title">
                                                                        <a href="<?= url('/dw-admin/vendor-store/') ?>">Vendor 1</a>
                                                                    </h6>
                                                                    <div class="ratings-container">
                                                                        <div class="ratings-full">
                                                                            <ul class="d-flex">
                                                                                <li><a href="#"><i class="fa-solid fa-star"></i></a></li>
                                                                                <li><a href="#"><i class="fa-solid fa-star"></i></a></li>
                                                                                <li><a href="#"><i class="fa-solid fa-star"></i></a></li>
                                                                                <li><a href="#"><i class="fa-solid fa-star"></i></a></li>
                                                                                <li><a href="#"><i class="fa-solid fa-star"></i></a></li>
                                                                            </ul>
                                                                        </div>
                                                                    </div>
                                                                    <ul class="seller-info-list list-style-none">
                                                                        <li class="store-email">
                                                                            <a href="email:#">
                                                                                <i class="far fa-envelope"></i>
                                                                                info@email.com
                                                                            </a>
                                                                        </li>
                                                                        <li class="store-phone">
                                                                            <a href="tel:123456789">
                                                                                <i class="w-icon-phone"></i>
                                                                                123456789
                                                                            </a>
                                                                        </li>
                                                                    </ul>
                                                                </div>
                                                                <!-- End of Store Content -->
                                                                <div class="store-footer">
                                                                    <figure class="seller-brand">
                                                                        <img src="<?= url('/admin/') ?>/assets/media/vendor/2.jpg" alt="Brand" width="80"
                                                                            height="80">
                                                                    </figure>
                                                                    <a href="#" class="btn btn-secondary btn-icon-left"><i
                                                                            class="far fa-question-circle"></i>Inquiry</a>
                                                                    <a href="#" class="btn btn-secondary">Visit</a>
                                                                </div>
                                                                <!-- End of Store Footer -->
                                                            </div>
                                                        </a>
                                                    </div>
                                                    <div class="store-wrap col-sm-6">
                                                        <a href="<?= url('/dw-admin/vendor-store') ?>">
                                                            <div class="store store-grid store-wcfm">
                                                                <div class="store-header">
                                                                    <figure class="store-banner">
                                                                        <img src="<?= url('/admin/') ?>/assets/media/vendor/1.jpg" alt="Vendor" width="100%" style="background-color: #40475E">
                                                                    </figure>
                                                                </div>
                                                                <!-- End of Store Header -->
                                                                <div class="store-content">
                                                                    <h6 class="store-title">
                                                                        <a href="<?= url('/dw-admin/vendor-store/') ?>">Vendor 1</a>
                                                                    </h6>
                                                                    <div class="ratings-container">
                                                                        <div class="ratings-full">
                                                                            <ul class="d-flex">
                                                                                <li><a href="#"><i class="fa-solid fa-star"></i></a></li>
                                                                                <li><a href="#"><i class="fa-solid fa-star"></i></a></li>
                                                                                <li><a href="#"><i class="fa-solid fa-star"></i></a></li>
                                                                                <li><a href="#"><i class="fa-solid fa-star"></i></a></li>
                                                                                <li><a href="#"><i class="fa-solid fa-star"></i></a></li>
                                                                            </ul>
                                                                        </div>
                                                                    </div>
                                                                    <ul class="seller-info-list list-style-none">
                                                                        <li class="store-email">
                                                                            <a href="email:#">
                                                                                <i class="far fa-envelope"></i>
                                                                                info@email.com
                                                                            </a>
                                                                        </li>
                                                                        <li class="store-phone">
                                                                            <a href="tel:123456789">
                                                                                <i class="w-icon-phone"></i>
                                                                                123456789
                                                                            </a>
                                                                        </li>
                                                                    </ul>
                                                                </div>
                                                                <!-- End of Store Content -->
                                                                <div class="store-footer">
                                                                    <figure class="seller-brand">
                                                                        <img src="<?= url('/admin/') ?>/assets/media/vendor/2.jpg" alt="Brand" width="80"
                                                                            height="80">
                                                                    </figure>
                                                                    <a href="#" class="btn btn-secondary btn-icon-left"><i
                                                                            class="far fa-question-circle"></i>Inquiry</a>
                                                                    <a href="#" class="btn btn-secondary">Visit</a>
                                                                </div>
                                                                <!-- End of Store Footer -->
                                                            </div>
                                                        </a>
                                                    </div>
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