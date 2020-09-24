import $ from "jquery";

export function scrollto() {
	$('.js-scrollto').on('click', function() {
    var href = $(this).attr("href");
    $('html, body').animate({
      scrollTop: $(href).offset().top
    }, 500);
    return false;
  });
  $('.js-scrollto > a').on('click', function() {
	  $("body").removeClass("menuopen");
    $("body").removeClass("opensidemenu");
    $(".js-mobilemenu").removeClass("open");
    var href = $(this).attr("href");
    $('html, body').animate({
      scrollTop: $(href).offset().top
    }, 500);
    return false;
  });
  $('.js-scrolltonextsection').on('click', function() {
    var href = $(this).closest('section').next();
    $('html, body').animate({
      scrollTop: $(href).offset().top
    }, 500);
    return false;
  });
}