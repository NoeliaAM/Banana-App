<?php
	error_reporting(E_ERROR | E_WARNING | E_PARSE);
	session_start(); 
	    require('includes/conexion.php');

	if(isset($_POST['iniciar']))
	{
		if($_POST['u_nickname']!="" && $_POST['u_pass']!="")
		{
			$nickname_u=$_POST['u_nickname'];
			$pass_u=$_POST['u_pass'];

			$consulta_inicio="SELECT * FROM usuarios WHERE nickname='$nickname_u' AND pass='$pass_u'";
			
			$resultado_inicio=mysqli_query($conexion,$consulta_inicio);
			
			$contar_inicio=mysqli_num_rows($resultado_inicio);

			if($contar_inicio==1)
			{
				$_SESSION['iniciar']=$nickname_u;
				echo '<script> window.location="../BananaApp/simuladores/m_mat.php";</script>';
			}else{
 			echo '<script> alert("Correo o contraseña incorrectas.");</script>';
			}

		}else{
 			echo '<script> alert("Llene todos los campos de inicio de sesion.");</script>';
		}
	}

	if(isset($_POST['registrar']))
	{
		if ($_POST['u_name']!="" && $_POST['u_nickname']!="" && $_POST['u_email']!="" && $_POST['u_pass']!="")
		{
			$name_u=$_POST['u_name'];
			$nickname_u=$_POST['u_nickname'];
			$email_u=$_POST['u_email'];
			$pass_u=$_POST['u_pass'];
			

			$sqlnickname="SELECT * FROM usuarios WHERE nickname='$nickname_u'";
			$sqlemail="SELECT * FROM usuarios WHERE email='$email_u'";

			$resultnickname=mysqli_query($conexion,$sqlnickname);
			$resultemail=mysqli_query($conexion,$sqlemail);

			$contarnickname=mysqli_num_rows($resultnickname);
			$contaremail=mysqli_num_rows($resultemail);

			if($contarnickname==1)
			{
		 		echo '<script> alert("Nickname ya registrado.");</script>';	
			}else if($contaremail==1){
 				echo '<script> alert("Correo ya registrada.");</script>';	
			}else{

			$sql="INSERT INTO usuarios(name,nickname,email,pass) VALUES ('$name_u','$nickname_u','$email_u','$pass_u')";
		
			$result=mysqli_query($conexion,$sql);
			echo '<script> window.location="../BananaApp/simuladores/m_mat.php";</script>';
			}
		}else{
 			echo '<script> alert("Llene todos los campos de registro.");</script>';	
		}
	}
	if(isset($_POST['cerrar'])) 
	{
		session_destroy();
	   	echo '<script> window.location="../BananaApp/index.php";</script>';
	}
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Banana App | Inicio</title>
	<link rel="icon" type="image/x-icon" href="images/icon.png"/>
	<meta name="viewport" content="width=device-width, initial-scale=1.0"/> 
	<link rel="stylesheet" href="css/css/materialize.min.css" media="screen,projection">
	<link rel="stylesheet" href="css/css/materialize.css">
	<script src="css/js/jquery-3.1.1.min.js"></script>
	<script src="css/js/materialize.min.js"></script>
	<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
	<script type="text/javascript">
	  $(document).ready
	  (function(){
	    $(".button-collapse").sideNav();
	  });  

		function mostrar_ini(){
			document.getElementById('iniciar').style.display = 'block';
			document.getElementById('registro').style.display = 'none';
		}
		function mostrar_reg(){
			document.getElementById('iniciar').style.display = 'none';
			document.getElementById('registro').style.display = 'block';
		}

		function d_m_i(){
			document.getElementById('temas').style.display = 'none';
			document.getElementById('iniciar').style.display = 'block';
			document.getElementById('registro').style.display = 'none';
		}	

		function d_m_r(){
			document.getElementById('temas').style.display = 'none';
			document.getElementById('iniciar').style.display = 'none';
			document.getElementById('registro').style.display = 'block';			
		}	
	</script>
</head>
<body class="red lighten-5">

<div class="navbar-fixed">
	<nav>
	    <div class="nav-wrapper red lighten-1">
	    	<div  class="container">
	          	<a href="index.php" class="brand-logo"><b>Banana App</b></a> 
	          	<a href="index.php" data-activates="mobile-demo" class="button-collapse"><i class="material-icons">menu</i></a>  
			</div>
		</div>
</div>
		<ul class="side-nav" id="mobile-demo">
			<li><a href="index.php">Inicio</a></li>
		    <li><a onClick="d_m_i();">Iniciar Sesión</a></li>
		    <li><a onClick="d_m_r();">Registrarse</a></li>
		</ul>
	</nav>

<div class="row">
	<div id="temas" style="display:block;">
		<div class="col s12 m12 l9">
		<div class="container">
			<br>

			<div class="hide-on-large-only">
				<center><img class="responsive-img" height="150px" width="400px" src="images/logo_banana2.png"></center>	
			</div>

		    <div class="card horizontal z-depth-5">
			    <div class="row">
			    	<div class="col s12 m6 l6">
			    		<br>
			    		<center><img class="responsive-img" src="images/modelo_m.jpg"></center>
			    	</div>
			    	<div class="col s12 m6 l6">
			    		<h3 align="left">Modelos Matematicos</h3>
			    	</div>
			    </div>
		    </div>
		  	<ul class="collapsible popout" data-collapsible="accordion">
			    <li>
			      	<div class="collapsible-header active"><i class="material-icons">settings_input_composite</i>Sistemas Electronicos</div>
				    <div class="collapsible-body amber lighten-5">	    				
						<div class="row">
							<p><b>Carga y descarga de circuitos:</b></p>
							<div class="col s12 m6 l6">
								<center><img class="responsive-img" src="images/RC.png"></center>
							</div>
							<div class="col s12 m6 l6">
								<center><img class="responsive-img" src="images/RL.png"></center>
							</div>
						</div>
					</div>
			    </li>
		  	</ul>

		    <div class="card horizontal z-depth-5">
			    <div class="row">
			    	<div class="col s12 m6 l6">
			    		<h3 align="right">Metodos Numericos</h3>
			    	</div>
			    	<div class="col s12 m6 l6">
			    		<br>
			    		<center><img class="responsive-img" src="images/m_num.png"></center>
			    	</div>
			    </div>
		    </div>
			<ul class="collapsible popout" data-collapsible="accordion">
			    <li>
			      	<div class="collapsible-header"><i class="material-icons">timeline</i>Metodos de Integracion</div>
				    <div class="collapsible-body amber lighten-5">	
						<p>
						> Regla del trapecio<br>
						> Regla de Simpson 1/3<br>
						> Regla de Simpson 3/8
						</p>
					</div>  
			    </li>
		  	</ul>

		    <div class="card horizontal z-depth-5">
			    <div class="row">
			    	<div class="col s12 m6 l6">
			    		<br>
			    		<center><img class="responsive-img" src="images/electronica.png"></center>
			    	</div>
			    	<div class="col s12 m6 l6">
			    		<h3 align="left">Electronica</h3>
			    	</div>
			    </div>
		    </div>
			<ul class="collapsible popout" data-collapsible="accordion">
			    <li>
			      	<div class="collapsible-header"><i class="material-icons">device_hub</i>Circuitos</div>
				    <div class="collapsible-body amber lighten-5">	    
						<p>
						Variedad de circuitos, compuestos por:<br>
						> Resistencias<br>
						> Capacitores<br>
						> Diodos<br>
						> Diodos zener<br>
						> Leds<br>
						> Transistores<br>
						> Transformadores<br>
						> C. I.<br>
						> entre otros
						</p>
					</div>
			    </li>
			    <li>
			      	<div class="collapsible-header"><i class="material-icons">device_hub</i>Codigo de colores para resistencias fijas</div>
			      	<div class="collapsible-body amber lighten-5">
						<p>
						> 3 bandas<br>
						> 4 bandas<br>
						> 5 bandas<br>
						> 6 bandas
						</p>
			      	</div>
			    </li>
		  	</ul>

		    <div class="card horizontal z-depth-5">
			    <div class="row">
			    	<div class="col s12 m6 l6">
			    		<h3 align="right">Tipos de muestreo</h3>
			    	</div>
			    	<div class="col s12 m6 l6">
			    		<br>
			    		<center><img class="responsive-img" src="images/tipos_m.PNG"></center>
			    	</div>
			    </div>
		    </div>
			<ul class="collapsible popout" data-collapsible="accordion">
			    <li>
			      	<div class="collapsible-header"><i class="material-icons">grain</i>Muestreo aleatorio</div>
				    <div class="collapsible-body amber lighten-5">	    
				    	<p>
				    	> Sistematico<br>
				    	> Estratificado
				    	</p>
					</div>
			    </li>
		  	</ul>

		  	<div class="card horizontal z-depth-5">
			    <div class="row">
			    	<div class="col s12 m6 l6">
			    		<br>
			    		<center><img class="responsive-img" src="images/t_colas.png"></center>
			    	</div>
			    	<div class="col s12 m6 l6">
			    		<h3 align="left">Teoria de colas</h3>
			    	</div>
			    </div>
		    </div>
			<ul class="collapsible popout" data-collapsible="accordion">
			    <li>
			      	<div class="collapsible-header"><i class="material-icons">dehaze</i>Modelo M/M/1</div>
			    </li>
			    <li>
			      	<div class="collapsible-header"><i class="material-icons">dehaze</i>Modelo M/M/S</div>
			    </li>
			    <li>
			      	<div class="collapsible-header"><i class="material-icons">dehaze</i>Modelo M/M/1/k</div>
			    </li>
		  	</ul>

		</div>
		</div>
	</div>

	<div class="col s12 m12 l3">
		<div class="hide-on-small-only hide-on-med-only">
			<center>
				<img class="responsive-img" height="150px" width="400px" src="images/logo_banana2.png">
			</center>	
		</div>
		<div  id="iniciar" class="card-panel amber accent-2 z-depth-5" style="display:block;">
			<center><h4>Iniciar Sesion</h4></center>
			<form action="index.php" method="POST">
		        <div class="input-field col s12">
		        	<i class="material-icons prefix">person</i>
		            <input name="u_nickname" type="text" class="validate">
		            <label for="nickname">Nickname</label>
		        </div>
		        <div class="input-field col s12">
		            <i class="material-icons prefix">vpn_key</i>
		            <input name="u_pass" type="password" class="validate">
		            <label for="password">Password</label>
		        </div>
				<p class="center">Si no tienes cuenta, <a onClick="mostrar_reg();">registrate aqui</a>.</p>
		        <center>
				<button class="btn waves-effect waves-light amber darken-3" type="submit" name="iniciar">Log In<i class="material-icons right">send</i></button><br/>
		    	</center>
		    </form>
		</div>
		<div id="registro" class="card-panel amber accent-1 z-depth-5" style="display:none;">
			<center><h4>Registrarse</h4></center>
			<form action="index.php" method="POST">
		        <div class="input-field col s12">
		        	<i class="material-icons prefix">account_circle</i>
		            <input name="u_name"  type="text" class="validate"> 
		            <label for="nombre">Nombre completo</label>
		        </div>
		        <div class="input-field col s12">
		        	<i class="material-icons prefix">person</i>
		            <input name="u_nickname" type="text" class="validate">
		            <label for="nickname">Nickname</label>
		        </div>
		        <div class="input-field col s12">
		            <i class="material-icons prefix">email</i>
		            <input name="u_email" type="email" class="validate">
		            <label for="email" data-error="wrong" data-success="right">Email</label>
		        </div>
		        <div class="input-field col s12">
		            <i class="material-icons prefix">vpn_key</i>
		            <input name="u_pass" type="password" class="validate">
		            <label for="password">Password</label>
		        </div>
				<p class="center">Si ya tienes cuenta, <a onClick="mostrar_ini();">inicia sesion aqui</a>.</p>
		        <center>
				<button class="btn waves-effect waves-light amber darken-3" type="submit" name="registrar">Sign In<i class="material-icons right">send</i></button>
				</center>
		    </form>
		</div>
	</div>
</div>
	
  <footer class="page-footer red lighten-1">
      <div class="container">
      <div class="row">
        <div class="col s12 m12 l6" align="right">
          <h5>Banana App</h5>
            <ul>
              <li><a class="grey-text text-lighten-4" href="http://portal.ucol.mx/" target="_blank">Universidad de Colima</a></li>
              <li><a class="grey-text text-lighten-4" href="http://portal.ucol.mx/fie/" target="_blank">Facultad de Ingenieria Electromecanica</a></li>
              <li><a class="grey-text text-lighten-4" href="http://portal.ucol.mx/fie/c-15.htm" target="_blank">Ingenieria en Sistemas Computacionales</a></li>
            </ul>
        </div>
        <div class="col s12 m12 l6">
          <h5>Conectate con nosotros</h5>
            <ul>
              <li><a class="grey-text text-lighten-4" href="#!">Instagram</a></li>
              <li><a class="grey-text text-lighten-4" href="#!">Facebook</a></li>
              <li><a class="grey-text text-lighten-4" href="#!">Twitter</a></li>
            </ul>
        </div>
      </div>
      </div>
      <div class="footer-copyright">
      <div class="container" align="center">
      © 2017 UdC. FIE.
      </div>
      </div>
  </footer>
</body>
</html>