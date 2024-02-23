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
					<h1 class="page-heading d-flex text-gray-900 fw-bold fs-3 flex-column justify-content-center my-0">Products</h1>
					<!--end::Title-->
					<!--begin::Breadcrumb-->
					<ul class="breadcrumb breadcrumb-separatorless fw-semibold fs-7 my-0 pt-1">
						<!--begin::Item-->
						<li class="breadcrumb-item text-muted">
							<a href="<?=  url('/dw-admin/dashboard') ?>" class="text-muted text-hover-primary">Home</a>
						</li>
						<!--end::Item-->
						<!--begin::Item-->
						<li class="breadcrumb-item">
							<span class="bullet bg-gray-500 w-5px h-2px"></span>
						</li>
						<!--end::Item-->
						<!--begin::Item-->
						<li class="breadcrumb-item text-muted">eCommerce</li>
						<!--end::Item-->
						<!--begin::Item-->
						<li class="breadcrumb-item">
							<span class="bullet bg-gray-500 w-5px h-2px"></span>
						</li>
						<!--end::Item-->
						<!--begin::Item-->
						<li class="breadcrumb-item text-muted">Catalog</li>
						<!--end::Item-->
					</ul>
					<!--end::Breadcrumb-->
				</div>
				<!--end::Page title-->
				<!--begin::Actions-->
				<div class="d-flex align-items-center gap-2 gap-lg-3">
					<!--begin::Filter menu-->
					<div class="m-0">
						<!--begin::Menu toggle-->
						<a href="#" class="btn btn-sm btn-flex btn-secondary fw-bold" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">
						<i class="ki-duotone ki-filter fs-6 text-muted me-1">
							<span class="path1"></span>
							<span class="path2"></span>
						</i>Filter</a>
						<!--end::Menu toggle-->
						<!--begin::Menu 1-->
						<div class="menu menu-sub menu-sub-dropdown w-250px w-md-300px" data-kt-menu="true" id="kt_menu_65a1214c6c869">
							<!--begin::Header-->
							<div class="px-7 py-5">
								<div class="fs-5 text-gray-900 fw-bold">Filter Options</div>
							</div>
							<!--end::Header-->
							<!--begin::Menu separator-->
							<div class="separator border-gray-200"></div>
							<!--end::Menu separator-->
							<!--begin::Form-->
							<div class="px-7 py-5">
								<!--begin::Input group-->
								<div class="mb-10">
									<!--begin::Label-->
									<label class="form-label fw-semibold">Status:</label>
									<!--end::Label-->
									<!--begin::Input-->
									<div>
										<select class="form-select form-select-solid" multiple="multiple" data-kt-select2="true" data-close-on-select="false" data-placeholder="Select option" data-dropdown-parent="#kt_menu_65a1214c6c869" data-allow-clear="true">
											<option></option>
											<option value="1">Approved</option>
											<option value="2">Pending</option>
											<option value="2">In Process</option>
											<option value="2">Rejected</option>
										</select>
									</div>
									<!--end::Input-->
								</div>
								<!--end::Input group-->
								<!--begin::Input group-->
								<div class="mb-10">
									<!--begin::Label-->
									<label class="form-label fw-semibold">Member Type:</label>
									<!--end::Label-->
									<!--begin::Options-->
									<div class="d-flex">
										<!--begin::Options-->
										<label class="form-check form-check-sm form-check-custom form-check-solid me-5">
											<input class="form-check-input" type="checkbox" value="1" />
											<span class="form-check-label">Author</span>
										</label>
										<!--end::Options-->
										<!--begin::Options-->
										<label class="form-check form-check-sm form-check-custom form-check-solid">
											<input class="form-check-input" type="checkbox" value="2" checked="checked" />
											<span class="form-check-label">Customer</span>
										</label>
										<!--end::Options-->
									</div>
									<!--end::Options-->
								</div>
								<!--end::Input group-->
								<!--begin::Input group-->
								<div class="mb-10">
									<!--begin::Label-->
									<label class="form-label fw-semibold">Notifications:</label>
									<!--end::Label-->
									<!--begin::Switch-->
									<div class="form-check form-switch form-switch-sm form-check-custom form-check-solid">
										<input class="form-check-input" type="checkbox" value="" name="notifications" checked="checked" />
										<label class="form-check-label">Enabled</label>
									</div>
									<!--end::Switch-->
								</div>
								<!--end::Input group-->
								<!--begin::Actions-->
								<div class="d-flex justify-content-end">
									<button type="reset" class="btn btn-sm btn-light btn-active-light-primary me-2" data-kt-menu-dismiss="true">Reset</button>
									<button type="submit" class="btn btn-sm btn-primary" data-kt-menu-dismiss="true">Apply</button>
								</div>
								<!--end::Actions-->
							</div>
							<!--end::Form-->
						</div>
						<!--end::Menu 1-->
					</div>
					<!--end::Filter menu-->
					<!--begin::Secondary button-->
					<!--end::Secondary button-->
					<!--begin::Primary button-->
					<a href="#" class="btn btn-sm fw-bold btn-primary" data-bs-toggle="modal" data-bs-target="#kt_modal_create_app">Create</a>
					<!--end::Primary button-->
				</div>
				<!--end::Actions-->
			</div>
			<!--end::Toolbar container-->
		</div>
		<!--end::Toolbar-->
		<!--begin::Content-->
		<div id="kt_app_content" class="app-content flex-column-fluid">
			<!--begin::Content container-->
			<div id="kt_app_content_container" class="app-container container-xxl">
				<!--begin::Products-->
				<div class="card card-flush">
					<!--begin::Card header-->
					<div class="card-header align-items-center py-5 gap-2 gap-md-5">
						<!--begin::Card title-->
						<div class="card-title">
							<!--begin::Search-->
							<div class="d-flex align-items-center position-relative my-1">
								<i class="ki-duotone ki-magnifier fs-3 position-absolute ms-4">
									<span class="path1"></span>
									<span class="path2"></span>
								</i>
								<input type="text" data-kt-ecommerce-product-filter="search" class="form-control form-control-solid w-250px ps-12" placeholder="Search Product" />
							</div>
							<!--end::Search-->
						</div>
						<!--end::Card title-->
						<!--begin::Card toolbar-->
						<div class="card-toolbar flex-row-fluid justify-content-end gap-5">
							<div class="w-100 mw-150px">
								<!--begin::Select2-->
								<select class="form-select form-select-solid" data-control="select2" data-hide-search="true" data-placeholder="Status" data-kt-ecommerce-product-filter="status">
									<option></option>
									<option value="all">All</option>
									<option value="published">Published</option>
									<option value="scheduled">Scheduled</option>
									<option value="inactive">Inactive</option>
								</select>
								<!--end::Select2-->
							</div>
							<!--begin::Add product-->
							<a href="<?=  url('/dw-admin/add-product') ?>" class="btn btn-primary">Add Product</a>
							<!--end::Add product-->
						</div>
						<!--end::Card toolbar-->
					</div>
					<!--end::Card header-->
					<!--begin::Card body-->
					<div class="card-body pt-0">
						<!--begin::Table-->
						<table class="table align-middle table-row-dashed fs-6 gy-5" id="kt_ecommerce_products_table">
							<thead>
								<tr class="text-start text-gray-500 fw-bold fs-7 text-uppercase gs-0">
									<th class="w-10px pe-2">
										<div class="form-check form-check-sm form-check-custom form-check-solid me-3">
											<input class="form-check-input" type="checkbox" data-kt-check="true" data-kt-check-target="#kt_ecommerce_products_table .form-check-input" value="1" />
										</div>
									</th>
									<th class="min-w-200px">Product</th>
									<th class="text-end min-w-100px">SKU</th>
									<th class="text-end min-w-70px">Qty</th>
									<th class="text-end min-w-100px">Price</th>
									<th class="text-end min-w-100px">Rating</th>
									<th class="text-end min-w-100px">Status</th>
									<th class="text-end min-w-70px">Actions</th>
								</tr>
							</thead>
							<tbody class="fw-semibold text-gray-600">
								<tr>
									<td>
										<div class="form-check form-check-sm form-check-custom form-check-solid">
											<input class="form-check-input" type="checkbox" value="1" />
										</div>
									</td>
									<td>
										<div class="d-flex align-items-center">
											<!--begin::Thumbnail-->
											<a href="<?=  url('/dw-admin/edit-product') ?>" class="symbol symbol-50px">
												<span class="symbol-label" style="background-image:url(<?= url('/admin/') ?>/assets/media//stock/ecommerce/1.png);"></span>
											</a>
											<!--end::Thumbnail-->
											<div class="ms-5">
												<!--begin::Title-->
												<a href="<?=  url('/dw-admin/edit-product') ?>" class="text-gray-800 text-hover-primary fs-5 fw-bold" data-kt-ecommerce-product-filter="product_name">Product 1</a>
												<!--end::Title-->
											</div>
										</div>
									</td>
									<td class="text-end pe-0">
										<span class="fw-bold">01456001</span>
									</td>
									<td class="text-end pe-0" data-order="6">
										<span class="badge badge-light-warning">Low stock</span>
										<span class="fw-bold text-warning ms-3">6</span>
									</td>
									<td class="text-end pe-0">136</td>
									<td class="text-end pe-0" data-order="rating-4">
										<div class="rating justify-content-end">
											<div class="rating-label checked">
												<i class="ki-duotone ki-star fs-6"></i>
											</div>
											<div class="rating-label checked">
												<i class="ki-duotone ki-star fs-6"></i>
											</div>
											<div class="rating-label checked">
												<i class="ki-duotone ki-star fs-6"></i>
											</div>
											<div class="rating-label checked">
												<i class="ki-duotone ki-star fs-6"></i>
											</div>
											<div class="rating-label">
												<i class="ki-duotone ki-star fs-6"></i>
											</div>
										</div>
									</td>
									<td class="text-end pe-0" data-order="Scheduled">
										<!--begin::Badges-->
										<div class="badge badge-light-primary">Scheduled</div>
										<!--end::Badges-->
									</td>
									<td class="text-end">
										<a href="#" class="btn btn-sm btn-light btn-flex btn-center btn-active-light-primary" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">Actions 
										<i class="ki-duotone ki-down fs-5 ms-1"></i></a>
										<!--begin::Menu-->
										<div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-semibold fs-7 w-125px py-4" data-kt-menu="true">
											<!--begin::Menu item-->
											<div class="menu-item px-3">
												<a href="<?=  url('/dw-admin/edit-product') ?>" class="menu-link px-3">Edit</a>
											</div>
											<!--end::Menu item-->
											<!--begin::Menu item-->
											<div class="menu-item px-3">
												<a href="#" class="menu-link px-3" data-kt-ecommerce-product-filter="delete_row">Delete</a>
											</div>
											<!--end::Menu item-->
										</div>
										<!--end::Menu-->
									</td>
								</tr>
								<tr>
									<td>
										<div class="form-check form-check-sm form-check-custom form-check-solid">
											<input class="form-check-input" type="checkbox" value="1" />
										</div>
									</td>
									<td>
										<div class="d-flex align-items-center">
											<!--begin::Thumbnail-->
											<a href="<?=  url('/dw-admin/edit-product') ?>" class="symbol symbol-50px">
												<span class="symbol-label" style="background-image:url(<?= url('/admin/') ?>/assets/media//stock/ecommerce/2.png);"></span>
											</a>
											<!--end::Thumbnail-->
											<div class="ms-5">
												<!--begin::Title-->
												<a href="<?=  url('/dw-admin/edit-product') ?>" class="text-gray-800 text-hover-primary fs-5 fw-bold" data-kt-ecommerce-product-filter="product_name">Product 2</a>
												<!--end::Title-->
											</div>
										</div>
									</td>
									<td class="text-end pe-0">
										<span class="fw-bold">04240004</span>
									</td>
									<td class="text-end pe-0" data-order="20">
										<span class="fw-bold ms-3">20</span>
									</td>
									<td class="text-end pe-0">55</td>
									<td class="text-end pe-0" data-order="rating-5">
										<div class="rating justify-content-end">
											<div class="rating-label checked">
												<i class="ki-duotone ki-star fs-6"></i>
											</div>
											<div class="rating-label checked">
												<i class="ki-duotone ki-star fs-6"></i>
											</div>
											<div class="rating-label checked">
												<i class="ki-duotone ki-star fs-6"></i>
											</div>
											<div class="rating-label checked">
												<i class="ki-duotone ki-star fs-6"></i>
											</div>
											<div class="rating-label checked">
												<i class="ki-duotone ki-star fs-6"></i>
											</div>
										</div>
									</td>
									<td class="text-end pe-0" data-order="Published">
										<!--begin::Badges-->
										<div class="badge badge-light-success">Published</div>
										<!--end::Badges-->
									</td>
									<td class="text-end">
										<a href="#" class="btn btn-sm btn-light btn-flex btn-center btn-active-light-primary" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">Actions 
										<i class="ki-duotone ki-down fs-5 ms-1"></i></a>
										<!--begin::Menu-->
										<div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-semibold fs-7 w-125px py-4" data-kt-menu="true">
											<!--begin::Menu item-->
											<div class="menu-item px-3">
												<a href="<?=  url('/dw-admin/edit-product') ?>" class="menu-link px-3">Edit</a>
											</div>
											<!--end::Menu item-->
											<!--begin::Menu item-->
											<div class="menu-item px-3">
												<a href="#" class="menu-link px-3" data-kt-ecommerce-product-filter="delete_row">Delete</a>
											</div>
											<!--end::Menu item-->
										</div>
										<!--end::Menu-->
									</td>
								</tr>
								<tr>
									<td>
										<div class="form-check form-check-sm form-check-custom form-check-solid">
											<input class="form-check-input" type="checkbox" value="1" />
										</div>
									</td>
									<td>
										<div class="d-flex align-items-center">
											<!--begin::Thumbnail-->
											<a href="<?=  url('/dw-admin/edit-product') ?>" class="symbol symbol-50px">
												<span class="symbol-label" style="background-image:url(<?= url('/admin/') ?>/assets/media//stock/ecommerce/3.png);"></span>
											</a>
											<!--end::Thumbnail-->
											<div class="ms-5">
												<!--begin::Title-->
												<a href="<?=  url('/dw-admin/edit-product') ?>" class="text-gray-800 text-hover-primary fs-5 fw-bold" data-kt-ecommerce-product-filter="product_name">Product 3</a>
												<!--end::Title-->
											</div>
										</div>
									</td>
									<td class="text-end pe-0">
										<span class="fw-bold">04224009</span>
									</td>
									<td class="text-end pe-0" data-order="10">
										<span class="fw-bold ms-3">10</span>
									</td>
									<td class="text-end pe-0">200</td>
									<td class="text-end pe-0" data-order="rating-3">
										<div class="rating justify-content-end">
											<div class="rating-label checked">
												<i class="ki-duotone ki-star fs-6"></i>
											</div>
											<div class="rating-label checked">
												<i class="ki-duotone ki-star fs-6"></i>
											</div>
											<div class="rating-label checked">
												<i class="ki-duotone ki-star fs-6"></i>
											</div>
											<div class="rating-label">
												<i class="ki-duotone ki-star fs-6"></i>
											</div>
											<div class="rating-label">
												<i class="ki-duotone ki-star fs-6"></i>
											</div>
										</div>
									</td>
									<td class="text-end pe-0" data-order="Published">
										<!--begin::Badges-->
										<div class="badge badge-light-success">Published</div>
										<!--end::Badges-->
									</td>
									<td class="text-end">
										<a href="#" class="btn btn-sm btn-light btn-flex btn-center btn-active-light-primary" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">Actions 
										<i class="ki-duotone ki-down fs-5 ms-1"></i></a>
										<!--begin::Menu-->
										<div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-semibold fs-7 w-125px py-4" data-kt-menu="true">
											<!--begin::Menu item-->
											<div class="menu-item px-3">
												<a href="<?=  url('/dw-admin/edit-product') ?>" class="menu-link px-3">Edit</a>
											</div>
											<!--end::Menu item-->
											<!--begin::Menu item-->
											<div class="menu-item px-3">
												<a href="#" class="menu-link px-3" data-kt-ecommerce-product-filter="delete_row">Delete</a>
											</div>
											<!--end::Menu item-->
										</div>
										<!--end::Menu-->
									</td>
								</tr>
								<tr>
									<td>
										<div class="form-check form-check-sm form-check-custom form-check-solid">
											<input class="form-check-input" type="checkbox" value="1" />
										</div>
									</td>
									<td>
										<div class="d-flex align-items-center">
											<!--begin::Thumbnail-->
											<a href="<?=  url('/dw-admin/edit-product') ?>" class="symbol symbol-50px">
												<span class="symbol-label" style="background-image:url(<?= url('/admin/') ?>/assets/media//stock/ecommerce/4.png);"></span>
											</a>
											<!--end::Thumbnail-->
											<div class="ms-5">
												<!--begin::Title-->
												<a href="<?=  url('/dw-admin/edit-product') ?>" class="text-gray-800 text-hover-primary fs-5 fw-bold" data-kt-ecommerce-product-filter="product_name">Product 4</a>
												<!--end::Title-->
											</div>
										</div>
									</td>
									<td class="text-end pe-0">
										<span class="fw-bold">04180002</span>
									</td>
									<td class="text-end pe-0" data-order="13">
										<span class="fw-bold ms-3">13</span>
									</td>
									<td class="text-end pe-0">213</td>
									<td class="text-end pe-0" data-order="rating-4">
										<div class="rating justify-content-end">
											<div class="rating-label checked">
												<i class="ki-duotone ki-star fs-6"></i>
											</div>
											<div class="rating-label checked">
												<i class="ki-duotone ki-star fs-6"></i>
											</div>
											<div class="rating-label checked">
												<i class="ki-duotone ki-star fs-6"></i>
											</div>
											<div class="rating-label checked">
												<i class="ki-duotone ki-star fs-6"></i>
											</div>
											<div class="rating-label">
												<i class="ki-duotone ki-star fs-6"></i>
											</div>
										</div>
									</td>
									<td class="text-end pe-0" data-order="Scheduled">
										<!--begin::Badges-->
										<div class="badge badge-light-primary">Scheduled</div>
										<!--end::Badges-->
									</td>
									<td class="text-end">
										<a href="#" class="btn btn-sm btn-light btn-flex btn-center btn-active-light-primary" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">Actions 
										<i class="ki-duotone ki-down fs-5 ms-1"></i></a>
										<!--begin::Menu-->
										<div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-semibold fs-7 w-125px py-4" data-kt-menu="true">
											<!--begin::Menu item-->
											<div class="menu-item px-3">
												<a href="<?=  url('/dw-admin/edit-product') ?>" class="menu-link px-3">Edit</a>
											</div>
											<!--end::Menu item-->
											<!--begin::Menu item-->
											<div class="menu-item px-3">
												<a href="#" class="menu-link px-3" data-kt-ecommerce-product-filter="delete_row">Delete</a>
											</div>
											<!--end::Menu item-->
										</div>
										<!--end::Menu-->
									</td>
								</tr>
								<tr>
									<td>
										<div class="form-check form-check-sm form-check-custom form-check-solid">
											<input class="form-check-input" type="checkbox" value="1" />
										</div>
									</td>
									<td>
										<div class="d-flex align-items-center">
											<!--begin::Thumbnail-->
											<a href="<?=  url('/dw-admin/edit-product') ?>" class="symbol symbol-50px">
												<span class="symbol-label" style="background-image:url(<?= url('/admin/') ?>/assets/media//stock/ecommerce/5.png);"></span>
											</a>
											<!--end::Thumbnail-->
											<div class="ms-5">
												<!--begin::Title-->
												<a href="<?=  url('/dw-admin/edit-product') ?>" class="text-gray-800 text-hover-primary fs-5 fw-bold" data-kt-ecommerce-product-filter="product_name">Product 5</a>
												<!--end::Title-->
											</div>
										</div>
									</td>
									<td class="text-end pe-0">
										<span class="fw-bold">03679006</span>
									</td>
									<td class="text-end pe-0" data-order="1">
										<span class="badge badge-light-warning">Low stock</span>
										<span class="fw-bold text-warning ms-3">1</span>
									</td>
									<td class="text-end pe-0">248</td>
									<td class="text-end pe-0" data-order="rating-4">
										<div class="rating justify-content-end">
											<div class="rating-label checked">
												<i class="ki-duotone ki-star fs-6"></i>
											</div>
											<div class="rating-label checked">
												<i class="ki-duotone ki-star fs-6"></i>
											</div>
											<div class="rating-label checked">
												<i class="ki-duotone ki-star fs-6"></i>
											</div>
											<div class="rating-label checked">
												<i class="ki-duotone ki-star fs-6"></i>
											</div>
											<div class="rating-label">
												<i class="ki-duotone ki-star fs-6"></i>
											</div>
										</div>
									</td>
									<td class="text-end pe-0" data-order="Published">
										<!--begin::Badges-->
										<div class="badge badge-light-success">Published</div>
										<!--end::Badges-->
									</td>
									<td class="text-end">
										<a href="#" class="btn btn-sm btn-light btn-flex btn-center btn-active-light-primary" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">Actions 
										<i class="ki-duotone ki-down fs-5 ms-1"></i></a>
										<!--begin::Menu-->
										<div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-semibold fs-7 w-125px py-4" data-kt-menu="true">
											<!--begin::Menu item-->
											<div class="menu-item px-3">
												<a href="<?=  url('/dw-admin/edit-product') ?>" class="menu-link px-3">Edit</a>
											</div>
											<!--end::Menu item-->
											<!--begin::Menu item-->
											<div class="menu-item px-3">
												<a href="#" class="menu-link px-3" data-kt-ecommerce-product-filter="delete_row">Delete</a>
											</div>
											<!--end::Menu item-->
										</div>
										<!--end::Menu-->
									</td>
								</tr>
								<tr>
									<td>
										<div class="form-check form-check-sm form-check-custom form-check-solid">
											<input class="form-check-input" type="checkbox" value="1" />
										</div>
									</td>
									<td>
										<div class="d-flex align-items-center">
											<!--begin::Thumbnail-->
											<a href="<?=  url('/dw-admin/edit-product') ?>" class="symbol symbol-50px">
												<span class="symbol-label" style="background-image:url(<?= url('/admin/') ?>/assets/media//stock/ecommerce/6.png);"></span>
											</a>
											<!--end::Thumbnail-->
											<div class="ms-5">
												<!--begin::Title-->
												<a href="<?=  url('/dw-admin/edit-product') ?>" class="text-gray-800 text-hover-primary fs-5 fw-bold" data-kt-ecommerce-product-filter="product_name">Product 6</a>
												<!--end::Title-->
											</div>
										</div>
									</td>
									<td class="text-end pe-0">
										<span class="fw-bold">03243001</span>
									</td>
									<td class="text-end pe-0" data-order="5">
										<span class="badge badge-light-warning">Low stock</span>
										<span class="fw-bold text-warning ms-3">5</span>
									</td>
									<td class="text-end pe-0">77</td>
									<td class="text-end pe-0" data-order="rating-5">
										<div class="rating justify-content-end">
											<div class="rating-label checked">
												<i class="ki-duotone ki-star fs-6"></i>
											</div>
											<div class="rating-label checked">
												<i class="ki-duotone ki-star fs-6"></i>
											</div>
											<div class="rating-label checked">
												<i class="ki-duotone ki-star fs-6"></i>
											</div>
											<div class="rating-label checked">
												<i class="ki-duotone ki-star fs-6"></i>
											</div>
											<div class="rating-label checked">
												<i class="ki-duotone ki-star fs-6"></i>
											</div>
										</div>
									</td>
									<td class="text-end pe-0" data-order="Scheduled">
										<!--begin::Badges-->
										<div class="badge badge-light-primary">Scheduled</div>
										<!--end::Badges-->
									</td>
									<td class="text-end">
										<a href="#" class="btn btn-sm btn-light btn-flex btn-center btn-active-light-primary" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">Actions 
										<i class="ki-duotone ki-down fs-5 ms-1"></i></a>
										<!--begin::Menu-->
										<div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-semibold fs-7 w-125px py-4" data-kt-menu="true">
											<!--begin::Menu item-->
											<div class="menu-item px-3">
												<a href="<?=  url('/dw-admin/edit-product') ?>" class="menu-link px-3">Edit</a>
											</div>
											<!--end::Menu item-->
											<!--begin::Menu item-->
											<div class="menu-item px-3">
												<a href="#" class="menu-link px-3" data-kt-ecommerce-product-filter="delete_row">Delete</a>
											</div>
											<!--end::Menu item-->
										</div>
										<!--end::Menu-->
									</td>
								</tr>
								<tr>
									<td>
										<div class="form-check form-check-sm form-check-custom form-check-solid">
											<input class="form-check-input" type="checkbox" value="1" />
										</div>
									</td>
									<td>
										<div class="d-flex align-items-center">
											<!--begin::Thumbnail-->
											<a href="<?=  url('/dw-admin/edit-product') ?>" class="symbol symbol-50px">
												<span class="symbol-label" style="background-image:url(<?= url('/admin/') ?>/assets/media//stock/ecommerce/7.png);"></span>
											</a>
											<!--end::Thumbnail-->
											<div class="ms-5">
												<!--begin::Title-->
												<a href="<?=  url('/dw-admin/edit-product') ?>" class="text-gray-800 text-hover-primary fs-5 fw-bold" data-kt-ecommerce-product-filter="product_name">Product 7</a>
												<!--end::Title-->
											</div>
										</div>
									</td>
									<td class="text-end pe-0">
										<span class="fw-bold">03559002</span>
									</td>
									<td class="text-end pe-0" data-order="28">
										<span class="fw-bold ms-3">28</span>
									</td>
									<td class="text-end pe-0">121</td>
									<td class="text-end pe-0" data-order="rating-4">
										<div class="rating justify-content-end">
											<div class="rating-label checked">
												<i class="ki-duotone ki-star fs-6"></i>
											</div>
											<div class="rating-label checked">
												<i class="ki-duotone ki-star fs-6"></i>
											</div>
											<div class="rating-label checked">
												<i class="ki-duotone ki-star fs-6"></i>
											</div>
											<div class="rating-label checked">
												<i class="ki-duotone ki-star fs-6"></i>
											</div>
											<div class="rating-label">
												<i class="ki-duotone ki-star fs-6"></i>
											</div>
										</div>
									</td>
									<td class="text-end pe-0" data-order="Published">
										<!--begin::Badges-->
										<div class="badge badge-light-success">Published</div>
										<!--end::Badges-->
									</td>
									<td class="text-end">
										<a href="#" class="btn btn-sm btn-light btn-flex btn-center btn-active-light-primary" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">Actions 
										<i class="ki-duotone ki-down fs-5 ms-1"></i></a>
										<!--begin::Menu-->
										<div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-semibold fs-7 w-125px py-4" data-kt-menu="true">
											<!--begin::Menu item-->
											<div class="menu-item px-3">
												<a href="<?=  url('/dw-admin/edit-product') ?>" class="menu-link px-3">Edit</a>
											</div>
											<!--end::Menu item-->
											<!--begin::Menu item-->
											<div class="menu-item px-3">
												<a href="#" class="menu-link px-3" data-kt-ecommerce-product-filter="delete_row">Delete</a>
											</div>
											<!--end::Menu item-->
										</div>
										<!--end::Menu-->
									</td>
								</tr>
								<tr>
									<td>
										<div class="form-check form-check-sm form-check-custom form-check-solid">
											<input class="form-check-input" type="checkbox" value="1" />
										</div>
									</td>
									<td>
										<div class="d-flex align-items-center">
											<!--begin::Thumbnail-->
											<a href="<?=  url('/dw-admin/edit-product') ?>" class="symbol symbol-50px">
												<span class="symbol-label" style="background-image:url(<?= url('/admin/') ?>/assets/media//stock/ecommerce/8.png);"></span>
											</a>
											<!--end::Thumbnail-->
											<div class="ms-5">
												<!--begin::Title-->
												<a href="<?=  url('/dw-admin/edit-product') ?>" class="text-gray-800 text-hover-primary fs-5 fw-bold" data-kt-ecommerce-product-filter="product_name">Product 8</a>
												<!--end::Title-->
											</div>
										</div>
									</td>
									<td class="text-end pe-0">
										<span class="fw-bold">04121003</span>
									</td>
									<td class="text-end pe-0" data-order="10">
										<span class="fw-bold ms-3">10</span>
									</td>
									<td class="text-end pe-0">38</td>
									<td class="text-end pe-0" data-order="rating-5">
										<div class="rating justify-content-end">
											<div class="rating-label checked">
												<i class="ki-duotone ki-star fs-6"></i>
											</div>
											<div class="rating-label checked">
												<i class="ki-duotone ki-star fs-6"></i>
											</div>
											<div class="rating-label checked">
												<i class="ki-duotone ki-star fs-6"></i>
											</div>
											<div class="rating-label checked">
												<i class="ki-duotone ki-star fs-6"></i>
											</div>
											<div class="rating-label checked">
												<i class="ki-duotone ki-star fs-6"></i>
											</div>
										</div>
									</td>
									<td class="text-end pe-0" data-order="Inactive">
										<!--begin::Badges-->
										<div class="badge badge-light-danger">Inactive</div>
										<!--end::Badges-->
									</td>
									<td class="text-end">
										<a href="#" class="btn btn-sm btn-light btn-flex btn-center btn-active-light-primary" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">Actions 
										<i class="ki-duotone ki-down fs-5 ms-1"></i></a>
										<!--begin::Menu-->
										<div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-semibold fs-7 w-125px py-4" data-kt-menu="true">
											<!--begin::Menu item-->
											<div class="menu-item px-3">
												<a href="<?=  url('/dw-admin/edit-product') ?>" class="menu-link px-3">Edit</a>
											</div>
											<!--end::Menu item-->
											<!--begin::Menu item-->
											<div class="menu-item px-3">
												<a href="#" class="menu-link px-3" data-kt-ecommerce-product-filter="delete_row">Delete</a>
											</div>
											<!--end::Menu item-->
										</div>
										<!--end::Menu-->
									</td>
								</tr>
								<tr>
									<td>
										<div class="form-check form-check-sm form-check-custom form-check-solid">
											<input class="form-check-input" type="checkbox" value="1" />
										</div>
									</td>
									<td>
										<div class="d-flex align-items-center">
											<!--begin::Thumbnail-->
											<a href="<?=  url('/dw-admin/edit-product') ?>" class="symbol symbol-50px">
												<span class="symbol-label" style="background-image:url(<?= url('/admin/') ?>/assets/media//stock/ecommerce/9.png);"></span>
											</a>
											<!--end::Thumbnail-->
											<div class="ms-5">
												<!--begin::Title-->
												<a href="<?=  url('/dw-admin/edit-product') ?>" class="text-gray-800 text-hover-primary fs-5 fw-bold" data-kt-ecommerce-product-filter="product_name">Product 9</a>
												<!--end::Title-->
											</div>
										</div>
									</td>
									<td class="text-end pe-0">
										<span class="fw-bold">04390006</span>
									</td>
									<td class="text-end pe-0" data-order="7">
										<span class="badge badge-light-warning">Low stock</span>
										<span class="fw-bold text-warning ms-3">7</span>
									</td>
									<td class="text-end pe-0">46</td>
									<td class="text-end pe-0" data-order="rating-4">
										<div class="rating justify-content-end">
											<div class="rating-label checked">
												<i class="ki-duotone ki-star fs-6"></i>
											</div>
											<div class="rating-label checked">
												<i class="ki-duotone ki-star fs-6"></i>
											</div>
											<div class="rating-label checked">
												<i class="ki-duotone ki-star fs-6"></i>
											</div>
											<div class="rating-label checked">
												<i class="ki-duotone ki-star fs-6"></i>
											</div>
											<div class="rating-label">
												<i class="ki-duotone ki-star fs-6"></i>
											</div>
										</div>
									</td>
									<td class="text-end pe-0" data-order="Published">
										<!--begin::Badges-->
										<div class="badge badge-light-success">Published</div>
										<!--end::Badges-->
									</td>
									<td class="text-end">
										<a href="#" class="btn btn-sm btn-light btn-flex btn-center btn-active-light-primary" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">Actions 
										<i class="ki-duotone ki-down fs-5 ms-1"></i></a>
										<!--begin::Menu-->
										<div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-semibold fs-7 w-125px py-4" data-kt-menu="true">
											<!--begin::Menu item-->
											<div class="menu-item px-3">
												<a href="<?=  url('/dw-admin/edit-product') ?>" class="menu-link px-3">Edit</a>
											</div>
											<!--end::Menu item-->
											<!--begin::Menu item-->
											<div class="menu-item px-3">
												<a href="#" class="menu-link px-3" data-kt-ecommerce-product-filter="delete_row">Delete</a>
											</div>
											<!--end::Menu item-->
										</div>
										<!--end::Menu-->
									</td>
								</tr>
								<tr>
									<td>
										<div class="form-check form-check-sm form-check-custom form-check-solid">
											<input class="form-check-input" type="checkbox" value="1" />
										</div>
									</td>
									<td>
										<div class="d-flex align-items-center">
											<!--begin::Thumbnail-->
											<a href="<?=  url('/dw-admin/edit-product') ?>" class="symbol symbol-50px">
												<span class="symbol-label" style="background-image:url(<?= url('/admin/') ?>/assets/media//stock/ecommerce/10.png);"></span>
											</a>
											<!--end::Thumbnail-->
											<div class="ms-5">
												<!--begin::Title-->
												<a href="<?=  url('/dw-admin/edit-product') ?>" class="text-gray-800 text-hover-primary fs-5 fw-bold" data-kt-ecommerce-product-filter="product_name">Product 10</a>
												<!--end::Title-->
											</div>
										</div>
									</td>
									<td class="text-end pe-0">
										<span class="fw-bold">01361002</span>
									</td>
									<td class="text-end pe-0" data-order="35">
										<span class="fw-bold ms-3">35</span>
									</td>
									<td class="text-end pe-0">137</td>
									<td class="text-end pe-0" data-order="rating-5">
										<div class="rating justify-content-end">
											<div class="rating-label checked">
												<i class="ki-duotone ki-star fs-6"></i>
											</div>
											<div class="rating-label checked">
												<i class="ki-duotone ki-star fs-6"></i>
											</div>
											<div class="rating-label checked">
												<i class="ki-duotone ki-star fs-6"></i>
											</div>
											<div class="rating-label checked">
												<i class="ki-duotone ki-star fs-6"></i>
											</div>
											<div class="rating-label checked">
												<i class="ki-duotone ki-star fs-6"></i>
											</div>
										</div>
									</td>
									<td class="text-end pe-0" data-order="Scheduled">
										<!--begin::Badges-->
										<div class="badge badge-light-primary">Scheduled</div>
										<!--end::Badges-->
									</td>
									<td class="text-end">
										<a href="#" class="btn btn-sm btn-light btn-flex btn-center btn-active-light-primary" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">Actions 
										<i class="ki-duotone ki-down fs-5 ms-1"></i></a>
										<!--begin::Menu-->
										<div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-semibold fs-7 w-125px py-4" data-kt-menu="true">
											<!--begin::Menu item-->
											<div class="menu-item px-3">
												<a href="<?=  url('/dw-admin/edit-product') ?>" class="menu-link px-3">Edit</a>
											</div>
											<!--end::Menu item-->
											<!--begin::Menu item-->
											<div class="menu-item px-3">
												<a href="#" class="menu-link px-3" data-kt-ecommerce-product-filter="delete_row">Delete</a>
											</div>
											<!--end::Menu item-->
										</div>
										<!--end::Menu-->
									</td>
								</tr>
								<tr>
									<td>
										<div class="form-check form-check-sm form-check-custom form-check-solid">
											<input class="form-check-input" type="checkbox" value="1" />
										</div>
									</td>
									<td>
										<div class="d-flex align-items-center">
											<!--begin::Thumbnail-->
											<a href="<?=  url('/dw-admin/edit-product') ?>" class="symbol symbol-50px">
												<span class="symbol-label" style="background-image:url(<?= url('/admin/') ?>/assets/media//stock/ecommerce/11.png);"></span>
											</a>
											<!--end::Thumbnail-->
											<div class="ms-5">
												<!--begin::Title-->
												<a href="<?=  url('/dw-admin/edit-product') ?>" class="text-gray-800 text-hover-primary fs-5 fw-bold" data-kt-ecommerce-product-filter="product_name">Product 11</a>
												<!--end::Title-->
											</div>
										</div>
									</td>
									<td class="text-end pe-0">
										<span class="fw-bold">03745006</span>
									</td>
									<td class="text-end pe-0" data-order="39">
										<span class="fw-bold ms-3">39</span>
									</td>
									<td class="text-end pe-0">112</td>
									<td class="text-end pe-0" data-order="rating-3">
										<div class="rating justify-content-end">
											<div class="rating-label checked">
												<i class="ki-duotone ki-star fs-6"></i>
											</div>
											<div class="rating-label checked">
												<i class="ki-duotone ki-star fs-6"></i>
											</div>
											<div class="rating-label checked">
												<i class="ki-duotone ki-star fs-6"></i>
											</div>
											<div class="rating-label">
												<i class="ki-duotone ki-star fs-6"></i>
											</div>
											<div class="rating-label">
												<i class="ki-duotone ki-star fs-6"></i>
											</div>
										</div>
									</td>
									<td class="text-end pe-0" data-order="Published">
										<!--begin::Badges-->
										<div class="badge badge-light-success">Published</div>
										<!--end::Badges-->
									</td>
									<td class="text-end">
										<a href="#" class="btn btn-sm btn-light btn-flex btn-center btn-active-light-primary" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">Actions 
										<i class="ki-duotone ki-down fs-5 ms-1"></i></a>
										<!--begin::Menu-->
										<div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-semibold fs-7 w-125px py-4" data-kt-menu="true">
											<!--begin::Menu item-->
											<div class="menu-item px-3">
												<a href="<?=  url('/dw-admin/edit-product') ?>" class="menu-link px-3">Edit</a>
											</div>
											<!--end::Menu item-->
											<!--begin::Menu item-->
											<div class="menu-item px-3">
												<a href="#" class="menu-link px-3" data-kt-ecommerce-product-filter="delete_row">Delete</a>
											</div>
											<!--end::Menu item-->
										</div>
										<!--end::Menu-->
									</td>
								</tr>
								<tr>
									<td>
										<div class="form-check form-check-sm form-check-custom form-check-solid">
											<input class="form-check-input" type="checkbox" value="1" />
										</div>
									</td>
									<td>
										<div class="d-flex align-items-center">
											<!--begin::Thumbnail-->
											<a href="<?=  url('/dw-admin/edit-product') ?>" class="symbol symbol-50px">
												<span class="symbol-label" style="background-image:url(<?= url('/admin/') ?>/assets/media//stock/ecommerce/12.png);"></span>
											</a>
											<!--end::Thumbnail-->
											<div class="ms-5">
												<!--begin::Title-->
												<a href="<?=  url('/dw-admin/edit-product') ?>" class="text-gray-800 text-hover-primary fs-5 fw-bold" data-kt-ecommerce-product-filter="product_name">Product 12</a>
												<!--end::Title-->
											</div>
										</div>
									</td>
									<td class="text-end pe-0">
										<span class="fw-bold">01275003</span>
									</td>
									<td class="text-end pe-0" data-order="28">
										<span class="fw-bold ms-3">28</span>
									</td>
									<td class="text-end pe-0">73</td>
									<td class="text-end pe-0" data-order="rating-4">
										<div class="rating justify-content-end">
											<div class="rating-label checked">
												<i class="ki-duotone ki-star fs-6"></i>
											</div>
											<div class="rating-label checked">
												<i class="ki-duotone ki-star fs-6"></i>
											</div>
											<div class="rating-label checked">
												<i class="ki-duotone ki-star fs-6"></i>
											</div>
											<div class="rating-label checked">
												<i class="ki-duotone ki-star fs-6"></i>
											</div>
											<div class="rating-label">
												<i class="ki-duotone ki-star fs-6"></i>
											</div>
										</div>
									</td>
									<td class="text-end pe-0" data-order="Published">
										<!--begin::Badges-->
										<div class="badge badge-light-success">Published</div>
										<!--end::Badges-->
									</td>
									<td class="text-end">
										<a href="#" class="btn btn-sm btn-light btn-flex btn-center btn-active-light-primary" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">Actions 
										<i class="ki-duotone ki-down fs-5 ms-1"></i></a>
										<!--begin::Menu-->
										<div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-semibold fs-7 w-125px py-4" data-kt-menu="true">
											<!--begin::Menu item-->
											<div class="menu-item px-3">
												<a href="<?=  url('/dw-admin/edit-product') ?>" class="menu-link px-3">Edit</a>
											</div>
											<!--end::Menu item-->
											<!--begin::Menu item-->
											<div class="menu-item px-3">
												<a href="#" class="menu-link px-3" data-kt-ecommerce-product-filter="delete_row">Delete</a>
											</div>
											<!--end::Menu item-->
										</div>
										<!--end::Menu-->
									</td>
								</tr>
								<tr>
									<td>
										<div class="form-check form-check-sm form-check-custom form-check-solid">
											<input class="form-check-input" type="checkbox" value="1" />
										</div>
									</td>
									<td>
										<div class="d-flex align-items-center">
											<!--begin::Thumbnail-->
											<a href="<?=  url('/dw-admin/edit-product') ?>" class="symbol symbol-50px">
												<span class="symbol-label" style="background-image:url(<?= url('/admin/') ?>/assets/media//stock/ecommerce/13.png);"></span>
											</a>
											<!--end::Thumbnail-->
											<div class="ms-5">
												<!--begin::Title-->
												<a href="<?=  url('/dw-admin/edit-product') ?>" class="text-gray-800 text-hover-primary fs-5 fw-bold" data-kt-ecommerce-product-filter="product_name">Product 13</a>
												<!--end::Title-->
											</div>
										</div>
									</td>
									<td class="text-end pe-0">
										<span class="fw-bold">02382003</span>
									</td>
									<td class="text-end pe-0" data-order="20">
										<span class="fw-bold ms-3">20</span>
									</td>
									<td class="text-end pe-0">249</td>
									<td class="text-end pe-0" data-order="rating-3">
										<div class="rating justify-content-end">
											<div class="rating-label checked">
												<i class="ki-duotone ki-star fs-6"></i>
											</div>
											<div class="rating-label checked">
												<i class="ki-duotone ki-star fs-6"></i>
											</div>
											<div class="rating-label checked">
												<i class="ki-duotone ki-star fs-6"></i>
											</div>
											<div class="rating-label">
												<i class="ki-duotone ki-star fs-6"></i>
											</div>
											<div class="rating-label">
												<i class="ki-duotone ki-star fs-6"></i>
											</div>
										</div>
									</td>
									<td class="text-end pe-0" data-order="Published">
										<!--begin::Badges-->
										<div class="badge badge-light-success">Published</div>
										<!--end::Badges-->
									</td>
									<td class="text-end">
										<a href="#" class="btn btn-sm btn-light btn-flex btn-center btn-active-light-primary" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">Actions 
										<i class="ki-duotone ki-down fs-5 ms-1"></i></a>
										<!--begin::Menu-->
										<div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-semibold fs-7 w-125px py-4" data-kt-menu="true">
											<!--begin::Menu item-->
											<div class="menu-item px-3">
												<a href="<?=  url('/dw-admin/edit-product') ?>" class="menu-link px-3">Edit</a>
											</div>
											<!--end::Menu item-->
											<!--begin::Menu item-->
											<div class="menu-item px-3">
												<a href="#" class="menu-link px-3" data-kt-ecommerce-product-filter="delete_row">Delete</a>
											</div>
											<!--end::Menu item-->
										</div>
										<!--end::Menu-->
									</td>
								</tr>
								<tr>
									<td>
										<div class="form-check form-check-sm form-check-custom form-check-solid">
											<input class="form-check-input" type="checkbox" value="1" />
										</div>
									</td>
									<td>
										<div class="d-flex align-items-center">
											<!--begin::Thumbnail-->
											<a href="<?=  url('/dw-admin/edit-product') ?>" class="symbol symbol-50px">
												<span class="symbol-label" style="background-image:url(<?= url('/admin/') ?>/assets/media//stock/ecommerce/14.png);"></span>
											</a>
											<!--end::Thumbnail-->
											<div class="ms-5">
												<!--begin::Title-->
												<a href="<?=  url('/dw-admin/edit-product') ?>" class="text-gray-800 text-hover-primary fs-5 fw-bold" data-kt-ecommerce-product-filter="product_name">Product 14</a>
												<!--end::Title-->
											</div>
										</div>
									</td>
									<td class="text-end pe-0">
										<span class="fw-bold">03123002</span>
									</td>
									<td class="text-end pe-0" data-order="45">
										<span class="fw-bold ms-3">45</span>
									</td>
									<td class="text-end pe-0">70</td>
									<td class="text-end pe-0" data-order="rating-4">
										<div class="rating justify-content-end">
											<div class="rating-label checked">
												<i class="ki-duotone ki-star fs-6"></i>
											</div>
											<div class="rating-label checked">
												<i class="ki-duotone ki-star fs-6"></i>
											</div>
											<div class="rating-label checked">
												<i class="ki-duotone ki-star fs-6"></i>
											</div>
											<div class="rating-label checked">
												<i class="ki-duotone ki-star fs-6"></i>
											</div>
											<div class="rating-label">
												<i class="ki-duotone ki-star fs-6"></i>
											</div>
										</div>
									</td>
									<td class="text-end pe-0" data-order="Scheduled">
										<!--begin::Badges-->
										<div class="badge badge-light-primary">Scheduled</div>
										<!--end::Badges-->
									</td>
									<td class="text-end">
										<a href="#" class="btn btn-sm btn-light btn-flex btn-center btn-active-light-primary" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">Actions 
										<i class="ki-duotone ki-down fs-5 ms-1"></i></a>
										<!--begin::Menu-->
										<div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-semibold fs-7 w-125px py-4" data-kt-menu="true">
											<!--begin::Menu item-->
											<div class="menu-item px-3">
												<a href="<?=  url('/dw-admin/edit-product') ?>" class="menu-link px-3">Edit</a>
											</div>
											<!--end::Menu item-->
											<!--begin::Menu item-->
											<div class="menu-item px-3">
												<a href="#" class="menu-link px-3" data-kt-ecommerce-product-filter="delete_row">Delete</a>
											</div>
											<!--end::Menu item-->
										</div>
										<!--end::Menu-->
									</td>
								</tr>
								<tr>
									<td>
										<div class="form-check form-check-sm form-check-custom form-check-solid">
											<input class="form-check-input" type="checkbox" value="1" />
										</div>
									</td>
									<td>
										<div class="d-flex align-items-center">
											<!--begin::Thumbnail-->
											<a href="<?=  url('/dw-admin/edit-product') ?>" class="symbol symbol-50px">
												<span class="symbol-label" style="background-image:url(<?= url('/admin/') ?>/assets/media//stock/ecommerce/15.png);"></span>
											</a>
											<!--end::Thumbnail-->
											<div class="ms-5">
												<!--begin::Title-->
												<a href="<?=  url('/dw-admin/edit-product') ?>" class="text-gray-800 text-hover-primary fs-5 fw-bold" data-kt-ecommerce-product-filter="product_name">Product 15</a>
												<!--end::Title-->
											</div>
										</div>
									</td>
									<td class="text-end pe-0">
										<span class="fw-bold">03918008</span>
									</td>
									<td class="text-end pe-0" data-order="5">
										<span class="badge badge-light-warning">Low stock</span>
										<span class="fw-bold text-warning ms-3">5</span>
									</td>
									<td class="text-end pe-0">134</td>
									<td class="text-end pe-0" data-order="rating-3">
										<div class="rating justify-content-end">
											<div class="rating-label checked">
												<i class="ki-duotone ki-star fs-6"></i>
											</div>
											<div class="rating-label checked">
												<i class="ki-duotone ki-star fs-6"></i>
											</div>
											<div class="rating-label checked">
												<i class="ki-duotone ki-star fs-6"></i>
											</div>
											<div class="rating-label">
												<i class="ki-duotone ki-star fs-6"></i>
											</div>
											<div class="rating-label">
												<i class="ki-duotone ki-star fs-6"></i>
											</div>
										</div>
									</td>
									<td class="text-end pe-0" data-order="Inactive">
										<!--begin::Badges-->
										<div class="badge badge-light-danger">Inactive</div>
										<!--end::Badges-->
									</td>
									<td class="text-end">
										<a href="#" class="btn btn-sm btn-light btn-flex btn-center btn-active-light-primary" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">Actions 
										<i class="ki-duotone ki-down fs-5 ms-1"></i></a>
										<!--begin::Menu-->
										<div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-semibold fs-7 w-125px py-4" data-kt-menu="true">
											<!--begin::Menu item-->
											<div class="menu-item px-3">
												<a href="<?=  url('/dw-admin/edit-product') ?>" class="menu-link px-3">Edit</a>
											</div>
											<!--end::Menu item-->
											<!--begin::Menu item-->
											<div class="menu-item px-3">
												<a href="#" class="menu-link px-3" data-kt-ecommerce-product-filter="delete_row">Delete</a>
											</div>
											<!--end::Menu item-->
										</div>
										<!--end::Menu-->
									</td>
								</tr>
								<tr>
									<td>
										<div class="form-check form-check-sm form-check-custom form-check-solid">
											<input class="form-check-input" type="checkbox" value="1" />
										</div>
									</td>
									<td>
										<div class="d-flex align-items-center">
											<!--begin::Thumbnail-->
											<a href="<?=  url('/dw-admin/edit-product') ?>" class="symbol symbol-50px">
												<span class="symbol-label" style="background-image:url(<?= url('/admin/') ?>/assets/media//stock/ecommerce/16.png);"></span>
											</a>
											<!--end::Thumbnail-->
											<div class="ms-5">
												<!--begin::Title-->
												<a href="<?=  url('/dw-admin/edit-product') ?>" class="text-gray-800 text-hover-primary fs-5 fw-bold" data-kt-ecommerce-product-filter="product_name">Product 16</a>
												<!--end::Title-->
											</div>
										</div>
									</td>
									<td class="text-end pe-0">
										<span class="fw-bold">01478003</span>
									</td>
									<td class="text-end pe-0" data-order="10">
										<span class="fw-bold ms-3">10</span>
									</td>
									<td class="text-end pe-0">53</td>
									<td class="text-end pe-0" data-order="rating-5">
										<div class="rating justify-content-end">
											<div class="rating-label checked">
												<i class="ki-duotone ki-star fs-6"></i>
											</div>
											<div class="rating-label checked">
												<i class="ki-duotone ki-star fs-6"></i>
											</div>
											<div class="rating-label checked">
												<i class="ki-duotone ki-star fs-6"></i>
											</div>
											<div class="rating-label checked">
												<i class="ki-duotone ki-star fs-6"></i>
											</div>
											<div class="rating-label checked">
												<i class="ki-duotone ki-star fs-6"></i>
											</div>
										</div>
									</td>
									<td class="text-end pe-0" data-order="Inactive">
										<!--begin::Badges-->
										<div class="badge badge-light-danger">Inactive</div>
										<!--end::Badges-->
									</td>
									<td class="text-end">
										<a href="#" class="btn btn-sm btn-light btn-flex btn-center btn-active-light-primary" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">Actions 
										<i class="ki-duotone ki-down fs-5 ms-1"></i></a>
										<!--begin::Menu-->
										<div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-semibold fs-7 w-125px py-4" data-kt-menu="true">
											<!--begin::Menu item-->
											<div class="menu-item px-3">
												<a href="<?=  url('/dw-admin/edit-product') ?>" class="menu-link px-3">Edit</a>
											</div>
											<!--end::Menu item-->
											<!--begin::Menu item-->
											<div class="menu-item px-3">
												<a href="#" class="menu-link px-3" data-kt-ecommerce-product-filter="delete_row">Delete</a>
											</div>
											<!--end::Menu item-->
										</div>
										<!--end::Menu-->
									</td>
								</tr>
								<tr>
									<td>
										<div class="form-check form-check-sm form-check-custom form-check-solid">
											<input class="form-check-input" type="checkbox" value="1" />
										</div>
									</td>
									<td>
										<div class="d-flex align-items-center">
											<!--begin::Thumbnail-->
											<a href="<?=  url('/dw-admin/edit-product') ?>" class="symbol symbol-50px">
												<span class="symbol-label" style="background-image:url(<?= url('/admin/') ?>/assets/media//stock/ecommerce/17.png);"></span>
											</a>
											<!--end::Thumbnail-->
											<div class="ms-5">
												<!--begin::Title-->
												<a href="<?=  url('/dw-admin/edit-product') ?>" class="text-gray-800 text-hover-primary fs-5 fw-bold" data-kt-ecommerce-product-filter="product_name">Product 17</a>
												<!--end::Title-->
											</div>
										</div>
									</td>
									<td class="text-end pe-0">
										<span class="fw-bold">04115002</span>
									</td>
									<td class="text-end pe-0" data-order="23">
										<span class="fw-bold ms-3">23</span>
									</td>
									<td class="text-end pe-0">18</td>
									<td class="text-end pe-0" data-order="rating-3">
										<div class="rating justify-content-end">
											<div class="rating-label checked">
												<i class="ki-duotone ki-star fs-6"></i>
											</div>
											<div class="rating-label checked">
												<i class="ki-duotone ki-star fs-6"></i>
											</div>
											<div class="rating-label checked">
												<i class="ki-duotone ki-star fs-6"></i>
											</div>
											<div class="rating-label">
												<i class="ki-duotone ki-star fs-6"></i>
											</div>
											<div class="rating-label">
												<i class="ki-duotone ki-star fs-6"></i>
											</div>
										</div>
									</td>
									<td class="text-end pe-0" data-order="Published">
										<!--begin::Badges-->
										<div class="badge badge-light-success">Published</div>
										<!--end::Badges-->
									</td>
									<td class="text-end">
										<a href="#" class="btn btn-sm btn-light btn-flex btn-center btn-active-light-primary" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">Actions 
										<i class="ki-duotone ki-down fs-5 ms-1"></i></a>
										<!--begin::Menu-->
										<div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-semibold fs-7 w-125px py-4" data-kt-menu="true">
											<!--begin::Menu item-->
											<div class="menu-item px-3">
												<a href="<?=  url('/dw-admin/edit-product') ?>" class="menu-link px-3">Edit</a>
											</div>
											<!--end::Menu item-->
											<!--begin::Menu item-->
											<div class="menu-item px-3">
												<a href="#" class="menu-link px-3" data-kt-ecommerce-product-filter="delete_row">Delete</a>
											</div>
											<!--end::Menu item-->
										</div>
										<!--end::Menu-->
									</td>
								</tr>
								<tr>
									<td>
										<div class="form-check form-check-sm form-check-custom form-check-solid">
											<input class="form-check-input" type="checkbox" value="1" />
										</div>
									</td>
									<td>
										<div class="d-flex align-items-center">
											<!--begin::Thumbnail-->
											<a href="<?=  url('/dw-admin/edit-product') ?>" class="symbol symbol-50px">
												<span class="symbol-label" style="background-image:url(<?= url('/admin/') ?>/assets/media//stock/ecommerce/18.png);"></span>
											</a>
											<!--end::Thumbnail-->
											<div class="ms-5">
												<!--begin::Title-->
												<a href="<?=  url('/dw-admin/edit-product') ?>" class="text-gray-800 text-hover-primary fs-5 fw-bold" data-kt-ecommerce-product-filter="product_name">Product 18</a>
												<!--end::Title-->
											</div>
										</div>
									</td>
									<td class="text-end pe-0">
										<span class="fw-bold">01689001</span>
									</td>
									<td class="text-end pe-0" data-order="26">
										<span class="fw-bold ms-3">26</span>
									</td>
									<td class="text-end pe-0">206</td>
									<td class="text-end pe-0" data-order="rating-5">
										<div class="rating justify-content-end">
											<div class="rating-label checked">
												<i class="ki-duotone ki-star fs-6"></i>
											</div>
											<div class="rating-label checked">
												<i class="ki-duotone ki-star fs-6"></i>
											</div>
											<div class="rating-label checked">
												<i class="ki-duotone ki-star fs-6"></i>
											</div>
											<div class="rating-label checked">
												<i class="ki-duotone ki-star fs-6"></i>
											</div>
											<div class="rating-label checked">
												<i class="ki-duotone ki-star fs-6"></i>
											</div>
										</div>
									</td>
									<td class="text-end pe-0" data-order="Inactive">
										<!--begin::Badges-->
										<div class="badge badge-light-danger">Inactive</div>
										<!--end::Badges-->
									</td>
									<td class="text-end">
										<a href="#" class="btn btn-sm btn-light btn-flex btn-center btn-active-light-primary" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">Actions 
										<i class="ki-duotone ki-down fs-5 ms-1"></i></a>
										<!--begin::Menu-->
										<div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-semibold fs-7 w-125px py-4" data-kt-menu="true">
											<!--begin::Menu item-->
											<div class="menu-item px-3">
												<a href="<?=  url('/dw-admin/edit-product') ?>" class="menu-link px-3">Edit</a>
											</div>
											<!--end::Menu item-->
											<!--begin::Menu item-->
											<div class="menu-item px-3">
												<a href="#" class="menu-link px-3" data-kt-ecommerce-product-filter="delete_row">Delete</a>
											</div>
											<!--end::Menu item-->
										</div>
										<!--end::Menu-->
									</td>
								</tr>
								<tr>
									<td>
										<div class="form-check form-check-sm form-check-custom form-check-solid">
											<input class="form-check-input" type="checkbox" value="1" />
										</div>
									</td>
									<td>
										<div class="d-flex align-items-center">
											<!--begin::Thumbnail-->
											<a href="<?=  url('/dw-admin/edit-product') ?>" class="symbol symbol-50px">
												<span class="symbol-label" style="background-image:url(<?= url('/admin/') ?>/assets/media//stock/ecommerce/19.png);"></span>
											</a>
											<!--end::Thumbnail-->
											<div class="ms-5">
												<!--begin::Title-->
												<a href="<?=  url('/dw-admin/edit-product') ?>" class="text-gray-800 text-hover-primary fs-5 fw-bold" data-kt-ecommerce-product-filter="product_name">Product 19</a>
												<!--end::Title-->
											</div>
										</div>
									</td>
									<td class="text-end pe-0">
										<span class="fw-bold">04752006</span>
									</td>
									<td class="text-end pe-0" data-order="20">
										<span class="fw-bold ms-3">20</span>
									</td>
									<td class="text-end pe-0">59</td>
									<td class="text-end pe-0" data-order="rating-4">
										<div class="rating justify-content-end">
											<div class="rating-label checked">
												<i class="ki-duotone ki-star fs-6"></i>
											</div>
											<div class="rating-label checked">
												<i class="ki-duotone ki-star fs-6"></i>
											</div>
											<div class="rating-label checked">
												<i class="ki-duotone ki-star fs-6"></i>
											</div>
											<div class="rating-label checked">
												<i class="ki-duotone ki-star fs-6"></i>
											</div>
											<div class="rating-label">
												<i class="ki-duotone ki-star fs-6"></i>
											</div>
										</div>
									</td>
									<td class="text-end pe-0" data-order="Scheduled">
										<!--begin::Badges-->
										<div class="badge badge-light-primary">Scheduled</div>
										<!--end::Badges-->
									</td>
									<td class="text-end">
										<a href="#" class="btn btn-sm btn-light btn-flex btn-center btn-active-light-primary" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">Actions 
										<i class="ki-duotone ki-down fs-5 ms-1"></i></a>
										<!--begin::Menu-->
										<div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-semibold fs-7 w-125px py-4" data-kt-menu="true">
											<!--begin::Menu item-->
											<div class="menu-item px-3">
												<a href="<?=  url('/dw-admin/edit-product') ?>" class="menu-link px-3">Edit</a>
											</div>
											<!--end::Menu item-->
											<!--begin::Menu item-->
											<div class="menu-item px-3">
												<a href="#" class="menu-link px-3" data-kt-ecommerce-product-filter="delete_row">Delete</a>
											</div>
											<!--end::Menu item-->
										</div>
										<!--end::Menu-->
									</td>
								</tr>
								<tr>
									<td>
										<div class="form-check form-check-sm form-check-custom form-check-solid">
											<input class="form-check-input" type="checkbox" value="1" />
										</div>
									</td>
									<td>
										<div class="d-flex align-items-center">
											<!--begin::Thumbnail-->
											<a href="<?=  url('/dw-admin/edit-product') ?>" class="symbol symbol-50px">
												<span class="symbol-label" style="background-image:url(<?= url('/admin/') ?>/assets/media//stock/ecommerce/20.png);"></span>
											</a>
											<!--end::Thumbnail-->
											<div class="ms-5">
												<!--begin::Title-->
												<a href="<?=  url('/dw-admin/edit-product') ?>" class="text-gray-800 text-hover-primary fs-5 fw-bold" data-kt-ecommerce-product-filter="product_name">Product 20</a>
												<!--end::Title-->
											</div>
										</div>
									</td>
									<td class="text-end pe-0">
										<span class="fw-bold">02877006</span>
									</td>
									<td class="text-end pe-0" data-order="15">
										<span class="fw-bold ms-3">15</span>
									</td>
									<td class="text-end pe-0">75</td>
									<td class="text-end pe-0" data-order="rating-5">
										<div class="rating justify-content-end">
											<div class="rating-label checked">
												<i class="ki-duotone ki-star fs-6"></i>
											</div>
											<div class="rating-label checked">
												<i class="ki-duotone ki-star fs-6"></i>
											</div>
											<div class="rating-label checked">
												<i class="ki-duotone ki-star fs-6"></i>
											</div>
											<div class="rating-label checked">
												<i class="ki-duotone ki-star fs-6"></i>
											</div>
											<div class="rating-label checked">
												<i class="ki-duotone ki-star fs-6"></i>
											</div>
										</div>
									</td>
									<td class="text-end pe-0" data-order="Scheduled">
										<!--begin::Badges-->
										<div class="badge badge-light-primary">Scheduled</div>
										<!--end::Badges-->
									</td>
									<td class="text-end">
										<a href="#" class="btn btn-sm btn-light btn-flex btn-center btn-active-light-primary" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">Actions 
										<i class="ki-duotone ki-down fs-5 ms-1"></i></a>
										<!--begin::Menu-->
										<div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-semibold fs-7 w-125px py-4" data-kt-menu="true">
											<!--begin::Menu item-->
											<div class="menu-item px-3">
												<a href="<?=  url('/dw-admin/edit-product') ?>" class="menu-link px-3">Edit</a>
											</div>
											<!--end::Menu item-->
											<!--begin::Menu item-->
											<div class="menu-item px-3">
												<a href="#" class="menu-link px-3" data-kt-ecommerce-product-filter="delete_row">Delete</a>
											</div>
											<!--end::Menu item-->
										</div>
										<!--end::Menu-->
									</td>
								</tr>
								<tr>
									<td>
										<div class="form-check form-check-sm form-check-custom form-check-solid">
											<input class="form-check-input" type="checkbox" value="1" />
										</div>
									</td>
									<td>
										<div class="d-flex align-items-center">
											<!--begin::Thumbnail-->
											<a href="<?=  url('/dw-admin/edit-product') ?>" class="symbol symbol-50px">
												<span class="symbol-label" style="background-image:url(<?= url('/admin/') ?>/assets/media//stock/ecommerce/21.png);"></span>
											</a>
											<!--end::Thumbnail-->
											<div class="ms-5">
												<!--begin::Title-->
												<a href="<?=  url('/dw-admin/edit-product') ?>" class="text-gray-800 text-hover-primary fs-5 fw-bold" data-kt-ecommerce-product-filter="product_name">Product 21</a>
												<!--end::Title-->
											</div>
										</div>
									</td>
									<td class="text-end pe-0">
										<span class="fw-bold">02256007</span>
									</td>
									<td class="text-end pe-0" data-order="31">
										<span class="fw-bold ms-3">31</span>
									</td>
									<td class="text-end pe-0">156</td>
									<td class="text-end pe-0" data-order="rating-3">
										<div class="rating justify-content-end">
											<div class="rating-label checked">
												<i class="ki-duotone ki-star fs-6"></i>
											</div>
											<div class="rating-label checked">
												<i class="ki-duotone ki-star fs-6"></i>
											</div>
											<div class="rating-label checked">
												<i class="ki-duotone ki-star fs-6"></i>
											</div>
											<div class="rating-label">
												<i class="ki-duotone ki-star fs-6"></i>
											</div>
											<div class="rating-label">
												<i class="ki-duotone ki-star fs-6"></i>
											</div>
										</div>
									</td>
									<td class="text-end pe-0" data-order="Inactive">
										<!--begin::Badges-->
										<div class="badge badge-light-danger">Inactive</div>
										<!--end::Badges-->
									</td>
									<td class="text-end">
										<a href="#" class="btn btn-sm btn-light btn-flex btn-center btn-active-light-primary" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">Actions 
										<i class="ki-duotone ki-down fs-5 ms-1"></i></a>
										<!--begin::Menu-->
										<div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-semibold fs-7 w-125px py-4" data-kt-menu="true">
											<!--begin::Menu item-->
											<div class="menu-item px-3">
												<a href="<?=  url('/dw-admin/edit-product') ?>" class="menu-link px-3">Edit</a>
											</div>
											<!--end::Menu item-->
											<!--begin::Menu item-->
											<div class="menu-item px-3">
												<a href="#" class="menu-link px-3" data-kt-ecommerce-product-filter="delete_row">Delete</a>
											</div>
											<!--end::Menu item-->
										</div>
										<!--end::Menu-->
									</td>
								</tr>
								<tr>
									<td>
										<div class="form-check form-check-sm form-check-custom form-check-solid">
											<input class="form-check-input" type="checkbox" value="1" />
										</div>
									</td>
									<td>
										<div class="d-flex align-items-center">
											<!--begin::Thumbnail-->
											<a href="<?=  url('/dw-admin/edit-product') ?>" class="symbol symbol-50px">
												<span class="symbol-label" style="background-image:url(<?= url('/admin/') ?>/assets/media//stock/ecommerce/22.png);"></span>
											</a>
											<!--end::Thumbnail-->
											<div class="ms-5">
												<!--begin::Title-->
												<a href="<?=  url('/dw-admin/edit-product') ?>" class="text-gray-800 text-hover-primary fs-5 fw-bold" data-kt-ecommerce-product-filter="product_name">Product 22</a>
												<!--end::Title-->
											</div>
										</div>
									</td>
									<td class="text-end pe-0">
										<span class="fw-bold">03793009</span>
									</td>
									<td class="text-end pe-0" data-order="32">
										<span class="fw-bold ms-3">32</span>
									</td>
									<td class="text-end pe-0">152</td>
									<td class="text-end pe-0" data-order="rating-4">
										<div class="rating justify-content-end">
											<div class="rating-label checked">
												<i class="ki-duotone ki-star fs-6"></i>
											</div>
											<div class="rating-label checked">
												<i class="ki-duotone ki-star fs-6"></i>
											</div>
											<div class="rating-label checked">
												<i class="ki-duotone ki-star fs-6"></i>
											</div>
											<div class="rating-label checked">
												<i class="ki-duotone ki-star fs-6"></i>
											</div>
											<div class="rating-label">
												<i class="ki-duotone ki-star fs-6"></i>
											</div>
										</div>
									</td>
									<td class="text-end pe-0" data-order="Scheduled">
										<!--begin::Badges-->
										<div class="badge badge-light-primary">Scheduled</div>
										<!--end::Badges-->
									</td>
									<td class="text-end">
										<a href="#" class="btn btn-sm btn-light btn-flex btn-center btn-active-light-primary" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">Actions 
										<i class="ki-duotone ki-down fs-5 ms-1"></i></a>
										<!--begin::Menu-->
										<div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-semibold fs-7 w-125px py-4" data-kt-menu="true">
											<!--begin::Menu item-->
											<div class="menu-item px-3">
												<a href="<?=  url('/dw-admin/edit-product') ?>" class="menu-link px-3">Edit</a>
											</div>
											<!--end::Menu item-->
											<!--begin::Menu item-->
											<div class="menu-item px-3">
												<a href="#" class="menu-link px-3" data-kt-ecommerce-product-filter="delete_row">Delete</a>
											</div>
											<!--end::Menu item-->
										</div>
										<!--end::Menu-->
									</td>
								</tr>
								<tr>
									<td>
										<div class="form-check form-check-sm form-check-custom form-check-solid">
											<input class="form-check-input" type="checkbox" value="1" />
										</div>
									</td>
									<td>
										<div class="d-flex align-items-center">
											<!--begin::Thumbnail-->
											<a href="<?=  url('/dw-admin/edit-product') ?>" class="symbol symbol-50px">
												<span class="symbol-label" style="background-image:url(<?= url('/admin/') ?>/assets/media//stock/ecommerce/23.png);"></span>
											</a>
											<!--end::Thumbnail-->
											<div class="ms-5">
												<!--begin::Title-->
												<a href="<?=  url('/dw-admin/edit-product') ?>" class="text-gray-800 text-hover-primary fs-5 fw-bold" data-kt-ecommerce-product-filter="product_name">Product 23</a>
												<!--end::Title-->
											</div>
										</div>
									</td>
									<td class="text-end pe-0">
										<span class="fw-bold">01544009</span>
									</td>
									<td class="text-end pe-0" data-order="42">
										<span class="fw-bold ms-3">42</span>
									</td>
									<td class="text-end pe-0">162</td>
									<td class="text-end pe-0" data-order="rating-3">
										<div class="rating justify-content-end">
											<div class="rating-label checked">
												<i class="ki-duotone ki-star fs-6"></i>
											</div>
											<div class="rating-label checked">
												<i class="ki-duotone ki-star fs-6"></i>
											</div>
											<div class="rating-label checked">
												<i class="ki-duotone ki-star fs-6"></i>
											</div>
											<div class="rating-label">
												<i class="ki-duotone ki-star fs-6"></i>
											</div>
											<div class="rating-label">
												<i class="ki-duotone ki-star fs-6"></i>
											</div>
										</div>
									</td>
									<td class="text-end pe-0" data-order="Published">
										<!--begin::Badges-->
										<div class="badge badge-light-success">Published</div>
										<!--end::Badges-->
									</td>
									<td class="text-end">
										<a href="#" class="btn btn-sm btn-light btn-flex btn-center btn-active-light-primary" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">Actions 
										<i class="ki-duotone ki-down fs-5 ms-1"></i></a>
										<!--begin::Menu-->
										<div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-semibold fs-7 w-125px py-4" data-kt-menu="true">
											<!--begin::Menu item-->
											<div class="menu-item px-3">
												<a href="<?=  url('/dw-admin/edit-product') ?>" class="menu-link px-3">Edit</a>
											</div>
											<!--end::Menu item-->
											<!--begin::Menu item-->
											<div class="menu-item px-3">
												<a href="#" class="menu-link px-3" data-kt-ecommerce-product-filter="delete_row">Delete</a>
											</div>
											<!--end::Menu item-->
										</div>
										<!--end::Menu-->
									</td>
								</tr>
								<tr>
									<td>
										<div class="form-check form-check-sm form-check-custom form-check-solid">
											<input class="form-check-input" type="checkbox" value="1" />
										</div>
									</td>
									<td>
										<div class="d-flex align-items-center">
											<!--begin::Thumbnail-->
											<a href="<?=  url('/dw-admin/edit-product') ?>" class="symbol symbol-50px">
												<span class="symbol-label" style="background-image:url(<?= url('/admin/') ?>/assets/media//stock/ecommerce/24.png);"></span>
											</a>
											<!--end::Thumbnail-->
											<div class="ms-5">
												<!--begin::Title-->
												<a href="<?=  url('/dw-admin/edit-product') ?>" class="text-gray-800 text-hover-primary fs-5 fw-bold" data-kt-ecommerce-product-filter="product_name">Product 24</a>
												<!--end::Title-->
											</div>
										</div>
									</td>
									<td class="text-end pe-0">
										<span class="fw-bold">04589006</span>
									</td>
									<td class="text-end pe-0" data-order="38">
										<span class="fw-bold ms-3">38</span>
									</td>
									<td class="text-end pe-0">24</td>
									<td class="text-end pe-0" data-order="rating-4">
										<div class="rating justify-content-end">
											<div class="rating-label checked">
												<i class="ki-duotone ki-star fs-6"></i>
											</div>
											<div class="rating-label checked">
												<i class="ki-duotone ki-star fs-6"></i>
											</div>
											<div class="rating-label checked">
												<i class="ki-duotone ki-star fs-6"></i>
											</div>
											<div class="rating-label checked">
												<i class="ki-duotone ki-star fs-6"></i>
											</div>
											<div class="rating-label">
												<i class="ki-duotone ki-star fs-6"></i>
											</div>
										</div>
									</td>
									<td class="text-end pe-0" data-order="Scheduled">
										<!--begin::Badges-->
										<div class="badge badge-light-primary">Scheduled</div>
										<!--end::Badges-->
									</td>
									<td class="text-end">
										<a href="#" class="btn btn-sm btn-light btn-flex btn-center btn-active-light-primary" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">Actions 
										<i class="ki-duotone ki-down fs-5 ms-1"></i></a>
										<!--begin::Menu-->
										<div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-semibold fs-7 w-125px py-4" data-kt-menu="true">
											<!--begin::Menu item-->
											<div class="menu-item px-3">
												<a href="<?=  url('/dw-admin/edit-product') ?>" class="menu-link px-3">Edit</a>
											</div>
											<!--end::Menu item-->
											<!--begin::Menu item-->
											<div class="menu-item px-3">
												<a href="#" class="menu-link px-3" data-kt-ecommerce-product-filter="delete_row">Delete</a>
											</div>
											<!--end::Menu item-->
										</div>
										<!--end::Menu-->
									</td>
								</tr>
								<tr>
									<td>
										<div class="form-check form-check-sm form-check-custom form-check-solid">
											<input class="form-check-input" type="checkbox" value="1" />
										</div>
									</td>
									<td>
										<div class="d-flex align-items-center">
											<!--begin::Thumbnail-->
											<a href="<?=  url('/dw-admin/edit-product') ?>" class="symbol symbol-50px">
												<span class="symbol-label" style="background-image:url(<?= url('/admin/') ?>/assets/media//stock/ecommerce/25.png);"></span>
											</a>
											<!--end::Thumbnail-->
											<div class="ms-5">
												<!--begin::Title-->
												<a href="<?=  url('/dw-admin/edit-product') ?>" class="text-gray-800 text-hover-primary fs-5 fw-bold" data-kt-ecommerce-product-filter="product_name">Product 25</a>
												<!--end::Title-->
											</div>
										</div>
									</td>
									<td class="text-end pe-0">
										<span class="fw-bold">04567003</span>
									</td>
									<td class="text-end pe-0" data-order="42">
										<span class="fw-bold ms-3">42</span>
									</td>
									<td class="text-end pe-0">45</td>
									<td class="text-end pe-0" data-order="rating-5">
										<div class="rating justify-content-end">
											<div class="rating-label checked">
												<i class="ki-duotone ki-star fs-6"></i>
											</div>
											<div class="rating-label checked">
												<i class="ki-duotone ki-star fs-6"></i>
											</div>
											<div class="rating-label checked">
												<i class="ki-duotone ki-star fs-6"></i>
											</div>
											<div class="rating-label checked">
												<i class="ki-duotone ki-star fs-6"></i>
											</div>
											<div class="rating-label checked">
												<i class="ki-duotone ki-star fs-6"></i>
											</div>
										</div>
									</td>
									<td class="text-end pe-0" data-order="Inactive">
										<!--begin::Badges-->
										<div class="badge badge-light-danger">Inactive</div>
										<!--end::Badges-->
									</td>
									<td class="text-end">
										<a href="#" class="btn btn-sm btn-light btn-flex btn-center btn-active-light-primary" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">Actions 
										<i class="ki-duotone ki-down fs-5 ms-1"></i></a>
										<!--begin::Menu-->
										<div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-semibold fs-7 w-125px py-4" data-kt-menu="true">
											<!--begin::Menu item-->
											<div class="menu-item px-3">
												<a href="<?=  url('/dw-admin/edit-product') ?>" class="menu-link px-3">Edit</a>
											</div>
											<!--end::Menu item-->
											<!--begin::Menu item-->
											<div class="menu-item px-3">
												<a href="#" class="menu-link px-3" data-kt-ecommerce-product-filter="delete_row">Delete</a>
											</div>
											<!--end::Menu item-->
										</div>
										<!--end::Menu-->
									</td>
								</tr>
								<tr>
									<td>
										<div class="form-check form-check-sm form-check-custom form-check-solid">
											<input class="form-check-input" type="checkbox" value="1" />
										</div>
									</td>
									<td>
										<div class="d-flex align-items-center">
											<!--begin::Thumbnail-->
											<a href="<?=  url('/dw-admin/edit-product') ?>" class="symbol symbol-50px">
												<span class="symbol-label" style="background-image:url(<?= url('/admin/') ?>/assets/media//stock/ecommerce/26.png);"></span>
											</a>
											<!--end::Thumbnail-->
											<div class="ms-5">
												<!--begin::Title-->
												<a href="<?=  url('/dw-admin/edit-product') ?>" class="text-gray-800 text-hover-primary fs-5 fw-bold" data-kt-ecommerce-product-filter="product_name">Product 26</a>
												<!--end::Title-->
											</div>
										</div>
									</td>
									<td class="text-end pe-0">
										<span class="fw-bold">01645005</span>
									</td>
									<td class="text-end pe-0" data-order="8">
										<span class="badge badge-light-warning">Low stock</span>
										<span class="fw-bold text-warning ms-3">8</span>
									</td>
									<td class="text-end pe-0">24</td>
									<td class="text-end pe-0" data-order="rating-4">
										<div class="rating justify-content-end">
											<div class="rating-label checked">
												<i class="ki-duotone ki-star fs-6"></i>
											</div>
											<div class="rating-label checked">
												<i class="ki-duotone ki-star fs-6"></i>
											</div>
											<div class="rating-label checked">
												<i class="ki-duotone ki-star fs-6"></i>
											</div>
											<div class="rating-label checked">
												<i class="ki-duotone ki-star fs-6"></i>
											</div>
											<div class="rating-label">
												<i class="ki-duotone ki-star fs-6"></i>
											</div>
										</div>
									</td>
									<td class="text-end pe-0" data-order="Inactive">
										<!--begin::Badges-->
										<div class="badge badge-light-danger">Inactive</div>
										<!--end::Badges-->
									</td>
									<td class="text-end">
										<a href="#" class="btn btn-sm btn-light btn-flex btn-center btn-active-light-primary" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">Actions 
										<i class="ki-duotone ki-down fs-5 ms-1"></i></a>
										<!--begin::Menu-->
										<div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-semibold fs-7 w-125px py-4" data-kt-menu="true">
											<!--begin::Menu item-->
											<div class="menu-item px-3">
												<a href="<?=  url('/dw-admin/edit-product') ?>" class="menu-link px-3">Edit</a>
											</div>
											<!--end::Menu item-->
											<!--begin::Menu item-->
											<div class="menu-item px-3">
												<a href="#" class="menu-link px-3" data-kt-ecommerce-product-filter="delete_row">Delete</a>
											</div>
											<!--end::Menu item-->
										</div>
										<!--end::Menu-->
									</td>
								</tr>
								<tr>
									<td>
										<div class="form-check form-check-sm form-check-custom form-check-solid">
											<input class="form-check-input" type="checkbox" value="1" />
										</div>
									</td>
									<td>
										<div class="d-flex align-items-center">
											<!--begin::Thumbnail-->
											<a href="<?=  url('/dw-admin/edit-product') ?>" class="symbol symbol-50px">
												<span class="symbol-label" style="background-image:url(<?= url('/admin/') ?>/assets/media//stock/ecommerce/27.png);"></span>
											</a>
											<!--end::Thumbnail-->
											<div class="ms-5">
												<!--begin::Title-->
												<a href="<?=  url('/dw-admin/edit-product') ?>" class="text-gray-800 text-hover-primary fs-5 fw-bold" data-kt-ecommerce-product-filter="product_name">Product 27</a>
												<!--end::Title-->
											</div>
										</div>
									</td>
									<td class="text-end pe-0">
										<span class="fw-bold">02316003</span>
									</td>
									<td class="text-end pe-0" data-order="26">
										<span class="fw-bold ms-3">26</span>
									</td>
									<td class="text-end pe-0">148</td>
									<td class="text-end pe-0" data-order="rating-4">
										<div class="rating justify-content-end">
											<div class="rating-label checked">
												<i class="ki-duotone ki-star fs-6"></i>
											</div>
											<div class="rating-label checked">
												<i class="ki-duotone ki-star fs-6"></i>
											</div>
											<div class="rating-label checked">
												<i class="ki-duotone ki-star fs-6"></i>
											</div>
											<div class="rating-label checked">
												<i class="ki-duotone ki-star fs-6"></i>
											</div>
											<div class="rating-label">
												<i class="ki-duotone ki-star fs-6"></i>
											</div>
										</div>
									</td>
									<td class="text-end pe-0" data-order="Published">
										<!--begin::Badges-->
										<div class="badge badge-light-success">Published</div>
										<!--end::Badges-->
									</td>
									<td class="text-end">
										<a href="#" class="btn btn-sm btn-light btn-flex btn-center btn-active-light-primary" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">Actions 
										<i class="ki-duotone ki-down fs-5 ms-1"></i></a>
										<!--begin::Menu-->
										<div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-semibold fs-7 w-125px py-4" data-kt-menu="true">
											<!--begin::Menu item-->
											<div class="menu-item px-3">
												<a href="<?=  url('/dw-admin/edit-product') ?>" class="menu-link px-3">Edit</a>
											</div>
											<!--end::Menu item-->
											<!--begin::Menu item-->
											<div class="menu-item px-3">
												<a href="#" class="menu-link px-3" data-kt-ecommerce-product-filter="delete_row">Delete</a>
											</div>
											<!--end::Menu item-->
										</div>
										<!--end::Menu-->
									</td>
								</tr>
								<tr>
									<td>
										<div class="form-check form-check-sm form-check-custom form-check-solid">
											<input class="form-check-input" type="checkbox" value="1" />
										</div>
									</td>
									<td>
										<div class="d-flex align-items-center">
											<!--begin::Thumbnail-->
											<a href="<?=  url('/dw-admin/edit-product') ?>" class="symbol symbol-50px">
												<span class="symbol-label" style="background-image:url(<?= url('/admin/') ?>/assets/media//stock/ecommerce/28.png);"></span>
											</a>
											<!--end::Thumbnail-->
											<div class="ms-5">
												<!--begin::Title-->
												<a href="<?=  url('/dw-admin/edit-product') ?>" class="text-gray-800 text-hover-primary fs-5 fw-bold" data-kt-ecommerce-product-filter="product_name">Product 28</a>
												<!--end::Title-->
											</div>
										</div>
									</td>
									<td class="text-end pe-0">
										<span class="fw-bold">03359005</span>
									</td>
									<td class="text-end pe-0" data-order="48">
										<span class="fw-bold ms-3">48</span>
									</td>
									<td class="text-end pe-0">34</td>
									<td class="text-end pe-0" data-order="rating-3">
										<div class="rating justify-content-end">
											<div class="rating-label checked">
												<i class="ki-duotone ki-star fs-6"></i>
											</div>
											<div class="rating-label checked">
												<i class="ki-duotone ki-star fs-6"></i>
											</div>
											<div class="rating-label checked">
												<i class="ki-duotone ki-star fs-6"></i>
											</div>
											<div class="rating-label">
												<i class="ki-duotone ki-star fs-6"></i>
											</div>
											<div class="rating-label">
												<i class="ki-duotone ki-star fs-6"></i>
											</div>
										</div>
									</td>
									<td class="text-end pe-0" data-order="Scheduled">
										<!--begin::Badges-->
										<div class="badge badge-light-primary">Scheduled</div>
										<!--end::Badges-->
									</td>
									<td class="text-end">
										<a href="#" class="btn btn-sm btn-light btn-flex btn-center btn-active-light-primary" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">Actions 
										<i class="ki-duotone ki-down fs-5 ms-1"></i></a>
										<!--begin::Menu-->
										<div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-semibold fs-7 w-125px py-4" data-kt-menu="true">
											<!--begin::Menu item-->
											<div class="menu-item px-3">
												<a href="<?=  url('/dw-admin/edit-product') ?>" class="menu-link px-3">Edit</a>
											</div>
											<!--end::Menu item-->
											<!--begin::Menu item-->
											<div class="menu-item px-3">
												<a href="#" class="menu-link px-3" data-kt-ecommerce-product-filter="delete_row">Delete</a>
											</div>
											<!--end::Menu item-->
										</div>
										<!--end::Menu-->
									</td>
								</tr>
								<tr>
									<td>
										<div class="form-check form-check-sm form-check-custom form-check-solid">
											<input class="form-check-input" type="checkbox" value="1" />
										</div>
									</td>
									<td>
										<div class="d-flex align-items-center">
											<!--begin::Thumbnail-->
											<a href="<?=  url('/dw-admin/edit-product') ?>" class="symbol symbol-50px">
												<span class="symbol-label" style="background-image:url(<?= url('/admin/') ?>/assets/media//stock/ecommerce/29.png);"></span>
											</a>
											<!--end::Thumbnail-->
											<div class="ms-5">
												<!--begin::Title-->
												<a href="<?=  url('/dw-admin/edit-product') ?>" class="text-gray-800 text-hover-primary fs-5 fw-bold" data-kt-ecommerce-product-filter="product_name">Product 29</a>
												<!--end::Title-->
											</div>
										</div>
									</td>
									<td class="text-end pe-0">
										<span class="fw-bold">02847007</span>
									</td>
									<td class="text-end pe-0" data-order="40">
										<span class="fw-bold ms-3">40</span>
									</td>
									<td class="text-end pe-0">279</td>
									<td class="text-end pe-0" data-order="rating-4">
										<div class="rating justify-content-end">
											<div class="rating-label checked">
												<i class="ki-duotone ki-star fs-6"></i>
											</div>
											<div class="rating-label checked">
												<i class="ki-duotone ki-star fs-6"></i>
											</div>
											<div class="rating-label checked">
												<i class="ki-duotone ki-star fs-6"></i>
											</div>
											<div class="rating-label checked">
												<i class="ki-duotone ki-star fs-6"></i>
											</div>
											<div class="rating-label">
												<i class="ki-duotone ki-star fs-6"></i>
											</div>
										</div>
									</td>
									<td class="text-end pe-0" data-order="Scheduled">
										<!--begin::Badges-->
										<div class="badge badge-light-primary">Scheduled</div>
										<!--end::Badges-->
									</td>
									<td class="text-end">
										<a href="#" class="btn btn-sm btn-light btn-flex btn-center btn-active-light-primary" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">Actions 
										<i class="ki-duotone ki-down fs-5 ms-1"></i></a>
										<!--begin::Menu-->
										<div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-semibold fs-7 w-125px py-4" data-kt-menu="true">
											<!--begin::Menu item-->
											<div class="menu-item px-3">
												<a href="<?=  url('/dw-admin/edit-product') ?>" class="menu-link px-3">Edit</a>
											</div>
											<!--end::Menu item-->
											<!--begin::Menu item-->
											<div class="menu-item px-3">
												<a href="#" class="menu-link px-3" data-kt-ecommerce-product-filter="delete_row">Delete</a>
											</div>
											<!--end::Menu item-->
										</div>
										<!--end::Menu-->
									</td>
								</tr>
								<tr>
									<td>
										<div class="form-check form-check-sm form-check-custom form-check-solid">
											<input class="form-check-input" type="checkbox" value="1" />
										</div>
									</td>
									<td>
										<div class="d-flex align-items-center">
											<!--begin::Thumbnail-->
											<a href="<?=  url('/dw-admin/edit-product') ?>" class="symbol symbol-50px">
												<span class="symbol-label" style="background-image:url(<?= url('/admin/') ?>/assets/media//stock/ecommerce/30.png);"></span>
											</a>
											<!--end::Thumbnail-->
											<div class="ms-5">
												<!--begin::Title-->
												<a href="<?=  url('/dw-admin/edit-product') ?>" class="text-gray-800 text-hover-primary fs-5 fw-bold" data-kt-ecommerce-product-filter="product_name">Product 30</a>
												<!--end::Title-->
											</div>
										</div>
									</td>
									<td class="text-end pe-0">
										<span class="fw-bold">04375006</span>
									</td>
									<td class="text-end pe-0" data-order="33">
										<span class="fw-bold ms-3">33</span>
									</td>
									<td class="text-end pe-0">262</td>
									<td class="text-end pe-0" data-order="rating-3">
										<div class="rating justify-content-end">
											<div class="rating-label checked">
												<i class="ki-duotone ki-star fs-6"></i>
											</div>
											<div class="rating-label checked">
												<i class="ki-duotone ki-star fs-6"></i>
											</div>
											<div class="rating-label checked">
												<i class="ki-duotone ki-star fs-6"></i>
											</div>
											<div class="rating-label">
												<i class="ki-duotone ki-star fs-6"></i>
											</div>
											<div class="rating-label">
												<i class="ki-duotone ki-star fs-6"></i>
											</div>
										</div>
									</td>
									<td class="text-end pe-0" data-order="Scheduled">
										<!--begin::Badges-->
										<div class="badge badge-light-primary">Scheduled</div>
										<!--end::Badges-->
									</td>
									<td class="text-end">
										<a href="#" class="btn btn-sm btn-light btn-flex btn-center btn-active-light-primary" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">Actions 
										<i class="ki-duotone ki-down fs-5 ms-1"></i></a>
										<!--begin::Menu-->
										<div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-semibold fs-7 w-125px py-4" data-kt-menu="true">
											<!--begin::Menu item-->
											<div class="menu-item px-3">
												<a href="<?=  url('/dw-admin/edit-product') ?>" class="menu-link px-3">Edit</a>
											</div>
											<!--end::Menu item-->
											<!--begin::Menu item-->
											<div class="menu-item px-3">
												<a href="#" class="menu-link px-3" data-kt-ecommerce-product-filter="delete_row">Delete</a>
											</div>
											<!--end::Menu item-->
										</div>
										<!--end::Menu-->
									</td>
								</tr>
								<tr>
									<td>
										<div class="form-check form-check-sm form-check-custom form-check-solid">
											<input class="form-check-input" type="checkbox" value="1" />
										</div>
									</td>
									<td>
										<div class="d-flex align-items-center">
											<!--begin::Thumbnail-->
											<a href="<?=  url('/dw-admin/edit-product') ?>" class="symbol symbol-50px">
												<span class="symbol-label" style="background-image:url(<?= url('/admin/') ?>/assets/media//stock/ecommerce/31.png);"></span>
											</a>
											<!--end::Thumbnail-->
											<div class="ms-5">
												<!--begin::Title-->
												<a href="<?=  url('/dw-admin/edit-product') ?>" class="text-gray-800 text-hover-primary fs-5 fw-bold" data-kt-ecommerce-product-filter="product_name">Product 31</a>
												<!--end::Title-->
											</div>
										</div>
									</td>
									<td class="text-end pe-0">
										<span class="fw-bold">03424009</span>
									</td>
									<td class="text-end pe-0" data-order="18">
										<span class="fw-bold ms-3">18</span>
									</td>
									<td class="text-end pe-0">274</td>
									<td class="text-end pe-0" data-order="rating-3">
										<div class="rating justify-content-end">
											<div class="rating-label checked">
												<i class="ki-duotone ki-star fs-6"></i>
											</div>
											<div class="rating-label checked">
												<i class="ki-duotone ki-star fs-6"></i>
											</div>
											<div class="rating-label checked">
												<i class="ki-duotone ki-star fs-6"></i>
											</div>
											<div class="rating-label">
												<i class="ki-duotone ki-star fs-6"></i>
											</div>
											<div class="rating-label">
												<i class="ki-duotone ki-star fs-6"></i>
											</div>
										</div>
									</td>
									<td class="text-end pe-0" data-order="Published">
										<!--begin::Badges-->
										<div class="badge badge-light-success">Published</div>
										<!--end::Badges-->
									</td>
									<td class="text-end">
										<a href="#" class="btn btn-sm btn-light btn-flex btn-center btn-active-light-primary" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">Actions 
										<i class="ki-duotone ki-down fs-5 ms-1"></i></a>
										<!--begin::Menu-->
										<div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-semibold fs-7 w-125px py-4" data-kt-menu="true">
											<!--begin::Menu item-->
											<div class="menu-item px-3">
												<a href="<?=  url('/dw-admin/edit-product') ?>" class="menu-link px-3">Edit</a>
											</div>
											<!--end::Menu item-->
											<!--begin::Menu item-->
											<div class="menu-item px-3">
												<a href="#" class="menu-link px-3" data-kt-ecommerce-product-filter="delete_row">Delete</a>
											</div>
											<!--end::Menu item-->
										</div>
										<!--end::Menu-->
									</td>
								</tr>
								<tr>
									<td>
										<div class="form-check form-check-sm form-check-custom form-check-solid">
											<input class="form-check-input" type="checkbox" value="1" />
										</div>
									</td>
									<td>
										<div class="d-flex align-items-center">
											<!--begin::Thumbnail-->
											<a href="<?=  url('/dw-admin/edit-product') ?>" class="symbol symbol-50px">
												<span class="symbol-label" style="background-image:url(<?= url('/admin/') ?>/assets/media//stock/ecommerce/32.png);"></span>
											</a>
											<!--end::Thumbnail-->
											<div class="ms-5">
												<!--begin::Title-->
												<a href="<?=  url('/dw-admin/edit-product') ?>" class="text-gray-800 text-hover-primary fs-5 fw-bold" data-kt-ecommerce-product-filter="product_name">Product 32</a>
												<!--end::Title-->
											</div>
										</div>
									</td>
									<td class="text-end pe-0">
										<span class="fw-bold">01367003</span>
									</td>
									<td class="text-end pe-0" data-order="45">
										<span class="fw-bold ms-3">45</span>
									</td>
									<td class="text-end pe-0">187</td>
									<td class="text-end pe-0" data-order="rating-3">
										<div class="rating justify-content-end">
											<div class="rating-label checked">
												<i class="ki-duotone ki-star fs-6"></i>
											</div>
											<div class="rating-label checked">
												<i class="ki-duotone ki-star fs-6"></i>
											</div>
											<div class="rating-label checked">
												<i class="ki-duotone ki-star fs-6"></i>
											</div>
											<div class="rating-label">
												<i class="ki-duotone ki-star fs-6"></i>
											</div>
											<div class="rating-label">
												<i class="ki-duotone ki-star fs-6"></i>
											</div>
										</div>
									</td>
									<td class="text-end pe-0" data-order="Inactive">
										<!--begin::Badges-->
										<div class="badge badge-light-danger">Inactive</div>
										<!--end::Badges-->
									</td>
									<td class="text-end">
										<a href="#" class="btn btn-sm btn-light btn-flex btn-center btn-active-light-primary" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">Actions 
										<i class="ki-duotone ki-down fs-5 ms-1"></i></a>
										<!--begin::Menu-->
										<div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-semibold fs-7 w-125px py-4" data-kt-menu="true">
											<!--begin::Menu item-->
											<div class="menu-item px-3">
												<a href="<?=  url('/dw-admin/edit-product') ?>" class="menu-link px-3">Edit</a>
											</div>
											<!--end::Menu item-->
											<!--begin::Menu item-->
											<div class="menu-item px-3">
												<a href="#" class="menu-link px-3" data-kt-ecommerce-product-filter="delete_row">Delete</a>
											</div>
											<!--end::Menu item-->
										</div>
										<!--end::Menu-->
									</td>
								</tr>
								<tr>
									<td>
										<div class="form-check form-check-sm form-check-custom form-check-solid">
											<input class="form-check-input" type="checkbox" value="1" />
										</div>
									</td>
									<td>
										<div class="d-flex align-items-center">
											<!--begin::Thumbnail-->
											<a href="<?=  url('/dw-admin/edit-product') ?>" class="symbol symbol-50px">
												<span class="symbol-label" style="background-image:url(<?= url('/admin/') ?>/assets/media//stock/ecommerce/33.png);"></span>
											</a>
											<!--end::Thumbnail-->
											<div class="ms-5">
												<!--begin::Title-->
												<a href="<?=  url('/dw-admin/edit-product') ?>" class="text-gray-800 text-hover-primary fs-5 fw-bold" data-kt-ecommerce-product-filter="product_name">Product 33</a>
												<!--end::Title-->
											</div>
										</div>
									</td>
									<td class="text-end pe-0">
										<span class="fw-bold">02892006</span>
									</td>
									<td class="text-end pe-0" data-order="41">
										<span class="fw-bold ms-3">41</span>
									</td>
									<td class="text-end pe-0">111</td>
									<td class="text-end pe-0" data-order="rating-3">
										<div class="rating justify-content-end">
											<div class="rating-label checked">
												<i class="ki-duotone ki-star fs-6"></i>
											</div>
											<div class="rating-label checked">
												<i class="ki-duotone ki-star fs-6"></i>
											</div>
											<div class="rating-label checked">
												<i class="ki-duotone ki-star fs-6"></i>
											</div>
											<div class="rating-label">
												<i class="ki-duotone ki-star fs-6"></i>
											</div>
											<div class="rating-label">
												<i class="ki-duotone ki-star fs-6"></i>
											</div>
										</div>
									</td>
									<td class="text-end pe-0" data-order="Scheduled">
										<!--begin::Badges-->
										<div class="badge badge-light-primary">Scheduled</div>
										<!--end::Badges-->
									</td>
									<td class="text-end">
										<a href="#" class="btn btn-sm btn-light btn-flex btn-center btn-active-light-primary" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">Actions 
										<i class="ki-duotone ki-down fs-5 ms-1"></i></a>
										<!--begin::Menu-->
										<div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-semibold fs-7 w-125px py-4" data-kt-menu="true">
											<!--begin::Menu item-->
											<div class="menu-item px-3">
												<a href="<?=  url('/dw-admin/edit-product') ?>" class="menu-link px-3">Edit</a>
											</div>
											<!--end::Menu item-->
											<!--begin::Menu item-->
											<div class="menu-item px-3">
												<a href="#" class="menu-link px-3" data-kt-ecommerce-product-filter="delete_row">Delete</a>
											</div>
											<!--end::Menu item-->
										</div>
										<!--end::Menu-->
									</td>
								</tr>
								<tr>
									<td>
										<div class="form-check form-check-sm form-check-custom form-check-solid">
											<input class="form-check-input" type="checkbox" value="1" />
										</div>
									</td>
									<td>
										<div class="d-flex align-items-center">
											<!--begin::Thumbnail-->
											<a href="<?=  url('/dw-admin/edit-product') ?>" class="symbol symbol-50px">
												<span class="symbol-label" style="background-image:url(<?= url('/admin/') ?>/assets/media//stock/ecommerce/34.png);"></span>
											</a>
											<!--end::Thumbnail-->
											<div class="ms-5">
												<!--begin::Title-->
												<a href="<?=  url('/dw-admin/edit-product') ?>" class="text-gray-800 text-hover-primary fs-5 fw-bold" data-kt-ecommerce-product-filter="product_name">Product 34</a>
												<!--end::Title-->
											</div>
										</div>
									</td>
									<td class="text-end pe-0">
										<span class="fw-bold">01278002</span>
									</td>
									<td class="text-end pe-0" data-order="25">
										<span class="fw-bold ms-3">25</span>
									</td>
									<td class="text-end pe-0">276</td>
									<td class="text-end pe-0" data-order="rating-4">
										<div class="rating justify-content-end">
											<div class="rating-label checked">
												<i class="ki-duotone ki-star fs-6"></i>
											</div>
											<div class="rating-label checked">
												<i class="ki-duotone ki-star fs-6"></i>
											</div>
											<div class="rating-label checked">
												<i class="ki-duotone ki-star fs-6"></i>
											</div>
											<div class="rating-label checked">
												<i class="ki-duotone ki-star fs-6"></i>
											</div>
											<div class="rating-label">
												<i class="ki-duotone ki-star fs-6"></i>
											</div>
										</div>
									</td>
									<td class="text-end pe-0" data-order="Scheduled">
										<!--begin::Badges-->
										<div class="badge badge-light-primary">Scheduled</div>
										<!--end::Badges-->
									</td>
									<td class="text-end">
										<a href="#" class="btn btn-sm btn-light btn-flex btn-center btn-active-light-primary" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">Actions 
										<i class="ki-duotone ki-down fs-5 ms-1"></i></a>
										<!--begin::Menu-->
										<div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-semibold fs-7 w-125px py-4" data-kt-menu="true">
											<!--begin::Menu item-->
											<div class="menu-item px-3">
												<a href="<?=  url('/dw-admin/edit-product') ?>" class="menu-link px-3">Edit</a>
											</div>
											<!--end::Menu item-->
											<!--begin::Menu item-->
											<div class="menu-item px-3">
												<a href="#" class="menu-link px-3" data-kt-ecommerce-product-filter="delete_row">Delete</a>
											</div>
											<!--end::Menu item-->
										</div>
										<!--end::Menu-->
									</td>
								</tr>
								<tr>
									<td>
										<div class="form-check form-check-sm form-check-custom form-check-solid">
											<input class="form-check-input" type="checkbox" value="1" />
										</div>
									</td>
									<td>
										<div class="d-flex align-items-center">
											<!--begin::Thumbnail-->
											<a href="<?=  url('/dw-admin/edit-product') ?>" class="symbol symbol-50px">
												<span class="symbol-label" style="background-image:url(<?= url('/admin/') ?>/assets/media//stock/ecommerce/35.png);"></span>
											</a>
											<!--end::Thumbnail-->
											<div class="ms-5">
												<!--begin::Title-->
												<a href="<?=  url('/dw-admin/edit-product') ?>" class="text-gray-800 text-hover-primary fs-5 fw-bold" data-kt-ecommerce-product-filter="product_name">Product 35</a>
												<!--end::Title-->
											</div>
										</div>
									</td>
									<td class="text-end pe-0">
										<span class="fw-bold">03405003</span>
									</td>
									<td class="text-end pe-0" data-order="46">
										<span class="fw-bold ms-3">46</span>
									</td>
									<td class="text-end pe-0">134</td>
									<td class="text-end pe-0" data-order="rating-4">
										<div class="rating justify-content-end">
											<div class="rating-label checked">
												<i class="ki-duotone ki-star fs-6"></i>
											</div>
											<div class="rating-label checked">
												<i class="ki-duotone ki-star fs-6"></i>
											</div>
											<div class="rating-label checked">
												<i class="ki-duotone ki-star fs-6"></i>
											</div>
											<div class="rating-label checked">
												<i class="ki-duotone ki-star fs-6"></i>
											</div>
											<div class="rating-label">
												<i class="ki-duotone ki-star fs-6"></i>
											</div>
										</div>
									</td>
									<td class="text-end pe-0" data-order="Published">
										<!--begin::Badges-->
										<div class="badge badge-light-success">Published</div>
										<!--end::Badges-->
									</td>
									<td class="text-end">
										<a href="#" class="btn btn-sm btn-light btn-flex btn-center btn-active-light-primary" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">Actions 
										<i class="ki-duotone ki-down fs-5 ms-1"></i></a>
										<!--begin::Menu-->
										<div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-semibold fs-7 w-125px py-4" data-kt-menu="true">
											<!--begin::Menu item-->
											<div class="menu-item px-3">
												<a href="<?=  url('/dw-admin/edit-product') ?>" class="menu-link px-3">Edit</a>
											</div>
											<!--end::Menu item-->
											<!--begin::Menu item-->
											<div class="menu-item px-3">
												<a href="#" class="menu-link px-3" data-kt-ecommerce-product-filter="delete_row">Delete</a>
											</div>
											<!--end::Menu item-->
										</div>
										<!--end::Menu-->
									</td>
								</tr>
								<tr>
									<td>
										<div class="form-check form-check-sm form-check-custom form-check-solid">
											<input class="form-check-input" type="checkbox" value="1" />
										</div>
									</td>
									<td>
										<div class="d-flex align-items-center">
											<!--begin::Thumbnail-->
											<a href="<?=  url('/dw-admin/edit-product') ?>" class="symbol symbol-50px">
												<span class="symbol-label" style="background-image:url(<?= url('/admin/') ?>/assets/media//stock/ecommerce/36.png);"></span>
											</a>
											<!--end::Thumbnail-->
											<div class="ms-5">
												<!--begin::Title-->
												<a href="<?=  url('/dw-admin/edit-product') ?>" class="text-gray-800 text-hover-primary fs-5 fw-bold" data-kt-ecommerce-product-filter="product_name">Product 36</a>
												<!--end::Title-->
											</div>
										</div>
									</td>
									<td class="text-end pe-0">
										<span class="fw-bold">04960004</span>
									</td>
									<td class="text-end pe-0" data-order="36">
										<span class="fw-bold ms-3">36</span>
									</td>
									<td class="text-end pe-0">92</td>
									<td class="text-end pe-0" data-order="rating-3">
										<div class="rating justify-content-end">
											<div class="rating-label checked">
												<i class="ki-duotone ki-star fs-6"></i>
											</div>
											<div class="rating-label checked">
												<i class="ki-duotone ki-star fs-6"></i>
											</div>
											<div class="rating-label checked">
												<i class="ki-duotone ki-star fs-6"></i>
											</div>
											<div class="rating-label">
												<i class="ki-duotone ki-star fs-6"></i>
											</div>
											<div class="rating-label">
												<i class="ki-duotone ki-star fs-6"></i>
											</div>
										</div>
									</td>
									<td class="text-end pe-0" data-order="Inactive">
										<!--begin::Badges-->
										<div class="badge badge-light-danger">Inactive</div>
										<!--end::Badges-->
									</td>
									<td class="text-end">
										<a href="#" class="btn btn-sm btn-light btn-flex btn-center btn-active-light-primary" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">Actions 
										<i class="ki-duotone ki-down fs-5 ms-1"></i></a>
										<!--begin::Menu-->
										<div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-semibold fs-7 w-125px py-4" data-kt-menu="true">
											<!--begin::Menu item-->
											<div class="menu-item px-3">
												<a href="<?=  url('/dw-admin/edit-product') ?>" class="menu-link px-3">Edit</a>
											</div>
											<!--end::Menu item-->
											<!--begin::Menu item-->
											<div class="menu-item px-3">
												<a href="#" class="menu-link px-3" data-kt-ecommerce-product-filter="delete_row">Delete</a>
											</div>
											<!--end::Menu item-->
										</div>
										<!--end::Menu-->
									</td>
								</tr>
								<tr>
									<td>
										<div class="form-check form-check-sm form-check-custom form-check-solid">
											<input class="form-check-input" type="checkbox" value="1" />
										</div>
									</td>
									<td>
										<div class="d-flex align-items-center">
											<!--begin::Thumbnail-->
											<a href="<?=  url('/dw-admin/edit-product') ?>" class="symbol symbol-50px">
												<span class="symbol-label" style="background-image:url(<?= url('/admin/') ?>/assets/media//stock/ecommerce/37.png);"></span>
											</a>
											<!--end::Thumbnail-->
											<div class="ms-5">
												<!--begin::Title-->
												<a href="<?=  url('/dw-admin/edit-product') ?>" class="text-gray-800 text-hover-primary fs-5 fw-bold" data-kt-ecommerce-product-filter="product_name">Product 37</a>
												<!--end::Title-->
											</div>
										</div>
									</td>
									<td class="text-end pe-0">
										<span class="fw-bold">03933007</span>
									</td>
									<td class="text-end pe-0" data-order="49">
										<span class="fw-bold ms-3">49</span>
									</td>
									<td class="text-end pe-0">184</td>
									<td class="text-end pe-0" data-order="rating-3">
										<div class="rating justify-content-end">
											<div class="rating-label checked">
												<i class="ki-duotone ki-star fs-6"></i>
											</div>
											<div class="rating-label checked">
												<i class="ki-duotone ki-star fs-6"></i>
											</div>
											<div class="rating-label checked">
												<i class="ki-duotone ki-star fs-6"></i>
											</div>
											<div class="rating-label">
												<i class="ki-duotone ki-star fs-6"></i>
											</div>
											<div class="rating-label">
												<i class="ki-duotone ki-star fs-6"></i>
											</div>
										</div>
									</td>
									<td class="text-end pe-0" data-order="Inactive">
										<!--begin::Badges-->
										<div class="badge badge-light-danger">Inactive</div>
										<!--end::Badges-->
									</td>
									<td class="text-end">
										<a href="#" class="btn btn-sm btn-light btn-flex btn-center btn-active-light-primary" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">Actions 
										<i class="ki-duotone ki-down fs-5 ms-1"></i></a>
										<!--begin::Menu-->
										<div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-semibold fs-7 w-125px py-4" data-kt-menu="true">
											<!--begin::Menu item-->
											<div class="menu-item px-3">
												<a href="<?=  url('/dw-admin/edit-product') ?>" class="menu-link px-3">Edit</a>
											</div>
											<!--end::Menu item-->
											<!--begin::Menu item-->
											<div class="menu-item px-3">
												<a href="#" class="menu-link px-3" data-kt-ecommerce-product-filter="delete_row">Delete</a>
											</div>
											<!--end::Menu item-->
										</div>
										<!--end::Menu-->
									</td>
								</tr>
								<tr>
									<td>
										<div class="form-check form-check-sm form-check-custom form-check-solid">
											<input class="form-check-input" type="checkbox" value="1" />
										</div>
									</td>
									<td>
										<div class="d-flex align-items-center">
											<!--begin::Thumbnail-->
											<a href="<?=  url('/dw-admin/edit-product') ?>" class="symbol symbol-50px">
												<span class="symbol-label" style="background-image:url(<?= url('/admin/') ?>/assets/media//stock/ecommerce/38.png);"></span>
											</a>
											<!--end::Thumbnail-->
											<div class="ms-5">
												<!--begin::Title-->
												<a href="<?=  url('/dw-admin/edit-product') ?>" class="text-gray-800 text-hover-primary fs-5 fw-bold" data-kt-ecommerce-product-filter="product_name">Product 38</a>
												<!--end::Title-->
											</div>
										</div>
									</td>
									<td class="text-end pe-0">
										<span class="fw-bold">01273008</span>
									</td>
									<td class="text-end pe-0" data-order="5">
										<span class="badge badge-light-warning">Low stock</span>
										<span class="fw-bold text-warning ms-3">5</span>
									</td>
									<td class="text-end pe-0">155</td>
									<td class="text-end pe-0" data-order="rating-4">
										<div class="rating justify-content-end">
											<div class="rating-label checked">
												<i class="ki-duotone ki-star fs-6"></i>
											</div>
											<div class="rating-label checked">
												<i class="ki-duotone ki-star fs-6"></i>
											</div>
											<div class="rating-label checked">
												<i class="ki-duotone ki-star fs-6"></i>
											</div>
											<div class="rating-label checked">
												<i class="ki-duotone ki-star fs-6"></i>
											</div>
											<div class="rating-label">
												<i class="ki-duotone ki-star fs-6"></i>
											</div>
										</div>
									</td>
									<td class="text-end pe-0" data-order="Scheduled">
										<!--begin::Badges-->
										<div class="badge badge-light-primary">Scheduled</div>
										<!--end::Badges-->
									</td>
									<td class="text-end">
										<a href="#" class="btn btn-sm btn-light btn-flex btn-center btn-active-light-primary" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">Actions 
										<i class="ki-duotone ki-down fs-5 ms-1"></i></a>
										<!--begin::Menu-->
										<div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-semibold fs-7 w-125px py-4" data-kt-menu="true">
											<!--begin::Menu item-->
											<div class="menu-item px-3">
												<a href="<?=  url('/dw-admin/edit-product') ?>" class="menu-link px-3">Edit</a>
											</div>
											<!--end::Menu item-->
											<!--begin::Menu item-->
											<div class="menu-item px-3">
												<a href="#" class="menu-link px-3" data-kt-ecommerce-product-filter="delete_row">Delete</a>
											</div>
											<!--end::Menu item-->
										</div>
										<!--end::Menu-->
									</td>
								</tr>
								<tr>
									<td>
										<div class="form-check form-check-sm form-check-custom form-check-solid">
											<input class="form-check-input" type="checkbox" value="1" />
										</div>
									</td>
									<td>
										<div class="d-flex align-items-center">
											<!--begin::Thumbnail-->
											<a href="<?=  url('/dw-admin/edit-product') ?>" class="symbol symbol-50px">
												<span class="symbol-label" style="background-image:url(<?= url('/admin/') ?>/assets/media//stock/ecommerce/39.png);"></span>
											</a>
											<!--end::Thumbnail-->
											<div class="ms-5">
												<!--begin::Title-->
												<a href="<?=  url('/dw-admin/edit-product') ?>" class="text-gray-800 text-hover-primary fs-5 fw-bold" data-kt-ecommerce-product-filter="product_name">Product 39</a>
												<!--end::Title-->
											</div>
										</div>
									</td>
									<td class="text-end pe-0">
										<span class="fw-bold">01971009</span>
									</td>
									<td class="text-end pe-0" data-order="14">
										<span class="fw-bold ms-3">14</span>
									</td>
									<td class="text-end pe-0">207</td>
									<td class="text-end pe-0" data-order="rating-3">
										<div class="rating justify-content-end">
											<div class="rating-label checked">
												<i class="ki-duotone ki-star fs-6"></i>
											</div>
											<div class="rating-label checked">
												<i class="ki-duotone ki-star fs-6"></i>
											</div>
											<div class="rating-label checked">
												<i class="ki-duotone ki-star fs-6"></i>
											</div>
											<div class="rating-label">
												<i class="ki-duotone ki-star fs-6"></i>
											</div>
											<div class="rating-label">
												<i class="ki-duotone ki-star fs-6"></i>
											</div>
										</div>
									</td>
									<td class="text-end pe-0" data-order="Inactive">
										<!--begin::Badges-->
										<div class="badge badge-light-danger">Inactive</div>
										<!--end::Badges-->
									</td>
									<td class="text-end">
										<a href="#" class="btn btn-sm btn-light btn-flex btn-center btn-active-light-primary" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">Actions 
										<i class="ki-duotone ki-down fs-5 ms-1"></i></a>
										<!--begin::Menu-->
										<div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-semibold fs-7 w-125px py-4" data-kt-menu="true">
											<!--begin::Menu item-->
											<div class="menu-item px-3">
												<a href="<?=  url('/dw-admin/edit-product') ?>" class="menu-link px-3">Edit</a>
											</div>
											<!--end::Menu item-->
											<!--begin::Menu item-->
											<div class="menu-item px-3">
												<a href="#" class="menu-link px-3" data-kt-ecommerce-product-filter="delete_row">Delete</a>
											</div>
											<!--end::Menu item-->
										</div>
										<!--end::Menu-->
									</td>
								</tr>
								<tr>
									<td>
										<div class="form-check form-check-sm form-check-custom form-check-solid">
											<input class="form-check-input" type="checkbox" value="1" />
										</div>
									</td>
									<td>
										<div class="d-flex align-items-center">
											<!--begin::Thumbnail-->
											<a href="<?=  url('/dw-admin/edit-product') ?>" class="symbol symbol-50px">
												<span class="symbol-label" style="background-image:url(<?= url('/admin/') ?>/assets/media//stock/ecommerce/40.png);"></span>
											</a>
											<!--end::Thumbnail-->
											<div class="ms-5">
												<!--begin::Title-->
												<a href="<?=  url('/dw-admin/edit-product') ?>" class="text-gray-800 text-hover-primary fs-5 fw-bold" data-kt-ecommerce-product-filter="product_name">Product 40</a>
												<!--end::Title-->
											</div>
										</div>
									</td>
									<td class="text-end pe-0">
										<span class="fw-bold">03458009</span>
									</td>
									<td class="text-end pe-0" data-order="36">
										<span class="fw-bold ms-3">36</span>
									</td>
									<td class="text-end pe-0">160</td>
									<td class="text-end pe-0" data-order="rating-3">
										<div class="rating justify-content-end">
											<div class="rating-label checked">
												<i class="ki-duotone ki-star fs-6"></i>
											</div>
											<div class="rating-label checked">
												<i class="ki-duotone ki-star fs-6"></i>
											</div>
											<div class="rating-label checked">
												<i class="ki-duotone ki-star fs-6"></i>
											</div>
											<div class="rating-label">
												<i class="ki-duotone ki-star fs-6"></i>
											</div>
											<div class="rating-label">
												<i class="ki-duotone ki-star fs-6"></i>
											</div>
										</div>
									</td>
									<td class="text-end pe-0" data-order="Published">
										<!--begin::Badges-->
										<div class="badge badge-light-success">Published</div>
										<!--end::Badges-->
									</td>
									<td class="text-end">
										<a href="#" class="btn btn-sm btn-light btn-flex btn-center btn-active-light-primary" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">Actions 
										<i class="ki-duotone ki-down fs-5 ms-1"></i></a>
										<!--begin::Menu-->
										<div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-semibold fs-7 w-125px py-4" data-kt-menu="true">
											<!--begin::Menu item-->
											<div class="menu-item px-3">
												<a href="<?=  url('/dw-admin/edit-product') ?>" class="menu-link px-3">Edit</a>
											</div>
											<!--end::Menu item-->
											<!--begin::Menu item-->
											<div class="menu-item px-3">
												<a href="#" class="menu-link px-3" data-kt-ecommerce-product-filter="delete_row">Delete</a>
											</div>
											<!--end::Menu item-->
										</div>
										<!--end::Menu-->
									</td>
								</tr>
								<tr>
									<td>
										<div class="form-check form-check-sm form-check-custom form-check-solid">
											<input class="form-check-input" type="checkbox" value="1" />
										</div>
									</td>
									<td>
										<div class="d-flex align-items-center">
											<!--begin::Thumbnail-->
											<a href="<?=  url('/dw-admin/edit-product') ?>" class="symbol symbol-50px">
												<span class="symbol-label" style="background-image:url(<?= url('/admin/') ?>/assets/media//stock/ecommerce/41.png);"></span>
											</a>
											<!--end::Thumbnail-->
											<div class="ms-5">
												<!--begin::Title-->
												<a href="<?=  url('/dw-admin/edit-product') ?>" class="text-gray-800 text-hover-primary fs-5 fw-bold" data-kt-ecommerce-product-filter="product_name">Product 41</a>
												<!--end::Title-->
											</div>
										</div>
									</td>
									<td class="text-end pe-0">
										<span class="fw-bold">01802006</span>
									</td>
									<td class="text-end pe-0" data-order="50">
										<span class="fw-bold ms-3">50</span>
									</td>
									<td class="text-end pe-0">137</td>
									<td class="text-end pe-0" data-order="rating-3">
										<div class="rating justify-content-end">
											<div class="rating-label checked">
												<i class="ki-duotone ki-star fs-6"></i>
											</div>
											<div class="rating-label checked">
												<i class="ki-duotone ki-star fs-6"></i>
											</div>
											<div class="rating-label checked">
												<i class="ki-duotone ki-star fs-6"></i>
											</div>
											<div class="rating-label">
												<i class="ki-duotone ki-star fs-6"></i>
											</div>
											<div class="rating-label">
												<i class="ki-duotone ki-star fs-6"></i>
											</div>
										</div>
									</td>
									<td class="text-end pe-0" data-order="Published">
										<!--begin::Badges-->
										<div class="badge badge-light-success">Published</div>
										<!--end::Badges-->
									</td>
									<td class="text-end">
										<a href="#" class="btn btn-sm btn-light btn-flex btn-center btn-active-light-primary" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">Actions 
										<i class="ki-duotone ki-down fs-5 ms-1"></i></a>
										<!--begin::Menu-->
										<div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-semibold fs-7 w-125px py-4" data-kt-menu="true">
											<!--begin::Menu item-->
											<div class="menu-item px-3">
												<a href="<?=  url('/dw-admin/edit-product') ?>" class="menu-link px-3">Edit</a>
											</div>
											<!--end::Menu item-->
											<!--begin::Menu item-->
											<div class="menu-item px-3">
												<a href="#" class="menu-link px-3" data-kt-ecommerce-product-filter="delete_row">Delete</a>
											</div>
											<!--end::Menu item-->
										</div>
										<!--end::Menu-->
									</td>
								</tr>
								<tr>
									<td>
										<div class="form-check form-check-sm form-check-custom form-check-solid">
											<input class="form-check-input" type="checkbox" value="1" />
										</div>
									</td>
									<td>
										<div class="d-flex align-items-center">
											<!--begin::Thumbnail-->
											<a href="<?=  url('/dw-admin/edit-product') ?>" class="symbol symbol-50px">
												<span class="symbol-label" style="background-image:url(<?= url('/admin/') ?>/assets/media//stock/ecommerce/42.png);"></span>
											</a>
											<!--end::Thumbnail-->
											<div class="ms-5">
												<!--begin::Title-->
												<a href="<?=  url('/dw-admin/edit-product') ?>" class="text-gray-800 text-hover-primary fs-5 fw-bold" data-kt-ecommerce-product-filter="product_name">Product 42</a>
												<!--end::Title-->
											</div>
										</div>
									</td>
									<td class="text-end pe-0">
										<span class="fw-bold">01711009</span>
									</td>
									<td class="text-end pe-0" data-order="25">
										<span class="fw-bold ms-3">25</span>
									</td>
									<td class="text-end pe-0">137</td>
									<td class="text-end pe-0" data-order="rating-5">
										<div class="rating justify-content-end">
											<div class="rating-label checked">
												<i class="ki-duotone ki-star fs-6"></i>
											</div>
											<div class="rating-label checked">
												<i class="ki-duotone ki-star fs-6"></i>
											</div>
											<div class="rating-label checked">
												<i class="ki-duotone ki-star fs-6"></i>
											</div>
											<div class="rating-label checked">
												<i class="ki-duotone ki-star fs-6"></i>
											</div>
											<div class="rating-label checked">
												<i class="ki-duotone ki-star fs-6"></i>
											</div>
										</div>
									</td>
									<td class="text-end pe-0" data-order="Scheduled">
										<!--begin::Badges-->
										<div class="badge badge-light-primary">Scheduled</div>
										<!--end::Badges-->
									</td>
									<td class="text-end">
										<a href="#" class="btn btn-sm btn-light btn-flex btn-center btn-active-light-primary" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">Actions 
										<i class="ki-duotone ki-down fs-5 ms-1"></i></a>
										<!--begin::Menu-->
										<div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-semibold fs-7 w-125px py-4" data-kt-menu="true">
											<!--begin::Menu item-->
											<div class="menu-item px-3">
												<a href="<?=  url('/dw-admin/edit-product') ?>" class="menu-link px-3">Edit</a>
											</div>
											<!--end::Menu item-->
											<!--begin::Menu item-->
											<div class="menu-item px-3">
												<a href="#" class="menu-link px-3" data-kt-ecommerce-product-filter="delete_row">Delete</a>
											</div>
											<!--end::Menu item-->
										</div>
										<!--end::Menu-->
									</td>
								</tr>
								<tr>
									<td>
										<div class="form-check form-check-sm form-check-custom form-check-solid">
											<input class="form-check-input" type="checkbox" value="1" />
										</div>
									</td>
									<td>
										<div class="d-flex align-items-center">
											<!--begin::Thumbnail-->
											<a href="<?=  url('/dw-admin/edit-product') ?>" class="symbol symbol-50px">
												<span class="symbol-label" style="background-image:url(<?= url('/admin/') ?>/assets/media//stock/ecommerce/43.png);"></span>
											</a>
											<!--end::Thumbnail-->
											<div class="ms-5">
												<!--begin::Title-->
												<a href="<?=  url('/dw-admin/edit-product') ?>" class="text-gray-800 text-hover-primary fs-5 fw-bold" data-kt-ecommerce-product-filter="product_name">Product 43</a>
												<!--end::Title-->
											</div>
										</div>
									</td>
									<td class="text-end pe-0">
										<span class="fw-bold">04363005</span>
									</td>
									<td class="text-end pe-0" data-order="11">
										<span class="fw-bold ms-3">11</span>
									</td>
									<td class="text-end pe-0">182</td>
									<td class="text-end pe-0" data-order="rating-3">
										<div class="rating justify-content-end">
											<div class="rating-label checked">
												<i class="ki-duotone ki-star fs-6"></i>
											</div>
											<div class="rating-label checked">
												<i class="ki-duotone ki-star fs-6"></i>
											</div>
											<div class="rating-label checked">
												<i class="ki-duotone ki-star fs-6"></i>
											</div>
											<div class="rating-label">
												<i class="ki-duotone ki-star fs-6"></i>
											</div>
											<div class="rating-label">
												<i class="ki-duotone ki-star fs-6"></i>
											</div>
										</div>
									</td>
									<td class="text-end pe-0" data-order="Inactive">
										<!--begin::Badges-->
										<div class="badge badge-light-danger">Inactive</div>
										<!--end::Badges-->
									</td>
									<td class="text-end">
										<a href="#" class="btn btn-sm btn-light btn-flex btn-center btn-active-light-primary" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">Actions 
										<i class="ki-duotone ki-down fs-5 ms-1"></i></a>
										<!--begin::Menu-->
										<div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-semibold fs-7 w-125px py-4" data-kt-menu="true">
											<!--begin::Menu item-->
											<div class="menu-item px-3">
												<a href="<?=  url('/dw-admin/edit-product') ?>" class="menu-link px-3">Edit</a>
											</div>
											<!--end::Menu item-->
											<!--begin::Menu item-->
											<div class="menu-item px-3">
												<a href="#" class="menu-link px-3" data-kt-ecommerce-product-filter="delete_row">Delete</a>
											</div>
											<!--end::Menu item-->
										</div>
										<!--end::Menu-->
									</td>
								</tr>
								<tr>
									<td>
										<div class="form-check form-check-sm form-check-custom form-check-solid">
											<input class="form-check-input" type="checkbox" value="1" />
										</div>
									</td>
									<td>
										<div class="d-flex align-items-center">
											<!--begin::Thumbnail-->
											<a href="<?=  url('/dw-admin/edit-product') ?>" class="symbol symbol-50px">
												<span class="symbol-label" style="background-image:url(<?= url('/admin/') ?>/assets/media//stock/ecommerce/44.png);"></span>
											</a>
											<!--end::Thumbnail-->
											<div class="ms-5">
												<!--begin::Title-->
												<a href="<?=  url('/dw-admin/edit-product') ?>" class="text-gray-800 text-hover-primary fs-5 fw-bold" data-kt-ecommerce-product-filter="product_name">Product 44</a>
												<!--end::Title-->
											</div>
										</div>
									</td>
									<td class="text-end pe-0">
										<span class="fw-bold">01101002</span>
									</td>
									<td class="text-end pe-0" data-order="10">
										<span class="fw-bold ms-3">10</span>
									</td>
									<td class="text-end pe-0">281</td>
									<td class="text-end pe-0" data-order="rating-3">
										<div class="rating justify-content-end">
											<div class="rating-label checked">
												<i class="ki-duotone ki-star fs-6"></i>
											</div>
											<div class="rating-label checked">
												<i class="ki-duotone ki-star fs-6"></i>
											</div>
											<div class="rating-label checked">
												<i class="ki-duotone ki-star fs-6"></i>
											</div>
											<div class="rating-label">
												<i class="ki-duotone ki-star fs-6"></i>
											</div>
											<div class="rating-label">
												<i class="ki-duotone ki-star fs-6"></i>
											</div>
										</div>
									</td>
									<td class="text-end pe-0" data-order="Published">
										<!--begin::Badges-->
										<div class="badge badge-light-success">Published</div>
										<!--end::Badges-->
									</td>
									<td class="text-end">
										<a href="#" class="btn btn-sm btn-light btn-flex btn-center btn-active-light-primary" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">Actions 
										<i class="ki-duotone ki-down fs-5 ms-1"></i></a>
										<!--begin::Menu-->
										<div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-semibold fs-7 w-125px py-4" data-kt-menu="true">
											<!--begin::Menu item-->
											<div class="menu-item px-3">
												<a href="<?=  url('/dw-admin/edit-product') ?>" class="menu-link px-3">Edit</a>
											</div>
											<!--end::Menu item-->
											<!--begin::Menu item-->
											<div class="menu-item px-3">
												<a href="#" class="menu-link px-3" data-kt-ecommerce-product-filter="delete_row">Delete</a>
											</div>
											<!--end::Menu item-->
										</div>
										<!--end::Menu-->
									</td>
								</tr>
								<tr>
									<td>
										<div class="form-check form-check-sm form-check-custom form-check-solid">
											<input class="form-check-input" type="checkbox" value="1" />
										</div>
									</td>
									<td>
										<div class="d-flex align-items-center">
											<!--begin::Thumbnail-->
											<a href="<?=  url('/dw-admin/edit-product') ?>" class="symbol symbol-50px">
												<span class="symbol-label" style="background-image:url(<?= url('/admin/') ?>/assets/media//stock/ecommerce/45.png);"></span>
											</a>
											<!--end::Thumbnail-->
											<div class="ms-5">
												<!--begin::Title-->
												<a href="<?=  url('/dw-admin/edit-product') ?>" class="text-gray-800 text-hover-primary fs-5 fw-bold" data-kt-ecommerce-product-filter="product_name">Product 45</a>
												<!--end::Title-->
											</div>
										</div>
									</td>
									<td class="text-end pe-0">
										<span class="fw-bold">01443003</span>
									</td>
									<td class="text-end pe-0" data-order="48">
										<span class="fw-bold ms-3">48</span>
									</td>
									<td class="text-end pe-0">296</td>
									<td class="text-end pe-0" data-order="rating-4">
										<div class="rating justify-content-end">
											<div class="rating-label checked">
												<i class="ki-duotone ki-star fs-6"></i>
											</div>
											<div class="rating-label checked">
												<i class="ki-duotone ki-star fs-6"></i>
											</div>
											<div class="rating-label checked">
												<i class="ki-duotone ki-star fs-6"></i>
											</div>
											<div class="rating-label checked">
												<i class="ki-duotone ki-star fs-6"></i>
											</div>
											<div class="rating-label">
												<i class="ki-duotone ki-star fs-6"></i>
											</div>
										</div>
									</td>
									<td class="text-end pe-0" data-order="Scheduled">
										<!--begin::Badges-->
										<div class="badge badge-light-primary">Scheduled</div>
										<!--end::Badges-->
									</td>
									<td class="text-end">
										<a href="#" class="btn btn-sm btn-light btn-flex btn-center btn-active-light-primary" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">Actions 
										<i class="ki-duotone ki-down fs-5 ms-1"></i></a>
										<!--begin::Menu-->
										<div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-semibold fs-7 w-125px py-4" data-kt-menu="true">
											<!--begin::Menu item-->
											<div class="menu-item px-3">
												<a href="<?=  url('/dw-admin/edit-product') ?>" class="menu-link px-3">Edit</a>
											</div>
											<!--end::Menu item-->
											<!--begin::Menu item-->
											<div class="menu-item px-3">
												<a href="#" class="menu-link px-3" data-kt-ecommerce-product-filter="delete_row">Delete</a>
											</div>
											<!--end::Menu item-->
										</div>
										<!--end::Menu-->
									</td>
								</tr>
								<tr>
									<td>
										<div class="form-check form-check-sm form-check-custom form-check-solid">
											<input class="form-check-input" type="checkbox" value="1" />
										</div>
									</td>
									<td>
										<div class="d-flex align-items-center">
											<!--begin::Thumbnail-->
											<a href="<?=  url('/dw-admin/edit-product') ?>" class="symbol symbol-50px">
												<span class="symbol-label" style="background-image:url(<?= url('/admin/') ?>/assets/media//stock/ecommerce/46.png);"></span>
											</a>
											<!--end::Thumbnail-->
											<div class="ms-5">
												<!--begin::Title-->
												<a href="<?=  url('/dw-admin/edit-product') ?>" class="text-gray-800 text-hover-primary fs-5 fw-bold" data-kt-ecommerce-product-filter="product_name">Product 46</a>
												<!--end::Title-->
											</div>
										</div>
									</td>
									<td class="text-end pe-0">
										<span class="fw-bold">01139004</span>
									</td>
									<td class="text-end pe-0" data-order="11">
										<span class="fw-bold ms-3">11</span>
									</td>
									<td class="text-end pe-0">137</td>
									<td class="text-end pe-0" data-order="rating-5">
										<div class="rating justify-content-end">
											<div class="rating-label checked">
												<i class="ki-duotone ki-star fs-6"></i>
											</div>
											<div class="rating-label checked">
												<i class="ki-duotone ki-star fs-6"></i>
											</div>
											<div class="rating-label checked">
												<i class="ki-duotone ki-star fs-6"></i>
											</div>
											<div class="rating-label checked">
												<i class="ki-duotone ki-star fs-6"></i>
											</div>
											<div class="rating-label checked">
												<i class="ki-duotone ki-star fs-6"></i>
											</div>
										</div>
									</td>
									<td class="text-end pe-0" data-order="Inactive">
										<!--begin::Badges-->
										<div class="badge badge-light-danger">Inactive</div>
										<!--end::Badges-->
									</td>
									<td class="text-end">
										<a href="#" class="btn btn-sm btn-light btn-flex btn-center btn-active-light-primary" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">Actions 
										<i class="ki-duotone ki-down fs-5 ms-1"></i></a>
										<!--begin::Menu-->
										<div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-semibold fs-7 w-125px py-4" data-kt-menu="true">
											<!--begin::Menu item-->
											<div class="menu-item px-3">
												<a href="<?=  url('/dw-admin/edit-product') ?>" class="menu-link px-3">Edit</a>
											</div>
											<!--end::Menu item-->
											<!--begin::Menu item-->
											<div class="menu-item px-3">
												<a href="#" class="menu-link px-3" data-kt-ecommerce-product-filter="delete_row">Delete</a>
											</div>
											<!--end::Menu item-->
										</div>
										<!--end::Menu-->
									</td>
								</tr>
								<tr>
									<td>
										<div class="form-check form-check-sm form-check-custom form-check-solid">
											<input class="form-check-input" type="checkbox" value="1" />
										</div>
									</td>
									<td>
										<div class="d-flex align-items-center">
											<!--begin::Thumbnail-->
											<a href="<?=  url('/dw-admin/edit-product') ?>" class="symbol symbol-50px">
												<span class="symbol-label" style="background-image:url(<?= url('/admin/') ?>/assets/media//stock/ecommerce/47.png);"></span>
											</a>
											<!--end::Thumbnail-->
											<div class="ms-5">
												<!--begin::Title-->
												<a href="<?=  url('/dw-admin/edit-product') ?>" class="text-gray-800 text-hover-primary fs-5 fw-bold" data-kt-ecommerce-product-filter="product_name">Product 47</a>
												<!--end::Title-->
											</div>
										</div>
									</td>
									<td class="text-end pe-0">
										<span class="fw-bold">04905003</span>
									</td>
									<td class="text-end pe-0" data-order="32">
										<span class="fw-bold ms-3">32</span>
									</td>
									<td class="text-end pe-0">197</td>
									<td class="text-end pe-0" data-order="rating-5">
										<div class="rating justify-content-end">
											<div class="rating-label checked">
												<i class="ki-duotone ki-star fs-6"></i>
											</div>
											<div class="rating-label checked">
												<i class="ki-duotone ki-star fs-6"></i>
											</div>
											<div class="rating-label checked">
												<i class="ki-duotone ki-star fs-6"></i>
											</div>
											<div class="rating-label checked">
												<i class="ki-duotone ki-star fs-6"></i>
											</div>
											<div class="rating-label checked">
												<i class="ki-duotone ki-star fs-6"></i>
											</div>
										</div>
									</td>
									<td class="text-end pe-0" data-order="Published">
										<!--begin::Badges-->
										<div class="badge badge-light-success">Published</div>
										<!--end::Badges-->
									</td>
									<td class="text-end">
										<a href="#" class="btn btn-sm btn-light btn-flex btn-center btn-active-light-primary" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">Actions 
										<i class="ki-duotone ki-down fs-5 ms-1"></i></a>
										<!--begin::Menu-->
										<div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-semibold fs-7 w-125px py-4" data-kt-menu="true">
											<!--begin::Menu item-->
											<div class="menu-item px-3">
												<a href="<?=  url('/dw-admin/edit-product') ?>" class="menu-link px-3">Edit</a>
											</div>
											<!--end::Menu item-->
											<!--begin::Menu item-->
											<div class="menu-item px-3">
												<a href="#" class="menu-link px-3" data-kt-ecommerce-product-filter="delete_row">Delete</a>
											</div>
											<!--end::Menu item-->
										</div>
										<!--end::Menu-->
									</td>
								</tr>
								<tr>
									<td>
										<div class="form-check form-check-sm form-check-custom form-check-solid">
											<input class="form-check-input" type="checkbox" value="1" />
										</div>
									</td>
									<td>
										<div class="d-flex align-items-center">
											<!--begin::Thumbnail-->
											<a href="<?=  url('/dw-admin/edit-product') ?>" class="symbol symbol-50px">
												<span class="symbol-label" style="background-image:url(<?= url('/admin/') ?>/assets/media//stock/ecommerce/48.png);"></span>
											</a>
											<!--end::Thumbnail-->
											<div class="ms-5">
												<!--begin::Title-->
												<a href="<?=  url('/dw-admin/edit-product') ?>" class="text-gray-800 text-hover-primary fs-5 fw-bold" data-kt-ecommerce-product-filter="product_name">Product 48</a>
												<!--end::Title-->
											</div>
										</div>
									</td>
									<td class="text-end pe-0">
										<span class="fw-bold">03138009</span>
									</td>
									<td class="text-end pe-0" data-order="23">
										<span class="fw-bold ms-3">23</span>
									</td>
									<td class="text-end pe-0">217</td>
									<td class="text-end pe-0" data-order="rating-4">
										<div class="rating justify-content-end">
											<div class="rating-label checked">
												<i class="ki-duotone ki-star fs-6"></i>
											</div>
											<div class="rating-label checked">
												<i class="ki-duotone ki-star fs-6"></i>
											</div>
											<div class="rating-label checked">
												<i class="ki-duotone ki-star fs-6"></i>
											</div>
											<div class="rating-label checked">
												<i class="ki-duotone ki-star fs-6"></i>
											</div>
											<div class="rating-label">
												<i class="ki-duotone ki-star fs-6"></i>
											</div>
										</div>
									</td>
									<td class="text-end pe-0" data-order="Scheduled">
										<!--begin::Badges-->
										<div class="badge badge-light-primary">Scheduled</div>
										<!--end::Badges-->
									</td>
									<td class="text-end">
										<a href="#" class="btn btn-sm btn-light btn-flex btn-center btn-active-light-primary" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">Actions 
										<i class="ki-duotone ki-down fs-5 ms-1"></i></a>
										<!--begin::Menu-->
										<div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-semibold fs-7 w-125px py-4" data-kt-menu="true">
											<!--begin::Menu item-->
											<div class="menu-item px-3">
												<a href="<?=  url('/dw-admin/edit-product') ?>" class="menu-link px-3">Edit</a>
											</div>
											<!--end::Menu item-->
											<!--begin::Menu item-->
											<div class="menu-item px-3">
												<a href="#" class="menu-link px-3" data-kt-ecommerce-product-filter="delete_row">Delete</a>
											</div>
											<!--end::Menu item-->
										</div>
										<!--end::Menu-->
									</td>
								</tr>
								<tr>
									<td>
										<div class="form-check form-check-sm form-check-custom form-check-solid">
											<input class="form-check-input" type="checkbox" value="1" />
										</div>
									</td>
									<td>
										<div class="d-flex align-items-center">
											<!--begin::Thumbnail-->
											<a href="<?=  url('/dw-admin/edit-product') ?>" class="symbol symbol-50px">
												<span class="symbol-label" style="background-image:url(<?= url('/admin/') ?>/assets/media//stock/ecommerce/49.png);"></span>
											</a>
											<!--end::Thumbnail-->
											<div class="ms-5">
												<!--begin::Title-->
												<a href="<?=  url('/dw-admin/edit-product') ?>" class="text-gray-800 text-hover-primary fs-5 fw-bold" data-kt-ecommerce-product-filter="product_name">Product 49</a>
												<!--end::Title-->
											</div>
										</div>
									</td>
									<td class="text-end pe-0">
										<span class="fw-bold">01442003</span>
									</td>
									<td class="text-end pe-0" data-order="27">
										<span class="fw-bold ms-3">27</span>
									</td>
									<td class="text-end pe-0">62</td>
									<td class="text-end pe-0" data-order="rating-3">
										<div class="rating justify-content-end">
											<div class="rating-label checked">
												<i class="ki-duotone ki-star fs-6"></i>
											</div>
											<div class="rating-label checked">
												<i class="ki-duotone ki-star fs-6"></i>
											</div>
											<div class="rating-label checked">
												<i class="ki-duotone ki-star fs-6"></i>
											</div>
											<div class="rating-label">
												<i class="ki-duotone ki-star fs-6"></i>
											</div>
											<div class="rating-label">
												<i class="ki-duotone ki-star fs-6"></i>
											</div>
										</div>
									</td>
									<td class="text-end pe-0" data-order="Scheduled">
										<!--begin::Badges-->
										<div class="badge badge-light-primary">Scheduled</div>
										<!--end::Badges-->
									</td>
									<td class="text-end">
										<a href="#" class="btn btn-sm btn-light btn-flex btn-center btn-active-light-primary" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">Actions 
										<i class="ki-duotone ki-down fs-5 ms-1"></i></a>
										<!--begin::Menu-->
										<div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-semibold fs-7 w-125px py-4" data-kt-menu="true">
											<!--begin::Menu item-->
											<div class="menu-item px-3">
												<a href="<?=  url('/dw-admin/edit-product') ?>" class="menu-link px-3">Edit</a>
											</div>
											<!--end::Menu item-->
											<!--begin::Menu item-->
											<div class="menu-item px-3">
												<a href="#" class="menu-link px-3" data-kt-ecommerce-product-filter="delete_row">Delete</a>
											</div>
											<!--end::Menu item-->
										</div>
										<!--end::Menu-->
									</td>
								</tr>
								<tr>
									<td>
										<div class="form-check form-check-sm form-check-custom form-check-solid">
											<input class="form-check-input" type="checkbox" value="1" />
										</div>
									</td>
									<td>
										<div class="d-flex align-items-center">
											<!--begin::Thumbnail-->
											<a href="<?=  url('/dw-admin/edit-product') ?>" class="symbol symbol-50px">
												<span class="symbol-label" style="background-image:url(<?= url('/admin/') ?>/assets/media//stock/ecommerce/50.png);"></span>
											</a>
											<!--end::Thumbnail-->
											<div class="ms-5">
												<!--begin::Title-->
												<a href="<?=  url('/dw-admin/edit-product') ?>" class="text-gray-800 text-hover-primary fs-5 fw-bold" data-kt-ecommerce-product-filter="product_name">Product 50</a>
												<!--end::Title-->
											</div>
										</div>
									</td>
									<td class="text-end pe-0">
										<span class="fw-bold">04809004</span>
									</td>
									<td class="text-end pe-0" data-order="4">
										<span class="badge badge-light-warning">Low stock</span>
										<span class="fw-bold text-warning ms-3">4</span>
									</td>
									<td class="text-end pe-0">89</td>
									<td class="text-end pe-0" data-order="rating-5">
										<div class="rating justify-content-end">
											<div class="rating-label checked">
												<i class="ki-duotone ki-star fs-6"></i>
											</div>
											<div class="rating-label checked">
												<i class="ki-duotone ki-star fs-6"></i>
											</div>
											<div class="rating-label checked">
												<i class="ki-duotone ki-star fs-6"></i>
											</div>
											<div class="rating-label checked">
												<i class="ki-duotone ki-star fs-6"></i>
											</div>
											<div class="rating-label checked">
												<i class="ki-duotone ki-star fs-6"></i>
											</div>
										</div>
									</td>
									<td class="text-end pe-0" data-order="Scheduled">
										<!--begin::Badges-->
										<div class="badge badge-light-primary">Scheduled</div>
										<!--end::Badges-->
									</td>
									<td class="text-end">
										<a href="#" class="btn btn-sm btn-light btn-flex btn-center btn-active-light-primary" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">Actions 
										<i class="ki-duotone ki-down fs-5 ms-1"></i></a>
										<!--begin::Menu-->
										<div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-semibold fs-7 w-125px py-4" data-kt-menu="true">
											<!--begin::Menu item-->
											<div class="menu-item px-3">
												<a href="<?=  url('/dw-admin/edit-product') ?>" class="menu-link px-3">Edit</a>
											</div>
											<!--end::Menu item-->
											<!--begin::Menu item-->
											<div class="menu-item px-3">
												<a href="#" class="menu-link px-3" data-kt-ecommerce-product-filter="delete_row">Delete</a>
											</div>
											<!--end::Menu item-->
										</div>
										<!--end::Menu-->
									</td>
								</tr>
							</tbody>
						</table>
						<!--end::Table-->
					</div>
					<!--end::Card body-->
				</div>
				<!--end::Products-->
			</div>
			<!--end::Content container-->
		</div>
		<!--end::Content-->
	</div>
	<!--end::Content wrapper-->
<?php include("common/footer.php") ?> 					