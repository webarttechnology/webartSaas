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
                <h4>Customers</h4>
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
                <div class="table_filter">
                    <div class="row align-items-center">
                        <div class="col-md-6">
                            <div class="row">
                                <span class="col-sm-6">3872 customers</span>
                                <span class="col-sm-6">100% of your customer base</span>
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
                <div class="panel_body">
                    <div class="table-responsive">
                        <table class="table table-hover orderTable">
                            <thead>
                                <tr>
                                    <th width="20px">
                                        <div class="form-check form-check-inline">
                                            <input type="checkbox" class="form-check-input" id="check1" name="option1" value="something">
                                            <label class="form-check-label" for="check1"></label>
                                        </div>
                                    </th>
                                    <th>Custome Name</th>
                                    <th>Email subscription</th>
                                    <th>Contact</th>
                                    <th>Location</th>
                                    <th>Status</th>
                                    <th>Orders</th>
                                    <th></th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>
                                        <div class="form-check form-check-inline">
                                            <input type="checkbox" class="form-check-input" id="check1" name="option1" value="something">
                                            <label class="form-check-label" for="check1"></label>
                                        </div>
                                    </td>
                                    <td>Arlan Pond</td>
                                    <td>apond0@nytimes.com</td>
                                    <td>(208) 262-238</td>
                                    <td>SPN</td>
                                    <td><span class="badge bg-primary">Hold</span></td>
                                    <td>13</td>
                                    <td><span class="btn btn-sm btn-warning" data-bs-toggle="modal" data-bs-target="#myModal">Send mail</span></td>
                                    <td><span><a href="<?=  url('dw-admin/customer-details') ?>" class="text-primary" data-bs-toggle="tooltip" data-bs-placement="top" title="view"><i class="fa-regular fa-eye"></i></a></span><span><a href="#" class="text-secondary" data-bs-toggle="tooltip" data-bs-placement="top" title="Edit"><i class="fa-regular fa-pen-to-square"></i></a></span><span><a href="#" class="text-danger" data-bs-toggle="tooltip" data-bs-placement="top" title="Delete"><i class="fa-regular fa-trash-can"></i></a></span></td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="form-check form-check-inline">
                                            <input type="checkbox" class="form-check-input" id="check2" name="option1" value="something">
                                            <label class="form-check-label" for="check2"></label>
                                        </div>
                                    </td>
                                    <td>Arlan Pond</td>
                                    <td>apond0@nytimes.com</td>
                                    <td>(208) 262-238</td>
                                    <td>SPN</td>
                                    <td><span class="badge bg-primary">Hold</span></td>
                                    <td>13</td>
                                    <td><span class="btn btn-sm btn-warning" data-bs-toggle="modal" data-bs-target="#myModal">Send mail</span></td>
                                    <td><span><a href="<?=  url('dw-admin/customer-details') ?>" class="text-primary" data-bs-toggle="tooltip" data-bs-placement="top" title="view"><i class="fa-regular fa-eye"></i></a></span><span><a href="#" class="text-secondary" data-bs-toggle="tooltip" data-bs-placement="top" title="Edit"><i class="fa-regular fa-pen-to-square"></i></a></span><span><a href="#" class="text-danger" data-bs-toggle="tooltip" data-bs-placement="top" title="Delete"><i class="fa-regular fa-trash-can"></i></a></span></td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="form-check form-check-inline">
                                            <input type="checkbox" class="form-check-input" id="check3" name="option1" value="something">
                                            <label class="form-check-label" for="check3"></label>
                                        </div>
                                    </td>
                                    <td>Arlan Pond</td>
                                    <td>apond0@nytimes.com</td>
                                    <td>(208) 262-238</td>
                                    <td>SPN</td>
                                    <td><span class="badge bg-primary">Hold</span></td>
                                    <td>13</td>
                                    <td><span class="btn btn-sm btn-warning" data-bs-toggle="modal" data-bs-target="#myModal">Send mail</span></td>
                                    <td><span><a href="<?=  url('dw-admin/customer-details') ?>" class="text-primary" data-bs-toggle="tooltip" data-bs-placement="top" title="view"><i class="fa-regular fa-eye"></i></a></span><span><a href="#" class="text-secondary" data-bs-toggle="tooltip" data-bs-placement="top" title="Edit"><i class="fa-regular fa-pen-to-square"></i></a></span><span><a href="#" class="text-danger" data-bs-toggle="tooltip" data-bs-placement="top" title="Delete"><i class="fa-regular fa-trash-can"></i></a></span></td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="form-check form-check-inline">
                                            <input type="checkbox" class="form-check-input" id="check4" name="option1" value="something">
                                            <label class="form-check-label" for="check4"></label>
                                        </div>
                                    </td>
                                    <td>Arlan Pond</td>
                                    <td>apond0@nytimes.com</td>
                                    <td>(208) 262-238</td>
                                    <td>SPN</td>
                                    <td><span class="badge bg-primary">Hold</span></td>
                                    <td>13</td>
                                    <td><span class="btn btn-sm btn-warning" data-bs-toggle="modal" data-bs-target="#myModal">Send mail</span></td>
                                    <td><span><a href="<?=  url('dw-admin/customer-details') ?>" class="text-primary" data-bs-toggle="tooltip" data-bs-placement="top" title="view"><i class="fa-regular fa-eye"></i></a></span><span><a href="#" class="text-secondary" data-bs-toggle="tooltip" data-bs-placement="top" title="Edit"><i class="fa-regular fa-pen-to-square"></i></a></span><span><a href="#" class="text-danger" data-bs-toggle="tooltip" data-bs-placement="top" title="Delete"><i class="fa-regular fa-trash-can"></i></a></span></td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>

            </div>


        </div>
    </div>
</section>
<!-- content part end -->


<!-- The Modal -->
<div class="modal" id="myModal">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">

            <!-- Modal body -->
            <div class="modal-body">
                <button type="button" class="btn-close text-end" data-bs-dismiss="modal"></button>
                <h4 class="modal-title text-center">Send Email</h4>
                <form action="">
                    <div class="row mt-3">
                        <div class="form-floating mb-3 col-md-12">
                            <input type="text" class="form-control" id="float_to" placeholder="">
                            <label for="float_to">Email To</label>
                        </div>
                        <div class="form-floating mb-3 col-md-12">
                            <input type="text" class="form-control" id="float_form" placeholder="">
                            <label for="float_form">Email From</label>
                        </div>
                        <div class="form-floating mb-3 col-sm-12">
                            <textarea class="form-control" id="floatingDescription" style="height: 100px"></textarea>
                            <label for="floatingDescription">Message</label>
                        </div>
                        <div class="form-floating col-12 text-center">
                            <input type="button" value="Send Mail" class="btn btn-secondary">
                        </div>
                    </div>
                </form>
            </div>

        </div>
    </div>
</div>

<?php
include 'common/footer.php';
?>