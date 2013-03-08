<!DOCTYPE HTML>
<html lang="es">
<head>
<?php
if (is_file("../lib/general.php")) {
	include_once("../lib/constantes.php");
	include_once("../lib/general.php");
} else {
	include_once("lib/constantes.php");
	include_once("lib/general.php");
}
$selected = "PRODUCTOS Y SERVICIOS";
$pagina = "CUADRO DE MANDO INTEGRAL ";
?>
<meta charset="utf-8">
<title><?=$pagina?> <?=NOMBRE_EMPRESA ?></title>
<link rel="stylesheet" href="../js/jquery-ui-1.8.23.custom/css/ui-lightness/jquery-ui-1.8.23.custom.css" type="text/css" media="screen">
<link type="text/css" rel="stylesheet" href="<?php print $sitio;?>/css/styles.css" />
<link type="text/css" rel="stylesheet" href="<?php print $sitio;?>/css/soluciones.css" />
<script type="text/javascript" src="<?php print $sitio;?>/js/jquery.js"></script>
<script src="../js/jquery-ui-1.8.23.custom/js/jquery-ui-1.8.23.custom.min.js" ></script>
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
		if (is_file("../partes/header.php")) {
			include_once("../partes/header.php");
		} else {
			include_once("partes/header.php");
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
				<ul><!-- los li son los titulos de cada tab -->
					<li><a href="#pestana1">DESCRIPCIÓN</a></li>
					<li><a href="#pestana2">CARACTERÍSTICAS</a></li>
					<li><a href="#pestana3">MODULOS DEL SISTEMA</a></li>
					<li><a href="#pestana4">IMPLEMENTACIÓN DEL SISTEMA</a></li>
				</ul>
				<!-- y los div tienen el contenido de cada tab -->
				<div id="pestana1">
					<p>Es una plataforma de control de gestión dedicada a la planificación estratégica de 
					cada uno de los criterios de análisis de una institución (Perspectivas), siendo estos 
					Recursos, Vinculación con el medio, Procesos y Gestión Institucional.
					</p>
					<p>Construido para cumplir con las especificaciones de Norton & Kaplan para la 	
					administración de mapas estratégicos y métricas de medición de éxito.
					</p>
				</div>
				<div id="pestana2">
					<ul class="caracteristicas">
						<li>Permite definir indicadores claves de gestión institucional, ingresar valores de medición y generar reportes globales (exportables en Excel).</li>
						<li>Permite monitorear periódicamente el estado y la tendencia de cada indicador según la relación entre las metas definidas y sus cumplimientos.</li>
						<li>Permite definir para cada criterio de análisis Objetivos Estratégicos, Objetivos Específicos, Indicadores y Acciones concretas que llevarán a cabo el cumplimiento de las metas determinadas.</li>
						<li>Permite aplicar filtros a la visualización de información por pantalla.</li>
						<li>Permite acceso de múltiples usuarios y múltiples perfiles.</li>
						<li>Plataforma operada completamente vía internet.</li>
					</ul>
				</div>
				<div id="pestana3" class="imadMod" style="height: 400px;">
					<div class="clearfix"></div>	
					<ul id="molulos_sistema_imad2" class="caracteristicas ulImad mitadImad">
						<li class="titu_item imad">
						<h3>Perspectivas</h3>
							<ul>
								<li>Visión global de los criterios de análisis y sus respectivos 
								objetivos estratégicos, específicos e indicadores. Permitiendo 
								acceder a un gráfico de sus cumplimientos a la fecha.
								</li>
							</ul>
						</li>
					</ul>
					<ul id="molulos_sistema_imad3" class="caracteristicas ulImad mitadImad" >
						<li class="titu_item imad">
							<h3>Definir Plan</h3>
							<ul>
								<li>Crea criterios de análisis y sus objetivos estratégicos, 
								específicos, indicadores y acciones respectivas.
								</li>
							</ul>
						</li>
					</ul>					
					<ul id="molulos_sistema_imad4" class="caracteristicas ulImad mitadImad" >
						<li class="titu_item imad">
							<h3>Catálogo</h3>
							<ul>
								<li>Planilla que reúne en detalle los valores de cumplimientos, 
								metas, estados y tendencias de cada criterio de análisis.
								</li>
							</ul>
						</li>
					</ul>					
					<ul id="molulos_sistema_imad5" class="caracteristicas ulImad mitadImad" >
						<li class="titu_item imad">
							<h3>Cumplimientos</h3>
							<ul>
								<li>Ingresa valores de cumplimientos de metas para cada indicador definido.
								</li>
							</ul>							
						</li>
					</ul>
					<ul id="molulos_sistema_imad3" class="caracteristicas ulImad mitadImad" >
						<li class="titu_item imad">
							<h3>Reportes</h3>
							<ul>
								<li>Genera reportes de cumplimientos según Indicadores y Metas, pudiendo 
								estos ser exportados en formato Excel.
								</li>
							</ul>
						</li>
					</ul>				
				</div>
				<div id="pestana4">
					<ul class="caracteristicas">
						<li>Identificar las necesidades del cliente y adaptar la plataforma según sus requerimientos</li>
						<li>La plataforma se aloja en los servidores de Plataforma Group, aplicando el modelo 
						SaaS (Software as a Service), o bien, en los del cliente según él decida.
						</li>
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