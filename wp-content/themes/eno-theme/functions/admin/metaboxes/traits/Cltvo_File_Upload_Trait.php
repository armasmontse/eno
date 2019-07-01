<?php


trait Cltvo_File_Upload_Trait {

	/* Define el metodo que inicializa el valor del meta */
	public static function setFileValueInPath(array $meta_values ,array $meta_path){
		$value = $meta_values;

		foreach ($meta_path as $new_path) {
            $value = (array) static::initializeFileInfo(isset( $value[$new_path]) ? $value[$new_path] : []  );
        }

		return (object) $value;
	}


	protected static function initializeFileInfo($file_info)
    {
		$file_info = is_array($file_info) ? $file_info : [] ;
		$file_info['file_id'] = isset($file_info['file_id']) ? $file_info['file_id'] :  '';
		$file_info['filename'] = isset($file_info['filename']) ? $file_info['filename'] :  '';
		$file_info['url'] = wp_get_attachment_url($file_info['file_id']);
		return (object) $file_info;
    }



	protected function printFileInput(array $path = [])
	{
		$file_value = $this->meta_value;
		$name_path = $this->meta_key;
		$id_path = $this->meta_key;

		foreach ($path as $part) {
			$path = (string) $part;
			$file_value = $file_value[$part];
			$name_path = $name_path."[".$part."]";
			$id_path = $id_path."_".$part;
		}

		?>
		<div  id="<?= $id_path ?>" class="banner_row fileUpload_row_JS" >
			<input type="button" class="button cltvo_upload_JS" value="Add" style="display: <?= $file_value->url ? 'none' : 'block'; ?>">
									<p class="fileUpload__success fileUpload__success_JS"><?= $file_value->filename  != '' ? $file_value->filename  : '' ?></p>
									<input type="button" class="button cltvo_remove_upload_JS" value="Delete" style="display: <?= $file_value->url ? 'block' : 'none'; ?>">
									<input type="hidden"
										name="<?= $name_path ?>[file_id]" class="cltvo_file_id_input_JS"
										value="<?= $file_value->url ? $file_value->file_id : ''; ?>">
									<input type="hidden"
										name="<?= $name_path ?>[filename]" class="cltvo_filename_input_JS"
										value="<?= $file_value->url ? $file_value->filename  : ''; ?>">

		</div>

		<?php
	}


}
