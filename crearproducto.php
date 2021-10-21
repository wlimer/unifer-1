<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">


    <title>Document</title>
    <link rel="stylesheet" type="text/css" href="css/style_crearproducto.css">

    <link
    href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="bstra/css/sb-admin-2.min.css" rel="stylesheet">

</head>
<body class="body">
         <main class="main">
          <div class="contenedor__crearproducto">
                        
                              <h1> <b align="center">CREAR UN NUEVO PRODUCTO PRODUCTO</b></h1> 
                              <INPUT TYPE="submit" NAME="volver" VALUE="volver" class="btn btn-success btn-user btn-block">
                    <div class="https://www.google.com/url?sa=i&url=http%3A%2F%2Festudiocroft.com%2Fblog%2F2019%2F08%2F13%2Fsomos-especialistas-en-disenos-de-logotipos%2Flogo-la-ferreteria%2F&psig=AOvVaw1Fq0x6hFlvzctRXzW8i0tk&ust=1623188004794000&source=images&cd=vfe&ved=0CAIQjRxqFwoTCIDF2eO8hvECFQAAAAAdAAAAABAU">
                       <div class="col-lg-7">
                        <div class="p-5">
                         
                      </div>
                    </div>

                        
            <div>
                <div class="contenedor__crearproducto">
                        <FORM class="user" ACTION="crearproducto.php" METHOD="POST">
                         
                         IDENTIFICACION DEL PRODUCTO: <INPUT TYPE="text" NAME="id_productos" class="form-control form-control-user"  ><br>
                            CODIGO DEL PRODUCTO:          <INPUT TYPE="text" NAME="codigo" class="form-control form-control-user"><br>
                            NOMBRE DEL PRODUCTO:          <INPUT TYPE="text" NAME="nombre_producto" class="form-control form-control-user"><br>
                            PRECIO:                      <INPUT TYPE="text" NAME="precio" class="form-control form-control-user"><br>
                            REFERENCIA:                  <INPUT TYPE="text" NAME="referencia" class="form-control form-control-user"><br>
                            IMAGEN:                      <INPUT TYPE="text" NAME="imagen" class="form-control form-control-user"><br>
                            INGRESA LA CATEGORIA:        <INPUT TYPE="text" NAME="productos_id_categoria" class="form-control form-control-user"><br>
                        
                           <INPUT TYPE="submit" NAME="GUARDAR PRODUCTO" VALUE="GUARDAR PRODUCTO" class="btn btn-success btn-user btn-block">
                                                         
                        </FORM>
             
                <div> 
         </div>
         
    </div>
  <main>
</body>
</html>






<?php
$crear=$_POST['crear'];
$id_productos=$_POST['id_productos'];
$codigo=$_POST['codigo'];
$nombre_producto=$_POST['nombre_producto'];
$precio=$_POST['precio'];
$referencia=$_POST['referencia'];
$imagen=$_POST['imagen'];
$productos_id_categoria=$_POST['productos_id_categoria'];


$conexion = mysqli_connect("localhost","root","","ferreteria") or die("Error en la conexiÃ³n a la base de datos");
$sql = "insert into productos (id_productos,codigo,nombre_producto,precio, referencia,Imagen,productos_id_categoria)  VALUES ('$id_productos','$codigo','$nombre_producto','$precio','$referencia','$imagen','$productos_id_categoria');";

if (isset($crear))
{
    
    if (mysqli_query($conexion, $sql))
    {
        print "Se inserto exitosamente";

    }
    else {  print "Error";
            $error=mysqli_error($conexion); 
            print "$error";
        }
}
$ejecutar = $conexion->query($sql);

?>