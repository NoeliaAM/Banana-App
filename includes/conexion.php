 <?php
	$banana_host="localhost";
	$banana_user="root";
	$banana_pass="";
	$banana_db="bananaapp";

	$conexion=mysqli_connect($banana_host,$banana_user,$banana_pass);
		
		if(mysqli_connect_errno())
		{
			echo '<script> alert("ERROR: No se logro conectar con el host.");</script>';
		}

		mysqli_set_charset($conexion,"UTF8");

		mysqli_select_db($conexion,$banana_db) or die ("Error al conectar con la base de datos.");  
?>