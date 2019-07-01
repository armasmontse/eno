<?php include 'functions.php'; ?>
<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<title>ENO</title>

	<meta name="description" content="" />
	<meta name="keywords" content="" />
	<meta name="author" content="humans.txt">

	<!-- <?php include_once '../inc/favicon.php' ?> -->

	<!-- Facebook Metadata /-->
	<meta property="fb:page_id" content="" />
	<meta property="og:image" content="" />
	<meta property="og:description" content=""/>
	<meta property="og:title" content=""/>

	<!-- Google+ Metadata /-->
	<meta itemprop="name" content="">
	<meta itemprop="description" content="">
	<meta itemprop="image" content="">

	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1">

	<link href="../css/mazorca.css" rel="stylesheet" type="text/css" />
	
	<script
		src="https://code.jquery.com/jquery-2.2.4.min.js"
		integrity="sha256-BbhdlvQf/xTY9gja0Dq3HiwQF8LaCRTXxZKRutelT44="
		crossorigin="anonymous">
	</script>

	<!-- Script micorriza.js -->
	<script src="../js/functions.js"></script>
	
</head>
<body>

	<!--[if gt IE 8]><div style="z-index: 1000; padding: 5px 0; text-align: center; position: absolute; top: 0; left: 0; width: 100%; background-color: #312822;"><p style="font-family: Arial, Helvetica, sans-serif; font-size: 16px; color: white;">Consider <a style="color: #EA7640;
	text-decoration: underline;" href="http://www.google.com/intl/es/chrome/browser/" target="_blank">updating your browser</a> in order to render this site correctly.</p></div><!-->
	<!--<![endif]-->

	
	<!-- Aquí abre el main-wrap -->
	<div class="main-wrap">
		<!-- M e n u -->
		<header class="header" id="header__JS">
			<div class="header__container">				
				<button class="header__btn header__btn_JS">
					<svg  xmlns="http://www.w3.org/2000/svg" viewBox="0 0 31.68 29.1">
						<defs>
							<style>.cls-1{fill:#fff;}</style>
						</defs>
						<title>Botón para abrir menu</title>
						<g id="Capa_2" data-name="Capa 2">
							<g id="Layer_1" data-name="Layer 1">
								<rect class="cls-1" y="24.48" width="31.68" height="4.62"/>
								<rect class="cls-1" y="12.24" width="31.68" height="4.62"/>
								<rect class="cls-1" width="31.68" height="4.62"/>
							</g>
						</g>
					</svg>
				</button>

				<div class="header__brand">
					<a class="header__logo" href="<?php echo THEMEURL ?>home.php">
						<svg class="header__logo--image" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 220 68.46">
							<title>Logotipo Eno</title>
							<g id="Capa_2" data-name="Capa 2">
								<g id="Layer_1" data-name="Layer 1">
									<path class="cls-1" d="M19,29.92c-2.25,0-6.82-.46-7.83.92-1.26,1.72-1.06,4.45-1.06,4.85,0,15.45,8.46,23,21,23a36.32,36.32,0,0,0,17-4.23c.54-.39,3.17-2.24,3.71-2.24.79,0,.79,1.06.79,1.33s-.54,7.25-1.85,8.71-11.14,6.21-20.92,6.21C15.9,68.46,0,58.94,0,37,0,21.54,8,.4,31.61.4c9.66,0,14,4.74,16.56,7.37,4.52,4.61,6.83,12.4,6.83,16,0,5.69-3.08,6.18-8.1,6.18ZM13,23c0,.92.7,1.32,4.14,1.32.66,0,13.43-.26,22.42-1.45,4.88-.66,5.44-1.46,5.42-3C44.92,16,40.83,7.13,30.83,7.27S13,17.76,13,23"/>
									<path class="cls-1" d="M187.9,68.46c-10.43,0-29.87-6.74-29.87-32.64C158,18.11,168.87.4,191.73.4,203.88.4,220,9.92,220,32.25c0,24.71-17.84,36.2-32.1,36.2m-1.19-59.6C176.67,8.86,169,19,169,32.66,169,50.75,181.15,60,190.67,60c8.06,0,18.5-6,18.5-22.87,0-13.59-7.27-28.27-22.46-28.27"/>
									<path id="_Trazado_" data-name="&lt;Trazado&gt;" class="cls-1" d="M85.11.4c.27,0,1.73-.4,2.26-.4,2.38,0,2.38,3.84,2.38,4.1v6.21c.13,3.3.13,3.71,1.19,3.71.79,0,3.17-2.65,4.23-3.84,4.89-5.43,6-6,7.26-6.74,3-1.85,7.93-3,12.68-3,5.69,0,13.36,2.24,17.19,7.26,3,4.24,3,8.06,2.78,20.22V39.12c0,3.56,0,16,.53,18.23.53,1.85.65,3.21,4.62,3.84.8.13,2.38.39,2.38,2V65c0,.8-.4,2-2.38,2-.92,0-1.32-.53-11-.53-10.18,0-9.25.53-10.3.53-1.74,0-1.86-.93-1.86-2V63.17c0-1.46.4-1.59,3.84-2.5,2.76-.67,2.83-1.17,3-3.71s.67-14.54.67-18.1v-7c0-8.32-.27-12.57-1.87-15.6-1.71-3.3-5.55-6.34-11.89-6.34A20.45,20.45,0,0,0,94.9,18c-3.43,4.49-3.43,9.65-3.43,15.73V46.12c0,2,0,9.52.26,11,.52,2.5,1.45,3.3,4,3.69,1.6.13,3.32.53,3.32,2.39V65a1.85,1.85,0,0,1-2,2,101.21,101.21,0,0,0-11.1-.53,95.31,95.31,0,0,0-11,.53,1.83,1.83,0,0,1-2.12-2V63.17c0-1.18.53-1.33,5.54-2.91C81.9,59.2,81,58.55,81,44.54V30.8c0-4.64-.16-17.69-3-20.34-.49-.45-1.67-1.84-3.29-1.84-.76,0-1.91-.13-1.91-2V4.38c0-1.19.67-1.44,2.38-1.71Z"/>
								</g>
							</g>
						</svg>
					</a>
				</div>
			</div>

			<div class="header__menu header__menu__JS">
				<button class="header__btn--close header__close-JS">
					<svg class="" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 25.67 25.67">
						<title>Botón para cerrar menu</title>
						<g id="Capa_2" data-name="Capa 2">
							<g id="Layer_1" data-name="Layer 1">
								<rect class="cls-1" x="-3.01" y="10.52" width="31.68" height="4.62" transform="translate(-5.32 12.83) rotate(-45)"/>
								<rect class="cls-1" x="-3.01" y="10.52" width="31.68" height="4.62" transform="translate(12.83 -5.32) rotate(45)"/>
							</g>
						</g>
					</svg>
				</button>

				<div class="header__menu-content">
					<ul class="header__list">
						<li class="header__items"><a href="#nosotros">nosotros</a></li>
						<li class="header__items"><a href="#ingredientes">ingredientes</a></li>
						<li class="header__items"><a href="#menu">menú</a></li>
						<li class="header__items"><a href="#sucursales">sucursales</a></li>
						<li class="header__items"><a href="#comunidad">comunidad</a></li>
						<li class="">
							<ul class="header__subitems">
								<li><a href="#facturacion">facturación</a></li>
								<li><a href="#bolsaTrabajo">bolsa de trabajo</a></li>
								<li><a href="#catering">catering</a></li>
							</ul>
						</li>
						<li class="header__items"><a href="<?php echo THEMEURL ?>">diario</a></li>
					</ul>

					<div class="header__contact">
						<div class="header__contact--newsletter">
							<h5 class="header__contact--title">suscríbete a <br> nuestro newsletter</h5>
							<form action="" class="header__form">
								<input class="header__form--input" type="email" name="email" placeholder="Email">
								<button class="header__form--btn" type="submit" name="subscribe">Enviar</button>
							</form>
						</div>

						<div class="header__contact--redes">
							<h5 class="header__contact--title">síguenos en <br> redes sociales</h5>
							<ul class="header__contact--list">
								<li class="header__contact--items"><a href="#">Facebook </a></li>
								<li class="header__contact--items"><a href="#">Instagram </a></li>
								<li class="header__contact--items"><a href="#">Twitter </a></li>
							</ul>
						</div>

						<div class="header__contact--logoFooter">
							<img class="header__contact--logo" src="<?php echo THEMEURL ?>/images/eno.svg" alt="">
						</div>

						<div class="header__contact--copyright">
							<p class="">Derechos reservados © Enrique Olvera, 2017</p>
						</div>
					</div>
				</div>

			</div>

		</header>



