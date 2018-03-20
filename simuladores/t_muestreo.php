<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Banana App | </title>
    <?php include('../includes/head.php'); ?>
	<script src="js/t_muestreo.js"></script>
 	<script type="text/javascript">
 		function uno(){
		    document.getElementById('uno').style.display = 'block';
		    document.getElementById('dos').style.display = 'none';
		    document.getElementById('uno_d').style.display = 'block';
		    document.getElementById('dos_d').style.display = 'none';
 		}
 		function dos(){
		    document.getElementById('uno').style.display = 'none';
		    document.getElementById('dos').style.display = 'block';
		    document.getElementById('uno_d').style.display = 'none';
		    document.getElementById('dos_d').style.display = 'block';
 		}
 	</script>

</head>
<body>
    <?php include('../includes/nav.php'); ?>

<div class="card-panel amber lighten-3">
<center>
	<h4><i class="small material-icons">settings_input_composite</i> Tipos de Muestreo</h4>
</center>	
</div>

  <div class="row">
    <div class="col s12">
      <ul class="tabs">
        <li class="tab col s6"><a href="#test1" class="active" onClick="uno();">Aleatorio Sistematico</a></li>
        <li class="tab col s6"><a href="#test2" onClick="dos();">Aleatorio Estratificado</a></li>
      </ul>
    </div>
    <div id="test1" class="col s12">
    	<div class="container">
    	<h4 align="center"><b>Aleatorio Sistematico</b></h4>       
			<div class="row">
			    <div class="input-field inline col s6">
			        <input id="m" type="text">
			        <label for="m">Tamaño de la poblacion</label>
				</div>          
			    <div class="input-field inline col s6">
			        <input id="n" type="text">
			        <label for="n">Tamaño de la muestra</label>
				</div>
			</div>
			<center><button class="btn waves-effect waves-light amber darken-3" onClick="m_s();">Calcular</button></center><br/><br/>
			<div id="resultado_s" class="card-panel amber lighten-4" style="display:none;">
                                <div id="procedimiento_s" style="display:none;">
                                    <p>
                                        <b>Procedimiento:</b><br><br>
										Datos disponibles:<br>
										Np = <span id="s_1"></span><br>
										n = <span id="s_2"></span><br><br>

										Calculamos k:
										<div></div>
										k = 
										<div class="fraction">
											<span class="fup">Np</span>
											<span class="bar">/</span>
											<span class="fdn">n</span>
										</div>
										= 
										<div class="fraction">
											<span class="fup"><span id="s_3"></span></span>
											<span class="bar">/</span>
											<span class="fdn"><span id="s_4"></span></span>
										</div>
										= <span id="s_5"></span><br><br>
										
										Definimos h:<br>
										h es un  numero aleatorio entre 1 y k, en esta caso es: <span id="s_6"></span><br><br>

										La formula para calcular la muestra es:<br>
										h, h+k, h+2k, ... , h+(n+1)k<br><br>
										Sustituimos la formula con nuestros valores y obtenemos nuestro resultado:<br>
										<span id="s_7"></span>
                                    </p>    
                                    <div class="divider black"></div>
                                </div>
                                <p>
                                    <b>Resultado:</b>
                                </p>
                                <p align="center">
                                    <span id="res1"></span>
                                </p>
                                <a class="right-align" onClick="op_s();" id="op_s" style="display:none;">Ocultar procedimiento</a>  
                                <a class="right-align" onClick="mp_s();" id="mp_s" style="display:none;">Mostrar procedimiento</a>
                            </div>
    	</div>
    </div>
    
    <div id="test2" class="col s12">
    	<div class="container">
    	<h4 align="center"><b>Aleatorio Estratificado</b></h4>       
			<div class="row">         
			    <div class="input-field inline col s8">
			        <input id="te" type="text">
			        <label for="te">Tamaño de los estratos separados por coma (,)</label>
				</div>          
			    <div class="input-field inline col s4">
			        <input id="tm" type="text">
			        <label for="tm">Tamaño de muestra</label>
				</div>

			</div>
			<center><button class="btn waves-effect waves-light amber darken-3" onClick="iniciar();">Calcular</button></center><br/><br/>
			<div id="resultado_e" class="card-panel amber lighten-4" style="display:none;">
                                <div id="procedimiento_e" style="display:none;">
                                    <p>
                                        <b>Procedimiento:</b><br><br>
                                    </p>    
                                    <div class="divider black"></div>
                                </div>
                                <p>
                                    <b>Resultado:</b>
                                </p>
                                <p align="center">
                                    <span id="e_1"></span><span id="e_2"></span>
                                </p>
                                <a class="right-align" onClick="op_e();" id="op_e" style="display:none;">Ocultar procedimiento</a>  
                                <a class="right-align" onClick="mp_e();" id="mp_e" style="display:none;">Mostrar procedimiento</a>
                            </div>
    	</div>   
    </div>
  </div>


<div class="tap-target amber accent-1" data-activates="help">
    <div class="tap-target-content">
      <h5 align="right"><span id="uno" style="display: block;">Sistematico</span><span id="dos" style="display: none;">Estratificado</span></h5>
      <p align="right"><span id="uno_d" style="display: block;">Es un tipo de muestreo que es aplicable cuando los elementos de la población sobre la que se realiza el muestreo están ordenados.</span><span id="dos_d" style="display: none;">Técnica de muestreo probabilístico en donde el investigador divide a toda la población en diferentes subgrupos o estratos.</span></p>
    </div>
</div>

    <?php include('../includes/footer.php'); ?>
</body>
</html>