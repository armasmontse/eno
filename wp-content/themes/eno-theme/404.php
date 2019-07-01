<?php get_header(); ?>

<div class="page-error">
	<div class="page-error__container">
		<h2 class="page-error--text"><?=__('<span>404</span> ¡Lo sentimos! No encontramos la página',TRANSDOMAIN) ?></h2>
		<p class="page-error--button"><a class="page-error--button" href="<?php echo BLOGURL ?>"><?=__('Regresar',TRANSDOMAIN) ?></a></p>
	</div>
</div>

<?php get_footer(); ?>
