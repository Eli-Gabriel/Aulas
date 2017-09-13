<html>
<head>
	<title>CRUD</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>
<div class="container">
	<form action="cadastrar_salvar.php" method="post">
		<div class="form-group">
		    <label for="nom">Nome: </label>
		    <input type="text" class="form-control" id="nom" name="nome">
		</div>

		<div class="form-group">
		    <label for="sig">Sigla: </label>
		    <input type="text" class="form-control" id="sig" name="sigla">
		</div>

		<button type="submit" class="btn btn-default">Enviar</button>
	</form>
</div>
</body>
</html>