import $ from "jquery";

export function collapsecard() {
	$('.js-show-card-right').on('click', function() {
    $('.card-right').removeClass('d-none');
    $('.mainmenu, footer').removeClass('notvisible');
    $('.js-hide-card-right').addClass('d-lg-block');
    $('.js-show-card-right').removeClass('d-lg-block');
  });
  $('.js-hide-card-right').on('click', function() {
    $('.card-right').addClass('d-none');
    $('.mainmenu, footer').addClass('notvisible');
    $('.js-hide-card-right').removeClass('d-lg-block');
    $('.js-show-card-right').addClass('d-lg-block');
  });
}