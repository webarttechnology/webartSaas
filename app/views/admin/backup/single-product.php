<?php
include 'common/header.php';
include 'common/navbar.php';
include 'common/sidebar.php';
?>
  <!-- content part start -->
  <section class="main_content">
        <div class="container-fluid">
            <div class="row">
                <!-- page title part -->
                <div class="col-sm-6">
                    <h4 class="mb-2">Edit Product</h4>
                    <small class="badge bg-light">Draft</small>
                </div>
                <div class="col-sm-6">
                    <ul class="d-flex flex-wrap justify-content-end btns_group">
                        <li><a href="#" class="btn btn-sm btn-secondary">Duplicate</a></li>
                        <li><a href="#" class="btn btn-sm btn-secondary">Preview</a></li>
                        <li><a href="#" class="btn btn-sm btn-secondary">Share</a></li>
                        <li>
                            <div class="dropdown">
                                <button type="button" class="btn btn-light btn-sm dropdown-toggle" data-bs-toggle="dropdown">
                                  More Option
                                </button>
                                <ul class="dropdown-menu">
                                  <li><a class="dropdown-item" href="#">Hide analytics bar</a></li>
                                  <li><a class="dropdown-item" href="#">Pin new products to Pinterest</a></li>
                                  <li><a class="dropdown-item" href="#">All product reviews</a></li>
                                </ul>
                            </div>
                        </li>
                        <li><a href="<?= url('dw-admin/product') ?>" class="btn btn-sm btn-light">Back</a></li>
                    </ul>
                </div>

                <!-- page body part -->
                <div class="col-12 mt-2">
                    <!-- product tab content part -->
                    <div class="panel_body">
                        <div class="row">
                            <div class="col-md-6">
                                <h6 class="mb-3">Product</h6>
                                <div class="row">
                                    <div class="form-floating mb-3 col-sm-12">
                                        <input type="text" class="form-control" id="floatTitle" placeholder="">
                                        <label for="floatTitle">Title</label>
                                    </div>
                                    <div class="form-floating mb-3 col-sm-12">
                                        <select class="js-example-basic-multiple" name="states[]" multiple="multiple">
                                            <option value="AL">Option 1</option>
                                            <option value="WY">Option 2</option>
                                            <option value="AL">Option 3</option>
                                            <option value="WY">Option 4</option>
                                        </select>
                                        <label for="floatProductcategory">Choose product category </label>
                                    </div> 
                                    <div class="form-floating mb-3 col-sm-12">
                                        <textarea class="form-control" id="floatingDescription" style="height:85px" value=""></textarea>
                                        <label for="floatingDescription">Description</label>
                                    </div>
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
                        
                        <hr>
                        <h6 class="mb-3">Pricing</h6>
                        <div class="row align-items-center">
                            <div class="form-floating mb-3 col-sm-4">
                                <input type="text" class="form-control" id="floatPrice" placeholder="">
                                <label for="floatPrice">Price</label>
                            </div>
                            <div class="form-floating mb-3 col-sm-4">
                                <input type="text" class="form-control" id="floatCompare" placeholder="">
                                <label for="floatCompare">Compare-at price</label>
                            </div>
                            <div class="form-check mb-3 col-sm-4">
                                <input type="checkbox" class="form-check-input" id="check2" name="option2" value="something">
                                <label class="form-check-label" for="check2">Charge tax on this product</label>
                            </div>
                            <div class="form-floating mb-3 col-sm-4">
                                <input type="text" class="form-control" id="floatCost" placeholder="">
                                <label for="floatCost">Cost per item</label>
                            </div>
                            <div class="form-floating mb-3 col-sm-4">
                                <input type="text" class="form-control" id="floatProfit" placeholder="">
                                <label for="floatProfit">Profit</label>
                            </div>
                            <div class="form-floating mb-3 col-sm-4">
                                <input type="text" class="form-control" id="floatMargin" placeholder="">
                                <label for="floatMargin">Margin</label>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-12">
                            <hr>
                            <h6 class="mb-3">Inventory</h6>
                                <div class="row align-items-center">
                                    <div class="form-floating mb-3 col-sm-6">
                                        <select class="js-example-basic-multiple" name="states[]" multiple="multiple">
                                            <option value="AL">Option 1</option>
                                            <option value="WY">Option 2</option>
                                            <option value="AL">Option 3</option>
                                            <option value="WY">Option 4</option>
                                        </select>
                                        <label for="floatCompare">Inventory will be stocked at</label>
                                    </div>  
                                    <div class="form-check mb-3 col-sm-6">
                                        <input type="checkbox" class="form-check-input" id="check3" name="option2" value="something">
                                        <label class="form-check-label" for="check3">Track quantity</label>
                                    </div>  
                                </div>
                            </div>
                           
                            <div class="col-sm-12">
                            <hr>
                                <h6 class="mb-3">Quantity</h6>
                                <div class="row align-items-center">
                                <div class="form-floating mb-3 col-sm-4">
                                    <input type="number" class="form-control" id="floatChino" placeholder="">
                                    <label for="floatChino">Chino</label>
                                </div>  
                                <div class="form-check mb-3 col-sm-4">
                                    <input type="checkbox" class="form-check-input" id="check4" name="option2" value="something">
                                    <label class="form-check-label" for="check4">Continue selling when out of stock</label>
                                </div>  
                                <div class="form-check mb-3 col-sm-4">
                                    <input type="checkbox" class="form-check-input" id="check5" name="option2" value="something">
                                    <label class="form-check-label" for="check5">This product has a SKU or barcode</label>
                                </div>
                                </div>
                            </div>
                            
                            <div class="col-sm-12">
                            <hr>
                                <h6 class="mb-3">Shipping</h6>
                                <div class="row align-items-center">
                                    <div class="form-floating mb-3 col-sm-3">
                                        <input type="text" class="form-control" id="floatWidth" placeholder="">
                                        <label for="floatWidth">Width</label>
                                    </div>
                                    <div class="form-floating mb-3 col-sm-3">
                                        <input type="text" class="form-control" id="floatHeight" placeholder="">
                                        <label for="floatHeight">Height</label>
                                    </div>
                                    <div class="form-floating mb-3 col-sm-3">
                                        <input type="text" class="form-control" id="floatWeight" placeholder="">
                                        <label for="floatWeight">Weight</label>
                                    </div>  
                                    <div class="form-floating mb-3 col-sm-2">
                                        <input type="number" class="form-control" id="floatIb" placeholder="">
                                        <label for="floatIb">Ib</label>
                                    </div> 
                                    <div class="form-check mb-3 ml-10 col-12">
                                        <input type="checkbox" class="form-check-input" id="check6" name="option2" value="something">
                                        <label class="form-check-label" for="check6">This is a physical product</label>
                                    </div>  
                                </div>
                                <hr>
                                <!-- <div class="row mt-4" style="display:none" id="customInfoBox">
                                    <div class="form-floating mb-3 col-sm-6">
                                        <select class="form-select" id="floatingCountry" aria-label="Floating label">
                                        <option value="1">Option One</option>
                                        <option value="2">Option Two</option>
                                        <option value="3">Option Three</option>
                                        </select>
                                        <label for="floatingCountry">Country/Region of origin</label>
                                    </div>
                                    <div class="form-floating mb-3 col-sm-6 searchBox">
                                        <input type="text" name="" id="floatingHarmonized" class="form-control" placeholder="Search">
                                        <button class="btn"><i class="fa-solid fa-magnifying-glass"></i></button>
                                        <label for="floatingHarmonized">Harmonized System (HS) code</label>
                                    </div>
                                </div>

                                <span id="customInfo"><a href="javascript:void;" class="text-danger mb-3"><i class="fa-solid fa-plus"></i> Add custom information</a></span>
                                <hr> -->
                                <h6 class="mb-3">Variants</h6>
                                <div class="variantMain">
                                    <div class="form-check mb-3 ml-10 col-12">
                                        <input type="checkbox" class="form-check-input" id="check7" name="option2" value="something">
                                        <label class="form-check-label" for="check7">Is variation product?</label>
                                    </div> 
                                    <div class="innerPannel afterCheck" style="display:none">
                                        <div class="options">
                                            <ul>
                                                <li><a href="#" class="text-success" data-bs-toggle="tooltip" data-bs-placement="top" title="Add variation"><i class="fa-solid fa-plus"></i></a></li>
                                                <li><a href="#" class="text-danger" data-bs-toggle="tooltip" data-bs-placement="top" title="Delete"><i class="fa-regular fa-trash-can"></i></a></li>
                                            </ul>
                                        </div>
                                        <div class="row">
                                            <div class="col-sm-8 col-md-8">
                                                <div class="row">
                                                    <div class="form-floating mb-3 col-sm-6 col-md-6">
                                                        <input type="text" class="form-control" id="floatAttribute" placeholder="">
                                                        <label for="floatAttribute">Add attribute </label>
                                                    </div> 
                                                    <div class="form-floating mb-3 col-sm-6 col-md-6">
                                                        <input type="text" class="form-control" id="floatValue" placeholder="">
                                                        <label for="floatValue">Value </label>
                                                    </div> 
                                                    <div class="form-floating mb-3 col-sm-6 col-md-6">
                                                        <input type="text" class="form-control" id="floatPrice" placeholder="">
                                                        <label for="floatPrice">Price </label>
                                                    </div> 
                                                    <div class="form-floating mb-3 col-sm-6 col-md-6">
                                                        <input type="text" class="form-control" id="floatSKU" placeholder="">
                                                        <label for="floatSKU">SKU Code </label>
                                                    </div> 
                                                </div>
                                            </div>
                                            <div class="col-sm-4 col-md-3">
                                                <div class="profile-pic">
                                                    <label class="-label" for="file">
                                                        <span class="fa-solid fa-file-arrow-up"></span>
                                                        <span>Change Image</span>
                                                    </label>
                                                    <input id="file" type="file" onchange="loadFile(event)"/>
                                                    <img src="images/product-placeholder.jpg" id="output" width="200" />
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="innerPannel notCheck">
                                        <div class="row">
                                            <div class="form-floating mb-3 col-sm-6 col-md-3">
                                                <input type="text" class="form-control" id="floatSale" placeholder="">
                                                <label for="floatSale">Sale price</label>
                                            </div>
                                            <div class="form-floating mb-3 col-sm-6 col-md-3">
                                                <input type="text" class="form-control" id="floatOffer" placeholder="">
                                                <label for="floatOffer">Offer price </label>
                                            </div> 
                                        </div>
                                    </div>
                                </div>
                                <h6 class="mb-3">Tags</h6>
                                <div class="form-floating mb-3">
                                    <input name='tags' value='try, adding, a tag' class="form-control">
                                    <label for="floatOffer">Tags </label>
                                </div>
                                <div class="form-floating text-end"><input type="button" class="btn btn-primary" value="Publish"></div>
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