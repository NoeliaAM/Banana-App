<?php
	error_reporting(0);
	include("../includes/conexion_foro.php");

	if(isset($_GET["respuestas"]))
		$respuestas = $_GET['respuestas'];
	else
		$respuestas = 0;

	if(isset($_GET["identificador"]))
		$identificador = $_GET['identificador'];
	else
		$identificador = 0;
	
	if(isset($_POST['publicar']))
	{
		if($_POST['titulo']!="" && $_POST['autor']!="" && $_POST['mensaje']!="")
		{
			$autor=$_POST['autor'];
			$titulo=$_POST['titulo'];
			$mensaje=$_POST['mensaje'];
			$respuestas=$_POST['respuestas'];
			$identificador=$_POST['identificador'];
			$fecha=strftime( "%Y-%m-%d", time() );
			
			$mensaje = htmlentities($mensaje);
			echo "identificador:";
			echo $identificador;
			
			$query = "INSERT INTO foro(autor,titulo,mensaje,identificador,fecha) VALUES ('$autor','$titulo','$mensaje','$identificador','$fecha')";
			
			echo $query;
			echo "identificador:";
			echo $identificador;
			$result = $mysqli->query($query);
			
			if ($identificador != 0)
			{
				$query2 = "UPDATE foro SET respuestas=respuestas+1 WHERE ID='$identificador'";
				$result2 = $mysqli->query($query2);
				echo $query2;
				echo '<script> window.location="faq.php"</script>';
			}else{
			echo '<script> window.location="faq.php"</script>';
			}
		}else{
 			echo '<script> alert("Para poder publicar llene todos los campos.");</script>';
		}
	}
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Banana App | Publicar en foro</title>
    <?php include('../includes/head.php'); ?>
</head>
<body>
    <?php include('../includes/nav.php'); ?>
	<div class="card-panel amber lighten-4">
      <center>
      	<i class="medium material-icons">chat</i>
      	<h4>Danos tu opinion</h4>
      </center>
	</div>
	<div class="container">
		<a href='faq.php' class='btn amber darken-3'><i class='material-icons left'>undo</i>Volver a publicaciones</a>
		    <form name="form" action="form.php" method="post">
		    <input type="hidden" name="identificador" value="<?php echo $identificador;?>">
			<input type="hidden" name="respuestas" value="<?php echo $respuestas;?>">
				<div class="row">
					<div class="input-field col s12">
			          <input id="titulo" name="titulo" type="text" class="validate">
			          <label for="titulo">Tema</label>
			        </div>
			        <div class="input-field col s12">
			          <i class="material-icons prefix">mode_edit</i>
			          <textarea id="mensaje" name="mensaje" class="materialize-textarea"></textarea>
			          <label for="mensaje">Mensaje</label>
			        </div>			        
					<div class="input-field col s12">
					  <i class="material-icons prefix">person</i>
			          <input id="autor" name="autor" type="text" class="validate">
			          <label for="autor">Publicado por</label>
			        </div>
				</div>
				<center>
					<button class="btn waves-effect waves-light amber darken-3" type="submit" name="publicar">Publicar<i class="material-icons right">send</i></button>
				</center>
		    </form>
	</div>
			<br>
<div class="tap-target amber accent-1" data-activates="help">
    <div class="tap-target-content">
      <p align="right">Aqui podras dar tu opinion, entablar una conversacion con los usuarios de nuestra comunidad.</p>
    </div>
</div>

    <?php include('../includes/footer.php'); ?>
</body>
</html>