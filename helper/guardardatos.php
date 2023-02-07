<?php
require 'conexion.php';

$nombre = $_POST['nombre'];
$num = $_POST['num'];
$correo = $_POST['correo'];
$tema = $_POST['tema'];
$msj = $_POST['msj'];


$insertar = "INSERT INTO `5`(`nombre`, `numero`, `correo`, `tema`, `msj`) VALUES ('$nombre','$num','$correo','$tema','$msj')";

$query = mysqli_query($conexion, $insertar);


if($query){

    echo "<script> alert('correcto');
     location.href = '../index.php';
    </script>";
 
 }else{
     echo "<script> alert('incorrecto');
     location.href = '../index.php';
     </script>";
 }



?>
