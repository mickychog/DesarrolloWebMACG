<!-- Genera un arreglo de números del 1 al 20. Luego, utiliza un ciclo foreach para separar los números en dos arreglos diferentes: 
    uno para los números pares y otro para los números impares. Imprime ambos arreglos al final. -->
<?php 
    $numeros = range(1, 20);
    $pares = [];
    $impares = [];

    foreach ($numeros as $numero) {
        if ($numero % 2 == 0) {
            $pares[] = $numero;
        } else {
            $impares[] = $numero;
        }
    }
  
    echo "Números pares: " . implode(' - ', $pares)."<br>";
    echo "Números impares: " . implode(' - ', $impares);
    
    
    
    
    
    
?>
    