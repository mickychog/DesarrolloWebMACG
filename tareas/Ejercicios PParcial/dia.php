<!DOCTYPE html>
<html>
<head>
    <title>Día de la Semana</title>
    <style>
        ul {
            list-style-type: none;
        }

        li {
            margin: 5px 0; /* Márgenes vertical y horizontal */
        }

        table {
            border-collapse: collapse; /* Colapsar bordes de celda */
            width: 50%; /* Ancho de la tabla */
            margin: 20px auto; /* Centrar la tabla horizontalmente con márgenes */
        }

        th, td {
            border: 1px solid #000; /* Borde de celda de 1px sólido */
            padding: 8px; /* Espacio interno de celda */
            text-align: center; /* Alinear contenido al centro */
        }
    </style>
</head>
<body>
    <h2>Resultado</h2>

    <?php
    // Verificar si se enviaron datos por GET
    if (isset($_GET['n'])) {
        // Obtener el valor de "n" desde la URL
        $n = $_GET['n'];

        // Definir un arreglo con los días de la semana
        $diasSemana = [
            1 => 'Lunes',
            2 => 'Martes',
            3 => 'Miércoles',
            4 => 'Jueves',
            5 => 'Viernes',
            6 => 'Sábado',
            7 => 'Domingo',
        ];

        // Verificar si "n" está dentro del rango válido (1 al 7)
        if ($n >= 1 && $n <= 7) {
            // Mostrar una tabla con dos columnas
            echo '<table>';
            foreach ($diasSemana as $diaNumero => $diaNombre) {
                echo '<tr>';
                echo '<td>' . $diaNombre . '</td>';
                echo '<td>';
                if ($diaNumero == $n) {
                    echo 'X';
                }
                echo '</td>';
                echo '</tr>';
            }
            echo '</table>';
        } else {
            echo "El número ingresado está fuera del rango válido.";
        }
    } else {
        echo "No se ha proporcionado un valor válido.";
    }
    ?>
</body>
</html>

<!-- if ($n >= 1 && $n <= 7) {
            $diaSeleccionado = $diasSemana[$n];
            echo "Has seleccionado el día: $diaSeleccionado";
        } else {
            echo "El número ingresado está fuera del rango válido.";
        }
    } else {
        echo "No se ha proporcionado un valor válido.";
    } -->