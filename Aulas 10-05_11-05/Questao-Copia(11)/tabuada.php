<?php
$num1 = $_POST['num1'];
$num2 = $_POST['num2'];
/*$num1 = 1.50;
$num2 = 1.10;*/
$i = 0;


do {
	echo "Pessoa 1== ";
	echo $num1;
	echo "<br>";
	echo "Pessoa 2== ";
	echo $num2;
	echo "<br>";
	echo "<br>";
	$num1 += 0.02;
	$num2 += 0.03;
	$i ++;
} while($num1>$num2);

echo $i."anos";
?>