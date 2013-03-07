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
				<h1>Certificación ISO9001</h1>
				<div class="detalle_post">	
					<div class="wrap_datos">
						<div class="postDate">
  						  	<span>Martes 06 de Marzo de 2013</span>
						</div>
						<div class="postCategory">
							<span>Novedades</span>
						</div>	
			  		</div>		
						<p><img style="float: left; margin: 10px;" alt="Certificación ISO9001" src="../images/noticias/fotos_noticia_iso.jpg" />
						Durante la tercera semana de Octubre nuestra empresa concluyó satisfactoriamente 
						el proceso de certificación ISO 9001-2008. Certificando de acuerdo a esta norma 
						de calidad todo el proceso de "DISEÑO, DESARROLLO, SOPORTE y COMERCIALIZACION DE SOFTWARE".
						</p>
						<p>Fue un trabajo duro que nos tomó casi 10 meses de trabajo de todo nuestro equipo, 
						liderado por nuestro Gerente de Servicing quien trabajo a la par con los consultores de la empresa.
						</p>
						<p>Creadero en el diseño nuestros sistema de gestión de calidad que fue auditado y aprobado por 
						Bureau Veritas. Agradecemos a todos y cada uno de los miembros de nuestra empresa y de la 
						empresa consultora por el apoyo prestado en todo este camino.
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