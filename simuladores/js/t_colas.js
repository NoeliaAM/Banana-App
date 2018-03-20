function mm1(){
	document.getElementById('resultado_mm1').style.display = 'none';
	document.getElementById('procedimiento_mm1').style.display = 'none';
	document.getElementById('mm1_p').style.display = 'none';
	document.getElementById('sis_est').style.display = 'none';
	document.getElementById('propi_mm1').style.display = 'none';
	document.getElementById('sis_no_est').style.display = 'none';
	document.getElementById('mm1_res').style.display = 'none';	
	document.getElementById('propi_mm1res').style.display = 'none';
	document.getElementById('mp_mm1').style.display = 'none';	
	document.getElementById('op_mm1').style.display = 'none';

	var m=document.getElementById('m').value;
	var lam = document.getElementById('lam').value; 
	var n = document.getElementById('n').value; 
    
    if(m <=0 || lam<=0){

		alert("Ingrese valores validos.");   

	}else{

			var p = lam/m;
			var w=1/(m-lam);
			var wq= w -(1/m);
			var lq = Math.pow(p,2)/(1-p);
			var l = lq +p;
			var pn = (Math.pow(p,n))*(1-p);

			document.getElementById('mm1_1').innerHTML= lam;
			document.getElementById('mm1_2').innerHTML= m;
			document.getElementById('mm1_3').innerHTML= m;
			document.getElementById('mm1_4').innerHTML= lam;
			document.getElementById('mm1_5').innerHTML= p.toFixed(6);
			document.getElementById('mm1_6').innerHTML= m;
			document.getElementById('mm1_7').innerHTML= lam;
			document.getElementById('mm1_8').innerHTML= w.toFixed(6);
			document.getElementById('mm1_9').innerHTML= w.toFixed(6);
			document.getElementById('mm1_10').innerHTML= m;
			document.getElementById('mm1_11').innerHTML= wq.toFixed(6);
			document.getElementById('mm1_12').innerHTML= p.toFixed(6);
			document.getElementById('mm1_13').innerHTML= p.toFixed(6);
			document.getElementById('mm1_14').innerHTML= lq.toFixed(6);
			document.getElementById('mm1_15').innerHTML= lq.toFixed(6);
			document.getElementById('mm1_16').innerHTML= p.toFixed(6);
			document.getElementById('mm1_17').innerHTML= l.toFixed(6);
			document.getElementById('mm1_18').innerHTML= n;
			document.getElementById('mm1_19').innerHTML= n;
			document.getElementById('mm1_20').innerHTML= p.toFixed(6);
			document.getElementById('mm1_21').innerHTML= pn.toFixed(6);
			document.getElementById('mm1_22').innerHTML= p.toFixed(6);
			document.getElementById('mm1_23').innerHTML= w.toFixed(6);
			document.getElementById('mm1_24').innerHTML= wq.toFixed(6);
			document.getElementById('mm1_25').innerHTML= l.toFixed(6);
			document.getElementById('mm1_26').innerHTML= lq.toFixed(6);
			document.getElementById('mm1_27').innerHTML= n;
			document.getElementById('mm1_28').innerHTML= pn.toFixed(6);
			document.getElementById('mm1_29').innerHTML= p.toFixed(6);

			if(p>=1){
			
				document.getElementById('resultado_mm1').style.display = 'block';
				document.getElementById('mm1_p').style.display = 'block';
				document.getElementById('sis_no_est').style.display = 'block';
				document.getElementById('mp_mm1').style.display = 'block';

			}else{

					if(n!=""){

						document.getElementById('resultado_mm1').style.display = 'block';
						document.getElementById('mm1_p').style.display = 'block';
						document.getElementById('sis_est').style.display = 'block';
						document.getElementById('propi_mm1').style.display = 'block';
						document.getElementById('mm1_res').style.display = 'block';
						document.getElementById('propi_mm1res').style.display = 'block';
						document.getElementById('mp_mm1').style.display = 'block';

					}else{

							document.getElementById('resultado_mm1').style.display = 'block';
							document.getElementById('mm1_p').style.display = 'block';
							document.getElementById('sis_est').style.display = 'block';
							document.getElementById('mm1_res').style.display = 'block';	
							document.getElementById('mp_mm1').style.display = 'block';

					}
			}
	}	
}
function op_mm1(){
	document.getElementById('procedimiento_mm1').style.display = 'none';
	document.getElementById('mp_mm1').style.display = 'block';	
	document.getElementById('op_mm1').style.display = 'none';	
}
function mp_mm1(){
	document.getElementById('procedimiento_mm1').style.display = 'block';
	document.getElementById('mp_mm1').style.display = 'none';	
	document.getElementById('op_mm1').style.display = 'block';	
}
function mms(){
	document.getElementById('resultado_mms').style.display = 'none';
	document.getElementById('procedimiento_mms').style.display = 'none';
	document.getElementById('mms_p').style.display = 'none';
	document.getElementById('sis_est_mms').style.display = 'none';
	document.getElementById('propi_mms1').style.display = 'none';
	document.getElementById('propi_mms2').style.display = 'none';
	document.getElementById('sis_no_est_mms').style.display = 'none';
	document.getElementById('mms_res').style.display = 'none';	
	document.getElementById('propi_mms_res1').style.display = 'none';
	document.getElementById('propi_mms_res2').style.display = 'none';
	document.getElementById('mp_mms').style.display = 'none';	
	document.getElementById('op_mms').style.display = 'none';

	var m=document.getElementById('m2').value;
	var lam = document.getElementById('lam2').value;
	var c = document.getElementById('c').value; 
	var n = document.getElementById('n2').value; 
    
    if(m <=0 || lam<=0 || c<=0){

		alert("Ingrese valores validos.");   

	}else{

			var p = lam/(c*m);
	
			var p0c =1;	
			for(var i=1; i<=c; i++){
				p0c= p0c*i;
			}

			var p0n =1;
			var p02 =1;
			for(var k=1; k<=(c-1); k++){
				p0n= p0n*k;
				p02=p02+((Math.pow((c*p),k))/p0n);
			}
			
			var p0= 1/((((Math.pow(c,c))*(Math.pow(p,c)))/(p0c*(1-p))) +p02);
			var lq= ((Math.pow(c,c))*(Math.pow(p,(Number(c)+1)))*p0)/(p0c*(Math.pow((1-p),2)));
			var wq = lq/lam;
			var w=wq+(1/m);
			var l=lam*w;

			var fac1 =1;	
			for(var i=1; i<=n; i++){
				fac1= fac1*i;
			}
			var pn1 = ((Math.pow((c*p),n))/fac1)*p0;

			var fac2 =1;	
			for(var j=1; j<=c; j++){
				fac2= fac2*j;
			}
			var pn2 = (((Math.pow(c,c))*(Math.pow(p,n)))/fac2)*p0;

			document.getElementById('mms_1').innerHTML= lam;
			document.getElementById('mms_2').innerHTML= m;
			document.getElementById('mms_3').innerHTML= c;
			document.getElementById('mms_4').innerHTML= lam;
			document.getElementById('mms_5').innerHTML= c;
			document.getElementById('mms_6').innerHTML= m;
			document.getElementById('mms_7').innerHTML= p.toFixed(6);
			document.getElementById('mms_8').innerHTML= wq.toFixed(6);
			document.getElementById('mms_9').innerHTML= m;
			document.getElementById('mms_10').innerHTML= w.toFixed(6);
			document.getElementById('mms_11').innerHTML= lq.toFixed(6);
			document.getElementById('mms_12').innerHTML= lam;
			document.getElementById('mms_13').innerHTML= wq.toFixed(6);
			document.getElementById('mms_14').innerHTML= lam;
			document.getElementById('mms_15').innerHTML= w.toFixed(6);
			document.getElementById('mms_16').innerHTML= l.toFixed(6);
			document.getElementById('mms_17').innerHTML= c;
			document.getElementById('mms_18').innerHTML= c;
			document.getElementById('mms_19').innerHTML= p.toFixed(6);
			document.getElementById('mms_20').innerHTML= (Number(c)+1);
			document.getElementById('mms_21').innerHTML= p0.toFixed(6);
			document.getElementById('mms_22').innerHTML= c;
			document.getElementById('mms_23').innerHTML= p.toFixed(6);
			document.getElementById('mms_24').innerHTML= lq.toFixed(6);
			document.getElementById('mms_25').innerHTML= c;
			document.getElementById('mms_26').innerHTML= c;
			document.getElementById('mms_27').innerHTML= p.toFixed(6);
			document.getElementById('mms_28').innerHTML= c;
			document.getElementById('mms_29').innerHTML= c;
			document.getElementById('mms_30').innerHTML= p.toFixed(6);
			document.getElementById('mms_31').innerHTML= (Number(c)-1);
			document.getElementById('mms_32').innerHTML= c;
			document.getElementById('mms_33').innerHTML= p.toFixed(6);
			document.getElementById('mms_34').innerHTML= p0.toFixed(6);
			document.getElementById('mms_35').innerHTML= c;
			document.getElementById('mms_36').innerHTML= p.toFixed(6);
			document.getElementById('mms_37').innerHTML= n;
			document.getElementById('mms_38').innerHTML= n;
			document.getElementById('mms_39').innerHTML= p0.toFixed(6);
			document.getElementById('mms_40').innerHTML= pn1.toFixed(6);
			document.getElementById('mms_41').innerHTML= n;
			document.getElementById('mms_42').innerHTML= n;
			document.getElementById('mms_43').innerHTML= c;
			document.getElementById('mms_44').innerHTML= c;
			document.getElementById('mms_45').innerHTML= p.toFixed(6);
			document.getElementById('mms_46').innerHTML= n;
			document.getElementById('mms_47').innerHTML= c;
			document.getElementById('mms_48').innerHTML= p0.toFixed(6);
			document.getElementById('mms_49').innerHTML= pn2.toFixed(6);
			document.getElementById('mms_50').innerHTML= n;
			document.getElementById('mms_51').innerHTML= n;
			document.getElementById('mms_52').innerHTML= p.toFixed(6);
			document.getElementById('mms_53').innerHTML= p.toFixed(6);
			document.getElementById('mms_54').innerHTML= w.toFixed(6);
			document.getElementById('mms_55').innerHTML= wq.toFixed(6);
			document.getElementById('mms_56').innerHTML= l.toFixed(6);
			document.getElementById('mms_57').innerHTML= lq.toFixed(6);
			document.getElementById('mms_58').innerHTML= p0.toFixed(6);
			document.getElementById('mms_59').innerHTML= n;
			document.getElementById('mms_60').innerHTML= pn1.toFixed(6);
			document.getElementById('mms_61').innerHTML= n;
			document.getElementById('mms_62').innerHTML= pn2.toFixed(6);

			if(p>=1){
			
				document.getElementById('resultado_mms').style.display = 'block';
				document.getElementById('mms_p').style.display = 'block';
				document.getElementById('sis_no_est_mms').style.display = 'block';
				document.getElementById('mp_mms').style.display = 'block';

			}else{

				if(n!=""){

					if(n<=c){

						document.getElementById('resultado_mms').style.display = 'block';
						document.getElementById('mms_p').style.display = 'block';
						document.getElementById('sis_est_mms').style.display = 'block';
						document.getElementById('propi_mms1').style.display = 'block';
						document.getElementById('mms_res').style.display = 'block';
						document.getElementById('propi_mms_res1').style.display = 'block';
						document.getElementById('mp_mms').style.display = 'block';

					}else{

						document.getElementById('resultado_mms').style.display = 'block';
						document.getElementById('mms_p').style.display = 'block';
						document.getElementById('sis_est_mms').style.display = 'block';
						document.getElementById('propi_mms2').style.display = 'block';
						document.getElementById('mms_res').style.display = 'block';
						document.getElementById('propi_mms_res2').style.display = 'block';
						document.getElementById('mp_mms').style.display = 'block';

					}

					}else{

						document.getElementById('resultado_mms').style.display = 'block';
						document.getElementById('mms_p').style.display = 'block';
						document.getElementById('sis_est_mms').style.display = 'block';
						document.getElementById('mms_res').style.display = 'block';	
						document.getElementById('mp_mms').style.display = 'block';

					}
			}
	}	
}
function op_mms(){
	document.getElementById('procedimiento_mms').style.display = 'none';
	document.getElementById('mp_mms').style.display = 'block';	
	document.getElementById('op_mms').style.display = 'none';	
}
function mp_mms(){
	document.getElementById('procedimiento_mms').style.display = 'block';
	document.getElementById('mp_mms').style.display = 'none';	
	document.getElementById('op_mms').style.display = 'block';	
}
function mm1k(){
	document.getElementById('resultado_mm1k').style.display = 'none';
	document.getElementById('procedimiento_mm1k').style.display = 'none';
	document.getElementById('mm1k_l1').style.display = 'none';
	document.getElementById('mm1k_l2').style.display = 'none';
	document.getElementById('mm1k_proceso').style.display = 'none';
	document.getElementById('propi_mm1k1').style.display = 'none';
	document.getElementById('mm1k_res').style.display = 'none';
	document.getElementById('propi_mm1k_res1').style.display = 'none';
	document.getElementById('mp_mm1k').style.display = 'none';
	document.getElementById('op_mm1k').style.display = 'none';

	var m= document.getElementById('m3').value;
	var lam = document.getElementById('lam3').value;
	var k = document.getElementById('k').value; 
	var n = document.getElementById('n3').value; 
    
    if(m <=0 || lam<=0 || k<=0){
		alert("Ingrese valores validos.");   
	}else{
		var p = lam/m;
		if(p!="1"){
			if(n==""){
				var n=0;
				var uno=p/(1-p);
				var uu=Number(k)+1;
				var dos=uu*(Math.pow(p,uu));
				var tres=1-(Math.pow(p,uu));
				var l= uno-(dos/tres);
				var pk= ((Math.pow(p,k))*(1-p))/(1-(Math.pow(p,uu)));
				var lam_ef=lam*(1-pk);
				var w=l/lam_ef;
				var wq=w-(1/m);
				var lq= lam_ef*wq;
				var p0= ((Math.pow(p,n))*(1-p))/(1-(Math.pow(p,uu)));

				document.getElementById('mm1k_1').innerHTML= lam;
				document.getElementById('mm1k_2').innerHTML= m;
				document.getElementById('mm1k_3').innerHTML= k;
				document.getElementById('mm1k_4').innerHTML= lam;
				document.getElementById('mm1k_5').innerHTML= m;
				document.getElementById('mm1k_6').innerHTML= p.toFixed(6);
				document.getElementById('mm1k_7').innerHTML= p.toFixed(6);
				document.getElementById('mm1k_8').innerHTML= p.toFixed(6);
				document.getElementById('mm1k_9').innerHTML= Number(k)+1;
				document.getElementById('mm1k_10').innerHTML= p.toFixed(6);
				document.getElementById('mm1k_11').innerHTML= Number(k)+1;
				document.getElementById('mm1k_12').innerHTML= p.toFixed(6);
				document.getElementById('mm1k_13').innerHTML= Number(k)+1;
				document.getElementById('mm1k_14').innerHTML= l.toFixed(6);
				document.getElementById('mm1k_15').innerHTML= k;
				document.getElementById('mm1k_16').innerHTML= p.toFixed(6);
				document.getElementById('mm1k_17').innerHTML= p.toFixed(6);
				document.getElementById('mm1k_18').innerHTML= p.toFixed(6);
				document.getElementById('mm1k_19').innerHTML= Number(k)+1;
				document.getElementById('mm1k_20').innerHTML= pk.toFixed(6);
				document.getElementById('mm1k_21').innerHTML= lam;
				document.getElementById('mm1k_22').innerHTML= pk.toFixed(6);
				document.getElementById('mm1k_23').innerHTML= lam_ef.toFixed(6);
				document.getElementById('mm1k_24').innerHTML= l.toFixed(6);
				document.getElementById('mm1k_25').innerHTML= lam_ef.toFixed(6);
				document.getElementById('mm1k_26').innerHTML= w.toFixed(6);
				document.getElementById('mm1k_27').innerHTML= w.toFixed(6);
				document.getElementById('mm1k_28').innerHTML= m;
				document.getElementById('mm1k_29').innerHTML= wq.toFixed(6);
				document.getElementById('mm1k_30').innerHTML= lam_ef.toFixed(6);
				document.getElementById('mm1k_31').innerHTML= wq.toFixed(6);
				document.getElementById('mm1k_32').innerHTML= lq.toFixed(6);
				document.getElementById('mm1k_41').innerHTML= p.toFixed(6);
				document.getElementById('mm1k_42').innerHTML= l.toFixed(6);
				document.getElementById('mm1k_43').innerHTML= lam_ef.toFixed(6);
				document.getElementById('mm1k_44').innerHTML= w.toFixed(6);
				document.getElementById('mm1k_45').innerHTML= wq.toFixed(6);
				document.getElementById('mm1k_46').innerHTML= lq.toFixed(6);
				document.getElementById('mm1k_47').innerHTML= n;
				document.getElementById('mm1k_48').innerHTML= p0.toFixed(6);

				document.getElementById('resultado_mm1k').style.display = 'block';
				document.getElementById('mm1k_l1').style.display = 'block';
				document.getElementById('mm1k_proceso').style.display = 'block';
				document.getElementById('mm1k_res').style.display = 'block';
				document.getElementById('mp_mm1k').style.display = 'block';	
			}else{
				var n = document.getElementById('n3').value;
				var uno=p/(1-p);
				var uu=Number(k)+1;
				var dos=uu*(Math.pow(p,uu));
				var tres=1-(Math.pow(p,uu));
				var l= uno-(dos/tres);
				var pk= ((Math.pow(p,k))*(1-p))/(1-(Math.pow(p,uu)));
				var lam_ef=lam*(1-pk);
				var w=l/lam_ef;
				var wq=w-(1/m);
				var lq= lam_ef*wq;
				var pn= ((Math.pow(p,n))*(1-p))/(1-(Math.pow(p,uu)));	

				document.getElementById('mm1k_1').innerHTML= lam;
				document.getElementById('mm1k_2').innerHTML= m;
				document.getElementById('mm1k_3').innerHTML= k;
				document.getElementById('mm1k_4').innerHTML= lam;
				document.getElementById('mm1k_5').innerHTML= m;
				document.getElementById('mm1k_6').innerHTML= p.toFixed(6);
				document.getElementById('mm1k_7').innerHTML= p.toFixed(6);
				document.getElementById('mm1k_8').innerHTML= p.toFixed(6);
				document.getElementById('mm1k_9').innerHTML= Number(k)+1;
				document.getElementById('mm1k_10').innerHTML= p.toFixed(6);
				document.getElementById('mm1k_11').innerHTML= Number(k)+1;
				document.getElementById('mm1k_12').innerHTML= p.toFixed(6);
				document.getElementById('mm1k_13').innerHTML= Number(k)+1;
				document.getElementById('mm1k_14').innerHTML= l.toFixed(6);
				document.getElementById('mm1k_15').innerHTML= k;
				document.getElementById('mm1k_16').innerHTML= p.toFixed(6);
				document.getElementById('mm1k_17').innerHTML= p.toFixed(6);
				document.getElementById('mm1k_18').innerHTML= p.toFixed(6);
				document.getElementById('mm1k_19').innerHTML= Number(k)+1;
				document.getElementById('mm1k_20').innerHTML= pk.toFixed(6);
				document.getElementById('mm1k_21').innerHTML= lam;
				document.getElementById('mm1k_22').innerHTML= pk.toFixed(6);
				document.getElementById('mm1k_23').innerHTML= lam_ef.toFixed(6);
				document.getElementById('mm1k_24').innerHTML= l.toFixed(6);
				document.getElementById('mm1k_25').innerHTML= lam_ef.toFixed(6);
				document.getElementById('mm1k_26').innerHTML= w.toFixed(6);
				document.getElementById('mm1k_27').innerHTML= w.toFixed(6);
				document.getElementById('mm1k_28').innerHTML= m;
				document.getElementById('mm1k_29').innerHTML= wq.toFixed(6);
				document.getElementById('mm1k_30').innerHTML= lam_ef.toFixed(6);
				document.getElementById('mm1k_31').innerHTML= wq.toFixed(6);
				document.getElementById('mm1k_32').innerHTML= lq.toFixed(6);
				document.getElementById('mm1k_33').innerHTML= n;
				document.getElementById('mm1k_34').innerHTML= n;
				document.getElementById('mm1k_35').innerHTML= p.toFixed(6);
				document.getElementById('mm1k_36').innerHTML= n;
				document.getElementById('mm1k_37').innerHTML= p.toFixed(6);
				document.getElementById('mm1k_38').innerHTML= p.toFixed(6);
				document.getElementById('mm1k_39').innerHTML= Number(k)+1;
				document.getElementById('mm1k_40').innerHTML= pn.toFixed(6);
				document.getElementById('mm1k_41').innerHTML= p.toFixed(6);
				document.getElementById('mm1k_42').innerHTML= l.toFixed(6);
				document.getElementById('mm1k_43').innerHTML= lam_ef.toFixed(6);
				document.getElementById('mm1k_44').innerHTML= w.toFixed(6);
				document.getElementById('mm1k_45').innerHTML= wq.toFixed(6);
				document.getElementById('mm1k_46').innerHTML= lq.toFixed(6);
				document.getElementById('mm1k_47').innerHTML= n;
				document.getElementById('mm1k_48').innerHTML= pn.toFixed(6);

				document.getElementById('resultado_mm1k').style.display = 'block';
				document.getElementById('mm1k_l1').style.display = 'block';
				document.getElementById('mm1k_proceso').style.display = 'block';
				document.getElementById('propi_mm1k1').style.display = 'block';
				document.getElementById('mm1k_res').style.display = 'block';
				document.getElementById('propi_mm1k_res1').style.display = 'block';
				document.getElementById('mp_mm1k').style.display = 'block';	
			}			
		}else{
			if(n==""){
				var l= Number(k)/2;
				var pk= 1/(Number(k)-1);
				var lam_ef=lam*(1-pk);
				var w=l/lam_ef;
				var wq=w-(1/m);
				var lq= lam_ef*wq;

				document.getElementById('mm1k_1').innerHTML= lam;
				document.getElementById('mm1k_2').innerHTML= m;
				document.getElementById('mm1k_3').innerHTML= k;

				document.getElementById('mm1k_4').innerHTML= lam;
				document.getElementById('mm1k_5').innerHTML= m;
				document.getElementById('mm1k_6').innerHTML= p.toFixed(6);

				document.getElementById('mm1k_21').innerHTML= lam;
				document.getElementById('mm1k_22').innerHTML= pk.toFixed(6);
				document.getElementById('mm1k_23').innerHTML= lam_ef.toFixed(6);
				document.getElementById('mm1k_24').innerHTML= l.toFixed(6);
				document.getElementById('mm1k_25').innerHTML= lam_ef.toFixed(6);
				document.getElementById('mm1k_26').innerHTML= w.toFixed(6);
				document.getElementById('mm1k_27').innerHTML= w.toFixed(6);
				document.getElementById('mm1k_28').innerHTML= m;
				document.getElementById('mm1k_29').innerHTML= wq.toFixed(6);
				document.getElementById('mm1k_30').innerHTML= lam_ef.toFixed(6);
				document.getElementById('mm1k_31').innerHTML= wq.toFixed(6);
				document.getElementById('mm1k_32').innerHTML= lq.toFixed(6);

				document.getElementById('mm1k_41').innerHTML= p.toFixed(6);
				document.getElementById('mm1k_42').innerHTML= l.toFixed(6);
				document.getElementById('mm1k_43').innerHTML= lam_ef.toFixed(6);
				document.getElementById('mm1k_44').innerHTML= w.toFixed(6);
				document.getElementById('mm1k_45').innerHTML= wq.toFixed(6);
				document.getElementById('mm1k_46').innerHTML= lq.toFixed(6);

				document.getElementById('resultado_mm1k').style.display = 'block';
				document.getElementById('mm1k_l2').style.display = 'block';
				document.getElementById('mm1k_proceso').style.display = 'block';
				document.getElementById('mm1k_res').style.display = 'block';
				document.getElementById('mp_mm1k').style.display = 'block';	
			}else{
				var l= Number(k)/2;
				var pk= 1/(Number(k)+1);
				var lam_ef=lam*(1-pk);
				var w=l/lam_ef;
				var wq=w-(1/m);
				var lq= lam_ef*wq;

				document.getElementById('mm1k_1').innerHTML= lam;
				document.getElementById('mm1k_2').innerHTML= m;
				document.getElementById('mm1k_3').innerHTML= k;

				document.getElementById('mm1k_4').innerHTML= lam;
				document.getElementById('mm1k_5').innerHTML= m;
				document.getElementById('mm1k_6').innerHTML= p.toFixed(6);

				document.getElementById('mm1k_21').innerHTML= lam;
				document.getElementById('mm1k_22').innerHTML= pk.toFixed(6);
				document.getElementById('mm1k_23').innerHTML= lam_ef.toFixed(6);
				document.getElementById('mm1k_24').innerHTML= l.toFixed(6);
				document.getElementById('mm1k_25').innerHTML= lam_ef.toFixed(6);
				document.getElementById('mm1k_26').innerHTML= w.toFixed(6);
				document.getElementById('mm1k_27').innerHTML= w.toFixed(6);
				document.getElementById('mm1k_28').innerHTML= m;
				document.getElementById('mm1k_29').innerHTML= wq.toFixed(6);
				document.getElementById('mm1k_30').innerHTML= lam_ef.toFixed(6);
				document.getElementById('mm1k_31').innerHTML= wq.toFixed(6);
				document.getElementById('mm1k_32').innerHTML= lq.toFixed(6);

				document.getElementById('mm1k_41').innerHTML= p.toFixed(6);
				document.getElementById('mm1k_42').innerHTML= l.toFixed(6);
				document.getElementById('mm1k_43').innerHTML= lam_ef.toFixed(6);
				document.getElementById('mm1k_44').innerHTML= w.toFixed(6);
				document.getElementById('mm1k_45').innerHTML= wq.toFixed(6);
				document.getElementById('mm1k_46').innerHTML= lq.toFixed(6);
				document.getElementById('mm1k_49').innerHTML= n;
				document.getElementById('mm1k_50').innerHTML= k;
				document.getElementById('mm1k_51').innerHTML= k;
				document.getElementById('mm1k_52').innerHTML= k;
				document.getElementById('mm1k_47').innerHTML= n;
				document.getElementById('mm1k_48').innerHTML= pk;
				document.getElementById('mm1k_53').innerHTML= pk;
				document.getElementById('mm1k_54').innerHTML= k;
				document.getElementById('mm1k_55').innerHTML= l;

				document.getElementById('resultado_mm1k').style.display = 'block';
				document.getElementById('mm1k_l2').style.display = 'block';
				document.getElementById('mm1k_proceso').style.display = 'block';
				document.getElementById('mm1k_res').style.display = 'block';
				document.getElementById('propi_mm1k_res1').style.display = 'block';
				document.getElementById('mp_mm1k').style.display = 'block';		
			}
		}
	}	
}

function op_mm1k(){
	document.getElementById('procedimiento_mm1k').style.display = 'none';
	document.getElementById('mp_mm1k').style.display = 'block';	
	document.getElementById('op_mm1k').style.display = 'none';	
}
function mp_mm1k(){
	document.getElementById('procedimiento_mm1k').style.display = 'block';
	document.getElementById('mp_mm1k').style.display = 'none';	
	document.getElementById('op_mm1k').style.display = 'block';	
}