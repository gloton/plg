<?php 




require_once("conexion.php");




/* no me funciono




$sql="update empleados set (




	nombre = '".$_POST["nom"]."',




	telefono = '".$_POST["telefono"]."',




	correo = '".$_POST["mail"]."'




	) where id_empleado=".$_POST["id_empleado"]."";




*/	




$sql ="UPDATE `empleados` SET `nombre` = '".$_POST["nom"]."', `telefono` = '".$_POST["telefono"]."', `correo` =  '".$_POST["mail"]."' WHERE `empleados`.`id_empleado` =".$_POST["id_empleado"].";";




mysql_query($sql);	




?>