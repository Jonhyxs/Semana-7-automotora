<?php
 //conectamos Con el servidor
 $host ="localhost";
 $user ="root";
 $pass ="1234";
 $db="ventas";

 //funcion llamada conexion con (dominio,usuarios,contraseña,base_de_datos)
 $con = mysqli_connect($host,$user,$pass,$db)or die("Problemas al Conectar");
 mysqli_select_db($con,$db)or die("problemas al conectar con la base de datos");


 //recuperar las variables
 $nombre=$_POST['nombre'];
 $producto=$_POST['producto'];
 $precio=$_POST['precio'];
 $bodega=$_POST['bodega'];
 $correo=$_POST['correo'];
 //hacemos la sentencia de sql
 $sql="INSERT INTO datos(nombre, producto, precio, bodega, correo) VALUES('$nombre','$producto','$precio','$bodega','$correo')";
 //ejecutamos la sentencia de sql
 $ejecutar=mysqli_query($con,$sql);
 //verificamos la ejecucion
 if(!$ejecutar){
  echo"Hubo Algun Error";
 }else{
  echo"Datos Guardados Correctamente<br><a href='index.html'>Volver</a>";
 }
?>