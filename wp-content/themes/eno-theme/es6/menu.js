export default function () {

	var btnAbrir = $(".header__btn_JS");
	var btnCerrar = $(".header__close-JS");
	var menu = $(".header__menu__JS");

	//Abrir menu lateral
	btnAbrir.on("click", function() {
	    menu.addClass('view');
	});
	//Cerrar menu lateral, dando click en button
	btnCerrar.on("click", function() {
		menu.removeClass('view');
	});
}
