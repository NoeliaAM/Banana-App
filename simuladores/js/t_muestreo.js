function m_s(){
    document.getElementById('resultado_s').style.display = 'none';
    document.getElementById('procedimiento_s').style.display = 'none';
    document.getElementById('mp_s').style.display = 'none';   
    document.getElementById('op_s').style.display = 'none';

	var m=document.getElementById('m').value;
    var n=document.getElementById('n').value;
    var h=Math.round(m/n);
    var a=Math.round(h*Math.random());

    for(i=0 ; i<n; i++)
    { 
        var x=a+h*i; 
      	var e=i+1;
        var sistematico = x + ", ";
        document.getElementById('res1').innerHTML += sistematico;
        document.getElementById('s_7').innerHTML += a+"+("+i+")("+h+"), "; 
    }  

    document.getElementById('s_1').innerHTML = m;
    document.getElementById('s_2').innerHTML = n;
    document.getElementById('s_3').innerHTML = m;
    document.getElementById('s_4').innerHTML = n;
    document.getElementById('s_5').innerHTML = h;
    document.getElementById('s_6').innerHTML = a;

    document.getElementById('resultado_s').style.display = 'block';
    document.getElementById('mp_s').style.display = 'block';   
}
function op_s(){
    document.getElementById('procedimiento_s').style.display = 'none';
    document.getElementById('mp_s').style.display = 'block';  
    document.getElementById('op_s').style.display = 'none';   
}
function mp_s(){
    document.getElementById('procedimiento_s').style.display = 'block';
    document.getElementById('mp_s').style.display = 'none';   
    document.getElementById('op_s').style.display = 'block';  
}

function m_e(){
    document.getElementById('resultado_e').style.display = 'none';
    document.getElementById('procedimiento_e').style.display = 'none';
    document.getElementById('mp_e').style.display = 'none';   
    document.getElementById('op_e').style.display = 'none';

    var estratos = document.getElementById('e').value;

    var es = document.getElementById("es").value;
    var te = document.getElementById("te").value;

       var n,nest,m;

       var t=new Array(0);



        var tamaño_estratos = es.split(",");
        var a_datos = array_ini(tamaño_estratos);

        var tamaño_me = te.split(",");
        var a_datos2 = array_ini2(tamaño_me);

    document.getElementById('resultado_e').style.display = 'block';
    document.getElementById('mp_e').style.display = 'block';   
}
function op_e(){
    document.getElementById('procedimiento_e').style.display = 'none';
    document.getElementById('mp_e').style.display = 'block';  
    document.getElementById('op_e').style.display = 'none';   
}
function mp_e(){
    document.getElementById('procedimiento_e').style.display = 'block';
    document.getElementById('mp_e').style.display = 'none';   
    document.getElementById('op_e').style.display = 'block';  
}

       function iniciar(){
            document.getElementById('resultado_e').style.display = 'none';
            document.getElementById('procedimiento_e').style.display = 'none';
            document.getElementById('mp_e').style.display = 'none';   
            document.getElementById('op_e').style.display = 'none';
            
            var n=document.getElementById("tm").value;
            var estratos=eval("["+document.getElementById("te").value+"]");
            var nest=estratos.length;
            var m=0;
            var t=new Array(nest);

            for(var i=0 ; i<nest; i++){
                m=m+estratos[i]
            }

            for(var i=0 ; i<nest; i++){
                t[i]=Math.round(estratos[i]*n/m)
            }

            var tam="";

            for(var i=0 ; i<nest; i++){
                tam=tam+t[i]+",";
            }

            var a=0;
            for(var i=0 ; i<nest; i++){
                    for(var j=0 ; j<t[i]; j++){
                        s=a+Math.round(estratos[i]*Math.random());
                        document.getElementById('e_2').innerHTML += s+",";
                    }
                    a=a+estratos[i];
            }  
            document.getElementById('resultado_e').style.display = 'block';
        } 