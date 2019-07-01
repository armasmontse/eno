<?php
require_once 'traits/Cltvo_Featured_Image_Trait.php';

class Cltvo_Location_Map extends Cltvo_Metabox_Master
{
    use Cltvo_Featured_Image_Trait;

    /**
     * sobre escribiendo las opcciones del master
     */
    protected $description_metabox = "Mapas";
    protected $post_type = "cltvo_location";

  /**
	 * define el metodo donde se mostrara el meta
	 * @return boolean si es verdadero el meta sera desplegado en el admin en caso constrario no
	 */
	public static function metaboxDisplayRule(){
		return true;
	}


    /**
     * define el metodo que inicializa el valor del meta
     */
    public static function setMetaValue($meta){

        $meta = is_array($meta) ? $meta : [] ;

        foreach (STATIONS_COLORS as  $color) {
            $meta[$color["slug"]] = static::setImageValue (isset($meta[$color["slug"]]) ? $meta[$color["slug"]] : 0);
        }

        return $meta;
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
        </style>
        <table class="ancho_100">
            <?php foreach (STATIONS_COLORS as $color): ?>
                <tr>
                    <td colspan="2">
                        <h3><?= __("Imagen ",TRANSDOMAIN).$color["name"] ?></h3>
                    </td>
                </tr>
                <tr>
                    <td style="width: 50%;">
                        <div class="colors_container"  >
                            <?php foreach ($color["colors"] as $hex): ?>
                                <div class="color_box" style="background-color:<?= $hex ?>" title="<?= $hex ?>" ></div>
                            <?php endforeach; ?>
                        </div>
                    </td>

                    <td ALIGN="CENTER" >
                        <?php $this->printFeaturedImage(__("imagen",TRANSDOMAIN).$color["name"] ,[$color["slug"]]) ?>
                    </td>
                </tr>
            <?php endforeach; ?>
        </table>
        <?php

	}


}
