<?php

interface Puerta {
    
        public function getAncho();
        public function getAlto();
    
}

class PuertaMadera {
    protected $ancho;
    protected $alto;
    
    public function __construct($ancho,$alto) {
        $this->ancho=$ancho;
        $this->alto=$alto;
        
    }
    
    public function getAncho() {
        return $this->ancho;
    }
    
    public function getAlto() {
         return $this->alto;
    }
    
}

class PuertaFactory {
    public static function crearPuerta($ancho, $alto) {
        return new PuertaMadera($ancho, $alto);
    }
}

//$mi_puerta= new PuertaMadera(80,200);

$mi_puerta=PuertaFactory::crearPuerta(80,200);

?>