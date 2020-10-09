import $ from "jquery";

export function scrollto() {
	$('.js-scrollto').on('click', function() {
    var href = $(this).attr("href");
    $('html, body').animate({
      scrollTop: $(href).offset().top
    }, 500, 'swing');
    return false;
  });
  
  if ($(window).width() < 992) {
    if (window.location.search.indexOf('scrolltocontent') > -1) {
	    $('html, body').animate({
	      scrollTop: $('#content').offset().top
	    }, 500, 'swing');
		} 
  }
}