<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">





<html xmlns="http://www.w3.org/1999/xhtml">





<head>





<?php
include_once("../lib/constantes.php");




include_once("../lib/general.php");





$selected = "NOTICIAS";











/* $_GET["pos"] es la variable que indica el numero de registro inicial, desde donde se mostraran los registros y su valor es asignado a la variable $inicio





 * $inicio es el numero de registro inicial, desde donde se mostraran los registros





 * $datos almacena un array con los post o noticias





 * $c esa variable se refiere a la categoria





 * */





$objTrabajo = new Trabajo();





$categorias = $objTrabajo->get_categorias();





?>





<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />





<title>Noticias « Plataforma Group</title>





<link type="text/css" rel="stylesheet" href="../css/styles.css" />





<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js"></script>





<script language="javascript" src="../js/jquery.js"></script>





<style type="text/css">





div.clearfix{





     width:1px;





     height:1px;





     display:block;





     clear:both;





     content: ".";





}





#wrapper { 





	margin: 0 auto;





	width: 950px;





}





#leftcolumn { 





 color: #333;





 border: 1px solid #ccc;





 background:#CCC8B3;





 margin: 10px 0px 10px 0px;





 padding: 10px;





 width: 668px;





 float: left;





}





#rightcolumn { 





 float: right;





 color: #333;





 border: 1px solid #ccc;





 background:#F6F0E0;





 margin: 10px 0px 10px 0px;





 padding: 10px;





 height: 500px;





 width: 210px;





 display: inline;





 position: relative;





}





/*paginacion*/











/*post*/





.post {





	width: 668px;





	height: 180px;





	background-color: yellow;





	margin: 10px auto;





}





.postSup {





	height: 142px;





	background-color: red;





}





.postInf {





	height: 38px;





	background-color: olive;





}





.introImg {





	width: 218px;





	height: 100%;





	background-color: green;





	float: left;





}





.introText {





	width: 450px;





	height: 100%;





	background-color: fuchsia;





	float: left;





}











/*side right*/











</style>





</head>











<body>





<div id="wrap">





	<?php include_once("../partes/header.php"); ?>





    <div class="contenedor">





		<!-- Begin Wrapper -->





		<div id="wrapper">





			<!-- Begin Left Column -->





			<div id="leftcolumn">





		<?php





		/*isset evitara que se genere un error al no existir un valor para





		$inicio





		Este condicional sirve para la paginacion de los post.





		Si no se indica la variable pos, entonces mostrara desde el primer 





		registro disponible, esto esta indicado por la variable $inicio





		*/





			if (isset($_GET["pos"])) {





			//la variable pos se refiere a la posicion





			//si existe la variable pos entonces





				$inicio = $_GET["pos"];





			} else {





			//si no existe la variable la paginacion comenzara de 0





				$inicio = 0;





			}





		/*Este condicional maneja o convina esta muestra de post 





		 * de acuerdo a la categoria que se haya seleccionado*/





			if (isset($_GET["cat"])) {





				/*la variable pos se refiere a la categoria elegida*/





				$c = $_GET["cat"];





			} else {





				/*si no se ha seleccionado ninguna categoria, puedo indicar 





				 * en esta parte, la categoria que quiero que se muestre





				 * por defecto, asignandole el valor a la variable $c. Y va





				 * a ser esta la categoria que se mostrara por defecto 





				 * en el index*/





				$c = 1;





			}		





			/*esta consulta siempre me almacenara 10 registros iniciando en el registro $inicio





			 * , se almacenan solo 10 registros puesto que es lo que se determina en 





			 * la consulta sql mediante el comando limit 10 en el segundo parametro*/





			$datos = $objTrabajo->get_paginacion_noticias($inicio, $c);





		if (count($datos) == 0) {





			//si no hay post





			print "<p>No hay post asociados a esta categoria</p>";





		} else {	





			//volcara los post





			for ($i=0;$i<sizeof($datos);$i++) {





		?>





		  	<div class="post">





		  		<div class="postSup">





		  			<div class="introImg">





		  				<img src="ima/noticias-1.jpg" alt="" width="200" height="130" />





		  			</div>





		  			<div class="introText">





		  				<div class="postTitle">





		  					<h2><?= $datos[$i]["titulo"]?></h2>





		  				</div>





		  				<div class="postDate">





		  					<span><?= $datos[$i]["fecha_cadena"]?></span>





		  				</div>





		  				<div class="postCategory">





		  					<span>PHP</span>





		  				</div>





		  				<div class="postDetail">





		  					<p><?php  echo Trabajo::corta_palabra($datos[$i]["detalle"], 400);?>   						





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





		  			<div id="comentarios">Hay <?php echo $objTrabajo->total_comentarios($datos[$i]["id_noticia"]); ?> comentarios</div>





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





		/*Si nos encontramos en la primera pagina, es decir, $inicio es igual a 





		 * 0, significa que, no hay ningun post mas que mostrar, 





		 * por lo que el texto  "Anterior" no 





		 * aparecera linkeable puesto que no hay anteriores publicaciones





		 * pero si estamos en una pagina mayor que 0, es decir, hay mas paginas





		 * el texto "Anterior" va a aparecer linkeable*/





		if ($inicio == 0) {





		?>





						<span>Anterior</span>





		<?php 





		} else {





			$anterior = $inicio - 10;





		?>





						<a href="?pos=<?=$anterior ?>&cat=<?=$c ?>" title="Anterior" ><span>Anterior</span></a>





		<?php 					





		}





		?>				





							





		| 





		<?php 





		if (count($datos) == 10) {





			//es lo mismo que anterior pero este va aumentando 





			//el numero de post a partir del cual se muestra





			//en el caso de que hayan menos de 10 registros





			//no se mostrara linkeado el texto "Siguiente"





			$proximo = $inicio + 10;





		?>





						<a href="?pos=<?= $proximo?>&cat=<?=$c?>" title="Siguiente">Siguiente</a>





		<?php	





		} else {





		/*cuando count($datos) vale distinto de 10, en este caso sera un numero menor que 10





		 * es por que ya llego a la ultima pagina*/			





		?>





						<span>Siguiente</span></p>





		<?php 





		}





		?>





				</div>





			</div>





		</div><!-- End Wrapper -->    





    </div>





	<?php include_once("../partes/footer.php"); ?>	





</div>





</body>





</html>





