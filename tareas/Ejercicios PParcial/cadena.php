<!DOCTYPE html>
<html>
<head>
    <title>Verificación de Cadena</title>
</head>
<body>
    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Obtener la cadena desde el formulario
        $cadena = $_POST["cadena"];
        
        // Verificar si la cadena contiene la palabra "SCRIPT"
        if (stripos($cadena, "SCRIPT") !== false) {
            echo "La cadena tiene la palabra 'SCRIPT'.<br>";
            // Eliminar la palabra "SCRIPT" de la cadena
            $cadenaSinScript = str_ireplace("SCRIPT", "", $cadena);
            echo "Cadena sin 'SCRIPT': " . $cadenaSinScript;
        } else {
            echo "La cadena no contiene la palabra 'SCRIPT'.<br>";
            echo "Cadena ingresada: " . $cadena;
        }
    } else {
        echo "No se ha proporcionado una cadena.";
    }
    ?>
</body>
</html>
