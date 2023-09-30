<?php
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $num_alumnos = intval($_POST["num_alumnos"]);
    
    if ($num_alumnos > 0) {
        echo "<!DOCTYPE html>
        <html>
        <head>
            <title>Insertar Alumnos</title>
        </head>
        <body>
            <h1>Insertar Alumnos</h1>
            <form action='guardar_alumnos.php' method='post'>
                <table>
                    <tr>
                        <th>Nombres</th>
                        <th>Apellidos</th>
                        <th>Cu</th>
                        <th>Sexo</th>
                        <th>Código de Carrera</th>
                    </tr>";
                    
        for ($i = 1; $i <= $num_alumnos; $i++) {
            echo "<tr>
                    <td><input type='text' name='nombres[]' required></td>
                    <td><input type='text' name='apellidos[]' required></td>
                    <td><input type='text' name='cu[]' required></td>
                    <td>
                        <input type='radio' name='sexo[$i]' value='Masculino' required> Masculino
                        <input type='radio' name='sexo[$i]' value='Femenino' required> Femenino
                    </td>
                    <td>
                        <select name='codigo_carrera[]' required>
                            <option value=''>Seleccionar Carrera</option>
                            <!-- Aquí debes obtener y mostrar las opciones de la base de datos -->
                        </select>
                    </td>
                </tr>";
        }

        echo "</table>
                <input type='submit' value='Guardar'>
            </form>
        </body>
        </html>";
    } else {
        echo "Por favor, ingrese un número válido de alumnos.";
    }
} else {
    echo "Acceso no autorizado.";
}
?>
