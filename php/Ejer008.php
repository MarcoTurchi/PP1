<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php

        function elMayor($num1, $num2) {
            
            if ($num1 > $num2) {
                echo "El mayor es: " . $num1;
            } else if($num2 > $num1) {
                echo "El mayor es: " . $num2;
            } else {
                echo "Son iguales";
            }

        }

        elMayor(10,10);

    ?>
</body>
</html>