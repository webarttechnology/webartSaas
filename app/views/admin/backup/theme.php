<?php
include 'common/header.php';
include 'common/navbar.php';
include 'common/sidebar.php';
?>

<!-- content part start -->
<section class="main_content">
    <div class="container-fluid">
        <div class="row align-items-center">
            <!-- page title part -->
            <div class="col-sm-6">
                <h4>Themes</h4>
            </div>
            <div class="col-sm-6">
                <ul class="d-flex flex-wrap justify-content-end btns_group">
                    <!-- <li><a href="#" class="btn btn-primary add-theme">Add New Theme</a></li> -->
                    <li>
                        <div class="searchBox">
                            <input type="text" name="" id="" class="form-control" placeholder="Search installed themes...">
                            <button class="btn"><i class="fa-solid fa-magnifying-glass"></i></button>
                        </div>
                    </li>
                </ul>
            </div>
            <!-- page body part -->


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
          
            <!-- <div class="col-sm-6 col-md-4 mt-3">
                <div class="themeBox addTheme">
                    <a href="#" class="add-theme">
                        <span><i class="fa-solid fa-circle-plus"></i><br> Add New Theme</span>
                    </a>
                </div>
            </div> -->
            
        </div>
    </div>
</section>
<!-- content part end -->


<!-- The Modal -->
<div class="modal" id="myModal">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <!-- Modal body -->
            <div class="modal-body">
                <button type="button" class="btn-close text-end" data-bs-dismiss="modal"></button>
                <h4 class="modal-title">Add Theme</h4>
                 <div class="mt-5">
                 <form action="<?= url('dw-admin/theme-upload') ?>" class="save-theme" method="post" enctype="multipart/form-data">
                    <?= csrf_field(); ?>
                     <div class="row">
                         <div class="col-lg-4">
                             <input type="file" name="theme" class="theme" accept=".zip">
                         </div>
                         <div class="col-lg-4">
                            <button type="submit" class="btn btn-primary btn-sm py-2">Install</button>
                         </div>
                     </div>
                     <div class="loader-div"></div>
                     <span class="error-theme text-danger d-block mt-2"></span>
                   </form>
                 </div>
            </div>
        </div>
    </div>
</div>

<?php
include 'common/footer.php';
?>