<?php
class Letras {
    protected $letras;
    
    function setLetras($letras){
        $this->letras=$letras;
    }
    
    function getLetras(){
        return $this->letras;
    }
}

class LetrasNegrita{
    protected $letras;
    
    function __construct($letras){
        $this->letras=$letras;
    }
    
    function getLetras(){
        return "<b>" . $this->letras->getLetras() . "<b>";
    }
}

class LetrasCursiva{
    protected $letras;
    
    function __construct($letras){
        $this->letras=$letras;
    }
    
    function getLetras(){
        return "<i>" . $this->letras->getLetras() . "<i>";
    }
}

$letras_normales=new Letras;
$letras_normales->setLetras("ABC");

$letras_negrita=new LetrasNegrita($letras_normales);
$letras_cursiva=new LetrasCursiva($letras_normales);

echo $letras_negrita->getLetras();
echo "<br>";
echo $letras_cursiva->getLetras();

?>
