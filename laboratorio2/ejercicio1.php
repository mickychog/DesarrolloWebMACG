
<!DOCTYPE html>
<html>
<head>
    <title>Conversion de Unidades</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div>
        <h2>Conversion de Unidades</h2>
        <form method="post" action="">
            <label for="cantidad">Cantidad:</label>
            <input type="number" name="cantidad" id="cantidad" required><br>

            <label for="entrada">Unidad de entrada:</label>
            <select name="entrada" id="entrada" required>
                <option value="mm">Milimetro (mm)</option>
                <option value="cm">Centimetro (cm)</option>
                <option value="dm">Decimetro (dm)</option>
                <option value="m">Metro (m)</option>
                <option value="km">Kilometro (km)</option>
            </select><br>

            <label for="salida">Unidad de salida:</label>
            <select name="salida" id="salida" required>
                <option value="mm">Milimetro (mm)</option>
                <option value="cm">Centimetro (cm)</option>
                <option value="dm">Decimetro (dm)</option>
                <option value="m">Metro (m)</option>
                <option value="km">Kilometro (km)</option>
            </select><br>

            <input type="submit" value="Convertir">
        </form>   
    </div>

    <div id=recuadro>
        <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $cantidad = $_POST["cantidad"];
            $entrada = $_POST["entrada"];
            $salida = $_POST["salida"];

            $conversiones = [
                "mm" => 1,
                "cm" => 0.1,
                "dm" => 0.01,
                "m" => 0.001,
                "km" => 0.000001
            ];

            
            $resultado = $cantidad * ($conversiones[$salida] / $conversiones[$entrada]);

            echo "<p>Resultado: $cantidad $entrada equivale a $resultado $salida</p>";
        }
        ?>
</div>
    
</body>
</html>
