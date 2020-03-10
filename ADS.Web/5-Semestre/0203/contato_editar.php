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

    <?php if (isset($erro)):?>
    
    <div class="alert alert-danger"><?php echo $erro ?></div>
    
    <?php endif ?>
    
    <?php if (!isset($erro)):?>
    <form action="contato_editar_salvar.php" method="post">
      <div class="row">
        <div class="col">
          <label for="">Nome</label>
          <input type="text" class="form-control" name="f_nome" value="<?php echo $registro->nome ?>" required>
        </div>
        <div class="col">
          <label for="">E-mail</label>
          <input type="email" class="form-control" name="f_email" value="<?php echo $registro->email ?>" required>
        </div>
        <div class="col">
          <label for="">Telefone</label>
          <input type="fone" class="form-control" name="f_fone" data-mask="(99) 99999-9999" value="<?php echo $registro->fone ?>" required>
        </div>
      </div>
      <div class="row mt-3">
        <div class="col">
          <input type="hidden" name="f_id" value="<?php echo $registro->id ?>">
          <button class="btn btn-primary btn-block" type="submit">Salvar</button>
        </div>
      </div>
    </form>
    <?php endif ?>
  </div>

  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.16/jquery.mask.min.js"></script>

</body>

</html>