<?php
require_once __DIR__ . '/vendor/autoload.php';
$loader = new \Twig\Loader\FilesystemLoader('./templates');
$twig = new \Twig\Environment($loader);

$paises = [
    "espana" => ["nombre" => "España", "lengua" => "Castellano", "moneda" => "Euro"],
    "usa" => ["nombre" => "USA", "lengua" => "Inglés", "moneda" => "Dolar"],
    "argentina" => ["nombre" => "Argentina", "lengua" => "Castellano", "moneda" => "Peso"],
    "brasil" => ["nombre" => "Brasil", "lengua" => "Portugués", "moneda" => "Real"],
    "japon" => ["nombre" => "Japón", "lengua" => "Japonés", "moneda" => "Yen"]
];

echo $twig->render('eje03.html.twig', ['paises' => $paises]);