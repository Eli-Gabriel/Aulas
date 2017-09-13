<?php
$livro = $_POST['livro'];
$user = $_POST['user'];
$data = date("d-m-Y");


if ($user == "aluno") {
	$data = $data("+3 days");
}else{
	$data = $data("+10 days");
}

echo $livro."<br>";
echo $user."<br>";
echo $data."<br>";

?>