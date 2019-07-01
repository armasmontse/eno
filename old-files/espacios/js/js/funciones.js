$(document).ready(function(){

//parallax effect initialization
	$('.home').parallax("50%", 0.5);
	$('.menu').parallax("50%", 0.5);
	$('.imagen3').parallax("50%", 0.5);


	var tiempo_inicio_anim = 200;
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
	
	//Empezamos la animación a los 200 milisegundos
	setTimeout(function() {
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
			$(".galeria2").fadeOut(500);
			$(".galeria3").fadeOut(500);
			$(".galeria4").fadeOut(500);
			$(".galeria5").fadeOut(500);
			$(".galeria6").fadeOut(500);
			$(".galeria7").fadeOut(500);
			$(".galeria8").fadeOut(500);
			$(".galeria9").fadeOut(500);
			$(".galeria10").fadeOut(500);
			$(".galeria11").fadeOut(500);

			$(".galeria1").delay(500).fadeIn(500);

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
			$(".galeria1").fadeOut(500);
			$(".galeria3").fadeOut(500);
			$(".galeria4").fadeOut(500);
			$(".galeria5").fadeOut(500);
			$(".galeria6").fadeOut(500);
			$(".galeria7").fadeOut(500);
			$(".galeria8").fadeOut(500);
			$(".galeria9").fadeOut(500);
			$(".galeria10").fadeOut(500);
			$(".galeria11").fadeOut(500);

			$(".galeria2").delay(500).fadeIn(500);

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
			$(".galeria1").fadeOut(500);
			$(".galeria2").fadeOut(500);
			$(".galeria4").fadeOut(500);
			$(".galeria5").fadeOut(500);
			$(".galeria6").fadeOut(500);
			$(".galeria7").fadeOut(500);
			$(".galeria8").fadeOut(500);
			$(".galeria9").fadeOut(500);
			$(".galeria10").fadeOut(500);
			$(".galeria11").fadeOut(500);

			$(".galeria3").delay(500).fadeIn(500);

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
			$(".galeria1").fadeOut(500);
			$(".galeria2").fadeOut(500);
			$(".galeria3").fadeOut(500);
			$(".galeria5").fadeOut(500);
			$(".galeria6").fadeOut(500);
			$(".galeria7").fadeOut(500);
			$(".galeria8").fadeOut(500);
			$(".galeria9").fadeOut(500);
			$(".galeria10").fadeOut(500);
			$(".galeria11").fadeOut(500);

			$(".galeria4").delay(500).fadeIn(500);

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
			$(".galeria1").fadeOut(500);
			$(".galeria2").fadeOut(500);
			$(".galeria3").fadeOut(500);
			$(".galeria4").fadeOut(500);
			$(".galeria6").fadeOut(500);
			$(".galeria7").fadeOut(500);
			$(".galeria8").fadeOut(500);
			$(".galeria9").fadeOut(500);
			$(".galeria10").fadeOut(500);
			$(".galeria11").fadeOut(500);

			$(".galeria5").delay(500).fadeIn(500);

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
			$(".galeria1").fadeOut(500);
			$(".galeria2").fadeOut(500);
			$(".galeria3").fadeOut(500);
			$(".galeria4").fadeOut(500);
			$(".galeria5").fadeOut(500);
			$(".galeria7").fadeOut(500);
			$(".galeria8").fadeOut(500);
			$(".galeria9").fadeOut(500);
			$(".galeria10").fadeOut(500);
			$(".galeria11").fadeOut(500);

			$(".galeria6").delay(500).fadeIn(500);

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
			$(".galeria1").fadeOut(500);
			$(".galeria2").fadeOut(500);
			$(".galeria3").fadeOut(500);
			$(".galeria4").fadeOut(500);
			$(".galeria5").fadeOut(500);
			$(".galeria6").fadeOut(500);
			$(".galeria8").fadeOut(500);
			$(".galeria9").fadeOut(500);
			$(".galeria10").fadeOut(500);
			$(".galeria11").fadeOut(500);

			$(".galeria7").delay(500).fadeIn(500);

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
			$(".galeria1").fadeOut(500);
			$(".galeria2").fadeOut(500);
			$(".galeria3").fadeOut(500);
			$(".galeria4").fadeOut(500);
			$(".galeria5").fadeOut(500);
			$(".galeria6").fadeOut(500);
			$(".galeria7").fadeOut(500);
			$(".galeria9").fadeOut(500);
			$(".galeria10").fadeOut(500);
			$(".galeria11").fadeOut(500);

			$(".galeria8").delay(500).fadeIn(500);

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
			$(".galeria1").fadeOut(500);
			$(".galeria2").fadeOut(500);
			$(".galeria3").fadeOut(500);
			$(".galeria4").fadeOut(500);
			$(".galeria5").fadeOut(500);
			$(".galeria6").fadeOut(500);
			$(".galeria7").fadeOut(500);
			$(".galeria8").fadeOut(500);
			$(".galeria10").fadeOut(500);
			$(".galeria11").fadeOut(500);

			$(".galeria9").delay(500).fadeIn(500);

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
			$(".galeria1").fadeOut(500);
			$(".galeria2").fadeOut(500);
			$(".galeria3").fadeOut(500);
			$(".galeria4").fadeOut(500);
			$(".galeria5").fadeOut(500);
			$(".galeria6").fadeOut(500);
			$(".galeria7").fadeOut(500);
			$(".galeria8").fadeOut(500);
			$(".galeria9").fadeOut(500);
			$(".galeria11").fadeOut(500);

			$(".galeria10").delay(500).fadeIn(500);

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
			$(".galeria1").fadeOut(500);
			$(".galeria2").fadeOut(500);
			$(".galeria3").fadeOut(500);
			$(".galeria4").fadeOut(500);
			$(".galeria5").fadeOut(500);
			$(".galeria6").fadeOut(500);
			$(".galeria7").fadeOut(500);
			$(".galeria8").fadeOut(500);
			$(".galeria9").fadeOut(500);
			$(".galeria10").fadeOut(500);

			$(".galeria11").delay(500).fadeIn(500);

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

			$(".onche-activo").css("display", "block");


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

});




