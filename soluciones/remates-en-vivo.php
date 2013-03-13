<!DOCTYPE HTML>
<html lang="es">
<head>
<?php
if (is_file ( "../lib/general.php" )) {
	include_once ("../lib/constantes.php");
	include_once ("../lib/general.php");
} else {
	include_once ("lib/constantes.php");
	include_once ("lib/general.php");
}
$selected = "PRODUCTOS Y SERVICIOS";
$pagina = "REMATES EN VIVO ";
?>
<meta charset="utf-8">
<title><?=$pagina?> <?=NOMBRE_EMPRESA ?></title>
<link rel="stylesheet"
	href="../js/jquery-ui-1.8.23.custom/css/ui-lightness/jquery-ui-1.8.23.custom.css"
	type="text/css" media="screen">
<link type="text/css" rel="stylesheet"
	href="<?php print $sitio;?>/css/styles.css" />
<link type="text/css" rel="stylesheet"
	href="<?php print $sitio;?>/css/soluciones.css" />
<script type="text/javascript" src="<?php print $sitio;?>/js/jquery.js"></script>
<script
	src="../js/jquery-ui-1.8.23.custom/js/jquery-ui-1.8.23.custom.min.js"></script>
<script type="text/javascript">
	$(document).ready( function (){
		var x=$("#pestanas");
		x.tabs();
	});
</script>

<style type="text/css">
/*marca menu pp pagina seleccionada*/
#li_productos a {
	background: none repeat scroll 0 0 #f0f0f0;
	color: #000000;
	opacity: 1;
}
</style>
</head>
<body>
	<div id="wrap">
	<?php
	if (is_file ( "../partes/header.php" )) {
		include_once ("../partes/header.php");
	} else {
		include_once ("partes/header.php");
	}
	?>
    <div class="contenedor">
    	<?php include_once("../partes/breadcrumbs.php");?>
		<div id="pcj">
				<div class="theme1_top">
					<img src="../images/soluciones/remates-en-vivo_encabezado.jpg" alt="Remates en vivo" title="Pagina de remates en vivo" />
				</div>
				<div class="clearfix"></div>
				<!-- inicio pestañas			 -->
				<div id="pestanas">
					<ul>
						<!-- los li son los titulos de cada tab -->
						<li><a href="#pestana1">DESCRIPCIÓN</a></li>
						<li><a href="#pestana2">CARACTERÍSTICAS</a></li>
						<li><a href="#pestana3">MODULOS DEL SISTEMA</a></li>
					</ul>
					<!-- y los div tienen el contenido de cada tab -->
					<div id="pestana1">
						<h3>Que es la plataforma de remate en vivo</h3>
						<p>Nuestra plataforma de remates en línea, única en chile, es un
							moderno servicio de subastas no presenciales mediante el cual un
							cliente puede suscribir su participación a un remate e ingresar a
							un ambiente virtual donde podrá interactuar como uno mas de los
							clientes presenciales, teniendo acceso a la vitrina de bienes a
							rematar y a realizar pujas para adjudicarse un bien determinado.
							Una vez participando, nuestro producto permite una interacción
							real, en línea y con una vivencia por parte del usuario de
							internet de la adrenalina del salón de remates, que es lo que
							permite mejorar la puja y el precio final. Esto es posible ya que
							la internet se transforma en una extensión del salón y por tanto
							los ciber-postores participan como un postor más en el remate,
							escuchando lo que se conversa en el salón y recibiendo toda la
							energía que en el se genera.</p>
					</div>
					<div id="pestana2">
						<h3>Ventajas</h3>
						<ul class="caracteristicas">
							<li>Participación de postores que de otra manera no estarían en
								el remate</li>
							<li>Mejora de los precios al tener más participantes por el mismo
								lote</li>
							<li>Catálogo en línea del remate con fotos e integrado a la línea
								grafica del cliente proveyendo información en línea al momento
								del remate</li>
							<li>Notificación automática de las adjudicaciones por internet
								con detalle de lo adjudicado y detalle del pago</li>
							<li>Disminución de carga operativa al momento del remate
								permitiendo la inscripción previa y automatización de tareas
								operacionales</li>
						</ul>
						<h3>¿Quiénes tienen hoy algo así en Chile?</h3>
						<ul class="caracteristicas">
							<li>Macal tiene un remate en línea como este, pero con una
								versión anterior del motor de nuestro producto con algunas
								deficiencias</li>
							<li>CGRemates hace los remates de Minera Escondida desde el año
								pasado en una plataforma montada sobre nuestro producto</li>
							<li>NazcoChile comienza la capacitación para su primer remate la
								próxima semana</li>
							<li>Tattersall está en conversaciones para cambiar su plataforma
								on-line por la nuestra</li>
						</ul>
					</div>
					<div id="pestana3">
						<p>Al contar con un servicio de este tipo, nuestros clientes abren
							la puerta a una gran cantidad de posibilidades de automatizar sus
							procesos e integrarlos a la realización del remate en si. Como
							por ejemplo:</p>
						<ul class="caracteristicas rematesEnLinea">
							<li>Manejo de bodega e inventario.</li>
							<li>Recepción de las garantías de remate.</li>
							<li>Facturación de lotes adjudicados.</li>
							<li>Integración con módulos contables.</li>
							<li>Acuerdos de publicidad con los mandantes.</li>
							<li>Liquidaciones a mandantes.</li>
						</ul>
						<p>Adicionalmente, nuestro producto puede integrarse con nuestro
							moderno servicio de vitrina de remates, que actualmente ya cuenta
							con importantes clientes, y mediante el cual es posible publicar
							todo el contenido de un remate, con atractivas galerías de fotos
							y debidamente separado por categorías, fechas u otros filtros.
							Pudiendo perfectamente remplazar un sitio corporativo de remates
							actualmente en Uso conservando la línea grafica de este.</p>
					</div>
				</div>
				<!-- fin pestañas -->
			</div>
		</div>
		<div class="clearfix"></div>
    <?php
				if (is_file ( "../partes/footer.php" )) {
					include_once ("../partes/footer.php");
	    } else {
	    	include_once("partes/footer.phpp");
	    }    
    ?>
</div>
</body>
</html>