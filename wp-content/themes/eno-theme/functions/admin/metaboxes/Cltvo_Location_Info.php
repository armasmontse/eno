<?php
require_once 'traits/Cltvo_Wp_Editor_Trait.php';

class Cltvo_Location_Info extends Cltvo_Metabox_Master
{
    use Cltvo_Wp_Editor_Trait;

    /**
     * sobre escribiendo las opcciones del master
     */
    protected $description_metabox = "Información";
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

        $meta["address"] = isset($meta["address"]) ? $meta["address"] : "";
        $meta["hours"] = isset($meta["hours"]) ? $meta["hours"] : "";
        $meta["coments"] = isset($meta["coments"]) ? $meta["coments"] : "";

        return $meta;
    }

    protected function getWpEditorTinymce()
    {
        return [
            'toolbar1'      => 'bold,italic,spellchecker,charmap,link,unlink,undo,redo',
            'toolbar2'      => '',
            'toolbar3'      => '',
        ];
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
        </style>
        <table class="ancho_100">
            <tr>
                <td >
                    <strong><?= __("Dirección" ,TRANSDOMAIN) ?>:</strong>
                    <?php  $this->printWpEditor(["address"])?>
                </td>
                <td >
                    <strong><?= __("Horarios" ,TRANSDOMAIN) ?>:</strong>
                    <?php  $this->printWpEditor(["hours"])?>
                </td>
            </tr>
            <tr>
                <td colspan="2" >
                    <strong><?= __("Comentarios" ,TRANSDOMAIN) ?>:</strong>
                    <?php  $this->printWpEditor(["coments"])?>
                </td>
            </tr>
        </table>
        <?php

	}


}
