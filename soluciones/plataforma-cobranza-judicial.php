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
$pagina = "PLATAFORMA DE COBRANZA JUDICIAL ";
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
					<img src="../images/soluciones/plat_cobranza_encabezado.jpg" alt="" />
				</div>
				<div class="clearfix"></div>
				<!-- inicio pestañas			 -->
				<div id="pestanas">
					<ul>
						<!-- los li son los titulos de cada tab -->
						<li><a href="#pestana1">DESCRIPCIÓN</a></li>
						<li><a href="#pestana2">CARACTERÍSTICAS</a></li>
						<li><a href="#pestana3">MODULOS DEL SISTEMA</a></li>
						<li><a href="#pestana4">IMPLEMENTACIÓN DEL SISTEMA</a></li>
						<li><a href="#pestana5">SERVICIOS INCLUIDOS</a></li>
					</ul>
					<!-- y los div tienen el contenido de cada tab -->
					<div id="pestana1">
						<p>Es un poderoso sistema que permite mejorar la calidad de la
							gestión de la cobranza en tiempo y costos, con un control total
							desde que la operación cae en mora hasta el cierre del juicio.
							Este sistema maneja en una sola plataforma: información de los
							clientes, operaciones en mora, cobranza prejudicial, juicios
							asociados, gestiones, pago de honorarios a abogados, control de
							gastos asociados a los juicios, permitiendo tener una visión
							global. Integrando al cliente, los estudios de abogados y sus
							proveedores externos.</p>
					</div>
					<div id="pestana2">
						<ul class="caracteristicas">
							<li>Sin límite de usuarios.</li>
							<li>Funcionamiento a través de Internet y vía celular.</li>
							<li>Administración de múltiples cedentes y oficinas de cobranza</li>
							<li>Potente y ágil administración de usuarios y perfiles del
								sistema.</li>
							<li>Administración de los juicios llevados tanto por abogados
								internos como los gestionados por estudios externos.</li>
							<li>Seguimiento y control en línea de los gastos y gestiones
								ingresados a los juicios.</li>
							<li>Generación en tiempo real de diversos informes de gestión de
								manera centralizada para todos los procesos de cobranza
								iniciados por la empresa.</li>
							<li>Comités electrónicos para resolver temas que escapan a las
								reglas de negocios del workflow, permitiendo esto un
								considerable ahorro de tiempo y recursos.</li>
							<li>Ingreso de información por el usuario que la genera, sin
								intermediarios.</li>
							<li>Despliegue de información a través de scorecards o paneles de
								control.</li>
							<li>Asignación automática de abogados a partir de distribución de
								cartera.</li>
							<li>100% integrable con cualquier sistema operacional del
								cliente.</li>
							<li>Aplicable tanto a pequeños como a grandes volúmenes de
								operaciones.</li>
							<li>Libera al cliente si así lo desea, de la mantención de la data 
							en sus servidores. El almacenamiento y la administración son parte 
							del servicio que entregamos a muchos de nuestros clientes, teniendo 
							para esto nuestros servidores en un Data Center certificado.</li>
						</ul>
					</div>
					<div id="pestana3">
						<ul id="molulos_sistema" class="caracteristicas"
							style="height: 340px;">
							<li class="titu_item" style="height: 192px;"><span>Juicios</span>
								<ul>
									<li>Gestiones</li>
									<li>Bitácoras</li>
									<li>Participantes</li>
									<li>Control de tareas</li>
									<li>Comités</li>
									<li>Exhortos</li>
									<li>Suspensiones</li>
									<li>Convenios</li>
									<li>Citaciones</li>
									<li>Eliminaciones</li>
								</ul></li>
							<li class="titu_item" style="height: 192px;"><span>Operaciones</span>
								<ul>
									<li>Seguimiento de documentos</li>
									<li>Control de stock de documentos (códigos de barra)</li>
									<li>Asignación automática o manual de abogados</li>
									<li>Control de operaciones con garantía estatal</li>
									<li>Exclusiones</li>
									<li>Envío de protestos y aclaraciones a Boletín Comercial</li>
								</ul></li>
							<li class="titu_item" style="min-height: 26px;"><span>Pre-judicial</span></li>
							<li class="titu_item" style="min-height: 26px;"><span>Gastos</span></li>
							<li class="titu_item" style="min-height: 26px;"><span>Honorarios</span></li>
							<li class="titu_item" style="min-height: 26px;"><span>Indicadores
									e informes de gestión</span></li>
							<li class="titu_item" style="min-height: 26px;"><span>Control de
									acceso independiente</span></li>
						</ul>
					</div>
					<div id="pestana4">
						<p>El proceso de implementación típico de nuestra Plataforma de
							Cobranza Judicial considera los siguientes pasos:</p>
						<ul class="caracteristicas">
							<li>Conocimiento de la realidad técnica del cliente identificando
								fuentes de información, calidad y oportunidad de las mismas.</li>
							<li>Parametrización del sistema de acuerdo a los requerimientos
								del cliente.</li>
							<li>Integración de la información del cliente con nuestro
								sistema, definición de los procedimientos de carga de datos.</li>
							<li>Capacitación y puesta en marcha.</li>
						</ul>
					</div>
					<div id="pestana5">
						<h3>Soporte Técnico y Comercial</h3>
						<ul class="caracteristicas">
							<li>Ejecutivo comercial con dedicación al cliente, responsable de
								responder a todas y cada una de sus necesidades, supervisando
								tanto la Mesa de Ayuda como los diversos proyectos o
								innovaciones al sistema.</li>
						</ul>
						<h3>Administración de los Datos</h3>
						<ul class="caracteristicas">
							<li>Servicio de administración, almacenamiento y respaldo de
								datos, contemplado durante toda la vigencia del contrato de
								servicio.</li>
							<li>Disponibilidad de los datos 24x7.</li>
						</ul>
						<h3>Capacitación de Usuarios</h3>
						<ul class="caracteristicas">
							<li>Capacitaciones grupales previas a la puesta en marcha, tanto
								para usuarios internos como externos.</li>
							<li>Capacitaciones posteriores a la puesta en marcha, para los
								usuarios que recién se integren al sistema.</li>
							<li>Disponibilidad para realizar capacitaciones fuera de
								Santiago.</li>
						</ul>
						<h3>Confección de Reportes Especiales</h3>
						<ul class="caracteristicas">
							<li>A solicitud del cliente, podemos generar informes o reportes
								no incluidos en el sistema, requeridos para situaciones
								particulares.</li>
						</ul>
					</div>
				</div>
				<!-- fin pestañas -->

			</div>
		</div>
		<div class="clearfix"></div>
    <?php
				if (is_file ( "../partes/footer.php")) {
	    	include_once("../partes/footer.php");
	    } else {
	    	include_once("partes/footer.phpp");
	    }    
    ?>
</div>
</body>
</html>