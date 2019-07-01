window.$ = jQuery;
const w = $(window);

import menu from './menu'
import tabs from './tabs'
import navbar from './navbar'
import menu_color from './menu-color'
import scrollit from './scrollit'

import initializeForms from './forms'

w.ready(function() {
	menu();
	tabs();
	menu_color();
	scrollit();

	//Funcion para que solo haga scroll en desktop
	function fullpageScroll(breakSm) {
	    if (!breakSm.matches) {
	        //search movil
	        $('#fullpage').fullpage({
			  parallaxOptions : {type :  ' reveal ' , porcentaje :  62 , property :  ' translate ' },
		   });
	    }
	}

	var breakSm = window.matchMedia("(max-width: 980px)")
	fullpageScroll(breakSm)
	breakSm.addListener(fullpageScroll)





});

$( window ).load(function() {

	initializeForms();

	//Inicializar plugin sticky-kit
	$(function() {
	  $("#menu-fix").stick_in_parent({
	    offset_top:15
	  });
	});

});


w.scroll(function() {
	navbar();
});
