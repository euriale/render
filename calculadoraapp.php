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
		$("#ghz").slider({
			orientation: "horizontal",
			range: "min",
			step: 0.1,
			max: 3.9,
			min:1,
			value:1,
			change: refreshSwatchghz
		
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
			max: 600,
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
			change: refreshSwatchSlots
		
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
		calculototal();
		$( "#cores" ).slider( "value", 1 );
		$( "#ghz" ).slider( "value", 1 );
		$( "#frames" ).slider( "value", 1 );
		$( "#temp" ).slider( "value", 1 );
		$( "#slots" ).slider( "value",1 );
		});
		
		function refreshSwatchCores() {
			var temp = $( "#temp" ).slider( "value" );
			var frames = $( "#frames" ).slider( "value" );
			var cores = $( "#cores" ).slider( "value" );
			
			$("#elemcores").text(cores);
			$("#coreinput").val(cores);
			
			var ghz = $( "#ghz" ).slider( "value" );
						
			var pc= cores*ghz;
			$("#pc").text(format(pc));
			var tc= pc*frames*(temp/60);
			$("#tc").text(format(tc));
			
			var nhorasmin=tc/4000;
			var nhorasminred=Math.ceil(nhorasmin);
			$("#nhorasmin").text(nhorasmin+' min '+nhorasminred+ ' horas ');
			
			var nhorasmax=tc/200;
			var nhoramaxred=Math.ceil(nhorasmax);
			$("#nhorasmax").text(nhorasmax+' min '+nhoramaxred+ ' horas');
			
			reiniciatmax(nhoramaxred,nhorasminred);
			$( "#tmax" ).slider( "value", nhoramaxred );
			
			var total= format(temp*frames*cores)+' €';
			$("#caltotaleuro").text(total);
			
			calculototal();
			
		}
		function refreshSwatchghz() {
			var temp = $( "#temp" ).slider( "value" );
			var frames = $( "#frames" ).slider( "value" );
			var cores = $( "#cores" ).slider( "value" );
			var ghz = $( "#ghz" ).slider( "value" );
			
			$("#elemghz").text(ghz);
			$("#ghzinput").val(ghz);
			
			
						
			var pc= cores*ghz;
			$("#pc").text(format(pc));
			var tc= pc*frames*(temp/60);
			$("#tc").text(format(tc));
			
			var nhorasmin=tc/4000;
			var nhorasminred=Math.ceil(nhorasmin);
			$("#nhorasmin").text(nhorasmin+' min '+nhorasminred+ ' horas ');
			
			var nhorasmax=tc/200;
			var nhoramaxred=Math.ceil(nhorasmax);
			$("#nhorasmax").text(nhorasmax+' min '+nhoramaxred+ ' horas');
			
			reiniciatmax(nhoramaxred,nhorasminred);
			$( "#tmax" ).slider( "value", nhoramaxred );
			
			var total= format(temp*frames*cores)+' €';
			$("#caltotaleuro").text(total);
			
			calculototal();
			
		}
		
		function refreshSwatchTemp() {
			var temp = $( "#temp" ).slider( "value" );
			var frames = $( "#frames" ).slider( "value" );
			var cores = $( "#cores" ).slider( "value" );
			
			$("#elemtemp").text(temp);
			$("#tempinput").val(temp);
			
			var ghz = $( "#ghz" ).slider( "value" );
						
			var pc= cores*ghz;
			var tc= pc*frames*(temp/60);
			$("#tc").text(format(tc));

				
			var nhorasmin=tc/4000;
			var nhorasminred=Math.ceil(nhorasmin);
			$("#nhorasmin").text(nhorasmin+' = '+nhorasminred+' horas');
			
			var nhorasmax=tc/200;
		
			var nhoramaxred=Math.ceil(nhorasmax);
			$("#nhorasmax").text(nhorasmax+' = '+nhoramaxred+ ' horas');
			
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
			
			var ghz = $( "#ghz" ).slider( "value" );
						
			var pc= cores*ghz;
			var tc= pc*frames*(temp/60);
			$("#tc").text(format(tc));
			
			var nhorasmin=tc/4000;
			var nhorasminred=Math.ceil(nhorasmin);
			$("#nhorasmin").text(nhorasmin+' min '+nhorasminred+' horas');
			
			var nhorasmax=tc/200;
			var nhoramaxred=Math.ceil(nhorasmax);
			$("#nhorasmax").text(nhorasmax+' min '+nhoramaxred+' horas');

			reiniciatmax(nhoramaxred,nhorasminred);
			$( "#tmax" ).slider( "value", nhoramaxred );
			
		
			calculototal();
			
		}

		/*----Reinicio tiempo-----*/
		function reiniciatmax(topemax,topemin){
		
			$("#tmax").slider( "option", "max", topemax );
			$("#elemtmaxmax").text('Max '+format(topemax));
			$("#elemtmaxmin").text('Min ' +format(topemin));
			
		}
		/*--------MENU MOVIL---------*/
		$(".menumedia").click(function() {
			$( ".menumediadesplegado" ).toggle();
			
			if ($(".menumediadesplegado").is (":visible")) $(".primeracaja").css("padding-top", "100px");
			else $(".primeracaja").css("padding-top", "0px");
			
		});
	
	
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

			var temp = $( "#temp" ).slider( "value" );
			var frames = $( "#frames" ).slider( "value" );
			var cores = $( "#cores" ).slider( "value" );
			var ghz = $( "#ghz" ).slider( "value" );
						
			var pc= cores*ghz;

			var tc= pc*frames*(temp/60);
			
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
			var ghz = $( "#ghz" ).slider( "value" );
						
			var pc= cores*ghz;

			var tc= pc*frames*(temp/60);
			
			var aux=slots*200;
			
						
			var nuevotiempo=tc/aux;
			var nuevotiempored=Math.ceil(nuevotiempo/60);
			//$("#auxauxaux").text(nuevotiempored);
			
			$( "#tmax" ).slider( "value", nuevotiempored );
						
			$("#elemslots").text(slots);
			$("#nnslots").text(slots);
			
			//calculotarifa();
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
	$( "#ghzinput" ).change(function() {
		var valor= $( "#ghzinput" ).val();
		$( "#ghz" ).slider( "value", valor );
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
		//calculotarifa();
		calculototal();
	});	
	
	
	});
	function calculototal(){
			
			var tarifa = $( "#tarifa" ).val();
			
			var tmax = $( "#tmax" ).slider( "value" );
			var temp = $( "#temp" ).slider( "value" );
			var frames = $( "#frames" ).slider( "value" );
			var cores = $( "#cores" ).slider( "value" );
			var ghz = $( "#ghz" ).slider( "value" );
						
			var pc= cores*ghz;
			var tc= pc*frames*(temp/60);
		
			
			var totalnormal=tc*0.0400;
			var totalalta=tc*0.0620;
			var totalpremium=tc*0.0710;
			
			var totalnormaldto=Math.ceil(totalnormal-(totalnormal*0.15));
			var totalpremiumdto=Math.ceil(totalpremium-(totalpremium*0.15));
			var totalaltadto=Math.ceil(totalalta-(totalalta*0.15));
			
			var totalnormal=Math.ceil(totalnormal);
			var totalpremium=Math.ceil(totalpremium);
			var totalalta=Math.ceil(totalalta);
			
		
			var totalnormaldto=format(totalnormaldto);
			var totalpremiumdto=format(totalpremiumdto);
			var totalaltadto=format(totalaltadto);
			
			var totalnormal=format(totalnormal);
			var totalpremium=format(totalpremium);
			var totalalta=format(totalalta);
			
			
					
						
			var nuevotiempo1=tc/200;
			var nuevotiempo2=tc/2000;
			var nuevotiempo3=tc/4000;
			
			var nuevotiempored1=Math.ceil(nuevotiempo1);
			var nuevotiempored2=Math.ceil(nuevotiempo2);
			var nuevotiempored3=Math.ceil(nuevotiempo3);
			
			$("#tiempo1").text(nuevotiempored1+' Horas');
			$("#tiempo2").text(nuevotiempored2+' Horas');
			$("#tiempo3").text(nuevotiempored3+' Horas');
			
			
			
			$("#totnormal").text(totalnormal+' Euros');
			$("#totalta").text(totalalta+' Euros');
			$("#totpremium").text(totalpremium+' Euros');
			
			$("#totnormaldto").text((totalnormaldto)+' Euros');
			$("#totaltadto").text((totalaltadto)+' Euros');
			$("#totpremiumdto").text((totalpremiumdto)+' Euros');
			
			$("#totnormal2").text(totalnormal+' €');
			$("#totalta2").text(totalalta+' €');
			$("#totpremium2").text(totalpremium+' €');
			//$("#totaltotal").text(total);
			
			/*----visualización de formula----*/
			$( "#tctotal" ).text(tc);
			$( "#tarifatotal" ).text(tarifa);
			$( "#auxitemp1" ).text(nuevotiempo1);
			
			/*------*/
			
		
		//cores*Velocidad_core_media*tarifa(creditos/GHzh)*frames*horas/frame
	}
	
	
	function calculotarifa(){
		var slots = $( "#slots" ).slider( "value" );
		var pathaux="controllers/ajax/calculotarifa.php";
			$.ajax({
				async:false,   
                cache:false,   
				type: "GET",
				url: pathaux,
				data: "slots="+slots,
				success: function(texto){
						$('#tarifaaux').html(texto);
				}
				
			});
			
			//calculototal();
			
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
	color:#ddd;
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
 
 
#cores, #frames,#temp,#slots,#tmax,#ghz {
	float: left;
	width: 250px;
	margin-bottom: 20px;
	margin-left: 10px;
	margin-top:5px;
}

#cores .ui-slider-range,#ghz .ui-slider-range, #frames .ui-slider-range, #temp .ui-slider-range,#slots .ui-slider-range,#tmax .ui-slider-range { 
	background: #47717A;; /* Old browsers */
	

 }


.cajaminidoble{
	display:inline-block;
	width:650px;
	height:auto;
	padding:15px;
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
	color:#fff;
	font:bold 14px arial;
	margin-top:25px;
}
.cajaazul{
	background:#598F94;
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

.cajamini,.cajamini2{
	display:inline-block;
	width:250px;
	height:25%;
	padding:15px;
	margin-left:20px;
	margin-right:20px;
	vertical-align: top;

}
.tarifaup1,.tarifaup2,.tarifaup3,.tarifaupnaranaja,.tarifaupverde1,.tarifaupverde2,.tarifaupverde3,.tarifaupblanco{
padding-top:15px;
background:#81AFB4;
font: bold 14px 'Roboto','Open Sans',arial;
color:#fff;
display:block-line;
text-align:center;
padding-bottom:15px;
}
.tarifaupnaranaja{
background:#FF8C00;
}
.tarifaupverde1{
padding-top:10px;
background:#C9DE36;
font: bold 18px 'Roboto','Open Sans',arial;
}
.tarifaupverde2{
padding-top:10px;
background:#A2B51E;
font: bold 18px 'Roboto','Open Sans',arial;
}
.tarifaupverde3{
padding-top:10px;
background:#51940B;
font: bold 18px 'Roboto','Open Sans',arial;
}
.tarifaupblanco{
padding-top:10px;
background:#fff;
font: bold 18px 'Roboto','Open Sans',arial;
color:#444;
}
.tarifaup2{
background:#598F94;
}

.tarifaup3{
background:#345558;
}
.tarifadown1,.tarifadown2,.tarifadown3{
padding:25px;
background:#fff;
font: 15px 'Roboto','Open Sans',arial;
color:#444;
height:55px;


}
.menumedia{
	display:none;
}
.menumediadesplegado{
	display:none;
}

.tarifadown2{
background:#fff;
}
.tarifadown3{
background:#fff;
}
.muygrande{
font: bold 20px 'Roboto','Open Sans',arial;
color:#fff;
}
.muygrande1{
font: bold 30px 'Roboto','Open Sans',arial;
color:#FF8C00;
}
</style>
</head>

<body>
<div class="cajaminidoble">

	<div class="calculadora">
		
	
		
		<div class="cajaazul">
	<div class="txtazul">Indica los datos de tu equipo y tu proyecto.</div>
			<div class="txtcalcu">Número de Cores en tu equipo:</div>
			<div id="elemcores" class="txtcalcunum">1</div>
			<div style="clear:both;"></div>
			
			<div class="min">Min 1 </div><div id="cores"></div><div class="max">Max 64 </div><div class="eleminput"><input type="text" value="1" name="coreinput" id="coreinput" class="inputscal"></div>
			
			<div style="clear:both;"></div>
			
			<div class="txtcalcu">GHz:</div>
			<div id="elemghz" class="txtcalcunum">1</div>
			<div style="clear:both;"></div>
			
			<div class="min">Min 1 </div><div id="ghz"></div><div class="max">Max 3.6 </div><div class="eleminput"><input type="text" value="1" name="ghzinput" id="ghzinput" class="inputscal"></div>
			
			<div style="clear:both;"></div>
			
			<div class="txtcalcu">Número de Frames de tu proyecto:</div>
			<div id="elemframes" class="txtcalcunum">1</div>
			<div style="clear:both;"></div>
			
			<div class="min">Min 1 </div><div id="frames"></div><div class="max">Max 10.000 </div><div class="eleminput"><input type="text" value="1" name="framesinput" id="framesinput" class="inputscal"></div>
			<div style="clear:both;"></div>
			
			
			<div class="txtcalcu">Tiempo que tardas en renderizar un frame: ( Minutos )</div>
			<div id="elemtemp" class="txtcalcunum">1</div>
			<div style="clear:both;"></div>
			
			<div class="min">Min 1 </div><div id="temp"></div><div class="max">Max 600 </div><div class="eleminput"><input type="text" value="1" name="tempinput" id="tempinput" class="inputscal"></div>
			<div style="clear:both;"></div>
			
		
		</div>

	</div>
	
	<div style="clear:both;"></div>
	</div>

		<div style="clear:both;"></div>

	<div class="cajamini">

		<div class="tarifaup1">
				<strong>1 Slot</strong>
			<div class="muygrande"><span class="valore" id="totnormal">1.2 €</span></div>
			<div class="tiempos" id="tiempo1"></div>
		</div>	
		<!--<div class="tarifadown1">La mejor opción para renderizado en línea económico y altamente competitivo.</div>-->	
		<!--<div class="tarifaupblanco">
				<strong>15% descuento</strong>
			<div class="muygrande1"><span class="valore" id="totnormaldto">1.2 €</span></div>
			
		</div>	-->
	</div>
	<div class="cajamini">
				<div class="tarifaup2">
			
					<strong>10 Slots</strong>
					<div class="muygrande"><span class="valore" id="totalta">1.2 €</span></div>
					<div class="tiempos" id="tiempo2"></div>
				</div>
		<!--<div class="tarifadown2">La mejor opción para empresas. Una combinación económica y de renderizado prioritario.	</div>-->	
		<!--<div class="tarifaupblanco">
				<strong>15% descuento</strong>
			<div class="muygrande1"><span class="valore" id="totaltadto">1.2 €</span></div>
			
		</div>	-->		
	</div>
	<div class="cajamini">
			<div class="tarifaup3">
			
				<strong>20 Slots</strong>
				<div class="muygrande"><span class="valore"  id="totpremium">1.2 €</span></div>
				<div class="tiempos" id="tiempo3"></div>
			</div>	
			<!--<div class="tarifadown3">Siempre primero. Prioridad absoluta en sus proyectos de renderizados. </div>-->	
			<!--<div class="tarifaupblanco">
			
				<strong>15% descuento</strong>
			<div class="muygrande1"><span class="valore" id="totpremiumdto">1.2 €</span></div>
			
		</div>	-->
	</div>
	
	<div style="clear:both;"></div>
	


</body>
</html>