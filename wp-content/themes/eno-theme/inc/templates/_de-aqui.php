<section class="de-aqui de-aqui--back general-section section fp-section third" data-anchor="ingredientes" data-color-class="de-aqui-collapse">

	<div class="grid__row de-aqui__row">
		<div class="grid__col-1-2 de-aqui--flex">
			<div class="de-aqui__box">
				<?php if (!empty($home_page->from_here->subtitle)): ?>
					<h4 class="de-aqui__categoria"><?= $home_page->from_here->subtitle ?></h4>
				<?php endif; ?>

				<div class="de-aqui__contenido">
					<?= $home_page->from_here->content ?>
				</div>
			</div>
		</div>
		<div class="grid__col-1-2">
			<div class="de-aqui__contenedor">
				<?php if (!empty($home_page->from_here->title)): ?>
					<h3 class="de-aqui__ttl"> <?= $home_page->from_here->title ?> </h3>
				<?php endif; ?>

				<?php if ($home_page->from_here->image): ?>
					<div class="de-aqui__cont-img">
						<img class="de-aqui__img" src="<?= $home_page->from_here->image->getImgSrc("full") ?>" alt="<?= $home_page->from_here->image->alt ?>">
					</div>
				<?php endif; ?>
			</div>
		</div>
	</div>

</section>
