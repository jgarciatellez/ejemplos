<?php

trait Hola {
    public function Hola($nombre){
        echo "Hola $nombre";
    }
}

class Persona {
    
    use Hola;
    protected $nombre;
    protected $apellido1;
    protected $apellido2;
    

    function __construct($nombre,$apellido1,$apellido2) {
        $this->nombre =$nombre;
        $this->apellido1=$apellido1;
        $this->apellido2=$apellido2;
 
    }
    function setNombre ($nombre) {
            $this->nombre = $nombre;
    }

    function getNombre() {
        return $this->nombre;
    }

    function setApellido1 ($apellido1) {
        $this->apellido1 = $apellido1;
    }
    
    function getApellido1() {
        return $this->apellido1;
    }

    function setApellido2 ($apellido2) {
        $this->apellido2 = $apellido2;
    }
    
    function getApellido2() {
        return $this->apellido2;
    }
    
}

class PersonaEspaña extends Persona {
    public $documentos;
    
    public function setDocumento(Documento $documento) {
        $this->dni=$documentos[]=$documento;
    }
    
    public function getDocumento() {
        return $this->documentos;
    }
    
    function setPasaporte(Pasaporte $numero_pasaporte){
        $this->pasaporte=$numero_pasaporte;
    }
    
    function getPasaporte(){
        return $this->pasaporte->getPasaporte();
    }
    
    function getApellidos() {
        return $this->getApellido1() . " " . $this->getApellido2();
    }
 
}

class PersonaUSA extends Persona {

    function getApellidos() {
        return $this->getApellido2() . " " . $this->getApellido1();
    }
    
}

interface Documento {
    public function setDocumento($documento);
    public function getDocumento();
}

class Dni implements Documento {
    private $dni;
    

    public function setDocumento($documento) {
        $this->dni=$documento;
    }
    
    
    public function getDocumento(){
        return $this->dni;
    }
    

    public static function comprobarDni($dni) {
        
        $letras= explode(",","T,R,W,A,G,M,Y,F,P,D,X,B,N,J,Z,S,Q,V,H,L,C,K,E");
        if (strlen($dni) < 9){
            $dni="0".$dni;
        }
        $numero=intval($dni);
        $letra=strtoupper(substr($dni,-1));
        if (strlen($dni) == 9 && $letra == $letras[$numero%23]) {
            return true;
        } else {
            return false;
        }
    }
}

class Pasaporte{
    private $pasaporte;
    
    public function __construct($pasaporte) {
        $this->pasaporte=$pasaporte;
    }
    
    
    function getPasaporte(){
        return $this->pasaporte;
    }
    
}

class Libro_Familia{
    private $libro_familia;
    
    public function __construct($libro_familia) {
        $this->libro_familia=$libro_familia;
    }
    
    
    function getLibro_Familia(){
        return $this->libro_familia;
    }
    
}

?>

