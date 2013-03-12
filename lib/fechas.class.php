<?php
class Fechas {
	
	/* Obtenemos el día, mes y año en variables separadas */
	public static function invierteFecha($fecha) {
		$dia = substr ( $fecha, 8, 2 );
		
		$mes = substr ( $fecha, 5, 2 );
		
		$anho = substr ( $fecha, 0, 4 );
		
		/* pasamos el mes a formato texto */
		
		switch ($mes) {
			
			case '01' :
				
				$mesLetra = 'Enero';
				
				break;
			
			case '02' :
				
				$mesLetra = 'Febrero';
				
				break;
			
			case '03' :
				
				$mesLetra = 'Marzo';
				
				break;
			
			case '04' :
				
				$mesLetra = 'Abril';
				
				break;
			
			case '05' :
				
				$mesLetra = 'Mayo';
				
				break;
			
			case '06' :
				
				$mesLetra = 'Junio';
				
				break;
			
			case '07' :
				
				$mesLetra = 'Julio';
				
				break;
			
			case '08' :
				
				$mesLetra = 'Agosto';
				
				break;
			
			case '09' :
				
				$mesLetra = 'Septiembre';
				
				break;
			
			case '10' :
				
				$mesLetra = 'Octubre';
				
				break;
			
			case '11' :
				
				$mesLetra = 'Noviembre';
				
				break;
			
			case '12' :
				
				$mesLetra = 'Diciembre';
				
				break;
			
			default :
				
				$mesLetra = NULL;
		}
		
		/* Establecemos el formato con el cual deseamos mostrar la fecha */
		
		$correcta = $dia . " de " . $mesLetra . " de " . $anho;
		
		return $correcta;
	}
	
	/* Pasamos el dia de la semana a Español */
	public static function diaLetra($dia) {
		switch ($dia) {
			
			case 'Sunday' :
				
				$diaLetra = "Domingo";
				
				break;
			
			case 'Monday' :
				
				$diaLetra = "Lunes";
				
				break;
			
			case 'Tuesday' :
				
				$diaLetra = "Martes";
				
				break;
			
			case 'Wednesday' :
				
				$diaLetra = "Miércoles";
				
				break;
			
			case 'Thursday' :
				
				$diaLetra = "Jueves";
				
				break;
			
			case 'Friday' :
				
				$diaLetra = "Viernes";
				
				break;
			
			case 'Saturday' :
				
				$diaLetra = "Sábado";
				
				break;
			
			default :
				
				$diaLetra = NULL;
		}
		
		return $diaLetra;
	}
}

?>