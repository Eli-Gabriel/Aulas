<?php
    
    include 'pessoa.php';
    
    $titulo = "Hello world!";
    $nomes = array("João", "Lucas", "Pedro", "Matheus");

    $pessoa1 =  new Pessoa("João", "Teixeira");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $titulo?></title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
</head>
<body>
    <div class="container">
        <h1 class="text-center">
        <?=$titulo?>
        <small>
            <?php echo date("d/m/Y H:i:s");?>
        </small>
       </h1>

        <ul>
            <?php foreach ($nomes as $nome) {?>
                <li> <?php echo $nome ?> </li>
            <?php } ?>
        </ul>
    </div>
</body>
</html>