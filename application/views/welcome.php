<!DOCTYPE html>

<html>

<head>

	<meta charset="utf-8">
	<title>Iniciar Sesión</title>
	<meta charset="utf-8"> <!--La codificacion de caracteres que permite convertir un caracter en un lenguaje natural en este caso la codificacion es Unicode que es por defecto de HTML5-->
	<meta name="keywords" content="acordes"><!--Palabras claves de la pagina -->
	<meta name="description" content="pagina de inicio"> <!--Descripcion del contenido de la pagina web -->
	<meta name="author" content="Jose Rivera"> <!--Autor de la pagina web -->
			
	<!--El atributo rel establece una relacion entre la pagina web actual y la pagina web de destino-->
	<link href="css/estilo.css" rel="stylesheet" type="text/css">		
	
</head>

<body>

<table>
 	<tr>
 		<td>hola,<strong> <?php echo $name; ?> </strong>alias <strong><?php echo $username; ?></strong> ! ya eres parte de esta app.</td>
	</tr>
 	<tr>
 		<td><img src="data:imagen/jpg;base64,<?php echo base64_encode($image); ?>"/></td>
 	</tr>
 	<tr>
 		<td><?php echo anchor('/auth/logout/', 'cerrar sesion'); ?></td>
 	</tr>			
</table>

<footer>
		<p>Universidad del Cauca - Facultad de Ingeniería Electrónica y Telecomunicaciones - Programa Ingeniería de Sistemas </p>
	    <p>@2016 Jose Luis Rivera</p>			
</footer>	

</body>

</html>
