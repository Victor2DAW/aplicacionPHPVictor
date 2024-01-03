<HTML>
  <HEAD>
   <TITLE>Web del concesionario</TITLE>
  </HEAD>
  <BODY>

<?php

error_reporting(0);
include ('conexion.php');

   $consulta = "SELECT * FROM vehiculos;";
    $res=mysqli_query($conexion,$consulta) or die("consulta incorrecta");
        
    $n_filas = mysqli_num_rows ($res);
    
    echo "<center><h1> Listado de veh&iacute;culos </h1></center>";

    echo "<table align=center>\n";
    echo "<tr bgcolor=#ffffaa>\n
        <th>Modelo</th>\n
        <th>Motor</th>\n
        <th>Color</th>\n
        <th>Combustible</th>\n
        <th>Precio</th>\n
        <th>Marca</th>\n
    </tr>\n";

    for($i=1; $i<=$n_filas; $i++)
    {
        $fila = mysqli_fetch_array($res);
        echo "<tr>\n";
        echo "  <td>".$fila['Modelo']."</td>\n";
        echo "  <td>".$fila['Motor']."</td>\n";
        echo "  <td>".$fila['Color']."</td>\n";
        echo "  <td>".$fila['Combustible']."</td>\n";
        echo "  <td>".$fila['Precio']."</td>\n";
        echo "  <td>".$fila['Marca']."</td>\n";
        echo "  <td><a href=modificar.php?id=".$fila['Modelo']."><img src=ico_modificar.png border=0></a>";
        echo "  <td><a href=eliminar.php?id=".$fila['Modelo']."><img src=ico_eliminar.png border=0></a>";
    echo "</tr>\n";
    }
    echo "<tr><td colspan=5> <hr>";
    echo "<a href=anadir.php>A&ntilde;adir veh&iacute;culo </a>";
    echo "</td></tr></table>";
?>

