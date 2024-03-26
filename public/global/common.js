function runCommon() {

    $('.home-slider').owlCarousel({
        loop:true,
        autoplay: true,
        margin:0,
        animateOut: 'fadeOut',
        animateIn: 'fadeIn',
        nav:false,
        autoplayHoverPause: false,
        items: 1,
        navText : ["<span class='ion-md-arrow-back'></span>","<span class='ion-chevron-right'></span>"],
        responsive:{
          0:{
            items:1
          },
          600:{
            items:1
          },
          1000:{
            items:1
          }
        }
    });


    $('.categoriesSlide').owlCarousel({
			loop:true,
	        autoplay: true,
			items:1,
			margin: 30,
			stagePadding: 0,
			autoplayTimeout: 2000,
			autoplayHoverPause: false,
			nav: false,
			navText: ['<span class="ion-ios-arrow-back">', '<span class="ion-ios-arrow-forward">'],
			responsive:{
				0:{
					items: 1
				},
				600:{
					items: 3
				},
				1000:{
					items: 6
				}
			}
		});

		$('.categories_withbg').owlCarousel({
			loop:true,
	        autoplay: true,
			items:1,
			margin: 30,
			stagePadding: 0,
			autoplayTimeout: 2500,
			autoplayHoverPause: false,
			nav: false,
			dots:false,
			navText: ['<span class="ion-ios-arrow-back">', '<span class="ion-ios-arrow-forward">'],
			responsive:{
				0:{
					items: 1
				},
				600:{
					items: 3
				},
				1000:{
					items: 6
				}
			}
		});

		$('.categoriesSlideIcons').owlCarousel({
			loop:true,
	        autoplay: true,
			items:1,
			margin: 30,
			stagePadding: 0,
			autoplayTimeout: 2000,
			autoplayHoverPause: false,
			nav: false,
			dots:false,
			navText: ['<span class="ion-ios-arrow-back">', '<span class="ion-ios-arrow-forward">'],
			responsive:{
				0:{
					items: 1
				},
				600:{
					items: 3
				},
				1000:{
					items: 5
				}
			}
		}); 
}

