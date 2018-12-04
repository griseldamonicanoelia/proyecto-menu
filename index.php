<!doctype html>
<html lang="en">
<head>
<meta charset="UTF-8" />
<title>Document</title>
<link href="https://fonts.googleapis.com/css?family=Raleway"
	rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Cardo"
	rel="stylesheet">
<link rel="stylesheet" href="css/style.css" />
<script src="js/jquery-3.3.1.min.js"> </script>

</head>


<body>
	<section id="wrapper">
		<header>
			<img src="images/logo.png" alt="logo del Restaurante" /> <img src=""
				alt="" />
			<nav>
				<ul>
					<li><a href="#">HOME</a></li>
					<li><a href="#">CARTA</a></li>
					<li><a href="#">PROMOCIONES</a></li>
					<li><a href="#">CONTACTENOS</a></li>
				</ul>
			</nav>
		</header>

		<section id="main">
			<h1>MENU DEL DIA</h1>
  <?php
// tenemos 2 varables//
$platos = array(
    "carne.jpg",
    "ensaladas.jpg",
    "pastas.jpg",
    "pechuga.jpg",
    "pizza.jpg",
    "tarta.jpg",
    "picada.jpg"
);
$precios = array(
    "410 PESOS",
    "220 PESOS",
    "270 PESOS",
    "230 PESOS",
    "290 PESOS",
    "270 PESOS",
    "450 PESOS"
);
/*
 * http://php.net/manual/es/function.date.php
 */
$diaSemana = date('w'); // funcion que recibe un formato

$platoDia = $platos[$diaSemana];
$precioDia = $precios[$diaSemana];

?>
<img class="centrar" alt="Plato del dia"
				src="images/<?php echo $platoDia ?>">
			<p class="precio"><?php echo $precioDia?> </p>

			<div class="service" id="servicios"></div>
			<script>
$(document).ready(function(){
	$.getJSON("servicios.json", function(datos){
		for (var i in datos.prestaciones){

		var tiposServicios=datos.prestaciones
		[i].descripcion;

		$("#servicios").append(" / "+tiposServicios+" / ");
		}
	});
});

			
			</script>
		</section>
		<footer>
			<p>&copy;2018 | Todos los derechos reservados</p>
		</footer>





	</section>

</body>
</html>