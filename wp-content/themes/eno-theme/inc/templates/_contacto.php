<?php if (!empty($home_page->locations)): ?>
	<section class="contacto is_active general-section section fp-section"  data-color-class="contacto-color" data-anchor="sucursales">
		<?php $i = 0; foreach ($home_page->locations as $location): ?>
			<div class="grid__row contacto__container ubi-<?= $location->post->post_name  ?> <?php if ($i == 0): ?>is-active<?php endif; ?>" data-tab-id="<?= $i; ?>">

				<div class="grid__col-1-2 contacto__image" <?= $location->thumbail_img ? 'style="background-image: url('.$location->thumbail_img->getImgSrc("full").');"' : "" ?>>

					<?php if ($location->post->post_content): ?>
						<div class="contacto__layer-back"></div>
						<div class="contacto__text-hover">
							<?= apply_filters('translate_text', wpautop($location->post->post_content)) ?>
						</div>
					<?php endif; ?>

				</div>

				<div class="grid__col-1-2 contacto__color" >
					<div class="contacto__box">

						<h4 class="contacto__subtitle">  <?= __("ubicaciones", TRANSDOMAIN) ?></h4>

						<ul class="contacto__ubicaciones">
							<?php $j = 0; foreach ($home_page->locations as $item_location): ?>
								<li class="contacto__sucursal <?php if ($j == 0): ?>is-active<?php endif; ?>" data-tab="<?= $j; ?>">
									<span><?= $item_location->post->post_title  ?></span>
								</li>
							<?php $j++; endforeach; ?>
						</ul>

						<div class="contacto__content contacto-<?= $location->post->post_name  ?>">

							<?php if ($location->map): ?>
								<div class="contacto__mapa">
									<img class="contacto__mapa--image" src="<?= $location->map->getImgSrc("full") ?>" alt="<?= $location->map->alt ?>">
								</div>
							<?php endif; ?>


							<h4 class="contacto__subtitle"> <?= __("información", TRANSDOMAIN) ?> </h4>

							<div class="contacto__contenido">
								<div class="contacto__contenido--direccion">
									<?= $location->info->address ?>
								</div>
								<div class="contacto__contenido--horarios">
									<?= $location->info->hours ?>
								</div>
							</div>
							<div class="contacto__restricciones">
								<?= $location->info->coments ?>
							</div>
						</div>
					</div>
				</div>
			</div>
		<?php $i++; endforeach; ?>
	</section>
<?php endif; ?>
