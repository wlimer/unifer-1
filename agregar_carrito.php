<?php
session_start();
$id_productos=$_POST["id_productos"];
$cantidad=$_POST["cantidad"];


$_SESSION['id_productos']=$id_productos;
$_SESSION['cantidad']=$cantidad;

include ("pagina_principal.php");

//print "$id_productos <br> $cantidad";
?>

