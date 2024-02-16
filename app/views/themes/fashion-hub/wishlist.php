<?php include("header.php") ?>
    <section class="page-add">
        <div class="container">
            <div class="row">
                <div class="col-lg-4">
                    <div class="page-breadcrumb">
                        <h2>Wishlist<span>.</span></h2>
                        <a href="#">Home</a>
                        <a href="#">Pages</a>
                        <a class="active" href="#">Wishlist</a>
                    </div>
                </div>
                <div class="col-lg-8">
                    <img src="<?= url('themes/'. $themeInfo->value)?>/img/add.jpg" alt="">
                </div>
            </div>
        </div>
    </section>
    <div class="cart-page">
        <div class="container">
            <div class="cart-table">
                <table>
                    <thead>
                        <tr>
                            <th class="product-h">Product</th>
                            <th>Price</th>
                            <th class="quan">Quantity</th>
                            <th>Total</th>
                            <th></th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td class="product-col">
                                <img src="<?= url('themes/'. $themeInfo->value)?>/img/product/product-1.jpg" alt="">
                                <div class="p-title">
                                    <h5>Blue Dotted Shirt</h5>
                                </div>
                            </td>
                            <td class="price-col">$29</td>
                            <td class="quantity-col">
                                <div class="pro-qty">
                                    <input type="text" value="1">
                                </div>
                            </td>
                            <td class="total">$29</td>
                            <td><div class="site-btn update-btn wishlist-button">Add To Cart</div></td>
                        </tr>
                        <tr>
                            <td class="product-col">
                                <img src="<?= url('themes/'. $themeInfo->value)?>/img/product/product-1.jpg" alt="">
                                <div class="p-title">
                                    <h5>Blue Dotted Shirt</h5>
                                </div>
                            </td>
                            <td class="price-col">$29</td>
                            <td class="quantity-col">
                                <div class="pro-qty">
                                    <input type="text" value="1">
                                </div>
                            </td>
                            <td class="total">$29</td>
                            <td><div class="site-btn update-btn wishlist-button">Add To Cart</div></td>
                        </tr>
                        <tr>
                            <td class="product-col">
                                <img src="<?= url('themes/'. $themeInfo->value)?>/img/product/product-1.jpg" alt="">
                                <div class="p-title">
                                    <h5>Blue Dotted Shirt</h5>
                                </div>
                            </td>
                            <td class="price-col">$29</td>
                            <td class="quantity-col">
                                <div class="pro-qty">
                                    <input type="text" value="1">
                                </div>
                            </td>
                            <td class="total">$29</td>
                            <td><div class="site-btn update-btn wishlist-button">Add To Cart</div></td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>




    

    <?php include("footer.php") ?>