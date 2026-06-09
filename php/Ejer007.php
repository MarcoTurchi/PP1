<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    function calcularVolumen($radio, $altura) {
        $volumen = $radio*$radio*$altura*3.1416;

        echo $volumen;
    }

    calcularVolumen(2, 5);
    ?>
</body>
</html>