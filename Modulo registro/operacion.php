<?php 
 	
 $host_db = "localhost";
 $user_db = "root";
 $pass_db = "1234";
 $db_name = "usuarios";
 $tbl_name = "usuarios";
  
 $conexion = new mysqli($host_db, $user_db, $pass_db, $db_name);
 
 if ($conexion->connect_error) {
 die("La conexion falló: " . $conexion->connect_error);
}


	$usuario=$_POST['user'];
	$pass=$_POST['pass'];
	$tipo=$_POST['tipo'];	




	if($tipo=="2")
     {
         $sql2 ="INSERT INTO administrador (nombre, password ) VALUES ('$usuario', '$pass') ";

			mysqli_query($conexion,$sql2);

			echo "Usuario Creado Correctamente, Administrador";
			header('Refresh: 5; formulario_registro.html');
			exit();
		}

	if ($tipo=="1")
     {
         $sql1 ="INSERT INTO usuarios (nombre, password ) VALUES ('$usuario', '$pass') ";

			mysqli_query($conexion,$sql1);

			echo "Usuario Creado Correctamente, Ejecutivo Ventas";
			header('Refresh: 5; formulario_registro.html');
			exit();
		}



 ?>
