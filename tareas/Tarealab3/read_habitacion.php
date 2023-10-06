<?php
include("conexion.php");

$sql = "SELECT h.id, h.nro, th.descripcion as tipo, h.bano_privado, h.espacio, h.precio 
        FROM habitacion h
        INNER JOIN tipo_habitacion th ON h.id_tipo_habitacion = th.id";

$result = $con->query($sql);

// Definir el filtro por tipo de habitación
$filtro_tipo = isset($_GET["filtro_tipo"]) ? $_GET["filtro_tipo"] : '';

// Consulta para obtener la lista de habitaciones
$sql = "SELECT h.id, h.nro, th.descripcion as tipo, h.bano_privado, h.espacio, h.precio 
        FROM habitacion h
        INNER JOIN tipo_habitacion th ON h.id_tipo_habitacion = th.id";

// Aplicar el filtro por tipo de habitación si se selecciona uno
if (!empty($filtro_tipo)) {
    $sql .= " WHERE h.id_tipo_habitacion = $filtro_tipo";
}

$result = $con->query($sql);
?>

<!DOCTYPE html>
<html>
<head>
    <title>Listado de Habitaciones</title>
</head>
<body>
    <h1>Listado de Habitaciones</h1>

    <!-- Filtro por tipo de habitación -->
    <form action="<?php echo $_SERVER["PHP_SELF"]; ?>" method="GET">
        Filtrar por Tipo de Habitación:
        <select name="filtro_tipo">
            <option value="">Todos</option>
            <?php
            // Obtener los tipos de habitación desde la base de datos
            $sql_tipos = "SELECT id, descripcion FROM tipo_habitacion";
            $result_tipos = $con->query($sql_tipos);

            if ($result_tipos->num_rows > 0) {
                while ($row_tipos = $result_tipos->fetch_assoc()) {
                    $selected = ($filtro_tipo == $row_tipos["id"]) ? "selected" : "";
                    echo "<option value='" . $row_tipos["id"] . "' $selected>" . $row_tipos["descripcion"] . "</option>";
                }
            }
            ?>
        </select>
        <input type="submit" value="Filtrar">
    </form>

    <table border="1">
        <tr>
            <th>Número</th>
            <th>Tipo</th>
            <th>Baño Privado</th>
            <th>Espacio (m²)</th>
            <th>Precio</th>
            <th>Acciones</th>
        </tr>
        <?php
        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                echo "<tr>";
                echo "<td>" . $row["nro"] . "</td>";
                echo "<td>" . $row["tipo"] . "</td>";
                echo "<td>" . ($row["bano_privado"] ? "Sí" : "No") . "</td>";
                echo "<td>" . $row["espacio"] . "</td>";
                echo "<td>" . $row["precio"] . "</td>";
                echo "<td><a href='editar_habitacion.php?id=" . $row["id"] . "'>Editar</a> | <a href='eliminar_habitacion.php?id=" . $row["id"] . "'>Eliminar</a></td>";
                echo "</tr>";
            }
        } else {
            echo "<tr><td colspan='6'>No se encontraron habitaciones.</td></tr>";
        }
        ?>
    </table>

</body>
</html>

<?php

$con->close();
?>