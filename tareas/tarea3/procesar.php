

<?php 
include("funcionpalabra.php");
$cadena=$_GET['cadena'];

echo "La Palabra mas larga es: ",palabramaslarga($cadena);
?>