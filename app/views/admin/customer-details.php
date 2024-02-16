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
                <h6>Customer ID #634759</h6>
                <span>Aug 17, 2020, 5:48 (ET)</span>
            </div>
            <div class="col-sm-6">
                <ul class="d-flex flex-wrap justify-content-end btns_group">
                    <!-- <li><a href="#" class="btn btn-sm btn-light">Refund</a></li>
                        <li><a href="#" class="btn btn-sm btn-light">Edit</a></li> -->
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
                    <!-- <li><a href="add-product.php" class="btn btn-sm btn-primary">Add product</a></li> -->
                </ul>
            </div>

            <!-- page body part -->
            <div class="col-sm-4 mt-3">
                <div class="panel_body customer_left">
                    <center>
                        <div class="customer_pic">
                            <img src="<?= url('user/images/user.jpg') ?>" alt="" class="w-100">
                        </div>
                        <h5>Merri Diamond</h5>
                        <p>New York, USA</p>
                    </center>
                    <hr>
                    <div class="row text-left mb-2">
                        <div class="col-6 d-flex cBox">
                            <span class="icon"><i class="fa-solid fa-cart-shopping"></i></span>
                            <div>
                                <h6>184</h6>
                                <small>Orders</small>
                            </div>
                        </div>
                        <div class="col-6 d-flex cBox">
                            <span class="icon"><i class="fa-solid fa-dollar-sign"></i></span>
                            <div>
                                <h6>$12,378</h6>
                                <small>Spent</small>
                            </div>
                        </div>
                    </div>
                    <hr>
                    <ul class="row">
                        <li class="col-6"><strong>Email :</strong></li>
                        <li class="col-6">example@gmail.com</li>
                        <li class="col-6"><strong>Phone :</strong></li>
                        <li class="col-6">+1 234 567 89</li>
                        <li class="col-6"><strong>Date of birth :</strong></li>
                        <li class="col-6">05 June 2001</li>
                        <li class="col-6"><strong>Address :</strong></li>
                        <li class="col-6">1277 Rollins Road Grand Island, NE 68801</li>
                    </ul>
                    <hr class="mt-3 mb-3">
                    <center><span><a href="#" class="btn btn-outline-primary mb-3"><i class="fa-regular fa-pen-to-square"></i> Edit Profile</a></span></center>
                </div>
            </div>
            <div class="col-md-8 customer_right mt-3">
                <!-- profile tab nav part-->
                <ul class="nav tabHead">
                    <li class="nav-item">
                        <a class="nav-link active" data-bs-toggle="tab" href="#menu1"><i class="fa-regular fa-user"></i> Overview</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" data-bs-toggle="tab" href="#menu2"><i class="fa-solid fa-lock"></i> Security</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" data-bs-toggle="tab" href="#menu3"><i class="fa-solid fa-receipt"></i> Address & Billing</a>
                    </li>
                </ul>
                <div class="tab-content">
                    <div class="tab-pane active" id="menu1">
                        <div class="row">
                            <div class="col-sm-6">
                                <div class="panel_body cBox">
                                    <span class="icon"><i class="fa-solid fa-cart-shopping"></i></span>
                                    <h5 class="mb-2">Account Balance</h5>
                                    <p><span class="big mb-1">$2345</span>Credit Left</p>
                                    <p>Account balance for next purchase</p>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="panel_body cBox">
                                    <span class="icon"><i class="fa-solid fa-gift"></i></span>
                                    <h5 class="mb-2">Loyalty Program</h5>
                                    <p><span class="badge bg-success mb-1">PLATINUM MEMBER
                                        </span></p>
                                    <p>3000 points to next tier</p>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="panel_body cBox">
                                    <span class="icon"><i class="fa-regular fa-star"></i></span>
                                    <h5 class="mb-2">Wishlist</h5>
                                    <p><span class="big mb-1">15</span> Items in wishlist</p>
                                    <p>Receive notification when items go on sale</p>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="panel_body cBox">
                                    <span class="icon"><i class="fa-solid fa-ticket-simple"></i></span>
                                    <h5 class="mb-2">Coupons</h5>
                                    <p><span class="big mb-1">21</span> Coupons you win</p>
                                    <p>Use coupon on next purchase</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="menu2">
                        <div class="panel_body cBox">
                            <div class="alert alert-warning alert-dismissible mb-3">
                                <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
                                <strong>Ensure that these requirements are met.</strong> Minimum 8 characters long, uppercase & symbol
                            </div>
                            <div class="row">
                                <div class="form-floating mt-3 col-md-6">
                                    <input type="password" class="form-control" id="float_password" placeholder="">
                                    <label for="float_password">New Password</label>
                                </div>
                                <div class="form-floating mt-3 col-md-6">
                                    <input type="password" class="form-control" id="float_cpassword" placeholder="">
                                    <label for="float_cpassword">CONFIRM NEW PASSWORD</label>
                                </div>
                                <div class="form-floating mt-3 col-12">
                                    <input type="button" value="Change Password" class="btn btn-secondary">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="menu3">
                        <div class="panel_body cBox">
                            <h6>Address Book</h6>
                            <div class="accordion mt-3" id="myAccordion2">
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="headingOne">
                                        <button type="button" class="accordion-button collapsed" data-bs-toggle="collapse" data-bs-target="#collapseOne">Home &nbsp;<span class="badge bg-warning">DEFAULT ADDRESS</span></button>
                                    </h2>
                                    <div id="collapseOne" class="accordion-collapse collapse" data-bs-parent="#myAccordion2">
                                        <div class="card-body">
                                            <ul class="add_info">
                                                <li><a href="#" class="text-secondary" data-bs-toggle="tooltip" data-bs-placement="top" title="Edit"><i class="fa-regular fa-pen-to-square"></i></a></li>
                                                <li><a href="#" class="text-danger" data-bs-toggle="tooltip" data-bs-placement="top" title="Delete"><i class="fa-regular fa-trash-can"></i></a></li>
                                            </ul>
                                            <p><strong>Violet Mendoza</strong> <br>
                                                23 Shatinon Mekalan,<br>

                                                Melbourne, VIC 3000,<br>

                                                LondonUK</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="headingTwo">
                                        <button type="button" class="accordion-button collapsed" data-bs-toggle="collapse" data-bs-target="#collapseTwo">Office</button>
                                    </h2>
                                    <div id="collapseTwo" class="accordion-collapse collapse" data-bs-parent="#myAccordion2">
                                        <div class="card-body">
                                            <ul class="add_info">
                                                <li><a href="#" class="text-secondary" data-bs-toggle="tooltip" data-bs-placement="top" title="Edit"><i class="fa-regular fa-pen-to-square"></i></a></li>
                                                <li><a href="#" class="text-danger" data-bs-toggle="tooltip" data-bs-placement="top" title="Delete"><i class="fa-regular fa-trash-can"></i></a></li>
                                            </ul>
                                            <p><strong>Violet Mendoza</strong><br>
                                                45 Roker Terrace,<br>

                                                Latheronwheel,<br>

                                                KW5 8NW<br>

                                                LondonUK</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="headingThree">
                                        <button type="button" class="accordion-button collapsed" data-bs-toggle="collapse" data-bs-target="#collapseThree">Family</button>
                                    </h2>
                                    <div id="collapseThree" class="accordion-collapse collapse" data-bs-parent="#myAccordion2">
                                        <div class="card-body">
                                            <ul class="add_info">
                                                <li><a href="#" class="text-secondary" data-bs-toggle="tooltip" data-bs-placement="top" title="Edit"><i class="fa-regular fa-pen-to-square"></i></a></li>
                                                <li><a href="#" class="text-danger" data-bs-toggle="tooltip" data-bs-placement="top" title="Delete"><i class="fa-regular fa-trash-can"></i></a></li>
                                            </ul>
                                            <p><strong>Violet Mendoza</strong><br>
                                                512 Water Plant,<br>

                                                Melbourne, NY 10036,<br>

                                                New York,<br>

                                                United States</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="panel_body cBox">
                            <h6>Payment Methods</h6>
                            <div class="accordion mt-3" id="myAccordion3">
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="heading1">
                                        <button type="button" class="accordion-button collapsed" data-bs-toggle="collapse" data-bs-target="#collapse1"><img src="images/master-light.png" alt="" width="45px" style="margin-right:10px">Mastercard &nbsp;<span class="badge bg-secondary">Expires Apr 2028</span></button>
                                    </h2>
                                    <div id="collapse1" class="accordion-collapse collapse" data-bs-parent="#myAccordion3">
                                        <div class="card-body">
                                            <div class="table-responsive">
                                                <table class="table table-borderless">
                                                    <tbody>
                                                        <tr>
                                                            <td>Name</td>
                                                            <td>Violet Mendoza</td>
                                                            <td>Billing Phone</td>
                                                            <td>USA</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Number</td>
                                                            <td>**** 4487</td>
                                                            <td>Number</td>
                                                            <td>+7634 983 637</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Expires</td>
                                                            <td>04/2028</td>
                                                            <td>Email</td>
                                                            <td>vafgot@vultukir.org</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Type</td>
                                                            <td>Visa credit card</td>
                                                            <td>Origin</td>
                                                            <td>United States </td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="heading2">
                                        <button type="button" class="accordion-button collapsed" data-bs-toggle="collapse" data-bs-target="#collapse2"><img src="images/ae-light.png" alt="" width="45px" style="margin-right:10px">American Express &nbsp;<span class="badge bg-success">
                                                PRIMARY</span></button>
                                    </h2>
                                    <div id="collapse2" class="accordion-collapse collapse" data-bs-parent="#myAccordion3">
                                        <div class="card-body">
                                            <div class="table-responsive">
                                                <table class="table table-borderless">
                                                    <tbody>
                                                        <tr>
                                                            <td>Name</td>
                                                            <td>Violet Mendoza</td>
                                                            <td>Billing Phone</td>
                                                            <td>USA</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Number</td>
                                                            <td>**** 4487</td>
                                                            <td>Number</td>
                                                            <td>+7634 983 637</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Expires</td>
                                                            <td>04/2028</td>
                                                            <td>Email</td>
                                                            <td>vafgot@vultukir.org</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Type</td>
                                                            <td>Visa credit card</td>
                                                            <td>Origin</td>
                                                            <td>United States </td>
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
                </div>
            </div>
            <div class="col-12">
                <div class="col-12">
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
                                        <th>Order</th>
                                        <th>Date</th>
                                        <th>Delivery status</th>
                                        <th>Spent</th>
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
                                        <td><strong><a href="order-details.php">#PBC1805</a></strong></td>
                                        <td>Monday at 10:24 pm</td>
                                        <td><span class="badge bg-secondary">Voided</span></td>
                                        <td>$1,687.66</td>
                                        <td><span><a href="order-details.php" class="text-primary" data-bs-toggle="tooltip" data-bs-placement="top" title="view"><i class="fa-regular fa-eye"></i></a></span><span><a href="#" class="text-secondary" data-bs-toggle="tooltip" data-bs-placement="top" title="Edit"><i class="fa-regular fa-pen-to-square"></i></a></span><span><a href="#" class="text-danger" data-bs-toggle="tooltip" data-bs-placement="top" title="Delete"><i class="fa-regular fa-trash-can"></i></a></span></td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="form-check form-check-inline">
                                                <input type="checkbox" class="form-check-input" id="check7" name="option1" value="something">
                                                <label class="form-check-label" for="check7"></label>
                                            </div>
                                        </td>
                                        <td><strong><a href="order-details.php">#PBC1805</a></strong></td>
                                        <td>Monday at 10:24 pm</td>
                                        <td><span class="badge bg-secondary">Voided</span></td>
                                        <td>$1,687.66</td>
                                        <td><span><a href="order-details.php" class="text-primary" data-bs-toggle="tooltip" data-bs-placement="top" title="view"><i class="fa-regular fa-eye"></i></a></span><span><a href="#" class="text-secondary" data-bs-toggle="tooltip" data-bs-placement="top" title="Edit"><i class="fa-regular fa-pen-to-square"></i></a></span><span><a href="#" class="text-danger" data-bs-toggle="tooltip" data-bs-placement="top" title="Delete"><i class="fa-regular fa-trash-can"></i></a></span></td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="form-check form-check-inline">
                                                <input type="checkbox" class="form-check-input" id="check8" name="option1" value="something">
                                                <label class="form-check-label" for="check8"></label>
                                            </div>
                                        </td>
                                        <td><strong><a href="order-details.php">#PBC1805</a></strong></td>
                                        <td>Monday at 10:24 pm</td>
                                        <td><span class="badge bg-secondary">Voided</span></td>
                                        <td>$1,687.66</td>
                                        <td><span><a href="order-details.php" class="text-primary" data-bs-toggle="tooltip" data-bs-placement="top" title="view"><i class="fa-regular fa-eye"></i></a></span><span><a href="#" class="text-secondary" data-bs-toggle="tooltip" data-bs-placement="top" title="Edit"><i class="fa-regular fa-pen-to-square"></i></a></span><span><a href="#" class="text-danger" data-bs-toggle="tooltip" data-bs-placement="top" title="Delete"><i class="fa-regular fa-trash-can"></i></a></span></td>
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


<?php
include 'common/footer.php';
?>