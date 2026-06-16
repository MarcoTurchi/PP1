<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    class Persona
    {
        private $nombre;
        private $edad;
        
        function setEdad($edad)
        {
            $this->edad = $edad;
        }
        function getEdad()
        {
            return $this->edad;
        }
        function setNombre($nombre)
        {
            $this->nombre = $nombre;
        }
        function getNombre()
        {
            return $this->nombre;
        }
    }

    class Empleado extends Persona
    {
        private $sueldo;
        function setSueldo($sueldo)
        {
            $this->sueldo = $sueldo;
        }
        function getSueldo()
        {
            return $this->sueldo;
        }
    }

    //Cargo los valores de Persona
    $persona1 = new Persona(); 
    $persona1->setNombre("Pepe");
    $persona1->setEdad(27);

    //Cargo los valores de Empleado
    $empleado1 = new Empleado(); 
    $empleado1->setNombre("Ramon");
    $empleado1->setEdad(36);
    $empleado1->setSueldo(4000);

    //Muestro los valores de Persona
    echo "Los datos de la persona son: " . "<br>";
    echo "Nombre: " . $persona1->getNombre() . "<br>";
    echo "Edad: " . $persona1->getEdad() . "<br>";

    //Muestro los valores de Empleado
    echo "Los datos del empleado son: " . "<br>";
    echo "Nombre: " . $empleado1->getNombre() . "<br>";
    echo "Edad: " . $empleado1->getEdad() . "<br>";
    echo "Sueldo: " . $empleado1->getSueldo() . "<br>";

    ?>
</body>
</html>