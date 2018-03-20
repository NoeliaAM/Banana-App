<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Banana App | Electronica</title>
    <?php include('../includes/head.php'); ?>
 	<script src="js/practicas.js"></script>
 	<script src="js/cod_col.js"></script>

 	<script type="text/javascript">
 		function cir(){
		    document.getElementById('cir').style.display = 'block';
		    document.getElementById('res').style.display = 'none';
		    document.getElementById('cird').style.display = 'block';
		    document.getElementById('resd').style.display = 'none';
 		}
 		function res(){
		    document.getElementById('cir').style.display = 'none';
		    document.getElementById('res').style.display = 'block';
		    document.getElementById('cird').style.display = 'none';
		    document.getElementById('resd').style.display = 'block';
 		}
 	</script>
</head>
<body>
    <?php include('../includes/nav.php'); ?>
<div class="card-panel amber lighten-3">
<center>
	<h4><i class="small material-icons">settings_input_composite</i> Electronica</h4>
</center>	
</div>

  <div class="row">
    <div class="col s12">
      <ul class="tabs">
        <li class="tab col s6"><a href="#test1" onClick="cir();">Circuitos</a></li>
        <li class="tab col s6"><a href="#test2" onClick="res();">Codigo de colores (resistencias fijas)</a></li>
      </ul>
    </div>
    <div id="test1" class="col s12">
    	<div class="row">
    		<div class="col s12 m12 l3">
				<ul class="collection with-header">
			        <li class="collection-header"><h5>Practicas</h5></li>
			        <li class="collection-item" onClick="p1();">Circuitos resistivos</li>
			        <li class="collection-item" onClick="p2();">Conexiones de leds</li>
			        <li class="collection-item" onClick="p3();">Carga y descarga de capacitores</li>
			        <li class="collection-item" onClick="p4();">Curva caracteristica (V-I) de diodos</li>
			        <li class="collection-item" onClick="p5();">Rectificacion de media onda</li>
			        <li class="collection-item" onClick="p6();">Puente rectificador</li>
			        <li class="collection-item" onClick="p7();">Transformacion y conversión de voltaje</li>
			        <li class="collection-item" onClick="p8();">Doblador de tension</li>
			        <li class="collection-item" onClick="p9();">Diodo zener</li>
			        <li class="collection-item" onClick="p10();">Polarizacion de transistores</li>
			    </ul>
			</div>

			<div class="col s12 m12 l9">
				<div id="p1" style="display: block;">
					<center><h4><b>Circuitos Resistivos</b></h4></center>
					<center><img class="materialboxed responsive-img" data-caption="Circuito base" width="500" height="900" src="../images/p1_1.PNG"></center>
					<p><b>Descripción: </b> circuito resistivo constituido por una fuente de voltaje, una resistencia de 22kΩ, una resistencia de 10kΩ), medidores de voltaje y amperaje.</p>
				
						<div class="card-panel amber lighten-4">
							<div id="procedimiento1" style="display:none;">
								<p><b>Funcionamiento:</b><br/><br/>
								Herramientas utilizadas:<br/><br>
								• Fuente de voltaje de 10v.<br/>
								• 1 resistencia de 22kΩ. <br>
								• 1 resistencia de 10kΩ.<br/>
								• 1 tierra. <br>
								• 3 voltimetros de corriente directa. <br>
								• 3 amperimetros de corriente directa.<br/><br/>
								
								Proceso:<br/><br>
								1. Calcular resistencia equivalente:<br/> 			
									Ya que las resistencias estan en serie solo se suman, R1+R2 = R<sub>equivalente</sub><br/>
									22kΩ + 10kΩ = 32kΩ<br/><br/>
								2. Calcular corriente:
									<div class="fraction">
									<span class="fup">V</span>
									<span class="bar"></span>
									<span class="fdn">R</span>
									</div> =
									<div class="fraction">
									<span class="fup">10v</span>
									<span class="bar"></span>
									<span class="fdn">32kΩ</span>
									</div> = 0.3124 mA.<br/><br>
								3. Voltaje en R1:<br/>
									V = (I)(R1)<br>
									V = (0.3124 mA)(22k Ω) <br>
									V = 6.8728v <br><br>
								4. Voltaje en R2:<br/>
									V = (I)(R2)<br>
									V = (0.3124 mA)(10k Ω) <br>
									V = 3.124v <br><br>

								</p>
								<div class="divider black"></div>
							</div>

							<p><b>Resultados:</b></p>
								<div class="row">
								<div class="col s12 m6 l6" align="center">
									<b>Voltaje:</b><br/>• R1: 6.87v<br/>• R2: 3.13v<br/><br/><b>Amperes:</b><br/>• R1: 0.31 A<br/>• R2: 0.31 A
								</div>
								<div class="col s12 m6 l6">
									<center><img class="materialboxed responsive-img" data-caption="Circuito en funcionamiento" width="250" height="600" src="../images/p1_2.PNG"></center>	
								</div>
								</div>
							
							<a class="right-align" onClick="o_f1();" id="o_f1" style="display:none;">Ocultar funcionamiento</a>	
							<a class="right-align" onClick="m_f1();" id="m_f1" style="display:block;">Mostrar funcionamiento</a>
						</div>
				</div>
				<div id="p2" style="display: none;">
					<center><h4><b>Conexiones de leds</b></h4></center>
					<div class="row">
						<div class="col s12 m12 l6">
							<h5><b>Leds en serie</b></h5>
							<center><img class="materialboxed responsive-img" data-caption="Circuito base" src="../images/p2_1.PNG"></center>
							<p><b>Descripción: </b>circuito de leds en serie constituido por una fuente de voltaje, una resietencia de 200Ω, tres leds (azul, verde y rojo), y medidores de voltaje.</p>

								<div class="card-panel amber lighten-4">
									<div id="procedimiento2_1" style="display:none;">
										<p><b>Funcionamiento:</b><br/><br/>
										Herramientas utilizadas:<br/><br>
										• Fuente de voltaje de 10v.<br/>
										• Resistencia de 200 Ω.<br>
										• 1 led azul.<br/>
										• 1 led verde.<br/>
										• 1 led rojo.<br/><br>

										Proceso:<br/><br>
										1. Calcular voltaje resultante:<br>
										V<sub>resultante</sub> = V<sub>fuente</sub>-(V<sub>resistencias</sub>)<br>
										V<sub>resultante</sub> = 10v - (2v + 2v + 2v)<br>
										V<sub>resultante</sub> = 10v - 6v<br>
										V<sub>resultante</sub> = 4v<br><br>
										2. Corriente: <br>
										La corriente promedio de un led es 0.02 A, y ya que se encuentran en serie la corriente en la misma.<br><br>
										3. Calcular el valor de la resistencia ideal:
											<div class="fraction">
											<span class="fup">V<sub>resultante</sub></span>
											<span class="bar"></span>
											<span class="fdn">I</span>
											</div> =
											<div class="fraction">
											<span class="fup">4v</span>
											<span class="bar"></span>
											<span class="fdn">0.02 A</span>
											</div> = 200Ω.<br>
											P=(V<sub>resultante</sub>)(I)<br>
											P=(4v)(0.02 A)<br>
											P=0.08 W <br>
										</p>
									<div class="divider black"></div>
									</div>

									<p><b>Resultados:</b></p>
										<p align="center"><b>R1 =</b> 200Ω a 0.08 W</p>
										<center><img class="materialboxed responsive-img" data-caption="Circuito en funcionamiento" src="../images/p2_3.PNG"></center><br>
									<a class="right-align" onClick="o_f2_1();" id="o_f2_1" style="display:none;">Ocultar funcionamiento</a>	
									<a class="right-align" onClick="m_f2_1();" id="m_f2_1" style="display:block;">Mostrar funcionamiento</a>
								</div>
						</div>
						<div class="col s12 m12 l6">
							<h5><b>Leds en paralelo</b></h5>
							<center><img class="materialboxed responsive-img" data-caption="Circuito base" src="../images/p2_2.PNG"></center>
							<p><b>Descripción: </b>circuito de leds en paralelo constituido por una fuente de voltaje, 1 resistencia de 50Ω, 2 resistencias de 70Ω y 17 leds (amarillo, azul y verde)</p>

								<div class="card-panel amber lighten-4">
									<div id="procedimiento2_2" style="display:none;">
										<p><b>Funcionamiento:</b><br/><br/>
										Herramientas utilizadas:<br/><br>
										• Fuente de voltaje de 9v.<br>
										• 1 resistencia de 50Ω. <br>
										• 2 resistencias de 70Ω.<br>
										• 6 leds amarillos.<br>
										• 3 leds azules.<br>
										• 8 leds verdes.<br> <br>

										Proceso:<br/><br>
										Se observan 3 tiras de leds en paralelo, alimentadas por un fuente de voltaje de 9v, dos de ellas son iguales.<br><br>
										1. Calcular voltaje resultante de la primer tira:<br>
										Ya que el circuito esta en paralelo solo se coloca el voltaje equivalente a un led.<br>
										V<sub>resultante</sub> = V<sub>fuente</sub> - V<sub>resistencias</sub><br>
										V<sub>resultante</sub> = 9v - 2v<br>
										V<sub>resultante</sub> = 7v<br><br>
										2. Calcular corriente de la primer tira: <br>
										La corriente promedio de un led es 0.02 A, y ya que se encuentran en paralelo la corriente se suma.<br>
										I = (0.02 A)(No. de leds)<br>
										I = (0.02 A)(7)
										I = 0.14 A.<br><br>
										3. Calcular el valor de la resistencia ideal para la primer tira:
											<div class="fraction">
											<span class="fup">V<sub>resultante</sub></span>
											<span class="bar"></span>
											<span class="fdn">I</span>
											</div> =
											<div class="fraction">
											<span class="fup">7v</span>
											<span class="bar"></span>
											<span class="fdn">0.14 A</span>
											</div> = 50Ω.<br>
											P=(V<sub>resultante</sub>)(I)<br>
											P=(7v)(0.14 A)<br>
											P=0.98 W. <br><br>
										4. Calcular voltaje resultante de la segunda y tercer tira:<br>
										Ya que el circuito esta en paralelo solo se coloca el voltaje equivalente a un led.<br>
										V<sub>resultante</sub> = V<sub>fuente</sub> - V<sub>resistencias</sub><br>
										V<sub>resultante</sub> = 9v - 2v<br>
										V<sub>resultante</sub> = 7v<br><br>
										5. Calcular corriente de la primer tira: <br>
										La corriente promedio de un led es 0.02 A, y ya que se encuentran en paralelo la corriente se suma.<br>
										I = (0.02 A)(No. de leds)<br>
										I = (0.02 A)(5)
										I = 0.1 A.<br><br>
										6. Calcular el valor de la resistencia ideal para la segunda y tercer tira:
											<div class="fraction">
											<span class="fup">V<sub>resultante</sub></span>
											<span class="bar"></span>
											<span class="fdn">I</span>
											</div> =
											<div class="fraction">
											<span class="fup">7v</span>
											<span class="bar"></span>
											<span class="fdn">0.1 A</span>
											</div> = 70Ω.<br>
											P=(V<sub>resultante</sub>)(I)<br>
											P=(7v)(0.1 A)<br>
											P=0.7 W<br>

										</p>
									<div class="divider black"></div>
									</div>

									<p><b>Resultados:</b></p>
										<p align="center"><b>R1 =</b> 50Ω a 0.98 W.<br><b>R2 y R3 =</b> 70Ω a 0.7 W.</p>
										<center><img class="materialboxed responsive-img" data-caption="Circuito en funcionamiento" src="../images/p2_4.PNG"></center><br>	
									<a class="right-align" onClick="o_f2_2();" id="o_f2_2" style="display:none;">Ocultar funcionamiento</a>	
									<a class="right-align" onClick="m_f2_2();" id="m_f2_2" style="display:block;">Mostrar funcionamiento</a>
								</div>						
						</div>
					</div>
				</div>
				<div id="p3" style="display: none;">
					<center><h4><b>Carga y descarga de capacitores</b></h4></center>
					<div class="row">
						<center><img class="materialboxed responsive-img" data-caption="Circuito base" width="700" src="../images/p3_1.PNG"></center>
						<p><b>Descripción: </b>circuito constituido por una bateria, una resietencia de 330Ω, dos switch, un capacitor de 1000μF, una lampara, medidores de voltaje y amperes.</p>

							<div class="card-panel amber lighten-4">
								<div id="procedimiento3_1" style="display:none;">
									<p><b>Funcionamiento:</b><br/><br/>
									Herramientas utilizadas:<br/><br>
									• Bateria de 12v.<br/>
									• 1 capacitor de 1000μF.<br>
									• 1 lampara.<br>
									• 1 resistencia de 330Ω. <br>
									• 1 swiches. <br>
									• 2 voltimetros de corriente directa. <br>
									• 2 amperimetros de corriente directa.<br/><br/>

									Proceso:<br/><br>
									1. Cuando los dos switches estan abiertos, no hay corriente ni voltaje.<br><br>
									2. Cuando se cierra el switch 1 se comienza a cargar el capacitor.<br>
									En ese momento ya se registra una corriente en la primera malla del circuito, el voltaje en el capacitor ya que esta totalmente cargado llega hasta los 12v que habia en la bateria.<br>
									<img class="materialboxed responsive-img" data-caption="Circuito en funcionamiento" width="250" height="600" src="../images/p3_5.PNG"><br><br>
									3. Ya que esta totalmente cargado el capacitor, se abre el switch 1 e inmediatamente se cierra el switch 2.<br>
									Ahora se registra corriente en la segunda malla del circuito y la lampara se enciende, y dura encendida hasta que el capacitor se descarga.<br>
									<img class="materialboxed responsive-img" data-caption="Circuito en funcionamiento" width="250" src="../images/p3_6.PNG"><br>
									</p>
								<div class="divider black"></div>
								</div>

								<p><b>Resultados:</b></p>
									<center><img class="materialboxed responsive-img" data-caption="Circuito en funcionamiento" width="700" src="../images/p3_6.PNG"></center>	
								<a class="right-align" onClick="o_f3_1();" id="o_f3_1" style="display:none;">Ocultar funcionamiento</a>	
								<a class="right-align" onClick="m_f3_1();" id="m_f3_1" style="display:block;">Mostrar funcionamiento</a>
							</div>
						<div class="col s12 m12 l6">
							<center><img class="materialboxed responsive-img" data-caption="Circuito base" width="400" src="../images/p3_2.PNG"></center>
							<p><b>Descripción: </b>circuito constituido por una fuente de voltaje, una resietencia de 200kΩ, un switch, una tierra, un capacitor de 1μF, y un osciloscopio para observar la señal generada.</p>

								<div class="card-panel amber lighten-4">
									<div id="procedimiento3_2" style="display:none;">
										<p><b>Funcionamiento:</b><br/><br/>
										Herramientas utilizadas:<br/><br>
										• Fuente de voltaje de 10v.<br/>
										• 1 switch.<br>
										• 1 tierra.<br>
										• 1 capacitor de 1μF.<br>
										• 1 resistencia de 200kΩ.<br>
										• 1 osciloscopio.<br><br> 
										Proceso:<br/><br>
										1. Al poner el circuito en marcha se activa el osciloscopio y asi se observa como cambia la señal al cargarse y descargarse el capacitor mediante el movimiento del switch.<br>
										</p>
									<div class="divider black"></div>
									</div>

									<p><b>Resultados:</b></p>
										<center><video class="responsive-video" controls><source src="../images/p3_4.mp4" type="video/mp4"></video></center><br>
									<a class="right-align" onClick="o_f3_2();" id="o_f3_2" style="display:none;">Ocultar funcionamiento</a>	
									<a class="right-align" onClick="m_f3_2();" id="m_f3_2" style="display:block;">Mostrar funcionamiento</a>
								</div>
						</div>
						<div class="col s12 m12 l6">
							<center><img class="materialboxed responsive-img" data-caption="Circuito base" width="200" src="../images/p3_3.PNG"></center>
							<p><b>Descripción: </b>circuito constituido por una fuente de voltaje, una resietencia de 150kΩ, un switch, una tierra, un capacitor de 330μF, y un voltimetro de corriente directa para observer el voltaje que se almacena en el capacitor.</p>

								<div class="card-panel amber lighten-4">
									<div id="procedimiento3_3" style="display:none;">
										<p><b>Funcionamiento:</b><br/><br/>
										Herramientas utilizadas:<br/><br>
										• Fuente de voltaje de 3v.<br>
										• 1 switch.<br>
										• 1 tierra.<br>
										• 1 resistencia de 150kΩ.<br>
										• 1 capacitor de 330μF.<br>
										• 1 voltimetro de corriente directa.<br><br>
										
										Proceso:<br/><br>
										1. Al poner el circuito en marcha se observa en el voltimentro como el voltaje almacenado en el capacitor aumenta hasta ser igual al de la fuente.<br><br>
										2. Se mueve el siwtch de posicion y se observe en el voltimentro como el voltaje en el capacitor disminuye hasta volver a ser cero.<br>
										</p>
									<div class="divider black"></div>
									</div>
									<p><b>Resultados:</b></p>
										<div class="row">
											<div class="col s12 m6 l6"><center><h6><b>Carga</b></h6><img class="materialboxed responsive-img" data-caption="Circuito en funcionamiento" width="250" height="600" src="../images/p3_7.PNG"></center></div>
											<div class="col s12 m6 l6"><center><h6><b>Descarga</b></h6><img class="materialboxed responsive-img" data-caption="Circuito en funcionamiento" width="250" height="600" src="../images/p3_8.PNG"></center></div>
										</div><br>	
									<a class="right-align" onClick="o_f3_3();" id="o_f3_3" style="display:none;">Ocultar funcionamiento</a>	
									<a class="right-align" onClick="m_f3_3();" id="m_f3_3" style="display:block;">Mostrar funcionamiento</a>
								</div>						
						</div>
					</div>					
				</div>
				<div id="p4" style="display: none;">
					<center><h4><b>Curva caracteristica (V-I) de diodos</b></h4></center>
					<div class="row">
						<div class="col s12 m12 l6">
							<h5><b>Polarizacion directa</b></h5>
							<center><img class="materialboxed responsive-img" data-caption="Circuito base" src="../images/p4_1.PNG"></center>
							<p><b>Descripción: </b>circuito constituido por una bateria, un diodo polarizado directamente, una resistencia de 220Ω, y medidores de voltaje y amperaje.</p>

								<div class="card-panel amber lighten-4">
									<div id="procedimiento4_1" style="display:none;">
										<p><b>Funcionamiento:</b><br/><br/>
										Herramientas utilizadas:<br/><br>
										• Bateria con variacion de voltaje entre -5v y 5v.<br/>
										• 1 Diodo polarizado directamente.<br>
										• 1 resistencia de 220Ω.<br>
										• 2 voltimentros de corriente directa.<br>
										• 1 amperimentro de corriente directa.<br><br> 
										Proceso:<br/><br>
										1. Se hicieron mediciones del voltaje del diodo, voltaje de la resistencia, corriente y corriente en la resistencia.<br>
										Dichas mediciones se hicieron con una variacion de voltaje de -5v a 5v.<br>
									<div class="divider black"></div>
									</div>

									<p><b>Resultados:</b></p>
										<center>
											<table class="tableizer-table responsive-table centered striped">
												<thead>
													<tr class="tableizer-firstrow">
														<th>F(V)</th>
														<th>Vd(V)</th>
														<th>I0(mA)</th>
														<th>VR(V)</th>
														<th>IR=VR/R</th>
													</tr>
												</thead>
												<tbody>
												 <tr><td>-5</td><td>-5</td><td>0</td><td>0</td><td>0</td></tr>
												 <tr><td>-4,8</td><td>-4,8</td><td>0</td><td>0</td><td>0</td></tr>
												 <tr><td>-4,6</td><td>-4,6</td><td>0</td><td>0</td><td>0</td></tr>
												 <tr><td>-4,4</td><td>-4,4</td><td>0</td><td>0</td><td>0</td></tr>
												 <tr><td>-4,2</td><td>-4,2</td><td>0</td><td>0</td><td>0</td></tr>
												 <tr><td>-4</td><td>-4</td><td>0</td><td>0</td><td>0</td></tr>
												 <tr><td>-3,8</td><td>-3,8</td><td>0</td><td>0</td><td>0</td></tr>
												 <tr><td>-3,6</td><td>-3,6</td><td>0</td><td>0</td><td>0</td></tr>
												 <tr><td>-3,4</td><td>-3,4</td><td>0</td><td>0</td><td>0</td></tr>
												 <tr><td>-3,2</td><td>-3,2</td><td>0</td><td>0</td><td>0</td></tr>
												 <tr><td>-3</td><td>-3</td><td>0</td><td>0</td><td>0</td></tr>
												 <tr><td>-2,8</td><td>-2,8</td><td>0</td><td>0</td><td>0</td></tr>
												 <tr><td>-2,6</td><td>-2,6</td><td>0</td><td>0</td><td>0</td></tr>
												 <tr><td>-2,4</td><td>-2,4</td><td>0</td><td>0</td><td>0</td></tr>
												 <tr><td>-2,2</td><td>-2,2</td><td>0</td><td>0</td><td>0</td></tr>
												 <tr><td>-2</td><td>-2</td><td>0</td><td>0</td><td>0</td></tr>
												 <tr><td>-1,8</td><td>-1,8</td><td>0</td><td>0</td><td>0</td></tr>
												 <tr><td>-1,6</td><td>-1,6</td><td>0</td><td>0</td><td>0</td></tr>
												 <tr><td>-1,4</td><td>-1,4</td><td>0</td><td>0</td><td>0</td></tr>
												 <tr><td>-1,2</td><td>-1,2</td><td>0</td><td>0</td><td>0</td></tr>
												 <tr><td>-1</td><td>-1</td><td>0</td><td>0</td><td>0</td></tr>
												 <tr><td>-0,8</td><td>-0,8</td><td>0</td><td>0</td><td>0</td></tr>
												 <tr><td>-0,6</td><td>-0,6</td><td>0</td><td>0</td><td>0</td></tr>
												 <tr><td>-0,4</td><td>-0,4</td><td>0</td><td>0</td><td>0</td></tr>
												 <tr><td>-0,2</td><td>-0,2</td><td>0</td><td>0</td><td>0</td></tr>
												 <tr><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td></tr>
												 <tr><td>0,2</td><td>0,2</td><td>0</td><td>0</td><td>0</td></tr>
												 <tr><td>0,4</td><td>0,4</td><td>0</td><td>0</td><td>0</td></tr>
												 <tr><td>0,6</td><td>0,59</td><td>0,06</td><td>0,01</td><td>4,54545E-05</td></tr>
												 <tr><td>0,8</td><td>0,65</td><td>0,7</td><td>0,15</td><td>0,000681818</td></tr>
												 <tr><td>1</td><td>0,67</td><td>1,52</td><td>0,33</td><td>0,0015</td></tr>
												 <tr><td>1,2</td><td>0,68</td><td>2,38</td><td>0,52</td><td>0,002363636</td></tr>
												 <tr><td>1,4</td><td>0,69</td><td>3,25</td><td>0,71</td><td>0,003227273</td></tr>
												 <tr><td>1,6</td><td>0,69</td><td>4,13</td><td>0,91</td><td>0,004136364</td></tr>
												 <tr><td>1,8</td><td>0,7</td><td>5,01</td><td>1,1</td><td>0,005</td></tr>
												 <tr><td>2</td><td>0,7</td><td>5,9</td><td>1,3</td><td>0,005909091</td></tr>
												 <tr><td>2,2</td><td>0,7</td><td>6,8</td><td>1,5</td><td>0,006818182</td></tr>
												 <tr><td>2,4</td><td>0,71</td><td>7,69</td><td>1,69</td><td>0,007681818</td></tr>
												 <tr><td>2,6</td><td>0,71</td><td>8,59</td><td>1,89</td><td>0,008590909</td></tr>
												 <tr><td>2,8</td><td>0,71</td><td>9,49</td><td>2,09</td><td>0,0095</td></tr>
												 <tr><td>3</td><td>0,72</td><td>10,4</td><td>2,28</td><td>0,010363636</td></tr>
												 <tr><td>3,2</td><td>0,72</td><td>11,3</td><td>2,48</td><td>0,011272727</td></tr>
												 <tr><td>3,4</td><td>0,72</td><td>12,2</td><td>2,68</td><td>0,012181818</td></tr>
												 <tr><td>3,6</td><td>0,72</td><td>13,1</td><td>2,88</td><td>0,013090909</td></tr>
												 <tr><td>3,8</td><td>0,72</td><td>14</td><td>3,08</td><td>0,014</td></tr>
												 <tr><td>4</td><td>0,72</td><td>14,9</td><td>3,28</td><td>0,014909091</td></tr>
												 <tr><td>4,2</td><td>0,73</td><td>15,8</td><td>3,47</td><td>0,015772727</td></tr>
												 <tr><td>4,4</td><td>0,73</td><td>46,7</td><td>3,67</td><td>0,016681818</td></tr>
												 <tr><td>4,6</td><td>0,73</td><td>17,6</td><td>3,87</td><td>0,017590909</td></tr>
												 <tr><td>4,8</td><td>0,73</td><td>18,5</td><td>4,07</td><td>0,0185</td></tr>
												 <tr><td>5</td><td>0,73</td><td>19,4</td><td>4,27</td><td>0,019409091</td></tr>
												</tbody>
											</table><br>

											<img class="materialboxed responsive-img" data-caption="Curva caracteristica" src="../images/p4_3.PNG">
										</center><br>
									<a class="right-align" onClick="o_f4_1();" id="o_f4_1" style="display:none;">Ocultar funcionamiento</a>	
									<a class="right-align" onClick="m_f4_1();" id="m_f4_1" style="display:block;">Mostrar funcionamiento</a>
								</div>
						</div>
						<div class="col s12 m12 l6">
							<h5><b>Polarizacion inversa</b></h5>
							<center><img class="materialboxed responsive-img" data-caption="Circuito base" src="../images/p4_2.PNG"></center>
							<p><b>Descripción: </b>circuito constituido por una bateria, un diodo polarizado inversamente, una resistencia de 220Ω, y medidores de voltaje y amperaje.</p>

								<div class="card-panel amber lighten-4">
									<div id="procedimiento4_2" style="display:none;">
										<p><b>Funcionamiento:</b><br/><br/>
										Herramientas utilizadas:<br/><br>
										• Bateria con variacion de voltaje entre -5v y 5v.<br/>
										• 1 Diodo polarizado inversamente.<br>
										• 1 resistencia de 220Ω.<br>
										• 2 voltimentros de corriente directa.<br>
										• 1 amperimentro de corriente directa.<br><br> 
										Proceso:<br/><br>
										1. Se hicieron mediciones del voltaje del diodo, voltaje de la resistencia, corriente y corriente en la resistencia.<br>
										Dichas mediciones se hicieron con una variacion de voltaje de -5v a 5v.<br>
										</p>
									<div class="divider black"></div>
									</div>

									<p><b>Resultados:</b></p>
										<center>
											<table class="tableizer-table responsive-table centered striped">
												<thead>
													<tr class="tableizer-firstrow">
														<th>F(V)</th>
														<th>Vd(V)</th>
														<th>I0(mA)</th>
														<th>VR(V)</th>
														<th>IR=VR/R</th>
													</tr>
												</thead>
												<tbody>
													 <tr><td>-5</td><td>-0,73</td><td>-19,4</td><td>-4,27</td><td>-0,019409091</td></tr>
													 <tr><td>-4,8</td><td>-0,73</td><td>-18,5</td><td>-4,07</td><td>-0,0185</td></tr>
													 <tr><td>-4,6</td><td>-0,73</td><td>-17,6</td><td>-3,87</td><td>-0,017590909</td></tr>
													 <tr><td>-4,4</td><td>-0,73</td><td>-16,7</td><td>-3,67</td><td>-0,016681818</td></tr>
													 <tr><td>-4,2</td><td>-0,73</td><td>-15,8</td><td>-3,47</td><td>-0,015772727</td></tr>
													 <tr><td>-4</td><td>-0,72</td><td>-14,9</td><td>-3,28</td><td>-0,014909091</td></tr>
													 <tr><td>-3,8</td><td>-0,72</td><td>-14</td><td>-3,08</td><td>-0,014</td></tr>
													 <tr><td>-3,6</td><td>-0,72</td><td>-13,1</td><td>-2,88</td><td>-0,013090909</td></tr>
													 <tr><td>-3,4</td><td>-0,72</td><td>-12,2</td><td>-2,68</td><td>-0,012181818</td></tr>
													 <tr><td>-3,2</td><td>-0,72</td><td>-11,3</td><td>-2,48</td><td>-0,011272727</td></tr>
													 <tr><td>-3</td><td>-0,72</td><td>-10,4</td><td>-2,28</td><td>-0,010363636</td></tr>
													 <tr><td>-2,8</td><td>-0,71</td><td>-9,49</td><td>-2,09</td><td>-0,0095</td></tr>
													 <tr><td>-2,6</td><td>-0,71</td><td>-8,59</td><td>-1,89</td><td>-0,008590909</td></tr>
													 <tr><td>-2,4</td><td>-0,71</td><td>-7,69</td><td>-1,69</td><td>-0,007681818</td></tr>
													 <tr><td>-2,2</td><td>-0,7</td><td>-6,8</td><td>-1,5</td><td>-0,006818182</td></tr>
													 <tr><td>-2</td><td>-0,7</td><td>-5,9</td><td>-1,3</td><td>-0,005909091</td></tr>
													 <tr><td>-1,8</td><td>-0,7</td><td>-5,01</td><td>-1,1</td><td>-0,005</td></tr>
													 <tr><td>-1,6</td><td>-0,69</td><td>-4,13</td><td>-0,91</td><td>-0,004136364</td></tr>
													 <tr><td>-1,4</td><td>-0,69</td><td>-3,25</td><td>-0,71</td><td>-0,003227273</td></tr>
													 <tr><td>-1,2</td><td>-0,68</td><td>-2,38</td><td>-0,52</td><td>-0,002363636</td></tr>
													 <tr><td>-1</td><td>-0,67</td><td>-1,52</td><td>-0,33</td><td>-0,0015</td></tr>
													 <tr><td>-0,8</td><td>-0,65</td><td>-0,7</td><td>-0,15</td><td>-0,000681818</td></tr>
													 <tr><td>-0,6</td><td>-0,59</td><td>-0,06</td><td>-0,01</td><td>-4,54545E-05</td></tr>
													 <tr><td>-0,4</td><td>-0,4</td><td>0</td><td>0</td><td>0</td></tr>
													 <tr><td>-0,2</td><td>-0,2</td><td>0</td><td>0</td><td>0</td></tr>
													 <tr><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td></tr>
													 <tr><td>0,2</td><td>0,2</td><td>0</td><td>0</td><td>0</td></tr>
													 <tr><td>0,4</td><td>0,4</td><td>0</td><td>0</td><td>0</td></tr>
													 <tr><td>0,6</td><td>0,6</td><td>0</td><td>0</td><td>0</td></tr>
													 <tr><td>0,8</td><td>0,8</td><td>0</td><td>0</td><td>0</td></tr>
													 <tr><td>1</td><td>1</td><td>0</td><td>0</td><td>0</td></tr>
													 <tr><td>1,2</td><td>1,2</td><td>0</td><td>0</td><td>0</td></tr>
													 <tr><td>1,4</td><td>1,4</td><td>0</td><td>0</td><td>0</td></tr>
													 <tr><td>1,6</td><td>1,6</td><td>0</td><td>0</td><td>0</td></tr>
													 <tr><td>1,8</td><td>1,8</td><td>0</td><td>0</td><td>0</td></tr>
													 <tr><td>2</td><td>2</td><td>0</td><td>0</td><td>0</td></tr>
													 <tr><td>2,2</td><td>2,2</td><td>0</td><td>0</td><td>0</td></tr>
													 <tr><td>2,4</td><td>2,4</td><td>0</td><td>0</td><td>0</td></tr>
													 <tr><td>2,6</td><td>2,6</td><td>0</td><td>0</td><td>0</td></tr>
													 <tr><td>2,8</td><td>2,8</td><td>0</td><td>0</td><td>0</td></tr>
													 <tr><td>3</td><td>3</td><td>0</td><td>0</td><td>0</td></tr>
													 <tr><td>3,2</td><td>3,2</td><td>0</td><td>0</td><td>0</td></tr>
													 <tr><td>3,4</td><td>3,4</td><td>0</td><td>0</td><td>0</td></tr>
													 <tr><td>3,6</td><td>3,6</td><td>0</td><td>0</td><td>0</td></tr>
													 <tr><td>3,8</td><td>3,8</td><td>0</td><td>0</td><td>0</td></tr>
													 <tr><td>4</td><td>4</td><td>0</td><td>0</td><td>0</td></tr>
													 <tr><td>4,2</td><td>4,2</td><td>0</td><td>0</td><td>0</td></tr>
													 <tr><td>4,4</td><td>4,4</td><td>0</td><td>0</td><td>0</td></tr>
													 <tr><td>4,6</td><td>4,6</td><td>0</td><td>0</td><td>0</td></tr>
													 <tr><td>4,8</td><td>4,8</td><td>0</td><td>0</td><td>0</td></tr>
													 <tr><td>5</td><td>5</td><td>0</td><td>0</td><td>0</td></tr>
												</tbody>
											</table><br>

											<img class="materialboxed responsive-img" data-caption="Curva caracteristica" src="../images/p4_4.PNG">
										</center><br>	
									<a class="right-align" onClick="o_f4_2();" id="o_f4_2" style="display:none;">Ocultar funcionamiento</a>	
									<a class="right-align" onClick="m_f4_2();" id="m_f4_2" style="display:block;">Mostrar funcionamiento</a>
								</div>						
						</div>
					</div>
				</div>
				<div id="p5" style="display: none;">
					<div class="row">
						<center><h4><b>Rectificacion de media onda</b></h4></center>
						<div class="col s12 m12 l6">
							<h5><b>Polarizacion directa</b></h5>
							<center><img class="materialboxed responsive-img" data-caption="Circuito base" src="../images/p5_1.PNG"></center>
							<p><b>Descripción: </b>circuito constituido por una fuente de voltaje alterno, una resistencia de 50Ω, una tierra, un diodo polarizado directamente, y un osciloscopio para observar la señal generada.</p>

								<div class="card-panel amber lighten-4">
									<div id="procedimiento5_1" style="display:none;">
										<p><b>Funcionamiento:</b><br/><br/>
										Herramientas utilizadas:<br/><br>
										• Fuente de voltaje alterno de 6v.<br/>
										• 1 tierra.<br>
										• 1 diodo polarizador directamente.<br>
										• 1 resistencia de 50Ω.<br>
										• 1 osciloscopio.<br><br> 
										Proceso:<br/><br>
										1. Al poner el circuito en marcha se activa el osciloscopio y asi se observan dos señales, la señal color amarilla es la no rectificada y la azul la rectificada directamente.<br>
										</p>
									<div class="divider black"></div>
									</div>

									<p><b>Resultados:</b></p>
										<center><video class="responsive-video" controls><source src="../images/p5_3.mp4" type="video/mp4"></video></center><br>
									<a class="right-align" onClick="o_f5_1();" id="o_f5_1" style="display:none;">Ocultar funcionamiento</a>	
									<a class="right-align" onClick="m_f5_1();" id="m_f5_1" style="display:block;">Mostrar funcionamiento</a>
								</div>
						</div>
						<div class="col s12 m12 l6">
							<h5><b>Polarizacion inversa</b></h5>
							<center><img class="materialboxed responsive-img" data-caption="Circuito base" src="../images/p5_2.PNG"></center>
							<p><b>Descripción: </b>circuito constituido por una fuente de voltaje alterno, una resistencia de 50Ω, una tierra, un diodo polarizado inversamente, y un osciloscopio para observar la señal generada.</p>
								
								<div class="card-panel amber lighten-4">
									<div id="procedimiento5_2" style="display:none;">
										<p><b>Funcionamiento:</b><br/><br/>
										Herramientas utilizadas:<br/><br>
										• Fuente de voltaje alterno de 6v.<br/>
										• 1 tierra.<br>
										• 1 diodo polarizado inversamente.<br>
										• 1 resistencia de 50Ω.<br>
										• 1 osciloscopio.<br><br> 
										Proceso:<br/><br>
										1. Al poner el circuito en marcha se activa el osciloscopio y asi se observan dos señales, la señal color amarilla es la no rectificada y la azul la rectificada inversamente.<br>
										</p>
									<div class="divider black"></div>
									</div>

									<p><b>Resultados:</b></p>
										<center><video class="responsive-video" controls><source src="../images/p5_4.mp4" type="video/mp4"></video></center><br>
									<a class="right-align" onClick="o_f5_2();" id="o_f5_2" style="display:none;">Ocultar funcionamiento</a>	
									<a class="right-align" onClick="m_f5_2();" id="m_f5_2" style="display:block;">Mostrar funcionamiento</a>
								</div>						
						</div>						
					</div>	
				</div>
				<div id="p6" style="display: none;">
					<div class="row">
						<center><h4><b>Puente rectificador</b></h4></center>
						<div class="col s12 m12 l6">
							<h5><b>C. I. 2W04</b></h5>
							<center><img class="materialboxed responsive-img" data-caption="Circuito base" src="../images/p6_1.PNG"></center>
							<p><b>Descripción: </b>circuito para convertir corriente alterna en corriente directa constituido por una fuente de voltaje alterno, una resistencia de 10kΩ, 2 tierras, un C. I. 2W04, y un osciloscopio para observar la señal generada.</p>

								<div class="card-panel amber lighten-4">
									<div id="procedimiento6_1" style="display:none;">
										<p><b>Funcionamiento:</b><br/><br/>
										Herramientas utilizadas:<br/><br>
										• Fuente de voltaje alterno de 6v a 1Hz.<br/>
										• 2 tierras.<br>
										• 1 C. I. 2W04.<br>
										• 1 resistencia de 10kΩ.<br>
										• 1 osciloscopio.<br><br> 
										Proceso:<br/><br>
										1. Al poner el circuito en marcha se activa el osciloscopio y asi se observan dos señales, la señal color amarilla es la no rectificada y la señal rosa es la rectificada.<br>
										</p>
									<div class="divider black"></div>
									</div>

									<p><b>Resultados:</b></p>
										<center><video class="responsive-video" controls><source src="../images/p6_3.mp4" type="video/mp4"></video></center><br>
									<a class="right-align" onClick="o_f6_1();" id="o_f6_1" style="display:none;">Ocultar funcionamiento</a>	
									<a class="right-align" onClick="m_f6_1();" id="m_f6_1" style="display:block;">Mostrar funcionamiento</a>
								</div>
						</div>
						<div class="col s12 m12 l6">
							<h5><b>De diodos</b></h5>
							<center><img class="materialboxed responsive-img" data-caption="Circuito base" src="../images/p6_2.PNG"></center>
							<p><b>Descripción: </b>circuito para convertir corriente alterna en corriente directa constituido por una fuente de voltaje alterno, un trasnformador, 4 diodos, 1 capacitor de 1000μF, y medidores de voltaje y amperes.</p>
								
								<div class="card-panel amber lighten-4">
									<div id="procedimiento6_2" style="display:none;">
										<p><b>Funcionamiento:</b><br/><br/>
										Herramientas utilizadas:<br/><br>
										• Fuente de voltaje alterno de 169.7v a 60Hz.<br/>
										• 1 transformador.<br>
										• 4 diodos.<br>
										• 1 capacitor de 1000μF.<br>
										• 1 voltimetro de corriente directa.<br>
										• 1 voltimetro de corriente alterna.<br><br> 
										Proceso:<br/><br>
										1. Primero la señal alterna se reduce gracias a el transformador.<br><br>
										2. Seguido de esto la señal alterna entro a un puente rectificador construido con diodos para salir como señal directa.<br><br>
										3. La corriente directa se almancena en un capacitor para poder medirla con un voltimetro de corriente directa.<br>
										</p>
										<div class="divider black"></div>
									</div>

									<p><b>Resultados:</b></p>
										<center><img class="materialboxed responsive-img" data-caption="Circuito funcionando" src="../images/p6_4.PNG"></center><br>
									<a class="right-align" onClick="o_f6_2();" id="o_f6_2" style="display:none;">Ocultar funcionamiento</a>	
									<a class="right-align" onClick="m_f6_2();" id="m_f6_2" style="display:block;">Mostrar funcionamiento</a>
								</div>						
						</div>						
					</div>		
				</div>
				<div id="p7" style="display: none;">
					<div class="row">
						<center><h4><b>Transformacion y conversión de voltaje</b></h4></center>
						<div class="col s12 m12 l6">
							<h5><b>Transformacion</b></h5>
							<center><img class="materialboxed responsive-img" data-caption="Circuito base" src="../images/p7_1.PNG"></center>
							<p><b>Descripción: </b>circuito para transformar corriente de 120v a 12v constituido por una fuente de voltaje alterno, un transformador, medidores de voltaje alterno, y un osciloscopio para observar la señal generada.</p>

								<div class="card-panel amber lighten-4">
									<div id="procedimiento7_1" style="display:none;">
										<p><b>Funcionamiento:</b><br/><br/>
										Herramientas utilizadas:<br/><br>
										• Fuente de voltaje alterno de 169.7v a 60Hz.<br/>
										• 1 transformador.<br>
										• 2 voltimetros de corriente alterna.<br>
										• 1 osciloscopio.<br><br> 
										Proceso:<br/><br>
										Ya que se desea convertir 120v de corriente alterna a 12v.<br><br>
										1. Se hacen modificaciones a las configuraciones de la fuente de voltaje para que de el voltaje de entrada del transformador sea el deseado.<br>
										Calculamos el voltaje Vrms:
										<div class="fraction">
										<span class="fup">Vp</span>
										<span class="bar"></span>
										<span class="fdn">√2</span>
										</div> = 120 v.<br>
										Calculamos Vp:<br>
										(Vrms)(√2)=(120v)(√2)=169.7 Vac.<br>
										Calculamos frecuencia a partir del periodo de la señal:<br>
										Frecuencia (f):
										<div class="fraction">
										<span class="fup">1</span>
										<span class="bar"></span>
										<span class="fdn">T</span>
										</div> = 60 Hz.<br>
										Periodo (T):
										<div class="fraction">
										<span class="fup">1</span>
										<span class="bar"></span>
										<span class="fdn">f</span>
										</div> = 
										<div class="fraction">
										<span class="fup">1</span>
										<span class="bar"></span>
										<span class="fdn">60 Hz</span>
										</div> = 0.016 seg.<br>
										Estos datos se ingresan en la configuraciones de voltaje y frecuencia de la fuente de corriente alterna.<br><br>
										2. Se hacen modificaciones a las configuraciones del transformador para obtener un voltaje de salida correcto.<br>
										Ps=Pp<br>
										<div class="fraction">
										<span class="fup">Vp<sup>2</sup></span>
										<span class="bar"></span>
										<span class="fdn">Lp</span>
										</div> = 
										<div class="fraction">
										<span class="fup">Vs<sup>2</sup></span>
										<span class="bar"></span>
										<span class="fdn">Ls</span>
										</div><br>
										Vp = 120 v<br>
										Vs = 12 v<br>
										Lp = 1 <br>
										Ls=
										<div class="fraction">
										<span class="fup">Vs<sup>2</sup></span>
										<span class="bar"></span>
										<span class="fdn">Vp<sup>2</sup></span>
										</div> (Lp) = 
										<div class="fraction">
										<span class="fup">12<sup>2</sup></span>
										<span class="bar"></span>
										<span class="fdn">120<sup>2</sup></span>
										</div> (1) =  0.01H<br>
										Este dato se ingresa en las configuracion de inductancia secundaria de el transformador.<br><br>
										3. Finalmente con el osciloscopio se observa la señal, la señal amarilla es antes de transformase y la señal azul es ya despues de pasar por el transformador.<br> 					
										</p>
									<div class="divider black"></div>
									</div>

									<p><b>Resultados:</b></p>
										<center>
											<img class="materialboxed responsive-img" data-caption="Circuito en funcionamiento" src="../images/p7_3.PNG"><br>
											<video class="responsive-video" controls><source src="../images/p7_2.mp4" type="video/mp4"></video>
										</center><br>
									<a class="right-align" onClick="o_f7_1();" id="o_f7_1" style="display:none;">Ocultar funcionamiento</a>	
									<a class="right-align" onClick="m_f7_1();" id="m_f7_1" style="display:block;">Mostrar funcionamiento</a>
								</div>
						</div>
						<div class="col s12 m12 l6">
							<h5><b>Conversión</b></h5>
							<center><img class="materialboxed responsive-img" data-caption="Circuito base" src="../images/p7_4.PNG"></center>
							<p><b>Descripción: </b>circuito para convertir voltaje ac en voltaje dc constituido por una fuente de voltaje alterno, un trasnformador, una resistencia de 10kΩ, un C. I. 2W04, 1 capacitor de 1000μF, medidores de voltaje alterno y un osciloscopio para visualizar la señal.</p>
								
								<div class="card-panel amber lighten-4">
									<div id="procedimiento7_2" style="display:none;">
										<p><b>Funcionamiento:</b><br/><br/>
										Herramientas utilizadas:<br/><br>
										• Fuente de voltaje alterno de 169.7v a 60Hz.<br/>
										• 1 transformador.<br>
										• 1 resistencia de 10kΩ.<br>
										• 1 capacitor de 1000μF.<br>
										• 1 C. I. 2W04.<br>
										• 1 osciloscopio.<br>
										• 2 voltimetros de corriente alterna.<br><br> 
										Proceso:<br/><br>
										1. Al poner el circuito en marcha se activa el osciloscopio y asi se observan tres señales, la señal color amarilla es la no transformada (voltaje ac), la señal azul es transformada (voltaje ac) y la rosa es la señal rectificada (voltaje dc).<br>
										</p>
									<div class="divider black"></div>
									</div>

									<p><b>Resultados:</b></p>
										<center>
											<img class="materialboxed responsive-img" data-caption="Circuito funcionando" src="../images/p7_5.PNG"><br>
											<video class="responsive-video" controls><source src="../images/p7_6.mp4" type="video/mp4"></video>
										</center><br>
									<a class="right-align" onClick="o_f7_2();" id="o_f7_2" style="display:none;">Ocultar funcionamiento</a>	
									<a class="right-align" onClick="m_f7_2();" id="m_f7_2" style="display:block;">Mostrar funcionamiento</a>
								</div>						
						</div>						
					</div>			
				</div>
				<div id="p8" style="display: none;">
					<center><h4><b>Doblador de tension</b></h4></center>
					<center><img class="materialboxed responsive-img" data-caption="Circuito base" width="800" src="../images/p8_1.PNG"></center>
					<p><b>Descripción: </b> circuito diseñado para dublicar el voltaje de salida del transformador contituido por una fuente de voltaje alterno, dos capacitores de 2200μF, dos diodos, un transformador, medidores de voltaje ac y dc.</p>
				
						<div class="card-panel amber lighten-4">
							<div id="procedimiento8" style="display:none;">
								<p><b>Funcionamiento:</b><br/><br/>
								Herramientas utilizadas:<br/><br>
								• Fuente de voltaje alterno de 169.7v a 60Hz.<br/>
								• 1 transformador.<br>
								• 2 diodos.<br>
								• 2 capacitores de 2200μF.<br>
								• 2 voltimetros de corriente alterna.<br>
								• 2 voltimetros de corriente directa.<br><br>
								
								Proceso:<br/><br>
								1. Al poner el circuito en marcha entran al transformador 120v de voltaje ac, mediante el transformador se reduce a 20v de ac.<br/>
								2. Los 20v de voltaje ac, entran a  doblador de voltaje construido por 2 diodos y 2 capacitores, donde en los capacitores se almacena el doble del voltaje que entro a el doblador.<br>  			
								</p>
								<div class="divider black"></div>
							</div>

							<p><b>Resultados:</b></p>
								<center>
									<img class="materialboxed responsive-img" data-caption="Circuito en funcionamiento" width="600" src="../images/p8_2.PNG">
								</center>	
							<a class="right-align" onClick="o_f8();" id="o_f8" style="display:none;">Ocultar funcionamiento</a>	
							<a class="right-align" onClick="m_f8();" id="m_f8" style="display:block;">Mostrar funcionamiento</a>
						</div>					
				</div>
				<div id="p9" style="display: none;">
					<center><h4><b>Diodo zener</b></h4></center>
					<center><img class="materialboxed responsive-img" data-caption="Circuito base" width="700" src="../images/p9_1.PNG"></center>
					<p><b>Descripción: </b> circuito diseñado para visualizar el comportamiento de un diodo zener contituido por una bateria, un diodo zener, un resistencia de 390Ω, y medidores de voltaje directo.</p>
				
						<div class="card-panel amber lighten-4">
							<div id="procedimiento9" style="display:none;">
								<p><b>Funcionamiento:</b><br/><br/>
								Herramientas utilizadas:<br/><br>
								• Bateria de 10v.<br/>
								• 1 diodo zener de 10v.<br>
								• 1 resistencia de 390Ω.<br>
								• 3 voltimetros dc.<br><br>
								
								Proceso:<br/><br>
								1. Se hicieron variaciones de voltaje en la bateria, colocando desde voltajes menores a los del diodo, igual al del diodo y mayores.<br>
								Aplicando voltajes menores: el voltaje que se lee en el diodo es voltaje aplicado.<br>
								Aplicando un voltaje igual: el voltaje que se lee es el voltaje aplicado.<br>
								Aplicando voltajes mayores: el voltaje que se lee es el voltaje del diodo, no el voltaje aplicado. <br>
								Esto se debe a que depende que el voltaje que el diodo zener soporte es el voltaje maximo que se registrara en este.<br>		
								</p>
								<div class="divider black"></div>
							</div>

							<p><b>Resultados:</b></p>
								<center>
									<img class="materialboxed responsive-img" data-caption="Circuito en funcionamiento" width="500" src="../images/p9_2.PNG">
								</center>	
							<a class="right-align" onClick="o_f9();" id="o_f9" style="display:none;">Ocultar funcionamiento</a>	
							<a class="right-align" onClick="m_f9();" id="m_f9" style="display:block;">Mostrar funcionamiento</a>
						</div>						
				</div>
				<div id="p10" style="display: none;">
					<center><h4><b>Polarizacion de transistores</b></h4></center>
					<center><img class="materialboxed responsive-img" data-caption="Circuito base" width="350" src="../images/p10_1.PNG"></center>
					<p><b>Descripción: </b> circuito diseñado para visualizar el comportamiento de un transistore NPN contituido por una fuente de voltaje, un transistor NPN, 4 resistencias de (1kΩ, 680Ω, 500Ω y 4kΩ), una tierra, medidores de voltaje y amperes.</p>
				
						<div class="card-panel amber lighten-4">
							<div id="procedimiento10" style="display:none;">
								<p><b>Funcionamiento:</b><br/><br/>
								Herramientas utilizadas:<br/><br>
								• Fuente de voltaje de 10v.<br/>
								• 1 transistor NPN. <br>
								• 1 resistencia de 1kΩ. <br>
								• 1 resistencia de 680Ω. <br>
								• 1 resistencia de 680Ω. <br>
								• 1 resistencia de 4kΩ. <br>
								• 1 tierra. <br>
								• 6 voltimetros de dc.<br>
								• 4 amperimetros de dc.<br><br>
								
								Proceso:<br/><br>
								1. Al poner en marca el circuito se puede observar como se comporta el transistor NPN, analizando los amperes que entrar a el por la base y el colector, y los que salen por el emisor, al igual que los voltajes que caen en las resistencias.<br>		
								</p>
								<div class="divider black"></div>
							</div>

							<p><b>Resultados:</b></p>
								<center>
									<img class="materialboxed responsive-img" data-caption="Circuito en funcionamiento" width="250" src="../images/p10_2.PNG">
								</center>	
							<a class="right-align" onClick="o_f10();" id="o_f10" style="display:none;">Ocultar funcionamiento</a>	
							<a class="right-align" onClick="m_f10();" id="m_f10" style="display:block;">Mostrar funcionamiento</a>
						</div>					
				</div>
    		</div>
    	</div>
    </div>
    <div id="test2" class="col s12">
    	<h4 class="center"><b>Codigo de colores de resistencias fijas</b></h4>
		<div class="row">
			<div class="col s12 m2 l2">
				<ul class="collection with-header">
			        <li class="collection-header"><h5>No. de bandas</h5></li>
			        <li class="collection-item" onClick="tresbandas();">3 bandas</li>
			        <li class="collection-item" onClick="cuatrobandas();">4 bandas</li>
			        <li class="collection-item" onClick="cincobandas();">5 bandas</li>
			        <li class="collection-item" onClick="seisbandas();">6 bandas</li>
			    </ul>
			</div>

			<div class="col s12 m10 l10">
			 	<div id="3bandas" style="display:block;">
			    	<br/>
					<center>
			    	<img src='../images/r_izq.png'>
			    	<span id="p_c"><img src="../images/r_centro.png"></span>
			    	<span id="s_c"><img src="../images/r_centro.png"></span>
			    	<span id="t_c"><img src="../images/r_centro.png"></span>
			    	<img src="../images/r_der.png">
			    	</center>
					<div class="row">
						<h5><b>Resistencias de tres bandas</b></h5>
							<div class="input-field col s12 m4 l4">
								<select class="icons" name="banda1" id="franja31" onChange="CambiarColor3_1();">
									<option disabled selected>Choose your option</option>
									<option value="0" data-icon="../images/Negro.png" class="left circle">Negro</option>
									<option value="1" data-icon="../images/Cafe.png" class="left circle">Cafe</option>
									<option value="2" data-icon="../images/Rojo.png" class="left circle">Rojo</option>
									<option value="3" data-icon="../images/Naranja.png" class="left circle">Naranja</option>
									<option value="4" data-icon="../images/Amarillo.png" class="left circle">Amarillo</option>
									<option value="5" data-icon="../images/Verde.png" class="left circle">Verde</option>
									<option value="6" data-icon="../images/Azul.png" class="left circle">Azul</option>
									<option value="7" data-icon="../images/Violeta.png" class="left circle">Violeta</option>
									<option value="8" data-icon="../images/Gris.png" class="left circle">Gris</option>
									<option value="9" data-icon="../images/Blanco.png" class="left circle">Blanco</option>
					    		</select>
							<label>Franja 1</label>
							</div>
							<div class="input-field col s12 m4 l4">
								<select class="icons" name="banda2" id="franja32" onChange="CambiarColor3_2();">
									<option disabled selected>Choose your option</option>
									<option value="0" data-icon="../images/Negro.png" class="left circle">Negro</option>
									<option value="1" data-icon="../images/Cafe.png" class="left circle">Cafe</option>
									<option value="2" data-icon="../images/Rojo.png" class="left circle">Rojo</option>
									<option value="3" data-icon="../images/Naranja.png" class="left circle">Naranja</option>
									<option value="4" data-icon="../images/Amarillo.png" class="left circle">Amarillo</option>
									<option value="5" data-icon="../images/Verde.png" class="left circle">Verde</option>
									<option value="6" data-icon="../images/Azul.png" class="left circle">Azul</option>
									<option value="7" data-icon="../images/Violeta.png" class="left circle">Violeta</option>
									<option value="8" data-icon="../images/Gris.png" class="left circle">Gris</option>
									<option value="9" data-icon="../images/Blanco.png" class="left circle">Blanco</option>
					    		</select>
							<label>Franja 2</label>
							</div>
							<div class="input-field col s12 m4 l4">
								<select class="icons" name="banda3" id="franja33" onChange="CambiarColor3_3();">
									<option disabled selected>Choose your option</option>
									<option value="0" data-icon="../images/Negro.png" class="left circle">Negro</option>
									<option value="1" data-icon="../images/Cafe.png" class="left circle">Cafe</option>
									<option value="2" data-icon="../images/Rojo.png" class="left circle">Rojo</option>
									<option value="3" data-icon="../images/Naranja.png" class="left circle">Naranja</option>
									<option value="4" data-icon="../images/Amarillo.png" class="left circle">Amarillo</option>
									<option value="5" data-icon="../images/Verde.png" class="left circle">Verde</option>
									<option value="6" data-icon="../images/Azul.png" class="left circle">Azul</option>
									<option value="7" data-icon="../images/Violeta.png" class="left circle">Violeta</option>
									<option value="8" data-icon="../images/Gris.png" class="left circle">Gris</option>
									<option value="9" data-icon="../images/Blanco.png" class="left circle">Blanco</option>
									<option value="-1" data-icon="../images/Dorado.png" class="left circle">Dorado</option>
									<option value="-2" data-icon="../images/Plata.png" class="left circle">Plata</option> 
					    		</select>
							<label>Franja 3 (Multiplicador)</label>
							</div>

							<center><button class="btn amber darken-3" onClick="Resolver3();">Resolver</button></center><br/>

							<div id="resultado" class="card-panel amber lighten-4" style="display:none;">
								<div id="procedimiento" style="display:none;">
								<p class="left-align"><b>Procedimiento:</b></p>
								<p id="procedimiento_"></p>	
								<div class="divider black"></div>
								</div>
								<p class="left-align"><b>Resultado:</b></p>
								<p class="center-align" id="resultado_"></p>
								<a class="right-align" onClick="o_p();" id="o_p" style="display:none;">Ocultar procedimiento</a>	
								<a class="right-align" onClick="m_p();" id="m_p" style="display:none;">Mostrar procedimiento</a>
							</div>
					</div>
			 	</div>
			 	<div id="4bandas" style="display:none;">
			 		<br/>
					<center>
			    	<img src='../images/r_izq.png'>
			    	<span id="p_c4"><img src="../images/r_centro.png"></span>
			    	<span id="s_c4"><img src="../images/r_centro.png"></span>
			    	<span id="t_c4"><img src="../images/r_centro.png"></span>
			    	<span id="c_c4"><img src="../images/r_centro.png"></span>
			    	<img src="../images/r_der.png">
			    	</center>
					<div class="row">
						<h5><b>Resistencias de cuatro bandas</b></h5>
							<div class="input-field col s12 m3 l3">
								<select class="icons" name="banda1" id="franja41" onChange="CambiarColor4_1();">
									<option disabled selected>Choose your option</option>
									<option value="0" data-icon="../images/Negro.png" class="left circle">Negro</option>
									<option value="1" data-icon="../images/Cafe.png" class="left circle">Cafe</option>
									<option value="2" data-icon="../images/Rojo.png" class="left circle">Rojo</option>
									<option value="3" data-icon="../images/Naranja.png" class="left circle">Naranja</option>
									<option value="4" data-icon="../images/Amarillo.png" class="left circle">Amarillo</option>
									<option value="5" data-icon="../images/Verde.png" class="left circle">Verde</option>
									<option value="6" data-icon="../images/Azul.png" class="left circle">Azul</option>
									<option value="7" data-icon="../images/Violeta.png" class="left circle">Violeta</option>
									<option value="8" data-icon="../images/Gris.png" class="left circle">Gris</option>
									<option value="9" data-icon="../images/Blanco.png" class="left circle">Blanco</option>
			    				</select>
								<label>Franja 1</label>
							</div>
							<div class="input-field col s12 m3 l3">
								<select class="icons" name="banda2" id="franja42" onChange="CambiarColor4_2();">
									<option disabled selected>Choose your option</option>
									<option value="0" data-icon="../images/Negro.png" class="left circle">Negro</option>
									<option value="1" data-icon="../images/Cafe.png" class="left circle">Cafe</option>
									<option value="2" data-icon="../images/Rojo.png" class="left circle">Rojo</option>
									<option value="3" data-icon="../images/Naranja.png" class="left circle">Naranja</option>
									<option value="4" data-icon="../images/Amarillo.png" class="left circle">Amarillo</option>
									<option value="5" data-icon="../images/Verde.png" class="left circle">Verde</option>
									<option value="6" data-icon="../images/Azul.png" class="left circle">Azul</option>
									<option value="7" data-icon="../images/Violeta.png" class="left circle">Violeta</option>
									<option value="8" data-icon="../images/Gris.png" class="left circle">Gris</option>
									<option value="9" data-icon="../images/Blanco.png" class="left circle">Blanco</option>
			    				</select>
								<label>Franja 2</label>
							</div>
							<div class="input-field col s12 m3 l3">
								<select class="icons" name="banda3" id="franja43" onChange="CambiarColor4_3();">
									<option disabled selected>Choose your option</option>
									<option value="0" data-icon="../images/Negro.png" class="left circle">Negro</option>
									<option value="1" data-icon="../images/Cafe.png" class="left circle">Cafe</option>
									<option value="2" data-icon="../images/Rojo.png" class="left circle">Rojo</option>
									<option value="3" data-icon="../images/Naranja.png" class="left circle">Naranja</option>
									<option value="4" data-icon="../images/Amarillo.png" class="left circle">Amarillo</option>
									<option value="5" data-icon="../images/Verde.png" class="left circle">Verde</option>
									<option value="6" data-icon="../images/Azul.png" class="left circle">Azul</option>
									<option value="7" data-icon="../images/Violeta.png" class="left circle">Violeta</option>
									<option value="8" data-icon="../images/Gris.png" class="left circle">Gris</option>
									<option value="9" data-icon="../images/Blanco.png" class="left circle">Blanco</option>
									<option value="-1" data-icon="../images/Dorado.png" class="left circle">Dorado</option>
									<option value="-2" data-icon="../images/Plata.png" class="left circle">Plata</option> 
			    				</select>
								<label>Franja 3 (Multiplicador)</label>
							</div>
							<div class="input-field col s12 m3 l3">
								<select class="icons" name="banda4" id="franja44" onChange="CambiarColor4_4();">
									<option disabled selected>Choose your option</option>
									<option value="1" data-icon="../images/Cafe.png" class="left circle">Cafe</option>
									<option value="2" data-icon="../images/Rojo.png" class="left circle">Rojo</option>
									<option value="4" data-icon="../images/Amarillo.png" class="left circle">Amarillo</option>
									<option value="5" data-icon="../images/Verde.png" class="left circle">Verde</option>
									<option value="6" data-icon="../images/Azul.png" class="left circle">Azul</option>
									<option value="7" data-icon="../images/Violeta.png" class="left circle">Violeta</option>
									<option value="8" data-icon="../images/Gris.png" class="left circle">Gris</option>
									<option value="10" data-icon="../images/Dorado.png" class="left circle">Dorado</option>
									<option value="11" data-icon="../images/Plata.png" class="left circle">Plata</option>
			    				</select>
								<label>Franja 4 (Tolerancia)</label>
							</div>

							<center><button class="btn amber darken-3" onClick="Resolver4();">Resolver</button></center><br/>

							<div id="resultado4" class="card-panel amber lighten-4" style="display:none;">
								<div id="procedimiento4" style="display:none;">
								<p class="left-align"><b>Procedimiento:</b></p>
								<p id="procedimiento_4"></p>	
								<div class="divider black"></div>
								</div>
								<p class="left-align"><b>Resultado:</b></p>
								<p class="center-align" id="resultado_4"></p>
								<a class="right-align" onClick="o_p4();" id="o_p4" style="display:none;">Ocultar procedimiento</a>	
								<a class="right-align" onClick="m_p4();" id="m_p4" style="display:none;">Mostrar procedimiento</a>
							</div>
					</div>
			 	</div>
			 	<div id="5bandas" style="display:none;">
					<br/>
					<center>
			    	<img src='../images/r_izq.png'>
			    	<span id="p_c5"><img src="../images/r_centro.png"></span>
			    	<span id="s_c5"><img src="../images/r_centro.png"></span>
			    	<span id="t_c5"><img src="../images/r_centro.png"></span>
			    	<span id="c_c5"><img src="../images/r_centro.png"></span>
			    	<span id="q_c5"><img src="../images/r_centro.png"></span>
			    	<img src="../images/r_der.png">
			    	</center>
					<div class="row">
						<h5><b>Resistencias de cinco bandas</b></h5>
							<div class="row">
								<div class="input-field col s12 m4 l4">
									<select class="icons" name="banda1" id="franja51" onChange="CambiarColor5_1();">
										<option disabled selected>Choose your option</option>
									<option value="0" data-icon="../images/Negro.png" class="left circle">Negro</option>
									<option value="1" data-icon="../images/Cafe.png" class="left circle">Cafe</option>
									<option value="2" data-icon="../images/Rojo.png" class="left circle">Rojo</option>
									<option value="3" data-icon="../images/Naranja.png" class="left circle">Naranja</option>
									<option value="4" data-icon="../images/Amarillo.png" class="left circle">Amarillo</option>
									<option value="5" data-icon="../images/Verde.png" class="left circle">Verde</option>
									<option value="6" data-icon="../images/Azul.png" class="left circle">Azul</option>
									<option value="7" data-icon="../images/Violeta.png" class="left circle">Violeta</option>
									<option value="8" data-icon="../images/Gris.png" class="left circle">Gris</option>
									<option value="9" data-icon="../images/Blanco.png" class="left circle">Blanco</option>
				 					</select>
									<label>Franja 1</label>
								</div>
								<div class="input-field col s12 m4 l4">
									<select class="icons" name="banda2" id="franja52" onChange="CambiarColor5_2();">
										<option disabled selected>Choose your option</option>
									<option value="0" data-icon="../images/Negro.png" class="left circle">Negro</option>
									<option value="1" data-icon="../images/Cafe.png" class="left circle">Cafe</option>
									<option value="2" data-icon="../images/Rojo.png" class="left circle">Rojo</option>
									<option value="3" data-icon="../images/Naranja.png" class="left circle">Naranja</option>
									<option value="4" data-icon="../images/Amarillo.png" class="left circle">Amarillo</option>
									<option value="5" data-icon="../images/Verde.png" class="left circle">Verde</option>
									<option value="6" data-icon="../images/Azul.png" class="left circle">Azul</option>
									<option value="7" data-icon="../images/Violeta.png" class="left circle">Violeta</option>
									<option value="8" data-icon="../images/Gris.png" class="left circle">Gris</option>
									<option value="9" data-icon="../images/Blanco.png" class="left circle">Blanco</option>
				   					</select>
									<label>Franja 2</label>
								</div>
								<div class="input-field col s12 m4 l4">
									<select class="icons" name="banda3" id="franja53" onChange="CambiarColor5_3();">
										<option disabled selected>Choose your option</option>
									<option value="0" data-icon="../images/Negro.png" class="left circle">Negro</option>
									<option value="1" data-icon="../images/Cafe.png" class="left circle">Cafe</option>
									<option value="2" data-icon="../images/Rojo.png" class="left circle">Rojo</option>
									<option value="3" data-icon="../images/Naranja.png" class="left circle">Naranja</option>
									<option value="4" data-icon="../images/Amarillo.png" class="left circle">Amarillo</option>
									<option value="5" data-icon="../images/Verde.png" class="left circle">Verde</option>
									<option value="6" data-icon="../images/Azul.png" class="left circle">Azul</option>
									<option value="7" data-icon="../images/Violeta.png" class="left circle">Violeta</option>
									<option value="8" data-icon="../images/Gris.png" class="left circle">Gris</option>
									<option value="9" data-icon="../images/Blanco.png" class="left circle">Blanco</option>
				    				</select>
									<label>Franja 3</label>
								</div>
							</div>
							<div class="row">
								<div class="input-field col s12 m4 l4">
									<select class="icons" name="banda4" id="franja54" onChange="CambiarColor5_4();">
									<option disabled selected>Choose your option</option>
									<option value="0" data-icon="../images/Negro.png" class="left circle">Negro</option>
									<option value="1" data-icon="../images/Cafe.png" class="left circle">Cafe</option>
									<option value="2" data-icon="../images/Rojo.png" class="left circle">Rojo</option>
									<option value="3" data-icon="../images/Naranja.png" class="left circle">Naranja</option>
									<option value="4" data-icon="../images/Amarillo.png" class="left circle">Amarillo</option>
									<option value="5" data-icon="../images/Verde.png" class="left circle">Verde</option>
									<option value="6" data-icon="../images/Azul.png" class="left circle">Azul</option>
									<option value="7" data-icon="../images/Violeta.png" class="left circle">Violeta</option>
									<option value="8" data-icon="../images/Gris.png" class="left circle">Gris</option>
									<option value="9" data-icon="../images/Blanco.png" class="left circle">Blanco</option>
									<option value="-1" data-icon="../images/Dorado.png" class="left circle">Dorado</option>
									<option value="-2" data-icon="../images/Plata.png" class="left circle">Plata</option> 
				   					</select>
				   					<label>Franja 4 (Multiplicador)</label>
								</div>
								<div class="input-field col s12 m4 l4">
									<select class="icons" name="banda5" id="franja55" onChange="CambiarColor5_5();">
										<option disabled selected>Choose your option</option>
									<option value="1" data-icon="../images/Cafe.png" class="left circle">Cafe</option>
									<option value="2" data-icon="../images/Rojo.png" class="left circle">Rojo</option>
									<option value="4" data-icon="../images/Amarillo.png" class="left circle">Amarillo</option>
									<option value="5" data-icon="../images/Verde.png" class="left circle">Verde</option>
									<option value="6" data-icon="../images/Azul.png" class="left circle">Azul</option>
									<option value="7" data-icon="../images/Violeta.png" class="left circle">Violeta</option>
									<option value="8" data-icon="../images/Gris.png" class="left circle">Gris</option>
									<option value="10" data-icon="../images/Dorado.png" class="left circle">Dorado</option>
									<option value="11" data-icon="../images/Plata.png" class="left circle">Plata</option>
				   					</select>
									<label>Franja 5 (Tolerancia)</label>
								</div>	
								<div class="input-field col s12 m4 l4">
									<center><button class="btn amber darken-3" onClick="Resolver5();">Resolver</button></center><br/>
								</div>
							</div>
							<div id="resultado5" class="card-panel amber lighten-4" style="display:none;">
									<div id="procedimiento5" style="display:none;">
									<p class="left-align"><b>Procedimiento:</b></p>
									<p id="procedimiento_5"></p>	
									<div class="divider black"></div>
									</div>
									<p class="left-align"><b>Resultado:</b></p>
									<p class="center-align" id="resultado_5"></p>
									<a class="right-align" onClick="o_p5();" id="o_p5" style="display:none;">Ocultar procedimiento</a>	
									<a class="right-align" onClick="m_p5();" id="m_p5" style="display:none;">Mostrar procedimiento</a>
							</div>
					</div>	 		
			 	</div>
				<div id="6bandas" style="display:none;">
				    <br/>
					<center>
			    	<img src='../images/r_izq.png'>
			    	<span id="p_c6"><img src="../images/r_centro.png"></span>
			    	<span id="s_c6"><img src="../images/r_centro.png"></span>
			    	<span id="t_c6"><img src="../images/r_centro.png"></span>
			    	<span id="c_c6"><img src="../images/r_centro.png"></span>
			    	<span id="q_c6"><img src="../images/r_centro.png"></span>
			    	<span id="se_c6"><img src="../images/r_centro.png"></span>
			    	<img src="../images/r_der.png">
			    	</center>
					<div class="row">
						<h5><b>Resistencias de seis bandas</b></h5>
							<div class="row">
								<div class="input-field col s12 m4 l4">
									<select class="icons" name="banda1" id="franja61"  onChange="CambiarColor6_1();">
										<option disabled selected>Choose your option</option>
									<option value="0" data-icon="../images/Negro.png" class="left circle">Negro</option>
									<option value="1" data-icon="../images/Cafe.png" class="left circle">Cafe</option>
									<option value="2" data-icon="../images/Rojo.png" class="left circle">Rojo</option>
									<option value="3" data-icon="../images/Naranja.png" class="left circle">Naranja</option>
									<option value="4" data-icon="../images/Amarillo.png" class="left circle">Amarillo</option>
									<option value="5" data-icon="../images/Verde.png" class="left circle">Verde</option>
									<option value="6" data-icon="../images/Azul.png" class="left circle">Azul</option>
									<option value="7" data-icon="../images/Violeta.png" class="left circle">Violeta</option>
									<option value="8" data-icon="../images/Gris.png" class="left circle">Gris</option>
									<option value="9" data-icon="../images/Blanco.png" class="left circle">Blanco</option>
				    				</select>
									<label>Franja 1</label>
								</div>
								<div class="input-field col s12 m4 l4">
									<select class="icons" name="banda2" id="franja62" onChange="CambiarColor6_2();">
										<option disabled selected>Choose your option</option>
									<option value="0" data-icon="../images/Negro.png" class="left circle">Negro</option>
									<option value="1" data-icon="../images/Cafe.png" class="left circle">Cafe</option>
									<option value="2" data-icon="../images/Rojo.png" class="left circle">Rojo</option>
									<option value="3" data-icon="../images/Naranja.png" class="left circle">Naranja</option>
									<option value="4" data-icon="../images/Amarillo.png" class="left circle">Amarillo</option>
									<option value="5" data-icon="../images/Verde.png" class="left circle">Verde</option>
									<option value="6" data-icon="../images/Azul.png" class="left circle">Azul</option>
									<option value="7" data-icon="../images/Violeta.png" class="left circle">Violeta</option>
									<option value="8" data-icon="../images/Gris.png" class="left circle">Gris</option>
									<option value="9" data-icon="../images/Blanco.png" class="left circle">Blanco</option>
				    				</select>
									<label>Franja 2</label>
								</div>
								<div class="input-field col s12 m4 l4">
									<select class="icons" name="banda3" id="franja63" onChange="CambiarColor6_3();">
										<option disabled selected>Choose your option</option>
									<option value="0" data-icon="../images/Negro.png" class="left circle">Negro</option>
									<option value="1" data-icon="../images/Cafe.png" class="left circle">Cafe</option>
									<option value="2" data-icon="../images/Rojo.png" class="left circle">Rojo</option>
									<option value="3" data-icon="../images/Naranja.png" class="left circle">Naranja</option>
									<option value="4" data-icon="../images/Amarillo.png" class="left circle">Amarillo</option>
									<option value="5" data-icon="../images/Verde.png" class="left circle">Verde</option>
									<option value="6" data-icon="../images/Azul.png" class="left circle">Azul</option>
									<option value="7" data-icon="../images/Violeta.png" class="left circle">Violeta</option>
									<option value="8" data-icon="../images/Gris.png" class="left circle">Gris</option>
									<option value="9" data-icon="../images/Blanco.png" class="left circle">Blanco</option>
				    				</select>
									<label>Franja 3</label>
								</div>
							</div>
							<div class="row">
								<div class="input-field col s12 m4 l4">
									<select class="icons" name="banda4" id="franja64" onChange="CambiarColor6_4();">
										<option disabled selected>Choose your option</option>
									<option value="0" data-icon="../images/Negro.png" class="left circle">Negro</option>
									<option value="1" data-icon="../images/Cafe.png" class="left circle">Cafe</option>
									<option value="2" data-icon="../images/Rojo.png" class="left circle">Rojo</option>
									<option value="3" data-icon="../images/Naranja.png" class="left circle">Naranja</option>
									<option value="4" data-icon="../images/Amarillo.png" class="left circle">Amarillo</option>
									<option value="5" data-icon="../images/Verde.png" class="left circle">Verde</option>
									<option value="6" data-icon="../images/Azul.png" class="left circle">Azul</option>
									<option value="7" data-icon="../images/Violeta.png" class="left circle">Violeta</option>
									<option value="8" data-icon="../images/Gris.png" class="left circle">Gris</option>
									<option value="9" data-icon="../images/Blanco.png" class="left circle">Blanco</option>
									<option value="-1" data-icon="../images/Dorado.png" class="left circle">Dorado</option>
									<option value="-2" data-icon="../images/Plata.png" class="left circle">Plata</option> 
				    				</select>
									<label>Franja 4 (Multiplicador)</label>
								</div>
								<div class="input-field col s12 m4 l4">
									<select class="icons" name="banda5" id="franja65" onChange="CambiarColor6_5();">
										<option disabled selected>Choose your option</option>
									<option value="1" data-icon="../images/Cafe.png" class="left circle">Cafe</option>
									<option value="2" data-icon="../images/Rojo.png" class="left circle">Rojo</option>
									<option value="4" data-icon="../images/Amarillo.png" class="left circle">Amarillo</option>
									<option value="5" data-icon="../images/Verde.png" class="left circle">Verde</option>
									<option value="6" data-icon="../images/Azul.png" class="left circle">Azul</option>
									<option value="7" data-icon="../images/Violeta.png" class="left circle">Violeta</option>
									<option value="8" data-icon="../images/Gris.png" class="left circle">Gris</option>
									<option value="10" data-icon="../images/Dorado.png" class="left circle">Dorado</option>
									<option value="11" data-icon="../images/Plata.png" class="left circle">Plata</option>
				    				</select>
									<label>Franja 5 (Tolerancia)</label>
								</div>
								<div class="input-field col s12 m4 l4">
									<select class="icons" name="banda6" id="franja66" onChange="CambiarColor6_6();">
										<option disabled selected>Choose your option</option>
										<option value="0" data-icon="../images/Negro.png" class="left circle">Negro</option>
										<option value="1" data-icon="../images/Cafe.png" class="left circle">Cafe</option>
										<option value="2" data-icon="../images/Rojo.png" class="left circle">Rojo</option>
										<option value="3" data-icon="../images/Naranja.png" class="left circle">Naranja</option>
										<option value="4" data-icon="../images/Amarillo.png" class="left circle">Amarillo</option>
										<option value="5" data-icon="../images/Verde.png" class="left circle">Verde</option>
										<option value="6" data-icon="../images/Azul.png" class="left circle">Azul</option>
										<option value="7" data-icon="../images/Violeta.png" class="left circle">Violeta</option>
										<option value="8" data-icon="../images/Gris.png" class="left circle">Gris</option>
				    				</select>
									<label>Franja 6 (TCR)</label>
								</div>
							</div>	

							<center><button class="btn amber darken-3" onClick="Resolver6();">Resolver</button></center><br/>

							<div id="resultado6" class="card-panel amber lighten-4" style="display:none;">
								<div id="procedimiento6" style="display:none;">
								<p class="left-align"><b>Procedimiento:</b></p>
								<p id="procedimiento_6"></p>	
								<div class="divider black"></div>
								</div>	
								<p class="left-align"><b>Resultado:</b></p>
								<p class="center-align" id="resultado_6"></p>
								<a class="right-align" onClick="o_p6();" id="o_p6" style="display:none;">Ocultar procedimiento</a>	
								<a class="right-align" onClick="m_p6();" id="m_p6" style="display:none;">Mostrar procedimiento</a>
							</div>
					</div> 		
				</div>
			</div>
		</div>
	</div>
  </div>
   

<div class="tap-target amber accent-1" data-activates="help">
    <div class="tap-target-content">
      <h5 align="right"><span id="cir" style="display: block;">Circuitos</span><span id="res" style="display: none;">Resistencias</span><span id="conv" style="display: none;">Unidades de medida</span></h5>
      <p align="right"><span id="cird" style="display: block;">Son una red electrónica que contiene al menos una trayectoria cerrada.<br/>Cuando tiene componentes electrónicos se denomina circuito electrónico. Suelen, no ser lineales y requieren diseños y herramientas de análisis mucho más complejos.</span><span id="resd" style="display: none;">Son componentes electrónicos que tienen la propiedad de presentar oposición al paso de la corriente eléctrica. La unidad en la que mide esta característica es el Ohmio y se representa con la letra griega Omega (W).</span></p>
    </div>
</div>

    <?php include('../includes/footer.php'); ?>
</body>
</html>