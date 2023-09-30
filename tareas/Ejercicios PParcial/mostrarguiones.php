<!DOCTYPE html>
<html>
<head>
    <title>Resultado de Guiones</title>
</head>
<body>
    <h1>Resultado de Guiones</h1>
    <?php
    include 'utiles.php'; // Incluir el archivo que contiene la clase Utiles

    if ($_SERVER["REQUEST_METHOD"] == "GET" && isset($_GET["cadena"]) && isset($_GET["guiones"])) {
        $cadena = $_GET["cadena"];
        $guiones = $_GET["guiones"];

        // Crear una instancia de la clase Utiles
        $util = new Utiles($cadena);

        // Llamar al método aumentarGuiones
        $resultado = $util->aumentarGuiones($guiones);

        echo "<p>La cadena con $guiones guiones adicionales es:</p>";
        echo "<p>$resultado</p>";
    } else {
        echo "<p>No se proporcionaron los datos necesarios.</p>";
    }
    ?>
    <br>
    <a href="ejercicio17.html">Volver a la página anterior</a>
</body>
</html>
