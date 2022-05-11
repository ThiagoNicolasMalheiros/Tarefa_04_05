<?php

require ("Bebida.php");

class Refrigerante extends Bebida{

    private $retornavel;

    public function getRetornavel(){
        return $this->retornavel;
    }

    public function setRetornavel($retornavel){
        $this->$retornavel = $retornavel;
    }
    public function mostrarBebida(){
        echo $this->getNome() + ", " + $this->getPreco() + ", " + $this->getRetornavel(); 
    }

    public function verificarPreco($preco){

        if ($preco < 5) {
            return true;
        }
        return false;
    }
}