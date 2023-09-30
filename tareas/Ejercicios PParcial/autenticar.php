<?php
session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["usuario"]) && isset($_POST["contrasena"])) {
    $usuario = $_POST["usuario"];
    $contrasena = $_POST["contrasena"];

    if ($usuario == "admin" && $contrasena == "admin") {
        $_SESSION["usuario"] = "admin";
    } else {
        $_SESSION["usuario"] = "usuario";
    }
}
?>
<!DOCTYPE html>
<html>
<head>
    <title>Autenticación Exitosa</title>
</head>
<body>
    <h1>Autenticación Exitosa</h1>
    <p>La variable de sesión 'usuario' se ha establecido como: <?php echo $_SESSION["usuario"]; ?></p>
    <a href="acceso.php">Ir a la página de acceso</a>
</body>
</html>
