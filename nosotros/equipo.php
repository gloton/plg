<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<?php
include_once ("../lib/constantes.php");
include_once ("../lib/general.php");
$selected = "NOSOTROS";
$pagina = "EQUIPO "?>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title><?=$pagina?> <?=NOMBRE_EMPRESA ?></title>
<link type="text/css" rel="stylesheet" href="../css/styles.css" />
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
<body id="pageEquipo">
	<div id="wrap">
	<?php include_once("../partes/header.php"); ?>
    <div class="contenedor">
    	<?php include_once("../partes/breadcrumbs.php");?>
		<div id="equipo-top" class="sc-box">
				<div id="equipo-organigrama">
					<img src="../images/organigrama.png" width="567" height="538" />
				</div>
				<div id="equipo-desc">
					<h2>Equipo de Trabajo</h2>
					<p>Contamos con un experimentado equipo de expertos en diversas
						áreas tecnológicas y de negocios lo que nos permite ofrecer
						soluciones robustas. Nos orientamos totalmente a la satisfacción
						del cliente y es por ello que todas nuestros servicios están
						respaldados por un completo staff de soporte y atención
						personalizada al usuario.</p>
					<img src="../images/equipo_trabajo.jpg" width="240" height="160" />
				</div>
				<div class="clearfix"></div>
			</div>

		</div>
		<div class="contenedor">
			<!--jgl cajitas inicio-->
			<div class="post-content">
				<div class="sc-col-4-1">
					<h4>Area de Desarrollo:</h4>
					<div style="margin-top: 0px; margin-bottom: 0px;" class="sc-hr"></div>
					<p>Departamento responsable del análisis y construcción de
						proyectos informáticos, tanto los desarrollos a medida como los
						evolutivos de nuestros productos</p>
				</div>
				<div class="sc-col-4-1">
					<h4>Area de Servicing:</h4>
					<div style="margin-top: 0px; margin-bottom: 0px;" class="sc-hr"></div>
					<p>Departamento dedicado a la post venta, servicio y atención del
						cliente, basado en las dos áreas de Mesa de ayuda y Desarrollo y/o
						soporte y continuidad de servicio.</p>
				</div>
				<div class="sc-col-4-1">
					<h4>Area QA:</h4>
					<div style="margin-top: 0px; margin-bottom: 0px;" class="sc-hr"></div>
					<p>Área que tiene como fin el aseguramiento de la calidad de todos
						los sistemas que se desarrollan dentro de la empresa, tanto en el
						departamento de desarrollo como en el área de Servicing.</p>
				</div>
				<div class="sc-col-4-1 sc-last">
					<h4>Area Service Tonic:</h4>
					<div style="margin-top: 0px; margin-bottom: 0px;" class="sc-hr"></div>
					<p>Departamento de la empresa dedicada única y exclusivamente a la
						representación, comercialización y configuración de un sistema
						llamado Service Tonic, software español orientado entre otras
						cosas a las áreas de Help desk.</p>
				</div>
				<div class="clearfix"></div>
				<div class="sc-col-4-1">
					<h4>Area Nuevos Negocios:</h4>
					<div style="margin-top: 0px; margin-bottom: 0px;" class="sc-hr"></div>
					<p>Área encargada de potenciar los clientes y productos existentes
						de manera de generar un valor agregado y asegurar la continuidad
						de los clientes actuales.</p>
				</div>
				<div class="sc-col-4-1">
					<h4>Soporte IT:</h4>
					<div style="margin-top: 0px; margin-bottom: 0px;" class="sc-hr"></div>
					<p>Equipo responsable de la continuidad operacional de los
						servicios que proveemos a nuestros clientes</p>
				</div>
				<div class="sc-col-4-1">
					<h4>Comercial:</h4>
					<div style="margin-top: 0px; margin-bottom: 0px;" class="sc-hr"></div>
					<p>Área dedicada a la elaboración de las estrategias comerciales de
						PLG</p>
				</div>
				<div class="sc-col-4-1 sc-last">
					<h4>Expertis:</h4>
					<div style="margin-top: 0px; margin-bottom: 0px;" class="sc-hr"></div>
					<p>Departamento cuya misión es la comercialización, implementación
						y soporte de la solución española de ERP/CRM Solmicro-Expertis
						partner de PLG</p>
				</div>
				<div class="clear"></div>
			</div>
			<!--jgl cajitas fin-->
		</div>
	<?php include_once("../partes/footer.php"); ?>     	       		
</div>
</body>
</html>
