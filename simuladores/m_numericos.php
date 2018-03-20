<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Banana App | </title>
    <?php include('../includes/head.php'); ?>
    <script src="js/m_num.js"></script>
</head>
<body>
    <?php include('../includes/nav.php'); ?>

<div class="card-panel amber lighten-3">
<center>
	<h4><i class="small material-icons">settings_input_composite</i> Metodos Numericos</h4>
</center>	
</div>

    	<div class="row">
    		<h4 class="center-align"><b>Metodos de Integración</b></h4>
    		<div class="col s12 m2 l2">
    			<ul class="collection">
			      <li class="collection-item" onClick="r_t();">Regla del trapecio</li>
			      <li class="collection-item" onClick="r_s();">Regla de Simpson</li>
			    </ul>
    		</div>
    		<div class="col s12 m10 l10">
    			<div id="r_t" style="display:block;">
    				<h5 align="center"><b>Regla del trapecio</b></h5>
                        <div class="row">
                            <h6><b>Regla del trapecio:</b></h6>
                            <div class="input-field col s12 m6 l6">
                                <input id="fx" type="text" class="validate">
                                <label for="fx">Ingresa funcion a evaluar</label>
                            </div>
                            <div class="input-field col s6 m3 l3">
                                <input id="a" type="text" class="validate">
                                <label for="a">Ingresa a</label>
                            </div>
                            <div class="input-field col s6 m3 l3">
                                <input id="b" type="text" class="validate">
                                <label for="b">Ingresa b</label>
                            </div>
                        </div>
                        <center><button class="btn amber darken-3" type="button" onClick="trapecio_simple();">Resolver</button></center><br>
                            <div id="resultado1" class="card-panel amber lighten-4" style="display:none;">
                                <div id="procedimiento1" style="display:none;">
                                    <p>
                                        <b>Procedimiento:</b><br><br>
                                        Se aplica la formula de la regla del trapecio:<br>
                                        <div></div>
                                        A ≈ (b-a)
                                        <div class='fraction'>
                                            <span class='fup'>f(a) + f(b)</span>
                                            <span class='bar'></span>
                                            <span class='fdn'>2</span>
                                        </div><br>
                                        Evaluamos los valores de f(x)<br>
                                        <span id="t_1"></span>
                                        <span id="t_2"></span><br><br>
                                        Sustituimos con nuestros valores:<br>
                                        A ≈ ((<span id="t_3"></span>) - (<span id="t_4"></span>))
                                        <div class='fraction'>
                                            <span class='fup'>(<span id="t_5"></span>) + (<span id="t_6"></span>)</span>
                                            <span class='bar'></span>
                                            <span class='fdn'>2</span>
                                        </div>
                                    </p>
                                    <div class="divider black"></div>
                                </div>
                                <p>
                                    <b>Resultado:</b>
                                </p>
                                <p align="center">
                                    A ≈ <span id="res1"></span> u<sup>2</sup>
                                </p>
                                <a class="right-align" onClick="o_p1();" id="o_p1" style="display:none;">Ocultar procedimiento</a>  
                                <a class="right-align" onClick="m_p1();" id="m_p1" style="display:none;">Mostrar procedimiento</a>
                            </div>
                        <div class="row">
                            <h6><b>Regla del trapecio segmentos multiples:</b></h6>
                            <div class="input-field col s12 m6 l6">
                                <input id="fx2" type="text" class="validate">
                                <label for="fx2">Ingresa funcion a evaluar</label>
                            </div>
                            <div class="input-field col s4 m2 l2">
                                <input id="a2" type="text" class="validate">
                                <label for="a2">Ingresa a</label>
                            </div>
                            <div class="input-field col s4 m2 l2">
                                <input id="b2" type="text" class="validate">
                                <label for="b2">Ingresa b</label>
                            </div>
                            <div class="input-field col s4 m2 l2">
                                <input id="n" type="text" class="validate">
                                <label for="n">Ingresa n</label>
                            </div>
                        </div>
                        <center><button class="btn amber darken-3" type="button" onClick="trapecio_sm();">Resolver</button></center><br>
                            <div id="resultado2" class="card-panel amber lighten-4" style="display:none;">
                                <div id="procedimiento2" style="display:none;">
                                    <p>
                                        <b>Procedimiento:</b><br><br>
                                        Primeramente se calcula h:<br>
                                        <div></div>
                                        h =
                                        <div class='fraction'>
                                            <span class='fup'>b-a</span>
                                            <span class='bar'></span>
                                            <span class='fdn'>n</span>
                                        </div>
                                        =
                                        <div class='fraction'>
                                            <span class='fup'>(<span id="tsm_1"></span>)-(<span id="tsm_2"></span>)</span>
                                            <span class='bar'></span>
                                            <span class='fdn'><span id="tsm_3"></span></span>
                                        </div>
                                        = <span id="tsm_4"></span><br><br>
                                        Se aplica la formula de la regla del trapecio segmentos multiples:<br>
                                        <div class='eq-c'>
                                        A ≈ 
                                        <div class='fraction'>
                                            <span class='fup'>h</span>
                                            <span class='bar'></span>
                                            <span class='fdn'>2</span>
                                        </div>
                                        [ f(x<sub>0</sub>) + 2
                                            <span class='intsuma'>
                                            <span class='lim-up'>n-1</span>
                                            <span class='sum'>&sum;</span>
                                            <span class='lim'>i=1</span>
                                            </span>
                                            f(x<sub>i</sub>) + f(x<sub>n</sub>)]
                                        </div><br>
                                        Se evaluan los valores de f(x):<br>
                                        <span id="tsm_5"></span>
                                        <span id="tsm_6"></span>
                                        <span id="tsm_7"></span><br><br>
                                        Y finalmente se sustituyen en la formula:<br>
                                        A ≈ 
                                        <div class='fraction'>
                                            <span class='fup'><span id="tsm_8"></span></span>
                                            <span class='bar'></span>
                                            <span class='fdn'>2</span>
                                        </div>
                                        [ <span id="tsm_9"></span> + 2(<span id="tsm_10"></span>) + <span id="tsm_11"></span> ]<br>
                                    </p>    
                                    <div class="divider black"></div>
                                </div>
                                <p>
                                    <b>Resultado:</b>
                                </p>
                                <p align="center">
                                    A ≈ <span id="res2"></span> u<sup>2</sup>
                                </p>
                                <a class="right-align" onClick="o_p2();" id="o_p2" style="display:none;">Ocultar procedimiento</a>  
                                <a class="right-align" onClick="m_p2();" id="m_p2" style="display:none;">Mostrar procedimiento</a>
                            </div>
    			</div>
    			<div id="r_s" style="display:none;">
    				<h5 align="center"><b>Regla de Simpson</b></h5>
                        <div class="row">
                            <h6><b>Regla de Simpson 1/3:</b></h6>
                            <div class="input-field col s12 m6 l6">
                                <input id="fx3" type="text" class="validate">
                                <label for="fx3">Ingresa funcion a evaluar</label>
                            </div>
                            <div class="input-field col s6 m3 l3">
                                <input id="a3" type="text" class="validate">
                                <label for="a3">Ingresa a</label>
                            </div>
                            <div class="input-field col s6 m3 l3">
                                <input id="b3" type="text" class="validate">
                                <label for="b3">Ingresa b</label>
                            </div>
                        </div>
                        <center><button class="btn amber darken-3" type="button" onClick="regla_s13();">Resolver</button></center><br>
                            <div id="resultado3" class="card-panel amber lighten-4" style="display:none;">
                                <div id="procedimiento3" style="display:none;">
                                    <p>
                                        <b>Procedimiento:</b><br><br>
                                        Primeramente se calcula h:<br>
                                        <div></div>
                                        h =
                                        <div class='fraction'>
                                            <span class='fup'>b-a</span>
                                            <span class='bar'></span>
                                            <span class='fdn'>2</span>
                                        </div>
                                        =
                                        <div class='fraction'>
                                            <span class='fup'>(<span id="s_1"></span>)-(<span id="s_2"></span>)</span>
                                            <span class='bar'></span>
                                            <span class='fdn'>2</span>
                                        </div>
                                        = <span id="s_3"></span><br><br>
                                        Se aplica la formula de la Simpson 1/3:<br>
                                        <div></div>
                                        A ≈ 
                                        <div class='fraction'>
                                            <span class='fup'>h</span>
                                            <span class='bar'></span>
                                            <span class='fdn'>3</span>
                                        </div>
                                        [ f(x<sub>0</sub>) + 4f(x<sub>1</sub>) + f(x<sub>2</sub>)]<br>
                                        Se evaluan los valores de f(x):<br>
                                        <span id="s_4"></span><br>
                                        <span id="s_5"></span><br>
                                        <span id="s_6"></span><br><br>
                                        Y finalmente se sustituyen en la formula:<br>
                                        A ≈ 
                                        <div class='fraction'>
                                            <span class='fup'><span id="s_7"></span></span>
                                            <span class='bar'></span>
                                            <span class='fdn'>3</span>
                                        </div>
                                        [ (<span id="s_8"></span>) + 4(<span id="s_9"></span>) + (<span id="s_10"></span>)]<br>
                                    </p> 
                                    <div class="divider black"></div>
                                </div>
                                <p>
                                    <b>Resultado:</b>
                                </p>
                                <p align="center">
                                    A ≈ <span id="res3"></span> u<sup>2</sup>
                                </p>
                                <a class="right-align" onClick="o_p3();" id="o_p3" style="display:none;">Ocultar procedimiento</a>  
                                <a class="right-align" onClick="m_p3();" id="m_p3" style="display:none;">Mostrar procedimiento</a>
                            </div>
                        <div class="row">
                            <h6><b>Regla de Simpson 3/8:</b></h6>
                            <div class="input-field col s12 m6 l6">
                                <input id="fx4" type="text" class="validate">
                                <label for="fx4">Ingresa funcion a evaluar</label>
                            </div>
                            <div class="input-field col s6 m3 l3">
                                <input id="a4" type="text" class="validate">
                                <label for="a4">Ingresa a</label>
                            </div>
                            <div class="input-field col s6 m3 l3">
                                <input id="b4" type="text" class="validate">
                                <label for="b4">Ingresa b</label>
                            </div>
                        </div>
                        <center><button class="btn amber darken-3" type="button" onClick="regla_s38();">Resolver</button></center><br>
                            <div id="resultado4" class="card-panel amber lighten-4" style="display:none;">
                                <div id="procedimiento4" style="display:none;">
                                    <p>
                                        <b>Procedimiento:</b><br><br>
                                        Primeramente se calcula h:<br>
                                        <div></div>
                                        h =
                                        <div class='fraction'>
                                            <span class='fup'>b-a</span>
                                            <span class='bar'></span>
                                            <span class='fdn'>3</span>
                                        </div>
                                        =
                                        <div class='fraction'>
                                            <span class='fup'>(<span id="ss_1"></span>)-(<span id="ss_2"></span>)</span>
                                            <span class='bar'></span>
                                            <span class='fdn'>3</span>
                                        </div>
                                        = <span id="ss_3"></span><br><br>
                                        Se aplica la formula de la Simpson 1/3:<br>
                                        <div></div>
                                        A ≈ 
                                        <div class='fraction'>
                                            <span class='fup'>h</span>
                                            <span class='bar'></span>
                                            <span class='fdn'>3</span>
                                        </div>
                                        [ f(x<sub>0</sub>) + 3f(x<sub>1</sub>) + 3f(x<sub>2</sub>) + f(x<sub>3</sub>)]<br>
                                        Se evaluan los valores de f(x):<br>
                                        <span id="ss_4"></span><br>
                                        <span id="ss_5"></span><br>
                                        <span id="ss_6"></span><br>
                                        <span id="ss_7"></span><br><br>
                                        Y finalmente se sustituyen en la formula:<br>
                                        A ≈ 
                                        <div class='fraction'>
                                            <span class='fup'>3(<span id="ss_8"></span>)</span>
                                            <span class='bar'></span>
                                            <span class='fdn'>8</span>
                                        </div>
                                        [ (<span id="ss_9"></span>) + 3(<span id="ss_10"></span>) + 3(<span id="ss_11"></span>) + (<span id="ss_12"></span>)]<br>
                                    </p>
                                    <div class="divider black"></div>
                                </div>
                                <p>
                                    <b>Resultado:</b>
                                </p>
                                <p align="center">
                                    A ≈ <span id="res4"></span> u<sup>2</sup>
                                </p>
                                <a class="right-align" onClick="o_p4();" id="o_p4" style="display:none;">Ocultar procedimiento</a>  
                                <a class="right-align" onClick="m_p4();" id="m_p4" style="display:none;">Mostrar procedimiento</a>
                            </div>                  
    			</div>
    		</div>
    	</div>
<div class="tap-target amber accent-1" data-activates="help">
    <div class="tap-target-content">
      <h5 align="right">Metodos de Integracion</h5>
      <p align="right">Cualquiera de las diferentes técnicas elementales usadas para calcular una antiderivada o integral indefinida de una función.</p>
    </div>
</div>

    <?php include('../includes/footer.php'); ?>
</body>
</html>