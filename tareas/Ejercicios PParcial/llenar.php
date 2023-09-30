<?php
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["n"])) {
    $n = $_POST["n"];
    echo "<!DOCTYPE html>";
    echo "<html>";
    echo "<head>";
    echo "<title>Introducir Valores</title>";
    echo "</head>";
    echo "<body>";
    echo "<h1>Introducir Valores</h1>";
    echo "<form action='multiplicacion.php' method='post'>";
    
    for ($i = 1; $i <= $n; $i++) {
        echo "<label for='valor$i'>Valor $i:</label>";
        echo "<input type='number' name='valor$i' required>";
        echo "<br>";
    }
    
    echo "<input type='hidden' name='n' value='$n'>";
    echo "<input type='submit' value='Calcular Multiplicación'>";
    echo "</form>";
    echo "</body>";
    echo "</html>";
} else {
    echo "No se proporcionó un valor válido de n.";
}
?>
