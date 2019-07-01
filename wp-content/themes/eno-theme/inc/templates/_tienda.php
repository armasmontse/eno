<section class="tienda tienda--back general-section section fp-section" data-anchor="tienda" data-color-class="tienda-collapse">

	<div class="grid__row tienda__row">
		<div class="grid__col-1-2 tienda--flex">
			<div class="tienda__box">

                <?php if (!empty($home_page->online_shop->subtitle)): ?>
					<h4 class="tienda__categoria"><?= $home_page->online_shop->subtitle ?></h4>
				<?php endif; ?>

				<div class="tienda__contenido">
					<?= $home_page->online_shop->content ?>
				</div>

			</div>
		</div>
		<div class="grid__col-1-2">
			<div class="tienda__contenedor">

				<?php if ($home_page->online_shop->image): ?>
					<div class="tienda__cont-img">
						<img class="tienda__img" src="<?= $home_page->online_shop->image->getImgSrc("full") ?>" alt="<?= $home_page->online_shop->image->alt ?>">
					</div>
				<?php endif; ?>
			</div>
		</div>
	</div>

</section>
