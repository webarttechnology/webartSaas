<!--begin::Sidebar-->
<div id="kt_app_sidebar" class="app-sidebar flex-column" data-kt-drawer="true" data-kt-drawer-name="app-sidebar" data-kt-drawer-activate="{default: true, lg: false}" data-kt-drawer-overlay="true" data-kt-drawer-width="225px" data-kt-drawer-direction="start" data-kt-drawer-toggle="#kt_app_sidebar_mobile_toggle">
	<!--begin::Logo-->
	<div class="app-sidebar-logo px-6" id="kt_app_sidebar_logo">
		<!--begin::Logo image-->
		<a href="<?= url('/dw-admin/dashboard'); ?>" style="color:#fff; font-weight:bold; font-size:25px">
		   <img alt="Logo" src="<?= url('/admin/') ?>/assets/media/logos/logo.png" class="h-30px" />
		</a>
		<!--end::Logo image-->
		<!--begin::Sidebar toggle-->
		<!--begin::Minimized sidebar setup:
						if (isset($_COOKIE["sidebar_minimize_state"]) && $_COOKIE["sidebar_minimize_state"] === "on") { 
							1. "src/js/layout/sidebar.js" adds "sidebar_minimize_state" cookie value to save the sidebar minimize state.
							2. Set data-kt-app-sidebar-minimize="on" attribute for body tag.
							3. Set data-kt-toggle-state="active" attribute to the toggle element with "kt_app_sidebar_toggle" id.
							4. Add "active" class to to sidebar toggle element with "kt_app_sidebar_toggle" id.
						}
						-->
		<div id="kt_app_sidebar_toggle" class="app-sidebar-toggle btn btn-icon btn-shadow btn-sm btn-color-muted btn-active-color-primary h-30px w-30px position-absolute top-50 start-100 translate-middle rotate" data-kt-toggle="true" data-kt-toggle-state="active" data-kt-toggle-target="body" data-kt-toggle-name="app-sidebar-minimize">
			<i class="ki-duotone ki-black-left-line fs-3 rotate-180">
				<span class="path1"></span>
				<span class="path2"></span>
			</i>
		</div>
		<!--end::Sidebar toggle-->
	</div>
	<!--end::Logo-->

	<!--begin::sidebar menu-->
	<div class="app-sidebar-menu overflow-hidden flex-column-fluid">
		<!--begin::Menu wrapper-->
		<div id="kt_app_sidebar_menu_wrapper" class="app-sidebar-wrapper">
			<!--begin::Scroll wrapper-->
			<div id="kt_app_sidebar_menu_scroll" class="scroll-y my-5 mx-3" data-kt-scroll="true" data-kt-scroll-activate="true" data-kt-scroll-height="auto" data-kt-scroll-dependencies="#kt_app_sidebar_logo, #kt_app_sidebar_footer" data-kt-scroll-wrappers="#kt_app_sidebar_menu" data-kt-scroll-offset="5px" data-kt-scroll-save-state="true">
				<!--begin::Menu-->
				<div class="menu menu-column menu-rounded menu-sub-indention fw-semibold fs-6" id="#kt_app_sidebar_menu" data-kt-menu="true" data-kt-menu-expand="false">
					<!--begin:Menu item-->
					<div class="menu-item  <?php echo urisegments()[2] == 'dashboard' ? 'hover show' : '' ?>">
					
						<!--begin:Menu link-->
						<a class="menu-link" href="<?= url('/dw-admin/dashboard') ?>">
							<span class="menu-icon"><i class="ki-duotone ki-element-11 fs-2"><span class="path1"></span><span class="path2"></span><span class="path3"></span><span class="path4"></span></i></span>
							<span class="menu-title">Dashboard</span>
						</a>
						<!--end:Menu link-->
					</div>
					<!--end:Menu item-->
					<!--begin:Menu item-->
					<div data-kt-menu-trigger="click" class="menu-item menu-accordion <?php echo in_array(urisegments()[2], ['product', 'add-product', 'categories', 'add-category','edit-product', 'add-variation']) ? 'hover show' : '' ?>">
						<!--begin:Menu link-->
						<span class="menu-link">
							<span class="menu-icon"><i class="ki-duotone ki-abstract-26 fs-2"><span class="path1"></span><span class="path2"></span></i></span>
							<span class="menu-title">Products</span>
							<span class="menu-arrow"></span>
						</span>
						<!--end:Menu link-->
						<!--begin:Menu sub-->
						<div class="menu-sub menu-sub-accordion">
							<!--begin:Menu item-->
							<div class="menu-item <?php echo urisegments()[2] == 'product' ? 'hover show' : ''  ?>">
								<!--begin:Menu link-->
								<a class="menu-link" href="<?= url('/dw-admin/product') ?>">
									<span class="menu-bullet">
										<span class="bullet bullet-dot"></span>
									</span>
									<span class="menu-title">Product lists</span>
								</a>
								<!--end:Menu link-->
							</div>
							<!--end:Menu item-->
							<!--begin:Menu item-->
							<div class="menu-item <?php echo urisegments()[2] == 'add-product' ? 'hover show' : ''  ?>">
								<!--begin:Menu link-->
								<a class="menu-link" href="<?= url('/dw-admin/add-product') ?>">
									<span class="menu-bullet">
										<span class="bullet bullet-dot"></span>
									</span>
									<span class="menu-title">Add Product</span>
								</a>
								<!--end:Menu link-->
							</div>
							<!--end:Menu item-->
							<!--begin:Menu item-->

							<!--end:Menu item-->
							<!--begin:Menu item-->
							<!-- <div class="menu-item">
											
											<a class="menu-link" href="<?= url('/dw-admin/add-product-category') ?>">
												<span class="menu-bullet">
													<span class="bullet bullet-dot"></span>
												</span>
												<span class="menu-title">Add product category</span>
											</a>
											
										</div> -->
							<!--end:Menu item-->
							<!--end:Menu item-->
							<!--begin:Menu item-->
							<div class="menu-item <?php echo urisegments()[2] == 'categories' ? 'hover show' : ''  ?>">
								<!--begin:Menu link-->
								<a class="menu-link" href="<?= url('/dw-admin/categories') ?>">
									<span class="menu-bullet">
										<span class="bullet bullet-dot"></span>
									</span>
									<span class="menu-title">Categories</span>
								</a>
								<!--end:Menu link-->
							</div>
							<!--end:Menu item-->

							<!--begin:Menu item-->
							<div class="menu-item <?php echo urisegments()[2] == 'add-category' ? 'hover show' : ''  ?>">
								<!--begin:Menu link-->
								<a class="menu-link" href="<?= url('/dw-admin/add-category') ?>">
									<span class="menu-bullet">
										<span class="bullet bullet-dot"></span>
									</span>
									<span class="menu-title">Add Category</span>
								</a>
								<!--end:Menu link-->
							</div>
							<!--end:Menu item-->

							<!--begin:Menu item-->
							<!-- <div class="menu-item <?php echo urisegments()[2] == 'add-variation' ? 'hover show' : ''  ?>">
								<a class="menu-link" href="<?= url('/dw-admin/add-variation') ?>">
									<span class="menu-bullet">
										<span class="bullet bullet-dot"></span>
									</span>
									<span class="menu-title">Add Variation</span>
								</a>
							</div> -->
							<!--end:Menu item-->

							<!--begin:Menu item-->

							<!--end:Menu item-->
						</div>
						<!--end:Menu sub-->
					</div>
					<!--end:Menu item-->


					<!--begin:Menu item-->
					<div data-kt-menu-trigger="click" class="menu-item menu-accordion <?php echo in_array(urisegments()[2], ['order-list', 'order-details','add-order','invoice','create-invoice','edit-order']) ? 'hover show' : '' ?>">
						<!--begin:Menu link-->
						<span class="menu-link">
							<span class="menu-icon">
								<i class="ki-duotone ki-address-book fs-2">
									<span class="path1"></span>
									<span class="path2"></span>
									<span class="path3"></span>
								</i>
							</span>
							<span class="menu-title">Sales</span>
							<span class="menu-arrow"></span>
						</span>
						<!--end:Menu link-->
						<!--begin:Menu sub-->
						<div class="menu-sub menu-sub-accordion">
							<!--begin:Menu item-->
							<div class="menu-item <?php echo urisegments()[2] == 'order-list' ? 'hover show' : ''  ?>">
								<!--begin:Menu link-->
								<a class="menu-link" href="<?= url('/dw-admin/order-list') ?>">
									<span class="menu-bullet">
										<span class="bullet bullet-dot"></span>
									</span>
									<span class="menu-title">Orders Listing</span>
								</a>
								<!--end:Menu link-->
							</div>
							<!--end:Menu item-->
							<!--begin:Menu item-->
							<div class="menu-item <?php echo urisegments()[2] == 'order-details' ? 'hover show' : ''  ?>">
								<!--begin:Menu link-->
								<a class="menu-link" href="<?= url('/dw-admin/order-details') ?>">
									<span class="menu-bullet">
										<span class="bullet bullet-dot"></span>
									</span>
									<span class="menu-title">Order Details</span>
								</a>
								<!--end:Menu link-->
							</div>
							<!--end:Menu item-->
							<!--begin:Menu item-->
							<div class="menu-item <?php echo urisegments()[2] == 'add-order' ? 'hover show' : ''  ?>">
								<!--begin:Menu link-->
								<a class="menu-link" href="<?= url('/dw-admin/add-order') ?>">
									<span class="menu-bullet">
										<span class="bullet bullet-dot"></span>
									</span>
									<span class="menu-title">Add Order</span>
								</a>
								<!--end:Menu link-->
							</div>
							<!--end:Menu item-->
							<!--begin:Menu item-->

							<!--end:Menu item-->
							<!--begin:Menu item-->
							<div class="menu-item <?php echo urisegments()[2] == 'invoice' ? 'hover show' : ''  ?>">
								<!--begin:Menu link-->
								<a class="menu-link" href="<?= url('/dw-admin/invoice') ?>">
									<span class="menu-bullet">
										<span class="bullet bullet-dot"></span>
									</span>
									<span class="menu-title">View Invoices</span>
								</a>
								<!--end:Menu link-->
							</div>
							<!--end:Menu item-->
							<!--begin:Menu item-->
							<div class="menu-item <?php echo urisegments()[2] == 'create-invoice' ? 'hover show' : ''  ?>">
								<!--begin:Menu link-->
								<a class="menu-link" href="<?= url('/dw-admin/create-invoice') ?>">
									<span class="menu-bullet">
										<span class="bullet bullet-dot"></span>
									</span>
									<span class="menu-title">Create Invoice</span>
								</a>
								<!--end:Menu link-->
							</div>
							<!--end:Menu item-->
						</div>
						<!--end:Menu sub-->
					</div>
					<!--end:Menu item-->


					<!--begin:Menu item-->
					<div data-kt-menu-trigger="click" class="menu-item menu-accordion menu-sub-indention <?php echo in_array(urisegments()[2], ['getting-started', 'customer-list','customer-details']) ? 'hover show' : '' ?>">
						<!--begin:Menu link-->
						<span class="menu-link">
							<span class="menu-icon"><i class="ki-duotone ki-user fs-2"><span class="path1"></span><span class="path2"></span></i></span>
							<span class="menu-title">Customers</span>
							<span class="menu-arrow"></span>
						</span>
						<!--end:Menu link-->
						<!--begin:Menu sub-->
						<div class="menu-sub menu-sub-accordion">
							<!--begin:Menu item-->
							<div class="menu-item <?php echo urisegments()[2] == 'getting-started' ? 'hover show' : ''  ?>"><!--begin:Menu link-->
								<a class="menu-link" href="<?= url('/dw-admin/getting-started') ?>">
									<span class="menu-bullet">
										<span class="bullet bullet-dot"></span>
									</span><span class="menu-title">Getting Started</span>
								</a>
								<!--end:Menu link-->
							</div>
							<!--begin:Menu item-->
							<div class="menu-item <?php echo urisegments()[2] == 'customer-list' ? 'hover show' : ''  ?>">
								<!--begin:Menu link-->
								<a class="menu-link" href="<?= url('/dw-admin/customer-list') ?>">
									<span class="menu-bullet">
										<span class="bullet bullet-dot"></span>
									</span>
									<span class="menu-title">Customers Listing</span>
								</a>
								<!--end:Menu link-->
							</div>
							<!--end:Menu item-->
							<!--begin:Menu item-->
							<div class="menu-item <?php echo urisegments()[2] == 'customer-details' ? 'hover show' : ''  ?>">
								<!--begin:Menu link-->
								<a class="menu-link" href="<?= url('/dw-admin/customer-details') ?>">
									<span class="menu-bullet">
										<span class="bullet bullet-dot"></span>
									</span>
									<span class="menu-title">Customers Details</span>
								</a>
								<!--end:Menu link-->
							</div>
							<!--end:Menu item-->
						</div>
						<!--end:Menu sub-->
					</div>
					<!--end:Menu item-->


					<!--begin:Menu item-->
					<div class="menu-item <?php echo urisegments()[2] == 'theme' ? 'hover show' : '' ?>">
						<!--begin:Menu link-->
						<a class="menu-link" href="<?= url('/dw-admin/theme') ?>">
							<span class="menu-icon"><i class="ki-duotone ki-element-7 fs-2"><span class="path1"></span><span class="path2"></span></i></span>
							<span class="menu-title">Themes</span>
						</a>
						<!--end:Menu link-->
					</div>
					<!--end:Menu item-->

					<!--begin:Menu item-->
					<div class="menu-item  <?php echo in_array(urisegments()[2], ['vendor', 'vendor-store-list','vendor-store']) ? 'hover show' : '' ?>">
						<!--begin:Menu link-->
						<a class="menu-link" href="<?= url('/dw-admin/vendor') ?>">
						<span class="menu-icon"><i class="ki-duotone ki-bank fs-2"><span class="path1"></span><span class="path2"></span></i></span>
							<span class="menu-title">Vendors</span>
						</a>
						<!--end:Menu link-->
					</div>
					<!--end:Menu item-->


					<!--begin:Menu item-->
					<div class="menu-item <?php echo urisegments()[2] == 'settings' ? 'hover show' : '' ?>">
						<!--begin:Menu link-->
						<a class="menu-link" href="<?= url('/dw-admin/settings') ?>">
							<span class="menu-icon"><i class="ki-duotone ki-abstract-13 fs-2"><span class="path1"></span><span class="path2"></span></i></span>
							<span class="menu-title">Settings</span>
						</a>
						<!--end:Menu link-->
					</div>
					<!--end:Menu item-->
				</div>
				<!--end::Menu-->
			</div>
			<!--end::Scroll wrapper-->
		</div>
		<!--end::Menu wrapper-->
	</div>
	<!--end::sidebar menu-->

</div>
<!--end::Sidebar-->