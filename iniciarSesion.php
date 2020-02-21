<?php

require 'conexion.php';
session_start();

$identificacion=$_POST['identificacion'];
$clave=sha1($_POST['clave']);

$q="SELECT COUNT(*) as contar from usuarios where identificacion='$identificacion' and password='$clave'";
$consulta=mysqli_query($conexion,$q);
$array=mysqli_fetch_array($consulta);

if($array['contar']>0){

	$q="SELECT * from usuarios where identificacion='$identificacion' and password='$clave'";
	$consulta=mysqli_query($conexion,$q);
	$array=mysqli_fetch_array($consulta);

    $_SESSION['identificacion']=$array[0];
    $_SESSION['rol']=$array[7];
    $_SESSION['nombres']=$array[1];
    $_SESSION['apellidos']=$array[2];

    header("location: inicio.php");
    
}else{
    $_SESSION['mensaje']="Tu identificacion o tu contraseña son incorrectos.";
    header("location: index.php");
}


?>