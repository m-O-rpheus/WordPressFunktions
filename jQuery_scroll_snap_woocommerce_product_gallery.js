	jQuery( document ).ready(function() {

		jQuery('.woocommerce-product-gallery').append( '<div class="chevron_slide chevron_prev"></div><div class="chevron_slide chevron_next"></div>' );


		jQuery('.woocommerce-product-gallery > .chevron_prev').click(function(e) {

			e.preventDefault();
			let sel = document.querySelector('.woocommerce-product-gallery__wrapper'); sel.scrollLeft -= sel.offsetHeight;  /* offsetHeight da Bilder Quadratisch sind und gallery__wrapper länger als Bild */
		});


		jQuery('.woocommerce-product-gallery > .chevron_next').click(function(e) {

			e.preventDefault();
			let sel = document.querySelector('.woocommerce-product-gallery__wrapper'); sel.scrollLeft += sel.offsetHeight;  /* offsetHeight da Bilder Quadratisch sind und gallery__wrapper länger als Bild */
		});


		jQuery( ".single_variation_wrap" ).on( "show_variation", function ( event, variation ) {
			
			let sel = document.querySelector('.woocommerce-product-gallery__wrapper'); sel.scrollLeft = 0;
		});

	});
