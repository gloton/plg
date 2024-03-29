<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<?php
include_once ("../lib/constantes.php");
include_once ("../lib/general.php");
$selected = "CLIENTES";
$pagina = "Nuestros Clientes";
?>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title><?=$pagina?> <?=NOMBRE_EMPRESA ?></title>
<link type="text/css" rel="stylesheet" href="../css/styles.css" />
<link type="text/css" rel="stylesheet" href="../css/clientes.css" />
<script
	src="https://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js"></script>
<script language="javascript" src="../js/jquery.js"></script>
<script type="text/javascript" src="../js/cufon-yui.js"></script>
<script type="text/javascript" src="../js/Vegur_300.font.js"></script>
<script type="text/javascript">
     Cufon.replace('#ourClients h4'); 
</script>

<style type="text/css">
/*marca menu pp pagina seleccionada*/
#li_clientes a {
	background: none repeat scroll 0 0 #f0f0f0;
	color: #000000;
	opacity: 1;
}
</style>
</head>
<body>
	<div id="wrap">
	<?php include_once("../partes/header.php"); ?>
    <div class="contenedor">
			<div id="ourClients">
				<div class="box">
					<div class="foto wrapImg">
						<img alt="imagen de relleno"
							src="../images/clientes/logos-clientes/1.-lg_banco-santander.jpg"
							width="200" height="100" />
					</div>
					<div class="texto">
						<h4>Banco Santander</h4>
						<div class="descripcion">
							<p>Venenatis justo metus porta</p>
						</div>
					</div>
				</div>
				<div class="box">
					<div class="foto wrapImg">
						<img alt="imagen de relleno"
							src="../images/clientes/logos-clientes/2.-lg_bci.jpg" width="200"
							height="100" />
					</div>
					<div class="texto">
						<h4>Banco BCI</h4>
						<div class="descripcion">
							<p>Venenatis justo metus porta</p>
						</div>
					</div>
				</div>
				<div class="box">
					<div class="foto wrapImg">
						<img alt="imagen de relleno"
							src="../images/clientes/logos-clientes/3.-lg_banco-chile.jpg"
							width="200" height="100" />
					</div>
					<div class="texto">
						<h4>Banco Chile</h4>
						<div class="descripcion">
							<p>Venenatis justo metus porta</p>
						</div>
					</div>
				</div>
				<div class="box">
					<div class="foto wrapImg">
						<img alt="imagen de relleno"
							src="../images/clientes/logos-clientes/4.-lg_casaideas.jpg"
							width="200" height="100" />
					</div>
					<div class="texto">
						<h4>Casa Ideas</h4>
						<div class="descripcion">
							<p>Venenatis justo metus porta</p>
						</div>
					</div>
				</div>
				<div class="box">
					<div class="foto wrapImg">
						<img alt="imagen de relleno"
							src="../images/clientes/logos-clientes/5.-lg_macal-remates.jpg"
							width="200" height="100" />
					</div>
					<div class="texto">
						<h4>Macal Remates</h4>
						<div class="descripcion">
							<p>Venenatis justo metus porta</p>
						</div>
					</div>
				</div>
				<div class="box">
					<div class="foto wrapImg">
						<img alt="imagen de relleno"
							src="../images/clientes/logos-clientes/6.-lg_tattersall-remates.jpg"
							width="200" height="100" />
					</div>
					<div class="texto">
						<h4>Tattersall Remates</h4>
						<div class="descripcion">
							<p>Venenatis justo metus porta</p>
						</div>
					</div>
				</div>
				<div class="box">
					<div class="foto wrapImg">
						<img alt="imagen de relleno"
							src="../images/clientes/logos-clientes/7.-lg_nazco-remates.jpg"
							width="200" height="100" />
					</div>
					<div class="texto">
						<h4>Nazco Remates</h4>
						<div class="descripcion">
							<p>Venenatis justo metus porta</p>
						</div>
					</div>
				</div>
				<div class="box">
					<div class="foto wrapImg">
						<img alt="imagen de relleno"
							src="../images/clientes/logos-clientes/8.-lg_cgr-remates.jpg"
							width="200" height="100" />
					</div>
					<div class="texto">
						<h4>CGR Remates</h4>
						<div class="descripcion">
							<p>Venenatis justo metus porta</p>
						</div>
					</div>
				</div>
				<div class="box">
					<div class="foto wrapImg">
						<img alt="imagen de relleno"
							src="../images/clientes/logos-clientes/9.-lg_inacap.jpg"
							width="200" height="100" />
					</div>
					<div class="texto">
						<h4>Inacap</h4>
						<div class="descripcion">
							<p>Venenatis justo metus porta</p>
						</div>
					</div>
				</div>
				<div class="box">
					<div class="foto wrapImg">
						<img alt="imagen de relleno"
							src="../images/clientes/logos-clientes/10.-lg_cocacola-embonor.jpg"
							width="200" height="100" />
					</div>
					<div class="texto">
						<h4>Coca Cola Embonor</h4>
						<div class="descripcion">
							<p>Venenatis justo metus porta</p>
						</div>
					</div>
				</div>
				<div class="box">
					<div class="foto wrapImg">
						<img alt="imagen de relleno"
							src="../images/clientes/logos-clientes/11.-lg_euroamerica_mundo-financiero.jpg"
							width="200" height="100" />
					</div>
					<div class="texto">
						<h4>EuroAmerica</h4>
						<div class="descripcion">
							<p>Venenatis justo metus porta</p>
						</div>
					</div>
				</div>
				<div class="box">
					<div class="foto wrapImg">
						<img alt="imagen de relleno"
							src="../images/clientes/logos-clientes/12.-lg_sportlife.jpg"
							width="200" height="100" />
					</div>
					<div class="texto">
						<h4>Sportlife</h4>
						<div class="descripcion">
							<p>Venenatis justo metus porta</p>
						</div>
					</div>
				</div>
				<div class="box">
					<div class="foto wrapImg">
						<img alt="imagen de relleno"
							src="../images/clientes/logos-clientes/13.-lg_masgarantia.jpg"
							width="200" height="100" />
					</div>
					<div class="texto">
						<h4>Más Garantia</h4>
						<div class="descripcion">
							<p>Venenatis justo metus porta</p>
						</div>
					</div>
				</div>
				<div class="box">
					<div class="foto wrapImg">
						<img alt="imagen de relleno"
							src="../images/clientes/logos-clientes/14.-lg_totalpack.jpg"
							width="200" height="100" />
					</div>
					<div class="texto">
						<h4>Total Pack</h4>
						<div class="descripcion">
							<p>Venenatis justo metus porta</p>
						</div>
					</div>
				</div>
				<div class="box">
					<div class="foto wrapImg">
						<img alt="imagen de relleno"
							src="../images/clientes/logos-clientes/15.-lg_isa-intervial.jpg"
							width="200" height="100" />
					</div>
					<div class="texto">
						<h4>Intervial</h4>
						<div class="descripcion">
							<p>Venenatis justo metus porta</p>
						</div>
					</div>
				</div>
				<div class="box">
					<div class="foto wrapImg">
						<img alt="imagen de relleno"
							src="../images/clientes/logos-clientes/16.-lg_soc-canal-delmaipo.jpg"
							width="200" height="100" />
					</div>
					<div class="texto">
						<h4>Canal del Maipo</h4>
						<div class="descripcion">
							<p>Venenatis justo metus porta</p>
						</div>
					</div>
				</div>
				<div class="box">
					<div class="foto wrapImg">
						<img alt="imagen de relleno"
							src="../images/clientes/logos-clientes/17.-lg_prisa.jpg"
							width="200" height="100" />
					</div>
					<div class="texto">
						<h4>Prisa</h4>
						<div class="descripcion">
							<p>Venenatis justo metus porta</p>
						</div>
					</div>
				</div>
				<div class="box">
					<div class="foto wrapImg">
						<img alt="imagen de relleno"
							src="../images/clientes/logos-clientes/18.-lg_cvc-comao.jpg"
							width="200" height="100" />
					</div>
					<div class="texto">
						<h4>CVC Comao</h4>
						<div class="descripcion">
							<p>Venenatis justo metus porta</p>
						</div>
					</div>
				</div>
				<div class="box">
					<div class="foto wrapImg">
						<img alt="imagen de relleno"
							src="../images/clientes/logos-clientes/19.-lg_crawford.jpg"
							width="200" height="100" />
					</div>
					<div class="texto">
						<h4>Crawford</h4>
						<div class="descripcion">
							<p>Venenatis justo metus porta</p>
						</div>
					</div>
				</div>
				<div class="box">
					<div class="foto wrapImg">
						<img alt="imagen de relleno"
							src="../images/clientes/logos-clientes/20.- lg_forexchile.jpg"
							width="200" height="100" />
					</div>
					<div class="texto">
						<h4>Forex Chile</h4>
						<div class="descripcion">
							<p>Venenatis justo metus porta</p>
						</div>
					</div>
				</div>
				<div class="box">
					<div class="foto wrapImg">
						<img alt="imagen de relleno"
							src="../images/clientes/logos-clientes/21.-lg_pullmanbus.jpg"
							width="200" height="100" />
					</div>
					<div class="texto">
						<h4>Pullman Bus</h4>
						<div class="descripcion">
							<p>Venenatis justo metus porta</p>
						</div>
					</div>
				</div>
				<div class="box">
					<div class="foto wrapImg">
						<img alt="imagen de relleno"
							src="../images/clientes/logos-clientes/22.-lg_bettersoft.jpg"
							width="200" height="100" />
					</div>
					<div class="texto">
						<h4>Better Soft</h4>
						<div class="descripcion">
							<p>Venenatis justo metus porta</p>
						</div>
					</div>
				</div>
				<div class="box">
					<div class="foto wrapImg">
						<img alt="imagen de relleno"
							src="../images/clientes/logos-clientes/23.-lg_hertz.jpg"
							width="200" height="100" />
					</div>
					<div class="texto">
						<h4>Hertz</h4>
						<div class="descripcion">
							<p>Venenatis justo metus porta</p>
						</div>
					</div>
				</div>
				<div class="box">
					<div class="foto wrapImg">
						<img alt="imagen de relleno"
							src="../images/clientes/logos-clientes/24.-lg_internext.jpg"
							width="200" height="100" />
					</div>
					<div class="texto">
						<h4>InterNext</h4>
						<div class="descripcion">
							<p>Venenatis justo metus porta</p>
						</div>
					</div>
				</div>

			</div>
		</div>
	<?php include_once("../partes/footer.php"); ?>     	       		
</div>
</body>
</html>
