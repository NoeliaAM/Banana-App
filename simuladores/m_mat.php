<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Banana App | Modelos Matematicos</title>
	<script src="js/s_elec.js"></script>
    <?php include('../includes/head.php'); ?>
</head>
<body>
    <?php include('../includes/nav.php'); ?>

<div class="card-panel amber lighten-3">
<center>
	<h4><i class="small material-icons">settings_input_composite</i> Modelos Matematicos</h4>
</center>	
</div>

  <div class="row">
    <div class="col s12">
      <ul class="tabs">
        <li class="tab col s6"><a href="#test1">Circuitos RC</a></li>
        <li class="tab col s6"><a href="#test2">Circuitos RL</a></li>
      </ul>
    </div>
    <div id="test1" class="col s12">
    	<div class="row">
    		<h4 class="center-align"><b>Circuitos RC</b></h4>
    		<div class="col s12 m2 l2">
    			<ul class="collection">
			      <li class="collection-item" onClick="RC_carga();">Carga</li>
			      <li class="collection-item" onClick="RC_descarga();">Descarga</li>
			    </ul>
    		</div>
    		<div class="col s12 m10 l10">
				<div id="carga_rc" style="display:block;">
					<div class="row">
						<h5 align="center"><b>Carga</b></h5>
	    				<div class="col s12 m6 l6">
							<center><img class="materialboxed responsive-img" data-caption="Circuito base" width="400" src="../images/RCinicial.PNG"></center><br>
							<center><img class="materialboxed responsive-img" data-caption="Circuito base" width="400" src="../images/RCcarga.PNG"></center>
	    				</div>
	    				<div class="col s12 m6 l6">
				    		<h6><b>Datos:</b></h6>
				    		<div class="row">
						        <div class="input-field inline col s12">
							        <input id="rcc_s" type="text" class="validate" size="10" maxlength="10">
									<label for="rcc_s">Voltaje del la fuente (volt)</label>
								</div>
								<div class="input-field inline col s12">
									<input id="rcc_r" type="text" class="validate">
									<label for="rcc_r">Valor de la resistencia (Ω)</label>
								</div>          
								<div class="input-field inline col s6">
									<input id="rcc_c" type="text" class="validate">
									<label for="rcc_c">Valor del capacitor (faradio)</label>
								</div>
								<div class="input-field col s6">
									<select name="rcc" id="rcc">
										<option value="">F</option>
										<option value="-3">mF</option>
										<option value="-6">μF</option>
										<option value="-9">nF</option>
										<option value="-12">pF</option>
									</select>
									<label>Unidad de medida</label>
								</div>
							</div>
							<center><button class="btn amber darken-3" type="button" onClick="RC_carga_b();">Resolver</button></center>
	    				</div>
	    			</div>

	    			<div class="divider black" id="div_carga_rc" style="display:none;"></div><br>
						<div class="card-panel amber lighten-4" id="resultado_carga_rc" style="display:none;">
							<div id="procedimiento_carga_rc" style="display:none;">
								<p>
									<b>Procedimiento:</b><br><br>
									Sabemos que:<br>
									<div></div>
									I<sub>C</sub> = (C)
									<div class="fraction">
										<span class="fup">dV<sub>C</sub></span>
										<span class="bar">/</span>
										<span class="fdn">dt</span>
									</div><br>
									V<sub>R</sub> = (R)(I<sub>C</sub>)<br><br>	
										
									Para t < 0 (cuando el switch aun esta abierto) las condiciones iniciales son:<br>
									I<sub>C</sub> = 0<br>
									V<sub>0</sub> = 0<br><br>
											
									En t = 0 (el switch se cierra), y se aplican las leyes de Kirchhoff para obtener la ecuacion del circuito, entonces tenemos que:<br>
									-V<sub>S</sub> + V<sub>R</sub> + V<sub>C</sub> = 0<br>
									Sustituimos V<sub>R</sub>:<br>
									-V<sub>S</sub> + (R)(I<sub>C</sub>) + V<sub>C</sub> = 0<br>
									Sustituimos I<sub>C</sub>:<br>
									-V<sub>S</sub> + (RC)(
									<div class='fraction'>
										<span class='fup'>dV<sub>C</sub></span>
										<span class='bar'></span>
										<span class='fdn'>dt</span>
									</div>
									) + V<sub>C</sub> = 0<br><br>

									Despejamos (RC)(
									<div class='fraction'>
										<span class='fup'>dV<sub>C</sub></span>
										<span class='bar'></span>
										<span class='fdn'>dt</span>
									</div>
									):<br>
									(RC)(
									<div class='fraction'>
										<span class='fup'>dV<sub>C</sub></span>
										<span class='bar'></span>
										<span class='fdn'>dt</span>
									</div>
									) = V<sub>S</sub> - V<sub>C</sub><br>
									Sustituimos con nuestros valores:<br>
									(<span id="rcc1"></span>Ω)(<span id="rcc2"></span>)(
									<div class='fraction'>
										<span class='fup'>dV<sub>C</sub></span>
										<span class='bar'></span>
										<span class='fdn'>dt</span>
									</div>
									) = V<sub>S</sub> - V<sub>C</sub><br><br>
											
									Despejamos los voltajes:<br>
									<div class='fraction'>
										<span class='fup'>dV<sub>C</sub></span>
										<span class='bar'></span>
										<span class='fdn'>V<sub>S</sub> - V<sub>C</sub></span>
									</div>
									= 
									<div class='fraction'>
										<span class='fup'>dt</span>
										<span class='bar'></span>
										<span class='fdn'>RC</span>
									</div><br>
									Integramos amabas partes:<br>
									<div class='eq-c'>
										<span class='intsuma'>
										<span class='lim-up'>V<sub>C</sub></span>
										<span class='sum'>&int;</span>
										<span class='lim'>0</span>
										</span>
										<div class='fraction'>
											<span class='fup'>dV<sub>C</sub></span>
											<span class='bar'></span>
											<span class='fdn'>V<sub>S</sub> - V<sub>C</sub></span>
										</div>
										= - 
										<span class='intsuma'>
										<span class='lim-up'>t</span>
										<span class='sum'>&int;</span>
										<span class='lim'>0</span>
										</span>
										<div class='fraction'>
											<span class='fup'>dt</span>
											<span class='bar'></span>
											<span class='fdn'>RC</span>
										</div>
										<br>
										[In (V<sub>S</sub> - V<sub>C</sub>)]
										<span class='intsuma'>
										<span class='lim-up'>V<sub>C</sub></span>
										<span class='sum'></span>
										<span class='lim'>0</span>
										</span>
										= - [
										<div class='fraction'>
											<span class='fup'>t</span>
											<span class='bar'></span>
											<span class='fdn'>RC</span>
										</div>
										]
										<span class='intsuma'>
										<span class='lim-up'>t</span>
										<span class='sum'></span>
										<span class='lim'>0</span>
										</span>
									</div>
									Sustituimos con nuestros valores:<br>
									<div class='eq-c'>
										[In (<span id="rcc3"></span>v - V<sub>C</sub>)]
										<span class='intsuma'>
										<span class='lim-up'>V<sub>C</sub></span>
										<span class='sum'></span>
										<span class='lim'>0</span>
										</span>
										= - [
										<div class='fraction'>
											<span class='fup'>t</span>
											<span class='bar'></span>
											<span class='fdn'><span id="rcc4"></span></span>
										</div>
										]
										<span class='intsuma'>
										<span class='lim-up'>t</span>
										<span class='sum'></span>
										<span class='lim'>0</span>
										</span>
									</div><br>

									Evaluamos los limites de la integral:<br>
									<div class='eq-c'>
										[In (V<sub>S</sub> - V<sub>C</sub>) - In (V<sub>S</sub> - 0)] = - [
										<div class='fraction'>
											<span class='fup'>t</span>
											<span class='bar'></span>
											<span class='fdn'>RC</span>
										</div>
										- 
										<div class='fraction'>
											<span class='fup'>0</span>
											<span class='bar'></span>
											<span class='fdn'>RC</span>
										</div>
										]<br>
										[In (V<sub>S</sub> - V<sub>C</sub>) - In (V<sub>S</sub>)] = - [
										<div class='fraction'>
											<span class='fup'>t</span>
											<span class='bar'></span>
											<span class='fdn'>RC</span>
										</div>
										]
									</div>

									Sustituimos con nuestros valores:<br>
									[In (<span id="rcc5"></span>v - V<sub>C</sub>) - In (<span id="rcc6"></span>)] = - 
									<div class='fraction'>
										<span class='fup'>t</span>
											<span class='bar'></span>
											<span class='fdn'><span id="rcc7"></span></span>
									</div><br>

									Aplicamos una ley de los logaritmos (Ln(a) - Ln(b) = Ln(
									<div class='fraction'>
										<span class='fup'>a</span>
										<span class='bar'></span>
										<span class='fdn'>b</span>
									</div>
									)):<br>
									In(
									<div class='fraction'>
										<span class='fup'>V<sub>S</sub> - V<sub>C</sub></span>
										<span class='bar'></span>
										<span class='fdn'>V<sub>S</sub></span>
									</div>
									) = -
									<div class='fraction'>
										<span class='fup'>t</span>
										<span class='bar'></span>
										<span class='fdn'>RC</span>
									</div><br>
									Despejamos V<sub>C</sub>:<br>
									e(Ln
									<div class='fraction'>
										<span class='fup'>V<sub>S</sub> - V<sub>C</sub></span>
										<span class='bar'></span>
										<span class='fdn'>V<sub>S</sub></span>
									</div>
									) = e(-
									<div class='fraction'>
										<span class='fup'>t</span>
										<span class='bar'></span>
										<span class='fdn'>RC</span>
									</div>
									)<br>
									<div class='fraction'>
										<span class='fup'>V<sub>S</sub> - V<sub>C</sub></span>
										<span class='bar'></span>
										<span class='fdn'>V<sub>S</sub></span>
									</div>
									= e<sup>-t/RC</sup><br>
									V<sub>C</sub> - V<sub>S</sub> = V<sub>C</sub> e<sup>-t/RC</sup><br>
									- V<sub>C</sub> = V<sub>S</sub> e<sup>-t/RC</sup> - V<sub>S</sub><br>
									(-1)(- V<sub>C</sub>) = (-1)(V<sub>S</sub> e<sup>-t/RC</sup> - V<sub>S</sub>)<br>
									V<sub>C</sub> = -(V<sub>S</sub> e<sup>-t/RC</sup>) + V<sub>S</sub><br>
									V<sub>C</sub> = V<sub>S</sub> (1 - e<sup>-t/RC</sup>)<br>	
								</p>	
								<div class="divider black"></div>
							</div>
								<p class="left-align"><b>Resultado:</b></p>	
								<h5 class="center-align">V<sub>C</sub> = <span id="r1_carga_rc"></span> (1 - e<sup>-t/<span id="r2_carga_rc"></span></sup>)</h5>							
								<a class="right-align" onClick="op_carga_rc();" id="op_carga_rc" style="display:none;">Ocultar procedimiento</a>	
								<a class="right-align" onClick="mp_carga_rc();" id="mp_carga_rc" style="display:none;">Mostrar procedimiento</a>
						</div>
				</div>
				<div id="descarga_rc" style="display:none;">
					<div class="row">
						<h5 align="center"><b>Descarga</b></h5>
	    				<div class="col s12 m6 l6">
							<center><img class="materialboxed responsive-img" data-caption="Circuito base" width="400" src="../images/RCinicial.PNG"></center><br>
							<center><img class="materialboxed responsive-img" data-caption="Circuito base" width="400" src="../images/RCdescarga.PNG"></center>
	    				</div>
	    				<div class="col s12 m6 l6">
				    		<h6><b>Datos:</b></h6>
				    		<div class="row">
						        <div class="input-field inline col s12">
							        <input id="rcd_s" type="text" class="validate" size="10" maxlength="10">
									<label for="rcd_s">Voltaje del la fuente (volt)</label>
								</div>
								<div class="input-field inline col s12">
									<input id="rcd_r" type="text" class="validate">
									<label for="rcd_r">Valor de la resistencia (Ω)</label>
								</div>          
								<div class="input-field inline col s6">
									<input id="rcd_c" type="text" class="validate">
									<label for="rcd_c">Valor del capacitor (faradio)</label>
								</div>
								<div class="input-field col s6">
									<select name="rcd" id="rcd">
										<option value="">F</option>
										<option value="-3">mF</option>
										<option value="-6">μF</option>
										<option value="-9">nF</option>
										<option value="-12">pF</option>
									</select>
									<label>Unidad de medida</label>
								</div>
								<div class="input-field inline col s12">
							        <input id="rcd_vi" type="text" class="validate" size="10" maxlength="10">
									<label for="rcd_vi">Voltaje inicial (volt)</label>
								</div>
							</div>
							<center><button class="btn amber darken-3" type="button" onClick="RC_descarga_b();">Resolver</button></center>
	    				</div>
	    			</div>

	    			<div class="divider black" id="div_descarga_rc" style="display:none;"></div><br>
						<div class="card-panel amber lighten-4" id="resultado_descarga_rc" style="display:none;">
							<div id="procedimiento_descarga_rc" style="display:none;">
								<p>
									<b>Procedimiento:</b><br><br>
									Sabemos que:<br>
									I<sub>C</sub> = (C)
									<div class='fraction'>
										<span class='fup'>dV<sub>C</sub></span>
										<span class='bar'></span>
										<span class='fdn'>dt</span>
									</div><br>
									V<sub>R</sub> = (R)(I<sub>C</sub>)<br><br>

									Para t < 0 el capacitor esta cargado:<br><br>
										
									En t = 0 (el switch se abre), y se aplican las leyes de Kirchhoff para obtener la ecuacion del circuito, entonces tenemos que:<br>
									V<sub>R</sub> + V<sub>C</sub> = 0<br>
									Sustituimos V<sub>R</sub>:<br>
									(R)(I<sub>C</sub>) + V<sub>C</sub> = 0<br>
									Sustituimos I<sub>C</sub>:<br>
									(R) C
									<div class='fraction'>
										<span class='fup'>dV<sub>C</sub></span>
										<span class='bar'></span>
										<span class='fdn'>dt</span>
									</div>
									 + V<sub>C</sub> = 0<br><br>
									
									Despejamos V<sub>C</sub>:<br>
									V<sub>C</sub> = - (R)C
									<div class='fraction'>
										<span class='fup'>dV<sub>C</sub></span>
										<span class='bar'></span>
										<span class='fdn'>dt</span>
									</div><br><br>

									Despejamos los voltajes:<br>
									<div class='fraction'>
										<span class='fup'>dV<sub>C</sub></span>
										<span class='bar'></span>
										<span class='fdn'>V<sub>C</sub></span>
									</div>
									= 
									<div class='fraction'>
										<span class='fup'>dt</span>
										<span class='bar'></span>
										<span class='fdn'>RC</span>
									</div><br>
									Integramos amabas partes:<br>
									<div class='eq-c'>
										<span class='intsuma'>
										<span class='lim-up'>V<sub>C</sub></span>
										<span class='sum'>&int;</span>
										<span class='lim'>V<sub>S</sub></span>
										</span>
										<div class='fraction'>
											<span class='fup'>dV<sub>C</sub></span>
											<span class='bar'></span>
											<span class='fdn'>V<sub>C</sub></span>
										</div>
										= - 
										<span class='intsuma'>
										<span class='lim-up'>t</span>
										<span class='sum'>&int;</span>
										<span class='lim'>0</span>
										</span>
										<div class='fraction'>
											<span class='fup'>dt</span>
											<span class='bar'></span>
											<span class='fdn'>RC</span>
										</div>
										<br>
										[In (V<sub>C</sub>)]
										<span class='intsuma'>
										<span class='lim-up'>V<sub>C</sub></span>
										<span class='sum'></span>
										<span class='lim'>V<sub>S</sub></span>
										</span>
										= - [
										<div class='fraction'>
											<span class='fup'>t</span>
											<span class='bar'></span>
											<span class='fdn'>RC</span>
										</div>
										]
										<span class='intsuma'>
										<span class='lim-up'>t</span>
										<span class='sum'></span>
										<span class='lim'>0</span>
										</span>
									</div>
									Sustituimos con nuestros valores:<br>
									[In (V<sub>C</sub>)]
									<span class='intsuma'>
									<span class='lim-up'>V<sub>C</sub></span>
									<span class='sum'></span>
									<span class='lim'><span id="rcd1"></span></span>
									</span>
									= - [
									<div class='fraction'>
										<span class='fup'>t</span>
										<span class='bar'></span>
										<span class='fdn'><span id="rcd2"></span></span>
									</div>
									]
									<span class='intsuma'>
									<span class='lim-up'>t</span>
									<span class='sum'></span>
									<span class='lim'>0</span>
									</span><br><br>

									Evaluamos los limites de la integral:<br>
									<div class='eq-c'>
										[In (V<sub>C</sub>) - In (V<sub>S</sub>)] = - [
										<div class='fraction'>
											<span class='fup'>t</span>
											<span class='bar'></span>
											<span class='fdn'>RC</span>
										</div>
										- 
										<div class='fraction'>
											<span class='fup'>0</span>
											<span class='bar'></span>
											<span class='fdn'>RC</span>
										</div>
										]<br>
										[In (V<sub>C</sub>) - In (V<sub>S</sub>)] = - [
										<div class='fraction'>
											<span class='fup'>t</span>
											<span class='bar'></span>
											<span class='fdn'>RC</span>
										</div>
										]
									</div>
									Sustituimos con nuestros valores:<br>
									[In (V<sub>C</sub>) - In (<span id="rcd3"></span>)] = - [
									<div class='fraction'>
										<span class='fup'>t</span>
										<span class='bar'></span>
										<span class='fdn'><span id="rcd4"></span></span>
									</div>
									]<br>
									Aplicamos una ley de los logaritmos (Ln(a) - Ln(b) = Ln(
									<div class='fraction'>
										<span class='fup'>a</span>
										<span class='bar'></span>
										<span class='fdn'>b</span>
									</div>
									)):<br>
									In(
									<div class='fraction'>
										<span class='fup'>V<sub>C</sub></span>
										<span class='bar'></span>
										<span class='fdn'>V<sub>S</sub></span>
									</div>
									) = -
									<div class='fraction'>
										<span class='fup'>t</span>
										<span class='bar'></span>
										<span class='fdn'>RC</span>
									</div><br>

									Despejamos V<sub>C</sub>:<br>
									e(In
									<div class='fraction'>
										<span class='fup'>V<sub>C</sub></span>
										<span class='bar'></span>
										<span class='fdn'>V<sub>S</sub></span>
									</div>
									) = e(-
									<div class='fraction'>
										<span class='fup'>t</span>
										<span class='bar'></span>
										<span class='fdn'>RC</span>
									</div>
									)<br>
									<div class='fraction'>
										<span class='fup'>V<sub>C</sub></span>
										<span class='bar'></span>
										<span class='fdn'>V<sub>S</sub></span>
									</div>
									= e<sup>-t/RC</sup><br>
									V<sub>C</sub> = V<sub>S</sub> e<sup>-t/RC</sup><br>
								</p>	
								<div class="divider black"></div>
							</div>
								<p class="left-align"><b>Resultado:</b></p>	
								<h5 class="center-align">V<sub>C</sub> = <span id="r1_descarga_rc"></span> (e<sup>-t/<span id="r2_descarga_rc"></span></sup>)</h5>							
								<a class="right-align" onClick="op_descarga_rc();" id="op_descarga_rc" style="display:none;">Ocultar procedimiento</a>	
								<a class="right-align" onClick="mp_descarga_rc();" id="mp_descarga_rc" style="display:none;">Mostrar procedimiento</a>
						</div>					
				</div>
    		</div>
    	</div>
    </div>
    
    <div id="test2" class="col s12">
    	    	<div class="row">
    		<h4 class="center-align"><b>Circuitos RL</b></h4>
    		<div class="col s12 m2 l2">
    			<ul class="collection">
			      <li class="collection-item" onClick="RL_carga();">Carga</li>
			      <li class="collection-item" onClick="RL_descarga();">Descarga</li>
			    </ul>
    		</div>
    		<div class="col s12 m10 l10">
				<div id="carga_rl" style="display:block;">
					<div class="row">
						<h5 align="center"><b>Carga</b></h5>
	    				<div class="col s12 m6 l6">
							<center><img class="materialboxed responsive-img" data-caption="Circuito base" width="400" src="../images/RLinicial.PNG"></center><br>
							<center><img class="materialboxed responsive-img" data-caption="Circuito base" width="400" src="../images/RLcarga.PNG"></center>
	    				</div>
	    				<div class="col s12 m6 l6">
				    		<h6><b>Datos:</b></h6>
				    		<div class="row">
						        <div class="input-field inline col s12">
							        <input id="rlc_s" type="text" class="validate" size="10" maxlength="10">
									<label for="rlc_s">Voltaje del la fuente (volt)</label>
								</div>
								<div class="input-field inline col s12">
									<input id="rlc_r" type="text" class="validate">
									<label for="rlc_r">Valor de la resistencia (Ω)</label>
								</div>          
								<div class="input-field inline col s6">
									<input id="rlc_i" type="text" class="validate">
									<label for="rlc_i">Valor del inductor (henrio)</label>
								</div>
								<div class="input-field col s6">
									<select name="rlc" id="rlc">
										<option value="">H</option>
										<option value="-3">mH</option>
										<option value="-6">μH</option>
										<option value="-9">nH</option>
										<option value="-12">pH</option>
									</select>
									<label>Unidad de medida</label>
								</div>
							</div>
							<center><button class="btn amber darken-3" type="button" onClick="RL_carga_b();">Resolver</button></center>
	    				</div>
	    			</div>

	    			<div class="divider black" id="div_carga_rl" style="display:none;"></div><br>
						<div class="card-panel amber lighten-4" id="resultado_carga_rl" style="display:none;">
							<div id="procedimiento_carga_rl" style="display:none;">
								<p>
									<b>Procedimiento:</b><br><br>
									V<sub>L</sub> = (L)
									<div class="fraction">
										<span class="fup">dI<sub>L</sub></span>
										<span class="bar">/</span>
										<span class="fdn">dt</span>
									</div><br>
									V<sub>R</sub> = (R)(I<sub>L</sub>)<br><br>	
									
									Para t < 0 (cuando el switch aun esta abierto) las condiciones iniciales son:<br>
									I<sub>0</sub> = 0<br>
									V<sub>0</sub> = 0<br><br>
									
									En t = 0 (el switch se cierra), y se aplican las leyes de Kirchhoff para obtener la ecuacion del circuito, entonces tenemos que:<br>
									-V<sub>S</sub> + V<sub>R</sub> + V<sub>L</sub> = 0<br>
									Sustituimos V<sub>R</sub> y V<sub>L</sub>:<br>
									-V<sub>S</sub> + (R)(I<sub>L</sub>) + (L)(
									<div class='fraction'>
										<span class='fup'>dI<sub>L</sub></span>
										<span class='bar'></span>
										<span class='fdn'>dt</span>
									</div>
									) = 0<br>

									Despejamos (L)(
									<div class='fraction'>
										<span class='fup'>dI<sub>L</sub></span>
										<span class='bar'></span>
										<span class='fdn'>dt</span>
									</div>
									):<br>
									(L)(
									<div class='fraction'>
										<span class='fup'>dI<sub>L</sub></span>
										<span class='bar'></span>
										<span class='fdn'>dt</span>
									</div>
									) = V<sub>S</sub> - (R)(I<sub>L</sub>)<br>
									Sustituimos con nuestros valores:<br>
									(<span id="rlc1"></span>)(
									<div class='fraction'>
										<span class='fup'>dI<sub>L</sub></span>
										<span class='bar'></span>
										<span class='fdn'>dt</span>
									</div>
									) = <span id="rlc2"></span>v - (<span id="rlc3"></span>Ω)(I<sub>L</sub>)<br>
									Factorizamos:<br>
									(<span id="rlc4"></span>)(
									<div class='fraction'>
										<span class='fup'>dI<sub>L</sub></span>
										<span class='bar'></span>
										<span class='fdn'>dt</span>
									</div>
									) = <span id="rlc5"></span> (<span id="rlc6"></span> - I<sub>L</sub>)<br><br>
									Despejamos corrientes:<br>
									<div class='fraction'>
										<span class='fup'>dI<sub>L</sub></span>
										<span class='bar'></span>
										<span class='fdn'>V<sub>S</sub> - (R)I<sub>L</sub></span>
									</div>
									= 
									<div class='fraction'>
										<span class='fup'>dt</span>
										<span class='bar'></span>
										<span class='fdn'>L</span>
									</div><br>									
									Integramos amabas partes:<br>
									<div class='eq-c'>
										<span class='intsuma'>
										<span class='lim-up'>I<sub>L</sub></span>
										<span class='sum'>&int;</span>
										<span class='lim'>0</span>
										</span>
										<div class='fraction'>
											<span class='fup'>dI<sub>L</sub></span>
											<span class='bar'></span>
											<span class='fdn'>V<sub>S</sub> - (R)I<sub>L</sub></span>
										</div>
										= - 
										<span class='intsuma'>
										<span class='lim-up'>t</span>
										<span class='sum'>&int;</span>
										<span class='lim'>0</span>
										</span>
										<div class='fraction'>
											<span class='fup'>dt</span>
											<span class='bar'></span>
											<span class='fdn'>L</span>
										</div>
										<br>
										[In (V<sub>S</sub> - (R)I<sub>L</sub>)]
										<span class='intsuma'>
										<span class='lim-up'>I<sub>L</sub></span>
										<span class='sum'></span>
										<span class='lim'>0</span>
										</span>
										= - 
										<div class='fraction'>
											<span class='fup'>R</span>
											<span class='bar'></span>
											<span class='fdn'>L</span>
										</div>
										[t]
										<span class='intsuma'>
										<span class='lim-up'>t</span>
										<span class='sum'></span>
										<span class='lim'>0</span>
										</span>
									</div>
									Sustituimos con nuestros valores:<br>
									<div class='eq-c'>
										[In (<span id="rlc7"></span> - I<sub>L</sub>)]
										<span class='intsuma'>
										<span class='lim-up'>I<sub>L</sub></span>
										<span class='sum'></span>
										<span class='lim'>0</span>
										</span>
										= - 
										<div class='fraction'>
											<span class='fup'><span id="rlc8"></span></span>
											<span class='bar'></span>
											<span class='fdn'><span id="rlc9"></span></span>
										</div>
										[t]
										<span class='intsuma'>
										<span class='lim-up'>t</span>
										<span class='sum'></span>
										<span class='lim'>0</span>
										</span><br>
										[In (<span id="rlc10"></span> - I<sub>L</sub>)]
										<span class='intsuma'>
										<span class='lim-up'>I<sub>L</sub></span>
										<span class='sum'></span>
										<span class='lim'>0</span>
										</span>
										= - <span id="rlc11"></span>[t]
										<span class='intsuma'>
										<span class='lim-up'>t</span>
										<span class='sum'></span>
										<span class='lim'>0</span>
										</span>
									</div><br><br>
									Evaluamos los limites de la integral:<br>
										[In (V<sub>S</sub> - I<sub>L</sub>) - In (V<sub>S</sub> - 0)] = - 
										<div class='fraction'>
											<span class='fup'>R</span>
											<span class='bar'></span>
											<span class='fdn'>L</span>
										</div>
										[t - 0] <br>
										[In (V<sub>S</sub> - I<sub>L</sub>) - In (V<sub>S</sub>)] = - 
										<div class='fraction'>
											<span class='fup'>R</span>
											<span class='bar'></span>
											<span class='fdn'>L</span>
										</div>
										(t)<br>
									Sustituimos con nuestros valores:<br>
									[In (<span id="rlc12"></span> - I<sub>L</sub>) - In (<span id="rlc13"></span>)] = - <span id="rlc14"></span>(t)<br><br>
									Aplicamos una ley de los logaritmos (Ln(a) - Ln(b) = Ln(
									<div class='fraction'>
										<span class='fup'>a</span>
										<span class='bar'></span>
										<span class='fdn'>b</span>
									</div>
									)):<br>
									In(									
									<div class='fraction'>
										<span class='fup'>V<sub>S</sub> - I<sub>L</sub></span>
										<span class='bar'></span>
										<span class='fdn'>V<sub>S</sub></span>
									</div>								
									) = - 
									<div class='fraction'>
										<span class='fup'>R</span>
										<span class='bar'></span>
										<span class='fdn'>L</span>
									</div>
									(t)<br>
									
									Despejamos I<sub>L</sub>:<br>
									e(Ln
									<div class='fraction'>
										<span class='fup'>V<sub>S</sub> - I<sub>L</sub></span>
										<span class='bar'></span>
										<span class='fdn'>V<sub>S</sub></span>
									</div>
									) = e(-
									<div class='fraction'>
										<span class='fup'>R</span>
										<span class='bar'></span>
										<span class='fdn'>L</span>
									</div>
									(t))<br>
									<div class='fraction'>
										<span class='fup'>V<sub>S</sub> - I<sub>L</sub></span>
										<span class='bar'></span>
										<span class='fdn'>V<sub>S</sub></span>
									</div>
									= e<sup>-(R/L)t</sup><br>
									V<sub>S</sub> - I<sub>L</sub> = V<sub>S</sub> e<sup>-(R/L)t</sup><br>
									- I<sub>L</sub> = V<sub>S</sub> e<sup>-(R/L)t</sup> - V<sub>S</sub><br>
									(-1)(- I<sub>L</sub>) = (-1)(V<sub>S</sub> e<sup>-RL(t)</sup> - V<sub>S</sub>)<br>
									I<sub>L</sub> = -(V<sub>S</sub> e<sup>-(R/L)t</sup>) + V<sub>S</sub><br>
									I<sub>L</sub> = V<sub>S</sub> (1 - e<sup>-(R/L)t</sup>)<br>
								</p>
								<div class="divider black"></div>
							</div>
								<p class="left-align"><b>Resultado:</b></p>	
								<h5 class="center-align">V<sub>C</sub> = <span id="r1_carga_rl"></span> (1 - e<sup>-<span id="r2_carga_rl"></span>(t)</sup>)</h5>		
								<a class="right-align" onClick="op_carga_rl();" id="op_carga_rl" style="display:none;">Ocultar procedimiento</a>	
								<a class="right-align" onClick="mp_carga_rl();" id="mp_carga_rl" style="display:none;">Mostrar procedimiento</a>
						</div>
				</div>
				<div id="descarga_rl" style="display:none;">
					<div class="row">
						<h5 align="center"><b>Descarga</b></h5>
	    				<div class="col s12 m6 l6">
							<center><img class="materialboxed responsive-img" data-caption="Circuito base" width="400" src="../images/RLinicial.PNG"></center><br>
							<center><img class="materialboxed responsive-img" data-caption="Circuito base" width="400" src="../images/RLdescarga.PNG"></center>
	    				</div>
	    				<div class="col s12 m6 l6">
				    		<h6><b>Datos:</b></h6>
				    		<div class="row">
						        <div class="input-field inline col s12">
							        <input id="rld_s" type="text" class="validate" size="10" maxlength="10">
									<label for="rld_s">Voltaje del la fuente (volt)</label>
								</div>
								<div class="input-field inline col s12">
									<input id="rld_r" type="text" class="validate">
									<label for="rld_r">Valor de la resistencia (Ω)</label>
								</div>          
								<div class="input-field inline col s6">
									<input id="rld_i" type="text" class="validate">
									<label for="rld_i">Valor del inductor (henrio)</label>
								</div>
								<div class="input-field col s6">
									<select name="rld" id="rld">
										<option value="">H</option>
										<option value="-3">mH</option>
										<option value="-6">μH</option>
										<option value="-9">nH</option>
										<option value="-12">pH</option>
									</select>
									<label>Unidad de medida</label>
								</div>
							</div>
							<center><button class="btn amber darken-3" type="button" onClick="RL_descarga_b();">Resolver</button></center>
	    				</div>
	    			</div>

	    			<div class="divider black" id="div_descarga_rl" style="display:none;"></div><br>
						<div class="card-panel amber lighten-4" id="resultado_descarga_rl" style="display:none;">
							<div id="procedimiento_descarga_rl" style="display:none;">
								<p>
									<b>Procedimiento:</b><br><br>
									V<sub>L</sub> = (L)
									<div class="fraction">
										<span class="fup">dI<sub>L</sub></span>
										<span class="bar">/</span>
										<span class="fdn">dt</span>
									</div><br>
									V<sub>R</sub> = (R)(I<sub>L</sub>)<br><br>	
									
									Para t < 0 el capacitor esta cargado.<br>
									
									En t = 0 (el switch se abre), y se aplican las leyes de Kirchhoff para obtener la ecuacion del circuito, entonces tenemos que:<br>
									V<sub>R</sub> + V<sub>L</sub> = 0<br>
									Sustituimos V<sub>R</sub> y V<sub>L</sub>:<br>
									(R)(I<sub>L</sub>) + (L)(
									<div class='fraction'>
										<span class='fup'>dI<sub>L</sub></span>
										<span class='bar'></span>
										<span class='fdn'>dt</span>
									</div>
									) = 0<br>
									Despejamos (L)(
									<div class='fraction'>
										<span class='fup'>dI<sub>L</sub></span>
										<span class='bar'></span>
										<span class='fdn'>dt</span>
									</div>
									):<br>
									(L)(
									<div class='fraction'>
										<span class='fup'>dI<sub>L</sub></span>
										<span class='bar'></span>
										<span class='fdn'>dt</span>
									</div>
									) = - (R)(I<sub>L</sub>)<br>
									Sustituimos con nuestros valores:<br>
									(<span id="rld1"></span>)(
									<div class='fraction'>
										<span class='fup'>dI<sub>L</sub></span>
										<span class='bar'></span>
										<span class='fdn'>dt</span>
									</div>
									) = - (<span id="rld2"></span>Ω)(I<sub>L</sub>)<br>
									Despejamos corrientes:<br>
									<div class='fraction'>
										<span class='fup'>dI<sub>L</sub></span>
										<span class='bar'></span>
										<span class='fdn'>I<sub>L</sub></span>
									</div>
									= -
									<div class='fraction'>
										<span class='fup'>R</span>
										<span class='bar'></span>
										<span class='fdn'>L</span>
									</div> 
									(dt)<br>	
									Integramos amabas partes:<br>
									<div class='eq-c'>
										<span class='intsuma'>
										<span class='lim-up'>I<sub>L</sub></span>
										<span class='sum'>&int;</span>
										<span class='lim'>I<sub>0</sub></span>
										</span>
										<div class='fraction'>
											<span class='fup'>dI<sub>L</sub></span>
											<span class='bar'></span>
											<span class='fdn'>I<sub>L</sub></span>
										</div>
										= - 
										<div class='fraction'>
											<span class='fup'>R</span>
											<span class='bar'></span>
											<span class='fdn'>L</span>
										</div>
										<span class='intsuma'>
										<span class='lim-up'>t</span>
										<span class='sum'>&int;</span>
										<span class='lim'>0</span>
										</span>
										dt<br>
										[In (I<sub>L</sub>)]
										<span class='intsuma'>
										<span class='lim-up'>I<sub>L</sub></span>
										<span class='sum'></span>
										<span class='lim'>I<sub>0</sub></span>
										</span>
										= - 
										<div class='fraction'>
											<span class='fup'>R</span>
											<span class='bar'></span>
											<span class='fdn'>L</span>
										</div>
										[t]
										<span class='intsuma'>
										<span class='lim-up'>t</span>
										<span class='sum'></span>
										<span class='lim'>0</span>
										</span>
									</div>
									Sustituimos con nuestros valores:<br>
									<div class='eq-c'>
										[In (I<sub>L</sub>)]
										<span class='intsuma'>
										<span class='lim-up'>I<sub>L</sub></span>
										<span class='sum'></span>
										<span class='lim'><span id="rld3"></span></span>
										</span>
										= - 
										<div class='fraction'>
											<span class='fup'><span id="rld4"></span></span>
											<span class='bar'></span>
											<span class='fdn'><span id="rld5"></span></span>
										</div>
										[t]
										<span class='intsuma'>
										<span class='lim-up'>t</span>
										<span class='sum'></span>
										<span class='lim'>0</span>
										</span>
									</div><br>

									Evaluamos los limites de la integral:<br>
									[In (I<sub>L</sub>) - In (I<sub>0</sub>)] = - 
									<div class='fraction'>
										<span class='fup'>R</span>
										<span class='bar'></span>
										<span class='fdn'>L</span>
									</div>
									[t - 0] <br>
									[In (I<sub>L</sub>) - In (I<sub>0</sub>)] = - 
									<div class='fraction'>
										<span class='fup'>R</span>
										<span class='bar'></span>
										<span class='fdn'>L</span>
									</div>
									[t]<br>
									Sustituimos con nuestros valores:<br>
									[In (I<sub>L</sub>) - In (<span id="rld6"></span>)] = - 
									<div class='fraction'>
										<span class='fup'><span id="rld7"></span></span>
										<span class='bar'></span>
										<span class='fdn'><span id="rld8"></span></span>
									</div>
									(t)<br><br>
									Aplicamos una ley de los logaritmos (Ln(a) - Ln(b) = Ln(
									<div class='fraction'>
										<span class='fup'>a</span>
										<span class='bar'></span>
										<span class='fdn'>b</span>
									</div>
									)):<br>
									In(									
									<div class='fraction'>
										<span class='fup'>I<sub>L</sub></span>
										<span class='bar'></span>
										<span class='fdn'>I<sub>0</sub></span>
									</div>								
									) = - 
									<div class='fraction'>
										<span class='fup'>R</span>
										<span class='bar'></span>
										<span class='fdn'>L</span>
									</div>
									(t)<br><br>
									
									Despejamos I<sub>L</sub>:<br>
									e(Ln
									<div class='fraction'>
										<span class='fup'>I<sub>L</sub></span>
										<span class='bar'></span>
										<span class='fdn'>I<sub>0</sub></span>
									</div>
									) = e(-
									<div class='fraction'>
										<span class='fup'>R</span>
										<span class='bar'></span>
										<span class='fdn'>L</span>
									</div>
									(t))<br>
									<div class='fraction'>
										<span class='fup'>I<sub>L</sub></span>
										<span class='bar'></span>
										<span class='fdn'>I<sub>0</sub></span>
									</div>
									= e<sup>-(R/L)t</sup><br>
									I<sub>L</sub> = I<sub>0</sub> e<sup>-(R/L)t</sup><br>
								</p>	
								<div class="divider black"></div>
							</div>
								<p class="left-align"><b>Resultado:</b></p>	
								<h5 class="center-align">I<sub>L</sub> = <span id="r1_descarga_rl"></span> (- e<sup>-<span id="r2_descarga_rl"></span>(t)</sup>)</h5>
								<a class="right-align" onClick="op_descarga_rl();" id="op_descarga_rl" style="display:none;">Ocultar procedimiento</a>	
								<a class="right-align" onClick="mp_descarga_rl();" id="mp_descarga_rl" style="display:none;">Mostrar procedimiento</a>
						</div>					
				</div>
    		</div>
    	</div>
    </div>

  </div>


<div class="tap-target amber accent-1" data-activates="help">
    <div class="tap-target-content">
      <h5 align="right">Circuitos RL y RC</h5>
      <p align="right">Son circuitos que contienen solamente un componente que almacena energía (condensador o inductor), y que además pueden describirse usando solamente una ecuación diferencial de primer orden.</p>
    </div>
</div>

    <?php include('../includes/footer.php'); ?>
</body>
</html>