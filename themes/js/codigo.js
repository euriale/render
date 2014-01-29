/* Parallax */
/* 
parallax -&gt; Nunca debe ser 1 ya que entonces el fondo y el frente iran a la misma velocidad. 
Si es mayor de 1 el frente irá más deprisa que el fondo. 
Si es menor de 1 el fondo irá más deprisa que el frente. 
*/
var parallax  = -2;

$(document).ready(function () {
	$(document).scroll(function () {
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
		$(this).css("background", "#fff");
		$(".drive").css("color", "#FF8C00");
		$(".navigation li").css("color", "#000");
		$(this).css("filter", "alpha(opacity=100)");
		$(this).css("opacity", "1");
		$(this).css("-moz-opacity", "1");
		$(this).css("-webkit-opacity", "1");


	});
	$( "#cabecera" ).mouseout(function() {
		$(this).css("background", "#FF8C00");
		$(".drive").css("color", "#fff");
		$(this).css("filter", "alpha(opacity=70)");
		$(".navigation li").css("color", "#fff");
		$(this).css("opacity", "0.7");
		$(this).css("-moz-opacity", "0.7");
		$(this).css("-webkit-opacity", "0.7");
	});
});



