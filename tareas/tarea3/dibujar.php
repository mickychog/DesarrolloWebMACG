<?php
if(isset($_GET['tamano'])) {
    $dimension = (int)$_GET['tamano'];
} else {
    // Redirigir de vuelta al formulario si no se proporciona una dimensión válida
    header("Location: ejercicio3.php");
    exit();
}

$tablero = array();

for ($fila = 0; $fila < $dimension; $fila++) {
    for ($columna = 0; $columna < $dimension; $columna++) {
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
    <title>Tablero de Ajedrez</title>
    <style>
        .tablero {
            display: grid;
            grid-template-columns: repeat(<?php echo $dimension; ?>, 50px);
            grid-template-rows: repeat(<?php echo $dimension; ?>, 50px);
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
    <h1>Tablero de Ajedrez</h1>
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
