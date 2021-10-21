


<html>

<head>
  <title>Problema</title>
</head>

<body>
  <?php
  $conexion = mysqli_connect("localhost", "root", "", "ferreteria") or
    die("Problemas con la conexión");

  $registros = mysqli_query($conexion, "select *  from productos where id_productos='$_REQUEST[id_producto]'") or die("Problemas en el select:" . mysqli_error($conexion));

  if ($reg = mysqli_fetch_array($registros)) {
    echo "codigo:" . $reg['codigo'] . "<br>";
    echo "Nombre del producto :" . $reg['nombre_producto'] . "<br>";
    echo "Precio:" . $reg['precio'] . "<br>";
    echo "Referencia:" . $reg['referencia'] . "<br>";
    echo "imagen:" . $reg['Imagen'] . "<br>";
    echo "N. de Categoria:" . $reg['productos_id_categoria'] . "<br>";
    
    
  } else {
    echo "No existe el producto con ese id.";
  }

  mysqli_close($conexion);
  ?>
</body>

</html>