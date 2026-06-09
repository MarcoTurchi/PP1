<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    class Empleado
    {
        private $nombre;
        private $sueldo;

        function __construct($nombre = "Marco", $sueldo = 1000)
        {
            $this->nombre = $nombre;
            $this->sueldo = $sueldo;
        }

        function pagaImpuesto()
        {
            if ($this->sueldo > 3000) {
                echo "El empleado " . $this->nombre . " debe pagar impuestos.";
            } else {
                echo "El empleado " . $this->nombre . " no debe pagar impuestos.";
            }
        }

    }

    $empleado1 = new Empleado("Juan", 3500);
    $empleado1->pagaImpuesto();
    echo "<br>";
    $empleado2 = new Empleado("Marqui", 2900);
    $empleado2->pagaImpuesto();
    ?>

    <body>

</html>