(function ($) {
    "use strict";


    /* ===================================
        Side Menu
    ====================================== */
    if ($("#sidemenu_toggle").length) {

        $("#sidemenu_toggle").on("click", function () {
            $(".pushwrap").toggleClass("active");
            $(".side-menu").addClass("side-menu-active"), $("#close_side_menu").fadeIn(700)
        }), $("#close_side_menu").on("click", function () {
            $(".side-menu").removeClass("side-menu-active"), $(this).fadeOut(200), $(".pushwrap").removeClass("active")
        }), $(".side-nav .navbar-nav").on("click", function () {
            $(".side-menu").removeClass("side-menu-active"), $("#close_side_menu").fadeOut(200), $(".pushwrap").removeClass("active")
        }), $("#btn_sideNavClose").on("click", function () {
            $(".side-menu").removeClass("side-menu-active"), $("#close_side_menu").fadeOut(200), $(".pushwrap").removeClass("active")
        });
    }

    // Navbar Scroll Function
    var $window = $(window);
    $window.scroll(function () {
        var $scroll = $window.scrollTop();
        var $navbar = $(".header-nav");
        if (!$navbar.hasClass("sticky-bottom")) {
            if ($scroll > 250) {
                $navbar.addClass("fixed-menu");
            } else {
                $navbar.removeClass("fixed-menu");
            }
        }
    });



       	// Banner Carousel / Owl Carousel 
	$('.banner-carousel').owlCarousel({
		animateOut: 'fadeOut',
	    animateIn: 'fadeIn',
		loop:true,
		margin:0,
		nav:true,
		dots: false,
		smartSpeed: 500,
		autoHeight: true,
		autoplay: true,
		autoplayTimeout:5000,
		navText: [ '<span class="fa fa-angle-left">', '<span class="fa fa-angle-right">' ],
		responsive:{
			0:{
				items:1
			},
			600:{
				items:1
			},
			1024:{
				items:1
			},
		}
    });
    

    $('.servicos-carousel').owlCarousel({
        loop: true,
        margin: 10,
        responsiveClass: true,
        nav: false,
        responsive: {
            0: {
            items: 1,
            },
            600: {
            items: 2,
            },
            1000: {
            items: 3,
            
            loop: false,
            margin: 20
            }
        }
    });


    $('.images-carousel').owlCarousel({
        loop:true,
        margin:5,
        responsiveClass:true,
        nav:false,
        dots:true,
        responsive:{
            0:{
                items:1,
            },
            600:{
                items:1,
            },
            1000:{
                items:1,
                loop:false
            }
        }
    })


	$('.data').mask('00/00/0000');
    $('.telefone').focusout(function(){
    	var phone, element;
    	element = $(this);
    	element.unmask();
    	phone = element.val().replace(/\D/g, '');
    	if(phone.length > 10) {
    		element.mask("(99) 99999-9999");
    	} else {
    		element.mask("(99) 9999-99999");
    	}
    }).trigger('focusout');



    $(window).on('load', function() {
        $("#exemploDente").twentytwenty();
    });

})(jQuery, window, document);