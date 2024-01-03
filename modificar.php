<HTML>
  <HEAD>
   <TITLE>Web del concesionario</TITLE>
  </HEAD>
  <BODY>
   <center><h1> Modificar veh&iacute;culo </h1></center>


<?php
	error_reporting(0);
   // me conecto a la BD
   include ('conexion.php');

   // Obtengo las variables
   $id = $_REQUEST["id"];

    $consulta = "SELECT * FROM vehiculos WHERE Modelo='".$id."';";
    $res=mysqli_query($conexion,$consulta) or die("consulta incorrecta");
    $fila = mysqli_fetch_array($res);
?>

  <form method="get" action="modificar_guardar.php">
	<table border="1" align="center" cellpadding="3" cellspacing="0">
	  
	  <tr>
		<td><div align="right">Modelo</div></td>
		<td><input name="Modelo" type="text" readonly  value="<?php echo $fila['Modelo'];?>"> </td>
	  </tr>
	  <tr>
		<td><div align="right">Motor</div></td>
		<td><input name="Motor" type="text" value="<?php echo $fila['Motor'];?>"> </td>

	  </tr>
	  <tr>
		<td><div align="right">Color</div></td>
		<td><input name="Color" type="text" value="<?php echo $fila['Color'];?>"> </td>
	  </tr>
	  <tr>
		<td><div align="right">Combustible</div></td>
		<td><input name="Combustible" type="text" value="<?php echo $fila['Combustible'];?>"> </td>
		</td>
	  </tr>
	  <tr>
		<td><div align="right">Precio</div></td>
		<td><input name="Precio" type="text" value="<?php echo $fila['Precio'];?>"> </td>
	  </tr>
	  <tr>
		<td><div align="right">Marca</div></td>
		<td><input name="Marca" type="text" value="<?php echo $fila['Marca'];?>"> </td>
	  </tr>
	  <tr>
		<td colspan=2>
               <div align="center">
		    <input type="submit" name="Submit" value="Enviar" />
		  </div>
             </td>
	  </tr>
	</table>
  </form>
</BODY>

