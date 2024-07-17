<?php

session_start();
if(isset($_SESSION['doc'])){
    echo "<script>window.location='dashboard.php';</script>";
}else{

if(isset($_POST['btn_login'])){
    include 'conexion.php';


    $email=$_POST['email'];
    $pass1=$_POST['pass'];
    
    $encrip = md5($pass1);

    $consultar = mysqli_query($conexion, "SELECT * FROM usuarios WHERE email = '$email' and pass = '$encrip'" ) or die ($conexion."Error en la consulta");

    $resultado = mysqli_num_rows($consultar);

    if($resultado != 0){
        while($fila = mysqli_fetch_array($consultar)){
            $_SESSION['doc'] = $fila['doc'];
            $_SESSION['p_n'] = $fila['p_n'];
            $_SESSION['s_n'] = $fila['s_n'];
            $_SESSION['p_a'] = $fila['p_a'];
            $_SESSION['s_a'] = $fila['s_a'];
            $_SESSION['correo'] = $fila['email'];
            
            echo "<script>window.location='dashboard.php';</script>";

        }
    }else{
        echo "<script>alert('Usuario y/o contraseña incorrectos');</script>";

        echo "<script>window.location='signin.php';</script>";
    }
}

echo "<script>window.location='signin.php';</script>";
}
?>