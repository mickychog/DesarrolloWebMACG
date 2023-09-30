<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pregunta 5</title>
    <style>
        table {
            width: 100%;
            border-collapse: collapse;
        }
        th, td {
            border: 1px solid gray;
            padding: 8px;
            text-align: center;
        }
        th {
            background-color: #0070C0;
            color:white:
        }
    </style>
</head>
<body>
    <h1>Lista de Usuarios</h1>
    <?php 
    $con = new mysqli("localhost", "root", "", "bd_alumnos");
    if ($con->connect_error) {
        die("conexion fallada" . $con->connect_error);
    }
    // Consulta la tabla usuarios
    $sql = "SELECT id, correo, nombre, rol FROM usuario";
    $resultado = $con->query($sql);

    if ($resultado->num_rows > 0) {
        echo "<table>";
        echo "<tr>";
        echo "<th>Correo</th>";
        echo "<th>Nombre</th>";
        echo "<th>Rol</th>";
        echo "<th>Operación</th>";
        echo "</tr>";
        while ($row = $resultado->fetch_assoc()) {
            echo "<tr>";
            echo "<td>" . $row["correo"] . "</td>";
            echo "<td>" . $row["nombre"] . "</td>";
            echo "<td>";
            if ($row["rol"] == 1) {
                echo "Administrador";
            } else {
                echo "Usuario";
            }
            echo "</td>";
            echo "<td>";
            if ($row["rol"] == 1) {
                echo "<a style='background-color: #6DFF8E;'href='cambiar.php?id=" . $row["id"] . "&rol=2'>Cambiar a Usuario</a>";
            } else {
                echo "<a style='background-color: #FF4C1C;'href='cambiar.php?id=" . $row["id"] . "&rol=1'>Cambiar a Administrador</a>";
            }
            echo "</td>";
            echo "</tr>";
        }
        echo "</table>";
    } else {
        echo "No se encontraron usuarios.";
    }

    $con->close();
    ?>
</body>
</html>
