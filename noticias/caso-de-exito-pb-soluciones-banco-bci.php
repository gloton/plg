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
$selected = "NOTICIAS";
?>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Caso de éxito PB Soluciones - Banco BCI « Plataforma Group</title>
<link type="text/css" rel="stylesheet" href="../css/styles.css" />
<link type="text/css" rel="stylesheet" href="../css/blog/styles.css" />
<script
	src="https://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js"></script>
<style type="text/css">
/*post*/
#wrapperBlog .post {
	width: 668px;
	height: 180px;
	margin: 10px auto;
}

#wrapperBlog .postSup {
	height: 142px;
}

#wrapperBlog .postInf {
	height: 38px;
	float: right;
	padding-right: 20px;
	font-weight: bold;
}

#wrapperBlog .postInf a {
	color: #1F9D48;
}

#wrapperBlog .introImg {
	width: 218px;
	height: 142px;;
	float: left;
}

#wrapperBlog .introText {
	width: 450px;
	height: 100%;
	float: left;
}
/*side right*/
</style>

<style type="text/css">
/*marca menu pp pagina seleccionada*/
#li_noticias a {
	background: none repeat scroll 0 0 #f0f0f0;
	color: #000000;
	opacity: 1;
}

/*DETALLES DEL ARTICULO*/
/*sobreescritura*/
#wrapperBlog #leftcolumn {
	color: #666666;
	float: left;
	margin: 10px 0;
	padding: 10px 10px 10px 0;
	width: 668px;
}

#leftcolumn .detalle_post {
	width: 630px;
}

#leftcolumn .detalle_post .wrap_datos {
	color: #666666;
	padding-left: 0px;
}

#leftcolumn .detalle_post .wrap_datos .postDate {
	background: url("images/calendar_gris_16.png") no-repeat scroll 18px 1px
		transparent;
	padding-left: 40px;
}

#leftcolumn .detalle_post .wrap_datos .postCategory {
	background: url("images/category_gris_16.png") no-repeat scroll 18px 1px
		transparent;
	padding-left: 40px;
}

#leftcolumn .detalle_post p em a {
	color: #F15D22;
}
</style>
</head>
<body>
	<div id="wrap">
	<?php include_once("../partes/header.php"); ?>
    <div class="contenedor">
			<!-- Begin wrapperBlog -->
			<div id="wrapperBlog">
				<!-- Begin Left Column -->
				<div id="leftcolumn">
					<h1>Caso de éxito PB Soluciones - Banco BCI</h1>
					<div class="detalle_post">
						<div class="wrap_datos">
							<div class="postDate">
								<span>Miércoles 01 de Febrero de 2012</span>
							</div>
							<div class="postCategory">
								<span>Novedades</span>
							</div>
						</div>
						<p>
							<img style="float: left; margin: 10px;"
								alt="PB Soluciones - Banco BCI"
								src="../images/noticias/fotos_noticia_pb-bci.jpg" /> La empresa
							PB Soluciones, ha elegido a PLATAFORMA GROUP como proveedor de
							servicios y a ServiceTonic (representado por nuestra empresa en
							Chile) como plataforma de implementación, para llevar a cabo un
							gran proyecto para su cliente estrella: Banco BCI, consistente en
							hacer el seguimiento de down time (o tiempo fuera de servicio)
							que tienen sus cajeros automáticos a lo largo de todo Chile.
						</p>
						<p>Bajo el diseño, implementación y administración de nuestros
							consultores en Chile y el equipo de desarrollo en España, se ha
							implementado un plan piloto con una base de datos de más de 200
							cajeros, a los cuales se les hace seguimiento desde febrero de
							2012, registrando incidencias y midiendo la responsabilidad de
							todos los involucrados, sabiendo quien incumple y porque motivos,
							con los tiempos previamente pactados para reponer un cajero en
							línea.
						</p>
						<p>Este seguimiento ha permitido al Banco contar con información
							que anteriormente desconocía, como: el origen de las fallas y
							quien tiene la responsabilidad en cada momento. Así mismo tener
							claridad respecto de que marcas/modelos de cajeros presentan
							mayor cantidad de incidencias y poder identificar errores
							causados por malos procedimientos administrativos (no carga de
							dinero) o bien que cajeros están presentando errores reiterados
							por motivos que sería fácil solucionar de forma definitiva. Esta
							información es vital y se traduce directamente en un ahorro
							significativo de recursos para el Banco además de mejorar el
							servicio que presta a sus clientes.
						</p>
						<p>El siguiente paso será la implementación de una interfaz
							geo-referenciada (montada sobre ServiceTonic) que permitirá
							mostrar un mapa de Chile con la ubicación exacta de los cajeros y
							saber cuáles están fuera de servicio, el motivo y la fecha/hora
							esperada de vuelta a línea, lo que se espera esté funcionando en
							Junio de 2013.
						</p>
					</div>
				</div>
				<!-- End Left Column -->
				<!-- Begin Right Column -->
				<div id="rightcolumn">
					<div id="noticias-right">
						<img src="../images/ipad-relleno.jpg" />
					</div>
					<div class="postModulo">
						<div class="postModuloTitle">
							<!--  
						<h3>Categorias</h3>
						-->
						</div>
						<div class="postModuloCategory"></div>
					</div>
				</div>
				<!-- End Right Column -->
				<div class="clearfix"></div>
			</div>
			<!-- End wrapperBlog -->
		</div>
	<?php include_once("../partes/footer.php"); ?>
</div>
</body>
</html>