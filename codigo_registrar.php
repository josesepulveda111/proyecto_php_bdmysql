<?php
//Verificamos la accion sobre el boton
if (isset($_POST['btn_registrar'])){
//Traemos la conexion
include 'conexion.php';
    //Recibimos los datos del formulario
    $pass1=$_POST['pass1'];
    $pass2=$_POST['pass2'];
    if($pass1 == $pass2){
        $documento=$_POST['doc'];
        $tipo_documento=$_POST['tipo_doc'];
        $primer_nombre=$_POST['p_n'];
        $segundo_nombre=$_POST['s_n'];
        $primer_apellido=$_POST['p_a'];
        $segundo_apellido=$_POST['s_a'];
        $fecha_nacimiento=$_POST['f_n'];
        $email=$_POST['email'];

        $encrip = md5($pass1);

        // Codigo para registar en mysql
    $registrar = mysqli_query($conexion,"INSERT INTO usuarios (doc,tipo_doc,p_n,s_n,p_a,s_a,f_n,email,pass) VALUES ($documento,'$tipo_documento','$primer_nombre','$segundo_nombre','$primer_apellido','$segundo_apellido','$fecha_nacimiento','$email','$encrip')") or die ($conexion."error");

    // Mensaje de alerta
    echo "<script>alert('Registro Exitoso');</script>";
    // Redireccion al index
    echo "<script>window.location='index.php';</script>";

    }else{
        echo "<script>alert('No coinciden las contraseñas');</script>";

        echo "<script>window.location='index.php';</script>";
    }  
}else{
    echo "Sin datos";
}
?>