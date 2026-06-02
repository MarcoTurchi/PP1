<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    $cadena1 = 'Comer verduras';
    $cadena2 = 'es realmente sano';
    $concatenacion = "$cadena1 . $cadena2";

    echo 'La palabra verduras se encuentra en la posicion ' . strpos($concatenacion, 'verduras');

    ?>
</body>
</html>