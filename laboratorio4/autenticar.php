<?php
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $usuario = $_POST["usuario"];
    $contrasena = $_POST["contrasena"];

    if ($usuario === 'admin' && $contrasena === '123') {
        session_start();
        $_SESSION["nivel"] = "usuario_autenticado";
        echo json_encode(["autenticado" => true]);
    } else {
        echo json_encode(["autenticado" => false]);
    }
} else {
    echo "Solicitud no válida";
}
?>
