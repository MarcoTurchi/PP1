<?php
require_once __DIR__ . '/vendor/autoload.php';
$loader = new \Twig\Loader\FilesystemLoader('./templates');
$twig = new \Twig\Environment($loader);

$parametro = 0; // Cambiar a 1 para ver el otro encabezado

echo $twig->render('eje04.html.twig', ['opcion' => $parametro]);