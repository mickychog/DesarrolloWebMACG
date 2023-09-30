<?php
session_start();

if (!isset($_SESSION["cola"])) {
    $_SESSION["cola"] = new Cola("Normal");
}

$cola = $_SESSION["cola"];

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    if (isset($_POST["accion"])) {
        if ($_POST["accion"] === "insertardelante") {
            $elemento = $_POST["elemento"];
            $cola->insertardelante($elemento);
        } elseif ($_POST["accion"] === "insertardetras") {
            $elemento = $_POST["elemento"];
            $cola->insertardetras($elemento);
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
    <h1>Cola (<?php echo $cola->mostrar() ? $cola->mostrar()[0] : ""; ?>)</h1>
    <form action="menu_cola.php" method="post">
        <input type="text" name="elemento" placeholder="Elemento">
        <input type="submit" name="accion" value="insertardelante">
        <input type="submit" name="accion" value="insertardetras">
        <input type="submit" name="accion" value="eliminar">
    </form>
    <pre><?php print_r($cola->mostrar()); ?></pre>
</body>
</html>
