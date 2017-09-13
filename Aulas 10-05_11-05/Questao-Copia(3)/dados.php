<?php
$nome = $_POST['nome'];
$sexo = $_POST['sexo'];
$idade = $_POST['idade'];

if ($sexo == 'f'&& $idade < 25 ) {
	echo "Aceita";
} else {
	echo "Não aceita";
}
?>