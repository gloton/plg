<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<?php
include_once("lib/general.php");
$selected = "INICIO";
?>
<title>Plataforma Group &laquo; Soluciones Tecnológicas  </title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link type="text/css" rel="stylesheet" href="css/styles.css" />
<link type="text/css" rel="stylesheet" href="css/nivo-slider.css" />
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js"></script>
<script language="javascript" src="js/jquery.nivo.slider.js"></script>
<script>
jQuery(window).load(function(){
jQuery(".nivoSlider-wrap").fadeIn(500);
jQuery(".slider-wrap .loader").css({display: "none"});
jQuery("#slider").nivoSlider({
effect:"fade",
slices:15,
boxCols:8,
boxRows:4,
animSpeed:800,
pauseTime:3000,
startSlide:0,
directionNav:true,
directionNavHide:false,
controlNav:true,
controlNavThumbs:true,
controlNavThumbsFromRel:true,
controlNav: true,// 1,2,3... navigation

});
}); 
</script>
<script type="text/javascript">

	function mifuncion () {
		jQuery('.nivo-controlNav a').click(function(event) {
	        //instrucciones
	    	var title = jQuery(this).attr("class");
	    	  alert(title);        
	        //alert("hola 1335");
	    	  event.stopPropagation();
		});
		}
</script>
</head>

<body onload="mifuncion();">
<div id="wrap">
    <div id="contenedor-slider">
		<div class="nivoSlider-wrap">
			<div id="slider">
				<img src="images/slide1.jpg" alt="" rel="images/soluciones.png" />
				<img src="images/slide2.jpg" alt="" rel="images/creatividad.png" />
				<img src="images/slide3.jpg" alt="" rel="images/calidad.png" />
				<img id="sliderNovededas1" class="sliderNovededas" src="images/slide4.jpg" alt="" rel="images/novedades.png" />
				<img id="sliderNovededas2" class="sliderNovededas" src="images/slide5.jpg" alt="" rel="images/novedades.png" />
				<img id="sliderNovededas3" class="sliderNovededas" src="images/slide6.jpg" alt="" rel="images/novedades.png" />
				<img id="sliderNovededas4" class="sliderNovededas" src="images/slide7.jpg" alt="" rel="images/novedades.png" />				
			</div>
		</div>
            
	</div>
</div>

</body>
</html>