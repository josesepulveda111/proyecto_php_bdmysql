<?php
if(isset($_POST['btn_enviar_tp'])){
    include "conexion.php";

    $doc = 1017927558;
    $fecha = date('Y-m-d');
    $r1 = $_POST['r1'];
    $r2 = $_POST['r2'];
    $r3 = $_POST['r3'];
    $r4 = $_POST['r4'];
    $r5 = $_POST['r5'];
    $r6 = $_POST['r6'];
    $r7 = $_POST['r7'];
    $r8 = $_POST['r8'];
    $r9 = $_POST['r9'];
    $r10 = $_POST['r10'];
    $r11 = $_POST['r11'];
    $r12 = $_POST['r12'];
    $r13 = $_POST['r13'];
    $r14 = $_POST['r14'];
    $r15 = $_POST['r15'];
    $r16 = $_POST['r16'];
    $r17 = $_POST['r17'];
    $r18 = $_POST['r18'];
    $r19 = $_POST['r19'];
    $r20 = $_POST['r20'];
    $r21 = $_POST['r21'];
    $r22 = $_POST['r22'];
    $r23 = $_POST['r23'];
    $r24 = $_POST['r24'];
    $r25 = $_POST['r25'];
    $r26 = $_POST['r26'];
    $r27 = $_POST['r27'];
    $r28 = $_POST['r28'];
    $r29 = $_POST['r29'];
    $r30 = $_POST['r30'];
    $r31 = $_POST['r31'];
                        
    $resgistrar = mysqli_query($conexion,"INSERT INTO respuesta_test_prsncn (id_respuesta_test_prsncn,doc,fecha_pre,r1,r2,r3,r4,r5,r6,r7,r8,r9,r10,r11,r12,r13,r14,r15,r16,r17,r18,r19,r20,r21,r22,r23,r24,r25,r26,r27,r28,r29,r30,r31) VALUES (NULL,$doc,'$fecha', $r1,$r2,$r3,$r4,$r5,$r6,$r7,$r8,$r9,$r10,$r11,$r12,$r13,$r14,$r15,$r16,$r17,$r18,$r19,$r20,$r21,$r22,$r23,$r24,$r25,$r26,$r27,$r28,$r29,$r30,$r31)") or die ($conexion."Problemas en el registro");
                        
    echo "<script>alert('Registro exitoso');</script>";

    echo "<script>window.location='index.php';</script>";
}
?>