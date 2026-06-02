<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
    $pais = array
    (
        "espana" => array
    (
        "nombre" => "España",
        "lengua" => "Castellano",
        "moneda" => "Euro"
    ),
        "usa" => array
    (
        "nombre" => "USA",
        "lengua" => "Inglés",
        "moneda" => "Dolar"
    ),
        "argentina" => array
    (
        "nombre" => "Argentina",
        "lengua" => "Espaniol",
        "moneda" => "Peso"
    )
);

echo $pais["espana"]["moneda"];
?>

</body>
</html>