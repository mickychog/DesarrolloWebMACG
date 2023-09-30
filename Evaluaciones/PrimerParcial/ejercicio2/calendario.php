<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calendario</title>
    <style>

        table {
            width: 100%;
            border-collapse: collapse;
        }
        th, td {
            border: 1px solid #F79646;
            text-align: center;
            padding: 5px;
        }
        th {
            background-color: #F79646;
            color: white;
        }
        tr:nth-child(even) {
            background-color: #FCE0B5; 
        }
        tr:nth-child(odd) {
            background-color: #FDE8D1; 
        }

    </style>
</head>
<body >
    <?php
    if ($_SERVER["REQUEST_METHOD"] === "POST") {

        $mes = $_POST["mes"];
        $anio = $_POST["anio"];
        
        $num_dias = cal_days_in_month(CAL_GREGORIAN, date("m", strtotime($mes)), $anio);
        
        $primer_dia = date("w", strtotime("$anio-$mes-01"));

        $dias_semana = ["Lunes", "Martes", "Miércoles", "Jueves", "Viernes", "Sábado", "Domingo"];

        echo "<h2>Mes: $mes $anio</h2>";
        echo "<table>";
        echo "<tr>";
        foreach ($dias_semana as $dia) {
            echo "<th";
            echo ">$dia</th>";
        }
        echo "</tr>";

        $contador_dias = 1;
        echo "<tr>";
        
        for ($i = 0; $i < $primer_dia; $i++) {
            echo "<td></td>";
        }
        for ($i = $primer_dia; $i < 7; $i++) {
            echo "<td>$contador_dias</td>";
            $contador_dias++;
        }
        echo "</tr>";

        
        while ($contador_dias <= $num_dias) {
            echo "<tr>";
            for ($i = 0; $i < 7 && $contador_dias <= $num_dias; $i++) {
                echo "<td>$contador_dias</td>";
                $contador_dias++;
            }
            echo "</tr>";
        }

        echo "</table>";
        echo '<br><a href="pregunta2.html">Volver a la página anterior</a>';
    }
    ?>
</body>
</html>
