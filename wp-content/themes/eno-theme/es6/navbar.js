export default function () {
    //Active en items de Navbar al hacer scrooll
    $('.menu__items').each(function() {
        var currLink = $(this)
        var refElement = $(currLink.find('a').attr('href'))

        if (window.pageYOffset + 90 < refElement.offset().top) {
            $('.menu__items').first().addClass('first');

        }
        // Si el scroll del documento es mayor al offset del objeto. => window.pageYOffset >= refElement.offset().top
        // Si el scroll del documento es menor al offset del objeto más su altura. => window.pageYOffset < refElement.offset().top + refElement.height()
        if (window.pageYOffset + 60 >= refElement.offset().top && window.pageYOffset + 60 < refElement.offset().top + refElement.height()) {
            $('.menu__items').removeClass('active');
            currLink.addClass('active');
        }else {
            currLink.removeClass('active');
        }
    });

}
