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
					<h1 class="page-heading d-flex text-gray-900 fw-bold fs-3 flex-column justify-content-center my-0">Theme</h1>
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
						<li class="breadcrumb-item text-muted">Theme</li>
						<!--end::Item-->
					</ul>
					<!--end::Breadcrumb-->
				</div>
				<!--end::Page title-->
				<!--begin::Actions-->
				<div class="d-flex align-items-center gap-2 gap-lg-3">
					
					<!--begin::Primary button-->
					<a href="<?=  url('/dw-admin/theme-store') ?>" class="btn btn-sm fw-bold btn-primary">Add new Theme</a>
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

                <?php foreach($themes as  $key => $theme): ?>

                    <?php

                        $file_path  = PUBLIC_PATH.'themes/'.$key.'/description.txt';

                    $description = file_get_contents($file_path);

                    $patternUrl     = '/Url:\s*(.+)/';

                    if (preg_match($patternUrl, $description, $matches)) {
                        $url = $matches[1];
                        } else {
                            $url = "Unknown";
                        }

                        $theme_name     = '/Theme Name:\s*(.+)/';

                        if (preg_match($theme_name, $description, $matches)) {
                            $theme_name = $matches[1];
                        } else {
                            $theme_name = "Unknown";
                        }


                        $newtheme_name = strtolower(str_replace(' ', '-', $theme_name));

                        if($themeInfo){
                            if(trim($themeInfo->value) == trim($newtheme_name)){
                                $activeText = '';
                            }else{
                                $activeText = 'Active';
                            }
                        }else{
                            $activeText = 'Active';
                        }
                    ?>

                    <div class="col-sm-6 col-md-4 mt-3">
                    <div class="themeBox">
                        <a href="<?=  url('dw-admin/theme-details/'.$key.'') ?>">
                            <img src="<?= url('themes/'.$key.'/'.basename($theme).'') ?>" alt="" class="w-100">
                            <div class="theme-caption d-flex">
                                <h6><?php echo $theme_name  ?></h6>
                                <small class="badge bg-success theme-active mx-2" data-theme="<?php echo $newtheme_name; ?>"><?php echo $activeText ?></small>
                            </div>
                        </a>
                        <ul class="theme_options">
                            <li><a href="#" class="btn btn-sm btn-dark">Customize</a></li>
                            <li><a href="<?php echo $url; ?>" target="_blank" class="btn btn-sm btn-info">Live Preview</a></li>
                        </ul>
                    </div>
                    </div>
            <?php endforeach ?>


                    <!-- <div class="col-sm-6 col-md-4">
                        <div class="themeBox addTheme">
                            <a href="theme-store.php">
                            <span><i class="fa-solid fa-circle-plus"></i><br> Theme Store</span>
                            </a>  
                        </div>
                    </div> -->
                </div>
				<!--end::Products-->
			</div>
			<!--end::Content container-->
		</div>
		<!--end::Content-->
	</div>
	<!--end::Content wrapper-->
<?php include("common/footer.php") ?> 								