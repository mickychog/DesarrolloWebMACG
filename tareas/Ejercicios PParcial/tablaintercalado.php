<!DOCTYPE html>
<html>
<head>
    <title>Tabla Intercalada</title>
    <style>
        table {
            border-collapse: collapse;
            width: 50%;
            margin: 20px auto;
        }

        th, td {
            border: 1px solid black;
            padding: 8px;
            text-align: center;
        }

        .rojo {
            background-color: red;
        }

        .amarillo {
            background-color: yellow;
        }

        .verde {
            background-color: green;
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
            // Generar la tabla intercalada por filas
            echo '<table>';
            for ($i = 0; $i < $filas; $i++) {
                echo '<tr>';
                for ($j = 0; $j < $columnas; $j++) {
                    // Calcular el número de fila actual
                    $numeroFila = $i + 1;
                    
                    // Asignar clases CSS en función del número de fila
                    if ($numeroFila % 3 == 1) {
                        echo '<td class="rojo"></td>';
                    } elseif ($numeroFila % 3 == 2) {
                        echo '<td class="amarillo"></td>';
                    } else {
                        echo '<td class="verde"></td>';
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
