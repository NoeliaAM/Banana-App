<?php
	error_reporting(0);
	include("../includes/conexion_foro.php");
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Banana App | </title>
    <?php include('../includes/head.php'); ?>
</head>
<body>
    <?php include('../includes/nav.php'); ?>
		<div class="container">
			<?php
				if(isset($_GET["id"]))
				$id = $_GET['id'];
				$query = "SELECT * FROM  foro WHERE ID = '$id' ORDER BY fecha DESC";
				$result = $mysqli->query($query);
				while($row = mysqli_fetch_array($result, MYSQLI_ASSOC)){
					$id = $row['ID'];
					$titulo = $row['titulo'];
					$autor = $row['autor'];
					$mensaje = $row['mensaje'];
					$fecha = $row['fecha'];
					$respuestas = $row['respuestas'];
					echo "<br><a href='faq.php' class='btn amber darken-3'><i class='material-icons left'>undo</i>Volver a publicaciones</a>";
					echo "<div class='card-panel amber lighten-1'>";
					echo "<h3 align='center'>$titulo</h3>";
					echo "<span>$mensaje</span><br>";
					echo "<p align='right'>Publicado por: $autor</p>";
					echo "</div>";
					echo "<center><a href='form.php?id&respuestas=$respuestas&identificador=$id' class='btn amber darken-3'>Responder a esta publicacion</a></center><br>";
				}

				$query2 = "SELECT * FROM  foro WHERE identificador = '$id' ORDER BY fecha DESC";
				$result2 = $mysqli->query($query2);
				
				echo "<div class='divider'></div>";
				echo "<h4>Respuestas:</h4>";
				echo "<div class='divider'></div>";
				while($row = mysqli_fetch_array($result2, MYSQLI_ASSOC)){
					$id = $row['ID'];
					$titulo = $row['titulo'];
					$autor = $row['autor'];
					$mensaje = $row['mensaje'];
					$fecha = $row['fecha'];
					$respuestas = $row['respuestas'];
				
					echo "<blockquote><h4>$titulo</h4></blockquote>";
					echo "<span>$mensaje</span><br>";
					echo "<p align='right'>Publicado por: $autor</p>";
					echo "<div class='divider'></div>";
				}
			?>
		</div>
<div class="tap-target amber accent-1" data-activates="help">
    <div class="tap-target-content">
      <h5 align="right"><span>Foro</span></h5>
      <p align="right"><span>Aqui podras reponder al tema que seleccionaste anteriormente, y crear una conversacion con nuestra comunidad.</span></p>
    </div>
</div>

<?php include('../includes/footer.php'); ?>
</body>
</html>