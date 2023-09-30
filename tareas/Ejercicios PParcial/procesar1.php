<?php
session_start();

if (isset($_GET["n"])) {
    $n = intval($_GET["n"]);

    // Guardar el valor de N en una variable de sesión
    $_SESSION["n"] = $n;

    // Inicializar vectores 1xN y Nx1
    $vector1xN = [];
    $vectorNx1 = [];

    // Solicitar al usuario que ingrese los valores para el vector 1xN
    echo "<h1>Ingrese los valores para el vector 1xN:</h1>";
    for ($i = 0; $i < $n; $i++) {
        $valor = readline("Valor $i: ");
        $vector1xN[] = intval($valor);
    }

    // Solicitar al usuario que ingrese los valores para el vector Nx1
    echo "<h1>Ingrese los valores para el vector Nx1:</h1>";
    for ($i = 0; $i < $n; $i++) {
        $valor = readline("Valor $i: ");
        $vectorNx1[] = intval($valor);
    }

    // Realizar la multiplicación de los vectores
    $resultado = 0;
    for ($i = 0; $i < $n; $i++) {
        $resultado += $vector1xN[$i] * $vectorNx1[$i];
    }
} else {
    // Si no se proporcionó el valor de N, redirigir al formulario
    header("Location: formulario.html");
    exit;
}
?>
<!DOCTYPE html>
<html>
<head>
    <title>Multiplicación de Vectores</title>
</head>
<body>
    <h1>Multiplicación de Vectores</h1>
    <p>Valor de N: <?php echo $n; ?></p>
    <h2>Vector 1xN:</h2>
    <pre><?php print_r($vector1xN); ?></pre>
    <h2>Vector Nx1:</h2>
    <pre><?php print_r($vectorNx1); ?></pre>
    <h2>Resultado de la multiplicación:</h2>
    <p><?php echo $resultado; ?></p>
</body>
</html>
