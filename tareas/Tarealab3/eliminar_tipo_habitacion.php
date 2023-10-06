<?php
include("conexion.php");

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $tipo_habitacion_id = $_POST["tipo_habitacion_id"];

    $sql = "DELETE FROM tipo_habitacion WHERE id=$tipo_habitacion_id";

    if (mysqli_query($con, $sql)) {
        echo "Tipo de habitacion eliminado exitosamente.";
    } else {
        echo "Error al eliminar el tipo de habitación: " . mysqli_error($con);
    }
}

mysqli_close($con);
?>
