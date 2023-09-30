<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultado de la Calculadora</title>
</head>
<body style="display: flex; justify-content: center;">
    <?php
    include 'Calculadora.php'; 

    if ($_SERVER["REQUEST_METHOD"] === "GET") {
    
        $numero1 = $_GET["numero1"];
        $numero2 = $_GET["numero2"];
        $operacion = $_GET["operacion"];

        //instancia de la clase Calculadora
        $calculadora = new Calculadora($numero1, $numero2);

        switch ($operacion) {
            case "sumar":
                $resultado = $calculadora->sumar();
                break;
            case "restar":
                $resultado = $calculadora->restar();
                break;
            case "multiplicar":
                $resultado = $calculadora->multiplicar();
                break;
            case "dividir":
                $resultado = $calculadora->dividir();
                break;
            default:
                $resultado = "Operación no válida.";
                break;
        }

        echo "Resultado de la operación: $resultado";
    }
    ?>
</body>
</html>
