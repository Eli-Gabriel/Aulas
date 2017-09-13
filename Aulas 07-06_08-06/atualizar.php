<?php
include('conexao.php');

if (empty($_GET['id'])) {
	header('location:index.php');
} else {
	$id = filter_var($_GET['id']);

	$sql = "SELECT * FROM paises where id = :id";
	$consulta = $conn->prepare($sql);
	$consulta = bindParam(':id', $id);
	$consulta->execute();

	$registro = $consulta->fetch(PDO::FETCH_OBJ);
}
?>

<head>
	<title>CRUD</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>

<h1>Atualizar Registro</h1>

<form>
	<p>
		<label>Código: </label>
		<input type="text" name="id" value="<?php echo $registro->id; ?>" readonly>
	</p>
	
	<p>
		<label>Nome: </label>
		<input type="text" name="nome" value="<?php echo $registro->nome; ?>">
	</p>

	<p>
		<label>Sigla: </label>
		<input type="text" name="sigla" value="<?php echo $registro->sigla; ?>">
	</p>

	<p>
		<input type="submit" name="name" value="atualizar">
	</p>
</form>