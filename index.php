<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
	"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">

<head>
	<title>Figuras</title>
	<meta http-equiv="content-type" content="text/html;charset=utf-8" />
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

</head>

<body class=" bg-light">

	<?php
		include("include/class.figura.php");
		//include("include/Interface.formulas.php");
		//include("figuras/class.cuadrado.php");
		//include("figuras/class.rectangulo.php");
		//include("figuras/class.triangulo.php");
			
		//$objCuadrado = new cuadrado();
		//$objRectangulo = new rectangulo();
		//$objTriangulo = new triangulo();
			
		echo figura::get_form();
		
	?>
	
</body>

</html>
