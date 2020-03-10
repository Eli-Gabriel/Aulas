<?php
include("./database/connection.php");
include("./Pessoa.php");

if ($_POST) {
    $id = $_POST["f_id"];
    $nome = $_POST["f_nome"];
    $email = $_POST["f_email"];
    $fone = $_POST["f_fone"];

    $query = "UPDATE contatos SET nome=:r_nome, email=:r_email, fone=:r_fone WHERE id=:r_id";

    $update = $connection->prepare($query);
    $update->bindParam(":r_nome", $nome);
    $update->bindParam(":r_email", $email);
    $update->bindParam(":r_fone", $fone);
    $update->bindParam(":r_id", $id);

    $result = $update->execute();

    if ($result && $update -> rowCount() > 0) {
        echo "O contato <b>{$nome}</b> foi salvo com sucesso";
    } else {
        echo "Houve um erro ao salvar o contato. Contate o administrador do Software";
    }

} else {
    header("location: ./index.php");
}
?>

<br>
<a href="index.php">Voltar</a>