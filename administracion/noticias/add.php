<?php 




require_once("conexion.php");




$sql="insert into empleados values(




	null,




	'".$_POST["nom"]."',




	'".$_POST["telefono"]."',




	'".$_POST["mail"]."'




	)";




mysql_query($sql);	




?>