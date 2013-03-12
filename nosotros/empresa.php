<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<?php
include_once ("../lib/constantes.php");
include_once ("../lib/general.php");
$selected = "NOSOTROS";
$pagina = "EMPRESA "?>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title><?=$pagina?> <?=NOMBRE_EMPRESA ?></title>
<link type="text/css" rel="stylesheet" href="../css/styles.css" />
<link type="text/css" rel="stylesheet" href="../css/nosotros.css" />
<script
	src="https://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js"></script>
<script language="javascript" src="../js/jquery.js"></script>
<style type="text/css">
#btnEmp {
	background: url("../images/nosotros/btn-more.gif") no-repeat scroll 30px
		15px transparent;
	color: green;
	font-size: 12px;
	font-weight: bold;
	height: 70px;
	padding: 19px 0 0 72px;
	width: 100%;
}

#btnEmp a {
	color: #F15D22;
}
</style>
<style type="text/css">
/*marca menu pp pagina seleccionada*/
#li_nosotros a {
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
    	<?php include_once("../partes/breadcrumbs.php");?>
		<div class="two_column">
				<div class="left_col">
					<p>
						<span>Soluciones de vanguardia con tecnologías de punta</span>
					</p>
					<h3>Historia</h3>
					<p>
						Plataforma Group es una empresa Chilena que tuvo sus comienzos a
						principios del año 2003 como la Gerencia de informática de la
						empresa Macal Remates, para posteriormente transformarse en una
						empresa independiente de Macal el año 2010 pasando a llamarse <strong>Plataforma
							Group</strong>. La empresa actualmente desarrolla, fabrica,
						licencia y produce software a medida, dando en una de sus líneas
						de negocio servicios asociados al negocio del cliente, por
						ejemplo, en las Cobranzas Judiciales en empresas del tipo
						financieras y en los remates para las distintas casas de remates
						del país, entre otros.
					</p>
					<p>Tenemos los conocimientos y experiencia que nos permiten prestar
						servicios de calidad estandarizada y homogénea, según las mejores
						prácticas de la industria TI, tenemos certificados recientemente
						nuestros procesos de desarrollo y comercialización en la norma de
						gestión de calidad de ISO9001:2008. Hemos desarrollado diversos
						sistemas en el área de la banca, remates, retail, entre otras, con
						soluciones implantadas y resultados visibles y cuantificables.</p>
					<h2>Bienvenido a Plataforma Group</h2>
					<div id="empSoluciones">
						<div id="fotoSoluciones">
							<img src="../images/soluciones/office.png" alt="" />
						</div>
						<div id="descSoluciones">
							<p>Cada una de nuestras soluciones está respaldada por un
								completo equipo de ejecutivos asesores los cuales solucionarán
								dudas y resolverán los problemas que pudieran presentarse. Nos
								preocupa de forma especial que los esfuerzos de su negocio se
								queden en su negocio. ¡Nosotros nos encargamos del resto!
								Tenemos más de 8 años de experiencia desarrollando soluciones de
								vanguardia con las tecnologías de punta en diversos ámbitos de
								negocios, en cada proyecto ponemos a disposición de nuestros
								clientes toda nuestra experticia al servicio de su necesidad.</p>
						</div>
					</div>
					<div id="boxEmpresa" class="sc-iconbox">
						<div id="misionImg">
							<img width="190" height="130"
								src="../images/soluciones/icon-peoples.jpg"
								alt="Mision y Vision" title="Mision y Vision">
						
						</div>
						<div id="misionDesc">
							<ul id="lstMisionDesc">
								<li>
									<h4 style="color: #3BA1C5;">Misión</h4>
									<p>Mediante el uso de tecnologías de la información, ofrecer
										soluciones y servicios innovadores que apoyen, potencien y
										rentabilicen al máximo cada una de las áreas de negocio de
										nuestros clientes.</p>
									<h4 style="color: #3BA1C5;">Visión</h4>
									<p>Expandir nuestras áreas de negocio, transformándonos en
										líderes de la industria con el fin de ofrecer soluciones más
										completas e integrales a nuestros clientes.</p>
								</li>
								<li></li>
							</ul>
						</div>
					</div>
				</div>
				<div class="right_col">
					<h3>Quienes Somos</h3>
					<p>Somos una empresa especializada en la resolución de problemas
						aplicando tecnologías de la información. Poseemos una amplia
						experiencia en diversos ámbitos de negocios y ponemos especial
						énfasis en respaldar nuestras soluciones mediante un grupo de
						profesionales de distintas áreas a fin de ser un aliado
						estratégico de nuestros clientes a la hora de dar el enorme salto
						de implementar tecnología en su negocio.</p>
					<h3 style="margin-top: 42px;">Busca Soluciones?</h3>
					<ul id="buscaSoluciones" class="caracteristicas">
						<li>Gestión de Empresas</li>
						<li>Apoyo Tecnológico</li>
						<li>Desarrollo de Sistemas</li>
						<li>Evolución de sus Negocios</li>
					</ul>
				</div>
				<div class="clearfix"></div>
			</div>
		</div>
		<div class="clearfix"></div>
    <?php include_once("../partes/footer.php"); ?>
</div>
</body>
</html>
