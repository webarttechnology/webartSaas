<?php include 'header.php'; ?>

<!-- Start All Title Box -->
<div class="all-title-box">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <h2>Shop Detail</h2>
                <ul class="breadcrumb">
                    <li class="breadcrumb-item"><a href="#">Shop</a></li>
                    <li class="breadcrumb-item active">Shop Detail </li>
                </ul>
            </div>
        </div>
    </div>
</div>
<!-- End All Title Box -->

<!-- Start Shop Detail  -->
<div class="shop-detail-box-main">
    <div class="container">
        <div class="row">
            <div class="col-xl-5 col-lg-5 col-md-6">
                <div id="carousel-example-1" class="single-product-slider carousel slide" data-ride="carousel">
                    <div class="carousel-inner" role="listbox">
                        <?php foreach ($product_media as $index => $data) : ?>
                            <div class="carousel-item <?php echo $index === 0 ? 'active' : ''; ?>"> <img class="d-block w-100" src="<?php echo $data->media_path ?? url('/admin/assets/media/svg/files/blank-image.svg') ?>" alt="First slide"> </div>
                        <?php endforeach ?>
                       
                    </div>
                    <a class="carousel-control-prev" href="#carousel-example-1" role="button" data-slide="prev">
                        <i class="fa fa-angle-left" aria-hidden="true"></i>
                        <span class="sr-only">Previous</span>
                    </a>
                    <a class="carousel-control-next" href="#carousel-example-1" role="button" data-slide="next">
                        <i class="fa fa-angle-right" aria-hidden="true"></i>
                        <span class="sr-only">Next</span>
                    </a>
                    <ol class="carousel-indicators">
                        <?php foreach ($product_media as $index => $data) : ?>
                            <li data-target="#carousel-example-1" data-slide-to="<?php echo $index ?>" class="<?php echo $index === 0 ? 'active' : ''; ?>">
                                <img class="d-block w-100 img-fluid" src="<?php echo $data->media_path ?? url('/admin/assets/media/svg/files/blank-image.svg') ?>" alt="" />
                            </li>
                        <?php endforeach ?>
                    </ol>
                </div>
            </div>
            <div class="col-xl-7 col-lg-7 col-md-6">
                <div class="single-product-details">
                    <h2><?php echo $product->name ?></h2>
                    <!-- <h5>$<?php // echo number_format($product->base_price, 2) ?></h5> -->
                    <h5>$<?php echo $product->base_price?></h5>
                    <p class="available-stock"><span> Limited Stock: <?php echo $product->shelf_qty ?></span>
                    <p>
                    <h4>Short Description:</h4>
                    <p><?php echo $product->description ?> </p>
                    <p class="text-success mb-1"><strong> <?php echo $product->shelf_qty ?> in stock</strong></p>
                    <ul>
                        <li>
                            <div class="form-group quantity-box m-0" data-product-id="<?php echo $product->id ?>">
                                <label class="control-label">Quantity</label>
                                <input class="form-control" value="1" min="1" max="20" type="number">
                            </div>
                        </li>
                        <li>
                            <div class="price-box-bar">
                                <div class="cart-and-bay-btn mt-4">
                                    <a class="btn hvr-hover" data-fancybox-close="" href="#">Buy New</a>
                                    <a class="btn hvr-hover add_cart" data-fancybox-close="" href="#" data-product-id="<?php echo $product->id ?>">Add to cart</a>
                                    <a class="btn hvr-hover" href="#"><i class="fas fa-heart"></i> Add to wishlist</a>
                                    <a class="btn hvr-hover" href="#"><i class="fas fa-sync-alt"></i> Add to Compare</a>
                                </div>
                            </div>
                        </li>
                    </ul>
                    <hr>
                    <div class="add-to-btn">
                        <div class="share-bar">
                            <a class="btn hvr-hover" href="#"><i class="fab fa-facebook" aria-hidden="true"></i></a>
                            <a class="btn hvr-hover" href="#"><i class="fab fa-google-plus" aria-hidden="true"></i></a>
                            <a class="btn hvr-hover" href="#"><i class="fab fa-twitter" aria-hidden="true"></i></a>
                            <a class="btn hvr-hover" href="#"><i class="fab fa-pinterest-p" aria-hidden="true"></i></a>
                            <a class="btn hvr-hover" href="#"><i class="fab fa-whatsapp" aria-hidden="true"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="row my-5">
            <div class="col-12">
                <!-- Nav tabs -->
                <ul class="nav nav-tabs">
                    <li class="nav-item">
                        <a class="nav-link active" data-toggle="tab" href="#home">Product Secifications</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" data-toggle="tab" href="#menu1">Reviews</a>
                    </li>
                </ul>

                <!-- Tab panes -->
                <div class="tab-content">
                    <div class="tab-pane container active" id="home">
                        <h4 class="mt-2">Description</h4>
                        <p> <p><?php echo nl2br($product->description); ?></p></p>
                        <h5 class="mt-2">Additional information</h5>
                        <div class="table-responsive">
                            <table class="table table-striped">
                                <tbody>
                                    <tr>
                                        <td><strong>Colors</strong></td>
                                        <td><?php echo implode(' , ', array_map(fn($data) => $data->value, $product_color)); ?></td>
                                    </tr>
                                    <tr>
                                        <td><strong>Size</strong></td>
                                        <td><?php echo implode(' , ', array_map(fn($data) => $data->value, $product_size)); ?></td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>

                    </div>
                    <div class="tab-pane container fade" id="menu1">
                        <h4 class="mt-2">Reviews
                        </h4>
                        <p>There are no reviews yet.<br><br>

                            Be the first to review “Young Woman Wearing Dress”<br>
                            Your email address will not be published. Required fields are marked *</p>
                        <div class="stars">
                            <strong class="text-dark">Your rating : </strong>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                        </div>
                        <div class="row">
                            <div class="form-group col-sm-6 mt-2">
                                <label for="">Name *</label>
                                <input type="text" class="form-control" placeholder="">
                            </div>
                            <div class="form-group col-sm-6 mt-2">
                                <label for="">Email *</label>
                                <input type="email" class="form-control" placeholder="">
                            </div>
                            <div class="form-check col-sm-8 mb-3">
                                <label class="form-check-label">
                                    <input type="checkbox" class="form-check-input" value="">Save my name, email,
                                    and website in this browser for the next time I comment.
                                </label>
                            </div>
                            <div class="form-check col-sm-4 mb-3">
                                <div class="submit-button text-center">
                                    <button class="btn hvr-hover disabled" id="submit" type="submit" style="pointer-events: all; cursor: pointer;">Submit</button>
                                    <div id="msgSubmit" class="h3 text-center hidden"></div>
                                    <div class="clearfix"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- <div class="card card-outline-secondary my-4">
					<div class="card-header">
						<h2>Product Reviews</h2>
					</div>
					<div class="card-body">
						<div class="media mb-3">
							<div class="mr-2"> 
								<img class="rounded-circle border p-1" src="data:image/svg+xml;charset=UTF-8,%3Csvg%20width%3D%2264%22%20height%3D%2264%22%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%20viewBox%3D%220%200%2064%2064%22%20preserveAspectRatio%3D%22none%22%3E%3Cdefs%3E%3Cstyle%20type%3D%22text%2Fcss%22%3E%23holder_160c142c97c%20text%20%7B%20fill%3Argba(255%2C255%2C255%2C.75)%3Bfont-weight%3Anormal%3Bfont-family%3AHelvetica%2C%20monospace%3Bfont-size%3A10pt%20%7D%20%3C%2Fstyle%3E%3C%2Fdefs%3E%3Cg%20id%3D%22holder_160c142c97c%22%3E%3Crect%20width%3D%2264%22%20height%3D%2264%22%20fill%3D%22%23777%22%3E%3C%2Frect%3E%3Cg%3E%3Ctext%20x%3D%2213.5546875%22%20y%3D%2236.5%22%3E64x64%3C%2Ftext%3E%3C%2Fg%3E%3C%2Fg%3E%3C%2Fsvg%3E" alt="Generic placeholder image">
							</div>
							<div class="media-body">
								<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Omnis et enim aperiam inventore, similique necessitatibus neque non! Doloribus, modi sapiente laboriosam aperiam fugiat laborum. Sequi mollitia, necessitatibus quae sint natus.</p>
								<small class="text-muted">Posted by Anonymous on 3/1/18</small>
							</div>
						</div>
						<hr>
						<div class="media mb-3">
							<div class="mr-2"> 
								<img class="rounded-circle border p-1" src="data:image/svg+xml;charset=UTF-8,%3Csvg%20width%3D%2264%22%20height%3D%2264%22%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%20viewBox%3D%220%200%2064%2064%22%20preserveAspectRatio%3D%22none%22%3E%3Cdefs%3E%3Cstyle%20type%3D%22text%2Fcss%22%3E%23holder_160c142c97c%20text%20%7B%20fill%3Argba(255%2C255%2C255%2C.75)%3Bfont-weight%3Anormal%3Bfont-family%3AHelvetica%2C%20monospace%3Bfont-size%3A10pt%20%7D%20%3C%2Fstyle%3E%3C%2Fdefs%3E%3Cg%20id%3D%22holder_160c142c97c%22%3E%3Crect%20width%3D%2264%22%20height%3D%2264%22%20fill%3D%22%23777%22%3E%3C%2Frect%3E%3Cg%3E%3Ctext%20x%3D%2213.5546875%22%20y%3D%2236.5%22%3E64x64%3C%2Ftext%3E%3C%2Fg%3E%3C%2Fg%3E%3C%2Fsvg%3E" alt="Generic placeholder image">
							</div>
							<div class="media-body">
								<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Omnis et enim aperiam inventore, similique necessitatibus neque non! Doloribus, modi sapiente laboriosam aperiam fugiat laborum. Sequi mollitia, necessitatibus quae sint natus.</p>
								<small class="text-muted">Posted by Anonymous on 3/1/18</small>
							</div>
						</div>
						<hr>
						<div class="media mb-3">
							<div class="mr-2"> 
								<img class="rounded-circle border p-1" src="data:image/svg+xml;charset=UTF-8,%3Csvg%20width%3D%2264%22%20height%3D%2264%22%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%20viewBox%3D%220%200%2064%2064%22%20preserveAspectRatio%3D%22none%22%3E%3Cdefs%3E%3Cstyle%20type%3D%22text%2Fcss%22%3E%23holder_160c142c97c%20text%20%7B%20fill%3Argba(255%2C255%2C255%2C.75)%3Bfont-weight%3Anormal%3Bfont-family%3AHelvetica%2C%20monospace%3Bfont-size%3A10pt%20%7D%20%3C%2Fstyle%3E%3C%2Fdefs%3E%3Cg%20id%3D%22holder_160c142c97c%22%3E%3Crect%20width%3D%2264%22%20height%3D%2264%22%20fill%3D%22%23777%22%3E%3C%2Frect%3E%3Cg%3E%3Ctext%20x%3D%2213.5546875%22%20y%3D%2236.5%22%3E64x64%3C%2Ftext%3E%3C%2Fg%3E%3C%2Fg%3E%3C%2Fsvg%3E" alt="Generic placeholder image">
							</div>
							<div class="media-body">
								<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Omnis et enim aperiam inventore, similique necessitatibus neque non! Doloribus, modi sapiente laboriosam aperiam fugiat laborum. Sequi mollitia, necessitatibus quae sint natus.</p>
								<small class="text-muted">Posted by Anonymous on 3/1/18</small>
							</div>
						</div>
						<hr>
						<a href="#" class="btn hvr-hover">Leave a Review</a>
					</div>
				  </div> -->
        </div>

        <div class="row my-5">
            <div class="col-lg-12">
                <div class="title-all text-center">
                    <h1>Featured Products</h1>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed sit amet lacus enim.</p>
                </div>
                <div class="featured-products-box owl-carousel owl-theme">
                <?php foreach ($featured_product as $proddata) :?>
                    <div class="item">
                        <div class="products-single fix">
                            <div class="box-img-hover">
                                <img src="<?php echo $proddata->thumb_img ?? url('/admin/assets/media/svg/files/blank-image.svg') ?>" class="img-fluid" alt="Image">
                                <div class="mask-icon">
                                    <ul>
                                        <li><a href="#" data-toggle="tooltip" data-placement="right" title="View"><i class="fas fa-eye"></i></a></li>
                                        <li><a href="#" data-toggle="tooltip" data-placement="right" title="Compare"><i class="fas fa-sync-alt"></i></a></li>
                                        <li><a href="#" data-toggle="tooltip" data-placement="right" title="Add to Wishlist"><i class="far fa-heart"></i></a></li>
                                    </ul>
                                    <a class="cart" href="#">Add to Cart</a>
                                </div>
                            </div>
                            <div class="why-text">
                                <h4><?php echo ucfirst($proddata->name) ?></h4>
                                <!-- <h5> $<?php //echo number_format($proddata->base_price, 2) ?></h5> -->
                                <h5> $<?php echo $proddata->base_price ?></h5>
                            </div>
                        </div>
                    </div>
                <?php endforeach ?>
                    <!-- <div class="item">
                        <div class="products-single fix">
                            <div class="box-img-hover">
                                <img src="<?= url('themes/' . $themeInfo->value) ?>/images/img-pro-02.jpg" class="img-fluid" alt="Image">
                                <div class="mask-icon">
                                    <ul>
                                        <li><a href="#" data-toggle="tooltip" data-placement="right" title="View"><i class="fas fa-eye"></i></a></li>
                                        <li><a href="#" data-toggle="tooltip" data-placement="right" title="Compare"><i class="fas fa-sync-alt"></i></a></li>
                                        <li><a href="#" data-toggle="tooltip" data-placement="right" title="Add to Wishlist"><i class="far fa-heart"></i></a></li>
                                    </ul>
                                    <a class="cart" href="#">Add to Cart</a>
                                </div>
                            </div>
                            <div class="why-text">
                                <h4>Lorem ipsum dolor sit amet</h4>
                                <h5> $9.79</h5>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="products-single fix">
                            <div class="box-img-hover">
                                <img src="<?= url('themes/' . $themeInfo->value) ?>/images/img-pro-03.jpg" class="img-fluid" alt="Image">
                                <div class="mask-icon">
                                    <ul>
                                        <li><a href="#" data-toggle="tooltip" data-placement="right" title="View"><i class="fas fa-eye"></i></a></li>
                                        <li><a href="#" data-toggle="tooltip" data-placement="right" title="Compare"><i class="fas fa-sync-alt"></i></a></li>
                                        <li><a href="#" data-toggle="tooltip" data-placement="right" title="Add to Wishlist"><i class="far fa-heart"></i></a></li>
                                    </ul>
                                    <a class="cart" href="#">Add to Cart</a>
                                </div>
                            </div>
                            <div class="why-text">
                                <h4>Lorem ipsum dolor sit amet</h4>
                                <h5> $9.79</h5>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="products-single fix">
                            <div class="box-img-hover">
                                <img src="<?= url('themes/' . $themeInfo->value) ?>/images/img-pro-04.jpg" class="img-fluid" alt="Image">
                                <div class="mask-icon">
                                    <ul>
                                        <li><a href="#" data-toggle="tooltip" data-placement="right" title="View"><i class="fas fa-eye"></i></a></li>
                                        <li><a href="#" data-toggle="tooltip" data-placement="right" title="Compare"><i class="fas fa-sync-alt"></i></a></li>
                                        <li><a href="#" data-toggle="tooltip" data-placement="right" title="Add to Wishlist"><i class="far fa-heart"></i></a></li>
                                    </ul>
                                    <a class="cart" href="#">Add to Cart</a>
                                </div>
                            </div>
                            <div class="why-text">
                                <h4>Lorem ipsum dolor sit amet</h4>
                                <h5> $9.79</h5>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="products-single fix">
                            <div class="box-img-hover">
                                <img src="<?= url('themes/' . $themeInfo->value) ?>/images/img-pro-01.jpg" class="img-fluid" alt="Image">
                                <div class="mask-icon">
                                    <ul>
                                        <li><a href="#" data-toggle="tooltip" data-placement="right" title="View"><i class="fas fa-eye"></i></a></li>
                                        <li><a href="#" data-toggle="tooltip" data-placement="right" title="Compare"><i class="fas fa-sync-alt"></i></a></li>
                                        <li><a href="#" data-toggle="tooltip" data-placement="right" title="Add to Wishlist"><i class="far fa-heart"></i></a></li>
                                    </ul>
                                    <a class="cart" href="#">Add to Cart</a>
                                </div>
                            </div>
                            <div class="why-text">
                                <h4>Lorem ipsum dolor sit amet</h4>
                                <h5> $9.79</h5>
                            </div>
                        </div>
                    </div> -->
                    <!-- <div class="item">
                        <div class="products-single fix">
                            <div class="box-img-hover">
                                <img src="<?= url('themes/' . $themeInfo->value) ?>/images/img-pro-02.jpg" class="img-fluid" alt="Image">
                                <div class="mask-icon">
                                    <ul>
                                        <li><a href="#" data-toggle="tooltip" data-placement="right" title="View"><i class="fas fa-eye"></i></a></li>
                                        <li><a href="#" data-toggle="tooltip" data-placement="right" title="Compare"><i class="fas fa-sync-alt"></i></a></li>
                                        <li><a href="#" data-toggle="tooltip" data-placement="right" title="Add to Wishlist"><i class="far fa-heart"></i></a></li>
                                    </ul>
                                    <a class="cart" href="#">Add to Cart</a>
                                </div>
                            </div>
                            <div class="why-text">
                                <h4>Lorem ipsum dolor sit amet</h4>
                                <h5> $9.79</h5>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="products-single fix">
                            <div class="box-img-hover">
                                <img src="<?= url('themes/' . $themeInfo->value) ?>/images/img-pro-03.jpg" class="img-fluid" alt="Image">
                                <div class="mask-icon">
                                    <ul>
                                        <li><a href="#" data-toggle="tooltip" data-placement="right" title="View"><i class="fas fa-eye"></i></a></li>
                                        <li><a href="#" data-toggle="tooltip" data-placement="right" title="Compare"><i class="fas fa-sync-alt"></i></a></li>
                                        <li><a href="#" data-toggle="tooltip" data-placement="right" title="Add to Wishlist"><i class="far fa-heart"></i></a></li>
                                    </ul>
                                    <a class="cart" href="#">Add to Cart</a>
                                </div>
                            </div>
                            <div class="why-text">
                                <h4>Lorem ipsum dolor sit amet</h4>
                                <h5> $9.79</h5>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="products-single fix">
                            <div class="box-img-hover">
                                <img src="<?= url('themes/' . $themeInfo->value) ?>/images/img-pro-04.jpg" class="img-fluid" alt="Image">
                                <div class="mask-icon">
                                    <ul>
                                        <li><a href="#" data-toggle="tooltip" data-placement="right" title="View"><i class="fas fa-eye"></i></a></li>
                                        <li><a href="#" data-toggle="tooltip" data-placement="right" title="Compare"><i class="fas fa-sync-alt"></i></a></li>
                                        <li><a href="#" data-toggle="tooltip" data-placement="right" title="Add to Wishlist"><i class="far fa-heart"></i></a></li>
                                    </ul>
                                    <a class="cart" href="#">Add to Cart</a>
                                </div>
                            </div>
                            <div class="why-text">
                                <h4>Lorem ipsum dolor sit amet</h4>
                                <h5> $9.79</h5>
                            </div>
                        </div>
                    </div> -->
                </div>
            </div>
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