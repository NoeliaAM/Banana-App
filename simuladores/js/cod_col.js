function tresbandas(){
    document.getElementById('3bandas').style.display = 'block'; 
    document.getElementById('4bandas').style.display = 'none'; 
    document.getElementById('5bandas').style.display = 'none'; 
    document.getElementById('6bandas').style.display = 'none'; 
}
function cuatrobandas(){
    document.getElementById('3bandas').style.display = 'none'; 
    document.getElementById('4bandas').style.display = 'block'; 
    document.getElementById('5bandas').style.display = 'none'; 
    document.getElementById('6bandas').style.display = 'none'; 
}
function cincobandas(){
    document.getElementById('3bandas').style.display = 'none'; 
    document.getElementById('4bandas').style.display = 'none'; 
    document.getElementById('5bandas').style.display = 'block'; 
    document.getElementById('6bandas').style.display = 'none'; 
}
function seisbandas(){
    document.getElementById('3bandas').style.display = 'none'; 
    document.getElementById('4bandas').style.display = 'none'; 
    document.getElementById('5bandas').style.display = 'none'; 
    document.getElementById('6bandas').style.display = 'block'; 
}

function CambiarColor3_1(){
  var color = document.getElementById('franja31').options[document.getElementById('franja31').selectedIndex].text+".png";
  document.getElementById('p_c').innerHTML= "<img src='../images/" + color + "'>"
}
function CambiarColor3_2(){
  var color = document.getElementById('franja32').options[document.getElementById('franja32').selectedIndex].text+".png";
  document.getElementById('s_c').innerHTML= "<img src='../images/" + color + "'>"
}
function CambiarColor3_3(){
  var color = document.getElementById('franja33').options[document.getElementById('franja33').selectedIndex].text+".png";
  document.getElementById('t_c').innerHTML= "<img src='../images/" + color + "'>"
}

function CambiarColor4_1(){
  var color = document.getElementById('franja41').options[document.getElementById('franja41').selectedIndex].text+".png";
  document.getElementById('p_c4').innerHTML= "<img src='../images/" + color + "'>"
}
function CambiarColor4_2(){
  var color = document.getElementById('franja42').options[document.getElementById('franja42').selectedIndex].text+".png";
  document.getElementById('s_c4').innerHTML= "<img src='../images/" + color + "'>"
}
function CambiarColor4_3(){
  var color = document.getElementById('franja43').options[document.getElementById('franja43').selectedIndex].text+".png";
  document.getElementById('t_c4').innerHTML= "<img src='../images/" + color + "'>"
}
function CambiarColor4_4(){
  var color = document.getElementById('franja44').options[document.getElementById('franja44').selectedIndex].text+".png";
  document.getElementById('c_c4').innerHTML= "<img src='../images/" + color + "'>"
}

function CambiarColor5_1(){
  var color = document.getElementById('franja51').options[document.getElementById('franja51').selectedIndex].text+".png";
  document.getElementById('p_c5').innerHTML= "<img src='../images/" + color + "'>"
}
function CambiarColor5_2(){
  var color = document.getElementById('franja52').options[document.getElementById('franja52').selectedIndex].text+".png";
  document.getElementById('s_c5').innerHTML= "<img src='../images/" + color + "'>"
}
function CambiarColor5_3(){
  var color = document.getElementById('franja53').options[document.getElementById('franja53').selectedIndex].text+".png";
  document.getElementById('t_c5').innerHTML= "<img src='../images/" + color + "'>"
}
function CambiarColor5_4(){
  var color = document.getElementById('franja54').options[document.getElementById('franja54').selectedIndex].text+".png";
  document.getElementById('c_c5').innerHTML= "<img src='../images/" + color + "'>"
}
function CambiarColor5_5(){
  var color = document.getElementById('franja55').options[document.getElementById('franja55').selectedIndex].text+".png";
  document.getElementById('q_c5').innerHTML= "<img src='../images/" + color + "'>"
}

function CambiarColor6_1(){
  var color = document.getElementById('franja61').options[document.getElementById('franja61').selectedIndex].text+".png";
  document.getElementById('p_c6').innerHTML= "<img src='../images/" + color + "'>"
}
function CambiarColor6_2(){
  var color = document.getElementById('franja62').options[document.getElementById('franja62').selectedIndex].text+".png";
  document.getElementById('s_c6').innerHTML= "<img src='../images/" + color + "'>"
}
function CambiarColor6_3(){
  var color = document.getElementById('franja63').options[document.getElementById('franja63').selectedIndex].text+".png";
  document.getElementById('t_c6').innerHTML= "<img src='../images/" + color + "'>"
}
function CambiarColor6_4(){
  var color = document.getElementById('franja64').options[document.getElementById('franja64').selectedIndex].text+".png";
  document.getElementById('c_c6').innerHTML= "<img src='../images/" + color + "'>"
}
function CambiarColor6_5(){
  var color = document.getElementById('franja65').options[document.getElementById('franja65').selectedIndex].text+".png";
  document.getElementById('q_c6').innerHTML= "<img src='../images/" + color + "'>"
}
function CambiarColor6_6(){
  var color = document.getElementById('franja66').options[document.getElementById('franja66').selectedIndex].text+".png";
  document.getElementById('se_c6').innerHTML= "<img src='../images/" + color + "'>"
}

function Resolver3() {
    var ele1=document.getElementById('franja31');
    var ele2=document.getElementById('franja32');
    var ele3=document.getElementById('franja33');

    var valorcolor1=ele1.options[ele1.selectedIndex].value;
    var valorcolor2=ele2.options[ele2.selectedIndex].value;
    var valorcolor3=ele3.options[ele3.selectedIndex].value;

    var resultado=valorcolor1+valorcolor2;

    //multiplicador
    if (valorcolor3==0){ document.getElementById('resultado_').innerHTML="<b>El valor de la resistencia es de:</b> " + parseInt(resultado)*1 + " Ω";}
    if (valorcolor3==1){ document.getElementById('resultado_').innerHTML="<b>El valor de la resistencia es de:</b> " + parseInt(resultado)*10 + " Ω"; }
    if (valorcolor3==2){ document.getElementById('resultado_').innerHTML="<b>El valor de la resistencia es de:</b> " + parseInt(resultado)*100 + " Ω"; }
    if (valorcolor3==3){ document.getElementById('resultado_').innerHTML="<b>El valor de la resistencia es de:</b> " + parseInt(resultado)*1000 + " Ω"; }
    if (valorcolor3==4){ document.getElementById('resultado_').innerHTML="<b>El valor de la resistencia es de:</b> " + parseInt(resultado)*10000 + " Ω"; }
    if (valorcolor3==5){ document.getElementById('resultado_').innerHTML="<b>El valor de la resistencia es de:</b> " + parseInt(resultado)*100000 + " Ω"; }
    if (valorcolor3==6){ document.getElementById('resultado_').innerHTML="<b>El valor de la resistencia es de:</b> " + parseInt(resultado)*1000000 + " Ω"; }
    if (valorcolor3==7){ document.getElementById('resultado_').innerHTML="<b>El valor de la resistencia es de:</b> " + parseInt(resultado)*10000000 + " Ω"; }
    if (valorcolor3==8){ document.getElementById('resultado_').innerHTML="<b>El valor de la resistencia es de:</b> " + parseInt(resultado)*100000000 + " Ω"; }
    if (valorcolor3==9){ document.getElementById('resultado_').innerHTML="<b>El valor de la resistencia es de:</b> " + parseInt(resultado)*1000000000 + " Ω"; }
    if (valorcolor3==(-1)){ document.getElementById('resultado_').innerHTML="<b>El valor de la resistencia es de:</b> " + parseInt(resultado)*0.1 + " Ω"; }
    if (valorcolor3==(-2)){ document.getElementById('resultado_').innerHTML="<b>El valor de la resistencia es de:</b> " + parseInt(resultado)*0.01 + " Ω"; }

    document.getElementById('procedimiento_').innerHTML= 
    "Las resistencias de 3 bandas consisten en dos bandas para obtener las cifras y una multiplicativa: <br/><br/>"
    +" 1. Color de la primera banda: " + ele1.options[ele1.selectedIndex].text + ", equivale a " + valorcolor1 + "<br/>"
    + "2. Color de la segunda banda: " + ele2.options[ele2.selectedIndex].text + ", equivale a " + valorcolor2 + "<br/><br/>"
    + "Con esto se obtiene la cifra de: " + resultado + ".<br/><br/>"
    + "3. Color de la tercera banda: "+ ele3.options[ele3.selectedIndex].text + ", equivale a la notacion cientifica x10<sup>" + valorcolor3 + "</sup>"
    + " ( ó " + Math.pow(10,valorcolor3)+ "), esta es la cifra multiplicativa. <br/><br/>"
    + "Ya obtenido la equivalencia de las 3 bandas se puede obtener el valor de la resistencia: <br/><br/><br/>" 
    + "Operacion final: " + resultado + "x10<sup>" + valorcolor3 + "</sup>";

    document.getElementById('procedimiento').style.display = 'none';
    document.getElementById('resultado').style.display = 'block';  
    document.getElementById('m_p').style.display = 'block';
    document.getElementById('o_p').style.display = 'none'; 
}
function m_p(){ 
  document.getElementById('procedimiento').style.display = 'block';
  document.getElementById('m_p').style.display = 'none';
  document.getElementById('o_p').style.display = 'block'; 
}
function o_p(){
  document.getElementById('procedimiento').style.display = 'none';
  document.getElementById('m_p').style.display = 'block';
  document.getElementById('o_p').style.display = 'none';  
}

function Resolver4() {
  var ele1=document.getElementById('franja41');
  var ele2=document.getElementById('franja42');
  var ele3=document.getElementById('franja43');
  var ele4=document.getElementById('franja44');

  var valorcolor1=ele1.options[ele1.selectedIndex].value;
  var valorcolor2=ele2.options[ele2.selectedIndex].value;
  var valorcolor3=ele3.options[ele3.selectedIndex].value;
  var valorcolor4=ele4.options[ele4.selectedIndex].value;

  var resultado=valorcolor1+valorcolor2;

  //multiplicador
  if (valorcolor3==0){ total=parseInt(resultado)*1; }
  if (valorcolor3==1){ total=parseInt(resultado)*10; }
  if (valorcolor3==2){ total=parseInt(resultado)*100; }
  if (valorcolor3==3){ total=parseInt(resultado)*1000; }
  if (valorcolor3==4){ total=parseInt(resultado)*10000; }
  if (valorcolor3==5){ total=parseInt(resultado)*100000; }
  if (valorcolor3==6){ total=parseInt(resultado)*1000000; }
  if (valorcolor3==7){ total=parseInt(resultado)*10000000; }
  if (valorcolor3==8){ total=parseInt(resultado)*100000000; }
  if (valorcolor3==9){ total=parseInt(resultado)*1000000000; }
  if (valorcolor3==(-1)){ total=parseInt(resultado)*0.1; }
  if (valorcolor3==(-2)){ total=parseInt(resultado)*0.01; }

  //tolerancia
  if (valorcolor4==1){ document.getElementById('resultado_4').innerHTML="<b>El valor de la resistencia es de:</b> " + total + " Ω ±1%"; }
  if (valorcolor4==2){ document.getElementById('resultado_4').innerHTML="<b>El valor de la resistencia es de:</b> " + total + " Ω ±2%"; }
  if (valorcolor4==4){ document.getElementById('resultado_4').innerHTML="<b>El valor de la resistencia es de:</b> " + total + " Ω ±5%"; }
  if (valorcolor4==5){ document.getElementById('resultado_4').innerHTML="<b>El valor de la resistencia es de:</b> " + total + " Ω ±0.5%"; }
  if (valorcolor4==6){ document.getElementById('resultado_4').innerHTML="<b>El valor de la resistencia es de:</b> " + total + " Ω ±0.25%"; }
  if (valorcolor4==7){ document.getElementById('resultado_4').innerHTML="<b>El valor de la resistencia es de:</b> " + total + " Ω ±0.1%"; }
  if (valorcolor4==8){ document.getElementById('resultado_4').innerHTML="<b>El valor de la resistencia es de:</b> " + total + " Ω ±0.05%"; }
  if (valorcolor4==10){ document.getElementById('resultado_4').innerHTML="<b>El valor de la resistencia es de:</b> " + total + " Ω ±5%"; }
  if (valorcolor4==11){ document.getElementById('resultado_4').innerHTML="<b>El valor de la resistencia es de:</b> " + total + " Ω ±10%"; }

  if (valorcolor4==1){ var tol = "1"; }
  if (valorcolor4==2){ tol = "2"; }
  if (valorcolor4==4){ tol = "5"; }
  if (valorcolor4==5){ tol = "0.5"; }
  if (valorcolor4==6){ tol = "0.25"; }
  if (valorcolor4==7){ tol = "0.1"; }
  if (valorcolor4==8){ tol = "0.05"; }
  if (valorcolor4==10){ tol = "5"; }
  if (valorcolor4==11){ tol = "10"; }

    document.getElementById('procedimiento_4').innerHTML= 
    "Las resistencias de 4 bandas consisten en dos bandas para obtener las cifras, una multiplicativa y una de tolerancia: <br/><br/>"
    +" 1. Color de la primera banda: " + ele1.options[ele1.selectedIndex].text + ", equivale a " + valorcolor1 + "<br/>"
    + "2. Color de la segunda banda: " + ele2.options[ele2.selectedIndex].text + ", equivale a " + valorcolor2 + "<br/><br/>"
    + "Con esto se obtiene la cifra de: " + resultado + ".<br/><br/>"
    + "3. Color de la tercera banda: "+ ele3.options[ele3.selectedIndex].text + ", equivale a la notacion cientifica x10<sup>" + valorcolor3 + "</sup>"
    + " ( ó " + Math.pow(10,valorcolor3)+ "), esta es la cifra miltiplicativa. <br>"
    + "4. Color de la cuarta banda: " + ele4.options[ele4.selectedIndex].text + ", equivale a " + tol
    + ", esta es la cifra de tolerancia, la cual significa que esta resistencia puede soportar un paso de corriente de ±"+ tol+ "% al del su valor exacto.<br/><br/>"
    + "Ya obtenido la equivalencia de las 4 bandas se puede obtener el valor de la resistencia: <br/><br/><br/>" 
    + "Operacion final: " + resultado + "x10<sup>" + valorcolor3 + "</sup> con una tolerancia de ±" +tol+"% ("+ (total-((total/100)*tol)) +"Ω - " + (total+((total/100)*tol)) +"Ω)";

    document.getElementById('procedimiento4').style.display = 'none';
    document.getElementById('resultado4').style.display = 'block';  
    document.getElementById('m_p4').style.display = 'block';
    document.getElementById('o_p4').style.display = 'none'; 
}
function m_p4(){ 
  document.getElementById('procedimiento4').style.display = 'block';
  document.getElementById('m_p4').style.display = 'none';
  document.getElementById('o_p4').style.display = 'block'; 
}
function o_p4(){
  document.getElementById('procedimiento4').style.display = 'none';
  document.getElementById('m_p4').style.display = 'block';
  document.getElementById('o_p4').style.display = 'none';  
}

function Resolver5() {
  var ele1=document.getElementById('franja51');
  var ele2=document.getElementById('franja52');
  var ele3=document.getElementById('franja53');
  var ele4=document.getElementById('franja54');
  var ele5=document.getElementById('franja55');

  var valorcolor1=ele1.options[ele1.selectedIndex].value;
  var valorcolor2=ele2.options[ele2.selectedIndex].value;
  var valorcolor3=ele3.options[ele3.selectedIndex].value;
  var valorcolor4=ele4.options[ele4.selectedIndex].value;
  var valorcolor5=ele5.options[ele5.selectedIndex].value;

  var resultado=valorcolor1+valorcolor2+valorcolor3;
    
  //multiplicador
  if (valorcolor4==0){ total=parseInt(resultado)*1; }
  if (valorcolor4==1){ total=parseInt(resultado)*10; }
  if (valorcolor4==2){ total=parseInt(resultado)*100; }
  if (valorcolor4==3){ total=parseInt(resultado)*1000; }
  if (valorcolor4==4){ total=parseInt(resultado)*10000; }
  if (valorcolor4==5){ total=parseInt(resultado)*100000; }
  if (valorcolor4==6){ total=parseInt(resultado)*1000000; }
  if (valorcolor4==7){ total=parseInt(resultado)*10000000; }
  if (valorcolor4==8){ total=parseInt(resultado)*100000000; }
  if (valorcolor4==9){ total=parseInt(resultado)*1000000000; }
  if (valorcolor4==(-1)){ total=parseInt(resultado)*0.1; }
  if (valorcolor4==(-2)){ total=parseInt(resultado)*0.01; }

  //tolerancia
  if (valorcolor5==1){ document.getElementById('resultado_5').innerHTML="<b>El valor de la resistencia es de:</b> " + total + " Ω ±1%"; }
  if (valorcolor5==2){ document.getElementById('resultado_5').innerHTML="<b>El valor de la resistencia es de:</b> " + total + " Ω ±2%"; }
  if (valorcolor5==4){ document.getElementById('resultado_5').innerHTML="<b>El valor de la resistencia es de:</b> " + total + " Ω ±5%"; }
  if (valorcolor5==5){ document.getElementById('resultado_5').innerHTML="<b>El valor de la resistencia es de:</b> " + total + " Ω ±0.5%"; }
  if (valorcolor5==6){ document.getElementById('resultado_5').innerHTML="<b>El valor de la resistencia es de:</b> " + total + " Ω ±0.25%"; }
  if (valorcolor5==7){ document.getElementById('resultado_5').innerHTML="<b>El valor de la resistencia es de:</b> " + total + " Ω ±0.1%"; }
  if (valorcolor5==8){ document.getElementById('resultado_5').innerHTML="<b>El valor de la resistencia es de:</b> " + total + " Ω ±0.05%"; }
  if (valorcolor5==10){ document.getElementById('resultado_5').innerHTML="<b>El valor de la resistencia es de:</b> " + total + " Ω ±5%"; }
  if (valorcolor5==11){ document.getElementById('resultado_5').innerHTML="<b>El valor de la resistencia es de:</b> " + total + " Ω ±10%"; }

  if (valorcolor5==1){ var tol = "1"; }
  if (valorcolor5==2){ tol = "2"; }
  if (valorcolor5==4){ tol = "5"; }
  if (valorcolor5==5){ tol = "0.5"; }
  if (valorcolor5==6){ tol = "0.25"; }
  if (valorcolor5==7){ tol = "0.1"; }
  if (valorcolor5==8){ tol = "0.05"; }
  if (valorcolor5==10){ tol = "5"; }
  if (valorcolor5==11){ tol = "10"; }

    document.getElementById('procedimiento_5').innerHTML= 
    "Las resistencias de 5 bandas consisten en tres bandas para obtener las cifras, una multiplicativa y una de tolerancia: <br/><br/>"
    +" 1. Color de la primera banda: " + ele1.options[ele1.selectedIndex].text + ", equivale a " + valorcolor1 + "<br/>"
    + "2. Color de la segunda banda: " + ele2.options[ele2.selectedIndex].text + ", equivale a " + valorcolor2 + "<br/>"
    + "3. Color de la tercera banda: " + ele3.options[ele3.selectedIndex].text + ", equivale a " + valorcolor3 + "<br/><br/>"
    + "Con esto se obtiene la cifra de: " + resultado + ".<br/><br/>"
    + "4. Color de la cuarta banda: "+ ele4.options[ele4.selectedIndex].text + ", equivale a la notacion cientifica x10<sup>" + valorcolor4 + "</sup>"
    + " ( ó " + Math.pow(10,valorcolor4)+ "), esta es la cifra multiplicativa. <br>"
    + "5. Color de la quinta banda: " + ele5.options[ele5.selectedIndex].text + ", equivale a " + tol
    + ", esta es la cifra de tolerancia, la cual significa que esta resistencia puede soportar un paso de corriente de ±"+ tol+ "% al del su valor exacto.<br/><br/>"
    + "Ya obtenido la equivalencia de las 5 bandas se puede obtener el valor de la resistencia: <br/><br/><br/>" 
    + "Operacion final: " + resultado + "x10<sup>" + valorcolor4 + "</sup> con una tolerancia de ±" +tol+"% ("+ (total-((total/100)*tol)) +"Ω - " + (total+((total/100)*tol)) +"Ω)";

    document.getElementById('procedimiento5').style.display = 'none';
    document.getElementById('resultado5').style.display = 'block';  
    document.getElementById('m_p5').style.display = 'block';
    document.getElementById('o_p5').style.display = 'none'; 
}
function m_p5(){ 
  document.getElementById('procedimiento5').style.display = 'block';
  document.getElementById('m_p5').style.display = 'none';
  document.getElementById('o_p5').style.display = 'block'; 
}
function o_p5(){
  document.getElementById('procedimiento5').style.display = 'none';
  document.getElementById('m_p5').style.display = 'block';
  document.getElementById('o_p5').style.display = 'none';  
}

function Resolver6() {
  var ele1=document.getElementById('franja61')
  var ele2=document.getElementById('franja62')
  var ele3=document.getElementById('franja63')
  var ele4=document.getElementById('franja64')
  var ele5=document.getElementById('franja65')
  var ele6=document.getElementById('franja66')

  var valorcolor1=ele1.options[ele1.selectedIndex].value;
  var valorcolor2=ele2.options[ele2.selectedIndex].value;
  var valorcolor3=ele3.options[ele3.selectedIndex].value;
  var valorcolor4=ele4.options[ele4.selectedIndex].value;
  var valorcolor5=ele5.options[ele5.selectedIndex].value;
  var valorcolor6=ele6.options[ele6.selectedIndex].value;

  var resultado=valorcolor1+valorcolor2+valorcolor3;
  //multiplicador
  if (valorcolor4==0){ total=parseInt(resultado)*1; }
  if (valorcolor4==1){ total=parseInt(resultado)*10; }
  if (valorcolor4==2){ total=parseInt(resultado)*100; }
  if (valorcolor4==3){ total=parseInt(resultado)*1000; }
  if (valorcolor4==4){ total=parseInt(resultado)*10000; }
  if (valorcolor4==5){ total=parseInt(resultado)*100000; }
  if (valorcolor4==6){ total=parseInt(resultado)*1000000; }
  if (valorcolor4==7){ total=parseInt(resultado)*10000000; }
  if (valorcolor4==8){ total=parseInt(resultado)*100000000; }
  if (valorcolor4==9){ total=parseInt(resultado)*1000000000; }
  if (valorcolor4==(-1)){ total=parseInt(resultado)*0.1; }
  if (valorcolor4==(-2)){ total=parseInt(resultado)*0.01; }

  //tolerancia
  if (valorcolor5==1){ resultado2 = total + " Ω ±1%"; }
  if (valorcolor5==2){ resultado2 = total + " Ω ±2%"; }
  if (valorcolor5==4){ resultado2 = total + " Ω ±5%"; }
  if (valorcolor5==5){ resultado2 = total + " Ω ±0.5%"; }
  if (valorcolor5==6){ resultado2 = total + " Ω ±0.25%"; }
  if (valorcolor5==7){ resultado2 = total + " Ω ±0.1%"; }
  if (valorcolor5==8){ resultado2 = total + " Ω ±0.05%"; }
  if (valorcolor5==10){ resultado2 = total + " Ω ±5%"; }
  if (valorcolor5==11){ resultado2 = total + " Ω ±10%"; }

  //TCR
  if (valorcolor6==0){ document.getElementById('resultado_6').innerHTML="<b>El valor de la resistencia es de:</b> " + resultado2 + ", 250ppm/K"; }
  if (valorcolor6==1){ document.getElementById('resultado_6').innerHTML="<b>El valor de la resistencia es de:</b> " + resultado2 + ", 100ppm/K"; }
  if (valorcolor6==2){ document.getElementById('resultado_6').innerHTML="<b>El valor de la resistencia es de:</b> " + resultado2 + ", 50ppm/K"; }
  if (valorcolor6==3){ document.getElementById('resultado_6').innerHTML="<b>El valor de la resistencia es de:</b> " + resultado2 + ", 15ppm/K"; }
  if (valorcolor6==4){ document.getElementById('resultado_6').innerHTML="<b>El valor de la resistencia es de:</b> " + resultado2 + ", 25ppm/K"; }
  if (valorcolor6==5){ document.getElementById('resultado_6').innerHTML="<b>El valor de la resistencia es de:</b> " + resultado2 + ", 20ppm/K"; }
  if (valorcolor6==6){ document.getElementById('resultado_6').innerHTML="<b>El valor de la resistencia es de:</b> " + resultado2 + ", 10ppm/K"; }
  if (valorcolor6==7){ document.getElementById('resultado_6').innerHTML="<b>El valor de la resistencia es de:</b> " + resultado2 + ", 5ppm/K"; }
  if (valorcolor6==8){ document.getElementById('resultado_6').innerHTML="<b>El valor de la resistencia es de:</b> " + resultado2 + ", 1ppm/K"; }

  if (valorcolor5==1){ var tol = "1"; }
  if (valorcolor5==2){ tol = "2"; }
  if (valorcolor5==4){ tol = "5"; }
  if (valorcolor5==5){ tol = "0.5"; }
  if (valorcolor5==6){ tol = "0.25"; }
  if (valorcolor5==7){ tol = "0.1"; }
  if (valorcolor5==8){ tol = "0.05"; }
  if (valorcolor5==10){ tol = "5"; }
  if (valorcolor5==11){ tol = "10"; }

  if (valorcolor6==0){ var tcr = "250"; }
  if (valorcolor6==1){ tcr = "100"; }
  if (valorcolor6==2){ tcr = "50"; }
  if (valorcolor6==3){ tcr = "15"; }
  if (valorcolor6==4){ tcr = "25"; }
  if (valorcolor6==5){ tcr = "20"; }
  if (valorcolor6==6){ tcr = "10"; }
  if (valorcolor6==7){ tcr = "5"; }
  if (valorcolor6==8){ tcr = "1"; }

    document.getElementById('procedimiento_6').innerHTML= 
    "Las resistencias de 6 bandas consisten en tres bandas para obtener las cifras, una multiplicativa, una de tolerancia y una TCR: <br/><br/>"
    +" 1. Color de la primera banda: " + ele1.options[ele1.selectedIndex].text + ", equivale a " + valorcolor1 + "<br/>"
    + "2. Color de la segunda banda: " + ele2.options[ele2.selectedIndex].text + ", equivale a " + valorcolor2 + "<br/>"
    + "3. Color de la tercera banda: " + ele3.options[ele3.selectedIndex].text + ", equivale a " + valorcolor3 + "<br/><br/>"
    + "Con esto se obtiene la cifra de: " + resultado + ".<br/><br/>"
    + "4. Color de la cuarta banda: "+ ele4.options[ele4.selectedIndex].text + ", equivale a la notacion cientifica x10<sup>" + valorcolor4 + "</sup>"
    + " ( ó " + Math.pow(10,valorcolor4)+ "), esta es la cifra multiplicativa. <br>"
    + "5. Color de la quinta banda: " + ele5.options[ele5.selectedIndex].text + ", equivale a " + tol
    + ", esta es la cifra de tolerancia, la cual significa que esta resistencia puede soportar un paso de corriente de ±"+ tol+ "% al del su valor exacto.<br/>"
    + "6. Color de la sexta banda: " + ele6.options[ele6.selectedIndex].text + ", equivale a " + tcr
    + ", esta es la cifra que corresponde al coeficiente de temperatura, no se suele tener en cuenta a la hora de obtener el valor total, sin embargo y dependiendo del fin que va a tener esa resistencia será un factor muy importante.<br/>"
    + "Su valor se mide en ppm (partes por millon) /K. <br/><br/>"
    + "Ya obtenido la equivalencia de las 6 bandas se puede obtener el valor de la resistencia: <br/><br/><br/>" 
    + "Operacion final: " + resultado + "x10<sup>" + valorcolor4 + "</sup> con una tolerancia de ±" +tol+"% ("+ (total-((total/100)*tol)) +"Ω - " + (total+((total/100)*tol)) +"Ω), "+tcr+"ppm/K.";

    document.getElementById('procedimiento6').style.display = 'none';
    document.getElementById('resultado6').style.display = 'block';  
    document.getElementById('m_p6').style.display = 'block';
    document.getElementById('o_p6').style.display = 'none'; 
}
function m_p6(){ 
  document.getElementById('procedimiento6').style.display = 'block';
  document.getElementById('m_p6').style.display = 'none';
  document.getElementById('o_p6').style.display = 'block'; 
}
function o_p6(){
  document.getElementById('procedimiento6').style.display = 'none';
  document.getElementById('m_p6').style.display = 'block';
  document.getElementById('o_p6').style.display = 'none';  
}