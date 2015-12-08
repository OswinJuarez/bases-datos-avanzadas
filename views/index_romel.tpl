<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">

</head>
<body> 

	<div>
	<h1><font color="Green">Facturas</h1></font>
	<hr>
	<form action="#" method="GET" class="navbar-form navbar-left">
		<div class="input-group">
	      		<input type="text" class="form-control" name="b" placeholder="Buscar Factura">
	      		<span class="input-group-btn">
	        		<button class="btn btn-default" type="submit">
	        			<span class="glyphicon glyphicon-search" aria-hidden="true"></span>
	        		</button>
	      		</span>
	    	</div>
	</form>
	<form action="nuevaFactura_smarty.php">
		<button type="submit" class="btn btn-primary">Nueva marca</button>
	</form>
	<table class="table">
		<tr>
			<th>ID</th>
			<th>RFC</th>
			<th>Fecha</th>
		</tr>
		{foreach from=$f item=fact}
			<font color="Maroon">
			<tr>
				<td><font color="Maroon	">{$fact->id}</font></td>
				<td><a href="detalle_smarty.php?id={$fact->id}">{$fact->rfc}</a></td>
				<td>{$fact->fecha}</td>
			</tr>
		{/foreach}		
		
	</table>
</div>
</body>
</html>