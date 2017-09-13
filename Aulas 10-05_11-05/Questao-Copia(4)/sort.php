<?php
$num1 = $_POST['num1'];
$num2 = $_POST['num2'];
$num3 = $_POST['num3'];
$sum = array($num1, $num2, $num3);

rsort($sum);

$arrlength = count($sum);

for($x = 0; $x < $arrlength; $x++) {
    echo $sum[$x];
    echo "<br>";
}
?>