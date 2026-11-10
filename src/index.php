
<?php

$host = "db";
$dbname = "practica";
$username = "root";
$password = "123456";

try {
    $conexion = new PDO(
        "mysql:host=$host;dbname=$dbname;charset=utf8",
        $username,
        $password
    );

    echo "<h1>Hola Mundo</h1>";
    echo "<p>Conexión a MySQL exitosa.</p>";

} catch (PDOException $e) {
    echo "Error de conexión: " . $e->getMessage();
}
?>
