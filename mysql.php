<?php

function conexionBD(){
	$host="localhost";
	$usuario="root";
	$clave="";
	$bd="semillerosinvestigacion";
	$conexion=mysqli_connect($host,$usuario,$clave,$bd);
	return $conexion;	
}

function validarUsuario($identificacion,$clave){
	$conexion=conexionBD();
	session_start();

	$q="SELECT COUNT(*) as contar from usuarios where identificacion='$identificacion' and password='$clave'";
	$consulta=mysqli_query($conexion,$q);
	$array=mysqli_fetch_array($consulta);

	if($array['contar']>0){
	    $_SESSION['identificacion']=$identificacion;
	    header("location: inicio.php");
	}else{
	    $_SESSION['mensaje']="Tu identificacion o tu contraseña son incorrectos.";
	    header("location: index.php");
	}
}


    
?>