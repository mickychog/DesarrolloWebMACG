<?php
session_start();
?>
<!DOCTYPE html>
<html>
<head>
    <title>Página de Acceso</title>
</head>
<body>
    <h1>Página de Acceso</h1>
    <p>La variable de sesión 'usuario' es: <?php echo $_SESSION["usuario"]; ?></p>

    <?php
    if (isset($_SESSION["usuario"])) {
        $usuario = $_SESSION["usuario"];
        if ($usuario == "admin") {
            // Menú para el usuario "admin"
            echo "<ul>";
            echo "<li><a href='#'>Crear</a></li>";
            echo "<li><a href='#'>Listar</a></li>";
            echo "<li><a href='#'>Borrar</a></li>";
            echo "<li><a href='ejercicio18.html'>Salir</a></li>";
            echo "</ul>";
        } else {
            // Menú para otros usuarios
            echo "<ul>";
            echo "<li><a href='#'>Listar</a></li>";
            echo "<li><a href='ejercicio18.html'>Salir</a></li>";
            echo "</ul>";
        }
    } else {
        echo "<p>No se ha iniciado sesión.</p>";
    }
    ?>
</body>
</html>
