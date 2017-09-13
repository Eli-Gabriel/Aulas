<?php
$nom = $_POST['comeCompleto'];
$gen = $_POST['gen'];
$dtNasc = $_POST['dtNasc'];
$log = $_POST['log'];
$num = $_POST['num'];
$brr = $_POST['brr'];
$cep = $_POST['cep'];
$cid = $_POST['cid'];
$est = $_POST['est'];
?>

<html>
<head>
	<title>Recebe Dados PHP</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>
<center>
	<div class="container">
	<div class="jumbotron">
		<label>Nome Completo:</label>
		<label class="label label-primary">
			<?php
			echo $nom;
			?>
		</label>
	</div>

	<div class="jumbotron">
		<label>Gênero: </label>
		<label class="label label-primary">
			<?php
			echo $gen;
			?>
		</label>
	</div>

	<div class="jumbotron">
		<label>Data de Nascimento: </label>
		<label class="label label-primary">
			<?php
			echo $dtNasc;
			?>
		</label>
	</div>

	<div class="jumbotron">
		<label>Logradouro: </label>
		<label class="label label-primary">
			<?php
			echo $log;
			?>
		</label>
	</div>

	<div class="jumbotron">
		<label>Número: </label>
		<label class="label label-primary">
			<?php
			echo $num;
			?>
		</label>
	</div>

	<div class="jumbotron">
		<label>Bairro: </label>
		<label class="label label-primary">
			<?php
			echo $brr;
			?>
		</label>
	</div>

	<div class="jumbotron">
		<label>Cep: </label>
		<label class="label label-primary">
			<?php
			echo $cep;
			?>
		</label>
	</div>

	<div class="jumbotron">
		<label>Cidade: </label>
		<label class="label label-primary">
			<?php
			echo $cid;
			?>
		</label>
	</div>

	<div class="jumbotron">
		<label>Estado: </label>
		<label class="label label-primary">
			<?php
			echo $est;
			?>
		</label>
	</div>
</div>
</center>
</body>
</html>