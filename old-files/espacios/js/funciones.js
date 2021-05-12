$(document).ready(function(){



	//Navigation menu scrollTo
	$('header nav ul li a').click(function(event){
		event.preventDefault();
		var section = $(this).attr('href');
		var section_pos = $(section).position();

		if(section_pos){
			$(window).scrollTo({top:section_pos.top, left:'0px'}, 1000);
		}
		
	});

//parallax effect initialization
	$('.home').parallax("50%", 0.5);
	$('.menu').parallax("50%", 0.5);
	$('.imagen3').parallax("50%", 0.5);

/////
var dispositivo = navigator.userAgent.toLowerCase();
      if( dispositivo.search(/android|webos|iphone|ipad|ipod|blackberry|iemobile|opera mini/) > -1 ){
       	$('.home').parallax("50%", 0.0);
		$('.menu').parallax("50%", 0.0);
		$('.imagen3').parallax("50%", 0.0);
	}
/////

	var tiempo_inicio_anim = 1;
	var tiempo_entre_img = 3000;
	var tiempo_fade = 1500;
	
	function animacion_concepto() {
		
		$(".logo-concepto1").fadeIn(tiempo_fade);

		setTimeout(function() {
			$(".logo-concepto1").fadeOut(tiempo_fade);
			$(".logo-concepto2").fadeIn(tiempo_fade);
		}, tiempo_entre_img);
	
		setTimeout(function() {
			$(".logo-concepto2").fadeOut(tiempo_fade);
			$(".logo-concepto3").fadeIn(tiempo_fade);
		}, tiempo_entre_img*2);
	
		setTimeout(function() {
			$(".logo-concepto3").fadeOut(tiempo_fade);
			$(".logo-concepto4").fadeIn(tiempo_fade);	
		}, tiempo_entre_img*3);
		
		setTimeout(function() {
			$(".logo-concepto4").fadeOut(tiempo_fade);
			animacion_concepto();
		}, tiempo_entre_img*4);
	}


	function animacion_bolsa() {
		
		$(".logo-bolsa1").fadeIn(tiempo_fade);

		setTimeout(function() {
			$(".logo-bolsa1").fadeOut(tiempo_fade);
			$(".logo-bolsa2").fadeIn(tiempo_fade);
		}, tiempo_entre_img);
	
		setTimeout(function() {
			$(".logo-bolsa2").fadeOut(tiempo_fade);
			$(".logo-bolsa3").fadeIn(tiempo_fade);
		}, tiempo_entre_img*2);
	
		setTimeout(function() {
			$(".logo-bolsa3").fadeOut(tiempo_fade);
			$(".logo-bolsa4").fadeIn(tiempo_fade);	
		}, tiempo_entre_img*3);
		
		setTimeout(function() {
			$(".logo-bolsa4").fadeOut(tiempo_fade);
			animacion_bolsa();
		}, tiempo_entre_img*4);
	}


	function animacion_newsletter() {
		
		$(".logo-newsletter1").fadeIn(tiempo_fade);

		setTimeout(function() {
			$(".logo-newsletter1").fadeOut(tiempo_fade);
			$(".logo-newsletter2").fadeIn(tiempo_fade);
		}, tiempo_entre_img);
	
		setTimeout(function() {
			$(".logo-newsletter2").fadeOut(tiempo_fade);
			$(".logo-newsletter3").fadeIn(tiempo_fade);
		}, tiempo_entre_img*2);
	
		setTimeout(function() {
			$(".logo-newsletter3").fadeOut(tiempo_fade);
			$(".logo-newsletter4").fadeIn(tiempo_fade);	
		}, tiempo_entre_img*3);
		
		setTimeout(function() {
			$(".logo-newsletter4").fadeOut(tiempo_fade);
			animacion_newsletter();
		}, tiempo_entre_img*4);
	}
	
	setTimeout(function() {
		animacion_newsletter();
		animacion_bolsa();
		animacion_concepto();
	}, tiempo_inicio_anim);



	$(".intro").delay(3000).animate({ 'top':'-403px' });


	$(".boton-virreyes").click(function(){
		$(".boton-virreyes").css("text-decoration" , "line-through");
		$(".boton-virreyes").css("color" , "#E63328");

		$(".boton-petrarca").css("text-decoration" , "none");
		$(".boton-petrarca").css("color" , "#FFF");
		$(".boton-palmas").css("text-decoration" , "none");
		$(".boton-palmas").css("color" , "#FFF");
		$(".boton-roma").css("text-decoration" , "none");
		$(".boton-roma").css("color" , "#FFF");

		$(".descarga-virreyes").delay(800).fadeIn(800);;
		$(".descarga-petrarca").fadeOut(800);
		$(".descarga-palmas").fadeOut(800);
		$(".descarga-roma").fadeOut(800);

	});	

	$(".boton-petrarca").click(function(){
		$(".boton-petrarca").css("text-decoration" , "line-through");
		$(".boton-petrarca").css("color" , "#E63328");

		$(".boton-virreyes").css("text-decoration" , "none");
		$(".boton-virreyes").css("color" , "#FFF");
		$(".boton-palmas").css("text-decoration" , "none");
		$(".boton-palmas").css("color" , "#FFF");
		$(".boton-roma").css("text-decoration" , "none");
		$(".boton-roma").css("color" , "#FFF");

		$(".descarga-petrarca").delay(800).fadeIn(800);;
		$(".descarga-virreyes").fadeOut(800);
		$(".descarga-palmas").fadeOut(800);
		$(".descarga-roma").fadeOut(800);
	});	

	$(".boton-palmas").click(function(){
		$(".boton-palmas").css("text-decoration" , "line-through");
		$(".boton-palmas").css("color" , "#E63328");

		$(".boton-virreyes").css("text-decoration" , "none");
		$(".boton-virreyes").css("color" , "#FFF");
		$(".boton-petrarca").css("text-decoration" , "none");
		$(".boton-petrarca").css("color" , "#FFF");
		$(".boton-roma").css("text-decoration" , "none");
		$(".boton-roma").css("color" , "#FFF");

		$(".descarga-palmas").delay(800).fadeIn(800);;
		$(".descarga-virreyes").fadeOut(800);
		$(".descarga-petrarca").fadeOut(800);
		$(".descarga-roma").fadeOut(800);
	});

	$(".boton-roma").click(function(){
		$(".boton-roma").css("text-decoration" , "line-through");
		$(".boton-roma").css("color" , "#E63328");

		$(".boton-virreyes").css("text-decoration" , "none");
		$(".boton-virreyes").css("color" , "#FFF");
		$(".boton-petrarca").css("text-decoration" , "none");
		$(".boton-petrarca").css("color" , "#FFF");
		$(".boton-palmas").css("text-decoration" , "none");
		$(".boton-palmas").css("color" , "#FFF");

		$(".descarga-roma").delay(800).fadeIn(800);;
		$(".descarga-virreyes").fadeOut(800);
		$(".descarga-petrarca").fadeOut(800);
		$(".descarga-palmas").fadeOut(800);
	})

	$(".boton-telefono").click(function(){
			$(".numero-telefono").fadeIn(1200);
		});


	$(".boton-vacantes").click(function(){
			$(".principal-bolsa").fadeOut(800);
			$(".vacantes-bolsa").delay(800).fadeIn(800);
	});

	$(".boton-practicas").click(function(){
			$(".principal-bolsa").fadeOut(800);
			$(".practicas-bolsa").delay(800).fadeIn(800);
	});

	$(".regresa").click(function(){
			$(".vacantes-bolsa").fadeOut(800);
			$(".practicas-bolsa").fadeOut(800);
			$(".principal-bolsa").delay(800).fadeIn(800);
	});

	$(".boton-vacantes").hover(function(){
			$(".boton-vacantes").css("text-decoration" , "line-through");
	});

	$(".boton-vacantes").mouseout(function(){
			$(".boton-vacantes").css("text-decoration", "none");
	});

	$(".boton-practicas").hover(function(){
			$(".boton-practicas").css("text-decoration" , "line-through");
	});
	$(".boton-practicas").mouseout(function(){
			$(".boton-practicas").css("text-decoration", "none");
	});


	$(".regresa").hover(function(){
			$(".regresa").css("text-decoration" , "line-through");
	});
	$(".regresa").mouseout(function(){
			$(".regresa").css("text-decoration", "none");
	});



//// GALERIA
$(".uno").click(function(){
			$(".galeria2").fadeOut(300);
			$(".galeria3").fadeOut(300);
			$(".galeria4").fadeOut(300);
			$(".galeria5").fadeOut(300);
			$(".galeria6").fadeOut(300);
			$(".galeria7").fadeOut(300);
			$(".galeria8").fadeOut(300);
			$(".galeria9").fadeOut(300);
			$(".galeria10").fadeOut(300);
			$(".galeria11").fadeOut(300);

			$(".galeria1").fadeIn(300);

			$(".dos-activo").css("display", "none");
			$(".tres-activo").css("display", "none");
			$(".cuatro-activo").css("display", "none");
			$(".cinco-activo").css("display", "none");
			$(".seis-activo").css("display", "none");
			$(".siete-activo").css("display", "none");
			$(".ocho-activo").css("display", "none");
			$(".nueve-activo").css("display", "none");
			$(".diez-activo").css("display", "none");
			$(".once-activo").css("display", "none");

			$(".uno-activo").css("display", "block");


			$(".dos").css("display", "block");
			$(".tres").css("display", "block");
			$(".cuatro").css("display", "block");
			$(".cinco").css("display", "block");
			$(".seis").css("display", "block");
			$(".siete").css("display", "block");
			$(".ocho").css("display", "block");
			$(".nueve").css("display", "block");
			$(".diez").css("display", "block");
			$(".once").css("display", "block");

			$(".uno").css("display", "none");
	});


	$(".dos").click(function(){
			$(".galeria1").fadeOut(300);
			$(".galeria3").fadeOut(300);
			$(".galeria4").fadeOut(300);
			$(".galeria5").fadeOut(300);
			$(".galeria6").fadeOut(300);
			$(".galeria7").fadeOut(300);
			$(".galeria8").fadeOut(300);
			$(".galeria9").fadeOut(300);
			$(".galeria10").fadeOut(300);
			$(".galeria11").fadeOut(300);

			$(".galeria2").fadeIn(300);

			$(".uno-activo").css("display", "none");
			$(".tres-activo").css("display", "none");
			$(".cuatro-activo").css("display", "none");
			$(".cinco-activo").css("display", "none");
			$(".seis-activo").css("display", "none");
			$(".siete-activo").css("display", "none");
			$(".ocho-activo").css("display", "none");
			$(".nueve-activo").css("display", "none");
			$(".diez-activo").css("display", "none");
			$(".once-activo").css("display", "none");

			$(".dos-activo").css("display", "block");


			$(".uno").css("display", "block");
			$(".tres").css("display", "block");
			$(".cuatro").css("display", "block");
			$(".cinco").css("display", "block");
			$(".seis").css("display", "block");
			$(".siete").css("display", "block");
			$(".ocho").css("display", "block");
			$(".nueve").css("display", "block");
			$(".diez").css("display", "block");
			$(".once").css("display", "block");

			$(".dos").css("display", "none");
	});

	$(".tres").click(function(){
			$(".galeria1").fadeOut(300);
			$(".galeria2").fadeOut(300);
			$(".galeria4").fadeOut(300);
			$(".galeria5").fadeOut(300);
			$(".galeria6").fadeOut(300);
			$(".galeria7").fadeOut(300);
			$(".galeria8").fadeOut(300);
			$(".galeria9").fadeOut(300);
			$(".galeria10").fadeOut(300);
			$(".galeria11").fadeOut(300);

			$(".galeria3").fadeIn(300);

			$(".uno-activo").css("display", "none");
			$(".dos-activo").css("display", "none");
			$(".cuatro-activo").css("display", "none");
			$(".cinco-activo").css("display", "none");
			$(".seis-activo").css("display", "none");
			$(".siete-activo").css("display", "none");
			$(".ocho-activo").css("display", "none");
			$(".nueve-activo").css("display", "none");
			$(".diez-activo").css("display", "none");
			$(".once-activo").css("display", "none");

			$(".tres-activo").css("display", "block");


			$(".uno").css("display", "block");
			$(".dos").css("display", "block");
			$(".cuatro").css("display", "block");
			$(".cinco").css("display", "block");
			$(".seis").css("display", "block");
			$(".siete").css("display", "block");
			$(".ocho").css("display", "block");
			$(".nueve").css("display", "block");
			$(".diez").css("display", "block");
			$(".once").css("display", "block");

			$(".tres").css("display", "none");
	});

$(".cuatro").click(function(){
			$(".galeria1").fadeOut(300);
			$(".galeria2").fadeOut(300);
			$(".galeria3").fadeOut(300);
			$(".galeria5").fadeOut(300);
			$(".galeria6").fadeOut(300);
			$(".galeria7").fadeOut(300);
			$(".galeria8").fadeOut(300);
			$(".galeria9").fadeOut(300);
			$(".galeria10").fadeOut(300);
			$(".galeria11").fadeOut(300);

			$(".galeria4").fadeIn(300);

			$(".uno-activo").css("display", "none");
			$(".dos-activo").css("display", "none");
			$(".tres-activo").css("display", "none");
			$(".cinco-activo").css("display", "none");
			$(".seis-activo").css("display", "none");
			$(".siete-activo").css("display", "none");
			$(".ocho-activo").css("display", "none");
			$(".nueve-activo").css("display", "none");
			$(".diez-activo").css("display", "none");
			$(".once-activo").css("display", "none");

			$(".cuatro-activo").css("display", "block");


			$(".uno").css("display", "block");
			$(".dos").css("display", "block");
			$(".tres").css("display", "block");
			$(".cinco").css("display", "block");
			$(".seis").css("display", "block");
			$(".siete").css("display", "block");
			$(".ocho").css("display", "block");
			$(".nueve").css("display", "block");
			$(".diez").css("display", "block");
			$(".once").css("display", "block");

			$(".cuatro").css("display", "none");
	});

$(".cinco").click(function(){
			$(".galeria1").fadeOut(300);
			$(".galeria2").fadeOut(300);
			$(".galeria3").fadeOut(300);
			$(".galeria4").fadeOut(300);
			$(".galeria6").fadeOut(300);
			$(".galeria7").fadeOut(300);
			$(".galeria8").fadeOut(300);
			$(".galeria9").fadeOut(300);
			$(".galeria10").fadeOut(300);
			$(".galeria11").fadeOut(300);

			$(".galeria5").fadeIn(300);

			$(".uno-activo").css("display", "none");
			$(".dos-activo").css("display", "none");
			$(".tres-activo").css("display", "none");
			$(".cuatro-activo").css("display", "none");
			$(".seis-activo").css("display", "none");
			$(".siete-activo").css("display", "none");
			$(".ocho-activo").css("display", "none");
			$(".nueve-activo").css("display", "none");
			$(".diez-activo").css("display", "none");
			$(".once-activo").css("display", "none");

			$(".cinco-activo").css("display", "block");


			$(".uno").css("display", "block");
			$(".dos").css("display", "block");
			$(".tres").css("display", "block");
			$(".cuatro").css("display", "block");
			$(".seis").css("display", "block");
			$(".siete").css("display", "block");
			$(".ocho").css("display", "block");
			$(".nueve").css("display", "block");
			$(".diez").css("display", "block");
			$(".once").css("display", "block");

			$(".cinco").css("display", "none");
	});

$(".seis").click(function(){
			$(".galeria1").fadeOut(300);
			$(".galeria2").fadeOut(300);
			$(".galeria3").fadeOut(300);
			$(".galeria4").fadeOut(300);
			$(".galeria5").fadeOut(300);
			$(".galeria7").fadeOut(300);
			$(".galeria8").fadeOut(300);
			$(".galeria9").fadeOut(300);
			$(".galeria10").fadeOut(300);
			$(".galeria11").fadeOut(300);

			$(".galeria6").fadeIn(300);

			$(".uno-activo").css("display", "none");
			$(".dos-activo").css("display", "none");
			$(".tres-activo").css("display", "none");
			$(".cuatro-activo").css("display", "none");
			$(".cinco-activo").css("display", "none");
			$(".siete-activo").css("display", "none");
			$(".ocho-activo").css("display", "none");
			$(".nueve-activo").css("display", "none");
			$(".diez-activo").css("display", "none");
			$(".once-activo").css("display", "none");

			$(".seis-activo").css("display", "block");


			$(".uno").css("display", "block");
			$(".dos").css("display", "block");
			$(".tres").css("display", "block");
			$(".cuatro").css("display", "block");
			$(".cinco").css("display", "block");
			$(".siete").css("display", "block");
			$(".ocho").css("display", "block");
			$(".nueve").css("display", "block");
			$(".diez").css("display", "block");
			$(".once").css("display", "block");

			$(".seis").css("display", "none");
	});

$(".siete").click(function(){
			$(".galeria1").fadeOut(300);
			$(".galeria2").fadeOut(300);
			$(".galeria3").fadeOut(300);
			$(".galeria4").fadeOut(300);
			$(".galeria5").fadeOut(300);
			$(".galeria6").fadeOut(300);
			$(".galeria8").fadeOut(300);
			$(".galeria9").fadeOut(300);
			$(".galeria10").fadeOut(300);
			$(".galeria11").fadeOut(300);

			$(".galeria7").fadeIn(300);

			$(".uno-activo").css("display", "none");
			$(".dos-activo").css("display", "none");
			$(".tres-activo").css("display", "none");
			$(".cuatro-activo").css("display", "none");
			$(".cinco-activo").css("display", "none");
			$(".seis-activo").css("display", "none");
			$(".ocho-activo").css("display", "none");
			$(".nueve-activo").css("display", "none");
			$(".diez-activo").css("display", "none");
			$(".once-activo").css("display", "none");

			$(".siete-activo").css("display", "block");


			$(".uno").css("display", "block");
			$(".dos").css("display", "block");
			$(".tres").css("display", "block");
			$(".cuatro").css("display", "block");
			$(".cinco").css("display", "block");
			$(".seis").css("display", "block");
			$(".ocho").css("display", "block");
			$(".nueve").css("display", "block");
			$(".diez").css("display", "block");
			$(".once").css("display", "block");

			$(".siete").css("display", "none");
	});

$(".ocho").click(function(){
			$(".galeria1").fadeOut(300);
			$(".galeria2").fadeOut(300);
			$(".galeria3").fadeOut(300);
			$(".galeria4").fadeOut(300);
			$(".galeria5").fadeOut(300);
			$(".galeria6").fadeOut(300);
			$(".galeria7").fadeOut(300);
			$(".galeria9").fadeOut(300);
			$(".galeria10").fadeOut(300);
			$(".galeria11").fadeOut(300);

			$(".galeria8").fadeIn(300);

			$(".uno-activo").css("display", "none");
			$(".dos-activo").css("display", "none");
			$(".tres-activo").css("display", "none");
			$(".cuatro-activo").css("display", "none");
			$(".cinco-activo").css("display", "none");
			$(".seis-activo").css("display", "none");
			$(".siete-activo").css("display", "none");
			$(".nueve-activo").css("display", "none");
			$(".diez-activo").css("display", "none");
			$(".once-activo").css("display", "none");

			$(".ocho-activo").css("display", "block");


			$(".uno").css("display", "block");
			$(".dos").css("display", "block");
			$(".tres").css("display", "block");
			$(".cuatro").css("display", "block");
			$(".cinco").css("display", "block");
			$(".seis").css("display", "block");
			$(".siete").css("display", "block");
			$(".nueve").css("display", "block");
			$(".diez").css("display", "block");
			$(".once").css("display", "block");

			$(".ocho").css("display", "none");
	});


$(".nueve").click(function(){
			$(".galeria1").fadeOut(300);
			$(".galeria2").fadeOut(300);
			$(".galeria3").fadeOut(300);
			$(".galeria4").fadeOut(300);
			$(".galeria5").fadeOut(300);
			$(".galeria6").fadeOut(300);
			$(".galeria7").fadeOut(300);
			$(".galeria8").fadeOut(300);
			$(".galeria10").fadeOut(300);
			$(".galeria11").fadeOut(300);

			$(".galeria9").fadeIn(300);

			$(".uno-activo").css("display", "none");
			$(".dos-activo").css("display", "none");
			$(".tres-activo").css("display", "none");
			$(".cuatro-activo").css("display", "none");
			$(".cinco-activo").css("display", "none");
			$(".seis-activo").css("display", "none");
			$(".siete-activo").css("display", "none");
			$(".ocho-activo").css("display", "none");
			$(".diez-activo").css("display", "none");
			$(".once-activo").css("display", "none");

			$(".nueve-activo").css("display", "block");


			$(".uno").css("display", "block");
			$(".dos").css("display", "block");
			$(".tres").css("display", "block");
			$(".cuatro").css("display", "block");
			$(".cinco").css("display", "block");
			$(".seis").css("display", "block");
			$(".siete").css("display", "block");
			$(".ocho").css("display", "block");
			$(".diez").css("display", "block");
			$(".once").css("display", "block");

			$(".nueve").css("display", "none");
	});

$(".diez").click(function(){
			$(".galeria1").fadeOut(300);
			$(".galeria2").fadeOut(300);
			$(".galeria3").fadeOut(300);
			$(".galeria4").fadeOut(300);
			$(".galeria5").fadeOut(300);
			$(".galeria6").fadeOut(300);
			$(".galeria7").fadeOut(300);
			$(".galeria8").fadeOut(300);
			$(".galeria9").fadeOut(300);
			$(".galeria11").fadeOut(300);

			$(".galeria10").fadeIn(300);

			$(".uno-activo").css("display", "none");
			$(".dos-activo").css("display", "none");
			$(".tres-activo").css("display", "none");
			$(".cuatro-activo").css("display", "none");
			$(".cinco-activo").css("display", "none");
			$(".seis-activo").css("display", "none");
			$(".siete-activo").css("display", "none");
			$(".ocho-activo").css("display", "none");
			$(".nueve-activo").css("display", "none");
			$(".once-activo").css("display", "none");

			$(".diez-activo").css("display", "block");


			$(".uno").css("display", "block");
			$(".dos").css("display", "block");
			$(".tres").css("display", "block");
			$(".cuatro").css("display", "block");
			$(".cinco").css("display", "block");
			$(".seis").css("display", "block");
			$(".siete").css("display", "block");
			$(".ocho").css("display", "block");
			$(".nueve").css("display", "block");
			$(".once").css("display", "block");

			$(".diez").css("display", "none");
	});

$(".once").click(function(){
			$(".galeria1").fadeOut(300);
			$(".galeria2").fadeOut(300);
			$(".galeria3").fadeOut(300);
			$(".galeria4").fadeOut(300);
			$(".galeria5").fadeOut(300);
			$(".galeria6").fadeOut(300);
			$(".galeria7").fadeOut(300);
			$(".galeria8").fadeOut(300);
			$(".galeria9").fadeOut(300);
			$(".galeria10").fadeOut(300);

			$(".galeria11").fadeIn(300);

			$(".uno-activo").css("display", "none");
			$(".dos-activo").css("display", "none");
			$(".tres-activo").css("display", "none");
			$(".cuatro-activo").css("display", "none");
			$(".cinco-activo").css("display", "none");
			$(".seis-activo").css("display", "none");
			$(".siete-activo").css("display", "none");
			$(".ocho-activo").css("display", "none");
			$(".nueve-activo").css("display", "none");
			$(".diez-activo").css("display", "none");

			$(".once-activo").css("display", "block");


			$(".uno").css("display", "block");
			$(".dos").css("display", "block");
			$(".tres").css("display", "block");
			$(".cuatro").css("display", "block");
			$(".cinco").css("display", "block");
			$(".seis").css("display", "block");
			$(".siete").css("display", "block");
			$(".ocho").css("display", "block");
			$(".nueve").css("display", "block");
			$(".diez").css("display", "block");

			$(".once").css("display", "none");
	});


/// DERECHAS
	$(".derecha-galeria1").click(function(){
		$(".galeria1").fadeOut(300);
		$(".galeria2").fadeIn(300);
		$(".derecha-galeria1").css("display", "none");
		$(".izquierda-galeria1").css("display", "none");
		$(".derecha-galeria2").css("display", "block");
		$(".izquierda-galeria2").css("display", "block");
		$(".texto-credo").fadeOut(300);
	});
	
	$(".derecha-galeria2").click(function(){
		$(".galeria2").fadeOut(300);
		$(".galeria3").fadeIn(300);
		$(".derecha-galeria2").css("display", "none");
		$(".izquierda-galeria2").css("display", "none");
		$(".derecha-galeria3").css("display", "block");
		$(".izquierda-galeria3").css("display", "block");
	});
	
	$(".derecha-galeria3").click(function(){
		$(".galeria3").fadeOut(300);
		$(".galeria4").fadeIn(300);
		$(".derecha-galeria3").css("display", "none");
		$(".izquierda-galeria3").css("display", "none");
		$(".derecha-galeria4").css("display", "block");
		$(".izquierda-galeria4").css("display", "block");
	});
	
	$(".derecha-galeria4").click(function(){
		$(".galeria4").fadeOut(300);
		$(".galeria5").fadeIn(300);
		$(".derecha-galeria4").css("display", "none");
		$(".izquierda-galeria4").css("display", "none");
		$(".derecha-galeria5").css("display", "block");
		$(".izquierda-galeria5").css("display", "block");
	});
	
	$(".derecha-galeria5").click(function(){
		$(".galeria5").fadeOut(300);
		$(".galeria6").fadeIn(300);
		$(".derecha-galeria5").css("display", "none");
		$(".izquierda-galeria5").css("display", "none");
		$(".derecha-galeria6").css("display", "block");
		$(".izquierda-galeria6").css("display", "block");
	});
	
	$(".derecha-galeria6").click(function(){
		$(".galeria6").fadeOut(300);
		$(".galeria7").fadeIn(300);
		$(".derecha-galeria6").css("display", "none");
		$(".izquierda-galeria6").css("display", "none");
		$(".derecha-galeria7").css("display", "block");
		$(".izquierda-galeria7").css("display", "block");
	});
	
	$(".derecha-galeria7").click(function(){
		$(".galeria7").fadeOut(300);
		$(".galeria8").fadeIn(300);
		$(".derecha-galeria7").css("display", "none");
		$(".izquierda-galeria7").css("display", "none");
		$(".derecha-galeria8").css("display", "block");
		$(".izquierda-galeria8").css("display", "block");
	});
	
	$(".derecha-galeria8").click(function(){
		$(".galeria8").fadeOut(300);
		$(".galeria9").fadeIn(300);
		$(".derecha-galeria8").css("display", "none");
		$(".izquierda-galeria8").css("display", "none");
		$(".derecha-galeria9").css("display", "block");
		$(".izquierda-galeria9").css("display", "block");
	});
	
	$(".derecha-galeria9").click(function(){
		$(".galeria9").fadeOut(300);
		$(".galeria10").fadeIn(300);
		$(".derecha-galeria9").css("display", "none");
		$(".izquierda-galeria9").css("display", "none");
		$(".derecha-galeria10").css("display", "block");
		$(".izquierda-galeria10").css("display", "block");
	});
	
	$(".derecha-galeria10").click(function(){
		$(".galeria10").fadeOut(300);
		$(".galeria11").fadeIn(300);
		$(".derecha-galeria10").css("display", "none");
		$(".izquierda-galeria10").css("display", "none");
		$(".derecha-galeria11").css("display", "block");
		$(".izquierda-galeria11").css("display", "block");
	});
	
	$(".derecha-galeria11").click(function(){
		$(".galeria11").fadeOut(300);
		$(".galeria1").fadeIn(300);
		$(".derecha-galeria11").css("display", "none");
		$(".izquierda-galeria11").css("display", "none");
		$(".derecha-galeria1").css("display", "block");
		$(".izquierda-galeria1").css("display", "block");
		$(".texto-credo").fadeIn(300);
	});
	
	/// IZQUIERDAS 
	
	$(".izquierda-galeria1").click(function(){
		$(".galeria1").fadeOut(300);
		$(".galeria11").fadeIn(300);
		$(".derecha-galeria1").css("display", "none");
		$(".izquierda-galeria1").css("display", "none");
		$(".derecha-galeria11").css("display", "block");
		$(".izquierda-galeria11").css("display", "block");
		$(".texto-credo").fadeOut(300);
	});
	
	$(".izquierda-galeria11").click(function(){
		$(".galeria11").fadeOut(300);
		$(".galeria10").fadeIn(300);
		$(".derecha-galeria11").css("display", "none");
		$(".izquierda-galeria11").css("display", "none");
		$(".derecha-galeria10").css("display", "block");
		$(".izquierda-galeria10").css("display", "block");
	});
	
	$(".izquierda-galeria10").click(function(){
		$(".galeria10").fadeOut(300);
		$(".galeria9").fadeIn(300);
		$(".derecha-galeria10").css("display", "none");
		$(".izquierda-galeria10").css("display", "none");
		$(".derecha-galeria9").css("display", "block");
		$(".izquierda-galeria9").css("display", "block");
	});
	
	$(".izquierda-galeria9").click(function(){
		$(".galeria9").fadeOut(300);
		$(".galeria8").fadeIn(300);
		$(".derecha-galeria9").css("display", "none");
		$(".izquierda-galeria9").css("display", "none");
		$(".derecha-galeria8").css("display", "block");
		$(".izquierda-galeria8").css("display", "block");
	});
	
	$(".izquierda-galeria8").click(function(){
		$(".galeria8").fadeOut(300);
		$(".galeria7").fadeIn(300);
		$(".derecha-galeria8").css("display", "none");
		$(".izquierda-galeria8").css("display", "none");
		$(".derecha-galeria7").css("display", "block");
		$(".izquierda-galeria7").css("display", "block");
	});
	
	$(".izquierda-galeria7").click(function(){
		$(".galeria7").fadeOut(300);
		$(".galeria6").fadeIn(300);
		$(".derecha-galeria7").css("display", "none");
		$(".izquierda-galeria7").css("display", "none");
		$(".derecha-galeria6").css("display", "block");
		$(".izquierda-galeria6").css("display", "block");
	});
	
	$(".izquierda-galeria6").click(function(){
		$(".galeria6").fadeOut(300);
		$(".galeria5").fadeIn(300);
		$(".derecha-galeria6").css("display", "none");
		$(".izquierda-galeria6").css("display", "none");
		$(".derecha-galeria5").css("display", "block");
		$(".izquierda-galeria5").css("display", "block");
	});
	
	$(".izquierda-galeria5").click(function(){
		$(".galeria5").fadeOut(300);
		$(".galeria4").fadeIn(300);
		$(".derecha-galeria5").css("display", "none");
		$(".izquierda-galeria5").css("display", "none");
		$(".derecha-galeria4").css("display", "block");
		$(".izquierda-galeria4").css("display", "block");
	});
	
	$(".izquierda-galeria4").click(function(){
		$(".galeria4").fadeOut(300);
		$(".galeria3").fadeIn(300);
		$(".derecha-galeria4").css("display", "none");
		$(".izquierda-galeria4").css("display", "none");
		$(".derecha-galeria3").css("display", "block");
		$(".izquierda-galeria3").css("display", "block");
	});
	
	$(".izquierda-galeria3").click(function(){
		$(".galeria3").fadeOut(300);
		$(".galeria2").fadeIn(300);
		$(".derecha-galeria3").css("display", "none");
		$(".izquierda-galeria3").css("display", "none");
		$(".derecha-galeria2").css("display", "block");
		$(".izquierda-galeria2").css("display", "block");
		
	});
	
		$(".izquierda-galeria2").click(function(){
		$(".galeria2").fadeOut(300);
		$(".galeria1").fadeIn(300);
		$(".derecha-galeria2").css("display", "none");
		$(".izquierda-galeria2").css("display", "none");
		$(".derecha-galeria1").css("display", "block");
		$(".izquierda-galeria1").css("display", "block");
		$(".texto-credo").fadeIn(300);
	});


////////

$(".cierra-credo").click(function(){
		$(".texto-credo").fadeOut(800);
		$(".cierra-credo").fadeOut(800);
	});

	$(".navegacion").click(function(){
		$(".header").fadeIn(1200);
	});

	$(".botones-menu-navegacion").click(function(){
		$(".header").fadeOut(500);
	});
	$(".primer-boton-navegacion").click(function(){
		$(".header").fadeOut(500);
	});
	

	$(".boton-virreyes").hover(function(){
			$(".boton-virreyes").css("text-decoration" , "line-through");
	});
	$(".boton-virreyes").mouseout(function(){
			$(".boton-virreyes").css("text-decoration", "none");
	});

	$(".boton-petrarca").hover(function(){
			$(".boton-petrarca").css("text-decoration" , "line-through");
	});
	$(".boton-petrarca").mouseout(function(){
			$(".boton-petrarca").css("text-decoration", "none");
	});

	$(".boton-palmas").hover(function(){
			$(".boton-palmas").css("text-decoration" , "line-through");
	});
	$(".boton-palmas").mouseout(function(){
			$(".boton-palmas").css("text-decoration", "none");
	});

	$(".boton-roma").hover(function(){
			$(".boton-roma").css("text-decoration" , "line-through");
	});
	$(".boton-roma").mouseout(function(){
			$(".boton-roma").css("text-decoration", "none");
	});

	

	$(".boton-virreyes-ubicacion").hover(function(){
			$(".boton-virreyes-ubicacion").css("text-decoration" , "line-through");
	});
	$(".boton-virreyes-ubicacion").mouseout(function(){
			$(".boton-virreyes-ubicacion").css("text-decoration", "none");
	});

	$(".boton-petrarca-ubicacion").hover(function(){
			$(".boton-petrarca-ubicacion").css("text-decoration" , "line-through");
	});
	$(".boton-petrarca-ubicacion").mouseout(function(){
			$(".boton-petrarca-ubicacion").css("text-decoration", "none");
	});

	$(".boton-palmas-ubicacion").hover(function(){
			$(".boton-palmas-ubicacion").css("text-decoration" , "line-through");
	});
	$(".boton-palmas-ubicacion").mouseout(function(){
			$(".boton-palmas-ubicacion").css("text-decoration", "none");
	});

	$(".boton-roma-ubicacion").hover(function(){
			$(".boton-roma-ubicacion").css("text-decoration" , "line-through");
	});
	$(".boton-roma-ubicacion").mouseout(function(){
			$(".boton-roma-ubicacion").css("text-decoration", "none");
	});


	$(".boton-virreyes-ubicacion").click(function(){
		$(".boton-virreyes-ubicacion").css("color" , "#E63328");
		$(".boton-virreyes-ubicacion").css("text-decoration" , "line-through");

		$(".boton-petrarca-ubicacion").css("color" , "#4C4B4D");
		$(".boton-petrarca-ubicacion").css("text-decoration" , "none");
		$(".boton-palmas-ubicacion").css("color" , "#4C4B4D");
		$(".boton-palmas-ubicacion").css("text-decoration" , "none");
		$(".boton-roma-ubicacion").css("color" , "#4C4B4D");
		$(".boton-roma-ubicacion").css("text-decoration" , "none");


		$(".ubicacion-petrarca").fadeOut(800);
		$(".ubicacion-palmas").fadeOut(800);
		$(".ubicacion-roma").fadeOut(800);

		$(".ubicacion-virreyes").delay(800).fadeIn(800);

		$(".mapa-petrarca").fadeOut(800);
		$(".mapa-palmas").fadeOut(800);
		$(".mapa-roma").fadeOut(800);

		$(".mapa-virreyes").delay(800).fadeIn(800);
	});	


	$(".boton-petrarca-ubicacion").click(function(){
		$(".boton-petrarca-ubicacion").css("color" , "#E63328");
		$(".boton-petrarca-ubicacion").css("text-decoration" , "line-through");

		$(".boton-virreyes-ubicacion").css("color" , "#4C4B4D");
		$(".boton-virreyes-ubicacion").css("text-decoration" , "none");
		$(".boton-palmas-ubicacion").css("color" , "#4C4B4D");
		$(".boton-palmas-ubicacion").css("text-decoration" , "none");
		$(".boton-roma-ubicacion").css("color" , "#4C4B4D");
		$(".boton-roma-ubicacion").css("text-decoration" , "none");


		$(".ubicacion-virreyes").fadeOut(800);
		$(".ubicacion-palmas").fadeOut(800);
		$(".ubicacion-roma").fadeOut(800);

		$(".ubicacion-petrarca").delay(800).fadeIn(800);

		$(".mapa-virreyes").fadeOut(800);
		$(".mapa-palmas").fadeOut(800);
		$(".mapa-roma").fadeOut(800);

		$(".mapa-petrarca").delay(800).fadeIn(800);
	});


	$(".boton-palmas-ubicacion").click(function(){
		$(".boton-palmas-ubicacion").css("color" , "#E63328");
		$(".boton-palmas-ubicacion").css("text-decoration" , "line-through");

		$(".boton-virreyes-ubicacion").css("color" , "#4C4B4D");
		$(".boton-virreyes-ubicacion").css("text-decoration" , "none");
		$(".boton-petrarca-ubicacion").css("color" , "#4C4B4D");
		$(".boton-petrarca-ubicacion").css("text-decoration" , "none");
		$(".boton-roma-ubicacion").css("color" , "#4C4B4D");
		$(".boton-roma-ubicacion").css("text-decoration" , "none");


		$(".ubicacion-virreyes").fadeOut(800);
		$(".ubicacion-petrarca").fadeOut(800);
		$(".ubicacion-roma").fadeOut(800);

		$(".ubicacion-palmas").delay(800).fadeIn(800);

		$(".mapa-virreyes").fadeOut(800);
		$(".mapa-petrarca").fadeOut(800);
		$(".mapa-roma").fadeOut(800);

		$(".mapa-palmas").delay(800).fadeIn(800);
	});

	$(".boton-roma-ubicacion").click(function(){
		$(".boton-roma-ubicacion").css("color" , "#E63328");
		$(".boton-roma-ubicacion").css("text-decoration" , "line-through");

		$(".boton-virreyes-ubicacion").css("color" , "#4C4B4D");
		$(".boton-virreyes-ubicacion").css("text-decoration" , "none");
		$(".boton-petrarca-ubicacion").css("color" , "#4C4B4D");
		$(".boton-petrarca-ubicacion").css("text-decoration" , "none");
		$(".boton-palmas-ubicacion").css("color" , "#4C4B4D");
		$(".boton-palmas-ubicacion").css("text-decoration" , "none");


		$(".ubicacion-virreyes").fadeOut(800);
		$(".ubicacion-petrarca").fadeOut(800);
		$(".ubicacion-palmas").fadeOut(800);

		$(".ubicacion-roma").delay(800).fadeIn(800);

		$(".mapa-virreyes").fadeOut(800);
		$(".mapa-petrarca").fadeOut(800);
		$(".mapa-palmas").fadeOut(800);

		$(".mapa-roma").delay(800).fadeIn(800);
	});

	$(".boton-facturacion").click(function(){
			$(".contiene-factura").fadeIn(1200);
	});

	$(".cerrar").click(function(){
			$(".contiene-factura").fadeOut(800);
	});

	$(".boton-llenar").hover(function(){
			$(".boton-llenar").css("text-decoration" , "line-through");
	});
	$(".boton-llenar").mouseout(function(){
			$(".boton-llenar").css("text-decoration", "none");
	});
	
	$(".boton-llenar").click(function(){
			$(".formulario-catering").fadeIn(1200);
	});

	$(".cerrar-catering").click(function(){
			$(".formulario-catering").fadeOut(800);
	});


	$(".cerrar-newsletter").click(function(){
			$(".newsletter").fadeOut(800);
	});



	$(".cerrar-canasta").click(function(){
			$(".popup-canasta").fadeOut(800);
			$(".fondo-falso").fadeOut(800);
	});

	$(".fondo-falso").click(function(){
			$(".popup-canasta").fadeOut(800);
			$(".fondo-falso").fadeOut(800);
	});
	
	////////////
	
	$(".mapa-virreyes-domicilio").click(function(){
			$(".mapa-domicilio-virreyes").fadeIn(800);
			$(".fondo-falso-virreyes").fadeIn(800);
	});
	
	$(".mapa-petrarca-domicilio").click(function(){
			$(".mapa-domicilio-petrarca").fadeIn(800);
			$(".fondo-falso-petrarca").fadeIn(800);
	});
	
	$(".mapa-palmas-domicilio").click(function(){
			$(".mapa-domicilio-palmas").fadeIn(800);
			$(".fondo-falso-palmas").fadeIn(800);
	});
	
	$(".mapa-roma-domicilio").click(function(){
			$(".mapa-domicilio-roma").fadeIn(800);
			$(".fondo-falso-roma").fadeIn(800);
	});
	
	
	////
	
	$(".fondo-falso-virreyes").click(function(){
			$(".mapa-domicilio-virreyes").fadeOut(800);
			$(".fondo-falso-virreyes").fadeOut(800);
	});
	
	$(".fondo-falso-petrarca").click(function(){
			$(".mapa-domicilio-petrarca").fadeOut(800);
			$(".fondo-falso-petrarca").fadeOut(800);
	});
	
	$(".fondo-falso-palmas").click(function(){
			$(".mapa-domicilio-palmas").fadeOut(800);
			$(".fondo-falso-palmas").fadeOut(800);
	});
	
	$(".fondo-falso-roma").click(function(){
			$(".mapa-domicilio-roma").fadeOut(800);
			$(".fondo-falso-roma").fadeOut(800);
	});
	
	
	$(".cerrar-domicilio-virreyes").click(function(){
			$(".mapa-domicilio-virreyes").fadeOut(800);
			$(".fondo-falso-virreyes").fadeOut(800);
	});
	
	$(".cerrar-domicilio-petrarca").click(function(){
			$(".mapa-domicilio-petrarca").fadeOut(800);
			$(".fondo-falso-petrarca").fadeOut(800);
	});
	
	$(".cerrar-domicilio-palmas").click(function(){
			$(".mapa-domicilio-palmas").fadeOut(800);
			$(".fondo-falso-palmas").fadeOut(800);
	});
	
	$(".cerrar-domicilio-roma").click(function(){
			$(".mapa-domicilio-roma").fadeOut(800);
			$(".fondo-falso-roma").fadeOut(800);
	});
	
	$(".cerrar-uber").click(function(){
			$(".uber").fadeOut(800);
	});
	

});





