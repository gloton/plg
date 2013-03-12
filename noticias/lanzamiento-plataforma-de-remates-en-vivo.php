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
<title><?=$selected;?> « Plataforma Group</title>
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
					<h1>Lanzamiento Plataforma de Remates en Vivo</h1>
					<div class="detalle_post">
						<div class="wrap_datos">
							<div class="postDate">
								<span>Martes 06 de Marzo de 2013</span>
							</div>
							<div class="postCategory">
								<span>Novedades</span>
							</div>
						</div>
						<p>
							<img style="float: left; margin: 10px;"
								alt="Lanzamiento Plataforma de Remates en Vivo"
								src="../images/noticias/fotos_noticia_remates-en-vivo.jpg" />
							Con gran orgullo ponemos a disposición del mercado nuestro
							moderno servicio de REMATES EN VIVO el cual permite desde un
							computador interactuar en cualquier parte del mundo con el Salón
							de Remates.
						</p>
						<p>REMATES EN VIVO es una robusta plataforma tecnológica y de
							servicios que permite que los participantes web estén escuchando
							lo que sucede en el Salón de Remates y contagiándose de la
							adrenalina del mismo, a su vez los participantes del Salón pueden
							ver en línea las pujas que realizan los participantes de
							internet.</p>
						<p>
							Esta poderosa herramienta permite la realización en línea de
							todos los tipos de remates habituales del mercado, incluyendo
							remates con derecho de selección de cantidad. Para mayor
							información contáctenos a: <a
								href="mailto:contacto@platafomagoup.cl">contacto@platafomagoup.cl</a>
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