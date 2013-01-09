<?phprequire("./phpmailer5.2.1/class.phpmailer.php");
$nombre = $_POST["name"];
$correo = $_POST["email"];
$asunto = $_POST["subject"];
$mensaje = $_POST["message"];
$mail = new PHPMailer();
$mail->Host = "localhost";
$mail->From = $correo;
$mail->FromName = "Contacto desde Web";
$mail->Subject = $asunto;
$mail->AddAddress("contacto@platafomagoup.cl","Contacto PlataformaGroup");
//$mail->AddAddress("prueba2@w7.cl","Nombre 02");
//$mail->AddCC("prueba3@w7.cl");
//$mail->AddBCC("prueba4@w7.cl");//$mail->AddEmbeddedImage('logo.jpg','my-attach','logo.jpg');//jgl probando incrustar imagenes para outloo/*
 * DATOS DEL CONTACTO: armando el cuerpo del mensaje
 * */
$body = '
<table width="800" border="1" cellpadding="0" cellspacing="0">
  <tr>
    <th colspan="3" bgcolor="#CCCCCC" scope="row">Datos del contacto</th>
  </tr>
  <tr>
    <th width="203" align="left" bgcolor="#F0F0F0" scope="row">Nombre:</th>
    <td width="519" bgcolor="#F0F0F0">'.$_POST["name"].'</td>
    <td width="70" bgcolor="#F0F0F0">&nbsp;</td>
  </tr>
  <tr>
    <th align="left" scope="row">Email:</th>
    <td>'.$_POST["email"].'</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <th align="left" bgcolor="#F0F0F0" scope="row">Asunto:</th>
    <td bgcolor="#F0F0F0">'.$_POST["subject"].'</td>
    <td bgcolor="#F0F0F0">&nbsp;</td>
  </tr>
</table>
</table>		
';
if (isset($_POST["mostrarservicetonic"])) {
	if (isset($_POST["solicitud_demo"])) {
		$solicitud_demo = $_POST["solicitud_demo"];
	}else{
		$solicitud_demo = "Esta opcion no ha sido seleccionada";
	}
	if (isset($_POST["presentacion_terreno"])) {
		$presentacion_terreno = $_POST["presentacion_terreno"];
	}else{
		$presentacion_terreno= "Esta opcion no ha sido seleccionada";
	}
	if (isset($_POST["mas_informacion"])) {
		$mas_informacion = $_POST["mas_informacion"];
	}else{
		$mas_informacion= "Esta opcion no ha sido seleccionada";
	}
	if (isset($_POST["otros"])) {
		$otros = $_POST["otros"];
	}else{
		$otros= "Esta opcion no ha sido seleccionada";
	}
	$body.= '
<table width="800" border="1" cellpadding="0" cellspacing="0">
  <tr bgcolor="#CCCCCC">
    <th colspan="3" align="center" scope="row">Opciones elegidas sobre SERVICETONIC</th>
  </tr>
  <tr>
    <th width="201" align="left" bgcolor="#F0F0F0" scope="row">Solicita Demo:</th>
    <td width="550" bgcolor="#F0F0F0">'.$solicitud_demo.'</td>
    <td width="41" bgcolor="#F0F0F0">&nbsp;</td>
  </tr>
  <tr>
    <th align="left" scope="row">M&aacute;s Informaci&oacute;n:</th>
    <td>'.$mas_informacion.'</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <th align="left" bgcolor="#F0F0F0" scope="row">Presentaci&oacute;n en Terreno:</th>
    <td bgcolor="#F0F0F0">'.$presentacion_terreno.'</td>
    <td bgcolor="#F0F0F0">&nbsp;</td>
  </tr>
  <tr>
    <th align="left" scope="row">otros:</th>
    <td>'.$otros.'</td>
    <td>&nbsp;</td>
  </tr>
</table>		
';
}
$body.='
<table width="800" border="1" cellpadding="0" cellspacing="0">
  <tr bgcolor="#CCCCCC">
    <th colspan="3" scope="row">Mensaje</th>
  </tr>
  <tr>
    <th scope="row">&nbsp;</th>
    <td width="700">'.$_POST["message"].'</td>
    <td>&nbsp;</td>
  </tr>
</table>		
';
/*
$body  = "Hola <strong>amigo</strong><img alt='PHPMailer' src='cid:my-attach'><br>";
$body .= "probando <i>PHPMailer<i>.<br><br>";
$body .= "<font color='red'>Saludos</font>";
*/
$mail->Body = $body;
$mail->AltBody = "Hola amigo\nprobando PHPMailer\n\nSaludos";
//$mail->AddEmbeddedImage('logo.jpg','logo.jpg');
//$mail->AddAttachment("apachito.zip", "apachito.zip");
$mail->Send();
?>
<!DOCTYPE HTML>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title>Gracias por contactarnos</title>
	<!-- include these -->
	<link rel="stylesheet" href="../js/smoke/smoke.css" type="text/css" media="screen" />  
	<script src="../js/smoke/smoke.min.js" type="text/javascript"></script>
	
	<!-- you only need this if you want to include a theme...duh -->
	<link id="theme" rel="stylesheet" href="../js/smoke/themes/default.css" type="text/css" media="screen" />	<!-- styles/js for the demo page. ignore them...or don't. i don't really care. -->
	<script type="text/javascript" src="http://cdnjs.cloudflare.com/ajax/libs/jquery/1.6.2/jquery.min.js"></script>
	<link rel="stylesheet" href="../css/base.css" type="text/css" media="screen" />  
	<script language="javascript">
	$(document).ready(function() {
		smoke.alert('Gracias por contactarnos', {}, function(){
			//ejecutara luego de hacer click en OK
			history.back();
		});
	});		
	</script>	
</head>
<body>
		<div id="mail-contacto">
		</div></body>
</html>
