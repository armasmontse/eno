/******/ (function(modules) { // webpackBootstrap
/******/ 	// The module cache
/******/ 	var installedModules = {};
/******/
/******/ 	// The require function
/******/ 	function __webpack_require__(moduleId) {
/******/
/******/ 		// Check if module is in cache
/******/ 		if(installedModules[moduleId])
/******/ 			return installedModules[moduleId].exports;
/******/
/******/ 		// Create a new module (and put it into the cache)
/******/ 		var module = installedModules[moduleId] = {
/******/ 			exports: {},
/******/ 			id: moduleId,
/******/ 			loaded: false
/******/ 		};
/******/
/******/ 		// Execute the module function
/******/ 		modules[moduleId].call(module.exports, module, module.exports, __webpack_require__);
/******/
/******/ 		// Flag the module as loaded
/******/ 		module.loaded = true;
/******/
/******/ 		// Return the exports of the module
/******/ 		return module.exports;
/******/ 	}
/******/
/******/
/******/ 	// expose the modules object (__webpack_modules__)
/******/ 	__webpack_require__.m = modules;
/******/
/******/ 	// expose the module cache
/******/ 	__webpack_require__.c = installedModules;
/******/
/******/ 	// __webpack_public_path__
/******/ 	__webpack_require__.p = "./js/";
/******/
/******/ 	// Load entry module and return exports
/******/ 	return __webpack_require__(0);
/******/ })
/************************************************************************/
/******/ ([
/* 0 */
/***/ (function(module, exports, __webpack_require__) {

	'use strict';
	
	var _menu = __webpack_require__(3);
	
	var _menu2 = _interopRequireDefault(_menu);
	
	var _tabs = __webpack_require__(4);
	
	var _tabs2 = _interopRequireDefault(_tabs);
	
	var _navbar = __webpack_require__(5);
	
	var _navbar2 = _interopRequireDefault(_navbar);
	
	var _menuColor = __webpack_require__(6);
	
	var _menuColor2 = _interopRequireDefault(_menuColor);
	
	var _scrollit = __webpack_require__(7);
	
	var _scrollit2 = _interopRequireDefault(_scrollit);
	
	var _forms = __webpack_require__(8);
	
	var _forms2 = _interopRequireDefault(_forms);
	
	function _interopRequireDefault(obj) { return obj && obj.__esModule ? obj : { default: obj }; }
	
	window.$ = jQuery;
	var w = $(window);
	
	w.ready(function () {
		(0, _menu2.default)();
		(0, _tabs2.default)();
		(0, _menuColor2.default)();
		(0, _scrollit2.default)();
	
		//Funcion para que solo haga scroll en desktop
		function fullpageScroll(breakSm) {
			if (!breakSm.matches) {
				//search movil
				$('#fullpage').fullpage({
					parallaxOptions: { type: ' reveal ', porcentaje: 62, property: ' translate ' }
				});
			}
		}
	
		var breakSm = window.matchMedia("(max-width: 980px)");
		fullpageScroll(breakSm);
		breakSm.addListener(fullpageScroll);
	});
	
	$(window).load(function () {
	
		(0, _forms2.default)();
	
		//Inicializar plugin sticky-kit
		$(function () {
			$("#menu-fix").stick_in_parent({
				offset_top: 15
			});
		});
	});
	
	w.scroll(function () {
		(0, _navbar2.default)();
	});

/***/ }),
/* 1 */,
/* 2 */,
/* 3 */
/***/ (function(module, exports) {

	"use strict";
	
	Object.defineProperty(exports, "__esModule", {
		value: true
	});
	
	exports.default = function () {
	
		var btnAbrir = $(".header__btn_JS");
		var btnCerrar = $(".header__close-JS");
		var menu = $(".header__menu__JS");
	
		//Abrir menu lateral
		btnAbrir.on("click", function () {
			menu.addClass('view');
		});
		//Cerrar menu lateral, dando click en button
		btnCerrar.on("click", function () {
			menu.removeClass('view');
		});
	};

/***/ }),
/* 4 */
/***/ (function(module, exports) {

	"use strict";
	
	Object.defineProperty(exports, "__esModule", {
	       value: true
	});
	
	exports.default = function () {
	
	       $(".contacto__sucursal").click(function () {
	              var tab = $(this).data('tab');
	              // Quitamos todos los que estén activos.
	              $(".contacto__container").removeClass('is-active');
	              // Buscamos el que queremos activar.
	              $(".contacto__container[data-tab-id=" + tab + "]").addClass('is-active');
	              // Quitamos los menus que estén activos
	              $(".contacto__sucursal").removeClass('is-active');
	              // Buscamos el que queremos activar.
	              $(".contacto__sucursal[data-tab=" + tab + "]").addClass('is-active');
	       });
	};

/***/ }),
/* 5 */
/***/ (function(module, exports) {

	'use strict';
	
	Object.defineProperty(exports, "__esModule", {
	    value: true
	});
	
	exports.default = function () {
	    //Active en items de Navbar al hacer scrooll
	    $('.menu__items').each(function () {
	        var currLink = $(this);
	        var refElement = $(currLink.find('a').attr('href'));
	
	        if (window.pageYOffset + 90 < refElement.offset().top) {
	            $('.menu__items').first().addClass('first');
	        }
	        // Si el scroll del documento es mayor al offset del objeto. => window.pageYOffset >= refElement.offset().top
	        // Si el scroll del documento es menor al offset del objeto más su altura. => window.pageYOffset < refElement.offset().top + refElement.height()
	        if (window.pageYOffset + 60 >= refElement.offset().top && window.pageYOffset + 60 < refElement.offset().top + refElement.height()) {
	            $('.menu__items').removeClass('active');
	            currLink.addClass('active');
	        } else {
	            currLink.removeClass('active');
	        }
	    });
	};

/***/ }),
/* 6 */
/***/ (function(module, exports) {

	'use strict';
	
	Object.defineProperty(exports, "__esModule", {
			value: true
	});
	
	exports.default = function () {
	
			var controller = new ScrollMagic.Controller();
	
			var logo = $('.header__logo--image');
			var menu_collapse = $('.header__btn_JS');
	
			$('.general-section').each(function () {
					var _this = this;
	
					var scene = new ScrollMagic.Scene({
							triggerElement: this,
							triggerHook: 0.13,
							duration: $(this).innerHeight(),
							reverse: true
					}).on("enter", function () {
							logo.addClass($(_this).data('color-class'));
							menu_collapse.addClass($(_this).data('color-class'));
					}).on('leave', function () {
							logo.removeClass($(_this).data('color-class'));
							menu_collapse.removeClass($(_this).data('color-class'));
					}).addTo(controller);
			});
	};

/***/ }),
/* 7 */
/***/ (function(module, exports) {

	"use strict";
	
	Object.defineProperty(exports, "__esModule", {
	     value: true
	});
	
	exports.default = function () {
	     //Scrollit
	     //   $('a[href*="#"]:not([href="#"])').click(function(e) {
	     //         if (location.pathname.replace(/^\//,'') == this.pathname.replace(/^\//,'') && location.hostname == this.hostname) {
	     //             e.preventDefault();
	     //             var target = $(this.hash);
	     //             target = target.length ? target : $('[name=' + this.hash.slice(1) +']');
	     //             if (target.length) {
	     //                 $('html, body').animate({
	     //                   scrollTop: target.offset().top - 0
	     //                 }, 1000);
	     //                 //Cerrar el menu al dar click en los items del menu
	     //                 $(".header__menu__JS").removeClass('view');
	     //
	     //                 return false;
	     //           }
	     //       }
	     //
	     // });
	
	
	     $("body").on("click", ".header__items a", function () {
	          // e.preventDefault();
	          //
	          // var target = $(this).attr("href");
	
	          // $('html, body').stop().animate({
	          //      scrollTop: $(target).offset().top + 15
	          // }, 500);
	
	          $(".header__menu__JS").removeClass('view');
	     });
	
	     $("body").on("click", ".header__subitems li a", function () {
	
	          $(".header__menu__JS").removeClass('view');
	     });
	};

/***/ }),
/* 8 */
/***/ (function(module, exports) {

	'use strict';
	
	Object.defineProperty(exports, "__esModule", {
		value: true
	});
	
	exports.default = function () {
	
		sendContactForm("contact_form_JS", "Cltvo_Csontact_Form", {
			'contact_form_JS[Nombre]': 'required',
			'contact_form_JS[Email]': {
				required: true,
				email: true
			},
			'contact_form_JS[Teléfono]': 'required',
			'contact_form_JS[Fecha]': 'required',
			'contact_form_JS[Personas]': 'required',
			'contact_form_JS[Mensaje]': 'required'
		});
	};
	
	var sendContactForm = function sendContactForm(form_id, action, rules) {
		var $form = $('#' + form_id);
	
		if ($form.length > 0) {
	
			$form.validate({
	
				submitHandler: function submitHandler(form, e) {
	
					e.stopPropagation();
					e.preventDefault();
	
					var $submit = $($form.find('input[type=submit]').get(0));
					var $error = $form.find('.post_error_JS');
					$submit.val('...Enviando');
					$error.text("");
	
					var data = $(form).serializeArray();
					data.push({ name: "action", value: action });
	
					var ajax = $.post(cltvo_js_vars.ajax_url, data);
	
					ajax.done(function (data) {
	
						if (typeof data.message !== "undefined" && data.message == "__okcode__") {
							$form.hide();
							$('#' + form_id + '_thank_JS').show();
						} else {
							$error.text('No podemos recibir tu información en este momento, intentalo más tarde.');
							$submit.val('Enviar');
						}
					});
	
					ajax.fail(function (data) {
						var response_json = data.responseJSON;
						$error.text(typeof response_json !== "undefined" && typeof response_json.message !== "undefined" ? response_json.message : 'No podemos recibir tu información en este momento, intentalo más tarde.');
						$submit.val('Enviar');
					});
				},
	
				errorClass: 'error form__error form_error_JS',
	
				invalidHandler: function invalidHandler() {
					setTimeout(function () {
						var errors = $form.find('.form_error_JS').filter(function (i, el) {
							return el.style.display !== 'none';
						});
					}, 200);
				},
	
	
				errorPlacement: function errorPlacement(error, element) {
					element.parent().append(error);
				},
	
				rules: rules
			});
		}
	};

/***/ })
/******/ ]);
//# sourceMappingURL=functions.js.map