<?php 
	include('facturas.php');
	include('smarty/libs/smarty.class.php');

	$smarty = new Smarty();

	$clv = isset($_GET['id'])?$_GET['id']:"";

	$mysqli = mysqli_connect("127.0.0.1", "root", "", "factura");
	$query = "SELECT * FROM datos WHERE id = $clv";

	$resultado = mysqli_query($mysqli, $query);
	if ($resultado) {
		$fila = mysqli_fetch_array($resultado, MYSQLI_NUM);

		$factura= new Facturacion($fila[0], $fila[1], $fila[2], $fila[3], $fila[4]);
		
	}else{
		echo "Error";
	}

	

	$smarty->assign('f',$factura);
	$smarty->display("detalle.tpl");


	mysqli_free_result($resultado);
?>