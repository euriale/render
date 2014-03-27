/* Parallax */
/* 
parallax -&gt; Nunca debe ser 1 ya que entonces el fondo y el frente iran a la misma velocidad. 
Si es mayor de 1 el frente ir� m�s deprisa que el fondo. 
Si es menor de 1 el fondo ir� m�s deprisa que el frente. 
*/
var parallax  = -2;


$(document).ready(function () {
		
	/*funcion para parallax*/
	$(document).scroll(function () {
		s = $(document).scrollTop();
		/* Efecto parallax */
		$(document).scroll(function () {
			s = $(document).scrollTop();
			/*------------en la misma direccion--------------*/
			//$("#diapo1").css("top", Math.round(s/parallax)  + "px");
			/*------------en diferente direccion--------------*/
			$("#diapo1").css("background-position", "0px "+(Math.round(s/0.8)+50)  + "px");
			//$("#diapo2").css("background-position", "0px "+(Math.round(s/0.8))  + "px");
			$("#diapo2").css("top", Math.round(s/parallax)  + "px");
		});
	});
	/*--------------Tarifas------------*/
	$("#rad1").click(function() {
		$( this ).toggleClass( "radionoactivo" );
		$("#rad2").toggleClass( "radionoactivo" );
		$(".valord").toggleClass( "noactivo" );
		$(".valore").toggleClass( "noactivo" );

	});
	$("#rad2").click(function() {
		$( this ).toggleClass( "radionoactivo" );
		$("#rad1").toggleClass( "radionoactivo" );
		$(".valore").toggleClass( "noactivo" );
		$(".valord").toggleClass( "noactivo" );
	});
   	/*----------------Colores Men�------------------*/
	$("#menuinicio").mouseover(function(){
		$(".menuinicioa").css("color", "#fff");
	});
	$("#menuinicio").mouseout(function(){
		$(".menuinicioa").css("color", "#FF8C00");
		$("#actitem").css("color", "#FF8C00");
	});
	$("#menuapp").mouseover(function(){
		$(".menuappa").css("color", "#fff");
	});
	$("#menuapp").mouseout(function(){
		$(".menuappa").css("color", "#444");
		$("#actitem").css("color", "#FF8C00");
	});
	$("#menuserv").mouseover(function(){
		$(".menuserva").css("color", "#fff");
	});
	$("#menuserv").mouseout(function(){
		$(".menuserva").css("color", "#444");
		$("#actitem").css("color", "#FF8C00");
	});
	
	$("#menuserv").click(function(){
		var url = $(".menuserva").attr("href");
		$(location).attr('href',url);
	});
	$("#menuapp").click(function(){
		var url = $(".menuappa").attr("href");
		$(location).attr('href',url);
	});
	$("#menuinicio").click(function(){
		var url = $(".menuinicioa").attr("href");
		$(location).attr('href',url);
	});
   /*-------ancla-----*/
            //nos desplazamos entre todos los divs
           
			$('a.ancla').on('click', function(e) {  
				e.preventDefault();
				var $link = $(this);
				var anchor = $link.attr('href');
				$('html, body').stop().animate({
				
				scrollTop: $(anchor).offset().top-110
				}, 1000); 
			}); 
			
	/*-----------Ancla externa----------------*/		
	$(window).bind("load", function () {
          var urlHash = window.location.href.split("#")[1];
		  if (urlHash!=undefined) $('html,body').animate({ scrollTop: $('a[href="#' + urlHash + '"]').offset().top-180}, 1000);
      });
	
	$("input").focus(function(){
		$(this).css("border", "1px solid #5897FB");
	});
	$("textarea").focus(function(){
		$(this).css("border", "1px solid #5897FB");
	});
	$("input").blur(function(){
		$(this).css("border", "1px solid #AAAAAA");
	});
	$("textarea").blur(function(){
		$(this).css("border", "1px solid #AAAAAA");
	});
	
	

	
	
	/*--------Visibilidad formulario contacto de Servicios --------------------*/
	
	$("#motivo").change(function(){
		var motivo=$(this).val();
		
		if (motivo=='informacion_serv') $(".datosconsulta").show();
		if (motivo=='presupuesto_serv'){ 
			$(".datosconsulta").show();
			$(".datostecnicos").show();
		}
		if (motivo=='tecnica_serv'){
			$(".datosconsulta").show();
			$(".datostecnicos").hide();
		}	
		if (motivo=='facturacion_serv'){
			$(".datosconsulta").show();
			$(".datostecnicos").hide();
			
			}
		if (motivo=='sugerencias_serv'){ 
			$(".datosconsulta").show();
			$(".datostecnicos").hide();
		}
	});
	
	/* ---------------- Versiones de las aplicaciones en el formulario contacto------------------*/
	
	$("#aplicacion").change(function () {
		var valor=$(this).val();
		var pathaux="themes/views/home/ajax/versiones.php";
			$.ajax({
				type: "GET",
				url: pathaux,
				data: "idaplicaciones="+valor,
				success: function(texto){
						$('#versiones').html(texto);
				}
			});
	});
	
	/*-----------------Apuntate-----------------*/
	$("#envioapuntate").click(function () {
		var nombreapun=$("#nombreapun").val();
		var emailapun=$("#emailapun").val();
		var pathaux="themes/views/aplicacion/ajax/apuntate.php";
			$.ajax({
				type: "GET",
				url: pathaux,
				data: "nombreapun="+nombreapun+",&emailapun="+emailapun,
				success: function(texto){
						$('.apuntatediv').html(texto);
				}
			});
	});
	
	
	/* -------------visualiza input otras aplicaciones en caso de valor=='otros'----------------*/
	$("#aplicacion").change(function () {
		var valor=$(this).val();
		if (valor=='8' || valor=='9' || valor=='10') $('#otraaplic').show();
		else {
			$('#otraaplic').val('');
			$('#otraaplic').hide();
		}	
	});
	
	/*--------------guardar el cliente en la bbdd y manda correo-----------------*/
	
		
	
	$('#envio').click(function () {
		var nombre=$("#nombre").val();
		var apellidos=$("#apellidos").val();
		var telefono=$("#telefono").val();
		var idaplicacion=$("#aplicacion").val();
		var consulta=$("#consulta").val();
		var email=$("#email").val();
		var empresa=$("#empresa").val();
		var otraaplicacion=$("#otraaplicacion").val();
		var versiones=$("#versionesaux").val();
		var pais=$("#pais").val();
		var motivo=$("#motivo").val();
		var motor=$("#motor").val();
		var plugin=$("#plugin").val();
		var equipo=$("#equipo").val();
		var procesador=$("#procesador").val();
		var numframes=$("#numframes").val();
		var tframes=$("#tframes").val();
		
	
		if (nombre=='') $("#nombre").css("border", "1px solid #FF0000");
		if (email=='') $("#email").css("border", "1px solid #FF0000");
		if (consulta=='') $("#consulta").css("border", "1px solid #FF0000");
		
		if (nombre!='' && email!='' && consulta!=''){
			var pathaux="themes/views/home/ajax/guardarcliente.php";
			$("#respuesta").show();
			
			var topp=$("#contacto").offset().top;
			$("#respuesta").css('top',topp+70);
			$("#respuesta").css('left','40%');
			
			$.ajax({
				type: "GET",
				url: pathaux,
				data: "nombre="+nombre+"&apellidos="+apellidos+"&telefono="+telefono+"&empresa="+empresa+"&idaplicacion="+idaplicacion+"&consulta="+consulta+"&email="+email+"&otraaplicacion="+otraaplicacion+"&versiones="+versiones+"&empresa="+empresa+"&pais="+pais+"&motivo="+motivo+"&motor="+motor+"&plugin="+plugin+"&equipo="+equipo+"&procesador="+procesador+"&numframes="+numframes+"&tframes="+tframes,
				success: function(texto){
						$('#respuestaaux').html(texto);
				}
			});		
		}
	});
	
	$('.iconclose').click(function () {
		$("#respuesta").hide();
		$("#nombre").val('');
		$("#apellidos").val('');
		$("#telefono").val('');
		$("#aplicacion").val('');
		$("#consulta").val('');
		$("#email").val('');
		$("#otraaplicacion").val('');
		$("#versionesaux").val('');
		$("#motivo").val('0');
		$("#empresa").val('');
		$("#motor").val('');
		$("#plugin").val('');
		$("#equipo").val('');
		$("#procesador").val('');
		$("#numframes").val('');
		$("#tframes").val('');
		$(".datostecnicos").hide();
		
	});
	
	
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
			
			var total= format(temp*frames*cores)+' �';
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
			
			var total= format(temp*frames*cores)+' �';
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
			var totalnormal=Math.ceil(totalnormal);
			var totalpremium=Math.ceil(totalpremium);
			var totalalta=Math.ceil(totalalta);
			
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
			
			
			
			$("#totnormal").text(totalnormal+' Cr�ditos');
			$("#totalta").text(totalalta+' Cr�ditos');
			$("#totpremium").text(totalpremium+' Cr�ditos');
			$("#totnormal2").text(totalnormal+' �');
			$("#totalta2").text(totalalta+' �');
			$("#totpremium2").text(totalpremium+' �');
			//$("#totaltotal").text(total);
			
			/*----visualizaci�n de formula----*/
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
    var simb = "."; //�ste es el separador
    valor = valor.toString();
    valor = valor.replace(/\D/g, "");   //�sta expresi�n regular solo permitira ingresar n�meros
    nums = valor.split(""); //Se vacia el valor en un arreglo
    var long = nums.length - 1; // Se saca la longitud del arreglo
    var patron = 3; //Indica cada cuanto se ponen las comas
    var prox = 2; // Indica en que lugar se debe insertar la siguiente coma
    var res = "";
 
    while (long > prox) {
        nums.splice((long - prox),0,simb); //Se agrega la coma
        prox += patron; //Se incrementa la posici�n pr�xima para colocar la coma
    }
 
    for (var i = 0; i <= nums.length-1; i++) {
        res += nums[i]; //Se crea la nueva cadena para devolver el valor formateado
    }
	
    return res;
}	

		




		

		

	
	});
	
	


