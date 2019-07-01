<?php
require_once 'traits/Cltvo_Wp_Editor_Trait.php';

class Cltvo_Comunity extends Cltvo_Metabox_Master
{
    use Cltvo_Wp_Editor_Trait;

    /**
     * sobre escribiendo las opcciones del master
     */
    protected $description_metabox = "Comunidad";
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
        $meta["content"] = isset($meta["content"]) ? $meta["content"] : "";
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
                    <strong><?= __("Nombre" ,TRANSDOMAIN) ?>:</strong>

                    <input
                        type="text"
                        placeholder="<?= __("comunidad eno" ,TRANSDOMAIN) ?>"
                        name="<?=  $this->meta_key; ?>[title]"
                        id="<?=  $this->meta_key; ?>_title"
                        value="<?=  $this->meta_value['title']; ?>"
                        class="ancho_100 i18n-multilingual" />
                        <br><br>
                </td>
            </tr>
            <tr>
                <td>
                    <strong><?= __("Contenido" ,TRANSDOMAIN) ?>:</strong>

                    <?php  $this->printWpEditor(["content"])?>
                </td>
            </tr>
        </table>
        <?php

	}


}
