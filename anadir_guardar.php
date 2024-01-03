<HTML>
  <HEAD>
   <TITLE>Web del concesionario</TITLE>
  </HEAD>
  <BODY>

<?php
include ('conexion.php');

   // Obtengo las variables
	$Modelo =$_REQUEST["Modelo"];
	$Motor = $_REQUEST["Motor"];
	$Color = $_REQUEST["Color"];
	$Combustible = $_REQUEST["Combustible"];
	$Precio = $_REQUEST["Precio"];
	$Marca = $_REQUEST["Marca"];



    $consulta = "INSERT INTO vehiculos (Modelo, Motor, Color, Combustible, Precio, Marca) VALUES ('$Modelo', '$Motor', '$Color', '$Combustible', '$Precio', '$Marca');";
    $res=mysqli_query($conexion, $consulta) or die("consulta incorrecta");

    header("Location:index.php");
		
?>

