<?php
include("conexion.php");
$sql = "SELECT * FROM tipo_habitacion";
$result = mysqli_query($con, $sql);

if (mysqli_num_rows($result) > 0) {
    echo "<table><tr><th>ID</th><th>Descripción</th><th>Número de Camas</th></tr>";
    while ($row = mysqli_fetch_assoc($result)) {
        echo "<tr><td>" . $row["id"] . "</td><td>" . $row["descripcion"] . "</td><td>" . $row["numero_camas"] . "</td></tr>";
    }
    echo "</table>";
} else {
    echo "No se encontraron tipos de habitación.";
}

mysqli_close($con);
?>
