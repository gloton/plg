<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<?php
include_once("../lib/constantes.php");include_once("../lib/general.php");

?>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<link type="text/css" rel="stylesheet" href="<?php echo $sitio; ?>/css/reset.css" />
<title>Tab Beneficios</title>
<style type="text/css">
	body {
		border: 0;
		padding: 0;
		margin: 0;
		color: #666666;
		font-size: 13px;
		font-family: "Helvetica Neue",Arial,Helvetica,sans-serif;
		line-height: 16px;
	}
	div.clearfix{
	     width:1px;
	     height:1px;
	     display:block;
	     clear:both;
	     content: ".";
	}	
	.detalles-tabs {
	    height: 320px;
	    width: 460px;		
	}
	.detalles-tabs p {
		padding: 8px;
		padding-left: 40px;
		text-align: justify;
	}
	#gestion_activos_left{
	    float: left;
	    height: 310px;
	    padding-left: 35px;
	    padding-top: 10px;
		padding-right:5px;
	    width: 220px;
	}
	#gestion_activos_left li,
	#gestion_activos_right li {
	    background-image: url("../images/tabs-vertical-slider/bullet-orangepng-6px.png");
	    background-position: 5px 4px;
	    background-repeat: no-repeat;
	    font-size: 13px;
	    margin-bottom: 14px;
	    padding-left: 14px;
	}
	#gestion_activos_right {
	    float: left;
	    height: 310px;
	    padding-top: 10px;
	    width: 200px;	
	}
	div.detalles-tabs li p span {
		color: #666666;
	}	
	div.detalles-tabs ul li p {
		padding: 0;
	}
</style>
</head>
<body>
	<div class="detalles-tabs">
		<p>
		ServiceTonic tiene la capacidad de incorporar un completo módulo de 
		gestión de activos, Configuration Management Data Base (click aquí 
		para ir al folleto de CMDB), de acuerdo a estándar ITIL. Integrado 
		100% con el módulo de gestión de servicios, con lo cual Ud. podrá:
		</p>
		<div id="gestion_activos_left">
			<ul id="lista-gestion_activos-left">
				<li>
					<p><span>Saber</span> que activos están asociado a sus clientes</p>
				</li>
				<li>
					<p><span>Costos</span> de realizar una acción</p>
				</li>
				<li>
					<p><span>Impacto</span> de una falla en un grupo de clientes.</p>
				</li>
			</ul>			
		</div>
		<div id="gestion_activos_right">
			<ul id="lista-beneficios-right">
				<li>
					<p><span>Movimiento</span> del stock</p>
				</li>
				<li>
					<p><span>Solicitud y recepción</span> de activos</p>
				</li>
			</ul>			
		</div>		
	</div>
</body>
</html>