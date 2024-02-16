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
                <h4>Order:#PBC1805</h4>
            </div>
            <div class="col-sm-6">
                <ul class="d-flex flex-wrap justify-content-end btns_group">
                    <li><a href="#" class="btn btn-sm btn-light">Refund</a></li>
                    <li><a href="#" class="btn btn-sm btn-light">Edit</a></li>
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
                <div class="order_summery d-flex">
                    <span>October 7, 2020 at 9:08 pm</span>
                    <span>6 items</span>
                    <span>Total $5,882.00</span>
                    <span><small class="badge bg-success">Paid</small> <small class="badge bg-warning">Partially Fulfilled</small></span>
                </div>
                <div class="row">
                    <div class="col-md-8">
                        <div class="panel_body">
                            <h6>Items</h6>
                            <div class="table-responsive mt-2">
                                <table class="table table-hover">
                                    <thead>
                                        <tr>
                                            <th></th>
                                            <th>Items</th>
                                            <th>Price</th>
                                            <th>Quantity</th>
                                            <th class="text-end">Total price</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td style="width:60px"><img src="images/1.webp" alt="" class="img-thumbnail"></td>
                                            <td>
                                                <a href="#" class="text-primary">Helio V3 iPad Ringlight Photobooth</a>
                                                <span class="badge bg-secondary mt-1 mb-1">Black / 9.7 inch / No thanks</span><br>
                                                <small>SKU: ATA3116i</small>
                                            </td>
                                            <td>$849.00</td>
                                            <td>1</td>
                                            <td class="text-end">$849.00</td>
                                        </tr>
                                        <tr>
                                            <td style="width:60px"><img src="images/1.webp" alt="" class="img-thumbnail"></td>
                                            <td>
                                                <a href="#" class="text-primary">Helio V3 iPad Ringlight Photobooth</a>
                                                <span class="badge bg-secondary mt-1 mb-1">Black / 9.7 inch / No thanks</span><br>
                                                <small>SKU: ATA3116i</small>
                                            </td>
                                            <td>$849.00</td>
                                            <td>1</td>
                                            <td class="text-end">$849.00</td>
                                        </tr>
                                        <tr>
                                            <td style="width:60px"><img src="images/1.webp" alt="" class="img-thumbnail"></td>
                                            <td>
                                                <a href="#" class="text-primary">Helio V3 iPad Ringlight Photobooth</a>
                                                <span class="badge bg-secondary mt-1 mb-1">Black / 9.7 inch / No thanks</span><br>
                                                <small>SKU: ATA3116i</small>
                                            </td>
                                            <td>$849.00</td>
                                            <td>1</td>
                                            <td class="text-end">$849.00</td>
                                        </tr>
                                        <tr>
                                            <td colspan="3">
                                                Subtotal
                                            </td>
                                            <td colspan="2" class="text-end">$5,877.00</td>
                                        </tr>
                                        <tr>
                                            <td colspan="3">
                                                Store Credit
                                            </td>
                                            <td colspan="2" class="text-end">$-20.00</td>
                                        </tr>
                                        <tr>
                                            <td colspan="3">
                                                Shipping<br>
                                                <small>via FedEx International</small>
                                            </td>
                                            <td colspan="2" class="text-end">$25.00</td>
                                        </tr>
                                        <tr>
                                            <td colspan="4" class="text-dark"><strong>Total</strong></td>
                                            <td class="text-end text-dark"><strong>$5,882.00</strong></td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <div class="panel_body">
                            <h6>Transactions</h6>
                            <div class="table-responsive mt-2">
                                <table class="table table-hover">
                                    <tbody>
                                        <tr>
                                            <td>Payment<br><small>via PayPal</small></td>
                                            <td>October 7, 2020 </td>
                                            <td class="text-end">$2,000.00</td>
                                        </tr>
                                        <tr>
                                            <td>Payment<br><small>from account balance</small></td>
                                            <td>November 2, 2020 </td>
                                            <td class="text-end">$50.00</td>
                                        </tr>
                                        <tr>
                                            <td>Refund<br><small>to PayPal</small></td>
                                            <td>December 10, 2020 </td>
                                            <td class="text-danger text-end">$-325.00</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <div class="panel_body">
                            <h6>Balance</h6>
                            <div class="table-responsive mt-2">
                                <table class="table table-hover">
                                    <tbody>
                                        <tr>
                                            <td>Order Total<br>Return Total </td>
                                            <td class="text-end">$5,882.00 <br>$0.00</td>
                                        </tr>
                                        <tr>
                                            <td>Paid by customer<br>Refunded </td>
                                            <td class="text-end">$-80.00<br>$0.00</td>
                                        </tr>
                                        <tr>
                                            <td><strong>Balance (customer owes you)</strong></td>
                                            <td class="text-end"><strong>$5,802.00</strong></td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="row">
                            <div class="col-sm-6 col-md-12">
                                <div class="panel_body">
                                    <div class="d-flex flex-wrap justify-content-between">
                                        <h6>Customer</h6>
                                        <span><a href="#" class="text-secondary"><i class="fa-regular fa-pen-to-square"></i></a></span>
                                    </div>
                                    <div class="d-flex flex-wrap justify-content-between align-items-center mt-2">
                                        <span><img src="images/user.jpg" alt="" class="img-fluid users_order"></span>
                                        <div style="flex-grow:1"><strong>Jessica Moore</strong>
                                            <p>This is a first order</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-12">
                                <div class="panel_body">
                                    <div class="d-flex flex-wrap justify-content-between">
                                        <h6>Contact person</h6>
                                        <span><a href="#" class="text-secondary"><i class="fa-regular fa-pen-to-square"></i></a></span>
                                    </div>
                                    <div class="d-flex flex-wrap justify-content-between align-items-center">
                                        <div style="flex-grow:1">
                                            <ul class="lists">
                                                <li><i class="fa-regular fa-user"></i> Jessica Moore</li>
                                                <li><a href="mailto:info@gmail.com"><i class="fa-regular fa-envelope"></i> info@gmail.com</a></li>
                                                <li><a href="tel:+38 (094) 730-24-25"><i class="fa-solid fa-phone"></i> +38 (094) 730-24-25</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-12">
                                <div class="panel_body">
                                    <div class="d-flex flex-wrap justify-content-between">
                                        <h6>Shipping Address</h6>
                                        <span><a href="#" class="text-secondary"><i class="fa-regular fa-pen-to-square"></i></a></span>
                                    </div>
                                    <div class="d-flex flex-wrap justify-content-between align-items-center">
                                        <div style="flex-grow:1">
                                            <ul class="lists">
                                                <li><i class="fa-regular fa-user"></i> Jessica Moore</li>
                                                <li><i class="fa-solid fa-location-dot"></i> Random Federation<br>
                                                    115302, Moscow<br>
                                                    ul. Varshavskaya, 15-2-178</li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-12">
                                <div class="panel_body">
                                    <div class="d-flex flex-wrap justify-content-between">
                                        <h6>Billing Address</h6>
                                        <span><a href="#" class="text-secondary"><i class="fa-regular fa-pen-to-square"></i></a></span>
                                    </div>
                                    <div class="d-flex flex-wrap justify-content-between align-items-center">
                                        <div style="flex-grow:1">
                                            <ul class="lists">
                                                <li><i class="fa-regular fa-user"></i> Jessica Moore</li>
                                                <li><i class="fa-solid fa-location-dot"></i> Random Federation<br>
                                                    115302, Moscow<br>
                                                    ul. Varshavskaya, 15-2-178</li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-12">
                                <div class="panel_body">
                                    <div class="d-flex flex-wrap justify-content-between">
                                        <h6>Invoice</h6>
                                        <!-- <span><a href="#" class="text-secondary"><i class="fa-regular fa-pen-to-square"></i></a></span> -->
                                    </div>
                                    <div class="table-responsive">
                                        <table class="table table-border">
                                            <tr>
                                                <td>Invoice No :</td>
                                                <td><span class="badge bg-warning">#5355619</span></td>
                                            </tr>
                                            <tr>
                                                <td>Seller GST :</td>
                                                <td>12HY87072641Z0</td>
                                            </tr>
                                            <tr>
                                                <td>Purchase GST :</td>
                                                <td>22HG9838964Z1</td>
                                            </tr>
                                        </table>
                                    </div>
                                    <center><span><a href="#" class="btn btn-outline-primary"><i class="fa-regular fa-file-pdf"></i> Download PDF</a></span></center>
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


<?php
include 'common/footer.php';
?>