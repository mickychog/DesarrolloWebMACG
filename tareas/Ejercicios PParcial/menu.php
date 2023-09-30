<?php
session_start();
if (!isset($_COOKIE["numero"])) {
    header("Location: formulario.html");
    exit;
}
$numero = $_COOKIE["numero"];

// Función para calcular la sumatoria
function calcularSumatoria($n) {
    $resultado = 0;
    for ($i = 1; $i <= $n; $i++) {
        $resultado += $i;
    }
    return $resultado;
}

// Función para calcular el factorial
function calcularFactorial($n) {
    $resultado = 1;
    for ($i = 1; $i <= $n; $i++) {
        $resultado *= $i;
    }
    return $resultado;
}

// Función para calcular la secuencia de Fibonacci
function calcularFibonacci($n) {
    $fibonacci = [];
    $fibonacci[0] = 0;
    $fibonacci[1] = 1;
    for ($i = 2; $i < $n; $i++) {
        $fibonacci[$i] = $fibonacci[$i - 1] + $fibonacci[$i - 2];
    }
    return $fibonacci;
}

// Función para calcular la división
function calcularDivision($n) {
    $resultado = 1 / $n;
    return $resultado;
}

?>
<!DOCTYPE html>
<html>
<head>
    <title>Menú de Operaciones</title>
</head>
<body>
    <h1>Menú de Operaciones</h1>
    <ul>
        <li><a href="?opcion=sumatoria">Sumatoria</a></li>
        <li><a href="?opcion=factorial">Factorial</a></li>
        <li><a href="?opcion=fibonacci">Fibonacci</a></li>
        <li><a href="?opcion=division">Dividir</a></li>
        <li><a href="ejercicio19.html">Salir</a></li>
    </ul>

    <?php
    if (isset($_GET["opcion"])) {
        $opcion = $_GET["opcion"];
        switch ($opcion) {
            case "sumatoria":
                $resultado = calcularSumatoria($numero);
                echo "<h2>Sumatoria de $numero:</h2>";
                echo "<p>El resultado es $resultado</p>";
                break;

            case "factorial":
                $resultado = calcularFactorial($numero);
                echo "<h2>Factorial de $numero:</h2>";
                echo "<p>El resultado es $resultado</p>";
                break;

            case "fibonacci":
                $resultado = calcularFibonacci($numero);
                echo "<h2>Secuencia de Fibonacci para $numero:</h2>";
                echo "<p>" . implode(", ", $resultado) . "</p>";
                break;

            case "division":
                $resultado = calcularDivision($numero);
                echo "<h2>División:</h2>";
                echo "<p>1 dividido por $numero es igual a $resultado</p>";
                break;

            default:
                echo "<p>Opción no válida.</p>";
                break;
        }
    }
    ?>
</body>
</html>
