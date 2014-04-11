<?php
$min=1;
if (isset($_GET['min'])) $min=$_GET['min'];
$max=1;
if (isset($_GET['max'])) $max=$_GET['max'];

?>

<script>
	$("#tmax").slider({
		orientation: "horizontal",
		range: "min",
		max: <?php echo $max; ?>,
		min:<?php echo $min;?>,
		slide: refreshSwatchTmax,
		change: refreshSwatchTmax
	});
	
	function refreshSwatchTmax() {
		var tmax = $( "#tmax" ).slider( "value" );
		$("#elemtmax").text(tmax);
		var total= format(temp*frames*cores)+' €';
		$("#caltotaleuro").text(total);
	}
</script>

<div class="txtcalcu">T. Max:</div>
<div id="elemtmax" class="txtcalcunum"></div>
<div id="tmax"></div>






