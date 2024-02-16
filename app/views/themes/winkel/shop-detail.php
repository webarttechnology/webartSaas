<?php include 'header.php';?>
	<!-- END nav -->

	<div class="hero-wrap hero-bread" style="background-image: url('<?= url('themes/'. $themeInfo->value)?>/images/bg_6.jpg');">
		<div class="container">
			<div class="row no-gutters slider-text align-items-center justify-content-center">
				<div class="col-md-9 ftco-animate text-center">
					<p class="breadcrumbs"><span class="mr-2"><a href="index.html">Home</a></span> <span class="mr-2"><a
								href="index.html">Product</a></span> <span>Product Single</span></p>
					<h1 class="mb-0 bread">Product Single</h1>
				</div>
			</div>
		</div>
	</div>

	<section class="ftco-section">
		<div class="container">
			<div class="row">
				<div class="col-lg-6 mb-5 ftco-animate">
					<a href="images/menu-2.jpg" class="image-popup"><img src="<?= url('themes/'. $themeInfo->value)?>/images/product-1.jpg" class="img-fluid"
							alt="webart Template"></a>
				</div>
				<div class="col-lg-6 product-details pl-md-5 ftco-animate">
					<h3>Young Woman Wearing Dress</h3>
					<div class="rating d-flex">
						<p class="text-left mr-4">
							<a href="#" class="mr-2">5.0</a>
							<a href="#"><span class="ion-ios-star-outline"></span></a>
							<a href="#"><span class="ion-ios-star-outline"></span></a>
							<a href="#"><span class="ion-ios-star-outline"></span></a>
							<a href="#"><span class="ion-ios-star-outline"></span></a>
							<a href="#"><span class="ion-ios-star-outline"></span></a>
						</p>
						<p class="text-left mr-4">
							<a href="#" class="mr-2" style="color: #000;">100 <span
									style="color: #bbb;">Rating</span></a>
						</p>
						<p class="text-left">
							<a href="#" class="mr-2" style="color: #000;">500 <span style="color: #bbb;">Sold</span></a>
						</p>
					</div>
					<p class="price"><span>$120.00</span></p>
					<p>A small river named Duden flows by their place and supplies it with the necessary regelialia. It
						is a paradisematic country, in which roasted parts of sentences fly into your mouth.</p>
					<p>On her way she met a copy. The copy warned the Little Blind Text, that where it came from it
						would have been rewritten a thousand times and everything that was left from its origin would be
						the word "and" and the Little Blind Text should turn around and return to its own, safe country.
						But nothing the copy said could convince her and so it didn’t take long until a few insidious
						Copy Writers ambushed her, made her drunk with Longe and Parole and dragged her into their
						agency, where they abused her for their.
					</p>
					<div class="row mt-4">
						<div class="col-md-6">
							<div class="form-group d-flex flex-column">
								<h6>Choose Size</h6>
								<div class="select-wrap">
									<div class="icon"><span class="ion-ios-arrow-down"></span></div>
									<select name="" id="" class="form-control">
										<option value="">Small</option>
										<option value="">Medium</option>
										<option value="">Large</option>
										<option value="">Extra Large</option>
									</select>
								</div>
							</div>
						</div>
						<div class="col-md-6">
							<div class="form-group d-flex flex-column box">
								<h6>Choose Color</h6>
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
						</div>
						<div class="col-12 mb-3">
							<span class="icon-layers"></span> <strong class="text-dark">Categories: </strong>Men's
							Jacket - Denim
						</div>
						<div class="w-100"></div>
						<div class="input-group col-md-6 d-flex mb-3">
							<span class="input-group-btn mr-2">
								<button type="button" class="quantity-left-minus btn" data-type="minus" data-field="">
									<i class="ion-ios-remove"></i>
								</button>
							</span>
							<input type="text" id="quantity" name="quantity" class="form-control input-number" value="1"
								min="1" max="100">
							<span class="input-group-btn ml-2">
								<button type="button" class="quantity-right-plus btn" data-type="plus" data-field="">
									<i class="ion-ios-add"></i>
								</button>
							</span>
						</div>
						<div class="w-100"></div>
						<div class="col-md-12">
							<p style="color: #000;">80 piece available</p>
						</div>
					</div>
					<p><a href="cart.html" class="btn btn-black py-3 px-5">Add to Cart</a></p>
				</div>
				<div class="col-12 ftco-animate">
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
							<h5 class="mt-2">Additional information</h5>
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
							<h4 class="mt-2">Reviews
							</h4>
							<p>There are no reviews yet.<br><br>

								Be the first to review “Young Woman Wearing Dress”<br>
								Your email address will not be published. Required fields are marked *</p>
							<div class="stars">
								<strong class="text-dark">Your rating : </strong>
								<i class="fa-solid fa-star"></i>
								<i class="fa-solid fa-star"></i>
								<i class="fa-solid fa-star"></i>
								<i class="fa-solid fa-star"></i>
								<i class="fa-solid fa-star"></i>
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
									<input type="submit" value="Submit" class="btn btn-primary py-3 px-5 float-right">
								</div>
							</div>
						</div>
					</div>
				</div>

			</div>
		</div>
	</section>

	<section class="ftco-section bg-light">
		<div class="container">
			<div class="row justify-content-center mb-3 pb-3">
				<div class="col-md-12 heading-section text-center ftco-animate">
					<h2 class="mb-4">Ralated Products</h2>
					<p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia</p>
				</div>
			</div>
		</div>
		<div class="container">
			<div class="row">
				<div class="col-sm col-md-6 col-lg ftco-animate">
					<div class="product">
						<a href="#" class="img-prod"><img class="img-fluid" src="<?= url('themes/'. $themeInfo->value)?>/images/product-1.jpg"
								alt="webart Template">
							<span class="status">30%</span>
							<div class="overlay"></div>
						</a>
						<div class="text py-3 px-3">
							<h3><a href="#">Floral Jackquard Pullover</a></h3>
							<div class="d-flex">
								<div class="pricing">
									<p class="price"><span class="mr-2 price-dc">$120.00</span><span
											class="price-sale">$80.00</span></p>
								</div>
								<div class="rating">
									<p class="text-right">
										<a href="#"><span class="ion-ios-star-outline"></span></a>
										<a href="#"><span class="ion-ios-star-outline"></span></a>
										<a href="#"><span class="ion-ios-star-outline"></span></a>
										<a href="#"><span class="ion-ios-star-outline"></span></a>
										<a href="#"><span class="ion-ios-star-outline"></span></a>
									</p>
								</div>
							</div>
							<p class="bottom-area d-flex px-3">
								<a href="#" class="add-to-cart text-center py-2 mr-1"><span>Add to cart <i
											class="ion-ios-add ml-1"></i></span></a>
								<a href="#" class="buy-now text-center py-2">Buy now<span><i
											class="ion-ios-cart ml-1"></i></span></a>
							</p>
						</div>
					</div>
				</div>
				<div class="col-sm col-md-6 col-lg ftco-animate">
					<div class="product">
						<a href="#" class="img-prod"><img class="img-fluid" src="<?= url('themes/'. $themeInfo->value)?>/images/product-2.jpg"
								alt="webart Template">
							<div class="overlay"></div>
						</a>
						<div class="text py-3 px-3">
							<h3><a href="#">Floral Jackquard Pullover</a></h3>
							<div class="d-flex">
								<div class="pricing">
									<p class="price"><span>$120.00</span></p>
								</div>
								<div class="rating">
									<p class="text-right">
										<a href="#"><span class="ion-ios-star-outline"></span></a>
										<a href="#"><span class="ion-ios-star-outline"></span></a>
										<a href="#"><span class="ion-ios-star-outline"></span></a>
										<a href="#"><span class="ion-ios-star-outline"></span></a>
										<a href="#"><span class="ion-ios-star-outline"></span></a>
									</p>
								</div>
							</div>
							<p class="bottom-area d-flex px-3">
								<a href="#" class="add-to-cart text-center py-2 mr-1"><span>Add to cart <i
											class="ion-ios-add ml-1"></i></span></a>
								<a href="#" class="buy-now text-center py-2">Buy now<span><i
											class="ion-ios-cart ml-1"></i></span></a>
							</p>
						</div>
					</div>
				</div>
				<div class="col-sm col-md-6 col-lg ftco-animate">
					<div class="product">
						<a href="#" class="img-prod"><img class="img-fluid" src="<?= url('themes/'. $themeInfo->value)?>/images/product-3.jpg"
								alt="webart Template">
							<div class="overlay"></div>
						</a>
						<div class="text py-3 px-3">
							<h3><a href="#">Floral Jackquard Pullover</a></h3>
							<div class="d-flex">
								<div class="pricing">
									<p class="price"><span>$120.00</span></p>
								</div>
								<div class="rating">
									<p class="text-right">
										<a href="#"><span class="ion-ios-star-outline"></span></a>
										<a href="#"><span class="ion-ios-star-outline"></span></a>
										<a href="#"><span class="ion-ios-star-outline"></span></a>
										<a href="#"><span class="ion-ios-star-outline"></span></a>
										<a href="#"><span class="ion-ios-star-outline"></span></a>
									</p>
								</div>
							</div>
							<p class="bottom-area d-flex px-3">
								<a href="#" class="add-to-cart text-center py-2 mr-1"><span>Add to cart <i
											class="ion-ios-add ml-1"></i></span></a>
								<a href="#" class="buy-now text-center py-2">Buy now<span><i
											class="ion-ios-cart ml-1"></i></span></a>
							</p>
						</div>
					</div>
				</div>
				<div class="col-sm col-md-6 col-lg ftco-animate">
					<div class="product">
						<a href="#" class="img-prod"><img class="img-fluid" src="<?= url('themes/'. $themeInfo->value)?>/images/product-4.jpg"
								alt="webart Template">
							<div class="overlay"></div>
						</a>
						<div class="text py-3 px-3">
							<h3><a href="#">Floral Jackquard Pullover</a></h3>
							<div class="d-flex">
								<div class="pricing">
									<p class="price"><span>$120.00</span></p>
								</div>
								<div class="rating">
									<p class="text-right">
										<a href="#"><span class="ion-ios-star-outline"></span></a>
										<a href="#"><span class="ion-ios-star-outline"></span></a>
										<a href="#"><span class="ion-ios-star-outline"></span></a>
										<a href="#"><span class="ion-ios-star-outline"></span></a>
										<a href="#"><span class="ion-ios-star-outline"></span></a>
									</p>
								</div>
							</div>
							<p class="bottom-area d-flex px-3">
								<a href="#" class="add-to-cart text-center py-2 mr-1"><span>Add to cart <i
											class="ion-ios-add ml-1"></i></span></a>
								<a href="#" class="buy-now text-center py-2">Buy now<span><i
											class="ion-ios-cart ml-1"></i></span></a>
							</p>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>

	<?php include 'footer.php';?>