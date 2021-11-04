<?php
$conexion = mysqli_connect("localhost","root","","ferreteria") or die("Error en la conexiÃ³n a la base de datos");
$sql = "select * from productos";
$ejecutar = $conexion->query($sql);

?>




<body background=pink>

<link rel="stylesheet" type="text/css" href="css/styles_categoriaconstruccion.css">
    <main class="separarproductos">
          <div class="contenedor__productostabla">    
          <table>
     
            
        
      <tr>
                <td>producto </td>
              
                <td>Nombre producto </td>
                
                <td> Precio </td>
             
                <td> Referencia </td>
             
        
                <td> Imagen </td>
                
                <td> cantidad </td>

          
               
                
            
            </tr>

            <h1 align="center"><b> BIENVENIDOS A SU TIENDA UNIFER</b> </h1>
   
        <?php
            while ($fila = mysqli_fetch_object($ejecutar))
   

            {
                echo '<tr >'; 
                echo '<td>'.$fila->nombre_producto.'</td>';
                echo '<td>'.$fila->precio.'</td>';
                echo '<td>'.$fila->referencia.'</td>';
                echo '<td ><img src="imagen/' .$fila->imagen.'" width="300" height="150"></td>';
            echo '<td> <form action="actualiza.php" method="POST"> 
           <input type="hidden" name="id_productos" value="'.$fila->id_productos.'">
             <input type="submit" value="Actualizar" class="btn btn-primary btn-block btn-large">
             </form>
             </td>';
            echo '<td> 
            <form action="formularioeliminar.php" method="POST"> 
            <input type="hidden" name="id_productos" value="'.$fila->id_productos.'">
             </form><br>
             <form action="formularioeliminar.php" method="POST"> 
             <input type="submit" value="Eliminar"  class="btn btn-primary btn-block btn-large">   
             </form><br>
             <form action="formularioconsultar.php" method="POST"> 
             <input type="submit" value="consultar" class="btn btn-primary btn-block btn-large">   
             </form><br>
             <form action="crearproducto.php" method="POST"> 
             <input type="submit" value="insertar" class="btn btn-primary btn-block btn-large">   
             </form><br>
             </td>';
                echo '</tr>';
               
            }
        ?></body>
        </table>