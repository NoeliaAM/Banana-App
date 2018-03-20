<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Banana App | FAQ</title>
    <?php include('../includes/head.php'); ?>

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
		<i class="small material-icons">forum</i><br>
	<h4>Queremos conocer tu opinion</h4>
</center>	
</div>
  <div class="row">
    <div class="col s12">
      <ul class="tabs">
        <li class="tab col s6"><a href="#test1" onClick="uno();">FAQ</a></li>
        <li class="tab col s6"><a href="#test2" onClick="dos();">Foro</a></li>
      </ul>
    </div>
    <div id="test1" class="col s12">
		<br><h5 align="center">FAQ, esta son algunas de las preguntas que los usuarios mas realizan, si tu duda no se resuelve con estas preguntas, visita el foro para mas ayuda.</h5><br>
		<div class="container">			  
  		<ul class="collapsible popout" data-collapsible="accordion">
		    <li>
		      <div class="collapsible-header active"><i class="material-icons">help</i>Ingresar funciones trigonometricas</div>
		      <div class="collapsible-body">
		      	<span>
		      		<p>
		      			<b>¿Como ingreso funciones trigonometricas para formulas como las del trapecio, y simpson?</b><br>
		      			La ingresas manera de comando, Math.sin(), Math.cos(), Math.tan(), Math.asin(), Math.acos(), Math.atan(), Math.atan2(),
		      		</p>
		      	</span>
		      </div>
		    </li>
		    <li>
		      <div class="collapsible-header"><i class="material-icons">help</i>Ingresar formulas</div>
		      <div class="collapsible-body">
		      	<span>
		      		<p>
		      			<b>¿Como ingreso formulas para simuladores como el del trapecio, y simpson?</b><br>
		      			Las ingresas de manera lineal.<br>
		      			Ej. 2*(x*x)+(3/2).
		      		</p>
		      	</span>
		      </div>
		    </li>
		    <li>
		      <div class="collapsible-header"><i class="material-icons">help</i>Ingresar valores de resistencias</div>
		      <div class="collapsible-body">
		      	<span>
		      		<p>
		      			<b>¿Como ingreso valores de resistencias como, 1k, 4k, etc?</b><br>
		      			El simulador no acepta letras en campos de valores numericos, asi que ingresalo como es normalmente, 1000, o 4000, como lo harias en una calculadora.
		      		</p>
		      	</span>
		      </div>
		    </li>
		    <li>
		      <div class="collapsible-header"><i class="material-icons">help</i>Interacturar</div>
		      <div class="collapsible-body">
				<span>
		      		<p>
		      			<b>¿Puedo interactuar y modificar con los circuitos de los modelos matematicos?</b><br>
		      			No, por el momento solo resuelvo circuitos basicos de carga y descarga, pero estamos trabajando en ello ¡esperalo!
		      		</p>
		      	</span>
		      </div>
		    </li>
		    <li>
		      <div class="collapsible-header"><i class="material-icons">help</i>Unidades</div>
		      <div class="collapsible-body">
				<span>
		      		<p>
		      			<b>¿Que hago si la cantidad que quiero ingresar no se encuentra entre las unidades de medida que me presentan?</b><br>
		      			Selecciona la opcion de F, e ingresa manualmente el valor que deseas.<br>
		      			Ej. 0.01, 0.001, etc.
		      		</p>
		      	</span>
		      </div>
		    </li>
		    <li>
		      <div class="collapsible-header"><i class="material-icons">help</i>Datos</div>
		      <div class="collapsible-body">
				<span>
		      		<p>
		      			<b>¿Por que se me pide que ingrese mi correo electronico o nombre en el registro si no me los solicita para iniciar sesion?</b><br>
		      			La pagina esta en constante cambio, en un futuro seran de utilidad, de igual menra asi llevamos un mayor control de nuestros usuarios.
		      		</p>
		      	</span>
		      </div>
		    </li>
		    <li>
		      <div class="collapsible-header"><i class="material-icons">help</i>Ingresar potencias</div>
		      <div class="collapsible-body">
				<span>
		      		<p>
		      			<b>¿Como ingreso potencias para las formulas de relga del trapecio, y simpson?</b><br>
		      			A manera de comando, de la sigiente manera, Math.pow(x,n) n representa a que potencia quieres elevar la equis, o linealmente (x*x*x*x*x).
		      		</p>
		      	</span>
		      </div>
		    </li>
		</ul>
		</div>
    </div>
    
    <div id="test2" class="col s12">
    	<br><h5 align="center">Expresa tus opiniones y dudas aqui para asi mantenernos actualizados, y satisfacer tus necesidades.</h5><br>
	      <table class="centered striped responsive-table">
	        <thead>
	          <tr>
	          	  <th></th>
	              <th>Tema</th>
	              <th>Fecha de publicacion</th>
	              <th></th>
	          </tr>
	        </thead>
	        <tbody>
				<?php
					error_reporting(0);
					include("../includes/conexion_foro.php");
					$query = "SELECT * FROM  foro WHERE identificador = 0 ORDER BY fecha DESC";
					$result = $mysqli->query($query);
					while($row = mysqli_fetch_array($result, MYSQLI_ASSOC)){
						$id = $row['ID'];
						$titulo = $row['titulo'];
						$fecha = $row['fecha'];
						$respuestas = $row['respuestas'];
						echo "<tr>";
							echo "<td><a href='foro.php?id=$id'>Abrir</a></td>";
							echo "<td>$titulo</td>";
							echo "<td>$fecha</td>";
							echo "<td><center><span class='new badge' data-badge-caption='respuestas'>$respuestas</span></center></td>";
						echo "</tr>";
					}
				?>
	        </tbody>
	      </table><br>
	      <center><a href="form.php" class="btn amber darken-3">Agregar nueva publicacion</a></center>
    </div>
  </div>


<div class="tap-target amber accent-1" data-activates="help">
    <div class="tap-target-content">
      <h5 align="right"><span id="uno" style="display: block;">FAQ</span><span id="dos" style="display: none;">Foro</span></h5>
      <p align="right"><span id="uno_d" style="display: block;">Aqui puede encontrar preguntas que respondan a sus dudas acerca del funcionamiento de Banana App</span><span id="dos_d" style="display: none;">Aqui podra montar una conversacion con otros usuarios que forman parte de nuestra comunidad.</span></p>
    </div>
</div>

    <?php include('../includes/footer.php'); ?>
</body>
</html>