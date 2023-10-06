<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Operaciones CRUD</title>
</head>
<body>
    <h1>Operaciones CRUD para Tipos de Habitación</h1>
    <form action="#" method="post">
        <input type="submit" name="crear" value="Crear Tipo de Habitación">
        <input type="submit" name="leer" value="Leer Tipos de Habitación">
        <input type="submit" name="actualizar" value="Actualizar Tipo de Habitación">
        <input type="submit" name="eliminar" value="Eliminar Tipo de Habitación">
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        if (isset($_POST["crear"])) {
            
            header("Location: crear_tipoh.html");
            exit;
        } elseif (isset($_POST["leer"])) {
      
            header("Location: read_tipo_habitacion.php");
            exit;
        } elseif (isset($_POST["actualizar"])) {

            header("Location: update_tipoh.php");
            exit;
        } elseif (isset($_POST["eliminar"])) {

            header("Location: eliminar_tipoh.php");
            exit;
        }
    }
    ?>
</body>
</html>
