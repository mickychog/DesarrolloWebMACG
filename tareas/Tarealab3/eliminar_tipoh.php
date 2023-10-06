
<form method="post" action="eliminar_tipo_habitacion.php">
    <label>Seleccione el Tipo de Habitación a Eliminar:</label>
    <select name="tipo_habitacion_id">
        <?php
        include("conexion.php");
        $sql = "SELECT id, descripcion FROM tipo_habitacion";
        $result = mysqli_query($con, $sql);

        if (mysqli_num_rows($result) > 0) {
            while ($row = mysqli_fetch_assoc($result)) {
                echo "<option value='" . $row["id"] . "'>" . $row["descripcion"] . "</option>";
            }
        } else {
            echo "<option value=''>No hay tipos de habitación disponibles</option>";
        }
        ?>
    </select>

    <input type="submit" value="Eliminar Tipo de Habitación">
</form>
