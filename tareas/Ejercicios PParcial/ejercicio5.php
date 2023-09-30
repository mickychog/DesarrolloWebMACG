<!DOCTYPE html>
<html>
<head>
    <title>Par o Impar</title>
</head>
<body>
    <h2>Determinar si un número es Par o Impar</h2>

    <form method="post" action="">
        Ingrese un número entero positivo: <input type="number" name="numero" required>
        <input type="submit" value="Verificar">
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Obtener el número ingresado desde el formulario y convertirlo en entero
        $numero = intval($_POST["numero"]);

        // Verificar si el número es positivo y entero
        if ($numero > 0) {
            // Determinar si el número es par o impar
            if ($numero % 2 == 0) {
                echo "El número $numero es PAR.";
            } else {
                echo "El número $numero es IMPAR.";
            }
        } else {
            echo "Por favor, ingresa un número entero positivo mayor que cero.";
        }
    }
    ?>
</body>
</html>
