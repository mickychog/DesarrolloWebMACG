<!DOCTYPE html>
<html>
<head>
    <title>Resultado de la Suma</title>
    <style>
        table {
            border-collapse: collapse;
            width: 50%;
            margin: 0 auto;
        }

        th, td {
            border: 1px solid black;
            padding: 8px;
            text-align: center;
        }

        th {
            background-color: green;
            color: white;
        }
    </style>
</head>
<body>
    <?php
    if ($_SERVER["REQUEST_METHOD"] == "GET") {
        // Obtener los números desde el formulario
        $numero1 = $_GET["numero1"];
        $numero2 = $_GET["numero2"];

        // Calcular la suma
        $resultado = $numero1 + $numero2;
        
        // Imprimir el resultado en una tabla con bordes y centrada
        echo '<table>';
        echo '<tr>';
        echo '<th>Número 1</th>';
        echo '<th>+</th>';
        echo '<th>Número 2</th>';
        echo '<th>=</th>';
        echo '<th>Resultado</th>';
        echo '</tr>';
        echo '<tr>';
        echo '<td>' . $numero1 . '</td>';
        echo '<td>+</td>';
        echo '<td>' . $numero2 . '</td>';
        echo '<td>=</td>';
        echo '<td>' . $resultado . '</td>';
        echo '</tr>';
        echo '</table>';
    } else {
        echo "No se han proporcionado datos.";
    }
    ?>
</body>
</html>
