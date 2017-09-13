<?php
include ('conexao.php');

$sql = "SELECT * FROM paises";
$consulta = $conn->prepare($sql);
$consulta->execute();

$registros = $consulta->fetchAll(PDO::FETCH_OBJ);
?>

<html>
<head>
	<title>CRUD</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>
<div class="container">
	<h1>Registros</h1>

	<table>
		<tr>
			<td>Cod</td>
			<td>Nome</td>
			<td>Sigla</td>
			<td>Opções</td>
		</tr>

		<?php foreach($registros as $registro) { ?>
		<tr>
			<td><?php echo $registro->id; ?></td>
			<td><?php echo $registro->nome; ?></td>
			<td><?php echo $registro->sigla; ?></td>
			<td>
				<a href="atualizar.php?id=<?php echo $registro->id; ?>">Editar</a>
				<a href="deletar.php?id=<?php echo $registro->id; ?>">Excluir</a>
			</td>
		</tr>
		<?php } ?>
	</table>
</div>


</body>
</html>