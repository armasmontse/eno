export default function () {

	$(".contacto__sucursal").click(function() {
        let tab = $(this).data('tab');
        // Quitamos todos los que estén activos.
        $(".contacto__container").removeClass('is-active');
        // Buscamos el que queremos activar.
        $(".contacto__container[data-tab-id=" + tab + "]").addClass('is-active');
        // Quitamos los menus que estén activos
        $(".contacto__sucursal").removeClass('is-active');
        // Buscamos el que queremos activar.
        $(".contacto__sucursal[data-tab=" + tab + "]").addClass('is-active');
	});


}
