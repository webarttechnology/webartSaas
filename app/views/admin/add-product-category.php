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
                    <h4>Add Product Category & Subcategory</h4>
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
                        <div class="row">
                            <div class="col-md-6">
                                <h6 class="mb-3">Product</h6>
                                <div class="row">
                                    <div class="form-floating mb-4 col-sm-12">
                                        <select class="js-example-basic-multiple" name="states[]" multiple="multiple">
                                            <option value="AL">Option 1</option>
                                            <option value="WY">Option 2</option>
                                            <option value="AL">Option 3</option>
                                            <option value="WY">Option 4</option>
                                        </select>
                                        <label for="floatProductcategory">Choose product category </label>
                                    </div> 
                                    <div class="form-floating mb-4 col-sm-12">
                                        <select class="js-example-basic-multiple" name="states[]" multiple="multiple">
                                            <option value="AL">Option 1</option>
                                            <option value="WY">Option 2</option>
                                            <option value="AL">Option 3</option>
                                            <option value="WY">Option 4</option>
                                        </select>
                                        <label for="floatSubcategory">Choose product Sub category </label>
                                    </div> 
                                    <div class="form-floating text-end"><input type="button" class="btn btn-primary" value="Save"></div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <h6 class="mb-3">Media</h6>
                                <fieldset class="upload_dropZone text-center mb-3">

                                    <legend class="visually-hidden">Image uploader</legend>
                                
                                    <i class="fa-solid fa-cloud-arrow-up"></i>
                                
                                    <p class="small my-2">Drag &amp; Drop background image(s) inside dashed region<br><span>or</span></p>
                                
                                    <input id="upload_image_background" data-post-name="image_background" data-post-url="https://someplace.com/image/uploads/backgrounds/" class="position-absolute invisible" type="file" multiple accept="image/jpeg, image/png, image/svg+xml" />
                                
                                    <label class="btn btn-primary mb-3" for="upload_image_background">Choose file(s)</label>
                                
                                    <div class="upload_gallery d-flex flex-wrap justify-content-center gap-2 mb-0"></div>
                                
                                </fieldset>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- content part end -->
<?php
include 'common/footer.php';
?>