<?php include('header.php');?>
<main role="main" class="container">
<?php
$la_url = $_GET['url']; //adnda a cachar lo que dice en la url porque necesito lo que viene despues de la url. url de la pag 26 del index, "details"
$nuevojson = file_get_contents($la_url); //mi nuevo json es esa urlencode. esa es la direccion donde necesito consultar ahora
$json_data = json_decode($nuevojson,true); //decodificalo de manera que pueda entenderlo
?>
<h1 class="mb-2">Detalles del temblor</h1>
<h3 class="mb-4"><?php print($json_data[properties][title])?></h3>
<code>
<pre>
<?php print_r($json_data);?>
</pre>
</code>

</main>
<?php include('footer.php');?>
