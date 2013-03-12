<?php
require_once ("conexion.php");

$sql = "DELETE FROM `empleados` WHERE `id_empleado` = " . $_GET ["id_empleado"] . "";

mysql_query ( $sql );

?>