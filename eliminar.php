<HTML>
  <HEAD>
   <TITLE>Web del concesionario</TITLE>
  </HEAD>
  <BODY>

<?php
   // me conecto a la BD
   include ('conexion.php');

   //obtengo el modelo
   $Modelo = $_REQUEST["id"];

   // Creo y construyo la consulta
   $consulta = "DELETE FROM vehiculos WHERE Modelo='".$Modelo."';";
   $res=mysqli_query($conexion, $consulta) or die("consulta incorrecta");

   header("Location:index.php");		
?>

