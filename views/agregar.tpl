<!DOCTYPE html>
<html lang="es-mx">
<head>
	<meta charset="UTF-8">
	<title></title>
</head>
<body>
	<center>
		{if $r == true}
			Se insertó correctamente <br>
			ID: {$f->id} <br>
			RFC: {$f->rfc} <br>
			Fecha: {$f->fecha} <br>
			Cliente:{$f->cliente} <br>
			Desarrollador: {$f->desarrollador} <br>
		{else}
			Error
		{/if}
	<br>
	<br>
	<a href="index.php">Inicio</a>
	</center>
</body>
</html>