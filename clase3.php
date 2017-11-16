<?php

class Burger {

    public $tamaño;   
    public $tomate;
    public $lechuga;
    public $pepinillos;
    public $queso;
    public $carne;
    
    public function __construct($tamaño,$tomate,$lechuga, $pepinillos,$queso,$carne){
        $this->tamaño=$tamaño;
        $this->tomate=$tomate;
        $this->lechuga=$lechuga;
        $this->pepinillos=$pepinillos;
        $this->queso=$queso;
        $this->carne=$carne;
    }
}

class BurgerBuilder {

    public $tamaño;
    public $tomate;
    public $lechuga;
    public $pepinillos;
    public $queso;
    public $carne;
    
    public function __construct(int $tamaño){
        $this->tamaño=$tamaño;
    }

    public function añadeTomate(){
        $this->tomate=true;
        return $this;
    }

    public function añadeLechuga(){
        $this->lechuga=true;
        return $this;
    }
    
    
}

//$whooper_junior= new Burger(10,true,true, true, true, true);

$whooper_junior= (new BurgerBuilder(10))->añadeTomate()->añadeLechuga();
