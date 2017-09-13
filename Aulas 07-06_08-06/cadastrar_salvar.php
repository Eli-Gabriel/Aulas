<?php
/* CÓDIGO CREATE INSERT */
include('conexao.php');//inclusao do arquivo  de conexao

/* receber as informacoes e realizar a validacao e verificacao */
$nome = $_POST['nome'];
$sigla = $_POST['sigla'];

$sql = "INSERT INTO paises (nome, sigla) VALUES (:nome, :sigla)";

$inserir = $conn->prepare($sql);

$inserir->bindParam(':nome', $nome);
$inserir->bindParam(':sigla', $sigla);

$resultado = $inserir->execute();]

if (! $resultado) {
	var_dump($inserir->errorInfo());
	exit;
}

echo $inserir->rowCount() . "Linhas Inseridas";

?>