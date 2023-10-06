<?php
include("conexion.php");


if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $tipo_habitacion_id = $_POST["tipo_habitacion_id"];
    $descripcion_nueva = $_POST["descripcion_nueva"];
    $numero_camas_nuevo = $_POST["numero_camas_nuevo"];


    $sql = "UPDATE tipo_habitacion SET descripcion='$descripcion_nueva', numero_camas=$numero_camas_nuevo WHERE id=$tipo_habitacion_id";

    if (mysqli_query($con, $sql)) {
        echo "Tipo de habitación actualizado exitosamente.";
    } else {
        echo "Error al actualizar el tipo de habitación: " . mysqli_error($con);
    }
}

mysqli_close($con);
?>
