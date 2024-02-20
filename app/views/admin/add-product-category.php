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
                <h4>Add Category & Subcategory</h4>
            </div>
            <div class="col-sm-6">
                <ul class="d-flex flex-wrap justify-content-end btns_group">
                    <!-- <li><a href="#" class="btn btn-sm btn-secondary">Export</a></li>
                        <li><a href="#" class="btn btn-sm btn-secondary">Import</a></li>
                        <li>
                            <div class="dropdown">
                                <button type="button" class="btn btn-secondary btn-sm dropdown-toggle" data-bs-toggle="dropdown">
                                  More Option
                                </button>
                                <ul class="dropdown-menu">
                                  <li><a class="dropdown-item" href="#">Hide analytics bar</a></li>
                                  <li><a class="dropdown-item" href="#">Pin new products to Pinterest</a></li>
                                  <li><a class="dropdown-item" href="#">All product reviews</a></li>
                                </ul>
                            </div>
                        </li> -->
                    <li><a href="<?= url('dw-admin/product')  ?>" class="btn btn-sm btn-light">Back</a></li>
                </ul>
            </div>

            <!-- page body part -->
            <div class="col-12">
                <!-- product tab content part -->
                <div class="panel_body subCategory">
                    <form action="<?= url('dw-admin/save-category') ?>" method="POST" class="save-category" enctype="multipart/form-data">
                        <?= csrf_field() ?>
                        <div class="row">
                            <div class="col-md-6">
                                <!-- <h6 class="mb-3">Category</h6> -->
                                <div class="row">
                                    <div class="form-floating mb-4 col-sm-12">
                                        <input type="text" class="form-control" name="category" id="category">
                                        <label for="floatProductcategory">Name</label>
                                        <span class="text-danger mt-1 d-block error-category"></span>
                                    </div>
                                    <div class="col-sm-12 dynamic-category-append">
                                        <div class="form-floating mb-4 col-sm-12 ">
                                            <!-- <input type="text" class="form-control" name="sub_category" id="sub_category"> -->
                                            <select class="form-control sub_category" name="sub_category" id="sub_category">
                                                <option value="">Choose Category</option>
                                                <?php foreach ($category as $item) : ?>
                                                    <option value="<?php echo $item->id  ?>"><?php echo $item->name  ?></option>
                                                <?php endforeach ?>
                                            </select>
                                            <label for="floatSubcategory">Choose category </label>
                                            <span class="text-danger mt-1 d-block error-subcategory"></span>
                                        </div>
                                      
                                    </div>
                                    
                                    <div class="form-floating text-end"><input type="submit" class="btn btn-primary catBtn" value="Save"></div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <h6 class="mb-3">Media</h6>
                                <fieldset class="upload_dropZone text-center mb-3">

                                    <legend class="visually-hidden">Image uploader</legend>

                                    <i class="fa-solid fa-cloud-arrow-up"></i>

                                    <p class="small my-2">Drag &amp; Drop background image(s) inside dashed region<br><span>or</span></p>

                                    <input id="cat_image" name="cat_image" data-post-name="image_background" data-post-url="https://someplace.com/image/uploads/backgrounds/" class="position-absolute invisible" type="file" multiple accept="image/jpeg, image/png, image/svg+xml" />

                                    <label class="btn btn-primary mb-3 choosefile" for="upload_image_background">Choose file(s)</label>

                                    <div class="upload_gallery d-flex flex-wrap justify-content-center gap-2 mb-0"></div>

                                </fieldset>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- content part end -->
<?php
include 'common/footer.php';
?>