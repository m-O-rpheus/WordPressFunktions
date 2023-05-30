

	function element_parallax(sel) {

		document.querySelectorAll(sel).forEach(function(sel) { 

			let elem		= sel.getBoundingClientRect();
			let viewport_height	= window.innerHeight;
			let viewport_scrolly	= window.scrollY;
			let elem_height		= elem.height;
			let elem_scrolly	= elem.top;

			let positionsberechnung = ( ( ( ( ( ( viewport_scrolly - ( elem_scrolly + viewport_scrolly ) ) + viewport_height ) / ( viewport_height + elem_height ) ) * 100 ) - 50 ) * 2 );

			if (positionsberechnung < -100) {

				sel.style.setProperty("--viewportpos", -100);
			}
			else if (positionsberechnung > 100) {

				sel.style.setProperty("--viewportpos", 100);
			}
			else {

				sel.style.setProperty("--viewportpos", positionsberechnung);
			}

		});	
	}



	/* Parallax Effekt auf Class Element legen */
	window.addEventListener('scroll', function (e) {

		element_parallax(".grid_section_item_image");
	});

	document.addEventListener("DOMContentLoaded", function() {

		element_parallax(".grid_section_item_image");
	});


