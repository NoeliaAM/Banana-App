<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Banana App | </title>
    <?php include('../includes/head.php'); ?>
    <script src="js/t_colas.js"></script>
 	<script type="text/javascript">
 		function uno(){
		    document.getElementById('uno').style.display = 'block';
		    document.getElementById('dos').style.display = 'none';
		    document.getElementById('tres').style.display = 'none';
		    document.getElementById('uno_d').style.display = 'block';
		    document.getElementById('dos_d').style.display = 'none';
		    document.getElementById('tres_d').style.display = 'none';
 		}
 		function dos(){
		    document.getElementById('uno').style.display = 'none';
		    document.getElementById('dos').style.display = 'block';
		    document.getElementById('tres').style.display = 'none';
		    document.getElementById('uno_d').style.display = 'none';
		    document.getElementById('dos_d').style.display = 'block';
		    document.getElementById('tres_d').style.display = 'none';
 		}
 		function tres(){
		    document.getElementById('uno').style.display = 'none';
		    document.getElementById('dos').style.display = 'none';
		    document.getElementById('tres').style.display = 'block';
		    document.getElementById('uno_d').style.display = 'none';
		    document.getElementById('dos_d').style.display = 'none';
		    document.getElementById('tres_d').style.display = 'block';
 		}
 	</script>

</head>
<body>
    <?php include('../includes/nav.php'); ?>

<div class="card-panel amber lighten-3">
<center>
	<h4><i class="small material-icons">settings_input_composite</i> Teoria de Colas</h4>
</center>	
</div>

  <div class="row">
    <div class="col s12">
      <ul class="tabs">
        <li class="tab col s4"><a href="#test1" onClick="uno();">Modelo M/M/1</a></li>
        <li class="tab col s4"><a href="#test2" onClick="dos();">Modelo M/M/S</a></li>
        <li class="tab col s4"><a href="#test3" onClick="tres();">Modelo M/M/1/k</a></li>
      </ul>
    </div>
    
    <div id="test1" class="col s12">
    	<div class="container">
      	<h4 align="center"><b>Modelo M/M/1</b></h4> 
          <div class="row">
            <div class="col s12 m6 l6">
              <h6><b>Datos para calcular medidas de rendimiento del sistema:</b></h6>
              <div class="input-field col s12">
                <input id="m" type="text" class="validate">
                <label for="m">Introduce μ (mi)</label>
              </div>
              <div class="input-field col s12">
                <input id="lam" type="text" class="validate">
                <label for="lam">Introduce λ (lambda)</label>
              </div>
              <h6><b>Datos para calcular probabilidades:</b></h6>
              <div class="input-field col s12">
                <input id="n" type="text" class="validate">
                <label for="n">Introduce n (no. de paquetes en el sistema)</label>
              </div>
              <center><button class="btn amber darken-3" type="button" onClick="mm1();">Resolver</button></center>
            </div>

            <div class="col s12 m6 l6">
                <div class="card-panel amber lighten-4" id="resultado_mm1" style="display:none;">
                  <div id="procedimiento_mm1" style="display:none;">
                    <p>
                      <b>Procedimiento:</b><br>

                          Datos disponibles:<br>
                          λ = <span id="mm1_1"></span><br>
                          μ = <span id="mm1_2"></span><br>
                    </p>
                      <p class="center-align">
                        <b>Medidas de rendimiento del sistema</b>
                      </p>
                      
                      <div id="mm1_p" style="display: none;">
                        <p>
                          Intensidad de trafico en el sistema:<br>
                          <div></div>
                          ρ=
                          <div class="fraction">
                            <span class="fup">λ</span>
                            <span class="bar">/</span>
                            <span class="fdn">μ</span>
                          </div> = 
                          <div class="fraction">
                            <span class="fup"><span id="mm1_3"></span></span>
                            <span class="bar">/</span>
                            <span class="fdn"><span id="mm1_4"></span></span>
                          </div> = <span id="mm1_5"></span><br><br>
                        </p>
                      </div>

                      <div id="sis_est" style="display: none;">
                        <p>
                          Tiempo medio que pasan los paquetes en el sistema:<br>
                          <div></div>
                          W=
                          <div class="fraction">
                            <span class="fup">1</span>
                            <span class="bar">/</span>
                            <span class="fdn">μ - λ</span>
                          </div> = 
                          <div class="fraction">
                            <span class="fup">1</span>
                            <span class="bar">/</span>
                            <span class="fdn"><span id="mm1_6"></span> - <span id="mm1_7"></span></span>
                          </div> = <span id="mm1_8"></span><br><br>              
                          Tiempo medio que pasan los paquetes en la cola:<br>
                          Wq= W - 
                          <div class="fraction">
                            <span class="fup">1</span>
                            <span class="bar">/</span>
                            <span class="fdn">μ</span>
                          </div> = <span id="mm1_9"></span> - 
                          <div class="fraction">
                            <span class="fup">1</span>
                            <span class="bar">/</span>
                            <span class="fdn"><span id="mm1_10"></span></span>
                          </div> = <span id="mm1_11"></span><br><br>     
                          Numero de paquetes en el sistema:<br>
                          L= Lq + ρ = <span id="mm1_15"></span> + <span id="mm1_16"></span> = <span id="mm1_17"></span><br><br>
                          Numero de paquetes en la cola:<br>
                          Lq= 
                          <div class="fraction">
                            <span class="fup">ρ<sup>2</sup></span>
                            <span class="bar">/</span>
                            <span class="fdn">1 - ρ</span>
                          </div> = 
                          <div class="fraction">
                            <span class="fup"><span id="mm1_12"></span><sup>2</sup></span>
                            <span class="bar">/</span>
                            <span class="fdn">1 - <span id="mm1_13"></span></span>
                          </div> = <span id="mm1_14"></span><br>
                        </p>              
                      </div>
                      
                      <div id="propi_mm1" style="display: none;">
                        <p class="center-align">
                          <b>Propiedades</b>
                        </p>
                        <p>
                          P<sub>n</sub> = ρ<sup>n</sup> (1 - ρ)<br>
                          P<sub><span id="mm1_18"></span></sub> = ρ<sup><span id="mm1_19"></span></sup> (1 - <span id="mm1_20"></span>) = <span id="mm1_21"></span>
                        </p>
                      </div>
           
                    <div class="divider black"></div>
                  </div>

                  <p>
                    <b>Resultado:</b><br>
                  </p>

                  <div id="sis_no_est" style="display: none;">
                    <p>
                      Medidas de rendimiento del sistema:<br>
                      ρ = <span id="mm1_29"></span><br><br>
                      <span style="color: red;">El sistema no es estable, ya que ρ es mayor o igual a 1.</span>
                    </p>
                  </div>

                  <div id="mm1_res" style="display: none;">
                    <p>
                      Medidas de rendimiento del sistema:<br>
                      ρ = <span id="mm1_22"></span><br>
                      W = <span id="mm1_23"></span><br>
                      Wq = <span id="mm1_24"></span><br>
                      L = <span id="mm1_25"></span><br>
                      Lq = <span id="mm1_26"></span><br><br>
                    </p>
                  </div>
   
                  <div id="propi_mm1res" style="display: none;">
                    <p>
                      Propiedades:<br>
                      P<sub><span id="mm1_27"></span></sub> = <span id="mm1_28"></span><br>
                    </p>
                  </div>

                  <a class="right-align" onClick="op_mm1();" id="op_mm1" style="display:none;">Ocultar procedimiento</a>  
                  <a class="right-align" onClick="mp_mm1();" id="mp_mm1" style="display:none;">Mostrar procedimiento</a>
                </div>
            </div>
          </div>      
    	</div>
    </div>
    
    <div id="test2" class="col s12">
      <div class="container">
        <h4 align="center"><b>Modelo M/M/S</b></h4> 
          <div class="row">
            <div class="col s12 m6 l6">
              <h6><b>Datos para calcular medidas de rendimiento del sistema:</b></h6>
              <div class="input-field col s12">
                <input id="m2" type="text" class="validate">
                <label for="m2">Introduce μ (mi)</label>
              </div>
              <div class="input-field col s12">
                <input id="lam2" type="text" class="validate">
                <label for="lam2">Introduce λ (lambda)</label>
              </div>
              <div class="input-field col s12">
                <input id="c" type="text" class="validate">
                <label for="c">Introduce c (numero de servidores)</label>
              </div>
              <h6><b>Datos para calcular probabilidades:</b></h6>
              <div class="input-field col s12">
                <input id="n2" type="text" class="validate">
                <label for="n2">Introduce n (no. de paquetes en el sistema)</label>
              </div>
              <center><button class="btn amber darken-3" type="button" onClick="mms();">Resolver</button></center>
            </div>
            <div class="col s12 m6 l6">
                <div class="card-panel amber lighten-4" id="resultado_mms" style="display:none;">
                  <div id="procedimiento_mms" style="display:none;">
                    <p>
                      <b>Procedimiento:</b><br><br>
                      
                      Datos disponibles:<br>
                      λ = <span id="mms_1"></span><br>
                      μ = <span id="mms_2"></span><br>
                      c = <span id="mms_3"></span><br>  
                    </p>
                    <p class="center-align">
                      <b>Medidas de rendimiento del sistema</b>
                    </p>

                    <div id="mms_p" style="display: none;">
                      <p>
                        Intensidad de trafico en el sistema:<br>
                        <div></div>
                        ρ=
                        <div class="fraction">
                          <span class="fup">λ</span>
                          <span class="bar">/</span>
                          <span class="fdn">(c)(μ)</span>
                        </div> 
                        =
                        <div class="fraction">
                          <span class="fup"><span id="mms_4"></span></span>
                          <span class="bar">/</span>
                          <span class="fdn">(<span id="mms_5"></span>)(<span id="mms_6"></span>)</span>
                        </div>
                        = <span id="mms_7"></span>
                      </p>
                    </div>

                    <div id="sis_est_mms" style="display: none;">
                      <p>
                        Tiempo medio que pasan los paquetes en el sistema:<br>
                        <div></div>
                        W= Wq +
                        <div class="fraction">
                          <span class="fup">1</span>
                          <span class="bar">/</span>
                          <span class="fdn">μ</span>
                        </div>
                        = <span id="mms_8"></span> +
                        <div class="fraction">
                          <span class="fup">1</span>
                          <span class="bar">/</span>
                          <span class="fdn"><span id="mms_9"></span></span>
                        </div> 
                        = <span id="mms_10"></span><br><br>

                        Tiempo medio que pasan los paquetes en la cola:<br>
                        Wq= 
                        <div class="fraction">
                          <span class="fup">Lq</span>
                          <span class="bar">/</span>
                          <span class="fdn">λ</span>
                        </div>
                        =
                        <div class="fraction">
                          <span class="fup"><span id="mms_11"></span></span>
                          <span class="bar">/</span>
                          <span class="fdn"><span id="mms_12"></span></span>
                        </div>
                        = <span id="mms_13"></span><br><br>

                        Numero de paquetes en el sistema:<br>
                        L= (λ)(W) = <span id="mms_14"></span><span id="mms_15"></span> = <span id="mms_16"></span><br><br>
                       
                        Numero de paquetes en la cola:<br>
                        Lq=  
                        <div class="fraction">
                          <span class="fup">(c<sup>c</sup>)(ρ<sup>c+1</sup>)(ρ<sub>0</sub>)</span>
                          <span class="bar">/</span>
                          <span class="fdn">c! (1 - ρ)<sup>2</sup></span>
                        </div>
                        =
                        <div class="fraction">
                          <span class="fup">(<span id="mms_17"></span><sup><span id="mms_18"></span></sup>)(<span id="mms_19"></span><sup><span id="mms_20"></span></sup>)(<span id="mms_21"></span>)</span>
                          <span class="bar">/</span>
                          <span class="fdn"><span id="mms_22"></span>! (1 - <span id="mms_23"></span>)<sup>2</sup></span>
                        </div>
                        = <span id="mms_24"></span><br>
                          
                        <p class="center-align">
                          <b>Propiedades</b>
                        </p>
                        Probabilidad de que no existan paquetes en el sistema:<br>
                        <div class="eq-c">
                          P<sub>0</sub> = (
                          <div class="fraction">
                            <span class="fup">(c<sup>c</sup>)(ρ<sup>c</sup>)</span>
                            <span class="bar">/</span>
                            <span class="fdn">c! (1 - ρ)</span>
                          </div> +
                          <span class="intsuma">
                          <span class="lim">c-1</span>
                          <span class="sum-frac">&sum;</span>
                          <span class="lim">n=0</span>
                          </span>
                          <div class="fraction">
                            <span class="fup">((c)(ρ))<sup>n</sup></span>
                                <span class="bar">/</span>
                                <span class="fdn">n!</span>
                          </div>
                          )<sup>-1</sup>
                        </div>
                        <div class="eq-c">
                          P<sub>0</sub> = (
                          <div class="fraction">
                            <span class="fup">(<span id="mms_25"></span><sup><span id="mms_26"></span></sup>)(<span id="mms_27"></span><sup><span id="mms_28"></span></sup>)</span>
                            <span class="bar">/</span>
                            <span class="fdn"><span id="mms_29"></span>! (1 - <span id="mms_30"></span>)</span>
                          </div> +
                          <span class="intsuma">
                          <span class="lim"><span id="mms_31"></span></span>
                          <span class="sum-frac">&sum;</span>
                          <span class="lim">0</span>
                          </span>
                          <div class="fraction">
                            <span class="fup">((<span id="mms_32"></span>)(<span id="mms_33"></span>))<sup>n</sup></span>
                                <span class="bar">/</span>
                                <span class="fdn">n!</span>
                          </div>
                          )<sup>-1</sup> = <span id="mms_34"></span>
                        </div>
                      </p>
                    </div>
                    
                    <div id="propi_mms1" style="display: none;">
                      <p>
                        Probabilidad de que haya <span id="mms_42"></span> paquetes en el sistema:<br>
                        <div></div>
                        P<sub>n</sub> = 
                        <div class="fraction">
                          <span class="fup">(cρ)<sup>n</sup></span>
                          <span class="bar">/</span>
                          <span class="fdn">n!</span>
                        </div> 
                        (P<sub>0</sub>)<br>
                        P<sub><span id="mms_41"></span></sub> = 
                        <div class="fraction">
                          <span class="fup">((<span id="mms_35"></span>)(<span id="mms_36"></span>))<sup><span id="mms_37"></span></sup></span>
                          <span class="bar">/</span>
                          <span class="fdn"><span id="mms_38"></span>!</span>
                        </div> 
                        (<span id="mms_39"></span>) = <span id="mms_40"></span><br>
                      </p>
                    </div>

                    <div id="propi_mms2" style="display: none;">
                      <p>
                        Probabilidad de que haya <span id="mms_51"></span> paquetes en el sistema:<br>
                        <div></div>
                        P<sub>n</sub> = 
                        <div class="fraction">
                          <span class="fup">c<sup>c</sup> ρ<sup>n</sup></span>
                          <span class="bar">/</span>
                          <span class="fdn">c!</span>
                        </div> 
                        (P<sub>0</sub>)<br>
                        P<sub><span id="mms_50"></span></sub> = 
                        <div class="fraction">
                          <span class="fup"><span id="mms_43"></span><sup><span id="mms_44"></span></sup> <span id="mms_45"></span><sup><span id="mms_46"></span></sup></span>
                          <span class="bar">/</span>
                          <span class="fdn"><span id="mms_47"></span>!</span>
                        </div> 
                        (<span id="mms_48"></span>) = <span id="mms_49"></span><br>
                      </p>
                    </div>
      
                    <div class="divider black"></div>         
                  </div>

                  <p>
                    <b>Resultado:</b><br>
                  </p>

                  <div id="sis_no_est_mms" style="display: none;">
                    <p>
                      Medidas de rendimiento del sistema:<br>
                      <div></div>
                      ρ = <span id="mms_52"></span><br><br>
                      <span style="color: red;">El sistema no es estable, ya que ρ es mayor o igual a 1.</span>
                    </p>
                  </div>
                  
                  <div id="mms_res" style="display: none;">
                    <p>
                      Medidas de rendimiento del sistema:<br>
                      ρ = <span id="mms_53"></span><br>
                      W = <span id="mms_54"></span><br>
                      Wq = <span id="mms_55"></span><br>
                      L = <span id="mms_56"></span><br>
                      Lq = <span id="mms_57"></span><br><br>
                      
                      Propiedades:<br><br>
                        P<sub>0</sub> = <span id="mms_58"></span>
                    </p>
                  </div>

                  <div id="propi_mms_res1" style="display: none;">
                    <p>
                      <div></div>
                      P<sub><span id="mms_59"></span></sub> = <span id="mms_60"></span>
                    </p>
                  </div>

                  <div id="propi_mms_res2" style="display: none;">
                    <p>
                      <div></div>
                      P<sub><span id="mms_61"></span></sub> = <span id="mms_62"></span>
                    </p>
                  </div>

                  <a class="right-align" onClick="op_mms();" id="op_mms" style="display:none;">Ocultar procedimiento</a>  
                  <a class="right-align" onClick="mp_mms();" id="mp_mms" style="display:none;">Mostrar procedimiento</a>
                </div>
            </div> 
          </div>      
      </div>
    </div>

    <div id="test3" class="col s12">
      <div class="container">
        <h4 align="center"><b>Modelo M/M/1/k</b></h4> 
          <div class="row">
            <div class="col s12 m6 l6">
              <h6><b>Datos para calcular medidas de rendimiento del sistema:</b></h6>
              <div class="input-field col s12">
                <input id="m3" type="text" class="validate">
                <label for="m3">Introduce μ (mi)</label>
              </div>
              <div class="input-field col s12">
                <input id="lam3" type="text" class="validate">
                <label for="lam3">Introduce λ (lambda)</label>
              </div>
              <div class="input-field col s12">
                <input id="k" type="text" class="validate">
                <label for="k">Introduce k (capacidad limite)</label>
              </div>
              <h6><b>Datos para calcular probabilidades:</b></h6>
              <div class="input-field col s12">
                <input id="n3" type="text" class="validate">
                <label for="n3">Introduce n (no. de paquetes en el sistema)</label>
              </div>
              <center><button class="btn amber darken-3" type="button" onClick="mm1k();">Resolver</button></center>
            </div>
            <div class="col s12 m6 l6">
                <div class="card-panel amber lighten-4" id="resultado_mm1k" style="display:none;">
                  <div id="procedimiento_mm1k" style="display:none;">
                    <p>
                      <b>Procedimiento:</b><br><br>
                      
                      Datos disponibles:<br>
                      λ = <span id="mm1k_1"></span><br>
                      μ = <span id="mm1k_2"></span><br>
                      k = <span id="mm1k_3"></span><br>
    
                      <p class="center-align">
                        <b>Medidas de rendimiento del sistema</b><br>
                      </p>
                      
                      Intensidad de trafico en el sistema:<br>
                      <div></div>
                      ρ=
                      <div class="fraction">
                        <span class="fup">λ</span>
                        <span class="bar">/</span>
                        <span class="fdn">μ</span>
                      </div>
                      =
                      <div class="fraction">
                        <span class="fup"><span id="mm1k_4"></span></span>
                        <span class="bar">/</span>
                        <span class="fdn"><span id="mm1k_5"></span></span>
                      </div>
                      = <span id="mm1k_6"></span>
                    </p>

                    <div id="mm1k_l1" style="display: none;">
                      <p>
                        Numero de paquetes en el sistema:<br>
                        Ya que ρ es diferente de 1 se utiliza la siguiente formula:<br>
                        <div></div>
                        L=
                        <div class="fraction">
                          <span class="fup">ρ</span>
                          <span class="bar">/</span>
                          <span class="fdn">1-ρ</span>
                        </div>
                        -
                        <div class="fraction">
                          <span class="fup">(k+1) ρ<sup>k+1</sup></span>
                          <span class="bar">/</span>
                          <span class="fdn">1-ρ<sup>k+1</sup></span>
                        </div>
                        =
                        <div class="fraction">
                          <span class="fup"><span id="mm1k_7"></span></span>
                          <span class="bar">/</span>
                          <span class="fdn">1-<span id="mm1k_8"></span></span>
                        </div>
                        -
                        <div class="fraction">
                          <span class="fup">(<span id="mm1k_9"></span>) <span id="mm1k_10"></span><sup><span id="mm1k_11"></span></sup></span>
                          <span class="bar">/</span>
                          <span class="fdn">1-<span id="mm1k_12"></span><sup><span id="mm1k_13"></span></sup></span>
                        </div>
                        = <span id="mm1k_14"></span><br><br>

                        Probabilidad evaluada en k:<br>
                        P<sub><span id="mm1k_15"></span></sub> = 
                        <div class="fraction">
                          <span class="fup">ρ<sup>n</sup> (1-ρ)</span>
                          <span class="bar">/</span>
                          <span class="fdn">1-(ρ<sup>k+1</sup>)</span>
                        </div>
                        =
                        <div class="fraction">
                          <span class="fup"><span id="mm1k_16"></span><sup>0</sup> (1-<span id="mm1k_17"></span>)</span>
                          <span class="bar">/</span>
                          <span class="fdn">1-(<span id="mm1k_18"></span><sup><span id="mm1k_19"></span></sup>)</span>
                        </div>
                        = <span id="mm1k_20"></span> <br>
                      </p>
                    </div>
                    
                    <div id="mm1k_l2" style="display: none;">
                      <p>
                        Numero de paquetes en el sistema:<br>
                        Ya que ρ es igual a 1 se utiliza la siguiente formula:<br>
                        <div></div>
                        L=
                        <div class="fraction">
                          <span class="fup">k</span>
                          <span class="bar">/</span>
                          <span class="fdn">2</span>
                        </div>
                        =
                        <div class="fraction">
                          <span class="fup"><span id="mm1k_54"></span></span>
                          <span class="bar">/</span>
                          <span class="fdn">2</span>
                        </div>
                        = <span id="mm1k_55"></span><br><br>
                        Probabilidad evaluada en k:<br>
                        P<sub><span id="mm1k_51"></span></sub> = 
                        <div class="fraction">
                          <span class="fup">1</span>
                          <span class="bar">/</span>
                          <span class="fdn">k+1</span>
                        </div>
                        =
                        <div class="fraction">
                          <span class="fup">1</span>
                          <span class="bar">/</span>
                          <span class="fdn">(<span id="mm1k_52"></span>)+1</span>
                        </div>
                        = <span id="mm1k_53"></span><br>
                      </p>
                    </div>

                    <div id="mm1k_proceso" style="display: none;">
                      <p>
                        Tasa efectiva de llegadas:<br>
                        λef = λ(1-P<sub>k</sub>) = <span id="mm1k_21"></span>(1-<span id="mm1k_22"></span>) = <span id="mm1k_23"></span><br><br>

                        Tiempo promedio de los paquetes en el sistema:<br>
                        <div></div>
                        W= 
                        <div class="fraction">
                          <span class="fup">L</span>
                          <span class="bar">/</span>
                          <span class="fdn">λef</span>
                        </div>
                        =
                        <div class="fraction">
                          <span class="fup"><span id="mm1k_24"></span></span>
                          <span class="bar">/</span>
                          <span class="fdn"><span id="mm1k_25"></span></span>
                        </div>
                        = <span id="mm1k_26"></span><br><br>  

                        Tiempo promedio de los paquetes en la cola:<br>
                        Wq= W - 
                        <div class="fraction">
                          <span class="fup">1</span>
                          <span class="bar">/</span>
                          <span class="fdn">μ</span>
                        </div>
                        = <span id="mm1k_27"></span> -
                        <div class="fraction">
                          <span class="fup">1</span>
                          <span class="bar">/</span>
                          <span class="fdn"><span id="mm1k_28"></span></span>
                        </div>
                        = <span id="mm1k_29"></span><br><br>

                        Numero de paquetes en la cola:<br>
                        Lq =  λef(Wq) = <span id="mm1k_30"></span>(<span id="mm1k_31"></span>) = <span id="mm1k_32"></span>
                      </p>
                    </div>

                    <div id="propi_mm1k1" style="display: none;">
                      <p>
                        <p class="center-align">
                          <b>Probalididades:</b><br>
                        </p>
                        Probabilidad de que haya <span id="mm1k_33"></span> paquetes en el sistema:<br>
                        Ya que ρ es diferente de 1 se utiliza la siguiente formula:<br>
                        <div></div>
                        P<sub><span id="mm1k_34"></span></sub> = 
                        <div class="fraction">
                          <span class="fup">ρ<sup>n</sup> (1-ρ)</span>
                          <span class="bar">/</span>
                          <span class="fdn">1-(ρ<sup>k+1</sup>)</span>
                        </div>
                        =
                        <div class="fraction">
                          <span class="fup"><span id="mm1k_35"></span><sup><span id="mm1k_36"></span></sup> (1-<span id="mm1k_37"></span>)</span>
                          <span class="bar">/</span>
                          <span class="fdn">1-(<span id="mm1k_38"></span><sup><span id="mm1k_39"></span></sup>)</span>
                        </div>
                        = <span id="mm1k_40"></span>
                      </p>
                    </div>

                    <div id="propi_mm1k2" style="display: none;">
                      <p>
                        <p class="center-align">
                          <b>Probabilidades:</b><br>
                        </p>

                        Probabilidad de que haya <span id="mm1k_49"></span> paquetes en el sistema:<br>
                        Ya que ρ es igual a 1 se utiliza la siguiente formula:<br>
                        <div></div>
                        P<sub>n</sub> = 
                        <div class="fraction">
                          <span class="fup">1</span>
                          <span class="bar">/</span>
                          <span class="fdn">k+1</span>
                        </div>
                        = 
                        <div class="fraction">
                          <span class="fup">1</span>
                          <span class="bar">/</span>
                          <span class="fdn">(<span id="mm1k_50"></span>)+1</span>
                        </div>
                        = <span id="mm1k_51"></span>
                      </p>
                    </div>
      
                    <div class="divider black"></div>         
                  </div>

                  <p>
                    <b>Resultado:</b><br>
                  </p>
                  
                  <div id="mm1k_res" style="display: none;">
                    <p>
                      Medidas de rendimiento del sistema:<br>
                      ρ = <span id="mm1k_41"></span><br>
                      L = <span id="mm1k_42"></span><br>
                      λef = <span id="mm1k_43"></span><br>
                      W = <span id="mm1k_44"></span><br>
                      Wq = <span id="mm1k_45"></span><br>
                      Lq = <span id="mm1k_46"></span><br><br>
                    </p>
                  </div>

                  <div id="propi_mm1k_res1" style="display: none;">
                    <p>
                      Propiedades:<br>
                      P<sub><span id="mm1k_47"></span></sub>= <span id="mm1k_48"></span>
                    </p>
                  </div>

                  <a class="right-align" onClick="op_mm1k();" id="op_mm1k" style="display:none;">Ocultar procedimiento</a>  
                  <a class="right-align" onClick="mp_mm1k();" id="mp_mm1k" style="display:none;">Mostrar procedimiento</a>
                </div>
            </div> 
          </div>      
      </div>
    </div>

    <div id="test4" class="col s12">
    </div>
  </div>


<div class="tap-target amber accent-1" data-activates="help">
    <div class="tap-target-content">
      <h5 align="right">
        <span id="uno" style="display: block;">Modelo M/M/1</span>
        <span id="dos" style="display: none;">Modelo M/M/S</span>
        <span id="tres" style="display: none;">Modelo M/M/1/k</span>
      </h5>
      <p align="right">
        <span id="uno_d" style="display: block;">
          Significa que la llegada de los clientes al sistema de forma probabilística, el servicio es de forma probabilística y es un solo servidor.
        </span>
        <span id="dos_d" style="display: none;">
          Dos o más servidores o canales están disponibles para atender a los clientes que arriban. Los clientes forman una sola cola y se los atiende de acuerdo al servidor que queda libre.
        </span>
        <span id="tres_d" style="display: none;">
          En este modelo la capacidad del sistema esta determianda por una variable k, no se permite la entrada de nuevos paquetes si este esta lleno.
        </span>
      </p>
    </div>
</div>

    <?php include('../includes/footer.php'); ?>
</body>
</html>