<?php
$_SESSION['nick']=$_POST['nick'];
$_SESSION['password']=$_POST['password'];
if(isset($_POST['Login'])){
header("Location:login.php");
}elseif (isset($_POST['Insert'])) {
	header("Location:insert.php");
}else{
	echo "Opcion no válida.";
	header("Location:index.php");
}