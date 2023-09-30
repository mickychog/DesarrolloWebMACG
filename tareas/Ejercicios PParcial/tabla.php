<!DOCTYPE html>
<html>
<head>
    <title>Tabla de Multiplicación</title>
    <style>
        table {
            border-collapse: collapse;
            width: 50%;
            margin: 20px auto;
        }

        th, td {
            border: 1px solid gray;
            padding: 8px;
            text-align: center;
        }

        th {
            font-weight: bold;

            background-color: lightgray; /* Fondo gris para la primera fila y columna */
        }
    </style>
</head>
<body>
    <?php
    if ($_SERVER["REQUEST_METHOD"] == "GET") {
        // Obtener el número de filas y columnas desde el formulario
        $filas = $_GET["filas"];
        $columnas = $_GET["columnas"];
        
        // Validar que las filas y columnas sean números positivos
        if ($filas > 0 && $columnas > 0) {
            // Generar la tabla de multiplicación
            echo '<table>';
            for ($i = 0; $i <= $filas; $i++) {
                echo '<tr>';
                for ($j = 0; $j <= $columnas; $j++) {
                    if ($i == 0 && $j == 0) {
                        echo '<th></th>';
                    } elseif ($i == 0) {
                        echo '<th>' . $j . '</th>';
                    } elseif ($j == 0) {
                        echo '<th>' . $i . '</th>';
                    } else {
                        echo '<td>' . ($i * $j) . '</td>';
                    }
                }
                echo '</tr>';
            }
            echo '</table>';
        } else {
            echo "Por favor, ingrese números positivos para filas y columnas.";
        }
    } else {
        echo "No se han proporcionado datos.";
    }
    ?>
</body>
</html>
