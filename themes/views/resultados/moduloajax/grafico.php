<div class="central">
<?php
require_once('../../../../models/pregunta.class.php');
require_once('../../../../models/contestacion.class.php');
require_once('../../../../models/bd.class.php');
require_once('../../../../models/query.class.php');
require_once('../../../../controllers/funciones.php');

$idpregunta='';
if (isset($_GET['idpregunta']))	$idpregunta=$_GET['idpregunta'];
$nuevapregunta = new contestacion('','','',$idpregunta);
$datos=$nuevapregunta->devuelvecontestaciones_idpregunta();

$montaje="";
$montajedonut="";
foreach ($datos as $filax){
	$resp = utf8_encode($filax->respuesta);
	$montaje=$montaje.'{year:\''.$resp.'\',value:'.$filax->total.'},';
}
$montaje = substr($montaje, 0, -1);

foreach ($datos as $filax){
	$resp = utf8_encode($filax->respuesta);
	$montajedonut=$montajedonut.'{label:\''.$resp.'\',value:'.$filax->total.'},';
}
$montajedonut = substr($montajedonut, 0, -1);
?>

<div id="graficos-encuesta" style="height: 250px;"></div>


</div>

<?php if ($_GET['losgraficos']=='1'){?>
<script>
new Morris.Bar({
  // ID of the element in which to draw the chart.
  element: 'graficos-encuesta',
  // Chart data records -- each entry in this array corresponds to a point on
  // the chart.
  data: [
   <?php echo $montaje; ?>
  ],
  // The name of the data record attribute that contains x-values.
  xkey: 'year',
  // A list of names of data record attributes that contain y-values.
  ykeys: ['value'],
  // Labels for the ykeys -- will be displayed when you hover over the
  // chart.
  labels: ['Value']
});
</script>
<?php 
}else{
 ?>
<script>
Morris.Donut({
  element: 'graficos-encuesta',
  data: [
    <?php echo $montajedonut; ?>
  ]
});
</script>

<?php } ?>