jQuery('#owl-carousel-3').owlCarousel({
	autoplay:true,
	rtl:true,
	loop:true,
	margin:20,
	nav:false,
	center:true,
	responsive:{
		0:{
			items:2
		},
		600:{
			items:4
		},
		1000:{
			items:6
		}
	}
})

jQuery('#owl-carousel-4').owlCarousel({
	//autoplay:true,
	rtl:true,
	loop:true,
	margin:20,
	nav:true,
    dots: true,
	responsive:{
		0:{
			items:1
		},
		600:{
			items:2
		},
		1000:{
			items:3
		}
	}
})

jQuery('#owl-carousel-6').owlCarousel({
	autoplay:true,
	rtl:true,
	loop:true,
	margin:0,
	nav:true,
    dots: false,
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

new WOW().init();




jQuery('.minClass').click(function() {
	var val_qty = jQuery('.qty').val();
	if(val_qty > 1) {
		var res_val_qty = val_qty - 1;
		jQuery('.qty').val(res_val_qty);
	}
});

jQuery('.plusClass').click(function() {
	var val_qty = jQuery('.qty').val();
	var res_val_qty = parseInt(val_qty) + 1;
	jQuery('.qty').val(res_val_qty);
});




