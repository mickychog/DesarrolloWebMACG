<?php
include("conexion.php");


if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["id_habitacion"])) {
    $id_habitacion = $_POST["id_habitacion"];


    $sql = "DELETE FROM habitacion WHERE id='$id_habitacion'";

    if ($con->query($sql) === TRUE) {

        header("Location: read_habitacion.php"); 
        exit; 
    } else {
        echo "Error al actualizar la habitación: " . $con->error;
    }
}


if (isset($_GET["id"])) {
    $id_habitacion = $_GET["id"];
    $sql = "SELECT h.*, th.descripcion as tipo FROM habitacion h
            INNER JOIN tipo_habitacion th ON h.id_tipo_habitacion = th.id
            WHERE h.id='$id_habitacion'";

    $result = $con->query($sql);

    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
    } else {
        die("Habitación no encontrada.");
    }
} else {
    die("");
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Eliminar Habitación</title>
</head>
<body>
    <h1>Eliminar Habitación</h1>
    <p>¿Estás seguro de que deseas eliminar la habitación <?php echo $row['nro']; ?>?</p>
    <form action="<?php echo $_SERVER["PHP_SELF"]; ?>" method="POST">
        <input type="hidden" name="id_habitacion" value="<?php echo $row['id']; ?>">
        <input type="submit" value="Eliminar">
    </form>
    <a href="read_habitacion.php">Cancelar</a>
</body>
</html>

<?php

$con->close();
?>