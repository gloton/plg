<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<?php
include_once("../lib/general.php");
require_once '../lib/fechas.class.php';
$selected = "NOTICIAS";

$objTrabajo = new Trabajo();
$categorias = $objTrabajo->get_categorias();
?>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Noticias « Plataforma Group</title>
<link type="text/css" rel="stylesheet" href="../css/styles.css" />
<link rel="stylesheet" type="text/css" href="../css/blog/styles.css" />
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js"></script>
<script language="javascript" src="../js/jquery.js"></script>
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
</head>

<body>
<div id="wrap">
	<?php include_once("../partes/header.php"); ?>
    <div class="contenedor">
		<!-- Begin wrapperBlog -->
		<div id="wrapperBlog">
			<!-- Begin Left Column -->
			<div id="leftcolumn">
		<?php
			if (isset($_GET["pos"])) {
				$inicio = $_GET["pos"];
			} else {
				$inicio = 0;
			}
			if (isset($_GET["cat"])) {
				$c = $_GET["cat"];
			} else {
				$c = 1;
			}		
		$nroPost = 3;
		$datos = $objTrabajo->get_paginacion_noticias($inicio, $c, $nroPost);
		if (count($datos) == 0) {
			if ($inicio != 0) {
				print "<p>No hay mas post</p>";;
			} else {
				print "<p>No hay post asociados a esta categoria</p>";
			}
		} else {	
			for ($i=0;$i<sizeof($datos);$i++) {
		?>
		  	<div class="post">
		  		<div class="postSup">
		  			<div class="introImg">
		  				<div class="wrapIntroImg" style="box-shadow: 0 1px 5px rgba(0, 0, 0, 0.25);padding: 4px;background-color: #FFFFFF; width: 190px; height: 120px;">
		  					<img class="introThum" src="<?=$datos[$i]["url_img_intro"]?>" />
		  				</div>
		  			</div>
		  			<div class="introText">
		  				<div class="postTitle">
		  					<h2><?= $datos[$i]["titulo"]?></h2>
		  				</div>
		  				<div class="postDate">
		  					<span>ddddd</span>
		  				</div>
		  				<div class="postCategory">
		  					<?php 
		  						$categoriaElegida = $objTrabajo->categoryChosen($datos[$i]["id_categoria"])
		  					?>
		  					<span><?=$categoriaElegida[0]["categoria"];?></span>
		  				</div>
		  				<div class="postDetail">
		  					<p><?php  echo Trabajo::corta_palabra($datos[$i]["detalle"], 100);?>   						
		  					</p>
		  				</div>  				  				  				
		  			</div>
		  		</div>
		  		<div class="postInf">
		<?php
		$texto=str_replace(" ","-",$datos[$i]["titulo"]);
		//echo $texto;
		?>    		
		  			<a href="<?php echo $texto."-p".$datos[$i]["id_noticia"].".html"?>">
		  				<span class="postMore">
		  					Leer mas...
		  				</span>
		  			</a>
		  		</div>
		  	</div>
		<?php
			}
			//fin del volcamiento de posts
		}	
		?>
			</div>
			<!-- End Left Column -->
			<!-- Begin Right Column -->
			<div id="rightcolumn">
				<div id="noticias-right">
					<img src="../images/ipad-relleno.jpg">
				</div>			
				<div class="postModulo">
					<div class="postModuloTitle">
						<h3>Categorias</h3>
					</div>
					<div class="postModuloCategory">
						<ul>
		<?php 
						for ($i=0;$i<sizeof($categorias);$i++) {
		?>				
							<li><a href="?cat=<?=$categorias[$i]["id_categoria"];?>"><span><?php print $categorias[$i]["categoria"]; ?></span></a></li>
		<?php 
						}
		?>					
						</ul>
					</div>			
				</div>
			</div><!-- End Right Column -->
			<div class="clearfix"></div>
			<div id="footerBlog">
				<div id="paginacion">
					<p>
		<?php 
		if ($inicio == 0) {
		?>
						<span>Anterior</span>
		<?php 
		} else {
			$anterior = $inicio - $nroPost;
		?>
						<a href="?pos=<?=$anterior ?>&cat=<?=$c ?>" title="Anterior" ><span>Anterior</span></a>
		<?php 					
		}
		?>				
							
		| 
		<?php 
		if (count($datos) == $nroPost) {
			$proximo = $inicio + $nroPost;
		?>
						<a href="?pos=<?= $proximo?>&cat=<?=$c?>" title="Siguiente">Siguiente</a>
		<?php	
		} else {
		?>
						<span>Siguiente</span></p>
		<?php 
		}
		?>
				</div>
			</div>
		</div><!-- End wrapperBlog -->    
    </div>
	<?php include_once("../partes/footer.php"); ?>	
</div>
</body>
</html>