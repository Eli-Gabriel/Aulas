<?php
include("./database/connection.php");
include("./Pessoa.php");

if ($_POST) {

    //$pessoa = new Pessoa();
    //$pessoa->receiveData($_POST);

    $nome = $_POST["f_nome"];
    $email = $_POST["f_email"];
    $fone = $_POST["f_fone"];

    $query = "INSERT INTO contatos(nome, email, fone) VALUES (:r_nome, :r_email, :r_fone)";

    $insert = $connection->prepare($query);
    $insert->bindParam(":r_nome", $nome);
    $insert->bindParam(":r_email", $email);
    $insert->bindParam(":r_fone", $fone);

    $result = $insert->execute();

    //var_dump($result);

    if ($result && $insert -> rowCount() > 0) {
        echo "O contato <b>{$nome}</b> foi salvo com sucesso";
    } else {
        echo "Houve um erro ao salvar o contato. Contate o administrador do Software";
    }

    header("location: ./index.php");

} else {
    header("location: ./cadastro.php");
}
?>