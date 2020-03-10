<?php
include("./database/connection.php");
include("./Pessoa.php");

if ($_POST) {
    $id = $_POST["f_id"];

    $query = "DELETE FROM contatos WHERE id = :r_id";

    $update = $connection->prepare($query);
    $update->bindParam(":r_id", $id);

    $result = $update->execute();

    if ($result && $update -> rowCount() > 0) {
        echo "O contato foi excluido com sucesso";
    } else {
        echo "Houve um erro ao excluir o contato. Contate o administrador do Software";
    }

} else {
    header("location: ./index.php");
}
?>
<br>
<a href="index.php">Voltar</a>