<section class="nosotros section fp-section second" data-anchor="nosotros">

	<div class="grid__row">
		<div class="grid__col-1-2 nosotros__color">
			<div class="nosotros__box">
				<div class="nosotros__box--80">
					<?php if (!empty($home_page->us->subtitle)): ?>
						<h4 class="nosotros__categoria"> <?=  $home_page->us->subtitle ?> </h4>
					<?php endif; ?>
					<?php if (!empty($home_page->us->title)): ?>
						<h2 class="nosotros__ttl"><?=  $home_page->us->title ?></h2>
					<?php endif; ?>
					<div class="nosotros__contenido">
						<?= $home_page->us->content ?>
					</div>
				</div>

				<?php if (!empty($home_page->us->menu_1->url)||!empty($home_page->us->menu_2->url)): ?>

					<div class="nosotros__box--20">
						<h2 class="nosotros__categoria"><?=  __('descarga nuestro menú',TRANSDOMAIN) ?></h2>

						<div class="nosotros__buttons">
							<?php if (!empty($home_page->us->menu_1->url)): ?>
								<a href="<?=  $home_page->us->menu_1->url ?>" target="_blank" class="nosotros__download"> <?=  $home_page->us->menu_title ?></a>
							<?php endif; ?>

							<?php if (!empty($home_page->us->menu_2->url)): ?>
								<a href="<?=  $home_page->us->menu_2->url ?>" target="_blank" class="nosotros__download"> <?=  $home_page->us->meals_title ?> </a>
							<?php endif; ?>
						</div>

						<h2 class="nosotros__categoria rappi">
							<p><?=  __('Servicio a domicilio: ',TRANSDOMAIN) ?></p>
							<a href="<?= $home_page->us->rappi?>" target="_blank">Rappi</a>,
							<a href="<?= $home_page->us->ubereats?>" target="_blank">&nbsp;Ubereats</a>
						</h2>

					</div>

				<?php endif; ?>

			</div>
		</div>
		<div class="grid__col-1-2 nosotros__image" <?php if ($home_page->us->image): ?>
			style="background-image: url( <?= $home_page->us->image->getImgSrc("full") ?> );"
		<?php endif; ?>   >


		</div>

	</div>

</section>
