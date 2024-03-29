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
$pagina = "GESTIÓN DE EXAMENES MEDICOS IMAD ";
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
					<img src="../images/soluciones/imad_encabezado.jpg" alt="" />
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
						<p>Esta poderosa plataforma web permite administrar todos los
							documentos e imágenes asociados a la toma de un examen médico, de
							manera coordinada entre sucursales de una entidad de salud.
							Siendo IMAD una plataforma completamente online, lo cual permite
							centralizar el manejo de información en el ambiente de internet.</p>
						<p>IMAD integra completamente todas las acciones que componen un
							examen médico, desde el registro en la Caja de Atención,
							asignación del examen a los profesionales de salud
							correspondientes, carga de archivos generados por el examen,
							hasta la entrega del resultado final en manos del paciente.</p>
						<p>La versatilidad de esta plataforma consiste en que se puede
							vender como producto en sí misma, o bien, en alianza con Medica
							Group, empresa relacionada, entre otras áreas, al servicio de
							información de imagenología.</p>
					</div>
					<div id="pestana2">
						<ul class="caracteristicas">
							<li>Funcionamiento completamente a través de internet.</li>
							<li>Múltiples usuarios y perfiles</li>
							<li>Múltiples sucursales</li>
							<li>Interfaz sencilla e intuitiva</li>
							<li>Completo Work Flow desde la toma de examen hasta la entrega
								del resultado</li>
							<li>Carga de archivos de tipo documento de texto, imagen y audio</li>
							<li>Carga manual y automática de imágenes</li>
							<li>Permite trabajo complementario entre funcionarios y
								especialistas médicos</li>
							<li>Flexibilidad para integrarse a distintas modalidades de
								trabajo</li>
						</ul>
					</div>
					<div id="pestana3" class="imadMod" style="height: 400px;">
						<ul id="molulos_sistema_imad1" class="caracteristicas ulImad"
							style="height: 130px; width: 860px">
							<li class="titu_item imad" style="width: 860px;">
								<h3 style="clear: both;">Caja de Atención</h3>
								<div style="width: 430px; height: 100px; float: left;">
									<span>Crear Examen</span>
									<ul>
										<li>Toma los datos del paciente y genera el o los exámenes que
											sean necesarios, según categoría, servicio y especialidad.</li>
									</ul>
								</div>
								<div style="width: 430px; height: 100px; float: left;">
									<span>Entregar Examen</span>
									<ul>
										<li>Marca el examen como entregado</li>
									</ul>
								</div>
								<div class="clearfix"></div>
							</li>
						</ul>
						<div class="clearfix"></div>
						<ul id="molulos_sistema_imad2"
							class="caracteristicas ulImad mitadImad">
							<li class="titu_item imad">
								<h3>Administrador Institución</h3> <span>Asignar examen al
									especialista</span>
								<ul>
									<li>Asigna examen para que el especialista lo informe o lo
										valide</li>
								</ul>
							</li>
						</ul>
						<ul id="molulos_sistema_imad3"
							class="caracteristicas ulImad mitadImad">
							<li class="titu_item imad">
								<h3>Tecnólogo</h3> <span>Carga imágenes y documentos del examen</span>
							</li>
						</ul>
						<ul id="molulos_sistema_imad4"
							class="caracteristicas ulImad mitadImad">
							<li class="titu_item imad">
								<h3>Radiólogo</h3> <span>Carga imágenes y archivo de audio del
									examen</span>
							</li>
						</ul>
						<ul id="molulos_sistema_imad5"
							class="caracteristicas ulImad mitadImad">
							<li class="titu_item imad">
								<h3>Digitador</h3> <span>Carga documento de transcripción de
									audio del examen</span>
							</li>
						</ul>
					</div>
					<div id="pestana4">
						<p>El proceso de implementación típico de la plataforma IMAD
							considera los siguientes pasos:</p>
						<ul class="caracteristicas">
							<li>Conocimiento de las características propias de trabajo de la
								institución médica</li>
							<li>Integración de funcionarios y especialidades médicas
								requeridas por el cliente</li>
							<li>Definición de requerimientos para herramientas y
								accesibilidad de la plataforma</li>
							<li>Capacitación del personal y puesta en marcha</li>
						</ul>
					</div>
					<div id="pestana5">
						<ul class="caracteristicas">
							<li>Atención directa y personalizada a través de nuestro Servicio
								al Cliente, donde nuestros ejecutivos estarán dispuestos a
								atender cada una de sus necesidades.</li>
							<li>Atención comercial dedicada a recibir sus requerimientos de
								nuevos proyectos e innovaciones para la plataforma.</li>
							<li>Soporte técnico</li>
							<li>SaaS (Software as a Service)</li>
							<li>Almacenamiento de exámenes y documentos relevantes en formato
								digital en un servidor seguro para fines de servicio y registro
								histórico.</li>
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