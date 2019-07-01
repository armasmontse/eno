<section class="comunidad comunidad__back general-section section fp-section" data-anchor="comunidad"  data-color-class="comunidad-collapse">
	<div class="grid__row">
		<div class="grid__col-1-2">
			<div class="comunidad__box">
				<?php if (!empty($home_page->comunity->title)): ?>
					<h4 class="comunidad__categoria"> <?= $home_page->comunity->title ?></h4>
				<?php endif; ?>
				<div class="comunidad__contenido">
					<?= $home_page->comunity->content ?>
				</div>
			</div>
		</div>
		<div class="grid__col-1-2">
		</div>
	</div>
</section>
