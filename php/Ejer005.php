<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php

    echo '<p> Con bucle while: <p>';

    $num = 1;
    while ($num <= 10)
    {
    echo $num . " ";
    $num++;
    }

    echo "";

    echo '<p> Con bucle for: <p>';

    $num2 = 1;
    for ($num2=1;$num2<=10;$num2++)
    {
    echo $num2 . " ";
    }
    
    ?>
</body>
</html>