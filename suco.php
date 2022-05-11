<?php

require("Bebida.php");

class Suco extends Bebida{

    private $sabor;

    public function getSabor(){
        return $this->sabor;
    }

    public function setSabor($sabor){
        $this->$sabor = $sabor;
    }

    public function mostrarBebida(){
        echo $this->getNome() + ", " + $this->getPreco() + ", " + $this->getSabor(); 
    }

    public function verificarPreco($preco){

        if ($preco < 2.5) {
            return true;
        }
        return false;
    }
}
