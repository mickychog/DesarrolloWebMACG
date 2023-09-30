<?php
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["numero"])) {
    $numero = $_POST["numero"];
    setcookie("numero", $numero, time() + 3600); // Crear una cookie con el número (caduca en 1 hora)
}
header("Location: menu.php");
?>
