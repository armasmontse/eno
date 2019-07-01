export default function () {

  var controller = new ScrollMagic.Controller();

	const logo = $('.header__logo--image');
	const menu_collapse = $('.header__btn_JS');

	$('.general-section').each(function() {

			var scene = new ScrollMagic.Scene({
					triggerElement: this,
					triggerHook: 0.13,
					duration: $(this).innerHeight(),
					reverse: true
			})
			.on("enter", () => {
				logo.addClass($(this).data('color-class'));
				menu_collapse.addClass($(this).data('color-class'));
			})
			.on('leave', () => {
				logo.removeClass($(this).data('color-class'));
				menu_collapse.removeClass($(this).data('color-class'));
			})
			.addTo(controller);

	})
  
}
