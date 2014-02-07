/* Parallax */
/* 
parallax -&gt; Nunca debe ser 1 ya que entonces el fondo y el frente iran a la misma velocidad. 
Si es mayor de 1 el frente irá más deprisa que el fondo. 
Si es menor de 1 el fondo irá más deprisa que el frente. 
*/
var parallax  = -2;


$(document).ready(function () {
	cabecerablanca();
	resolucion_encaje_robot();
	
	/*funcion para parallax*/
	$(document).scroll(function () {
		cabeceranaranja();
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
	
	
   
   /*-------ancla-----*/
            //nos desplazamos entre todos los divs
           
			$('a.ancla').on('click', function(e) {  
				e.preventDefault();
				var $link = $(this);
				var anchor = $link.attr('href');
				$('html, body').stop().animate({
				
				scrollTop: $(anchor).offset().top
				}, 1000); 
			}); 

/*-------------Funcionalidad FAQs---------------------*/

	$('.faqsask').click(function () {
		var elemento=$(this).attr("id");
		var idask=elemento.substring(3);
		$(".faqanswer").hide();	
		$("#ans"+idask).show();
		$(".pointerfaq").css("background-image", "url(themes/img/redpointer.png)");
		$("#poi"+idask).css("background-image", "url(themes/img/redpointer_down.png)");
	});
	
/*--------------Cabecera-----------------*/	
	
	$( "#cabecera" ).mouseover(function() {
		cabecerablanca();
	});
	
	
	$( "#cabecera" ).mouseout(function() {
		cabeceranaranja();
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
		var otraaplicacion=$("#otraaplicacion").val();
		var versiones=$("#versionesaux").val();
	
		if (nombre=='') $("#nombre").css("border", "1px solid #FF0000");
		if (email=='') $("#email").css("border", "1px solid #FF0000");
		if (consulta=='') $("#consulta").css("border", "1px solid #FF0000");
		
		if (nombre!='' && email!='' && consulta!=''){
			var pathaux="themes/views/home/ajax/guardarcliente.php";
			$("#respuesta").show();
			$.ajax({
				type: "GET",
				url: pathaux,
				data: "nombre="+nombre+"&apellidos="+apellidos+"&telefono="+telefono+"&idaplicacion="+idaplicacion+"&consulta="+consulta+"&email="+email+"&otraaplicacion="+otraaplicacion+"&versiones="+versiones,
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
	});
	});
function cabecerablanca(){
		$("#cabecera" ).css("background", "#fff");
		$(".drive").css("color", "#FF8C00");
		$(".navigation li a").css("color", "#000");
		$(".app a").css("color", "#FF8C00");
		//$("#cabecera" ).css("filter", "alpha(opacity=100)");
		//$("#cabecera" ).css("opacity", "1");
		//$("#cabecera" ).css("-moz-opacity", "1");
		//$("#cabecera" ).css("-webkit-opacity", "1");
}

function cabeceranaranja(){
		$("#cabecera" ).css("background", "#FF8C00");
		$(".drive").css("color", "#fff");		
		$(".navigation li a").css("color", "#000");
		$(".app a").css("color", "#fff");
		//$("#cabecera" ).css("opacity", "0.7");
		//$("#cabecera" ).css("-moz-opacity", "0.7");
		//$("#cabecera" ).css("-webkit-opacity", "0.7");
		//$("#cabecera" ).css("filter", "alpha(opacity=70)");
}	

function resolucion_encaje_robot(){
	var ancho=$(window).width();
	var cajablanca=parseInt((80*ancho)/100);
	var capacidad_para_el_robot=ancho-cajablanca;
	var loquedebemedir=ancho-400;
	if (capacidad_para_el_robot<528) { 
		$(".cajablancabase" ).css("width", loquedebemedir);
		$("#cabecera" ).css("width", loquedebemedir);
	}	

}	