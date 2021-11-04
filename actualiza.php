
<?php
session_start();
include ("db.php");
$sql = "select * from productos";
$ejecutar = $conexion->query($sql);




?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/styles_actualiza.css">
    <link href="bstra/css/sb-admin-2.min.css" rel="stylesheet">
    <title>Document</title>
    <?php

$conexion = mysqli_connect("localhost", "root", "", "ferreteria") or
    die("Problemas con la conexión");
//$var=$_REQUEST["id_producto"];
    $registros = mysqli_query($conexion, "select * from productos
    where id_productos='$_REQUEST[id_producto]'") or
die("Problemas en el select:" . mysqli_error($conexion));

if ($reg = mysqli_fetch_array($registros)) {
    ?>

<body>

<main class="todo">

        <div class="contenedor__consultar">
             
        <form action="actualiza2.php" method="post"> 
               
                       <H2>CONSULTAR PRODUCTO</H2>
                   
                         Identificacion producto: 
                        <input type="text" name="id_producto" class="form-control form-control-user" id="id_producto" placeholder=""  class="form-control form-control-user"> 
                         <br>
                        <input TYPE="submit"  VALUE="ACTUALIZAR DATOS" class="btn btn-warning btn-user btn-block" class="form-control form-control-user">
                      
              
                   
                 <br>
                  <br>
        </div>
                  
            <div class="contenedor__actualizarproducto">




            
                <form  

                    <H2>ACTUALIZAR PRUDUCTO</H2>
                    <br>
                    <br>
                    <form action="servicios/actualiza3.php" method="post">
                    Ingrese nuevo codigo:
                    <input type="text" name="codigonuevo" value="<?php echo $reg['codigo'] ?>" class="form-control form-control-user">
                    <br>
                    nombre
                    <br>
                    <input type="text" name="nombrenuevo" value="<?php echo $reg['nombre_producto'] ?>" class="form-control form-control-user">
                    <br>
                    precio
                        <br>
                        <input type="text" name="precionuevo" value="<?php echo $reg['precio'] ?>" class="form-control form-control-user">
                        <br>
                    referencia
                        <br>
                        <input type="text" name="referencianuevo" value="<?php echo $reg['referencia'] ?>" class="form-control form-control-user">
                        <br><br>
                    imagen
                        <br>
                        <input type="text" name="imagennuevo" value="<?php echo $reg['Imagen'] ?>" class="form-control form-control-user">
                        <br>
                        <input type="hidden" name="id_productoviejo" value="<?php echo $reg['id_productos'] ?>" class="form-control form-control-user">
                        <br>
                        
         
         
         
                        <input type="submit" value="Modificar" class="form-control form-control-user">
    </form>
                         </div>

                                            
    <?php

  } else
    echo "No existe EL PRODUCTO con dicho ID";
  ?>
                </form>

    </main>
    <script src="js/script.js"></script>
</body>

</html>