<?php
session_start();
include ("db.php");

$sql = "select * from productos";
$ejecutar = $conexion->query($sql);


function buscarProducto($id_productos)
{
    include ("db.php");
    include("index.php");
    $sql = "select * from productos where id_productos=$id_productos";
    $ejecutar = $conexion->query($sql);
    $fila = mysqli_fetch_object($ejecutar);
    $nombre_producto=$fila->nombre_producto;
    return $nombre_producto;
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
<body align="center">  
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="stiven" content="">

    <title>SB Admin 2 - Dashboard</title>

    <!-- Custom fonts for this template-->
    <link href="bstra/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
    href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="bstra/css/sb-admin-2.min.css" rel="stylesheet">

</head>
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
         <div class="contenedor__crearproducto divform">
          <div class="https://www.google.com/url?sa=i&url=http%3A%2F%2Festudiocroft.com%2Fblog%2F2019%2F08%2F13%2Fsomos-especialistas-en-disenos-de-logotipos%2Flogo-la-ferreteria%2F&psig=AOvVaw1Fq0x6hFlvzctRXzW8i0tk&ust=1623188004794000&source=images&cd=vfe&ved=0CAIQjRxqFwoTCIDF2eO8hvECFQAAAAAdAAAAABAU"></div>
                    <div class="col-lg-7">
                   
                        
                        <h1> <b align="center">CONSULTAR PRODUCTO</b></h1> 
                        <INPUT TYPE="submit" NAME="volver" VALUE="volver" class="btn btn-success btn-user btn-block">
            
                 <div class="col-lg-7">
                  <div class="p-5">
                   
                </div>
              </div>
              <div >
                            <form class="user" method="POST" action="servicios/consultar2.php">
                                <div class="form-group row">
                                    <div class="col-sm-6 mb-3 mb-sm-0">
                                      Identificacion producto:  <input type="text" name="id_producto" class="form-control form-control-user" id="id_producto" width=100% 
                                            placeholder="" > 
                                  
                                   
                                  
                                            <br>
                                    nombre producto 
                                    <input type="text" name="nombre_producto" class="form-control form-control-user" id="nombre_producto"
                                            placeholder="">
                                    </div>
                                </div>
                                <br>
                                <INPUT  TYPE="submit"  VALUE="CONSULTAR_PRODUCTO" class="btn btn-success btn-user btn-block" >
                            </form>
                        </div>
                        </div>
                     </div>
                 </div>

  <main>
</body>
</html>


<!-- <div class="row">

                    <div class="https://www.google.com/url?sa=i&url=http%3A%2F%2Festudiocroft.com%2Fblog%2F2019%2F08%2F13%2Fsomos-especialistas-en-disenos-de-logotipos%2Flogo-la-ferreteria%2F&psig=AOvVaw1Fq0x6hFlvzctRXzW8i0tk&ust=1623188004794000&source=images&cd=vfe&ved=0CAIQjRxqFwoTCIDF2eO8hvECFQAAAAAdAAAAABAU"></div>
                    <div class="col-lg-7">
                        <div class="p-5">
                            <div class="text-center">
                                <h1 align="center" class="h4 text-gray-900 mb-4"> <b>CONSULTAR PRODUCTO</b></h1>
                            </div align="center">
                        
                            <form class="user" method="POST" action="consultar2.php">
                                <div class="form-group row">
                                    <div class="col-sm-6 mb-3 mb-sm-0">
                                      Identificacion producto:  <input type="text" name="id_producto" class="form-control form-control-user" id="id_producto"
                                            placeholder="" > 
                                    </div>
                                   
                                    </div>
                                    <div class="col-sm-6">
                                    nombre producto    <input type="text" name="nombre_producto" class="form-control form-control-user" id="nombre_producto"
                                            placeholder="">
                                    </div>
                                </div>
                                <br>
                                <INPUT  TYPE="submit"  VALUE="CONSULTAR_PRODUCTO" class="btn btn-success btn-user btn-block" >
                            </form>
                         -->
