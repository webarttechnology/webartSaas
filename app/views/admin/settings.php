<?php
include 'common/header.php';
include 'common/navbar.php';
include 'common/sidebar.php';
?>

<!-- content part start -->
<section class="main_content settings">
    <div class="container-fluid">
        <div class="row">
            <!-- page title part -->
            <div class="col-sm-6">
                <h4>Settings</h4>
            </div>
            <div class="col-sm-6">
                <!-- <ul class="d-flex flex-wrap justify-content-end btns_group">
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
                                </ul>
                            </div>
                        </li>
                        <li><a href="add-product.php" class="btn btn-sm btn-primary">Add product</a></li>
                    </ul> -->
            </div>

            <div class="col-sm-4 col-md-3 mt-3 sidebar-item">
                <!-- product tab nav part-->
                <div class="widget make-me-sticky">
                    <ul class="nav tabHead">
                        <li class="nav-item">
                            <a class="nav-link active" data-bs-toggle="tab" href="#menu1"><i class="fa-solid fa-store"></i> Store Details</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" data-bs-toggle="tab" href="#menu2"><i class="fa-solid fa-credit-card"></i> Payments</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" data-bs-toggle="tab" href="#menu3"><i class="fa-solid fa-cart-shopping"></i> Checkout</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" data-bs-toggle="tab" href="#menu4"><i class="fa-solid fa-truck-ramp-box"></i> Shipping & delivery</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" data-bs-toggle="tab" href="#menu5"><i class="fa-solid fa-route"></i> Locations</a>
                        </li>
                        <!-- <li class="nav-item">
                                <a class="nav-link" data-bs-toggle="tab" href="#menu5"><i class="fa-regular fa-bell"></i> Notifications</a>
                            </li> -->
                    </ul>
                </div>
            </div>

            <!-- page body part -->
            <div class="col-sm-8 col-md-9 mt-3 content-section">
                <!-- product tab content part -->
                <div class="panel_body m-0">
                    <div class="tab-content">
                        <div class="tab-pane active" id="menu1">
                            <h5>Profile</h5>
                            <hr class="mb-2 mt-2">
                            <div class="row mb-3">
                                <div class="form-floating mt-3 col-sm-6">
                                    <input type="text" class="form-control" id="floatStore" placeholder="">
                                    <label for="floatStore">STORE NAME</label>
                                </div>
                                <div class="form-floating mt-3 col-sm-6">
                                    <input type="text" class="form-control" id="floatStore" placeholder="">
                                    <label for="floatStore">PHONE</label>
                                </div>
                                <div class="form-floating mt-3 col-sm-6">
                                    <input type="email" class="form-control" id="floatEmail" placeholder="">
                                    <label for="floatEmail">STORE CONTACT EMAIL</label>
                                </div>
                                <div class="form-floating mt-3 col-sm-6">
                                    <input type="email" class="form-control" id="floatSenderEmail" placeholder="">
                                    <label for="floatSenderEmail">SENDER EMAIL</label>
                                </div>
                                <div class="col-12 mt-3">
                                    <div class="alert alert-warning m-0">
                                        <strong><i class="fa-solid fa-bell"></i></strong> Confirm that you have access to johndoe@gmail.com in sender email settings.
                                    </div>
                                </div>
                            </div>
                            <h5>Billing information</h5>
                            <hr class="mb-2 mt-2">
                            <div class="row mb-3">
                                <div class="form-floating mt-3 col-sm-6">
                                    <input type="text" class="form-control" id="floatStore" placeholder="">
                                    <label for="floatBname">LEGAL BUSINESS NAME</label>
                                </div>
                                <div class="form-floating mt-3 col-sm-6">
                                    <select class="form-select" id="floatingCountry" aria-label="Floating label">
                                        <option value="1">Option One</option>
                                        <option value="2">Option Two</option>
                                        <option value="3">Option Three</option>
                                    </select>
                                    <label for="floatingCountry">COUNTRY/REGION
                                    </label>
                                </div>
                                <div class="form-floating mt-3 col-sm-6">
                                    <input type="text" class="form-control" id="floatAddress" placeholder="">
                                    <label for="floatAddress">ADDRESS</label>
                                </div>
                                <div class="form-floating mt-3 col-sm-6">
                                    <input type="text" class="form-control" id="floatApartment" placeholder="">
                                    <label for="floatApartment">APARTMENT, SUITE, ETC.</label>
                                </div>
                                <div class="form-floating mt-3 col-sm-6 col-md-4">
                                    <input type="text" class="form-control" id="floatCity" placeholder="">
                                    <label for="floatCity">CITY</label>
                                </div>
                                <div class="form-floating mt-3 col-sm-6 col-md-4">
                                    <input type="text" class="form-control" id="floatState" placeholder="">
                                    <label for="floatState">STATE</label>
                                </div>
                                <div class="form-floating mt-3 col-sm-6 col-md-4">
                                    <input type="text" class="form-control" id="floatPin" placeholder="">
                                    <label for="floatPin">PIN CODE</label>
                                </div>
                            </div>
                            <h5>Time zone and units of measurement</h5>
                            <hr class="mb-2 mt-2">
                            <p>Used to calculate product prices, shipping weighs, and order times.</p>
                            <div class="row mb-3">
                                <div class="form-floating mt-3 col-sm-12">
                                    <select class="form-control js-example-tags">
                                        <option selected="selected">(GMT-12:00) International Date Line West</option>
                                        <option>(GMT-11:00) Midway Island, Samoa</option>
                                        <option>(GMT-10:00) Hawaii</option>
                                    </select>
                                    <label for="floatTime">TIME ZONE</label>
                                </div>
                                <div class="form-floating mt-3 col-sm-6">
                                    <select class="form-control js-example-tags">
                                        <option selected="selected">(GMT-12:00) International Date Line West</option>
                                        <option>(GMT-11:00) Midway Island, Samoa</option>
                                        <option>(GMT-10:00) Hawaii</option>
                                    </select>
                                    <label for="floatUnit">UNIT SYSTEM</label>
                                </div>
                                <div class="form-floating mt-3 col-sm-6">
                                    <select class="form-control js-example-tags">
                                        <option selected="selected">(GMT-12:00) International Date Line West</option>
                                        <option>(GMT-11:00) Midway Island, Samoa</option>
                                        <option>(GMT-10:00) Hawaii</option>
                                    </select>
                                    <label for="floatWeightUnit">DEFAULT WEIGHT UNIT</label>
                                </div>
                            </div>
                            <h5>Store currency</h5>
                            <p>The currency your products are sold in.</p>
                            <hr class="mb-2 mt-2">
                            <div class="row mb-3">
                                <div class="form-floating mt-3 col-sm-6">
                                    <select class="form-control js-example-tags">
                                        <option selected="selected">Euro</option>
                                        <option>USD</option>
                                        <option>Pound</option>
                                    </select>
                                    <label for="floatCurency">STORE CURRENCY</label>
                                </div>
                            </div>
                            <h5>Order id format</h5>
                            <p>Shown on the Orders page, customer pages, and customer order notifications to identify orders.</p>
                            <hr class="mb-2 mt-2">
                            <div class="row mb-3">
                                <div class="form-floating mt-3 col-sm-6">
                                    <input type="number" class="form-control" id="floatPrefix" placeholder="">
                                    <label for="floatPrefix">PREFIX</label>
                                </div>
                                <div class="form-floating mt-3 col-sm-6">
                                    <input type="text" class="form-control" id="floatSuffix" placeholder="">
                                    <label for="floatSuffix">SUFFIX</label>
                                </div>
                                <div class="form-floating mt-3 col-12">
                                    <p>Your order ID will appear as #1001, #1002, #1003 ...</p>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="menu2">
                            <h5 class="mb-2">Payment providers</h5>
                            <p>Providers that enable you to accept payment methods at a rate set by the third-party.
                                An additional fee will apply to new orders once you select a plan</p>
                            <span><a href="#" class="btn btn-primary mb-3" data-bs-toggle="modal" data-bs-target="#providerModal">Choose a Provider</a></span>
                            <hr class="mb-3">
                            <h5 class="mb-2">Supported payment methods</h5>
                            <p>Payment methods that are available with one of Vuexy's approved payment providers.</p>

                            <div class="box">
                                <div class="table-responsive">
                                    <table class="table table-borderd">
                                        <tr>
                                            <td><img src="images/master-light.png" alt="" class="card_pic"></td>
                                            <td colspan="2" class="text-end"><a href="#" class="text-success">Activate Paypal</a></td>
                                        </tr>
                                        <tr>
                                            <td><strong>Provider</strong><br>Paypal</td>
                                            <td><strong>Status</strong><br><span class="badge bg-warning">INACTIVE</span></td>
                                            <td><strong>Transaction Fee</strong><br>2.99%</td>
                                        </tr>
                                    </table>
                                </div>
                            </div>
                            <span><a href="javascipt:void;" class="btn btn-primary mb-3" data-bs-toggle="modal" data-bs-target="#addpaymentModal"><i class="fa-solid fa-plus"></i> Add payment method</a></span>
                            <hr class="mb-3">
                            <h5 class="mb-2">Manual payment methods</h5>
                            <p>Payments that are made outside your online store. When a customer selects a manual payment method such as cash on delivery. You'll need to approve their order before it can be fulfilled.</p>
                            <div class="dropdown">
                                <button type="button" class="btn btn-primary dropdown-toggle" data-bs-toggle="dropdown">
                                    <i class="fa-solid fa-plus"></i> Manual payment method
                                </button>
                                <ul class="dropdown-menu">
                                    <li><a class="dropdown-item" href="#" data-bs-toggle="modal" data-bs-target="#manualpaymentModal">Create custom payment method</a></li>
                                    <li><a class="dropdown-item" href="#" data-bs-toggle="modal" data-bs-target="#manualpaymentModal">Bank Deposit</a></li>
                                    <li><a class="dropdown-item" href="#" data-bs-toggle="modal" data-bs-target="#manualpaymentModal">Money Order</a></li>
                                    <li><a class="dropdown-item" href="#" data-bs-toggle="modal" data-bs-target="#manualpaymentModal">Cash on Delivery (COD)</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="menu3">
                            <h5 class="mb-2">Customer contact method</h5>
                            <p>Select what contact method customers use to check out.</p>
                            <hr class="mb-2 mt-2">
                            <div class="form-check form-check-inline">
                                <input type="radio" class="form-check-input" id="radio3" name="optradio" value="option1" checked>
                                <label class="form-check-label" for="radio3">Phone number</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input type="radio" class="form-check-input" id="radio4" name="optradio" value="option1" checked>
                                <label class="form-check-label" for="radio4">Email</label>
                            </div>
                            <div class="col-12 mt-3">
                                <div class="alert alert-info">
                                    <strong><i class="fa-solid fa-circle-info"></i></strong> To send SMS updates, you need to install an SMS App.
                                </div>
                            </div>
                            <h5 class="mb-2">Customer information</h5>
                            <hr class="mb-2 mt-2">
                            <div class="row customer_infos">
                                <div class="col-sm-6 col-md-4">
                                    <div class="box">
                                        <h6 class="mb-2">Full name</h6>
                                        <div class="form-check mt-2">
                                            <input type="radio" class="form-check-input" id="radio5" name="optradio" value="option1" checked>
                                            <label class="form-check-label" for="radio5">Only require last name</label>
                                        </div>
                                        <div class="form-check mt-2">
                                            <input type="radio" class="form-check-input" id="radio6" name="optradio" value="option1" checked>
                                            <label class="form-check-label" for="radio6">Require first and last name</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-6 col-md-4">
                                    <div class="box">
                                        <h6 class="mb-2">Company name</h6>
                                        <div class="form-check mt-2">
                                            <input type="radio" class="form-check-input" id="radio7" name="optradio" value="option1" checked>
                                            <label class="form-check-label" for="radio7">Don't include name</label>
                                        </div>
                                        <div class="form-check mt-2">
                                            <input type="radio" class="form-check-input" id="radio8" name="optradio" value="option1" checked>
                                            <label class="form-check-label" for="radio8">Optional</label>
                                        </div>
                                        <div class="form-check mt-2">
                                            <input type="radio" class="form-check-input" id="radio9" name="optradio" value="option1" checked>
                                            <label class="form-check-label" for="radio9">Required</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-6 col-md-4">
                                    <div class="box">
                                        <h6 class="mb-2">Address line 2 (apartment, unit, etc.)</h6>
                                        <div class="form-check mt-2">
                                            <input type="radio" class="form-check-input" id="radio10" name="optradio" value="option1" checked>
                                            <label class="form-check-label" for="radio10">Don't include name</label>
                                        </div>
                                        <div class="form-check mt-2">
                                            <input type="radio" class="form-check-input" id="radio11" name="optradio" value="option1" checked>
                                            <label class="form-check-label" for="radio11">Optional</label>
                                        </div>
                                        <div class="form-check mt-2">
                                            <input type="radio" class="form-check-input" id="radio12" name="optradio" value="option1" checked>
                                            <label class="form-check-label" for="radio12">Required</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-6 col-md-4">
                                    <div class="box">
                                        <h6 class="mb-2">Shipping address phone number</h6>
                                        <div class="form-check mt-2">
                                            <input type="radio" class="form-check-input" id="radio13" name="optradio" value="option1" checked>
                                            <label class="form-check-label" for="radio13">Don't include name</label>
                                        </div>
                                        <div class="form-check mt-2">
                                            <input type="radio" class="form-check-input" id="radio14" name="optradio" value="option1" checked>
                                            <label class="form-check-label" for="radio14">Optional</label>
                                        </div>
                                        <div class="form-check mt-2">
                                            <input type="radio" class="form-check-input" id="radio15" name="optradio" value="option1" checked>
                                            <label class="form-check-label" for="radio15">Required</label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <h5 class="mb-2">Address collection preferences</h5>
                            <hr class="mb-2 mt-2">
                            <div class="form-check mt-3">
                                <input type="checkbox" class="form-check-input" id="check1" name="option1" value="something" checked>
                                <label class="form-check-label" for="check1">Use the shipping address as the billing address by default
                                    The billing address can still be edited.</label>
                            </div>
                            <div class="form-check mt-3">
                                <input type="checkbox" class="form-check-input" id="check2" name="option1" value="something">
                                <label class="form-check-label" for="check2">Use address autocompletion
                                    Offer suggestions when customers enter their address.</label>
                            </div>
                            <div class="form-check mt-3">
                                <input type="checkbox" class="form-check-input" id="check3" name="option1" value="something" checked>
                                <label class="form-check-label" for="check3">Validate shipping address
                                    Minimize failed deliveries by offering suggestions when customers enter an invalid shipping address.</label>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="menu4">
                            <h6 class="mb-2">Shipping</h6>
                            <p>Choose where you ship and how much you charge for shipping at checkout.</p>
                            <hr class="mb-2 mt-2">
                            <p><strong>General shipping rates</strong></p>
                            <div class="box generalShipping">
                                <a href="javascript:script;" data-bs-toggle="modal" data-bs-target="#generalProfileModal">
                                    <strong>General</strong>
                                    <p>All products <span class="float-end"><i class="fa-solid fa-chevron-right"></i></span></p>
                                    <ul class="p_status d-flex justify-content-between">
                                        <li>
                                            <strong>Rates for</strong><br>
                                            <i class="fa-solid fa-location-dot"></i> 1 Location
                                        </li>
                                        <li>
                                            <strong></strong><br>
                                            <i class="fa-solid fa-earth-africa"></i> 2 Zones
                                        </li>
                                        <li>
                                            <strong>No Rates for</strong><br>
                                            <i class="fa-solid fa-location-dot"></i> 2 Location
                                        </li>
                                    </ul>
                                </a>
                            </div>
                            <hr class="mb-3 mt-3">
                            <p><strong>Expected delivery dates</strong></p>
                            <div class="box2 d-flex justify-content-between pointer" data-bs-toggle="modal" data-bs-target="#dateModal">
                                <span class="text-primary">Show delivery dates at checkout</span>
                                <div class="form-check form-switch pointer">
                                    <input class="form-check-input" type="checkbox" id="mySwitch" name="darkmode" value="yes" disabled>
                                    <label class="form-check-label" for="mySwitch">Off</label>
                                </div>
                            </div>
                            <hr class="mb-3 mt-3">
                            <p><strong>Local delivery</strong></p>
                            <div class="box d-flex mt-3 pointer" data-bs-toggle="modal" data-bs-target="#locationModal">
                                <span><i class="fa-solid fa-location-dot mr-10"></i></span>
                                <p style="flex-grow:1; margin:0"><strong>Chino</strong><br><small>12345 Mills Avenue, Unit 28, Chino California 91710, United States</small> <span class="badge bg-light float-end">Doesn't offer delivery <i class="fa-solid fa-chevron-right"></i></span></p>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="menu5">
                            <h6 class="mb-2">Locations</h6>
                            <p></p>
                            <div class="box d-flex mt-2">
                                <span><i class="fa-solid fa-location-dot mr-10"></i></span>
                                <p style="flex-grow:1; margin:0"><strong>Chino</strong><br><small>12345 Mills Avenue, Unit 28, Chino California 91710, United States</small> <span class="badge bg-light float-end">Default</span></p>
                            </div>
                            <div class="box d-flex mt-2">
                                <span><i class="fa-solid fa-location-dot mr-10"></i></span>
                                <p style="flex-grow:1; margin:0"><strong>Chino</strong><br><small>12345 Mills Avenue, Unit 28, Chino California 91710, United States</small></p>
                            </div>
                            <h6 class="mb-2">Add Location</h6>
                            <div class="row">
                                <div class="form-floating mt-3 col-sm-12 mb-3">
                                    <select class="form-control js-example-tags">
                                        <option selected="selected">Option 1</option>
                                        <option>Option 2</option>
                                        <option>Option 3</option>
                                    </select>
                                    <label for="floatCountry2">COUNTRY/REGION</label>
                                </div>
                                <div class="form-floating mb-3 col-sm-4 mb-3">
                                    <input type="text" class="form-control" id="floatAddress" placeholder="">
                                    <label for="floatAddress">Address</label>
                                </div>
                                <div class="form-floating mb-3 col-sm-4 mb-3">
                                    <input type="text" class="form-control" id="floatSuite" placeholder="">
                                    <label for="floatSuite">APARTMENT, SUITE, ETC.</label>
                                </div>
                                <div class="form-floating mb-3 col-sm-4">
                                    <input type="text" class="form-control" id="floatPhone2" placeholder="">
                                    <label for="floatPhone2">PHONE</label>
                                </div>
                                <div class="form-floating mb-3 col-sm-4 mb-3">
                                    <input type="text" class="form-control" id="floatCity2" placeholder="">
                                    <label for="floatCity2">City</label>
                                </div>
                                <div class="form-floating mb-3 col-sm-4 mb-3">
                                    <input type="text" class="form-control" id="floatState2" placeholder="">
                                    <label for="floatState2">STATE</label>
                                </div>
                                <div class="form-floating mb-3 col-sm-4 mb-3">
                                    <input type="text" class="form-control" id="floatPin2" placeholder="">
                                    <label for="floatPin2">PIN CODE</label>
                                </div>
                                <div class="col-sm-12 text-end">
                                    <input type="button" value="Submit" class="btn btn-primary">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- content part end -->

<!-- General profile Modal -->
<div class="modal" id="generalProfileModal">
    <div class="modal-dialog modal-dialog-centered modal-lg">
        <div class="modal-content">
            <!-- Modal body -->
            <div class="modal-body">
                <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                <h4 class="modal-title">General profile</h4>
                <p>New products are added to this profile.</p>
                <div class="row">
                    <div class="col-sm-6 mt-3">
                        <div class="box row">
                            <span class="col-3"><img src="images/1.webp" alt="" class="img-fluid img-thumbnail"></span>
                            <p class="col-9"><strong>Marquee Photobooth System Package</strong><br><small>16 of 16 variants</small></p>
                        </div>
                    </div>
                    <div class="col-sm-6 mt-3">
                        <div class="box row">
                            <span class="col-3"><img src="images/1.webp" alt="" class="img-fluid img-thumbnail"></span>
                            <p class="col-9"><strong>Marquee Photobooth System Package</strong><br><small>16 of 16 variants</small></p>
                        </div>
                    </div>
                    <div class="col-sm-6 mt-3">
                        <div class="box row">
                            <span class="col-3"><img src="images/1.webp" alt="" class="img-fluid img-thumbnail"></span>
                            <p class="col-9"><strong>Marquee Photobooth System Package</strong><br><small>16 of 16 variants</small></p>
                        </div>
                    </div>
                    <div class="col-sm-6 mt-3">
                        <div class="box row">
                            <span class="col-3"><img src="images/1.webp" alt="" class="img-fluid img-thumbnail"></span>
                            <p class="col-9"><strong>Marquee Photobooth System Package</strong><br><small>16 of 16 variants</small></p>
                        </div>
                    </div>
                </div>
                <hr>
                <h5>Shipping origins</h5>
                <div class="box d-flex mt-3">
                    <span><i class="fa-solid fa-location-dot mr-10"></i></span>
                    <p><strong>Chino</strong><br><small>12345 Mills Avenue, Unit 28, Chino California 91710, United States</small></p>
                </div>
                <h6 class="mb-2">Shipping zones <small class="text-primary float-end zonebtn">Create zone</small></h6>
                <div class="box2" id="newZone" style="display:none">
                    <p><strong>Create new shipping zone</strong></p>
                    <div class="row">
                        <div class="form-floating col-md-6 mb-3">
                            <input type="text" class="form-control" id="floatZone" placeholder="">
                            <label for="floatZone">Zone name</label>
                        </div>
                        <div class="form-floating col-md-6 mb-3">
                            <div class="searchBox">
                                <input type="text" name="" id="" class="form-control" placeholder="Search">
                                <button class="btn"><i class="fa-solid fa-magnifying-glass"></i></button>
                            </div>
                        </div>
                        <div class="col-12 mb-3 text-end">
                            <input type="button" value="Cancel" class="btn btn-sm btn-danger m-h-1">
                            <input type="button" value="Done" class="btn btn-sm btn-dark m-h-1">
                        </div>
                    </div>
                </div>

                <p class="text-primary">United States (59 of 62 states)</p>
                <ul class="nav tabHead">
                    <li class="nav-item">
                        <a class="nav-link active" data-bs-toggle="tab" href="#menu1">Your Rates(4)</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" data-bs-toggle="tab" href="#menu2">Carrier and app rates (2)</a>
                    </li>
                </ul>
                <div class="tab-content">
                    <div class="tab-pane active" id="menu1">
                        <div class="table-responsive">
                            <table class="table table-hover">
                                <thead>
                                    <tr>
                                        <th>Rate </th>
                                        <th>Condition</th>
                                        <th>Transit time</th>
                                        <th>Price</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>Economy</td>
                                        <td>$51.00–$499.00</td>
                                        <td>5 to 8 business days</td>
                                        <td>$50.00 USD</td>
                                        <td>
                                            <!-- <span><a href="#" class="text-primary" data-bs-toggle="tooltip" data-bs-placement="top" title="view"><i class="fa-regular fa-eye"></i></a></span> -->
                                            <span><a href="#" class="text-secondary" data-bs-toggle="tooltip" data-bs-placement="top" title="Edit"><i class="fa-regular fa-pen-to-square"></i></a></span><span><a href="#" class="text-danger" data-bs-toggle="tooltip" data-bs-placement="top" title="Delete"><i class="fa-regular fa-trash-can"></i></a></span>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Economy</td>
                                        <td>$51.00–$499.00</td>
                                        <td>5 to 8 business days</td>
                                        <td>$50.00 USD</td>
                                        <td>
                                            <!-- <span><a href="#" class="text-primary" data-bs-toggle="tooltip" data-bs-placement="top" title="view"><i class="fa-regular fa-eye"></i></a></span> -->
                                            <span><a href="#" class="text-secondary" data-bs-toggle="tooltip" data-bs-placement="top" title="Edit"><i class="fa-regular fa-pen-to-square"></i></a></span><span><a href="#" class="text-danger" data-bs-toggle="tooltip" data-bs-placement="top" title="Delete"><i class="fa-regular fa-trash-can"></i></a></span>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Economy</td>
                                        <td>$51.00–$499.00</td>
                                        <td>5 to 8 business days</td>
                                        <td>$50.00 USD</td>
                                        <td>
                                            <!-- <span><a href="#" class="text-primary" data-bs-toggle="tooltip" data-bs-placement="top" title="view"><i class="fa-regular fa-eye"></i></a></span> -->
                                            <span><a href="#" class="text-secondary" data-bs-toggle="tooltip" data-bs-placement="top" title="Edit"><i class="fa-regular fa-pen-to-square"></i></a></span><span><a href="#" class="text-danger" data-bs-toggle="tooltip" data-bs-placement="top" title="Delete"><i class="fa-regular fa-trash-can"></i></a></span>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="menu2">
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- add payment Modal -->
<div class="modal" id="addpaymentModal">
    <div class="modal-dialog modal-dialog-centered modal-lg">
        <div class="modal-content">
            <!-- Modal body -->
            <div class="modal-body">
                <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                <h4 class="modal-title text-center">Add payment method</h4>
                <div class="d-flex flex-wrap mt-3 justify-content-center">
                    <button class="btn btn-secondary m-h-1 col-sm-5">Search by payment method</button>
                    <button class="btn btn-secondary m-h-1 col-sm-5">Search by provider</button>
                    <div class="col-md-10 mt-3">
                        <div class="searchBox">
                            <input type="text" name="" id="" class="form-control" placeholder="Search">
                            <button class="btn"><i class="fa-solid fa-magnifying-glass"></i></button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


<!-- manual payment Modal -->
<div class="modal" id="manualpaymentModal">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <!-- Modal body -->
            <div class="modal-body">
                <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                <h4 class="modal-title text-center">Set up manual payment method</h4>
                <div class="d-flex flex-wrap mt-3">
                    <div class="form-floating mb-3 col-sm-12">
                        <input type="text" class="form-control" id="floatCmethod" placeholder="">
                        <label for="floatCmethod">Custom payment method name</label>
                    </div>
                    <div class="form-floating mb-3 col-sm-12">
                        <textarea class="form-control" id="floatingAdetails" style="height:85px"></textarea>
                        <label for="floatingAdetails">Additional details</label>
                        <small>Displays to customers when they’re choosing a payment method.</small>
                    </div>
                    <div class="form-floating mb-3 col-sm-12">
                        <textarea class="form-control" id="floatingPayinstructions" style="height:85px"></textarea>
                        <label for="floatingPayinstructions">Payment instructions</label>
                        <small>Displays to customers after they place an order with this payment method.</small>
                    </div>
                    <div class="col-sm-12 text-center">
                        <input type="button" value="Cancel" class="btn btn-danger m-h-1">
                        <input type="button" value="Active" class="btn btn-success m-h-1">
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Expected delivery dates Modal -->
<div class="modal" id="dateModal">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <!-- Modal body -->
            <div class="modal-body">
                <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                <h4 class="modal-title mb-3">Expected delivery dates</h4>
                <p>Expected delivery dates are calculated by adding a shipping rate’s transit time to your order processing time.</p>
                <div class="form-check mt-3">
                    <input type="checkbox" class="form-check-input" id="check1" name="option20" value="something" checked>
                    <label class="form-check-label" for="check20">Show expected delivery dates at checkout</label>
                </div>
                <div class="mt-3">
                    <input type="button" value="Cancel" class="btn btn-danger m-h-1">
                    <input type="button" value="Save" class="btn btn-success m-h-1">
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Expected delivery dates Modal -->
<div class="modal" id="locationModal">
    <div class="modal-dialog modal-dialog-centered modal-lg">
        <div class="modal-content">
            <!-- Modal body -->
            <div class="modal-body">
                <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                <h4 class="modal-title mb-3">Location status</h4>
                <hr>
                <div class="box d-flex mt-3">
                    <span><i class="fa-solid fa-location-dot mr-10"></i></span>
                    <p style="flex-grow:1; margin:0"><strong>Chino</strong><br><small>12345 Mills Avenue, Unit 28, Chino California 91710, United States</small></p>
                </div>
                <div class="form-check mt-1">
                    <input type="checkbox" class="form-check-input" id="check21" name="option2" value="something">
                    <label class="form-check-label" for="check21">This location offers local delivery</label>
                </div>
                <div class="box2 p-30">
                    <h6 class="mb-2">Delivery area</h6>
                    <p>Define your delivery area with one of these methods</p>
                    <ul>
                        <li>
                            <div class="form-check col-12 mt-2">
                                <input type="radio" class="form-check-input" id="radio16" name="optradio" value="option1" checked>
                                <label class="form-check-label" for="radio16">Use ZIP codes
                                    Choose specific areas that you deliver to.</label>
                            </div>
                        </li>
                        <li>
                            <div class="form-check col-12 mt-2">
                                <input type="radio" class="form-check-input" id="radio17" name="optradio" value="option1" checked>
                                <label class="form-check-label" for="radio17">Set a delivery radius
                                    Set a distance around your location that you deliver to.</label>
                            </div>
                            <ul>
                                <li>
                                    <div class="form-check mt-3">
                                        <input type="checkbox" class="form-check-input" id="check1" name="option21" value="something" checked>
                                        <label class="form-check-label" for="check21">
                                            Include neighboring states or regions</label>
                                    </div>
                                </li>
                                <li>
                                    <div class="form-check form-check-inline">
                                        <input type="radio" class="form-check-input" id="radio17" name="optradio" value="option1" checked>
                                        <label class="form-check-label" for="radio17">Km</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input type="radio" class="form-check-input" id="radio18" name="optradio" value="option1" checked>
                                        <label class="form-check-label" for="radio18">mi</label>
                                    </div>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>

<?php
include 'common/footer.php';
?>