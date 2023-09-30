<!DOCTYPE html>
<html>
<head>
    <title>Área del Triángulo</title>
</head>
<body>
    <h2>Resultado del Área del Triángulo</h2>

    <?php
    // Obtener los valores de "b" y "h" desde la URL
    $b = $_GET['b'];
    $h = $_GET['h'];

    // Calcular el área del triángulo
    $area = ($b * $h) / 2;

    // Mostrar el resultado
    echo "Base (b): $b<br>";
    echo "Altura (h): $h<br>";
    echo "Área del Triángulo: $area";
    ?>
</body>
</html>
