<?php 
	include('libs/smarty/smarty.class.php');
	include ('facturas.php');
	$smarty = new Smarty();

	$busqueda = isset($_GET['b'])? $_GET['b'] : "";

	$mysqli = mysqli_connect("127.0.0.1", "root", "", "factura");

	$result = mysqli_query($mysqli,"SELECT * FROM datos WHERE rfc LIKE '%$busqueda%'");


	$facturas= [];


	while ($fila = mysqli_fetch_array($result, MYSQLI_NUM)) {
	      $factura= new Facturacion($fila[0], $fila[1], $fila[2], $fila[3], $fila[4]);
	      $facturas[]=$factura;
	}


	$smarty->assign('f',$facturas);
	$smarty->display("index.tpl");


	mysqli_free_result($result);

?>