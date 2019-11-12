
//function scroll_to(clicked_link, nav_height) {
//	var element_class = clicked_link.attr('href').replace('#', '.');
//	var scroll_to = 0;
//	if(element_class != '.top-content') {
//		element_class += '-container';
//		scroll_to = $(element_class).offset().top - nav_height;
//	}
//	if($(window).scrollTop() != scroll_to) {
//		$('html, body').stop().animate({scrollTop: scroll_to}, 1000);
//	}
//}


jQuery(document).ready(function() {
	
	/*
	    Navigation
	*/
//	$('a.scroll-link').on('click', function(e) {
//		e.preventDefault();
//		scroll_to($(this), $('nav').outerHeight());
//	});

        $("#btn1").click(function(){
            $("#newProd").after(
                '<label for="prodID">Product&nbsp;ID:</label>'
//                '<input type="text" class="form-control" id="prodID" placeholder="Enter product ID" name="prodID" required>',
//                '<label for="quantity">Quantity:</label>',
//                '<input type="text" class="form-control" id="quantity" placeholder="Enter quantity" name="quantity" required>',
//                '<div class="valid-feedback">Valid.</div>',
//                '<div class="invalid-feedback">Please fill out these fields.</div>'
            );
        });
        
        
        //Navbar Scrolling Effect
        $(window).on("scroll", function() {
            if($(window).scrollTop()) {
                $('nav').addClass('black');
            }
            else {
                $('nav').removeClass('black');
            }
        });
	
    /*
        Background
    */
    $('.section-4-container').backstretch("assets/img/backgrounds/dunder_mifflin.jpg");
    $('.landing-page-container').backstretch("assets/img/backgrounds/Office.jpg");
    $('#body').backstretch("assets/img/backgrounds/paper_ream.jpg");
    /*
	    Wow
	*/
	new WOW().init();
	
	/*
	    Carousel
	*/
	$('#carousel-example').on('slide.bs.carousel', function (e) {

	    /*
	        CC 2.0 License Iatek LLC 2018
	        Attribution required
	    */
	    var $e = $(e.relatedTarget);
	    var idx = $e.index();
	    var itemsPerSlide = 5;
	    var totalItems = $('.carousel-item').length;
	    
	    if (idx >= totalItems-(itemsPerSlide-1)) {
	        var it = itemsPerSlide - (totalItems - idx);
	        for (var i=0; i<it; i++) {
	            // append slides to end
	            if (e.direction=="left") {
	                $('.carousel-item').eq(i).appendTo('.carousel-inner');
	            }
	            else {
	                $('.carousel-item').eq(0).appendTo('.carousel-inner');
	            }
	        }
	    }
	});
	
});


