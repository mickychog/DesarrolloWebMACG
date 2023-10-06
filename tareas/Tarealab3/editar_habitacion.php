<?php
include("conexion.php");
// Procesar el formulario cuando se envíe
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["id_habitacion"])) {
    $id_habitacion = $_POST["id_habitacion"];
    $nro = $_POST["nro"];
    $id_tipo_habitacion = $_POST["id_tipo_habitacion"];
    $bano_privado = isset($_POST["bano_privado"]) ? 1 : 0;
    $espacio = $_POST["espacio"];
    $precio = $_POST["precio"];




    $sql = "UPDATE habitacion SET nro='$nro', id_tipo_habitacion='$id_tipo_habitacion', 
            bano_privado='$bano_privado', espacio='$espacio', precio='$precio' WHERE id='$id_habitacion'";

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
    <title>Editar Habitación</title>
</head>
<body>
    <h1>Editar Habitación</h1>
    <form action="<?php echo $_SERVER["PHP_SELF"]; ?>" method="POST">
        <input type="hidden" name="id_habitacion" value="<?php echo $row['id']; ?>">
        Número de Habitación: <input type="text" name="nro" value="<?php echo $row['nro']; ?>" required><br>
        Tipo de Habitación:
        <select name="id_tipo_habitacion">
            <?php
            // Obtener los tipos de habitación desde la base de datos
            $sql_tipos = "SELECT id, descripcion FROM tipo_habitacion";
            $result_tipos = $con->query($sql_tipos);

            if ($result_tipos->num_rows > 0) {
                while ($row_tipos = $result_tipos->fetch_assoc()) {
                    $selected = ($row['id_tipo_habitacion'] == $row_tipos["id"]) ? "selected" : "";
                    echo "<option value='" . $row_tipos["id"] . "' $selected>" . $row_tipos["descripcion"] . "</option>";
                }
            }
            ?>
        </select><br>
        Baño Privado: <input type="checkbox" name="bano_privado" <?php if ($row['bano_privado']) echo 'checked'; ?>><br>
        Espacio (m²): <input type="text" name="espacio" value="<?php echo $row['espacio']; ?>" required><br>
        Precio: <input type="text" name="precio" value="<?php echo $row['precio']; ?>" required><br>
        <input type="submit" value="Guardar">
    </form>
    <a href="read_habitacion.php">Cancelar</a>
</body>
</html>

<?php

$con->close();
?>
