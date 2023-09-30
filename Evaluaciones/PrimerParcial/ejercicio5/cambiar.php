<?php

    $con = new mysqli("localhost", "root", "", "bd_alumnos");
    if ($con->connect_error) {
        die("conexion fallada" . $con->connect_error);
    }
if ($con->connect_error) {
    die("Error en la conexión a la base de datos: " . $con->connect_error);
}



$id = $_GET["id"];
$nuevoRol = $_GET["rol"];

$sql = "UPDATE usuario SET rol = '$nuevoRol' WHERE id = $id";

if ($con->query($sql) === TRUE) {
    echo "Rol actualizado con éxito.";
    echo '<br><a href="pregunta5.php">Volver a la página anterior</a>';
} else {
    echo "Error al actualizar el rol: " . $con->error;
    echo '<br><a href="pregunta5.php">Volver a la página anterior</a>';
}

$con->close();
?>
