<?php 

 	include 'conexion.php';
 	
 	$usuario=$_POST['user'];
 	$pass= $_POST['pass'];

 	$sqlventa="SELECT * FROM usuarios WHERE nombre='$usuario' AND password='$pass'";
 	$sqladm="SELECT * FROM administrador WHERE nombre='$usuario' AND password='$pass'";

 	$log1=mysqli_query($conexion,$sqlventa);
 	$log2=mysqli_query($conexion,$sqladm);

 	if (mysqli_num_rows($log1)>0)  {

 			session_start();
 			$_SESSION['Ejecutivo Ventas']="$usuario";
 			
 			
 			echo 'sesion iniciada, bienvenido <br>'; 

 			echo 'Ejecutivo Ventas';
 			
 			header('Refresh: 5; formulario.html');
 			exit();

 		}

 	else if (mysqli_num_rows($log2)>0) {

 			
 			
 			
 			echo 'sesion iniciada,bienvenido <br>';

 			echo 'Administrador';
 			
 			header('Refresh: 5; registro/formulario_registro.html');
 			exit();

 		}





else{

 		echo 'Error en Validacion de datos, redireccionando';
 		header('Refresh: 2; login.html');
 	}

 	


  ?>
