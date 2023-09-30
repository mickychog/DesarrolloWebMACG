<?php
class Utiles {
    private $cadena;

    public function __construct($cadena) {
        $this->cadena = $cadena;
    }

    public function aumentarGuiones($n) {
        $resultado = '';
        $caracteres = str_split($this->cadena);

        foreach ($caracteres as $caracter) {
            $resultado .= $caracter;
            for ($i = 0; $i < $n; $i++) {
                $resultado .= '-';
            }
        }

        return $resultado;
    }
}
?>
