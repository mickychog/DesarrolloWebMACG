<?php
// Función para obtener el número de visitas
function obtenerVisitas() {
    if (isset($_COOKIE["visitas"])) {
        return intval($_COOKIE["visitas"]);
    } else {
        return 0;
    }
}

// Verificar si el usuario ha visitado el sitio antes
$visitas = obtenerVisitas();

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    // Procesar la encuesta si se envió
    if (isset($_POST["gusto"])) {
        // Aquí puedes procesar la respuesta de la encuesta si es necesario
    }
}

if ($visitas == 0) {
    // Es la primera visita del usuario
    $visitas = 1;
    setcookie("visitas", $visitas, time() + 3600 * 24 * 30); // Establecer una cookie que expira en 30 días
    echo "Bienvenido a nuestro sitio.";
} else {
    // Incrementar el número de visitas y actualizar la cookie
    $visitas++;
    setcookie("visitas", $visitas, time() + 3600 * 24 * 30); // Establecer una cookie que expira en 30 días

    echo "Gracias por ser un visitante frecuente. Usted ha visitado este sitio $visitas veces.";

    if ($visitas > 5) {
        // Mostrar la encuesta si se ha visitado el sitio más de 5 veces
        echo "<h2>Encuesta:</h2>";
        echo "<form action='encuesta.php' method='post'>";
        echo "<label>¿Qué le gusta de este sitio?</label><br>";
        echo "<input type='radio' name='gusto' value='buena_presentacion'> Buena presentación<br>";
        echo "<input type='radio' name='gusto' value='opciones_que_guste'> Opciones que guste<br>";
        echo "<input type='submit' value='Enviar Encuesta'>";
        echo "</form>";
    }
}
?>

