<?php
session_start();

class Cola {
    private $tipo;
    private $elementos;

    public function __construct($tipo) {
        $this->tipo = $tipo;
        $this->elementos = [];
    }

    public function insertarDelante($elemento) {
        if ($this->tipo === 'dobleentrada') {
            array_unshift($this->elementos, $elemento);
        } else {
            echo "Operación no válida para el tipo de cola '$this->tipo'.";
        }
    }

    public function insertarDetras($elemento) {
        array_push($this->elementos, $elemento);
    }

    public function eliminar() {
        if (!empty($this->elementos)) {
            if ($this->tipo === 'dobleentrada') {
                return array_shift($this->elementos);
            } else {
                return array_pop($this->elementos);
            }
        } else {
            return null; // Cola vacía
        }
    }

    public function mostrar() {
        return $this->elementos;
    }
}

// Inicializar la cola desde la sesión o crear una nueva
if (isset($_SESSION["cola"])) {
    $cola = $_SESSION["cola"];
} else {
    // Por defecto, se crea una cola normal
    $cola = new Cola('normal');
    $_SESSION["cola"] = $cola;
}

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    if (isset($_POST["accion"])) {
        if ($_POST["accion"] === "insertar_delante" && isset($_POST["elemento"])) {
            $elemento = $_POST["elemento"];
            $cola->insertarDelante($elemento);
        } elseif ($_POST["accion"] === "insertar_detras" && isset($_POST["elemento"])) {
            $elemento = $_POST["elemento"];
            $cola->insertarDetras($elemento);
        } elseif ($_POST["accion"] === "eliminar") {
            $cola->eliminar();
        }
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Cola</title>
</head>
<body>
    <h1>Cola (Tipo: <?= $cola->mostrarTipo(); ?>)</h1>

    <h2>Operaciones</h2>
    <form action="cola.php" method="post">
        <?php if ($cola->mostrarTipo() === 'dobleentrada') { ?>
            <label for="elemento">Elemento:</label>
            <input type="text" name="elemento" required>
            <br>
            <input type="submit" name="accion" value="Insertar Delante">
        <?php } ?>

        <label for="elemento">Elemento:</label>
        <input type="text" name="elemento" required>
        <br>
        <input type="submit" name="accion" value="Insertar Detras">
        <input type="submit" name="accion" value="Eliminar">
    </form>

    <h2>Contenido de la Cola</h2>
    <pre><?= print_r($cola->mostrar()); ?></pre>
</body>
</html>
