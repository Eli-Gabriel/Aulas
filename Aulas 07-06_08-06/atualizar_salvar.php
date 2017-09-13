<?php
include('conexao.php');

if (empty($_POST['id']) || empty($_POST['nome']) || empty($_POST['sigla'])) {
	header('location:index.php');
} else {
	
}
?>