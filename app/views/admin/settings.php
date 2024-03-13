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
					<h1 class="page-heading d-flex text-gray-900 fw-bold fs-3 flex-column justify-content-center my-0">Settings</h1>
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
						<div class="menu menu-sub menu-sub-dropdown w-250px w-md-300px" data-kt-menu="true" id="kt_menu_65a12141a6414">
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
										<select class="form-select form-select-solid" multiple="multiple" data-kt-select2="true" data-close-on-select="false" data-placeholder="Select option" data-dropdown-parent="#kt_menu_65a12141a6414" data-allow-clear="true">
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
				<!--begin::Card-->
				<div class="card card-flush">
					<!--begin::Card body-->
					<div class="card-body">
						<!--begin:::Tabs-->
						<ul class="nav nav-tabs nav-line-tabs nav-line-tabs-2x border-transparent fs-4 fw-semibold mb-15">
							<!--begin:::Tab item-->
							<li class="nav-item">
								<a class="nav-link text-active-primary d-flex align-items-center pb-5 active" data-bs-toggle="tab" href="#kt_ecommerce_settings_general">
									<i class="ki-duotone ki-home fs-2 me-2"></i>General</a>
							</li>
							<!--end:::Tab item-->
							<!--begin:::Tab item-->
							<li class="nav-item">
								<a class="nav-link text-active-primary d-flex align-items-center pb-5" data-bs-toggle="tab" href="#kt_ecommerce_settings_store">
									<i class="ki-duotone ki-shop fs-2 me-2">
										<span class="path1"></span>
										<span class="path2"></span>
										<span class="path3"></span>
										<span class="path4"></span>
										<span class="path5"></span>
									</i>Store</a>
							</li>
							<!--end:::Tab item-->
							<!--begin:::Tab item-->
							<li class="nav-item">
								<a class="nav-link text-active-primary d-flex align-items-center pb-5" data-bs-toggle="tab" href="#kt_ecommerce_settings_localization">
									<i class="ki-duotone ki-compass fs-2 me-2">
										<span class="path1"></span>
										<span class="path2"></span>
									</i>Localization</a>
							</li>
							<!--end:::Tab item-->
							<!--begin:::Tab item-->
							<li class="nav-item">
								<a class="nav-link text-active-primary d-flex align-items-center pb-5" data-bs-toggle="tab" href="#kt_ecommerce_settings_products">
									<i class="ki-duotone ki-package fs-2 me-2">
										<span class="path1"></span>
										<span class="path2"></span>
										<span class="path3"></span>
									</i>Products</a>
							</li>
							<!--end:::Tab item-->
							<!--begin:::Tab item-->
							<li class="nav-item">
								<a class="nav-link text-active-primary d-flex align-items-center pb-5" data-bs-toggle="tab" href="#kt_ecommerce_settings_customers">
									<i class="ki-duotone ki-people fs-2 me-2">
										<span class="path1"></span>
										<span class="path2"></span>
										<span class="path3"></span>
										<span class="path4"></span>
										<span class="path5"></span>
									</i>Customers</a>
							</li>
							<!--end:::Tab item-->
							<!--begin:::Tab item-->
							<li class="nav-item">
								<a class="nav-link text-active-primary d-flex align-items-center pb-5" data-bs-toggle="tab" href="#kt_ecommerce_settings_shipping">
									<i class="ki-duotone ki-home fs-2 me-2"></i>Shipping Method</a>
							</li>
							<!--end:::Tab item-->
						</ul>
						<!--end:::Tabs-->
						<!--begin:::Tab content-->
						<div class="tab-content" id="myTabContent">
							<!--begin:::Tab pane-->
							<div class="tab-pane fade show active" id="kt_ecommerce_settings_general" role="tabpanel">
								<!--begin::Form-->
								<form id="kt_ecommerce_settings_general_form" method="POST" class="form save-general" action="<?= url('dw-admin/save-settings') ?>">
									<?= csrf_field() ?>
									<input type="hidden" name="type" value="general">
									<!--begin::Heading-->
									<div class="row mb-7">
										<div class="col-md-9 offset-md-3">
											<h2>General Settings</h2>
										</div>
									</div>
									<!--end::Heading-->
									<!--begin::Input group-->
									<div class="row fv-row mb-7">
										<div class="col-md-3 text-md-end">
											<!--begin::Label-->
											<label class="fs-6 fw-semibold form-label mt-3">
												<span class="required">Meta Title</span>
												<span class="ms-1" data-bs-toggle="tooltip" title="Set the title of the store for SEO.">
													<i class="ki-duotone ki-information-5 text-gray-500 fs-6">
														<span class="path1"></span>
														<span class="path2"></span>
														<span class="path3"></span>
													</i>
												</span>
											</label>
											<!--end::Label-->
										</div>
										<div class="col-md-9">
											<!--begin::Input-->
											<input type="text" class="form-control form-control-solid" name="meta_title" id="meta_title" value="<?php echo getOptions("meta_title") ?? null ?>" />
											<!--end::Input-->
										</div>
									</div>
									<!--end::Input group-->
									<!--begin::Input group-->
									<div class="row fv-row mb-7">
										<div class="col-md-3 text-md-end">
											<!--begin::Label-->
											<label class="fs-6 fw-semibold form-label mt-3">
												<span class="required">Meta Tag Description</span>
												<span class="ms-1" data-bs-toggle="tooltip" title="Set the description of the store for SEO.">
													<i class="ki-duotone ki-information-5 text-gray-500 fs-6">
														<span class="path1"></span>
														<span class="path2"></span>
														<span class="path3"></span>
													</i>
												</span>
											</label>
											<!--end::Label-->
										</div>
										<div class="col-md-9">
											<!--begin::Input-->
											<textarea class="form-control form-control-solid" name="meta_description" id="meta_description"><?php echo getOptions("meta_description") ?? null ?></textarea>
											<!--end::Input-->
										</div>
									</div>
									<!--end::Input group-->
									<!--begin::Input group-->
									<div class="row fv-row mb-7">
										<div class="col-md-3 text-md-end">
											<!--begin::Label-->
											<label class="fs-6 fw-semibold form-label mt-3">
												<span class="required">Meta Keywords</span>
												<span class="ms-1" data-bs-toggle="tooltip" title="Set keywords for the store separated by a comma.">
													<i class="ki-duotone ki-information-5 text-gray-500 fs-6">
														<span class="path1"></span>
														<span class="path2"></span>
														<span class="path3"></span>
													</i>
												</span>
											</label>
											<!--end::Label-->
										</div>
										<div class="col-md-9">
											<!--begin::Input-->
											<input type="text" class="form-control form-control-solid" name="meta_keywords" id="meta_keywords" value="<?php echo getOptions("meta_keywords") ?? null ?>" data-kt-ecommerce-settings-type="tagify" />
											<!--end::Input-->
										</div>
									</div>
									<!--end::Input group-->
									<!--begin::Action buttons-->
									<div class="row py-5">
										<div class="col-md-9 offset-md-3">
											<div class="d-flex">
												<!--begin::Button-->
												<button type="reset" data-kt-ecommerce-settings-type="cancel" class="btn btn-light me-3">Cancel</button>
												<!--end::Button-->
												<!--begin::Button-->
												<button type="submit" data-kt-ecommerce-settings-type="submit" class="btn btn-primary">
													<span class="indicator-label">Save</span>
													<span class="indicator-progress">Please wait...
														<span class="spinner-border spinner-border-sm align-middle ms-2"></span></span>
												</button>
												<!--end::Button-->
											</div>
										</div>
									</div>
									<!--end::Action buttons-->
								</form>
								<!--end::Form-->
							</div>
							<!--end:::Tab pane-->
							<!--begin:::Tab pane-->
							<div class="tab-pane fade" id="kt_ecommerce_settings_store" role="tabpanel">
								<!--begin::Form-->
								<form id="kt_ecommerce_settings_general_store" method="POST" class="form save-general" action="<?= url('dw-admin/save-settings') ?>">
									<?= csrf_field() ?>
									<input type="hidden" name="type" value="store">

									<!--begin::Heading-->
									<div class="row mb-7">
										<div class="col-md-9 offset-md-3">
											<h2>Store Settings</h2>
										</div>
									</div>
									<!--end::Heading-->
									<!--begin::Input group-->
									<div class="row fv-row mb-7">
										<div class="col-md-3 text-md-end">
											<!--begin::Label-->
											<label class="fs-6 fw-semibold form-label mt-3">
												<span class="required">Store Name</span>
												<span class="ms-1" data-bs-toggle="tooltip" title="Set the name of the store">
													<i class="ki-duotone ki-information-5 text-gray-500 fs-6">
														<span class="path1"></span>
														<span class="path2"></span>
														<span class="path3"></span>
													</i>
												</span>
											</label>
											<!--end::Label-->
										</div>
										<div class="col-md-9">
											<!--begin::Input-->
											<input type="text" class="form-control form-control-solid" name="store_name" id="store_name" value="<?php echo getOptions("store_name") ?? null ?>" />
											<!--end::Input-->
										</div>
									</div>
									<!--end::Input group-->
									<!--begin::Input group-->
									<div class="row fv-row mb-7">
										<div class="col-md-3 text-md-end">
											<!--begin::Label-->
											<label class="fs-6 fw-semibold form-label mt-3">
												<span class="required">Store Owner</span>
												<span class="ms-1" data-bs-toggle="tooltip" title="Set the store owner's name">
													<i class="ki-duotone ki-information-5 text-gray-500 fs-6">
														<span class="path1"></span>
														<span class="path2"></span>
														<span class="path3"></span>
													</i>
												</span>
											</label>
											<!--end::Label-->
										</div>
										<div class="col-md-9">
											<!--begin::Input-->
											<input type="text" class="form-control form-control-solid" name="store_owner" id="store_owner" value="<?php echo getOptions("store_owner") ?? null ?>" />
											<!--end::Input-->
										</div>
									</div>
									<!--end::Input group-->
									<!--begin::Input group-->
									<div class="row fv-row mb-7">
										<div class="col-md-3 text-md-end">
											<!--begin::Label-->
											<label class="fs-6 fw-semibold form-label mt-3">
												<span class="required">Address</span>
												<span class="ms-1" data-bs-toggle="tooltip" title="Set the store's full address.">
													<i class="ki-duotone ki-information-5 text-gray-500 fs-6">
														<span class="path1"></span>
														<span class="path2"></span>
														<span class="path3"></span>
													</i>
												</span>
											</label>
											<!--end::Label-->
										</div>
										<div class="col-md-9">
											<!--begin::Input-->
											<textarea class="form-control form-control-solid" name="store_address" id="store_address"><?php echo getOptions("store_address") ?? null ?></textarea>
											<!--end::Input-->
										</div>
									</div>
									<!--end::Input group-->
									<!--begin::Input group-->
									<div class="row fv-row mb-7">
										<div class="col-md-3 text-md-end">
											<!--begin::Label-->
											<label class="fs-6 fw-semibold form-label mt-3">
												<span>Geocode</span>
												<span class="ms-1" data-bs-toggle="tooltip" title="Enter the store geocode manually (optional)">
													<i class="ki-duotone ki-information-5 text-gray-500 fs-6">
														<span class="path1"></span>
														<span class="path2"></span>
														<span class="path3"></span>
													</i>
												</span>
											</label>
											<!--end::Label-->
										</div>
										<div class="col-md-9">
											<!--begin::Input-->
											<input type="text" class="form-control form-control-solid" name="store_geocode" id="store_geocode" value="<?php echo getOptions("store_geocode") ?? null ?>" />
											<!--end::Input-->
										</div>
									</div>
									<!--end::Input group-->
									<!--begin::Input group-->
									<div class="row fv-row mb-7">
										<div class="col-md-3 text-md-end">
											<!--begin::Label-->
											<label class="fs-6 fw-semibold form-label mt-3">
												<span class="required">Email</span>
											</label>
											<!--end::Label-->
										</div>
										<div class="col-md-9">
											<!--begin::Input-->
											<input type="email" class="form-control form-control-solid" name="store_email" id="store_email" value="<?php echo getOptions("store_email") ?? null ?>" />
											<!--end::Input-->
										</div>
									</div>
									<!--end::Input group-->
									<!--begin::Input group-->
									<div class="row fv-row mb-7">
										<div class="col-md-3 text-md-end">
											<!--begin::Label-->
											<label class="fs-6 fw-semibold form-label mt-3">
												<span class="required">Phone</span>
											</label>
											<!--end::Label-->
										</div>
										<div class="col-md-9">
											<!--begin::Input-->
											<input type="text" class="form-control form-control-solid" name="store_phone" id="store_phone" value="<?php echo getOptions("store_phone") ?? null ?>" />
											<!--end::Input-->
										</div>
									</div>
									<!--end::Input group-->
									<!--begin::Input group-->
									<div class="row fv-row mb-7">
										<div class="col-md-3 text-md-end">
											<!--begin::Label-->
											<label class="fs-6 fw-semibold form-label mt-3">
												<span>Fax</span>
											</label>
											<!--end::Label-->
										</div>
										<div class="col-md-9">
											<!--begin::Input-->
											<input type="text" class="form-control form-control-solid" name="store_fax" id="store_fax" value="<?php echo getOptions("store_fax") ?? null ?>" />
											<!--end::Input-->
										</div>
									</div>
									<!--end::Input group-->
									<!--begin::Action buttons-->
									<div class="row py-5">
										<div class="col-md-9 offset-md-3">
											<div class="d-flex">
												<!--begin::Button-->
												<button type="reset" data-kt-ecommerce-settings-type="cancel" class="btn btn-light me-3">Cancel</button>
												<!--end::Button-->
												<!--begin::Button-->
												<button type="submit" data-kt-ecommerce-settings-type="submit" class="btn btn-primary">
													<span class="indicator-label">Save</span>
													<span class="indicator-progress">Please wait...
														<span class="spinner-border spinner-border-sm align-middle ms-2"></span></span>
												</button>
												<!--end::Button-->
											</div>
										</div>
									</div>
									<!--end::Action buttons-->
								</form>
								<!--end::Form-->
							</div>
							<!--end:::Tab pane-->
							<!--begin:::Tab pane-->
							<div class="tab-pane fade" id="kt_ecommerce_settings_localization" role="tabpanel">
								<!--begin::Form-->
								<form id="kt_ecommerce_settings_general_localization" method="POST" class="form save-general" action="<?= url('dw-admin/save-settings') ?>">
									<?= csrf_field() ?>
									<input type="hidden" name="type" value="localization">
									<!--begin::Heading-->
									<div class="row mb-7">
										<div class="col-md-9 offset-md-3">
											<h2>Localization Settings</h2>
										</div>
									</div>
									<!--end::Heading-->
									<!--begin::Input group-->
									<div class="row fv-row mb-7">
										<div class="col-md-3 text-md-end">
											<!--begin::Label-->
											<label class="fs-6 fw-semibold form-label mt-3">
												<span class="required">Country</span>
											</label>
											<!--end::Label-->
										</div>
										<div class="col-md-9">
											<!--begin::Select2-->
											<select id="kt_ecommerce_localization_country" class="form-select form-select-solid" name="localization_country" data-kt-ecommerce-settings-type="select2_flags" data-placeholder="Select a country">
												<option></option>
												<?php foreach ($countryType as $item) : ?>
													<option value="<?php echo $item->name  ?>" <?php echo (getOptions("localization_country") == $item->name) ? 'selected' : ''; ?>><?php echo $item->name  ?></option>
												<?php endforeach ?>
												<!-- <option value="AF" data-kt-select2-country="assets/media/flags/afghanistan.svg">Afghanistan</option>
												<option value="AX" data-kt-select2-country="assets/media/flags/aland-islands.svg">Aland Islands</option> -->

											</select>
											<!--end::Select2-->
										</div>
									</div>
									<!--end::Input group-->
									<!--begin::Input group-->
									<div class="row fv-row mb-7">
										<div class="col-md-3 text-md-end">
											<!--begin::Label-->
											<label class="fs-6 fw-semibold form-label mt-3">
												<span class="required">Language</span>
											</label>
											<!--end::Label-->
										</div>
										<div class="col-md-9">
											<div class="w-100">
												<!--begin::Select2-->
												<select class="form-select form-select-solid" name="localization_language" data-control="select2" data-placeholder="Select a language">
													<option></option>
													<option value="id" <?php echo (getOptions("localization_language") == "id") ? 'selected' : ''; ?>>Bahasa Indonesia - Indonesian</option>
													<option value="msa" <?php echo (getOptions("localization_language") == "msa") ? 'selected' : ''; ?>>Bahasa Melayu - Malay</option>
													<option value="ca" <?php echo (getOptions("localization_language") == "ca") ? 'selected' : ''; ?>>Català - Catalan</option>
													<option value="cs" <?php echo (getOptions("localization_language") == "cs") ? 'selected' : ''; ?>>Čeština - Czech</option>
													<option value="da" <?php echo (getOptions("localization_language") == "da") ? 'selected' : ''; ?>>Dansk - Danish</option>
													<option value="de" <?php echo (getOptions("localization_language") == "de") ? 'selected' : ''; ?>>Deutsch - German</option>
													<option value="en" <?php echo (getOptions("localization_language") == "en") ? 'selected' : ''; ?>>English</option>
													<option value="en-gb" <?php echo (getOptions("localization_language") == "en-gb") ? 'selected' : ''; ?>>English UK - British English</option>
													<option value="es" <?php echo (getOptions("localization_language") == "es") ? 'selected' : ''; ?>>Español - Spanish</option>
													<option value="fil" <?php echo (getOptions("localization_language") == "fil") ? 'selected' : ''; ?>>Filipino</option>
													<option value="fr" <?php echo (getOptions("localization_language") == "fr") ? 'selected' : ''; ?>>Français - French</option>
													<option value="ga" <?php echo (getOptions("localization_language") == "ga") ? 'selected' : ''; ?>>Gaeilge - Irish (beta)</option>
													<option value="gl" <?php echo (getOptions("localization_language") == "gl") ? 'selected' : ''; ?>>Galego - Galician (beta)</option>
													<option value="hr" <?php echo (getOptions("localization_language") == "hr") ? 'selected' : ''; ?>>Hrvatski - Croatian</option>
													<option value="it" <?php echo (getOptions("localization_language") == "it") ? 'selected' : ''; ?>>Italiano - Italian</option>
													<option value="hu" <?php echo (getOptions("localization_language") == "hu") ? 'selected' : ''; ?>>Magyar - Hungarian</option>
													<option value="nl" <?php echo (getOptions("localization_language") == "nl") ? 'selected' : ''; ?>>Nederlands - Dutch</option>
													<option value="no" <?php echo (getOptions("localization_language") == "no") ? 'selected' : ''; ?>>Norsk - Norwegian</option>
													<option value="pl" <?php echo (getOptions("localization_language") == "pl") ? 'selected' : ''; ?>>Polski - Polish</option>
													<option value="pt" <?php echo (getOptions("localization_language") == "pt") ? 'selected' : ''; ?>>Português - Portuguese</option>
													<option value="ro" <?php echo (getOptions("localization_language") == "ro") ? 'selected' : ''; ?>>Română - Romanian</option>
													<option value="sk" <?php echo (getOptions("localization_language") == "sk") ? 'selected' : ''; ?>>Slovenčina - Slovak</option>
													<option value="fi" <?php echo (getOptions("localization_language") == "fi") ? 'selected' : ''; ?>>Suomi - Finnish</option>
													<option value="sv" <?php echo (getOptions("localization_language") == "sv") ? 'selected' : ''; ?>>Svenska - Swedish</option>
													<option value="vi" <?php echo (getOptions("localization_language") == "vi") ? 'selected' : ''; ?>>Tiếng Việt - Vietnamese</option>
													<option value="tr" <?php echo (getOptions("localization_language") == "tr") ? 'selected' : ''; ?>>Türkçe - Turkish</option>
													<option value="el" <?php echo (getOptions("localization_language") == "el") ? 'selected' : ''; ?>>Ελληνικά - Greek</option>
													<option value="bg" <?php echo (getOptions("localization_language") == "bg") ? 'selected' : ''; ?>>Български език - Bulgarian</option>
													<option value="ru" <?php echo (getOptions("localization_language") == "ru") ? 'selected' : ''; ?>>Русский - Russian</option>
													<option value="sr" <?php echo (getOptions("localization_language") == "sr") ? 'selected' : ''; ?>>Српски - Serbian</option>
													<option value="uk" <?php echo (getOptions("localization_language") == "uk") ? 'selected' : ''; ?>>Українська мова - Ukrainian</option>
													<option value="he" <?php echo (getOptions("localization_language") == "he") ? 'selected' : ''; ?>>עִבְרִית - Hebrew</option>
													<option value="ur" <?php echo (getOptions("localization_language") == "ur") ? 'selected' : ''; ?>>اردو - Urdu (beta)</option>
													<option value="ar" <?php echo (getOptions("localization_language") == "ar") ? 'selected' : ''; ?>>العربية - Arabic</option>
													<option value="fa" <?php echo (getOptions("localization_language") == "fa") ? 'selected' : ''; ?>>فارسی - Persian</option>
													<option value="mr" <?php echo (getOptions("localization_language") == "mr") ? 'selected' : ''; ?>>मराठी - Marathi</option>
													<option value="hi" <?php echo (getOptions("localization_language") == "hi") ? 'selected' : ''; ?>>हिन्दी - Hindi</option>
													<option value="bn" <?php echo (getOptions("localization_language") == "bn") ? 'selected' : ''; ?>>বাংলা - Bangla</option>
													<option value="gu" <?php echo (getOptions("localization_language") == "gu") ? 'selected' : ''; ?>>ગુજરાતી - Gujarati</option>
													<option value="ta" <?php echo (getOptions("localization_language") == "ta") ? 'selected' : ''; ?>>தமிழ் - Tamil</option>
													<option value="kn" <?php echo (getOptions("localization_language") == "kn") ? 'selected' : ''; ?>>ಕನ್ನಡ - Kannada</option>
													<option value="th" <?php echo (getOptions("localization_language") == "th") ? 'selected' : ''; ?>>ภาษาไทย - Thai</option>
													<option value="ko" <?php echo (getOptions("localization_language") == "ko") ? 'selected' : ''; ?>>한국어 - Korean</option>
													<option value="ja" <?php echo (getOptions("localization_language") == "ja") ? 'selected' : ''; ?>>日本語 - Japanese</option>
													<option value="zh-cn" <?php echo (getOptions("localization_language") == "zh-cn") ? 'selected' : ''; ?>>简体中文 - Simplified Chinese</option>
													<option value="zh-tw" <?php echo (getOptions("localization_language") == "zh-tw") ? 'selected' : ''; ?>>繁體中文 - Traditional Chinese</option>
												</select>
												<!--end::Select2-->
											</div>
										</div>
									</div>
									<!--end::Input group-->
									<!--begin::Input group-->
									<div class="row fv-row mb-7">
										<div class="col-md-3 text-md-end">
											<!--begin::Label-->
											<label class="fs-6 fw-semibold form-label mt-3">
												<span class="required">Currency</span>
											</label>
											<!--end::Label-->
										</div>
										<div class="col-md-9">
											<div class="w-100">
												<!--begin::Select2-->
												<select class="form-select form-select-solid" name="localization_currency" data-control="select2" data-hide-search="true" data-placeholder="Select a currency">
													<option></option>
													<?php foreach ($currency as $item) : ?>
														<option value="<?php echo $item->name  ?>" <?php echo (getOptions("localization_currency") == $item->name) ? 'selected' : ''; ?>><?php echo $item->name  ?></option>
													<?php endforeach ?>
												</select>
												<!--end::Select2-->
											</div>
										</div>
									</div>
									<!--end::Input group-->
									<!--begin::Input group-->
									<div class="row fv-row mb-7">
										<div class="col-md-3 text-md-end">
											<!--begin::Label-->
											<label class="fs-6 fw-semibold form-label mt-3">
												<span>Length Class</span>
												<span class="ms-1" data-bs-toggle="tooltip" title="Set the unit measurement for length.">
													<i class="ki-duotone ki-information-5 text-gray-500 fs-6">
														<span class="path1"></span>
														<span class="path2"></span>
														<span class="path3"></span>
													</i>
												</span>
											</label>
											<!--end::Label-->
										</div>
										<div class="col-md-9">
											<div class="w-100">
												<!--begin::Select2-->
												<select class="form-select form-select-solid" name="localization_length" data-control="select2" data-hide-search="true" data-placeholder="Select a length class">
													<option></option>
													<option value="cm" <?php echo (getOptions("localization_length") == "cm") ? 'selected' : ''; ?>>Centimeter</option>
													<option value="mm" <?php echo (getOptions("localization_length") == "mm") ? 'selected' : ''; ?>>Milimeter</option>
													<option value="in" <?php echo (getOptions("localization_length") == "in") ? 'selected' : ''; ?>>Inch</option>
												</select>
												<!--end::Select2-->
											</div>
										</div>
									</div>
									<!--end::Input group-->
									<!--begin::Input group-->
									<div class="row fv-row mb-7">
										<div class="col-md-3 text-md-end">
											<!--begin::Label-->
											<label class="fs-6 fw-semibold form-label mt-3">
												<span>Weight Class</span>
												<span class="ms-1" data-bs-toggle="tooltip" title="Set the unit measurement for weight.">
													<i class="ki-duotone ki-information-5 text-gray-500 fs-6">
														<span class="path1"></span>
														<span class="path2"></span>
														<span class="path3"></span>
													</i>
												</span>
											</label>
											<!--end::Label-->
										</div>
										<div class="col-md-9">
											<div class="w-100">
												<!--begin::Select2-->
												<select class="form-select form-select-solid" name="localization_weight" data-control="select2" data-hide-search="true" data-placeholder="Select a weight class">
													<option></option>
													<option value="kg" <?php echo (getOptions("localization_weight") == "kg") ? 'selected' : ''; ?>>Kilogram</option>
													<option value="g" <?php echo (getOptions("localization_weight") == "g") ? 'selected' : ''; ?>>Gram</option>
													<option value="lb" <?php echo (getOptions("localization_weight") == "lb") ? 'selected' : ''; ?>>Pound</option>
													<option value="oz" <?php echo (getOptions("localization_weight") == "oz") ? 'selected' : ''; ?>>Ounce</option>
												</select>
												<!--end::Select2-->
											</div>
										</div>
									</div>
									<!--end::Input group-->
									<!--begin::Action buttons-->
									<div class="row py-5">
										<div class="col-md-9 offset-md-3">
											<div class="d-flex">
												<!--begin::Button-->
												<button type="reset" data-kt-ecommerce-settings-type="cancel" class="btn btn-light me-3">Cancel</button>
												<!--end::Button-->
												<!--begin::Button-->
												<button type="submit" data-kt-ecommerce-settings-type="submit" class="btn btn-primary">
													<span class="indicator-label">Save</span>
													<span class="indicator-progress">Please wait...
														<span class="spinner-border spinner-border-sm align-middle ms-2"></span></span>
												</button>
												<!--end::Button-->
											</div>
										</div>
									</div>
									<!--end::Action buttons-->
								</form>
								<!--end::Form-->
							</div>
							<!--end:::Tab pane-->
							<!--begin:::Tab pane-->
							<div class="tab-pane fade" id="kt_ecommerce_settings_products" role="tabpanel">
								<!--begin::Form-->
								<form id="kt_ecommerce_settings_general_products" method="POST" class="form save-general" action="<?= url('dw-admin/save-settings') ?>">
									<?= csrf_field() ?>
									<input type="hidden" name="type" value="products">
									<!--begin::Heading-->
									<div class="row mb-7">
										<div class="col-md-9 offset-md-3">
											<h2>Cateogries Settings</h2>
										</div>
									</div>
									<!--end::Heading-->
									<!--begin::Input group-->
									<div class="row fv-row mb-7">
										<div class="col-md-3 text-md-end">
											<!--begin::Label-->
											<label class="fs-6 fw-semibold form-label mt-3">
												<span>Category Product Count</span>
												<span class="ms-1" data-bs-toggle="tooltip" title="Show the number of products inside the subcategories in the storefront header category menu. Be warned, this will cause an extreme performance hit for stores with a lot of subcategories!">
													<i class="ki-duotone ki-information-5 text-gray-500 fs-6">
														<span class="path1"></span>
														<span class="path2"></span>
														<span class="path3"></span>
													</i>
												</span>
											</label>
											<!--end::Label-->
										</div>
										<div class="col-md-9">
											<div class="d-flex mt-3">
												<!--begin::Radio-->
												<div class="form-check form-check-custom form-check-solid me-5">
													<input class="form-check-input" type="radio" value="Yes" name="category_product_count" id="category_product_count_yes" <?php echo (getOptions("category_product_count") == "Yes") ? 'checked' : ''; ?> />
													<label class="form-check-label" for="category_product_count_yes">Yes</label>
												</div>
												<div class="form-check form-check-custom form-check-solid">
													<input class="form-check-input" type="radio" value="No" name="category_product_count" id="category_product_count_no" <?php echo (getOptions("category_product_count") == "No") ? 'checked' : ''; ?> />
													<label class="form-check-label" for="category_product_count_no">No</label>
												</div>
												<!--end::Radio-->
											</div>
										</div>
									</div>
									<!--end::Input group-->
									<!--begin::Input group-->
									<div class="row fv-row mb-16">
										<div class="col-md-3 text-md-end">
											<!--begin::Label-->
											<label class="fs-6 fw-semibold form-label mt-3">
												<span class="required">Default Items Per Page</span>
												<span class="ms-1" data-bs-toggle="tooltip" title="Determines how many items are shown per page.">
													<i class="ki-duotone ki-information-5 text-gray-500 fs-6">
														<span class="path1"></span>
														<span class="path2"></span>
														<span class="path3"></span>
													</i>
												</span>
											</label>
											<!--end::Label-->
										</div>
										<div class="col-md-9">
											<!--begin::Input-->
											<input type="number" min="1" class="form-control form-control-solid" name="products_items_per_page" value="<?php echo getOptions("products_items_per_page") ?? null ?>" />
											<!--end::Input-->
										</div>
									</div>
									<!--end::Input group-->
									<!--begin::Heading-->
									<div class="row mb-7">
										<div class="col-md-9 offset-md-3">
											<h2>Reviews Settings</h2>
										</div>
									</div>
									<!--end::Heading-->
									<!--begin::Input group-->
									<div class="row fv-row mb-7">
										<div class="col-md-3 text-md-end">
											<!--begin::Label-->
											<label class="fs-6 fw-semibold form-label mt-3">
												<span>Allow Reviews</span>
												<span class="ms-1" data-bs-toggle="tooltip" title="Enable/disable review entries for registered customers.">
													<i class="ki-duotone ki-information-5 text-gray-500 fs-6">
														<span class="path1"></span>
														<span class="path2"></span>
														<span class="path3"></span>
													</i>
												</span>
											</label>
											<!--end::Label-->
										</div>
										<div class="col-md-9">
											<div class="d-flex mt-3">
												<!--begin::Radio-->
												<div class="form-check form-check-custom form-check-solid me-5">
													<input class="form-check-input" type="radio" value="Yes" name="allow_reviews" id="allow_reviews_yes" <?php echo (getOptions("allow_reviews") == "Yes") ? 'checked' : ''; ?> />
													<label class="form-check-label" for="allow_reviews_yes">Yes</label>
												</div>
												<div class="form-check form-check-custom form-check-solid">
													<input class="form-check-input" type="radio" value="No" name="allow_reviews" id="allow_reviews_no" <?php echo (getOptions("allow_reviews") == "No") ? 'checked' : ''; ?> />
													<label class="form-check-label" for="allow_reviews_no">No</label>
												</div>
												<!--end::Radio-->
											</div>
										</div>
									</div>
									<!--end::Input group-->
									<!--begin::Input group-->
									<div class="row fv-row mb-16">
										<div class="col-md-3 text-md-end">
											<!--begin::Label-->
											<label class="fs-6 fw-semibold form-label mt-3">
												<span>Allow Guest Reviews</span>
												<span class="ms-1" data-bs-toggle="tooltip" title="Enable/disable review entries for public guest customers">
													<i class="ki-duotone ki-information-5 text-gray-500 fs-6">
														<span class="path1"></span>
														<span class="path2"></span>
														<span class="path3"></span>
													</i>
												</span>
											</label>
											<!--end::Label-->
										</div>
										<div class="col-md-9">
											<div class="d-flex mt-3">
												<!--begin::Radio-->
												<div class="form-check form-check-custom form-check-solid me-5">
													<input class="form-check-input" type="radio" value="Yes" name="allow_guest_reviews" id="allow_guest_reviews_yes" <?php echo (getOptions("allow_guest_reviews") == "Yes") ? 'checked' : ''; ?> />
													<label class="form-check-label" for="allow_guest_reviews_yes">Yes</label>
												</div>
												<div class="form-check form-check-custom form-check-solid">
													<input class="form-check-input" type="radio" value="No" name="allow_guest_reviews" id="allow_guest_reviews_no" <?php echo (getOptions("allow_guest_reviews") == "No") ? 'checked' : ''; ?> />
													<label class="form-check-label" for="allow_guest_reviews_no">No</label>
												</div>
												<!--end::Radio-->
											</div>
										</div>
									</div>
									<!--end::Input group-->
									<!--begin::Heading-->
									<div class="row mb-7">
										<div class="col-md-9 offset-md-3">
											<h2>Vouchers Settings</h2>
										</div>
									</div>
									<!--end::Heading-->
									<!--begin::Input group-->
									<div class="row fv-row mb-7">
										<div class="col-md-3 text-md-end">
											<!--begin::Label-->
											<label class="fs-6 fw-semibold form-label mt-3">
												<span class="required">Minimum Vouchers</span>
												<span class="ms-1" data-bs-toggle="tooltip" title="Minimum number of vouchers customers can attach to an order">
													<i class="ki-duotone ki-information-5 text-gray-500 fs-6">
														<span class="path1"></span>
														<span class="path2"></span>
														<span class="path3"></span>
													</i>
												</span>
											</label>
											<!--end::Label-->
										</div>
										<div class="col-md-9">
											<!--begin::Input-->
											<input type="number" min="1" class="form-control form-control-solid" name="products_min_voucher" value="<?php echo getOptions("products_min_voucher") ?? null ?>" />
											<!--end::Input-->
										</div>
									</div>
									<!--end::Input group-->
									<!--begin::Input group-->
									<div class="row fv-row mb-16">
										<div class="col-md-3 text-md-end">
											<!--begin::Label-->
											<label class="fs-6 fw-semibold form-label mt-3">
												<span class="required">Maximum Vouchers</span>
												<span class="ms-1" data-bs-toggle="tooltip" title="Maximum number of vouchers customers can attach to an order">
													<i class="ki-duotone ki-information-5 text-gray-500 fs-6">
														<span class="path1"></span>
														<span class="path2"></span>
														<span class="path3"></span>
													</i>
												</span>
											</label>
											<!--end::Label-->
										</div>
										<div class="col-md-9">
											<!--begin::Input-->
											<input type="number" min="1" class="form-control form-control-solid" name="products_max_voucher" value="<?php echo getOptions("products_max_voucher") ?? null ?>" />
											<!--end::Input-->
										</div>
									</div>
									<!--end::Input group-->
									<!--begin::Heading-->
									<div class="row mb-7">
										<div class="col-md-9 offset-md-3">
											<h2>Tax Settings</h2>
										</div>
									</div>
									<!--end::Heading-->
									<!--begin::Input group-->
									<div class="row fv-row mb-7">
										<div class="col-md-3 text-md-end">
											<!--begin::Label-->
											<label class="fs-6 fw-semibold form-label mt-3">
												<span>Display Prices with Tax</span>
											</label>
											<!--end::Label-->
										</div>
										<div class="col-md-9">
											<div class="d-flex mt-3">
												<!--begin::Radio-->
												<div class="form-check form-check-custom form-check-solid me-5">
													<input class="form-check-input" type="radio" value="Yes" name="product_tax" id="product_tax_yes" <?php echo (getOptions("product_tax") == "Yes") ? 'checked' : ''; ?> />
													<label class="form-check-label" for="product_tax_yes">Yes</label>
												</div>
												<div class="form-check form-check-custom form-check-solid">
													<input class="form-check-input" type="radio" value="No" name="product_tax" id="product_tax_no" <?php echo (getOptions("product_tax") == "No") ? 'checked' : ''; ?> />
													<label class="form-check-label" for="product_tax_no">No</label>
												</div>
												<!--end::Radio-->
											</div>
										</div>
									</div>
									<!--end::Input group-->
									<!--begin::Input group-->
									<div class="row fv-row mb-7">
										<div class="col-md-3 text-md-end">
											<!--begin::Label-->
											<label class="fs-6 fw-semibold form-label mt-3">
												<span class="required">Default Tax Rate</span>
												<span class="ms-1" data-bs-toggle="tooltip" title="Determines the tax percentage (%) applied to orders">
													<i class="ki-duotone ki-information-5 text-gray-500 fs-6">
														<span class="path1"></span>
														<span class="path2"></span>
														<span class="path3"></span>
													</i>
												</span>
											</label>
											<!--end::Label-->
										</div>
										<div class="col-md-9">
											<!--begin::Input-->
											<input type="number" min="1" class="form-control form-control-solid" name="products_tax_rate" value="<?php echo getOptions("products_tax_rate") ?? null ?>" />
											<!--end::Input-->
										</div>
									</div>
									<!--end::Input group-->
									<!--begin::Action buttons-->
									<div class="row py-5">
										<div class="col-md-9 offset-md-3">
											<div class="d-flex">
												<!--begin::Button-->
												<button type="reset" data-kt-ecommerce-settings-type="cancel" class="btn btn-light me-3">Cancel</button>
												<!--end::Button-->
												<!--begin::Button-->
												<button type="submit" data-kt-ecommerce-settings-type="submit" class="btn btn-primary">
													<span class="indicator-label">Save</span>
													<span class="indicator-progress">Please wait...
														<span class="spinner-border spinner-border-sm align-middle ms-2"></span></span>
												</button>
												<!--end::Button-->
											</div>
										</div>
									</div>
									<!--end::Action buttons-->
								</form>
								<!--end::Form-->
							</div>
							<!--end:::Tab pane-->
							<!--begin:::Tab pane-->
							<div class="tab-pane fade" id="kt_ecommerce_settings_customers" role="tabpanel">
								<!--begin::Form-->
								<form id="kt_ecommerce_settings_general_customers" method="POST" class="form save-general" action="<?= url('dw-admin/save-settings') ?>">
									<?= csrf_field() ?>
									<input type="hidden" name="type" value="customers">
									<!--begin::Heading-->
									<div class="row mb-7">
										<div class="col-md-9 offset-md-3">
											<h2>Customers Settings</h2>
										</div>
									</div>
									<!--end::Heading-->
									<!--begin::Input group-->
									<div class="row fv-row mb-7">
										<div class="col-md-3 text-md-end">
											<!--begin::Label-->
											<label class="fs-6 fw-semibold form-label mt-3">
												<span class="required">Customers Online</span>
												<span class="ms-1" data-bs-toggle="tooltip" title="Enable/disable tracking customers online status.">
													<i class="ki-duotone ki-information-5 text-gray-500 fs-6">
														<span class="path1"></span>
														<span class="path2"></span>
														<span class="path3"></span>
													</i>
												</span>
											</label>
											<!--end::Label-->
										</div>
										<div class="col-md-9">
											<div class="d-flex mt-3">
												<!--begin::Radio-->
												<div class="form-check form-check-custom form-check-solid me-5">
													<input class="form-check-input" type="radio" value="Yes" name="customers_online" id="customers_online_yes" <?php echo (getOptions("customers_online") == "Yes") ? 'checked' : ''; ?> />
													<label class="form-check-label" for="customers_online_yes">Yes</label>
												</div>
												<div class="form-check form-check-custom form-check-solid">
													<input class="form-check-input" type="radio" value="No" name="customers_online" id="customers_online_no" <?php echo (getOptions("customers_online") == "No") ? 'checked' : ''; ?> />
													<label class="form-check-label" for="customers_online_no">No</label>
												</div>
												<!--end::Radio-->
											</div>
										</div>
									</div>
									<!--end::Input group-->
									<!--begin::Input group-->
									<div class="row fv-row mb-7">
										<div class="col-md-3 text-md-end">
											<!--begin::Label-->
											<label class="fs-6 fw-semibold form-label mt-3">
												<span class="required">Customers Activity</span>
												<span class="ms-1" data-bs-toggle="tooltip" title="Enable/disable tracking customers activity.">
													<i class="ki-duotone ki-information-5 text-gray-500 fs-6">
														<span class="path1"></span>
														<span class="path2"></span>
														<span class="path3"></span>
													</i>
												</span>
											</label>
											<!--end::Label-->
										</div>
										<div class="col-md-9">
											<div class="d-flex mt-3">
												<!--begin::Radio-->
												<div class="form-check form-check-custom form-check-solid me-5">
													<input class="form-check-input" type="radio" value="Yes" name="customers_activity" id="customers_activity_yes" <?php echo (getOptions("customers_activity") == "Yes") ? 'checked' : ''; ?> />
													<label class="form-check-label" for="customers_activity_yes">Yes</label>
												</div>
												<div class="form-check form-check-custom form-check-solid">
													<input class="form-check-input" type="radio" value="No" name="customers_activity" id="customers_activity_no" <?php echo (getOptions("customers_activity") == "No") ? 'checked' : ''; ?> />
													<label class="form-check-label" for="customers_activity_no">No</label>
												</div>
												<!--end::Radio-->
											</div>
										</div>
									</div>
									<!--end::Input group-->
									<!--begin::Input group-->
									<div class="row fv-row mb-7">
										<div class="col-md-3 text-md-end">
											<!--begin::Label-->
											<label class="fs-6 fw-semibold form-label mt-3">
												<span class="required">Customer Searches</span>
												<span class="ms-1" data-bs-toggle="tooltip" title="Enable/disable logging customers search keywords.">
													<i class="ki-duotone ki-information-5 text-gray-500 fs-6">
														<span class="path1"></span>
														<span class="path2"></span>
														<span class="path3"></span>
													</i>
												</span>
											</label>
											<!--end::Label-->
										</div>
										<div class="col-md-9">
											<div class="d-flex mt-3">
												<!--begin::Radio-->
												<div class="form-check form-check-custom form-check-solid me-5">
													<input class="form-check-input" type="radio" value="Yes" name="customers_searches" id="customers_searches_yes" <?php echo (getOptions("customers_searches") == "Yes") ? 'checked' : ''; ?> />
													<label class="form-check-label" for="customers_searches_yes">Yes</label>
												</div>
												<div class="form-check form-check-custom form-check-solid">
													<input class="form-check-input" type="radio" value="No" name="customers_searches" id="customers_searches_no" <?php echo (getOptions("customers_searches") == "No") ? 'checked' : ''; ?> />
													<label class="form-check-label" for="customers_searches_no">No</label>
												</div>
												<!--end::Radio-->
											</div>
										</div>
									</div>
									<!--end::Input group-->
									<!--begin::Input group-->
									<div class="row fv-row mb-7">
										<div class="col-md-3 text-md-end">
											<!--begin::Label-->
											<label class="fs-6 fw-semibold form-label mt-3">
												<span class="required">Allow Guest Checkout</span>
												<span class="ms-1" data-bs-toggle="tooltip" title="Enable/disable guest customers to checkout.">
													<i class="ki-duotone ki-information-5 text-gray-500 fs-6">
														<span class="path1"></span>
														<span class="path2"></span>
														<span class="path3"></span>
													</i>
												</span>
											</label>
											<!--end::Label-->
										</div>
										<div class="col-md-9">
											<div class="d-flex mt-3">
												<!--begin::Radio-->
												<div class="form-check form-check-custom form-check-solid me-5">
													<input class="form-check-input" type="radio" value="Yes" name="customers_guest_checkout" id="customers_guest_checkout_yes" <?php echo (getOptions("customers_guest_checkout") == "Yes") ? 'checked' : ''; ?> />
													<label class="form-check-label" for="customers_guest_checkout_yes">Yes</label>
												</div>
												<div class="form-check form-check-custom form-check-solid">
													<input class="form-check-input" type="radio" value="No" name="customers_guest_checkout" id="customers_guest_checkout_no" <?php echo (getOptions("customers_guest_checkout") == "No") ? 'checked' : ''; ?> />
													<label class="form-check-label" for="customers_guest_checkout_no">No</label>
												</div>
												<!--end::Radio-->
											</div>
										</div>
									</div>
									<!--end::Input group-->
									<!--begin::Input group-->
									<div class="row fv-row mb-7">
										<div class="col-md-3 text-md-end">
											<!--begin::Label-->
											<label class="fs-6 fw-semibold form-label mt-3">
												<span class="required">Login Display Prices</span>
												<span class="ms-1" data-bs-toggle="tooltip" title="Only show prices when customers log in.">
													<i class="ki-duotone ki-information-5 text-gray-500 fs-6">
														<span class="path1"></span>
														<span class="path2"></span>
														<span class="path3"></span>
													</i>
												</span>
											</label>
											<!--end::Label-->
										</div>
										<div class="col-md-9">
											<div class="d-flex mt-3">
												<!--begin::Radio-->
												<div class="form-check form-check-custom form-check-solid me-5">
													<input class="form-check-input" type="radio" value="Yes" name="customers_login_prices" id="customers_login_prices_yes" <?php echo (getOptions("customers_login_prices") == "Yes") ? 'checked' : ''; ?> />
													<label class="form-check-label" for="customers_login_prices_yes">Yes</label>
												</div>
												<div class="form-check form-check-custom form-check-solid">
													<input class="form-check-input" type="radio" value="No" name="customers_login_prices" id="customers_login_prices_no" <?php echo (getOptions("customers_login_prices") == "No") ? 'checked' : ''; ?> />
													<label class="form-check-label" for="customers_login_prices_no">No</label>
												</div>
												<!--end::Radio-->
											</div>
										</div>
									</div>
									<!--end::Input group-->
									<!--begin::Input group-->
									<div class="row fv-row mb-7">
										<div class="col-md-3 text-md-end">
											<!--begin::Label-->
											<label class="fs-6 fw-semibold form-label mt-3">
												<span class="required">Max Login Attempts</span>
												<span class="ms-1" data-bs-toggle="tooltip" title="Set the max number of login attempts before the customer account is locked for 1 hour.">
													<i class="ki-duotone ki-information-5 text-gray-500 fs-6">
														<span class="path1"></span>
														<span class="path2"></span>
														<span class="path3"></span>
													</i>
												</span>
											</label>
											<!--end::Label-->
										</div>
										<div class="col-md-9">
											<!--begin::Input-->
											<input type="text" class="form-control form-control-solid" name="customer_login_attempts" value="<?php echo getOptions("customer_login_attempts") ?? null ?>" />
											<!--end::Input-->
										</div>
									</div>
									<!--end::Input group-->
									<!--begin::Action buttons-->
									<div class="row py-5">
										<div class="col-md-9 offset-md-3">
											<div class="d-flex">
												<!--begin::Button-->
												<button type="reset" data-kt-ecommerce-settings-type="cancel" class="btn btn-light me-3">Cancel</button>
												<!--end::Button-->
												<!--begin::Button-->
												<button type="submit" data-kt-ecommerce-settings-type="submit" class="btn btn-primary">
													<span class="indicator-label">Save</span>
													<span class="indicator-progress">Please wait...
														<span class="spinner-border spinner-border-sm align-middle ms-2"></span></span>
												</button>
												<!--end::Button-->
											</div>
										</div>
									</div>
									<!--end::Action buttons-->
								</form>
								<!--end::Form-->
							</div>
							<!--end:::Tab pane-->
							<!--begin:::Tab pane-->
							<div class="tab-pane fade" id="kt_ecommerce_settings_shipping" role="tabpanel">
								<!--begin::Form-->
								<form id="kt_ecommerce_settings_shipping" method="POST" class="form save-general" action="<?= url('dw-admin/save-settings') ?>">
									<?= csrf_field() ?>
									<input type="hidden" name="type" value="shipping">
									<!--begin::Heading-->
									<div class="row mb-7">
										<div class="col-md-9 offset-md-3">
											<h2>Shipping Settings</h2>
										</div>
									</div>
									<!--end::Heading-->
									<!--begin::Input group-->
									<div class="row fv-row mb-7">
										<div class="col-md-9 offset-md-3 text-md-end">
											  <!--begin::Repeater-->
											  <div id="kt_ecommerce_add_shipping_method">
												<!--begin::Form group-->
												<div class="form-group">
													<div data-repeater-list="kt_ecommerce_add_shipping_method" class="d-flex flex-column gap-3 mb-3">
																<?php  foreach(json_decode(getOptions("shipping_method")) as $item): ?>
																<div data-repeater-item="" class="form-group d-flex flex-wrap align-items-center gap-5">
																	<!--begin::Select2-->
																	<div class="w-100 w-md-200px">
																	<input type="text" class="form-control mw-100 w-200px" name="shipping_name" value="<?php echo $item->shipping_name; ?>" placeholder="Shipping Name" />
																	</div>
																	<!--end::Select2-->
																	<!--begin::Input-->
																	<input type="text" class="form-control mw-100 w-200px" name="shipping_charge" value="<?php echo $item->shipping_charge; ?>" placeholder="Shipping Charge" />
																	<!--end::Input-->
																	<button type="button" data-repeater-delete="" class="btn btn-sm btn-icon btn-light-danger">
																		<i class="ki-duotone ki-cross fs-1">
																			<span class="path1"></span>
																			<span class="path2"></span>
																		</i>
																	</button>
																</div>
																<?php  endforeach ?>
															</div>
												</div>
												<!--end::Form group-->
												<!--begin::Form group-->
												<div class="form-group mt-5" style="text-align: left;">
													<button type="button" data-repeater-create="" class="btn btn-sm btn-light-primary">
													<i class="ki-duotone ki-plus fs-2"></i>Add Shipping Method</button>
												</div>
												<!--end::Form group-->
											</div>
											<!--end::Repeater-->
										</div>
										
									</div>
									<!--end::Input group-->
									<!--begin::Action buttons-->
									<div class="row py-5">
										<div class="col-md-9 offset-md-3">
											<div class="d-flex">
												<!--begin::Button-->
												<button type="reset" data-kt-ecommerce-settings-type="cancel" class="btn btn-light me-3">Cancel</button>
												<!--end::Button-->
												<!--begin::Button-->
												<button type="submit" data-kt-ecommerce-settings-type="submit" class="btn btn-primary">
													<span class="indicator-label">Save</span>
													<span class="indicator-progress">Please wait...
														<span class="spinner-border spinner-border-sm align-middle ms-2"></span></span>
												</button>
												<!--end::Button-->
											</div>
										</div>
									</div>
									<!--end::Action buttons-->
								</form>
								<!--end::Form-->
							</div>
							<!--end:::Tab pane-->
						</div>
						<!--end:::Tab content-->
					</div>
					<!--end::Card body-->
				</div>
				<!--end::Card-->
			</div>
			<!--end::Content container-->
		</div>
		<!--end::Content-->
	</div>
	<!--end::Content wrapper-->
	<?php include("common/footer.php") ?>