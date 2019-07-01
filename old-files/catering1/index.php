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
$direccion_envio= 'santiago@enriqueolvera.com'; 		//la direccion a la que se enviara el email.
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

//recogemos las variables y configuramos PHPMailer
$mail->From     = $_POST['email'];
$mail->FromName = $_POST['nombre'];
$mail->FromName = $_POST['evento'];
$mail->FromName = $_POST['fecha'];
$mail->FromName = $_POST['numero'];
$mail->FromName = $_POST['comentario'];
$mail->AddAddress($direccion_envio); 
$mail->Subject = "Catering ENO";
$mail->AddReplyTo($_POST['email'],$_POST['nombre']);
$mail->IsHTML(true);                              
$telefono=$_POST['telefono'];

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
if ($_POST['email']!='' && $_POST['nombre']!='' && $_POST['evento']!=''&& $_POST['comentario']!='' && $_POST['telefono']!=''&& $_POST['fecha']!=''&& $_POST['numero']!='') {

//armamos el html
$contenido = '<html><body>';
$contenido .= '<b>Catering ENO</b>';
$contenido .= '<p>Enviado el '.  date("d M Y").'</p>';
$contenido .= '<hr />';
$contenido .= '<p>Email: <strong>'.$_POST['nombre'].'</strong>';
$contenido .= '<p>Teléfono: <strong>'.$_POST['telefono'].'</strong>';
$contenido .= '<p>Nombre: <strong>'.$_POST['email'].'</strong>';
$contenido .= '<p>Tipo de evento: <strong>'.$_POST['evento'].'</strong>';
$contenido .= '<p>Fecha del evento: <strong>'.$_POST['fecha'].'</strong>';
$contenido .= '<p>Número de personas: <strong>'.$_POST['numero'].'</strong>';
$contenido .= '<p>Mensaje: <strong>'.$_POST['comentario'].'</strong>';




// $contenido .= '<p>Comentario: <strong>'.$comentario.'</strong>';
$contenido .= '<hr />';
$contenido .= '</body></html>';

$mail->Body    = $contenido;
$mail->AddAttachment('archivos/'.$nuevonombre.'', $nuevonombre);  // optional name
// si todos los campos fueron completados enviamos el mail

$mail->Send();

$flag='ok';
$mensaje='<div id="ok"><p>Gracias.</p></div>';
} else {
	
//si no todos los campos fueron completados se frena el envio y avisamos al usuario	
$flag='err';
$mensaje='<div id="error">- Todos los campos son requeridos. '.$error_archivo.'</div>';

}
}
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
	"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">


	<head>
		<meta http-equiv="content-type" content="text/html; charset=utf-8" />
		<title>Catering eno</title>

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
    font-family: "Bold";
    src: url('../fonts/CaeciliaLTStd-Bold.eot');
    src: url('../fonts/CaeciliaLTStd-Bold.eot?#iefix') format('embedded-opentype'),
         url('../fonts/CaeciliaLTStd-Bold.woff') format('woff'),
         url('../fonts/CaeciliaLTStd-Bold.ttf') format('truetype'),
         url('../fonts/CaeciliaLTStd-Bold.svg#CaeciliaLTStd-Bold') format('svg');
}

@font-face {
    font-family: "Roman";
    src: url('../fonts/CaeciliaLTStd-Roman.eot');
    src: url('../fonts/CaeciliaLTStd-Roman.eot?#iefix') format('embedded-opentype'),
         url('../fonts/CaeciliaLTStd-Roman.woff') format('woff'),
         url('../fonts/CaeciliaLTStd-Roman.ttf') format('truetype'),
         url('../fonts/CaeciliaLTStd-Roman.svg#CaeciliaLTStd-Roman') format('svg');
}

	body {
			background-color: #000;
			font-size:11px;
			color:#fff;
			margin-top:0;
			font-family: "Bold";
			margin:0;
			background-color:transparent;
	}
	
	p{
	margin-top:-10px;	
}

		
	#form {
	  	 border: 0px double #eaeaea;
		  padding: 1em;
		  width: 223px;
		  font-family:'Bold';
		  font-size:11px;
		  margin-top:5px;
}


	#form .campo {
			border-bottom: 1px solid;
			border-bottom-color: #FFF;
			border-top:0px;
			border-right:0px;
			border-left:0px;
			padding: 0.3em;
			font-size: 11px;
			width:160px;
			font-family:'Bold';
			background-color: transparent;
			color:#fff;
	}

	#form .error {
			border-bottom: 1px solid;
			border-bottom-color: #F00;
			border-top:0px;
			border-right:0px;
			border-left:0px;
			padding: 0.3em;
			font-size: 11px;
			width:160px;
			font-family:'Bold';
			background-color: transparent;
			color:#fff;
	}

	#form .campo-correo {
			border-bottom: 1px solid;
			border-bottom-color: #FFF;
			border-top:0px;
			border-right:0px;
			border-left:0px;
			padding: 0.3em;
			font-size: 11px;
			width:170px;
			font-family:'Bold';
			background-color: transparent;
			color:#fff;
	}

	#form .error-correo {
			border-bottom: 1px solid;
			border-bottom-color: #F00;
			border-top:0px;
			border-right:0px;
			border-left:0px;
			padding: 0.3em;
			font-size: 11px;
			width:170px;
			font-family:'Bold';
			background-color: transparent;
			color:#fff;
	}

	#form .campo-tel {
			border-bottom: 1px solid;
			border-bottom-color: #FFF;
			border-top:0px;
			border-right:0px;
			border-left:0px;
			padding: 0.3em;
			font-size: 11px;
			width:155px;
			font-family:'Bold';
			background-color: transparent;
			color:#fff;
	}

	#form .error-tel {
			border-bottom: 1px solid;
			border-bottom-color: #F00;
			border-top:0px;
			border-right:0px;
			border-left:0px;
			padding: 0.3em;
			font-size: 11px;
			width:155px;
			font-family:'Bold';
			background-color: transparent;
			color:#fff;
	}

	#form .campo-evento {
			border-bottom: 1px solid;
			border-bottom-color: #FFF;
			border-top:0px;
			border-right:0px;
			border-left:0px;
			padding: 0.3em;
			font-size: 11px;
			width:120px;
			font-family:'Bold';
			background-color: transparent;
			color:#fff;
	}

	#form .error-evento {
			border-bottom: 1px solid;
			border-bottom-color: #F00;
			border-top:0px;
			border-right:0px;
			border-left:0px;
			padding: 0.3em;
			font-size: 11px;
			width:120px;
			font-family:'Bold';
			background-color: transparent;
			color:#fff;
	}

	#form .campo-fecha {
			border-bottom: 1px solid;
			border-bottom-color: #FFF;
			border-top:0px;
			border-right:0px;
			border-left:0px;
			padding: 0.3em;
			font-size: 11px;
			width:118px;
			font-family:'Bold';
			background-color: transparent;
			color:#fff;
	}

	#form .error-fecha {
			border-bottom: 1px solid;
			border-bottom-color: #F00;
			border-top:0px;
			border-right:0px;
			border-left:0px;
			padding: 0.3em;
			font-size: 11px;
			width:118px;
			font-family:'Bold';
			background-color: transparent;
			color:#fff;
	}

	#form .campo-numero {
			border-bottom: 1px solid;
			border-bottom-color: #FFF;
			border-top:0px;
			border-right:0px;
			border-left:0px;
			padding: 0.3em;
			font-size: 11px;
			width:85px;
			font-family:'Bold';
			background-color: transparent;
			color:#fff;
	}

	#form .error-numero {
			border-bottom: 1px solid;
			border-bottom-color: #F00;
			border-top:0px;
			border-right:0px;
			border-left:0px;
			padding: 0.3em;
			font-size: 11px;
			width:85px;
			font-family:'Bold';
			background-color: transparent;
			color:#fff;
	}






#form .com {
			border: 1px solid #FFF;
			padding: 0.3em;
			font-size: 11px;
			width:202px;
			height:50px;
			font-family:'Bold';
			background-color: transparent;
			color:#fff;
}


	#form .com-error {
			border: 1px solid #F00;
			padding: 0.3em;
			font-size: 11px;
			width:202px;
			height:50px;
			font-family:'Bold';
			background-color: transparent;
			color:#fff;
		}
	




   #form .boton {
			border: 0px solid #999;
			padding: 0.3em;
			font-size: 11px;
			width: 4em;
			font-family:'Bold';
			color:#FFF;
			background-color:#000;
			cursor:pointer;
			}

	#error {
		  border: 0px dashed #F00;
		  padding: 0px;
		  font-family:'Calibri';
		  font-size:9px;
		  color:#F00;
		  position:absolute;
		  top:230px;}

	 #ok {
	    border: 0px dashed #060;
	    background-color:#000;
	    padding: 5px;
	    font-size:12px;
		font-family:'Calibri';
		text-align:center;
		color:#FFF;
		}
			
</style>

	</head>
	<body>
	<div id="form">
		
  
<? echo $mensaje; /*mostramos el estado de envio del form */ ?>
<? if ($flag!='ok') { ?>
<form action="<?php echo $PHP_SELF;?>" method="post" enctype="multipart/form-data">
	
    <p>Nombre: <input <? if (isset ($flag) && $_POST['email']=='') { echo 'class="error"';} else {echo 'class="campo"';} ?> type="text" name="email"  value="<? echo $_POST['email'];?>" /></p>
    
<p>Email: <input <? if (isset ($flag) && $_POST['nombre']=='') { echo 'class="error-correo"';} else {echo 'class="campo-correo"';} ?> type="text" name="nombre" value="<? echo $_POST['nombre'];?>" />
    </p>
    
    	
	
    
    
    
    
<p>	Teléfono: <input <? if (isset ($flag) && $_POST['telefono']=='') { echo 'class="error-tel"';} else {echo 'class="campo-tel"';} ?> type="text" name="telefono" value="<? echo $_POST['telefono'];?>" />
   </p>

	       
<p>Tipo de evento: <input <? if (isset ($flag) && $_POST['evento']=='') { echo 'class="error-evento"';} else {echo 'class="campo-evento"';} ?> type="text" name="evento" value="<? echo $_POST['evento'];?>" />
    <p>
    
    <p>	Fecha del evento: <input <? if (isset ($flag) && $_POST['fecha']=='') { echo 'class="error-fecha"';} else {echo 'class="campo-fecha"';} ?> type="text" name="fecha" value="<? echo $_POST['fecha'];?>" />
  </p>

	       

	<p>Número de personas: <input <? if (isset ($flag) && $_POST['numero']=='') { echo 'class="error-numero"';} else {echo 'class="campo-numero"';} ?> type="text" name="numero" value="<? echo $_POST['numero'];?>" />
    </p>
  
	
	<p><br />Mensaje:
	<br /><textarea <? if (isset ($flag) && $_POST['comentario']=='') { echo 'class="com-error"';} else {echo 'class="com"';} ?> name="comentario"><? echo $_POST['comentario'];?></textarea>
    </p>	
        
        
	<div align="right" style="width:212px;color:#FFF;margin-top:10px;"><input class="boton" type="submit" name="enviar" value="Enviar" /></div>
    
    
    
    
	</form>
<? } ?>
	</div> <!-- end form-->

	</body>
</html>