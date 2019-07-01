<?php
require_once 'traits/Cltvo_Wp_Editor_Trait.php';
require_once 'traits/Cltvo_Featured_Image_Trait.php';
require_once 'traits/Cltvo_File_Upload_Trait.php';


class Cltvo_Us extends Cltvo_Metabox_Master
{
    use Cltvo_Wp_Editor_Trait;
    use Cltvo_Featured_Image_Trait;
    use Cltvo_File_Upload_Trait;

    /**
     * sobre escribiendo las opcciones del master
     */
    protected $description_metabox = "Nosotros";
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
        $meta["title"] = isset($meta["title"]) ? $meta["title"] : "";
        $meta["subtitle"] = isset($meta["subtitle"]) ? $meta["subtitle"] : "";
        $meta["content"] = isset($meta["content"]) ? $meta["content"] : "";
        $meta["image"] = static::setImageValue (isset($meta["image"]) ? $meta["image"] : 0);

        $meta["menu_1"] = static::setFileValueInPath($meta, ["menu_1"]);
        $meta["menu_2"] = static::setFileValueInPath($meta, ["menu_2"]);

        $meta["menu_title"] = isset($meta["menu_title"]) ? $meta["menu_title"] : "";
        $meta["meals_title"] = isset($meta["meals_title"]) ? $meta["meals_title"] : "";

        $meta["rappi"] = isset($meta["rappi"]) ? $meta["rappi"] : "";
        $meta["ubereats"] = isset($meta["ubereats"]) ? $meta["ubereats"] : "";

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
                        placeholder="<?= __("natural cotidiano" ,TRANSDOMAIN) ?>"
                        name="<?=  $this->meta_key; ?>[title]"
                        id="<?=  $this->meta_key; ?>_title"
                        value="<?=  $this->meta_value['title']; ?>"
                        class="ancho_100 i18n-multilingual" />
                        <br><br>

                        <strong><?= __("Título" ,TRANSDOMAIN) ?>:</strong>

                    <input
                        type="text"
                        placeholder="<?= __("Eno ... " ,TRANSDOMAIN) ?>"
                        name="<?=  $this->meta_key; ?>[subtitle]"
                        id="<?=  $this->meta_key; ?>_subtitle"
                        value="<?=  $this->meta_value['subtitle']; ?>"
                        class="ancho_100 i18n-multilingual" />
                        <br><br>

                        <strong><?= __("Menu title" ,TRANSDOMAIN) ?>:</strong>

                    <input
                        type="text"
                        placeholder="<?= __("Eno ... " ,TRANSDOMAIN) ?>"
                        name="<?=  $this->meta_key; ?>[menu_title]"
                        id="<?=  $this->meta_key; ?>_menu_title"
                        value="<?=  $this->meta_value['menu_title']; ?>"
                        class="ancho_100 i18n-multilingual" />
                        <br><br>

                        <strong><?= __("Menu meals" ,TRANSDOMAIN) ?>:</strong>



                    <input
                        type="text"
                        placeholder="<?= __("Eno ... " ,TRANSDOMAIN) ?>"
                        name="<?=  $this->meta_key; ?>[meals_title]"
                        id="<?=  $this->meta_key; ?>_meals_title"
                        value="<?=  $this->meta_value['meals_title']; ?>"
                        class="ancho_100 i18n-multilingual" />
<br><br>
    <strong><?= __("Rappi" ,TRANSDOMAIN) ?>:</strong>
                        <input
                                type="url"
                                placeholder="<?= __("Rappi" ,TRANSDOMAIN) ?>"
                                name="<?=  $this->meta_key; ?>[rappi]"
                                id="<?=  $this->meta_key; ?>_rappi"
                                value="<?=  $this->meta_value['rappi']; ?>"
                                class="ancho_100 i18n-multilingual" />
                                <br><br>

                                <strong><?= __("Ubereats" ,TRANSDOMAIN) ?>:</strong>

                        <input
                                    type="url"
                                    placeholder="<?= __("Ubereats" ,TRANSDOMAIN) ?>"
                                    name="<?=  $this->meta_key; ?>[ubereats]"
                                    id="<?=  $this->meta_key; ?>_ubereats"
                                    value="<?=  $this->meta_value['ubereats']; ?>"
                                    class="ancho_100 i18n-multilingual" />
                                    <br><br>



                        <br><br>



                    <strong><?= __("Contenido" ,TRANSDOMAIN) ?>:</strong>

                    <?php  $this->printWpEditor(["content"])?>
                </td>
                <td ALIGN="CENTER">
                    <h3><?= __("Imagen",TRANSDOMAIN)  ?></h3>
                    <?php $this->printFeaturedImage(__("imagen",TRANSDOMAIN) ,["image"]) ?>
                </td>
            </tr>
            <tr>
                <td>
                    <strong><?= __("Menu 1" ,TRANSDOMAIN) ?>:</strong>
                    <?php $this->printFileInput(["menu_1"]) ?>
                </td>
                <td>
                    <strong><?= __("Menu 2" ,TRANSDOMAIN) ?>:</strong>
                    <?php $this->printFileInput(["menu_2"]) ?>
                </td>
            </tr>
        </table>
        <?php

	}


}
