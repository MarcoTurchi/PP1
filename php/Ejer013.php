<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<?php

class Celda {
    private $nroCelda;
    private $texto;

    public function __construct($nroCelda, $texto) {
        $this->nroCelda = $nroCelda;
        $this->texto = $texto;
    }

    public function getNroCelda() {
        return $this->nroCelda;
    }

    public function getTexto() {
        return $this->texto;
    }
}

class Tabla {
    private $celdas = [];

    public function __construct() {
        for ($i = 0; $i < 10; $i++) {
            $this->celdas[] = new Celda($i, "Texto celda $i");
        }
    }

    public function mostrar() {
        echo "<h2>Tabla de una columna y varias filas</h2>";

        echo "<table border='1'>";

        foreach ($this->celdas as $celda) {
            echo "<tr>";
            echo "<td>Celda nro " .
                 $celda->getNroCelda() .
                 ": " .
                 $celda->getTexto() .
                 "</td>";
            echo "</tr>";
        }

        echo "</table>";
    }
}

$tabla = new Tabla();
$tabla->mostrar();

?>

</body>
</html>