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
					<h1 class="page-heading d-flex text-gray-900 fw-bold fs-3 flex-column justify-content-center my-0">Vendor Category</h1>
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
						<li class="breadcrumb-item text-muted">Vendor Category</li>
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
				  <?php foreach ($cjVendorCategory as  $value):?>
					<div class="col-6 col-sm-4 col-md-3 col-lg-2">
						<div class="nav-item mb-3 me-0">
							<!--begin::Nav link-->
							<a class="nav-link nav-link-border-solid btn btn-outline btn-flex btn-active-color-primary flex-column flex-stack pt-9 pb-7 page-bg show active" href="<?= url('/dw-admin/vendor-store/'.$value->categoryFirstId.'') ?>" style="width: 100%;height: 180px">
								<!--begin::Icon-->
								<!-- <div class="nav-icon mb-3">
									<img src="<?= url('/admin/') ?>/assets/media/svg/food-icons/spaghetti.svg" class="w-50px" alt="" />
								</div> -->
								<!--end::Icon-->
								<!--begin::Info-->
								<div class="">
									<span class="text-gray-800 fw-bold fs-2 d-block"><?php echo $value->categoryFirstName; ?></span>
									<!-- <span class="text-gray-500 fw-semibold fs-7"><?php  echo count($value->categoryFirstList); ?> Category</span> -->
								</div>
								<!--end::Info-->
							</a>
							<!--end::Nav link-->
						</div>
					</div>
					<?php endforeach ?>

				</div>
				<!--end::Layout-->
			</div>
			<!--end::Content container-->
		</div>
		<!--end::Content-->
	</div>
	<!--end::Content wrapper-->
	<?php include("common/footer.php") ?> 	