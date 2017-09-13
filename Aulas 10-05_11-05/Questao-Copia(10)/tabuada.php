<?php
$num1 = $_POST['num1'];

for ($i=0; $i < 10; $i++) { 
	echo $num1." X ".($i+1)." = ".$num1*($i+1)."<br>";
}
?>