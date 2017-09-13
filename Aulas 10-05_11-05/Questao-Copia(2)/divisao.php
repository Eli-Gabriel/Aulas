<?php
$num1 = $_POST['num1'];

if ($num1%10 == 0) {
	echo "Divisivel por 10";
}elseif ($num1%5 == 0) {
	echo "Divisivel por 5";
}elseif ($num1%2 == 0) {
	echo "Divisivel por 2";
}else{
	echo "Não é divisivel";
}
?>