<?php

require("Bebida.php");

class Vinho extends Bebida{

    private $safra;
    private $tipo;

    public function getSafra(){
        return $this->safra;
    }

    public function setSafra($safra){
        $this->$safra = $safra;
    }
    public function getTipo(){
        return $this->tipo;
    }

    public function setTipo($tipo){
        $this->$tipo = $tipo;
    }

    public function mostrarBebida(){
        echo $this->getNome() + ", " + $this->getPreco() + ", " + $this->getTipo (); 
    }

    public function verificarPreco($preco){

        if ($preco < 25) {
            return true;
        }
        return false;
    }
}

