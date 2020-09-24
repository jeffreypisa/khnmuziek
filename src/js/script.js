import $ from "jquery";
import bootstrap from "bootstrap";

import { scrollto } from './scripts/scrollto.js';

// Init plugins
import { matchheight_init } from 'scripts/matchheight.js';

// Scripts
import { site_is_loaded } from 'scripts/site_is_loaded.js';

$( document ).ready(function() {
	$(".menu-toggle").on('click', function(){
	  $("ul.mainmenu").toggleClass("show");
	});
	scrollto();
});

$(window).on('load', function() {
	matchheight_init();
  site_is_loaded();
});