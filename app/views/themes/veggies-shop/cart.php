<?php include 'header.php'; ?>

<!-- Start All Title Box -->
<div class="all-title-box">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <h2>Cart</h2>
                <ul class="breadcrumb">
                    <li class="breadcrumb-item"><a href="#">Shop</a></li>
                    <li class="breadcrumb-item active">Cart</li>
                </ul>
            </div>
        </div>
    </div>
</div>
<!-- End All Title Box -->

<!-- Start Cart  -->
<div class="cart-box-main">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="table-main table-responsive">
                    <table class="table">
                        <thead>
                            <tr>
                                <th>Images</th>
                                <th>Product Name</th>
                                <th>Price</th>
                                <th>Quantity</th>
                                <th>Total</th>
                                <th>Remove</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach ($cart['cartItems'] as $data) : ?>
                                <tr>
                                    <td class="thumbnail-img">
                                        <a href="<?= url('/shop-detail/' . strtolower(str_replace(' ', '-', $data->name)) . '/' . $data->prod_id) ?>">
                                            <img class="img-fluid" src="<?php echo $data->thumb_img ?? url('/admin/assets/media/svg/files/blank-image.svg') ?>" alt="" />
                                        </a>
                                    </td>
                                    <td class="name-pr">
                                        <a href="<?= url('/shop-detail/' . strtolower(str_replace(' ', '-', $data->name)) . '/' . $data->prod_id) ?>">
                                            <?php echo ucfirst($data->name) ?>
                                        </a>
                                    </td>
                                    <td class="price-pr">
                                        <p>$<?php echo number_format($data->base_price, 2) ?></p>
                                    </td>
                                    <td class="quantity-box">
                                        <input type="number" name="quantity" size="4" value="<?php echo $data->quantity ?>" min="1" step="1" data-id="<?php echo $data->prod_id ?>" data-price="<?php echo $data->base_price ?>" class="c-input-text qty text">
                                    </td>
                                    <td class="total-pr">
                                        <p class="subtotal">$ <?php echo number_format($data->quantity * $data->base_price, 2) ?></p>
                                    </td>
                                    <td class="remove-pr">
                                        <a href="#" class="remove_cart" data-id="<?php echo $data->prod_id ?>" onclick="return confirm('Are you sure you want to remove this product?');">
                                            <i class="fas fa-times"></i>
                                        </a>
                                    </td>
                                </tr>
                            <?php endforeach ?>
                            <!-- <tr>
                                <td class="thumbnail-img">
                                    <a href="#">
                                        <img class="img-fluid" src="<?= url('themes/' . $themeInfo->value) ?>/images/img-pro-02.jpg" alt="" />
                                    </a>
                                </td>
                                <td class="name-pr">
                                    <a href="#">
                                        Lorem ipsum dolor sit amet
                                    </a>
                                </td>
                                <td class="price-pr">
                                    <p>$ 60.0</p>
                                </td>
                                <td class="quantity-box"><input type="number" size="4" value="1" min="0" step="1" class="c-input-text qty text"></td>
                                <td class="total-pr">
                                    <p>$ 80.0</p>
                                </td>
                                <td class="remove-pr">
                                    <a href="#">
                                        <i class="fas fa-times"></i>
                                    </a>
                                </td>
                            </tr>
                            <tr>
                                <td class="thumbnail-img">
                                    <a href="#">
                                        <img class="img-fluid" src="<?= url('themes/' . $themeInfo->value) ?>/images/img-pro-03.jpg" alt="" />
                                    </a>
                                </td>
                                <td class="name-pr">
                                    <a href="#">
                                        Lorem ipsum dolor sit amet
                                    </a>
                                </td>
                                <td class="price-pr">
                                    <p>$ 30.0</p>
                                </td>
                                <td class="quantity-box"><input type="number" size="4" value="1" min="0" step="1" class="c-input-text qty text"></td>
                                <td class="total-pr">
                                    <p>$ 80.0</p>
                                </td>
                                <td class="remove-pr">
                                    <a href="#">
                                        <i class="fas fa-times"></i>
                                    </a>
                                </td>
                            </tr> -->
                        </tbody>
                    </table>
                </div>
            </div>
        </div>

        <div class="row my-5">
            <div class="col-lg-6 col-sm-6">
                <div class="coupon-box">
                    <div class="input-group input-group-sm">
                        <input class="form-control" placeholder="Enter your coupon code" aria-label="Coupon code" type="text">
                        <div class="input-group-append">
                            <button class="btn btn-theme" type="button">Apply Coupon</button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 col-sm-6">
                <div class="update-box">
                    <!-- <input value="Update Cart" type="submit"> -->
                </div>
            </div>
        </div>

        <div class="row my-5">
            <div class="col-lg-8 col-sm-12"></div>
            <div class="col-lg-4 col-sm-12">
                <div class="order-box">
                    <h3>Order summary</h3>
                    <div class="d-flex">
                        <h4>Sub Total</h4>
                        <div class="ml-auto font-weight-bold sub_total">$ <?php echo number_format($cart['grandTotal']) ?></div>
                    </div>
                    <div class="d-flex">
                        <h4>Discount</h4>
                        <div class="ml-auto font-weight-bold discount">$ 0</div>
                    </div>
                    <hr class="my-1">
                    <div class="d-flex">
                        <h4>Coupon Discount</h4>
                        <div class="ml-auto font-weight-bold coupon"> $ 0 </div>
                    </div>
                    <div class="d-flex">
                        <h4>Tax</h4>
                        <div class="ml-auto font-weight-bold tax"> $ 0 </div>
                    </div>
                    <div class="d-flex">
                        <h4>Shipping Cost</h4>
                        <div class="ml-auto font-weight-bold shipping_cost"> Free </div>
                    </div>
                    <hr>
                    <div class="d-flex gr-total">
                        <h5>Grand Total</h5>
                        <div class="ml-auto h5 grand_total"> $ <?php echo number_format($cart['grandTotal']) ?> </div>
                    </div>
                    <hr>
                </div>
            </div>
            <div class="col-12 d-flex shopping-box"><a href="/checkout" class="ml-auto btn hvr-hover">Checkout</a> </div>
        </div>

    </div>
</div>
<!-- End Cart -->

<!-- Start Instagram Feed  -->
<div class="instagram-box">
    <div class="main-instagram owl-carousel owl-theme">
        <div class="item">
            <div class="ins-inner-box">
                <img src="<?= url('themes/' . $themeInfo->value) ?>/images/instagram-img-01.jpg" alt="" />
                <div class="hov-in">
                    <a href="#"><i class="fab fa-instagram"></i></a>
                </div>
            </div>
        </div>
        <div class="item">
            <div class="ins-inner-box">
                <img src="<?= url('themes/' . $themeInfo->value) ?>/images/instagram-img-02.jpg" alt="" />
                <div class="hov-in">
                    <a href="#"><i class="fab fa-instagram"></i></a>
                </div>
            </div>
        </div>
        <div class="item">
            <div class="ins-inner-box">
                <img src="<?= url('themes/' . $themeInfo->value) ?>/images/instagram-img-03.jpg" alt="" />
                <div class="hov-in">
                    <a href="#"><i class="fab fa-instagram"></i></a>
                </div>
            </div>
        </div>
        <div class="item">
            <div class="ins-inner-box">
                <img src="<?= url('themes/' . $themeInfo->value) ?>/images/instagram-img-04.jpg" alt="" />
                <div class="hov-in">
                    <a href="#"><i class="fab fa-instagram"></i></a>
                </div>
            </div>
        </div>
        <div class="item">
            <div class="ins-inner-box">
                <img src="<?= url('themes/' . $themeInfo->value) ?>/images/instagram-img-05.jpg" alt="" />
                <div class="hov-in">
                    <a href="#"><i class="fab fa-instagram"></i></a>
                </div>
            </div>
        </div>
        <div class="item">
            <div class="ins-inner-box">
                <img src="<?= url('themes/' . $themeInfo->value) ?>/images/instagram-img-06.jpg" alt="" />
                <div class="hov-in">
                    <a href="#"><i class="fab fa-instagram"></i></a>
                </div>
            </div>
        </div>
        <div class="item">
            <div class="ins-inner-box">
                <img src="<?= url('themes/' . $themeInfo->value) ?>/images/instagram-img-07.jpg" alt="" />
                <div class="hov-in">
                    <a href="#"><i class="fab fa-instagram"></i></a>
                </div>
            </div>
        </div>
        <div class="item">
            <div class="ins-inner-box">
                <img src="<?= url('themes/' . $themeInfo->value) ?>/images/instagram-img-08.jpg" alt="" />
                <div class="hov-in">
                    <a href="#"><i class="fab fa-instagram"></i></a>
                </div>
            </div>
        </div>
        <div class="item">
            <div class="ins-inner-box">
                <img src="<?= url('themes/' . $themeInfo->value) ?>/images/instagram-img-09.jpg" alt="" />
                <div class="hov-in">
                    <a href="#"><i class="fab fa-instagram"></i></a>
                </div>
            </div>
        </div>
        <div class="item">
            <div class="ins-inner-box">
                <img src="<?= url('themes/' . $themeInfo->value) ?>/images/instagram-img-05.jpg" alt="" />
                <div class="hov-in">
                    <a href="#"><i class="fab fa-instagram"></i></a>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- End Instagram Feed  -->

<!-- Start Footer  -->
<?php include 'footer.php'; ?>