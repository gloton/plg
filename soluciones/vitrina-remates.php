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
$pagina = "VITRINA REMATES ";
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
					<img src="../images/soluciones/vitrina_remate_encabezado.jpg"
						alt="" />
				</div>
				<div class="clearfix"></div>
				<!-- inicio pestañas			 -->
				<div id="pestanas">
					<ul>
						<!-- los li son los titulos de cada tab -->
						<li><a href="#pestana1">DESCRIPCIÓN</a></li>
						<li><a href="#pestana2">CARACTERÍSTICAS</a></li>
						<li><a href="#pestana3">MODULOS DEL SISTEMA</a></li>
						<li><a href="#pestana4">CLIENTES</a></li>
						<li><a href="#pestana5">VENTAJAS</a></li>
					</ul>
					<!-- y los div tienen el contenido de cada tab -->
					<div id="pestana1">
						<h3>Nuestro servicio</h3>
						<p>Somos una empresa orientada 100% al servicio. Establecemos
							relaciones de largo plazo con nuestros clientes, lo que nos
							compromete a mejorar nuestra oferta día a día para entregar valor
							adicional a nuestros productos.</p>
						<p>Todos nuestros productos incluyen una completa capacitación de
							las personas involucradas en su uso y acceso a nuestra Mesa de
							Ayuda, la cual se encargará de recibir todas las consultas y
							reportes de posibles fallos, los cuales serán atendidos y
							solucionados oportunamente por nuestro departamento de Soporte
							Técnico. De modo que nuestros clientes mantengan siempre el foco
							en su negocio, que es donde debe estar.</p>
						<p>Constantemente incluimos, sin costo para nuestros clientes,
							acceso a las mejoras evolutivas de nuestros productos que le
							permitirán tener en todo momento, una herramienta de vanguardia y
							adaptada para enfrentar todas las problemáticas futuras.</p>
						<h3>Remates en Vivo</h3>
						<p>
							Adicionalmente, nuestro producto puede integrarse con nuestro
							moderno servicio de Remates en Vivo, <span>el cual consiste en 
							una representación virtual del salón de remates, de una manera 
							fácil y amigable</span>.
							Actualmente ya cuenta con importantes clientes, <span>que han
								podido extender su salón de remates literalmente al mundo
								entero, mediante una plataforma robusta que permite, además, que
								los participantes web estén</span> escuchando lo que sucede en
							el salón de remate, contagiándose de la adrenalina del mismo, que
							es uno de los elementos centrales para mejorar la puja.
						</p>
					</div>
					<div id="pestana2">
						<h3>¿Características del producto?</h3>
						<p>Nuestro producto, desde una plataforma de administración,
							intuitiva, con distintos perfiles de usuario (los responsables de
							bienes muebles no necesariamente acceden a la venta directa o
							Propiedades), permite administrar la información de remates,
							lotes, productos en venta directa, propiedades, etc., dejando un
							registro de quien realiza cada una de las modificaciones. Los
							bienes y remates pasan por distintos estados (En preparación,
							Publicado, etc) que permiten que sea el usuario responsable el
							que decide cuándo y cómo publicitar los bienes.</p>
						<p>Algunas características son:</p>
						<ul class="caracteristicas">
							<li>Sistema full Web, multimandante</li>
							<li>Manejo de remates o bienes destacados para armar galerías de
								destacados según tipo o familias de bienes (Ej. Galerías de
								destacados Bienes Muebles)</li>
							<li>Estructuración de la información de manera dinámica por línea
								de negocio (venta directa, remates, etc), familias, categorías,
								subcategorías para la estructuración de su negocio con el nivel
								de detalle que su empresa necesite.</li>
							<li>Manejo de Noticias y vigencia de las mismas para publicar en
								su sitio Web, almacenando un historial de las mismas.</li>
							<li>Capacidad de adjuntar todo tipo de documentos a un remate o a
								un bien y desplegarlo después a petición en la Web. (Ej. Bases
								de un remate, certificado de anotaciones de un vehículo,
								especificaciones técnicas de una máquina, etc)</li>
							<li>Registro de clientes para envío de mails,
								información de remates o venta directa manejando una base de
								datos para uso posterior.</li>
							<li>Módulo de administración de imágenes que permite crear tipos
								de imágenes, con la capacidad de que al subir las fotos a la
								plataforma automáticamente rebaja el peso, recorta imágenes y le
								pone sello de agua con el logo institucional para evitar copias.</li>
							<li>Módulo de Administración de Atributos, que permite que sea el
								usuario el que dinámicamente cree los nuevos campos o atributos
								que desea asociarle a los datos definidos como base en el
								sistema. Estos atributos se asocian a Categorías, Subcategorías
								de bienes o al remate mismo. Permitiendo que se pidan o no,
								dependiendo de la categoría o subcategoría que tenga el bien
								(ej. No pide número de baños a un auto y sí a un departamento).</li>
							<li>Se puede integrar sin problema con el diseño WEB actual que
								el cliente tenga; o si lo desea nuestro equipo de diseñadores le
								propondrá un nueva WEB usando los standares mas avanzados de
								diseño.</li>
						</ul>
					</div>
					<div id="pestana3" style="height: 230px;">
						<h3>Un mundo de posibilidades</h3>
						<p>Al contar con un servicio de este tipo, nuestros clientes abren
							la puerta a una gran cantidad de posibilidades de automatizar sus
							procesos e integrarlos a la realización del remate en sí. Como
							por ejemplo:</p>
						<ul class="caracteristicas lstVitrina">
							<li>Manejo de bodega e inventario.</li>
							<li>Recepción de las garantías de remate.</li>
							<li>Facturación de lotes adjudicados.</li>
							<li>Integración con módulos contables.</li>
							<li>Acuerdos de publicidad con los mandantes.</li>
							<li>Liquidaciones a mandantes.</li>
						</ul>
					</div>
					<div id="pestana4">
						<h3>Nuestros Clientes en el ámbito Remates</h3>
						<div id="logosVitrina">
							<img
								src="../images/soluciones/logos-vitrina/lg_macal-remates.jpg"
								alt="" /> <img
								src="../images/soluciones/logos-vitrina/lg_nazco-remates.jpg"
								alt="" /> <img
								src="../images/soluciones/logos-vitrina/lg_cgr-remates.jpg"
								alt="" /> <img
								src="../images/soluciones/logos-vitrina/lg_tattersall-remates.jpg"
								alt="" />
						</div>
						<div class="clearfix"></div>
						<h3 style="margin-top: 10px;">Experiencia</h3>
						<p>Nuestra empresa, es la empresa de informática con más
							experiencia en el ámbito de los remates. Siete años siendo la
							gerencia de informática de Macal y dos años independientes
							atendiendo a importante casas de remates como CGR, NazcoChile y
							Tattersall, nos permiten asegurar eso.</p>
						<p>A partir de esta experiencia y luego de varios años de
							desarrollo, aprendiendo de las experiencias que en este ámbito
							nos ha tocado vivir, además de asimilar los avances que la
							tecnología ha tenido, es que desarrollamos una plataforma de
							administración para la Promoción de Remates y Venta Directa.</p>
					</div>
					<div id="pestana5">
						<h3>¿Ventajas?</h3>
						<ul class="caracteristicas">
							<li>Dinámico y hecho a la medida de su necesidad.</li>
							<li>Disminución de carga operativa al momento del remate
								permitiendo la inscripción previa y automatización de tareas
								operacionales (registro en línea de participante en un remate).</li>
						</ul>
					</div>
				</div>
				<!-- fin pestañas -->

			</div>
		</div>
		<div class="clearfix"></div>
    <?php
	    if (is_file("../partes/footer.php")) {
	    	include_once("../partes/footer.php");
	    } else {
	    	include_once("partes/footer.phpp");
	    }    
    ?>
</div>
</body>
</html>