<?php




class administracion {




	private $noticias = array();




	public function getPost () {




		$query = "SELECT * FROM `".BASEDATOSUSER."`.`".TBLNOTICIAS."`,`".BASEDATOSUSER."`.`".TBLCATEGORIAS."` WHERE `".BASEDATOSUSER."`.`".TBLNOTICIAS."`.`id_categoria`=`".BASEDATOSUSER."`.`categorias`.`id_categoria`;";




		$respPost = mysql_query($query,Consultas::conexionbd());




		while ($filaPost = mysql_fetch_array($respPost)) {




			$this->noticias[] = $filaPost;




		}




		return $this->noticias;




	}




}




?>