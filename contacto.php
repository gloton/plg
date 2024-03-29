<?php
if (isset ( $_POST ["demo"] )) {
	$demo = $_POST ["demo"];
} else {
	$demo = false;
}
if (isset ( $_POST ["desde_servicetonic"] )) {
	$desde_servicetonic = $_POST ["desde_servicetonic"];
} else {
	$desde_servicetonic = false;
}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<?php
include_once ("lib/constantes.php");
include_once ("lib/general.php");
$selected = "CONTACTO";
?>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>EMPRESA « Plataforma Group</title>
<link type="text/css" rel="stylesheet" href="./css/styles.css" />
<link type="text/css" rel="stylesheet" href="./css/contacto.css" />
<script src="./js/validaciones.js"></script>
<script
	src="https://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js"></script>
<script src="http://maps.google.com/maps/api/js?sensor=false"
	type="text/javascript"></script>
<script type="text/javascript" src="./js/jquery.js"></script>
<script type="text/javascript">

jQuery(window).load(function(){
	var latlng = new google.maps.LatLng(-33.43663,-70.644666);
	var settings = {
		zoom: 15,
		center: latlng,
		mapTypeControl: true,
		mapTypeControlOptions: {style: google.maps.MapTypeControlStyle.DROPDOWN_MENU},
		navigationControl: true,
		navigationControlOptions: {style: google.maps.NavigationControlStyle.SMALL},
		mapTypeId: google.maps.MapTypeId.ROADMAP
		};
	var map = new google.maps.Map(document.getElementById("map_canvas"), settings);
	var companyPos = new google.maps.LatLng(-33.43663,-70.644666);
	var companyMarker = new google.maps.Marker({
		position: companyPos,
		map: map,
		title:"Some title"
		});
}); 


</script>

<style type="text/css">
/*marca menu pp pagina seleccionada*/
#li_contacto a {
	background: none repeat scroll 0 0 #f0f0f0;
	color: #000000;
	opacity: 1;
}
</style>
</head>
<body>
	<div id="wrap">
	<?php include_once("partes/header.php"); ?>
    <div class="contenedor">
			<div class="two_column">
				<div class="left_col">
					<!--jgl 10/05/2012 inicio formulario de contacto-->
					<div class="contact-form-wrap">
						<form id="contact-form" name="contact-form" method="post"
							action="lib/mail-contacto.php">
							<p class="error" id="name-error">I don't talk to strangers.</p>
							<dl class="clearfix">
								<dt>Nombre</dt>
								<dd>
									<input onkeypress="return validar(event);" type="text"
										id="name" class="text-file" name="name" />
								</dd>
							</dl>

							<p class="error" id="email-error">You don't want me to answer?</p>
							<dl class="clearfix">
								<dt>Email</dt>
								<dd>
									<input
										onblur="valida_correo(document.getElementById('email').value);"
										type="text" id="email" class="text-file" name="email" />
								</dd>
							</dl>

							<p class="error" id="subject-error">What is the purpose of the
								contact?</p>
							<dl class="clearfix">
								<dt>Asunto</dt>
								<dd>
									<input type="text" id="subject" class="text-file"
										name="subject" />
								</dd>
							</dl>
                        <?php
																								if ($desde_servicetonic) {
																									?>
						<!-- inicio contacto desde servicetonic -->
							<div id="opciones_servicetonic">
								<!--mostrarservicetonic si tiene valor si, en mail-contacto.php se enviara la informacion de estos campos -->
								<input type="hidden" name="mostrarservicetonic" value="si" />
								<div class="check-st">
									<input type="checkbox" name="solicitud_demo" value="SI"
										<?php if ($demo == "true") { echo  "checked "; echo $demo;}; ?> /><span>Solicito
										un Demo</span>
								</div>
								<div class="check-st">
									<input type="checkbox" name="presentacion_terreno" value="SI" /><span>Presentación
										en terreno</span>
								</div>
								<div class="clearfix"></div>
								<div class="check-st">
									<input type="checkbox" name="mas_informacion" value="SI" /><span>Más
										información</span>
								</div>
								<div class="check-st">
									<input type="checkbox" name="otros" value="SI" /><span>Otros</span>
								</div>
							</div>
							<!-- fin contacto desde servicetonic -->
                        <?php
																								}
																								?>    
                        <p class="error" id="message-error">Forgot why
								you came here?</p>
							<div class="message">
								<textarea id="message" class="contact-form-content"
									name="message"></textarea>
							</div>

							<p class="success" id="mail-success">Thank you. The mailman is on
								his way.</p>
							<p class="error" id="mail-fail">Sorry, don't know what happened.
								Try later.</p>

							<div id="romove-submit">
								<input type="submit" value="Enviar mensaje" id="send-message" />
							</div>
						</form>
					</div>
					<!--jgl 10/05/2012 fin formulario de contacto-->

				</div>
				<div id="contacto-contacto">
					<h3>D&oacute;nde estamos</h3>
					<p>
						Monjitas #527, Of. 1316 Santiago<br /> Tel. (562) 2 963 8030<br />
						<a href="mailto:contacto@plataformagroup.cl">contacto@plataformagroup.cl</a>
					</p>
					<div id="map_canvas" style="width: 280px; height: 300px"></div>
				</div>
				<div class="clearfix"></div>
			</div>
		</div>
		<div class="clearfix"></div>
	<?php include_once("partes/footer.php"); ?>
</div>
</body>
</html>
