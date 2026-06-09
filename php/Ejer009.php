<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php

        echo "Los valores ingresados en el formulario son: " . "<br>";
        echo "Nombre: " . $_POST["Nombre"] . "<br>";
        echo "Apellido: " . $_POST["Apellido"] . "<br>";
        echo "Sexo: " . $_POST["Sexo"] . "<br>";
        echo "Estado civil: " . $_POST["Estadocivil"] . "<br>";
        echo "Recibir informacion: " . ($_POST["Informacion"] ?? 'No') . "<br>";
        echo "Acepto condiciones: " . ($_POST["Condiciones"] ?? 'No') . "<br>";

    ?>
</body>
</html>