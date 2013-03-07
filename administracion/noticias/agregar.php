<html>




<head>




<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />




<title> Formulario Agregar</title >




<script type="text/javascript">









function validar() {




	//alert("hola");




	document.form.submit();




}




</script>




</head>









<body>




<form action="add.php" method="post" name="form">




	<table>




		<tr>




			<td valign="top" align="center" width="400" colspan="2"></td>




			<h3>Agregar empleado</h3>




		</tr>




		<tr>




			<td align="right" valign="top" width="200">Nombre</td>




			<td align="right" valign="top" width="200">




				<input name="nom" type="text" /> 




			</td>




		</tr>




		<tr>




			<td align="right" valign="top" width="200">Teléfono</td>




			<td align="right" valign="top" width="200">




				<input name="telefono" type="text" /> 




			</td>




		</tr>




		<tr>




			<td align="right" valign="top" width="200">E-mail</td>




			<td align="right" valign="top" width="200">




				<input name="mail" type="text" /> 




			</td>




		</tr>	




		<tr>




			<td align="right" valign="top" width="200">




				<input type="button" value="volver" onClick="history.back();" />




			</td>




			<td align="right" valign="top" width="200">




				<input name="ingresar" type="button" onClick="validar();" value="enviar"/> 




			</td>




		</tr>			




	</table>




</form>




</body>




</html>




