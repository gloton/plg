<?php
$con = mysql_connect ( 'localhost', 'jorgew7_bdbrud1ppppppppp', 'prueba123' );
$bd = mysql_select_db ( "jorgew7_bdbrud1" );
/*
 * tamnien puede funcionar asi
 *
if (mysql_select_db('bdcrud1',$con)) {
	print "conexion realizada exitosamente";
} else {
	print ("no se ha podido conectar a la base de datos");
}
*/