<?php include 'header.php'; ?>

<?php if(ThemeAction('Home', 'Banner')): ?>
  <?php if(ThemeAction('Home', 'Banner')->status == 'Active'): ?>
	<section id="home-section" class="hero relative">

	<?php if(authCheck()): ?>
		<div class="customizeSecBtn">
			<div class="dropdown">
				<button type="button" class="btn btn-dark dropdown-toggle" data-toggle="dropdown">
					<i class="fa-solid fa-ellipsis-vertical"></i>
				</button>
				<div class="dropdown-menu">
					<a class="dropdown-item theme-builder-model" href="javscript:void;" data-section="banner"><i class="fa-regular fa-pen-to-square"></i> Edit</a>
					<a class="dropdown-item theme-builder-remove" data-section="banner" href="#"><i class="fa-solid fa-trash-can"></i> Remove</a>
				</div>
			</div>
		</div>
	<?php endif ?>
			<div id="banner">
				<?php echo ThemeAction('Home', 'Banner')->value ?>
			</div>
	  </section>
	  <?php else: ?>
	<?php if(authCheck()): ?>
	  <section id="home-section" class="hero relative" style="height: 200px;">
		<div class="customizeSecBtn">
			<div class="dropdown">
				<button type="button" class="btn btn-dark dropdown-toggle" data-toggle="dropdown">
					<i class="fa-solid fa-ellipsis-vertical"></i>
				</button>
				<div class="dropdown-menu">
					<a class="dropdown-item theme-builder-model" href="javscript:void;" data-section="banner"><i class="fa-regular fa-pen-to-square"></i> Edit</a>
					<a class="dropdown-item theme-builder-remove" data-section="banner" href="#"><i class="fa fa-undo"></i> Back</a>
				</div>
			</div>
		</div>
		<div id="banner"></div>
	  </section>
	  <?php endif ?>
	  <?php endif ?>
<?php else: ?>
<section id="home-section" class="hero relative">
	<?php if(authCheck()): ?>
		<div class="customizeSecBtn">
			<div class="dropdown">
				<button type="button" class="btn btn-dark dropdown-toggle" data-toggle="dropdown">
					<i class="fa-solid fa-ellipsis-vertical"></i>
				</button>
				<div class="dropdown-menu">
					<a class="dropdown-item theme-builder-model" href="javscript:void;" data-section="banner"><i class="fa-regular fa-pen-to-square"></i> Edit</a>
					<a class="dropdown-item theme-builder-remove" data-section="banner" href="#"><i class="fa-solid fa-trash-can"></i> Remove</a>
				</div>
			</div>
		</div>
	<?php endif ?>
		<div id="banner">
		<div class="hero">
			<div class="home-slider js-fullheight owl-carousel">
				<div class="slider-item js-fullheight">
					<div class="overlay"></div>
					<div class="container-fluid p-0">
						<div class="row d-md-flex no-gutters slider-text js-fullheight  align-items-center justify-content-end" data-scrollax-parent="true">
							<div class="one-third order-md-last img js-fullheight" style="background-image:url(<?= url('themes/' . $themeInfo->value) ?>/images/bg_1.jpg);">
							</div>
							<div class="one-forth bannertext d-flex js-fullheight align-items-center ftco-animate" data-scrollax=" properties: { translateY: '70%' }">
								<div class="text">
									<span class="subheading">ECommerce Shop</span>
									<div class="horizontal">
										<h3 class="vr" style="background-image: url(<?= url('themes/' . $themeInfo->value) ?>/images/divider.jpg);">Stablished Since 2000</h3>
										<h1 class="mb-4 mt-3">Catch Your Own <br><span>Stylish &amp; Look</span></h1>
										<p>A small river named Duden flows by their place and supplies it with the necessary regelialia. It is a paradisematic country.</p>
										<p><a href="#" class="btn btn-primary px-5 py-3 mt-3">Discover Now</a></p>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="slider-item js-fullheight">
					<div class="overlay"></div>
					<div class="container-fluid p-0">
						<div class="row d-md-flex no-gutters slider-text js-fullheight align-items-center justify-content-end" data-scrollax-parent="true">
							<div class="one-third order-md-last img js-fullheight" style="background-image:url(<?= url('themes/' . $themeInfo->value) ?>/images/bg_2.jpg);">
							</div>
							<div class="one-forth bannertext d-flex js-fullheight align-items-center ftco-animate" data-scrollax=" properties: { translateY: '70%' }">
								<div class="text">
									<span class="subheading">ECommerce Shop</span>
									<div class="horizontal">
										<h3 class="vr" style="background-image: url(<?= url('themes/' . $themeInfo->value) ?>/images/divider.jpg);">Stablished Since 2000</h3>
										<h1 class="mb-4 mt-3">Catch Your Own <br><span>Stylish &amp; Look</span></h1>
										<p>A small river named Duden flows by their place and supplies it with the necessary regelialia. It is a paradisematic country.</p>
										<p><a href="#" class="btn btn-primary px-5 py-3 mt-3">Discover Now</a></p>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
<?php endif ?>

<!-- start new Categories -->

<?php if(ThemeAction('Home', 'Category')): ?>
  <?php if(ThemeAction('Home', 'Category')->status == 'Active'): ?>
	<section>
	<div class="categories-sec relative">
	<?php if(authCheck()): ?>
		<div class="customizeSecBtn">
			<div class="dropdown">
				<button type="button" class="btn btn-dark dropdown-toggle" data-toggle="dropdown">
					<i class="fa-solid fa-ellipsis-vertical"></i>
				</button>
				<div class="dropdown-menu">
					<a class="dropdown-item theme-builder-model" href="javscript:void;" data-section="category"><i class="fa-regular fa-pen-to-square"></i> Edit</a>
					<a class="dropdown-item theme-builder-remove" data-section="category" href="#"><i class="fa-solid fa-trash-can"></i> Remove</a>
				</div>
			</div>
		</div>
	<?php endif ?>
		<div class="container" id="category">
		<?php echo ThemeAction('Home', 'Category')->value; ?>
		</div>
	</div>
 </section>
<?php else: ?>
	<?php if(authCheck()): ?>
	<section style="height: 200px;">
	<div class="categories-sec relative">
		<div class="customizeSecBtn">
			<div class="dropdown">
				<button type="button" class="btn btn-dark dropdown-toggle" data-toggle="dropdown">
					<i class="fa-solid fa-ellipsis-vertical"></i>
				</button>
				<div class="dropdown-menu">
					<a class="dropdown-item theme-builder-model" href="javscript:void;" data-section="category"><i class="fa-regular fa-pen-to-square"></i> Edit</a>
					<a class="dropdown-item theme-builder-remove" data-section="category" href="#"><i class="fa fa-undo"></i> Back</a>
				</div>
			</div>
		</div>
		<div class="container" id="category"></div>
	</div>
</section>
<?php endif ?>
<?php endif ?>
<?php else: ?>
<section>
	<div class="categories-sec relative">
	<?php if(authCheck()): ?>
		<div class="customizeSecBtn">
			<div class="dropdown">
				<button type="button" class="btn btn-dark dropdown-toggle" data-toggle="dropdown">
					<i class="fa-solid fa-ellipsis-vertical"></i>
				</button>
				<div class="dropdown-menu">
					<a class="dropdown-item theme-builder-model" href="javscript:void;" data-section="category"><i class="fa-regular fa-pen-to-square"></i> Edit</a>
					<a class="dropdown-item theme-builder-remove" data-section="category" href="#"><i class="fa-solid fa-trash-can"></i> Remove</a>
				</div>
			</div>
		</div>
	<?php endif ?>
		<div class="container" id="category">
		<div class="cat_inner">
				<ul>
					  <?php foreach (categories() as $category): ?>
						<li>
						<div class="cat_image">
							<img class="img-fluid" src="<?php echo $category->image ?>" alt="" />
						</div>
						<a class="btn hvr-hover" href="#"><?php echo $category->name ?></a>
						</li>
					  <?php endforeach ?>
				</ul>
			</div>
		</div>
	</div>
</section>
<?php endif ?>

<!-- End new Categories -->

<?php if(ThemeAction('Home', 'Best Seller')): ?>
  <?php if(ThemeAction('Home', 'Best Seller')->status == 'Active'): ?>
	<section class="ftco-section bg-light relative">
	<?php if(authCheck()): ?>
		<div class="customizeSecBtn">
			<div class="dropdown">
				<button type="button" class="btn btn-dark dropdown-toggle" data-toggle="dropdown">
					<i class="fa-solid fa-ellipsis-vertical"></i>
				</button>
				<div class="dropdown-menu">
					<a class="dropdown-item theme-builder-model" href="javscript:void;" data-section="product1"><i class="fa-regular fa-pen-to-square"></i> Edit</a>
					<a class="dropdown-item theme-builder-remove" data-section="product1" href="#"><i class="fa-solid fa-trash-can"></i> Remove</a>
				</div>
			</div>
		</div>
	<?php endif ?>
			<div class="container">
				<div class="row justify-content-center mb-3 pb-3">
					<div class="col-md-12 heading-section text-center ftco-animate">
						<h2 class="mb-4">Best Sellers</h2>
						<p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia</p>
					</div>
				</div>
				<div id="product1">
				    <?php echo ThemeAction('Home', 'Best Seller')->value; ?>
				</div>
			</div>
	</section>
  <?php else: ?>
<?php if(authCheck()): ?>
<section class="ftco-section bg-light relative">
	<div class="customizeSecBtn">
		<div class="dropdown">
			<button type="button" class="btn btn-dark dropdown-toggle" data-toggle="dropdown">
				<i class="fa-solid fa-ellipsis-vertical"></i>
			</button>
			<div class="dropdown-menu">
				<a class="dropdown-item theme-builder-model" href="javscript:void;" data-section="product1"><i class="fa-regular fa-pen-to-square"></i> Edit</a>
				<a class="dropdown-item theme-builder-remove" data-section="product1" href="#"><i class="fa fa-undo"></i> Back</a>
			</div>
		</div>
	</div>
	<div class="container">
		<div class="row justify-content-center mb-3 pb-3">
			<div class="col-md-12 heading-section text-center ftco-animate">
				<h2 class="mb-4">Best Sellers</h2>
				<p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia</p>
			</div>
		</div>
		<div id="product1"></div>
	</div>
  </section>
  <?php endif ?>
  <?php endif ?>
<?php else: ?>
<section class="ftco-section bg-light relative">
<?php if(authCheck()): ?>
		<div class="customizeSecBtn">
			<div class="dropdown">
				<button type="button" class="btn btn-dark dropdown-toggle" data-toggle="dropdown">
					<i class="fa-solid fa-ellipsis-vertical"></i>
				</button>
				<div class="dropdown-menu">
					<a class="dropdown-item theme-builder-model" href="javscript:void;" data-section="product1"><i class="fa-regular fa-pen-to-square"></i> Edit</a>
					<a class="dropdown-item theme-builder-remove" data-section="product1" href="#"><i class="fa-solid fa-trash-can"></i> Remove</a>
				</div>
			</div>
		</div>
	<?php endif ?>
	<div class="container">
		<div class="row justify-content-center mb-3 pb-3">
			<div class="col-md-12 heading-section text-center ftco-animate">
				<h2 class="mb-4">Best Sellers</h2>
				<p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia</p>
			</div>
		</div>
		<div id="product1">
		<div class="wrapper w-100 productDemo3">
				<div class="row">
				<?php foreach(products() as $item): ?>
					<div class="col-sm col-md-6 col-lg-3">
						<div class="product">
							<a href="#" class="img-prod"><img class="img-fluid" src="<?php echo $item->thumb_img  ?>" alt="webart Template">
								<span class="status">30%</span>
								<div class="overlay"></div>
							</a>
							<div class="text py-3 px-3">
								<h3><a href="#"><?php echo $item->name  ?></a></h3>
								<div class="d-flex">
									<div class="pricing">
										<p class="price"><span class="mr-2 price-dc">$<?php echo number_format($item->base_price, 2) ?></span><span class="price-sale">$<?php echo number_format($item->base_price, 2) ?></span></p>
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
									<a href="#" class="add-to-cart text-center py-2 mr-1"><span>Add to cart <i class="ion-ios-add ml-1"></i></span></a>
									<a href="#" class="buy-now text-center py-2">Buy now<span><i class="ion-ios-cart ml-1"></i></span></a>
								</p>
							</div>
						</div>
					</div>
				<?php endforeach ?>
				</div>
			</div>
		</div>
	</div>
</section>
<?php endif ?>



<section class="ftco-section ftco-choose ftco-no-pb ftco-no-pt">
	<div class="container">
		<div class="row">
			<div class="col-md-8 d-flex align-items-stretch">
				<div class="img" style="background-image: url(<?= url('themes/' . $themeInfo->value) ?>/images/about-1.jpg);"></div>
			</div>
			<div class="col-md-4 py-md-5 ftco-animate">
				<div class="text py-3 py-md-5">
					<h2 class="mb-4">New Women's Clothing Summer Collection 2019</h2>
					<p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean.</p>
					<p><a href="#" class="btn btn-white px-4 py-3">Shop now</a></p>
				</div>
			</div>
		</div>

		<div class="row">
			<div class="col-md-5 order-md-last d-flex align-items-stretch">
				<div class="img img-2" style="background-image: url(<?= url('themes/' . $themeInfo->value) ?>/images/about-2.jpg);"></div>
			</div>
			<div class="col-md-7 py-3 py-md-5 ftco-animate">
				<div class="text text-2 py-md-5">
					<h2 class="mb-4">New Men's Clothing Summer Collection 2019</h2>
					<p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean.</p>
					<p><a href="#" class="btn btn-white px-4 py-3">Shop now</a></p>
				</div>
			</div>
		</div>
	</div>
</section>


<?php if(ThemeAction('Home', 'Product')): ?>
  <?php if(ThemeAction('Home', 'Product')->status == 'Active'): ?>
<section class="ftco-section bg-light relative">
<?php if(authCheck()): ?>
		<div class="customizeSecBtn">
			<div class="dropdown">
				<button type="button" class="btn btn-dark dropdown-toggle" data-toggle="dropdown">
					<i class="fa-solid fa-ellipsis-vertical"></i>
				</button>
				<div class="dropdown-menu">
					<a class="dropdown-item theme-builder-model" href="javscript:void;" data-section="product"><i class="fa-regular fa-pen-to-square"></i> Edit</a>
					<a class="dropdown-item theme-builder-remove" data-section="product" href="#"><i class="fa-solid fa-trash-can"></i> Remove</a>
				</div>
			</div>
		</div>
	<?php endif ?>
	</div>
	<div class="container">
		<div class="row justify-content-center mb-3 pb-3">
			<div class="col-md-12 heading-section text-center ftco-animate">
				<h2 class="mb-4">Products</h2>
				<p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia</p>
			</div>
		</div>
		<div id="product">
		   <?php echo ThemeAction('Home', 'Product')->value; ?>
		</div>
	</div>
</section>
<?php else: ?>
	<?php if(authCheck()): ?>
 <section class="ftco-section bg-light relative">
	<div class="customizeSecBtn">
		<div class="dropdown">
			<button type="button" class="btn btn-dark dropdown-toggle" data-toggle="dropdown">
				<i class="fa-solid fa-ellipsis-vertical"></i>
			</button>
			<div class="dropdown-menu">
				<a class="dropdown-item theme-builder-model" href="javscript:void;" data-section="product"><i class="fa-regular fa-pen-to-square"></i> Edit</a>
				<a class="dropdown-item theme-builder-remove" data-section="product" href="#"><i class="fa fa-undo"></i> Back</a>
			</div>
		</div>
	</div>
	<div class="container">
		<div class="row justify-content-center mb-3 pb-3">
			<div class="col-md-12 heading-section text-center ftco-animate">
				<h2 class="mb-4">Products</h2>
				<p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia</p>
			</div>
		</div>
		<div id="product"></div>
	</div>
  </section>
<?php endif ?>
<?php endif ?>
 <?php else: ?>
<section class="ftco-section bg-light relative">
	<?php if(authCheck()): ?>
		<div class="customizeSecBtn">
			<div class="dropdown">
				<button type="button" class="btn btn-dark dropdown-toggle" data-toggle="dropdown">
					<i class="fa-solid fa-ellipsis-vertical"></i>
				</button>
				<div class="dropdown-menu">
					<a class="dropdown-item theme-builder-model" href="javscript:void;" data-section="product"><i class="fa-regular fa-pen-to-square"></i> Edit</a>
					<a class="dropdown-item theme-builder-remove" data-section="product" href="#"><i class="fa-solid fa-trash-can"></i> Remove</a>
				</div>
			</div>
		</div>
	<?php endif ?>
	<div class="container">
		<div class="row justify-content-center mb-3 pb-3">
			<div class="col-md-12 heading-section text-center ftco-animate">
				<h2 class="mb-4">Products</h2>
				<p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia</p>
			</div>
		</div>
		<div id="product">
		<div class="row">
			<?php foreach(products() as $item ): ?>
				<div class="col-sm col-md-6 col-lg-3 ftco-animate">
					<div class="product">
						<a href="#" class="img-prod"><img class="img-fluid" src="<?php echo $item->thumb_img ?>" alt="webart Template">
							<!-- <span class="status">30%</span> -->
							<div class="overlay"></div>
						</a>
						<div class="text py-3 px-3">
							<h3><a href="#">
								<?php echo $item->name ?>
							</a></h3>
							<div class="d-flex">
								<div class="pricing">
									<p class="price"><span class="mr-2 price-dc">$<?php echo number_format($item->base_price, 2) ?></span><span class="price-sale">$<?php echo number_format($item->base_price, 2)  ?></span></p>
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
								<a href="#" class="add-to-cart text-center py-2 mr-1"><span>Add to cart <i class="ion-ios-add ml-1"></i></span></a>
								<a href="#" class="buy-now text-center py-2">Buy now<span><i class="ion-ios-cart ml-1"></i></span></a>
							</p>
						</div>
					</div>
				</div>
			<?php endforeach ?>
				
			</div>
		</div>
	</div>
</section>
<?php endif ?>



<hr>

<?php if(ThemeAction('Home', 'Newsletter')): ?>
  <?php if(ThemeAction('Home', 'Newsletter')->status == 'Active'): ?>
	<section class="ftco-section-parallax relative">
	<?php if(authCheck()): ?>
		<div class="customizeSecBtn">
			<div class="dropdown">
				<button type="button" class="btn btn-dark dropdown-toggle" data-toggle="dropdown">
					<i class="fa-solid fa-ellipsis-vertical"></i>
				</button>
				<div class="dropdown-menu">
					<a class="dropdown-item theme-builder-model" href="javscript:void;" data-section="newsletter"><i class="fa-regular fa-pen-to-square"></i> Edit</a>
					<a class="dropdown-item theme-builder-remove" data-section="newsletter" href="#"><i class="fa-solid fa-trash-can"></i> Remove</a>
				</div>
			</div>
		</div>
	<?php endif ?>

	<div id="newsletter">
		<?php echo ThemeAction('Home', 'Newsletter')->value; ?>
	</div>
	</section>
	<?php else: ?>
<?php if(authCheck()): ?>
<section class="ftco-section-parallax relative" style="height: 200px;">
	<div class="customizeSecBtn">
		<div class="dropdown">
			<button type="button" class="btn btn-dark dropdown-toggle" data-toggle="dropdown">
				<i class="fa-solid fa-ellipsis-vertical"></i>
			</button>
			<div class="dropdown-menu">
				<a class="dropdown-item theme-builder-model" href="javscript:void;" data-section="newsletter"><i class="fa-regular fa-pen-to-square"></i> Edit</a>
				<a class="dropdown-item theme-builder-remove" data-section="newsletter" href="#"><i class="fa fa-undo"></i> Back</a>
			</div>
		</div>
	</div>
	<div id="newsletter"></div>
</section>
	<?php endif ?>
	<?php endif ?>
	<?php else: ?>
<section class="ftco-section-parallax relative">
	<?php if(authCheck()): ?>
		<div class="customizeSecBtn">
			<div class="dropdown">
				<button type="button" class="btn btn-dark dropdown-toggle" data-toggle="dropdown">
					<i class="fa-solid fa-ellipsis-vertical"></i>
				</button>
				<div class="dropdown-menu">
					<a class="dropdown-item theme-builder-model" href="javscript:void;" data-section="newsletter"><i class="fa-regular fa-pen-to-square"></i> Edit</a>
					<a class="dropdown-item theme-builder-remove" data-section="newsletter" href="#"><i class="fa-solid fa-trash-can"></i> Remove</a>
				</div>
			</div>
		</div>
	<?php endif ?>

	<div id="newsletter">
	<div class="parallax-img d-flex align-items-center">
			<div class="container">
				<div class="row d-flex justify-content-center py-5">
					<div class="col-md-7 text-center heading-section ftco-animate">
						<h2>Subcribe to our Newsletter</h2>
						<div class="row d-flex justify-content-center mt-5">
							<div class="col-md-8">
								<form action="#" class="subscribe-form">
									<div class="form-group d-flex">
										<input type="text" class="form-control" placeholder="Enter email address">
										<input type="submit" value="Subscribe" class="submit px-3">
									</div>
								</form>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>

<?php endif ?>

<?php include 'footer.php'; ?>