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
					<h1 class="page-heading d-flex text-gray-900 fw-bold fs-3 flex-column justify-content-center my-0">Edit Product</h1>
					<!--end::Title-->
					<!--begin::Breadcrumb-->
					<ul class="breadcrumb breadcrumb-separatorless fw-semibold fs-7 my-0 pt-1">
						<!--begin::Item-->
						<li class="breadcrumb-item text-muted">
							<a href="<?= url('/dw-admin/dashboard') ?>" class="text-muted text-hover-primary">Home</a>
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
						<div class="menu menu-sub menu-sub-dropdown w-250px w-md-300px" data-kt-menu="true" id="kt_menu_65a1214ba16ba">
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
										<select class="form-select form-select-solid" multiple="multiple" data-kt-select2="true" data-close-on-select="false" data-placeholder="Select option" data-dropdown-parent="#kt_menu_65a1214ba16ba" data-allow-clear="true">
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
				<!--begin::Form-->
				<form id="kt_ecommerce_add_product_form" action="<?php echo url('/dw-admin/update-product') ?>" method="POST" enctype="multipart/form-data" class="form d-flex flex-column flex-lg-row">
				    <?=  csrf_field();  ?>
					<input type="hidden" name="product_id" value="<?php echo $product->id ?>">	
					<input type="hidden" name="old_avatar" value="<?php echo $product->thumb_img ?>">	
				<!--begin::Aside column-->
					<div class="d-flex flex-column gap-7 gap-lg-10 w-100 w-lg-300px mb-7 me-lg-10">
						<!--begin::Thumbnail settings-->
						<div class="card card-flush py-4">
							<!--begin::Card header-->
							<div class="card-header">
								<!--begin::Card title-->
								<div class="card-title">
									<h2>Thumbnail</h2>
								</div>
								<!--end::Card title-->
							</div>
							<!--end::Card header-->
							<!--begin::Card body-->
							<div class="card-body text-center pt-0">
								<!--begin::Image input-->
								<div class="image-input image-input-empty image-input-outline image-input-placeholder mb-3" data-kt-image-input="true">
									<!--begin::Preview existing avatar-->
									<div class="image-input-wrapper w-150px h-150px" style="background-image: url(<?php echo $product->thumb_img ?? '#' ?>)"></div>
									<!--end::Preview existing avatar-->
									<!--begin::Label-->
									<label class="btn btn-icon btn-circle btn-active-color-primary w-25px h-25px bg-body shadow" data-kt-image-input-action="change" data-bs-toggle="tooltip" title="Change avatar">
										<i class="ki-duotone ki-pencil fs-7">
											<span class="path1"></span>
											<span class="path2"></span>
										</i>
										<!--begin::Inputs-->
										<input type="file" name="avatar" accept=".png, .jpg, .jpeg" />
										<input type="hidden" name="avatar_remove" />
										<!--end::Inputs-->
									</label>
									<!--end::Label-->
									<!--begin::Cancel-->
									<span class="btn btn-icon btn-circle btn-active-color-primary w-25px h-25px bg-body shadow" data-kt-image-input-action="cancel" data-bs-toggle="tooltip" title="Cancel avatar">
										<i class="ki-duotone ki-cross fs-2">
											<span class="path1"></span>
											<span class="path2"></span>
										</i>
									</span>
									<!--end::Cancel-->
									<!--begin::Remove-->
									<span class="btn btn-icon btn-circle btn-active-color-primary w-25px h-25px bg-body shadow" data-kt-image-input-action="remove" data-bs-toggle="tooltip" title="Remove avatar">
										<i class="ki-duotone ki-cross fs-2">
											<span class="path1"></span>
											<span class="path2"></span>
										</i>
									</span>
									<!--end::Remove-->
								</div>
								<!--end::Image input-->
								<!--begin::Description-->
								<div class="text-muted fs-7">Set the product thumbnail image. Only *.png, *.jpg and *.jpeg image files are accepted</div>
								<!--end::Description-->
							</div>
							<!--end::Card body-->
						</div>
						<!--end::Thumbnail settings-->
						<!--begin::Status-->
						<div class="card card-flush py-4">
							<!--begin::Card header-->
							<div class="card-header">
								<!--begin::Card title-->
								<div class="card-title">
									<h2>Status</h2>
								</div>
								<!--end::Card title-->
								<!--begin::Card toolbar-->
								  <?php 
									 $class = '';
									 if($product->status  == 'Published'){
										$class  = 'bg-success';
									 }elseif($product->status  == 'Draft'){
										$class  = 'bg-primary';
									 }else{
										$class  = 'bg-danger';
									 }
									?>
								<div class="card-toolbar">
									<div class="rounded-circle <?php echo $class; ?> w-15px h-15px" id="kt_ecommerce_add_product_status"></div>
								</div>
								<!--begin::Card toolbar-->
							</div>
							<!--end::Card header-->
							<!--begin::Card body-->
							<div class="card-body pt-0">
								<!--begin::Select2-->
								<!-- 'Published','Draft','Inactive','Scheduled' -->
								<select class="form-select mb-2" data-control="select2" name="status" data-hide-search="true" data-placeholder="Select an option" id="kt_ecommerce_add_product_status_select">
									<option></option>
									<option value="published" <?php echo $product->status == 'Published' ? 'selected' : ''?>>Published</option>
									<option value="draft" <?php echo $product->status == 'Draft' ? 'selected' : ''?>>Draft</option>
									<option value="inactive" <?php echo $product->status == 'Inactive' ? 'selected' : ''?>>Inactive</option>
								</select>
								<!--end::Select2-->
								<!--begin::Description-->
								<div class="text-muted fs-7">Set the product status.</div>
								<!--end::Description-->
								<!--begin::Datepicker-->
								<div class="d-none mt-10">
									<label for="kt_ecommerce_add_product_status_datepicker" class="form-label">Select publishing date and time</label>
									<input class="form-control" id="kt_ecommerce_add_product_status_datepicker" placeholder="Pick date & time" />
								</div>
								<!--end::Datepicker-->
							</div>
							<!--end::Card body-->
						</div>
						<!--end::Status-->
						<!--begin::Category & tags-->
						<div class="card card-flush py-4">
							<!--begin::Card header-->
							<div class="card-header">
								<!--begin::Card title-->
								<div class="card-title">
									<h2>Product Details</h2>
								</div>
								<!--end::Card title-->
							</div>
							<!--end::Card header-->
							<!--begin::Card body-->
							<div class="card-body pt-0">
								<!--begin::Input group-->
								<a href="#" class="btn btn-light-primary btn-sm mb-5 show-cate-choose-modal">
									<i class="ki-duotone ki-plus fs-2"></i>Choose category
								</a>
								<div class="category-step">
								   <?php  foreach($category as $item): ?>
										<ul class="d-flex mb-4">
											<?php  foreach($item['reversed_words'] as $value): ?>
											<li><?php echo $value; ?></li>
											<?php  endforeach ?>
											<input type="hidden" name="category[]" value="<?php echo $item['category_id'] ?>">
											<li class="remove-media" data-type="category" data-id="<?php echo $item['id'] ?>"><i class="fas fa-trash-alt"></i>
										</ul>
								   <?php  endforeach ?>
								</div>
								<!--begin::Description-->
								<div class="text-muted fs-7 mb-7">Add product to a category.</div>
								<!--end::Description-->
								<!--end::Input group-->
								<!--begin::Button-->
								<a href="<?= url('/dw-admin/add-category') ?>" class="btn btn-light-primary btn-sm mb-10">
									<i class="ki-duotone ki-plus fs-2"></i>Create new category</a>
								<!--end::Button-->
								<!--begin::Input group-->
								<!--begin::Label-->
								<label class="form-label d-block">Tags</label>
								<!--end::Label-->
								<!--begin::Input-->
								<input id="kt_ecommerce_add_product_tags" name="kt_ecommerce_add_product_tags" class="form-control mb-2" value="<?php echo $product->tags ?? null ?>" />
								<!--end::Input-->
								<!--begin::Description-->
								<div class="text-muted fs-7">Add tags to a product.</div>
								<!--end::Description-->
								<!--end::Input group-->
							</div>
							<!--end::Card body-->
						</div>
						<!--end::Category & tags-->

					</div>
					<!--end::Aside column-->
					<!--begin::Main column-->
					<div class="d-flex flex-column flex-row-fluid gap-7 gap-lg-10">
						<!--begin:::Tabs-->
						<ul class="nav nav-custom nav-tabs nav-line-tabs nav-line-tabs-2x border-0 fs-4 fw-semibold mb-n2">
							<!--begin:::Tab item-->
							<li class="nav-item">
								<a class="nav-link text-active-primary pb-4 active" data-bs-toggle="tab" href="#kt_ecommerce_add_product_general">General</a>
							</li>
							<!--end:::Tab item-->
							<!--begin:::Tab item-->
							<li class="nav-item">
								<a class="nav-link text-active-primary pb-4" data-bs-toggle="tab" href="#kt_ecommerce_add_product_advanced">Advanced</a>
							</li>
							<!--end:::Tab item-->
							<!--begin:::Tab item-->
							<!-- <li class="nav-item">
													<a class="nav-link text-active-primary pb-4" data-bs-toggle="tab" href="#kt_ecommerce_add_product_reviews">Reviews</a>
												</li> -->
							<!--end:::Tab item-->
						</ul>
						<!--end:::Tabs-->
						<!--begin::Tab content-->
						<div class="tab-content">
							<!--begin::Tab pane-->
							<div class="tab-pane fade show active" id="kt_ecommerce_add_product_general" role="tab-panel">
								<div class="d-flex flex-column gap-7 gap-lg-10">
									<!--begin::General options-->
									<div class="card card-flush py-4">
										<!--begin::Card header-->
										<div class="card-header">
											<div class="card-title">
												<h2>General</h2>
											</div>
										</div>
										<!--end::Card header-->
										<!--begin::Card body-->
										<div class="card-body pt-0">
											<!--begin::Input group-->
											<div class="mb-10 fv-row">
												<!--begin::Label-->
												<label class="required form-label">Product Name</label>
												<!--end::Label-->
												<!--begin::Input-->
												<input type="text" name="product_name" class="form-control mb-2" placeholder="Product name" value="<?php echo $product->name ?>" />
												<!--end::Input-->
												<!--begin::Description-->
												<div class="text-muted fs-7">A product name is required and recommended to be unique.</div>
												<!--end::Description-->
											</div>
											<!--end::Input group-->
											<!--begin::Input group-->
											<div>
												<!--begin::Label-->
												<label class="form-label">Description</label>
												<!--end::Label-->
												<!--begin::Editor-->
												<div id="kt_ecommerce_add_product_description" name="kt_ecommerce_add_product_description" class="min-h-200px mb-2"><?php echo $product->description ?></div>
												<!--end::Editor-->
												<!--begin::Description-->
												<div class="text-muted fs-7">Set a description to the product for better visibility.</div>
												<!--end::Description-->
											</div>
											<!--end::Input group-->
										</div>
										<!--end::Card header-->
									</div>
									<!--end::General options-->
									<!--begin::Media-->
									<div class="card card-flush py-4">
										<!--begin::Card header-->
										<div class="card-header">
											<div class="card-title">
												<h2>Media</h2>
											</div>
										</div>
										<!--end::Card header-->
										<!--begin::Card body-->
										<div class="card-body pt-0">
											<!--begin::Input group-->
											<div class="fv-row mb-2">
												<!--begin::Dropzone-->
												<div class="dropzone" id="kt_ecommerce_add_product_media">
													<!--begin::Message-->
													<div class="dz-message needsclick">
														<!--begin::Icon-->
														<i class="ki-duotone ki-file-up text-primary fs-3x">
															<span class="path1"></span>
															<span class="path2"></span>
														</i>
														<!--end::Icon-->
														<!--begin::Info-->
														<div class="ms-4">
															<h3 class="fs-5 fw-bold text-gray-900 mb-1">Drop files here or click to upload.</h3>
															<span class="fs-7 fw-semibold text-gray-500">Upload up to 10 files</span>
														</div>
														<!--end::Info-->
													</div>
												</div>
												<!--end::Dropzone-->
												<!--begin::Description-->
												<div class="text-muted fs-7">Set the product media gallery.</div>
												<!--end::Description-->
												<div class="show-media-file mt-5">
													 <div class="row">
													 	<?php  foreach($productMedia as $media):  ?>
															<div class="col-md-2 position-relative">
															  <img src="<?php echo $media->media_path ?>" alt="media" class="w-100 rounded" />
															  <span class="remove-media position-absolute" data-type="media" data-id="<?php echo $media->id ?>"><i class="fas fa-trash-alt text-danger"></i></span>
														  </div>
													 	<?php  endforeach  ?>
													 </div>
												</div>
											</div>
											<!--end::Input group-->
										</div>
										<!--end::Card header-->
									</div>
									<!--end::Media-->
									<!--begin::Pricing-->
									<div class="card card-flush py-4">
										<!--begin::Card header-->
										<div class="card-header">
											<div class="card-title">
												<h2>Pricing</h2>
											</div>
										</div>
										<!--end::Card header-->
										<!--begin::Card body-->
										<div class="card-body pt-0">
											<!--begin::Input group-->
											<div class="mb-10 fv-row">
												<!--begin::Label-->
												<label class="required form-label">Base Price</label>
												<!--end::Label-->
												<!--begin::Input-->
												<input type="text" name="price" class="form-control mb-2" placeholder="Product price" value="<?php echo $product->base_price ?>" />
												<!--end::Input-->
												<!--begin::Description-->
												<div class="text-muted fs-7">Set the product price.</div>
												<!--end::Description-->
											</div>
											<!--end::Input group-->
											<!--begin::Input group-->
											<div class="fv-row mb-10">
												<!--begin::Label-->
												<label class="fs-6 fw-semibold mb-2">Discount Type
													<span class="ms-1" data-bs-toggle="tooltip" title="Select a discount type that will be applied to this product">
														<i class="ki-duotone ki-information-5 text-gray-500 fs-6">
															<span class="path1"></span>
															<span class="path2"></span>
															<span class="path3"></span>
														</i>
													</span></label>
												<!--End::Label-->
												<!--begin::Row-->
												<div class="row row-cols-1 row-cols-md-3 row-cols-lg-1 row-cols-xl-3 g-9" data-kt-buttons="true" data-kt-buttons-target="[data-kt-button='true']">
													<!--begin::Col-->
													<div class="col">
														<!--begin::Option-->
														<label class="btn btn-outline btn-outline-dashed btn-active-light-primary <?php echo $product->discount_type == 'No Discount' ? 'active' : ''  ?>  d-flex text-start p-6" data-kt-button="true">
															<!--begin::Radio-->
															<span class="form-check form-check-custom form-check-solid form-check-sm align-items-start mt-1">
																<input class="form-check-input" type="radio" name="discount_option" value="1" <?php echo $product->discount_type == 'No Discount' ? 'checked' : ''  ?>  />
															</span>
															<!--end::Radio-->
															<!--begin::Info-->
															<span class="ms-5">
																<span class="fs-4 fw-bold text-gray-800 d-block">No Discount</span>
															</span>
															<!--end::Info-->
														</label>
														<!--end::Option-->
													</div>
													<!--end::Col-->
													<!--begin::Col-->
													<div class="col">
														<!--begin::Option-->
														<label class="btn btn-outline btn-outline-dashed btn-active-light-primary <?php echo $product->discount_type == 'Percentage' ? 'active' : ''  ?>  d-flex text-start p-6" data-kt-button="true">
															<!--begin::Radio-->
															<span class="form-check form-check-custom form-check-solid form-check-sm align-items-start mt-1">
																<input class="form-check-input" type="radio" name="discount_option" value="2" <?php echo $product->discount_type == 'Percentage' ? 'checked' : ''  ?>  />
															</span>
															<!--end::Radio-->
															<!--begin::Info-->
															<span class="ms-5">
																<span class="fs-4 fw-bold text-gray-800 d-block">Percentage %</span>
															</span>
															<!--end::Info-->
														</label>
														<!--end::Option-->
													</div>
													<!--end::Col-->
													<!--begin::Col-->
													<div class="col">
														<!--begin::Option-->
														<label class="btn btn-outline btn-outline-dashed btn-active-light-primary <?php echo $product->discount_type == 'Fixed' ? 'active' : '' ?> d-flex text-start p-6" data-kt-button="true">
															<!--begin::Radio-->
															<span class="form-check form-check-custom form-check-solid form-check-sm align-items-start mt-1">
																<input class="form-check-input" type="radio" name="discount_option" value="3"  <?php echo $product->discount_type == 'Fixed' ? 'checked' : ''  ?> />
															</span>
															<!--end::Radio-->
															<!--begin::Info-->
															<span class="ms-5">
																<span class="fs-4 fw-bold text-gray-800 d-block">Fixed Price</span>
															</span>
															<!--end::Info-->
														</label>
														<!--end::Option-->
													</div>
													<!--end::Col-->
												</div>
												<!--end::Row-->
											</div>
											<!--end::Input group-->
											<!--begin::Input group-->
											<div class="mb-10 fv-row <?php echo $product->discount_type == 'Percentage' ? '' : 'd-none' ?>" id="kt_ecommerce_add_product_discount_percentage">
												<!--begin::Label-->
												<label class="form-label">Set Discount Percentage</label>
												<!--end::Label-->
												<!--begin::Slider-->
												<div class="d-flex flex-column text-center mb-5">
													<div class="d-flex align-items-start justify-content-center mb-7">
														<span class="fw-bold fs-3x" id="kt_ecommerce_add_product_discount_label">0</span>
														<span class="fw-bold fs-4 mt-1 ms-2">%</span>
													</div>
													<div id="kt_ecommerce_add_product_discount_slider" class="noUi-sm"></div>
												</div>
												<!--end::Slider-->
												<!--begin::Description-->
												<div class="text-muted fs-7">Set a percentage discount to be applied on this product.</div>
												<!--end::Description-->
											</div>
											<!--end::Input group-->
											<!--begin::Input group-->
											<div class="mb-10 fv-row <?php echo $product->discount_type == 'Fixed' ? '' : 'd-none' ?>" id="kt_ecommerce_add_product_discount_fixed">
												<!--begin::Label-->
												<label class="form-label">Fixed Discounted Price</label>
												<!--end::Label-->
												<!--begin::Input-->
												<input type="text" name="dicsounted_price" class="form-control mb-2" placeholder="Discounted price" />
												<!--end::Input-->
												<!--begin::Description-->
												<div class="text-muted fs-7">Set the discounted product price. The product will be reduced at the determined fixed price</div>
												<!--end::Description-->
											</div>
											<!--end::Input group-->
											<!--begin::Tax-->
											<div class="d-flex flex-wrap gap-5">
												<!--begin::Input group-->
												<div class="fv-row w-100 flex-md-root">
													<!--begin::Label-->
													<label class="required form-label">Tax Class</label>
													<!--end::Label-->
													<!--begin::Select2-->
													<select class="form-select mb-2" name="tax" data-control="select2" data-hide-search="true" data-placeholder="Select an option">
														<option></option>
														<option value="Tax Free" <?php echo $product->tax_type == 'Tax Free' ? 'selected' : ''?>>Tax Free</option>
														<option value="Taxable Goods" <?php echo $product->tax_type == 'Taxable Goods' ? 'selected' : ''?>>Taxable Goods</option>
														<option value="Downloadable Product" <?php echo $product->tax_type == 'Downloadable Product' ? 'selected' : ''?>>Downloadable Product</option>
													</select>
													<!--end::Select2-->
													<!--begin::Description-->
													<div class="text-muted fs-7">Set the product tax class.</div>
													<!--end::Description-->
												</div>
												<!--end::Input group-->
												<!--begin::Input group-->
												<div class="fv-row w-100 flex-md-root">
													<!--begin::Label-->
													<label class="form-label">VAT Amount (%)</label>
													<!--end::Label-->
													<!--begin::Input-->
													<input type="text" class="form-control mb-2" name="vat_amount" value="<?php echo $product->vat_amount ?? null   ?>" />
													<!--end::Input-->
													<!--begin::Description-->
													<div class="text-muted fs-7">Set the product VAT about.</div>
													<!--end::Description-->
												</div>
												<!--end::Input group-->
											</div>
											<!--end:Tax-->
										</div>
										<!--end::Card header-->
									</div>
									<!--end::Pricing-->
								</div>
							</div>
							<!--end::Tab pane-->
							<!--begin::Tab pane-->
							<div class="tab-pane fade" id="kt_ecommerce_add_product_advanced" role="tab-panel">
								<div class="d-flex flex-column gap-7 gap-lg-10">
									<!--begin::Inventory-->
									<div class="card card-flush py-4">
										<!--begin::Card header-->
										<div class="card-header">
											<div class="card-title">
												<h2>Inventory</h2>
											</div>
										</div>
										<!--end::Card header-->
										<!--begin::Card body-->
										<div class="card-body pt-0">
											<!--begin::Input group-->
											<div class="mb-10 fv-row">
												<!--begin::Label-->
												<label class="required form-label">SKU</label>
												<!--end::Label-->
												<!--begin::Input-->
												<input type="text" name="sku" class="form-control mb-2" placeholder="SKU Number" value="<?php echo $product->sku ?>" />
												<!--end::Input-->
												<!--begin::Description-->
												<div class="text-muted fs-7">Enter the product SKU.</div>
												<!--end::Description-->
											</div>
											<!--end::Input group-->
											<!--begin::Input group-->
											<div class="mb-10 fv-row">
												<!--begin::Label-->
												<label class="required form-label">Barcode</label>
												<!--end::Label-->
												<!--begin::Input-->
												<input type="text" name="barcode" class="form-control mb-2" placeholder="Barcode Number" value="<?php echo $product->barcode ?>" />
												<!--end::Input-->
												<!--begin::Description-->
												<div class="text-muted fs-7">Enter the product barcode number.</div>
												<!--end::Description-->
											</div>
											<!--end::Input group-->
											<!--begin::Input group-->
											<div class="mb-10 fv-row">
												<!--begin::Label-->
												<label class="required form-label">Quantity</label>
												<!--end::Label-->
												<!--begin::Input-->
												<div class="d-flex gap-3">
													<input type="number" name="shelf" class="form-control mb-2" placeholder="On shelf" value="24" />
													<!-- <input type="number" name="warehouse" class="form-control mb-2" placeholder="In warehouse" /> -->
												</div>
												<!--end::Input-->
												<!--begin::Description-->
												<div class="text-muted fs-7">Enter the product quantity.</div>
												<!--end::Description-->
											</div>
											<!--end::Input group-->
											<!--begin::Input group-->
											<div class="fv-row">
												<!--begin::Label-->
												<label class="form-label">Allow Backorders</label>
												<!--end::Label-->
												<!--begin::Input-->
												<div class="form-check form-check-custom form-check-solid mb-2">
													<input class="form-check-input" name="allow_backorders" type="checkbox" value="yes" <?php echo $product->allow_backorder == 'yes' ? 'checked' : '' ?> />
													<label class="form-check-label">Yes</label>
												</div>
												<!--end::Input-->
												<!--begin::Description-->
												<div class="text-muted fs-7">Allow customers to purchase products that are out of stock.</div>
												<!--end::Description-->
											</div>
											<!--end::Input group-->
										</div>
										<!--end::Card header-->
									</div>
									<!--end::Inventory-->
									<!--begin::Variations-->
									<div class="card card-flush py-4">
										<!--begin::Card header-->
										<div class="card-header">
											<div class="card-title">
												<h2>Variations</h2>
											</div>
										</div>
										<!--end::Card header-->
										<!--begin::Card body-->
										<div class="card-body pt-0">
											<!--begin::Input group-->
											<div class="" data-kt-ecommerce-catalog-add-product="auto-options">
												<!--begin::Label-->
												<label class="form-label">Add Product Variations</label>
												<!--end::Label-->
												<!--begin::Repeater-->
												<div id="kt_ecommerce_add_product_options">
													<!--begin::Form group-->
													<div class="form-group">
														<div data-repeater-list="kt_ecommerce_add_product_options" class="d-flex flex-column gap-3">
														   <?php  foreach($productVeriation as $veriation):  ?>
															<div data-repeater-item="" class="form-group d-flex flex-wrap align-items-center gap-5">
																<!--begin::Select2-->
																<div class="w-100 w-md-200px">
																	<select class="form-select" name="product_option" data-placeholder="Select a variation" data-kt-ecommerce-catalog-add-product="product_option">
																		<option></option>
																		<option value="color" <?php echo $veriation->option == 'color' ? 'selected' : '' ?> >Color</option>
																		<option value="size" <?php echo $veriation->option == 'size' ? 'selected' : '' ?>>Size</option>
																		<option value="material" <?php echo $veriation->option == 'material' ? 'selected' : '' ?>>Material</option>
																		<option value="style" <?php echo $veriation->option == 'style' ? 'selected' : '' ?>>Style</option>
																	</select>
																</div>
																<!--end::Select2-->
																<!--begin::Input-->
																<input type="text" class="form-control mw-100 w-200px" name="product_option_value" value="<?php echo $veriation->value ?? null ?>" placeholder="Variation" />
																<!--end::Input-->
																<button type="button" data-repeater-delete="" class="btn btn-sm btn-icon btn-light-danger">
																	<i class="ki-duotone ki-cross fs-1">
																		<span class="path1"></span>
																		<span class="path2"></span>
																	</i>
																</button>
															</div>
														   <?php  endforeach  ?>
														</div>
													</div>
													<!--end::Form group-->
													<!--begin::Form group-->
													<div class="form-group mt-5">
														<button type="button" data-repeater-create="" class="btn btn-sm btn-light-primary">
															<i class="ki-duotone ki-plus fs-2"></i>Add another variation</button>
													</div>
													<!--end::Form group-->
												</div>
												<!--end::Repeater-->
											</div>
											<!--end::Input group-->
										</div>
										<!--end::Card header-->
									</div>
									<!--end::Variations-->
									<!--begin::Shipping-->
									<div class="card card-flush py-4">
										<!--begin::Card header-->
										<div class="card-header">
											<div class="card-title">
												<h2>Shipping</h2>
											</div>
										</div>
										<!--end::Card header-->
										<!--begin::Card body-->
										<div class="card-body pt-0">
											<!--begin::Input group-->
											<div class="fv-row">
												<!--begin::Input-->
												<div class="form-check form-check-custom form-check-solid mb-2">
													<input class="form-check-input" name="shipping" type="checkbox" id="kt_ecommerce_add_product_shipping_checkbox" value="1" <?php echo $product->product_type == 'Physical' ? 'checked' : '' ?> />
													<label class="form-check-label">This is a physical product</label>
												</div>
												<!--end::Input-->
												<!--begin::Description-->
												<div class="text-muted fs-7">Set if the product is a physical or digital item. Physical products may require shipping.</div>
												<!--end::Description-->
											</div>
											<!--end::Input group-->
											<!--begin::Shipping form-->
											<div id="kt_ecommerce_add_product_shipping" class="mt-10 <?php echo $product->product_type == 'Physical' ? '' : 'd-none' ?>">
												<!--begin::Input group-->
												<div class="mb-10 fv-row">
													<!--begin::Label-->
													<label class="form-label">Weight</label>
													<!--end::Label-->
													<!--begin::Editor-->
													<input type="text" name="weight" class="form-control mb-2" placeholder="Product weight" value="<?php echo $product->weight ?? null ?>" />
													<!--end::Editor-->
													<!--begin::Description-->
													<div class="text-muted fs-7">Set a product weight in kilograms (kg).</div>
													<!--end::Description-->
												</div>
												<!--end::Input group-->
												<!--begin::Input group-->
												<div class="fv-row">
													<!--begin::Label-->
													<label class="form-label">Dimension</label>
													<!--end::Label-->
													<!--begin::Input-->
													<div class="d-flex flex-wrap flex-sm-nowrap gap-3">
														<input type="number" name="width" class="form-control mb-2" placeholder="Width (w)" value="<?php echo $product->width ?? null ?>" />
														<input type="number" name="height" class="form-control mb-2" placeholder="Height (h)" value="<?php echo $product->height ?? null ?>" />
														<input type="number" name="length" class="form-control mb-2" placeholder="Lengtn (l)" value="<?php echo $product->length ?? null ?>" />
													</div>
													<!--end::Input-->
													<!--begin::Description-->
													<div class="text-muted fs-7">Enter the product dimensions in centimeters (cm).</div>
													<!--end::Description-->
												</div>
												<!--end::Input group-->
											</div>
											<!--end::Shipping form-->
										</div>
										<!--end::Card header-->
									</div>
									<!--end::Shipping-->
									<!--begin::Meta options-->
									<div class="card card-flush py-4">
										<!--begin::Card header-->
										<div class="card-header">
											<div class="card-title">
												<h2>Meta Options</h2>
											</div>
										</div>
										<!--end::Card header-->
										<!--begin::Card body-->
										<div class="card-body pt-0">
											<!--begin::Input group-->
											<div class="mb-10">
												<!--begin::Label-->
												<label class="form-label">Meta Tag Title</label>
												<!--end::Label-->
												<!--begin::Input-->
												<input type="text" class="form-control mb-2" name="meta_title" placeholder="Meta tag name" value="<?php echo $product->meta_title ?? null ?>" />
												<!--end::Input-->
												<!--begin::Description-->
												<div class="text-muted fs-7">Set a meta tag title. Recommended to be simple and precise keywords.</div>
												<!--end::Description-->
											</div>
											<!--end::Input group-->
											<!--begin::Input group-->
											<div class="mb-10">
												<!--begin::Label-->
												<label class="form-label">Meta Tag Description</label>
												<!--end::Label-->
												<!--begin::Editor-->
												<div id="kt_ecommerce_add_product_meta_description" name="kt_ecommerce_add_product_meta_description" class="min-h-100px mb-2"><?php echo $product->meta_description ?? null ?></div>
												<!--end::Editor-->
												<!--begin::Description-->
												<div class="text-muted fs-7">Set a meta tag description to the product for increased SEO ranking.</div>
												<!--end::Description-->
											</div>
											<!--end::Input group-->
											<!--begin::Input group-->
											<div>
												<!--begin::Label-->
												<label class="form-label">Meta Tag Keywords</label>
												<!--end::Label-->
												<!--begin::Editor-->
												<input id="kt_ecommerce_add_product_meta_keywords" name="kt_ecommerce_add_product_meta_keywords" class="form-control mb-2" value="<?php echo $product->meta_keyword ?? null ?>" />
												<!--end::Editor-->
												<!--begin::Description-->
												<div class="text-muted fs-7">Set a list of keywords that the product is related to. Separate the keywords by adding a comma
													<code>,</code>between each keyword.
												</div>
												<!--end::Description-->
											</div>
											<!--end::Input group-->
										</div>
										<!--end::Card header-->
									</div>
									<!--end::Meta options-->
								</div>
							</div>
							<!--end::Tab pane-->
							<!--begin::Tab pane-->
							<!-- <div class="tab-pane fade" id="kt_ecommerce_add_product_reviews" role="tab-panel">
													<div class="d-flex flex-column gap-7 gap-lg-10">
														<div class="card card-flush py-4">
															<div class="card-header">
																<div class="card-title">
																	<h2>Customer Reviews</h2>
																</div>
																<div class="card-toolbar">
																	<span class="fw-bold me-5">Overall Rating:</span>
																	<div class="rating">
																		<div class="rating-label checked">
																			<i class="ki-duotone ki-star fs-2"></i>
																		</div>
																		<div class="rating-label checked">
																			<i class="ki-duotone ki-star fs-2"></i>
																		</div>
																		<div class="rating-label checked">
																			<i class="ki-duotone ki-star fs-2"></i>
																		</div>
																		<div class="rating-label checked">
																			<i class="ki-duotone ki-star fs-2"></i>
																		</div>
																		<div class="rating-label">
																			<i class="ki-duotone ki-star fs-2"></i>
																		</div>
																	</div>
																</div>
															</div>
															<div class="card-body pt-0">
																<table class="table table-row-dashed fs-6 gy-5 my-0" id="kt_ecommerce_add_product_reviews">
																	<thead>
																		<tr class="text-start text-gray-500 fw-bold fs-7 text-uppercase gs-0">
																			<th class="w-10px pe-2">
																				<div class="form-check form-check-sm form-check-custom form-check-solid me-3">
																					<input class="form-check-input" type="checkbox" data-kt-check="true" data-kt-check-target="#kt_ecommerce_add_product_reviews .form-check-input" value="1" />
																				</div>
																			</th>
																			<th class="min-w-125px">Rating</th>
																			<th class="min-w-175px">Customer</th>
																			<th class="min-w-175px">Comment</th>
																			<th class="min-w-100px text-end fs-7">Date</th>
																		</tr>
																	</thead>
																	<tbody>
																		<tr>
																			<td>
																				<div class="form-check form-check-sm form-check-custom form-check-solid mt-1">
																					<input class="form-check-input" type="checkbox" value="1" />
																				</div>
																			</td>
																			<td data-order="rating-5">
																				<div class="rating">
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
																			<td>
																				<a href="#" class="d-flex text-gray-900 text-gray-800 text-hover-primary">
																					<div class="symbol symbol-circle symbol-25px me-3">
																						<div class="symbol-label bg-light-danger">
																							<span class="text-danger">M</span>
																						</div>
																					</div>
																					<span class="fw-bold">Melody Macy</span>
																				</a>
																			</td>
																			<td class="text-gray-600 fw-bold">I like this design</td>
																			<td class="text-end">
																				<span class="fw-semibold text-muted">Today</span>
																			</td>
																		</tr>
																		<tr>
																			<td>
																				<div class="form-check form-check-sm form-check-custom form-check-solid mt-1">
																					<input class="form-check-input" type="checkbox" value="1" />
																				</div>
																			</td>
																			<td data-order="rating-5">
																				<div class="rating">
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
																			<td>
																				<a href="#" class="d-flex text-gray-900 text-gray-800 text-hover-primary">
																					<div class="symbol symbol-circle symbol-25px me-3">
																						<span class="symbol-label" style="background-image:url(<?= url('/admin') ?>/assets/media/avatars/300-1.jpg)"></span>
																					</div>
																					<span class="fw-bold">Max Smith</span>
																				</a>
																			</td>
																			<td class="text-gray-600 fw-bold">Good product for outdoors or indoors</td>
																			<td class="text-end">
																				<span class="fw-semibold text-muted">day ago</span>
																			</td>
																		</tr>
																		<tr>
																			<td>
																				<div class="form-check form-check-sm form-check-custom form-check-solid mt-1">
																					<input class="form-check-input" type="checkbox" value="1" />
																				</div>
																			</td>
																			<td data-order="rating-4">
																				<div class="rating">
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
																			<td>
																				<a href="#" class="d-flex text-gray-900 text-gray-800 text-hover-primary">
																					<div class="symbol symbol-circle symbol-25px me-3">
																						<span class="symbol-label" style="background-image:url(<?= url('/admin') ?>/assets/media/avatars/300-5.jpg)"></span>
																					</div>
																					<span class="fw-bold">Sean Bean</span>
																				</a>
																			</td>
																			<td class="text-gray-600 fw-bold">Awesome quality with great materials used, but could be more comfortable</td>
																			<td class="text-end">
																				<span class="fw-semibold text-muted">11:20 PM</span>
																			</td>
																		</tr>
																		<tr>
																			<td>
																				<div class="form-check form-check-sm form-check-custom form-check-solid mt-1">
																					<input class="form-check-input" type="checkbox" value="1" />
																				</div>
																			</td>
																			<td data-order="rating-5">
																				<div class="rating">
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
																			<td>
																				<a href="#" class="d-flex text-gray-900 text-gray-800 text-hover-primary">
																					<div class="symbol symbol-circle symbol-25px me-3">
																						<span class="symbol-label" style="background-image:url(<?= url('/admin') ?>/assets/media/avatars/300-25.jpg)"></span>
																					</div>
																					<span class="fw-bold">Brian Cox</span>
																				</a>
																			</td>
																			<td class="text-gray-600 fw-bold">This is the best product I've ever used.</td>
																			<td class="text-end">
																				<span class="fw-semibold text-muted">2 days ago</span>
																			</td>
																		</tr>
																		<tr>
																			<td>
																				<div class="form-check form-check-sm form-check-custom form-check-solid mt-1">
																					<input class="form-check-input" type="checkbox" value="1" />
																				</div>
																			</td>
																			<td data-order="rating-3">
																				<div class="rating">
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
																			<td>
																				<a href="#" class="d-flex text-gray-900 text-gray-800 text-hover-primary">
																					<div class="symbol symbol-circle symbol-25px me-3">
																						<div class="symbol-label bg-light-warning">
																							<span class="text-warning">C</span>
																						</div>
																					</div>
																					<span class="fw-bold">Mikaela Collins</span>
																				</a>
																			</td>
																			<td class="text-gray-600 fw-bold">I thought it was just average, I prefer other brands</td>
																			<td class="text-end">
																				<span class="fw-semibold text-muted">July 25</span>
																			</td>
																		</tr>
																		<tr>
																			<td>
																				<div class="form-check form-check-sm form-check-custom form-check-solid mt-1">
																					<input class="form-check-input" type="checkbox" value="1" />
																				</div>
																			</td>
																			<td data-order="rating-5">
																				<div class="rating">
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
																			<td>
																				<a href="#" class="d-flex text-gray-900 text-gray-800 text-hover-primary">
																					<div class="symbol symbol-circle symbol-25px me-3">
																						<span class="symbol-label" style="background-image:url(<?= url('/admin') ?>/assets/media/avatars/300-9.jpg)"></span>
																					</div>
																					<span class="fw-bold">Francis Mitcham</span>
																				</a>
																			</td>
																			<td class="text-gray-600 fw-bold">Beautifully crafted. Worth every penny.</td>
																			<td class="text-end">
																				<span class="fw-semibold text-muted">July 24</span>
																			</td>
																		</tr>
																		<tr>
																			<td>
																				<div class="form-check form-check-sm form-check-custom form-check-solid mt-1">
																					<input class="form-check-input" type="checkbox" value="1" />
																				</div>
																			</td>
																			<td data-order="rating-4">
																				<div class="rating">
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
																			<td>
																				<a href="#" class="d-flex text-gray-900 text-gray-800 text-hover-primary">
																					<div class="symbol symbol-circle symbol-25px me-3">
																						<div class="symbol-label bg-light-danger">
																							<span class="text-danger">O</span>
																						</div>
																					</div>
																					<span class="fw-bold">Olivia Wild</span>
																				</a>
																			</td>
																			<td class="text-gray-600 fw-bold">Awesome value for money. Shipping could be faster tho.</td>
																			<td class="text-end">
																				<span class="fw-semibold text-muted">July 13</span>
																			</td>
																		</tr>
																		<tr>
																			<td>
																				<div class="form-check form-check-sm form-check-custom form-check-solid mt-1">
																					<input class="form-check-input" type="checkbox" value="1" />
																				</div>
																			</td>
																			<td data-order="rating-5">
																				<div class="rating">
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
																			<td>
																				<a href="#" class="d-flex text-gray-900 text-gray-800 text-hover-primary">
																					<div class="symbol symbol-circle symbol-25px me-3">
																						<div class="symbol-label bg-light-primary">
																							<span class="text-primary">N</span>
																						</div>
																					</div>
																					<span class="fw-bold">Neil Owen</span>
																				</a>
																			</td>
																			<td class="text-gray-600 fw-bold">Excellent quality, I got it for my son's birthday and he loved it!</td>
																			<td class="text-end">
																				<span class="fw-semibold text-muted">May 25</span>
																			</td>
																		</tr>		
																	</tbody>
																</table>
															</div>
														</div>
													</div>
												</div> -->
							<!--end::Tab pane-->
						</div>
						<!--end::Tab content-->
						<div class="d-flex justify-content-end">
							<!--begin::Button-->
							<a href="<?= url('/dw-admin/product') ?>" id="kt_ecommerce_add_product_cancel" class="btn btn-light me-5">Cancel</a>
							<!--end::Button-->
							<!--begin::Button-->
							<button type="submit" id="kt_ecommerce_add_product_submit" class="btn btn-primary">
								<span class="indicator-label">Save Changes</span>
								<span class="indicator-progress">Please wait...
									<span class="spinner-border spinner-border-sm align-middle ms-2"></span></span>
							</button>
							<!--end::Button-->
						</div>
					</div>
					<!--end::Main column-->
				</form>
				<!--end::Form-->
			</div>
			<!--end::Content container-->
		</div>
		<!--end::Content-->
	</div>
	<!--end::Content wrapper-->


	<!--begin::Modals-->
	<!--begin::Modal - Customers - Add-->
	<div class="modal fade" id="kt_modal_add_category" tabindex="-1" aria-hidden="true">
		<!--begin::Modal dialog-->
		<div class="modal-dialog modal-dialog-centered mw-650px">
			<!--begin::Modal content-->
			<div class="modal-content">
				<!--begin::Form-->
				<form class="form get-category-name" action="<?= url('dw-admin/get-category-name') ?>" method="POST" id="kt_modal_add_category_form" data-kt-redirect="" <?= url('/dw-admin/add-product') ?>">
					<?= csrf_field() ?>
					<!--begin::Modal header-->
					<div class="modal-header" id="kt_modal_add_category_header">
						<!--begin::Modal title-->
						<h2 class="fw-bold">Choose Category</h2>
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
							<!--begin::Label-->
							<label class="form-label">Choose category</label>
							<!--end::Label-->
							<!--begin::Input-->
							<select class="form-control sub_category mb-3" name="sub_category[]" id="sub_category">
								<option value="">Choose Category</option>
								<?php foreach ($categories as $item) : ?>
									<option value="<?php echo $item->id ?>"><?php echo $item->name ?></option>
								<?php endforeach ?>
							</select>
							<!--end::Input-->
						</div>

					</div>
					<!--end::Modal body-->
					<!--begin::Modal footer-->
					<div class="modal-footer flex-center">
						<!--begin::Button-->
						<button type="reset" id="kt_modal_add_category_cancel" data-bs-dismiss="modal" class="btn btn-light me-3">Discard</button>
						<!--end::Button-->
						<!--begin::Button-->
						<button type="submit" id="kt_modal_add_category_submit" class="btn btn-primary">
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
	<!--end::Modal - Customers - Add-->
	<!--end::Modals-->

	<?php include("common/footer.php") ?>