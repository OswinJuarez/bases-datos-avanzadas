<?php 
	include('smarty/libs/smarty.class.php');
	include ('facturas.php');
	$smarty = new Smarty();

	$tip = new Facturacion(null, $_POST['rfc'], null, $_POST['cli'], $_POST['des']);

	$conexion = mysqli_connect("localhost", "root", "", "factura");
	$query = "INSERT INTO datos VALUES (null, '$tip->rfc', NOW(), '$tip->cliente', '$tip->desarrollador')";

	$resultado = mysqli_query($conexion, $query);

	$query2 = "SELECT * FROM datos WHERE id =".mysqli_insert_id($conexion);

	$resultado2 = mysqli_query($conexion, $query2);

	$fila = mysqli_fetch_array($resultado2, MYSQLI_NUM);

	$facturas = new Facturacion($fila[0], $fila[1], $fila[2], $fila[3], $fila[4]);

	$smarty->assign('f',$facturas);
	$smarty->assign('r',$resultado);
	$smarty->display("agregar.tpl");

?>