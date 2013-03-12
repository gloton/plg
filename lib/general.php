<?php
/*
 * Obtener ruta al servidor
 */
$servidor = $_SERVER ['HTTP_HOST'];
$buscar = "localhost";
$resultado = strpos ( $servidor, $buscar );
if ($resultado !== FALSE) {
	$subcarpeta = "/" . basename ( dirname ( dirname ( __FILE__ ) ) );
} else {
	$subcarpeta = "/plg";
}
$probando = "se incluyo correctamente";
$sitio = "http://" . $servidor . $subcarpeta;
class Consultas {
	
	// conexion de base de datos
	public static function conexionbd() {
		// $con = mysql_connect( "localhost","platafor_web" ,"web2012" );
		$con = mysql_connect ( SERVIDOR, BASEDATOSUSER, PASSBD );
		// y esta es la que usa cesar cancino
		mysql_query ( "SET NAMES 'utf8'" );
		mysql_selectdb ( BASEDATOS );
		return $con;
	}
	
	// obtener noticias
	/*
	 * esta funcion la cree para el rss, pero ahora creares el rss a partir del blog private $noticia = array(); public function getNoticias() { $query = "SELECT * FROM `platafor_web`.`noticias` ORDER BY idnoticia DESC;"; $noticias = mysql_query($query, Consultas::conexionbd()); while ($filas = mysql_fetch_assoc($noticias)) { $this->noticia[] = $filas; } return $this->noticia; }
	 */
}
class Trabajo {
	private $cat = array ();
	private $noticias = array ();
	private $post = array ();
	private $comentarios = array ();
	private $ultimas = array ();
	private $catElegida = array ();
	public function get_categorias() {
		$sql = "select * from categorias order by categoria asc";
		// echo "$sql<br>";
		$res = mysql_query ( $sql, Consultas::conexionbd () );
		while ( $reg = mysql_fetch_assoc ( $res ) ) {
			$this->cat [] = $reg;
		}
		return $this->cat;
	}
	public function categoryChosen($idCat) {
		$sql = "SELECT categoria FROM categorias WHERE id_categoria = " . $idCat;
		$res = mysql_query ( $sql, Consultas::conexionbd () );
		
		while ( $reg = mysql_fetch_assoc ( $res ) ) {
			$this->catElegida [] = $reg;
		}
		return $this->catElegida;
	}
	/*
	 * OBTENDRA LOS POSTS funcion que nos servira para paginar los post $inicio es numero desde donde comenzara la paginacion $c se refiere a la categoria con limit limitaremos la cantidad de registros a mostrar
	 */
	public function get_paginacion_noticias($inicio, $c, $nroPost = 10) {
		// $sql = "SELECT * FROM noticias ORDER BY id_noticia DESC limit $inicio,10";
		// $sql = "SELECT * FROM noticias WHERE id_categoria = $c ORDER BY id_noticia DESC limit $inicio,$nroPost";
		$sql = "SELECT id_noticia, titulo, detalle, html, fecha_cadena, fecha, url_img_intro, 
				descarga, id_categoria, dayname(fecha) as diatexto FROM noticias 
				WHERE id_categoria = $c ORDER BY id_noticia DESC limit $inicio,$nroPost";
		$res = mysql_query ( $sql, Consultas::conexionbd () );
		while ( $reg = mysql_fetch_assoc ( $res ) ) {
			$this->noticias [] = $reg;
		}
		return $this->noticias;
	}
	/*
	 * disminuir la vista previa del post, evitanto mostrar todo el detalle en la pagina donde se listan todos los post
	 */
	public static function corta_palabra($palabra, $num) {
		// $num es el caracter final donde se cortara la cadena
		$largo = strlen ( $palabra ); // indicarme el largo de una cadena
		$cadena = substr ( $palabra, 0, $num );
		return $cadena;
	}
	// cuenta cuantos comentarios tiene el post
	public function total_comentarios($id_noticia) {
		$sql = "select count(*) as cuantos from comentarios where id_noticia=$id_noticia ";
		$res = mysql_query ( $sql, Consultas::conexionbd () );
		if ($reg = mysql_fetch_array ( $res )) {
			$total = $reg ["cuantos"];
		}
		return $total;
	}
	public function get_post_por_id() {
		$sql = "SELECT * FROM noticias WHERE id_noticia = " . $_GET ["id"];
		$res = mysql_query ( $sql, Consultas::conexionbd () );
		while ( $reg = mysql_fetch_assoc ( $res ) ) {
			$this->post [] = $reg;
		}
		return $this->post;
	}
	public function insertar_comentarios() {
		// print_r($_POST);
		$sql = "insert into comentarios values
			(null,
			'" . strip_tags ( $_POST ["nom"] ) . "',
			'" . strip_tags ( $_POST ["correo"] ) . "',
			'" . strip_tags ( $_POST ["web"] ) . "',
			'" . strip_tags ( $_POST ["mensaje"] ) . "',
			now(),
			'" . strip_tags ( $_POST ["id_noticia"] ) . "'
			);
		";
		// echo $sql;
		// exit();
		$res = mysql_query ( $sql, Consultas::conexionbd () );
		echo "
		<script type='text/javascript'>
		alert('El comentario ha sido ingresado correctamente. Gracias por escribir a mi web');
		window.location='" . $_POST ["url"] . "';
		</script>";
	}
	public function get_comentarios($id) {
		$sql = "select * from comentarios where id_noticia=$id order by id_comentario desc";
		$res = mysql_query ( $sql, Consultas::conexionbd () );
		while ( $reg = mysql_fetch_assoc ( $res ) ) {
			$this->comentarios [] = $reg;
		}
		return $this->comentarios;
	}
	public function get_ultimas_10_noticias() {
		$sql = "select * from noticias order by id_noticia desc limit 10";
		$res = mysql_query ( $sql, Consultas::conexionbd () );
		while ( $reg = mysql_fetch_assoc ( $res ) ) {
			$this->ultimas [] = $reg;
		}
		return $this->ultimas;
	}
}
?>