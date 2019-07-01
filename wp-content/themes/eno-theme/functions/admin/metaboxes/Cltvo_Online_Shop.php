<?php
require_once 'traits/Cltvo_Wp_Editor_Trait.php';
require_once 'traits/Cltvo_Featured_Image_Trait.php';

class Cltvo_Online_Shop extends Cltvo_Metabox_Master
{
    use Cltvo_Wp_Editor_Trait;
    use Cltvo_Featured_Image_Trait;

    /**
     * sobre escribiendo las opcciones del master
     */
    protected $description_metabox = "Tienda Online";
    protected $post_type = "page";

  /**
	 * define el metodo donde se mostrara el meta
	 * @return boolean si es verdadero el meta sera desplegado en el admin en caso constrario no
	 */
	public static function metaboxDisplayRule(){
		return isSpecialPage("home");
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
     * define el metodo que inicializa el valor del meta
     */
    public static function setMetaValue($meta){
        $meta = is_array($meta) ? $meta : [] ;
        $meta["subtitle"] = isset($meta["subtitle"]) ? $meta["subtitle"] : "";
        $meta["title"] = isset($meta["title"]) ? $meta["title"] : "";
        $meta["content"] = isset($meta["content"]) ? $meta["content"] : "";
        $meta["image"] = static::setImageValue (isset($meta["image"]) ? $meta["image"] : 0);
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
        </style>
        <table class="ancho_100">
            <tr>
                <td >
                    <strong><?= __("Subtítulo" ,TRANSDOMAIN) ?>:</strong>

                    <input
                        type="text"
                        placeholder="<?= __("Tienda en línea" ,TRANSDOMAIN) ?>"
                        name="<?=  $this->meta_key; ?>[subtitle]"
                        id="<?=  $this->meta_key; ?>_subtitle"
                        value="<?=  $this->meta_value['subtitle']; ?>"
                        class="ancho_100 i18n-multilingual" />
                        <br><br>
                    <strong><?= __("Contenido" ,TRANSDOMAIN) ?>:</strong>

                    <?php  $this->printWpEditor(["content"])?>
                </td>
                <td ALIGN="CENTER">

                    <h3><?= __("Imagen",TRANSDOMAIN)  ?></h3>
                    <?php $this->printFeaturedImage(__("imagen",TRANSDOMAIN) ,["image"]) ?>

                </td>
            </tr>
        </table>
        <?php

	}


}
