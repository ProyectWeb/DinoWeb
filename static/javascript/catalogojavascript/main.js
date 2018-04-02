(function ($) {
"use strict";


	jQuery('#mobile-menu').meanmenu({
		meanMenuContainer: '.mobile-menu',
		meanScreenWidth: "767"

	});



//carousel
$('.slider-active').owlCarousel({
    loop:true,
    nav:true,
    navText:['Back','Next'],
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
})


//tarjetas
$('.product-active').owlCarousel({
    loop:true,
    nav:true,
    margin:30,
    navText:['Back','Next'],
    responsive:{
        0:{
            items:1,
            nav:false,
        },
        768:{
            items:2
        },
        992:{
            items:4
        },
        1200:{
            items:4
        }
    }
})




//Iconos que maybe quite
$('.brand-active').owlCarousel({
    loop:true,
    nav:false,
    margin:30,
    navText:['Back','Next'],
    responsive:{
        0:{
            items:2
        },
        768:{
            items:3
        },
        992:{
            items:5
        },
        1200:{
            items:6
        }
    }
})



//select
$('select').niceSelect();



})(jQuery);