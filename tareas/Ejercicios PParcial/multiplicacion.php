<!DOCTYPE html>
<html>
<head>
    <title>Resultado de Multiplicación</title>
</head>
<body>
    <h1>Resultado de Multiplicación</h1>
    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["n"])) {
        $n = $_POST["n"];
        $multiplicacion = 1;
        
        for ($i = 1; $i <= $n; $i++) {
            if (isset($_POST["valor$i"])) {
                $valor = $_POST["valor$i"];
                $multiplicacion *= $valor;
            }
        }
        
        echo "<p>El resultado de la multiplicación de los valores es: $multiplicacion</p>";
    } else {
        echo "No se proporcionó un valor válido de n.";
    }
    ?>
</body>
</html>
