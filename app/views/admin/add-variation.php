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
					<h1 class="page-heading d-flex text-gray-900 fw-bold fs-3 flex-column justify-content-center my-0">Add Variation</h1>
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
			</div>
			<!--end::Toolbar container-->
		</div>
		<!--end::Toolbar-->
		<!--begin::Content-->
		<div id="kt_app_content" class="app-content flex-column-fluid">
			<!--begin::Content container-->
			<div id="kt_app_content_container" class="app-container container-xxl">
				<form action="<?= url('dw-admin/save-category') ?>" method="POST" id="kt_ecommerce_add_category_form" class="form d-flex flex-column flex-lg-row save-category" enctype="multipart/form-data">
					<?= csrf_field() ?>
					<!--begin::Main column-->
					<div class="d-flex flex-column flex-row-fluid gap-7 gap-lg-10">
						<!--begin::General options-->
						<div class="card card-flush py-4">
							<!--begin::Card header-->
							<div class="card-header">
								<div class="card-title">
									<!-- <h2>General</h2> -->
								</div>
							</div>
							<!--end::Card header-->
							<!--begin::Card body-->
							<div class="card-body pt-0">
								<!--begin::Input group-->
								<div class="mb-10 fv-row">
									<!--begin::Label-->
									<label class="required form-label">Name</label>
									<!--end::Label-->
									<!--begin::Input-->
									<input type="text" name="category" id="category" class="form-control mb-2" placeholder="Enter name" value="" />
									<!--end::Input--
									<!--begin::Description-->
									<div class="text-muted fs-7">A name is required and recommended to be unique.</div>
									<!--end::Description-->
								</div>
								<!--end::Input group-->
							
								<input type="submit" class="btn  btn-primary catBtn mt-5 " value="Save">
							</div>
							<!--end::Card header-->
						</div>
						<!--end::General options-->
					</div>
					<!--end::Main column-->
				</form>
			</div>
			<!--end::Content container-->
		</div>
		<!--end::Content-->
	</div>
	<!--end::Content wrapper-->
	<?php include("common/footer.php") ?>