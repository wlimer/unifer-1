
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" type="text/css" href="css/styles_pagina_pricipal.css">
</head>
<body>
    
</body>
</html>


<?php
session_start();
$conexion = mysqli_connect("localhost","root","","ferreteria") or die("Error en la conexiÃ³n a la base de datos");
$sql = "select * from productos";
$ejecutar = $conexion->query($sql);

?>



<div class="contenedor__tabla_principal">
<body background=pink>
<table border=1  width=100% >
<tr> <b><h1 align="center"></h1> </b></tr>
    <tr bgcolor= #ffdf6b> 
        <td> Id producto </td>
        <td>Nombre producto </td>
        <td> Precio </td>
        <td> Referencia </td>
   
        <td width="10%"> Imagen </td>
        <td> actualizar </td>
        <td> comandos </td>
    </tr>
</div>
    
<?php
   while ($fila = mysqli_fetch_object($ejecutar))
   

    {  
      
       
        echo '<tr >'; 
        echo '<td>'.$fila->id_productos.'</td>';
        echo '<td>'.$fila->nombre_producto.'</td>';
        echo '<td>'.$fila->precio.'</td>';
        echo '<td>'.$fila->referencia.'</td>';
    echo '<td><img src="imagen/' .$fila->Imagen.'" width="300" height="150"></td>';
    echo '<td> <form action="actualiza.php" method="POST"> 
   <input type="hidden" name="id_productos" value="'.$fila->id_productos.'">
     <input type="submit" value="Actualizar "  class="form-control form-control-user" >
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

