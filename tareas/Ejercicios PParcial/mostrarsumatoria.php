<!DOCTYPE html>
<html>
<head>
    <title>Mostrar Sumatoria de Fibonacci</title>
</head>
<body>
    <h1>Mostrar Sumatoria de Fibonacci</h1>

    <?php
    include 'funciones.php'; // Incluye el archivo funciones.php

    if ($_SERVER["REQUEST_METHOD"] == "GET" && isset($_GET["n"])) {
        $n = $_GET["n"];
        $sumatoria = 0;

        for ($i = 0; $i <= $n; $i++) {
            $sumatoria += fibonacci($i);
        }

        echo "<p>La sumatoria de los primeros $n números de Fibonacci es: $sumatoria</p>";
    } else {
        echo "<p>No se proporcionó un valor válido de n.</p>";
    }
    ?>

    <a href="ejercicio15.html">Volver al formulario</a>
</body>
</html>
