<?php





/*





Formulario De Contacto











Prop�sito:





- Un formulario de contacto con el administrador de la web.











Configuraci�n b�sica:





- En $email_admin poner el mail del administrador de la web.





- Salvar con el nombre deseado con extensi�n .php.





- Subir el archivo al servidor.











Configuraci�n avanzada:





- En //MENSAJES se puede variar todos los mensajes que puedan aparecer, tanto de error como de agradecimiento.





- Se puede limitar el tama�o de los campos, tanto el tama�o de la caja como el tama�o m�nimo y m�ximo de los campos.





- Si se desea incorporar el formulario a un dise�o ya hecho, al final se tiene que modificar las funciones html y sobre la l�nea 350 esta echo $salida; donde esta todo el c�digo html.











Caracter�sticas:





- Bastante configurable.





- Bastante documentado.





- Env�a informaci�n de la IP y hora de envio.





- Funciona con register_globals en off.





- El xhtml generado es v�lido xhtml 1.1.





- El script puede tener cualquier nombre, siempre acabado.php.





- Los mails se env�an en formato de texto plano.











Requisitos:





- Servidor con soporte PHP. Recomendado versi�n 4.3 o superior





- Servicio de mail activo.





- Ser humano o compatible.











Licencia:





- Moralmente esta obligado a mantenerme como autor del script y a comunicarme cualquier sugerencia





 para mejorarlo o fallos que pudiera haber.





- Adem�s es GPL (�no?) y opcionalmente "beerware"





- Y estar�a bien que me dijeran que les parece y donde lo usa.











Control de cambios:





+ Versi�n 0.3





- opci�n para enviar un acuse de recibo, sugerencia de Kuo Llon.











+ Versi�n 0.2.1





- bug cuando se env�a mensaje con adjunto, gracias a Silvia











+ Versi�n 0.2





- control del uso del lenguaje





- control del uso de las may�sculas





- mas mejoras en la incorporaci�n a otro html











+ Versi�n 0.1.1





- mejoras en la incorporaci�n a otro html





- a�adido copyright final











+ Versi�n 0.1.0





- a�adido opci�n de env�o de adjuntos.











+ Versi�n 0.0.7





 - peque�os cambios en la documentaci�n.











+ Versi�n 0.0.6





 - m�s mensajes personalizables, en la informaci�n del mail.











+ Versi�n 0.0.5





 - m�s documentaci�n.





 - cambios en el debug.











+ Versi�n 0.0.4





 - peque�o cambio de empty, de nuevo.





 - internalizaci�n del c�digo.





 - mejoras en email_valido, por Aeoris.





 - me olvide de cerrar el PHP XD.











+ Versi�n 0.0.3





 - arreglada unas comillas en la funci�n de comprobaci�n de mail.





 - m�s mensajes personalizables.





 - a�adidos empty en varios sitios, optimizaci�n por OmaR.





 - mejorado funci�n de mail v�lido, optimizaci�n por OmaR.





 - a�adido en la hora de env�o la zona horaria.











+ Versi�n 0.0.2





 - m�s documentaci�n.





 - control total de tama�os m�ximo y m�nimo de los campos.





 - cambiado REQUEST por POST, para evitar que hagan uso de GET.





 - arreglado peque�o bug en "if (isset($_POST['form_enviar']))".











+ Versi�n 0.0.1





 - versi�n inicial.











Script creado por: www.NoSetup.org <admin@NoSetup.org>











*/











// CONFIGURACI�N B�SICA





$email_admin='***@***.***';			// Mail del administrador























// ENVIO DE ADJUNTO





// Con TRUE se posibilita la opci�n de enviar un fichero adjunto





// Con FALSE no se puede enviar un fichero adjunto





$adjunto_enviar=TRUE;











// MENSAJES





// T�tulo del formulario





$titulo_web='Formulario de contacto';











// T�tulos campos comentario





$titulo_nombre='Introduzca su nombre.';





$titulo_email='Introduzca su email.';





$titulo_asunto='Introduzca el asunto de su mensaje.';





$titulo_mensaje='Introduzca su mensaje.';





$titulo_adjunto='Fichero adjunto: (opcional) ';











// Configuraci�n de tama�os de la caja de los campos





$nombre_size=40;			// Tama�o de la caja del campo nombre





$email_size=40;				// Tama�o de la caja del campo email





$asunto_size=50;			// Tama�o de la caja del campo asunto





$mensaje_cols=40;			// N�mero de columnas en el textarea de mensaje





$mensaje_rows=6;			// N�mero de filas en el textarea de mensaje





$archivo_size=40;			// Tama�o de la caja de archivo











// Configuraci�n de valores m�nimos y m�ximo para los campos





$nombre_min=5;				// Tama�o m�nimo del campo nombre





$nombre_max=50;				// Tama�o m�ximo del campo nombre





$email_min=10;				// Tama�o m�nimo del campo email





$email_max=50;				// Tama�o m�ximo del campo email





$asunto_min=5;				// Tama�o m�nimo del campo asunto





$asunto_max=100;			// Tama�o m�ximo del campo asunto





$mensaje_min=10;			// Tama�o m�nimo del campo mensaje





$mensaje_max=1000;			// Tama�o m�ximo del campo mensaje





$adjunto_max=100;			// Tama�o m�ximo del archivo adjunto, en kilobytes











// MENSAJES





// Mensaje inicial





$mensaje_principal='<p>Rellene este formulario para enviar un mail al administrador. Gracias</p>';











// Mensajes si se deja alg�n campo vacio





$mensaje_nombre_vacio='<li>No ha puesto ningun nombre.</li>';





$mensaje_email_vacio='<li>No ha puesto ningun email.</li>';





$mensaje_asunto_vacio='<li>No ha puesto ningun asunto.</li>';





$mensaje_mensaje_vacio='<li>No ha puesto ningun mensaje.</li>';











// Mensaje mail no v�lido, por estructura o porque no exista ese dominio





$mensaje_mail_no_valido='<li>Ha puesto un mail no v�lido.</li>';











// Campos muy peque�os





$mensaje_nombre_min='<li>El nombre es muy peque�o.</li>';





$mensaje_email_min='<li>El email es muy peque�o.</li>';





$mensaje_asunto_min='<li>El asunto es muy peque�o.</li>';





$mensaje_mensaje_min='<li>El mensaje es muy peque�o.</li>';











// Campos muy grandes





$mensaje_nombre_max='<li>El nombre es muy grande.</li>';





$mensaje_email_max='<li>El email es muy grande.</li>';





$mensaje_asunto_max='<li>El asunto es muy grande.</li>';





$mensaje_mensaje_max='<li>El mensaje es muy grande.</li>';





$mensaje_adjunto_max='<li>Ha superado el l�mite del tama�o m�ximo del archivo, que esta limitado a '.$adjunto_max.' kilobytes (kB).</li>';











// Evitar abuso de may�sculas





$porcentaje_may_aceptadas=25;			// Porcentaje de may�sculas aceptadas





$mensaje_muchas_may='<li>Por favor, no grite.</li>';











// Evitar el uso de determinadas palabras





$censura_lista=array('puta','puto','mierda','imb�cil','cabr�n');





$mensaje_censura='<li>No es necesario usar ese lenguaje.</li>';











// Inicio del mensaje de error





$mensaje_error_inicial='<p>Ha cometido alg�n error. Aqu� tiene la lista.</p><ul>';











// Final del mensaje de error





$mensaje_error_final='</ul><p>Revise estos campos. Gracias.</p>';











// Envio de mail satisfactorio





$mensaje_mail_enviado='<p>El email se ha enviado con �xito. Gracias.</p>';











// Envio de mail fallido





$mensaje_mail_fallido='<p>Error enviando el mail. Probablemente por causas t�cnicas del servidor.</p>';











// ENVIO DE MAIL ACUSE DE RECIBO





// Con TRUE se habilita esta opci�n





// Con FALSE no se env�a esta opci�n





$acuse_activo=TRUE;





// Mensajes para acuso de recibo





$acuse_mail_asunto='Acuse de recibo';





$acuse_mail_cuerpo="Gracias por contactar con nosotros.\nEn breve, nos pondremos en contacto con usted.";





$acuse_mail_enviado='<p>El email se ha enviado con �xito. Adem�s se ha enviado un acuse de recibo. Gracias.</p>';





$acuse_mail_fallido='<p>El email se ha enviado con �xito. Pero no se ha podido enviar un acuse de recibo, quiz�s puso mal su correo electr�nico.</p>';











// Idioma en el que se enviara la hora de env�o





$idioma='es_ES';











// Texto al final del mail con los datos del usuario y la hora de env�o





$enviado_por='Enviado por: ';





$enviado_el='Enviado el: ';











// �Mostrar informaci�n de debug? 





// TRUE muestra todos los posibles errores de c�digo que pudiera haber. Esto podr�a ser peligroso cuando la aplicaci�n este funcionado.





// FALSE para que la no la muestre estos errores 





$debug=TRUE;











/* Integraci�n con otros dise�os. Necesarios conocimientos b�sicos de php y dise�o web





El objetivo es poner el script como una p�gina sola, para ello se debe poner FALSE,





o bien poner el script dentro de otra p�gina, para ello en la otra p�gina se debera poner TRUE y





despu�s incluir el script y llamar a la funci�n.





include('contacto.php');			// Incluir el script





echo contacto();				// Sacar salida





*/





$html_incrustrado=FALSE;			// En caso de duda, no tocar.























// NO TOCAR, NO TOCAR, NO TOCAR, NO TOCAR, NO TOCAR, NO TOCAR, NO TOCAR





// NO TOCAR, NO TOCAR, NO TOCAR, NO TOCAR, NO TOCAR, NO TOCAR, NO TOCAR





// NO TOCAR, NO TOCAR, NO TOCAR, NO TOCAR, NO TOCAR, NO TOCAR, NO TOCAR





// NO TOCAR, NO TOCAR, NO TOCAR, NO TOCAR, NO TOCAR, NO TOCAR, NO TOCAR





// NO TOCAR, NO TOCAR, NO TOCAR, NO TOCAR, NO TOCAR, NO TOCAR, NO TOCAR





// NO TOCAR, NO TOCAR, NO TOCAR, NO TOCAR, NO TOCAR, NO TOCAR, NO TOCAR





// NO TOCAR, NO TOCAR, NO TOCAR, NO TOCAR, NO TOCAR, NO TOCAR, NO TOCAR





// NO TOCAR, NO TOCAR, NO TOCAR, NO TOCAR, NO TOCAR, NO TOCAR, NO TOCAR





// NO TOCAR, NO TOCAR, NO TOCAR, NO TOCAR, NO TOCAR, NO TOCAR, NO TOCAR











if($debug=='TRUE')





	error_reporting(E_ALL);			// Mostrar todos los errores, incluido los "notice"











// Final del script, imprime el html





$salida=contacto();				// Llamo al script





if($html_incrustrado==FALSE)





	echo html($salida);			// Final del script











// Funci�n principal





function contacto()





{





	// Varias globales definidas al inicio





	global $email_admin,$adjunto_enviar,$titulo_web;





	global $titulo_nombre,$titulo_email,$titulo_asunto,$titulo_mensaje,$titulo_adjunto;





	global $nombre_size,$asunto_size,$mensaje_cols,$mensaje_rows,$archivo_size;





	global $nombre_min,$nombre_max,$email_min,$email_max,$asunto_min,$asunto_max,$mensaje_min,$mensaje_max,$adjunto_max;





	global $mensaje_principal,$mensaje_nombre_vacio,$mensaje_email_vacio,$mensaje_asunto_vacio,$mensaje_mensaje_vacio;





	global $mensaje_mail_no_valido;





	global $mensaje_nombre_min,$mensaje_email_min,$mensaje_asunto_min,$mensaje_mensaje_min;





	global $mensaje_nombre_max,$mensaje_email_max,$mensaje_asunto_max,$mensaje_mensaje_max,$mensaje_adjunto_max;





	global $porcentaje_may_aceptadas,$mensaje_muchas_may,$censura_lista,$mensaje_censura;





	global $mensaje_error_inicial,$mensaje_error_final;





	global $mensaje_mail_enviado,$mensaje_mail_fallido;





	global $idioma,$enviado_el,$debug;





	global $enviado_por,$enviado_el;





	global $acuse_activo,$acuse_mail_asunto,$acuse_mail_cuerpo,$acuse_mail_enviado;











	// Compruebo que ha enviado el formulario. Para mayor seguridad comprueba que todo los campos esten definidos.





	if ( isset($_POST['form_enviar']) && isset($_POST['form_email']) && isset($_POST['form_asunto']) && isset($_POST['form_mensaje']) )





	{





		/*





			Inicio de mensajes de error.





		Hay que tener en cuenta que no sabemos donde puede fallar y queremos ir acumulando los errores que





		vayan surgiendo para mostraserlos todos juntos al usuario.





		Por ello, siempre tendremos que usar el operador "." seguido de "=" para unir los mismos.





		Si no inicializamos esta variable la primera vez que se usara nos podr�a dar un "notice" indicando el error.





		*/





		$mensaje_error='';











		// Eliminar marcas extra�as





		$form_nombre=limpiar($_POST['form_nombre']);





		$form_email=limpiar($_POST['form_email']);





		$form_asunto=limpiar($_POST['form_asunto']);





		$form_mensaje=limpiar($_POST['form_mensaje']);











		// Comprobar campos vacios





		if(!isset($form_nombre))				// Comprobar que ha puesto nombre





			$mensaje_error.=$mensaje_nombre_vacio;





		if(!isset($form_email))					// Comprobar que ha puesto mail





			$mensaje_error.=$mensaje_email_vacio;





		if(!isset($form_asunto))				// Comprobar que ha puesto asunto





			$mensaje_error.=$mensaje_asunto_vacio;





		if(!isset($form_mensaje))				// Comprobar que ha puesto mensaje





			$mensaje_error.=$mensaje_mensaje_vacio;











		// Comprobar mail v�lido





		if(!email_valido($form_email))





			$mensaje_error.=$mensaje_mail_no_valido;











		/*





			Tama�os de los campos.





		C�mo se va a usar un par de veces, se busca acelerar el script y cargar menos el servidor no





		repitiendo strlen las dos veces.





		*/





		$form_nombre_len=strlen($form_nombre);			// Tama�o del campo nombre





		$form_email_len=strlen($form_email);			// Tama�o del campo nombre





		$form_asunto_len=strlen($form_asunto);			// Tama�o del campo nombre





		$form_mensaje_len=strlen($form_mensaje);		// Tama�o del campo nombre











		/*





			Comprobar tama�os m�nimos.





		Podr�a pasar que $form_nombre_len fuese 0 pues no estuviese vacio, pero ese error ya lo hemos indicado





		arriba, por eso a�adimos un && (operador l�gico AND, Y) !empty($form_nombre)





		*/





		// Comprobar tama�o m�nimo de nombre





		if( ($form_nombre_len<=$nombre_min) && (!empty($form_nombre)) )





			$mensaje_error.=$mensaje_nombre_min;





		// Comprobar tama�o m�nimo de email





		if( ($form_email_len<=$email_min)  && (!empty($form_email)) )





			$mensaje_error.=$mensaje_email_min;





		// Comprobar tama�o m�nimo de asunto





		if( ($form_asunto_len<=$asunto_min) && (!empty($form_asunto)) )





			$mensaje_error.=$mensaje_asunto_min;





		// Comprobar tama�o m�nimo de mensaje





		if( ($form_mensaje_len<=$mensaje_min) && (!empty($form_mensaje)) )





			$mensaje_error.=$mensaje_mensaje_min;











		/*





			Comprar tama�o grande.





		Pese a que el formulario lo hace lo compruebo pues podr�a haber la posibilidad que se burlase esta seguridad.





		Adem�s es necesario en el campo mensaje pues en el textarea no se puede especificar el tama�o m�ximo.





		*/











		if($form_nombre_len>=$nombre_max)			// Comprobar tama�o m�ximo en nombre





			$mensaje_error.=$mensaje_nombre_max;





		if($form_email_len>=$email_max)				// Comprobar tama�o m�ximo en mail





			$mensaje_error.=$mensaje_email_max;





		if($form_asunto_len>=$asunto_max)			// Comprobar tama�o m�ximo en asunto





			$mensaje_error.=$mensaje_asunto_max;





		if($form_mensaje_len>=$mensaje_max)			// Comprobar tama�o m�ximo en mensaje





			$mensaje_error.=$mensaje_mensaje_max;











		/*





			Comprobar fichero adjunto





		*/





		if($adjunto_enviar==TRUE)





		{





			$archivo=$_FILES['form_archivo']['name'];		// Nombre del archivo





			$temporal=$_FILES['form_archivo']['tmp_name'];		// Ruta del fichero temporal





			// Comprobar si existe archivo a adjuntar





			if($temporal!='')					// $temporal=='' si no hay adjunto





			{





				// Comprobar tama�o m�ximo del archivo





				$adjunto_tamano=filesize($temporal)/1024;	// Tama�o del adjunto en Kb





				if($adjunto_tamano>=$adjunto_max)





					$mensaje_error.=$mensaje_adjunto_max;





			}





		}





		else





			$temporal='';						// Para indicar que no hay adjunto











		// Comprobar que no ha abusado de las may�sculas, tanto en asunto como en el mensaje





		if ((cuenta_letras_mayusculas($form_asunto)>$porcentaje_may_aceptadas) || (cuenta_letras_mayusculas($form_mensaje)>$porcentaje_may_aceptadas))





			$mensaje_error.=$mensaje_muchas_may;











		// Filtro de palabras





		if( (censurar($form_asunto,$censura_lista)==FALSE) || (censurar($form_mensaje,$censura_lista)==FALSE) )





			$mensaje_error.=$mensaje_censura;











		if(empty($mensaje_error))			// No ha habido error, puedo enviar el mail





		{





			// Al mensaje del usuario le a�ado datos de control, como IP y hora.





			$ip=ip();													// IP del usuario.





			setlocale (LC_TIME,$idioma);				// Parametros locales para el tiempo.





			$fecha=gmstrftime("%a, %d/%b/%y %H:%M:%S (%Z)",time());	// Hora de envio.





			$mensaje_texto=$form_mensaje."\n\n".$enviado_por.' '.$ip."\n".$enviado_el.' '.$fecha;











			// Comprobar si verdaderamente hay adjunto





			if($temporal!='')





			{





				// Leer el adjunto





				$buffer = implode("",file($temporal));		// Leer fichero





				$buffer = chunk_split(base64_encode($buffer));	// Codificaci�n en base64 y divido











				// Cabeceras necesarias para enviar el mail





				$cabecera = "MIME-version: 1.0\n";





				$cabecera .= "From: $form_nombre<$form_email>\n";





				$cabecera .= "Return-Path: $email_admin\n";





				$cabecera .= "Content-type: multipart/mixed; ";





				$cabecera .= "boundary=\"Message-Boundary\"\n";





				$cabecera .= "Content-transfer-encoding: 7BIT\n";





				$cabecera .= "X-attachments: $temporal";











				// Mensaje de texto plano





				$mensaje = "--Message-Boundary\n";





				$mensaje .= "Content-type: text/plain; charset=ISO-8859-1\n";





				$mensaje .= "Content-transfer-encoding: 7BIT\n";





				$mensaje .= "Content-description: Mail message body\n\n";





				$mensaje .=$mensaje_texto;











				// Adjuntar el fichero





				$mensaje .= "\n\n--Message-Boundary\n";





				$mensaje .= "Content-type: Binary; name=\"$archivo\"\n";





				$mensaje .= "Content-Transfer-Encoding: BASE64\n";





				$mensaje .= "Content-disposition: attachment; filename=\"$archivo\"\n\n";





				$mensaje .= "$buffer\n";





				$mensaje .= "--Message-Boundary--\n";





			}





			else





			{





				// Cabeceras necesarias para enviar el mail





				$cabecera = "From: $form_nombre<$form_email>\n";





				$cabecera .= "Return-Path: $email_admin\n";











				// Mensaje de texto plano





				$mensaje = $mensaje_texto;





			}











			// Envia mail. La @ evita que muestre por pantalla posibles fallos.





			// Envio del email correcto





			if (@mail($email_admin,$form_asunto,$mensaje,$cabecera))	





			{





				// Opci�n de enviar un acuse de recibo





				if($acuse_activo==TRUE)





				{





					// Envio del email de acuse de recibo correcto





					if (@mail($form_email,$acuse_mail_asunto,$acuse_mail_cuerpo))	





						$salida=$acuse_mail_enviado;





					else	// Ha fallado el acuse de recibo





						$salida=$acuse_mail_fallido;





				}





				else	// No hay acuse de recibo





					$salida=$mensaje_mail_enviado;		// Mensaje final de agradecimiento





			}





			else		// Ha fallado el envido del email





				$salida=$mensaje_mail_fallido;		// Mensaje final de indicaci�n de error





		}





		else															// Ha habido algun error, vuelvo al formulario





		{





			// Indicaci�n de los errores.





			$mensaje_error=$mensaje_error_inicial.$mensaje_error.$mensaje_error_final;











			// Volver a mostrar el formulario con los campos previamente escritos y el error.





			$salida=formulario($form_nombre,$form_email,$form_asunto,$form_mensaje,$mensaje_error);





		}





	}





	else															// Entrada por primera vez





		$salida=formulario();			// Imprimir el formulario sin valores iniciales











	return $salida;					// Salida de la funci�n principal





}











// Funci�n que elimina espacios en blancos innecesarios, html y similares.





function limpiar($texto)





{





	$texto = trim($texto);				// Elimina espacios del principio y final de una cadena





	$texto = stripslashes($texto);			// Eliminar barras invertidas





	$texto = strip_tags($texto);			// Eliminar marcas html y php





	return $texto;					// Volver de la funci�n





}











/*





Funci�n para validar un mail.





Devuelve TRUE si el mail tiene el formato correcto.





Devuelve FALSE si el mail tiene un formato incorrecto o el dominio no exista.





*/





function email_valido($email)





{





	if (preg_match('!^[a-z0-9.+-_]+@([a-z0-9-]+(?:.[a-z0-9-]+)+)$!i',$email,$partes))





	{





		// Comprobar que el dominio es correcto





		if (!checkdnsrr($partes[1]))





			return FALSE;





		else





			return TRUE;





	}





	else





		return FALSE;





}











// Conocer IP





function ip()





{





	if (isset($_SERVER['HTTP_X_FORWARDED_FOR']))





		$ip = $_SERVER['HTTP_X_FORWARDED_FOR'];





	elseif (isset($_SERVER['HTTP_VIA']))





		$ip = $_SERVER['HTTP_VIA'];





	elseif (isset($_SERVER['REMOTE_ADDR']))





		$ip = $_SERVER['REMOTE_ADDR'];





	else





		$ip = 'desconocida';











	return $ip;						// Devolver la IP





}











// Para saber cuantas letras may�sculas tiene una funci�n





function cuenta_letras_mayusculas($cadena)





{





	$string2=strtolower ($cadena);				// La paso a may�sculas





	similar_text ($cadena,$string2,$porcentaje); 		// Calculo el porcentaje de minusculas





	$porcentaje=100-$porcentaje;				// Calculo el porcentaje de may�sculas





	return $porcentaje;





}











// Comprobar si usa palabras prohibidas en un mensaje





// Devuelve TRUE en caso de haber pasado el filtro





function censurar($texto,$filtro)





{





   	foreach ($filtro as $palabra)





	{





		if(eregi($palabra,$texto)!='')





			return FALSE;





	}





	return TRUE;





}











// Funci�n que crea el formulario.





// En caso de llamarse sin parametros los pone en blanco.





function formulario($form_nombre='',$form_email='',$form_asunto='',$form_mensaje='',$mensaje_error='')





{





	// Varias globales definidas al inicio





	global $titulo_nombre,$titulo_email,$titulo_asunto,$titulo_mensaje;





	global $nombre_size,$email_size,$asunto_size,$mensaje_cols,$mensaje_rows;





	global $titulo_web,$mensaje_principal,$nombre_max,$email_max,$asunto_max;





	global $adjunto_enviar,$titulo_adjunto,$adjunto_max,$archivo_size;











	$url=$_SERVER['PHP_SELF'];		// Direcci�n del formulario. Si en el formulario escribo directamente $_SERVER['PHP_SELF'] da problemas, por eso lo hago con otra variable.











	// Formulario para el env�o de un fichero adjunto





	if($adjunto_enviar==TRUE)





	{





		$adjunto =<<<EOT





$titulo_adjunto<br />





<input type="file" name="form_archivo" size="$archivo_size" /><br />





EOT;





	}





	else





		$adjunto ='';











	$formulario =<<<EOT





$mensaje_principal





$mensaje_error





<p>&nbsp;</p>





<form enctype="multipart/form-data" method="post" action="$url">





<p>





$titulo_nombre<br />





<input type="text" name="form_nombre" maxlength="$nombre_max" size="$nombre_size" value="$form_nombre" /><br />





$titulo_email<br />





<input type="text" name="form_email" maxlength="$email_max" size="$email_size" value="$form_email" /><br />





$titulo_asunto<br />





<input type="text" name="form_asunto" maxlength="$asunto_max" size="$asunto_size" value="$form_asunto" /><br />





$titulo_mensaje<br />





<textarea cols="$mensaje_cols" rows="$mensaje_rows" name="form_mensaje">$form_mensaje</textarea><br />





$adjunto





<br />





<input type="submit" name="form_enviar" value="Enviar" />





</p>





</form>





EOT;











	return $formulario;						// Regreso de la funci�n





}











// html de la p�gina web, imprime la salida dada.





function html($cuerpo)





{





	// Varias globales definidas al inicio





	global $titulo_web;











	$pagina =<<<EOT





<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.1//EN"





		"http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd">





<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="es">





<head>





<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />





<title>$titulo_web</title>





</head>





<body>





<h1>$titulo_web</h1>





$cuerpo





<p>Script creado por <a href="http://www.nosetup.org">NoSetup.org</a>.</p>





</body>





</html>





EOT;











	return $pagina;





}

















?>