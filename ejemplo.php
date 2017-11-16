<html>
<body>
<?php
require_once ("clases.php");

$persona_paco= new PersonaEspaña ("Francisco","Rodrigo","López");

if (PersonaEspaña::comprobarDni("07014198A")) {
          $persona_paco->setDni("07014198A");
}
        
echo $persona_paco->getNombre();
echo $persona_paco->getApellidos();
echo $persona_paco->getDni();
echo "<br>";
$persona_paco->Hola("Pepe");
echo "<br>";
$persona_john = new PersonaUSA("John","Smith","McLaren");
echo $persona_john->getNombre();
echo $persona_john->getApellidos();

?>
</body>
</html>
