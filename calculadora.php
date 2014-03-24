<?php
if(isset($_GET['r1']) && $_GET['r1']=='idioma') header ("Location: ../controllers/direct/idioma.php?r2=".$_GET['r2']);

session_start();  
if (!isset($_SESSION['idioma'])){
    $idioma =substr($_SERVER["HTTP_ACCEPT_LANGUAGE"],0,2); 
	$_SESSION['idioma']=$idioma;
} 
$idiomaaux=$_SESSION['idioma'];
$idiomaaux=strtoupper ($idiomaaux);
require_once("themes/langs/".$idiomaaux.".php");

error_reporting(E_ALL|E_STRICT);
$site_path = realpath(dirname(__FILE__));
define ('__SITE_PATH', $site_path);

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<META charset="ISO 8859-1">
<title>Render Drive - Servicios de Render Online</title>
<script src="themes/js/jquery.js"></script>
<!--<script language="javascript" src="themes/js/codigo.js" charset="ISO-8859-1"></script>-->
<link href='http://fonts.googleapis.com/css?family=Open+Sans:300,400,700|Roboto:300&amp;subset=latin-ext' rel='stylesheet'>


<!--<link rel="STYLESHEET" type="text/css" href="themes/css/estilos.css" media="screen" />
<link href="estilosmovil.css" rel="stylesheet" type="text/css" media="handheld" />-->

<!--calculadora-->
 <link rel="stylesheet" href="themes/css/jquery-ui.css">
<script src="themes/js/jquery-1.9.1.js"></script>
<script src="themes/js/jquery-ui.js"></script>

<script>
	/*----------------------Calculadora-------------*/
	$(document).ready(function () {
		 $(function() {
		$("#cores").slider({
			orientation: "horizontal",
			range: "min",
			max: 64,
			min:1,
			value:1,
			change: refreshSwatchCores
		
		});

		$("#frames").slider({
			orientation: "horizontal",
			range: "min",
			min:0,
			max:10000,
			step:1,
 			value: 1,
			change: refreshSwatchFrames
			
		});
		$("#temp").slider({
			orientation: "horizontal",
			range: "min",
			max: 300,
			min:1,
			value: 1,
			change: refreshSwatchTemp

		});
		
		$("#slots").slider({
			orientation: "horizontal",
			range: "min",
			max:20,
			min:1,
			value:20,
			slide: refreshSwatchSlots,
			change: calculotarifa
		});
		$("#tmax").slider({
			orientation: "horizontal",
			range: "min",
			max: 500,
			min:1,
			value:1,
			slide: refreshSwatchTmax2,
			change: refreshSwatchTmax
			
		});
		$( "#cores" ).slider( "value", 1 );
		$( "#frames" ).slider( "value", 1 );
		$( "#temp" ).slider( "value", 1 );
		$( "#slots" ).slider( "value",1 );
		});
		

		
		function refreshSwatchTemp() {
			var temp = $( "#temp" ).slider( "value" );
			var frames = $( "#frames" ).slider( "value" );
			var cores = $( "#cores" ).slider( "value" );
			
			$("#elemtemp").text(temp);
			$("#tempinput").val(temp);
			
			var pc= cores*3;
			var tc= pc*frames*temp;
			$("#tc").text(format(tc));

				
			var nhorasmin=tc/4000;
			var nhorasminred=Math.ceil(nhorasmin/60);
			$("#nhorasmin").text(nhorasmin+' '+nhorasminred);
			
			var nhorasmax=tc/200;
		
			var nhoramaxred=Math.ceil(nhorasmax/60);
			$("#nhorasmax").text(nhorasmax+' '+nhoramaxred);
			
			reiniciatmax(nhoramaxred,nhorasminred);
			$( "#tmax" ).slider( "value", nhoramaxred );		
			
			calculototal();
		

			
		}
		function refreshSwatchFrames() {
			var temp = $( "#temp" ).slider( "value" );
			var frames = $( "#frames" ).slider( "value" );
			var cores = $( "#cores" ).slider( "value" );
			
			$("#elemframes").text(format(frames));
			$("#framesinput").val(format(frames));
			
			var pc=cores*3;
			var tc= pc*frames*temp;
			$("#tc").text(format(tc));
			
			var nhorasmin=tc/4000;
			var nhorasminred=Math.ceil(nhorasmin/60);
			$("#nhorasmin").text(nhorasmin+' '+nhorasminred);
			
			var nhorasmax=tc/200;
			var nhoramaxred=Math.ceil(nhorasmax/60);
			$("#nhorasmax").text(nhorasmax+' '+nhoramaxred);

			reiniciatmax(nhoramaxred,nhorasminred);
			$( "#tmax" ).slider( "value", nhoramaxred );
			
		
			calculototal();
			
		}
		function refreshSwatchCores() {
			var temp = $( "#temp" ).slider( "value" );
			var frames = $( "#frames" ).slider( "value" );
			var cores = $( "#cores" ).slider( "value" );
			
			$("#elemcores").text(cores);
			$("#coreinput").val(cores);
			
			var pc=cores*3;
			$("#pc").text(format(pc));
			var tc= pc*frames*temp;
			$("#tc").text(format(tc));
			
			var nhorasmin=tc/4000;
			var nhorasminred=Math.ceil(nhorasmin/60);
			$("#nhorasmin").text(nhorasmin+' '+nhorasminred);
			
			var nhorasmax=tc/200;
			var nhoramaxred=Math.ceil(nhorasmax/60);
			$("#nhorasmax").text(nhorasmax+' '+nhoramaxred);
			
			reiniciatmax(nhoramaxred,nhorasminred);
			$( "#tmax" ).slider( "value", nhoramaxred );
			
			var total= format(temp*frames*cores)+' €';
			$("#caltotaleuro").text(total);
			
			calculototal();
			
		}
		/*----Reinicio tiempo-----*/
		function reiniciatmax(topemax,topemin){
		
			$("#tmax").slider( "option", "max", topemax );
			$("#elemtmaxmax").text('Max '+format(topemax));
			$("#elemtmaxmin").text('Min ' +format(topemin));
			
		}
		
		/*----APP-----*/
		
		function refreshSwatchTmax() {
			var tmax = $( "#tmax" ).slider( "value" );
			//var tmax=tmax/60;
			$("#elemtmax").text(format(tmax));
			$("#tmaxinput").val(format(tmax));
		

			
			calculototal();
		}
		
		function refreshSwatchTmax2() {
			var tmax = $( "#tmax" ).slider( "value" );
			$("#elemtmax").text(format(tmax));
			$("#tmaxinput").val(format(tmax));

			var total= format(temp*frames*cores)+' €';
			$("#caltotaleuro").text(total);
			
			var temp = $( "#temp" ).slider( "value" );
			var frames = $( "#frames" ).slider( "value" );
			var cores = $( "#cores" ).slider( "value" );
			var pc=cores*3;

			var tc= pc*frames*temp;
			
			var tmaxslots=((tc/tmax)/200);
			var tmaxslotsred=Math.ceil(tmaxslots);
			$( "#slots" ).slider( "value", tmaxslotsred );
			calculototal();
			
		}
		

		function refreshSwatchSlots() {
			var slots = $( "#slots" ).slider( "value" );
			$("#elemslots").text(slots);
			$("#slotsinput").val(slots);
			
			var temp = $( "#temp" ).slider( "value" );
			var frames = $( "#frames" ).slider( "value" );
			var cores = $( "#cores" ).slider( "value" );
			var pc=cores*3;

			var tc= pc*frames*temp;
			
			var aux=slots*200;
			
			var nslots=tc/aux;
			var nslotsred=Math.ceil(nslots);
			
			
			
			$( "#tmax" ).slider( "value", nslotsred );
			$("#elemslots").text(slots);
			$("#nnslots").text(slots);
			
			var total= format(temp*frames*cores)+' €';
			$("#caltotaleuro").text(total);
			calculototal();
		}
		
	 $( "#tempinput" ).change(function() {
		var valor= $( "#tempinput" ).val();
		$( "#temp" ).slider( "value", valor );
	});	
	$( "#coreinput" ).change(function() {
		var valor= $( "#coreinput" ).val();
		$( "#cores" ).slider( "value", valor );
	});	
	$( "#framesinput" ).change(function() {
		var valor= $( "#framesinput" ).val();
		$( "#frames" ).slider( "value", valor );
	});	
	$( "#tmaxinput" ).change(function() {
		var valor= $( "#tmaxinput" ).val();
		$( "#tmax" ).slider( "value", valor );
	});	
	$( "#slotsinput" ).change(function() {
		var valor= $( "#slotsinput" ).val();
		$( "#slots" ).slider( "value", valor );
	});	
	
	});
	function calculototal(){
			var temp = $( "#temp" ).slider( "value" );
			var frames = $( "#frames" ).slider( "value" );
			var cores = $( "#cores" ).slider( "value" );
			var tarifa = $( "#tarifa" ).val();
			
			var total=cores*3*tarifa*frames*(temp/60);
			var total=Math.ceil(total)+' Créditos';
			$("#caltotal").text(total);
		//cores*Velocidad_core_media*tarifa(creditos/GHzh)*frames*horas/frame
	}
	
	
	function calculotarifa(){
		var slots = $( "#slots" ).slider( "value" );
		var pathaux="controllers/ajax/calculotarifa.php";
			$.ajax({
				type: "GET",
				url: pathaux,
				data: "slots="+slots,
				success: function(texto){
						$('#tarifaaux').html(texto);
				}
			});
	}


/*------------formateo de  los puntos de miles --------------*/	
function format(valor) {
    var nums = new Array();
    var simb = "."; //Éste es el separador
    valor = valor.toString();
    valor = valor.replace(/\D/g, "");   //Ésta expresión regular solo permitira ingresar números
    nums = valor.split(""); //Se vacia el valor en un arreglo
    var long = nums.length - 1; // Se saca la longitud del arreglo
    var patron = 3; //Indica cada cuanto se ponen las comas
    var prox = 2; // Indica en que lugar se debe insertar la siguiente coma
    var res = "";
 
    while (long > prox) {
        nums.splice((long - prox),0,simb); //Se agrega la coma
        prox += patron; //Se incrementa la posición próxima para colocar la coma
    }
 
    for (var i = 0; i <= nums.length-1; i++) {
        res += nums[i]; //Se crea la nueva cadena para devolver el valor formateado
    }
	
    return res;
}

</script>

<style>
html,body{
	font-family:arial;
	height:100%;
	margin:0;
	background:#fff;
	text-align:center;
}
.txtcalcu, .txtcalcunum{
	font:14px arial;
	float:left;
	color:#444;
	margin-left:5px;
}
 
.txtcalcunum{
	width:20px;
	font:bold 14px arial;
}
 
#caltotal{
	background:#47717A;
	height:40px;
	text-align:center;
	color:#fff;
	font:bold 16px arial;
	padding-top:15px;
	width:85px;
	margin-top:25px;
 }
 
 .calculadora{
	width:650px;
	background:#fff;

}
 
#cores, #frames,#temp,#slots,#tmax {
	float: left;
	width: 300px;
	margin-bottom: 20px;
	margin-left: 20px;
	margin-top:5px;
}

#cores .ui-slider-range, #frames .ui-slider-range, #temp .ui-slider-range,#slots .ui-slider-range,#tmax .ui-slider-range { 
	background: #47717A; /* Old browsers */
	

 }

.cajaminidoble{
	display:inline-block;
	max-width:470px;
	height:auto;
	padding:15px;
	margin-left:15px;
	margin-right:15px;
	text-align:left;
	vertical-align: top;
}

.tarifacal{
	padding-top:25px;
	background:#47717A;
	font: bold 40px arial;
	color:#fff;
	display:block-line;
	text-align:center;
	width:610px;
}
.txtazul{
	color:#47717A;
	font:bold 14px arial;
	margin-top:25px;
}
.cajaazul{
	background:#B6C1C7;
	width:560px;


padding:25px;
}

.min,.max{
	color:#fff;
	float:left;
	font:bold 12px arial;
	margin-left:15px;
	line-height:2;
}
.inputscal{
	width:50px;
	margin-left:15px;
}
.eleminput{
float:right;
}
</style>
</head>

<body>
<div class="cajaminidoble">
<div class="tarifacal">
			Calcula tu presupuesto
		</div>
	<div class="calculadora">
		
		<div class="txtazul">Indica los datos de tu equipo y tu proyecto.</div>
		
		<div class="cajaazul">

			<div class="txtcalcu">Número de Cores en tu equipo:</div>
			<div id="elemcores" class="txtcalcunum">1</div>
			<div style="clear:both;"></div>
			
			<div class="min">Min 1 </div><div id="cores"></div><div class="max">Max 64 </div><div class="eleminput"><input type="text" value="1" name="coreinput" id="coreinput" class="inputscal"></div>
			
			<div style="clear:both;"></div>
			
			<div class="txtcalcu">Número de Frames de tu proyecto:</div>
			<div id="elemframes" class="txtcalcunum">1</div>
			<div style="clear:both;"></div>
			
			<div class="min">Min 1 </div><div id="frames"></div><div class="max">Max 10.000 </div><div class="eleminput"><input type="text" value="1" name="framesinput" id="framesinput" class="inputscal"></div>
			<div style="clear:both;"></div>
			
			
			<div class="txtcalcu">Tiempo que tardas en renderizar un frame: ( Minutos )</div>
			<div id="elemtemp" class="txtcalcunum">1</div>
			<div style="clear:both;"></div>
			
			<div class="min">Min 1 </div><div id="temp"></div><div class="max">Max 300 </div><div class="eleminput"><input type="text" value="1" name="tempinput" id="tempinput" class="inputscal"></div>
			<div style="clear:both;"></div>
		</div>
		<!--
		Formulas Cliente:<br>
		<div style="display:inline-block">Potencia Cliente(Cores*3GHz)(Pc):</div><div id="pc" style="display:inline-block">3</div><br>
		<div style="display:inline-block">Trabajo Cliente(Pc*Frames*Tframe)(TC):</div><div id="tc" style="display:inline-block">0</div>
		<br><br>
		
		Formulas Summus:<br>
		<div style="display:inline-block">Num horas min.(TC/PotSummus max (200*20)):</div><div id="nhorasmin" style="display:inline-block">3</div><br>
		<div style="display:inline-block">Num horas max.(TC/PotSummus min (200*1)):</div><div id="nhorasmax" style="display:inline-block">3</div><br><br><br>
		Al mover los slots:<br>
		<div style="display:inline-block">Num de slots * 200:</div><div id="nnslots" style="display:inline-block">0</div><br>

	<hr>
	-->

	<div class="txtazul">Indica la configuración que necesitas.</div>
		
		<div class="cajaazul">

			<div class="txtcalcu">Tiempo Máximo ( Horas ): </div>
			<div id="elemtmax" class="txtcalcunum">200 </div>
			<div style="clear:both;"></div>
			<div class="min" id="elemtmaxmin">Min 1</div><div id="tmax"></div><div class="max" id="elemtmaxmax">Max</div><div class="eleminput"><input type="text" value="1" name="tmaxinput" id="tmaxinput" class="inputscal"></div>

			<div style="clear:both;"></div>
			
			
			<div class="txtcalcu">Número de Slots (200 GgHz): </div>
			<div id="elemslots" class="txtcalcunum">20</div>
			<div style="clear:both;"></div>
			
			<div class="min">Min 1</div><div id="slots"></div><div class="max">Max 20</div><div class="eleminput"><input type="text" value="1" name="slotsinput" id="slotsinput" class="inputscal"></div>
			<div style="clear:both;"></div>
		</div>	
	<div class="txtcalcu" id="caltotal">1</div></div>
	<div style="clear:both;"></div>
	</div>
</div>	

 <div id="tarifaaux"><input type="hidden" id="tarifa" value="0"></div>

</body>
</html>