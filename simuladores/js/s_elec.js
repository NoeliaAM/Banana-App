function RC_carga(){
    document.getElementById('carga_rc').style.display = 'block'; 
    document.getElementById('descarga_rc').style.display = 'none'; 
}
function RC_descarga(){
    document.getElementById('carga_rc').style.display = 'none'; 
    document.getElementById('descarga_rc').style.display = 'block';
}

function RC_carga_b(){
    var vs=document.getElementById('rcc_s').value;
    var vr=document.getElementById('rcc_r').value;
    var vc=document.getElementById('rcc_c').value; 
    var fara=document.getElementById('rcc').options[document.getElementById('rcc').selectedIndex].value;
    var fara_sim=document.getElementById('rcc').options[document.getElementById('rcc').selectedIndex].text;
    
    if(vr <=0 || vc <=0 || vs <=0){
	alert("Ingrese valores validos.");    
	}else{

    var vcws= vc+fara_sim;
    var t=(vc*(Math.pow(10,fara)))*vr;

    document.getElementById('rcc1').innerHTML= vr;
    document.getElementById('rcc2').innerHTML= vcws;
    document.getElementById('rcc3').innerHTML= vs;
    document.getElementById('rcc4').innerHTML= t;
    document.getElementById('rcc5').innerHTML= vs;
    document.getElementById('rcc6').innerHTML= vs;
    document.getElementById('rcc7').innerHTML= t;
    document.getElementById('r1_carga_rc').innerHTML= vs;
    document.getElementById('r2_carga_rc').innerHTML= t;

    document.getElementById('div_carga_rc').style.display = 'block';

    document.getElementById('resultado_carga_rc').style.display = 'block';
    document.getElementById('procedimiento_carga_rc').style.display = 'none';
    document.getElementById('mp_carga_rc').style.display = 'block';
    document.getElementById('op_carga_rc').style.display = 'none'; 
	}
}
function mp_carga_rc(){ 
  document.getElementById('procedimiento_carga_rc').style.display = 'block';
  document.getElementById('mp_carga_rc').style.display = 'none';
  document.getElementById('op_carga_rc').style.display = 'block'; 
}
function op_carga_rc(){
  document.getElementById('procedimiento_carga_rc').style.display = 'none';
  document.getElementById('mp_carga_rc').style.display = 'block';
  document.getElementById('op_carga_rc').style.display = 'none';  
}

function RC_descarga_b(){
    var vs=document.getElementById('rcd_s').value;
    var vr=document.getElementById('rcd_r').value;
    var vc=document.getElementById('rcd_c').value; 
    var fara=document.getElementById('rcd').options[document.getElementById('rcd').selectedIndex].value;
    var fara_sim=document.getElementById('rcd').options[document.getElementById('rcd').selectedIndex].text;
    var vi=document.getElementById('rcd_vi').value; 
  
    if(vr <=0 || vc <=0 || vs <=0 || vi <=0){
	alert("Ingrese valores validos.");    
	}else{

    var t=(vc*(Math.pow(10,fara)))*vr;

    document.getElementById('rcd1').innerHTML= vi;
    document.getElementById('rcd2').innerHTML= t;
    document.getElementById('rcd3').innerHTML= vi;
    document.getElementById('rcd4').innerHTML= t;
    document.getElementById('r1_descarga_rc').innerHTML= vi;
    document.getElementById('r2_descarga_rc').innerHTML= t;

    document.getElementById('div_descarga_rc').style.display = 'block';

    document.getElementById('resultado_descarga_rc').style.display = 'block';
    document.getElementById('procedimiento_descarga_rc').style.display = 'none';
    document.getElementById('mp_descarga_rc').style.display = 'block';
    document.getElementById('op_descarga_rc').style.display = 'none'; 
	}
}
function mp_descarga_rc(){ 
  document.getElementById('procedimiento_descarga_rc').style.display = 'block';
  document.getElementById('mp_descarga_rc').style.display = 'none';
  document.getElementById('op_descarga_rc').style.display = 'block'; 
}
function op_descarga_rc(){
  document.getElementById('procedimiento_descarga_rc').style.display = 'none';
  document.getElementById('mp_descarga_rc').style.display = 'block';
  document.getElementById('op_descarga_rc').style.display = 'none';  
}

function RL_carga(){
    document.getElementById('carga_rl').style.display = 'block'; 
    document.getElementById('descarga_rl').style.display = 'none'; 
}
function RL_descarga(){
    document.getElementById('carga_rl').style.display = 'none'; 
    document.getElementById('descarga_rl').style.display = 'block';
}

function RL_carga_b(){
    var vs=document.getElementById('rlc_s').value;
    var vr=document.getElementById('rlc_r').value;
    var ind=document.getElementById('rlc_i').value; 
    var her=document.getElementById('rlc').options[document.getElementById('rlc').selectedIndex].value;
    var her_sim=document.getElementById('rlc').options[document.getElementById('rlc').selectedIndex].text;
    
    if(vr <=0 || ind <=0 || vs <=0){
	alert("Ingrese valores validos.");    
	}else{

    var viws= ind+her_sim;
    var t=vr/(ind*(Math.pow(10,her)));
    var fac=vs/vr;

    document.getElementById('rlc1').innerHTML= viws;
    document.getElementById('rlc2').innerHTML= vs;
    document.getElementById('rlc3').innerHTML= vr;
    document.getElementById('rlc4').innerHTML= vs;
    document.getElementById('rlc5').innerHTML= vr;
    document.getElementById('rlc6').innerHTML= fac;
    document.getElementById('rlc7').innerHTML= fac;
    document.getElementById('rlc8').innerHTML= vr;
    document.getElementById('rlc9').innerHTML= viws;
    document.getElementById('rlc10').innerHTML= fac;
    document.getElementById('rlc11').innerHTML= t;
    document.getElementById('rlc12').innerHTML= fac;
    document.getElementById('rlc13').innerHTML= fac;
    document.getElementById('rlc14').innerHTML= t;

    document.getElementById('r1_carga_rl').innerHTML= fac;
    document.getElementById('r2_carga_rl').innerHTML= t;

    document.getElementById('div_carga_rl').style.display = 'block';

    document.getElementById('resultado_carga_rl').style.display = 'block';
    document.getElementById('procedimiento_carga_rl').style.display = 'none';
    document.getElementById('mp_carga_rl').style.display = 'block';
    document.getElementById('op_carga_rl').style.display = 'none'; 
	}
}
function mp_carga_rl(){ 
  document.getElementById('procedimiento_carga_rl').style.display = 'block';
  document.getElementById('mp_carga_rl').style.display = 'none';
  document.getElementById('op_carga_rl').style.display = 'block'; 
}
function op_carga_rl(){
  document.getElementById('procedimiento_carga_rl').style.display = 'none';
  document.getElementById('mp_carga_rl').style.display = 'block';
  document.getElementById('op_carga_rl').style.display = 'none';  
}

function RL_descarga_b(){
    var vs=document.getElementById('rld_s').value;
    var vr=document.getElementById('rld_r').value;
    var ind=document.getElementById('rld_i').value;  
    var her=document.getElementById('rld').options[document.getElementById('rld').selectedIndex].value;
    var her_sim=document.getElementById('rld').options[document.getElementById('rld').selectedIndex].text;
    
    if(vr <=0 || ind <=0 || vs <=0){
	alert("Ingrese valores validos.");    
	}else{

	var vi=vs/vr;
    var viws= ind+her_sim;
    var t=vr/(ind*(Math.pow(10,her)));
    var fac=vs/vr;

    document.getElementById('rld1').innerHTML= viws;
    document.getElementById('rld2').innerHTML= vr;
    document.getElementById('rld3').innerHTML= vi;
    document.getElementById('rld4').innerHTML= vr;
    document.getElementById('rld5').innerHTML= ind;
    document.getElementById('rld6').innerHTML= vi;
    document.getElementById('rld7').innerHTML= vr;
    document.getElementById('rld8').innerHTML= ind;

    document.getElementById('r1_descarga_rl').innerHTML= vi;
    document.getElementById('r2_descarga_rl').innerHTML= t;

    document.getElementById('div_descarga_rl').style.display = 'block';

    document.getElementById('resultado_descarga_rl').style.display = 'block';
    document.getElementById('procedimiento_descarga_rl').style.display = 'none';
    document.getElementById('mp_descarga_rl').style.display = 'block';
    document.getElementById('op_descarga_rl').style.display = 'none'; 
	}
}
function mp_descarga_rl(){ 
  document.getElementById('procedimiento_descarga_rl').style.display = 'block';
  document.getElementById('mp_descarga_rl').style.display = 'none';
  document.getElementById('op_descarga_rl').style.display = 'block'; 
}
function op_descarga_rl(){
  document.getElementById('procedimiento_descarga_rl').style.display = 'none';
  document.getElementById('mp_descarga_rl').style.display = 'block';
  document.getElementById('op_descarga_rl').style.display = 'none';  
}