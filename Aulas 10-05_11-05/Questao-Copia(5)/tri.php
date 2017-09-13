<?php
$num1 = $_POST['num1'];
$num2 = $_POST['num2'];
$num3 = $_POST['num3'];

if ($num1 != $num2 && $num1 != $num3) {
	echo "Escaleno";
}elseif ($num1 == $num2 && $num1 == $num3) {
	echo "Equilatero";
}else{
	echo "Isosceles";
}
?>