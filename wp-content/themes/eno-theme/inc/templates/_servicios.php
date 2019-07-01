<section class="servicios general-section section fp-section" data-color-class="servicios-color" data-anchor="servicios">
	<div class="grid__row">
		<div class="grid__col-1-2">
			<div class="servicios__box servicios__box--left">

				<div class="servicios__contenido servicios__facturacion">
					<?= $home_page->services->content_1  ?>
				</div>

				<div class="servicios__contenido servicios__bolsa-trabajo" >
					<?= $home_page->services->content_2  ?>
				</div>

			</div>
		</div>
		<div class="grid__col-1-2">
			<?php if ($home_page->services->image_1): ?>
				<div class="servicios__box servicios__image--right">
					<img class="servicios__image--img-right" src="<?= $home_page->services->image_1->getImgSrc("full")?>" alt="<?= $home_page->services->image_1->alt?>">
				</div>
			<?php endif; ?>
		</div>
	</div>
</section>
