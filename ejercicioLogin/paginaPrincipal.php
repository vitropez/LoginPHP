<?php
session_start();
if((isset($_COOKIE['micookie']))|| isset($_SESSION['nombre'])){
}else{		
	header ('Location:error.php');
}

?>


<!DOCTYPE html>
<html>
	<head>
		<title>Pagina Principal</title>
		<link href="estilos.css" rel="stylesheet" type="text/css">
		
		
	</head>
	
	<body>
	
	<?php
		
		echo "<h2>Bienvenido {$_COOKIE['micookie']}</h2> "
		
	?>	
		<form method="post" action="index.php">
		<input type="hidden" name="cerrar" value="uno">
		<button type="submit">Salir</button>
		</form>	
	
	</body>
</html>