<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
</head>
<body>
    <div class="container">
        <div class="jumbotron">
            <h2>Cadastro de Pessoas</h2>
        </div>

        <div class="row">
            <form action="" method="post"></form>
            <div class="col">
                <label for="">Nome: </label>
                <input type="text" class="form_control" name="nome">
            </div>
            <div class="col">
                <label for="">Sobrenome: </label>
                <input type="text" class="form_control" name="Sobrenome">
            </div>
            <div class="col">
                <label for="">Data de Nascimento: </label>
                <input type="date" class="form_control" name="data_nascimento">
            </div>
        </div>
        <div class="row mt-3">
            <div class="col">
                <button class="btn btn-primary btn-block" type="submit">Salvar</button>
            </div>
        </div>
    </div>
</body>
</html>