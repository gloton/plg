<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<?php
include_once("../lib/constantes.php");
include_once("../lib/general.php");
$selected = "PRODUCTOS Y SERVICIOS";
$pagina = "SERVICETONIC "
?>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title><?=$pagina?> <?=NOMBRE_EMPRESA ?></title>
<link type="text/css" rel="stylesheet" href="<?php echo $sitio; ?>/css/reset.css" />
<link type="text/css" rel="stylesheet" href="<?php echo $sitio; ?>/css/styles.css" />
<link type="text/css" rel="stylesheet" href="<?php echo $sitio; ?>/css/styles-shine.css" />
<link type="text/css" rel="stylesheet" href="<?php echo $sitio; ?>/css/servicetonic.css" />
<link rel="stylesheet" href="../js/easybox/easybox.min.css" type="text/css" media="screen" />
<script type="text/javascript" src="http://code.jquery.com/jquery-1.4.2.min.js"></script>
<script type="text/javascript" src="../js/easybox/easybox.min.js"></script>
<script type="text/javascript" src="../js/jquery.featureList-1.0.0.js"></script>
<!-- inicio js para el tab vertical slider -->
	<script language="javascript">
	$(document).ready(function() {
		$.featureList(
				$("#tabs li a"),
				$("#output li"), {
					start_item : 0, //que pestaña es la que abre por defecto
					pause_on_hover : true, //si coloco el mouse encima no cambia de pestaña
					transition_interval : 43000 //tiempo que se mantiene en cada pestaña 
				}
			);
	});
	</script>
<!-- fin js para el tab vertical slider -->
<!-- inicio codigo necesario para el brillo	 -->
<!--[if lt IE 7]>
<script defer type="text/javascript" src="../js/pngfix.js"></script>
<![endif]--> 
<script type="text/javascript">
  $(document).ready(function()
  {
	 function loadPhoto($url, $caption)
	 {
	    /*Image pre-loader*/
	    showPreloader();
	    var img = new Image();
	    jQuery(img).load( function() 
		{
			jQuery(img).hide();
			hidePreloader();
		
        }).attr({ "src": $url });
	 }
     /* When a thumbnail is hovered over*/
	 $('.thumb_container').hover(function()
	 {  
		 $(this).find(".large_thumb_shine").stop();
         $(this).find(".large_thumb_shine").css("background-position","-47px 0");/*-511 tamaño imagen banner*/ 
         $(this).find(".large_thumb_shine").animate({backgroundPosition: '47px 0'},900);/*-511 tamaño imagen banner*/ 
	 });
	 $('.thumb_container_email').hover(function()
			 {  
				 $(this).find(".large_thumb_shine").stop();
		         $(this).find(".large_thumb_shine").css("background-position","-47px 0");/*-511 tamaño imagen banner*/ 
		         $(this).find(".large_thumb_shine").animate({backgroundPosition: '47px 0'},900);/*-511 tamaño imagen banner*/ 
			 });
	 	 	 
  });
</script>
<!-- fin codigo necesario para el brillo-->
<script type="text/javascript">
function visitar_demo() {
	document.getElementById("demo").value="true";
	document.getElementById("desde_servicetonic").value="true";
	document.formularioServicetonic.submit();	
}
function visitar() {
	document.getElementById("demo").value="false";
	document.getElementById("desde_servicetonic").value="true";
	document.formularioServicetonic.submit();	
}
</script>   	
<!-- inicio reemplazar contenido - menu descarga videos -->
	<script type="text/javascript">
	    jQuery(document).ready( function(){
	        jQuery( "#ver_videos").click( function() {
	        	$('#servicetonic').load('videos_thumbs.php');
	        });
	        jQuery( "#ver_volante").click( function() {
	        	$('#servicetonic').load('volante-servicetonic.php');
	        });
	        jQuery( "#ver_catalogo").click( function() {
	        	$('#servicetonic').load('catalogo_tecnico_servicetonic.php');
	        });
	        jQuery( "#ver_presentacion").click( function() {
	        	$('#servicetonic').load('catalogo_tecnico_servicetonic.php');
	        });	 	        	 	             
	     });
	</script>
<!-- fin reemplazar contenido - menu descarga videos  -->
	
<style type="text/css">
/*marca menu pp pagina seleccionada*/
#li_productos a {
    background: none repeat scroll 0 0 #f0f0f0;
    color: #000000;
    opacity: 1;
}
</style>
</style>
</head>
<body>
<div id="wrap">
	<?php include_once("../partes/header.php"); ?>
    <div class="contenedor">
    <?php include_once("../partes/breadcrumbs.php");?>
		<div id="content" style="height: 490px;">
			<div id="servicetonic">
				<div id="servicetonic-logo">
					<img id="logo_sevicetonic" src="<?php echo $sitio;?>/images/logos/logo_servicetonic.png" alt="Logo ServiceTonic" />
					<ul id="contact_servicetonic">
						<li>
							<p>
								<span class="titu_top">Solicitar</span> <br />
								<span class="titu_bottom">Demo</span>
							</p>
							<div class="thumb_container" onClick="visitar_demo();"> 
								<img src="../images/servicetonic/plataformagroup_demo.png" alt="thumb" border="0" />
								<div class="large_thumb_shine" style="cursor:pointer"></div>
							</div>					
						</li>
						<li>
							<p>
								<span class="titu_top">Datos de</span> <br />
								<span class="titu_bottom">Contacto</span>
							</p>						
							<div class="thumb_container_email" onClick="visitar();" > 
								<img src="../images/servicetonic/plataformagroup_contacto.png" alt="thumb" border="0" />
								<div class="large_thumb_shine" style="cursor:pointer"></div>
							</div>								
						</li>
					</ul>
					<form name="formularioServicetonic" action="../contacto.php" method="post">
						<input name="demo" id="demo" type="hidden" />
						<input name="desde_servicetonic" id="desde_servicetonic" type="hidden" />
					</form>
				</div>
				<div id="feature_list">
					<ul id="tabs">
						<li>
							<a href="javascript:;">
								<img src="<?php echo $sitio;?>/images/tabs-vertical-slider/currency_dollar_red-relleno.png" />
								<h3>Beneficios</h3>
								<span>El mejor Help-Desk, soporte y gestión</span>
							</a>
						</li>
						<li>
							<a href="javascript:;">
								<img src="<?php echo $sitio;?>/images/tabs-vertical-slider/programming.png" />
								<h3>Areas de aplicación</h3>
								<span>Cualquier área de su empresa</span>
							</a>
						</li>
						<li>
							<a href="javascript:;">
								<img src="<?php echo $sitio;?>/images/tabs-vertical-slider/orange-folder-locked-relleno.png" />
								<h3>Gestion de activos</h3>
								<span>Gran nivel de seguimiento</span>
							</a>
						</li>
						<li>
							<a href="javascript:;">
								<img src="<?php echo $sitio;?>/images/tabs-vertical-slider/user_manage-relleno.png" />
								<h3>Casos de éxito</h3>
								<span>Nuestra mejor carta de presentación</span>
							</a>
						</li>				
					</ul>
					<ul id="output">
						<li>
							<iframe src="./tab-beneficios.php" frameborder="0" scrolling="no" width="460" height="320"></iframe>
							<a href="#">Ver Detalles...</a>
						</li>
						<li>
							<iframe src="./tab-areas-aplicacion.php" frameborder="0" scrolling="no" width="460" height="320"></iframe>
							<a href="#">Ver Detalles...</a>
						</li>
						<li>
							<iframe src="./tab-gestion-activos.php" frameborder="0" scrolling="no" width="460" height="320"></iframe>
							<a href="#">Ver Detalles...</a>
						</li>
										<li>
							<iframe src="./tab-casos-exito.php" frameborder="0" scrolling="no" width="460" height="320"></iframe>
							<a href="#">Ver Detalles...</a>
						</li>
					</ul>
				</div>
			</div>
			<div id="servicetonic_descargas">
				<ul id="lst_descargas">
					<li id="ver_presentacion">
						<img class="centered" src="../images/servicetonic/plataformagroup_presentacion.png" alt="Presentacion ServiceTonic" />
						<p>
							<a href="javascript:void(0);">Presentación Servicetonic</a>
						</p>
					</li>
					<li id="ver_catalogo">
						<img class="centered" src="../images/servicetonic/plataformagroup_catalogo.png" alt="Catalogo" />
						<p>
							<a href="javascript:void(0);">Catálogo</a>
						</p>
					</li>
					<li id="ver_volante">
						<img class="centered" src="../images/servicetonic/plataformagroup_volante.png" alt="" />
						<p>
							<a href="javascript:void(0);">Descargar Volante</a>
						</p>
					</li>
					<li id="ver_videos">
						<img class="centered" src="../images/servicetonic/plataformagroup_videos.png" alt="" />
						<p>
							<a href="#">Videos</a>
						</p>						
					</li>
				</ul>				
			</div>
		</div>
	</div>
	<?php include_once("../partes/footer.php"); ?>
</div>
</body>
</html>
