<?php

/*
este formulario utiliza la clase PHPMailer para el envio y proceso.
Es solo un ejemplo de una posible implementacion de PHPMailer
La clase se puede descargar desde http://phpmailer.sourceforge.net/
Junto con mas ejemplos y documentacion.
*/

/*
NOTA: 
este archivo debe estar acompañado de una carpeta
con el nombre "archivos" en donde se copiaran los
archivos. Esta carpeta debe tener chmod 777. 
*/
//CONFIGURACION 
$maximo_tamano= '6000000'; 														//tamaño maximo de los archivos. 100000 equivale a 100kb.
$direccion_envio= 'info@pujol.com.mx'; 		//la direccion a la que se enviara el email.
$url= 'http://www.eno.com.mx/'; //la URL donde esta publicado el formulario. SIN la barra al final

//FIN CONFIGURACION
?>


<?PHP
//proceso del formulario
// si existe "enviar"...
if (isset ($_POST['enviar'])) {

// vamos a hacer uso de la clase phpmailer, 
require("class.phpmailer.php");

$mail = new PHPMailer();

$_POST['email']='Newsletter@';

//recogemos las variables y configuramos PHPMailer
$mail->From     = $_POST['email'];
$mail->FromName = $_POST['nombre'];
$mail->AddAddress($direccion_envio); 
$mail->Subject = "Newsletter Eno";
$mail->AddReplyTo($_POST['email'],$_POST['nombre']);
$mail->IsHTML(true);                              
$empresa=$_POST['empresa'];



//comprobamos si se adjunto un archivo, y si su tamano es menor al permitido
if (isset($_FILES['archivo']['tmp_name'])) {
$tipo=$_FILES['archivo']['type'];
//Formatos de archivo permitidos, si desean agregar mas, agregar un case para cada formato. 
switch ($tipo) {
	case "image/gif":
	$ext="gif";
	break;
	case "image/pjpeg":
	$ext="jpg";
	break;
	case "image/jpeg":
	$ext="jpg";
	break;
	case "image/png":
	$ext="png";
	break;
	case "application/zip":
	$ext="zip";
	break;
	case "application/msword":
	$ext="doc";
	break;
	case "application/msword":
	$ext="docx";
	break;
	case "application/pdf":
	$ext="pdf";
	break;	
	case "application/rtf":
	$ext="rtf";
	break;	
	case "application/octet-stream":
	$extension_type= explode ('.', $_FILES['archivo']['name']);
	$ext= end($extension_type);
	if($ext!="rar") {$ext="error";}
	break;			
	default:
	$ext="error";
	break;
}

$aleatorio = rand(); 
$nombreoriginal= explode ('.', $_FILES['archivo']['name']);
$tamano=$_FILES['archivo']['size'];
$nuevonombre=$nombreoriginal[0].'-'.$aleatorio.'.'.$ext;
}

if (isset ($nuevonombre)) {
if ($ext=="error") {$error_archivo="<br />- Formato de archivo no permitido.";}
if ($tamano > $maximo_tamano) {$error_archivo="<br />- El tama&ntilde;o de su archivo supera el m&aacute;ximo permitido.";}
}

//comprobamos si todos los campos fueron completados
if ($_POST['empresa']!='') {

// copiamos el archivo en el servidor


//armamos el html
$contenido = '<html><body>';
$contenido .= '<b>Newsletter eno</b>';
$contenido .= '<p>Enviado el '.  date("d M Y").'</p>';
$contenido .= '<hr />';
$contenido .= '<p>Correo Electronico: <strong>'.$_POST['empresa'].'</strong>';
$contenido .= '<p> <strong>'.$_POST['nombre'].'</strong>';






// $contenido .= '<p>Comentario: <strong>'.$comentario.'</strong>';
$contenido .= '<hr />';
$contenido .= '</body></html>';

$mail->Body    = $contenido;
$mail->AddAttachment('archivos/'.$nuevonombre.'', $nuevonombre);  // optional name
// si todos los campos fueron completados enviamos el mail

$mail->Send();

$flag='ok';
$mensaje='<div id="ok">
<p>Gracias.</p>

</div>';
} else {
	
//si no todos los campos fueron completados se frena el envio y avisamos al usuario	
$flag='err';
$mensaje='<div id="error">*Error. '.$error_archivo.'</div>';

}
}
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
	"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

	<head>
		<meta http-equiv="content-type" content="text/html; charset=utf-8" />
	<script type="text/javascript" src="http://fast.fonts.com/jsapi/52bdf6b3-4229-4613-b0bc-c72df24f35e9.js"></script>

		<title>Newsletter eno</title>

<style>
	@font-face{
   		font-family: "Calibri";
   		src: url("../fonts/Calibri.eot");
   		src: url("../fonts/Calibri.eot?#amocristalab") format("embedded-opentype"),
        url("../fonts/Calibri.woff") format("woff"),
        url("../fonts/Calibri.ttf") format("truetype"),
        url("../fonts/Calibri.svg#Calibri") format("svg");
}

@font-face {
   font-family: "Calibri-bold";
   src: url("../fonts/Calibri-Bold.eot");
   src: url("../fonts/Calibri-Bold.eot?#amocristalab") format("embedded-opentype"),
        url("../fonts/Calibri-Bold.woff") format("woff"),
        url("../fonts/Calibri-Bold.ttf") format("truetype"),
        url("../fonts/Calibri-Bold.svg#Calibri-Bold") format("svg");
}

body {
			background-color: #FFF;
			font-size:11px;
			color:#000;
			margin-top:0;
			font-family: "Calibri";
			margin:0;
			background-color:transparent;
	}
	

	#form {
	  	 border: 0px double #eaeaea;
		 padding: 1em;
		 width: 253px;
		 font-family:'Calibri';
		 font-size:11px;
		 margin-top:5px;
}


	#form .campo {
			border: 1px solid #000;
			font-size: 11px;
			width:200px;
			font-family:'Calibri';
			background-color: transparent;
			color:#000;
	}

	#form .error {
			border: 1px solid #F00;
			font-size: 11px;
			width:200px;
			font-family:'Calibri';
			background-color: transparent;
			color:#000;
}


  #form .boton {
			border: 0px solid #999;
			padding: 0.3em;
			font-size: 10px;
			width: 4em;
			font-family:'Calibri-bold';
			color:#E63328;
			background-color:transparent;
			cursor:pointer;
		}

	 #error {
		  border: 0px dashed #F00;
		  padding: 0px;
		  font-family:'Calibri-bold';
		  font-size:9px;
		  color:#F00;
		  position:absolute;
		  bottom:7px;}

	#ok {
	    border: 0px dashed #060;
	    background-color:#FFF;
	    padding: 5px;
	    font-size:12px;
		font-family:'Calibri';
		text-align:center;
		color:#000;
		}
			
</style>

	</head>
	<body>
	<div id="form">
		
<? echo $mensaje; /*mostramos el estado de envio del form */ ?>
<? if ($flag!='ok') { ?>


	<br /><form action="<?php echo $PHP_SELF;?>" method="post" enctype="multipart/form-data">
	

 
	  Nombre

	 <br /><input <? if (isset ($flag) && $_POST['nombre']=='') { echo 'class="error"';} else {echo 'class="campo"';} ?> type="text" name="nombre" value="<? echo $_POST['nombre'];?>" />
     
<p style="margin-top:4px;">Email
	<br /><input <? if (isset ($flag) && $_POST['empresa']=='') { echo 'class="error"';} else {echo 'class="campo"';} ?> type="text" name="empresa" value="<? echo $_POST['empresa'];?>" /></p>
	
	
   

	       
    


    
		
<div align="right" style="width:205px;margin-top:-8px;position:relative;">

<input class="boton" type="submit" name="enviar" value="Enviar" />
</div>
    
    


    
	
    
	</form>
<? } ?>
	</div> <!-- end form-->

	</body>
</html>