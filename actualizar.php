<?php
session_start();
$conexion = mysqli_connect("localhost","root","","ferreteria") or die("Error en la conexiÃ³n a la base de datos");
$sql = "select * from productos";
$ejecutar = $conexion->query($sql);

?>




<body background=pink>
<table border=1  width=100% >
<tr> <b><h1 align="center"></h1> </b></tr>
    <tr bgcolor= #ffdf6b> 
        
        <td>Nombre producto </td>
        <td> Precio </td>
        <td> Referencia </td>
   
        <td width="10%"> Imagen </td>
        <td> actualizar </td>
        <td> comandos </td>
    </tr>
    
<?php
   while ($fila = mysqli_fetch_object($ejecutar))
   

    {
        echo '<tr >'; 
        echo '<td bgcolor= #00adb5>'.$fila->nombre_producto.'</td>';
        echo '<td bgcolor= #aad8d3>'.$fila->precio.'</td>';
        echo '<td bgcolor= #eeeeee>'.$fila->referencia.'</td>';
    echo '<td bgcolor=#fcecdd><img src="imagen/' .$fila->Imagen.'" width="300" height="150"></td>';
    echo '<td> <form action="actualiza.php" method="POST"> 
   <input type="hidden" name="id_productos" value="'.$fila->id_productos.'">
     <input type="submit" value="Actualizar" class="form-control form-control-user">
     </form>
     </td>';
    echo '<td> 
    <form action="formularioeliminar.php" method="POST"> 
    <input type="hidden" name="id_productos" value="'.$fila->id_productos.'">
     </form><br>
     <form action="formularioeliminar.php" method="POST"> 
     <input type="submit" value="Eliminar" class="form-control form-control-user" >   
     </form><br>
     <form action="formularioconsultar.php" method="POST"> 
     <input type="submit" value="consultar" class="form-control form-control-user">   
     </form><br>
     <form action="crearproducto.php" method="POST"> 
     <input type="submit" value="insertar" class="form-control form-control-user">   
     </form><br>
     </td>';
        echo '</tr>';
       
    }
?></body>
</table>

