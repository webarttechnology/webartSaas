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
                <h4>Products</h4>
            </div>
            <div class="col-sm-6">
                <ul class="d-flex flex-wrap justify-content-end btns_group">
                    <li><a href="#" class="btn btn-sm btn-light">Export</a></li>
                    <li><a href="#" class="btn btn-sm btn-light">Import</a></li>
                    <li>
                        <div class="dropdown">
                            <button type="button" class="btn btn-light btn-sm dropdown-toggle" data-bs-toggle="dropdown">
                                More Option
                            </button>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="#">Hide analytics bar</a></li>
                                <li><a class="dropdown-item" href="#">Pin new products to Pinterest</a></li>
                                <li><a class="dropdown-item" href="#">All product reviews</a></li>
                                <!-- <li><hr class="dropdown-divider"></li>
                                  <li><a class="dropdown-item" href="#">Another link</a></li> -->
                            </ul>
                        </div>
                    </li>
                    <li><a href="<?= url('dw-admin/add-product') ?>" class="btn btn-sm btn-primary">Add product</a></li>
                </ul>
            </div>

            <!-- page body part -->
            <div class="col-12 mt-2">
                <!-- product tab nav part-->
                <ul class="nav tabHead">
                    <li class="nav-item">
                        <a class="nav-link active" data-bs-toggle="tab" href="#menu1">all</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" data-bs-toggle="tab" href="#menu2">active</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" data-bs-toggle="tab" href="#menu3">draft</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" data-bs-toggle="tab" href="#menu4">archive</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" data-bs-toggle="tab" href="#menu5">default</a>
                    </li>
                </ul>

                <div class="table_filter mt-3">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="row">
                                <div class="form-floating mt-2 col-sm-6">
                                    <select class="form-select" id="floatingSelect" aria-label="Floating label">
                                        <option value="1">Option One</option>
                                        <option value="2">Option Two</option>
                                        <option value="3">Option Three</option>
                                    </select>
                                    <label for="floatingSelect">All Category</label>
                                </div>
                                <div class="form-floating mt-2 col-sm-6">
                                    <select class="form-select" id="floatingVendor" aria-label="Floating label">
                                        <option value="1">Option One</option>
                                        <option value="2">Option Two</option>
                                        <option value="3">Option Three</option>
                                    </select>
                                    <label for="floatingVendor">Choose Vendor</label>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 d-flex flex-wrap justify-content-end align-items-center">
                            <div class="searchBox">
                                <input type="text" name="" id="" class="form-control" placeholder="Search">
                                <button class="btn"><i class="fa-solid fa-magnifying-glass"></i></button>
                            </div>
                            <ul class="d-flex flex-wrap btns_group">
                                <li><a href="#" class="btn btn-secondary"><i class="fa-solid fa-filter"></i></a></li>
                                <li><a href="#" class="btn btn-secondary"><i class="fa-solid fa-arrow-up-wide-short"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>

                <!-- product tab content part -->
                <div class="panel_body productLists">
                    <div class="tab-content">
                        <div class="tab-pane active" id="menu1">
                            <div class="table-responsive">
                                <table class="table table-hover">
                                    <thead>
                                        <tr>
                                            <th width="20px">
                                                <div class="form-check form-check-inline">
                                                    <input type="checkbox" class="form-check-input" id="check1" name="option1" value="something">
                                                    <label class="form-check-label" for="check1"></label>
                                                </div>
                                            </th>
                                            <th width="40px"></th>
                                            <th>Product</th>
                                            <th>Status</th>
                                            <th>Inventory</th>
                                            <th>Sales channels</th>
                                            <th>Category</th>
                                            <th>Vendor</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>
                                                <div class="form-check form-check-inline">
                                                    <input type="checkbox" class="form-check-input" id="check2" name="option1" value="something">
                                                    <label class="form-check-label" for="check2"></label>
                                                </div>
                                            </td>
                                            <td><img src="images/1.webp" alt=""></td>
                                            <td>Product Name</td>
                                            <td><span class="badge bg-success">Active</span></td>
                                            <td>25 in stock</td>
                                            <td>7</td>
                                            <td>Electronics</td>
                                            <td>Photobooth City</td>
                                            <td>
                                                <span><a href="<?= url('dw-admin/single-product') ?>" class="text-primary" data-bs-toggle="tooltip" data-bs-placement="top" title="view"><i class="fa-regular fa-eye"></i></a></span>
                                                <span><a href="#" class="text-secondary" data-bs-toggle="tooltip" data-bs-placement="top" title="Edit"><i class="fa-regular fa-pen-to-square"></i></a></span><span><a href="#" class="text-danger" data-bs-toggle="tooltip" data-bs-placement="top" title="Delete"><i class="fa-regular fa-trash-can"></i></a></span>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <div class="form-check form-check-inline">
                                                    <input type="checkbox" class="form-check-input" id="check3" name="option1" value="something">
                                                    <label class="form-check-label" for="check3"></label>
                                                </div>
                                            </td>
                                            <td><img src="images/1.webp" alt=""></td>
                                            <td>Product Name</td>
                                            <td><span class="badge bg-success">Active</span></td>
                                            <td>25 in stock</td>
                                            <td>7</td>
                                            <td>Electronics</td>
                                            <td>Photobooth City</td>
                                            <td>
                                                <span><a href="<?= url('dw-admin/single-product') ?>" class="text-primary" data-bs-toggle="tooltip" data-bs-placement="top" title="view"><i class="fa-regular fa-eye"></i></a></span>
                                                <span><a href="#" class="text-secondary" data-bs-toggle="tooltip" data-bs-placement="top" title="Edit"><i class="fa-regular fa-pen-to-square"></i></a></span><span><a href="#" class="text-danger" data-bs-toggle="tooltip" data-bs-placement="top" title="Delete"><i class="fa-regular fa-trash-can"></i></a></span>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <div class="form-check form-check-inline">
                                                    <input type="checkbox" class="form-check-input" id="check4" name="option1" value="something">
                                                    <label class="form-check-label" for="check4"></label>
                                                </div>
                                            </td>
                                            <td><img src="images/1.webp" alt=""></td>
                                            <td>Product Name</td>
                                            <td><span class="badge bg-success">Active</span></td>
                                            <td>25 in stock</td>
                                            <td>7</td>
                                            <td>Electronics</td>
                                            <td>Photobooth City</td>
                                            <td>
                                                <span><a href="<?= url('dw-admin/single-product') ?>" class="text-primary" data-bs-toggle="tooltip" data-bs-placement="top" title="view"><i class="fa-regular fa-eye"></i></a></span>
                                                <span><a href="#" class="text-secondary" data-bs-toggle="tooltip" data-bs-placement="top" title="Edit"><i class="fa-regular fa-pen-to-square"></i></a></span><span><a href="#" class="text-danger" data-bs-toggle="tooltip" data-bs-placement="top" title="Delete"><i class="fa-regular fa-trash-can"></i></a></span>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <div class="form-check form-check-inline">
                                                    <input type="checkbox" class="form-check-input" id="check5" name="option1" value="something">
                                                    <label class="form-check-label" for="check5"></label>
                                                </div>
                                            </td>
                                            <td><img src="images/1.webp" alt=""></td>
                                            <td>Product Name</td>
                                            <td><span class="badge bg-success">Active</span></td>
                                            <td>25 in stock</td>
                                            <td>7</td>
                                            <td>Electronics</td>
                                            <td>Photobooth City</td>
                                            <td>
                                                <span><a href="<?= url('dw-admin/single-product') ?>" class="text-primary" data-bs-toggle="tooltip" data-bs-placement="top" title="view"><i class="fa-regular fa-eye"></i></a></span>
                                                <span><a href="#" class="text-secondary" data-bs-toggle="tooltip" data-bs-placement="top" title="Edit"><i class="fa-regular fa-pen-to-square"></i></a></span><span><a href="#" class="text-danger" data-bs-toggle="tooltip" data-bs-placement="top" title="Delete"><i class="fa-regular fa-trash-can"></i></a></span>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <div class="form-check form-check-inline">
                                                    <input type="checkbox" class="form-check-input" id="check6" name="option1" value="something">
                                                    <label class="form-check-label" for="check6"></label>
                                                </div>
                                            </td>
                                            <td><img src="images/1.webp" alt=""></td>
                                            <td>Product Name</td>
                                            <td><span class="badge bg-success">Active</span></td>
                                            <td>25 in stock</td>
                                            <td>7</td>
                                            <td>Electronics</td>
                                            <td>Photobooth City</td>
                                            <td>
                                                <span><a href="<?= url('dw-admin/single-product') ?>" class="text-primary" data-bs-toggle="tooltip" data-bs-placement="top" title="view"><i class="fa-regular fa-eye"></i></a></span>
                                                <span><a href="#" class="text-secondary" data-bs-toggle="tooltip" data-bs-placement="top" title="Edit"><i class="fa-regular fa-pen-to-square"></i></a></span><span><a href="#" class="text-danger" data-bs-toggle="tooltip" data-bs-placement="top" title="Delete"><i class="fa-regular fa-trash-can"></i></a></span>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <div class="form-check form-check-inline">
                                                    <input type="checkbox" class="form-check-input" id="check7" name="option1" value="something">
                                                    <label class="form-check-label" for="check7"></label>
                                                </div>
                                            </td>
                                            <td><img src="images/1.webp" alt=""></td>
                                            <td>Product Name</td>
                                            <td><span class="badge bg-success">Active</span></td>
                                            <td>25 in stock</td>
                                            <td>7</td>
                                            <td>Electronics</td>
                                            <td>Photobooth City</td>
                                            <td>
                                                <span><a href="<?= url('dw-admin/single-product') ?>" class="text-primary" data-bs-toggle="tooltip" data-bs-placement="top" title="view"><i class="fa-regular fa-eye"></i></a></span>
                                                <span><a href="#" class="text-secondary" data-bs-toggle="tooltip" data-bs-placement="top" title="Edit"><i class="fa-regular fa-pen-to-square"></i></a></span><span><a href="#" class="text-danger" data-bs-toggle="tooltip" data-bs-placement="top" title="Delete"><i class="fa-regular fa-trash-can"></i></a></span>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <div class="form-check form-check-inline">
                                                    <input type="checkbox" class="form-check-input" id="check8" name="option1" value="something">
                                                    <label class="form-check-label" for="check8"></label>
                                                </div>
                                            </td>
                                            <td><img src="images/1.webp" alt=""></td>
                                            <td>Product Name</td>
                                            <td><span class="badge bg-success">Active</span></td>
                                            <td>25 in stock</td>
                                            <td>7</td>
                                            <td>Electronics</td>
                                            <td>Photobooth City</td>
                                            <td>
                                                <span><a href="<?= url('dw-admin/single-product') ?>" class="text-primary" data-bs-toggle="tooltip" data-bs-placement="top" title="view"><i class="fa-regular fa-eye"></i></a></span>
                                                <span><a href="#" class="text-secondary" data-bs-toggle="tooltip" data-bs-placement="top" title="Edit"><i class="fa-regular fa-pen-to-square"></i></a></span><span><a href="#" class="text-danger" data-bs-toggle="tooltip" data-bs-placement="top" title="Delete"><i class="fa-regular fa-trash-can"></i></a></span>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <div class="form-check form-check-inline">
                                                    <input type="checkbox" class="form-check-input" id="check9" name="option1" value="something">
                                                    <label class="form-check-label" for="check9"></label>
                                                </div>
                                            </td>
                                            <td><img src="images/1.webp" alt=""></td>
                                            <td>Product Name</td>
                                            <td><span class="badge bg-success">Active</span></td>
                                            <td>25 in stock</td>
                                            <td>7</td>
                                            <td>Electronics</td>
                                            <td>Photobooth City</td>
                                            <td>
                                                <span><a href="<?= url('dw-admin/single-product') ?>" class="text-primary" data-bs-toggle="tooltip" data-bs-placement="top" title="view"><i class="fa-regular fa-eye"></i></a></span>
                                                <span><a href="#" class="text-secondary" data-bs-toggle="tooltip" data-bs-placement="top" title="Edit"><i class="fa-regular fa-pen-to-square"></i></a></span><span><a href="#" class="text-danger" data-bs-toggle="tooltip" data-bs-placement="top" title="Delete"><i class="fa-regular fa-trash-can"></i></a></span>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="menu2">
                            <div class="table-responsive">
                                <table class="table table-hover">
                                    <thead>
                                        <tr>
                                            <th width="20px">
                                                <div class="form-check form-check-inline">
                                                    <input type="checkbox" class="form-check-input" id="check10" name="option1" value="something">
                                                    <label class="form-check-label" for="check10"></label>
                                                </div>
                                            </th>
                                            <th width="40px"></th>
                                            <th>Product</th>
                                            <th>Status</th>
                                            <th>Inventory</th>
                                            <th>Sales channels</th>
                                            <th>Category</th>
                                            <th>Vendor</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>
                                                <div class="form-check form-check-inline">
                                                    <input type="checkbox" class="form-check-input" id="check11" name="option1" value="something">
                                                    <label class="form-check-label" for="check11"></label>
                                                </div>
                                            </td>
                                            <td><img src="images/1.webp" alt=""></td>
                                            <td>Product Name</td>
                                            <td><span class="badge bg-success">Active</span></td>
                                            <td>25 in stock</td>
                                            <td>7</td>
                                            <td>Electronics</td>
                                            <td>Photobooth City</td>
                                            <td><span><a href="<?= url('dw-admin/single-product') ?>" class="text-primary" data-bs-toggle="tooltip" data-bs-placement="top" title="view"><i class="fa-regular fa-eye"></i></a></span>
                                                <span><a href="#" class="text-secondary" data-bs-toggle="tooltip" data-bs-placement="top" title="Edit"><i class="fa-regular fa-pen-to-square"></i></a></span><span><a href="#" class="text-danger" data-bs-toggle="tooltip" data-bs-placement="top" title="Delete"><i class="fa-regular fa-trash-can"></i></a></span>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <div class="form-check form-check-inline">
                                                    <input type="checkbox" class="form-check-input" id="check12" name="option1" value="something">
                                                    <label class="form-check-label" for="check12"></label>
                                                </div>
                                            </td>
                                            <td><img src="images/1.webp" alt=""></td>
                                            <td>Product Name</td>
                                            <td><span class="badge bg-success">Active</span></td>
                                            <td>25 in stock</td>
                                            <td>7</td>
                                            <td>Electronics</td>
                                            <td>Photobooth City</td>
                                            <td>
                                                <span><a href="<?= url('dw-admin/single-product') ?>" class="text-primary" data-bs-toggle="tooltip" data-bs-placement="top" title="view"><i class="fa-regular fa-eye"></i></a></span>
                                                <span><a href="#" class="text-secondary" data-bs-toggle="tooltip" data-bs-placement="top" title="Edit"><i class="fa-regular fa-pen-to-square"></i></a></span><span><a href="#" class="text-danger" data-bs-toggle="tooltip" data-bs-placement="top" title="Delete"><i class="fa-regular fa-trash-can"></i></a></span>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <div class="form-check form-check-inline">
                                                    <input type="checkbox" class="form-check-input" id="check13" name="option1" value="something">
                                                    <label class="form-check-label" for="check13"></label>
                                                </div>
                                            </td>
                                            <td><img src="images/1.webp" alt=""></td>
                                            <td>Product Name</td>
                                            <td><span class="badge bg-success">Active</span></td>
                                            <td>25 in stock</td>
                                            <td>7</td>
                                            <td>Electronics</td>
                                            <td>Photobooth City</td>
                                            <td>
                                                <span><a href="<?= url('dw-admin/single-product') ?>" class="text-primary" data-bs-toggle="tooltip" data-bs-placement="top" title="view"><i class="fa-regular fa-eye"></i></a></span>
                                                <span><a href="#" class="text-secondary" data-bs-toggle="tooltip" data-bs-placement="top" title="Edit"><i class="fa-regular fa-pen-to-square"></i></a></span><span><a href="#" class="text-danger" data-bs-toggle="tooltip" data-bs-placement="top" title="Delete"><i class="fa-regular fa-trash-can"></i></a></span>/td>
                                        </tr>

                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="menu3">
                            <div class="table-responsive">
                                <table class="table table-hover">
                                    <thead>
                                        <tr>
                                            <th width="20px">
                                                <div class="form-check form-check-inline">
                                                    <input type="checkbox" class="form-check-input" id="check14" name="option1" value="something">
                                                    <label class="form-check-label" for="check14"></label>
                                                </div>
                                            </th>
                                            <th width="40px"></th>
                                            <th>Product</th>
                                            <th>Status</th>
                                            <th>Inventory</th>
                                            <th>Sales channels</th>
                                            <th>Category</th>
                                            <th>Vendor</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>
                                                <div class="form-check form-check-inline">
                                                    <input type="checkbox" class="form-check-input" id="check15" name="option1" value="something">
                                                    <label class="form-check-label" for="check15"></label>
                                                </div>
                                            </td>
                                            <td><img src="images/1.webp" alt=""></td>
                                            <td>Product Name</td>
                                            <td><span class="badge bg-success">Active</span></td>
                                            <td>25 in stock</td>
                                            <td>7</td>
                                            <td>Electronics</td>
                                            <td>Photobooth City</td>
                                            <td>
                                                <span><a href="<?= url('dw-admin/single-product') ?>" class="text-primary" data-bs-toggle="tooltip" data-bs-placement="top" title="view"><i class="fa-regular fa-eye"></i></a></span>
                                                <span><a href="#" class="text-secondary" data-bs-toggle="tooltip" data-bs-placement="top" title="Edit"><i class="fa-regular fa-pen-to-square"></i></a></span><span><a href="#" class="text-danger" data-bs-toggle="tooltip" data-bs-placement="top" title="Delete"><i class="fa-regular fa-trash-can"></i></a></span>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <div class="form-check form-check-inline">
                                                    <input type="checkbox" class="form-check-input" id="check16" name="option1" value="something">
                                                    <label class="form-check-label" for="check16"></label>
                                                </div>
                                            </td>
                                            <td><img src="images/1.webp" alt=""></td>
                                            <td>Product Name</td>
                                            <td><span class="badge bg-success">Active</span></td>
                                            <td>25 in stock</td>
                                            <td>7</td>
                                            <td>Electronics</td>
                                            <td>Photobooth City</td>
                                            <td>
                                                <span><a href="<?= url('dw-admin/single-product') ?>" class="text-primary" data-bs-toggle="tooltip" data-bs-placement="top" title="view"><i class="fa-regular fa-eye"></i></a></span>
                                                <span><a href="#" class="text-secondary" data-bs-toggle="tooltip" data-bs-placement="top" title="Edit"><i class="fa-regular fa-pen-to-square"></i></a></span><span><a href="#" class="text-danger" data-bs-toggle="tooltip" data-bs-placement="top" title="Delete"><i class="fa-regular fa-trash-can"></i></a></span>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <div class="form-check form-check-inline">
                                                    <input type="checkbox" class="form-check-input" id="check17" name="option1" value="something">
                                                    <label class="form-check-label" for="check17"></label>
                                                </div>
                                            </td>
                                            <td><img src="images/1.webp" alt=""></td>
                                            <td>Product Name</td>
                                            <td><span class="badge bg-success">Active</span></td>
                                            <td>25 in stock</td>
                                            <td>7</td>
                                            <td>Electronics</td>
                                            <td>Photobooth City</td>
                                            <td>
                                                <span><a href="<?= url('dw-admin/single-product') ?>" class="text-primary" data-bs-toggle="tooltip" data-bs-placement="top" title="view"><i class="fa-regular fa-eye"></i></a></span>
                                                <span><a href="#" class="text-secondary" data-bs-toggle="tooltip" data-bs-placement="top" title="Edit"><i class="fa-regular fa-pen-to-square"></i></a></span><span><a href="#" class="text-danger" data-bs-toggle="tooltip" data-bs-placement="top" title="Delete"><i class="fa-regular fa-trash-can"></i></a></span>
                                            </td>
                                        </tr>

                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="menu4">
                            <div class="table-responsive">
                                <table class="table table-hover">
                                    <thead>
                                        <tr>
                                            <th width="20px">
                                                <div class="form-check form-check-inline">
                                                    <input type="checkbox" class="form-check-input" id="check10" name="option1" value="something">
                                                    <label class="form-check-label" for="check10"></label>
                                                </div>
                                            </th>
                                            <th width="40px"></th>
                                            <th>Product</th>
                                            <th>Status</th>
                                            <th>Inventory</th>
                                            <th>Sales channels</th>
                                            <th>Category</th>
                                            <th>Vendor</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>
                                                <div class="form-check form-check-inline">
                                                    <input type="checkbox" class="form-check-input" id="check11" name="option1" value="something">
                                                    <label class="form-check-label" for="check11"></label>
                                                </div>
                                            </td>
                                            <td><img src="images/1.webp" alt=""></td>
                                            <td>Product Name</td>
                                            <td><span class="badge bg-success">Active</span></td>
                                            <td>25 in stock</td>
                                            <td>7</td>
                                            <td>Electronics</td>
                                            <td>Photobooth City</td>
                                            <td>
                                                <span><a href="<?= url('dw-admin/single-product') ?>" class="text-primary" data-bs-toggle="tooltip" data-bs-placement="top" title="view"><i class="fa-regular fa-eye"></i></a></span>
                                                <span><a href="#" class="text-secondary" data-bs-toggle="tooltip" data-bs-placement="top" title="Edit"><i class="fa-regular fa-pen-to-square"></i></a></span><span><a href="#" class="text-danger" data-bs-toggle="tooltip" data-bs-placement="top" title="Delete"><i class="fa-regular fa-trash-can"></i></a></span>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <div class="form-check form-check-inline">
                                                    <input type="checkbox" class="form-check-input" id="check12" name="option1" value="something">
                                                    <label class="form-check-label" for="check12"></label>
                                                </div>
                                            </td>
                                            <td><img src="images/1.webp" alt=""></td>
                                            <td>Product Name</td>
                                            <td><span class="badge bg-success">Active</span></td>
                                            <td>25 in stock</td>
                                            <td>7</td>
                                            <td>Electronics</td>
                                            <td>Photobooth City</td>
                                            <td>
                                                <span><a href="<?= url('dw-admin/single-product') ?>" class="text-primary" data-bs-toggle="tooltip" data-bs-placement="top" title="view"><i class="fa-regular fa-eye"></i></a></span>
                                                <span><a href="#" class="text-secondary" data-bs-toggle="tooltip" data-bs-placement="top" title="Edit"><i class="fa-regular fa-pen-to-square"></i></a></span><span><a href="#" class="text-danger" data-bs-toggle="tooltip" data-bs-placement="top" title="Delete"><i class="fa-regular fa-trash-can"></i></a></span>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <div class="form-check form-check-inline">
                                                    <input type="checkbox" class="form-check-input" id="check13" name="option1" value="something">
                                                    <label class="form-check-label" for="check13"></label>
                                                </div>
                                            </td>
                                            <td><img src="images/1.webp" alt=""></td>
                                            <td>Product Name</td>
                                            <td><span class="badge bg-success">Active</span></td>
                                            <td>25 in stock</td>
                                            <td>7</td>
                                            <td>Electronics</td>
                                            <td>Photobooth City</td>
                                            <td>
                                                <span><a href="<?= url('dw-admin/single-product') ?>" class="text-primary" data-bs-toggle="tooltip" data-bs-placement="top" title="view"><i class="fa-regular fa-eye"></i></a></span>
                                                <span><a href="#" class="text-secondary" data-bs-toggle="tooltip" data-bs-placement="top" title="Edit"><i class="fa-regular fa-pen-to-square"></i></a></span><span><a href="#" class="text-danger" data-bs-toggle="tooltip" data-bs-placement="top" title="Delete"><i class="fa-regular fa-trash-can"></i></a></span>
                                            </td>
                                        </tr>

                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="menu5">
                            <div class="table-responsive">
                                <table class="table table-hover">
                                    <thead>
                                        <tr>
                                            <th width="20px">
                                                <div class="form-check form-check-inline">
                                                    <input type="checkbox" class="form-check-input" id="check14" name="option1" value="something">
                                                    <label class="form-check-label" for="check14"></label>
                                                </div>
                                            </th>
                                            <th width="40px"></th>
                                            <th>Product</th>
                                            <th>Status</th>
                                            <th>Inventory</th>
                                            <th>Sales channels</th>
                                            <th>Category</th>
                                            <th>Vendor</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>
                                                <div class="form-check form-check-inline">
                                                    <input type="checkbox" class="form-check-input" id="check15" name="option1" value="something">
                                                    <label class="form-check-label" for="check15"></label>
                                                </div>
                                            </td>
                                            <td><img src="images/1.webp" alt=""></td>
                                            <td>Product Name</td>
                                            <td><span class="badge bg-success">Active</span></td>
                                            <td>25 in stock</td>
                                            <td>7</td>
                                            <td>Electronics</td>
                                            <td>Photobooth City</td>
                                            <td>
                                                <span><a href="<?= url('dw-admin/single-product') ?>" class="text-primary" data-bs-toggle="tooltip" data-bs-placement="top" title="view"><i class="fa-regular fa-eye"></i></a></span>
                                                <span><a href="#" class="text-secondary" data-bs-toggle="tooltip" data-bs-placement="top" title="Edit"><i class="fa-regular fa-pen-to-square"></i></a></span><span><a href="#" class="text-danger" data-bs-toggle="tooltip" data-bs-placement="top" title="Delete"><i class="fa-regular fa-trash-can"></i></a></span>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <div class="form-check form-check-inline">
                                                    <input type="checkbox" class="form-check-input" id="check16" name="option1" value="something">
                                                    <label class="form-check-label" for="check16"></label>
                                                </div>
                                            </td>
                                            <td><img src="images/1.webp" alt=""></td>
                                            <td>Product Name</td>
                                            <td><span class="badge bg-success">Active</span></td>
                                            <td>25 in stock</td>
                                            <td>7</td>
                                            <td>Electronics</td>
                                            <td>Photobooth City</td>
                                            <td>
                                                <span><a href="<?= url('dw-admin/single-product') ?>" class="text-primary" data-bs-toggle="tooltip" data-bs-placement="top" title="view"><i class="fa-regular fa-eye"></i></a></span>
                                                <span><a href="#" class="text-secondary" data-bs-toggle="tooltip" data-bs-placement="top" title="Edit"><i class="fa-regular fa-pen-to-square"></i></a></span><span><a href="#" class="text-danger" data-bs-toggle="tooltip" data-bs-placement="top" title="Delete"><i class="fa-regular fa-trash-can"></i></a></span>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <div class="form-check form-check-inline">
                                                    <input type="checkbox" class="form-check-input" id="check17" name="option1" value="something">
                                                    <label class="form-check-label" for="check17"></label>
                                                </div>
                                            </td>
                                            <td><img src="images/1.webp" alt=""></td>
                                            <td>Product Name</td>
                                            <td><span class="badge bg-success">Active</span></td>
                                            <td>25 in stock</td>
                                            <td>7</td>
                                            <td>Electronics</td>
                                            <td>Photobooth City</td>
                                            <td>
                                                <span><a href="<?= url('dw-admin/single-product') ?>" class="text-primary" data-bs-toggle="tooltip" data-bs-placement="top" title="view"><i class="fa-regular fa-eye"></i></a></span>
                                                <span><a href="#" class="text-secondary" data-bs-toggle="tooltip" data-bs-placement="top" title="Edit"><i class="fa-regular fa-pen-to-square"></i></a></span><span><a href="#" class="text-danger" data-bs-toggle="tooltip" data-bs-placement="top" title="Delete"><i class="fa-regular fa-trash-can"></i></a></span>
                                            </td>
                                        </tr>

                                    </tbody>
                                </table>
                            </div>
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