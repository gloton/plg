<?php
require '../../lib/constantes.php';

require '../../lib/general.php';

require '../../lib/administracion.class.php';

?>




<html lang="es">




<head>




<meta charset="utf-8">




<title>Estructura Basica</title>




<script type="text/javascript">




	function eliminar(id) {




		if (confirm("realmente desea eliminar el registro ")) {




			window.location="eliminar.php?id_empleado="+id;




		}









	}




</script>




</head>




<body>




<?php

$objAdministracion = new administracion ();

$noticias = $objAdministracion->getPost ();

?>




<table width="950" border="1" cellspacing="0" cellpadding="0">




		<tr>




			<th scope="col">Titulo</th>




			<th scope="col">Categoria</th>




			<th scope="col">Fecha</th>




			<th scope="col">ID</th>




			<th scope="col">Editar</th>




			<th scope="col">Eliminar</th>




		</tr>




<?php

// var_dump($noticias);

foreach ( $noticias as $nroFila => $contenido ) {
	
	/*
	 * echo "<br />"; echo $contenido["titulo"];
	 */
	
	if ($paridad == 0) {
		
		$paridad = 1;
	} else {
		
		$paridad = 0;
	}
	
	?>









  <tr class="row<?=$paridad;?>">




			<td><?=$contenido["titulo"];?></td>




			<td><?=$contenido["categoria"];?></td>




			<td><?=$contenido["fecha"];?></td>




			<td><?=$contenido["id_noticia"];?></td>




			<td>elm</td>




			<td>edit</td>




		</tr>









<?php
}

?>




</table>




</body>




</html>




