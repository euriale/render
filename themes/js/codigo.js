/* Parallax */
/* 
parallax -&gt; Nunca debe ser 1 ya que entonces el fondo y el frente iran a la misma velocidad. 
Si es mayor de 1 el frente irá más deprisa que el fondo. 
Si es menor de 1 el fondo irá más deprisa que el frente. 
*/
var parallax  = -2;

$(document).ready(function () {
	cabecerablanca();
	$(document).scroll(function () {
	cabeceranaranja();
		s = $(document).scrollTop();
		/* Efecto parallax */
		$(document).scroll(function () {
			s = $(document).scrollTop();
			$("#diapo1").css("top", Math.round(s/parallax)  + "px");
			//var newheight =  parseInt($("#diapo2").css("height").replace("px","")) - Math.round(s/3);	
			//$("#diapo1").css("height", newheight + "px" );
		})

	})
	$( "#cabecera" ).mouseover(function() {
		cabecerablanca();
	});
	$( "#cabecera" ).mouseout(function() {
		cabeceranaranja();
	});
});

function cabecerablanca(){
		$("#cabecera" ).css("background", "#fff");
		$(".drive").css("color", "#FF8C00");
		$(".navigation li").css("color", "#000");
		$("#cabecera" ).css("filter", "alpha(opacity=100)");
		$("#cabecera" ).css("opacity", "1");
		$("#cabecera" ).css("-moz-opacity", "1");
		$("#cabecera" ).css("-webkit-opacity", "1");
}

function cabeceranaranja(){
		$("#cabecera" ).css("background", "#FF8C00");
		$(".drive").css("color", "#fff");
		$("#cabecera" ).css("filter", "alpha(opacity=70)");
		$(".navigation li").css("color", "#fff");
		$("#cabecera" ).css("opacity", "0.7");
		$("#cabecera" ).css("-moz-opacity", "0.7");
		$("#cabecera" ).css("-webkit-opacity", "0.7");
}		