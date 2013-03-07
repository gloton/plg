<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<?php

if (is_file("../lib/general.php")) {
	include_once("../lib/constantes.php");
	include_once("../lib/general.php");
} else {
	include_once("lib/constantes.php");
	include_once("lib/general.php");
}
	$selected = "NOTICIAS";
?>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title><?=$selected;?> « Plataforma Group</title>
<link type="text/css" rel="stylesheet" href="../css/styles.css" />
<link type="text/css" rel="stylesheet" href="../css/blog/styles.css" />
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js"></script>
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
	background: url("images/calendar_gris_16.png") no-repeat scroll 18px 1px transparent;
	padding-left: 40px;	
}
#leftcolumn .detalle_post .wrap_datos .postCategory {
	background: url("images/category_gris_16.png") no-repeat scroll 18px 1px transparent;
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
				<h1>Plataforma BRP para Banco SANTANDER</h1>
				<div class="detalle_post">	
					<div class="wrap_datos">
						<div class="postDate">
  						  	<span>Martes 06 de Marzo de 2013</span>
						</div>
						<div class="postCategory">
							<span>Novedades</span>
						</div>	
			  		</div>		
					<p><img src="../images/noticias/fotos_noticia_brp-santander.jpg" alt="BRP para Banco SANTANDER" style="float: left; margin: 10px;" />
					Esta Plataforma diseñada para la Administración de Bienes Reposeídos fue construida 
					por PLATAFORMA GROUP el año 2003, lo que se tradujo para el Banco en una mejora significativa 
					de la labor que ellos realizaban, permitiéndoles tener en una sola aplicación todas las 
					propiedades en venta (con sus distintos estados), toda la información referente al ingreso y 
					seguimiento de ofertas por parte de los corredores, así como el manejo de los gastos asociados 
					y sus aprobaciones, solicitudes de comités de ofertas, además de informes de gestión y 
					estadísticas de ventas.
					</p>
					<p>Posterior a su implementación, Banco Santander continuó junto a nosotros con el servicio 
					de mantención y mejoramiento del sistema por alrededor de 3 años más, hasta que por política 
					interna del Banco, debió pasar a ser administrado por ellos mismos.
					</p>
					<p>Hoy, después de 5 años, el Banco Santander ha recurrido nuevamente a nosotros para potenciar 
					aún más esta herramienta de trabajo, la que será adecuada a las nuevas necesidades del Banco, 
					de los Corredores de Propiedades y de los distintos usuarios que interactúan día a día en este 
					complejo proceso de venta.
					</p>
					<p>Todo esto ha significado volver a contar con este prestigioso Banco como un cliente activo 
					de nuestra empresa, lo que sin duda nos llena de orgullo y desafíos.
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
					<div class="postModuloCategory">
					</div>			
				</div>
			</div><!-- End Right Column -->
			<div class="clearfix"></div>
		</div><!-- End wrapperBlog -->    
    </div>
	<?php include_once("../partes/footer.php"); ?>
</div>
</body>
</html>