<div id="tarifas"></div> 
<div class="cajamediapagina">
<div class="titulo">Tarifas </div>  

<div class="cajaminidoble">
<div class="tarifacal">
			Calcula tu presupuesto
		</div>
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
			
			<div class="min">Min 1 </div><div id="temp"></div><div class="max">Max 300 </div><div class="eleminput"><input type="text" value="1" name="tempinput" id="tempinput" class="inputscal"></div>
			<div style="clear:both;"></div>
			
		
		</div>
		

<!--
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
	<div class="txtcalcu" id="caltotal">1</div>
	-->
	</div>
	
	<div style="clear:both;"></div>
	</div>
<div class="cajaminidoble">
<div class="textocontenido">
<p>
 Para hacerte una primera idea de lo que costaría renderizar en nuestras máquinas puedes utilizar nuestra calculadora. <br>
 Visita nuestra APP para ver las ofertas que te ofrecemos. 

 
 
</p>

</div>
</div>
		<div style="clear:both;"></div>

	<div class="cajamini">

		<div class="tarifaup1">
				<strong>Prioridad Normal</strong>
			<div class="muygrande"><span class="valore" id="totnormal">1.2 €</span><span class="valord noactivo">2.1 $</span></div>
			<div class="tiempos" id="tiempo1"></div>
		</div>	
		<div class="tarifadown1">
			La mejor opción para renderizado en línea económico y altamente competitivo.
		</div>	
	</div>
	<div class="cajamini">
				<div class="tarifaup2">
			
					<strong>Prioridad Alta</strong>
					<div class="muygrande"><span class="valore" id="totalta">1.2 €</span><span class="valord noactivo">2.1 $</span></div>
					<div class="tiempos" id="tiempo2"></div>
				</div>
		<div class="tarifadown2">
			La mejor opción para empresas. Una combinación económica y de renderizado prioritario.
		</div>					
	</div>
	<div class="cajamini">
			<div class="tarifaup3">
			
				<strong>Prioridad Premium</strong>
				<div class="muygrande"><span class="valore"  id="totpremium">1.2 €</span><span class="valord noactivo">2.1 $</span></div>
				<div class="tiempos" id="tiempo3"></div>
			</div>	
			<div class="tarifadown3">
				Siempre primero. Prioridad absoluta en sus proyectos de renderizados. 				   
			</div>	
	</div>
	
	<div style="clear:both;"></div>
	
	<!--
Formulas Cliente:<br>
		<div style="display:inline-block">Potencia Cliente(Cores*3GHz)(Pc):</div><div id="pc" style="display:inline-block">3</div><br>
		<div style="display:inline-block">Trabajo Cliente(Pc*Frames*(Tframe/60))(TC):</div><div id="tc" style="display:inline-block">0</div>
		<br><br>
		
		Formulas Summus:<br>
		<div style="display:inline-block">Num horas min.(TC/PotSummus max (200*20)):</div><div id="nhorasmin" style="display:inline-block">3</div><br>
		<div style="display:inline-block">Num horas max.(TC/PotSummus min (200*1)):</div><div id="nhorasmax" style="display:inline-block">3</div><br><br><br>
				
		<br><br>
		Cálculo Precio (créditos):
		
		TC*Tarifa<br>
		<div id="tctotal" style="display:inline-block"></div>*<div id="tarifatotal" style="display:inline-block"></div> 
		= <div id="totaltotal" style="display:inline-block"></div><div id="auxitemp1"></div>
		
		
<br>-->
<div class="abajo"><a href="#faqs" class="ancla"><img src="themes/img/abajo2.jpg"></a></div>
</div>	






