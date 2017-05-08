<?php include('header.php')?>
<section>

<?php
  $la_url = $_GET['url'];
  $json = file_get_contents($la_url);
  $datos = json_decode($json,true);
?>

<h3>PHP+GeoJSON:</h3>

<p>En esta página vemos el detalle de: <strong><?php print($datos['properties']['place']);?></strong></p>


<p>Magnitud: <strong><?php print($datos['properties']['mag']);?> <?php print($datos['properties']['magType']);?></strong></p>
<p>Tipo de Alerta: <strong><?php print($datos['properties']['alert']);?></strong></p>

<p>Alerta de tsunami: <strong><?php if ($datos['properties']['tsunami'] == 0);?> No</strong></p>

<pre><?php print_r($datos)?></pre>


<div class="alert alert-danger">
<p>Genere una ficha donde se muestren los datos más importantes del movimiento sístimo que se observa en detalle.</p>
</div>

</section>
<?php include('footer.php');?>
