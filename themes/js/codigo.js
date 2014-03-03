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
		var nombre=$(this).val();
		var nombre=$(this).val();
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
	});
