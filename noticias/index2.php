<html lang="es" xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta content="text/html; charset=utf-8" http-equiv="Content-Type">
<title>Noticias « Plataforma Group</title>
<link href="../css/styles.css" rel="stylesheet" type="text/css">
<link href="../css/blog/styles.css" type="text/css" rel="stylesheet">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js"></script>
<script src="../js/jquery.js" language="javascript"></script>
<style type="text/css">
/*post*/
#wrapperBlog .post {
	width: 668px;
	height: 180px;
	margin: 10px auto;
}
#wrapperBlog .postSup {
	height: 142px;
}
#wrapperBlog .postInf {
	height: 38px;
	float: right;
	padding-right: 20px;
	font-weight: bold;
}
#wrapperBlog .postInf a {
	color: #1F9D48;
}
#wrapperBlog .introImg {
	width: 218px;
	height: 142px;;
	float: left;
}
#wrapperBlog .introText {
	width: 450px;
	height: 100%;
	float: left;
}
/*side right*/
</style>

<style type="text/css">
/*marca menu pp pagina seleccionada*/
#li_noticias a {
    background: none repeat scroll 0 0 #f0f0f0;
    color: #000000;
    opacity: 1;
}
</style>
</head>
<body>
<div id="wrap">
	


<meta charset="utf-8">
<title>TITULO</title>
<link rel="stylesheet" media="screen" type="text/css" href="http://localhost/plg/css/resset.css">
<link rel="stylesheet" media="screen" type="text/css" href="http://localhost/plg/css/menu.css">
<script type="text/javascript">
$(document).ready(function() {
	$("ul#oe_menu.oe_menu &gt; li").click( function(event) {
		//mostrar submenu
		$("ul#oe_menu.oe_menu &gt; li &gt; div").fadeOut("slow");
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
		$("ul#oe_menu.oe_menu &gt; li &gt; div").fadeOut("slow");		
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
		  $('ul#oe_menu.oe_menu &gt; li#li_nosotros').trigger('click');
		  e.stopPropagation();
	  });			  
	  $('#mn_bc_productos').click(function(e) {
		  $('ul#oe_menu.oe_menu &gt; li#li_productos').trigger('click');
		  e.stopPropagation();
	  });		  	
	  $('#mn_bc_clientes').click(function(e) {
		  $('ul#oe_menu.oe_menu &gt; li#li_clientes').trigger('click');
		  e.stopPropagation();
	  });		  
//fin efecto breadcroumbs	
});
</script>



<div class="barra-top"></div>
    <div style="width: 1038px; padding-left: 76px;" class="contenedor">
        <div id="redes_sociales">
        	<div class="social-icons">
				<ul>
					<li>
						<a class="facebook" href="http://www.facebook.com/pages/PlataformaGroup/395237797186872" target="_blank">
							<img alt="Logo de facebook" src="http://localhost/plg/images/facebook.png">
						</a>
					</li>
					<li>
						<a class="linkedin" href="http://www.linkedin.com/company/1177299" target="_blank">
							<img alt="Logo de linkedin" src="http://localhost/plg/images/linkedin.png">
						</a>
					</li>
					<li>
						<a class="twitter" href="https://twitter.com/PlataformaGroup" target="_blank">
							<img alt="Logo de twitter" src="http://localhost/plg/images/twitter.png">
						</a>
					</li>
				</ul>
			</div>
        </div>
        <div class="acceso">
            <div style="display:none">
            <span>Acceso Clientes</span>
            <img src="http://localhost/plg/images/white_arrow.png">
            </div>
        </div>
    </div>
	<div id="header">	
		<div style="width: 960px;" class="contenedor">
			<div id="logo">
			<a href="http://localhost/plg/index.php"><img src="http://localhost/plg/images/logo.png" title="Plataforma Group" alt="Plataforma Group"></a>
			</div>
			<div class="logo_iso">
				<img alt="Logo iso 9001" src="http://localhost/plg/images/logo-iso-9001.png">
			</div>
			<div class="clearfix"></div>
<!--**************************************** 
inicio del menu
 *******************************************-->
<div class="oe_wrapper">
<!-- 	<div id="oe_overlay" class="oe_overlay"></div> -->
	<ul class="oe_menu" id="oe_menu">
		<li id="li_home"><a href="http://localhost/plg/index.php">HOME</a>
		</li>	
		<li id="li_nosotros"><a href="javascript:void(0);">NOSOTROS</a>
			<div style="left:-75px; height: 87px; width: 670px;" id="mn_nosotros"><!-- -112px -->
				<ul class="oe_full">
					<li>
						<div id="soluciones_nosotros">
							<div>
								<a href="http://localhost/plg/nosotros/empresa.php">
									<div class="box">
										<div class="foto">
											<img height="48" width="47" alt="imagen de relleno" src="http://localhost/plg/images/menu/logo-relleno-menu.png">
										</div>
										<div class="texto">
											<h4>Empresa</h4>
											<div class="descripcion">
												<p>Especializados en la resolución de problemas aplicando TI</p>
											</div>
										</div>
									</div>
								</a>
								<a href="http://localhost/plg/nosotros/equipo.php">
									<div class="box">
										<div class="foto"><img height="48" width="43" alt="imagen de relleno" src="http://localhost/plg/images/menu/relleno-equipo.png"></div>
										<div class="texto">
											<h4>Equipo</h4>
											<div class="descripcion">
												<p>Expertos en diversas áreas tecnológicas y de negocios</p>									
											</div>
										</div>
									</div>
								</a>
								<a href="http://localhost/plg/nosotros/trabaja-con-nosotros.php">
									<div class="box">
										<div class="foto"><img height="48" width="70" alt="imagen de relleno" src="http://localhost/plg/images/menu/relleno-trabaja-con-nosotros.png"></div>
										<div class="texto">
											<h4>Trabaja con nosotros</h4>									
											<div class="descripcion">
												<p>Los mejores profesionales para potenciar nuestras áreas de negocios</p>									
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
		<li class="item3_menu" id="li_productos"><a href="javascript:void(0);">PRODUCTOS Y SERVICIOS</a>
			<div style="left:-112px;padding-right: 8px; padding-bottom: 20px;" id="mn_productos"><!-- -112px -->
				<ul class="oe_full">
					<li>
						<div style="width: 668px;" id="soluciones_productos">
							<div>
								<a href="http://localhost/plg/soluciones/anb.php">
									<div class="box">
										<div class="foto"><img height="48" width="70" alt="imagen de relleno" src="http://localhost/plg/images/menu/plat_integral_carrusel.jpg"></div>
										<div class="texto">
											<h4>ANB</h4>
											<div class="descripcion">
												<p>Plataforma activos no bancarios</p>
											</div>
										</div>
									</div>
								</a>								
								<a href="http://localhost/plg/servicetonic/index.php">
									<div class="box">
										<div class="foto"><img height="48" width="70" alt="imagen de relleno" src="http://localhost/plg/images/menu/servicetonic_menu.jpg"></div>
										<div class="texto">
											<h4>Servicetonic</h4>
											<div class="descripcion">
												<p>Plataforma mesa de ayuda</p>									
											</div>
										</div>
									</div>
								</a>
								<a href="http://localhost/plg/soluciones/plataforma-cobranza-judicial.php">
									<div class="box">
										<div class="foto"><img height="48" width="70" alt="imagen de relleno" src="http://localhost/plg/images/menu/plat_cobranza_menu.jpg"></div>
										<div class="texto">
											<h4>PCJ</h4>									
											<div class="descripcion">
												<p>Plataforma cobranza judicial</p>									
											</div>
										</div>
									</div>
								</a>
								<a href="http://localhost/plg/soluciones/remates-en-linea.php">									
									<div class="box">
										<div class="foto"><img height="48" width="70" alt="imagen de relleno" src="http://localhost/plg/images/menu/CMI_menu.jpg"></div>
										<div class="texto">
											<h4>Remates</h4>									
											<div class="descripcion">
												<p>Plataforma de remates en vivo</p>									
											</div>
										</div>
									</div>
								</a>
								<a href="http://localhost/plg/soluciones/vitrina-remates.php">									
									<div class="box">
										<div class="foto"><img height="48" width="70" alt="imagen de relleno" src="http://localhost/plg/images/menu/vitrina_remate_menu.jpg"></div>
										<div class="texto">
											<h4>Vitrina remates</h4>									
											<div class="descripcion">
												<p>Plataforma vitrina de remates</p>									
											</div>
										</div>	
									</div>
								</a>
								<a href="http://localhost/plg/soluciones/gestion-examenes-medicos-imad.php">
									<div class="box">
										<div class="foto"><img height="48" width="70" alt="imagen de relleno" src="http://localhost/plg/images/menu/imad_menu.jpg"></div>
										<div class="texto">
											<h4>IMAD</h4>									
											<div class="descripcion">
												<p>Gestión para exámenes medicos</p>									
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
		<li id="li_clientes"><a href="http://localhost/plg/clientes/nuestros-clientes.php">CLIENTES</a></li>
<!-- 				
		<li id="li_clientes"><a href="javascript:void(0);">CLIENTES</a>
			<div style="left:-111px; width: 448px; height: 70px;">
				<ul class="oe_full">
					<li>
						<div id="submenu_clientes">
							<div>
								<a href="http://localhost/plg/clientes/nuestros-clientes.php">
									<div class="box">
										<div class="foto"><img src="http://localhost/plg/images/menu/relleno-menu-nuestros-clientes.png" alt="imagen de relleno" width="47" height="48" /></div>
										<div class="texto">
											<h4>Nuestros clientes</h4>
											<div class="descripcion">
												<p>Venenatis justo metus porta</p>
											</div>
										</div>
									</div>
								</a>
								<a href="http://localhost/plg/clientes/testimonios.php">
									<div class="box">
										<div class="foto"><img src="http://localhost/plg/images/menu/relleno-testimonios.jpg" alt="imagen de relleno" width="62" height="42" /></div>
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
		<li id="li_alianzas"><a href="http://localhost/plg/alianzas.php">ALIANZAS</a>
		</li>
		<li id="li_noticias"><a href="http://localhost/plg/noticias/index.php">NOTICIAS</a>
		</li>
		<li id="li_contacto"><a href="http://localhost/plg/contacto.php">CONTACTO</a>
		</li>			
	</ul>
</div>
<!--**************************************** 
fin del menu
 *******************************************-->
		</div>
	</div>	
    <div class="clearfix"></div>

    <div class="contenedor">
		<!-- Begin wrapperBlog -->
		<div id="wrapperBlog">
			<!-- Begin Left Column -->
			<div id="leftcolumn">
				  	<div class="post">
		  		<div class="postSup">
		  			<div class="introImg">
		  				<div style="box-shadow: 0 1px 5px rgba(0, 0, 0, 0.25);padding: 4px;background-color: #FFFFFF; width: 190px; height: 120px;" class="wrapIntroImg">
		  					<img src="../images/blog/noticias-3.jpg" class="introThum">
		  				</div>
		  			</div>
		  			<div class="introText">
		  				<div class="postTitle">
		  					<h2>tincidunt neque inceptos 32</h2>
		  				</div>
		  				<div class="postDate">
		  					<span>Lunes 01 de Octubre de 2012</span>
		  				</div>
		  				<div class="postCategory">
		  							  					<span>Novedades</span>
		  				</div>
		  				<div class="postDetail">
		  					<p>Adipiscing mi gravida at platea hendrerit sem suscipit nam interdum venenatis inceptos donec potenti   						
		  					</p>
		  				</div>  				  				  				
		  			</div>
		  		</div>
		  		<div class="postInf">
		    		
		  			<a href="tincidunt-neque-inceptos-32-p32.html">
		  				<span class="postMore">
		  					Leer mas...
		  				</span>
		  			</a>
		  		</div>
		  	</div>
				  	<div class="post">
		  		<div class="postSup">
		  			<div class="introImg">
		  				<div style="box-shadow: 0 1px 5px rgba(0, 0, 0, 0.25);padding: 4px;background-color: #FFFFFF; width: 190px; height: 120px;" class="wrapIntroImg">
		  					<img src="../images/blog/noticias-1.jpg" class="introThum">
		  				</div>
		  			</div>
		  			<div class="introText">
		  				<div class="postTitle">
		  					<h2>tincidunt neque inceptos 30</h2>
		  				</div>
		  				<div class="postDate">
		  					<span>Lunes 03 de Septiembre de 2012</span>
		  				</div>
		  				<div class="postCategory">
		  							  					<span>Novedades</span>
		  				</div>
		  				<div class="postDetail">
		  					<p>Adipiscing mi gravida at platea hendrerit sem suscipit nam interdum venenatis inceptos donec potenti   						
		  					</p>
		  				</div>  				  				  				
		  			</div>
		  		</div>
		  		<div class="postInf">
		    		
		  			<a href="tincidunt-neque-inceptos-30-p30.html">
		  				<span class="postMore">
		  					Leer mas...
		  				</span>
		  			</a>
		  		</div>
		  	</div>
				  	<div class="post">
		  		<div class="postSup">
		  			<div class="introImg">
		  				<div style="box-shadow: 0 1px 5px rgba(0, 0, 0, 0.25);padding: 4px;background-color: #FFFFFF; width: 190px; height: 120px;" class="wrapIntroImg">
		  					<img src="../images/blog/default.jpg" class="introThum">
		  				</div>
		  			</div>
		  			<div class="introText">
		  				<div class="postTitle">
		  					<h2>tincidunt neque inceptos 22</h2>
		  				</div>
		  				<div class="postDate">
		  					<span>Viernes 11 de Mayo de 2012</span>
		  				</div>
		  				<div class="postCategory">
		  							  					<span>Novedades</span>
		  				</div>
		  				<div class="postDetail">
		  					<p>Adipiscing mi gravida at platea hendrerit sem suscipit nam interdum venenatis inceptos donec potenti   						
		  					</p>
		  				</div>  				  				  				
		  			</div>
		  		</div>
		  		<div class="postInf">
		    		
		  			<a href="tincidunt-neque-inceptos-22-p22.html">
		  				<span class="postMore">
		  					Leer mas...
		  				</span>
		  			</a>
		  		</div>
		  	</div>
					</div>
			<!-- End Left Column -->
			<!-- Begin Right Column -->
			<div id="rightcolumn">
				<div id="noticias-right">
					<img src="../images/ipad-relleno.jpg">
				</div>			
				<div class="postModulo">
					<div class="postModuloTitle">
						<h3>Categorias</h3>
					</div>
					<div class="postModuloCategory">
						<ul>
						
							<li><a href="?cat=8"><span>ANB</span></a></li>
						
							<li><a href="?cat=7"><span>Clientes</span></a></li>
						
							<li><a href="?cat=3"><span>IMAD</span></a></li>
						
							<li><a href="?cat=1"><span>Novedades</span></a></li>
						
							<li><a href="?cat=4"><span>PCJ</span></a></li>
						
							<li><a href="?cat=6"><span>Plataforma de Remates</span></a></li>
						
							<li><a href="?cat=2"><span>Servicetonic</span></a></li>
						
							<li><a href="?cat=5"><span>Tecnología</span></a></li>
							
						</ul>
					</div>			
				</div>
			</div><!-- End Right Column -->
			<div class="clearfix"></div>
			<div id="footerBlog">
				<div id="paginacion">
					<p>
								<span>Anterior</span>
						
							
		| 
								<a title="Siguiente" href="?pos=3&amp;cat=1">Siguiente</a>
						</p></div>
			</div>
		</div><!-- End wrapperBlog -->    
    </div>
		<div class="barra-bottom">
		<div id="footer">  
			<div class="clearfix"></div>                                               
			<ul class="listafooter">
				<li class="titulista"><a href="http://localhost/plg/nosotros.php"><span>Nosotros</span></a></li>
                <li><a href="http://localhost/plg/nosotros/empresa.php"><span>Empresa</span></a></li>
				<li><a href="http://localhost/plg/nosotros/equipo.php"><span>Equipo</span></a></li>
				<li><a href="http://localhost/plg/nosotros/trabaja-con-nosotros.php"><span>Trabaja con Nosotros</span></a></li>
				<li>&nbsp;</li>
			</ul>
			<ul class="listafooter">
				<li class="titulista"><a href="#"><span>Área de negocios</span></a></li>
                <li><a href="#"><span>Servicing</span></a></li>
				<li><a href="http://localhost/plg/soluciones/productos.php"><span>Productos</span></a></li>
				<li><a href="http://localhost/plg/soluciones/servicios.php"><span>Servicios</span></a></li>
			</ul>
			<ul class="listafooter">
				<li class="titulista"><a href="#"><span>Clientes</span></a></li>
                <li><a href="http://localhost/plg/clientes/nuestros-clientes.php"><span>Nuestros clientes</span></a></li>
				<li><a href="http://localhost/plg/clientes/testimonios.php"><span>Casos de éxito</span></a></li>
			</ul>        
			<ul class="listafooter">
				<li class="titulista"><a href="http://localhost/plg/alianzas.php"><span>Alianzas</span></a></li>
			</ul>    
			<ul class="listafooter">
				<li class="titulista"><a href="http://localhost/plg/noticias.php"><span>Noticias</span></a></li>
			</ul> 
			<ul class="listafooter">
				<li class="titulista"><a href="http://localhost/plg/contacto.php"><span>Contacto</span></a></li>
			</ul>          
            <div class="clearfix"></div>
            <div id="datos-footer">
                <ul>
                    <li class="titulista"><span>Plataforma Group</span></li>
                    <li>Monjitas #527, Of. 1316</li>
                    <li>Santiago </li>
                    <li>Tel. (562) 2 963 8030 </li>
                    <li><a href="http://localhost/plg/contacto.php"><span>contacto@platafomagoup.cl</span></a></li>
                </ul>             
            </div>                                                                                   
		</div>  	               
        <div class="contenedor">
            <div id="post-footer">Copyright &copy; Prueba, Privacy Statement Terms and Conditions.         
            </div>        
        </div>
        
	</div> 	
</div>

</body>
</html>