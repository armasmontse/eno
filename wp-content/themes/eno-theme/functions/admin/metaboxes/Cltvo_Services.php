<?php
require_once 'traits/Cltvo_Wp_Editor_Trait.php';
require_once 'traits/Cltvo_Featured_Image_Trait.php';

class Cltvo_Services extends Cltvo_Metabox_Master
{
    use Cltvo_Wp_Editor_Trait;
    use Cltvo_Featured_Image_Trait;
    /**
     * sobre escribiendo las opcciones del master
     */
    protected $description_metabox = "Servicios";
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
            'toolbar1'      => 'blockquote,bold,italic,spellchecker,charmap,link,unlink,undo,redo',
            'toolbar2'      => '',
            'toolbar3'      => '',
        ];
    }

    /**
     * define el metodo que inicializa el valor del meta
     */
    public static function setMetaValue($meta){

        $meta = is_array($meta) ? $meta : [] ;

        for ($i=1; $i <= 3; $i++) {
            $content = "title_".$i;
            $meta[$content] = isset($meta[$content]) ? $meta[$content] : "";
        }

        for ($i=1; $i <= 3; $i++) {
            $content = "content_".$i;
            $meta[$content] = isset($meta[$content]) ? $meta[$content] : "";
        }

        for ($i=1; $i <= 2; $i++) {
            $imagen = "image_".$i;
            $meta[$imagen] = static::setImageValue (isset($meta[$imagen]) ? $meta[$imagen] : 0);
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
        </style>
        <table class="ancho_100">
            <tr>
                <td>
                    <h3><?= __("Nombre de navegación 1" ,TRANSDOMAIN) ?>:</h3>

                    <input
                        type="text"
                        placeholder="<?= __("Facturación" ,TRANSDOMAIN) ?>"
                        name="<?=  $this->meta_key; ?>[title_1]"
                        id="<?=  $this->meta_key; ?>_title_1"
                        value="<?=  $this->meta_value['title_1']; ?>"
                        class="ancho_100 i18n-multilingual" />

                    <br><br>

                    <strong><?= __("Contenido 1",TRANSDOMAIN)  ?></strong>
                    <?php $this->printInstructions();  $this->printWpEditor(["content_1"])?>

                    <h3><?= __("Nombre de navegación 2" ,TRANSDOMAIN) ?>:</h3>

                    <input
                        type="text"
                        placeholder="<?= __("Bolsa de trabajo" ,TRANSDOMAIN) ?>"
                        name="<?=  $this->meta_key; ?>[title_2]"
                        id="<?=  $this->meta_key; ?>_title_2"
                        value="<?=  $this->meta_value['title_2']; ?>"
                        class="ancho_100 i18n-multilingual" />
                    <br><br>
                    <strong><?= __("Contenido 2",TRANSDOMAIN)  ?></strong>
                    <?php  $this->printInstructions(); $this->printWpEditor(["content_2"])?>
                </td>
                <td ALIGN="CENTER" >
                    <h3><?= __("Imagen derecha",TRANSDOMAIN)  ?></h3>
                    <?php $this->printFeaturedImage(__("imagen derecha",TRANSDOMAIN) ,["image_1"]) ?>
                </td>
            </tr>
            <tr>
                <td ALIGN="CENTER" >
                    <h3><?= __("Imagen izquierda",TRANSDOMAIN)  ?></h3>
                    <?php $this->printFeaturedImage(__("imagen izquierda",TRANSDOMAIN) ,["image_2"]) ?>

                </td>
                <td >
                    <h3><?= __("Nombre de navegación 3" ,TRANSDOMAIN) ?>:</h3>

                    <input
                        type="text"
                        placeholder="<?= __("Catering." ,TRANSDOMAIN) ?>"
                        name="<?=  $this->meta_key; ?>[title_3]"
                        id="<?=  $this->meta_key; ?>_title_3"
                        value="<?=  $this->meta_value['title_3']; ?>"
                        class="ancho_100 i18n-multilingual" />

                    <br><br>
                    <strong><?= __("Contenido 3",TRANSDOMAIN)  ?></strong>
                    <?php $this->printInstructions(); $this->printWpEditor(["content_3"])?>
                </td>
            </tr>
        </table>
        <?php

	}

    protected function printInstructions()
    {
        ?>
        <h4><?= __("Instrucciones" ,TRANSDOMAIN) ?>:</h4>
        <p>
            <strong><?= __("Título" ,TRANSDOMAIN) ?>:</strong> <?= __("Negrita" ,TRANSDOMAIN) ?><br>
            <strong><?= __("Nota" ,TRANSDOMAIN) ?>:</strong> <?= __("Cita" ,TRANSDOMAIN) ?><br>
        </p>
        <?php
    }

}
