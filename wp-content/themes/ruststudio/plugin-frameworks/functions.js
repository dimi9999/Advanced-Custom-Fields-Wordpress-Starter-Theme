 // WINDOW LOAD
$(window).load(function () {
	stickyHeader();
});

// (1) JQUERY FUNCTIONS
$(document).ready(function() {
// BACK TO TOP BUTTON
	$(window).scroll(function(){
		if ($(this).scrollTop() > 100) {
			$('.scrollToTop').fadeIn();
		} else {
			$('.scrollToTop').fadeOut();
		}
	});
	// CLICK EVENT TO SCROLL ONTO THE TOP
	$('.scrollToTop').click(function(){
		$('html, body').animate({scrollTop : 0},800);
		return false;
	});
	// ANIMATED NAVBAR TOGGLE ICON
 
	// OWL CAROUSEL
	$('.owl-carousel').owlCarousel({
    loop:true,
    margin:10,
    responsiveClass:true,
    responsive:{
        0:{
            items:2,
            nav:false,
			margin:10,
			autoplay:true
        },
        600:{
			margin:10,
            items:3,
			autoplay:true
        },
        1000:{
            items:4,
            nav:false,
            loop:true,
			margin:20,
			autoplay:true
        }
    }
})
	
	
	
});
// (2) JAVASCRIPT FUNCTIONS
function stickyHeader() {	
	// get header height (without border)
	var getHeaderHeight = $('.headerContainerWrapper').outerHeight();
	var lastScrollPosition = 0;

	// set negative top position to create the animated header effect
	 

	$(window).scroll(function() {
		var currentScrollPosition = $(window).scrollTop();

		if ($(window).scrollTop() > 2 * (getHeaderHeight) ) {
			$('body').addClass('scrollActive').css('padding-top', getHeaderHeight);
			$('.headerContainerWrapper').css('top', 0);

			if (currentScrollPosition < lastScrollPosition) {
				$('.headerContainerWrapper').css('top', '-' + (getHeaderHeight) + 'px');
			}
			lastScrollPosition = currentScrollPosition;

		} else {
			$('body').removeClass('scrollActive').css('padding-top', 0);
			$('.headerContainerWrapper').css('top', '0');
		}
	});
}

// LIGHTBOX
var $overlay = $('<div id="overlay"></div>');
var $wrap = $('<div class="wrap"></div>');
var $image = $('<img>');
var $caption = $('<p></p>');
var $close = $('<a href="#" class="close">&times;</a>');

// append method
$overlay.append($wrap);
$wrap.append($image);
$wrap.append($caption);
$wrap.append($close);
$('body').append($overlay);

// click on each images
$('#photogallery').on('click', 'a', function (event) {
    event.preventDefault();

    var imageSrc = $(this).attr('href');
    $image.attr('src', imageSrc);

    var captionText = $(this).children().attr('alt');
    $caption.text(captionText);

    $overlay.show();
});

// click on close icon
$close.click(function () {
    $overlay.hide();
    return false;
});
	 
	 
