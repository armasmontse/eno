<?php
/** ==============================================================================================================
 *                                       Constantes y variables Globales
 *  ==============================================================================================================
 */
define( 'JSPATH', get_template_directory_uri() . '/js/' );
define( 'CSSPATH', get_template_directory_uri() . '/css/' ); // css para el adimin
define( 'BLOGURL', get_home_url('/') );
define( 'THEMEURL', get_bloginfo('template_url').'/' );

// inicializacion de la traduccion
define( 'TRANSDOMAIN', wp_get_theme()->template );


define("STATIONS_COLORS", [
    [
        "name" => "Primavera",
        "slug" => "spring",
        "colors"    => [
            "#375024",
            "#4F3850",
            "#E0DCCC",
            "#6D8536",

        ],
    ],
    [
        "name" => "Verano",
        "slug" => "summer",
        "colors"    => [
            "#b6792f",
            "#b45927",
            '#E0DCCC',
            '#3A6582',
            '#0E2842',
            '#F3EDD7',

        ],

    ],
    [
        "name" => "Otoño",
        "slug" => "autumn",
        "colors"    => [
            "#8B371D",
            '#685A25',
            '#E0DCCC',
            '#967714',
            '#583802',
        ],

    ],
    [
        "name" => "Invierno",
        "slug" => "winter",
        "colors"    => [
            '#363B4F',
            "#501916",
            '#4F3850',
            "#E0DCCC",
            '#375024',
            "#172A08",
            '#F3EDD7',
        ],

    ],
]);

$days_of_spring_start = intval(date("z", mktime(0,0,0,3,20,date("Y"))) + 1);
$days_of_current_year = intval(date("z", mktime(0,0,0,12,31,date("Y"))) + 1);
$current_day =intval( date("z"));
$total_stations = count(STATIONS_COLORS);

$current_color_key = (floor(($current_day-$days_of_spring_start)*$total_stations/$days_of_current_year) + $total_stations)%$total_stations;

define("CURRENT_STATION_COLOR",STATIONS_COLORS[$current_color_key]);

 // ---------------- paginas especiales
 // Hook que crea las paginas especificas o especiales de manera automatica

 include_once('functions/special_pages.php');

/** ==============================================================================================================
 *                                       Inluye los archivos generarles
 *  ==============================================================================================================
 */
// ---------------- scripts
// Contiene la llamada de los archivos functions.js y admin/functions.js asi como inclucion de valiables java

include_once('functions/general/scripts_js.php');

// ---------------- funciones cltvo
// Contiene las funciones generales del cultivo que son independeites de cada proyecto

include_once('functions/general/functions_cltvo.php');

// ---------------- flitros cltvo
// Contiene los filtros generales del cultivo que son independeites de cada proyecto

include_once('functions/general/filters_cltvo.php');




/** ==============================================================================================================
 *                                       Inluye los archivos de admin
 *  ==============================================================================================================
 */

// ---------------- personaizacion del menu
// Contiene las funciones para personalizar el menu del admin

include_once('functions/admin/menu.php');

// ---------------- imagenes de tamaños y opcciones personalizadas
// Contiene la funciones para personalizar los tamaños de la imagenes

include_once('functions/admin/images.php');

// ---------------- post type y taxonimias
// Contiene el registro de tipos de post persializados y configuracion del editor de los mismos

include_once('functions/admin/post_type.php');

// Contiene el registro de taxonomias personalizadas

include_once('functions/admin/taxonomies.php');

// ---------------- meta boxes y save post
// Contiene la inclucion de las metaboxes asi como las funciones del save post

include_once('functions/admin/metabox.php');

// ---------------- ajax del admin
// Contiene los funciones ajax  del admin

include_once('functions/admin/ajax.php');

/** ==============================================================================================================
 *                                         Inluye los archivos del tema
 *  ==============================================================================================================
 */

// ---------------- funciones del menu
// Contiene el menú del sitio y sus funciones

include_once('functions/theme/menu.php');

// ---------------- filtros del tema
// Contiene los filtros específicos del tema

include_once('functions/theme/filters.php');

// ---------------- funciones del tema
// Contiene los funciones específicas del tema

include_once('functions/theme/functions.php');

// ---------------- ajax del tema
// Contiene los funciones ajax especificas del tema

include_once('functions/theme/ajax.php');


?>
