<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<?php
if (is_file ( "../lib/general.php" )) {
	include_once ("../lib/constantes.php");
	include_once ("../lib/general.php");
} else {
	include_once ("lib/constantes.php");
	include_once ("lib/general.php");
}
$selected = "NOSOTROS";
?>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>PLANTILLA « Plataforma Group</title>
<link type="text/css" rel="stylesheet"
	href="<?php echo $sitio; ?>/css/styles.css" />
<script
	src="https://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js"></script>
<script type="text/javascript" src="<?php echo $sitio; ?>/js/jquery.js"></script>
</head>
<body>
	<div id="wrap">
	<?php include_once($sitio."/partes/header.php"); ?>
    <div class="contenedor"></div>
		<div class="barra-bottom">
			<div id="footer">
				<ul class="listafooter">
					<li class="titulista"><span>Plataforma Group</span></li>
					<li>Monjitas #527, Of. 1316</li>
					<li>Santiago</li>
					<li>Tel. (562) 366 0130</li>
					<li>contacto@platafomagoup.cl</li>
				</ul>
				<ul class="listafooter">
					<li class="titulista"><span>Empresa</span></li>
					<li>Equipo</li>
					<li>Trabaja con Nosotros</li>
					<li>&nbsp;</li>
				</ul>
				<ul class="listafooter">
					<li class="titulista"><span>Productos</span></li>
					<li>Soluciones</li>
					<li>Productos</li>
					<li>Consultoría</li>
				</ul>
			</div>
			<div id="post-footer">Copyright © Prueba, Privacy Statement Terms and
				Conditions.</div>
		</div>
	<?php include_once($sitio."/partes/footer.php"); ?>
</div>
</body>
</html>
