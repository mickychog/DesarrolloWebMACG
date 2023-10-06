<?php
include("conexion.php");
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $descripcion = $_POST["descripcion"];
    $numero_camas = $_POST["numero_camas"];

    $sql = "INSERT INTO tipo_habitacion (descripcion, numero_camas) VALUES ('$descripcion', $numero_camas)";

    if (mysqli_query($con, $sql)) {
        echo "Tipo de habitación creado exitosamente.";
    } else {
        echo "Error al crear el tipo de habitación: " . mysqli_error($con);
    }
}

mysqli_close($con);
?>
