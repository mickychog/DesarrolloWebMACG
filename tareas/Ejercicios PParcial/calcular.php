<?php
$numero = $_POST["numero"];
$opcion = $_POST["opcion"];

function fibonacci($n) {
    if ($n <= 0) {
        return 0;
    } elseif ($n == 1) {
        return 1;
    } else {
        return fibonacci($n - 1) + fibonacci($n - 2);
    }
}

function factorial($n) {
    if ($n <= 1) {
        return 1;
    } else {
        return $n * factorial($n - 1);
    }
}

$resultado = "";

if ($opcion == "Calcular Fibonacci") {
    $resultado = fibonacci($numero);
    $titulo = "Fibonacci";
} elseif ($opcion == "Calcular Factorial") {
    $resultado = factorial($numero);
    $titulo = "Factorial";
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Resultado</title>
</head>
<body>
    <h1><?php echo $titulo; ?> de <?php echo $numero; ?> es:</h1>
    <?php if (!empty($titulo)) { ?>
        <p>El resultado es: <?php echo $resultado; ?></p>
    <?php } ?>
    <p><a href="ejercicio13.html">Volver</a></p>
</body>
</html>
