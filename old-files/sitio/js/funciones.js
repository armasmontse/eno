$(document).ready(function(){
	
	
	
	$(".boton-menu").click(function(){
		$(".menu").css("display" , "block");
		$(".menu").animate({width: "33%"}, 500 );
		$(".cerrar-menu").css("display" , "block");
		$(".cerrar-menu").animate({right: "15%"}, 550 );
		$(".redes-menu").delay(400).fadeIn(100);
		$(".botones-menu").delay(400).fadeIn(100);
		$(".transparencia").fadeIn(600);
	});
	
		$(".cerrar-menu").click(function(){
			$(".menu").animate({width: "0%"}, 500 );
			$(".cerrar-menu").animate({right: "0px"}, 550 );
			$(".redes-menu").fadeOut(0);
			$(".botones-menu").fadeOut(1);
			$(".transparencia").fadeOut(300);
	});
	

});