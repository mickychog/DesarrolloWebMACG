<?php
    $filas = $_GET['filas'];
    $columnas = $_GET['columnas'];

$tablero = array();

for ($fila = 0; $fila < $filas; $fila++) {
    for ($columna = 0; $columna < $columnas; $columna++) {
        if (($fila + $columna) % 2 == 0) {
            $tablero[$fila][$columna] = 'blanco';
        } else {
            $tablero[$fila][$columna] = 'negro';
        }
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Tablero </title>
    <style>
        .tablero {
            display: grid;
            grid-template-columns: repeat(<?php echo $columnas; ?>, 50px);
            grid-template-rows: repeat(<?php echo $filas; ?>, 50px);
        }
        
        .casilla {
            width: 50px;
            height: 50px;
            border: 1px solid black;
        }
        
        .blanco {
            background-color: white;
        }
        
        .negro {
            background-color: black;
        }
    </style>
</head>
<body>
    <h1>Tablero</h1>
    <div class="tablero">
        <?php
        foreach ($tablero as $fila) {
            foreach ($fila as $casilla) {
                echo '<div class="casilla ' . $casilla . '"></div>';
            }
        }
        ?>
    </div>
</body>
</html>
