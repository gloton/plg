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
				<div class="post">
			  		<div class="postSup">
			  			<div class="introImg">
			  				<div class="wrapIntroImg" style="box-shadow: 0 1px 5px rgba(0, 0, 0, 0.25);padding: 4px;background-color: #FFFFFF; width: 190px; height: 120px;">
			  					<img class="introThum" src="../images/blog/intro/solmicro.jpg" alt="Alianza con solmicro" />
			  				</div>
			  			</div>
			  			<div class="introText">
			  				<div class="postTitle">
			  					<h2>PLATAFORMA GROUP es partner de SOLMICRO</h2>
			  				</div>
			  				<div class="postDate">
			  					<span>Martes 06 de Marzo de 2013</span>
			  				</div>
			  				<div class="postCategory">
			  							  					<span>Novedades</span>
			  				</div>
			  				<div class="postDetail">
			  					<p>La empresa española SOLMICRO, que cuenta con el software ERP más innovador - Solmicro-eXpertis ERP, ha elegido a   						
			  					</p>
			  				</div>  				  				  				
			  			</div>
			  		</div>
			  		<div class="postInf">
			  			<a href="plataformagroup-es-partner-solmicro.php">
			  				<span class="postMore">
			  					Leer mas...
			  				</span>
			  			</a>
			  		</div>
			  	</div>			
				<div class="post">
			  		<div class="postSup">
			  			<div class="introImg">
			  				<div class="wrapIntroImg" style="box-shadow: 0 1px 5px rgba(0, 0, 0, 0.25);padding: 4px;background-color: #FFFFFF; width: 190px; height: 120px;">
			  					<img class="introThum" src="../images/blog/intro/pb-bci.jpg" alt="Caso de exito con BCI" />
			  				</div>
			  			</div>
			  			<div class="introText">
			  				<div class="postTitle">
			  					<h2>Caso de éxito PB Soluciones - Banco BCI</h2>
			  				</div>
			  				<div class="postDate">
			  					<span>Miércoles 06 de Marzo de 2013</span>
			  				</div>
			  				<div class="postCategory">
			  					<span>Novedades</span>
			  				</div>
			  				<div class="postDetail">
			  					<p>La empresa PB Soluciones, ha elegido a PLATAFORMA GROUP como proveedor de servicios y a ServiceTonic 
			  					</p>
			  				</div>  				  				  				
			  			</div>
			  		</div>
			  		<div class="postInf">
			    		
			  			<a href="caso-de-exito-pb-soluciones-banco-bci.php">
			  				<span class="postMore">
			  					Leer mas...
			  				</span>
			  			</a>
			  		</div>
			  	</div>
			  	<div class="post">
			  		<div class="postSup">
			  			<div class="introImg">
			  				<div class="wrapIntroImg" style="box-shadow: 0 1px 5px rgba(0, 0, 0, 0.25);padding: 4px;background-color: #FFFFFF; width: 190px; height: 120px;">
			  					<img class="introThum" src="../images/blog/intro/brp-santander.jpg" alt="BRP para Banco SANTANDER" />
			  				</div>
			  			</div>
			  			<div class="introText">
			  				<div class="postTitle">
			  					<h2>Plataforma BRP para Banco SANTANDER</h2>
			  				</div>
			  				<div class="postDate">
			  					<span>Miércoles 06 de Marzo de 2013</span>
			  				</div>
			  				<div class="postCategory">
			  							  					<span>Novedades</span>
			  				</div>
			  				<div class="postDetail">
			  					<p>Esta Plataforma diseñada para la Administración de Bienes Reposeídos fue construida por PLATAFORMA GROUP el año 2003
			  					</p>
			  				</div>  				  				  				
			  			</div>
			  		</div>
			  		<div class="postInf">
			    		
			  			<a href="plataforma-brp-para-banco-santander.php">
			  				<span class="postMore">
			  					Leer mas...
			  				</span>
			  			</a>
			  		</div>
			  	</div>
				<div class="post">
			  		<div class="postSup">
			  			<div class="introImg">
			  				<div class="wrapIntroImg" style="box-shadow: 0 1px 5px rgba(0, 0, 0, 0.25);padding: 4px;background-color: #FFFFFF; width: 190px; height: 120px;">
			  					<img class="introThum" src="../images/blog/intro/remates-en-vivo.jpg" alt="Lanzamiento Plataforma de Remates en Vivo" />
			  				</div>
			  			</div>
			  			<div class="introText">
			  				<div class="postTitle">
			  					<h2>Lanzamiento Plataforma de Remates en Vivo</h2>
			  				</div>
			  				<div class="postDate">
			  					<span>Martes 05 de Marzo de 2013</span>
			  				</div>
			  				<div class="postCategory">
			  					<span>Noticias</span>
			  				</div>
			  				<div class="postDetail">
			  					<p>Con gran orgullo ponemos a disposición del mercado nuestro moderno servicio de REMATES EN VIVO el cual permite 						
			  					</p>
			  				</div>  				  				  				
			  			</div>
			  		</div>
			  		<div class="postInf">
			    		
			  			<a href="lanzamiento-plataforma-de-remates-en-vivo.php">
			  				<span class="postMore">
			  					Leer mas...
			  				</span>
			  			</a>
			  		</div>
		  		</div>
		  		
				<div class="post">
			  		<div class="postSup">
			  			<div class="introImg">
			  				<div class="wrapIntroImg" style="box-shadow: 0 1px 5px rgba(0, 0, 0, 0.25);padding: 4px;background-color: #FFFFFF; width: 190px; height: 120px;">
			  					<img class="introThum" src="../images/blog/intro/cvc-comaoo.jpg" alt="Asistencia CVC-COMAO" />
			  				</div>
			  			</div>
			  			<div class="introText">
			  				<div class="postTitle">
			  					<h2>Sistema de control de Asistencia CVC-COMAO</h2>
			  				</div>
			  				<div class="postDate">
			  					<span>Martes 05 de Marzo de 2013</span>
			  				</div>
			  				<div class="postCategory">
			  					<span>Noticias</span>
			  				</div>
			  				<div class="postDetail">
			  					<p>Durante el mes de octubre se comenzó la marcha blanca del Control de Asistencia desarrollado para   						
			  					</p>
			  				</div>  				  				  				
			  			</div>
			  		</div>
			  		<div class="postInf">
			    		
			  			<a href="sistema-de-control-de-asistencia-cvc-comao.php">
			  				<span class="postMore">
			  					Leer mas...
			  				</span>
			  			</a>
			  		</div>
			  	</div>
				<div class="post">
			  		<div class="postSup">
			  			<div class="introImg">
			  				<div class="wrapIntroImg" style="box-shadow: 0 1px 5px rgba(0, 0, 0, 0.25);padding: 4px;background-color: #FFFFFF; width: 190px; height: 120px;">
			  					<img class="introThum" src="../images/blog/intro/certificacion-iso.jpg" alt="Certificación ISO9001" />
			  				</div>
			  			</div>
			  			<div class="introText">
			  				<div class="postTitle">
			  					<h2>Certificación ISO9001</h2>
			  				</div>
			  				<div class="postDate">
			  					<span>Martes 05 de Marzo de 2013</span>
			  				</div>
			  				<div class="postCategory">
			  					<span>Noticias</span>
			  				</div>
			  				<div class="postDetail">
			  					<p>Durante la tercera semana de Octubre nuestra empresa concluyó satisfactoriamente el proceso de    						
			  					</p>
			  				</div>  				  				  				
			  			</div>
			  		</div>
			  		<div class="postInf">
			    		
			  			<a href="certificacion-iso9001.php">
			  				<span class="postMore">
			  					Leer mas...
			  				</span>
			  			</a>
			  		</div>
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
						<h3>Categorias</h3>
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