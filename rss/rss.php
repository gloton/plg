<?php





header("Content-Type: application/rss+xml"); 





echo "<?xml version='1.0' encoding='utf-8'?>";





include_once '../lib/general.php';





$objConsultas = new Consultas();





$noticia = $objConsultas->getNoticias(); 





?>





<rss version="2.0" xmlns:atom="http://www.w3.org/2005/Atom">





	<channel> <!--title es el titulo -->





		<title>





			<![CDATA[PlataformaGroup.cl - Lo más nuevo]]>





		</title>





		<!--link es donde ira al pinchar en el titulo(por lo menos en ie) -->





		<link>





		<![CDATA[http://www.plataformagroup.cl/]]>





		</link>





		<description><![CDATA[PlataformaGroup.cl - La Últimas noticias]]></description>





		<language>es-es</language>





		<copyright><![CDATA[Kenya Comunicaciones]]></copyright>





		<!-- enlace donde ira a buscar el archivo rss -->





		<atom:link href="<?php print $sitio;?>/rss/rss.php" rel="self" type="application/rss+xml" />





		<ttl>10</ttl>





		<image>





			<url>../images/logo.png</url>





			<!-- esta me parace que deberia ser el title que 





			aparece al colocar el cursor encima y el link de la imagen





			del logo, sin embargo, no me funciona en firefox y 





			no se donde funcionara -->





			<title>PlataformaGroup.cl - De tu logo a las noticias</title>





			<link>http://www.plataformagroup.cl</link>





		</image>





		





		<!--dentro de cada etiqueta item ira cada articulo -->





<?php 





for ($i=0;$i<sizeof($noticia);$i++) {





?>		





		<item>





			<title><![CDATA[<?php print $noticia[$i]["titulo"];?>]]></title>





			<link><![CDATA[<?php echo "detalleNoticia.php?idnoticia=".$noticia[$i]["idnoticia"];?>]]></link>





			<description><![CDATA[<?php print $noticia[$i]["detalle"];?>]]></description>





			<guid isPermaLink="true"> <![CDATA[http://www.google.cl]]></guid>





			<author><![CDATA[Plataforma Group]]></author>





			<pubDate><![CDATA[<?php print $noticia[$i]["fecha"];?>]]></pubDate>





		</item>





<?php





} 





?>





	</channel> 





</rss>