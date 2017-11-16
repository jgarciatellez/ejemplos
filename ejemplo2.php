<html>
<body>
<?php
require_once ("clases.php");
$persona_paco= new PersonaEspaña ("Francisco","Rodrigo","López");
echo $persona_paco->getApellidos();
echo "<br>";
$dni= New Dni("07014198A");
$persona_paco->setDocumento($dni);
echo var_dump($persona_paco->getDocumento());
echo "<br>";
$pasaporte = new Pasaporte("4563487964Z");
$persona_paco->setPasaporte($pasaporte);
echo $persona_paco->getPasaporte();
echo "<br>";
?>
</body>
</html>