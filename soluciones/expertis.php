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
$pagina = "Solmicro - eXpertis";
?>
<meta charset="utf-8">
<title>Solmicro - eXpertis <?=NOMBRE_EMPRESA ?></title>
<link rel="stylesheet" href="../js/jquery-ui-1.8.23.custom/css/ui-lightness/jquery-ui-1.8.23.custom.css" type="text/css" media="screen">
<link type="text/css" rel="stylesheet" href="<?php print $sitio;?>/css/styles.css" />
<link type="text/css" rel="stylesheet" href="<?php print $sitio;?>/css/soluciones.css" />
<script type="text/javascript" src="<?php print $sitio;?>/js/jquery.js"></script>
<script
	src="../js/jquery-ui-1.8.23.custom/js/jquery-ui-1.8.23.custom.min.js"></script>
<script type="text/javascript">
	$(document).ready( function (){
		//para los tabs
		var x=$("#pestanas");
		x.tabs();
		var y=$("#acordeon");
		y.accordion();

		//cambiar palabra breadCroumbs
		$("#nivel3 .mn_bc_item").html("Solmicro-eXpertis");
	});
</script>
<style type="text/css">
/*marca menu pp pagina seleccionada*/
#li_productos a {
	background: none repeat scroll 0 0 #f0f0f0;
	color: #000000;
	opacity: 1;
}

#pestanas {
	float: left;
	margin-left: 17px;
	width: 680px;
}
/*pestaña 1*/
#tbl_prod {
	margin-left: 60px;
	margin-top: 20px;
}
#tbl_prod tr.fila_exp td.icono {
	width: 50px;
	text-align: center;
}
#tbl_prod tr.fila_exp td.celda_separa {
	width: 20px;
}
/*pestaña 2*/
.caract_exper {
	width: 643px;
	height: auto;
}
.caract_exper .col1 {
	float: left;
	padding-left: 30px;
	padding-top: 30px;
	width: 170px;
}
.caract_exper .col2 {
	width: 443px;
	float: left;
}
.caract_exper .col2 ul#lst_p2 {
	padding-top: 0px;
}
p.contactenos {
	font-size: 12px;
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
				<div class="theme1_left">
					<img src="../images/soluciones/expertis_encabezado_vert.jpg" alt="" />
				</div>
				<!-- inicio pestañas			 -->
				<div id="pestanas">
					<ul>
						<!-- los li son los titulos de cada tab -->
						<li><a href="#pestana1">DESCRIPCIÓN</a></li>
						<li><a href="#pestana2">VENTAJAS</a></li>
						<li><a href="#pestana3">BENEFICIOS</a></li>
						<li><a href="#pestana4">CLOUD</a></li>
						<li><a href="#pestana5">CARACTERÍSTICAS</a></li>
						<li><a href="#pestana6">CASOS DE ÉXITO</a></li>
					</ul>
					<!-- y los div tienen el contenido de cada tab -->
					<div id="pestana1">
						<p>Si sus preocupaciones son: programas de gestión que no se ajustan a las 
						peculiaridades de su empresa, herramientas que no evolucionan tecnológicamente 
						y se quedan obsoletas al poco tiempo, departamentos de atención al cliente con 
						los que es casi imposible contactar… El Software de gestión Solmicro-eXpertis es 
						su alternativa.
						</p>
						<table id="tbl_prod" width="642" border="0" cellspacing="0" cellpadding="0">
							<tr class="fila_exp">
								<td class="icono"><img src="../images/soluciones/expertis/erp_industrial.png" alt="ERP Industrial" /></td>
								<td>ERP Industrial</td>
								<td class="celda_separa">&nbsp;</td>
								<td  class="icono"><img src="../images/soluciones/expertis/erp_mantenimiento.png" alt="ERP Mantenimiento" /></td>
								<td>ERP Mantenimiento</td>
							</tr>
							<tr class="fila_exp">
								<td class="icono"><img src="../images/soluciones/expertis/erp_ingenierias.png" alt="ERP Ingenierias" /></td>
								<td>ERP Ingenierías</td>
								<td class="celda_separa">&nbsp;</td>
								<td class="icono"><img src="../images/soluciones/expertis/erp_rrhh.png" alt="ERP RRHH" /></td>
								<td>ERP RR.HH.</td>
							</tr>
							<tr class="fila_exp">
								<td class="icono"><img src="../images/soluciones/expertis/erp_alquiler_maquinaria.png" alt="Alquiler Maquinarias" /></td>
								<td>ERP Alquiler de Maquinaria</td>
								<td class="celda_separa">&nbsp;</td>
								<td class="icono"><img src="../images/soluciones/expertis/erp_ecommerce.png" alt="ERP Ecommerce" /></td>
								<td>ERP e-Commerce</td>
							</tr>
							<tr class="fila_exp">
								<td class="icono"><img src="../images/soluciones/expertis/erp_bodegas.png" alt="ERP Bodegas" /></td>
								<td>ERP Bodegas</td>
								<td class="celda_separa">&nbsp;</td>
								<td class="icono"><img src="../images/soluciones/expertis/erp_tpv.png" alt="ERP TPV" /></td>
								<td>ERP TPV</td>
							</tr>
							<tr class="fila_exp">
								<td class="icono"><img src="../images/soluciones/expertis/erp_construccion.png" alt="ERP Construccion" /></td>
								<td>ERP Construcción</td>
								<td class="celda_separa">&nbsp;</td>
								<td class="icono"><img src="../images/soluciones/expertis/erp_servicios.png" alt="ERP Servicios" /></td>
								<td>ERP Servicios</td>
							</tr>
							<tr class="fila_exp">
								<td class="icono"><img src="../images/soluciones/expertis/erp_instaladoras.png" alt="ERP Instaladoras" /></td>
								<td>ERP Instaladoras</td>
								<td class="celda_separa">&nbsp;</td>
								<td class="icono"><img src="../images/soluciones/expertis/erp_gestion_inmuebles.png" alt="ERP Inmuebles" /></td>
								<td>ERP Gestión de Inmuebles</td>
							</tr>
							<tr class="fila_exp">
								<td class="icono"><img src="../images/soluciones/expertis/erp_business_intelligence.png" alt="ERP Business Intelligence" /></td>
								<td>ERP Business Intelligence</td>
								<td class="celda_separa">&nbsp;</td>
								<td class="icono"><img src="../images/soluciones/expertis/erp_CRM.png" alt="ERP CRM" /></td>
								<td>CRM</td>
							</tr>
							<tr class="fila_exp">
								<td>&nbsp;</td>
								<td>&nbsp;</td>
								<td class="celda_separa">&nbsp;</td>
								<td class="icono"><img src="../images/soluciones/expertis/erp_crmtablet.png" alt="ERP CRM Tablet" /></td>
								<td>CRM Tablet</td>
							</tr>
						</table>
						<p class="contactenos">Para más información <a href="mailto:contacto@plataformagroup.cl" class="naranjo">contáctenos</a> o visite <a class="naranjo" href="http://www.solmicro.com/programas-de-gestion/erp-software-de-gestion.html" title="Pagina Solmicro" target="_blank">Solmicro</a></p>					
					</div>
					<div id="pestana2">
						<div class="caract_exper">
							<div class="col1">
								<img src="../images/soluciones/expertis/ico_ventajas.png" alt="Ventajas" />
							</div>
							<div class="col2">
								<ul id="lst_p2" class="caracteristicas">
									<li>Aplicaciones de gestión a la medida: fáciles de usar, implantar y mantener</li>
									<li>Servicio integral con una atención personalizada</li>
									<li>Ahorro y rentabilidad en la inversión tecnológica</li>
								</ul>
							
							</div>
							<p class="contactenos">Para más información <a href="mailto:contacto@plataformagroup.cl" class="naranjo">contáctenos</a> o visite <a class="naranjo" href="http://www.solmicro.com/programas-de-gestion/erp-software-de-gestion/ventajas-competitivas.html" title="Pagina Solmicro" target="_blank">Solmicro</a></p>
						</div>
						<img src="../images/soluciones/expertis/img_ventajas.png" alt="Nuestras ventajas" style="margin-left: 32px; margin-top: 10px;" />
					</div>
					<div id="pestana3">
						<div class="caract_exper">
							<h2>Beneficios</h2>
							<div class="col1">
								<img src="../images/soluciones/expertis/beneficios.png" alt="Beneficios" />
							</div>
							<div class="col2">
									<h3>Integración de la información de gestión</h3>
									<p>Creamos valor integrando la información. Los negocios son una cosa muy seria. 
									Los sistemas de gestión ERP juegan un papel decisivo en el desarrollo del negocio 
									en la empresa. En Solmicro lo sabemos por experiencia y por eso le brindamos 
									continuas oportunidades de desarrollo. Solmicro-eXpertis ERP, la elección estratégica 
									para la consolidación de toda la información del negocio, especialmente en grupos de 
									empresas donde la administración integrada de varios centros sea una necesidad.
									</p>									
								<ul id="lst_p2" class="caracteristicas" style="padding-bottom: 20px;">
									<li>Innovación</li>
									<li>Planificación</li>
									<li>Libertad</li>
									<li>Productividad</li>
									<li>Reconcepción de la visión del negocio</li>
									<li>Mejora de la satisfacción del cliente</li>
									<li>Aceleración de las relaciones comerciales</li>
								</ul>
							
							</div>
							<p class="contactenos">Para más información <a href="mailto:contacto@plataformagroup.cl" class="naranjo">contáctenos</a> o visite 
							<a class="naranjo" href="http://www.solmicro.com/programas-de-gestion/erp-software-de-gestion/beneficios-sistema-erp.html" title="Pagina Solmicro" target="_blank">Solmicro</a>
							</p>
						</div>						
					</div>
					<div id="pestana4">
						<div class="caract_exper">
							<div class="col1">
								<img src="../images/soluciones/expertis/cloud.png" alt="Coud" />
							</div>
							<div class="col2">
								<h2>Alojamiento Plataforma Azure – Microsoft</h2>
								<p>Solmicro Cloud es una innovadora solución que reporta todos los beneficios de Solmicro-eXpertis ERP: 
								proyectos a medida llave en mano en base a las necesidades de cada cliente, amplia funcionalidad, 
								solución escalable, asesoramiento, formación…; junto con las ventajas del modelo Cloud: sin inversión 
								inicial, sin servidores propios, acceso a la información desde cualquier lugar y con la garantía de 
								seguridad de Microsoft.
								</p>
								<p>Con Solmicro Cloud mejorará su gestión. Mejorará su competitividad.
								</p>
							</div>
							<p class="contactenos">Para más información <a href="mailto:contacto@plataformagroup.cl" class="naranjo">contáctenos</a> o visite <a class="naranjo" href="http://erpcloudsolmicro.com/" title="Pagina Solmicro" target="_blank">Solmicro</a></p>
						</div>
					</div>
					<div id="pestana5">
						<div class="caract_exper">
							<div class="col1">
								<img src="../images/soluciones/expertis/caracteristicas.png" alt="Caracteristicas" />
							</div>
							<div class="col2">
								<h2>Personalizable y fácil de usar. Eficaz.</h2>
								<p>El Software de gestión ERP-CRM Solmicro-eXpertis se adapta a cada empresa por su flexibilidad. 
								Tecnológicamente es muy robusto y cuenta con una cobertura funcional muy completa. Pero por si 
								algo destaca es por las amplias posibilidades de personalización que ofrece a cada usuario y por 
								su facilidad de uso.
								</p>
							</div>
							<p class="contactenos">Para más información contáctenos <a href="mailto:contacto@plataformagroup.cl" class="naranjo">contacto@plataformagroup.cl</a> o visite <a class="naranjo" href="http://www.solmicro.com/programas-de-gestion/erp-software-de-gestion/ventajas-competitivas.html" title="Pagina Solmicro" target="_blank">Solmicro</a></p>
							<div class="caract_exper">
								<div class="col1">
									<img src="../images/soluciones/expertis/funcionalidades.png" alt="Caracteristicas" />
								</div>
								<div class="col2">
									<h2>Funcionalidades diferenciadoras en Solmicro-eXpertis ERP-CRM.</h2>
									<p>Solmicro-eXpertis ERP-CRM se compone de módulos funcionales. Esto le convierte en un ERP muy 
									flexible al combinar en módulos cualquier conjunto de programas. Además de las funcionalidades 
									comunes a todos los programas de gestión ERP-CRM, dispone de módulos claramente diferenciadores: 
									Calidad, Mantenimiento, Recursos Humanos, EDI, ELM, Proyectos, Programación de la Producción, 
									Configurador de Productos, B2B y Gestión documental.
									</p>
								</div>
								<p class="contactenos">Para más información <a href="mailto:contacto@plataformagroup.cl" class="naranjo">contáctenos</a> o visite 
								<a class="naranjo" href="http://www.solmicro.com/programas-de-gestion/erp-software-de-gestion/modulos-funcionales-erp.html" title="Pagina Solmicro" target="_blank">Solmicro</a>
								</p>								
							</div>
						</div>
					</div>	
					<div id="pestana6">
						<div class="caract_exper" style="height: 176px;">
							<div class="col1">
								<img src="../images/soluciones/expertis/ico-casos-exito.png" alt="Casos de exito" />
							</div>
							<div class="col2">
								<h2>Implantaciones y Casos de Éxito ERP Sistemas de Gestión</h2>
								<p>En Solmicro ERP colaboramos en el desarrollo y modernización 
								tecnológica de las empresas con una perspectiva cercana y consciente 
								de la realidad empresarial.
								</p>
							</div>
						</div>						
						<p class="contactenos">Para más información <a href="mailto:contacto@plataformagroup.cl" class="naranjo">contáctenos</a> o visite 
						<a class="naranjo" href="http://www.solmicro.com/programas-de-gestion/erp-software-de-gestion/casos-de-exito-de-sistemas-de-gestion.html" title="Pagina Solmicro" target="_blank">Solmicro</a>
						</p>
						<img src="../images/soluciones/expertis/casos-exito.png" alt="Casos de Exito" style="margin-left: 46px; margin-top: 10px;" />							
					</div><!-- fin -->										
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