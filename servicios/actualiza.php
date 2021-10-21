<?php
session_start();
include ("db.php");
$sql = "select * from productos";
$ejecutar = $conexion->query($sql);




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

<FORM  action="actualiza2.php" method="post">
<div class="row">
                    <div class="https://www.google.com/url?sa=i&url=http%3A%2F%2Festudiocroft.com%2Fblog%2F2019%2F08%2F13%2Fsomos-especialistas-en-disenos-de-logotipos%2Flogo-la-ferreteria%2F&psig=AOvVaw1Fq0x6hFlvzctRXzW8i0tk&ust=1623188004794000&source=images&cd=vfe&ved=0CAIQjRxqFwoTCIDF2eO8hvECFQAAAAAdAAAAABAU"></div>
                    <div class="col-lg-7">
                        <div class="p-5">
                            <div class="text-center">
                                <h1 align="center" class="h4 text-gray-900 mb-4"> <b>ACTUALIZAR DATOS</b></h1>
                            </div>
                            <form class="user" method="POST" action="actualiza2.php">
                                <div class="form-group row">
                                    <div class="col-sm-6 mb-3 mb-sm-0">
                                      Identificacion producto: 
                                       <input type="text" name="id_producto" class="form-control form-control-user" id="id_producto"
                                            placeholder="" > 
                                    </div>
                                    <br>
                                    
                            
                                <input TYPE="submit"  VALUE="ACTUALIZAR DATOS" class="btn btn-warning btn-user btn-block">
                                </form>











<!-- Bootstrap core JavaScript-->



<script src="bstra/vendor/jquery/jquery.min.js"></script>
    <script src="bstra/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="bstra/vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="bstra/js/sb-admin-2.min.js"></script>

    <!-- Page level plugins -->
    <script src="bstra/vendor/chart.js/Chart.min.js"></script>

    <!-- Page level custom scripts -->
    <script src="bstra/js/demo/chart-area-demo.js"></script>
    <script src="bstra/js/demo/chart-pie-demo.js"></script>

</body>

</html>