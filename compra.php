


<?php
session_start();
include ("db.php");
$codigo=$_SESSION['id_productos'];
if(isset ($_POST["GENERARPEDIDO"]))

{
    echo 'entro por comprar';
    $id_pedido=rand (1,100000);
    echo $_SESSION['cantidad'];
    echo 'metodo:'.$_POST["mediopago"];

$cantidad=$_SESSION['cantidad'];
$direccion=$_POST['direccion'];
$departamento=$_POST['departamento'];
$ciudad=$_POST['ciudad'];
$mediopago=$_POST['mediopago'];
$login_pedido=$_SESSION['usuario'];


$sql = "INSERT INTO pedido (id_pedido,cantidad,direccion,departamento,ciudad,mediopago,id_cliente_pedido,login_pedido,id_productos_pedido,id_categoria_pedido)  VALUES (
  
    '$id_pedido','$cantidad','$direccion','$departamento','$ciudad','$mediopago','2','$login_pedido','77','1');";
    $ejecutar = $conexion->query($sql);
}

$codigo=$_SESSION['id_productos'];
$sql = "select * from productos where id_productos=$codigo";
    $ejecutar = $conexion->query($sql);
    $fila = mysqli_fetch_object($ejecutar);
    $nombre_producto=$fila->nombre_producto;
    $precio=$fila->precio;
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>compra</title>
    <link rel="stylesheet" type="text/css" href="css/styles_compra.css">
</head>
<body>
    
    <div class="registro">  
        <form action="compra.php" method="POST">

            <label class="comprar">  PRODUCTO :  <?php echo $_SESSION['id_productos']; ?></label>
            
            <br>
            <br>
            <label>  CANTIDAD: <?php echo $_SESSION['cantidad']; ?> </label>
            
            <br>
            <br>
            <label class="comprar" >  PRECIO :</label>
            
            <br>
            <br>

            <label  class="comprar" >  INFORMACION PARA EL ENVIO: </label>
            <br>
            <br>
            <br>
            DIRECCION: <input class="direccion" type="text" name="direccion" >
            <br>
            <br>
            <br>


            DEPARTAMENTO: <select class="departamento" name="departamento" class="browser-default custom-select mb-4 " id=select1 required class="comprar">

            <option  value="" disabled="" selected=""> CIUDAD </option>
            <option value="Antioquia" selected=""> Antioquia</option>
            <option value="cundinamarca" selected=""> cundinamarca</option>
            <option value="valle del cauca" selected=""> valle del cauca</option>

            </select> 
            <br>
            <br>
            <br>

            CIUDAD: <select  name="ciudad" class="browser-default custom-select mb-4 " id=select1 required>

            <option value="" disabled="" selected="">elija una ciudad </option>
            <option value="medellin" selected=""> Medellin</option>
            <option value="bogota" selected=""> bogota</option>
            <option value="cali" selected=""> cali</option>

            </select> 
            <br>
            <br>
            

            METODO PAGO: 
            <br>
            <br>
            
            TRANSFERENCIA: <input type="radio" name="mediopago" value="transferencia" class="form-control form-control-user">
            CONTRA ENTREGA: <input type="radio" name="mediopago" value="entrega" class="form-control form-control-user">
            
            <br>
            <br>
            TOTAL COMPRA: <?php $total=$precio*$_SESSION['cantidad']; echo $total;   ?>
            <br>
            

            
            <input class="boton" type="submit"  name="GENERARPEDIDO" value="GENERARPEDIDO" class="btn btn-success btn-user btn-block">

        </form>
    </div>
</body>
</html>
