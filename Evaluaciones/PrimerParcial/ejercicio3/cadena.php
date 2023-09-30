<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultado de la Verificación</title>
</head>
<body style="display: flex; justify-content: center;">
    <?php
    if ($_SERVER["REQUEST_METHOD"] === "POST") {
        $cadena1 = $_POST["cadena1"];
        $cadena2 = $_POST["cadena2"];
        if (strpos($cadena1, $cadena2) !== false) {
            echo "$cadena1 tiene la palabra $cadena2.<br>";
            $cadena1SinCadena2 = str_replace($cadena2, '', $cadena1);
            echo "Cadena 1 sin $cadena2: $cadena1SinCadena2<br>";
        } else {
            echo "$cadena1 no tiene la palabra $cadena2.<br>";
            
        }
    }
    ?>
    
</body>
</div>

</html>
