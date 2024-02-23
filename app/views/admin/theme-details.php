<?php
	include 'common/header.php';
	include 'common/navber.php';
	include 'common/sidebar.php';
?>

<?php
            if (preg_match($patternThemes, $description, $matches)) {
                $theme_name = $matches[1];
            } else {
                $theme_name = "Unknown";
            }

            $newtheme_name = strtolower(str_replace(' ', '-', trim($theme_name)));

            if (preg_match($patternAuthor, $description, $matches)) {
                $auther_name = $matches[1];
            } else {
                $auther_name = "Unknown";
            }

            if (preg_match($patternDescription, $description, $matches)) {
                $desc = $matches[1];
            } else {
                $desc = "Unknown";
            }

            if (preg_match($patternTags, $description, $matches)) {
                $tags = $matches[1];
            } else {
                $tags = "Unknown";
            }

            if (preg_match($patternUrl, $description, $matches)) {
                $url = $matches[1];
            } else {
                $url = "Unknown";
            }


            if ($themeInfo) {
                if (trim($themeInfo->value) == trim($newtheme_name)) {
                    $activeText = 'Active';
                } else {
                    $activeText = '';
                }
            } else {
                $activeText = '';
            }

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
					<h1 class="page-heading d-flex text-gray-900 fw-bold fs-3 flex-column justify-content-center my-0">Edit Theme
					</h1>
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
						<li class="breadcrumb-item text-muted">Edit Theme</li>
						<!--end::Item-->
					</ul>
					<!--end::Breadcrumb-->
				</div>
				<!--end::Page title-->
				<!--begin::Actions-->
				<div class="d-flex align-items-center gap-2 gap-lg-3">
					<!--begin::Primary button-->
					<a href="<?php echo $url ?>" target="_blank" class="btn btn-sm fw-bold btn-primary">Live Preview</a>
					<!--end::Primary button-->
					<!--begin::Primary button-->
					<a href="#" class="btn btn-sm fw-bold btn-dark">Customize</a>
					<!--end::Primary button-->
					<!--begin::Primary button-->
					<?php if ($activeText) : ?>
					 <a class="btn btn-sm fw-bold btn-success">Active</a>
            		<?php endif ?>
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
				<!-- page body part -->
                <div class="row">
               
                <div class="col-sm-6 col-md-5 mt-3">
                    <img src="<?= url('themes/' . $screenshot . '') ?>" alt="" class="w-100 mb-3">
                    <center>
					<?php if ($activeText == '') : ?>
                        <span><a href="#" class="btn btn-success theme-active" data-type="themedetails" data-theme="<?php echo $newtheme_name; ?>">Active</a></span>
                    <?php endif ?>

                        <span><a href="#" class="btn btn-danger">Delete</a></span>
                    </center>
                </div>
                <div class="col-sm-6 col-md-7 mt-3">
                <div class="panel_body m-0">
                    <h3><?php echo $theme_name ?></h3>
                    <small>By: <a href="#"><?php echo $auther_name ?></a></small>
                    <hr class="mb-3 mt-3">
					<p><?php echo $desc ?></p>
					<hr class="mb-3 mt-3">
                    <strong>Tags:</strong>
					<p class="mt-3"><?php echo $tags ?></p>
                </div>  
                </div>    
            </div>
				<!--end::Products-->
			</div>
			<!--end::Content container-->
		</div>
		<!--end::Content-->
	</div>
	<!--end::Content wrapper-->
	<?php include("common/footer.php") ?> 							