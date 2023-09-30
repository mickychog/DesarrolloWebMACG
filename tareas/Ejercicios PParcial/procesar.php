<?php
session_start();

if (isset($_GET["n"])) {
    $n = intval($_GET["n"]);

    // Guardar el valor de N en una variable de sesión
    $_SESSION["n"] = $n;

    // Crear los vectores 1xN y Nx1 con valores aleatorios
    $vector1xN = [];
    $vectorNx1 = [];
    for ($i = 0; $i < $n; $i++) {
        $vector1xN[] = rand(1, 10); // Valor aleatorio entre 1 y 10
        $vectorNx1[] = rand(1, 10); // Valor aleatorio entre 1 y 10
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
