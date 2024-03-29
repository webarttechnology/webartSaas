<footer class="ftco-footer bg-light ftco-section">
			<div class="container">
				<div class="row">
					<div class="mouse">
							  <a href="#" class="mouse-icon">
								  <div class="mouse-wheel"><span class="ion-ios-arrow-up"></span></div>
							  </a>
						  </div>
				</div>
			  <div class="row mb-5">
				<div class="col-md">
				  <div class="ftco-footer-widget mb-4">
					<h2 class="ftco-heading-2">Logo Here</h2>
					<p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia.</p>
					<ul class="ftco-footer-social list-unstyled float-md-left float-lft mt-5">
					  <li class="ftco-animate"><a href="#"><span class="icon-twitter"></span></a></li>
					  <li class="ftco-animate"><a href="#"><span class="icon-facebook"></span></a></li>
					  <li class="ftco-animate"><a href="#"><span class="icon-instagram"></span></a></li>
					</ul>
				  </div>
				</div>
				<div class="col-md">
				  <div class="ftco-footer-widget mb-4 ml-md-5">
					<h2 class="ftco-heading-2">Menu</h2>
					<ul class="list-unstyled">
					  <li><a href="#" class="py-2 d-block">Shop</a></li>
					  <li><a href="#" class="py-2 d-block">About</a></li>
					  <li><a href="#" class="py-2 d-block">Journal</a></li>
					  <li><a href="#" class="py-2 d-block">Contact Us</a></li>
					</ul>
				  </div>
				</div>
				<div class="col-md-4">
				   <div class="ftco-footer-widget mb-4">
					<h2 class="ftco-heading-2">Help</h2>
					<div class="d-flex">
						<ul class="list-unstyled mr-l-5 pr-l-3 mr-4">
						  <li><a href="#" class="py-2 d-block">Shipping Information</a></li>
						  <li><a href="#" class="py-2 d-block">Returns &amp; Exchange</a></li>
						  <li><a href="#" class="py-2 d-block">Terms &amp; Conditions</a></li>
						  <li><a href="#" class="py-2 d-block">Privacy Policy</a></li>
						</ul>
						<ul class="list-unstyled">
						  <li><a href="#" class="py-2 d-block">FAQs</a></li>
						  <li><a href="#" class="py-2 d-block">Contact</a></li>
						</ul>
					  </div>
				  </div>
				</div>
				<div class="col-md">
				  <div class="ftco-footer-widget mb-4">
					  <h2 class="ftco-heading-2">Have a Questions?</h2>
					  <div class="block-23 mb-3">
						<ul>
						  <li><span class="icon icon-map-marker"></span><span class="text">203 Fake St. Mountain View, San Francisco, California, USA</span></li>
						  <li><a href="#"><span class="icon icon-phone"></span><span class="text">+2 392 3929 210</span></a></li>
						  <li><a href="#"><span class="icon icon-envelope"></span><span class="text">info@yourdomain.com</span></a></li>
						</ul>
					  </div>
				  </div>
				</div>
			  </div>
			  <div class="row">
				<div class="col-md-12 text-center">
	  
				  <p>
					  Copyright 2024. All rights reserved | Design & Developed by <a href="https://webart.technology/" target="_blank">Webart Technology</a>
				  </p>
				</div>
			  </div>
			</div>
		</footer>
    
  
  <!-- loader -->
  <div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px"><circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"/><circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#F96D00"/></svg></div>

  <div class="modal fade builderModal" id="myModal">
     <div class="modal-dialog modal-xl">
       <div class="modal-content">
         <!-- Modal body -->
         <div class="modal-body">
		 	<button type="button" class="close" data-dismiss="modal">&times;</button>
			 <div id="builder-section"></div>
		 </div>
       </div>
     </div>
   </div>

  <!-- <div id="builder-section"></div> -->

  <script src="<?= url('themes/'. $themeInfo->value)?>/js/jquery.min.js"></script>
  <script src="<?= url('themes/'. $themeInfo->value)?>/js/jquery-migrate-3.0.1.min.js"></script>
  <script src="<?= url('themes/'. $themeInfo->value)?>/js/popper.min.js"></script>
  <script src="<?= url('themes/'. $themeInfo->value)?>/js/bootstrap.min.js"></script>
  <script src="<?= url('themes/'. $themeInfo->value)?>/js/jquery.easing.1.3.js"></script>
  <script src="<?= url('themes/'. $themeInfo->value)?>/js/jquery.waypoints.min.js"></script>
  <script src="<?= url('themes/'. $themeInfo->value)?>/js/jquery.stellar.min.js"></script>
  <script src="<?= url('themes/'. $themeInfo->value)?>/js/owl.carousel.min.js"></script>
  <script src="<?= url('themes/'. $themeInfo->value)?>/js/jquery.magnific-popup.min.js"></script>
  <script src="<?= url('themes/'. $themeInfo->value)?>/js/aos.js"></script>
  <script src="<?= url('themes/'. $themeInfo->value)?>/js/jquery.animateNumber.min.js"></script>
  <script src="<?= url('themes/'. $themeInfo->value)?>/js/bootstrap-datepicker.js"></script>
  <script src="<?= url('themes/'. $themeInfo->value)?>/js/scrollax.min.js"></script>
  <script src="<?= url('themes/'. $themeInfo->value)?>/https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false"></script>
  <script src="<?= url('themes/'. $themeInfo->value)?>/js/google-map.js"></script>
  <script src="<?= url('themes/'. $themeInfo->value)?>/js/main.js"></script>
  <script src="<?php echo url('global/login.js') ?>"></script>
  <script src="<?php echo url('global/common.js') ?>"></script>
  <script src="<?php echo url('global/builder.js') ?>"></script>

  <script>
		$(document).ready(function(){

		var quantitiy=0;
		   $('.quantity-right-plus').click(function(e){
		        
		        // Stop acting like a button
		        e.preventDefault();
		        // Get the field name
		        var quantity = parseInt($('#quantity').val());
		        
		        // If is not undefined
		            
		            $('#quantity').val(quantity + 1);

		          
		            // Increment
		        
		    });

		     $('.quantity-left-minus').click(function(e){
		        // Stop acting like a button
		        e.preventDefault();
		        // Get the field name
		        var quantity = parseInt($('#quantity').val());
		        
		        // If is not undefined
		      
		            // Increment
		            if(quantity>0){
		            $('#quantity').val(quantity - 1);
		            }
		    });
		    
		});
	</script>
    
  </body>
</html>