<?php
$conexion = mysqli_connect("localhost","root","","ferreteria") or die("Error en la conexiÃ³n a la base de datos");
$sql = "select * from productos";
$ejecutar = $conexion->query($sql);

?>




<body background=pink>
<table border=1  width=100% >
<tr> <b><h1 align="center"></h1> </b></tr>
    <tr bgcolor= #ffdf6b> 
         <td>producto </td>
        <td>Nombre producto </td>
    
        <td> Precio </td>
        <td> Referencia </td>
   
        <td width="10%"> Imagen </td>
        <td> cantidad </td>
    </tr>
    
<?php
   while ($fila = mysqli_fetch_object($ejecutar))
   

    {
        echo '<tr >';
        echo '<td bgcolor= #00adb5>'.$fila->id_productos.'</td>';
       
        echo '<td bgcolor= #00adb5>'.$fila->nombre_producto.'</td>';
     
        echo '<td bgcolor= #aad8d3>'.$fila->precio.'</td>';
        echo '<td bgcolor= #eeeeee>'.$fila->referencia.'</td>';
    echo '<td bgcolor=#fcecdd><img src="imagen/' .$fila->Imagen.'" width="300" height="150"></td>';
    echo '<td> <form action="agregar_carrito.php" method="POST"> <input type="hidden" name="id_productos" value="'.$fila->id_productos.'">  <input type="text" name="cantidad" size="4" required>  <input type="submit" value="Agregar"> </form></td>';
        echo '</tr>';
       
    }
?></body>
</table>