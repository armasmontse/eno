<?php

class Cltvo_Seasons extends Cltvo_Metabox_Master
{

    /**
     * sobre escribiendo las opcciones del master
     */
    protected $description_metabox = "Colores";
    protected $post_type = "page";

  /**
	 * define el metodo donde se mostrara el meta
	 * @return boolean si es verdadero el meta sera desplegado en el admin en caso constrario no
	 */
	public static function metaboxDisplayRule(){
		return isSpecialPage("home");
	}


    /**
	 * Es la funcion que muestra el contenido del metabox
	 * @param object $object en principio es un objeto de WP_post
	 */
	public function CltvoDisplayMetabox( $object ){
        ?>
        <style media="screen">
            .ancho_100 {
                width: 100%;
            }
            .colors_container{
                width: 100%;
                border: 1px solid #e5e5e5;
                box-shadow: 0 1px 1px rgba(0,0,0,.04);
                display: flex;
                flex-direction: row;
                flex-wrap: nowrap;

            }
            .color_box{
                width: 100%;
                /* min-width: 20%; */
                height: 50px;
            }
            .current_color{
                background-color: #fbfbfb;
                box-shadow: 0 0px 5px rgba(0,0,0,0.5);
            }
        </style>

        <?php foreach (STATIONS_COLORS as $color): ?>
            <table class="ancho_100 <?php if ($color["slug"] == CURRENT_STATION_COLOR["slug"]): ?> current_color<?php endif; ?>" >
                <tr  >
                    <td colspan="2">
                        <h3><?= $color["name"] ?></h3>
                    </td>
                </tr>
                <tr>
                    <td class="colors_container"  >
                        <?php foreach ($color["colors"] as $hex): ?>
                            <div class="color_box" style="background-color:<?= $hex ?>" title="<?= $hex ?>" ></div>
                        <?php endforeach; ?>
                    </td>
                </tr>
            </table>
        <?php endforeach; ?>
        <?php

	}


}
