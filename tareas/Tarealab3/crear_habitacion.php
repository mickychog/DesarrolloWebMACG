<?php
include("conexion.php");

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nro = $_POST["nro"];
    $id_tipo_habitacion = $_POST["id_tipo_habitacion"];
    $bano_privado = isset($_POST["bano_privado"]) ? 1 : 0;
    $espacio = $_POST["espacio"];
    $precio = $_POST["precio"];

    $sql = "INSERT INTO habitacion (nro, id_tipo_habitacion, bano_privado, espacio, precio) 
            VALUES ('$nro', '$id_tipo_habitacion', '$bano_privado', '$espacio', '$precio')";

    if ($con->query($sql) === TRUE) {

        $id_habitacion = $con->insert_id;
        $uploadDir = "D:/nueva_carpeta";
        $uploadedImages = [];

        foreach ($_FILES["imagenes"]["tmp_name"] as $key => $tmp_name) {
            $imgName = $_FILES["imagenes"]["name"][$key];
            $imgTmpName = $_FILES["imagenes"]["tmp_name"][$key];
            $imgPath = $uploadDir . $imgName;

            if (move_uploaded_file($imgTmpName, $imgPath)) {
                $sql = "INSERT INTO fotos_habitacion (id_habitacion, fotografia) VALUES ('$id_habitacion', '$imgName')";
                $con->query($sql);
                $uploadedImages[] = $imgName;
            }
        }

        echo "Habitación creada con éxito. Imágenes subidas: " . implode(", ", $uploadedImages);
    } else {
        echo "Error al crear la habitación: " . $con->error;
    }

    $con->close();
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Crear Habitación</title>
</head>
<body>
    <h1>Crear Nueva Habitación</h1>
    <form action="<?php echo $_SERVER["PHP_SELF"]; ?>" method="POST" enctype="multipart/form-data">
        Número de Habitación: <input type="text" name="nro" required><br>
        Tipo de Habitación:
        <select name="id_tipo_habitacion">
            <?php
            $sql = "SELECT id, descripcion FROM tipo_habitacion";
            $result = $con->query($sql);

            if ($result->num_rows > 0) {
                while ($row = $result->fetch_assoc()) {
                    echo "<option value='" . $row["id"] . "'>" . $row["descripcion"] . "</option>";
                }
            }
            ?>
        </select><br>
        Baño Privado: <input type="checkbox" name="bano_privado"><br>
        Espacio (m²): <input type="text" name="espacio" required><br>
        Precio: <input type="text" name="precio" required><br>
        Imágenes (máximo 5):
        <input type="file" name="imagenes[]" accept="image/*" multiple><br>
        <input type="submit" value="Guardar">
    </form>
</body>
</html>
