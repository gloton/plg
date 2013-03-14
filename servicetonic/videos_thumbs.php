<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd" >
<html>
<head>
<?php
include_once ("../lib/constantes.php");
include_once ("../lib/general.php");
?>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title>Galeria de videos</title>
<link type="text/css" rel="stylesheet" href="<?php echo $sitio; ?>/css/servicetonic.css" />
<link rel="stylesheet" href="../js/easybox/easybox.min.css"	type="text/css" media="screen" />
<script type="text/javascript" src="../js/easybox/easybox.min.js"></script>
<script type="text/javascript">
$(document).ready( function ()
{
		//NO no no no.
		$("#thum_videos").fadeIn("slow");
});
</script>
<!-- inicio prueba modalbox	 -->
<script type="application/json" id="easyOptions">
{
        "lightbox-iframe": {
                "defWidth": 747,
                "defHeight": 510
        }
}
</script>
<!--fin prueba modalbox -->
<!-- inicio efecto rollover	 -->
<script type="text/javascript">	
 $(document).ready(function(){
    //Aqui va el codigo del efecto
    $('.foto').hover(
        //La primera función seria el caso 'onmouseover'
        function() {
          $(this).attr("src","../images/servicetonic/videos/thum_default_videos_servicetonic-hover.jpg");
        },
        //La primera función seria el caso 'onmouseout'
        function() {
          $(this).attr("src","../images/servicetonic/videos/thum_default_videos_servicetonic.jpg");
        }
      )
  });		
 </script>
<!-- fin efecto rollover	 -->
</head>
<body>
	<h1 id="tituvideos">
		<a href="index.php">&laquo; Volver</a>
	</h1>
	<div id="thum_videos">
		<div class="cajavideo fila1">
			<div class="miniatura">
				<a href="video-embebido1.php" title="Portal web de usuario"
					rel="lightbox-iframe"><img class="foto"
					src="../images/servicetonic/videos/thum_default_videos_servicetonic.jpg"
					alt="imagen por defecto" /></a>
			</div>
			<div class="descripcion">
				<p>Portal web de usuario</p>
			</div>
		</div>
		<div class="cajavideo fila1">
			<div class="miniatura">
				<a href="video-embebido2.php" title="Aplicación de agentes"
					rel="lightbox-iframe"><img class="foto"
					src="../images/servicetonic/videos/thum_default_videos_servicetonic.jpg"
					alt="imagen por defecto" /></a>
			</div>
			<div class="descripcion">
				<p>Aplicación de agentes</p>
			</div>
		</div>
		<div class="cajavideo fila1">
			<div class="miniatura">
				<a href="video-embebido3.php" title="CMDB" rel="lightbox-iframe"><img
					class="foto"
					src="../images/servicetonic/videos/thum_default_videos_servicetonic.jpg"
					alt="imagen por defecto" /></a>
			</div>
			<div class="descripcion">
				<p>CMDB</p>
			</div>
		</div>
		<div class="cajavideo fila1">
			<div class="miniatura">
				<a href="video-embebido4.php" title="Administración ServiceTonic"
					rel="lightbox-iframe"><img class="foto"
					src="../images/servicetonic/videos/thum_default_videos_servicetonic.jpg"
					alt="imagen por defecto" /></a>
			</div>
			<div class="descripcion">
				<p>Administración ServiceTonic</p>
			</div>
		</div>
		<div class="cajavideo">
			<div class="miniatura">
				<a href="video-embebido5.php" title="Listas de contactos dinámicas"
					rel="lightbox-iframe"><img class="foto"
					src="../images/servicetonic/videos/thum_default_videos_servicetonic.jpg"
					alt="imagen por defecto" /></a>
			</div>
			<div class="descripcion">
				<p>Listas de contactos dinámicas</p>
			</div>
		</div>
		<div class="cajavideo">
			<div class="miniatura">
				<a href="video-embebido6.php" title="Gestión de activos"
					rel="lightbox-iframe"><img class="foto"
					src="../images/servicetonic/videos/thum_default_videos_servicetonic.jpg"
					alt="imagen por defecto" /></a>
			</div>
			<div class="descripcion">
				<p>Gestión de activos</p>
			</div>
		</div>
		<div class="cajavideo">
			<div class="miniatura">
				<a href="video-embebido7.php" title="Módulo de integradores"
					rel="lightbox-iframe"><img class="foto"
					src="../images/servicetonic/videos/thum_default_videos_servicetonic.jpg"
					alt="imagen por defecto" /></a>
			</div>
			<div class="descripcion">
				<p>Módulo de integradores</p>
			</div>
		</div>
		<div class="cajavideo">
			<div class="miniatura">
				<a href="video-embebido8.php" title="Capacidad MultiServicio"
					rel="lightbox-iframe"><img class="foto"
					src="../images/servicetonic/videos/thum_default_videos_servicetonic.jpg"
					alt="imagen por defecto" /></a>
			</div>
			<div class="descripcion">
				<p>Capacidad MultiServicio</p>
			</div>
		</div>
	</div>
</body>
</html>