<?php  

$HOST = "localhost";
$USER = "root";
$PASSWORD = "root";
$DATABASE = "aula";

$conn = new PDO('mysql:host=localhost;bdname=aula', $USER, $PASSWORD);

$sql = "SELECT * FROM paises";

$result = $conn->query( $sql );

$rows = $result->fetchAll( PDO::FETCH_OBJ );

foreach ($rows as $value) {
	echo $value->id . ' - ' . $value->nome . ' - ' . $value->sigla;
	echo '<br>';
}
//*/

/*
$servername = "localhost";
$username = "root";
$password = "root";

try {
    $conn = new PDO("mysql:host=$servername;dbname=aula", $username, $password);
    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo "Connected successfully"; 
    }
catch(PDOException $e)
    {
    echo "Connection failed: " . $e->getMessage();
    }
//*/

$conn = null;
?>

<html>
<head>
	<title>Connect Banco</title>
</head>
<body>
<table>
	<tr></tr>
</table>
</body>
</html>