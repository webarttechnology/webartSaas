<!--begin::App-->
<div class="d-flex flex-column flex-root app-root" id="kt_app_root">
		<!--begin::Page-->
		<div class="app-page flex-column flex-column-fluid" id="kt_app_page">
			<!--begin::Header-->
			<div id="kt_app_header" class="app-header" data-kt-sticky="true" data-kt-sticky-activate="{default: true, lg: true}" data-kt-sticky-name="app-header-minimize" data-kt-sticky-offset="{default: '200px', lg: '0'}" data-kt-sticky-animation="false">
				<!--begin::Header container-->
				<div class="app-container container-fluid d-flex align-items-stretch justify-content-between" id="kt_app_header_container">
					<!--begin::Sidebar mobile toggle-->
					<div class="d-flex align-items-center d-lg-none ms-n3 me-1 me-md-2" title="Show sidebar menu">
						<div class="btn btn-icon btn-active-color-primary w-35px h-35px" id="kt_app_sidebar_mobile_toggle">
							<i class="ki-duotone ki-abstract-14 fs-2 fs-md-1">
								<span class="path1"></span>
								<span class="path2"></span>
							</i>
						</div>
					</div>
					<!--end::Sidebar mobile toggle-->
					<!--begin::Mobile logo-->
					<div class="d-flex align-items-center flex-grow-1 flex-lg-grow-0">
						<a href="<?= url('/dw-admin/dashboard'); ?>" class="d-lg-none">
						<img alt="Logo" src="<?= url('/admin/') ?>/assets/media/logos/logo.png" class="h-30px" />
						</a>
					</div>
					<!--end::Mobile logo-->
					<!--begin::Header wrapper-->
					<div class="d-flex align-items-stretch justify-content-between flex-lg-grow-1" id="kt_app_header_wrapper">
						<!--begin::Menu wrapper-->
						<div class="app-header-menu app-header-mobile-drawer align-items-stretch" data-kt-drawer="true" data-kt-drawer-name="app-header-menu" data-kt-drawer-activate="{default: true, lg: false}" data-kt-drawer-overlay="true" data-kt-drawer-width="250px" data-kt-drawer-direction="end" data-kt-drawer-toggle="#kt_app_header_menu_toggle" data-kt-swapper="true" data-kt-swapper-mode="{default: 'append', lg: 'prepend'}" data-kt-swapper-parent="{default: '#kt_app_body', lg: '#kt_app_header_wrapper'}">
							<!--begin::Menu-->
							<div class="menu menu-rounded menu-column menu-lg-row my-5 my-lg-0 align-items-stretch fw-semibold px-2 px-lg-0" id="kt_app_header_menu" data-kt-menu="true">
								<!--begin:Menu item-->
								<div data-kt-menu-trigger="{default: 'click', lg: 'hover'}" data-kt-menu-placement="bottom-start" class="menu-item <?php echo urisegments()[2] == 'dashboard' ? 'here show' : ''  ?> menu-here-bg menu-lg-down-accordion me-0 me-lg-2">
									<!--begin:Menu link-->
									<a class="menu-link" href="<?= url('/dw-admin/dashboard'); ?>">
										<span class="menu-title">Dashboard</span>
										<span class="menu-arrow d-lg-none"></span>
									</a>
								</div>
								<div data-kt-menu-trigger="{default: 'click', lg: 'hover'}" data-kt-menu-placement="bottom-start" class="menu-item <?php echo in_array(urisegments()[2], ['product', 'add-product', 'categories', 'add-category','edit-product']) ? 'here show' : '' ?> menu-here-bg menu-lg-down-accordion me-0 me-lg-2">
									<!--end:Menu link-->
									<!--begin:Menu link-->
									<a class="menu-link" href="<?= url('/dw-admin/product'); ?>">
										<span class="menu-title">Products</span>
										<span class="menu-arrow d-lg-none"></span>
									</a>
								</div>
								<!--end:Menu link-->
								<div data-kt-menu-trigger="{default: 'click', lg: 'hover'}" data-kt-menu-placement="bottom-start" class="menu-item <?php echo in_array(urisegments()[2], ['order-list', 'order-details','add-order','invoice','create-invoice','edit-order']) ? 'here show' : '' ?> menu-here-bg menu-lg-down-accordion me-0 me-lg-2">
									<!--begin:Menu link-->
									<a class="menu-link" href="<?= url('/dw-admin/order-list'); ?>">
										<span class="menu-title">Sales</span>
										<span class="menu-arrow d-lg-none"></span>
									</a>
								</div>
								<!--end:Menu link-->
								<!--begin:Menu link-->
								<div data-kt-menu-trigger="{default: 'click', lg: 'hover'}" data-kt-menu-placement="bottom-start" class="menu-item menu-here-bg menu-lg-down-accordion me-0 me-lg-2 <?php echo in_array(urisegments()[2], ['getting-started', 'customer-list','customer-details']) ? 'here show' : '' ?>">
									<a class="menu-link" href="<?= url('/dw-admin/customer-list'); ?>">
										<span class="menu-title">Customers</span>
										<span class="menu-arrow d-lg-none"></span>
									</a>
								</div>
								<!--end:Menu link-->
								<!--begin:Menu link-->
								<div data-kt-menu-trigger="{default: 'click', lg: 'hover'}" data-kt-menu-placement="bottom-start" class="menu-item <?php echo urisegments()[2] == 'theme' ? 'hover show' : '' ?> menu-here-bg menu-lg-down-accordion me-0 me-lg-2">
									<a class="menu-link" href="<?= url('/dw-admin/theme'); ?>">
										<span class="menu-title">Themes</span>
										<span class="menu-arrow d-lg-none"></span>
									</a>
								</div>
								<!--end:Menu link-->
							</div>
						</div>
						<!--end::Menu-->
					</div>
					<!--end::Menu wrapper-->
					<!--begin::Navbar-->
					<div class="app-navbar flex-shrink-0">
						
						
						<!--begin::Notifications-->
						<div class="app-navbar-item ms-1 ms-md-4 d-none">
							<div class="btn btn-icon btn-custom btn-icon-muted btn-active-light btn-active-color-primary w-35px h-35px" data-kt-menu-trigger="{default: 'click', lg: 'hover'}" data-kt-menu-attach="parent" data-kt-menu-placement="bottom-end" id="kt_menu_item_wow">
								<i class="ki-duotone ki-notification-status fs-2">
									<span class="path1"></span>
									<span class="path2"></span>
									<span class="path3"></span>
									<span class="path4"></span>
								</i>
							</div>
							<div class="menu menu-sub menu-sub-dropdown menu-column w-350px w-lg-375px" data-kt-menu="true" id="kt_menu_notifications">
								<div class="d-flex flex-column bgi-no-repeat rounded-top" style="background-image:url('assets/media/misc/menu-header-bg.jpg')">
									<h3 class="text-white fw-semibold px-9 mt-10 mb-6">Notifications
										<span class="fs-8 opacity-75 ps-3">24 reports</span>
									</h3>
									<ul class="nav nav-line-tabs nav-line-tabs-2x nav-stretch fw-semibold px-9">
										<li class="nav-item">
											<a class="nav-link text-white opacity-75 opacity-state-100 pb-4" data-bs-toggle="tab" href="#kt_topbar_notifications_1">Alerts</a>
										</li>
										<li class="nav-item">
											<a class="nav-link text-white opacity-75 opacity-state-100 pb-4 active" data-bs-toggle="tab" href="#kt_topbar_notifications_2">Updates</a>
										</li>
										<li class="nav-item">
											<a class="nav-link text-white opacity-75 opacity-state-100 pb-4" data-bs-toggle="tab" href="#kt_topbar_notifications_3">Logs</a>
										</li>
									</ul>
								</div>
								<div class="tab-content">
									<div class="tab-pane fade" id="kt_topbar_notifications_1" role="tabpanel">
										<!--begin::Items-->
										<div class="scroll-y mh-325px my-5 px-8">
											<!--begin::Item-->
											<div class="d-flex flex-stack py-4">
												<!--begin::Section-->
												<div class="d-flex align-items-center">
													<!--begin::Symbol-->
													<div class="symbol symbol-35px me-4">
														<span class="symbol-label bg-light-primary">
															<i class="ki-duotone ki-abstract-28 fs-2 text-primary">
																<span class="path1"></span>
																<span class="path2"></span>
															</i>
														</span>
													</div>
													<!--end::Symbol-->
													<!--begin::Title-->
													<div class="mb-0 me-2">
														<a href="#" class="fs-6 text-gray-800 text-hover-primary fw-bold">Project
															Alice</a>
														<div class="text-gray-500 fs-7">Phase 1 development</div>
													</div>
													<!--end::Title-->
												</div>
												<!--end::Section-->
												<!--begin::Label-->
												<span class="badge badge-light fs-8">1 hr</span>
												<!--end::Label-->
											</div>
											<!--end::Item-->
											<!--begin::Item-->
											<div class="d-flex flex-stack py-4">
												<!--begin::Section-->
												<div class="d-flex align-items-center">
													<!--begin::Symbol-->
													<div class="symbol symbol-35px me-4">
														<span class="symbol-label bg-light-danger">
															<i class="ki-duotone ki-information fs-2 text-danger">
																<span class="path1"></span>
																<span class="path2"></span>
																<span class="path3"></span>
															</i>
														</span>
													</div>
													<!--end::Symbol-->
													<!--begin::Title-->
													<div class="mb-0 me-2">
														<a href="#" class="fs-6 text-gray-800 text-hover-primary fw-bold">HR
															Confidential</a>
														<div class="text-gray-500 fs-7">Confidential staff documents
														</div>
													</div>
													<!--end::Title-->
												</div>
												<!--end::Section-->
												<!--begin::Label-->
												<span class="badge badge-light fs-8">2 hrs</span>
												<!--end::Label-->
											</div>
											<!--end::Item-->
											<!--begin::Item-->
											<div class="d-flex flex-stack py-4">
												<!--begin::Section-->
												<div class="d-flex align-items-center">
													<!--begin::Symbol-->
													<div class="symbol symbol-35px me-4">
														<span class="symbol-label bg-light-warning">
															<i class="ki-duotone ki-briefcase fs-2 text-warning">
																<span class="path1"></span>
																<span class="path2"></span>
															</i>
														</span>
													</div>
													<!--end::Symbol-->
													<!--begin::Title-->
													<div class="mb-0 me-2">
														<a href="#" class="fs-6 text-gray-800 text-hover-primary fw-bold">Company
															HR</a>
														<div class="text-gray-500 fs-7">Corporeate staff profiles
														</div>
													</div>
													<!--end::Title-->
												</div>
												<!--end::Section-->
												<!--begin::Label-->
												<span class="badge badge-light fs-8">5 hrs</span>
												<!--end::Label-->
											</div>
											<!--end::Item-->
											<!--begin::Item-->
											<div class="d-flex flex-stack py-4">
												<!--begin::Section-->
												<div class="d-flex align-items-center">
													<!--begin::Symbol-->
													<div class="symbol symbol-35px me-4">
														<span class="symbol-label bg-light-success">
															<i class="ki-duotone ki-abstract-12 fs-2 text-success">
																<span class="path1"></span>
																<span class="path2"></span>
															</i>
														</span>
													</div>
													<!--end::Symbol-->
													<!--begin::Title-->
													<div class="mb-0 me-2">
														<a href="#" class="fs-6 text-gray-800 text-hover-primary fw-bold">Project
															Redux</a>
														<div class="text-gray-500 fs-7">New frontend admin theme
														</div>
													</div>
													<!--end::Title-->
												</div>
												<!--end::Section-->
												<!--begin::Label-->
												<span class="badge badge-light fs-8">2 days</span>
												<!--end::Label-->
											</div>
											<!--end::Item-->
											<!--begin::Item-->
											<div class="d-flex flex-stack py-4">
												<!--begin::Section-->
												<div class="d-flex align-items-center">
													<!--begin::Symbol-->
													<div class="symbol symbol-35px me-4">
														<span class="symbol-label bg-light-primary">
															<i class="ki-duotone ki-colors-square fs-2 text-primary">
																<span class="path1"></span>
																<span class="path2"></span>
																<span class="path3"></span>
																<span class="path4"></span>
															</i>
														</span>
													</div>
													<!--end::Symbol-->
													<!--begin::Title-->
													<div class="mb-0 me-2">
														<a href="#" class="fs-6 text-gray-800 text-hover-primary fw-bold">Project
															Breafing</a>
														<div class="text-gray-500 fs-7">Product launch status update
														</div>
													</div>
													<!--end::Title-->
												</div>
												<!--end::Section-->
												<!--begin::Label-->
												<span class="badge badge-light fs-8">21 Jan</span>
												<!--end::Label-->
											</div>
											<!--end::Item-->
											<!--begin::Item-->
											<div class="d-flex flex-stack py-4">
												<!--begin::Section-->
												<div class="d-flex align-items-center">
													<!--begin::Symbol-->
													<div class="symbol symbol-35px me-4">
														<span class="symbol-label bg-light-info">
															<i class="ki-duotone ki-picture fs-2 text-info"></i>
														</span>
													</div>
													<!--end::Symbol-->
													<!--begin::Title-->
													<div class="mb-0 me-2">
														<a href="#" class="fs-6 text-gray-800 text-hover-primary fw-bold">Banner
															Assets</a>
														<div class="text-gray-500 fs-7">Collection of banner images
														</div>
													</div>
													<!--end::Title-->
												</div>
												<!--end::Section-->
												<!--begin::Label-->
												<span class="badge badge-light fs-8">21 Jan</span>
												<!--end::Label-->
											</div>
											<!--end::Item-->
											<!--begin::Item-->
											<div class="d-flex flex-stack py-4">
												<!--begin::Section-->
												<div class="d-flex align-items-center">
													<!--begin::Symbol-->
													<div class="symbol symbol-35px me-4">
														<span class="symbol-label bg-light-warning">
															<i class="ki-duotone ki-color-swatch fs-2 text-warning">
																<span class="path1"></span>
																<span class="path2"></span>
																<span class="path3"></span>
																<span class="path4"></span>
																<span class="path5"></span>
																<span class="path6"></span>
																<span class="path7"></span>
																<span class="path8"></span>
																<span class="path9"></span>
																<span class="path10"></span>
																<span class="path11"></span>
																<span class="path12"></span>
																<span class="path13"></span>
																<span class="path14"></span>
																<span class="path15"></span>
																<span class="path16"></span>
																<span class="path17"></span>
																<span class="path18"></span>
																<span class="path19"></span>
																<span class="path20"></span>
																<span class="path21"></span>
															</i>
														</span>
													</div>
													<!--end::Symbol-->
													<!--begin::Title-->
													<div class="mb-0 me-2">
														<a href="#" class="fs-6 text-gray-800 text-hover-primary fw-bold">Icon
															Assets</a>
														<div class="text-gray-500 fs-7">Collection of SVG icons
														</div>
													</div>
													<!--end::Title-->
												</div>
												<!--end::Section-->
												<!--begin::Label-->
												<span class="badge badge-light fs-8">20 March</span>
												<!--end::Label-->
											</div>
											<!--end::Item-->
										</div>
										<!--end::Items-->
										<!--begin::View more-->
										<div class="py-3 text-center border-top">
											<a href="pages/user-profile/activity.html" class="btn btn-color-gray-600 btn-active-color-primary">View All
												<i class="ki-duotone ki-arrow-right fs-5">
													<span class="path1"></span>
													<span class="path2"></span>
												</i></a>
										</div>
										<!--end::View more-->
									</div>
									<!--end::Tab panel-->
									<!--begin::Tab panel-->
									<div class="tab-pane fade show active" id="kt_topbar_notifications_2" role="tabpanel">
										<!--begin::Wrapper-->
										<div class="d-flex flex-column px-9">
											<!--begin::Section-->
											<div class="pt-10 pb-0">
												<!--begin::Title-->
												<h3 class="text-gray-900 text-center fw-bold">Get Pro Access</h3>
												<!--end::Title-->
												<!--begin::Text-->
												<div class="text-center text-gray-600 fw-semibold pt-1">Outlines
													keep you honest. They stoping you from amazing poorly about
													drive</div>
												<!--end::Text-->
												<!--begin::Action-->
												<div class="text-center mt-5 mb-9">
													<a href="#" class="btn btn-sm btn-primary px-6" data-bs-toggle="modal" data-bs-target="#kt_modal_upgrade_plan">Upgrade</a>
												</div>
												<!--end::Action-->
											</div>
											<!--end::Section-->
											<!--begin::Illustration-->
											<div class="text-center px-4">
												<img class="mw-100 mh-200px" alt="image" src="<?= url('/admin/') ?>/assets/media/illustrations/sketchy-1/1.png" />
											</div>
											<!--end::Illustration-->
										</div>
										<!--end::Wrapper-->
									</div>
									<!--end::Tab panel-->
									<!--begin::Tab panel-->
									<div class="tab-pane fade" id="kt_topbar_notifications_3" role="tabpanel">
										<!--begin::Items-->
										<div class="scroll-y mh-325px my-5 px-8">
											<!--begin::Item-->
											<div class="d-flex flex-stack py-4">
												<!--begin::Section-->
												<div class="d-flex align-items-center me-2">
													<!--begin::Code-->
													<span class="w-70px badge badge-light-success me-4">200
														OK</span>
													<!--end::Code-->
													<!--begin::Title-->
													<a href="#" class="text-gray-800 text-hover-primary fw-semibold">New
														order</a>
													<!--end::Title-->
												</div>
												<!--end::Section-->
												<!--begin::Label-->
												<span class="badge badge-light fs-8">Just now</span>
												<!--end::Label-->
											</div>
											<!--end::Item-->
											<!--begin::Item-->
											<div class="d-flex flex-stack py-4">
												<!--begin::Section-->
												<div class="d-flex align-items-center me-2">
													<!--begin::Code-->
													<span class="w-70px badge badge-light-danger me-4">500
														ERR</span>
													<!--end::Code-->
													<!--begin::Title-->
													<a href="#" class="text-gray-800 text-hover-primary fw-semibold">New
														customer</a>
													<!--end::Title-->
												</div>
												<!--end::Section-->
												<!--begin::Label-->
												<span class="badge badge-light fs-8">2 hrs</span>
												<!--end::Label-->
											</div>
											<!--end::Item-->
											<!--begin::Item-->
											<div class="d-flex flex-stack py-4">
												<!--begin::Section-->
												<div class="d-flex align-items-center me-2">
													<!--begin::Code-->
													<span class="w-70px badge badge-light-success me-4">200
														OK</span>
													<!--end::Code-->
													<!--begin::Title-->
													<a href="#" class="text-gray-800 text-hover-primary fw-semibold">Payment
														process</a>
													<!--end::Title-->
												</div>
												<!--end::Section-->
												<!--begin::Label-->
												<span class="badge badge-light fs-8">5 hrs</span>
												<!--end::Label-->
											</div>
											<!--end::Item-->
											<!--begin::Item-->
											<div class="d-flex flex-stack py-4">
												<!--begin::Section-->
												<div class="d-flex align-items-center me-2">
													<!--begin::Code-->
													<span class="w-70px badge badge-light-warning me-4">300
														WRN</span>
													<!--end::Code-->
													<!--begin::Title-->
													<a href="#" class="text-gray-800 text-hover-primary fw-semibold">Search
														query</a>
													<!--end::Title-->
												</div>
												<!--end::Section-->
												<!--begin::Label-->
												<span class="badge badge-light fs-8">2 days</span>
												<!--end::Label-->
											</div>
											<!--end::Item-->
											<!--begin::Item-->
											<div class="d-flex flex-stack py-4">
												<!--begin::Section-->
												<div class="d-flex align-items-center me-2">
													<!--begin::Code-->
													<span class="w-70px badge badge-light-success me-4">200
														OK</span>
													<!--end::Code-->
													<!--begin::Title-->
													<a href="#" class="text-gray-800 text-hover-primary fw-semibold">API
														connection</a>
													<!--end::Title-->
												</div>
												<!--end::Section-->
												<!--begin::Label-->
												<span class="badge badge-light fs-8">1 week</span>
												<!--end::Label-->
											</div>
											<!--end::Item-->
											<!--begin::Item-->
											<div class="d-flex flex-stack py-4">
												<!--begin::Section-->
												<div class="d-flex align-items-center me-2">
													<!--begin::Code-->
													<span class="w-70px badge badge-light-success me-4">200
														OK</span>
													<!--end::Code-->
													<!--begin::Title-->
													<a href="#" class="text-gray-800 text-hover-primary fw-semibold">Database
														restore</a>
													<!--end::Title-->
												</div>
												<!--end::Section-->
												<!--begin::Label-->
												<span class="badge badge-light fs-8">Mar 5</span>
												<!--end::Label-->
											</div>
											<!--end::Item-->
											<!--begin::Item-->
											<div class="d-flex flex-stack py-4">
												<!--begin::Section-->
												<div class="d-flex align-items-center me-2">
													<!--begin::Code-->
													<span class="w-70px badge badge-light-warning me-4">300
														WRN</span>
													<!--end::Code-->
													<!--begin::Title-->
													<a href="#" class="text-gray-800 text-hover-primary fw-semibold">System
														update</a>
													<!--end::Title-->
												</div>
												<!--end::Section-->
												<!--begin::Label-->
												<span class="badge badge-light fs-8">May 15</span>
												<!--end::Label-->
											</div>
											<!--end::Item-->
											<!--begin::Item-->
											<div class="d-flex flex-stack py-4">
												<!--begin::Section-->
												<div class="d-flex align-items-center me-2">
													<!--begin::Code-->
													<span class="w-70px badge badge-light-warning me-4">300
														WRN</span>
													<!--end::Code-->
													<!--begin::Title-->
													<a href="#" class="text-gray-800 text-hover-primary fw-semibold">Server
														OS update</a>
													<!--end::Title-->
												</div>
												<!--end::Section-->
												<!--begin::Label-->
												<span class="badge badge-light fs-8">Apr 3</span>
												<!--end::Label-->
											</div>
											<!--end::Item-->
											<!--begin::Item-->
											<div class="d-flex flex-stack py-4">
												<!--begin::Section-->
												<div class="d-flex align-items-center me-2">
													<!--begin::Code-->
													<span class="w-70px badge badge-light-warning me-4">300
														WRN</span>
													<!--end::Code-->
													<!--begin::Title-->
													<a href="#" class="text-gray-800 text-hover-primary fw-semibold">API
														rollback</a>
													<!--end::Title-->
												</div>
												<!--end::Section-->
												<!--begin::Label-->
												<span class="badge badge-light fs-8">Jun 30</span>
												<!--end::Label-->
											</div>
											<!--end::Item-->
											<!--begin::Item-->
											<div class="d-flex flex-stack py-4">
												<!--begin::Section-->
												<div class="d-flex align-items-center me-2">
													<!--begin::Code-->
													<span class="w-70px badge badge-light-danger me-4">500
														ERR</span>
													<!--end::Code-->
													<!--begin::Title-->
													<a href="#" class="text-gray-800 text-hover-primary fw-semibold">Refund
														process</a>
													<!--end::Title-->
												</div>
												<!--end::Section-->
												<!--begin::Label-->
												<span class="badge badge-light fs-8">Jul 10</span>
												<!--end::Label-->
											</div>
											<!--end::Item-->
											<!--begin::Item-->
											<div class="d-flex flex-stack py-4">
												<!--begin::Section-->
												<div class="d-flex align-items-center me-2">
													<!--begin::Code-->
													<span class="w-70px badge badge-light-danger me-4">500
														ERR</span>
													<!--end::Code-->
													<!--begin::Title-->
													<a href="#" class="text-gray-800 text-hover-primary fw-semibold">Withdrawal
														process</a>
													<!--end::Title-->
												</div>
												<!--end::Section-->
												<!--begin::Label-->
												<span class="badge badge-light fs-8">Sep 10</span>
												<!--end::Label-->
											</div>
											<!--end::Item-->
											<!--begin::Item-->
											<div class="d-flex flex-stack py-4">
												<!--begin::Section-->
												<div class="d-flex align-items-center me-2">
													<!--begin::Code-->
													<span class="w-70px badge badge-light-danger me-4">500
														ERR</span>
													<!--end::Code-->
													<!--begin::Title-->
													<a href="#" class="text-gray-800 text-hover-primary fw-semibold">Mail
														tasks</a>
													<!--end::Title-->
												</div>
												<!--end::Section-->
												<!--begin::Label-->
												<span class="badge badge-light fs-8">Dec 10</span>
												<!--end::Label-->
											</div>
											<!--end::Item-->
										</div>
										<!--end::Items-->
										<!--begin::View more-->
										<div class="py-3 text-center border-top">
											<a href="pages/user-profile/activity.html" class="btn btn-color-gray-600 btn-active-color-primary">View All
												<i class="ki-duotone ki-arrow-right fs-5">
													<span class="path1"></span>
													<span class="path2"></span>
												</i></a>
										</div>
										<!--end::View more-->
									</div>
									<!--end::Tab panel-->
								</div>
								<!--end::Tab content-->
							</div>
							<!--end::Menu-->
							<!--end::Menu wrapper-->
						</div>
						<!--end::Notifications-->
						<!--begin::Chat-->
						<div class="app-navbar-item ms-1 ms-md-4 d-none">
							<!--begin::Menu wrapper-->
							<div class="btn btn-icon btn-custom btn-icon-muted btn-active-light btn-active-color-primary w-35px h-35px position-relative" id="kt_drawer_chat_toggle">
								<i class="ki-duotone ki-message-text-2 fs-2">
									<span class="path1"></span>
									<span class="path2"></span>
									<span class="path3"></span>
								</i>
								<span class="bullet bullet-dot bg-success h-6px w-6px position-absolute translate-middle top-0 start-50 animation-blink"></span>
							</div>
							<!--end::Menu wrapper-->
						</div>
						<!--end::Chat-->
						<!--begin::My apps links-->
						<div class="app-navbar-item ms-1 ms-md-4 d-none">
							<!--begin::Menu wrapper-->
							<div class="btn btn-icon btn-custom btn-icon-muted btn-active-light btn-active-color-primary w-35px h-35px" data-kt-menu-trigger="{default: 'click', lg: 'hover'}" data-kt-menu-attach="parent" data-kt-menu-placement="bottom-end">
								<i class="ki-duotone ki-element-11 fs-2">
									<span class="path1"></span>
									<span class="path2"></span>
									<span class="path3"></span>
									<span class="path4"></span>
								</i>
							</div>
							<!--begin::My apps-->
							<div class="menu menu-sub menu-sub-dropdown menu-column w-100 w-sm-350px" data-kt-menu="true">
								<!--begin::Card-->
								<div class="card">
									<!--begin::Card header-->
									<div class="card-header">
										<!--begin::Card title-->
										<div class="card-title">My Apps</div>
										<!--end::Card title-->
										<!--begin::Card toolbar-->
										<div class="card-toolbar">
											<!--begin::Menu-->
											<button type="button" class="btn btn-sm btn-icon btn-active-light-primary me-n3" data-kt-menu-trigger="{default: 'click', lg: 'hover'}" data-kt-menu-placement="bottom-end">
												<i class="ki-duotone ki-setting-3 fs-2">
													<span class="path1"></span>
													<span class="path2"></span>
													<span class="path3"></span>
													<span class="path4"></span>
													<span class="path5"></span>
												</i>
											</button>
											<!--begin::Menu 3-->
											<div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-800 menu-state-bg-light-primary fw-semibold w-200px py-3" data-kt-menu="true">
												<!--begin::Heading-->
												<div class="menu-item px-3">
													<div class="menu-content text-muted pb-2 px-3 fs-7 text-uppercase">
														Payments</div>
												</div>
												<!--end::Heading-->
												<!--begin::Menu item-->
												<div class="menu-item px-3">
													<a href="#" class="menu-link px-3">Create Invoice</a>
												</div>
												<!--end::Menu item-->
												<!--begin::Menu item-->
												<div class="menu-item px-3">
													<a href="#" class="menu-link flex-stack px-3">Create Payment
														<span class="ms-2" data-bs-toggle="tooltip" title="Specify a target name for future usage and reference">
															<i class="ki-duotone ki-information fs-6">
																<span class="path1"></span>
																<span class="path2"></span>
																<span class="path3"></span>
															</i>
														</span></a>
												</div>
												<!--end::Menu item-->
												<!--begin::Menu item-->
												<div class="menu-item px-3">
													<a href="#" class="menu-link px-3">Generate Bill</a>
												</div>
												<!--end::Menu item-->
												<!--begin::Menu item-->
												<div class="menu-item px-3" data-kt-menu-trigger="hover" data-kt-menu-placement="right-end">
													<a href="#" class="menu-link px-3">
														<span class="menu-title">Subscription</span>
														<span class="menu-arrow"></span>
													</a>
													<!--begin::Menu sub-->
													<div class="menu-sub menu-sub-dropdown w-175px py-4">
														<!--begin::Menu item-->
														<div class="menu-item px-3">
															<a href="#" class="menu-link px-3">Plans</a>
														</div>
														<!--end::Menu item-->
														<!--begin::Menu item-->
														<div class="menu-item px-3">
															<a href="#" class="menu-link px-3">Billing</a>
														</div>
														<!--end::Menu item-->
														<!--begin::Menu item-->
														<div class="menu-item px-3">
															<a href="#" class="menu-link px-3">Statements</a>
														</div>
														<!--end::Menu item-->
														<!--begin::Menu separator-->
														<div class="separator my-2"></div>
														<!--end::Menu separator-->
														<!--begin::Menu item-->
														<div class="menu-item px-3">
															<div class="menu-content px-3">
																<!--begin::Switch-->
																<label class="form-check form-switch form-check-custom form-check-solid">
																	<!--begin::Input-->
																	<input class="form-check-input w-30px h-20px" type="checkbox" value="1" checked="checked" name="notifications" />
																	<!--end::Input-->
																	<!--end::Label-->
																	<span class="form-check-label text-muted fs-6">Recuring</span>
																	<!--end::Label-->
																</label>
																<!--end::Switch-->
															</div>
														</div>
														<!--end::Menu item-->
													</div>
													<!--end::Menu sub-->
												</div>
												<!--end::Menu item-->
												<!--begin::Menu item-->
												<div class="menu-item px-3 my-1">
													<a href="#" class="menu-link px-3">Settings</a>
												</div>
												<!--end::Menu item-->
											</div>
											<!--end::Menu 3-->
											<!--end::Menu-->
										</div>
										<!--end::Card toolbar-->
									</div>
									<!--end::Card header-->
									<!--begin::Card body-->
									<div class="card-body py-5">
										<!--begin::Scroll-->
										<div class="mh-450px scroll-y me-n5 pe-5">
											<!--begin::Row-->
											<div class="row g-2">
												<!--begin::Col-->
												<div class="col-4">
													<a href="#" class="d-flex flex-column flex-center text-center text-gray-800 text-hover-primary bg-hover-light rounded py-4 px-3 mb-3">
														<img src="<?= url('/admin/') ?>/assets/media/svg/brand-logos/amazon.svg" class="w-25px h-25px mb-2" alt="" />
														<span class="fw-semibold">AWS</span>
													</a>
												</div>
												<!--end::Col-->
												<!--begin::Col-->
												<div class="col-4">
													<a href="#" class="d-flex flex-column flex-center text-center text-gray-800 text-hover-primary bg-hover-light rounded py-4 px-3 mb-3">
														<img src="<?= url('/admin/') ?>/assets/media/svg/brand-logos/angular-icon-1.svg" class="w-25px h-25px mb-2" alt="" />
														<span class="fw-semibold">AngularJS</span>
													</a>
												</div>
												<!--end::Col-->
												<!--begin::Col-->
												<div class="col-4">
													<a href="#" class="d-flex flex-column flex-center text-center text-gray-800 text-hover-primary bg-hover-light rounded py-4 px-3 mb-3">
														<img src="<?= url('/admin/') ?>/assets/media/svg/brand-logos/atica.svg" class="w-25px h-25px mb-2" alt="" />
														<span class="fw-semibold">Atica</span>
													</a>
												</div>
												<!--end::Col-->
												<!--begin::Col-->
												<div class="col-4">
													<a href="#" class="d-flex flex-column flex-center text-center text-gray-800 text-hover-primary bg-hover-light rounded py-4 px-3 mb-3">
														<img src="<?= url('/admin/') ?>/assets/media/svg/brand-logos/beats-electronics.svg" class="w-25px h-25px mb-2" alt="" />
														<span class="fw-semibold">Music</span>
													</a>
												</div>
												<!--end::Col-->
												<!--begin::Col-->
												<div class="col-4">
													<a href="#" class="d-flex flex-column flex-center text-center text-gray-800 text-hover-primary bg-hover-light rounded py-4 px-3 mb-3">
														<img src="<?= url('/admin/') ?>/assets/media/svg/brand-logos/codeigniter.svg" class="w-25px h-25px mb-2" alt="" />
														<span class="fw-semibold">Codeigniter</span>
													</a>
												</div>
												<!--end::Col-->
												<!--begin::Col-->
												<div class="col-4">
													<a href="#" class="d-flex flex-column flex-center text-center text-gray-800 text-hover-primary bg-hover-light rounded py-4 px-3 mb-3">
														<img src="<?= url('/admin/') ?>/assets/media/svg/brand-logos/bootstrap-4.svg" class="w-25px h-25px mb-2" alt="" />
														<span class="fw-semibold">Bootstrap</span>
													</a>
												</div>
												<!--end::Col-->
												<!--begin::Col-->
												<div class="col-4">
													<a href="#" class="d-flex flex-column flex-center text-center text-gray-800 text-hover-primary bg-hover-light rounded py-4 px-3 mb-3">
														<img src="<?= url('/admin/') ?>/assets/media/svg/brand-logos/google-tag-manager.svg" class="w-25px h-25px mb-2" alt="" />
														<span class="fw-semibold">GTM</span>
													</a>
												</div>
												<!--end::Col-->
												<!--begin::Col-->
												<div class="col-4">
													<a href="#" class="d-flex flex-column flex-center text-center text-gray-800 text-hover-primary bg-hover-light rounded py-4 px-3 mb-3">
														<img src="<?= url('/admin/') ?>/assets/media/svg/brand-logos/disqus.svg" class="w-25px h-25px mb-2" alt="" />
														<span class="fw-semibold">Disqus</span>
													</a>
												</div>
												<!--end::Col-->
												<!--begin::Col-->
												<div class="col-4">
													<a href="#" class="d-flex flex-column flex-center text-center text-gray-800 text-hover-primary bg-hover-light rounded py-4 px-3 mb-3">
														<img src="<?= url('/admin/') ?>/assets/media/svg/brand-logos/dribbble-icon-1.svg" class="w-25px h-25px mb-2" alt="" />
														<span class="fw-semibold">Dribble</span>
													</a>
												</div>
												<!--end::Col-->
												<!--begin::Col-->
												<div class="col-4">
													<a href="#" class="d-flex flex-column flex-center text-center text-gray-800 text-hover-primary bg-hover-light rounded py-4 px-3 mb-3">
														<img src="<?= url('/admin/') ?>/assets/media/svg/brand-logos/google-play-store.svg" class="w-25px h-25px mb-2" alt="" />
														<span class="fw-semibold">Play Store</span>
													</a>
												</div>
												<!--end::Col-->
												<!--begin::Col-->
												<div class="col-4">
													<a href="#" class="d-flex flex-column flex-center text-center text-gray-800 text-hover-primary bg-hover-light rounded py-4 px-3 mb-3">
														<img src="<?= url('/admin/') ?>/assets/media/svg/brand-logos/google-podcasts.svg" class="w-25px h-25px mb-2" alt="" />
														<span class="fw-semibold">Podcasts</span>
													</a>
												</div>
												<!--end::Col-->
												<!--begin::Col-->
												<div class="col-4">
													<a href="#" class="d-flex flex-column flex-center text-center text-gray-800 text-hover-primary bg-hover-light rounded py-4 px-3 mb-3">
														<img src="<?= url('/admin/') ?>/assets/media/svg/brand-logos/figma-1.svg" class="w-25px h-25px mb-2" alt="" />
														<span class="fw-semibold">Figma</span>
													</a>
												</div>
												<!--end::Col-->
												<!--begin::Col-->
												<div class="col-4">
													<a href="#" class="d-flex flex-column flex-center text-center text-gray-800 text-hover-primary bg-hover-light rounded py-4 px-3 mb-3">
														<img src="<?= url('/admin/') ?>/assets/media/svg/brand-logos/github.svg" class="w-25px h-25px mb-2" alt="" />
														<span class="fw-semibold">Github</span>
													</a>
												</div>
												<!--end::Col-->
												<!--begin::Col-->
												<div class="col-4">
													<a href="#" class="d-flex flex-column flex-center text-center text-gray-800 text-hover-primary bg-hover-light rounded py-4 px-3 mb-3">
														<img src="<?= url('/admin/') ?>/assets/media/svg/brand-logos/gitlab.svg" class="w-25px h-25px mb-2" alt="" />
														<span class="fw-semibold">Gitlab</span>
													</a>
												</div>
												<!--end::Col-->
												<!--begin::Col-->
												<div class="col-4">
													<a href="#" class="d-flex flex-column flex-center text-center text-gray-800 text-hover-primary bg-hover-light rounded py-4 px-3 mb-3">
														<img src="<?= url('/admin/') ?>/assets/media/svg/brand-logos/instagram-2-1.svg" class="w-25px h-25px mb-2" alt="" />
														<span class="fw-semibold">Instagram</span>
													</a>
												</div>
												<!--end::Col-->
												<!--begin::Col-->
												<div class="col-4">
													<a href="#" class="d-flex flex-column flex-center text-center text-gray-800 text-hover-primary bg-hover-light rounded py-4 px-3 mb-3">
														<img src="<?= url('/admin/') ?>/assets/media/svg/brand-logos/pinterest-p.svg" class="w-25px h-25px mb-2" alt="" />
														<span class="fw-semibold">Pinterest</span>
													</a>
												</div>
												<!--end::Col-->
											</div>
											<!--end::Row-->
										</div>
										<!--end::Scroll-->
									</div>
									<!--end::Card body-->
								</div>
								<!--end::Card-->
							</div>
							<!--end::My apps-->
							<!--end::Menu wrapper-->
						</div>
						<!--end::My apps links-->
						<!--begin::Theme mode-->
						<div class="app-navbar-item ms-1 ms-md-4">
							<!--begin::Menu toggle-->
							<a href="#" class="btn btn-icon btn-custom btn-icon-muted btn-active-light btn-active-color-primary w-35px h-35px" data-kt-menu-trigger="{default:'click', lg: 'hover'}" data-kt-menu-attach="parent" data-kt-menu-placement="bottom-end">
								<i class="ki-duotone ki-night-day theme-light-show fs-1">
									<span class="path1"></span>
									<span class="path2"></span>
									<span class="path3"></span>
									<span class="path4"></span>
									<span class="path5"></span>
									<span class="path6"></span>
									<span class="path7"></span>
									<span class="path8"></span>
									<span class="path9"></span>
									<span class="path10"></span>
								</i>
								<i class="ki-duotone ki-moon theme-dark-show fs-1">
									<span class="path1"></span>
									<span class="path2"></span>
								</i>
							</a>
							<!--begin::Menu toggle-->
							<!--begin::Menu-->
							<div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-title-gray-700 menu-icon-gray-500 menu-active-bg menu-state-color fw-semibold py-4 fs-base w-150px" data-kt-menu="true" data-kt-element="theme-mode-menu">
								<!--begin::Menu item-->
								<div class="menu-item px-3 my-0">
									<a href="#" class="menu-link px-3 py-2" data-kt-element="mode" data-kt-value="light">
										<span class="menu-icon" data-kt-element="icon">
											<i class="ki-duotone ki-night-day fs-2">
												<span class="path1"></span>
												<span class="path2"></span>
												<span class="path3"></span>
												<span class="path4"></span>
												<span class="path5"></span>
												<span class="path6"></span>
												<span class="path7"></span>
												<span class="path8"></span>
												<span class="path9"></span>
												<span class="path10"></span>
											</i>
										</span>
										<span class="menu-title">Light</span>
									</a>
								</div>
								<!--end::Menu item-->
								<!--begin::Menu item-->
								<div class="menu-item px-3 my-0">
									<a href="#" class="menu-link px-3 py-2" data-kt-element="mode" data-kt-value="dark">
										<span class="menu-icon" data-kt-element="icon">
											<i class="ki-duotone ki-moon fs-2">
												<span class="path1"></span>
												<span class="path2"></span>
											</i>
										</span>
										<span class="menu-title">Dark</span>
									</a>
								</div>
								<!--end::Menu item-->
								<!--begin::Menu item-->
								<div class="menu-item px-3 my-0">
									<a href="#" class="menu-link px-3 py-2" data-kt-element="mode" data-kt-value="system">
										<span class="menu-icon" data-kt-element="icon">
											<i class="ki-duotone ki-screen fs-2">
												<span class="path1"></span>
												<span class="path2"></span>
												<span class="path3"></span>
												<span class="path4"></span>
											</i>
										</span>
										<span class="menu-title">System</span>
									</a>
								</div>
								<!--end::Menu item-->
							</div>
							<!--end::Menu-->
						</div>
						<!--end::Theme mode-->
						<!--begin::User menu-->
						<div class="app-navbar-item ms-1 ms-md-4" id="kt_header_user_menu_toggle">
							<!--begin::Menu wrapper-->
							<div class="cursor-pointer symbol symbol-35px" data-kt-menu-trigger="{default: 'click', lg: 'hover'}" data-kt-menu-attach="parent" data-kt-menu-placement="bottom-end">
								<img src="<?= url('/admin/') ?>/assets/media/avatars/300-3.jpg" class="rounded-3" alt="user" />
							</div>
							<!--begin::User account menu-->
							<div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-800 menu-state-bg menu-state-color fw-semibold py-4 fs-6 w-275px" data-kt-menu="true">
								<!--begin::Menu item-->
								<div class="menu-item px-3">
									<div class="menu-content d-flex align-items-center px-3">
										<!--begin::Avatar-->
										<div class="symbol symbol-50px me-5">
											<img alt="Logo" src="<?= url('/admin/') ?>/assets/media/avatars/300-3.jpg" />
										</div>
										<!--end::Avatar-->
										<!--begin::Username-->
										<div class="d-flex flex-column">
											<div class="fw-bold d-flex align-items-center fs-5">Robert Fox
												<span class="badge badge-light-success fw-bold fs-8 px-2 py-1 ms-2">Pro</span>
											</div>
											<a href="#" class="fw-semibold text-muted text-hover-primary fs-7">robert@kt.com</a>
										</div>
										<!--end::Username-->
									</div>
								</div>
								<!--end::Menu item-->
								<!--begin::Menu separator-->
								<div class="separator my-2"></div>
								<!--end::Menu separator-->
								<!--begin::Menu item-->
								<div class="menu-item px-5">
									<a href="account/overview.html" class="menu-link px-5">My Profile</a>
								</div>
								<!--end::Menu item-->
								<!--begin::Menu item-->
								
								<!--end::Menu item-->
								<!--begin::Menu item-->
								<div class="menu-item px-5" data-kt-menu-trigger="{default: 'click', lg: 'hover'}" data-kt-menu-placement="left-start" data-kt-menu-offset="-15px, 0">
									<a href="#" class="menu-link px-5">
										<span class="menu-title">My Subscription</span>
										<span class="menu-arrow"></span>
									</a>
									<!--begin::Menu sub-->
									<div class="menu-sub menu-sub-dropdown w-175px py-4">
										<!--begin::Menu item-->
										<div class="menu-item px-3">
											<a href="account/referrals.html" class="menu-link px-5">Referrals</a>
										</div>
										<!--end::Menu item-->
										<!--begin::Menu item-->
										<div class="menu-item px-3">
											<a href="account/billing.html" class="menu-link px-5">Billing</a>
										</div>
										<!--end::Menu item-->
										<!--begin::Menu item-->
										<div class="menu-item px-3">
											<a href="account/statements.html" class="menu-link px-5">Payments</a>
										</div>
										<!--end::Menu item-->
										<!--begin::Menu item-->
										<div class="menu-item px-3">
											<a href="account/statements.html" class="menu-link d-flex flex-stack px-5">Statements
												<span class="ms-2 lh-0" data-bs-toggle="tooltip" title="View your statements">
													<i class="ki-duotone ki-information-5 fs-5">
														<span class="path1"></span>
														<span class="path2"></span>
														<span class="path3"></span>
													</i>
												</span></a>
										</div>
										<!--end::Menu item-->
										<!--begin::Menu separator-->
										<div class="separator my-2"></div>
										<!--end::Menu separator-->
										<!--begin::Menu item-->
										<div class="menu-item px-3">
											<div class="menu-content px-3">
												<label class="form-check form-switch form-check-custom form-check-solid">
													<input class="form-check-input w-30px h-20px" type="checkbox" value="1" checked="checked" name="notifications" />
													<span class="form-check-label text-muted fs-7">Notifications</span>
												</label>
											</div>
										</div>
										<!--end::Menu item-->
									</div>
									<!--end::Menu sub-->
								</div>
								<!--end::Menu item-->
								<!--begin::Menu item-->
								<div class="menu-item px-5">
									<a href="account/statements.html" class="menu-link px-5">My Statements</a>
								</div>
								<!--end::Menu item-->
								<!--begin::Menu separator-->
								<div class="separator my-2"></div>
								<!--end::Menu separator-->
								<!--begin::Menu item-->
								
								<!--end::Menu item-->
								<!--begin::Menu item-->
								<div class="menu-item px-5 my-1">
									<a href="account/settings.html" class="menu-link px-5">Account Settings</a>
								</div>
								<!--end::Menu item-->
								<!--begin::Menu item-->
								<div class="menu-item px-5">
									<a href="<?=  url('/dw-admin/logout') ?>" class="menu-link px-5">Sign Out</a>
								</div>
								<!--end::Menu item-->
							</div>
							<!--end::User account menu-->
							<!--end::Menu wrapper-->
						</div>
						<!--end::User menu-->
						<!--begin::Header menu toggle-->
						<div class="app-navbar-item d-lg-none ms-2 me-n2" title="Show header menu">
							<div class="btn btn-flex btn-icon btn-active-color-primary w-30px h-30px" id="kt_app_header_menu_toggle">
								<i class="ki-duotone ki-element-4 fs-1">
									<span class="path1"></span>
									<span class="path2"></span>
								</i>
							</div>
						</div>
						<!--end::Header menu toggle-->
						<!--begin::Aside toggle-->
						<!--end::Header menu toggle-->
					</div>
					<!--end::Navbar-->
				</div>
				<!--end::Header wrapper-->
			</div>
			<!--end::Header container-->
		</div>
		<!--end::Header-->
		<!--begin::Wrapper-->
		<div class="app-wrapper flex-column flex-row-fluid" id="kt_app_wrapper">