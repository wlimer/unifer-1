<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/tabla.css">
    <title>Document</title>
</head>

<body>

    <?php
    //SQL
    $conexion = mysqli_connect("localhost", "root", "", "sistema_ecommerce") or die("Error en la conexiÃ³n a la base de datos");

    $sql = "select * from producto";

    $ejecutar = $conexion->query($sql);

    ?>

    <div name="main-container">
        <table>
            <thead>
                <tr>
                    <th>Nombre Libro </th>
                    <th> Precio </th>
                    <th> autor </th>
                    <th> Imagen </th>
                    <th> Cantidad </th>
                </tr>
            </thead>
            <tr>
                <?php
                while ($fila = mysqli_fetch_object($ejecutar)) {
                    echo '<tr>';
                    echo '<td>' . $fila->nombre . '</td>';
                    echo '<td>' . $fila->precio . '</td>';
                    echo '<td>' . $fila->autor . '</td>';
                    echo '<td><img src="imagenes/' . $fila->imagen . '" width="80" height="80"</td>';
                    echo '<td><form action="agregar_carrito.php" method="POST"><input type="hidden" name="codigo_producto" value= "' . $fila->codigo . '"><input type="text" name="cantidad" size="4" required><input type="submit" value="Agregar"></form></td>';
                    echo '</tr>';
                }
                ?>
            </tr>

        </table>

    </div>

</body>

</html>