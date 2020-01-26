<?php

class Tarifa{
    private $valortarifa;

    public function getValortarifa()
    {
        return $this->valortarifa;
    }

    public function setValortarifa($valor){
        $this->valortarifa = $valor;
    }

    public function calculotarif(){
        $valor=15000;
        if ($this->getValortarifa() <=5) {
            echo "Tu funcion es gratis!";
        }
        elseif($this->getValortarifa() <=12) {
          echo "Pagas la mitad!"; 
          echo "<br>";
            $total = ($valor / 2);
            echo "Su tarifa es: " . $total;
        }
        elseif ($this->getValortarifa() <=54) {
            echo "Pagas tarifa completa! :)";
        }
        else {
            echo "Tu funcion es gratis! :)";
        }
    }
}

?>