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
            <div class="col-md-7">
                <div class="panel_body chart_body">
                    <h6 class="text-center">Revenue</h6>
                    <canvas id="canvas" class="chartjs-render-monitor line_chart"></canvas>
                </div>
            </div>
            <div class="col-md-5">
                <div class="panel_body chart_body">
                    <h6 class="text-center">Customer Satisfaction</h6>
                    <canvas id="productChart" class="productChart"></canvas>
                </div>
            </div>
            <div class="col-sm-6 col-md-3">
                <div class="panel_body effect1">
                    <div class="d-flex dashBox flex-wrap">
                        <div class="col-sm-7">
                            <strong>TOTAL ORDERS</strong>
                            <h3>14253</h3>
                            <p><span style="color:var(--secondary-color2)">8.5%</span> New Sessions Today</p>
                            <span><a href="#" class="more"><i class="fa-solid fa-arrow-right"></i></a></span>
                        </div>
                        <div class="col-sm-5 text-end">
                            <h2><i class="fa-solid fa-cart-shopping"></i></h2>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-md-3">
                <div class="panel_body effect1">
                    <div class="d-flex dashBox flex-wrap">
                        <div class="col-sm-7">
                            <strong>NEW CUSTOMERS</strong>
                            <h3>532</h3>
                            <p><span style="color:var(--secondary-color2)">0%</span> Bounce Rate Weekly</p>
                            <span><a href="#" class="more"><i class="fa-solid fa-arrow-right"></i></a></span>
                        </div>
                        <div class="col-sm-5 text-end">
                            <h2><i class="fa-regular fa-user"></i></h2>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-md-3">
                <div class="panel_body effect1">
                    <div class="d-flex dashBox flex-wrap">
                        <div class="col-sm-7">
                            <strong>TOTAL PRODUCTS</strong>
                            <h3>332</h3>
                            <p><span style="color:var(--secondary-color2)">0%</span> Bounce Rate Weekly</p>
                            <span><a href="#" class="more"><i class="fa-solid fa-arrow-right"></i></a></span>
                        </div>
                        <div class="col-sm-5 text-end">
                            <h2><i class="fa-solid fa-box"></i></h2>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-md-3">
                <div class="panel_body bg-dark text-white effect1">
                    <div class="d-flex dashBox flex-wrap">
                        <div class="col-sm-7">
                            <strong>TOTAL REVENUE</strong>
                            <h3>$85000</h3>
                            <p><span style="color:var(--bs-info)">0%</span> Completions Weekly</p>
                            <span><a href="#" class="more"><i class="fa-solid fa-arrow-right"></i></a></span>
                        </div>
                        <div class="col-sm-5 text-end">
                            <h2><i class="fa-solid fa-dollar-sign"></i></h2>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-12">
                <div class="panel_body">
                    <h5>Most Populer Products</h5>
                    <p>New Products Last Week</p>
                    <div class="table-responsive mt-3">
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
                                    <td>Prosuct Name</td>
                                    <td><span class="badge bg-success">Active</span></td>
                                    <td>25 in stock</td>
                                    <td>7</td>
                                    <td>Electronics</td>
                                    <td>Photobooth City</td>
                                    <td><!-- <span><a href="#" class="text-primary" data-bs-toggle="tooltip" data-bs-placement="top" title="view"><i class="fa-regular fa-eye"></i></a></span> -->
                                        <span><a href="#" class="text-secondary" data-bs-toggle="tooltip" data-bs-placement="top" title="Edit"><i class="fa-regular fa-pen-to-square"></i></a></span><span><a href="#" class="text-danger" data-bs-toggle="tooltip" data-bs-placement="top" title="Delete"><i class="fa-regular fa-trash-can"></i></a></span>
                                    </td>
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
                                    <td>Prosuct Name</td>
                                    <td><span class="badge bg-success">Active</span></td>
                                    <td>25 in stock</td>
                                    <td>7</td>
                                    <td>Electronics</td>
                                    <td>Photobooth City</td>
                                    <td><!-- <span><a href="#" class="text-primary" data-bs-toggle="tooltip" data-bs-placement="top" title="view"><i class="fa-regular fa-eye"></i></a></span> -->
                                        <span><a href="#" class="text-secondary" data-bs-toggle="tooltip" data-bs-placement="top" title="Edit"><i class="fa-regular fa-pen-to-square"></i></a></span><span><a href="#" class="text-danger" data-bs-toggle="tooltip" data-bs-placement="top" title="Delete"><i class="fa-regular fa-trash-can"></i></a></span>
                                    </td>
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
                                    <td>Prosuct Name</td>
                                    <td><span class="badge bg-success">Active</span></td>
                                    <td>25 in stock</td>
                                    <td>7</td>
                                    <td>Electronics</td>
                                    <td>Photobooth City</td>
                                    <td><!-- <span><a href="#" class="text-primary" data-bs-toggle="tooltip" data-bs-placement="top" title="view"><i class="fa-regular fa-eye"></i></a></span> -->
                                        <span><a href="#" class="text-secondary" data-bs-toggle="tooltip" data-bs-placement="top" title="Edit"><i class="fa-regular fa-pen-to-square"></i></a></span><span><a href="#" class="text-danger" data-bs-toggle="tooltip" data-bs-placement="top" title="Delete"><i class="fa-regular fa-trash-can"></i></a></span>
                                    </td>
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
                                    <td>Prosuct Name</td>
                                    <td><span class="badge bg-success">Active</span></td>
                                    <td>25 in stock</td>
                                    <td>7</td>
                                    <td>Electronics</td>
                                    <td>Photobooth City</td>
                                    <td><!-- <span><a href="#" class="text-primary" data-bs-toggle="tooltip" data-bs-placement="top" title="view"><i class="fa-regular fa-eye"></i></a></span> -->
                                        <span><a href="#" class="text-secondary" data-bs-toggle="tooltip" data-bs-placement="top" title="Edit"><i class="fa-regular fa-pen-to-square"></i></a></span><span><a href="#" class="text-danger" data-bs-toggle="tooltip" data-bs-placement="top" title="Delete"><i class="fa-regular fa-trash-can"></i></a></span>
                                    </td>
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
                                    <td>Prosuct Name</td>
                                    <td><span class="badge bg-success">Active</span></td>
                                    <td>25 in stock</td>
                                    <td>7</td>
                                    <td>Electronics</td>
                                    <td>Photobooth City</td>
                                    <td><!-- <span><a href="#" class="text-primary" data-bs-toggle="tooltip" data-bs-placement="top" title="view"><i class="fa-regular fa-eye"></i></a></span> -->
                                        <span><a href="#" class="text-secondary" data-bs-toggle="tooltip" data-bs-placement="top" title="Edit"><i class="fa-regular fa-pen-to-square"></i></a></span><span><a href="#" class="text-danger" data-bs-toggle="tooltip" data-bs-placement="top" title="Delete"><i class="fa-regular fa-trash-can"></i></a></span>
                                    </td>
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
                                    <td>Prosuct Name</td>
                                    <td><span class="badge bg-success">Active</span></td>
                                    <td>25 in stock</td>
                                    <td>7</td>
                                    <td>Electronics</td>
                                    <td>Photobooth City</td>
                                    <td><!-- <span><a href="#" class="text-primary" data-bs-toggle="tooltip" data-bs-placement="top" title="view"><i class="fa-regular fa-eye"></i></a></span> -->
                                        <span><a href="#" class="text-secondary" data-bs-toggle="tooltip" data-bs-placement="top" title="Edit"><i class="fa-regular fa-pen-to-square"></i></a></span><span><a href="#" class="text-danger" data-bs-toggle="tooltip" data-bs-placement="top" title="Delete"><i class="fa-regular fa-trash-can"></i></a></span>
                                    </td>
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
                                    <td>Prosuct Name</td>
                                    <td><span class="badge bg-success">Active</span></td>
                                    <td>25 in stock</td>
                                    <td>7</td>
                                    <td>Electronics</td>
                                    <td>Photobooth City</td>
                                    <td><!-- <span><a href="#" class="text-primary" data-bs-toggle="tooltip" data-bs-placement="top" title="view"><i class="fa-regular fa-eye"></i></a></span> -->
                                        <span><a href="#" class="text-secondary" data-bs-toggle="tooltip" data-bs-placement="top" title="Edit"><i class="fa-regular fa-pen-to-square"></i></a></span><span><a href="#" class="text-danger" data-bs-toggle="tooltip" data-bs-placement="top" title="Delete"><i class="fa-regular fa-trash-can"></i></a></span>
                                    </td>
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
                                    <td>Prosuct Name</td>
                                    <td><span class="badge bg-success">Active</span></td>
                                    <td>25 in stock</td>
                                    <td>7</td>
                                    <td>Electronics</td>
                                    <td>Photobooth City</td>
                                    <td><!-- <span><a href="#" class="text-primary" data-bs-toggle="tooltip" data-bs-placement="top" title="view"><i class="fa-regular fa-eye"></i></a></span> -->
                                        <span><a href="#" class="text-secondary" data-bs-toggle="tooltip" data-bs-placement="top" title="Edit"><i class="fa-regular fa-pen-to-square"></i></a></span><span><a href="#" class="text-danger" data-bs-toggle="tooltip" data-bs-placement="top" title="Delete"><i class="fa-regular fa-trash-can"></i></a></span>
                                    </td>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <!-- page body part -->
        </div>
    </div>
</section>
<!-- content part end -->
<?php
include 'common/footer.php';
?>