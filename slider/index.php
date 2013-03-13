<!DOCTYPE HTML>
<html lang="es">
<head>
<meta charset="utf-8">
<title>Carrusel</title>
<link href="slideitmoo.css" type="text/css" rel="stylesheet">
<script src="mootools-1.2-more.js" type="text/javascript"></script>
<script src="mootools-1.2.1-core.js" type="text/javascript"></script>
<script src="slideitmoo-1.1.js" type="text/javascript"></script>
<script type="text/javascript">
	window.addEvents({
		'domready': function(){
			/* thumbnails example , div containers */
			new SlideItMoo({
						overallContainer: 'SlideItMoo_outer',
						elementScrolled: 'SlideItMoo_inner',
						thumbsContainer: 'SlideItMoo_items',		
						itemsVisible:4,
						elemsSlide:2,
						duration:300,
						itemsSelector: '.SlideItMoo_element',
						itemWidth: 228,
						showControls:1,
						startIndex:1,
						onChange: function(index){
							
						}
			});
		}
	});
</script>
</head>
<body>
	<div id="SlideItMoo_outer">
		<div class="SlideItMoo_back">
			<!--slide back button-->
		</div>
		<div id="SlideItMoo_inner">
			<div id="SlideItMoo_items" style="width: 2983px;">
				
				<div class="SlideItMoo_element">
					<!--<strong>1: Address</strong>-->
					<a target="_top" href="../servicetonic/index.php"> <img width="205"
						height="140" src="img/servicetonic_carrusel.jpg"></a>
					<p style="display: none;">Aca puedo colocar un parrafo</p>
				</div>
				<div class="SlideItMoo_element">
					<!--<strong>1: Address</strong>-->
					<a target="_top" href="#"> <img width="205"
						height="140" src="img/expertis_carrusel.jpg"></a>
					<p style="display: none;">Aca puedo colocar un parrafo</p>
				</div>
				<div class="SlideItMoo_element">
					<!--<strong>1: Address</strong>-->
					<a target="_top" href="../soluciones/remates-en-vivo.php"> <img width="205" height="140"
						src="img/remates-en-vivo_carrusel.jpg"></a>
					<p style="display: none;">Aca puedo colocar un parrafo</p>
				</div>				
				<div class="SlideItMoo_element">
					<!--<strong>1: Address</strong>-->
					<a target="_top" href="../soluciones/cuadro-de-mando-integral.php"> <img width="205" height="140"
						src="img/CMI_carrusel.jpg"></a>
					<p style="display: none;">Aca puedo colocar un parrafo</p>
				</div>
				<div class="SlideItMoo_element">
					<!--<strong>1: Address</strong>-->
					<a target="_top" href="../soluciones/anb.php"> <img width="205"
						height="140" src="img/plat_integral_carrusel.jpg"></a>
					<p style="display: none;">Aca puedo colocar un parrafo</p>
				</div>
				<div class="SlideItMoo_element">
					<!--<strong>1: Address</strong>-->
					<a target="_top" href="../soluciones/vitrina-remates.php"> <img width="205" height="140"
						src="img/vitrina_remate_carrusel.jpg"></a>
					<p style="display: none;">Aca puedo colocar un parrafo</p>
				</div>
				<div class="SlideItMoo_element">
					<!--<strong>1: Address</strong>-->
					<a target="_top"
						href="../soluciones/plataforma-cobranza-judicial.php"> <img
						width="205" height="140" src="img/plat_cobranza_carrusel.jpg"></a>
					<p style="display: none;">Aca puedo colocar un parrafo</p>
				</div>
				<div class="SlideItMoo_element">
					<!--<strong>1: Address</strong>-->
					<a target="_top" href="../soluciones/gestion-examenes-medicos-imad.php"> <img width="205" height="140"
						src="img/imad_carrusel.jpg"></a>
					<p style="display: none;">Aca puedo colocar un parrafo</p>
				</div>
			</div>
		</div>
		<div class="SlideItMoo_forward">
			<!--slide forward button-->
		</div>
	</div>
</body>
</html>