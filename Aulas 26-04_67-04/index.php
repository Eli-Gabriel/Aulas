<?php 
$aula = "aprendenedoPHP<br>";

$data = date("d/m/y h:i:s");

$titulo = "Programação Web";


?>


<!DOCTYPE html>
<html>
<head>
	<title><?php echo $titulo ?></title>
</head>
<body>
<h1><?php echo $aula; ?></h1>
<h2><?php echo $data; ?></h2>
<p>
	Questão 1<br>
	<?php
		for ($i=0; $i < 10; $i++) {
			echo $i."<br>";
		}
	?>
</p>

</p>
</body>
</html>