<?php
require_once 'class_insert/insert.class.php';
//accedemos al método singleton que es quién crea la instancia
//de nuestra clase y así podemos acceder sin necesidad de
//crear nuevas instancias, lo que ahorra consumo de recursos
$nuevoSingleton = Insert::singleton_insert(); 
 
 	$nombre = $_SESSION['nick'];
	$contraseña = $_SESSION['password'];
	$nuevoSingleton->insert_users($nombre,$contraseña);
	$_SESSION['new']=0;

	header("Location:home.php");
?>