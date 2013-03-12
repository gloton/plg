<!DOCTYPE HTML>
<html lang="es">
<head>
<meta charset="utf-8">
<title>TITULO</title>
<?php
if (is_file ( "../lib/general.php" )) {
	include_once ("../lib/constantes.php");
	include_once ("../lib/general.php");
} else {
	include_once ("lib/constantes.php");
	include_once ("lib/general.php");
}

?>
<link href="<?php print $sitio;?>/css/menu.css" type="text/css"
	media="screen" rel="stylesheet" />
<script type="text/javascript">
$(document).ready(function() {
	$("ul#oe_menu.oe_menu > li").click( function(event) {
		//mostrar submenu
		$("ul#oe_menu.oe_menu > li > div").fadeOut("slow");
		$(this).children("div").fadeIn("slow");
		$(this).children("div").css("z-index","999");
		
		//destacar al menu seleccionado
		$("ul#oe_menu.oe_menu li").removeClass("selected");
		$(this).addClass("selected");
		event.stopPropagation();
	});
	$("body:not(.oe_wrapper)").click( function(event) {
		//cerrar submenu, al hacer click afuera del bloque destinado al menu
		$("ul#oe_menu.oe_menu li").removeClass("selected");
		$("ul#oe_menu.oe_menu > li > div").fadeOut("slow");		
		event.stopPropagation();
	});
//inicio efecto de expandir menu
	$(".signo-desplegar").click( function(event) {
		if ($(this).attr("id") == "signo-productos") {
			if ($(this).attr("src") == "http://web.plataformagroup.cl/images/menu/signo_menos.png") {
				
			} else {
				//$(this).attr("src","images/menu/signo_menos.png");
				$("#signo-productos").attr("src","http://web.plataformagroup.cl/images/menu/signo_menos.png");
				$("#signo-servicios").attr("src","http://web.plataformagroup.cl/images/menu/signo_mas.png");
				//despliga el panel seleccionado
				$("#soluciones_servicios").hide("slow");
				$("#soluciones_productos").show("slow");				
			}		
		} else {
			//si en este momento muestra el signo menos
			if ($(this).attr("src") == "http://web.plataformagroup.cl/images/menu/signo_menos.png") {
		
			} else {
			//si en este momento muestra el signo mas
				//cambia icono a los 2
				$("#signo-servicios").attr("src","http://web.plataformagroup.cl/images/menu/signo_menos.png");
				$("#signo-productos").attr("src","http://web.plataformagroup.cl/images/menu/signo_mas.png");
				//despliga el panel seleccionado
				$("#soluciones_productos").hide("slow");	
				$("#soluciones_servicios").show("slow");
			}				
		}
		event.stopPropagation();
	});
//fin efecto de expandir menu 
//inicio efecto breadcroumbs
	
	  $('#mn_bc_nosotros').click(function(e) {
		  $('ul#oe_menu.oe_menu > li#li_nosotros').trigger('click');
		  e.stopPropagation();
	  });			  
	  $('#mn_bc_productos_y_servicios').click(function(e) {
		  $('ul#oe_menu.oe_menu > li#li_productos').trigger('click');
		  e.stopPropagation();
	  });		  	
	  $('#mn_bc_clientes').click(function(e) {
		  $('ul#oe_menu.oe_menu > li#li_clientes').trigger('click');
		  e.stopPropagation();
	  });		  
//fin efecto breadcroumbs	
});
</script>
</head>

<body>
	<div class="barra-top"></div>
	<div class="contenedor" style="width: 1038px; padding-left: 76px;">
		<div id="redes_sociales">
			<div class="social-icons">
				<ul>
					<li><a target="_blank"
						href="http://www.facebook.com/pages/PlataformaGroup/395237797186872"
						class="facebook"> <img
							src="<?php echo $sitio; ?>/images/facebook.png"
							alt="Logo de facebook" />
					</a></li>
					<li><a target="_blank"
						href="http://www.linkedin.com/company/1177299" class="linkedin"> <img
							src="<?php echo $sitio; ?>/images/linkedin.png"
							alt="Logo de linkedin" />
					</a></li>
					<li><a target="_blank" href="https://twitter.com/PlataformaGroup"
						class="twitter"> <img
							src="<?php echo $sitio; ?>/images/twitter.png"
							alt="Logo de twitter" />
					</a></li>
				</ul>
			</div>
		</div>
		<div class="acceso">
			<div style="display: none">
				<span>Acceso Clientes</span> <img
					src="<?php echo $sitio; ?>/images/white_arrow.png" />
			</div>
		</div>
	</div>
	<div id="header">
		<div class="contenedor" style="width: 960px;">
			<div id="logo">
				<a href="<?php echo $sitio; ?>/index.php"><img
					alt="Plataforma Group" title="Plataforma Group"
					src="<?php echo $sitio; ?>/images/logo.png" /></a>
			</div>
			<div class="logo_iso">
				<img src="<?php echo $sitio; ?>/images/logo-iso-9001.png"
					alt="Logo iso 9001" alt="Logo iso 9001:2008" />
			</div>
			<div class="clearfix"></div>
			<!--**************************************** 
inicio del menu
 *******************************************-->
			<div class="oe_wrapper">
				<!-- 	<div id="oe_overlay" class="oe_overlay"></div> -->
				<ul id="oe_menu" class="oe_menu">
					<li id="li_home"><a href="<?php echo $sitio; ?>/index.php">HOME</a>
					</li>
					<li id="li_nosotros"><a href="javascript:void(0);">NOSOTROS</a>
						<div id="mn_nosotros"
							style="left: -75px; height: 87px; width: 670px;">
							<!-- -112px -->
							<ul class="oe_full">
								<li>
									<div id="soluciones_nosotros">
										<div>
											<a href="<?php echo $sitio; ?>/nosotros/empresa.php">
												<div class="box">
													<div class="foto">
														<img
															src="<?php echo $sitio; ?>/images/menu/logo-relleno-menu.png"
															alt="imagen de relleno" width="47" height="48" />
													</div>
													<div class="texto">
														<h4>Empresa</h4>
														<div class="descripcion">
															<p>Especializados en la resolución de problemas aplicando
																TI</p>
														</div>
													</div>
												</div>
											</a> <a href="<?php echo $sitio; ?>/nosotros/equipo.php">
												<div class="box">
													<div class="foto">
														<img
															src="<?php echo $sitio; ?>/images/menu/relleno-equipo.png"
															alt="imagen de relleno" width="43" height="48" />
													</div>
													<div class="texto">
														<h4>Equipo</h4>
														<div class="descripcion">
															<p>Expertos en diversas áreas tecnológicas y de negocios</p>
														</div>
													</div>
												</div>
											</a> <a
												href="<?php echo $sitio; ?>/nosotros/trabaja-con-nosotros.php">
												<div class="box">
													<div class="foto">
														<img
															src="<?php echo $sitio; ?>/images/menu/relleno-trabaja-con-nosotros.png"
															alt="imagen de relleno" width="70" height="48" />
													</div>
													<div class="texto">
														<h4>Trabaja con nosotros</h4>
														<div class="descripcion">
															<p>Los mejores profesionales para potenciar nuestras
																áreas de negocios</p>
														</div>
													</div>
												</div>
											</a>
										</div>
									</div>
								</li>
							</ul>
						</div></li>
					<li id="li_productos" class="item3_menu"><a
						href="javascript:void(0);">PRODUCTOS Y SERVICIOS</a>
						<div id="mn_productos"
							style="left: -112px; padding-right: 8px; padding-bottom: 20px;">
							<!-- -112px -->
							<ul class="oe_full">
								<li>
									<div id="soluciones_productos" style="width: 668px;">
										<div>
											<a href="<?php echo $sitio; ?>/soluciones/anb.php">
												<div class="box">
													<div class="foto">
														<img
															src="<?php echo $sitio; ?>/images/menu/plat_integral_carrusel.jpg"
															alt="imagen de relleno" width="70" height="48" />
													</div>
													<div class="texto">
														<h4>ANB</h4>
														<div class="descripcion">
															<p>Plataforma de activos no bancarios</p>
														</div>
													</div>
												</div>
											</a> <a href="<?php echo $sitio; ?>/servicetonic/index.php">
												<div class="box">
													<div class="foto">
														<img
															src="<?php echo $sitio; ?>/images/menu/servicetonic_menu.jpg"
															alt="imagen de relleno" width="70" height="48" />
													</div>
													<div class="texto">
														<h4>ServiceTonic</h4>
														<div class="descripcion">
															<p>Plataforma de Mesa de Ayuda</p>
														</div>
													</div>
												</div>
											</a> <a
												href="<?php echo $sitio; ?>/soluciones/plataforma-cobranza-judicial.php">
												<div class="box">
													<div class="foto">
														<img
															src="<?php echo $sitio; ?>/images/menu/plat_cobranza_menu.jpg"
															alt="imagen de relleno" width="70" height="48" />
													</div>
													<div class="texto">
														<h4>PCJ</h4>
														<div class="descripcion">
															<p>Plataforma de cobranza judicial</p>
														</div>
													</div>
												</div>
											</a> <a
												href="<?php echo $sitio; ?>/soluciones/remates-en-vivo.php">
												<div class="box">
													<div class="foto">
														<img src="<?php echo $sitio; ?>/images/menu/remates-en-vivo_menu.jpg"
															alt="imagen de relleno" width="70" height="48" />
													</div>
													<div class="texto">
														<h4>Remates</h4>
														<div class="descripcion">
															<p>Remates en vivo</p>
														</div>
													</div>
												</div>
											</a> <a
												href="<?php echo $sitio; ?>/soluciones/vitrina-remates.php">
												<div class="box">
													<div class="foto">
														<img
															src="<?php echo $sitio; ?>/images/menu/vitrina_remate_menu.jpg"
															alt="imagen de relleno" width="70" height="48" />
													</div>
													<div class="texto">
														<h4>Vitrina remates</h4>
														<div class="descripcion">
															<p>Vitrina de Remates</p>
														</div>
													</div>
												</div>
											</a> <a
												href="<?php echo $sitio; ?>/soluciones/gestion-examenes-medicos-imad.php">
												<div class="box">
													<div class="foto">
														<img src="<?php echo $sitio; ?>/images/menu/imad_menu.jpg"
															alt="imagen de relleno" width="70" height="48" />
													</div>
													<div class="texto">
														<h4>IMAD</h4>
														<div class="descripcion">
															<p>Gestión para exámenes médicos</p>
														</div>
													</div>
												</div>
											</a> <a
												href="<?php echo $sitio; ?>/soluciones/cuadro-de-mando-integral.php">
												<div class="box">
													<div class="foto">
														<img src="<?php echo $sitio; ?>/images/menu/CMI_menu.jpg"
															alt="imagen de relleno" width="70" height="48" />
													</div>
													<div class="texto">
														<h4>CMI</h4>
														<div class="descripcion">
															<p>Cuadro de mando integral</p>
														</div>
													</div>
												</div>
											</a>
										</div>
									</div>
								</li>
							</ul>
						</div></li>
					<li id="li_clientes"><a
						href="<?php echo $sitio; ?>/clientes/nuestros-clientes.php">CLIENTES</a></li>
					<!-- 				
		<li id="li_clientes"><a href="javascript:void(0);">CLIENTES</a>
			<div style="left:-111px; width: 448px; height: 70px;">
				<ul class="oe_full">
					<li>
						<div id="submenu_clientes">
							<div>
								<a href="<?php echo $sitio; ?>/clientes/nuestros-clientes.php">
									<div class="box">
										<div class="foto"><img src="<?php echo $sitio; ?>/images/menu/relleno-menu-nuestros-clientes.png" alt="imagen de relleno" width="47" height="48" /></div>
										<div class="texto">
											<h4>Nuestros clientes</h4>
											<div class="descripcion">
												<p>Venenatis justo metus porta</p>
											</div>
										</div>
									</div>
								</a>
								<a href="<?php echo $sitio; ?>/clientes/testimonios.php">
									<div class="box">
										<div class="foto"><img src="<?php echo $sitio; ?>/images/menu/relleno-testimonios.jpg" alt="imagen de relleno" width="62" height="42" /></div>
										<div class="texto">
											<h4>Testimonios</h4>
											<div class="descripcion">
												<p>Venenatis justo metus porta</p>									
											</div>
										</div>
									</div>
								</a>
							</div>
						</div>						
					</li>
				</ul>			
			</div>
		</li>
 -->
					<li id="li_alianzas"><a href="<?php echo $sitio; ?>/alianzas.php">ALIANZAS</a>
					</li>
					<li id="li_noticias"><a
						href="<?php echo $sitio; ?>/noticias/index.php">NOTICIAS</a></li>
					<li id="li_contacto"><a href="<?php echo $sitio; ?>/contacto.php">CONTACTO</a>
					</li>
				</ul>
			</div>
			<!--**************************************** 
fin del menu
 *******************************************-->
		</div>
	</div>
	<div class="clearfix"></div>
</body>
</html>