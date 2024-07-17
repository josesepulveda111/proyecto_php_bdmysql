<?php
include "conexion.php";
$con=conectar();

$id_respuesta=$_GET['id_respuesta'];

$sql="DELETE FROM respuestas_test_o  WHERE id='$id_respuesta'";
$query=mysqli_query($con,$sql);

    if($query){
        Header("Location: index.php");
    }
?>