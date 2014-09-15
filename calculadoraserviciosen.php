	<html>
	<head>
	<SCRIPT>
	function calcular(){
		var moneda=document.getElementsByName('moneda')[0].checked;
		
		if (moneda==true){
			var monedavalor=1;
			document.getElementById("dol").style.display="none";
			document.getElementById("eur").style.display="inline";
		}	
		else{
			var monedavalor=document.getElementById('valordolar').value;
			document.getElementById("eur").style.display="none";
			document.getElementById("dol").style.display="inline";
		}	

		if(validar()){
			var f = document.getElementById('fCalc');
			var granja = 150;
			var unidad = 0.20;
			var setupminimo = 50;
			var setupmaximo = 100;
			var suTiempo = parseInt(f.segFrame.value) * parseInt(f.frames.value) / 3600;
			var suFactor = parseFloat(f.procesador.value) * parseInt(f.velocidad.value);
			var ratio = suFactor / granja;
			var tiempo = suTiempo * ratio;
			var save = 0; 
			
			if (tiempo == 0)
				save = 100;
			else if (suTiempo == tiempo)
					save = 0;
				else
					save = suTiempo - tiempo;//parseInt(suTiempo/tiempo * 10000) / 100;
			
			var pot = granja * tiempo;
			var money = 0;
			
			if (pot < 500) money = unidad * pot + setupmaximo;
			if (pot >= 500 ) money = unidad * pot + setupminimo;
			if (pot >= 1000) money = unidad * pot;
			
			var potHora = pot * tiempo;
			if(potHora >= 5000 && potHora < 10000)  money = money * 0.95; // 5% dto
			else if(potHora >= 10000 && potHora < 20000)  money = money * 0.9; // 10% dto
			else if(potHora >= 20000 && potHora < 40000)  money = money * 0.8; // 20% dto
			else if(potHora >= 40000 && potHora < 60000)  money = money * 0.7; // 30% dto
			else if(potHora >= 60000)  money = money * 0.6; // 40% dto
			
			f.suTiempo.value = parseInt(suTiempo*100)/100;
			f.nuestroTiempo.value = parseInt(tiempo*100)/100;
			f.porcentaje.value = parseInt(save*100)/100;
			f.potencia.value = parseInt(pot*100)/100;
			//f.coste.value = parseInt(money*100)/100;
			f.coste.value = Math.round (monedavalor * (parseInt(money*100)/100));
		}
	}
	function validar(){
		var f = document.getElementById('fCalc');
		if(f.velocidad.value == ""){
			alert("Indique la velocidad de su procesador.");
			f.velocidad.focus();
			return false;
		}
		if(f.segFrame.value == "" || !isNum(f.segFrame.value)){
			alert("Introduzca el tiempo que tarda un frame de su animación en ser renderizado.");
			f.segFrame.focus();
			return false;
		}
		if(f.frames.value == "" || !isNum(f.frames.value)){
			alert("Introduzca el número de frames que quiere renderizar.");
			f.frames.focus();
			return false;
		}
		return true;
	}
	function isNum(numero){ return (/^([0-9])*$/.test(numero)); }
	</SCRIPT>
	
	<style>
	body{ 
		font-family:arial;
		font-size:15px;
		color:#444;
	}
	.caja{
		background-color:#ddd;
		border:solid 1px #aaa;
		padding:25px;
		max-width:450px;
		min-width:250px;
	}
	.p1{
		color:#47717A;
		font-weight:bold;
	}
	.boton{
		text-align:center;
		width:80px;
		cursor:hand;
		cursor:pointer;
		margin-bottom:25px;
		border:solid 1px #aaa;
		color:#fff;
		background-color:#47717A;
		padding:5px;
	}
	.tit1{
		width:50px;
		width:150px;
	}
	.out{
		background-color:#eee;
		border:solid 1px #aaa;
	}
	p{
	display: inline-block;
	}
	@media handheld, only screen and (max-width: 480px){
		.caja{
			width:400px;
		}
	}
	</style>
	</head>
	<body style="font-family:arial;font-size:15px;color:#444;">
	<FORM ID="fCalc">
	<DIV class="caja">
		<p class="p1">Choose your processor and speed:</p>
		<p>
			<SELECT style="width:200px;text-align:left" NAME="procesador">
				<OPTION VALUE="5.4">Intel XEON 4 QuadCore</OPTION>
				<OPTION VALUE="3">Intel XEON 4 DualCore</OPTION>
				<OPTION VALUE="1.5">Intel XEON 4 SingleCore</OPTION>
				<OPTION VALUE="5.7">Intel Core 2 Quad Extreme QX6xxx</OPTION>
				<OPTION VALUE="6">Intel Core 2 Quad Q6xxx</OPTION>
				<OPTION VALUE="3.3">Intel Core Duo E6xxx</OPTION>
				<OPTION VALUE="3.3">Intel Core 2 Extreme E6xxx</OPTION>
				<OPTION VALUE="3.406">Intel Core Duo T / X2</OPTION>
				<OPTION VALUE="3.406">Intel Core 2 XE / X2</OPTION>
				<OPTION VALUE="3.418">Intel Core 2 Duo</OPTION>
				<OPTION VALUE="2.67">AMD Opteron DualCore</OPTION>
				<OPTION VALUE="1.22">AMD Opteron SingleCore</OPTION>
				<OPTION VALUE="3.03">AMD Athlon 64 X2</OPTION>
				<OPTION VALUE="1.61">AMD Athlon 64 FX</OPTION>
				<OPTION VALUE="1.39">AMD Athlon XP</OPTION>
				<OPTION VALUE="1.81">Intel Pentium D</OPTION>
				<OPTION VALUE="1.11">Intel Pentium 4 EE</OPTION>
				<OPTION VALUE="1">Intel Pentium 4</OPTION>
				
			
					
				<option value="10.3">Intel Core i7 (6 cores)</option>
				<option value="7.8">Intel Core i7 (4 cores)</option>
				<option value="7.8">Intel Core i5 (4 cores)</option>
				<option value="4.1">Intel Core i5 (2 cores)</option>
				<option value="3.7">Intel Core i3 (2 cores)</option>
				<option value="6.0">Intel Core 2 Quad (4 cores)</option>
				<option value="3.3">Intel Core 2 Duo (2 cores)</option>
				<option value="1.7">Intel Pentium D (2 cores)</option>
				<option value="11.0">Intel Xeon 56xx (6 cores)</option>
				<option value="7.5">Intel Xeon 56xx (4 cores)</option>
				<option value="7.02">Intel Xeon 55xx (4 cores)</option>
				<option value="5.4">Intel Xeon 54xx (4 cores)</option>
				<option value="3.0">Intel Xeon (2 cores)</option>
				<option value="1.5">Intel Xeon (1 core)</option>
				<option value="8.7">AMD Phenom II X6</option>
				<option value="6.4">AMD Phenom II X4</option>
				<option value="5.5">AMD Phenom II X3</option>
				<option value="4.4">AMD Phenom II X2</option>
				<option value="5.33">AMD Phenom X4</option>
				<option value="4.0">AMD Phenom X3</option>
				<option value="3.0">AMD Athlon 64 X2</option>
				<option value="2.4">AMD Opteron 2xx</option>
				<option value="1.39">AMD Athlon 64</option>
			</SELECT> at </p>
			<p><INPUT TYPE="text" NAME="velocidad" /> Ghz</p>
		</DIV>
		<P/>
		
		<p class="p1">How much time takes for a single frame to render?&nbsp;&nbsp;&nbsp;</p><p><INPUT TYPE="text" NAME="segFrame" /> seg.</p><br>
		<p class="p1">How many frames will you need?&nbsp;&nbsp;&nbsp;</p><p><INPUT TYPE="text" NAME="frames" /> fr.</p>
		
	</DIV><br>
	<p class="p1">Choose currency</p> &nbsp;&nbsp;&nbsp;&nbsp;
	<p class="p1">€ <INPUT TYPE="radio" NAME="moneda" /> </p>
	<p class="p1">$ <INPUT TYPE="radio" NAME="moneda" checked="true"/></p><br>
	
	<?php 
	
		function conversor_monedas($moneda_origen,$moneda_destino,$cantidad) {
		$get = file_get_contents("http://www.google.com/finance/converter?a=$cantidad&from=$moneda_origen&to=$moneda_destino");
		$get = explode("<span class=bld>",$get);
		$get = explode("</span>",$get[1]);  
		return preg_replace("/[^0-9\.]/", null, $get[0]);
	}
		
	$valordolar=conversor_monedas("EUR","USD",1);
	?>
	<input type="hidden" name="valordolar" id="valordolar" value="<?php echo $valordolar; ?>">
	<INPUT TYPE="button" VALUE="Quote!" onclick="calcular();" class="boton" />
	
	<DIV class="caja">
			
		<p><div class="tit1">Your time:</div> <INPUT TYPE="text" NAME="suTiempo" readonly class="out" /> hours</p>
		<p><div class="tit1">Our time: </div> <INPUT TYPE="text" NAME="nuestroTiempo" readonly class="out" /> hours</p>
		<p><div class="tit1">Save </div> <INPUT TYPE="text" NAME="porcentaje" readonly class="out"  /> processing hours</p>
		<p><div class="tit1">Power required: </div> <INPUT TYPE="text" NAME="potencia" readonly class="out" /> Ghz</p>
		<p><div class="tit1">Project cost: </div> <INPUT TYPE="text" NAME="coste" readonly class="out" /> 	
			<span id="eur" style="display:none;">&euro;</span>
			<span id="dol">$</span>
		</p>
		
		<P/>
		<I><U>Note</U>: This calculation is only an estimation and will be taken as a reference for payment</I>
	</DIV>
	</TD>
</TR>
</TABLE>
</FORM>

</body>
</html>