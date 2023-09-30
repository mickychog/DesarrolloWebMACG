<?php
include "Estante.php";

// Inicia la sesión
session_start();

// Inicializar el estante desde la sesión o crear uno nuevo
if (isset($_SESSION["estante"])) {
    $estante = $_SESSION["estante"];
} else {
    $estante = new Estante();
    $_SESSION["estante"] = $estante;
}

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    if (isset($_POST["accion"])) {
        if ($_POST["accion"] === "insertar") {
            $fila = $_POST["fila"];
            $libro = $_POST["libro"];
            $estante->insertarLibro($fila, $libro);
        }
    }
}

// Manejar la acción de "Mostrar" si se ha enviado el formulario
$mostrarFila = null;
$mostrarResultado = "";

if ($_SERVER["REQUEST_METHOD"] === "GET" && isset($_GET["mostrarfila"])) {
    $mostrarFila = $_GET["mostrarfila"];
    $filaMostrada = $estante->mostrar($mostrarFila);

    if (!empty($filaMostrada)) {
        $mostrarResultado .= "Libros en la Fila $mostrarFila:<br>";
        foreach ($filaMostrada as $libro) {
            $mostrarResultado .= $libro . "<br>";
        }
    } else {
        $mostrarResultado .= "La Fila $mostrarFila está vacía.";
    }
}
?>
<!DOCTYPE html>
<html>
<head>
    <title>Estante de Libros</title>
</head>
<body>
    <h1>Estante de Libros</h1>
    <h2>Insertar Libro</h2>
    <form action="ejercicio21.php" method="post">
        <label for="fila">Fila (1-3):</label>
        <input type="number" name="fila" min="1" max="3" required>
        <br>
        <label for="libro">Nombre del Libro:</label>
        <input type="text" name="libro" required>
        <br>
        <input type="hidden" name="accion" value="insertar">
        <input type="submit" value="Insertar Libro">
    </form>

    <h2>Mostrar Libros</h2>
    <form action="ejercicio21.php" method="get">
        <label for="mostrarfila">Mostrar Fila (1-3):</label>
        <input type="number" name="mostrarfila" min="1" max="3" required>
        <input type="submit" value="Mostrar">
    </form>

    <!-- Aquí se muestra el resultado debajo del botón "Mostrar Fila" -->
    <?php echo $mostrarResultado; ?>

    <h2>Armario</h2>
    <pre><?php print_r($estante->mostrarArmario()); ?></pre>
</body>
</html>
