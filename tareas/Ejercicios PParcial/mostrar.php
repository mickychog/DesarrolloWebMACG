<!DOCTYPE html>
<html>
<head>
    <title>Mostrar Datos</title>
</head>
<body>
    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Obtener el nombre y la ciudad desde el formulario
        $nombre = $_POST["nombre"];
        $ciudad = $_POST["ciudad"];
        
        // Mostrar el nombre en negrita y la ciudad en rojo
        echo '<p><strong>' . $nombre . '</strong> vive en <span style="color: red;">' . $ciudad . '</span></p>';
    } else {
        echo "No se han proporcionado datos.";
    }
    ?>
</body>
</html>
