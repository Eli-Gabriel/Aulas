<?php
$nome = $_POST('nome');
$gen = $_POST('genero');
$datan = $_POST('datan');
$log = $_POST('log');
$num = $_POST('num');
$bai = $_POST('bai');
$cep = $_POST('cep');
$cid = $_POST('cid');
$est = $_POST('est');
?>

<html>
<head>
	<title>Formulário</title>
</head>
<body>
<p>
<?php 
print("$nome");
?>	
</p>
<br>
<p>
	<?php 
print("$genero");
?>	
</p>
<br>
<p>
	<?php 
print("$datan");
?>	
</p>
<br>
<p>
<?php 
print("$log");
?>		
</p>
<br>
<p>
<?php 
print("$num");
?>		
</p>
<br>
<p>
<?php 
print("$bai");
?>		
</p>
<br>
<p>
<?php 
print("$cep");
?>		
</p>
<br>
<p>
<?php 
print("$cid");
?>		
</p>
<br>
<p>
<?php 
print("$est");
?>		
</p>
</body>
</html>