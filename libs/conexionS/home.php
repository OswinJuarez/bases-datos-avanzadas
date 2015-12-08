<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
	<title>Document</title>
</head>
<body>
<div class="container">
	<?php if(isset($_SESSION['new']))
{
?>
	<h1>Bienvenido <?php echo $_SESSION['nombre'] ?>.</h1>
	
<?php	
}else{
	?>
	<h1>Bienvenido de nuevo <?php echo $_SESSION['nombre'] ?>.</h1>
<?php 
}
?>
<div class="btn btn-default"><a href="index.php">Regresar Menu principal</a></div>
<?php unset($_SESSION['new']); ?>
</div>
</body>
</html>

