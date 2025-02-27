<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

$servername = "$secret";
$username = "$secret";
$password = "$secret";
$dbname = "injeccion";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
	die("Conexión fallida: " . $conn->connect_error);
}

$id = $_GET['id'] ?? '';

$sql = "SELECT * FROM usuarios WHERE id = '$id'";

$result = $conn->query($sql);

if ($result->num_rows > 0) {
	while($row = $result->fetch_assoc()) {
    	echo "ID: " . $row["id"] . " - Nombre: " . $row["nombre"] . "<br>";
	}
} else {
	echo "0 resultados";
}

$conn->close();
?>

<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Página Principal de INYECCIONES SQL</title>
	<link rel="stylesheet" href="style.css">
</head>
<body>

	<div class="container">
    	<h1>Bienvenido a la Página Principal de INYECCIONES SQL</h1>
    	<p>Este es un entorno de prueba para entender y aprender sobre inyecciones SQL.</p>
    	<p>Si has introducido un ID en la URL, los resultados de la consulta se mostrarán aquí abajo.</p>
	</div>

</body>
</html>
