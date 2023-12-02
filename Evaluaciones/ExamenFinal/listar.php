<?php
include("conexion.php");
$sql = "SELECT * FROM libros";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {

        echo "ID: " . $row["id"]. " - Título: " . $row["titulo"]. " - Autor: " . $row["autor"]. "<br>";
    }
} else {
    echo "0 resultados";
}

$con->close();
?>
