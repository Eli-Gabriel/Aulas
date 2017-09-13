<?php
$num1 = $_POST['num1'];
$num2 = $_POST['num2'];
$sum = $num1+$num2;

if ($sum > 20) {
	echo $sum+8;
} else {
	echo $sum-5;
}
?>