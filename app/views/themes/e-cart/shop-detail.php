<?php include("header.php") ?>

        <!-- <<<<<<<<<<<<<<<<<<<< Breadcumb Area Start <<<<<<<<<<<<<<<<<<<< -->
        <div class="breadcumb_area">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <ol class="breadcrumb d-flex align-items-center">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item"><a href="#">Dresses</a></li>
                            <li class="breadcrumb-item active">Long Dress</li>
                        </ol>
                        <!-- btn -->
                        <a href="#" class="backToHome d-block"><i class="fa fa-angle-double-left"></i> Back to Category</a>
                    </div>
                </div>
            </div>
        </div>
        <!-- <<<<<<<<<<<<<<<<<<<< Breadcumb Area End <<<<<<<<<<<<<<<<<<<< -->

        <!-- <<<<<<<<<<<<<<<<<<<< Single Product Details Area Start >>>>>>>>>>>>>>>>>>>>>>>>> -->
        <section class="single_product_details_area section_padding_0_100">
            <div class="container">
                <div class="row">

                    <div class="col-12 col-md-6">
                        <div class="single_product_thumb">
                            <div id="product_details_slider" class="carousel slide" data-ride="carousel">

                                <ol class="carousel-indicators">
                                    <li class="active" data-target="#product_details_slider" data-slide-to="0" style="background-image: url(img/product-img/product-9.jpg);">
                                    </li>
                                    <li data-target="#product_details_slider" data-slide-to="1" style="background-image: url(img/product-img/product-2.jpg);">
                                    </li>
                                    <li data-target="#product_details_slider" data-slide-to="2" style="background-image: url(img/product-img/product-3.jpg);">
                                    </li>
                                    <li data-target="#product_details_slider" data-slide-to="3" style="background-image: url(img/product-img/product-4.jpg);">
                                    </li>
                                </ol>

                                <div class="carousel-inner">
                                    <div class="carousel-item active">
                                        <a class="gallery_img" href="<?= url('themes/'. $themeInfo->value)?>/img/product-img/product-9.jpg">
                                        <img class="d-block w-100" src="<?= url('themes/'. $themeInfo->value)?>/img/product-img/product-9.jpg" alt="First slide">
                                    </a>
                                    </div>
                                    <div class="carousel-item">
                                        <a class="gallery_img" href="<?= url('themes/'. $themeInfo->value)?>/img/product-img/product-2.jpg">
                                        <img class="d-block w-100" src="<?= url('themes/'. $themeInfo->value)?>/img/product-img/product-2.jpg" alt="Second slide">
                                    </a>
                                    </div>
                                    <div class="carousel-item">
                                        <a class="gallery_img" href="<?= url('themes/'. $themeInfo->value)?>/img/product-img/product-3.jpg">
                                        <img class="d-block w-100" src="<?= url('themes/'. $themeInfo->value)?>/img/product-img/product-3.jpg" alt="Third slide">
                                    </a>
                                    </div>
                                    <div class="carousel-item">
                                        <a class="gallery_img" href="<?= url('themes/'. $themeInfo->value)?>/img/product-img/product-4.jpg">
                                        <img class="d-block w-100" src="<?= url('themes/'. $themeInfo->value)?>/img/product-img/product-4.jpg" alt="Fourth slide">
                                    </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-12 col-md-6">
                        <div class="single_product_desc">

                            <h4 class="title"><a href="#">Long Yellow Dress</a></h4>

                            <h4 class="price">$ 39.99</h4>

                            <p class="available">Available: <span class="text-muted">In Stock</span></p>

                            <div class="single_product_ratings mb-15">
                                <i class="fa fa-star" aria-hidden="true"></i>
                                <i class="fa fa-star" aria-hidden="true"></i>
                                <i class="fa fa-star" aria-hidden="true"></i>
                                <i class="fa fa-star" aria-hidden="true"></i>
                                <i class="fa fa-star-o" aria-hidden="true"></i>
                            </div>

                            <div class="widget size mb-50">
                                <h6 class="widget-title">Size</h6>
                                <div class="widget-desc">
                                    <ul>
                                        <li><a href="#">32</a></li>
                                        <li><a href="#">34</a></li>
                                        <li><a href="#">36</a></li>
                                        <li><a href="#">38</a></li>
                                        <li><a href="#">40</a></li>
                                        <li><a href="#">42</a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="form-group d-flex flex-row box align-items-center">
                            <strong>Choose Color : </strong>
                            <ul>
                                <li>
                                    <div data-setting="radio">
                                        <input type="radio" value="theme-color-blue" class="btn-check" name="theme_color" id="theme-color-1" data-colors="{&quot;primary&quot;: &quot;#00C3F9&quot;, &quot;info&quot;: &quot;#573BFF&quot;}">
                                        <label class="btn btn-border d-block bg-transparent" for="theme-color-1" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-original-title="Theme-1" aria-label="Theme-1">
                                            <svg class="customizer-btn" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="26" height="26">
                                                <circle cx="12" cy="12" r="10" fill="#573BFF"></circle>
                                            </svg>
                                        </label>
                                    </div>
                                </li>
                                <li>
                                    <div data-setting="radio">
                                        <input type="radio" value="theme-color-gray" class="btn-check" name="theme_color" id="theme-color-2" data-colors="{&quot;primary&quot;: &quot;#91969E&quot;, &quot;info&quot;: &quot;#FD8D00&quot;}">
                                        <label class="btn btn-border d-block bg-transparent" for="theme-color-2" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-original-title="Theme-2" aria-label="Theme-2">
                                            <svg class="customizer-btn" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="26" height="26">
                                                <circle cx="12" cy="12" r="10" fill="#FD8D00"></circle>
                                            </svg>
                                        </label>
                                    </div>
                                </li>
                                <li>
                                    <div data-setting="radio">
                                        <input type="radio" value="theme-color-red" class="btn-check" name="theme_color" id="theme-color-3" data-colors="{&quot;primary&quot;: &quot;#DB5363&quot;, &quot;info&quot;: &quot;#366AF0&quot;}">
                                        <label class="btn btn-border d-block bg-transparent" for="theme-color-3" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-original-title="Theme-3" aria-label="Theme-3">
                                            <svg class="customizer-btn" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="26" height="26">
                                                <circle cx="12" cy="12" r="10" fill="#DB5363"></circle>
                                            </svg>
                                        </label>
                                    </div>
                                </li>
                            </ul>
                        </div>
                            <!-- Add to Cart Form -->
                            <form class="cart clearfix mb-50 d-flex" method="post">
                                <div class="quantity">
                                    <span class="qty-minus" onclick="var effect = document.getElementById('qty'); var qty = effect.value; if( !isNaN( qty ) &amp;&amp; qty &gt; 1 ) effect.value--;return false;"><i class="fa fa-minus" aria-hidden="true"></i></span>
                                    <input type="number" class="qty-text" id="qty" step="1" min="1" max="12" name="quantity" value="1">
                                    <span class="qty-plus" onclick="var effect = document.getElementById('qty'); var qty = effect.value; if( !isNaN( qty )) effect.value++;return false;"><i class="fa fa-plus" aria-hidden="true"></i></span>
                                </div>
                                <button type="submit" name="addtocart" value="5" class="btn cart-submit d-block">Add to cart</button>
                            </form>

                            <div id="accordion" role="tablist">
                                <div class="card">
                                    <div class="card-header" role="tab" id="headingOne">
                                        <h6 class="mb-0">
                                            <a data-toggle="collapse" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne">Information</a>
                                        </h6>
                                    </div>

                                    <div id="collapseOne" class="collapse show" role="tabpanel" aria-labelledby="headingOne" data-parent="#accordion">
                                        <div class="card-body">
                                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin pharetra tempor so dales. Phasellus sagittis auctor gravida. Integ er bibendum sodales arcu id te mpus. Ut consectetur lacus.</p>
                                            <p>Approx length 66cm/26" (Based on a UK size 8 sample) Mixed fibres</p>
                                            <p>The Model wears a UK size 8/ EU size 36/ US size 4 and her height is 5'8"</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="card">
                                    <div class="card-header" role="tab" id="headingTwo">
                                        <h6 class="mb-0">
                                            <a class="collapsed" data-toggle="collapse" href="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">Cart Details</a>
                                        </h6>
                                    </div>
                                    <div id="collapseTwo" class="collapse" role="tabpanel" aria-labelledby="headingTwo" data-parent="#accordion">
                                        <div class="card-body">
                                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Explicabo quis in veritatis officia inventore, tempore provident dignissimos nemo, nulla quaerat. Quibusdam non, eos, voluptatem reprehenderit hic nam! Laboriosam, sapiente! Praesentium.</p>
                                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Officia magnam laborum eaque.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="card">
                                    <div class="card-header" role="tab" id="headingThree">
                                        <h6 class="mb-0">
                                            <a class="collapsed" data-toggle="collapse" href="#collapseThree" aria-expanded="false" aria-controls="collapseThree">shipping &amp; Returns</a>
                                        </h6>
                                    </div>
                                    <div id="collapseThree" class="collapse" role="tabpanel" aria-labelledby="headingThree" data-parent="#accordion">
                                        <div class="card-body">
                                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Esse quo sint repudiandae suscipit ab soluta delectus voluptate, vero vitae, tempore maxime rerum iste dolorem mollitia perferendis distinctio. Quibusdam laboriosam rerum distinctio. Repudiandae fugit odit, sequi id!</p>
                                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Beatae qui maxime consequatur laudantium temporibus ad et. A optio inventore deleniti ipsa.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- <<<<<<<<<<<<<<<<<<<< Single Product Details Area End >>>>>>>>>>>>>>>>>>>>>>>>> -->

        <!-- ****** Quick View Modal Area Start ****** -->
        <div class="modal fade" id="quickview" tabindex="-1" role="dialog" aria-labelledby="quickview" aria-hidden="true">
            <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
                <div class="modal-content">
                    <button type="button" class="close btn" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
                    <div class="modal-body">
                        <div class="quickview_body">
                            <div class="container">
                                <div class="row">
                                    <div class="col-12 col-lg-5">
                                        <div class="quickview_pro_img">
                                            <img src="<?= url('themes/'. $themeInfo->value)?>/img/product-img/product-1.jpg" alt="">
                                        </div>
                                    </div>
                                    <div class="col-12 col-lg-7">
                                        <div class="quickview_pro_des">
                                            <h4 class="title">Boutique Silk Dress</h4>
                                            <div class="top_seller_product_rating mb-15">
                                                <i class="fa fa-star" aria-hidden="true"></i>
                                                <i class="fa fa-star" aria-hidden="true"></i>
                                                <i class="fa fa-star" aria-hidden="true"></i>
                                                <i class="fa fa-star" aria-hidden="true"></i>
                                                <i class="fa fa-star" aria-hidden="true"></i>
                                            </div>
                                            <h5 class="price">$120.99 <span>$130</span></h5>
                                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Mollitia expedita quibusdam aspernatur, sapiente consectetur accusantium perspiciatis praesentium eligendi, in fugiat?</p>
                                            <a href="#">View Full Product Details</a>
                                        </div>
                                        <!-- Add to Cart Form -->
                                        <form class="cart" method="post">
                                            <div class="quantity">
                                                <span class="qty-minus" onclick="var effect = document.getElementById('qty'); var qty = effect.value; if( !isNaN( qty ) &amp;&amp; qty &gt; 1 ) effect.value--;return false;"><i class="fa fa-minus" aria-hidden="true"></i></span>

                                                <input type="number" class="qty-text" id="qty2" step="1" min="1" max="12" name="quantity" value="1">

                                                <span class="qty-plus" onclick="var effect = document.getElementById('qty'); var qty = effect.value; if( !isNaN( qty )) effect.value++;return false;"><i class="fa fa-plus" aria-hidden="true"></i></span>
                                            </div>
                                            <button type="submit" name="addtocart" value="5" class="cart-submit">Add to cart</button>
                                            <!-- Wishlist -->
                                            <div class="modal_pro_wishlist">
                                                <a href="wishlist.html" target="_blank"><i class="ti-heart"></i></a>
                                            </div>
                                            <!-- Compare -->
                                            <div class="modal_pro_compare">
                                                <a href="compare.html" target="_blank"><i class="ti-stats-up"></i></a>
                                            </div>
                                        </form>

                                        <div class="share_wf mt-30">
                                            <p>Share With Friend</p>
                                            <div class="_icon">
                                                <a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                                                <a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a>
                                                <a href="#"><i class="fa fa-pinterest" aria-hidden="true"></i></a>
                                                <a href="#"><i class="fa fa-google-plus" aria-hidden="true"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- ****** Quick View Modal Area End ****** -->

        <div class="col-12 mt-1">
            <div class="container">
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
							<!-- <h5 class="mt-2 mb-3">Additional information</h5>
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
							</div> -->

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

        <section class="you_may_like_area clearfix">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="section_heading text-center">
                            <h2>related Products</h2>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12">
                        <div class="you_make_like_slider owl-carousel">

                            <!-- Single gallery Item -->
                            <div class="single_gallery_item">
                                <!-- Product Image -->
                                <div class="product-img">
                                    <img src="<?= url('themes/'. $themeInfo->value)?>/img/product-img/product-1.jpg" alt="">
                                    <div class="product-quicview">
                                        <a href="#" data-toggle="modal" data-target="#quickview"><i class="ti-plus"></i></a>
                                    </div>
                                </div>
                                <!-- Product Description -->
                                <div class="product-description">
                                    <h4 class="product-price">$39.90</h4>
                                    <p>Jeans midi cocktail dress</p>
                                    <!-- Add to Cart -->
                                    <a href="#" class="add-to-cart-btn">ADD TO CART</a>
                                </div>
                            </div>

                            <!-- Single gallery Item -->
                            <div class="single_gallery_item">
                                <!-- Product Image -->
                                <div class="product-img">
                                    <img src="<?= url('themes/'. $themeInfo->value)?>/img/product-img/product-2.jpg" alt="">
                                    <div class="product-quicview">
                                        <a href="#" data-toggle="modal" data-target="#quickview"><i class="ti-plus"></i></a>
                                    </div>
                                </div>
                                <!-- Product Description -->
                                <div class="product-description">
                                    <h4 class="product-price">$39.90</h4>
                                    <p>Jeans midi cocktail dress</p>
                                    <!-- Add to Cart -->
                                    <a href="#" class="add-to-cart-btn">ADD TO CART</a>
                                </div>
                            </div>

                            <!-- Single gallery Item -->
                            <div class="single_gallery_item">
                                <!-- Product Image -->
                                <div class="product-img">
                                    <img src="<?= url('themes/'. $themeInfo->value)?>/img/product-img/product-3.jpg" alt="">
                                    <div class="product-quicview">
                                        <a href="#" data-toggle="modal" data-target="#quickview"><i class="ti-plus"></i></a>
                                    </div>
                                </div>
                                <!-- Product Description -->
                                <div class="product-description">
                                    <h4 class="product-price">$39.90</h4>
                                    <p>Jeans midi cocktail dress</p>
                                    <!-- Add to Cart -->
                                    <a href="#" class="add-to-cart-btn">ADD TO CART</a>
                                </div>
                            </div>

                            <!-- Single gallery Item -->
                            <div class="single_gallery_item">
                                <!-- Product Image -->
                                <div class="product-img">
                                    <img src="<?= url('themes/'. $themeInfo->value)?>/img/product-img/product-4.jpg" alt="">
                                    <div class="product-quicview">
                                        <a href="#" data-toggle="modal" data-target="#quickview"><i class="ti-plus"></i></a>
                                    </div>
                                </div>
                                <!-- Product Description -->
                                <div class="product-description">
                                    <h4 class="product-price">$39.90</h4>
                                    <p>Jeans midi cocktail dress</p>
                                    <!-- Add to Cart -->
                                    <a href="cart.php" class="add-to-cart-btn">ADD TO CART</a>
                                </div>
                            </div>

                            <!-- Single gallery Item -->
                            <div class="single_gallery_item">
                                <!-- Product Image -->
                                <div class="product-img">
                                    <img src="<?= url('themes/'. $themeInfo->value)?>/img/product-img/product-5.jpg" alt="">
                                    <div class="product-quicview">
                                        <a href="#" data-toggle="modal" data-target="#quickview"><i class="ti-plus"></i></a>
                                    </div>
                                </div>
                                <!-- Product Description -->
                                <div class="product-description">
                                    <h4 class="product-price">$39.90</h4>
                                    <p>Jeans midi cocktail dress</p>
                                    <!-- Add to Cart -->
                                    <a href="cart.php" class="add-to-cart-btn">ADD TO CART</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <?php include("footer.php") ?>