<!DOCTYPE html>
<html>
	<head>
		<title>Ejercicio</title>
		<link href="estilos.css" rel="stylesheet" type="text/css">
	</head>
	<body>
						
		<div id="main">
			<header>
				<h1>Login</h1>
			</header>
			<div id="contenido">
			
			
				<form method="post" action="index.php">
					Nombre:<input type="text" name="nombre">
					Contraseña:<input type="password" name="contrasena">
					Guardar datos:<input type="checkbox" name="verificar" value="1">
					
					<button type="submit" >Entrar</button>
					
				</form>
			
			
			
			</div>
		</div>
		
	</body>
</html>

				
<?php
				
			$usuarios = array(
					"santiago"=>"7c222fb2927d828af22f592134e8932480637c0d",
					"maria"=>"0530e0d1838430054034151bbc8a67fa1d5db9c9",
					"alberto"=>"1d8af7658832ccba63a5fb451212db42cc352c29"
					);
					
					
					
					
					if($_POST)
					{  
																
						if(isset($_POST["nombre"]))
						 $nombre=$_POST["nombre"];
							
						
						if(isset($_POST["contrasena"]))
							$contrasena=sha1($_POST["contrasena"]);
						
						if(isset($_POST["cerrar"]))
						 $cerrar=$_POST["cerrar"];
					 
					 if(!empty($_POST['cerrar'])){
					      
							$destroy=true;
						 
						 }else{
							$destroy=false;
						 }		
							if($destroy){

									setcookie('micookie',$nombre,time() - 1);
									session_start();
									unset($_SESSION['nombre']);
							}
					 
					 
						
						
					     if(!empty($_POST['verificar'])){
					      
							$guardar=true;
						 
						 }else{
							$guardar=false;
						 }							
							
						if($nombre !="" &&$contrasena !="" ){
							 
												
							foreach($usuarios as $nombres =>$contrasenas)
							{
							if($nombre==$nombres && $contrasena==$contrasenas){
									session_start();
                                    $_SESSION['nombre']='entrar';
									
							
									
							if($guardar){
									
									setcookie('micookie',$nombre,time() + (60*60*24*365));
									$cookie=($_COOKIE['micookie']);
																	
									}
							
								
							header ('Location:paginaPrincipal.php');
															
								}	
							}
							}										
					}else{
						
						session_start();
						if((isset($_COOKIE['micookie']))|| isset($_SESSION['nombre'])){
						header ('Location:paginaPrincipal.php');
						} 
					}
						
?>
