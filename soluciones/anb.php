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
$pagina = "ANB";
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
		var y=$("#acordeon");
		y.accordion();
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
					<img src="../images/soluciones/plat_integral_encabezado.jpg" alt="" />
				</div>
				<div class="clearfix"></div>
				<!-- inicio pestañas			 -->
				<div id="pestanas">
					<ul>
						<!-- los li son los titulos de cada tab -->
						<li><a href="#pestana1">DESCRIPCIÓN</a></li>
						<li><a href="#pestana2">CARACTERÍSTICAS</a></li>
						<li><a href="#pestana3">MODULOS DEL SISTEMA</a></li>
						<li><a href="#pestana4">SERVICIOS INCLUIDOS</a></li>
					</ul>
					<!-- y los div tienen el contenido de cada tab -->
					<div id="pestana1">
						<p>La Plataforma ANB es un potente soporte activo, para la
							administración y venta de inmuebles adjudicados, reposeídos,
							recibidos en pago por el Banco o propios prescindibles, radicado
							en Internet, que proporciona permanentemente ágil y completa
							información, así como también controla el oportuno suministro de
							datos y cumplimiento de acciones programadas respecto de cada uno
							de los bienes, al que se puede acceder en cualquier tiempo y
							lugar.</p>
						<p>La Plataforma ANB contempla la adecuación e implementación de
							Módulos de Gestión y Control de Gestión, orientados a hacer eficiente
							el proceso administrativo relacionado con la comercialización de
							Bienes Inmuebles, abarcando el proceso desde el ingreso del bien
							a los sistemas del Banco hasta su desactivación contable. Toda la
							administración de la información es en línea y en tiempo real,
							cargada de primera fuente, registrándose el usuario, fecha y hora
							de carga, además está validada por el receptor y los ejecutivos
							de apoyo a Plataforma, lo que hace que esta sea confiable al
							momento de tomar una decisión. Por otra parte, la información es
							segura, ya que el Banco determina a quién y qué nivel de acceso
							otorgará, así como quienes pueden ingresar o consultar
							información.</p>
					</div>
					<div id="pestana2">
						<h2>Características Técnicas</h2>
						<ul id="molulos_sistema" class="caracteristicas">
							<li class="titu_item"><span>Plataforma de desarrollo .Net con SQL Server 2005</span></li>
							<li class="titu_item"><span>Modelo de Desarrollo en 4 capas</span>
								<ul>
									<li>Capa de Acceso a Datos</li>
									<li>Capa de Reglas de Negocio</li>
									<li>Capa de Fachada de Negocio</li>
									<li>Interfaz de Usuario</li>
								</ul></li>
							<li class="titu_item"><span>Ambientes de Desarrollo</span>
								<ul>
									<li>Servidor de Desarrollo</li>
									<li>Servidor de Certificación (QA interno y Certificación
										Cliente)</li>
									<li>Servidor de paso a Producción</li>
									<li>Servidor de Producción</li>
								</ul></li>
						</ul>
					</div>
					<div id="pestana3">
						<div id="acordeon">
							<h3>
								<a href="#">Módulo de Ingreso de Propiedades</a>
							</h3>
							<div>
								<p>Módulo en que el abogado a cargo del juicio de cobranza
									ingresa la propiedad al sistema, informando que se ha fijado
									fecha de remate y los datos de este.</p>
							</div>
							<h3>
								<a href="#">Módulo de Ingreso Manual de Propiedades</a>
							</h3>
							<div>
								<p>Módulo en el que se ingresan manualmente los bienes que no
									provienen del módulo de remate judicial, diferenciando la carga
									en propiedades y bienes muebles.</p>
							</div>
							<h3>
								<a href="#">Módulo de Comité de Precio Remate Judicial</a>
							</h3>
							<div>
								<p>Ingresada la propiedad al sistema, llega aviso al encargado
									de preparar el comité de remate judicial, en que el Banco
									tomará la decisión de cómo participar, fijando la estrategia de
									precios de acuerdo a los distintos escenarios que se puedan
									presentar, en caso que hayan postores o no.</p>
							</div>
							<h3>
								<a href="#">Contribuciones</a>
							</h3>
							<div>
								<p>Módulo para la administración de pagos por concepto de
									contribuciones.</p>
							</div>
							<h3>
								<a href="#">Módulo de Adjudicación de la Propiedad</a>
							</h3>
							<div>
								<p>Pasado el remate judicial, el abogado a cargo del juicio
									carga el resultado en Plataforma, el que de ser “Adjudicada por
									el Banco”, sale automáticamente un aviso a los encargados que
									se definan, los que cargan la información necesaria para que la
									propiedad se empiece a administrar, chequeando su estado de
									ocupación, fijando precios de venta, asignando corredores de
									propiedades, actualizando la tasación, fotos, etc.</p>
							</div>
							<h3>
								<a href="#">Juicios por Desalojo</a>
							</h3>
							<div>
								<p>Administración de juicios por desalojo de cada bien.</p>
							</div>
							<h3>
								<a href="#">Módulo de Ficha Interna Propiedad</a>
							</h3>
							<div>
								<p>Ficha de trabajo en que los usuarios Banco acceden a toda la
									información que se tenga de la propiedad en Plataforma, como
									fotografías, mapa de ubicación, planos de planta, tasaciones,
									precio de publicación, gastos, corredor a cargo, administrador,
									etc.</p>
							</div>
							<h3>
								<a href="#">Módulo de Seguimiento Juicios</a>
							</h3>
							<div>
								<p>En caso de que la propiedad adjudicada se encuentre ocupada
									se asigna un abogado que gestione el juicio de desalojo, el que
									vía sistema será informado, e informará los avances que tenga
									el juicio hasta que sea desalojada la propiedad, o
									eventualmente sea vendida.</p>
							</div>
							<h3>
								<a href="#">Módulo de Gastos</a>
							</h3>
							<div>
								<p>Módulo en que los corredores, administradores, o quien el
									Banco determine, cargue los gastos directos e indirectos de las
									propiedades administradas, permitiendo llevar un control en
									línea por ítem de gasto, de la situación de cada una o del
									conjunto de ellas.</p>
							</div>
							<h3>
								<a href="#">Módulo Fondos por Rendir</a>
							</h3>
							<div>
								<p>Módulo en que se asigna a los corredores, administradores, o
									quien el Banco determine, un fondo a rendir para solventar los
									gastos de las propiedades, el que es rendido a través del mismo
									módulo.</p>
							</div>
							<h3>
								<a href="#">Módulo de Publicaciones</a>
							</h3>
							<div>
								<p>Módulo en que se administra y lleva el control de las
									publicaciones de las propiedades en los medios, conectándose 
									directamente a través de la Plataforma con la agencia de
									publicidad que tenga el Banco para dicha tarea, la que carga
									los avisos y gastos incurridos en los avisos.</p>
							</div>
							<h3>
								<a href="#">Módulo de Licitaciones</a>
							</h3>
							<div>
								<p>Módulo en que se agrupan las propiedades enviadas a
									licitación, fijando el "Mínimo Publicado" y el "Monto
									Adjudicación". Una vez aprobado, pasan las adjudicaciones al
									comité de ofertas para su validación y posterior post venta.</p>
							</div>
							<h3>
								<a href="#">Módulo de Comité de Ofertas</a>
							</h3>
							<div>
								<p>Módulo en que se centralizan todas las ofertas de
									propiedades, en que de acuerdo a niveles de firma se aceptan o
									rechazan.</p>
							</div>
							<h3>
								<a href="#">Módulo de Seguimiento Post-venta</a>
							</h3>
							<div>
								<p>Una vez aceptada una oferta, se emiten en el sistema una
									serie de tareas concatenadas entre si sujetas a plazo, las que
									son avisadas a cada responsable de realizarla, yendo desde la
									recopilación de antecedentes para escriturar, hasta la
									desactivación contable del bien.</p>
							</div>
							<h3>
								<a href="#">Módulo de Bitácoras</a>
							</h3>
							<div>
								<p>Módulo de comunicación del sistema, en que cada usuario
									ingresa información a las propiedades, las que quedan
									registradas históricamente en cada propiedad. Existen bitácoras
									manuales, que son ingresadas por los usuarios, y bitácoras
									automáticas, que son registradas de acuerdo a procesos que
									suceden en el sistema, como cambios de precios, publicaciones,
									aceptación de ofertas, etc.</p>
							</div>
							<h3>
								<a href="#">Módulo de Tasaciones</a>
							</h3>
							<div>
								<p>Módulo en que se solicitan nuevas tasaciones al área de
									tasaciones del Banco, o directamente al tasador, para que
									independiente de quien, se cargue digitalmente, y así quede en
									la ficha de consulta interna de cada propiedad.</p>
							</div>
							<h3>
								<a href="#">Módulo de Página Web</a>
							</h3>
							<div>
								<p>Vitrina pública de promoción de las propiedades disponibles
									para la venta, que se arma automáticamente con la información
									que se defina del sistema.</p>
							</div>
							<h3>
								<a href="#">Módulo de Home según perfil</a>
							</h3>
							<div>
								<p>Cada usuario, de acuerdo al perfil que tenga, tendrá una
									página de inicio en Plataforma, con informes predefinidos para
									su gestión.</p>
							</div>
							<h3>
								<a href="#">Documentos</a>
							</h3>
							<div>
								<p>Generación de documentos relacionados a la gestión de cada
									bien (seriedad de oferta, acta de recepción, carta para
									ocupante, retasaciones, etc.)</p>
							</div>
							<h3>
								<a href="#">Módulo de Informes</a>
							</h3>
							<div>
								<p>Independiente de los informes que se tengan en la HOME de
									cada usuario, Plataforma entrega informes predefinidos de
									ventas, situación de la cartera por antigüedad, ubicación,
									tipos de propiedades, gastos por concepto, y todos los que se
									requieran para la gestión.</p>
							</div>
						</div>
					</div>
					<div id="pestana4">
						<h3>Mesa de Ayuda</h3>
						<ul class="caracteristicas">
							<li>Servicio de atención telefónica de nuestro Help Desk durante
								todos los días hábiles del año en horario de 9:00 a 18:00 hrs.
								(viernes hasta las 17:00 hrs.).</li>
							<li>Servicio de atención vía correo electrónico para los mismos
								días y horarios señalados en el punto anterior.</li>
							<li>Personal idóneo para capacitar, responder y apoyar
								directamente todas las consultas de los usuarios, ya sean,
								internos o externos.</li>
							<li>Resolución en línea de problemas o dudas en el uso y manejo
								del sistema.</li>
							<li>Desbloqueo de usuarios en línea.</li>
							<li>Captación de las inquietudes o nuevas necesidades por parte
								de los distintos usuarios, de modo de traspasar esto al cliente
								en las reuniones de coordinación y así evaluar juntos futuros
								desarrollos que mejoren el funcionamiento del sistema.</li>
						</ul>
						<h3>Capacitación de Usuarios</h3>
						<ul class="caracteristicas">
							<li>De acuerdo a lo señalado en la primera parte de este
								documento, se realizarán reuniones previas a la salida a
								Producción para la capacitación grupal a los distintos usuarios,
								tanto internos como externos.</li>
							<li>También se consideran capacitaciones posteriores a la salida
								a Producción para los usuarios que se integren con posterioridad
								al sistema.</li>
							<li>Capacitaciones extraordinarias en la medida que se integren
								nuevos abogados al sistema.</li>
							<li>Existe la posibilidad de realizar capacitaciones fuera de
								Santiago, previo acuerdo entre las partes del pago de los gastos
								que esto involucre.</li>
						</ul>
						<h3>Confección de Reportes</h3>
						<ul class="caracteristicas">
							<li>Generación de informes o reportes a solicitud del cliente, en
								la medida que estos no estén contemplados en el sistema. Para
								esto contamos con plazos definidos de entrega y dependerá si se
								trata de reportes ya solicitados con anterioridad, o son nuevos
								requerimientos.</li>
							<li>Envío periódico de reportes relacionados al uso del sistema
								por parte de los usuarios internos y/o externos.</li>
						</ul>
						<h3>Mantenciones y Actualizaciones</h3>
						<ul class="caracteristicas">
							<li>Se incluye el ingreso al sistema, en todo momento, de nuevas
								gestiones o datos asociadas a los tipos de bienes o modificación
								en las características de estos.</li>
							<li>Actualización o creación de usuarios internos y externos que
								operan a lo largo de Chile.</li>
							<li>Toda solicitud de nuevo desarrollo será cotizada sin costo
								para el cliente.</li>
							<li>Soporte y Mantención de las Aplicaciones y la Data existente.
							</li>
							<li>Evaluación y Gestión de Evolutivos (Permanente up-grade del
								sistema).</li>
						</ul>
						<h3>Reuniones de Trabajo y Coordinación</h3>
						<ul class="caracteristicas">
							<li>De acuerdo a lo señalado en la primera parte de este
								documento, se contemplan reuniones de trabajo para evaluar y
								analizar todo lo relacionado al levantamiento y adecuación del
								sistema.</li>
							<li>Una vez que se salga a Producción, se contemplan reuniones
								semanales de coordinación por un periodo a definir entre las
								partes.</li>
							<li>Una vez comenzada la tercera etapa, la cual se definirá entre
								las partes, se comienza con las reuniones quincenales de
								coordinación.</li>
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