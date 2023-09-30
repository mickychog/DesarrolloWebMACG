<!-- index.php -->
<?php
class Examen {
    // Propiedades
    private $n;
    private $cadena;
    private $a;
    private $b;
    private $c;

    // Constructor
    public function __construct($n, $cadena, $a, $b, $c) {
        $this->n = $n;
        $this->cadena = $cadena;
        $this->a = $a;
        $this->b = $b;
        $this->c = $c;
    }

    // Método para calcular números Fibonacci hasta n
    public function calcularFibonacci() {
        $fibonacci = [0, 1];
        while (count($fibonacci) < $this->n) {
            $next = $fibonacci[count($fibonacci) - 1] + $fibonacci[count($fibonacci) - 2];
            $fibonacci[] = $next;
        }
        return $fibonacci;
    }

    // Método para calcular y mostrar el número mayor
    public function calcularMayor() {
        $numeros = [$this->a, $this->b, $this->c];
        $mayor = max($numeros);

        $result = "El mayor es: <strong>$mayor</strong>";
        

        return $result;
    }

    // Método para mostrar la cadena como una pirámide
    public function mostrarPiramide() {
        $cadena = $this->cadena;
        $longitud = strlen($cadena);
        $piramide = "";

        for ($i = 0; $i < $longitud; $i++) {
            $subcadena = substr($cadena, 0, $i + 1);
            $piramide .= str_pad($subcadena, $longitud, " ", STR_PAD_LEFT) . "<br>";
        }

        return $piramide;
    }
}

if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["opcion"])) {
    $opcion = $_POST["opcion"];

    if ($opcion == "fibonacci") {
        echo "<h2>Calcular Fibonacci</h2>";
        echo '<form method="post">';
        echo '<label for="n">N:</label>';
        echo '<input type="number" name="n" required>';
        echo '<input type="hidden" name="opcion" value="fibonacci">';
        echo '<input type="submit" value="Calcular">';
        echo '</form>';
    } elseif ($opcion == "mayor") {
        echo "<h2>Calcular Mayor</h2>";
        echo '<form method="post">';
        echo '<label for="a">A:</label>';
        echo '<input type="number" name="a" required>';
        echo '<br>';
        echo '<label for="b">B:</label>';
        echo '<input type="number" name="b" required>';
        echo '<br>';
        echo '<label for="c">C:</label>';
        echo '<input type="number" name="c" required>';
        echo '<input type="hidden" name="opcion" value="mayor">';
        echo '<input type="submit" value="Calcular">';
        echo '</form>';
    } elseif ($opcion == "piramide") {
        echo "<h2>Calcular Pirámide</h2>";
        echo '<form method="post">';
        echo '<label for="cadena">Cadena:</label>';
        echo '<input type="text" name="cadena" required>';
        echo '<input type="hidden" name="opcion" value="piramide">';
        echo '<input type="submit" value="Calcular">';
        echo '</form>';
    }
}

// Procesar los cálculos y mostrar resultados aquí (según la opción seleccionada)
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["opcion"])) {
    $opcion = $_POST["opcion"];
    $resultado = "";

    if ($opcion == "fibonacci" && isset($_POST["n"])) {
        $n = $_POST["n"];
        $examen = new Examen($n, "", 0, 0, 0);
        $resultado = "Números Fibonacci: " . implode(", ", $examen->calcularFibonacci());
    } elseif ($opcion == "mayor" && isset($_POST["a"]) && isset($_POST["b"]) && isset($_POST["c"])) {
        $a = $_POST["a"];
        $b = $_POST["b"];
        $c = $_POST["c"];
        $examen = new Examen(0, "", $a, $b, $c);
        $resultado = $examen->calcularMayor();
    } elseif ($opcion == "piramide" && isset($_POST["cadena"])) {
        $cadena = $_POST["cadena"];
        $examen = new Examen(0, $cadena, 0, 0, 0);
        $resultado = "Pirámide:<br>" . $examen->mostrarPiramide();
    }

    echo "<h2>Resultado:</h2>";
    echo $resultado;
}
?>

<!DOCTYPE html>
<html>
<head>
</head>
<body>
    <br>
<a href="ejercicio14.html">Volver a la página anterior</a>
</body>
</html>