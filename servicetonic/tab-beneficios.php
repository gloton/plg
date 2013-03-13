<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<?php
include_once ("../lib/constantes.php");
include_once ("../lib/general.php");
?>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<link type="text/css" rel="stylesheet"
	href="<?php echo $sitio; ?>/css/reset.css" />
<title>Tab Beneficios</title>
<style type="text/css">
body {
	border: 0;
	padding: 0;
	margin: 0;
	color: #666666;
	font-family: "Helvetica Neue", Arial, Helvetica, sans-serif;
	line-height: 16px;
}
.detalles-tabs {
	height: 320px;
	width: 460px;
}
#beneficios_left {
	float: left;
	height: 310px;
	padding-left: 35px;
	padding-top: 10px;
	padding-right: 5px;
	width: 220px;
}
#beneficios_left li,#beneficios_right li {
	background-image:
		url("../images/tabs-vertical-slider/bullet-orangepng-6px.png");
	background-position: 5px 4px;
	background-repeat: no-repeat;
	font-size: 13px;
	margin-bottom: 14px;
	padding-left: 14px;
}
#beneficios_right {
	float: left;
	height: 310px;
	padding-top: 10px;
	width: 200px;
}
div.detalles-tabs li p span {
	color: #666666;
	font-size: 12px;
}
</style>
</head>
<body>
	<div class="detalles-tabs">
		<div id="beneficios_left">
			<ul id="lista-beneficios-left">
				<li>
					<p>
						<span>GESTIÓN</span> de múltiples servicios en una única
						herramienta
					</p>
				</li>
				<li>
					<p>
						<span>RÁPIDA</span> puesta en marcha, en cuestión de días o
						incluso horas
					</p>
				</li>
				<li>
					<p>
						<span>100% Adaptable</span> a las necesidades de su negocio
					</p>
				</li>
				<li>
					<p>
						<span>PLENA INTEGRACIÓN</span> con el correo electrónico
					</p>
				</li>
				<li>
					<p>
						<span>ALTA CALIDAD</span> de atención a sus clientes administrando
						acuerdos de niveles de servicio (SLA)
					</p>
				</li>
			</ul>
		</div>
		<div id="beneficios_right">
			<ul id="lista-beneficios-right">
				<li>
					<p>
						<span>ACCESO</span> inmediato gracias a su arquitectura 100%
						basada en web
					</p>
				</li>
				<li>
					<p>
						<span>REDUCCIÓN</span> de costes operacionales
					</p>
				</li>
				<li>
					<p>
						<span>COMERCIALIZACIÓN A SU MEDIDA</span> Licencia o SAAS
					</p>
				</li>
				<li>
					<p>
						<span>MODULO DE GESTIÓN DE ACTIVOS Y CONTROL DE STOCK (CMBD)</span>
						integrado a la gestión de incidencias
					</p>
				</li>
			</ul>
		</div>
	</div>
</body>
</html>