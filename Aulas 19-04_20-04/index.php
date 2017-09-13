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
	<?php
		for ($i=0; $i < 10; $i++) {
			echo $i."<br>";
		}
	?>
</p>

<ul>
	<?php
		for ($i=0; $i < 10; $i++) {?>
		<li><?php echo $i."<br>"; ?></li>
		<?php } ?>
	
</ul>

<p>
	<ul>
		<?php
		for ($i=0; $i < 10; $i++) {
			echo "<li>".$i."</li>";
		}
		?>
	</ul>
</p>
</body>
</html>