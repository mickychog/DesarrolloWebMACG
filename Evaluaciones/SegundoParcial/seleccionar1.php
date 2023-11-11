<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Selección de Mes y Año</title>
    <script src="ajax.js"></script> 
</head>
<body>
    <select id="meses">

        <option value="1">Enero</option>
        <option value="2">Febrero</option>
        <option value="3">Marzo</option>
        <option value="4">Abril</option>
        <option value="5">Mayo</option>
        <option value="6">Junio</option>
        <option value="7">Julio</option>
        <option value="8">Agosto</option>
        <option value="9">Septiembre</option>
        <option value="10">Octubre</option>
        <option value="11">Noviembre</option>
        <option value="12">Diciembre</option>
    </select>
    
    <select id="anios">
        <?php for ($i = 1975; $i <= 2019; $i++) {
            echo "<option value='$i'>$i</option>";
        } ?>
    </select>

    <div id="resultado"></div>

    <script>
        const selectMeses = document.getElementById('meses');
        const selectAnios = document.getElementById('anios');
        const divResultado = document.getElementById('resultado');

        selectMeses.addEventListener('change', actualizarCalendario);
        selectAnios.addEventListener('change', actualizarCalendario);

        function actualizarCalendario() {
            const mesSeleccionado = selectMeses.value;
            const anioSeleccionado = selectAnios.value;

            const xhr = new XMLHttpRequest();
            xhr.onreadystatechange = function() {
                if (xhr.readyState === 4 && xhr.status === 200) {
                    divResultado.innerHTML = xhr.responseText;
                }
            };
            xhr.open('GET', `calendario.php?anio=${anioSeleccionado}&mes=${mesSeleccionado}`, true);
            xhr.send();
        }
    </script>
</body>
</html>


