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
                <h4>Order History</h4>
            </div>
            <div class="col-sm-6">
                <ul class="d-flex flex-wrap justify-content-end btns_group">
                    <li><a href="#" class="btn btn-sm btn-light">Export</a></li>
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
                    <!-- <li><a href="add-product.php" class="btn btn-sm btn-primary">Add product</a></li> -->
                </ul>
            </div>

            <!-- page body part -->
            <div class="col-12 mt-2">
                <!-- product tab nav part-->
                <div class="table_filter mt-3">
                    <div class="row align-items-center">
                        <div class="col-md-8">
                            <div class="row">
                                <div class="form-floating mt-2 col-sm-4">
                                    <select class="form-select" id="floatingShipping" aria-label="Floating label">
                                        <option value="1">Option One</option>
                                        <option value="2">Option Two</option>
                                        <option value="3">Option Three</option>
                                    </select>
                                    <label for="floatingShipping">Shipping Status</label>
                                </div>
                                <div class="form-floating mt-2 col-sm-4">
                                    <input type="text" class="form-control" id="floatDate" placeholder="">
                                    <label for="floatDate">Order Date</label>
                                </div>
                                <div class="form-floating mt-2 col-sm-4">
                                    <input type="text" class="form-control" id="floatUntill" placeholder="">
                                    <label for="floatUntill">Untill</label>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 d-flex flex-wrap justify-content-end align-items-center">
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
                <div class="panel_body">
                    <div class="panel_body">
                        <div class="table-responsive">
                            <table class="table table-hover orderTable">
                                <thead>
                                    <tr>
                                        <th width="20px">
                                            <div class="form-check form-check-inline">
                                                <input type="checkbox" class="form-check-input" id="check5" name="option1" value="something">
                                                <label class="form-check-label" for="check5"></label>
                                            </div>
                                        </th>
                                        <th>Order No</th>
                                        <th>Date</th>
                                        <th>Order by</th>
                                        <th>Purchase Order</th>
                                        <th>Status</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>
                                            <div class="form-check form-check-inline">
                                                <input type="checkbox" class="form-check-input" id="check6" name="option1" value="something">
                                                <label class="form-check-label" for="check6"></label>
                                            </div>
                                        </td>
                                        <td><strong>#PBC1805</strong></td>
                                        <td>Monday at 10:24 pm</td>
                                        <td><span class="badge bg-secondary">Full business fox</span></td>
                                        <td>4774454</td>
                                        <td>Oredr Shipped</td>
                                        <td><span><a href="#" class="btn btn-sm btn-outline-warning">Reorder</a></span></td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="form-check form-check-inline">
                                                <input type="checkbox" class="form-check-input" id="check7" name="option1" value="something">
                                                <label class="form-check-label" for="check7"></label>
                                            </div>
                                        </td>
                                        <td><strong>#PBC1805</strong></td>
                                        <td>Monday at 10:24 pm</td>
                                        <td><span class="badge bg-secondary">Full business fox</span></td>
                                        <td>4774454</td>
                                        <td>Oredr Shipped</td>
                                        <td><span><a href="#" class="btn btn-sm btn-outline-warning">Reorder</a></span></td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="form-check form-check-inline">
                                                <input type="checkbox" class="form-check-input" id="check8" name="option1" value="something">
                                                <label class="form-check-label" for="check8"></label>
                                            </div>
                                        </td>
                                        <td><strong>#PBC1805</strong></td>
                                        <td>Monday at 10:24 pm</td>
                                        <td><span class="badge bg-secondary">Full business fox</span></td>
                                        <td>4774454</td>
                                        <td>Oredr Shipped</td>
                                        <td><span><a href="#" class="btn btn-sm btn-outline-warning">Reorder</a></span></td>
                                    </tr>
                                </tbody>
                            </table>
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