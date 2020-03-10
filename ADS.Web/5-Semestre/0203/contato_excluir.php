<?php
include("./database/connection.php");
include("./Pessoa.php");

if ($_GET && $_GET["id"]) {
  $contato = new Pessoa();
  $registro = $contato->getById($connection, $_GET["id"]);

  if (!$registro) {
    $erro = "O Código [{$_GET["id"]}] não foi encontrado na base de dados.";
  }
  }else {
    echo "Erro de parametros!";
  }

$pessoa = new Pessoa();
$rows = $pessoa->buscarTodos($connection);
?>


<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Cadastro</title>

  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
</head>

<body>
  <div class="container">
    <div class="jumbotron">
      <h2>Atualização de contato</h2>
    </div>
    
    <div class="alert alert-danger">Deseja mesmo Deletar o registro???</div>
    
    <?php if (!isset($erro)):?>
    <form action="contato_editar_excluir.php" method="post">      
      <div class="row mt-3">
        <div class="col">
          <button class="btn btn-primary btn-block" type="submit">Cancelar</button>
        </div>
        <div class="col">
          <input type="hidden" name="f_id" value="<?php echo $registro->id ?>">
          <button class="btn btn-primary btn-block" type="submit">Excluir</button>
        </div>
      </div>
    </form>
    <?php endif ?>
  </div>

  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.16/jquery.mask.min.js"></script>

</body>

</html>