
<head>

	<meta charset="utf-8">
	<title>Inicio</title>
	<meta charset="utf-8"> <!--La codificacion de caracteres que permite convertir un caracter en un lenguaje natural en este caso la codificacion es Unicode que es por defecto de HTML5-->
	<meta name="keywords" content="acordes"><!--Palabras claves de la pagina -->
	<meta name="description" content="pagina de inicio"> <!--Descripcion del contenido de la pagina web -->
	<meta name="author" content="Jose Rivera"> <!--Autor de la pagina web -->
	<link rel="stylesheet" type="text/css" href="<?= base_url() ?>public/css/formulario.css"/>

	
</head>

<h2>Inicio</h2>

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


