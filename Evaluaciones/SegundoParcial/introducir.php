<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
    <h2>Introduce numeros</h2>
    <?php
    if (isset($_GET['cantidad'])) {
        $cantidad = intval($_GET['cantidad']);
        for ($i = 0; $i < $cantidad; $i++) {
            echo "<input type='number' class='numero' ><br>";
        }
        echo "<div id='suma'></div>";
    }
    ?>
</body>
</html>
