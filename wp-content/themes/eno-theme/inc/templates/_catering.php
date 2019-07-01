<section class="servicios general-section servicios--two-section section fp-section fp-auto-height" data-color-class="servicios-color" data-anchor="servicios-catering">
	<div class="grid__row">
		<div class="grid__col-1-2 flex-center">
			<?php if ($home_page->services->image_2): ?>
				<div class="servicios__box-two servicios__image--left">
					<img class="servicios__image--img-right" src="<?= $home_page->services->image_2->getImgSrc("full")?>" alt="<?= $home_page->services->image_2->alt?>">
				</div>
			<?php endif; ?>
		</div>
		<div class="grid__col-1-2">
			<div class="servicios__box servicios__box--right">

				<div class="servicios__contenido servicios__catering">
					<?= $home_page->services->content_3  ?>
				</div>

				<form class="servicios__form" id="contact_form_JS" method="post" data-thank ="thanks-contact_form_JS" >
					<h5 class="servicios__form-title"><?= __('CONTACTO',TRANSDOMAIN) ?></h5>

					<div class="form__group">
						<input form="contact_form_JS" class="servicios__input" type="text" name="contact_form_JS[Nombre]" placeholder="<?= __('Nombre',TRANSDOMAIN) ?>" value="" required>
					</div>

					<div class="form__group">
						<input form="contact_form_JS" class="servicios__input" type="text" name="contact_form_JS[Email]" placeholder="<?= __('Email',TRANSDOMAIN) ?>" value="" required>
					</div>

					<div class="form__group">
						<input form="contact_form_JS" class="servicios__input" type="text" name="contact_form_JS[Teléfono]'" placeholder="<?= __('Teléfono',TRANSDOMAIN) ?>" value="" required>
					</div>

					<div class="servicios__form-50">
						<div class="form__group">
							<input form="contact_form_JS" class="servicios__input" type="text" name="contact_form_JS[Fecha]" placeholder="<?= __('Fecha de evento',TRANSDOMAIN) ?>" value="" required>
						</div>
						<div class="form__group">
							<input form="contact_form_JS" class="servicios__input" type="text" name="contact_form_JS[Personas]" placeholder="<?= __('# de personas',TRANSDOMAIN) ?>" value="" required>
						</div>
					</div>

					<div class="form__group">
						<textarea rows="2" form="contact_form_JS" class="servicios__input" name="contact_form_JS[Mensaje]" placeholder="<?= __('Mensaje',TRANSDOMAIN) ?>" required></textarea>
					</div>

					<button form="contact_form_JS" type="submit" class="servicios__btn"><?=  __('ENVIAR',TRANSDOMAIN) ?></button>
				</form>

				<div class="" style="display:none;" id="thanks-contact_form_JS">
				    <div class="contacto__form">
				        <p class="contacto__form--ttl"><?=  __('Recibimos tus datos. <br> Muchas gracias, nos pondremos en contacto.',TRANSDOMAIN); ?></p>
				    </div>
				</div>

			</div>
		</div>
	</div>

</section>
