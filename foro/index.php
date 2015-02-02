<html>
<head>
<meta charset="utf-8" />
<meta http-equiv="pragma" content="no-cache">
<link rel="stylesheet" type="text/css" href="normalize.css">
<title>Foro PWeb</title>
</head>
<body>
<header>
	<h1>
		Experimento de Foro
	</h1>
</header>
<?php
	$foro = $_GET["foro"];
	$guardar = $_GET["guardar"];
	$escribir = $_GET["escribir"];
	include 'conexion.php';
	if ($guardar != '')include 'guardar.php';
	if ($escribir != '')include 'escribir.php';
	if ($foro != '')include 'foro.php';
	if (($guardar == '') && ($escribir == '') && ($foro == ''))include 'lista.php';
?>
</body>
</html>