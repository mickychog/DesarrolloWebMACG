<?php
class Estante {
    private $fila1 = [];
    private $fila2 = [];
    private $fila3 = [];
    private $tope1 = 0;
    private $tope2 = 0;
    private $tope3 = 0;

    public function insertarLibro($fila, $libro) {
        switch ($fila) {
            case 1:
                $this->fila1[] = $libro;
                $this->tope1++;
                break;
            case 2:
                $this->fila2[] = $libro;
                $this->tope2++;
                break;
            case 3:
                $this->fila3[] = $libro;
                $this->tope3++;
                break;
            default:
                echo "Fila inválida.";
        }
    }

    public function mostrar($fila) {
        switch ($fila) {
            case 1:
                return $this->fila1;
            case 2:
                return $this->fila2;
            case 3:
                return $this->fila3;
            default:
                echo "Fila inválida.";
        }
    }

    public function mostrarArmario() {
        $armario = [
            "Fila 1" => $this->fila1,
            "Fila 2" => $this->fila2,
            "Fila 3" => $this->fila3,
        ];
        return $armario;
    }
}
?>
