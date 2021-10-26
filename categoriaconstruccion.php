<?php
$conexion = mysqli_connect("localhost","root","","ferreteria") or die("Error en la conexiÃ³n a la base de datos");
$sql = "select * from productos";
$ejecutar = $conexion->query($sql);

?>




<body background=pink>
<link rel="stylesheet" type="text/css" href="css/styles_tablaproductos.css">
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
                    echo '<td>'.$fila->id_productos.'</td>';
                
                    
                    echo '<td>'.$fila->nombre_producto.'</td>';
                
                    echo '<td >'.$fila->precio.'</td>';
                    echo '<td>'.$fila->referencia.'</td>';
                echo '<td ><img src="imagen/' .$fila->imagen.'" width="300" height="150"></td>';
                echo '<td> <form action="agregar_carrito.php" method="POST"> <input type="hidden" name="id_productos" value="'.$fila->id_productos.'">  <input type="number" name="cantidad" size="4" min="1" max="50" required>  <input type="submit" value="Agregar" class="btn btn-primary btn-block btn-large"> </form></td>';
                    echo '</tr>';
                
                }
            ?>
  
    </main>   
    </body>
        </table>