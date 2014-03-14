/* Parallax */
/* 
parallax -&gt; Nunca debe ser 1 ya que entonces el fondo y el frente iran a la misma velocidad. 
Si es mayor de 1 el frente irá más deprisa que el fondo. 
Si es menor de 1 el fondo irá más deprisa que el frente. 
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
   	/*----------------Colores Menú------------------*/
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
		if (motivo=='tecnica_serv') $(".datosconsulta").show();
		if (motivo=='facturacion_serv') $(".datosconsulta").show();
		if (motivo=='sugerencias_serv') $(".datosconsulta").show();
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
		var empresa=$("#empresa").val();
		var pais=$("#pais").val();
		var motivo=$("#motivo").val();
		
	
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
				data: "nombre="+nombre+"&apellidos="+apellidos+"&telefono="+telefono+"&empresa="+empresa+"&idaplicacion="+idaplicacion+"&consulta="+consulta+"&email="+email+"&otraaplicacion="+otraaplicacion+"&versiones="+versiones+"&empresa="+empresa+"&pais="+pais+"&motivo="+motivo,
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
		
	});
	
	
	/*----------------------Calculadora-------------*/
		 $(function() {
		$("#cores").slider({
			orientation: "horizontal",
			range: "min",
			max: 50,
			min:1,
			value:1,
			slide: refreshSwatchCores,
			change: refreshSwatchCores
		});

		$("#frames").slider({
			orientation: "horizontal",
			range: "min",
			min:1,
			max: 50,
 			value: 1,
			slide: refreshSwatchFrames,
			change: refreshSwatchFrames
		});
		$("#temp").slider({
			orientation: "horizontal",
			range: "min",
			max: 50,
			min:1,
			value: 1,
			slide: refreshSwatchTemp,
			change: refreshSwatchTemp
		});
		
		$("#slots").slider({
			orientation: "horizontal",
			range: "min",
			max:20,
			min:1,
			value:20,
			slide: refreshSwatchSlots,
			change: refreshSwatchSlots
		});
		$("#tmax").slider({
			orientation: "horizontal",
			range: "min",
			max: 500,
			min:1,
			value:1,
			slide: refreshSwatchTmax,
			change: refreshSwatchTmax
			
		});
		$( "#cores" ).slider( "value", 1 );
		$( "#frames" ).slider( "value", 1 );
		$( "#temp" ).slider( "value", 1 );
		$( "#slots" ).slider( "value",20 );
		});
		

		
		function refreshSwatchTemp() {
			var temp = $( "#temp" ).slider( "value" );
			var frames = $( "#frames" ).slider( "value" );
			var cores = $( "#cores" ).slider( "value" );
			
			$("#elemtemp").text(temp);
			
			var pc= cores*3;
			var tc= pc*frames*temp;
			$("#tc").text(format(tc));

			var nhorasmin=tc/4000;
			var nhorasminred=Math.ceil(nhorasmin);
			$("#nhorasmin").text(nhorasmin+' '+nhorasminred);
			
			var nhorasmax=tc/200;
			var nhoramaxred=Math.ceil(nhorasmax);
			$("#nhorasmax").text(nhorasmax+' '+nhoramaxred);
			
			
			$( "#tmax" ).slider( "value", nhoramaxred );		
			
			
			var total= format(temp*frames*cores)+' €';
			$("#caltotal").text(total);

			
		}
		function refreshSwatchFrames() {
			var temp = $( "#temp" ).slider( "value" );
			var frames = $( "#frames" ).slider( "value" );
			var cores = $( "#cores" ).slider( "value" );
			
			$("#elemframes").text(frames);
			
			var pc=cores*3;
			var tc= pc*frames*temp;
			$("#tc").text(format(tc));
			
			var nhorasmin=tc/4000;
			var nhorasminred=Math.ceil(nhorasmin);
			$("#nhorasmin").text(nhorasmin+' '+nhorasminred);
			
			var nhorasmax=tc/200;
			var nhoramaxred=Math.ceil(nhorasmax);
			$("#nhorasmax").text(nhorasmax+' '+nhoramaxred);

			
			$( "#tmax" ).slider( "value", nhoramaxred );
			
			var total= format(temp*frames*cores)+' €';
			$("#caltotal").text(total);

			
		}
		function refreshSwatchCores() {
			var temp = $( "#temp" ).slider( "value" );
			var frames = $( "#frames" ).slider( "value" );
			var cores = $( "#cores" ).slider( "value" );
			
			$("#elemcores").text(cores);
			
			var pc=cores*3;
			$("#pc").text(format(pc));
			var tc= pc*frames*temp;
			$("#tc").text(format(tc));
			
			var nhorasmin=tc/4000;
			var nhorasminred=Math.ceil(nhorasmin);
			$("#nhorasmin").text(nhorasmin+' '+nhorasminred);
			
			var nhorasmax=tc/200;
			var nhoramaxred=Math.ceil(nhorasmax);
			$("#nhorasmax").text(nhorasmax+' '+nhoramaxred);
			
			
			$( "#tmax" ).slider( "value", nhoramaxred );
			
			var total= format(temp*frames*cores)+' €';
			$("#caltotaleuro").text(total);
			
		}
		function refreshSwatchTmax() {
			var tmax = $( "#tmax" ).slider( "value" );
			$("#elemtmax").text(tmax);

			var total= format(temp*frames*cores)+' €';
			$("#caltotaleuro").text(total);
		}
		

			function refreshSwatchSlots() {
			var slots = $( "#slots" ).slider( "value" );
			$("#elemslots").text(slots);

			var tc= pc*frames*temp;
			$("#tc").text(format(tc));
			
			var nslots=tc/(slots*200);
			var nslotsred=Math.ceil(nslots);
				
			//$( "#tmax" ).slider( "value", nslots );
			$("#elemslots").text(slots);
			$("#nnslots").text(nslotsred);
			
			var total= format(temp*frames*cores)+' €';
			$("#caltotaleuro").text(total);
		}
	
	});
	
	
function cargaTmax(min,max,valor){
	/*
		$.ajax({
			type: "GET",
			url: "controllers/direct/cargatmax.php",
			data: "min="+min+"&max="+max,
			success: function(texto){
					$('#auxtmax').html(texto);
			}
		});
		*/
		
		$("#tmax").slider("destroy");
		$("#tmax").slider({
			range: "min",
			min: min, // min value
			max: max, // max value
			step: 0.1,
			value: valor, // default value of slider
			slide: function(event, ui) {
				$("#amount").val(ui.value);
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