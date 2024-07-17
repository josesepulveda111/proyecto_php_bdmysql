<?php


session_start();
if(isset($_SESSION['doc'])){
session_destroy();

echo "<script>window.location='contact.php';</script>";

}else{
    echo "<script>window.location='contact.php';</script>";
}
?>