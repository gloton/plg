<?php
if (is_file ( "../lib/general.php" )) {
	include_once ("../lib/constantes.php");
	include_once ("../lib/general.php");
} else {
	include_once ("lib/constantes.php");
	include_once ("lib/general.php");
}
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
//$direccion_envio='j.gatica@yahoo.com'; 						//la direccion a la que se enviara el email.
$direccion_envio='contacto@plataformagroup.cl';
$url=$sitio.'/nosotros'; 		//la URL donde esta publicado el formulario. SIN la barra al final
//FIN CONFIGURACION
?>
<?php
//proceso del formulario
// si existe "enviar"...
if (isset ($_POST['enviar'])) {
// vamos a hacer uso de la clase phpmailer, 
require("class.phpmailer.php");
$mail = new PHPMailer();
//recogemos las variables y configuramos PHPMailer
$mail->From     = $_POST['email'];
$mail->FromName = $_POST['nombre'];
$mail->AddAddress($direccion_envio); 
$mail->Subject = "Contacto desde el Formulario";
$mail->AddReplyTo($_POST['email'],$_POST['nombre']);
$mail->IsHTML(true);                              
$comentario=$_POST['comentario'];
//comprobamos si se adjunto un archivo, y si su tamano es menor al permitido
if (isset($_FILES['archivo']['tmp_name'])) {
$tipo=$_FILES['archivo']['type'];
//Formatos de archivo permitidos, si desean agregar mas, agregar un case para cada formato. 
switch ($tipo) {
/*	
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
*/
	case "application/vnd.openxmlformats-officedocument.wordprocessingml.document":
	$ext="docx";
	break;	
	case "application/msword":
	$ext="doc";
	break;
	case "application/pdf":
	$ext="pdf";
	break;	
/*	
	case "application/rtf":
	$ext="rtf";
	break;	
*/
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
if ($_POST['email']!='' && $_POST['nombre']!='' && $_POST['comentario']!='' && $error_archivo=='') {
// copiamos el archivo en el servidor
copy($_FILES['archivo']['tmp_name'],'archivos/'.$nuevonombre);
//armamos el html
$contenido = '<html><body>';
$contenido .= '<h2>Contacto desde formulario</h2>';
$contenido .= '<p>Enviado el '.  date("d M Y").'</p>';
$contenido .= '<hr />';
$contenido .= '<p>Nombre: <strong>'.$_POST['nombre'].'</strong>';
$contenido .= '<p>Email: <strong>'.$_POST['email'].'</strong>';
$contenido .= '<p>Fono de Contacto: <strong>'.$_POST['fono'].'</strong>';
$contenido .= '<p>Area de Interes: <strong>'.$_POST['areaInteres'].'</strong>';
$contenido .= '<p>Archivo: <strong><a href="'.$url.'/archivos/'.$nuevonombre.'">'.$nuevonombre.'</a> (formato:'.$ext.' - '.$tamano.' bytes)</strong>';
$contenido .= '<p>Comentario: <strong>'.$comentario.'</strong>';
$contenido .= '<hr />';
$contenido .= '</body></html>';
$mail->Body    = $contenido;
$mail->AddAttachment('archivos/'.$nuevonombre.'', $nuevonombre);  // optional name
// si todos los campos fueron completados enviamos el mail
$mail->Send();
$flag='ok';
$mensaje='<div id="ok">Su archivo ha sido adjuntado con &eacute;xito<br /> Gracias por Contactarnos</div>';
} else {
	
//si no todos los campos fueron completados se frena el envio y avisamos al usuario	
$flag='err';
$mensaje='<div id="error">- Los Campos Marcados Con * Son Requeridos. '.$error_archivo.'</div>';
}
}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<?php

$selected = "NOSOTROS";
$pagina = "TRABAJA CON NOSOTROS "
?>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>EMPRESA « Plataforma Group</title>
<link type="text/css" rel="stylesheet" href="../css/styles.css" />
<link type="text/css" rel="stylesheet" href="../css/nosotros.css" />
<script
	src="https://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js"></script>
<script src="../js/validaciones.js"></script>
<script language="javascript" src="../js/jquery.js"></script>
<style type="text/css">
/*marca menu pp pagina seleccionada*/
#li_nosotros a {
	background: none repeat scroll 0 0 #f0f0f0;
	color: #000000;
	opacity: 1;
}
</style>
</head>
<body>
	<div id="wrap">
	<?php include_once("../partes/header.php"); ?>
    <div class="contenedor">
    	<?php include_once("../partes/breadcrumbs.php");?>
		<div class="two_column">
				<div class="left_col">
					<div class="contact-form-wrap">
						<h4>Postula a Plataforma Group</h4>
						<img src="../images/tablero-ajedres.png" width="476" height="221" />
						<p>
							En Plataforma Group estamos en constante búsqueda de los mejores
							profesionales para potenciar nuestras áreas de negocios. Si
							quieres integrarte a un equipo de profesionales con basta
							experiencia, encontrar un excelente clima laboral y muchas
							posibilidades de crecimiento profesional, ingresa tus datos y tu
							currículum en el formulario de la derecha o envíanos tu
							currículum a <a href="mailto:contacto@plataformagroup.cl"
								style="color: #1F9D48;">contacto@plataformagroup.cl</a>
						</p>
					</div>

				</div>
				<div class="right_col">
					<!--jgl 14/05/2012 inicio formulario-->
					<div id="form">   	    
        <? echo $mensaje; /*mostramos el estado de envio del form */ ?>
        <? if ($flag!='ok') { ?>
        <form id="fmrCurriculum"
							action="<?php echo $_SERVER['PHP_SELF'];?>" method="post"
							enctype="multipart/form-data">
							<fieldset>
								<p>
									<label for="nombre">Nombre *</label> <input
										<? if (isset ($flag) && $_POST['nombre']=='') { echo 'class="error"';} else {echo 'class="campo"';} ?>
										type="text" name="nombre" value="<? echo $_POST['nombre'];?>"
										onkeypress="return validar(event)" />
								</p>
								<p>
									<label for="email">Email *</label> <input
										onblur="valida_correo(document.getElementById('email').value);"
										<?php if (isset ($flag) && $_POST['email']=='') { echo 'class="error"';} else {echo 'class="campo"';} ?>
										type="text" name="email" id="email"
										value="<? echo $_POST['email'];?>" />
								</p>
								<p>
									<label for="fono">Fono de Contacto *</label> <input
										<? if (isset ($flag) && $_POST['fono']=='') { echo 'class="error"';} else {echo 'class="campo"';} ?>
										type="text" name="fono" value="<? echo $_POST['fono'];?>" />
								</p>
								<p>
									<label for="areaInteres">Área de Interes *</label> <input
										<? if (isset ($flag) && $_POST['areaInteres']=='') { echo 'class="error"';} else {echo 'class="campo"';} ?>
										type="text" name="areaInteres"
										value="<? echo $_POST['areaInteres'];?>"
										onkeypress="return validar(event)" />
								</p>
								<p>
									<label for="archivo">Subir Archivo* (.doc, .pdf)</label> <input
										id="bntExaminar"
										<? if (isset ($flag) && $ext=='error' || $tamano > $maximo_tamano) { echo 'class="error"';} else {echo 'class="campo"';} ?>
										type="file" name="archivo"
										value="<? echo $_FILE['archivo'];?>" />
								</p>
								<p>
									<label for="comentario">Comentario*</label>
									<textarea
										<? if (isset ($flag) && $_POST['comentario']=='') { echo 'class="com-error"';} else {echo 'class="com"';} ?>
										name="comentario"><? echo $_POST['comentario'];?></textarea>
								</p>
								<p>
									<input class="boton" type="submit" name="enviar" value="enviar" />
								</p>
							</fieldset>
						</form>
        <? } ?>
	</div>
					<!-- end form-->
					<!--jgl 14/05/2012 fin formulario-->
				</div>
				<div class="clearfix"></div>
			</div>
		</div>
		<div class="clearfix"></div>
	<?php include_once("../partes/footer.php"); ?>
</div>
</body>
</html>