<?php

class Singleton{
    
    private static $instancia;
    
    private function __construct(){
        
    }
    
    public function getInstancia(){
        
        if (!self::$instancia){
            self::$instancia = new self();
        }
        return self::$instancia;
    }
}

$parametros1 = Singleton::getInstancia();
$parametros2 = Singleton::getInstancia();

var_dump($parametros1===$parametros2);
?>