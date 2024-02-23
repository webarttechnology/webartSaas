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
										<h1 class="page-heading d-flex text-gray-900 fw-bold fs-3 flex-column justify-content-center my-0">Orders Listing</h1>
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
											<li class="breadcrumb-item text-muted">Sales</li>
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
											<div class="menu menu-sub menu-sub-dropdown w-250px w-md-300px" data-kt-menu="true" id="kt_menu_65a12143712c8">
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
															<select class="form-select form-select-solid" multiple="multiple" data-kt-select2="true" data-close-on-select="false" data-placeholder="Select option" data-dropdown-parent="#kt_menu_65a12143712c8" data-allow-clear="true">
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
													<input type="text" data-kt-ecommerce-order-filter="search" class="form-control form-control-solid w-250px ps-12" placeholder="Search Order" />
												</div>
												<!--end::Search-->
											</div>
											<!--end::Card title-->
											<!--begin::Card toolbar-->
											<div class="card-toolbar flex-row-fluid justify-content-end gap-5">
												<!--begin::Flatpickr-->
												<div class="input-group w-250px">
													<input class="form-control form-control-solid rounded rounded-end-0" placeholder="Pick date range" id="kt_ecommerce_sales_flatpickr" />
													<button class="btn btn-icon btn-light" id="kt_ecommerce_sales_flatpickr_clear">
														<i class="ki-duotone ki-cross fs-2">
															<span class="path1"></span>
															<span class="path2"></span>
														</i>
													</button>
												</div>
												<!--end::Flatpickr-->
												<div class="w-100 mw-150px">
													<!--begin::Select2-->
													<select class="form-select form-select-solid" data-control="select2" data-hide-search="true" data-placeholder="Status" data-kt-ecommerce-order-filter="status">
														<option></option>
														<option value="all">All</option>
														<option value="Cancelled">Cancelled</option>
														<option value="Completed">Completed</option>
														<option value="Denied">Denied</option>
														<option value="Expired">Expired</option>
														<option value="Failed">Failed</option>
														<option value="Pending">Pending</option>
														<option value="Processing">Processing</option>
														<option value="Refunded">Refunded</option>
														<option value="Delivered">Delivered</option>
														<option value="Delivering">Delivering</option>
													</select>
													<!--end::Select2-->
												</div>
												<!--begin::Add product-->
												<a href="<?= url('/dw-admin/add-order') ?>" class="btn btn-primary">Add Order</a>
												<!--end::Add product-->
											</div>
											<!--end::Card toolbar-->
										</div>
										<!--end::Card header-->
										<!--begin::Card body-->
										<div class="card-body pt-0">
											<!--begin::Table-->
											<table class="table align-middle table-row-dashed fs-6 gy-5" id="kt_ecommerce_sales_table">
												<thead>
													<tr class="text-start text-gray-500 fw-bold fs-7 text-uppercase gs-0">
														<th class="w-10px pe-2">
															<div class="form-check form-check-sm form-check-custom form-check-solid me-3">
																<input class="form-check-input" type="checkbox" data-kt-check="true" data-kt-check-target="#kt_ecommerce_sales_table .form-check-input" value="1" />
															</div>
														</th>
														<th class="min-w-100px">Order ID</th>
														<th class="min-w-175px">Customer</th>
														<th class="text-end min-w-70px">Status</th>
														<th class="text-end min-w-100px">Total</th>
														<th class="text-end min-w-100px">Date Added</th>
														<th class="text-end min-w-100px">Date Modified</th>
														<th class="text-end min-w-100px">Actions</th>
													</tr>
												</thead>
												<tbody class="fw-semibold text-gray-600">
													<tr>
														<td>
															<div class="form-check form-check-sm form-check-custom form-check-solid">
																<input class="form-check-input" type="checkbox" value="1" />
															</div>
														</td>
														<td data-kt-ecommerce-order-filter="order_id">
															<a href="<?= url('/dw-admin/order-details') ?>" class="text-gray-800 text-hover-primary fw-bold">12768</a>
														</td>
														<td>
															<div class="d-flex align-items-center">
																<!--begin:: Avatar -->
																<div class="symbol symbol-circle symbol-50px overflow-hidden me-3">
																	<a href="<?= url('/dw-admin/customer-details') ?>">
																		<div class="symbol-label fs-3 bg-light-danger text-danger">E</div>
																	</a>
																</div>
																<!--end::Avatar-->
																<div class="ms-5">
																	<!--begin::Title-->
																	<a href="<?= url('/dw-admin/customer-details') ?>" class="text-gray-800 text-hover-primary fs-5 fw-bold">Emma Bold</a>
																	<!--end::Title-->
																</div>
															</div>
														</td>
														<td class="text-end pe-0" data-order="Refunded">
															<!--begin::Badges-->
															<div class="badge badge-light-info">Refunded</div>
															<!--end::Badges-->
														</td>
														<td class="text-end pe-0">
															<span class="fw-bold">$367.00</span>
														</td>
														<td class="text-end" data-order="2024-01-10">
															<span class="fw-bold">10/01/2024</span>
														</td>
														<td class="text-end" data-order="2024-01-11">
															<span class="fw-bold">11/01/2024</span>
														</td>
														<td class="text-end">
															<a href="#" class="btn btn-sm btn-light btn-flex btn-center btn-active-light-primary" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">Actions 
															<i class="ki-duotone ki-down fs-5 ms-1"></i></a>
															<!--begin::Menu-->
															<div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-semibold fs-7 w-125px py-4" data-kt-menu="true">
																<!--begin::Menu item-->
																<div class="menu-item px-3">
																	<a href="<?= url('/dw-admin/order-details') ?>" class="menu-link px-3">View</a>
																</div>
																<!--end::Menu item-->
																<!--begin::Menu item-->
																<div class="menu-item px-3">
																	<a href="<?= url('/dw-admin/edit-order') ?>" class="menu-link px-3">Edit</a>
																</div>
																<!--end::Menu item-->
																<!--begin::Menu item-->
																<div class="menu-item px-3">
																	<a href="#" class="menu-link px-3" data-kt-ecommerce-order-filter="delete_row">Delete</a>
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
														<td data-kt-ecommerce-order-filter="order_id">
															<a href="<?= url('/dw-admin/order-details') ?>" class="text-gray-800 text-hover-primary fw-bold">12769</a>
														</td>
														<td>
															<div class="d-flex align-items-center">
																<!--begin:: Avatar -->
																<div class="symbol symbol-circle symbol-50px overflow-hidden me-3">
																	<a href="<?= url('/dw-admin/customer-details') ?>">
																		<div class="symbol-label fs-3 bg-light-warning text-warning">C</div>
																	</a>
																</div>
																<!--end::Avatar-->
																<div class="ms-5">
																	<!--begin::Title-->
																	<a href="<?= url('/dw-admin/customer-details') ?>" class="text-gray-800 text-hover-primary fs-5 fw-bold">Mikaela Collins</a>
																	<!--end::Title-->
																</div>
															</div>
														</td>
														<td class="text-end pe-0" data-order="Completed">
															<!--begin::Badges-->
															<div class="badge badge-light-success">Completed</div>
															<!--end::Badges-->
														</td>
														<td class="text-end pe-0">
															<span class="fw-bold">$91.00</span>
														</td>
														<td class="text-end" data-order="2024-01-04">
															<span class="fw-bold">04/01/2024</span>
														</td>
														<td class="text-end" data-order="2024-01-10">
															<span class="fw-bold">10/01/2024</span>
														</td>
														<td class="text-end">
															<a href="#" class="btn btn-sm btn-light btn-flex btn-center btn-active-light-primary" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">Actions 
															<i class="ki-duotone ki-down fs-5 ms-1"></i></a>
															<!--begin::Menu-->
															<div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-semibold fs-7 w-125px py-4" data-kt-menu="true">
																<!--begin::Menu item-->
																<div class="menu-item px-3">
																	<a href="<?= url('/dw-admin/order-details') ?>" class="menu-link px-3">View</a>
																</div>
																<!--end::Menu item-->
																<!--begin::Menu item-->
																<div class="menu-item px-3">
																	<a href="<?= url('/dw-admin/edit-order') ?>" class="menu-link px-3">Edit</a>
																</div>
																<!--end::Menu item-->
																<!--begin::Menu item-->
																<div class="menu-item px-3">
																	<a href="#" class="menu-link px-3" data-kt-ecommerce-order-filter="delete_row">Delete</a>
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
														<td data-kt-ecommerce-order-filter="order_id">
															<a href="<?= url('/dw-admin/order-details') ?>" class="text-gray-800 text-hover-primary fw-bold">12770</a>
														</td>
														<td>
															<div class="d-flex align-items-center">
																<!--begin:: Avatar -->
																<div class="symbol symbol-circle symbol-50px overflow-hidden me-3">
																	<a href="<?= url('/dw-admin/customer-details') ?>">
																		<div class="symbol-label">
																			<img src="<?= url('/admin') ?>/assets/media/avatars/300-13.jpg" alt="John Miller" class="w-100" />
																		</div>
																	</a>
																</div>
																<!--end::Avatar-->
																<div class="ms-5">
																	<!--begin::Title-->
																	<a href="<?= url('/dw-admin/customer-details') ?>" class="text-gray-800 text-hover-primary fs-5 fw-bold">John Miller</a>
																	<!--end::Title-->
																</div>
															</div>
														</td>
														<td class="text-end pe-0" data-order="Completed">
															<!--begin::Badges-->
															<div class="badge badge-light-success">Completed</div>
															<!--end::Badges-->
														</td>
														<td class="text-end pe-0">
															<span class="fw-bold">$154.00</span>
														</td>
														<td class="text-end" data-order="2024-01-08">
															<span class="fw-bold">08/01/2024</span>
														</td>
														<td class="text-end" data-order="2024-01-09">
															<span class="fw-bold">09/01/2024</span>
														</td>
														<td class="text-end">
															<a href="#" class="btn btn-sm btn-light btn-flex btn-center btn-active-light-primary" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">Actions 
															<i class="ki-duotone ki-down fs-5 ms-1"></i></a>
															<!--begin::Menu-->
															<div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-semibold fs-7 w-125px py-4" data-kt-menu="true">
																<!--begin::Menu item-->
																<div class="menu-item px-3">
																	<a href="<?= url('/dw-admin/order-details') ?>" class="menu-link px-3">View</a>
																</div>
																<!--end::Menu item-->
																<!--begin::Menu item-->
																<div class="menu-item px-3">
																	<a href="<?= url('/dw-admin/edit-order') ?>" class="menu-link px-3">Edit</a>
																</div>
																<!--end::Menu item-->
																<!--begin::Menu item-->
																<div class="menu-item px-3">
																	<a href="#" class="menu-link px-3" data-kt-ecommerce-order-filter="delete_row">Delete</a>
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
														<td data-kt-ecommerce-order-filter="order_id">
															<a href="<?= url('/dw-admin/order-details') ?>" class="text-gray-800 text-hover-primary fw-bold">12771</a>
														</td>
														<td>
															<div class="d-flex align-items-center">
																<!--begin:: Avatar -->
																<div class="symbol symbol-circle symbol-50px overflow-hidden me-3">
																	<a href="<?= url('/dw-admin/customer-details') ?>">
																		<div class="symbol-label fs-3 bg-light-warning text-warning">C</div>
																	</a>
																</div>
																<!--end::Avatar-->
																<div class="ms-5">
																	<!--begin::Title-->
																	<a href="<?= url('/dw-admin/customer-details') ?>" class="text-gray-800 text-hover-primary fs-5 fw-bold">Mikaela Collins</a>
																	<!--end::Title-->
																</div>
															</div>
														</td>
														<td class="text-end pe-0" data-order="Completed">
															<!--begin::Badges-->
															<div class="badge badge-light-success">Completed</div>
															<!--end::Badges-->
														</td>
														<td class="text-end pe-0">
															<span class="fw-bold">$294.00</span>
														</td>
														<td class="text-end" data-order="2024-01-05">
															<span class="fw-bold">05/01/2024</span>
														</td>
														<td class="text-end" data-order="2024-01-08">
															<span class="fw-bold">08/01/2024</span>
														</td>
														<td class="text-end">
															<a href="#" class="btn btn-sm btn-light btn-flex btn-center btn-active-light-primary" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">Actions 
															<i class="ki-duotone ki-down fs-5 ms-1"></i></a>
															<!--begin::Menu-->
															<div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-semibold fs-7 w-125px py-4" data-kt-menu="true">
																<!--begin::Menu item-->
																<div class="menu-item px-3">
																	<a href="<?= url('/dw-admin/order-details') ?>" class="menu-link px-3">View</a>
																</div>
																<!--end::Menu item-->
																<!--begin::Menu item-->
																<div class="menu-item px-3">
																	<a href="<?= url('/dw-admin/edit-order') ?>" class="menu-link px-3">Edit</a>
																</div>
																<!--end::Menu item-->
																<!--begin::Menu item-->
																<div class="menu-item px-3">
																	<a href="#" class="menu-link px-3" data-kt-ecommerce-order-filter="delete_row">Delete</a>
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
														<td data-kt-ecommerce-order-filter="order_id">
															<a href="<?= url('/dw-admin/order-details') ?>" class="text-gray-800 text-hover-primary fw-bold">12772</a>
														</td>
														<td>
															<div class="d-flex align-items-center">
																<!--begin:: Avatar -->
																<div class="symbol symbol-circle symbol-50px overflow-hidden me-3">
																	<a href="<?= url('/dw-admin/customer-details') ?>">
																		<div class="symbol-label fs-3 bg-light-primary text-primary">N</div>
																	</a>
																</div>
																<!--end::Avatar-->
																<div class="ms-5">
																	<!--begin::Title-->
																	<a href="<?= url('/dw-admin/customer-details') ?>" class="text-gray-800 text-hover-primary fs-5 fw-bold">Neil Owen</a>
																	<!--end::Title-->
																</div>
															</div>
														</td>
														<td class="text-end pe-0" data-order="Completed">
															<!--begin::Badges-->
															<div class="badge badge-light-success">Completed</div>
															<!--end::Badges-->
														</td>
														<td class="text-end pe-0">
															<span class="fw-bold">$410.00</span>
														</td>
														<td class="text-end" data-order="2024-01-03">
															<span class="fw-bold">03/01/2024</span>
														</td>
														<td class="text-end" data-order="2024-01-07">
															<span class="fw-bold">07/01/2024</span>
														</td>
														<td class="text-end">
															<a href="#" class="btn btn-sm btn-light btn-flex btn-center btn-active-light-primary" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">Actions 
															<i class="ki-duotone ki-down fs-5 ms-1"></i></a>
															<!--begin::Menu-->
															<div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-semibold fs-7 w-125px py-4" data-kt-menu="true">
																<!--begin::Menu item-->
																<div class="menu-item px-3">
																	<a href="<?= url('/dw-admin/order-details') ?>" class="menu-link px-3">View</a>
																</div>
																<!--end::Menu item-->
																<!--begin::Menu item-->
																<div class="menu-item px-3">
																	<a href="<?= url('/dw-admin/edit-order') ?>" class="menu-link px-3">Edit</a>
																</div>
																<!--end::Menu item-->
																<!--begin::Menu item-->
																<div class="menu-item px-3">
																	<a href="#" class="menu-link px-3" data-kt-ecommerce-order-filter="delete_row">Delete</a>
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
														<td data-kt-ecommerce-order-filter="order_id">
															<a href="<?= url('/dw-admin/order-details') ?>" class="text-gray-800 text-hover-primary fw-bold">12773</a>
														</td>
														<td>
															<div class="d-flex align-items-center">
																<!--begin:: Avatar -->
																<div class="symbol symbol-circle symbol-50px overflow-hidden me-3">
																	<a href="<?= url('/dw-admin/customer-details') ?>">
																		<div class="symbol-label fs-3 bg-light-info text-info">A</div>
																	</a>
																</div>
																<!--end::Avatar-->
																<div class="ms-5">
																	<!--begin::Title-->
																	<a href="<?= url('/dw-admin/customer-details') ?>" class="text-gray-800 text-hover-primary fs-5 fw-bold">Robert Doe</a>
																	<!--end::Title-->
																</div>
															</div>
														</td>
														<td class="text-end pe-0" data-order="Completed">
															<!--begin::Badges-->
															<div class="badge badge-light-success">Completed</div>
															<!--end::Badges-->
														</td>
														<td class="text-end pe-0">
															<span class="fw-bold">$436.00</span>
														</td>
														<td class="text-end" data-order="2024-01-03">
															<span class="fw-bold">03/01/2024</span>
														</td>
														<td class="text-end" data-order="2024-01-06">
															<span class="fw-bold">06/01/2024</span>
														</td>
														<td class="text-end">
															<a href="#" class="btn btn-sm btn-light btn-flex btn-center btn-active-light-primary" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">Actions 
															<i class="ki-duotone ki-down fs-5 ms-1"></i></a>
															<!--begin::Menu-->
															<div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-semibold fs-7 w-125px py-4" data-kt-menu="true">
																<!--begin::Menu item-->
																<div class="menu-item px-3">
																	<a href="<?= url('/dw-admin/order-details') ?>" class="menu-link px-3">View</a>
																</div>
																<!--end::Menu item-->
																<!--begin::Menu item-->
																<div class="menu-item px-3">
																	<a href="<?= url('/dw-admin/edit-order') ?>" class="menu-link px-3">Edit</a>
																</div>
																<!--end::Menu item-->
																<!--begin::Menu item-->
																<div class="menu-item px-3">
																	<a href="#" class="menu-link px-3" data-kt-ecommerce-order-filter="delete_row">Delete</a>
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
														<td data-kt-ecommerce-order-filter="order_id">
															<a href="<?= url('/dw-admin/order-details') ?>" class="text-gray-800 text-hover-primary fw-bold">12774</a>
														</td>
														<td>
															<div class="d-flex align-items-center">
																<!--begin:: Avatar -->
																<div class="symbol symbol-circle symbol-50px overflow-hidden me-3">
																	<a href="<?= url('/dw-admin/customer-details') ?>">
																		<div class="symbol-label">
																			<img src="<?= url('/admin') ?>/assets/media/avatars/300-25.jpg" alt="Brian Cox" class="w-100" />
																		</div>
																	</a>
																</div>
																<!--end::Avatar-->
																<div class="ms-5">
																	<!--begin::Title-->
																	<a href="<?= url('/dw-admin/customer-details') ?>" class="text-gray-800 text-hover-primary fs-5 fw-bold">Brian Cox</a>
																	<!--end::Title-->
																</div>
															</div>
														</td>
														<td class="text-end pe-0" data-order="Pending">
															<!--begin::Badges-->
															<div class="badge badge-light-warning">Pending</div>
															<!--end::Badges-->
														</td>
														<td class="text-end pe-0">
															<span class="fw-bold">$47.00</span>
														</td>
														<td class="text-end" data-order="2024-01-04">
															<span class="fw-bold">04/01/2024</span>
														</td>
														<td class="text-end" data-order="2024-01-05">
															<span class="fw-bold">05/01/2024</span>
														</td>
														<td class="text-end">
															<a href="#" class="btn btn-sm btn-light btn-flex btn-center btn-active-light-primary" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">Actions 
															<i class="ki-duotone ki-down fs-5 ms-1"></i></a>
															<!--begin::Menu-->
															<div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-semibold fs-7 w-125px py-4" data-kt-menu="true">
																<!--begin::Menu item-->
																<div class="menu-item px-3">
																	<a href="<?= url('/dw-admin/order-details') ?>" class="menu-link px-3">View</a>
																</div>
																<!--end::Menu item-->
																<!--begin::Menu item-->
																<div class="menu-item px-3">
																	<a href="<?= url('/dw-admin/edit-order') ?>" class="menu-link px-3">Edit</a>
																</div>
																<!--end::Menu item-->
																<!--begin::Menu item-->
																<div class="menu-item px-3">
																	<a href="#" class="menu-link px-3" data-kt-ecommerce-order-filter="delete_row">Delete</a>
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
														<td data-kt-ecommerce-order-filter="order_id">
															<a href="<?= url('/dw-admin/order-details') ?>" class="text-gray-800 text-hover-primary fw-bold">12775</a>
														</td>
														<td>
															<div class="d-flex align-items-center">
																<!--begin:: Avatar -->
																<div class="symbol symbol-circle symbol-50px overflow-hidden me-3">
																	<a href="<?= url('/dw-admin/customer-details') ?>">
																		<div class="symbol-label">
																			<img src="<?= url('/admin') ?>/assets/media/avatars/300-12.jpg" alt="Ana Crown" class="w-100" />
																		</div>
																	</a>
																</div>
																<!--end::Avatar-->
																<div class="ms-5">
																	<!--begin::Title-->
																	<a href="<?= url('/dw-admin/customer-details') ?>" class="text-gray-800 text-hover-primary fs-5 fw-bold">Ana Crown</a>
																	<!--end::Title-->
																</div>
															</div>
														</td>
														<td class="text-end pe-0" data-order="Completed">
															<!--begin::Badges-->
															<div class="badge badge-light-success">Completed</div>
															<!--end::Badges-->
														</td>
														<td class="text-end pe-0">
															<span class="fw-bold">$346.00</span>
														</td>
														<td class="text-end" data-order="2024-01-01">
															<span class="fw-bold">01/01/2024</span>
														</td>
														<td class="text-end" data-order="2024-01-04">
															<span class="fw-bold">04/01/2024</span>
														</td>
														<td class="text-end">
															<a href="#" class="btn btn-sm btn-light btn-flex btn-center btn-active-light-primary" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">Actions 
															<i class="ki-duotone ki-down fs-5 ms-1"></i></a>
															<!--begin::Menu-->
															<div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-semibold fs-7 w-125px py-4" data-kt-menu="true">
																<!--begin::Menu item-->
																<div class="menu-item px-3">
																	<a href="<?= url('/dw-admin/order-details') ?>" class="menu-link px-3">View</a>
																</div>
																<!--end::Menu item-->
																<!--begin::Menu item-->
																<div class="menu-item px-3">
																	<a href="<?= url('/dw-admin/edit-order') ?>" class="menu-link px-3">Edit</a>
																</div>
																<!--end::Menu item-->
																<!--begin::Menu item-->
																<div class="menu-item px-3">
																	<a href="#" class="menu-link px-3" data-kt-ecommerce-order-filter="delete_row">Delete</a>
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
														<td data-kt-ecommerce-order-filter="order_id">
															<a href="<?= url('/dw-admin/order-details') ?>" class="text-gray-800 text-hover-primary fw-bold">12776</a>
														</td>
														<td>
															<div class="d-flex align-items-center">
																<!--begin:: Avatar -->
																<div class="symbol symbol-circle symbol-50px overflow-hidden me-3">
																	<a href="<?= url('/dw-admin/customer-details') ?>">
																		<div class="symbol-label">
																			<img src="<?= url('/admin') ?>/assets/media/avatars/300-13.jpg" alt="John Miller" class="w-100" />
																		</div>
																	</a>
																</div>
																<!--end::Avatar-->
																<div class="ms-5">
																	<!--begin::Title-->
																	<a href="<?= url('/dw-admin/customer-details') ?>" class="text-gray-800 text-hover-primary fs-5 fw-bold">John Miller</a>
																	<!--end::Title-->
																</div>
															</div>
														</td>
														<td class="text-end pe-0" data-order="Completed">
															<!--begin::Badges-->
															<div class="badge badge-light-success">Completed</div>
															<!--end::Badges-->
														</td>
														<td class="text-end pe-0">
															<span class="fw-bold">$133.00</span>
														</td>
														<td class="text-end" data-order="2023-12-30">
															<span class="fw-bold">30/12/2023</span>
														</td>
														<td class="text-end" data-order="2024-01-03">
															<span class="fw-bold">03/01/2024</span>
														</td>
														<td class="text-end">
															<a href="#" class="btn btn-sm btn-light btn-flex btn-center btn-active-light-primary" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">Actions 
															<i class="ki-duotone ki-down fs-5 ms-1"></i></a>
															<!--begin::Menu-->
															<div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-semibold fs-7 w-125px py-4" data-kt-menu="true">
																<!--begin::Menu item-->
																<div class="menu-item px-3">
																	<a href="<?= url('/dw-admin/order-details') ?>" class="menu-link px-3">View</a>
																</div>
																<!--end::Menu item-->
																<!--begin::Menu item-->
																<div class="menu-item px-3">
																	<a href="<?= url('/dw-admin/edit-order') ?>" class="menu-link px-3">Edit</a>
																</div>
																<!--end::Menu item-->
																<!--begin::Menu item-->
																<div class="menu-item px-3">
																	<a href="#" class="menu-link px-3" data-kt-ecommerce-order-filter="delete_row">Delete</a>
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
														<td data-kt-ecommerce-order-filter="order_id">
															<a href="<?= url('/dw-admin/order-details') ?>" class="text-gray-800 text-hover-primary fw-bold">12777</a>
														</td>
														<td>
															<div class="d-flex align-items-center">
																<!--begin:: Avatar -->
																<div class="symbol symbol-circle symbol-50px overflow-hidden me-3">
																	<a href="<?= url('/dw-admin/customer-details') ?>">
																		<div class="symbol-label">
																			<img src="<?= url('/admin') ?>/assets/media/avatars/300-21.jpg" alt="Ethan Wilder" class="w-100" />
																		</div>
																	</a>
																</div>
																<!--end::Avatar-->
																<div class="ms-5">
																	<!--begin::Title-->
																	<a href="<?= url('/dw-admin/customer-details') ?>" class="text-gray-800 text-hover-primary fs-5 fw-bold">Ethan Wilder</a>
																	<!--end::Title-->
																</div>
															</div>
														</td>
														<td class="text-end pe-0" data-order="Completed">
															<!--begin::Badges-->
															<div class="badge badge-light-success">Completed</div>
															<!--end::Badges-->
														</td>
														<td class="text-end pe-0">
															<span class="fw-bold">$396.00</span>
														</td>
														<td class="text-end" data-order="2023-12-29">
															<span class="fw-bold">29/12/2023</span>
														</td>
														<td class="text-end" data-order="2024-01-02">
															<span class="fw-bold">02/01/2024</span>
														</td>
														<td class="text-end">
															<a href="#" class="btn btn-sm btn-light btn-flex btn-center btn-active-light-primary" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">Actions 
															<i class="ki-duotone ki-down fs-5 ms-1"></i></a>
															<!--begin::Menu-->
															<div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-semibold fs-7 w-125px py-4" data-kt-menu="true">
																<!--begin::Menu item-->
																<div class="menu-item px-3">
																	<a href="<?= url('/dw-admin/order-details') ?>" class="menu-link px-3">View</a>
																</div>
																<!--end::Menu item-->
																<!--begin::Menu item-->
																<div class="menu-item px-3">
																	<a href="<?= url('/dw-admin/edit-order') ?>" class="menu-link px-3">Edit</a>
																</div>
																<!--end::Menu item-->
																<!--begin::Menu item-->
																<div class="menu-item px-3">
																	<a href="#" class="menu-link px-3" data-kt-ecommerce-order-filter="delete_row">Delete</a>
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
														<td data-kt-ecommerce-order-filter="order_id">
															<a href="<?= url('/dw-admin/order-details') ?>" class="text-gray-800 text-hover-primary fw-bold">12778</a>
														</td>
														<td>
															<div class="d-flex align-items-center">
																<!--begin:: Avatar -->
																<div class="symbol symbol-circle symbol-50px overflow-hidden me-3">
																	<a href="<?= url('/dw-admin/customer-details') ?>">
																		<div class="symbol-label fs-3 bg-light-warning text-warning">C</div>
																	</a>
																</div>
																<!--end::Avatar-->
																<div class="ms-5">
																	<!--begin::Title-->
																	<a href="<?= url('/dw-admin/customer-details') ?>" class="text-gray-800 text-hover-primary fs-5 fw-bold">Mikaela Collins</a>
																	<!--end::Title-->
																</div>
															</div>
														</td>
														<td class="text-end pe-0" data-order="Delivering">
															<!--begin::Badges-->
															<div class="badge badge-light-primary">Delivering</div>
															<!--end::Badges-->
														</td>
														<td class="text-end pe-0">
															<span class="fw-bold">$263.00</span>
														</td>
														<td class="text-end" data-order="2023-12-29">
															<span class="fw-bold">29/12/2023</span>
														</td>
														<td class="text-end" data-order="2024-01-01">
															<span class="fw-bold">01/01/2024</span>
														</td>
														<td class="text-end">
															<a href="#" class="btn btn-sm btn-light btn-flex btn-center btn-active-light-primary" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">Actions 
															<i class="ki-duotone ki-down fs-5 ms-1"></i></a>
															<!--begin::Menu-->
															<div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-semibold fs-7 w-125px py-4" data-kt-menu="true">
																<!--begin::Menu item-->
																<div class="menu-item px-3">
																	<a href="<?= url('/dw-admin/order-details') ?>" class="menu-link px-3">View</a>
																</div>
																<!--end::Menu item-->
																<!--begin::Menu item-->
																<div class="menu-item px-3">
																	<a href="<?= url('/dw-admin/edit-order') ?>" class="menu-link px-3">Edit</a>
																</div>
																<!--end::Menu item-->
																<!--begin::Menu item-->
																<div class="menu-item px-3">
																	<a href="#" class="menu-link px-3" data-kt-ecommerce-order-filter="delete_row">Delete</a>
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
														<td data-kt-ecommerce-order-filter="order_id">
															<a href="<?= url('/dw-admin/order-details') ?>" class="text-gray-800 text-hover-primary fw-bold">12779</a>
														</td>
														<td>
															<div class="d-flex align-items-center">
																<!--begin:: Avatar -->
																<div class="symbol symbol-circle symbol-50px overflow-hidden me-3">
																	<a href="<?= url('/dw-admin/customer-details') ?>">
																		<div class="symbol-label">
																			<img src="<?= url('/admin') ?>/assets/media/avatars/300-21.jpg" alt="Ethan Wilder" class="w-100" />
																		</div>
																	</a>
																</div>
																<!--end::Avatar-->
																<div class="ms-5">
																	<!--begin::Title-->
																	<a href="<?= url('/dw-admin/customer-details') ?>" class="text-gray-800 text-hover-primary fs-5 fw-bold">Ethan Wilder</a>
																	<!--end::Title-->
																</div>
															</div>
														</td>
														<td class="text-end pe-0" data-order="Denied">
															<!--begin::Badges-->
															<div class="badge badge-light-danger">Denied</div>
															<!--end::Badges-->
														</td>
														<td class="text-end pe-0">
															<span class="fw-bold">$71.00</span>
														</td>
														<td class="text-end" data-order="2023-12-24">
															<span class="fw-bold">24/12/2023</span>
														</td>
														<td class="text-end" data-order="2023-12-31">
															<span class="fw-bold">31/12/2023</span>
														</td>
														<td class="text-end">
															<a href="#" class="btn btn-sm btn-light btn-flex btn-center btn-active-light-primary" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">Actions 
															<i class="ki-duotone ki-down fs-5 ms-1"></i></a>
															<!--begin::Menu-->
															<div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-semibold fs-7 w-125px py-4" data-kt-menu="true">
																<!--begin::Menu item-->
																<div class="menu-item px-3">
																	<a href="<?= url('/dw-admin/order-details') ?>" class="menu-link px-3">View</a>
																</div>
																<!--end::Menu item-->
																<!--begin::Menu item-->
																<div class="menu-item px-3">
																	<a href="<?= url('/dw-admin/edit-order') ?>" class="menu-link px-3">Edit</a>
																</div>
																<!--end::Menu item-->
																<!--begin::Menu item-->
																<div class="menu-item px-3">
																	<a href="#" class="menu-link px-3" data-kt-ecommerce-order-filter="delete_row">Delete</a>
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
														<td data-kt-ecommerce-order-filter="order_id">
															<a href="<?= url('/dw-admin/order-details') ?>" class="text-gray-800 text-hover-primary fw-bold">12780</a>
														</td>
														<td>
															<div class="d-flex align-items-center">
																<!--begin:: Avatar -->
																<div class="symbol symbol-circle symbol-50px overflow-hidden me-3">
																	<a href="<?= url('/dw-admin/customer-details') ?>">
																		<div class="symbol-label fs-3 bg-light-warning text-warning">C</div>
																	</a>
																</div>
																<!--end::Avatar-->
																<div class="ms-5">
																	<!--begin::Title-->
																	<a href="<?= url('/dw-admin/customer-details') ?>" class="text-gray-800 text-hover-primary fs-5 fw-bold">Mikaela Collins</a>
																	<!--end::Title-->
																</div>
															</div>
														</td>
														<td class="text-end pe-0" data-order="Delivered">
															<!--begin::Badges-->
															<div class="badge badge-light-success">Delivered</div>
															<!--end::Badges-->
														</td>
														<td class="text-end pe-0">
															<span class="fw-bold">$224.00</span>
														</td>
														<td class="text-end" data-order="2023-12-24">
															<span class="fw-bold">24/12/2023</span>
														</td>
														<td class="text-end" data-order="2023-12-30">
															<span class="fw-bold">30/12/2023</span>
														</td>
														<td class="text-end">
															<a href="#" class="btn btn-sm btn-light btn-flex btn-center btn-active-light-primary" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">Actions 
															<i class="ki-duotone ki-down fs-5 ms-1"></i></a>
															<!--begin::Menu-->
															<div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-semibold fs-7 w-125px py-4" data-kt-menu="true">
																<!--begin::Menu item-->
																<div class="menu-item px-3">
																	<a href="<?= url('/dw-admin/order-details') ?>" class="menu-link px-3">View</a>
																</div>
																<!--end::Menu item-->
																<!--begin::Menu item-->
																<div class="menu-item px-3">
																	<a href="<?= url('/dw-admin/edit-order') ?>" class="menu-link px-3">Edit</a>
																</div>
																<!--end::Menu item-->
																<!--begin::Menu item-->
																<div class="menu-item px-3">
																	<a href="#" class="menu-link px-3" data-kt-ecommerce-order-filter="delete_row">Delete</a>
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
														<td data-kt-ecommerce-order-filter="order_id">
															<a href="<?= url('/dw-admin/order-details') ?>" class="text-gray-800 text-hover-primary fw-bold">12781</a>
														</td>
														<td>
															<div class="d-flex align-items-center">
																<!--begin:: Avatar -->
																<div class="symbol symbol-circle symbol-50px overflow-hidden me-3">
																	<a href="<?= url('/dw-admin/customer-details') ?>">
																		<div class="symbol-label">
																			<img src="<?= url('/admin') ?>/assets/media/avatars/300-6.jpg" alt="Emma Smith" class="w-100" />
																		</div>
																	</a>
																</div>
																<!--end::Avatar-->
																<div class="ms-5">
																	<!--begin::Title-->
																	<a href="<?= url('/dw-admin/customer-details') ?>" class="text-gray-800 text-hover-primary fs-5 fw-bold">Emma Smith</a>
																	<!--end::Title-->
																</div>
															</div>
														</td>
														<td class="text-end pe-0" data-order="Completed">
															<!--begin::Badges-->
															<div class="badge badge-light-success">Completed</div>
															<!--end::Badges-->
														</td>
														<td class="text-end pe-0">
															<span class="fw-bold">$353.00</span>
														</td>
														<td class="text-end" data-order="2023-12-28">
															<span class="fw-bold">28/12/2023</span>
														</td>
														<td class="text-end" data-order="2023-12-29">
															<span class="fw-bold">29/12/2023</span>
														</td>
														<td class="text-end">
															<a href="#" class="btn btn-sm btn-light btn-flex btn-center btn-active-light-primary" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">Actions 
															<i class="ki-duotone ki-down fs-5 ms-1"></i></a>
															<!--begin::Menu-->
															<div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-semibold fs-7 w-125px py-4" data-kt-menu="true">
																<!--begin::Menu item-->
																<div class="menu-item px-3">
																	<a href="<?= url('/dw-admin/order-details') ?>" class="menu-link px-3">View</a>
																</div>
																<!--end::Menu item-->
																<!--begin::Menu item-->
																<div class="menu-item px-3">
																	<a href="<?= url('/dw-admin/edit-order') ?>" class="menu-link px-3">Edit</a>
																</div>
																<!--end::Menu item-->
																<!--begin::Menu item-->
																<div class="menu-item px-3">
																	<a href="#" class="menu-link px-3" data-kt-ecommerce-order-filter="delete_row">Delete</a>
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
														<td data-kt-ecommerce-order-filter="order_id">
															<a href="<?= url('/dw-admin/order-details') ?>" class="text-gray-800 text-hover-primary fw-bold">12782</a>
														</td>
														<td>
															<div class="d-flex align-items-center">
																<!--begin:: Avatar -->
																<div class="symbol symbol-circle symbol-50px overflow-hidden me-3">
																	<a href="<?= url('/dw-admin/customer-details') ?>">
																		<div class="symbol-label">
																			<img src="<?= url('/admin') ?>/assets/media/avatars/300-1.jpg" alt="Max Smith" class="w-100" />
																		</div>
																	</a>
																</div>
																<!--end::Avatar-->
																<div class="ms-5">
																	<!--begin::Title-->
																	<a href="<?= url('/dw-admin/customer-details') ?>" class="text-gray-800 text-hover-primary fs-5 fw-bold">Max Smith</a>
																	<!--end::Title-->
																</div>
															</div>
														</td>
														<td class="text-end pe-0" data-order="Expired">
															<!--begin::Badges-->
															<div class="badge badge-light-danger">Expired</div>
															<!--end::Badges-->
														</td>
														<td class="text-end pe-0">
															<span class="fw-bold">$45.00</span>
														</td>
														<td class="text-end" data-order="2023-12-24">
															<span class="fw-bold">24/12/2023</span>
														</td>
														<td class="text-end" data-order="2023-12-28">
															<span class="fw-bold">28/12/2023</span>
														</td>
														<td class="text-end">
															<a href="#" class="btn btn-sm btn-light btn-flex btn-center btn-active-light-primary" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">Actions 
															<i class="ki-duotone ki-down fs-5 ms-1"></i></a>
															<!--begin::Menu-->
															<div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-semibold fs-7 w-125px py-4" data-kt-menu="true">
																<!--begin::Menu item-->
																<div class="menu-item px-3">
																	<a href="<?= url('/dw-admin/order-details') ?>" class="menu-link px-3">View</a>
																</div>
																<!--end::Menu item-->
																<!--begin::Menu item-->
																<div class="menu-item px-3">
																	<a href="<?= url('/dw-admin/edit-order') ?>" class="menu-link px-3">Edit</a>
																</div>
																<!--end::Menu item-->
																<!--begin::Menu item-->
																<div class="menu-item px-3">
																	<a href="#" class="menu-link px-3" data-kt-ecommerce-order-filter="delete_row">Delete</a>
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
														<td data-kt-ecommerce-order-filter="order_id">
															<a href="<?= url('/dw-admin/order-details') ?>" class="text-gray-800 text-hover-primary fw-bold">12783</a>
														</td>
														<td>
															<div class="d-flex align-items-center">
																<!--begin:: Avatar -->
																<div class="symbol symbol-circle symbol-50px overflow-hidden me-3">
																	<a href="<?= url('/dw-admin/customer-details') ?>">
																		<div class="symbol-label">
																			<img src="<?= url('/admin') ?>/assets/media/avatars/300-9.jpg" alt="Francis Mitcham" class="w-100" />
																		</div>
																	</a>
																</div>
																<!--end::Avatar-->
																<div class="ms-5">
																	<!--begin::Title-->
																	<a href="<?= url('/dw-admin/customer-details') ?>" class="text-gray-800 text-hover-primary fs-5 fw-bold">Francis Mitcham</a>
																	<!--end::Title-->
																</div>
															</div>
														</td>
														<td class="text-end pe-0" data-order="Denied">
															<!--begin::Badges-->
															<div class="badge badge-light-danger">Denied</div>
															<!--end::Badges-->
														</td>
														<td class="text-end pe-0">
															<span class="fw-bold">$181.00</span>
														</td>
														<td class="text-end" data-order="2023-12-25">
															<span class="fw-bold">25/12/2023</span>
														</td>
														<td class="text-end" data-order="2023-12-27">
															<span class="fw-bold">27/12/2023</span>
														</td>
														<td class="text-end">
															<a href="#" class="btn btn-sm btn-light btn-flex btn-center btn-active-light-primary" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">Actions 
															<i class="ki-duotone ki-down fs-5 ms-1"></i></a>
															<!--begin::Menu-->
															<div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-semibold fs-7 w-125px py-4" data-kt-menu="true">
																<!--begin::Menu item-->
																<div class="menu-item px-3">
																	<a href="<?= url('/dw-admin/order-details') ?>" class="menu-link px-3">View</a>
																</div>
																<!--end::Menu item-->
																<!--begin::Menu item-->
																<div class="menu-item px-3">
																	<a href="<?= url('/dw-admin/edit-order') ?>" class="menu-link px-3">Edit</a>
																</div>
																<!--end::Menu item-->
																<!--begin::Menu item-->
																<div class="menu-item px-3">
																	<a href="#" class="menu-link px-3" data-kt-ecommerce-order-filter="delete_row">Delete</a>
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
														<td data-kt-ecommerce-order-filter="order_id">
															<a href="<?= url('/dw-admin/order-details') ?>" class="text-gray-800 text-hover-primary fw-bold">12784</a>
														</td>
														<td>
															<div class="d-flex align-items-center">
																<!--begin:: Avatar -->
																<div class="symbol symbol-circle symbol-50px overflow-hidden me-3">
																	<a href="<?= url('/dw-admin/customer-details') ?>">
																		<div class="symbol-label fs-3 bg-light-primary text-primary">N</div>
																	</a>
																</div>
																<!--end::Avatar-->
																<div class="ms-5">
																	<!--begin::Title-->
																	<a href="<?= url('/dw-admin/customer-details') ?>" class="text-gray-800 text-hover-primary fs-5 fw-bold">Neil Owen</a>
																	<!--end::Title-->
																</div>
															</div>
														</td>
														<td class="text-end pe-0" data-order="Denied">
															<!--begin::Badges-->
															<div class="badge badge-light-danger">Denied</div>
															<!--end::Badges-->
														</td>
														<td class="text-end pe-0">
															<span class="fw-bold">$423.00</span>
														</td>
														<td class="text-end" data-order="2023-12-21">
															<span class="fw-bold">21/12/2023</span>
														</td>
														<td class="text-end" data-order="2023-12-26">
															<span class="fw-bold">26/12/2023</span>
														</td>
														<td class="text-end">
															<a href="#" class="btn btn-sm btn-light btn-flex btn-center btn-active-light-primary" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">Actions 
															<i class="ki-duotone ki-down fs-5 ms-1"></i></a>
															<!--begin::Menu-->
															<div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-semibold fs-7 w-125px py-4" data-kt-menu="true">
																<!--begin::Menu item-->
																<div class="menu-item px-3">
																	<a href="<?= url('/dw-admin/order-details') ?>" class="menu-link px-3">View</a>
																</div>
																<!--end::Menu item-->
																<!--begin::Menu item-->
																<div class="menu-item px-3">
																	<a href="<?= url('/dw-admin/edit-order') ?>" class="menu-link px-3">Edit</a>
																</div>
																<!--end::Menu item-->
																<!--begin::Menu item-->
																<div class="menu-item px-3">
																	<a href="#" class="menu-link px-3" data-kt-ecommerce-order-filter="delete_row">Delete</a>
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
														<td data-kt-ecommerce-order-filter="order_id">
															<a href="<?= url('/dw-admin/order-details') ?>" class="text-gray-800 text-hover-primary fw-bold">12785</a>
														</td>
														<td>
															<div class="d-flex align-items-center">
																<!--begin:: Avatar -->
																<div class="symbol symbol-circle symbol-50px overflow-hidden me-3">
																	<a href="<?= url('/dw-admin/customer-details') ?>">
																		<div class="symbol-label">
																			<img src="<?= url('/admin') ?>/assets/media/avatars/300-5.jpg" alt="Sean Bean" class="w-100" />
																		</div>
																	</a>
																</div>
																<!--end::Avatar-->
																<div class="ms-5">
																	<!--begin::Title-->
																	<a href="<?= url('/dw-admin/customer-details') ?>" class="text-gray-800 text-hover-primary fs-5 fw-bold">Sean Bean</a>
																	<!--end::Title-->
																</div>
															</div>
														</td>
														<td class="text-end pe-0" data-order="Completed">
															<!--begin::Badges-->
															<div class="badge badge-light-success">Completed</div>
															<!--end::Badges-->
														</td>
														<td class="text-end pe-0">
															<span class="fw-bold">$241.00</span>
														</td>
														<td class="text-end" data-order="2023-12-22">
															<span class="fw-bold">22/12/2023</span>
														</td>
														<td class="text-end" data-order="2023-12-25">
															<span class="fw-bold">25/12/2023</span>
														</td>
														<td class="text-end">
															<a href="#" class="btn btn-sm btn-light btn-flex btn-center btn-active-light-primary" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">Actions 
															<i class="ki-duotone ki-down fs-5 ms-1"></i></a>
															<!--begin::Menu-->
															<div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-semibold fs-7 w-125px py-4" data-kt-menu="true">
																<!--begin::Menu item-->
																<div class="menu-item px-3">
																	<a href="<?= url('/dw-admin/order-details') ?>" class="menu-link px-3">View</a>
																</div>
																<!--end::Menu item-->
																<!--begin::Menu item-->
																<div class="menu-item px-3">
																	<a href="<?= url('/dw-admin/edit-order') ?>" class="menu-link px-3">Edit</a>
																</div>
																<!--end::Menu item-->
																<!--begin::Menu item-->
																<div class="menu-item px-3">
																	<a href="#" class="menu-link px-3" data-kt-ecommerce-order-filter="delete_row">Delete</a>
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
														<td data-kt-ecommerce-order-filter="order_id">
															<a href="<?= url('/dw-admin/order-details') ?>" class="text-gray-800 text-hover-primary fw-bold">12786</a>
														</td>
														<td>
															<div class="d-flex align-items-center">
																<!--begin:: Avatar -->
																<div class="symbol symbol-circle symbol-50px overflow-hidden me-3">
																	<a href="<?= url('/dw-admin/customer-details') ?>">
																		<div class="symbol-label">
																			<img src="<?= url('/admin') ?>/assets/media/avatars/300-9.jpg" alt="Francis Mitcham" class="w-100" />
																		</div>
																	</a>
																</div>
																<!--end::Avatar-->
																<div class="ms-5">
																	<!--begin::Title-->
																	<a href="<?= url('/dw-admin/customer-details') ?>" class="text-gray-800 text-hover-primary fs-5 fw-bold">Francis Mitcham</a>
																	<!--end::Title-->
																</div>
															</div>
														</td>
														<td class="text-end pe-0" data-order="Completed">
															<!--begin::Badges-->
															<div class="badge badge-light-success">Completed</div>
															<!--end::Badges-->
														</td>
														<td class="text-end pe-0">
															<span class="fw-bold">$410.00</span>
														</td>
														<td class="text-end" data-order="2023-12-18">
															<span class="fw-bold">18/12/2023</span>
														</td>
														<td class="text-end" data-order="2023-12-24">
															<span class="fw-bold">24/12/2023</span>
														</td>
														<td class="text-end">
															<a href="#" class="btn btn-sm btn-light btn-flex btn-center btn-active-light-primary" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">Actions 
															<i class="ki-duotone ki-down fs-5 ms-1"></i></a>
															<!--begin::Menu-->
															<div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-semibold fs-7 w-125px py-4" data-kt-menu="true">
																<!--begin::Menu item-->
																<div class="menu-item px-3">
																	<a href="<?= url('/dw-admin/order-details') ?>" class="menu-link px-3">View</a>
																</div>
																<!--end::Menu item-->
																<!--begin::Menu item-->
																<div class="menu-item px-3">
																	<a href="<?= url('/dw-admin/edit-order') ?>" class="menu-link px-3">Edit</a>
																</div>
																<!--end::Menu item-->
																<!--begin::Menu item-->
																<div class="menu-item px-3">
																	<a href="#" class="menu-link px-3" data-kt-ecommerce-order-filter="delete_row">Delete</a>
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
														<td data-kt-ecommerce-order-filter="order_id">
															<a href="<?= url('/dw-admin/order-details') ?>" class="text-gray-800 text-hover-primary fw-bold">12787</a>
														</td>
														<td>
															<div class="d-flex align-items-center">
																<!--begin:: Avatar -->
																<div class="symbol symbol-circle symbol-50px overflow-hidden me-3">
																	<a href="<?= url('/dw-admin/customer-details') ?>">
																		<div class="symbol-label">
																			<img src="<?= url('/admin') ?>/assets/media/avatars/300-5.jpg" alt="Sean Bean" class="w-100" />
																		</div>
																	</a>
																</div>
																<!--end::Avatar-->
																<div class="ms-5">
																	<!--begin::Title-->
																	<a href="<?= url('/dw-admin/customer-details') ?>" class="text-gray-800 text-hover-primary fs-5 fw-bold">Sean Bean</a>
																	<!--end::Title-->
																</div>
															</div>
														</td>
														<td class="text-end pe-0" data-order="Completed">
															<!--begin::Badges-->
															<div class="badge badge-light-success">Completed</div>
															<!--end::Badges-->
														</td>
														<td class="text-end pe-0">
															<span class="fw-bold">$20.00</span>
														</td>
														<td class="text-end" data-order="2023-12-21">
															<span class="fw-bold">21/12/2023</span>
														</td>
														<td class="text-end" data-order="2023-12-23">
															<span class="fw-bold">23/12/2023</span>
														</td>
														<td class="text-end">
															<a href="#" class="btn btn-sm btn-light btn-flex btn-center btn-active-light-primary" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">Actions 
															<i class="ki-duotone ki-down fs-5 ms-1"></i></a>
															<!--begin::Menu-->
															<div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-semibold fs-7 w-125px py-4" data-kt-menu="true">
																<!--begin::Menu item-->
																<div class="menu-item px-3">
																	<a href="<?= url('/dw-admin/order-details') ?>" class="menu-link px-3">View</a>
																</div>
																<!--end::Menu item-->
																<!--begin::Menu item-->
																<div class="menu-item px-3">
																	<a href="<?= url('/dw-admin/edit-order') ?>" class="menu-link px-3">Edit</a>
																</div>
																<!--end::Menu item-->
																<!--begin::Menu item-->
																<div class="menu-item px-3">
																	<a href="#" class="menu-link px-3" data-kt-ecommerce-order-filter="delete_row">Delete</a>
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
														<td data-kt-ecommerce-order-filter="order_id">
															<a href="<?= url('/dw-admin/order-details') ?>" class="text-gray-800 text-hover-primary fw-bold">12788</a>
														</td>
														<td>
															<div class="d-flex align-items-center">
																<!--begin:: Avatar -->
																<div class="symbol symbol-circle symbol-50px overflow-hidden me-3">
																	<a href="<?= url('/dw-admin/customer-details') ?>">
																		<div class="symbol-label fs-3 bg-light-danger text-danger">M</div>
																	</a>
																</div>
																<!--end::Avatar-->
																<div class="ms-5">
																	<!--begin::Title-->
																	<a href="<?= url('/dw-admin/customer-details') ?>" class="text-gray-800 text-hover-primary fs-5 fw-bold">Melody Macy</a>
																	<!--end::Title-->
																</div>
															</div>
														</td>
														<td class="text-end pe-0" data-order="Failed">
															<!--begin::Badges-->
															<div class="badge badge-light-danger">Failed</div>
															<!--end::Badges-->
														</td>
														<td class="text-end pe-0">
															<span class="fw-bold">$289.00</span>
														</td>
														<td class="text-end" data-order="2023-12-18">
															<span class="fw-bold">18/12/2023</span>
														</td>
														<td class="text-end" data-order="2023-12-22">
															<span class="fw-bold">22/12/2023</span>
														</td>
														<td class="text-end">
															<a href="#" class="btn btn-sm btn-light btn-flex btn-center btn-active-light-primary" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">Actions 
															<i class="ki-duotone ki-down fs-5 ms-1"></i></a>
															<!--begin::Menu-->
															<div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-semibold fs-7 w-125px py-4" data-kt-menu="true">
																<!--begin::Menu item-->
																<div class="menu-item px-3">
																	<a href="<?= url('/dw-admin/order-details') ?>" class="menu-link px-3">View</a>
																</div>
																<!--end::Menu item-->
																<!--begin::Menu item-->
																<div class="menu-item px-3">
																	<a href="<?= url('/dw-admin/edit-order') ?>" class="menu-link px-3">Edit</a>
																</div>
																<!--end::Menu item-->
																<!--begin::Menu item-->
																<div class="menu-item px-3">
																	<a href="#" class="menu-link px-3" data-kt-ecommerce-order-filter="delete_row">Delete</a>
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
														<td data-kt-ecommerce-order-filter="order_id">
															<a href="<?= url('/dw-admin/order-details') ?>" class="text-gray-800 text-hover-primary fw-bold">12789</a>
														</td>
														<td>
															<div class="d-flex align-items-center">
																<!--begin:: Avatar -->
																<div class="symbol symbol-circle symbol-50px overflow-hidden me-3">
																	<a href="<?= url('/dw-admin/customer-details') ?>">
																		<div class="symbol-label">
																			<img src="<?= url('/admin') ?>/assets/media/avatars/300-12.jpg" alt="Ana Crown" class="w-100" />
																		</div>
																	</a>
																</div>
																<!--end::Avatar-->
																<div class="ms-5">
																	<!--begin::Title-->
																	<a href="<?= url('/dw-admin/customer-details') ?>" class="text-gray-800 text-hover-primary fs-5 fw-bold">Ana Crown</a>
																	<!--end::Title-->
																</div>
															</div>
														</td>
														<td class="text-end pe-0" data-order="Completed">
															<!--begin::Badges-->
															<div class="badge badge-light-success">Completed</div>
															<!--end::Badges-->
														</td>
														<td class="text-end pe-0">
															<span class="fw-bold">$355.00</span>
														</td>
														<td class="text-end" data-order="2023-12-20">
															<span class="fw-bold">20/12/2023</span>
														</td>
														<td class="text-end" data-order="2023-12-21">
															<span class="fw-bold">21/12/2023</span>
														</td>
														<td class="text-end">
															<a href="#" class="btn btn-sm btn-light btn-flex btn-center btn-active-light-primary" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">Actions 
															<i class="ki-duotone ki-down fs-5 ms-1"></i></a>
															<!--begin::Menu-->
															<div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-semibold fs-7 w-125px py-4" data-kt-menu="true">
																<!--begin::Menu item-->
																<div class="menu-item px-3">
																	<a href="<?= url('/dw-admin/order-details') ?>" class="menu-link px-3">View</a>
																</div>
																<!--end::Menu item-->
																<!--begin::Menu item-->
																<div class="menu-item px-3">
																	<a href="<?= url('/dw-admin/edit-order') ?>" class="menu-link px-3">Edit</a>
																</div>
																<!--end::Menu item-->
																<!--begin::Menu item-->
																<div class="menu-item px-3">
																	<a href="#" class="menu-link px-3" data-kt-ecommerce-order-filter="delete_row">Delete</a>
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
														<td data-kt-ecommerce-order-filter="order_id">
															<a href="<?= url('/dw-admin/order-details') ?>" class="text-gray-800 text-hover-primary fw-bold">12790</a>
														</td>
														<td>
															<div class="d-flex align-items-center">
																<!--begin:: Avatar -->
																<div class="symbol symbol-circle symbol-50px overflow-hidden me-3">
																	<a href="<?= url('/dw-admin/customer-details') ?>">
																		<div class="symbol-label">
																			<img src="<?= url('/admin') ?>/assets/media/avatars/300-21.jpg" alt="Ethan Wilder" class="w-100" />
																		</div>
																	</a>
																</div>
																<!--end::Avatar-->
																<div class="ms-5">
																	<!--begin::Title-->
																	<a href="<?= url('/dw-admin/customer-details') ?>" class="text-gray-800 text-hover-primary fs-5 fw-bold">Ethan Wilder</a>
																	<!--end::Title-->
																</div>
															</div>
														</td>
														<td class="text-end pe-0" data-order="Completed">
															<!--begin::Badges-->
															<div class="badge badge-light-success">Completed</div>
															<!--end::Badges-->
														</td>
														<td class="text-end pe-0">
															<span class="fw-bold">$32.00</span>
														</td>
														<td class="text-end" data-order="2023-12-17">
															<span class="fw-bold">17/12/2023</span>
														</td>
														<td class="text-end" data-order="2023-12-20">
															<span class="fw-bold">20/12/2023</span>
														</td>
														<td class="text-end">
															<a href="#" class="btn btn-sm btn-light btn-flex btn-center btn-active-light-primary" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">Actions 
															<i class="ki-duotone ki-down fs-5 ms-1"></i></a>
															<!--begin::Menu-->
															<div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-semibold fs-7 w-125px py-4" data-kt-menu="true">
																<!--begin::Menu item-->
																<div class="menu-item px-3">
																	<a href="<?= url('/dw-admin/order-details') ?>" class="menu-link px-3">View</a>
																</div>
																<!--end::Menu item-->
																<!--begin::Menu item-->
																<div class="menu-item px-3">
																	<a href="<?= url('/dw-admin/edit-order') ?>" class="menu-link px-3">Edit</a>
																</div>
																<!--end::Menu item-->
																<!--begin::Menu item-->
																<div class="menu-item px-3">
																	<a href="#" class="menu-link px-3" data-kt-ecommerce-order-filter="delete_row">Delete</a>
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
														<td data-kt-ecommerce-order-filter="order_id">
															<a href="<?= url('/dw-admin/order-details') ?>" class="text-gray-800 text-hover-primary fw-bold">12791</a>
														</td>
														<td>
															<div class="d-flex align-items-center">
																<!--begin:: Avatar -->
																<div class="symbol symbol-circle symbol-50px overflow-hidden me-3">
																	<a href="<?= url('/dw-admin/customer-details') ?>">
																		<div class="symbol-label fs-3 bg-light-primary text-primary">N</div>
																	</a>
																</div>
																<!--end::Avatar-->
																<div class="ms-5">
																	<!--begin::Title-->
																	<a href="<?= url('/dw-admin/customer-details') ?>" class="text-gray-800 text-hover-primary fs-5 fw-bold">Neil Owen</a>
																	<!--end::Title-->
																</div>
															</div>
														</td>
														<td class="text-end pe-0" data-order="Completed">
															<!--begin::Badges-->
															<div class="badge badge-light-success">Completed</div>
															<!--end::Badges-->
														</td>
														<td class="text-end pe-0">
															<span class="fw-bold">$131.00</span>
														</td>
														<td class="text-end" data-order="2023-12-16">
															<span class="fw-bold">16/12/2023</span>
														</td>
														<td class="text-end" data-order="2023-12-19">
															<span class="fw-bold">19/12/2023</span>
														</td>
														<td class="text-end">
															<a href="#" class="btn btn-sm btn-light btn-flex btn-center btn-active-light-primary" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">Actions 
															<i class="ki-duotone ki-down fs-5 ms-1"></i></a>
															<!--begin::Menu-->
															<div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-semibold fs-7 w-125px py-4" data-kt-menu="true">
																<!--begin::Menu item-->
																<div class="menu-item px-3">
																	<a href="<?= url('/dw-admin/order-details') ?>" class="menu-link px-3">View</a>
																</div>
																<!--end::Menu item-->
																<!--begin::Menu item-->
																<div class="menu-item px-3">
																	<a href="<?= url('/dw-admin/edit-order') ?>" class="menu-link px-3">Edit</a>
																</div>
																<!--end::Menu item-->
																<!--begin::Menu item-->
																<div class="menu-item px-3">
																	<a href="#" class="menu-link px-3" data-kt-ecommerce-order-filter="delete_row">Delete</a>
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
														<td data-kt-ecommerce-order-filter="order_id">
															<a href="<?= url('/dw-admin/order-details') ?>" class="text-gray-800 text-hover-primary fw-bold">12792</a>
														</td>
														<td>
															<div class="d-flex align-items-center">
																<!--begin:: Avatar -->
																<div class="symbol symbol-circle symbol-50px overflow-hidden me-3">
																	<a href="<?= url('/dw-admin/customer-details') ?>">
																		<div class="symbol-label">
																			<img src="<?= url('/admin') ?>/assets/media/avatars/300-25.jpg" alt="Brian Cox" class="w-100" />
																		</div>
																	</a>
																</div>
																<!--end::Avatar-->
																<div class="ms-5">
																	<!--begin::Title-->
																	<a href="<?= url('/dw-admin/customer-details') ?>" class="text-gray-800 text-hover-primary fs-5 fw-bold">Brian Cox</a>
																	<!--end::Title-->
																</div>
															</div>
														</td>
														<td class="text-end pe-0" data-order="Completed">
															<!--begin::Badges-->
															<div class="badge badge-light-success">Completed</div>
															<!--end::Badges-->
														</td>
														<td class="text-end pe-0">
															<span class="fw-bold">$369.00</span>
														</td>
														<td class="text-end" data-order="2023-12-11">
															<span class="fw-bold">11/12/2023</span>
														</td>
														<td class="text-end" data-order="2023-12-18">
															<span class="fw-bold">18/12/2023</span>
														</td>
														<td class="text-end">
															<a href="#" class="btn btn-sm btn-light btn-flex btn-center btn-active-light-primary" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">Actions 
															<i class="ki-duotone ki-down fs-5 ms-1"></i></a>
															<!--begin::Menu-->
															<div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-semibold fs-7 w-125px py-4" data-kt-menu="true">
																<!--begin::Menu item-->
																<div class="menu-item px-3">
																	<a href="<?= url('/dw-admin/order-details') ?>" class="menu-link px-3">View</a>
																</div>
																<!--end::Menu item-->
																<!--begin::Menu item-->
																<div class="menu-item px-3">
																	<a href="<?= url('/dw-admin/edit-order') ?>" class="menu-link px-3">Edit</a>
																</div>
																<!--end::Menu item-->
																<!--begin::Menu item-->
																<div class="menu-item px-3">
																	<a href="#" class="menu-link px-3" data-kt-ecommerce-order-filter="delete_row">Delete</a>
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
														<td data-kt-ecommerce-order-filter="order_id">
															<a href="<?= url('/dw-admin/order-details') ?>" class="text-gray-800 text-hover-primary fw-bold">12793</a>
														</td>
														<td>
															<div class="d-flex align-items-center">
																<!--begin:: Avatar -->
																<div class="symbol symbol-circle symbol-50px overflow-hidden me-3">
																	<a href="<?= url('/dw-admin/customer-details') ?>">
																		<div class="symbol-label fs-3 bg-light-info text-info">A</div>
																	</a>
																</div>
																<!--end::Avatar-->
																<div class="ms-5">
																	<!--begin::Title-->
																	<a href="<?= url('/dw-admin/customer-details') ?>" class="text-gray-800 text-hover-primary fs-5 fw-bold">Robert Doe</a>
																	<!--end::Title-->
																</div>
															</div>
														</td>
														<td class="text-end pe-0" data-order="Completed">
															<!--begin::Badges-->
															<div class="badge badge-light-success">Completed</div>
															<!--end::Badges-->
														</td>
														<td class="text-end pe-0">
															<span class="fw-bold">$398.00</span>
														</td>
														<td class="text-end" data-order="2023-12-11">
															<span class="fw-bold">11/12/2023</span>
														</td>
														<td class="text-end" data-order="2023-12-17">
															<span class="fw-bold">17/12/2023</span>
														</td>
														<td class="text-end">
															<a href="#" class="btn btn-sm btn-light btn-flex btn-center btn-active-light-primary" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">Actions 
															<i class="ki-duotone ki-down fs-5 ms-1"></i></a>
															<!--begin::Menu-->
															<div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-semibold fs-7 w-125px py-4" data-kt-menu="true">
																<!--begin::Menu item-->
																<div class="menu-item px-3">
																	<a href="<?= url('/dw-admin/order-details') ?>" class="menu-link px-3">View</a>
																</div>
																<!--end::Menu item-->
																<!--begin::Menu item-->
																<div class="menu-item px-3">
																	<a href="<?= url('/dw-admin/edit-order') ?>" class="menu-link px-3">Edit</a>
																</div>
																<!--end::Menu item-->
																<!--begin::Menu item-->
																<div class="menu-item px-3">
																	<a href="#" class="menu-link px-3" data-kt-ecommerce-order-filter="delete_row">Delete</a>
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
														<td data-kt-ecommerce-order-filter="order_id">
															<a href="<?= url('/dw-admin/order-details') ?>" class="text-gray-800 text-hover-primary fw-bold">12794</a>
														</td>
														<td>
															<div class="d-flex align-items-center">
																<!--begin:: Avatar -->
																<div class="symbol symbol-circle symbol-50px overflow-hidden me-3">
																	<a href="<?= url('/dw-admin/customer-details') ?>">
																		<div class="symbol-label">
																			<img src="<?= url('/admin') ?>/assets/media/avatars/300-12.jpg" alt="Ana Crown" class="w-100" />
																		</div>
																	</a>
																</div>
																<!--end::Avatar-->
																<div class="ms-5">
																	<!--begin::Title-->
																	<a href="<?= url('/dw-admin/customer-details') ?>" class="text-gray-800 text-hover-primary fs-5 fw-bold">Ana Crown</a>
																	<!--end::Title-->
																</div>
															</div>
														</td>
														<td class="text-end pe-0" data-order="Cancelled">
															<!--begin::Badges-->
															<div class="badge badge-light-danger">Cancelled</div>
															<!--end::Badges-->
														</td>
														<td class="text-end pe-0">
															<span class="fw-bold">$310.00</span>
														</td>
														<td class="text-end" data-order="2023-12-12">
															<span class="fw-bold">12/12/2023</span>
														</td>
														<td class="text-end" data-order="2023-12-16">
															<span class="fw-bold">16/12/2023</span>
														</td>
														<td class="text-end">
															<a href="#" class="btn btn-sm btn-light btn-flex btn-center btn-active-light-primary" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">Actions 
															<i class="ki-duotone ki-down fs-5 ms-1"></i></a>
															<!--begin::Menu-->
															<div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-semibold fs-7 w-125px py-4" data-kt-menu="true">
																<!--begin::Menu item-->
																<div class="menu-item px-3">
																	<a href="<?= url('/dw-admin/order-details') ?>" class="menu-link px-3">View</a>
																</div>
																<!--end::Menu item-->
																<!--begin::Menu item-->
																<div class="menu-item px-3">
																	<a href="<?= url('/dw-admin/edit-order') ?>" class="menu-link px-3">Edit</a>
																</div>
																<!--end::Menu item-->
																<!--begin::Menu item-->
																<div class="menu-item px-3">
																	<a href="#" class="menu-link px-3" data-kt-ecommerce-order-filter="delete_row">Delete</a>
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
														<td data-kt-ecommerce-order-filter="order_id">
															<a href="<?= url('/dw-admin/order-details') ?>" class="text-gray-800 text-hover-primary fw-bold">12795</a>
														</td>
														<td>
															<div class="d-flex align-items-center">
																<!--begin:: Avatar -->
																<div class="symbol symbol-circle symbol-50px overflow-hidden me-3">
																	<a href="<?= url('/dw-admin/customer-details') ?>">
																		<div class="symbol-label">
																			<img src="<?= url('/admin') ?>/assets/media/avatars/300-12.jpg" alt="Ana Crown" class="w-100" />
																		</div>
																	</a>
																</div>
																<!--end::Avatar-->
																<div class="ms-5">
																	<!--begin::Title-->
																	<a href="<?= url('/dw-admin/customer-details') ?>" class="text-gray-800 text-hover-primary fs-5 fw-bold">Ana Crown</a>
																	<!--end::Title-->
																</div>
															</div>
														</td>
														<td class="text-end pe-0" data-order="Completed">
															<!--begin::Badges-->
															<div class="badge badge-light-success">Completed</div>
															<!--end::Badges-->
														</td>
														<td class="text-end pe-0">
															<span class="fw-bold">$235.00</span>
														</td>
														<td class="text-end" data-order="2023-12-11">
															<span class="fw-bold">11/12/2023</span>
														</td>
														<td class="text-end" data-order="2023-12-15">
															<span class="fw-bold">15/12/2023</span>
														</td>
														<td class="text-end">
															<a href="#" class="btn btn-sm btn-light btn-flex btn-center btn-active-light-primary" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">Actions 
															<i class="ki-duotone ki-down fs-5 ms-1"></i></a>
															<!--begin::Menu-->
															<div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-semibold fs-7 w-125px py-4" data-kt-menu="true">
																<!--begin::Menu item-->
																<div class="menu-item px-3">
																	<a href="<?= url('/dw-admin/order-details') ?>" class="menu-link px-3">View</a>
																</div>
																<!--end::Menu item-->
																<!--begin::Menu item-->
																<div class="menu-item px-3">
																	<a href="<?= url('/dw-admin/edit-order') ?>" class="menu-link px-3">Edit</a>
																</div>
																<!--end::Menu item-->
																<!--begin::Menu item-->
																<div class="menu-item px-3">
																	<a href="#" class="menu-link px-3" data-kt-ecommerce-order-filter="delete_row">Delete</a>
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
														<td data-kt-ecommerce-order-filter="order_id">
															<a href="<?= url('/dw-admin/order-details') ?>" class="text-gray-800 text-hover-primary fw-bold">12796</a>
														</td>
														<td>
															<div class="d-flex align-items-center">
																<!--begin:: Avatar -->
																<div class="symbol symbol-circle symbol-50px overflow-hidden me-3">
																	<a href="<?= url('/dw-admin/customer-details') ?>">
																		<div class="symbol-label">
																			<img src="<?= url('/admin') ?>/assets/media/avatars/300-23.jpg" alt="Dan Wilson" class="w-100" />
																		</div>
																	</a>
																</div>
																<!--end::Avatar-->
																<div class="ms-5">
																	<!--begin::Title-->
																	<a href="<?= url('/dw-admin/customer-details') ?>" class="text-gray-800 text-hover-primary fs-5 fw-bold">Dan Wilson</a>
																	<!--end::Title-->
																</div>
															</div>
														</td>
														<td class="text-end pe-0" data-order="Completed">
															<!--begin::Badges-->
															<div class="badge badge-light-success">Completed</div>
															<!--end::Badges-->
														</td>
														<td class="text-end pe-0">
															<span class="fw-bold">$197.00</span>
														</td>
														<td class="text-end" data-order="2023-12-07">
															<span class="fw-bold">07/12/2023</span>
														</td>
														<td class="text-end" data-order="2023-12-14">
															<span class="fw-bold">14/12/2023</span>
														</td>
														<td class="text-end">
															<a href="#" class="btn btn-sm btn-light btn-flex btn-center btn-active-light-primary" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">Actions 
															<i class="ki-duotone ki-down fs-5 ms-1"></i></a>
															<!--begin::Menu-->
															<div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-semibold fs-7 w-125px py-4" data-kt-menu="true">
																<!--begin::Menu item-->
																<div class="menu-item px-3">
																	<a href="<?= url('/dw-admin/order-details') ?>" class="menu-link px-3">View</a>
																</div>
																<!--end::Menu item-->
																<!--begin::Menu item-->
																<div class="menu-item px-3">
																	<a href="<?= url('/dw-admin/edit-order') ?>" class="menu-link px-3">Edit</a>
																</div>
																<!--end::Menu item-->
																<!--begin::Menu item-->
																<div class="menu-item px-3">
																	<a href="#" class="menu-link px-3" data-kt-ecommerce-order-filter="delete_row">Delete</a>
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
														<td data-kt-ecommerce-order-filter="order_id">
															<a href="<?= url('/dw-admin/order-details') ?>" class="text-gray-800 text-hover-primary fw-bold">12797</a>
														</td>
														<td>
															<div class="d-flex align-items-center">
																<!--begin:: Avatar -->
																<div class="symbol symbol-circle symbol-50px overflow-hidden me-3">
																	<a href="<?= url('/dw-admin/customer-details') ?>">
																		<div class="symbol-label">
																			<img src="<?= url('/admin') ?>/assets/media/avatars/300-25.jpg" alt="Brian Cox" class="w-100" />
																		</div>
																	</a>
																</div>
																<!--end::Avatar-->
																<div class="ms-5">
																	<!--begin::Title-->
																	<a href="<?= url('/dw-admin/customer-details') ?>" class="text-gray-800 text-hover-primary fs-5 fw-bold">Brian Cox</a>
																	<!--end::Title-->
																</div>
															</div>
														</td>
														<td class="text-end pe-0" data-order="Delivering">
															<!--begin::Badges-->
															<div class="badge badge-light-primary">Delivering</div>
															<!--end::Badges-->
														</td>
														<td class="text-end pe-0">
															<span class="fw-bold">$291.00</span>
														</td>
														<td class="text-end" data-order="2023-12-11">
															<span class="fw-bold">11/12/2023</span>
														</td>
														<td class="text-end" data-order="2023-12-13">
															<span class="fw-bold">13/12/2023</span>
														</td>
														<td class="text-end">
															<a href="#" class="btn btn-sm btn-light btn-flex btn-center btn-active-light-primary" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">Actions 
															<i class="ki-duotone ki-down fs-5 ms-1"></i></a>
															<!--begin::Menu-->
															<div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-semibold fs-7 w-125px py-4" data-kt-menu="true">
																<!--begin::Menu item-->
																<div class="menu-item px-3">
																	<a href="<?= url('/dw-admin/order-details') ?>" class="menu-link px-3">View</a>
																</div>
																<!--end::Menu item-->
																<!--begin::Menu item-->
																<div class="menu-item px-3">
																	<a href="<?= url('/dw-admin/edit-order') ?>" class="menu-link px-3">Edit</a>
																</div>
																<!--end::Menu item-->
																<!--begin::Menu item-->
																<div class="menu-item px-3">
																	<a href="#" class="menu-link px-3" data-kt-ecommerce-order-filter="delete_row">Delete</a>
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
														<td data-kt-ecommerce-order-filter="order_id">
															<a href="<?= url('/dw-admin/order-details') ?>" class="text-gray-800 text-hover-primary fw-bold">12798</a>
														</td>
														<td>
															<div class="d-flex align-items-center">
																<!--begin:: Avatar -->
																<div class="symbol symbol-circle symbol-50px overflow-hidden me-3">
																	<a href="<?= url('/dw-admin/customer-details') ?>">
																		<div class="symbol-label">
																			<img src="<?= url('/admin') ?>/assets/media/avatars/300-5.jpg" alt="Sean Bean" class="w-100" />
																		</div>
																	</a>
																</div>
																<!--end::Avatar-->
																<div class="ms-5">
																	<!--begin::Title-->
																	<a href="<?= url('/dw-admin/customer-details') ?>" class="text-gray-800 text-hover-primary fs-5 fw-bold">Sean Bean</a>
																	<!--end::Title-->
																</div>
															</div>
														</td>
														<td class="text-end pe-0" data-order="Completed">
															<!--begin::Badges-->
															<div class="badge badge-light-success">Completed</div>
															<!--end::Badges-->
														</td>
														<td class="text-end pe-0">
															<span class="fw-bold">$169.00</span>
														</td>
														<td class="text-end" data-order="2023-12-08">
															<span class="fw-bold">08/12/2023</span>
														</td>
														<td class="text-end" data-order="2023-12-12">
															<span class="fw-bold">12/12/2023</span>
														</td>
														<td class="text-end">
															<a href="#" class="btn btn-sm btn-light btn-flex btn-center btn-active-light-primary" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">Actions 
															<i class="ki-duotone ki-down fs-5 ms-1"></i></a>
															<!--begin::Menu-->
															<div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-semibold fs-7 w-125px py-4" data-kt-menu="true">
																<!--begin::Menu item-->
																<div class="menu-item px-3">
																	<a href="<?= url('/dw-admin/order-details') ?>" class="menu-link px-3">View</a>
																</div>
																<!--end::Menu item-->
																<!--begin::Menu item-->
																<div class="menu-item px-3">
																	<a href="<?= url('/dw-admin/edit-order') ?>" class="menu-link px-3">Edit</a>
																</div>
																<!--end::Menu item-->
																<!--begin::Menu item-->
																<div class="menu-item px-3">
																	<a href="#" class="menu-link px-3" data-kt-ecommerce-order-filter="delete_row">Delete</a>
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
														<td data-kt-ecommerce-order-filter="order_id">
															<a href="<?= url('/dw-admin/order-details') ?>" class="text-gray-800 text-hover-primary fw-bold">12799</a>
														</td>
														<td>
															<div class="d-flex align-items-center">
																<!--begin:: Avatar -->
																<div class="symbol symbol-circle symbol-50px overflow-hidden me-3">
																	<a href="<?= url('/dw-admin/customer-details') ?>">
																		<div class="symbol-label fs-3 bg-light-warning text-warning">C</div>
																	</a>
																</div>
																<!--end::Avatar-->
																<div class="ms-5">
																	<!--begin::Title-->
																	<a href="<?= url('/dw-admin/customer-details') ?>" class="text-gray-800 text-hover-primary fs-5 fw-bold">Mikaela Collins</a>
																	<!--end::Title-->
																</div>
															</div>
														</td>
														<td class="text-end pe-0" data-order="Completed">
															<!--begin::Badges-->
															<div class="badge badge-light-success">Completed</div>
															<!--end::Badges-->
														</td>
														<td class="text-end pe-0">
															<span class="fw-bold">$389.00</span>
														</td>
														<td class="text-end" data-order="2023-12-10">
															<span class="fw-bold">10/12/2023</span>
														</td>
														<td class="text-end" data-order="2023-12-11">
															<span class="fw-bold">11/12/2023</span>
														</td>
														<td class="text-end">
															<a href="#" class="btn btn-sm btn-light btn-flex btn-center btn-active-light-primary" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">Actions 
															<i class="ki-duotone ki-down fs-5 ms-1"></i></a>
															<!--begin::Menu-->
															<div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-semibold fs-7 w-125px py-4" data-kt-menu="true">
																<!--begin::Menu item-->
																<div class="menu-item px-3">
																	<a href="<?= url('/dw-admin/order-details') ?>" class="menu-link px-3">View</a>
																</div>
																<!--end::Menu item-->
																<!--begin::Menu item-->
																<div class="menu-item px-3">
																	<a href="<?= url('/dw-admin/edit-order') ?>" class="menu-link px-3">Edit</a>
																</div>
																<!--end::Menu item-->
																<!--begin::Menu item-->
																<div class="menu-item px-3">
																	<a href="#" class="menu-link px-3" data-kt-ecommerce-order-filter="delete_row">Delete</a>
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
														<td data-kt-ecommerce-order-filter="order_id">
															<a href="<?= url('/dw-admin/order-details') ?>" class="text-gray-800 text-hover-primary fw-bold">12800</a>
														</td>
														<td>
															<div class="d-flex align-items-center">
																<!--begin:: Avatar -->
																<div class="symbol symbol-circle symbol-50px overflow-hidden me-3">
																	<a href="<?= url('/dw-admin/customer-details') ?>">
																		<div class="symbol-label">
																			<img src="<?= url('/admin') ?>/assets/media/avatars/300-5.jpg" alt="Sean Bean" class="w-100" />
																		</div>
																	</a>
																</div>
																<!--end::Avatar-->
																<div class="ms-5">
																	<!--begin::Title-->
																	<a href="<?= url('/dw-admin/customer-details') ?>" class="text-gray-800 text-hover-primary fs-5 fw-bold">Sean Bean</a>
																	<!--end::Title-->
																</div>
															</div>
														</td>
														<td class="text-end pe-0" data-order="Completed">
															<!--begin::Badges-->
															<div class="badge badge-light-success">Completed</div>
															<!--end::Badges-->
														</td>
														<td class="text-end pe-0">
															<span class="fw-bold">$240.00</span>
														</td>
														<td class="text-end" data-order="2023-12-04">
															<span class="fw-bold">04/12/2023</span>
														</td>
														<td class="text-end" data-order="2023-12-10">
															<span class="fw-bold">10/12/2023</span>
														</td>
														<td class="text-end">
															<a href="#" class="btn btn-sm btn-light btn-flex btn-center btn-active-light-primary" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">Actions 
															<i class="ki-duotone ki-down fs-5 ms-1"></i></a>
															<!--begin::Menu-->
															<div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-semibold fs-7 w-125px py-4" data-kt-menu="true">
																<!--begin::Menu item-->
																<div class="menu-item px-3">
																	<a href="<?= url('/dw-admin/order-details') ?>" class="menu-link px-3">View</a>
																</div>
																<!--end::Menu item-->
																<!--begin::Menu item-->
																<div class="menu-item px-3">
																	<a href="<?= url('/dw-admin/edit-order') ?>" class="menu-link px-3">Edit</a>
																</div>
																<!--end::Menu item-->
																<!--begin::Menu item-->
																<div class="menu-item px-3">
																	<a href="#" class="menu-link px-3" data-kt-ecommerce-order-filter="delete_row">Delete</a>
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
														<td data-kt-ecommerce-order-filter="order_id">
															<a href="<?= url('/dw-admin/order-details') ?>" class="text-gray-800 text-hover-primary fw-bold">12801</a>
														</td>
														<td>
															<div class="d-flex align-items-center">
																<!--begin:: Avatar -->
																<div class="symbol symbol-circle symbol-50px overflow-hidden me-3">
																	<a href="<?= url('/dw-admin/customer-details') ?>">
																		<div class="symbol-label">
																			<img src="<?= url('/admin') ?>/assets/media/avatars/300-23.jpg" alt="Dan Wilson" class="w-100" />
																		</div>
																	</a>
																</div>
																<!--end::Avatar-->
																<div class="ms-5">
																	<!--begin::Title-->
																	<a href="<?= url('/dw-admin/customer-details') ?>" class="text-gray-800 text-hover-primary fs-5 fw-bold">Dan Wilson</a>
																	<!--end::Title-->
																</div>
															</div>
														</td>
														<td class="text-end pe-0" data-order="Cancelled">
															<!--begin::Badges-->
															<div class="badge badge-light-danger">Cancelled</div>
															<!--end::Badges-->
														</td>
														<td class="text-end pe-0">
															<span class="fw-bold">$204.00</span>
														</td>
														<td class="text-end" data-order="2023-12-04">
															<span class="fw-bold">04/12/2023</span>
														</td>
														<td class="text-end" data-order="2023-12-09">
															<span class="fw-bold">09/12/2023</span>
														</td>
														<td class="text-end">
															<a href="#" class="btn btn-sm btn-light btn-flex btn-center btn-active-light-primary" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">Actions 
															<i class="ki-duotone ki-down fs-5 ms-1"></i></a>
															<!--begin::Menu-->
															<div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-semibold fs-7 w-125px py-4" data-kt-menu="true">
																<!--begin::Menu item-->
																<div class="menu-item px-3">
																	<a href="<?= url('/dw-admin/order-details') ?>" class="menu-link px-3">View</a>
																</div>
																<!--end::Menu item-->
																<!--begin::Menu item-->
																<div class="menu-item px-3">
																	<a href="<?= url('/dw-admin/edit-order') ?>" class="menu-link px-3">Edit</a>
																</div>
																<!--end::Menu item-->
																<!--begin::Menu item-->
																<div class="menu-item px-3">
																	<a href="#" class="menu-link px-3" data-kt-ecommerce-order-filter="delete_row">Delete</a>
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
														<td data-kt-ecommerce-order-filter="order_id">
															<a href="<?= url('/dw-admin/order-details') ?>" class="text-gray-800 text-hover-primary fw-bold">12802</a>
														</td>
														<td>
															<div class="d-flex align-items-center">
																<!--begin:: Avatar -->
																<div class="symbol symbol-circle symbol-50px overflow-hidden me-3">
																	<a href="<?= url('/dw-admin/customer-details') ?>">
																		<div class="symbol-label">
																			<img src="<?= url('/admin') ?>/assets/media/avatars/300-23.jpg" alt="Dan Wilson" class="w-100" />
																		</div>
																	</a>
																</div>
																<!--end::Avatar-->
																<div class="ms-5">
																	<!--begin::Title-->
																	<a href="<?= url('/dw-admin/customer-details') ?>" class="text-gray-800 text-hover-primary fs-5 fw-bold">Dan Wilson</a>
																	<!--end::Title-->
																</div>
															</div>
														</td>
														<td class="text-end pe-0" data-order="Denied">
															<!--begin::Badges-->
															<div class="badge badge-light-danger">Denied</div>
															<!--end::Badges-->
														</td>
														<td class="text-end pe-0">
															<span class="fw-bold">$105.00</span>
														</td>
														<td class="text-end" data-order="2023-12-01">
															<span class="fw-bold">01/12/2023</span>
														</td>
														<td class="text-end" data-order="2023-12-08">
															<span class="fw-bold">08/12/2023</span>
														</td>
														<td class="text-end">
															<a href="#" class="btn btn-sm btn-light btn-flex btn-center btn-active-light-primary" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">Actions 
															<i class="ki-duotone ki-down fs-5 ms-1"></i></a>
															<!--begin::Menu-->
															<div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-semibold fs-7 w-125px py-4" data-kt-menu="true">
																<!--begin::Menu item-->
																<div class="menu-item px-3">
																	<a href="<?= url('/dw-admin/order-details') ?>" class="menu-link px-3">View</a>
																</div>
																<!--end::Menu item-->
																<!--begin::Menu item-->
																<div class="menu-item px-3">
																	<a href="<?= url('/dw-admin/edit-order') ?>" class="menu-link px-3">Edit</a>
																</div>
																<!--end::Menu item-->
																<!--begin::Menu item-->
																<div class="menu-item px-3">
																	<a href="#" class="menu-link px-3" data-kt-ecommerce-order-filter="delete_row">Delete</a>
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
														<td data-kt-ecommerce-order-filter="order_id">
															<a href="<?= url('/dw-admin/order-details') ?>" class="text-gray-800 text-hover-primary fw-bold">12803</a>
														</td>
														<td>
															<div class="d-flex align-items-center">
																<!--begin:: Avatar -->
																<div class="symbol symbol-circle symbol-50px overflow-hidden me-3">
																	<a href="<?= url('/dw-admin/customer-details') ?>">
																		<div class="symbol-label fs-3 bg-light-primary text-primary">N</div>
																	</a>
																</div>
																<!--end::Avatar-->
																<div class="ms-5">
																	<!--begin::Title-->
																	<a href="<?= url('/dw-admin/customer-details') ?>" class="text-gray-800 text-hover-primary fs-5 fw-bold">Neil Owen</a>
																	<!--end::Title-->
																</div>
															</div>
														</td>
														<td class="text-end pe-0" data-order="Refunded">
															<!--begin::Badges-->
															<div class="badge badge-light-info">Refunded</div>
															<!--end::Badges-->
														</td>
														<td class="text-end pe-0">
															<span class="fw-bold">$131.00</span>
														</td>
														<td class="text-end" data-order="2023-12-01">
															<span class="fw-bold">01/12/2023</span>
														</td>
														<td class="text-end" data-order="2023-12-07">
															<span class="fw-bold">07/12/2023</span>
														</td>
														<td class="text-end">
															<a href="#" class="btn btn-sm btn-light btn-flex btn-center btn-active-light-primary" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">Actions 
															<i class="ki-duotone ki-down fs-5 ms-1"></i></a>
															<!--begin::Menu-->
															<div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-semibold fs-7 w-125px py-4" data-kt-menu="true">
																<!--begin::Menu item-->
																<div class="menu-item px-3">
																	<a href="<?= url('/dw-admin/order-details') ?>" class="menu-link px-3">View</a>
																</div>
																<!--end::Menu item-->
																<!--begin::Menu item-->
																<div class="menu-item px-3">
																	<a href="<?= url('/dw-admin/edit-order') ?>" class="menu-link px-3">Edit</a>
																</div>
																<!--end::Menu item-->
																<!--begin::Menu item-->
																<div class="menu-item px-3">
																	<a href="#" class="menu-link px-3" data-kt-ecommerce-order-filter="delete_row">Delete</a>
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
														<td data-kt-ecommerce-order-filter="order_id">
															<a href="<?= url('/dw-admin/order-details') ?>" class="text-gray-800 text-hover-primary fw-bold">12804</a>
														</td>
														<td>
															<div class="d-flex align-items-center">
																<!--begin:: Avatar -->
																<div class="symbol symbol-circle symbol-50px overflow-hidden me-3">
																	<a href="<?= url('/dw-admin/customer-details') ?>">
																		<div class="symbol-label">
																			<img src="<?= url('/admin') ?>/assets/media/avatars/300-21.jpg" alt="Ethan Wilder" class="w-100" />
																		</div>
																	</a>
																</div>
																<!--end::Avatar-->
																<div class="ms-5">
																	<!--begin::Title-->
																	<a href="<?= url('/dw-admin/customer-details') ?>" class="text-gray-800 text-hover-primary fs-5 fw-bold">Ethan Wilder</a>
																	<!--end::Title-->
																</div>
															</div>
														</td>
														<td class="text-end pe-0" data-order="Expired">
															<!--begin::Badges-->
															<div class="badge badge-light-danger">Expired</div>
															<!--end::Badges-->
														</td>
														<td class="text-end pe-0">
															<span class="fw-bold">$470.00</span>
														</td>
														<td class="text-end" data-order="2023-12-04">
															<span class="fw-bold">04/12/2023</span>
														</td>
														<td class="text-end" data-order="2023-12-06">
															<span class="fw-bold">06/12/2023</span>
														</td>
														<td class="text-end">
															<a href="#" class="btn btn-sm btn-light btn-flex btn-center btn-active-light-primary" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">Actions 
															<i class="ki-duotone ki-down fs-5 ms-1"></i></a>
															<!--begin::Menu-->
															<div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-semibold fs-7 w-125px py-4" data-kt-menu="true">
																<!--begin::Menu item-->
																<div class="menu-item px-3">
																	<a href="<?= url('/dw-admin/order-details') ?>" class="menu-link px-3">View</a>
																</div>
																<!--end::Menu item-->
																<!--begin::Menu item-->
																<div class="menu-item px-3">
																	<a href="<?= url('/dw-admin/edit-order') ?>" class="menu-link px-3">Edit</a>
																</div>
																<!--end::Menu item-->
																<!--begin::Menu item-->
																<div class="menu-item px-3">
																	<a href="#" class="menu-link px-3" data-kt-ecommerce-order-filter="delete_row">Delete</a>
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
														<td data-kt-ecommerce-order-filter="order_id">
															<a href="<?= url('/dw-admin/order-details') ?>" class="text-gray-800 text-hover-primary fw-bold">12805</a>
														</td>
														<td>
															<div class="d-flex align-items-center">
																<!--begin:: Avatar -->
																<div class="symbol symbol-circle symbol-50px overflow-hidden me-3">
																	<a href="<?= url('/dw-admin/customer-details') ?>">
																		<div class="symbol-label">
																			<img src="<?= url('/admin') ?>/assets/media/avatars/300-13.jpg" alt="John Miller" class="w-100" />
																		</div>
																	</a>
																</div>
																<!--end::Avatar-->
																<div class="ms-5">
																	<!--begin::Title-->
																	<a href="<?= url('/dw-admin/customer-details') ?>" class="text-gray-800 text-hover-primary fs-5 fw-bold">John Miller</a>
																	<!--end::Title-->
																</div>
															</div>
														</td>
														<td class="text-end pe-0" data-order="Completed">
															<!--begin::Badges-->
															<div class="badge badge-light-success">Completed</div>
															<!--end::Badges-->
														</td>
														<td class="text-end pe-0">
															<span class="fw-bold">$264.00</span>
														</td>
														<td class="text-end" data-order="2023-11-30">
															<span class="fw-bold">30/11/2023</span>
														</td>
														<td class="text-end" data-order="2023-12-05">
															<span class="fw-bold">05/12/2023</span>
														</td>
														<td class="text-end">
															<a href="#" class="btn btn-sm btn-light btn-flex btn-center btn-active-light-primary" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">Actions 
															<i class="ki-duotone ki-down fs-5 ms-1"></i></a>
															<!--begin::Menu-->
															<div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-semibold fs-7 w-125px py-4" data-kt-menu="true">
																<!--begin::Menu item-->
																<div class="menu-item px-3">
																	<a href="<?= url('/dw-admin/order-details') ?>" class="menu-link px-3">View</a>
																</div>
																<!--end::Menu item-->
																<!--begin::Menu item-->
																<div class="menu-item px-3">
																	<a href="<?= url('/dw-admin/edit-order') ?>" class="menu-link px-3">Edit</a>
																</div>
																<!--end::Menu item-->
																<!--begin::Menu item-->
																<div class="menu-item px-3">
																	<a href="#" class="menu-link px-3" data-kt-ecommerce-order-filter="delete_row">Delete</a>
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
														<td data-kt-ecommerce-order-filter="order_id">
															<a href="<?= url('/dw-admin/order-details') ?>" class="text-gray-800 text-hover-primary fw-bold">12806</a>
														</td>
														<td>
															<div class="d-flex align-items-center">
																<!--begin:: Avatar -->
																<div class="symbol symbol-circle symbol-50px overflow-hidden me-3">
																	<a href="<?= url('/dw-admin/customer-details') ?>">
																		<div class="symbol-label fs-3 bg-light-danger text-danger">E</div>
																	</a>
																</div>
																<!--end::Avatar-->
																<div class="ms-5">
																	<!--begin::Title-->
																	<a href="<?= url('/dw-admin/customer-details') ?>" class="text-gray-800 text-hover-primary fs-5 fw-bold">Emma Bold</a>
																	<!--end::Title-->
																</div>
															</div>
														</td>
														<td class="text-end pe-0" data-order="Completed">
															<!--begin::Badges-->
															<div class="badge badge-light-success">Completed</div>
															<!--end::Badges-->
														</td>
														<td class="text-end pe-0">
															<span class="fw-bold">$470.00</span>
														</td>
														<td class="text-end" data-order="2023-11-30">
															<span class="fw-bold">30/11/2023</span>
														</td>
														<td class="text-end" data-order="2023-12-04">
															<span class="fw-bold">04/12/2023</span>
														</td>
														<td class="text-end">
															<a href="#" class="btn btn-sm btn-light btn-flex btn-center btn-active-light-primary" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">Actions 
															<i class="ki-duotone ki-down fs-5 ms-1"></i></a>
															<!--begin::Menu-->
															<div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-semibold fs-7 w-125px py-4" data-kt-menu="true">
																<!--begin::Menu item-->
																<div class="menu-item px-3">
																	<a href="<?= url('/dw-admin/order-details') ?>" class="menu-link px-3">View</a>
																</div>
																<!--end::Menu item-->
																<!--begin::Menu item-->
																<div class="menu-item px-3">
																	<a href="<?= url('/dw-admin/edit-order') ?>" class="menu-link px-3">Edit</a>
																</div>
																<!--end::Menu item-->
																<!--begin::Menu item-->
																<div class="menu-item px-3">
																	<a href="#" class="menu-link px-3" data-kt-ecommerce-order-filter="delete_row">Delete</a>
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
														<td data-kt-ecommerce-order-filter="order_id">
															<a href="<?= url('/dw-admin/order-details') ?>" class="text-gray-800 text-hover-primary fw-bold">12807</a>
														</td>
														<td>
															<div class="d-flex align-items-center">
																<!--begin:: Avatar -->
																<div class="symbol symbol-circle symbol-50px overflow-hidden me-3">
																	<a href="<?= url('/dw-admin/customer-details') ?>">
																		<div class="symbol-label fs-3 bg-light-danger text-danger">O</div>
																	</a>
																</div>
																<!--end::Avatar-->
																<div class="ms-5">
																	<!--begin::Title-->
																	<a href="<?= url('/dw-admin/customer-details') ?>" class="text-gray-800 text-hover-primary fs-5 fw-bold">Olivia Wild</a>
																	<!--end::Title-->
																</div>
															</div>
														</td>
														<td class="text-end pe-0" data-order="Completed">
															<!--begin::Badges-->
															<div class="badge badge-light-success">Completed</div>
															<!--end::Badges-->
														</td>
														<td class="text-end pe-0">
															<span class="fw-bold">$284.00</span>
														</td>
														<td class="text-end" data-order="2023-11-30">
															<span class="fw-bold">30/11/2023</span>
														</td>
														<td class="text-end" data-order="2023-12-03">
															<span class="fw-bold">03/12/2023</span>
														</td>
														<td class="text-end">
															<a href="#" class="btn btn-sm btn-light btn-flex btn-center btn-active-light-primary" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">Actions 
															<i class="ki-duotone ki-down fs-5 ms-1"></i></a>
															<!--begin::Menu-->
															<div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-semibold fs-7 w-125px py-4" data-kt-menu="true">
																<!--begin::Menu item-->
																<div class="menu-item px-3">
																	<a href="<?= url('/dw-admin/order-details') ?>" class="menu-link px-3">View</a>
																</div>
																<!--end::Menu item-->
																<!--begin::Menu item-->
																<div class="menu-item px-3">
																	<a href="<?= url('/dw-admin/edit-order') ?>" class="menu-link px-3">Edit</a>
																</div>
																<!--end::Menu item-->
																<!--begin::Menu item-->
																<div class="menu-item px-3">
																	<a href="#" class="menu-link px-3" data-kt-ecommerce-order-filter="delete_row">Delete</a>
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
														<td data-kt-ecommerce-order-filter="order_id">
															<a href="<?= url('/dw-admin/order-details') ?>" class="text-gray-800 text-hover-primary fw-bold">12808</a>
														</td>
														<td>
															<div class="d-flex align-items-center">
																<!--begin:: Avatar -->
																<div class="symbol symbol-circle symbol-50px overflow-hidden me-3">
																	<a href="<?= url('/dw-admin/customer-details') ?>">
																		<div class="symbol-label">
																			<img src="<?= url('/admin') ?>/assets/media/avatars/300-1.jpg" alt="Max Smith" class="w-100" />
																		</div>
																	</a>
																</div>
																<!--end::Avatar-->
																<div class="ms-5">
																	<!--begin::Title-->
																	<a href="<?= url('/dw-admin/customer-details') ?>" class="text-gray-800 text-hover-primary fs-5 fw-bold">Max Smith</a>
																	<!--end::Title-->
																</div>
															</div>
														</td>
														<td class="text-end pe-0" data-order="Pending">
															<!--begin::Badges-->
															<div class="badge badge-light-warning">Pending</div>
															<!--end::Badges-->
														</td>
														<td class="text-end pe-0">
															<span class="fw-bold">$86.00</span>
														</td>
														<td class="text-end" data-order="2023-11-27">
															<span class="fw-bold">27/11/2023</span>
														</td>
														<td class="text-end" data-order="2023-12-02">
															<span class="fw-bold">02/12/2023</span>
														</td>
														<td class="text-end">
															<a href="#" class="btn btn-sm btn-light btn-flex btn-center btn-active-light-primary" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">Actions 
															<i class="ki-duotone ki-down fs-5 ms-1"></i></a>
															<!--begin::Menu-->
															<div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-semibold fs-7 w-125px py-4" data-kt-menu="true">
																<!--begin::Menu item-->
																<div class="menu-item px-3">
																	<a href="<?= url('/dw-admin/order-details') ?>" class="menu-link px-3">View</a>
																</div>
																<!--end::Menu item-->
																<!--begin::Menu item-->
																<div class="menu-item px-3">
																	<a href="<?= url('/dw-admin/edit-order') ?>" class="menu-link px-3">Edit</a>
																</div>
																<!--end::Menu item-->
																<!--begin::Menu item-->
																<div class="menu-item px-3">
																	<a href="#" class="menu-link px-3" data-kt-ecommerce-order-filter="delete_row">Delete</a>
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
														<td data-kt-ecommerce-order-filter="order_id">
															<a href="<?= url('/dw-admin/order-details') ?>" class="text-gray-800 text-hover-primary fw-bold">12809</a>
														</td>
														<td>
															<div class="d-flex align-items-center">
																<!--begin:: Avatar -->
																<div class="symbol symbol-circle symbol-50px overflow-hidden me-3">
																	<a href="<?= url('/dw-admin/customer-details') ?>">
																		<div class="symbol-label">
																			<img src="<?= url('/admin') ?>/assets/media/avatars/300-6.jpg" alt="Emma Smith" class="w-100" />
																		</div>
																	</a>
																</div>
																<!--end::Avatar-->
																<div class="ms-5">
																	<!--begin::Title-->
																	<a href="<?= url('/dw-admin/customer-details') ?>" class="text-gray-800 text-hover-primary fs-5 fw-bold">Emma Smith</a>
																	<!--end::Title-->
																</div>
															</div>
														</td>
														<td class="text-end pe-0" data-order="Cancelled">
															<!--begin::Badges-->
															<div class="badge badge-light-danger">Cancelled</div>
															<!--end::Badges-->
														</td>
														<td class="text-end pe-0">
															<span class="fw-bold">$269.00</span>
														</td>
														<td class="text-end" data-order="2023-11-25">
															<span class="fw-bold">25/11/2023</span>
														</td>
														<td class="text-end" data-order="2023-12-01">
															<span class="fw-bold">01/12/2023</span>
														</td>
														<td class="text-end">
															<a href="#" class="btn btn-sm btn-light btn-flex btn-center btn-active-light-primary" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">Actions 
															<i class="ki-duotone ki-down fs-5 ms-1"></i></a>
															<!--begin::Menu-->
															<div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-semibold fs-7 w-125px py-4" data-kt-menu="true">
																<!--begin::Menu item-->
																<div class="menu-item px-3">
																	<a href="<?= url('/dw-admin/order-details') ?>" class="menu-link px-3">View</a>
																</div>
																<!--end::Menu item-->
																<!--begin::Menu item-->
																<div class="menu-item px-3">
																	<a href="<?= url('/dw-admin/edit-order') ?>" class="menu-link px-3">Edit</a>
																</div>
																<!--end::Menu item-->
																<!--begin::Menu item-->
																<div class="menu-item px-3">
																	<a href="#" class="menu-link px-3" data-kt-ecommerce-order-filter="delete_row">Delete</a>
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
														<td data-kt-ecommerce-order-filter="order_id">
															<a href="<?= url('/dw-admin/order-details') ?>" class="text-gray-800 text-hover-primary fw-bold">12810</a>
														</td>
														<td>
															<div class="d-flex align-items-center">
																<!--begin:: Avatar -->
																<div class="symbol symbol-circle symbol-50px overflow-hidden me-3">
																	<a href="<?= url('/dw-admin/customer-details') ?>">
																		<div class="symbol-label">
																			<img src="<?= url('/admin') ?>/assets/media/avatars/300-6.jpg" alt="Emma Smith" class="w-100" />
																		</div>
																	</a>
																</div>
																<!--end::Avatar-->
																<div class="ms-5">
																	<!--begin::Title-->
																	<a href="<?= url('/dw-admin/customer-details') ?>" class="text-gray-800 text-hover-primary fs-5 fw-bold">Emma Smith</a>
																	<!--end::Title-->
																</div>
															</div>
														</td>
														<td class="text-end pe-0" data-order="Expired">
															<!--begin::Badges-->
															<div class="badge badge-light-danger">Expired</div>
															<!--end::Badges-->
														</td>
														<td class="text-end pe-0">
															<span class="fw-bold">$92.00</span>
														</td>
														<td class="text-end" data-order="2023-11-25">
															<span class="fw-bold">25/11/2023</span>
														</td>
														<td class="text-end" data-order="2023-11-30">
															<span class="fw-bold">30/11/2023</span>
														</td>
														<td class="text-end">
															<a href="#" class="btn btn-sm btn-light btn-flex btn-center btn-active-light-primary" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">Actions 
															<i class="ki-duotone ki-down fs-5 ms-1"></i></a>
															<!--begin::Menu-->
															<div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-semibold fs-7 w-125px py-4" data-kt-menu="true">
																<!--begin::Menu item-->
																<div class="menu-item px-3">
																	<a href="<?= url('/dw-admin/order-details') ?>" class="menu-link px-3">View</a>
																</div>
																<!--end::Menu item-->
																<!--begin::Menu item-->
																<div class="menu-item px-3">
																	<a href="<?= url('/dw-admin/edit-order') ?>" class="menu-link px-3">Edit</a>
																</div>
																<!--end::Menu item-->
																<!--begin::Menu item-->
																<div class="menu-item px-3">
																	<a href="#" class="menu-link px-3" data-kt-ecommerce-order-filter="delete_row">Delete</a>
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
														<td data-kt-ecommerce-order-filter="order_id">
															<a href="<?= url('/dw-admin/order-details') ?>" class="text-gray-800 text-hover-primary fw-bold">12811</a>
														</td>
														<td>
															<div class="d-flex align-items-center">
																<!--begin:: Avatar -->
																<div class="symbol symbol-circle symbol-50px overflow-hidden me-3">
																	<a href="<?= url('/dw-admin/customer-details') ?>">
																		<div class="symbol-label">
																			<img src="<?= url('/admin') ?>/assets/media/avatars/300-9.jpg" alt="Francis Mitcham" class="w-100" />
																		</div>
																	</a>
																</div>
																<!--end::Avatar-->
																<div class="ms-5">
																	<!--begin::Title-->
																	<a href="<?= url('/dw-admin/customer-details') ?>" class="text-gray-800 text-hover-primary fs-5 fw-bold">Francis Mitcham</a>
																	<!--end::Title-->
																</div>
															</div>
														</td>
														<td class="text-end pe-0" data-order="Completed">
															<!--begin::Badges-->
															<div class="badge badge-light-success">Completed</div>
															<!--end::Badges-->
														</td>
														<td class="text-end pe-0">
															<span class="fw-bold">$424.00</span>
														</td>
														<td class="text-end" data-order="2023-11-22">
															<span class="fw-bold">22/11/2023</span>
														</td>
														<td class="text-end" data-order="2023-11-29">
															<span class="fw-bold">29/11/2023</span>
														</td>
														<td class="text-end">
															<a href="#" class="btn btn-sm btn-light btn-flex btn-center btn-active-light-primary" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">Actions 
															<i class="ki-duotone ki-down fs-5 ms-1"></i></a>
															<!--begin::Menu-->
															<div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-semibold fs-7 w-125px py-4" data-kt-menu="true">
																<!--begin::Menu item-->
																<div class="menu-item px-3">
																	<a href="<?= url('/dw-admin/order-details') ?>" class="menu-link px-3">View</a>
																</div>
																<!--end::Menu item-->
																<!--begin::Menu item-->
																<div class="menu-item px-3">
																	<a href="<?= url('/dw-admin/edit-order') ?>" class="menu-link px-3">Edit</a>
																</div>
																<!--end::Menu item-->
																<!--begin::Menu item-->
																<div class="menu-item px-3">
																	<a href="#" class="menu-link px-3" data-kt-ecommerce-order-filter="delete_row">Delete</a>
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
														<td data-kt-ecommerce-order-filter="order_id">
															<a href="<?= url('/dw-admin/order-details') ?>" class="text-gray-800 text-hover-primary fw-bold">12812</a>
														</td>
														<td>
															<div class="d-flex align-items-center">
																<!--begin:: Avatar -->
																<div class="symbol symbol-circle symbol-50px overflow-hidden me-3">
																	<a href="<?= url('/dw-admin/customer-details') ?>">
																		<div class="symbol-label">
																			<img src="<?= url('/admin') ?>/assets/media/avatars/300-13.jpg" alt="John Miller" class="w-100" />
																		</div>
																	</a>
																</div>
																<!--end::Avatar-->
																<div class="ms-5">
																	<!--begin::Title-->
																	<a href="<?= url('/dw-admin/customer-details') ?>" class="text-gray-800 text-hover-primary fs-5 fw-bold">John Miller</a>
																	<!--end::Title-->
																</div>
															</div>
														</td>
														<td class="text-end pe-0" data-order="Completed">
															<!--begin::Badges-->
															<div class="badge badge-light-success">Completed</div>
															<!--end::Badges-->
														</td>
														<td class="text-end pe-0">
															<span class="fw-bold">$470.00</span>
														</td>
														<td class="text-end" data-order="2023-11-22">
															<span class="fw-bold">22/11/2023</span>
														</td>
														<td class="text-end" data-order="2023-11-28">
															<span class="fw-bold">28/11/2023</span>
														</td>
														<td class="text-end">
															<a href="#" class="btn btn-sm btn-light btn-flex btn-center btn-active-light-primary" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">Actions 
															<i class="ki-duotone ki-down fs-5 ms-1"></i></a>
															<!--begin::Menu-->
															<div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-semibold fs-7 w-125px py-4" data-kt-menu="true">
																<!--begin::Menu item-->
																<div class="menu-item px-3">
																	<a href="<?= url('/dw-admin/order-details') ?>" class="menu-link px-3">View</a>
																</div>
																<!--end::Menu item-->
																<!--begin::Menu item-->
																<div class="menu-item px-3">
																	<a href="<?= url('/dw-admin/edit-order') ?>" class="menu-link px-3">Edit</a>
																</div>
																<!--end::Menu item-->
																<!--begin::Menu item-->
																<div class="menu-item px-3">
																	<a href="#" class="menu-link px-3" data-kt-ecommerce-order-filter="delete_row">Delete</a>
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
														<td data-kt-ecommerce-order-filter="order_id">
															<a href="<?= url('/dw-admin/order-details') ?>" class="text-gray-800 text-hover-primary fw-bold">12813</a>
														</td>
														<td>
															<div class="d-flex align-items-center">
																<!--begin:: Avatar -->
																<div class="symbol symbol-circle symbol-50px overflow-hidden me-3">
																	<a href="<?= url('/dw-admin/customer-details') ?>">
																		<div class="symbol-label">
																			<img src="<?= url('/admin') ?>/assets/media/avatars/300-21.jpg" alt="Ethan Wilder" class="w-100" />
																		</div>
																	</a>
																</div>
																<!--end::Avatar-->
																<div class="ms-5">
																	<!--begin::Title-->
																	<a href="<?= url('/dw-admin/customer-details') ?>" class="text-gray-800 text-hover-primary fs-5 fw-bold">Ethan Wilder</a>
																	<!--end::Title-->
																</div>
															</div>
														</td>
														<td class="text-end pe-0" data-order="Completed">
															<!--begin::Badges-->
															<div class="badge badge-light-success">Completed</div>
															<!--end::Badges-->
														</td>
														<td class="text-end pe-0">
															<span class="fw-bold">$415.00</span>
														</td>
														<td class="text-end" data-order="2023-11-21">
															<span class="fw-bold">21/11/2023</span>
														</td>
														<td class="text-end" data-order="2023-11-27">
															<span class="fw-bold">27/11/2023</span>
														</td>
														<td class="text-end">
															<a href="#" class="btn btn-sm btn-light btn-flex btn-center btn-active-light-primary" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">Actions 
															<i class="ki-duotone ki-down fs-5 ms-1"></i></a>
															<!--begin::Menu-->
															<div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-semibold fs-7 w-125px py-4" data-kt-menu="true">
																<!--begin::Menu item-->
																<div class="menu-item px-3">
																	<a href="<?= url('/dw-admin/order-details') ?>" class="menu-link px-3">View</a>
																</div>
																<!--end::Menu item-->
																<!--begin::Menu item-->
																<div class="menu-item px-3">
																	<a href="<?= url('/dw-admin/edit-order') ?>" class="menu-link px-3">Edit</a>
																</div>
																<!--end::Menu item-->
																<!--begin::Menu item-->
																<div class="menu-item px-3">
																	<a href="#" class="menu-link px-3" data-kt-ecommerce-order-filter="delete_row">Delete</a>
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
														<td data-kt-ecommerce-order-filter="order_id">
															<a href="<?= url('/dw-admin/order-details') ?>" class="text-gray-800 text-hover-primary fw-bold">12814</a>
														</td>
														<td>
															<div class="d-flex align-items-center">
																<!--begin:: Avatar -->
																<div class="symbol symbol-circle symbol-50px overflow-hidden me-3">
																	<a href="<?= url('/dw-admin/customer-details') ?>">
																		<div class="symbol-label">
																			<img src="<?= url('/admin') ?>/assets/media/avatars/300-5.jpg" alt="Sean Bean" class="w-100" />
																		</div>
																	</a>
																</div>
																<!--end::Avatar-->
																<div class="ms-5">
																	<!--begin::Title-->
																	<a href="<?= url('/dw-admin/customer-details') ?>" class="text-gray-800 text-hover-primary fs-5 fw-bold">Sean Bean</a>
																	<!--end::Title-->
																</div>
															</div>
														</td>
														<td class="text-end pe-0" data-order="Completed">
															<!--begin::Badges-->
															<div class="badge badge-light-success">Completed</div>
															<!--end::Badges-->
														</td>
														<td class="text-end pe-0">
															<span class="fw-bold">$310.00</span>
														</td>
														<td class="text-end" data-order="2023-11-21">
															<span class="fw-bold">21/11/2023</span>
														</td>
														<td class="text-end" data-order="2023-11-26">
															<span class="fw-bold">26/11/2023</span>
														</td>
														<td class="text-end">
															<a href="#" class="btn btn-sm btn-light btn-flex btn-center btn-active-light-primary" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">Actions 
															<i class="ki-duotone ki-down fs-5 ms-1"></i></a>
															<!--begin::Menu-->
															<div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-semibold fs-7 w-125px py-4" data-kt-menu="true">
																<!--begin::Menu item-->
																<div class="menu-item px-3">
																	<a href="<?= url('/dw-admin/order-details') ?>" class="menu-link px-3">View</a>
																</div>
																<!--end::Menu item-->
																<!--begin::Menu item-->
																<div class="menu-item px-3">
																	<a href="<?= url('/dw-admin/edit-order') ?>" class="menu-link px-3">Edit</a>
																</div>
																<!--end::Menu item-->
																<!--begin::Menu item-->
																<div class="menu-item px-3">
																	<a href="#" class="menu-link px-3" data-kt-ecommerce-order-filter="delete_row">Delete</a>
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
														<td data-kt-ecommerce-order-filter="order_id">
															<a href="<?= url('/dw-admin/order-details') ?>" class="text-gray-800 text-hover-primary fw-bold">12815</a>
														</td>
														<td>
															<div class="d-flex align-items-center">
																<!--begin:: Avatar -->
																<div class="symbol symbol-circle symbol-50px overflow-hidden me-3">
																	<a href="<?= url('/dw-admin/customer-details') ?>">
																		<div class="symbol-label">
																			<img src="<?= url('/admin') ?>/assets/media/avatars/300-23.jpg" alt="Dan Wilson" class="w-100" />
																		</div>
																	</a>
																</div>
																<!--end::Avatar-->
																<div class="ms-5">
																	<!--begin::Title-->
																	<a href="<?= url('/dw-admin/customer-details') ?>" class="text-gray-800 text-hover-primary fs-5 fw-bold">Dan Wilson</a>
																	<!--end::Title-->
																</div>
															</div>
														</td>
														<td class="text-end pe-0" data-order="Delivered">
															<!--begin::Badges-->
															<div class="badge badge-light-success">Delivered</div>
															<!--end::Badges-->
														</td>
														<td class="text-end pe-0">
															<span class="fw-bold">$355.00</span>
														</td>
														<td class="text-end" data-order="2023-11-20">
															<span class="fw-bold">20/11/2023</span>
														</td>
														<td class="text-end" data-order="2023-11-25">
															<span class="fw-bold">25/11/2023</span>
														</td>
														<td class="text-end">
															<a href="#" class="btn btn-sm btn-light btn-flex btn-center btn-active-light-primary" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">Actions 
															<i class="ki-duotone ki-down fs-5 ms-1"></i></a>
															<!--begin::Menu-->
															<div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-semibold fs-7 w-125px py-4" data-kt-menu="true">
																<!--begin::Menu item-->
																<div class="menu-item px-3">
																	<a href="<?= url('/dw-admin/order-details') ?>" class="menu-link px-3">View</a>
																</div>
																<!--end::Menu item-->
																<!--begin::Menu item-->
																<div class="menu-item px-3">
																	<a href="<?= url('/dw-admin/edit-order') ?>" class="menu-link px-3">Edit</a>
																</div>
																<!--end::Menu item-->
																<!--begin::Menu item-->
																<div class="menu-item px-3">
																	<a href="#" class="menu-link px-3" data-kt-ecommerce-order-filter="delete_row">Delete</a>
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
														<td data-kt-ecommerce-order-filter="order_id">
															<a href="<?= url('/dw-admin/order-details') ?>" class="text-gray-800 text-hover-primary fw-bold">12816</a>
														</td>
														<td>
															<div class="d-flex align-items-center">
																<!--begin:: Avatar -->
																<div class="symbol symbol-circle symbol-50px overflow-hidden me-3">
																	<a href="<?= url('/dw-admin/customer-details') ?>">
																		<div class="symbol-label fs-3 bg-light-primary text-primary">N</div>
																	</a>
																</div>
																<!--end::Avatar-->
																<div class="ms-5">
																	<!--begin::Title-->
																	<a href="<?= url('/dw-admin/customer-details') ?>" class="text-gray-800 text-hover-primary fs-5 fw-bold">Neil Owen</a>
																	<!--end::Title-->
																</div>
															</div>
														</td>
														<td class="text-end pe-0" data-order="Expired">
															<!--begin::Badges-->
															<div class="badge badge-light-danger">Expired</div>
															<!--end::Badges-->
														</td>
														<td class="text-end pe-0">
															<span class="fw-bold">$405.00</span>
														</td>
														<td class="text-end" data-order="2023-11-19">
															<span class="fw-bold">19/11/2023</span>
														</td>
														<td class="text-end" data-order="2023-11-24">
															<span class="fw-bold">24/11/2023</span>
														</td>
														<td class="text-end">
															<a href="#" class="btn btn-sm btn-light btn-flex btn-center btn-active-light-primary" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">Actions 
															<i class="ki-duotone ki-down fs-5 ms-1"></i></a>
															<!--begin::Menu-->
															<div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-semibold fs-7 w-125px py-4" data-kt-menu="true">
																<!--begin::Menu item-->
																<div class="menu-item px-3">
																	<a href="<?= url('/dw-admin/order-details') ?>" class="menu-link px-3">View</a>
																</div>
																<!--end::Menu item-->
																<!--begin::Menu item-->
																<div class="menu-item px-3">
																	<a href="<?= url('/dw-admin/edit-order') ?>" class="menu-link px-3">Edit</a>
																</div>
																<!--end::Menu item-->
																<!--begin::Menu item-->
																<div class="menu-item px-3">
																	<a href="#" class="menu-link px-3" data-kt-ecommerce-order-filter="delete_row">Delete</a>
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
														<td data-kt-ecommerce-order-filter="order_id">
															<a href="<?= url('/dw-admin/order-details') ?>" class="text-gray-800 text-hover-primary fw-bold">12817</a>
														</td>
														<td>
															<div class="d-flex align-items-center">
																<!--begin:: Avatar -->
																<div class="symbol symbol-circle symbol-50px overflow-hidden me-3">
																	<a href="<?= url('/dw-admin/customer-details') ?>">
																		<div class="symbol-label">
																			<img src="<?= url('/admin') ?>/assets/media/avatars/300-23.jpg" alt="Dan Wilson" class="w-100" />
																		</div>
																	</a>
																</div>
																<!--end::Avatar-->
																<div class="ms-5">
																	<!--begin::Title-->
																	<a href="<?= url('/dw-admin/customer-details') ?>" class="text-gray-800 text-hover-primary fs-5 fw-bold">Dan Wilson</a>
																	<!--end::Title-->
																</div>
															</div>
														</td>
														<td class="text-end pe-0" data-order="Failed">
															<!--begin::Badges-->
															<div class="badge badge-light-danger">Failed</div>
															<!--end::Badges-->
														</td>
														<td class="text-end pe-0">
															<span class="fw-bold">$304.00</span>
														</td>
														<td class="text-end" data-order="2023-11-18">
															<span class="fw-bold">18/11/2023</span>
														</td>
														<td class="text-end" data-order="2023-11-23">
															<span class="fw-bold">23/11/2023</span>
														</td>
														<td class="text-end">
															<a href="#" class="btn btn-sm btn-light btn-flex btn-center btn-active-light-primary" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">Actions 
															<i class="ki-duotone ki-down fs-5 ms-1"></i></a>
															<!--begin::Menu-->
															<div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-semibold fs-7 w-125px py-4" data-kt-menu="true">
																<!--begin::Menu item-->
																<div class="menu-item px-3">
																	<a href="<?= url('/dw-admin/order-details') ?>" class="menu-link px-3">View</a>
																</div>
																<!--end::Menu item-->
																<!--begin::Menu item-->
																<div class="menu-item px-3">
																	<a href="<?= url('/dw-admin/edit-order') ?>" class="menu-link px-3">Edit</a>
																</div>
																<!--end::Menu item-->
																<!--begin::Menu item-->
																<div class="menu-item px-3">
																	<a href="#" class="menu-link px-3" data-kt-ecommerce-order-filter="delete_row">Delete</a>
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