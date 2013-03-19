<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<?php
include_once ("lib/constantes.php");
include_once ("lib/general.php");
$selected = "INICIO";
?>
<title>Plataforma Group &laquo; Soluciones Tecnológicas</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link type="text/css" rel="stylesheet" href="css/styles.css" />
<link type="text/css" rel="stylesheet" href="css/nivo-slider.css" />
<link type="text/css" rel="stylesheet" href="css/jsCarousel-2.0.0.css" />
<link type="text/css" rel="stylesheet" href="css/timetabs.css" />
<!-- jagl inicio acordeon css -->
<link rel="stylesheet" href="js/jquery-ui-1.8.23.custom/css/smoothness/jquery-ui-1.9.2.custom.css" type="text/css" media="screen" />
<link rel="stylesheet" href="js/jquery-ui-1.8.23.custom/css/acordeon-ui.css" type="text/css" media="screen" />
<!-- jagl fin acordeon css-->
<style type="text/css">
/*marca menu pp pagina seleccionada*/
#li_home a {
	background: none repeat scroll 0 0 #f0f0f0;
	color: #000000;
	opacity: 1;
}

dl.tabs.enabled dd.active {
	overflow: auto;
}
</style>
<script
	src="https://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js"></script>
<script language="javascript" src="js/jquery.nivo.slider.js"></script>
<script language="javascript" src="js/jsCarousel-2.0.0.js"></script>
<script type="text/javascript" src="js/jquery.timetabs.js"></script>
<!-- jagl inicio acordeon js -->
<script src="http://code.jquery.com/ui/1.10.1/jquery-ui.js" type="text/javascript"></script>
<!-- jagl fin acordeon js -->

<script type="text/javascript">
	jQuery(window).load(function(){
		jQuery(".nivoSlider-wrap").fadeIn(500);
		jQuery(".slider-wrap .loader").css({display: "none"});
		jQuery("#slider").nivoSlider({
			effect:"fade",
			slices:15,
			boxCols:8,
			boxRows:4,
			animSpeed:800,
			pauseTime:15000,
			startSlide:<?=rand(0,3)?>,
			captionOpacity:1,
			directionNav:true,
			directionNavHide:false,
			controlNav:true,
			controlNavThumbs:true,
			controlNavThumbsFromRel:true,
			controlNav: true,// 1,2,3... navigation
			controlNavThumbsSearch: '.png', // Replace this with...
			controlNavThumbsReplace: '_thumb.png' // ...this in thumb Image src
		});
	}); 
</script>
<script type="text/javascript">
   $(document).ready(function() {
	   $('#carousel').jsCarousel({ 
			onthumbnailclick: function(src) { alert(src); }, 
			autoscroll: false,
	   		masked: false
			});
   });
</script>
<script type="text/javascript">
$(document).ready(function(){
  $('dl.tabs').addClass('enabled').timetabs({
    defaultIndex: 0,
    interval: 99999992500,
    continueOnMouseLeave: true,
    animated: 'fade',
    animationSpeed: 700
  });
});
</script>
<script type="text/javascript">
//jagl acordeon para las noticias(posicion izquierdas)
$(function() {
	var icons =	{
					header: "ui-icon-circle-arrow-e",
					activeHeader: "ui-icon-circle-arrow-s"
				};
		$( "#accordion" ).accordion({
			icons: icons
		});

	});

</script>
<style type="text/css">
#contenedor-slider h1.titulos_home {
	color: #333333;
}
</style>
</head>
<body>
	<div id="wrap">
	<?php include_once("partes/header.php"); ?>
    <div id="contenedor-slider">
			<div class="nivoSlider-wrap">
				<div id="slider">
					<img src="images/home/slider/banner_solu_tatt.jpg" alt="Soluciones"
						rel="images/soluciones.png" /> <img
						src="images/home/slider/pb-bci.jpg" alt="Creatividad"
						rel="images/creatividad.png" /> <img
						src="images/home/slider/brp-santander.jpg" alt="Calidad"
						rel="images/calidad.png" /> <img
						src="images/home/slider/banner_iso.jpg" class="sliderNovededas"
						alt="Novedades" rel="images/novedades.png" /> <img
						src="images/home/slider/novedad_solmicro.jpg"
						class="sliderNovededas" alt="Novedades" rel="images/novedades.png" />
					<img src="images/home/slider/banner_innovadoras-soluciones.jpg"
						class="sliderNovededas" alt="Novedades" rel="images/novedades.png" />
					<img src="images/home/slider/banner_solucione-tecnologicas.jpg"
						class="sliderNovededas" alt="Novedades" rel="images/novedades.png" />
				</div>
			</div>
			<iframe width="960" height="200" scrolling="no" frameborder="0"
				name="carrusel-home" src="slider/index.php"></iframe>
			<div class="two_column">
				<div class="left_two">
					<h1 class="titulos_home">Noticias</h1>
					<div id="accordion">
						<h3>Lanzamiento Plataforma de Remates en Vivo</h3>
						<div>
							<p><a href="soluciones/remates-en-vivo.php" target="_self" title="Pagina remates en vivo">REMATES EN VIVO</a> es una robusta plataforma tecnológica y de servicios 
							que permite que los participantes web estén escuchando lo que sucede en 
							el Salón de Remates y contagiándose de la adrenalina del mismo, a su vez 
							los participantes del Salón pueden ver en línea las posturas que realizan 
							los participantes de internet.
							</p>							
						</div>
						<h3>Sistema de control de Asistencia CVC-COMAO</h3>
						<div>
							<p>Durante el mes de octubre se comenzó la marcha blanca del
								Control de Asistencia desarrollado para CVC-COMAO, empresa que
								provee servicios de aseo y vigilancia a terceros.
							</p>
							<p>Este control de asistencia fue diseñado para que los
								supervisores puedan accederlo vía celular y en terreno, pudiendo
								conocer y controlar: cuando un trabajador registra vía celular y
								en línea su asistencia o inasistencia, bonos y horas extras
								asociados a centros de costos, registro de coordenadas del GPS
								del teléfono permitiéndole esto tener la ubicación desde donde
								se hizo la transacción, etc..
							</p>
							<p>Finalmente toda la información recolectada se inyecta
								mensualmente al ERP de la empresa.
							</p>
						</div>
						<h3>Certificación ISO9001</h3>
						<div>
							<p>Durante la tercera semana de Octubre nuestra empresa concluyó
								satisfactoriamente el proceso de certificación ISO 9001-2008.
								Certificando de acuerdo a esta norma de calidad todo el proceso
								de "DISEÑO, DESARROLLO, SOPORTE y COMERCIALIZACION DE SOFTWARE".
							</p>
							<p>Fue un trabajo duro que nos tomó casi 10 meses de trabajo de
								todo nuestro equipo, liderado por nuestro Gerente de Servicing
								quien trabajo a la par con los consultores de la empresa.
							</p>
							<p>Creadero en el diseño nuestros sistema de gestión de calidad
								que fue auditado y aprobado por Bureau Veritas. Agradecemos a
								todos y cada uno de los miembros de nuestra empresa y de la
								empresa consultora por el apoyo prestado en todo este camino.
							</p>
						</div>
					</div>					
				</div>
				<div class="right_two">
					<h1 class="titulos_home">Novedades Plataforma Group</h1>
					<div class="tabs-wrap">
						<dl class="tabs">
							<dt>Producto Destacado</dt>
							<dd>
								<h4>PLATAFORMA GROUP es partner de SOLMICRO</h4>
								<p>
									<img src="images/solmicro_186px.jpg" alt="Solmicro"
										style="float: right;" />La empresa española SOLMICRO, que
									cuenta con el software ERP más innovador - <strong>Solmicro-eXpertis
										ERP</strong>, ha elegido a PLATAFORMA GROUP como partner
									privilegiado para su instalación en Latinoamérica. Esta
									asociación, nos potencia como un proveedor único de soluciones
									integrales de negocios, cubriendo una amplia gama de soluciones
									verticales ERP específicos para cada sector: Industrial,
									Ingenierías, Alquiler de Maquinaria, Bodegas, Construcción,
									Gestión de Inmuebles, Instaladoras, Servicios, Business
									Intelligence, Mantenimiento, RR.HH., e-Commerce, TPV. CRM y CRM
									Tablet. <strong>Todo dentro de una única solución integrada</strong>.
									<a href="noticias/plataformagroup-es-partner-solmicro.php"
										target="_self"><span class="vermas">Ver más ></span></a>
								</p>
								<p>
									<em>Para mayor información visite: <a
										href="http://www.solmicro.com/programas-de-gestion/erp-software-de-gestion.html"
										target="_blank">SOLMICRO</a> o contáctenos a: <a
										href="mailto:contacto@plataformagroup.cl">contacto@plataformagroup.cl</a></em>
								</p>
								<span id="more-36"></span>
							</dd>
							<dt>Proyecto Destacado</dt>
							<dd>
								<h4>Caso de éxito PB Soluciones - Banco BCI</h4>
								<p>
									<img src="images/blog/intro/pb-bci.jpg"
										alt="Soluciones - Banco BCI" style="float: right;" /> La
									empresa PB Soluciones, ha elegido a PLATAFORMA GROUP como
									proveedor de servicios y a ServiceTonic (representado por
									nuestra empresa en Chile) como plataforma de implementación,
									para llevar a cabo un gran proyecto para su cliente estrella:
									Banco BCI, consistente en hacer el seguimiento de down time (o
									tiempo fuera de servicio) que tienen sus cajeros automáticos a
									lo largo de todo Chile.
								</p>
								<p>
									Bajo el diseño, implementación y administración de nuestros
									consultores en Chile y el equipo de desarrollo en España, se ha
									implementado un plan piloto con una base de datos de más de 200
									cajeros, a los cuales se les hace seguimiento desde febrero de
									2012, registrando <a
										href="noticias/caso-de-exito-pb-soluciones-banco-bci.php"
										target="_self"> <span class="vermas">Ver más ></span>
									</a>.
								</p>

								<span id="more-36"></span>
							</dd>
							<dt>Noticia PLG</dt>
							<dd>
								<h4>Plataforma BRP para Banco SANTANDER</h4>
								<p>
									<img src="images/blog/intro/brp-santander.jpg"
										alt="BRP para Banco SANTANDER" style="float: right;" /> Esta
									Plataforma diseñada para la Administración de Bienes Reposeídos
									fue construida por PLATAFORMA GROUP el año 2003, lo que se
									tradujo para el Banco en una mejora significativa de la labor
									que ellos realizaban, permitiéndoles tener en una sola
									aplicación todas las propiedades en venta (con sus distintos
									estados), toda la información referente al ingreso y
									seguimiento de ofertas por parte de los corredores, así como el
									manejo de los gastos asociados y sus aprobaciones, solicitudes
									de comités de ofertas, además de informes de gestión y
									estadísticas de ventas.
								</p>
								<p>
									Posterior a su implementación, Banco Santander continuó junto a
									nosotros con el servicio de mantención y <a
										href="noticias/plataforma-brp-para-banco-santander.php"
										target="_self"> <span class="vermas">Ver más ></span>
									</a>.
								</p>
								<span id="more-36"></span>
							</dd>
						</dl>
					</div>
				</div>
				<div class="clearfix"></div>
			</div>
		</div>
	<?php include_once("partes/footer.php"); ?> 	
</div>
</body>
</html>
