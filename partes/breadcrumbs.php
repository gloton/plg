<!DOCTYPE HTML>
<html lang="es">
<head>
<meta charset="utf-8">
<title>Breadcroumbs</title>
</head>
<body>
<!-- jgl - inicio breadcrumbs -->
    	<div id="breadcrumbs">
	    	<?php 
	    		//http://php.net/manual/es/function.setlocale.php
	    		//setlocale(LC_ALL, "tr_TR.UTF-8");
	    		$mn_ppal = strtr(strtolower($selected), "ÁÉÍÓÚÑ", "áéíóúñ");
	    		$mn_ppal = explode(' ',$mn_ppal);
	    		
	    		foreach ($mn_ppal as $valor) {
					if (strlen($valor) > 1) {
						$mn_ppal_capitazado .= ucwords($valor) . " ";
					} else {
						$mn_ppal_capitazado .= $valor . " ";
					}
				}
				$mn_ppal = implode("_",$mn_ppal);
				$mn_pagina = strtr(strtolower($pagina), "ÁÉÍÓÚÑ", "áéíóúñ");			
	    	?>
			<ul>
				<li id="bc_first" ><a href="<?=$sitio?>"></a></li>
				<li id="mn_bc_<?=str_replace(" ","-",$mn_ppal)?>"><span class="mn_ppal mn_bc_item"><?=$mn_ppal_capitazado?></span></li>
				<li><span class="mn_bc_item"><?=$mn_pagina?></span></li>
			</ul>
			<div class="clearfix"></div>
    	</div>
    	<!-- jgl - fin breadcrumbs -->
</body>
</html>    	