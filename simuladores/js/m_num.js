function r_t(){
document.getElementById('r_t').style.display = 'block';
document.getElementById('r_s').style.display = 'none'; 
}
function r_s(){
document.getElementById('r_s').style.display = 'block';
document.getElementById('r_t').style.display = 'none';
}
function trapecio_simple(){
    document.getElementById('resultado1').style.display = 'none'; 
    document.getElementById('procedimiento1').style.display = 'none';
    document.getElementById('o_p1').style.display = 'none'; 
    document.getElementById('m_p1').style.display = 'none';

    var x = 0;
    var fx= document.getElementById('fx').value; 
    var a = eval(document.getElementById('a').value);
    var b = eval(document.getElementById('b').value);
   
    if(fx =="" || a=="" || b==""){
        alert("Ingrese valores validos.");   
    }else if(a>=b){
        alert("a no puede ser ser mayor que b.");
    }else{   
        x=a;
        var f0=eval(fx);
        document.getElementById('t_1').innerHTML = "f("+a+")="+f0+"<br>";
        x=b;
        var fn=eval(fx);
        document.getElementById('t_2').innerHTML="f("+b+")="+fn;
        document.getElementById('t_3').innerHTML=b;
        document.getElementById('t_4').innerHTML=a;
        document.getElementById('t_5').innerHTML=f0.toFixed(4);
        document.getElementById('t_6').innerHTML=fn.toFixed(4);

        var area = (b-a)*((f0+fn)/2);
        document.getElementById('res1').innerHTML=area;

        document.getElementById('resultado1').style.display = 'block';
        document.getElementById('m_p1').style.display = 'block';
    }  
}
function o_p1(){
    document.getElementById('m_p1').style.display = 'block';
    document.getElementById('o_p1').style.display = 'none'; 
    document.getElementById('procedimiento1').style.display = 'none';
}
function m_p1(){
    document.getElementById('m_p1').style.display = 'none';
    document.getElementById('o_p1').style.display = 'block'; 
    document.getElementById('procedimiento1').style.display = 'block';
}
function trapecio_sm(){
    document.getElementById('resultado2').style.display = 'none'; 
    document.getElementById('procedimiento2').style.display = 'none';
    document.getElementById('o_p2').style.display = 'none'; 
    document.getElementById('m_p2').style.display = 'none';

    var x = 0;
    var fx= document.getElementById('fx2').value; 
    var a = eval(document.getElementById('a2').value);
    var b = eval(document.getElementById('b2').value);
    var n = parseInt(document.getElementById('n').value);

    if(fx =="" || a=="" || b==""){
        alert("Ingrese valores validos.");   
    }else if(a>=b){
        alert("a no puede ser ser mayor que b.");
    }else{ 
        var h = (b-a)/n;

        document.getElementById('tsm_1').innerHTML = b;
        document.getElementById('tsm_2').innerHTML = a;
        document.getElementById('tsm_3').innerHTML = n;
        document.getElementById('tsm_4').innerHTML = h;

        x=a;
        var f0=eval(fx);
        document.getElementById('tsm_5').innerHTML = "f("+a+")="+f0+"<br>";   

        var suma = 0;
        for(var i = 1; i <n; i++){
            a = a + h;
            x = a;
            suma = suma + eval(fx);
            document.getElementById('tsm_6').innerHTML += "f("+a+") = "+eval(fx)+"<br>"; 
        }

        x=b;
        var fn=eval(fx);
        document.getElementById('tsm_7').innerHTML="f("+b+")="+fn;
        document.getElementById('tsm_8').innerHTML = h;
        document.getElementById('tsm_9').innerHTML = f0.toFixed(4);
        document.getElementById('tsm_10').innerHTML = suma;
        document.getElementById('tsm_11').innerHTML = fn.toFixed(4);

        var area = (h/2)*((f0+(2*(suma))+fn));
        document.getElementById('res2').innerHTML=area;

        document.getElementById('resultado2').style.display = 'block';
        document.getElementById('m_p2').style.display = 'block';
    }   
}
function o_p2(){
    document.getElementById('m_p2').style.display = 'block';
    document.getElementById('o_p2').style.display = 'none'; 
    document.getElementById('procedimiento2').style.display = 'none';
}
function m_p2(){
    document.getElementById('m_p2').style.display = 'none';
    document.getElementById('o_p2').style.display = 'block'; 
    document.getElementById('procedimiento2').style.display = 'block';
}
function regla_s13(){
    document.getElementById('resultado3').style.display = 'none'; 
    document.getElementById('procedimiento3').style.display = 'none';
    document.getElementById('o_p3').style.display = 'none'; 
    document.getElementById('m_p3').style.display = 'none';

    var x = 0;
    var fx= document.getElementById('fx3').value; 
    var a = eval(document.getElementById('a3').value);
    var b = eval(document.getElementById('b3').value);
    
    if(fx =="" || a=="" || b==""){
        alert("Ingrese valores validos.");   
    }else if(a>=b){
        alert("a no puede ser ser mayor que b.");
    }else{   

    var h = (b-a)/2;

     x=a;
     f0=eval(fx);

     x=(a+h);
     f1=eval(fx);

     x=b;
     f2=eval(fx);
     
    var area = ((h/3)*((f0+(4*(f1))+f2)));

     document.getElementById('s_1').innerHTML=b;
     document.getElementById('s_2').innerHTML=a;
     document.getElementById('s_3').innerHTML=h;
     document.getElementById('s_4').innerHTML="f("+a+")="+f0;
     document.getElementById('s_5').innerHTML="f("+(a+h)+")="+f1;
     document.getElementById('s_6').innerHTML="f("+b+")="+f2;
     document.getElementById('s_7').innerHTML=h;
     document.getElementById('s_8').innerHTML=f0;
     document.getElementById('s_9').innerHTML=f1;
     document.getElementById('s_10').innerHTML=f2;
     document.getElementById('res3').innerHTML=area;

    document.getElementById('resultado3').style.display = 'block';
    document.getElementById('m_p3').style.display = 'block';
    }     
}
function o_p3(){
    document.getElementById('m_p3').style.display = 'block';
    document.getElementById('o_p3').style.display = 'none'; 
    document.getElementById('procedimiento3').style.display = 'none';
}
function m_p3(){
    document.getElementById('m_p3').style.display = 'none';
    document.getElementById('o_p3').style.display = 'block'; 
    document.getElementById('procedimiento3').style.display = 'block';
}
function regla_s38(){
    document.getElementById('resultado4').style.display = 'none'; 
    document.getElementById('procedimiento4').style.display = 'none';
    document.getElementById('o_p4').style.display = 'none'; 
    document.getElementById('m_p4').style.display = 'none';

    var x = 0;
    var fx= document.getElementById('fx4').value; 
    var a = eval(document.getElementById('a4').value);
    var b = eval(document.getElementById('b4').value);
    
    if(fx =="" || a=="" || b==""){
        alert("Ingrese valores validos.");   
    }else if(a>=b){
        alert("a no puede ser ser mayor que b.");
    }else{ 

    var h = (b-a)/3;
    
     x=a;
     f0=eval(fx);
     x=a+h;
     f1=eval(fx);
     x=a+h+h;
     f2=eval(fx);
     x=b;
     f3=eval(fx);
     var xx=(3*h)/8;
    var area = xx*((f0+(3*(f1+f2))+f3));

     document.getElementById('ss_1').innerHTML=b;
     document.getElementById('ss_2').innerHTML=a;
     document.getElementById('ss_3').innerHTML=h;
     document.getElementById('ss_4').innerHTML="f("+a+")="+f0;
     document.getElementById('ss_5').innerHTML="f("+(a+h)+")="+f1;
     document.getElementById('ss_6').innerHTML="f("+(b-h)+")="+f2;
     document.getElementById('ss_7').innerHTML="f("+b+")="+f3;
     document.getElementById('ss_8').innerHTML=h;
     document.getElementById('ss_9').innerHTML=f0;
     document.getElementById('ss_10').innerHTML=f1;
     document.getElementById('ss_11').innerHTML=f2;
     document.getElementById('ss_12').innerHTML=f3;
     
     document.getElementById('res4').innerHTML=area;

    document.getElementById('resultado4').style.display = 'block';
    document.getElementById('m_p4').style.display = 'block';     
    }
}
function o_p4(){
    document.getElementById('m_p4').style.display = 'block';
    document.getElementById('o_p4').style.display = 'none'; 
    document.getElementById('procedimiento4').style.display = 'none';
}
function m_p4(){
    document.getElementById('m_p4').style.display = 'none';
    document.getElementById('o_p4').style.display = 'block'; 
    document.getElementById('procedimiento4').style.display = 'block';
}

// function lagrange(){
//     var x = 0;
//     var fx= document.getElementById('fx_l').value; 
//     var g = Number(document.getElementById('g').value);
//     var n = document.getElementById('x').value;
//     var x = [2,4];
//     var fx = [12,14];
//     var fn = 0;
//     var li;
//     var text="";
//     for(var j = 0; j <= g; j++ ){
//         text =  "<div class='input-field col s2'><input id='x"+j+"' type='text'><label for='x"+j+"'>Ingresa valor de x"+j+"</div>";
//         document.getElementById('equis').innerHTML+=text;   
//     }
//     var id;
//     for(var j = 0; j <= g; j++ ){
//         id=;
//         x="document.getElementById('x"+j+"').value;";
//     }

//     for(var i = 0; i <= g; i++){
//         li = 1;
//         for(var j = 0; j <= g; j++){
//             if(j != i){
//                 li *= (n - x[j])/(x[i] - x[j]);                     
//             }
//         }
//         fn += (li * fx[i]);
//     }
// }