<?php

require 'conexion.php';

$identificacion=$_POST['identificacion'];
$nombres=$_POST['nombres'];
$apellidos=$_POST['apellidos'];
$grupoInv=$_POST['grupoInv'];
$telefono=$_POST['telefono'];
$direccion=$_POST['direccion'];
$clave=sha1($_POST['clave']);
$rol="docente";

$q="SELECT COUNT(*) as contar from usuarios where identificacion='$identificacion' and password='$clave'";
$consulta=mysqli_query($conexion,$q);
$array=mysqli_fetch_array($consulta);

if($array['contar']>0){
	echo "Ya se encuentra registrado";
}else{
	$q = "INSERT INTO usuarios (identificacion,nombre,apellido,grupoinv,telefono,direccion,password,rol) 
	  	VALUES('$identificacion', '$nombres', '$apellidos', '$grupoInv', '$telefono', '$direccion', '$clave', '$rol')";
	if(mysqli_query($conexion, $q)){
		echo"new record created";
	}else{
		echo"valio gaver";
	}
}
?>