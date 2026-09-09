<?php
require_once __DIR__ . '/vendor/autoload.php';
$loader = new \Twig\Loader\FilesystemLoader('./templates');
$twig = new \Twig\Environment($loader);

// Se envían los datos que necesitan ambas plantillas incluidas
echo $twig->render('eje05.html.twig', [
    'opcion' => 1,
    'nombre' => 'Marco'
]);