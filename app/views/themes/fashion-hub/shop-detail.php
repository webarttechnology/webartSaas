<?php include("header.php") ?>
    <!-- Header Info Begin -->
    <div class="header-info">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-4 col-sm-6">
                    <div class="header-item">
                        <img src="<?= url('themes/'. $themeInfo->value)?>/img/icons/delivery.png" alt="">
                        <p>Free shipping on orders over $30 in USA</p>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6 text-left text-lg-center">
                    <div class="header-item">
                        <img src="<?= url('themes/'. $themeInfo->value)?>/img/icons/voucher.png" alt="">
                        <p>20% Student Discount</p>
                    </div>
                </div>
                <div class="col-md-4 col-sm-12 text-left text-xl-right">
                    <div class="header-item">
                    <img src="<?= url('themes/'. $themeInfo->value)?>/img/icons/sales.png" alt="">
                    <p>30% off on dresses. Use code: 30OFF</p>
                </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Header Info End -->
    <!-- Header End -->

    <!-- Page Add Section Begin -->
    <section class="page-add">
        <div class="container">
            <div class="row">
                <div class="col-lg-4">
                    <div class="page-breadcrumb">
                        <h2>Shirts<span>.</span></h2>
                        <a href="#">Home</a>
                        <a href="#">Dresses</a>
                        <a class="active" href="#">Night Dresses</a>
                    </div>
                </div>
                <div class="col-lg-8">
                    <img src="<?= url('themes/'. $themeInfo->value)?>/img/add.jpg" alt="">
                </div>
            </div>
        </div>
    </section>
    <!-- Page Add Section End -->

    <!-- Product Page Section Beign -->
    <section class="product-page">
        <div class="container">
            <div class="product-control">
                <a href="#">Previous</a>
                <a href="#">Next</a>
            </div>
            <div class="row">
                <div class="col-lg-6">
                    <div class="product-slider owl-carousel">
                        <div class="product-img">
                            <figure>
                                <img src="<?= url('themes/'. $themeInfo->value)?>/img/product/product-1.jpg" alt="">
                                <div class="p-status">new</div>
                            </figure>
                        </div>
                        <div class="product-img">
                            <figure>
                                <img src="<?= url('themes/'. $themeInfo->value)?>/img/product/product-1.jpg" alt="">
                                <div class="p-status">new</div>
                            </figure>
                        </div>
                    </div>
                    
                </div>
                <div class="col-lg-6">
                    <div class="product-content">
                        <h2>Dotted Blue Shirt</h2>
                        <div class="pc-meta">
                            <h5>$22.90</h5>
                            <div class="rating">
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                            </div>
                        </div>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut
                            labore et dolore magna aliqua. Quis ipsum suspendisse ultrices gravida. Risus commodo
                            viverra maecenas accumsan lacus vel facilisis.</p>
                        <ul class="tags">
                            <li><span>Category :</span> Men’s Wear</li>
                            <li><span>Tags :</span> man, shirt, dotted, elegant, cool</li>
                        </ul>
                        <div class="form-group d-flex flex-row box align-items-center">
                            <strong>Choose Color : </strong>
                            <ul>
                                <li>
                                    <div data-setting="radio">
                                        <input type="radio" value="theme-color-blue" class="btn-check"
                                            name="theme_color" id="theme-color-1"
                                            data-colors="{&quot;primary&quot;: &quot;#00C3F9&quot;, &quot;info&quot;: &quot;#573BFF&quot;}">
                                        <label class="btn btn-border d-block bg-transparent" for="theme-color-1"
                                            data-bs-toggle="tooltip" data-bs-placement="top"
                                            data-bs-original-title="Theme-1" aria-label="Theme-1">
                                            <svg class="customizer-btn" xmlns="http://www.w3.org/2000/svg"
                                                viewBox="0 0 24 24" width="26" height="26">
                                                <circle cx="12" cy="12" r="10" fill="#573BFF"></circle>
                                            </svg>
                                        </label>
                                    </div>
                                </li>
                                <li>
                                    <div data-setting="radio">
                                        <input type="radio" value="theme-color-gray" class="btn-check"
                                            name="theme_color" id="theme-color-2"
                                            data-colors="{&quot;primary&quot;: &quot;#91969E&quot;, &quot;info&quot;: &quot;#FD8D00&quot;}">
                                        <label class="btn btn-border d-block bg-transparent" for="theme-color-2"
                                            data-bs-toggle="tooltip" data-bs-placement="top"
                                            data-bs-original-title="Theme-2" aria-label="Theme-2">
                                            <svg class="customizer-btn" xmlns="http://www.w3.org/2000/svg"
                                                viewBox="0 0 24 24" width="26" height="26">
                                                <circle cx="12" cy="12" r="10" fill="#FD8D00"></circle>
                                            </svg>
                                        </label>
                                    </div>
                                </li>
                                <li>
                                    <div data-setting="radio">
                                        <input type="radio" value="theme-color-red" class="btn-check"
                                            name="theme_color" id="theme-color-3"
                                            data-colors="{&quot;primary&quot;: &quot;#DB5363&quot;, &quot;info&quot;: &quot;#366AF0&quot;}">
                                        <label class="btn btn-border d-block bg-transparent" for="theme-color-3"
                                            data-bs-toggle="tooltip" data-bs-placement="top"
                                            data-bs-original-title="Theme-3" aria-label="Theme-3">
                                            <svg class="customizer-btn" xmlns="http://www.w3.org/2000/svg"
                                                viewBox="0 0 24 24" width="26" height="26">
                                                <circle cx="12" cy="12" r="10" fill="#DB5363"></circle>
                                            </svg>
                                        </label>
                                    </div>
                                </li>
                            </ul>
                        </div>
                        <div class="product-quantity">
                            <div class="pro-qty">
                                <input type="text" value="1">
                            </div>
                        </div>
                        <a href="#" class="primary-btn pc-btn">Add to cart</a>
                        <p>80 piece available</p>
                    </div>
                </div>
                <div class="col-12 mt-5">
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
					<div class="tab-content product-content">
						<div class="tab-pane container active" id="home">
							<h4 class="">Description</h4>
							<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam sit amet nulla nec urna
								hendrerit interdum eu id ligula. Aenean eu scelerisque magna, sed facilisis ante. In
								felis sapien, scelerisque egestas facilisis ut, auctor a neque. Phasellus porttitor
								metus vitae nibh ultrices commodo. Sed bibendum, turpis ut hendrerit dapibus, risus
								massa ultrices dui, sit amet iaculis ligula elit non velit. Phasellus lobortis vel urna
								quis porttitor. Praesent turpis risus, mollis nec malesuada id, pharetra vitae sem. Duis
								sagittis vel tortor nec eleifend. Suspendisse at condimentum purus. Morbi elementum
								nulla at risus gravida placerat.<br><br>

								Maecenas et semper felis. Nulla et dui sed lectus maximus maximus. Vestibulum vel
								placerat magna. Cras ac mi at tortor iaculis imperdiet id quis diam. Integer lobortis,
								magna vel pharetra vulputate, odio nunc laoreet lorem, vel eleifend risus mi sed quam.
								Quisque bibendum ultrices hendrerit. Cras tortor ipsum, tincidunt in eleifend a, ornare
								non risus. Mauris faucibus turpis et lorem sagittis, id vulputate turpis porta.</p>
							<h5 class="mt-2 mb-3">Additional information</h5>
							<div class="table-responsive">
								<table class="table table-striped">
									<tbody>
										<tr>
											<td><strong>Colors</strong></td>
											<td>Red, Green, White, Black, Blue</td>
										</tr>
										<tr>
											<td><strong>Size</strong></td>
											<td>S, M, L, XL, XXL</td>
										</tr>
									</tbody>
								</table>
							</div>

						</div>
						<div class="tab-pane container fade" id="menu1">
							<h4 class="">Reviews
							</h4>
							<p>There are no reviews yet.<br>
								Be the first to review “Young Woman Wearing Dress”<br>
								Your email address will not be published. Required fields are marked *</p>
							<div class="stars">
								<strong class="text-dark">Your rating : </strong>
								<i class="fa fa-star"></i>
								<i class="fa fa-star"></i>
								<i class="fa fa-star"></i>
								<i class="fa fa-star"></i>
								<i class="fa fa-star"></i>
							</div>
							<div class="row contact-form">
								<div class="form-group col-sm-6 mt-2">
									<label for="">Name *</label>
									<input type="text" class="form-control" placeholder="">
								</div>
								<div class="form-group col-sm-6 mt-2">
									<label for="">Email *</label>
									<input type="email" class="form-control" placeholder="">
								</div>
								<div class="form-check col-sm-8 mb-3 pl-4">
									<label class="form-check-label">
										<input type="checkbox" class="form-check-input" value="">Save my name, email,
										and website in this browser for the next time I comment.
									</label>
								</div>
								<div class="col-sm-4 mb-3">
                                    <button type="submit" class="float-right">Submit</button>
								</div>
							</div>
						</div>
					</div>
				</div>
            </div>
        </div>
    </section>
    <!-- Product Page Section End -->

    <!-- Related Product Section Begin -->
    <section class="related-product spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <div class="section-title">
                        <h2>Related Products</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-3 col-sm-6">
                    <div class="single-product-item">
                        <figure>
                            <a href="#"><img src="<?= url('themes/'. $themeInfo->value)?>/img/products/img-2.jpg" alt=""></a>
                            <div class="p-status sale">sale</div>
                            <a href="#" class="primary-btn btn-sm pc-btn"><i class="fa fa-shopping-cart"></i> Add to cart</a>
                        </figure>
                        <div class="product-text">
                            <h6>Yellow Maxi Dress</h6>
                            <p>$25.90</p>
                            <div class="rating">
                                <p class="d-flex justify-content-center">
                                    <a href="#"><span class="fa fa-star-o"></span></a>
                                    <a href="#"><span class="fa fa-star-o"></span></a>
                                    <a href="#"><span class="fa fa-star-o"></span></a>
                                    <a href="#"><span class="fa fa-star-o"></span></a>
                                    <a href="#"><span class="fa fa-star-o"></span></a>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6">
                    <div class="single-product-item">
                        <figure>
                            <a href="#"><img src="<?= url('themes/'. $themeInfo->value)?>/img/products/img-2.jpg" alt=""></a>
                            <div class="p-status sale">sale</div>
                            <a href="#" class="primary-btn btn-sm pc-btn"><i class="fa fa-shopping-cart"></i> Add to cart</a>
                        </figure>
                        <div class="product-text">
                            <h6>Yellow Maxi Dress</h6>
                            <p>$25.90</p>
                            <div class="rating">
                                <p class="d-flex justify-content-center">
                                    <a href="#"><span class="fa fa-star-o"></span></a>
                                    <a href="#"><span class="fa fa-star-o"></span></a>
                                    <a href="#"><span class="fa fa-star-o"></span></a>
                                    <a href="#"><span class="fa fa-star-o"></span></a>
                                    <a href="#"><span class="fa fa-star-o"></span></a>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6">
                    <div class="single-product-item">
                        <figure>
                            <a href="#"><img src="<?= url('themes/'. $themeInfo->value)?>/img/products/img-2.jpg" alt=""></a>
                            <div class="p-status sale">sale</div>
                            <a href="#" class="primary-btn btn-sm pc-btn"><i class="fa fa-shopping-cart"></i> Add to cart</a>
                        </figure>
                        <div class="product-text">
                            <h6>Yellow Maxi Dress</h6>
                            <p>$25.90</p>
                            <div class="rating">
                                <p class="d-flex justify-content-center">
                                    <a href="#"><span class="fa fa-star-o"></span></a>
                                    <a href="#"><span class="fa fa-star-o"></span></a>
                                    <a href="#"><span class="fa fa-star-o"></span></a>
                                    <a href="#"><span class="fa fa-star-o"></span></a>
                                    <a href="#"><span class="fa fa-star-o"></span></a>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6">
                    <div class="single-product-item">
                        <figure>
                            <a href="#"><img src="<?= url('themes/'. $themeInfo->value)?>/img/products/img-2.jpg" alt=""></a>
                            <div class="p-status sale">sale</div>
                            <a href="#" class="primary-btn btn-sm pc-btn"><i class="fa fa-shopping-cart"></i> Add to cart</a>
                        </figure>
                        <div class="product-text">
                            <h6>Yellow Maxi Dress</h6>
                            <p>$25.90</p>
                            <div class="rating">
                                <p class="d-flex justify-content-center">
                                    <a href="#"><span class="fa fa-star-o"></span></a>
                                    <a href="#"><span class="fa fa-star-o"></span></a>
                                    <a href="#"><span class="fa fa-star-o"></span></a>
                                    <a href="#"><span class="fa fa-star-o"></span></a>
                                    <a href="#"><span class="fa fa-star-o"></span></a>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Related Product Section End -->

    <?php include("footer.php") ?>