export default function () {
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


     $("body").on("click", ".header__items a", function() {
          // e.preventDefault();
          //
          // var target = $(this).attr("href");

          // $('html, body').stop().animate({
          //      scrollTop: $(target).offset().top + 15
          // }, 500);

          $(".header__menu__JS").removeClass('view');


     });

     $("body").on("click", ".header__subitems li a", function() {

          $(".header__menu__JS").removeClass('view');


     });









}
