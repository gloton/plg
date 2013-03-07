<html>




<head>




<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />




<title> Formulario Modificar</title >




<?php 




require_once("conexion.php");




$sql = "Select * from empleados where id_empleado='".$_GET["id_empleado"]."'";




$resultado = mysql_query($sql, $con);




?>




<script type="text/javascript">









function validar() {




	//alert("hola");




	document.form.submit();




}




</script>




</head>









<body>




<h1>Esta es mi tabla</h1>




<?php 




if ($fila = mysql_fetch_array($resultado)) {




?>




<form action="edit.php" method="post" name="form">




	<table>




		<tr>




			<td valign="top" align="center" width="400" colspan="2"></td>




			<h3>Modificar empleado</h3>




		</tr>




		<tr>




			<td align="right" valign="top" width="200">Nombre</td>




			<td align="right" valign="top" width="200">




				<input name="nom" type="text" value="<?php echo $fila["nombre"];?>" /> 




			</td>




		</tr>




		<tr>




			<td align="right" valign="top" width="200">Teléfono</td>




			<td align="right" valign="top" width="200">




				<input name="telefono" type="text" value="<?php echo $fila["telefono"];?>" /> 




			</td>




		</tr>




		<tr>




			<td align="right" valign="top" width="200">E-mail</td>




			<td align="right" valign="top" width="200">




				<input name="mail" type="text" value="<?php echo $fila["correo"];?>" /> 




			</td>




		</tr>	




		<tr>




			<td align="right" valign="top" width="200">




            	<input type="hidden" name="id_empleado" value="<?php echo  $_GET["id_empleado"]; ?>" />




				<input type="button" value="volver" onClick="history.back();" />




			</td>




			<td align="right" valign="top" width="200">




				<input name="ingresar" type="button" onClick="validar();" value="Modificar"/> 




			</td>




		</tr>			




	</table>




</form>




<?php 




}




?>




</body>




</html>




