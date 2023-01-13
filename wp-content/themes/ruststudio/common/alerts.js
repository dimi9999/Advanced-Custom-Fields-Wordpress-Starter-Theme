
// Create IE Alert Html Popup

var iemodhtml = '';

iemodhtml += '<div class="AlertContainer">';
iemodhtml += '<div class="container">';
iemodhtml += '<div class="popupbox">';
iemodhtml += '<h2>Accept Cookies</h2>';
iemodhtml += '<p >Plex.gr uses cookies to ensure that we give you the best experience on our website. If you continue without changing your settings, we will assume that you are happy to receive all cookies on the website.</p>';
iemodhtml += '<p><button id="btn-close-alert" class="btn btn-close-alert">I accept</button></p>';
iemodhtml += '</div>';
iemodhtml += '</div>';

/* Sample function that returns boolean in case the browser is Internet Explorer*/
function isIE() {
  ua = navigator.userAgent;
  /* MSIE used to detect old browsers and Trident used to newer ones*/
  var is_ie = ua.indexOf("MSIE") > -1 || ua.indexOf("Trident/") > -1;

  return is_ie;
}


$(document).ready(function () {

		// COOKIES CODE POPUP
	
		if (localStorage.getItem('cookieSeen') != 'shown') {
			
			$("body").prepend(iemodhtml);
			$('.AlertContainer').delay(2000).fadeIn();
			localStorage.setItem('cookieSeen','shown')
		};
			$('#btn-close-alert').click(function() {
			//alert('close');
			$('.AlertContainer').fadeOut();
		})
		// close the popupbox
			$(".container").click(function () {
				$(".AlertContainer").remove();
			});
	
			$("#btn-close-alert").click(function () {
				$(".AlertContainer").fadeOut(500);
			});
		// }
		if ($('.modal').length === 0) {
		//	$("body").append(iemodhtml);
		}

 });