<?php
$servername = "db";
$username = "user";
$password = "password";
$database = "prueba_tecnica";

$conn = new mysqli($servername, $username, $password, $database);

if ($conn->connect_error) {
    die("Conexión fallida: " . $conn->connect_error);
}

$sql = "SELECT nombre, direccion, dni, telefono FROM personas";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    echo "<table border='1'><tr><th>Nombre</th><th>Dirección</th><th>DNI</th><th>Teléfono</th></tr>";
    while($row = $result->fetch_assoc()) {
        echo "<tr><td>" . htmlspecialchars($row["nombre"]) . "</td><td>" . htmlspecialchars($row["direccion"]) . "</td><td>" . substr($row["dni"], 0, 3) . "*****</td><td>" . substr($row["telefono"], 0, 3) . "*****</td></tr>";
    }
    echo "</table>";
} else {
    echo "No se encontraron resultados";
}
$conn->close();
?>
